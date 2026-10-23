<?php

declare(strict_types=1);

namespace rapttor\legal;

/**
 * Renders a template body with the grammar in SPEC.md. Other languages must behave identically
 * (tests/fixtures/grammar.json).
 */
final class Renderer
{
    /** @param array<string,mixed> $catalog @param array<string,string> $values flat dotted keys */
    public function __construct(private array $catalog, private array $values, private array $urls)
    {
    }

    public static function flatten(array $a, string $prefix = ''): array
    {
        $out = [];
        foreach ($a as $k => $v) {
            $key = $prefix . $k;
            if (is_array($v)) {
                $out += self::flatten($v, $key . '.');
            } else {
                $out[$key] = is_bool($v) ? ($v ? '1' : '') : (string)$v;
            }
        }
        return $out;
    }

    /** Resolve config + defaults + '@ref' + derived values. */
    public function resolve(array $docMeta): array
    {
        $v = $this->values;
        foreach ($this->catalog['keys'] as $k => $def) {
            if (!isset($v[$k]) || $v[$k] === '') {
                $d = $def['default'] ?? '';
                $v[$k] = is_string($d) ? $d : '';
            }
        }
        for ($i = 0; $i < 3; $i++) { // resolve '@ref' chains
            foreach ($v as $k => $val) {
                if (str_starts_with($val, '@') && isset($v[substr($val, 1)])) {
                    $v[$k] = $v[substr($val, 1)];
                }
            }
        }
        foreach ($this->urls as $id => $url) {
            $v["url.$id"] = $url;
        }
        foreach ($docMeta as $k => $val) {
            $v["doc.$k"] = (string)$val;
        }
        return $v;
    }

    public function render(string $body, array $v, array &$missing = [], bool $tidy = true): string
    {
        $tokens = preg_split('/(\{\{.*?\}\})/s', $body, -1, PREG_SPLIT_DELIM_CAPTURE);
        $out = '';
        $stack = []; // each: [active(bool), parentActive(bool), kind]
        $active = static function (array $stack): bool {
            return !$stack || $stack[count($stack) - 1][0];
        };
        foreach ($tokens as $t) {
            if (!preg_match('/^\{\{(.*)\}\}$/s', $t, $m)) {
                if ($active($stack)) {
                    $out .= $t;
                }
                continue;
            }
            $tag = trim($m[1]);
            if (preg_match('/^#(if|unless)\s+(\S+)$/', $tag, $x)) {
                $parent = $active($stack);
                $truthy = ($v[$x[2]] ?? '') !== '' && ($v[$x[2]] ?? '') !== '0';
                $on = $x[1] === 'if' ? $truthy : !$truthy;
                $stack[] = [$parent && $on, $parent, $x[1], $on];
            } elseif ($tag === 'else') {
                $top = array_pop($stack);
                $stack[] = [$top[1] && !$top[3], $top[1], $top[2], $top[3]];
            } elseif (preg_match('/^\/(if|unless)$/', $tag)) {
                array_pop($stack);
            } elseif ($active($stack)) {
                [$key, $default] = array_pad(explode('|', $tag, 2), 2, null);
                $val = $v[$key] ?? '';
                if ($val === '') {
                    if ($default !== null) {
                        $val = $default;
                    } elseif (!empty($this->catalog['keys'][$key]['block'])) {
                        $val = ''; // host supplies blocks (tables); empty is allowed
                    } else {
                        $missing[$key] = true;
                        $val = "[$key]";
                    }
                }
                $out .= $val;
            }
        }
        if (!$tidy) {
            return $out; // verbatim (licence texts)
        }
        // tidy: collapse runs of blank lines left by false blocks, trailing spaces
        $out = preg_replace("/[ \t]+\n/", "\n", $out);
        return trim((string)preg_replace("/\n{3,}/", "\n\n", $out)) . "\n";
    }
}
