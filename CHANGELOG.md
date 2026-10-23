# Changelog

Versions follow SemVer. Below 1.0 the texts are unreviewed templates and MINOR releases may change clauses. Document versions are in each file's front matter.

## 0.1.0 (first public release)
- 13 documents (English): terms, privacy, acceptable use, cookies, imprint, copyright and illegal-content notices, security disclosure, sub-processors, DPA, refunds, game rules, app terms, licence page.
- Draft translations of all 13 documents: Serbian (Latin; Cyrillic generated), Croatian, Bosnian, Montenegrin. Hidden by hosts until reviewed by a native-speaking lawyer.
- Shared placeholder catalog with 5 required values, feature flags, country presets (rs, hr, ba, me, gb, de), product profiles and a config builder (`tools/init.php`).
- Licence catalogue (28 licences incl. 4 own `LicenseRef-*`), tag-based deterministic advisor (`tools/license.php`), GUIDE.md.
- Claims list (`claims.json`) of statements the documents make about the product.
- Structured sub-processor and cookie tables from `data.*` lists.
- PHP reference implementation (`Library`, `Renderer`, `Advisor`, `Transliterator`) and language-neutral conformance fixtures.
- Code MIT, texts CC BY 4.0.
