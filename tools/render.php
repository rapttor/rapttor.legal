#!/usr/bin/env php
<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/src/bootstrap.php';

use rapttor\legal\Library;
use rapttor\legal\Renderer;

/**
 * Render the documents a configuration publishes, for checking.
 *
 *   php tools/render.php config.json [lang] [outdir] [--all-features]
 *
 * Writes <outdir>/<doc>.md; exits non-zero if any {{...}} survives or a required key is missing.
 */

$cfgFile = $argv[1] ?? '';
if ($cfgFile === '' || !is_file($cfgFile)) {
    fwrite(STDERR, "usage: php tools/render.php config.json [lang] [outdir] [--all-features]\n");
    exit(2);
}
$lib = new Library();
$lang = ($argv[2] ?? 'en');
$outDir = $argv[3] ?? dirname(__DIR__) . '/build';
$cfg = json_decode((string)file_get_contents($cfgFile), true, 512, JSON_THROW_ON_ERROR);
if (in_array('--all-features', $argv, true)) {
    foreach ($lib->catalog()['keys'] as $k => $def) {
        if (!empty($def['flag'])) {
            $cfg['feature'][substr($k, 8)] = true;
        }
    }
}
if (!is_dir($outDir)) {
    mkdir($outDir, 0777, true);
}
$docs = $lib->published($cfg, $lang);
$fail = 0;
foreach ($docs as $d) {
    $missing = [];
    $text = $lib->render($cfg, $d['id'], static fn(string $id) => '/legal/' . str_replace('_', '-', $id), $lang, $missing);
    file_put_contents("$outDir/{$d['id']}.md", $text);
    if ($missing || preg_match('/\{\{|\}\}/', $text)) {
        $fail++;
        fwrite(STDERR, "{$d['id']}: unresolved " . implode(', ', $missing) . "\n");
    }
}
echo count($docs) . " rendered to $outDir" . ($fail ? ", $fail with unresolved keys" : '') . "\n";
exit($fail ? 1 : 0);
