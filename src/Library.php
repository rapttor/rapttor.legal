<?php

declare(strict_types=1);

namespace rapttor\legal;

/**
 * Entry point for host apps and wrappers (for example yii2-legal): lists the documents a site publishes
 * and renders them from the bundled templates. No network access.
 */
final class Library
{
    private string $root;
    /** @var array<string,mixed> */
    private array $catalog;
    /** @var array<string,mixed> */
    private array $manifest;
    /** @var array<string,array<string,mixed>> */
    private array $langs;
    /** @var array<string,mixed> */
    private array $jurisdictions;
    private ?Transliterator $translit = null;

    public function __construct(?string $root = null)
    {
        $this->root = $root ?? dirname(__DIR__);
        $this->catalog = self::json("{$this->root}/placeholders.json");
        $this->manifest = self::json("{$this->root}/manifest.json");
        $this->langs = self::json("{$this->root}/i18n/languages.json")['languages'];
        $this->jurisdictions = self::json("{$this->root}/i18n/jurisdictions.json")['jurisdictions'];
    }

    public function root(): string
    {
        return $this->root;
    }

    /** @return array<string,mixed> */
    public function catalog(): array
    {
        return $this->catalog;
    }

    /** @return array<string,mixed> country presets and product profiles for setup forms */
    public function presets(): array
    {
        return self::json("{$this->root}/presets.json");
    }

    public function advisor(): Advisor
    {
        return new Advisor($this->root);
    }

    /**
     * Exact licence text with the copyright year and holder filled in (no whitespace tidying).
     *
     * @param array<string,mixed> $config nested site config (license.id/year/holder, company.*, law.*)
     */
    public function licenseText(array $config, ?string $id = null): string
    {
        $flat = Renderer::flatten($config);
        $id ??= $flat['license.id'] ?? '';
        if ($this->advisor()->find($id) === null) {
            throw new \InvalidArgumentException("Unknown licence '$id'");
        }
        $flat['license.year'] = ($flat['license.year'] ?? '') !== '' ? $flat['license.year'] : gmdate('Y');
        $r = new Renderer($this->catalog, $flat, []);
        $miss = [];
        return $r->render((string)file_get_contents("{$this->root}/licenses/texts/$id.txt"), $r->resolve([]), $miss, false);
    }

    /**
     * The legal release in force: the installed Composer version of rapttor/legal (for example "0.1.0"), or the date of the
     * newest text ("2026.10.23") when Composer metadata is unavailable. Store it as the "legal version" of the site.
     */
    public function release(): string
    {
        if (class_exists(\Composer\InstalledVersions::class) && \Composer\InstalledVersions::isInstalled('rapttor/legal')) {
            $v = (string)\Composer\InstalledVersions::getPrettyVersion('rapttor/legal');
            if (preg_match('/^v?(\d+\.\d+\.\d+)/', $v, $m)) {
                return $m[1];
            }
        }
        return (string)$this->manifest['release'];
    }

    // ---- languages -------------------------------------------------------------------------------------------

    /**
     * Every language in the catalogue with what is bundled for it.
     *
     * @return array<string,array{tag:string,name:string,dir:string,available:bool,virtual:bool,documents:int,reviewed:int,draft:int}>
     */
    public function languages(): array
    {
        $out = [];
        foreach ($this->langs as $tag => $l) {
            $docs = $this->manifest['languages'][$tag] ?? [];
            $counts = ['reviewed' => 0, 'community' => 0, 'draft' => 0];
            foreach ($docs as $d) {
                $counts[$d['status'] ?? 'reviewed'] = ($counts[$d['status'] ?? 'reviewed'] ?? 0) + 1;
            }
            $virtual = isset($l['virtual']);
            $from = $virtual ? ($this->manifest['languages'][$l['virtual']['from']] ?? []) : [];
            $out[$tag] = [
                'tag' => $tag, 'name' => $l['name'], 'dir' => $l['dir'], 'virtual' => $virtual,
                'available' => ($virtual ? $from : $docs) !== [],
                'documents' => count($virtual ? $from : $docs),
                'reviewed' => $virtual ? count(array_filter($from, static fn($d) => ($d['status'] ?? 'reviewed') !== 'draft')) : $counts['reviewed'] + $counts['community'],
                'draft' => $virtual ? count(array_filter($from, static fn($d) => ($d['status'] ?? '') === 'draft')) : $counts['draft'],
            ];
        }
        return $out;
    }

    /**
     * Languages a site can offer: those with at least one non-draft document (or any document when $drafts is true).
     * English is always offered.
     *
     * @return list<string> tags
     */
    public function availableLanguages(bool $drafts = false): array
    {
        $tags = [];
        foreach ($this->languages() as $tag => $l) {
            if ($tag === $this->manifest['default_lang'] || ($l['available'] && ($drafts ? $l['documents'] > 0 : $l['reviewed'] > 0))) {
                $tags[] = $tag;
            }
        }
        return $tags;
    }

    public function languageName(string $tag): string
    {
        return $this->langs[$tag]['name'] ?? $tag;
    }

    public function direction(string $tag): string
    {
        return $this->langs[$tag]['dir'] ?? 'ltr';
    }

    /** Catalogue tag for any BCP 47 style input ("sr_RS", "de-AT", "pt"), or null if unknown. */
    public function normalizeLanguage(string $input): ?string
    {
        $in = strtolower(str_replace('_', '-', trim($input)));
        foreach ($this->langs as $tag => $l) {
            if (strtolower($tag) === $in || in_array($in, array_map('strtolower', $l['aliases'] ?? []), true)) {
                return $tag;
            }
        }
        if (str_contains($in, '-')) {
            return $this->normalizeLanguage(explode('-', $in)[0]);
        }
        return null;
    }

    /**
     * The language a request ends up with: the requested one if it is offered, else the first offered language in its
     * fallback chain, else English.
     *
     * @param list<string>|null $offer restrict to these tags (a site's own choice); null = all available
     */
    public function resolveLanguage(string $requested, bool $drafts = false, ?array $offer = null): string
    {
        $default = (string)$this->manifest['default_lang'];
        $tag = $this->normalizeLanguage($requested);
        if ($tag === null) {
            return $default;
        }
        $available = $this->availableLanguages($drafts);
        $offer ??= $available;
        foreach ([$tag, ...($this->langs[$tag]['fallback'] ?? [])] as $candidate) {
            if (in_array($candidate, $available, true) && in_array($candidate, $offer, true)) {
                return $candidate;
            }
        }
        return $default;
    }

    // ---- documents -------------------------------------------------------------------------------------------

    /**
     * Documents this configuration publishes in a language. A document missing in that language (or only a draft there)
     * falls back along the language's fallback chain, finally English; the entry says which language it really is in.
     *
     * @param array<string,mixed> $config nested site config
     * @return list<array<string,mixed>> manifest entries plus `lang` (actual), `requested` and `fallback`
     */
    public function published(array $config, string $lang = 'en', bool $drafts = false): array
    {
        $flat = Renderer::flatten($config);
        $default = (string)$this->manifest['default_lang'];
        $req = $this->normalizeLanguage($lang) ?? $default; // what the visitor asked for, even if we have nothing in it
        $want = $this->resolveLanguage($lang, $drafts);
        $chain = array_values(array_unique([$want, ...($this->langs[$want]['fallback'] ?? []), $default]));
        $out = [];
        foreach ($this->manifest['languages'][$default] as $base) {
            if ($base['when'] !== '' && ($flat[$base['when']] ?? '') === '') {
                continue;
            }
            foreach ($chain as $tag) {
                $e = $this->entry($base['id'], $tag, $drafts);
                if ($e !== null) {
                    $out[] = $e + ['requested' => $req, 'fallback' => $tag !== $req];
                    break;
                }
            }
        }
        return $out;
    }

    /** Tags in which a document exists and may be shown (for hreflang and the language switcher). @return list<string> */
    public function documentLanguages(string $docId, bool $drafts = false): array
    {
        $tags = [];
        foreach (array_keys($this->langs) as $tag) {
            if ($this->entry($docId, $tag, $drafts) !== null) {
                $tags[] = $tag;
            }
        }
        return $tags;
    }

    /** @return array<string,mixed>|null */
    private function entry(string $docId, string $tag, bool $drafts): ?array
    {
        $virtual = $this->langs[$tag]['virtual'] ?? null;
        $source = $virtual['from'] ?? $tag;
        foreach ($this->manifest['languages'][$source] ?? [] as $d) {
            if ($d['id'] !== $docId) {
                continue;
            }
            if (!$drafts && ($d['status'] ?? 'reviewed') === 'draft') {
                return null;
            }
            $d['lang'] = $tag;
            if ($virtual !== null) {
                $d['script'] = $virtual['script'];
                $d['title'] = $this->translit()->toCyrillic($d['title']);
            }
            return $d;
        }
        return null;
    }

    /** Config keys still missing for the documents this configuration publishes. @return list<string> */
    public function missingRequired(array $config, string $lang = 'en', bool $drafts = false): array
    {
        $flat = Renderer::flatten($config);
        $missing = [];
        foreach ($this->published($config, $lang, $drafts) as $d) {
            foreach ($d['requires'] as $k) {
                if (trim($flat[$k] ?? '') === '') {
                    $missing[$k] = true;
                }
            }
        }
        return array_keys($missing);
    }

    /**
     * Render one document to Markdown (HTML escaping and Markdown to HTML are the caller's job:
     * render Markdown with raw HTML disabled and sanitise the result, config values are untrusted).
     *
     * @param array<string,mixed> $config nested site config
     * @param callable(string,string):string $urlFor maps (document id, language) to the URL where the site publishes it
     * @param list<string> $missing receives unresolved keys
     */
    public function render(array $config, string $docId, callable $urlFor, string $lang = 'en', array &$missing = [], bool $drafts = false): string
    {
        $published = $this->published($config, $lang, $drafts);
        $entry = null;
        foreach ($published as $d) {
            if ($d['id'] === $docId) {
                $entry = $d;
            }
        }
        if ($entry === null) {
            throw new \InvalidArgumentException("Document '$docId' is not published by this configuration");
        }
        $tag = $entry['lang'];
        $cyr = ($entry['script'] ?? '') === 'cyrillic';
        $base = $this->langs[$tag]['virtual']['from'] ?? $tag;
        $flat0 = Renderer::flatten($config);

        // Governing law, venue and authority from the jurisdiction table in the document's language (site values win).
        $jur = $flat0['law.jurisdiction'] ?? '';
        $jur = $jur !== '' ? $jur : (string)($this->catalog['keys']['law.jurisdiction']['default'] ?? '');
        foreach (['governing', 'venue', 'authority'] as $k) {
            if (($flat0["law.$k"] ?? '') === '') {
                $v = $this->jurisdictions[$jur][$base][$k] ?? $this->jurisdictions[$jur]['en'][$k] ?? '';
                $config['law'][$k] = $cyr ? $this->translit()->toCyrillic($v) : $v;
            }
        }

        if (($flat0['license.id'] ?? '') !== '') {
            $lic = $this->advisor()->find($flat0['license.id']) ?? throw new \InvalidArgumentException("Unknown licence '{$flat0['license.id']}'");
            $i18n = $this->licenseOverlay($base)[$lic['id']] ?? [];
            $summary = $i18n['summary'] ?? $lic['summary'];
            $config['license'] = array_merge($config['license'] ?? [], [
                'name' => $lic['name'], 'spdx' => (string)$lic['spdx'], 'url' => (string)$lic['url'],
                'summary' => $cyr ? $this->translit()->toCyrillic($summary) : $summary,
                'year' => ($flat0['license.year'] ?? '') !== '' ? $flat0['license.year'] : gmdate('Y'),
                'text' => $this->licenseText($config),
            ]);
        }

        $config = $this->withTables($config, $base);
        $urls = [];
        foreach ($published as $d) {
            $urls[$d['id']] = $urlFor($d['id'], $tag);
        }
        $raw = (string)file_get_contents("{$this->root}/{$entry['path']}");
        preg_match('/\A---\n.*?\n---\n(.*)\z/s', $raw, $m);
        $body = $cyr ? $this->translit()->toCyrillic($m[1]) : $m[1];
        $r = new Renderer($this->catalog, Renderer::flatten($config), $urls);
        $miss = [];
        $text = $r->render($body, $r->resolve([
            'id' => $entry['id'], 'title' => $entry['title'], 'version' => $entry['version'],
            'updated' => $entry['updated'], 'lang' => $tag,
        ]), $miss);
        $missing = array_keys($miss);
        return $text;
    }

    /**
     * Claims the published documents make about the product that the owner has to confirm.
     *
     * @param array<string,mixed> $config nested site config
     * @param list<string> $confirmed claim ids the owner has confirmed
     * @return list<array{id:string,doc:string,text:string,confirmed:bool}> only claims relevant to the documents and features of this site
     */
    public function claims(array $config, array $confirmed = [], string $lang = 'en', bool $drafts = false): array
    {
        $flat = Renderer::flatten($config);
        $ids = array_column($this->published($config, $lang, $drafts), 'id');
        $out = [];
        foreach (self::json("{$this->root}/claims.json")['claims'] as $c) {
            if (in_array($c['doc'], $ids, true) && ($c['when'] === '' || ($flat[$c['when']] ?? '') !== '')) {
                $out[] = ['id' => $c['id'], 'doc' => $c['doc'], 'text' => $c['text'], 'confirmed' => in_array($c['id'], $confirmed, true)];
            }
        }
        return $out;
    }

    /**
     * Build the sub-processor and cookie tables from structured data when the site gave lists instead of ready Markdown:
     * data.subprocessors = [[name, purpose, location], ...]; data.cookies = [[name, provider, purpose, category, duration], ...].
     *
     * @param array<string,mixed> $config
     * @return array<string,mixed>
     */
    private function withTables(array $config, string $lang): array
    {
        $headings = self::json("{$this->root}/i18n/tables.json");
        $cols = ['subprocessors' => ['name', 'purpose', 'location'], 'cookies' => ['name', 'provider', 'purpose', 'category', 'duration']];
        foreach ($cols as $key => $fields) {
            $rows = $config['data'][$key] ?? null;
            if (!is_array($rows) || $rows === [] || !empty($config['table'][$key])) {
                continue;
            }
            $cell = static fn($v): string => trim(str_replace(['|', "\r", "\n"], ['\\|', ' ', ' '], (string)$v));
            $head = $headings[$key][$lang] ?? $headings[$key]['en'];
            $md = '| ' . implode(' | ', $head) . " |\n|" . str_repeat('---|', count($head)) . "\n";
            foreach ($rows as $row) {
                $md .= '| ' . implode(' | ', array_map(static fn($f) => $cell($row[$f] ?? ''), $fields)) . " |\n";
            }
            $config['table'][$key] = rtrim($md);
        }
        return $config;
    }

    /** Translated one-line summaries and trade-offs of licences for a language (id => [summary, tradeoffs]). @return array<string,array<string,string>> */
    public function licenseOverlay(string $lang): array
    {
        $f = "{$this->root}/licenses/i18n/$lang.json";
        return is_file($f) ? (self::json($f)['licenses'] ?? []) : [];
    }

    private function translit(): Transliterator
    {
        return $this->translit ??= new Transliterator($this->root);
    }

    /** @return array<string,mixed> */
    private static function json(string $file): array
    {
        return json_decode((string)file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
    }
}
