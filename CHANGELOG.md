# Changelog

Versions follow SemVer (MAJOR: rights or obligations changed; MINOR: clauses or features added; PATCH: wording or fixes). A version number is not a legal review: the texts are templates until counsel has reviewed them. Document versions are in each file's front matter.

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
