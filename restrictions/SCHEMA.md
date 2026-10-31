# Restrictions dataset

Per activity tag, the countries where the activity is prohibited or tightly restricted, so an app that does that activity can ask visitors to confirm they are not in those countries (see `policy.activities`). **A research starting point, not legal advice.** Laws change; every entry has a source, a check date and a confidence level; counsel must confirm before an app relies on a list.

File `restrictions/<tag>.json`:

```json
{
  "tag": "gambling",
  "title": "Gambling and betting",
  "checked": "2026-10-31",
  "summary": "one or two sentences: the general picture and the main caveats",
  "countries": [
    {
      "code": "SA",
      "name": "Saudi Arabia",
      "status": "prohibited",
      "scope": "both",
      "note": "short plain statement of what is forbidden and by what law, if known",
      "source": "https://... (primary source preferred: law text, regulator, government page; else a reputable law-firm or news article)",
      "confidence": "high"
    }
  ]
}
```

- `code`: ISO 3166-1 alpha-2 (Kosovo: `XK`). Subnational prohibitions (US states, Indian states) are NOT listed as countries: mention them in `summary`.
- `status`: `prohibited` (the activity is unlawful for everyone or for the app's kind of operator), `licensed` (lawful only with a local licence or state monopoly: an app without that licence is unlawful there), `restricted` (lawful with conditions, for example only for non-Muslims, only in tourist areas, only some products).
- `scope`: `online`, `offline` or `both`.
- `confidence`: `high` (primary source read), `medium` (reputable secondary source), `low` (uncertain, conflicting or old information: say so in the note).
- Only include a country when you found evidence. Do not fill the list from memory alone: if you rely on general knowledge, set `confidence` to `low` and say "from general knowledge, unverified" in the note. Never invent a source URL.
