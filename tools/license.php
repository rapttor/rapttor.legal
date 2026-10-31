#!/usr/bin/env php
<?php
declare(strict_types=1);

/**
 * Licence advisor and LICENSE-file writer. Deterministic tag rules, no AI (see licenses/GUIDE.md).
 *
 *   php tools/license.php                                    interactive questions, then suggestions
 *   php tools/license.php --answer=scope=software --answer=source=closed --feature=payments [--json]
 *   php tools/license.php --config=legal.config.json ...     take feature flags from a site config
 *   php tools/license.php --list                             the whole catalogue with its tags
 *   php tools/license.php --pick=MIT --emit=LICENSE [--year=2026 --holder="ACME"] [--config=...]   write the exact text
 *   php tools/license.php ... --write=legal.config.json      store the chosen id (--pick, else the top suggestion) as license.id
 */

require_once dirname(__DIR__) . '/src/bootstrap.php';

use rapttor\legal\Library;

$o = ['answer' => [], 'feature' => [], 'json' => false, 'list' => false, 'config' => null, 'pick' => null, 'emit' => null, 'write' => null, 'year' => null, 'holder' => null];
foreach (array_slice($argv, 1) as $a) {
    if ($a === '--json' || $a === '--list') {
        $o[substr($a, 2)] = true;
    } elseif (preg_match('/^--answer=([a-z_]+)=([a-z0-9_-]+)$/', $a, $m)) {
        $o['answer'][$m[1]] = $m[2];
    } elseif (preg_match('/^--feature=(.+)$/', $a, $m)) {
        $o['feature'][] = $m[1];
    } elseif (preg_match('/^--(config|pick|emit|write|year|holder)=(.*)$/', $a, $m)) {
        $o[$m[1]] = $m[2];
    }
}

$lib = new Library();
$adv = $lib->advisor();
$cfg = $o['config'] !== null ? json_decode((string)file_get_contents($o['config']), true, 512, JSON_THROW_ON_ERROR) : [];
foreach (($cfg['feature'] ?? []) as $k => $v) {
    if ($v) {
        $o['feature'][] = $k;
    }
}
$o['feature'] = array_values(array_unique($o['feature']));

if ($o['list']) {
    foreach ($adv->catalog() as $l) {
        printf("%-34s %-17s %s\n    %s\n", $l['id'], $l['category'], $l['name'], implode(', ', $l['tags']));
    }
    exit(0);
}

if ($o['emit'] !== null) {
    $id = $o['pick'] ?? ($cfg['license']['id'] ?? null);
    if ($id === null) {
        fwrite(STDERR, "--emit needs --pick=<id> (or license.id in --config)\n");
        exit(2);
    }
    $c = $cfg;
    $c['license']['id'] = $id;
    $o['year'] !== null && $c['license']['year'] = $o['year'];
    $o['holder'] !== null && $c['license']['holder'] = $o['holder'];
    file_put_contents($o['emit'], $lib->licenseText($c, $id));
    echo "Wrote {$o['emit']} ($id)\n";
    exit(0);
}

$interactive = stream_isatty(STDIN) && !$o['json'];
$ask = static function (array $q) use (&$o, $interactive): void {
    if (isset($o['answer'][$q['id']]) || !$interactive) {
        return;
    }
    echo "\n{$q['label']}\n";
    foreach ($q['options'] as $i => $opt) {
        echo '  ' . ($i + 1) . ') ' . $opt['label'] . "\n";
    }
    do {
        echo 'Choose 1-' . count($q['options']) . ': ';
        $n = (int)trim((string)fgets(STDIN));
    } while ($n < 1 || $n > count($q['options']));
    $o['answer'][$q['id']] = $q['options'][$n - 1]['id'];
};
foreach ($adv->questions() as $q) { // scope first
    $ask($q);
}
if (!isset($o['answer']['scope'])) {
    fwrite(STDERR, "Missing --answer=scope=software|content|assets\n");
    exit(2);
}
foreach ($adv->questions($o['answer']['scope']) as $q) {
    if ($q['id'] !== 'scope') {
        $ask($q);
    }
}

$res = $adv->recommend($o['answer'], $o['feature']);

if ($o['write'] !== null) {
    $id = $o['pick'] ?? ($res['candidates'][0]['id'] ?? null);
    if ($id === null || $adv->find($id) === null) {
        fwrite(STDERR, "Nothing to write: no suggestion and no valid --pick\n");
        exit(1);
    }
    $target = is_file($o['write']) ? json_decode((string)file_get_contents($o['write']), true, 512, JSON_THROW_ON_ERROR) : [];
    $target['license']['id'] = $id;
    file_put_contents($o['write'], json_encode($target, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n");
    echo "license.id = $id written to {$o['write']}\n";
}

if ($o['json']) {
    echo json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n";
    exit(0);
}

echo "\n";
if ($res['candidates'] === []) {
    echo "No licence satisfies all your answers. Closest options and what they miss:\n";
    foreach ($res['nearest'] as $c) {
        echo "\n  {$c['id']}: {$c['name']}\n";
        foreach ($c['reasons'] as $r) {
            echo "    - $r\n";
        }
    }
    echo "\nRelax one of the answers above, or combine licences (for example open core + proprietary add-ons).\n";
    exit(1);
}
echo 'Suggested (' . count($res['candidates']) . " fit all your answers, best first):\n";
foreach (array_slice($res['candidates'], 0, 3) as $i => $c) {
    echo "\n  " . ($i + 1) . ". {$c['id']}  ({$c['category']}, score {$c['score']})\n     {$c['name']}: {$c['summary']}\n";
    foreach ($c['why'] as $w) {
        echo "     + $w\n";
    }
    foreach ($c['warnings'] as $w) {
        echo "     ! $w\n";
    }
    echo "     Trade-off: {$c['tradeoffs']}\n";
}
if (count($res['candidates']) > 3) {
    echo "\n  Also fit: " . implode(', ', array_column(array_slice($res['candidates'], 3), 'id')) . "\n";
}
echo "\nRuled out (first reason):\n";
foreach ($res['excluded'] as $c) {
    echo sprintf("  %-34s %s\n", $c['id'], $c['reasons'][0]);
}
echo "\nNext: php tools/license.php --pick={$res['candidates'][0]['id']} --emit=LICENSE --holder=\"Your Name\"   (or --write=legal.config.json to publish a licence page)\n";
echo "Custom LicenseRef-* texts and BUSL/FSL parameters need legal review before use.\n";
