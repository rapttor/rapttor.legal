# Contributing

Thank you for helping. These are legal templates: changes affect many sites, so every change must keep the build green and be explained.

```bash
php tools/build.php   # lint templates, translations, licence data; regenerates manifest.json (commit it)
php tests/run.php     # grammar fixtures, advisor, transliteration, every language x every feature flag
```

- **Translations** (most welcome): read `i18n/TRANSLATING.md` and `i18n/glossary.json`. New translations are `status: draft` with `translation_of: <English version>`. Only a native-speaking lawyer sets `reviewed` (and `reviewed_by`), in a pull request that says who they are. Open an issue first for a new language so the glossary can be extended.
- **Text changes** (`en/`): bump the document `version` and `updated`; MAJOR when rights or obligations change. Do not put company-specific data in the templates; add a placeholder instead. Say which jurisdiction or law the change is for.
- **Licences**: verbatim SPDX text only; tags must be supported by the licence text. Advisor changes need a fixture in `tests/fixtures/advisor.json`.
- **Code**: PHP >= 8.2, `declare(strict_types=1)`, no runtime dependencies. Behaviour changes need fixtures and a SPEC.md update so other-language ports can follow.
- By contributing you agree that your contribution is licensed under the repository's licences (code MIT, texts CC BY 4.0).

Not legal advice: the project cannot review your jurisdiction's law for you. See the "Review checklist" in the README.
