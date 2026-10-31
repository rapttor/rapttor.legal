# Brief: update an existing translation after the English text changed

Work in /Users/admin/Sites/rapttor/rapttor.4all/rapttor.legal . You are given a language tag (`sr`, `hr`, `bs` or `cnr`) and one or more document ids.

1. Read `i18n/TRANSLATING.md` and `i18n/glossary.json` (column of your language). Also read your language's brief `i18n/BRIEF-<lang>.md` (for `sr` use: ekavian, Latin script, formal "Vi/Vaš"; same style as the existing `sr/` files) for dialect rules.
2. For each document: run `git diff -- en/<doc>.md` to see exactly what changed in the English source (from version 1.0.0 to 1.1.0). The existing translation `<lang>/<doc>.md` is a faithful translation of 1.0.0.
3. Update `<lang>/<doc>.md` IN PLACE with small edits (the Edit tool): translate every added or changed English passage and put it at the same position; remove passages that were removed in English; leave all unchanged translated text exactly as it is. Do not rewrite or re-translate the parts that did not change.
4. Front matter of the translation: `version: 1.1.0`, `updated: 2026-10-31`, `translation_of: 1.1.0`, `status: draft`; keep `doc`, `lang`, and any `when` line; update `title` and `summary` only if the English ones changed.
5. Hard rules (the build checks them): the same `{{...}}` tags as the English file (only the fallback text after `|` may be translated), the same `{#anchors}`, heading levels, link targets, table rows. Placeholders cannot be declined: keep them in their original form. `{{policy.age_gate}}` is a number; `{{policy.age_topics|...}}` and `{{payments.provider}}` are phrases inserted as they are. No added, removed or merged clauses beyond what the English diff shows.
6. Run `php tools/build.php --lint` and fix every error that mentions your files until none remain (the "stale" warnings for your files must disappear too). Do not touch other files.
7. Reply in at most 50 words: lint result for your files and only genuine uncertainties.
