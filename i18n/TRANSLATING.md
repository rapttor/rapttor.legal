# Translating the legal documents

Rules for human and machine translators. A translation is a **faithful rendering** of `en/<doc>.md`, not a rewrite. The build checks the mechanical rules; a native-speaking lawyer checks the rest.

## File

- Save as `<lang>/<doc>.md` (`sr`, `hr`, `bs`, `cnr`, `de`, ...; the tags are in `languages.json`). `sr-Cyrl` is generated automatically from `sr`: do not translate to Cyrillic by hand.
- Copy the front matter and keep `doc`, `version`, `updated`, `when` exactly as in English. Set:
  - `lang: <tag>`
  - `translation_of: <the English version number you translated>`
  - `status: draft` (a native-speaking lawyer later changes it to `reviewed` and adds `reviewed_by: Name`)
  - translate `title` and `summary` only.

## Never change (the build fails if you do)

- Template tags `{{...}}`: keep every tag, exactly as written, once for each time it appears in English. You may translate only the fallback text after `|` in `{{key|fallback}}`. Keep `{{#if}}`, `{{else}}`, `{{/if}}`, `{{#unless}}`, `{{/unless}}` blocks around the same content.
- Heading anchors `{#anchor}`, heading levels and the number of headings; section numbers in headings.
- Link targets `](...)`, URLs, e-mail addresses, code, `mailto:`.
- The number of table rows and columns.

## Content rules

1. Translate everything the user reads. Do **not** add, remove, merge, shorten or "improve" clauses, and add no new legal advice. If the English is unclear, translate it literally.
2. Use the glossary (`glossary.json`) for every term it covers; ask for a glossary entry rather than inventing a new rendering.
3. Formal register, the way a law firm writes for customers. No slang or marketing tone.
4. Placeholders and grammar: a placeholder is inserted as-is and cannot be declined. In languages with cases, build the sentence so the placeholder stays in its original form: after a colon, in quotes, in apposition ("društvo: {{company.name}}"), or as the object of a verb that takes the original form. `{{law.governing}}` is prepared in the **genitive** and fits after "pravom ..."; `{{law.venue}}` and `{{law.authority}}` are complete noun phrases in the **nominative**.
5. Cross-references such as "section 22" become the local word for section plus the same number.
6. Keep brand and product names, standards and acronyms in their original form (Apple, Google, GDPR, SPDX, MIT...). Translate the generic nouns around them.
7. Do not translate words inside `{{...}}`. Do not translate code.
8. Keep Markdown formatting (bold, lists, tables, blockquotes) exactly.
9. For Serbo-Croatian variants: `sr` ekavian, Latin script, "Vi/Vaš"; `hr`, `bs`, `cnr` ijekavian, "vi/vaš"; use each country's legal vocabulary from the glossary (for example sr "podaci o ličnosti", hr "osobni podaci"). When making `hr`/`bs`/`cnr` from `sr`, check against the English too, because the Serbian wording may carry Serbian legal terms.

## Check

```bash
php tools/build.php --lint     # prints errors for every translation; fix those for your file
```
