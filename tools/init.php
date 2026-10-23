#!/usr/bin/env php
<?php
declare(strict_types=1);

/**
 * Placeholder builder: asks a handful of questions and writes a minimal site config.
 * Everything not asked is derived or defaulted (see placeholders.json).
 *
 *   php tools/init.php                       interactive
 *   php tools/init.php --yes --set company.name="ACME" --set company.address="1 Main St, Town" \
 *        --set company.country=Serbia --set company.email=hi@acme.com --set company.website=https://acme.com \
 *        --preset=rs --profile=saas_b2b --roles --ai --out=legal.config.json
 *
 * The plugin's setup form should be generated from the same two files (placeholders.json, presets.json).
 */

require_once dirname(__DIR__) . '/src/bootstrap.php';

use rapttor\legal\Library;
use rapttor\legal\Renderer;

$root = dirname(__DIR__);
$catalog = json_decode((string)file_get_contents("$root/placeholders.json"), true, 512, JSON_THROW_ON_ERROR);
$presets = json_decode((string)file_get_contents("$root/presets.json"), true, 512, JSON_THROW_ON_ERROR);

$opts = ['set' => [], 'yes' => false, 'roles' => false, 'ai' => false, 'preset' => null, 'profile' => null, 'out' => 'legal.config.json', 'flags' => [], 'license' => null];
foreach (array_slice($argv, 1) as $a) {
    if ($a === '--yes') {
        $opts['yes'] = true;
    } elseif ($a === '--roles') {
        $opts['roles'] = true;
    } elseif ($a === '--ai') {
        $opts['ai'] = true;
    } elseif (preg_match('/^--set=?(.*)$/', $a, $m) && str_contains($m[1], '=')) {
        [$k, $v] = explode('=', $m[1], 2);
        $opts['set'][$k] = $v;
    } elseif (preg_match('/^--(preset|profile|out|license)=(.*)$/', $a, $m)) {
        $opts[$m[1]] = $m[2];
    } elseif (preg_match('/^--flag=(.*)$/', $a, $m)) {
        $opts['flags'][] = $m[1];
    }
}
// "--set key=value" with a space-separated value arrives as two argv entries
for ($i = 1; $i < count($argv); $i++) {
    if ($argv[$i] === '--set' && isset($argv[$i + 1]) && str_contains($argv[$i + 1], '=')) {
        [$k, $v] = explode('=', $argv[$i + 1], 2);
        $opts['set'][$k] = $v;
    }
}

$interactive = !$opts['yes'] && stream_isatty(STDIN);
$ask = static function (string $q, string $default = '') use ($interactive): string {
    if (!$interactive) {
        return $default;
    }
    echo $q . ($default !== '' ? " [$default]" : '') . ': ';
    $line = fgets(STDIN);
    $line = $line === false ? '' : trim($line);
    return $line === '' ? $default : $line;
};
$yes = static fn(string $q, bool $def = false): bool => in_array(strtolower($ask($q . ' (y/n)', $def ? 'y' : 'n')), ['y', 'yes', '1'], true);

$a = $opts['set']; // flat dotted answers
$a['company.name'] ??= $ask('Legal company name');
$brand = $ask('Brand / service name', $a['product.name'] ?? '');
if ($brand !== '' && $brand !== $a['company.name']) {
    $a['product.name'] = $brand;
}
$a['company.address'] ??= $ask('Full address on one line (street, postal code city, country)');
$a['company.email'] ??= $ask('Contact email');
$a['company.website'] ??= $ask('Website URL (https://...)');

// Country preset fills country, governing law, venue and authority
$code = $opts['preset'] ?? ($interactive ? $ask('Country preset (' . implode('/', array_keys($presets['countries'])) . ')', 'rs') : 'other');
$c = $presets['countries'][$code] ?? $presets['countries']['other'];
if (isset($c['jurisdiction'])) {
    $a['law.jurisdiction'] ??= $c['jurisdiction']; // texts come from i18n/jurisdictions.json, in the language of each document
    $a['company.country'] ??= $c['country'];
} else {
    foreach (['country' => 'company.country', 'law.governing' => 'law.governing', 'law.venue' => 'law.venue', 'law.authority' => 'law.authority'] as $src => $dst) {
        $val = $a[$dst] ?? $c[$src] ?? '';
        if ($val === '' && $interactive) {
            $val = $ask($catalog['keys'][$dst]['label'] ?? $dst);
        }
        if ($val !== '') {
            $a[$dst] = $val;
        }
    }
}

// Role mailboxes: only if they really exist on the domain; otherwise everything goes to company.email
if (!$opts['roles'] && $interactive) {
    $opts['roles'] = $yes('Do privacy@ and legal@ mailboxes exist on your domain?');
}
if ($opts['roles'] && !empty($a['company.email'])) {
    $domain = substr((string)strrchr($a['company.email'], '@'), 1) ?: (parse_url($a['company.website'] ?? '', PHP_URL_HOST) ?: '');
    foreach ($presets['role_mailboxes'] as $k => $tpl) {
        $a['company.' . $k] ??= sprintf($tpl, $domain);
    }
}

// Features: a profile sets a base, then optional tweaks
$flags = [];
$profile = $opts['profile'] ?? ($interactive ? $ask('Profile (' . implode('/', array_keys($presets['profiles'])) . ')', 'website') : 'website');
foreach ($presets['profiles'][$profile]['flags'] ?? [] as $f) {
    $flags[$f] = true;
}
if ($opts['ai'] || ($interactive && $yes('Does it include AI-assisted features?'))) {
    $flags['ai'] = true;
}
foreach ($opts['flags'] as $f) {
    $flags[$f] = true;
}
if ($interactive) {
    $known = array_map(static fn($k) => substr($k, 8), array_keys(array_filter($catalog['keys'], static fn($d, $k) => !empty($d['flag']), ARRAY_FILTER_USE_BOTH)));
    $extra = $ask('Other features to switch on, comma separated (' . implode(', ', array_diff($known, array_keys($flags))) . ')');
    foreach (array_filter(array_map('trim', explode(',', $extra))) as $f) {
        $flags[$f] = true;
    }
}

// Optional identity details
if ($interactive && $yes('Add registration number, tax ID, representative?')) {
    foreach (['company.reg_id', 'company.tax_id', 'company.representative'] as $k) {
        $v = $ask($catalog['keys'][$k]['label'] ?? $k);
        if ($v !== '') {
            $a[$k] = $v;
        }
    }
}
if ($flags && !empty($flags['processor_role']) && $interactive && ($e = $ask('Data Protection Officer email (Enter if none)')) !== '') {
    $a['dpo.email'] = $e;
}

if ($opts['license'] !== null) {
    $a['license.id'] = $opts['license']; // pick one with: php tools/license.php
}

// Validate required, unknown keys
$problems = [];
foreach ($catalog['keys'] as $k => $d) {
    if (!empty($d['required']) && trim($a[$k] ?? '') === '') {
        $problems[] = "missing required value: $k ({$d['label']})";
    }
}
foreach (array_keys($a) as $k) {
    if (!isset($catalog['keys'][$k])) {
        $problems[] = "unknown key: $k";
    }
}
if (isset($a['license.id']) && (new rapttor\legal\Advisor())->find($a['license.id']) === null) {
    $problems[] = "unknown licence: {$a['license.id']} (see php tools/license.php --list)";
}
foreach (array_keys($flags) as $f) {
    if (!isset($catalog['keys']["feature.$f"])) {
        $problems[] = "unknown feature: $f";
    }
}
if ($problems) {
    fwrite(STDERR, implode("\n", $problems) . "\n");
    exit(1);
}

// Nest and write
$cfg = [];
foreach ($a as $k => $v) {
    $ref = &$cfg;
    foreach (explode('.', $k) as $part) {
        $ref = &$ref[$part];
    }
    $ref = $v;
    unset($ref);
}
$cfg['feature'] = $flags ? array_fill_keys(array_keys($flags), true) : [];
ksort($cfg);
file_put_contents($opts['out'], json_encode($cfg, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n");

// Dry-run render so the owner sees immediately that every document resolves
$lib = new Library();
$pub = $lib->published($cfg);
$bad = 0;
foreach ($pub as $d) {
    $miss = [];
    $lib->render($cfg, $d['id'], static fn(string $id) => '/legal/' . str_replace('_', '-', $id), 'en', $miss);
    $bad += $miss ? 1 : 0;
}
$set = count(Renderer::flatten($cfg));
echo "Wrote {$opts['out']} ($set values; " . count($catalog['keys']) . " keys available, the rest are derived or defaulted)\n";
echo $bad ? "WARNING: $bad document(s) still have unresolved keys\n" : "All " . count($pub) . " documents for this configuration render cleanly.\n";
exit($bad ? 1 : 0);
