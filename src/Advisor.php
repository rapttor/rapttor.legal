<?php

declare(strict_types=1);

namespace rapttor\legal;

/**
 * Deterministic licence advisor (no AI): answers and feature flags are compiled into tag rules, every licence in
 * licenses/catalog.json is checked against them, the rest are ranked by preference weights.
 * Data: licenses/catalog.json (what each licence offers/demands/protects as tags) and licenses/advisor.json (questions, rules).
 */
final class Advisor
{
    /** @var array<string,mixed> */
    private array $advisor;
    /** @var list<array<string,mixed>> */
    private array $catalog;

    public function __construct(?string $root = null)
    {
        $root ??= dirname(__DIR__);
        $this->advisor = self::json("$root/licenses/advisor.json");
        $this->catalog = self::json("$root/licenses/catalog.json")['licenses'];
    }

    /** @return list<array<string,mixed>> */
    public function catalog(): array
    {
        return $this->catalog;
    }

    /** @return array<string,mixed>|null */
    public function find(string $id): ?array
    {
        foreach ($this->catalog as $l) {
            if ($l['id'] === $id) {
                return $l;
            }
        }
        return null;
    }

    public function tagLabel(string $tag): string
    {
        return $this->advisor['tags'][$tag]['label'] ?? $tag;
    }

    /** Questions to ask for a scope ('software', 'content', 'assets'; null = only the scope question). @return list<array<string,mixed>> */
    public function questions(?string $scope = null): array
    {
        return array_values(array_filter(
            $this->advisor['questions'],
            static fn($q) => $q['id'] === 'scope' || ($scope !== null && (in_array($scope, $q['applies'], true) || in_array('*', $q['applies'], true)))
        ));
    }

    /**
     * @param array<string,string> $answers question id => option id (must include 'scope')
     * @param list<string> $features feature flags the app offers ('payments' or 'feature.payments')
     * @return array{candidates:list<array<string,mixed>>,excluded:list<array<string,mixed>>,nearest:list<array<string,mixed>>,scope:string}
     */
    public function recommend(array $answers, array $features = []): array
    {
        $scope = $answers['scope'] ?? throw new \InvalidArgumentException("Answer 'scope' is required");
        $rules = ['must' => [], 'must_any' => [], 'must_not' => [], 'prefer' => []];
        foreach ($this->questions($scope) as $q) {
            if (!isset($answers[$q['id']])) {
                continue;
            }
            $opt = null;
            foreach ($q['options'] as $o) {
                if ($o['id'] === $answers[$q['id']]) {
                    $opt = $o;
                }
            }
            if ($opt === null) {
                throw new \InvalidArgumentException("Unknown option '{$answers[$q['id']]}' for question '{$q['id']}'");
            }
            $src = $q['id'] === 'scope' ? 'scope' : $opt['label'];
            foreach ($opt['must'] ?? [] as $t) {
                $rules['must'][] = [$t, $src];
            }
            foreach ($opt['must_any'] ?? [] as $group) {
                $rules['must_any'][] = [$group, $src];
            }
            foreach ($opt['must_not'] ?? [] as $t) {
                $rules['must_not'][] = [$t, $src];
            }
            foreach ($opt['prefer'] ?? [] as $t => $w) {
                $rules['prefer'][] = [$t, (int)$w, $src];
            }
        }
        foreach ($features as $f) {
            $f = str_starts_with($f, 'feature.') ? $f : "feature.$f";
            foreach ($this->advisor['features'][$f][$scope] ?? [] as $t => $w) {
                $rules['prefer'][] = [$t, (int)$w, "your app has " . substr($f, 8)];
            }
        }

        $candidates = $excluded = [];
        foreach ($this->catalog as $order => $lic) {
            $has = array_flip($lic['tags']);
            $why = $warn = $reasons = $extra = [];
            $scopeOk = true;
            $score = 0;
            foreach ($rules['must'] as [$t, $src]) {
                if (!isset($has[$t])) {
                    if ($src === 'scope') {
                        $scopeOk = false;
                    }
                    $reasons[] = 'Does not offer: ' . $this->tagLabel($t) . " (you chose: $src)";
                } elseif ($src !== 'scope') {
                    $why[] = $this->tagLabel($t);
                }
            }
            foreach ($rules['must_any'] as [$group, $src]) {
                if (!array_intersect_key(array_flip($group), $has)) {
                    $reasons[] = 'Has none of: ' . implode(' / ', array_map($this->tagLabel(...), $group)) . " (you chose: $src)";
                } else {
                    $why[] = implode(' / ', array_map($this->tagLabel(...), array_intersect($group, $lic['tags'])));
                }
            }
            foreach ($rules['must_not'] as [$t, $src]) {
                if (isset($has[$t])) {
                    $reasons[] = 'Conflicts: ' . $this->tagLabel($t) . " (you chose: $src)";
                }
            }
            foreach ($rules['prefer'] as [$t, $w, $src]) {
                if (isset($has[$t])) {
                    $score += $w;
                    if ($w > 0) {
                        $extra[$this->tagLabel($t)][] = $src;
                    } else {
                        $warn[] = $this->tagLabel($t) . " ($src)";
                    }
                }
            }
            if (!$scopeOk) {
                continue; // not a licence for this kind of work at all
            }
            $why = array_values(array_unique($why));
            foreach ($extra as $label => $sources) {
                $at = array_search($label, $why, true);
                $suffix = ' (' . implode('; ', array_unique($sources)) . ')';
                $at === false ? $why[] = $label . $suffix : $why[$at] = $label . ' (also: ' . implode('; ', array_unique($sources)) . ')';
            }
            $row = ['id' => $lic['id'], 'name' => $lic['name'], 'category' => $lic['category'], 'summary' => $lic['summary'],
                'tradeoffs' => $lic['tradeoffs'], 'url' => $lic['url'], 'score' => $score, 'why' => $why,
                'warnings' => $warn, 'reasons' => $reasons, 'order' => $order];
            $reasons === [] ? $candidates[] = $row : $excluded[] = $row;
        }
        $byScore = static fn($a, $b) => [$b['score'], $a['order']] <=> [$a['score'], $b['order']];
        usort($candidates, $byScore);
        usort($excluded, static fn($a, $b) => [count($a['reasons']), $a['order']] <=> [count($b['reasons']), $b['order']]);
        return [
            'scope' => $scope,
            'candidates' => $candidates,
            'excluded' => $excluded,
            'nearest' => $candidates === [] ? $this->nearest($excluded) : [],
        ];
    }

    /**
     * When nothing fits: the licences that miss the fewest rules, one per distinct set of missed rules, so the owner sees
     * which answer to relax. @param list<array<string,mixed>> $excluded sorted by number of missed rules
     * @return list<array<string,mixed>>
     */
    private function nearest(array $excluded): array
    {
        $best = [];
        foreach ($excluded as $row) {
            $key = implode('|', $row['reasons']);
            if (!isset($best[$key]) && count($best) < 4 && count($row['reasons']) <= count($excluded[0]['reasons']) + 1) {
                $best[$key] = $row;
            }
        }
        return array_values($best);
    }

    /** @return array<string,mixed> */
    private static function json(string $file): array
    {
        return json_decode((string)file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
    }
}
