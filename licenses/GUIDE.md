# Licences, bluntly

Not legal advice. This guide explains what the licences in this folder do in plain words, and how `tools/license.php` picks one. Custom texts (`LicenseRef-*`) and BUSL/FSL parameters need a lawyer before you rely on them.

## 1. The two facts everything else hangs on

1. **You own what you write (copyright) automatically.** Nobody else may legally use, copy or change it unless you give them permission.
2. **A licence is that permission, with conditions.** No licence file = **nobody** may use your code, even if it is public on GitHub. Public does not mean free to use.

A licence is **not** your Terms of Service. The licence says what people may do with the *code or content*. Terms of Service say what people may do with your *running service and account*. A SaaS usually needs both.

## 2. The families in one blunt line each

| Family | Examples | Blunt summary | You lose | You keep |
|---|---|---|---|---|
| **Public domain** | CC0, 0BSD, Unlicense | "Take it, I don't care." | Credit, any control | Nothing, besides your name on the original |
| **Permissive** | MIT, BSD, ISC, Zlib, Apache-2.0 | "Do what you like, keep my name, don't sue me." | Anyone can close-source your code and sell it | Credit; Apache adds a patent licence and patent retaliation |
| **Weak copyleft** | MPL-2.0, LGPL-3.0 | "Changes to *my files* must stay open; the rest of your product may be closed." | Some companies refuse it | Improvements to your files flow back |
| **Strong copyleft** | GPL-3.0, EUPL-1.2 | "If you distribute something built on this, all of it must be open under the same licence." | Closed-source products cannot use your code | Strong protection against closed forks of distributed software |
| **Network copyleft** | AGPL-3.0 | "Same as GPL, and also if you only *run* it as a service for others." | Many companies ban AGPL dependencies | The strongest open-source barrier to a closed SaaS clone |
| **Source-available** | FSL, BUSL, PolyForm | "You can read it and use it, but not to compete with me." Some turn into real open source after 2-4 years. | **Not open source.** Community and some distributions will not accept it | Protects revenue while keeping code visible |
| **Proprietary** | `LicenseRef-Proprietary`, All Rights Reserved | "You may run what I give you. That's it." | Trust that comes with visible code | Everything |
| **Content** | CC BY, BY-SA, BY-NC, BY-ND, CC0 | Licences for text, images, data, not for code | Choose carefully: NC is fuzzy and ND blocks remixes | Credit and, with SA, share-back |

## 3. Blunt truths and traps

- **Permissive licences cannot stop a clone.** Anyone may host your MIT code as a paid service without paying or contributing. If that would hurt you, don't pick MIT for the product core.
- **"Open source" has a definition** (OSI). FSL, BUSL and PolyForm are *source-available*, not open source; don't call them open source.
- **AGPL protects you only if the other party copies your code.** It does not stop a competitor from rewriting it. It does scare off many corporate users, which can be what you want or the opposite.
- **Non-commercial (NC) is vague.** Does a blog with ads count? Does a company internal tool? Disputes happen. PolyForm Noncommercial defines it better than CC NC; CC NC is fine for art and photos, risky for code.
- **Contributors keep their copyright.** If you may ever relicense (open to closed, MIT to FSL), you need their permission: use a Contributor Licence Agreement (CLA) or the DCO plus a clear "may relicense" statement *before* accepting outside code. The Source-Available text includes a contribution grant.
- **You can change the licence of *future* versions, not of versions already released.** Anyone who got version 1.0 under MIT keeps MIT for 1.0.
- **Copyleft is about your dependencies too.** If your product includes GPL code, your product must be GPL-compatible. Check `compat:gpl3` / `compat:gpl2` in the advisor questions. Apache-2.0 is not compatible with GPL-2.0-only.
- **Patents:** MIT/BSD say nothing about patents. Apache-2.0, MPL, GPL-3, AGPL, EUPL, FSL give a patent licence. If you hold patents or fear patent trolls, pick one of those.
- **Trademarks are separate.** A code licence does not give anyone the right to use your name and logo. Say so, and publish a short trademark policy if forks may appear.
- **Public-domain dedications are shaky in some countries** (moral rights, civil law). For "no strings" use CC0 (content) or 0BSD/MIT (code), not a bare "public domain" sentence.
- **AI training:** most open licences say nothing, so scraping for training is arguably allowed. Our custom licences forbid it; CC licences do not. If it matters, say it in a custom licence and in your robots/terms, and accept it is hard to enforce.
- **Split what you ship.** Code, documentation, art/audio and user content usually deserve different licences. Example: game engine code (source-available), art/audio (`LicenseRef-Assets`), docs (CC BY 4.0).
- **Third-party licences always win for their own parts.** Keep a list (SBOM) of dependencies and their licences before you publish.
- **Custom licences are risky.** Judges and lawyers know MIT/Apache/GPL; they don't know yours. Use ours only when nothing standard fits, and have counsel read them.

## 4. How the advisor decides (no AI)

Every licence in `catalog.json` is described by **tags**: what it *gives* (`give:commercial`), what it *demands* (`need:attribution`, `need:copyleft-network`), what it *protects* (`protect:source-closed`, `protect:no-competing-service`, `protect:no-ai-training`) and what it *is* (`is:osi`, `is:custom`, `for:software`). `advisor.json` holds the questions and what each answer means as rules:

- **must**: the licence must have all these tags,
- **must_any**: it must have at least one tag from each group,
- **must_not**: it must not have these tags,
- **prefer**: each tag it has adds (or removes) points; this ranks the licences that passed.

Licences that break a rule are **ruled out and the reason is shown** ("Does not offer: converts to open source after a fixed date, because you chose: Yes (delayed open source)"). If nothing passes, you get the closest options and the answer to relax. The same answers always give the same result.

Your app's features also count, softly: payments, subscriptions, an API or processing customer data push toward licences that stop competing hosted copies; AI features push toward forbidding AI training; games push toward protecting assets.

```bash
php tools/license.php                                 # interactive
php tools/license.php --list                          # all licences and their tags
php tools/license.php --answer=scope=software --answer=source=visible --answer=competing=yes --feature=payments
php tools/license.php --pick=MIT --emit=LICENSE --year=2026 --holder="ACME d.o.o."     # write the exact text
php tools/license.php ... --write=legal.config.json   # sets license.id so the site publishes a /legal/license page
```

**Add a licence:** put the verbatim text in `texts/<SPDX-ID>.txt` (copyright line as `{{license.year}} {{license.holder}}`), add an entry with tags to `catalog.json`, run `php tools/build.php` (it checks tags, texts and rules) and `php tests/run.php`. **Add a rule or question:** edit `advisor.json` only; no code changes.

## 5. Quick picks

| You are releasing | Pick | Why |
|---|---|---|
| A small library or plugin you want everyone to use | **MIT** (or Apache-2.0 if patents matter) | Maximum adoption |
| A product core that you sell as SaaS and don't want cloned | **FSL-1.1-MIT** (source-available) or **LicenseRef-Proprietary** | No competing service; FSL turns MIT after 2 years |
| The same, but you want it truly open source | **AGPL-3.0-only** | Clones must publish their source too |
| A framework where closed products should be allowed to use it, but fixes come back | **MPL-2.0** | File-level copyleft |
| Closed-source commercial app or game | **LicenseRef-Proprietary** + **LicenseRef-Assets** | Everything reserved |
| Documentation, blog, images you want shared | **CC BY 4.0** | Credit required |
| Legal templates like `rapttor.legal` | **CC BY 4.0** for the texts, **MIT** for the code | See the repo README |
| Private repo, nothing decided | **All Rights Reserved** | Permits nothing until you decide |

## 6. Releasing, step by step

1. Run the advisor, read the trade-off and the "ruled out" list.
2. Write `LICENSE` with `--emit` (exact text, your name and year). Keep the file name `LICENSE`.
3. Add the SPDX id to the package manifest (`composer.json` `license`, `package.json` `license`) and optionally to file headers: `// SPDX-License-Identifier: MIT`.
4. Add a short "Licence" section to the README naming the licence and any exceptions (assets, trademarks).
5. For a website or app, publish the licence page: set `license.id` (and `license.notice` for BUSL/FSL parameters) in the site config; the legal plugin serves it at `/legal/license`.
6. Keep third-party licence notices (an SBOM or `THIRD-PARTY-NOTICES`) with every release.
7. Decide contributions: CLA or DCO, written down before you accept outside patches.
