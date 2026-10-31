<?php
declare(strict_types=1);

// Dependency-free runner: php tests/run.php
require_once dirname(__DIR__) . '/src/bootstrap.php';

use rapttor\legal\Library;
use rapttor\legal\Renderer;

$fx = json_decode((string)file_get_contents(__DIR__ . '/fixtures/grammar.json'), true, 512, JSON_THROW_ON_ERROR);
$fail = 0;
foreach ($fx['cases'] as $c) {
    $r = new Renderer($fx['catalog'], $c['config'], $c['urls'] ?? []);
    $missing = [];
    $out = $r->render($c['template'], $r->resolve($c['doc'] ?? []), $missing);
    $miss = array_keys($missing);
    $okMissing = !isset($c['missing']) || $miss === $c['missing'];
    if ($out !== $c['expected'] || !$okMissing) {
        $fail++;
        echo "FAIL {$c['name']}\n  expected: " . json_encode($c['expected']) . "\n  got:      " . json_encode($out) . "\n  missing:  " . json_encode($miss) . "\n";
    }
}

// Transliteration fixtures
$tr = new rapttor\legal\Transliterator();
foreach (json_decode((string)file_get_contents(__DIR__ . '/fixtures/transliteration.json'), true, 512, JSON_THROW_ON_ERROR)['cases'] as $c) {
    if ($tr->toCyrillic($c['in']) !== $c['out']) {
        $fail++;
        echo 'FAIL transliteration ' . json_encode($c['in'], JSON_UNESCAPED_UNICODE) . ' -> ' . $tr->toCyrillic($c['in']) . "\n";
    }
}

// Language resolution and fallback
$lib0 = new Library();
$cfg0 = ['company' => ['name' => 'Acme', 'address' => 'x', 'country' => 'L', 'email' => 'a@b.co', 'website' => 'https://b.co']];
foreach ([['sr_RS', 'sh', true], ['hr', 'sh', true], ['sr-Cyrl', 'sh', true], ['de-AT', 'de', true], ['xx', null, true]] as [$in, $tag, $_]) {
    if ($lib0->normalizeLanguage($in) !== $tag && !($tag === null && $lib0->normalizeLanguage($in) === null)) {
        $fail++;
        echo "FAIL normalizeLanguage($in)\n";
    }
}
if ($lib0->resolveLanguage('xx') !== 'en' || $lib0->resolveLanguage('ja') !== 'en') {
    $fail++;
    echo "FAIL unknown or untranslated languages must resolve to en\n";
}
foreach ($lib0->published($cfg0, 'ja') as $d) {
    if ($d['lang'] !== 'en') {
        $fail++;
        echo "FAIL fallback entry for {$d['id']} not en\n";
    }
}

// Licence advisor fixtures
$adv = new rapttor\legal\Advisor();
foreach (json_decode((string)file_get_contents(__DIR__ . '/fixtures/advisor.json'), true, 512, JSON_THROW_ON_ERROR)['cases'] as $c) {
    $res = $adv->recommend($c['answers'], $c['features'] ?? []);
    $ids = array_column($res['candidates'], 'id');
    $bad = [];
    foreach ($c['include'] ?? [] as $id) {
        in_array($id, $ids, true) || $bad[] = "missing candidate $id";
    }
    foreach ($c['exclude'] ?? [] as $id) {
        in_array($id, $ids, true) && $bad[] = "unexpected candidate $id";
    }
    if (isset($c['top']) && ($ids[0] ?? null) !== $c['top']) {
        $bad[] = 'top is ' . ($ids[0] ?? 'none') . ", expected {$c['top']}";
    }
    if (!empty($c['none']) && $ids !== []) {
        $bad[] = 'expected no candidates, got ' . implode(',', $ids);
    }
    if (!empty($c['none']) && count($res['nearest']) === 0) {
        $bad[] = 'expected nearest options when nothing fits';
    }
    if ($bad) {
        $fail++;
        echo "FAIL advisor {$c['name']}: " . implode('; ', $bad) . "\n";
    }
}

// Every licence text renders with year and holder and leaves no placeholder behind
foreach ($adv->catalog() as $l) {
    $t = (new Library())->licenseText(['company' => ['name' => 'Acme'], 'license' => ['id' => $l['id'], 'year' => '2026']], $l['id']);
    if (preg_match('/\{\{|\}\}/', $t) || strlen($t) < 100) {
        $fail++;
        echo "FAIL licence text {$l['id']}\n";
    }
}

// The licence page renders for every catalogued licence
foreach ($adv->catalog() as $l) {
    $cfgL = ['company' => ['name' => 'Acme', 'address' => 'x', 'country' => 'L', 'email' => 'a@b.co', 'website' => 'https://b.co'], 'license' => ['id' => $l['id']]];
    $miss = [];
    $t = (new Library())->render($cfgL, 'license', static fn(string $id) => "/legal/$id", 'en', $miss);
    if ($miss || preg_match('/\{\{|\}\}/', $t) || !str_contains($t, $l['name'])) {
        $fail++;
        echo "FAIL licence page {$l['id']}: " . implode(',', $miss) . "\n";
    }
}

// Every document in every language renders with every feature on and with none: no leftover tags, no missing keys
$libAll = new Library();
$langsAll = $libAll->availableLanguages(true);
$flagsAll = array_map(static fn($k) => substr($k, 8), array_keys(array_filter($libAll->catalog()['keys'], static fn($d) => !empty($d['flag']))));
foreach ($langsAll as $lg) {
    foreach ([array_fill_keys($flagsAll, true), []] as $on) {
        $cfgX = ['company' => ['name' => 'Acme', 'address' => '1 Main St, Town', 'country' => 'Land', 'email' => 'a@b.co', 'website' => 'https://b.co'], 'feature' => $on, 'law' => ['jurisdiction' => 'hr']];
        foreach ($libAll->published($cfgX, $lg, true) as $d) {
            $miss = [];
            $txt = $libAll->render($cfgX, $d['id'], static fn(string $id, string $l) => "/legal/$l/$id", $lg, $miss, true);
            if ($miss || preg_match('/\{\{|\}\}/', $txt)) {
                $fail++;
                echo "FAIL $lg/{$d['id']} (" . ($on ? 'all features' : 'no features') . '): ' . implode(',', $miss) . "\n";
            }
        }
    }
}
$nLang = count($langsAll);

// The licence page shows the translated summary, the licence text stays English
$libL = new Library();
$cfgL = ['company' => ['name' => 'Acme', 'address' => 'x', 'country' => 'L', 'email' => 'a@b.co', 'website' => 'https://b.co'], 'license' => ['id' => 'MIT']];
foreach (['sh'] as $lg) {
    $miss = [];
    $page = $libL->render($cfgL, 'license', static fn(string $id, string $l) => "/legal/$l/$id", $lg, $miss, true);
    $expect = $libL->licenseOverlay($lg)['MIT']['summary'] ?? '';
    if ($expect === '' || !str_contains($page, $expect) || !str_contains($page, 'Permission is hereby granted')) {
        $fail++;
        echo "FAIL licence page summary/text in $lg\n";
    }
}

// Restrictions dataset: every file follows restrictions/SCHEMA.md; activities feed policy.excluded_regions
$libR = new Library();
foreach ($libR->restrictionTags() as $tag) {
    $d = $libR->restrictions($tag);
    if (($d['tag'] ?? null) !== $tag || empty($d['title']) || empty($d['checked']) || empty($d['countries'])) {
        $fail++;
        echo "FAIL restrictions/$tag.json header\n";
        continue;
    }
    foreach ($d['countries'] as $c) {
        if (!preg_match('/^[A-Z]{2}$/', $c['code'] ?? '') || empty($c['name']) || !in_array($c['status'] ?? '', ['prohibited', 'licensed', 'restricted'], true)
            || !in_array($c['scope'] ?? '', ['online', 'offline', 'both'], true) || !in_array($c['confidence'] ?? '', ['high', 'medium', 'low'], true)) {
            $fail++;
            echo "FAIL restrictions/$tag.json entry " . json_encode($c['code'] ?? '?') . "\n";
        }
    }
}
$g = $libR->restrictedCountries(['gambling']);
if (!isset($g['SA']) || isset($g['GB'])) {
    $fail++;
    echo "FAIL restrictedCountries(gambling)\n";
}
$w = $libR->withDefaults(['feature' => ['gambling' => true], 'policy' => ['activities' => 'alcohol, nonsense', 'excluded_regions' => 'Atlantis']]);
if (!str_starts_with($w['policy']['excluded_regions'], 'Atlantis, ') || !in_array('SA', $w['policy']['excluded_codes'], true)) {
    $fail++;
    echo "FAIL withDefaults merges activities into excluded_regions\n";
}
$none = $libR->withDefaults(['policy' => ['excluded_regions' => 'Atlantis']]);
if ($none['policy']['excluded_regions'] !== 'Atlantis' || isset($none['policy']['excluded_codes'])) {
    $fail++;
    echo "FAIL no activities: owner list unchanged\n";
}

// Structured tables and claims
$libT = new Library();
$cfgT = ['company' => ['name' => 'Acme', 'address' => 'x', 'country' => 'L', 'email' => 'a@b.co', 'website' => 'https://b.co'],
    'feature' => ['analytics' => true, 'mobile' => true],
    'data' => ['subprocessors' => [['name' => 'Host | Co', 'purpose' => "Hosting\nand backups", 'location' => 'EU']], 'cookies' => [['name' => 'sid', 'provider' => 'Acme', 'purpose' => 'Session', 'category' => 'Strictly necessary', 'duration' => 'Session']]]];
foreach ([['subprocessors', 'sh', '| Naziv | Svrha | Lokacija |', 'Host \\| Co'], ['cookies', 'sh', '| Naziv | Pružalac |', '| sid | Acme |'], ['subprocessors', 'en', '| Name | Purpose | Location |', 'Hosting and backups']] as [$doc, $lg, $head, $cell]) {
    $m = [];
    $txt = $libT->render($cfgT, $doc, static fn(string $id, string $l) => "/$l/$id", $lg, $m, true);
    if (!str_contains($txt, $head) || !str_contains($txt, $cell) || $m) {
        $fail++;
        echo "FAIL structured table $doc/$lg\n";
    }
}
$cl = $libT->claims($cfgT, ['mfa']);
$ids = array_column($cl, 'id');
if (!in_array('cookie-consent-before-tracking', $ids, true) || !in_array('app-account-delete', $ids, true) || in_array('game-end-of-service', $ids, true)) {
    $fail++;
    echo "FAIL claims relevance\n";
}
if (array_column(array_filter($cl, static fn($c) => $c['confirmed']), 'id') !== ['mfa']) {
    $fail++;
    echo "FAIL claims confirmed flag\n";
}

// Default-on consents: age confirmation and upload responsibility are on unless explicitly switched off
$libD = new Library();
$baseD = ['company' => ['name' => 'Acme', 'address' => 'x', 'country' => 'L', 'email' => 'a@b.co', 'website' => 'https://b.co']];
$termsOf = static function (array $cfg) use ($libD): string {
    $m = [];
    return $libD->render($cfg, 'terms', static fn(string $id, string $l) => "/$l/$id", 'en', $m);
};
$claimIds = static fn(array $cfg): array => array_column($libD->claims($cfg), 'id');
$defaults = $termsOf($baseD);
$off = $termsOf($baseD + ['feature' => ['age_gate' => false, 'uploads' => false]]);
$checks = [
    'default terms ask for the legal age' => str_contains($defaults, 'of legal age under the rules of your country'),
    'default terms cover uploads' => str_contains($defaults, 'Private by default'),
    'explicit false switches the age clause off' => !str_contains($off, 'of legal age under the rules of your country'),
    'explicit false switches the uploads clause off' => !str_contains($off, 'Private by default'),
    'age claim is on by default' => in_array('age-confirmation-recorded', $claimIds($baseD), true),
    'age claim disappears when off' => !in_array('age-confirmation-recorded', $claimIds($baseD + ['feature' => ['age_gate' => false]]), true),
    'gambling is opt-in (absent by default)' => !str_contains($defaults, 'gambling is lawful where you live'),
    'gambling clause appears when on' => str_contains($termsOf($baseD + ['feature' => ['gambling' => true], 'policy' => ['gambling_age' => '21']]), 'at least **21** years old, that gambling is lawful'),
    'withDefaults keeps explicit false' => ($libD->withDefaults(['feature' => ['uploads' => false]])['feature']['uploads'] === false),
    'withDefaults adds the defaults to an empty config' => ($libD->withDefaults([])['feature']['age_gate'] === true && $libD->withDefaults([])['feature']['uploads'] === true),
];
foreach ($checks as $name => $ok) {
    if (!$ok) {
        $fail++;
        echo "FAIL default-on: $name\n";
    }
}

// Whole-library check: every shipped profile x flag combination renders cleanly.
$lib = new Library();
$base = ['company' => ['name' => 'Acme', 'address' => '1 Main St, Town', 'country' => 'Land', 'email' => 'a@b.co', 'website' => 'https://b.co']];
$flags = array_map(static fn($k) => substr($k, 8), array_keys(array_filter($lib->catalog()['keys'], static fn($d) => !empty($d['flag']))));
$combos = [[]];
foreach ($lib->presets()['profiles'] as $p) {
    $combos[] = $p['flags'];
}
$combos[] = $flags; // all on
foreach ($flags as $f) {
    $combos[] = [$f]; // each flag alone
}
foreach ($combos as $i => $on) {
    $cfg = $base + ['feature' => array_fill_keys($on, true)];
    if ($lib->missingRequired($cfg)) {
        $fail++;
        echo "FAIL combo $i: missing required " . implode(',', $lib->missingRequired($cfg)) . "\n";
    }
    foreach ($lib->published($cfg) as $d) {
        $miss = [];
        $t = $lib->render($cfg, $d['id'], static fn(string $id) => "/legal/$id", 'en', $miss);
        if ($miss || preg_match('/\{\{|\}\}/', $t)) {
            $fail++;
            echo "FAIL combo " . json_encode($on) . " doc {$d['id']}: unresolved " . implode(',', $miss) . "\n";
        }
    }
}
echo $fail ? "$fail failure(s)\n" : count($fx['cases']) . " grammar cases + " . count($combos) . " feature combinations + $nLang languages OK\n";
exit($fail ? 1 : 0);
