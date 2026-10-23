# Tasks

| Status | Task | Model |
|---|---|---|
| done | Read old all-in-one page (`work/full-legal.html`) and the newer Rapttor page; list reusable and obsolete sections | Sonnet |
| done | Placeholder catalog (`placeholders.json`) with defaults, feature flags, derived and computed keys | Opus-level design, written by Sonnet |
| done | Templates: terms, privacy, acceptable_use, cookies, dpa, impressum, copyright, security, subprocessors (en) | Sonnet |
| done | `tools/build.php` (lint + manifest), `tools/render.php` (reference renderer), CI workflow, sample config | Sonnet |
| done | Pruned overlapping keys (70 to 42): one brand, one website, 3 mailboxes, one-string reps/authority, hosting/payments/AI lists folded into the sub-processor table; `tools/init.php` builder + `presets.json` | Sonnet |
| done | Audit for games/apps/services/worldwide: new docs refunds, game_rules, app_eula; flags game/mobile/minors; mobile+game data and account deletion in privacy; other-regions table; DPA only with processor role | Opus-level review, Sonnet edits |
| done | Composer package: `composer.json`, `src/Renderer`, `src/Library`, conformance fixtures (`tests/fixtures/grammar.json`), `tests/run.php`, `.gitattributes`, CI | Sonnet |
| done | Licences: `licenses/` catalogue (28 licences incl. 4 own), tag-based advisor (`src/Advisor.php`, `tools/license.php`, fixtures), `license` page, GUIDE.md, LICENSE (MIT) + LICENSE-TEXT (CC BY 4.0), yii2-legal LICENSE (MIT) | Opus-level design, Sonnet |
| done | i18n structure: `i18n/languages.json` (21 languages, fallback chains), `jurisdictions.json` (rs/hr/ba/me/gb/de), `Transliterator` (sr to sr-Cyrl, fixtures), `Library` language resolution + per-document fallback, translation lint (tags/anchors/links/headings/rows, stale warning), `--lint` mode, glossary (67 terms), TRANSLATING.md, per-language briefs | Sonnet |
| done | Serbian (Latin) drafts of all 13 documents by Haiku, each lint-clean; status draft | Haiku |
| done | Croatian, Bosnian, Montenegrin drafts of all 13 documents by Haiku (`i18n/BRIEF-<lang>.md`), lint-clean; dialect scan: no ekavian leaks in hr/bs/cnr | Haiku |
| done | Translated licence summaries/trade-offs `licenses/i18n/<lang>.json` (sr, hr, bs, cnr; 28 licences each) | Haiku |
| todo (owner) | Native-speaking lawyer review of every draft (sr, hr, bs, cnr) and of `glossary.json`; set `status: reviewed` + `reviewed_by`; collect the uncertainty notes the drafters reported | human counsel |
| todo | Draft the next languages in the priority order: de, fr, es, then pt-BR, it, pl, nl, tr (same brief, glossary extended first) | Haiku + native review |
| todo (owner) | Lawyer review of the four `LicenseRef-*` custom licences and the licence tags | Opus / human counsel |
| todo (owner) | Lawyer review of terms, privacy, dpa (Serbia + EU consumer law); resolve every `verify` default | Opus / human counsel |
| done | Packaging: LICENSE (MIT) + LICENSE-TEXT (CC BY 4.0), composer metadata (`--strict` clean), SemVer tags, CHANGELOG, CONTRIBUTING, SECURITY, docs/PUBLISHING.md, CI (PHP 8.2-8.4), generic example config, claims list, structured tables | Sonnet |
| todo (owner) | Submit both repos on Packagist (rapttor.legal first) and enable the GitHub hook: see docs/PUBLISHING.md | human |
| later | npm `@rapttor/legal` + PyPI ports passing `tests/fixtures/grammar.json`; Node CLI that writes static HTML for plain sites | Sonnet |
| done (v0.1.0 in ../yii2-legal) | Build `rapttor/yii2-legal` on top of `rapttor/legal` (Library::published/render): config component, routes `/legal/<doc>`, setup form from catalog+presets, Markdown to sanitised HTML, version archive of renders, console `legal/check` | Sonnet (renderer + security review: Opus) |
| later | Product-specific supplements (marketplace/intermediary, subscription terms, children/teen mode) as extra documents with their own feature flags | Sonnet |
| later | Changelog page per document generated from git history | Haiku |
| later | Cross-reference syntax `{{ref:anchor}}` resolved to section numbers, with a lint (26 hard-coded "section N" references today) | Sonnet |
| later | Admin screen in the Yii2 wrapper (edit config, preview, diff of archived renders); privacy-request form with timestamps | Sonnet |
| later | npm / PyPI ports passing tests/fixtures | Sonnet |
