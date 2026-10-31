# Changelog

Versions follow SemVer (MAJOR: rights or obligations changed; MINOR: clauses or features added; PATCH: wording or fixes). A version number is not a legal review: the texts are templates until counsel has reviewed them. Document versions are in each file's front matter.

## 2.6.2
- Balkan (`sh`) wording rules from the owner (`i18n/BRIEF-sh.md`): fajl, dodajem, sistem; no Croatian-only or Serbian-only marker words. 17 replacements in the documents. Checklist 1.4.1 points to the rules.

## 2.6.1
- Sanctions data: the Crimea and Donetsk/Luhansk embargoes are regions (`UA-43`, `UA-14`), no longer the whole of Ukraine; the schema allows ISO 3166-2 region codes.

## 2.6.0
- **One Balkan language, `sh`** (Latin script, ijekavian, vocabulary acceptable in Bosnia, Croatia, Montenegro and Serbia) replaces separate Serbian, Serbian Cyrillic, Croatian, Bosnian and Montenegrin variants. The old tags (`sr`, `sr-Latn`, `sr-Cyrl`, `hr`, `bs`, `cnr` and their country forms) are aliases of `sh`. The texts are the former Bosnian drafts relabelled (draft, native review pending, to be neutralised); `jurisdictions.json`, table headings, licence summaries and the glossary were collapsed to `sh`. Display name "Balkan"; no national flag.
- **Restrictions dataset** `restrictions/<tag>.json` for gambling, alcohol, tobacco, cannabis, adult, dating, lgbtq, crypto, vpn, weapons, pharmacy and sanctions: per country the status, scope, a short note, a source and a confidence level (most entries are medium or low confidence: a first research pass, to be verified by counsel). `Library::restrictionTags()`, `restrictions()`, `restrictedCountries()`; `policy.activities` (and `feature.gambling`) merge the prohibiting countries into `policy.excluded_regions` / `excluded_codes`; `policy.restriction_status`.
- Seven more languages as drafts: Ukrainian, Russian, Arabic, Hindi, Japanese, Korean, Simplified Chinese (all 13 documents each).
- Checklist 1.4.0: how to choose `policy.activities`.

## 2.5.1
- Checklist 1.3.0: short checkbox titles with the explanation in small print, and a language switcher of its own at the top of every consent form (also the new-account sign-in step), independent of the app's language.

## 2.5.0
- **Eight new languages, all 13 public documents each, as machine drafts** (`status: draft`, hidden unless the host enables drafts, awaiting native-lawyer review): German (de), French (fr), Spanish (es), Brazilian Portuguese (pt-BR), Italian (it), Polish (pl), Dutch (nl), Turkish (tr). Drafted from the current English texts (terms 1.3.0, privacy 1.2.1, ...) with the extended glossary and `i18n/BRIEF-new.md`. They have no `jurisdictions.json` entry yet, so `law.governing`, `law.venue` and `law.authority` come from the host config or fall back to English; the texts are worded to read acceptably with that.

## 2.4.0
- **Terms 1.3.0**: optional item 7 in Eligibility, "not located in or resident of these countries" (`policy.excluded_regions`, shown as a visitor's own checkbox because location cannot be verified). Placeholder `policy.excluded_regions`; claim `excluded-regions-confirmed`.
- **No invented reply times**: removed the 72-hour acknowledgement (Privacy 1.2.1), the 3 business days (Security 1.0.1) and the 5 business days (Refunds 1.1.1); only deadlines a law sets remain (breach notification, DMCA counter-notice). Claims reworded.
- Checklist 1.2.0: privacy and legal requests form that notifies the admins, no promised reply times, language switcher on consent screens, operator accounts vs tenant admins, excluded regions.
- Translations of the four changed documents refreshed in sr, hr, bs and cnr (drafts). Glossary extended to de, fr, es, pt-BR, it, pl, nl and tr; `i18n/BRIEF-new.md` for drafting new languages.

## 2.3.0
- Checklist 1.1.1: consents and their history live in the shared `rapttor_metadata` table (one row per user, key `legal`).

## 2.2.0
- Checklist 1.1.0: "terms updated" popups must give every document and condition its own unticked checkbox (no bundled accept), and proof of each answer (version, timestamp, language, source, keyed hashes of IP and browser details, hash of wording and document text, history) is kept with the user profile. New claim `consent-per-document-and-proof`.

## 2.1.0
- **Baseline consents on by default**: `feature.age_gate` and `feature.uploads` apply unless explicitly set to false (`Library::withDefaults()`, `default_on` in the catalogue). Opt-in: `feature.gambling` with `policy.gambling_age`.
- Terms 1.2.0 (gambling age and lawfulness confirmation) and Privacy 1.2.0 (age and identity verification for gambling); translations of both refreshed (drafts); claim `gambling-lawful-and-verified`; age claim describes the default behaviour.
- Checklist (internal document) 1.0.1: one consent mechanism (not a terms-only popup), consent data kept with the user profile (JSON), what to check when a screen is missing, and how providers such as Postar handle unsubscribe.

## 2.0.0
- New internal document `app_checklist` (public: false) with `Library::internal()`: security and compliance checklist for AI coding agents, filtered by feature flags.
- Texts 1.1.0 (terms, privacy, cookies, acceptable use, refunds, copyright): age and legal-age confirmation, anonymous accounts, account holder and access, ownership of and responsibility for data and files, uploads (copyright accountability, private by default), third-party resources and IP addresses (per-item consent), no session replay, emails and the two-level stop (one-click optional, confirmed block-all), merchant of record and renewal terms next to the pay button, EU withdrawal function (from 19 June 2026), consent records, DMCA designated agent.
- New flags `anonymous`, `uploads`, `email`, `external`, `age_gate`, `merchant_of_record`; keys `policy.age_gate`, `policy.age_topics`, `payments.provider`, `company.dmca_agent`, `company.dmca_number`; structured `data.external` table.
- 12 new claims; stale translations are no longer shown to visitors; translations of the six changed documents updated (drafts).
- docs/COMPLIANCE-RESEARCH.md: verdicts and sources.

## 0.1.0 (first public release)
- 13 documents (English): terms, privacy, acceptable use, cookies, imprint, copyright and illegal-content notices, security disclosure, sub-processors, DPA, refunds, game rules, app terms, licence page.
- Draft translations of all 13 documents: Serbian (Latin; Cyrillic generated), Croatian, Bosnian, Montenegrin. Hidden by hosts until reviewed by a native-speaking lawyer.
- Shared placeholder catalog with 5 required values, feature flags, country presets (rs, hr, ba, me, gb, de), product profiles and a config builder (`tools/init.php`).
- Licence catalogue (28 licences incl. 4 own `LicenseRef-*`), tag-based deterministic advisor (`tools/license.php`), GUIDE.md.
- Claims list (`claims.json`) of statements the documents make about the product.
- Structured sub-processor and cookie tables from `data.*` lists.
- PHP reference implementation (`Library`, `Renderer`, `Advisor`, `Transliterator`) and language-neutral conformance fixtures.
- Code MIT, texts CC BY 4.0.
