#!/usr/bin/env php
<?php
declare(strict_types=1);

/**
 * Lint every document against placeholders.json and (re)generate manifest.json.
 *
 *   php tools/build.php          lint + write manifest.json
 *   php tools/build.php --check  lint + fail if manifest.json is out of date (CI)
 *   php tools/build.php --lint   lint only, writes nothing (translators)
 *
 * Template grammar (see SPEC.md):
 *   {{key}}  {{key|default}}  {{#if key}}..{{else}}..{{/if}}  {{#unless key}}..{{/unless}}
 */

$root = dirname(__DIR__);
$check = in_array('--check', $argv, true);
$lintOnly = in_array('--lint', $argv, true); // lint everything, touch no manifest
$errors = [];

$catalog = json_decode((string)file_get_contents("$root/placeholders.json"), true, 512, JSON_THROW_ON_ERROR);
$keys = $catalog['keys'];

$langCatalog = json_decode((string)file_get_contents("$root/i18n/languages.json"), true, 512, JSON_THROW_ON_ERROR)['languages'];
$warnings = [];
$docs = [];
foreach (glob("$root/*/*.md") ?: [] as $file) {
    $lang = basename(dirname($file));
    if (!isset($langCatalog[$lang]) || isset($langCatalog[$lang]['virtual'])) {
        continue; // docs/, licenses/ ... and virtual languages (generated at render time)
    }
    $rel = "$lang/" . basename($file);
    $raw = (string)file_get_contents($file);
    if (!preg_match('/\A---\n(.*?)\n---\n(.*)\z/s', $raw, $m)) {
        $errors[] = "$rel: missing front matter";
        continue;
    }
    $fm = [];
    foreach (explode("\n", $m[1]) as $line) {
        if (preg_match('/^([a-z_]+):\s*(.*)$/', $line, $kv)) {
            $fm[$kv[1]] = $kv[2];
        }
    }
    if (($fm['when'] ?? '') !== '' && !isset($keys[$fm['when']])) {
        $errors[] = "$rel: 'when' must be a key from placeholders.json";
    }
    foreach (['doc', 'title', 'version', 'updated', 'lang', 'summary'] as $f) {
        if (($fm[$f] ?? '') === '') {
            $errors[] = "$rel: front matter '$f' missing";
        }
    }
    if (($fm['doc'] ?? '') !== basename($file, '.md')) {
        $errors[] = "$rel: front matter doc '" . ($fm['doc'] ?? '') . "' must equal the file name";
    }
    if (!preg_match('/^\d+\.\d+\.\d+$/', $fm['version'] ?? '')) {
        $errors[] = "$rel: version must be semver";
    }
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fm['updated'] ?? '')) {
        $errors[] = "$rel: updated must be YYYY-MM-DD";
    }
    if ($lang !== 'en') {
        if (!in_array($fm['status'] ?? '', ['draft', 'community', 'reviewed'], true)) {
            $errors[] = "$rel: translation needs 'status: draft|community|reviewed'";
        }
        if (!preg_match('/^\d+\.\d+\.\d+$/', $fm['translation_of'] ?? '')) {
            $errors[] = "$rel: translation needs 'translation_of: <English version it was made from>'";
        }
        if (($fm['status'] ?? '') === 'reviewed' && ($fm['reviewed_by'] ?? '') === '') {
            $errors[] = "$rel: status reviewed needs 'reviewed_by'";
        }
    }
    if (($fm['lang'] ?? '') !== $lang) {
        $errors[] = "$rel: lang '" . ($fm['lang'] ?? '') . "' does not match directory";
    }
    $docs[$lang][$fm['doc'] ?? basename($file, '.md')] = ['rel' => $rel, 'raw' => $raw, 'fm' => $fm, 'body' => $m[1] . "\n" . $m[2]];
}

$isKnown = static function (string $k, array $docIds) use ($keys): bool {
    if (isset($keys[$k])) {
        return true;
    }
    if (in_array($k, ['doc.id', 'doc.title', 'doc.version', 'doc.updated', 'doc.lang'], true)) {
        return true;
    }
    return str_starts_with($k, 'url.') && in_array(substr($k, 4), $docIds, true);
};

// Translations must keep the structure of the English source: same tags, anchors, link targets, headings, table rows.
$shape = static function (string $body): array {
    preg_match_all('/\{\{\s*(.*?)\s*\}\}/s', $body, $t);
    $tags = array_map(static fn($x) => explode('|', $x)[0], $t[1]);
    sort($tags);
    preg_match_all('/\{#([a-z0-9-]+)\}/', $body, $a);
    sort($a[1]);
    preg_match_all('/\]\(([^)\n]*)\)/', $body, $l);
    sort($l[1]);
    preg_match_all('/^(#{1,6}) /m', $body, $h);
    return ['tags' => $tags, 'anchors' => $a[1], 'links' => $l[1], 'headings' => $h[1], 'rows' => preg_match_all('/^\|/m', $body)];
};
foreach ($docs as $lang => $set) {
    if ($lang === 'en') {
        continue;
    }
    foreach ($set as $id => $d) {
        $src = $docs['en'][$id] ?? null;
        if ($src === null) {
            $errors[] = "{$d['rel']}: no English source en/$id.md";
            continue;
        }
        if (($d['fm']['when'] ?? '') !== ($src['fm']['when'] ?? '')) {
            $errors[] = "{$d['rel']}: 'when' must equal the English document's";
        }
        $a = $shape($src['body']);
        $b = $shape($d['body']);
        foreach ($a as $part => $va) {
            if ($va !== $b[$part]) {
                $diff = is_array($va) ? array_merge(array_diff($va, $b[$part]), array_diff($b[$part], $va)) : ["$va vs $b[$part]"];
                $errors[] = "{$d['rel']}: $part differ from en/$id.md" . ($diff ? ' (' . implode(', ', array_slice(array_unique($diff), 0, 5)) . ')' : '');
            }
        }
        if (($d['fm']['translation_of'] ?? '') !== ($src['fm']['version'] ?? '')) {
            $warnings[] = "{$d['rel']}: stale, made from en {$d['fm']['translation_of']}, English is now {$src['fm']['version']}";
        }
    }
}

$manifestDocs = [];
foreach ($docs as $lang => $set) {
    $ids = array_keys($docs['en'] ?? $set); // url.<doc> may point to any document that exists in English
    foreach ($set as $id => $d) {
        $stack = [];
        $used = [];
        $flags = [];
        $text = $d['body'];
        if (!preg_match_all('/\{\{(.*?)\}\}/s', $text, $tags, PREG_OFFSET_CAPTURE)) {
            $tags = [[], [], []];
        }
        foreach ($tags[1] as [$tag, $off]) {
            $line = substr_count(substr($text, 0, $off), "\n") + 1 - substr_count($d['raw'], "\n", 0, 0);
            $t = trim($tag);
            if (preg_match('/^#(if|unless)\s+([a-z][a-z0-9_.]*)$/', $t, $x)) {
                $stack[] = [$x[1], $line];
                $flags[$x[2]] = true;
                if (!$isKnown($x[2], $ids)) {
                    $errors[] = "{$d['rel']}:$line unknown key '{$x[2]}'";
                }
            } elseif ($t === 'else') {
                if (!$stack || $stack[count($stack) - 1][0] !== 'if') {
                    $errors[] = "{$d['rel']}:$line {{else}} outside {{#if}}";
                }
            } elseif (preg_match('/^\/(if|unless)$/', $t, $x)) {
                $top = array_pop($stack);
                if ($top === null || $top[0] !== $x[1]) {
                    $errors[] = "{$d['rel']}:$line unbalanced {{/{$x[1]}}}";
                }
            } elseif (preg_match('/^([a-z][a-z0-9_.]*)(\|.*)?$/s', $t, $x)) {
                $used[$x[1]] = true;
                if (!$isKnown($x[1], $ids)) {
                    $errors[] = "{$d['rel']}:$line unknown key '{$x[1]}'";
                }
            } else {
                $errors[] = "{$d['rel']}:$line malformed tag '{{{$t}}}'";
            }
        }
        foreach ($stack as [$kind, $line]) {
            $errors[] = "{$d['rel']}:$line unclosed {{#$kind}}";
        }
        // stray braces outside tags
        $stripped = preg_replace('/\{\{.*?\}\}/s', '', $text);
        if (str_contains((string)$stripped, '{{') || str_contains((string)$stripped, '}}')) {
            $errors[] = "{$d['rel']}: stray '{{' or '}}'";
        }
        // duplicate heading anchors
        if (preg_match_all('/\{#([a-z0-9-]+)\}/', $text, $a) && count($a[1]) !== count(array_unique($a[1]))) {
            $errors[] = "{$d['rel']}: duplicate heading anchor";
        }
        $req = [];
        foreach (array_keys($used) as $k) {
            if (!empty($keys[$k]['required'])) {
                $req[] = $k;
            }
        }
        sort($req);
        $flagList = array_values(array_filter(array_keys($flags), static fn($k) => !empty($keys[$k]['flag'])));
        sort($flagList);
        $usedList = array_keys($used);
        sort($usedList);
        $manifestDocs[$lang][$id] = [
            'id' => $id,
            'title' => $d['fm']['title'] ?? $id,
            'version' => $d['fm']['version'] ?? '',
            'updated' => $d['fm']['updated'] ?? '',
            'path' => $d['rel'],
            'sha256' => hash('sha256', $d['raw']),
            'bytes' => strlen($d['raw']),
            'requires' => $req,
            'uses' => $usedList,
            'flags' => $flagList,
            'when' => $d['fm']['when'] ?? '',
            'status' => $d['fm']['status'] ?? 'reviewed',
            'translation_of' => $d['fm']['translation_of'] ?? '',
            'stale' => $lang !== 'en' && ($d['fm']['translation_of'] ?? '') !== ($docs['en'][$id]['fm']['version'] ?? ''),
            'reviewed_by' => $d['fm']['reviewed_by'] ?? '',
        ];
    }
}

// Every language must offer the same documents as the default language.
if (isset($docs['en'])) {
    foreach ($docs as $lang => $set) {
        foreach (array_diff(array_keys($docs['en']), array_keys($set)) as $missing) {
            $warnings[] = "$lang/$missing.md: not translated yet (the plugin falls back)";
        }
    }
}

// Catalog sanity: '@ref' defaults point at real keys.
foreach ($keys as $k => $def) {
    if (isset($def['default']) && is_string($def['default']) && str_starts_with($def['default'], '@')
        && !isset($keys[substr($def['default'], 1)])) {
        $errors[] = "placeholders.json: $k default points to unknown key {$def['default']}";
    }
}

// Licence catalogue: tags known, texts exist and only use known placeholders, advisor rules reference known tags.
$advisor = json_decode((string)file_get_contents("$root/licenses/advisor.json"), true, 512, JSON_THROW_ON_ERROR);
$licCatalog = json_decode((string)file_get_contents("$root/licenses/catalog.json"), true, 512, JSON_THROW_ON_ERROR)['licenses'];
$seen = [];
foreach ($licCatalog as $lic) {
    if (isset($seen[$lic['id']])) {
        $errors[] = "licenses/catalog.json: duplicate id {$lic['id']}";
    }
    $seen[$lic['id']] = true;
    foreach ($lic['tags'] as $t) {
        if (!isset($advisor['tags'][$t])) {
            $errors[] = "licenses/catalog.json: {$lic['id']} uses unknown tag $t";
        }
    }
    $textFile = "$root/licenses/texts/{$lic['id']}.txt";
    if (!is_file($textFile)) {
        $errors[] = "licenses/texts/{$lic['id']}.txt missing";
        continue;
    }
    preg_match_all('/\{\{\s*([^}]*?)\s*\}\}/', (string)file_get_contents($textFile), $mm);
    foreach ($mm[1] as $k) {
        $k = explode('|', $k)[0];
        if (!isset($keys[$k]) && !str_starts_with($k, '#') && !str_starts_with($k, '/')) {
            $errors[] = "licenses/texts/{$lic['id']}.txt: unknown placeholder $k";
        }
    }
}
foreach (glob("$root/licenses/texts/*.txt") ?: [] as $f) {
    if (!isset($seen[basename($f, '.txt')])) {
        $errors[] = 'licenses/texts/' . basename($f) . ' is not in catalog.json';
    }
}
foreach (glob("$root/licenses/i18n/*.json") ?: [] as $f) {
    $tag = basename($f, '.json');
    if (!isset($langCatalog[$tag])) {
        $errors[] = "licenses/i18n/$tag.json: unknown language";
    }
    $ov = json_decode((string)file_get_contents($f), true, 512, JSON_THROW_ON_ERROR)['licenses'] ?? [];
    foreach ($ov as $id => $t) {
        if (!isset($seen[$id])) {
            $errors[] = "licenses/i18n/$tag.json: unknown licence $id";
        }
        foreach (['summary', 'tradeoffs'] as $k) {
            if (($t[$k] ?? '') === '') {
                $errors[] = "licenses/i18n/$tag.json: $id missing $k";
            }
        }
    }
}

foreach ($advisor['questions'] as $q) {
    foreach ($q['options'] as $o) {
        $tagsUsed = array_merge($o['must'] ?? [], $o['must_not'] ?? [], array_keys($o['prefer'] ?? []), ...($o['must_any'] ?? []));
        foreach ($tagsUsed as $t) {
            if (!isset($advisor['tags'][$t])) {
                $errors[] = "licenses/advisor.json: question {$q['id']}/{$o['id']} uses unknown tag $t";
            }
        }
    }
}
foreach ($advisor['features'] as $f => $byScope) {
    if (!is_array($byScope)) {
        continue;
    }
    if ($f[0] !== '_' && !isset($keys[$f])) {
        $errors[] = "licenses/advisor.json: unknown feature $f";
    }
    foreach ($byScope as $scope => $tw) {
        foreach (array_keys((array)$tw) as $t) {
            if ($f[0] !== '_' && !isset($advisor['tags'][$t])) {
                $errors[] = "licenses/advisor.json: feature $f uses unknown tag $t";
            }
        }
    }
}

foreach ($langCatalog as $tag => $l) {
    foreach (array_merge($l['fallback'] ?? [], isset($l['virtual']) ? [$l['virtual']['from']] : []) as $f) {
        if (!isset($langCatalog[$f])) {
            $errors[] = "i18n/languages.json: $tag references unknown language $f";
        }
    }
}
$jur = json_decode((string)file_get_contents("$root/i18n/jurisdictions.json"), true, 512, JSON_THROW_ON_ERROR)['jurisdictions'];
foreach ($jur as $j => $byLang) {
    foreach ($byLang as $tag => $texts) {
        if (!isset($langCatalog[$tag])) {
            $errors[] = "i18n/jurisdictions.json: $j has unknown language $tag";
        }
        foreach (['governing', 'venue', 'authority'] as $k) {
            if (($texts[$k] ?? '') === '') {
                $errors[] = "i18n/jurisdictions.json: $j/$tag missing $k";
            }
        }
    }
    if (!isset($byLang['en'])) {
        $errors[] = "i18n/jurisdictions.json: $j needs an en entry";
    }
}
if ($warnings) {
    fwrite(STDERR, 'warning: ' . implode("\nwarning: ", array_unique($warnings)) . "\n");
}

$claimsData = json_decode((string)file_get_contents("$root/claims.json"), true, 512, JSON_THROW_ON_ERROR)['claims'];
$claimIds = [];
foreach ($claimsData as $c) {
    if (isset($claimIds[$c['id']])) {
        $errors[] = "claims.json: duplicate id {$c['id']}";
    }
    $claimIds[$c['id']] = true;
    if (!isset($docs['en'][$c['doc']])) {
        $errors[] = "claims.json: {$c['id']} refers to unknown document {$c['doc']}";
    }
    if ($c['when'] !== '' && !isset($keys[$c['when']])) {
        $errors[] = "claims.json: {$c['id']} has unknown 'when' {$c['when']}";
    }
}
$tablesData = json_decode((string)file_get_contents("$root/i18n/tables.json"), true, 512, JSON_THROW_ON_ERROR);
foreach (['subprocessors' => 3, 'cookies' => 5] as $k => $n) {
    foreach ($tablesData[$k] as $lg => $heads) {
        if (count($heads) !== $n || !isset($langCatalog[$lg])) {
            $errors[] = "i18n/tables.json: $k/$lg must have $n headings and a known language";
        }
    }
}

$release = '';
foreach ($manifestDocs as $set) {
    foreach ($set as $d) {
        $release = max($release, $d['updated']);
    }
}
ksort($manifestDocs);
foreach ($manifestDocs as &$set) {
    ksort($set);
    $set = array_values($set);
}
unset($set);

$manifest = [
    'schema' => 1,
    'release' => str_replace('-', '.', $release),
    'default_lang' => 'en',
    'placeholders' => 'placeholders.json',
    'placeholders_sha256' => hash_file('sha256', "$root/placeholders.json"),
    'licenses' => [
        'catalog_sha256' => hash_file('sha256', "$root/licenses/catalog.json"),
        'advisor_sha256' => hash_file('sha256', "$root/licenses/advisor.json"),
        'ids' => array_column($licCatalog, 'id'),
    ],
    'languages' => $manifestDocs,
];
$json = json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";

if ($errors) {
    fwrite(STDERR, implode("\n", array_unique($errors)) . "\n");
    fwrite(STDERR, count(array_unique($errors)) . " problem(s)\n");
    exit(1);
}

if ($lintOnly) {
    echo "OK (lint only)\n";
    exit(0);
}
$target = "$root/manifest.json";
if ($check) {
    if (!is_file($target) || file_get_contents($target) !== $json) {
        fwrite(STDERR, "manifest.json is out of date: run php tools/build.php\n");
        exit(1);
    }
    echo "OK\n";
    exit(0);
}
file_put_contents($target, $json);
$n = array_sum(array_map('count', $manifestDocs));
echo "OK: $n documents, release {$manifest['release']}\n";
