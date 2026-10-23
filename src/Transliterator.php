<?php

declare(strict_types=1);

namespace rapttor\legal;

/**
 * Serbian Latin to Cyrillic, deterministic (a fixed letter mapping, no AI). Applied to template text only: placeholders,
 * link targets, anchors, code, URLs, e-mail addresses, HTML tags and the brands and acronyms listed in i18n/keep-latin.txt stay Latin.
 * Known limit: the digraphs nj/lj/dž are mapped to њ/љ/џ except in the few words listed in EXCEPTIONS; add words there if a text needs it.
 */
final class Transliterator
{
    /** Words where the letters are separate (n+j, d+ž): substring => index after which to split. */
    private const EXCEPTIONS = ['injek' => 2, 'konjug' => 3, 'konjunk' => 3, 'nadž' => 3, 'podž' => 3];

    private const DIGRAPHS = [
        'Lj' => 'Љ', 'LJ' => 'Љ', 'lj' => 'љ', 'Nj' => 'Њ', 'NJ' => 'Њ', 'nj' => 'њ', 'Dž' => 'Џ', 'DŽ' => 'Џ', 'dž' => 'џ',
    ];

    private const LETTERS = [
        'A' => 'А', 'B' => 'Б', 'V' => 'В', 'G' => 'Г', 'D' => 'Д', 'Đ' => 'Ђ', 'E' => 'Е', 'Ž' => 'Ж', 'Z' => 'З', 'I' => 'И',
        'J' => 'Ј', 'K' => 'К', 'L' => 'Л', 'M' => 'М', 'N' => 'Н', 'O' => 'О', 'P' => 'П', 'R' => 'Р', 'S' => 'С', 'T' => 'Т',
        'Ć' => 'Ћ', 'U' => 'У', 'F' => 'Ф', 'H' => 'Х', 'C' => 'Ц', 'Č' => 'Ч', 'Š' => 'Ш',
        'a' => 'а', 'b' => 'б', 'v' => 'в', 'g' => 'г', 'd' => 'д', 'đ' => 'ђ', 'e' => 'е', 'ž' => 'ж', 'z' => 'з', 'i' => 'и',
        'j' => 'ј', 'k' => 'к', 'l' => 'л', 'm' => 'м', 'n' => 'н', 'o' => 'о', 'p' => 'п', 'r' => 'р', 's' => 'с', 't' => 'т',
        'ć' => 'ћ', 'u' => 'у', 'f' => 'ф', 'h' => 'х', 'c' => 'ц', 'č' => 'ч', 'š' => 'ш',
    ];

    /** @var list<string> */
    private array $keep;

    public function __construct(?string $root = null)
    {
        $file = ($root ?? dirname(__DIR__)) . '/i18n/keep-latin.txt';
        $this->keep = is_file($file) ? array_values(array_filter(array_map('trim', (array)file($file)), static fn($l) => $l !== '' && $l[0] !== '#')) : [];
        usort($this->keep, static fn($a, $b) => strlen($b) <=> strlen($a));
    }

    public function toCyrillic(string $text): string
    {
        $protected = [
            '```.*?```',                      // fenced code
            '`[^`\n]*`',                      // inline code
            '\{\{.*?\}\}',                    // template tags
            '\]\([^)\n]*\)',                  // markdown link target
            '\{#[a-z0-9-]+\}',                // heading anchor
            '<[^>\n]+>',                      // html tag
            'https?://[^\s)>\]]+',            // url
            '[\w.+-]+@[\w-]+(?:\.[\w-]+)+',   // e-mail
        ];
        foreach ($this->keep as $w) {
            $protected[] = preg_quote($w, '~');
        }
        $re = '~(' . implode('|', $protected) . ')~su';
        $parts = preg_split($re, $text, -1, PREG_SPLIT_DELIM_CAPTURE) ?: [$text];
        $out = '';
        foreach ($parts as $i => $part) {
            $out .= $i % 2 === 1 ? $part : $this->convert($part);
        }
        return $out;
    }

    private function convert(string $s): string
    {
        // Split exceptions with a zero-width marker so the digraph rules do not fire.
        foreach (self::EXCEPTIONS as $ex => $at) {
            foreach ([$ex, mb_strtoupper(mb_substr($ex, 0, 1)) . mb_substr($ex, 1)] as $form) {
                $s = str_replace($form, mb_substr($form, 0, $at) . "\u{0001}" . mb_substr($form, $at), $s);
            }
        }
        $s = strtr($s, self::DIGRAPHS);
        $s = strtr($s, self::LETTERS);
        return str_replace("\u{0001}", '', $s);
    }
}
