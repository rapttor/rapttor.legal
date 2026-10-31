# Brief for drafting a translation of one legal document into a major language

Work in /Users/admin/Sites/rapttor/rapttor.4all/rapttor.legal . You are given a language tag (`de`, `fr`, `es`, `pt-BR`, `it`, `pl`, `nl` or `tr`) and one or more document ids (for example `terms privacy`).

1. Read `i18n/TRANSLATING.md` (follow every rule) and `i18n/glossary.json` (use the column of your language for every term it covers). Details of the language in `i18n/languages.json`.
2. Source of truth: `en/<doc>.md`. Do not use the sr/hr/bs/cnr drafts.
3. Write `<lang>/<doc>.md` (create the directory if needed). Front matter: keep `doc`, `version`, `updated` and any `when` line exactly as in the English file; set `lang: <tag>`, `translation_of: <the version in the English file>`, `status: draft`; translate `title` and `summary`.
4. Long documents: write in several chunks. The first chunk creates the file, each next chunk APPENDS with a bash heredoc (`cat >> <lang>/<doc>.md <<'EOF' ... EOF`), about 500-700 source words per chunk, never cutting inside a section, list or table. Skip nothing.
5. Language: the standard written language of the country the tag names (de: Germany, German consumer-law vocabulary, formal "Sie"; fr: France, "vous"; es: Spain, "usted/ustedes" forms avoided by impersonal wording where natural, otherwise "usted"; pt-BR: Brazil, "você" with formal register; it: Italy, "Lei" avoided by impersonal wording, otherwise "Lei"; pl: Poland, "Pan/Pani" avoided by impersonal wording; nl: Netherlands, "u"; tr: Turkey, "siz"). Use the established legal vocabulary of that country (GDPR terms as in the official translation of the regulation: Verantwortlicher, responsable du traitement, responsable del tratamiento, controlador, titolare del trattamento, administrator, verwerkingsverantwoordelijke, veri sorumlusu).
6. Hard rules: faithful translation, no added/removed/merged/shortened clauses. Keep every `{{...}}` tag exactly (only the fallback text after `|` may be translated), every `{#anchor}`, heading level and number, link target `](...)`, URL, e-mail, table shape, Markdown formatting and `{{#if}}/{{else}}/{{/if}}/{{#unless}}/{{/unless}}` blocks. Placeholders cannot be declined or elided: keep them in their original form and word the sentence around them so they read correctly as they are. Cross-references "section N" use the local word for section. Keep brands, acronyms and statute names (Apple, Google, GDPR, DSA, DMCA, SPDX...) in their original form.
7. For `license`: the fenced block with `{{license.text}}` stays exactly as it is; add a short phrase stating that the English licence text is authoritative.
8. When done run `php tools/build.php --lint` and fix every error that mentions your files until none remain (messages about other files are not yours).
9. Final reply: at most 60 words: lint result for your files plus only genuine uncertainties. Touch no other file.

## Notes for uk, ru, ar, hi, ja, ko, zh-Hans

- uk (Ukrainian) and ru (Russian): formal plural "ви / вы" (lowercase in running text); official GDPR vocabulary of the national translation; keep Latin acronyms.
- ar (Modern Standard Arabic): right-to-left. Write the text in Arabic script; keep every `{{...}}` tag, `{#anchor}`, URL, e-mail and Latin acronym exactly as in English (they stay left-to-right inside the text, do not reorder them). Use Western digits as in the English source for numbers, versions and dates. Formal register (no dialect).
- hi (Hindi): formal "आप"; Devanagari; keep English legal acronyms (GDPR, DPDP) in Latin.
- ja (Japanese): formal polite register (です・ます調); keep acronyms and statute names in Latin; Japanese quotation marks 「」 where the English uses quotes.
- ko (Korean): formal polite register (합니다체); keep acronyms in Latin.
- zh-Hans (Simplified Chinese, mainland usage): formal register, "您" for "you", Chinese punctuation (，。；：), keep acronyms in Latin, keep a space between Latin words and Chinese only where the English source has one.
