# rapttor.legal

[![Packagist version](https://img.shields.io/packagist/v/rapttor/legal)](https://packagist.org/packages/rapttor/legal)
[![License](https://img.shields.io/badge/code-MIT%20%7C%20texts-CC%20BY%204.0-blue)](#licence-of-this-repository)

```bash
composer require rapttor/legal      # the texts and the PHP library (Yii2 users: composer require rapttor/yii2-legal)
```

Central, versioned **legal page templates** (privacy, terms, acceptable use, cookies, DPA, impressum, copyright/notice-and-action, security disclosure, sub-processors) for all Rapttor sites and apps. Written once with placeholders; each site fills in its own company data. It is distributed as a **Composer package** (`rapttor/legal`; npm and PyPI from the same repo later) with the texts bundled, so sites need no runtime network access; a legal update is a release here plus `composer update` in each site, which is also your review gate. The [`rapttor/yii2-legal`](https://github.com/rapttor/yii2-legal) plugin is a thin wrapper around it.

> **Not legal advice.** These are professionally structured starting templates aimed at 2026+ requirements, not a substitute for review by a lawyer qualified in your jurisdiction. Check items marked `verify` in `placeholders.json` and the "Review checklist" below before relying on them.

## Documents

| Id | Document | Mainly for |
|---|---|---|
| `terms` | Terms of Service | Every site; includes remedies for misuse, enforcement, liability, consumer carve-outs |
| `privacy` | Privacy Policy | Every site; GDPR, UK GDPR, Serbian ZZPL, CCPA/CPRA and other US states, LGPD |
| `acceptable_use` | Acceptable Use Policy | Every site; the anti-abuse rulebook (see below) |
| `cookies` | Cookie Policy | Every site |
| `impressum` | Legal Notice | Every site; provider identification, DSA contact point |
| `dpa` | Data Processing Addendum | B2B products where you process data for customers (`feature.processor_role`) |
| `refunds` | Refunds & Cancellation Policy | Anything paid (`feature.payments`); EU/UK withdrawal right, model form, app-store purchases |
| `game_rules` | Game Rules & Virtual Items | Games (`feature.game`): virtual items, loot-box odds, fair play, anti-cheat, mods/streaming, end of service |
| `app_eula` | App Terms (End-User Licence) | Store-distributed apps (`feature.mobile`): Apple/Google required clauses, permissions, in-app account deletion |
| `copyright` | Copyright & Illegal Content Notices | Sites with user content (DSA notice-and-action, DMCA-style process) |
| `security` | Security & Vulnerability Disclosure | Every site; safe-harbour for researchers |
| `license` | Licence page | Any project that sets `license.id`: shows the chosen licence with the full text, from the catalogue below |
| `subprocessors` | Sub-processor List | With the DPA |

## How the shared data works

1. A site's config (in `yii2-legal`) holds the company data once: name, address, emails, registration, governing law, retention periods, which features exist.
2. Every document uses the same keys (`{{company.name}}`, `{{company.privacy_email}}`, `{{url.terms}}`, …), so a change appears in all of them.
3. `feature.*` flags switch clauses on or off (`feature.ai`, `feature.ugc`, `feature.payments`, `feature.consumers`, …). A site with no user content gets no content-moderation text.
4. Defaults chain (`privacy_email` and `legal_email` fall back to `company.email`; `product.name` to `company.name`). Only **five values are required**: company name, one-line address, country, email, website. The catalog has 42 keys in total; most sites set 10-15.
5. **Placeholder builder:** `php tools/init.php` asks about ten questions (company, country preset, whether role mailboxes exist, a product profile such as `saas_b2b` or `community`, AI yes/no) and writes a minimal config containing only non-default values, then test-renders every document. Presets live in `presets.json`; the plugin's setup form should be generated from `placeholders.json` + `presets.json`.

Full grammar and the consumer contract: [SPEC.md](SPEC.md). All keys: [placeholders.json](placeholders.json). Sample config: [examples/example.json](examples/example.json).

```bash
composer require rapttor/legal                                 # in a PHP project
php tools/build.php            # lint + regenerate manifest.json
php tools/build.php --check    # CI: fail if manifest.json is stale
php tools/init.php                                             # placeholder builder (interactive)
php tools/render.php examples/example.json en build            # render with sample data
php tools/render.php examples/example.json en build --all-features
```

## Languages

`i18n/languages.json` lists the languages (English, Serbian Latin and Cyrillic, Croatian, Bosnian, Montenegrin, German, French, Spanish, Brazilian Portuguese, Italian, Polish, Dutch, Turkish, Ukrainian, Russian, Arabic, Hindi, Japanese, Korean, Chinese) with their fallback chains. A language is *available* when `<tag>/` has documents. English is the source and always available.

- **Translations are drafts until a native-speaking lawyer reviews them.** Each translation has `status: draft | community | reviewed`, `translation_of: <English version>` and, when reviewed, `reviewed_by`. Hosts hide drafts unless they opt in (`publishDrafts`).
- **The build checks structure, not wording.** `php tools/build.php` fails when a translation changes, drops or invents a placeholder tag, anchor, link target, heading level or table row, and warns when a translation is stale (the English version moved on). `--lint` runs the checks without touching the manifest.
- **Serbian Cyrillic (`sr-Cyrl`) is generated** from the Serbian Latin text by a fixed mapping (`src/Transliterator.php`); brands and acronyms in `i18n/keep-latin.txt` stay Latin. Fixtures: `tests/fixtures/transliteration.json`.
- **Croatian, Bosnian, Montenegrin** are separate files, drafted from the Serbian text and the English with the glossary (`i18n/glossary.json`), because the vocabulary and the law differ. Language and jurisdiction are independent: `law.jurisdiction` (`rs`, `hr`, `ba`, `me`, `gb`, `de`) supplies governing law, venue and authority in the document's language (`i18n/jurisdictions.json`).
- **Per-document fallback.** A document missing in a language shows the next language in the chain, finally English, and says so.
- **Translating:** see `i18n/TRANSLATING.md` (rules for humans and AI drafters). Open to community translations through pull requests.

## Licence catalogue and advisor

`licenses/` holds 28 licences (verbatim SPDX texts for MIT, BSD, ISC, Zlib, 0BSD, Unlicense, Apache-2.0, MPL-2.0, LGPL/GPL/AGPL-3.0, EUPL-1.2, BUSL-1.1, FSL-1.1, PolyForm Noncommercial/Small Business, CC0 and CC BY / SA / NC / NC-SA / ND 4.0) plus four of ours for protecting your rights: `LicenseRef-Proprietary`, `LicenseRef-Source-Available`, `LicenseRef-Assets` and `LicenseRef-All-Rights-Reserved`. Each licence is described by tags (what it gives, demands and protects); `php tools/license.php` turns your answers and your app's features into rules, rules out the licences that break them (and says why) and ranks the rest. No AI, same answers give the same result. `licenses/GUIDE.md` explains every family and the traps in plain words. Set `license.id` in the site config and the plugin publishes a `/legal/license` page; `--emit=LICENSE` writes the exact file for a repo.

## Fit for games, apps and services worldwide

Switch on only what applies (`feature.*`); `tools/init.php` has profiles (`website`, `saas_b2b`, `saas_b2c`, `community`, `shop`) and flags for `game`, `mobile`, `minors`, `ai`. Covered: B2B SaaS, consumer apps, subscriptions, user-generated content, AI features, games with virtual items, store-distributed apps, and users from the EU/EEA, UK, Switzerland, Serbia, US states, Brazil, Canada, India, Australia/NZ and other regions with a privacy law.

**Not covered; add or get a lawyer for these:**
- **Child-directed products** (aimed at under 13, or under 16 in the EU). COPPA, the UK Children's Code, the EU DSA minors guidelines and similar rules need product-level design and a dedicated policy. `feature.minors` only covers teens with guardian consent.
- **Real-money gambling, sweepstakes with entry fees, regulated financial, health or insurance services, marketplaces with payouts, crypto.** Licensing and specific disclosures apply.
- **Targeting China, Russia, Vietnam or other data-localisation / licensing regimes**, and sector rules (HIPAA, PCI scope, FERPA).
- **Employee, B2B-API and enterprise contracts** with custom liability, SLA or security terms: sign a separate order form. The Terms allow it to prevail.
- **Translations**: English only. Mandatory consumer notices in some countries must be in the local language (for example France, Québec, Poland, Brazil). Add `<lang>/` directories before launching there.
- Accessibility statements (EU European Accessibility Act) where required for your service.

## Anti-misuse coverage

Where a user can abuse the apps, these clauses give you a contractual basis to act:

- **Terms** §4 licence restrictions (no reverse engineering, resale, scraping, benchmarking, building competing products/models), §3 accounts (no sharing, no multi-account evasion), §5/§17 suspension and termination ladder with immediate action for serious breach, §6 content warranties and licence (limited to operating the service), §7 responsibility for your own end users, §8 AI limits, §9 chargeback/fraud and refund rules, §21 remedies (injunction, cost recovery, evidence preservation, reporting to authorities, set-off), §22 sanctions/export, §23 informal-resolution step, jurisdiction, claim time limit, §19–20 liability cap and indemnity, §24 force majeure.
- **Acceptable Use Policy**: illegal content incl. zero-tolerance CSAM, harassment/doxxing/NCII, fraud and phishing, malware and attacks, unauthorised testing, DoS and rate-limit evasion, spam, scraping, account/API-key sharing, fake accounts and promo abuse, impersonation, AI-specific misuse (jailbreaks, deepfakes, prohibited AI practices), high-risk use, free-tier abuse, graded enforcement with appeal.
- **Copyright & Illegal Content**: notice contents, counter-notice, repeat-infringer policy, penalties for abusive notices.
- **Security**: scope, testing rules, safe harbour only for good-faith research.

## What changed from the old all-in-one page (2021)

- **Dropped** as irrelevant to our products: social-casino/sweepstakes/raffle rules, virtual-currency-as-casino text, US Sponsor/IRS 1099 prize text, "Facebook friends list" collection, mobile-ad-ID specifics. A lighter **prepaid credits** clause remains behind `feature.credits`.
- **Replaced** the EU-U.S. *Privacy Shield* (invalidated 2020) with the **Data Privacy Framework / SCCs / UK Addendum**; replaced "joint controllers with a Global Limited" and the Polish authority with `law.authority.*`.
- **Added** for 2026+: DSA (point of contact, notice-and-action, statement of reasons, appeal), EU consumer-law digital-content withdrawal handling, Digital Content/consumer carve-outs from disclaimers and liability limits, GPC and universal opt-outs, extended US state-law list, sensitive-data and AI clauses aligned with the EU AI Act, Data Act-style export on exit, accessibility feedback channel (EAA), DPA with SCC module/clause selections, UK and Swiss transfer terms, Serbian ZZPL, breach timelines, vulnerability disclosure with safe harbour, sub-processor notice and objection.
- **Removed** the EU Online Dispute Resolution platform link: it was closed on 20 July 2025.
- **Consent-by-use clauses reworked.** The old text said continued use equals acceptance of any change, "irrevocable" consent to monitoring with no expectation of privacy, an irrevocable perpetual licence over user content, and no refunds for any reason. Those are unenforceable or risky against consumers in the EU/UK/Serbia, so they are replaced by notice periods, purpose-limited licences, and consumer carve-outs.

## Review checklist (before first production use)

1. Confirm **governing law and venue** (`law.governing`, `law.venue`) and whether a Serbian court clause is enforceable against consumers in your target markets (the templates always preserve mandatory consumer venue).
2. Confirm **age** (18 default; GDPR digital-consent age is 13-16 by country), **retention periods** (accounting law retention in Serbia/EU), **liability cap** and **claim time limit** (some countries void shortened limitation periods).
3. If you sell to consumers: have a lawyer check the withdrawal wording, pre-contract information, price display, and (EU) automatic-renewal and cancellation-button rules that apply in your target countries.
4. If you target Germany/Austria: imprint requirements (`§5 DDG`, `§25 MedienG`) may need register data, supervisory authority and chamber details; add them via `company.register` / `editorial.responsible`.
5. If you use AI features: check the current state of EU AI Act obligations (transparency obligations apply from 2 Aug 2026; some other dates may shift) and list the model providers.
6. If you act as a processor: confirm the TOMs in DPA Annex II are actually true for your infrastructure; false security statements are a liability.
7. `legal@`, `privacy@`, `abuse@`, `security@` mailboxes actually exist and are monitored (DSA, GDPR and DMCA deadlines run from receipt).
8. Have counsel read the four `LicenseRef-*` licences before you ship software under them, and fill in the parameters of BUSL/FSL if you choose them.

## Licence of this repository

- **Code** (`src/`, `tools/`, `tests/`): [MIT](LICENSE).
- **Legal texts and data** (`en/`, `placeholders.json`, `presets.json`, `licenses/GUIDE.md`, `licenses/advisor.json`, `licenses/catalog.json`, our four `LicenseRef-*` texts): [CC BY 4.0](LICENSE-TEXT). Attribution: "Based on rapttor.legal by Rapttor" in your credits or legal notice is enough.
- **Third-party licence texts** in `licenses/texts/` are verbatim copies from the [SPDX License List](https://spdx.org/licenses/) and remain under their own terms.

## Versioning

Releases are git tags `vMAJOR.MINOR.PATCH` (SemVer, installed with Composer). While the version is below 1.0 the texts are unreviewed templates and MINOR releases may change clauses; from 1.0, MAJOR means rights or obligations changed, MINOR means clauses were added, PATCH is wording. Consumers install a release with `composer require rapttor/legal` and update deliberately with `composer update`. Each document also has its own semver `version` in its front matter; `Library::release()` returns the installed package version (or the date of the newest text when Composer metadata is unavailable). See SPEC.md, "Update policy".
