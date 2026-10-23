# Template spec (contract for `rapttor/yii2-legal` and any other consumer)

The repository publishes **Markdown templates**. They are distributed as **packages** (Composer `rapttor/legal` first; npm and PyPI from the same repo later), so a site gets the text at install/update time and never fetches it at runtime. A consumer fills in the site's own data, renders Markdown to HTML and serves the pages. All company data lives in the consumer's config, never in this repository.

## Files

| Path | Purpose |
|---|---|
| `manifest.json` | Generated index: documents per language with `version`, `updated`, `sha256`, `requires`, `flags`, `when`. Lets a client list what a configuration publishes and validate its config without reading every template. |
| `placeholders.json` | Catalog of every placeholder: label, `required`, `default`, `flag`, `block`. |
| `<lang>/<doc>.md` | One document. Front matter, then Markdown with placeholders. File name = document id. |
| `src/` | PHP reference implementation (`Renderer`, `Library`). |
| `tests/fixtures/grammar.json` | Language-neutral conformance cases. A client in any language is correct when it produces exactly `expected` (and `missing`) for every case. |
| `tests/run.php` | Runs the fixtures plus a render of every profile and every feature flag combination. |
| `presets.json` | Country presets (law, venue, authority) and product profiles (feature-flag bundles) used by the builder/setup form. |
| `examples/*.json` | Sample site config, generated with `tools/init.php`. |
| `tools/build.php` | Lint + manifest generator (`--check` in CI). |
| `tools/render.php` | Reference renderer; behaviour the plugin must match. |
| `tools/init.php` | Placeholder builder: questions in, minimal config out. |

## Front matter

```yaml
---
doc: privacy            # = file name, [a-z_]+
title: Privacy Policy
version: 1.0.0          # semver; bump MAJOR for a change in rights/obligations, MINOR for added clauses, PATCH for wording
updated: 2026-10-23     # date of the last substantive change; shown to users as {{doc.updated}}
lang: en                # = directory name
summary: One sentence, may contain placeholders (use for <meta description>).
when: feature.game     # optional: publish this document only when that key is non-empty (a feature flag, or e.g. license.id)
---
```

## Languages

`<lang>/<doc>.md` for each language in `i18n/languages.json`. A translation has the same front matter as the English file plus `translation_of` (the English `version` it was made from), `status` (`draft`, `community`, `reviewed`) and, once reviewed, `reviewed_by`. It must contain exactly the same multiset of template tags (ignoring `|fallback` text), the same heading anchors and levels, the same link targets and the same number of table rows as the English file; `tools/build.php` enforces this. `sr-Cyrl` is virtual: clients transliterate `sr` with `Transliterator` (tests/fixtures/transliteration.json) and keep tags, anchors, link targets, code, URLs, e-mails and `i18n/keep-latin.txt` entries unchanged. Clients resolve a requested tag through `aliases` and the `fallback` chain, hide `draft` documents unless configured otherwise, and fall back per document. `law.governing`, `law.venue` and `law.authority` default from `i18n/jurisdictions.json` (`law.jurisdiction`, language, then English). The `urlFor` callback receives (document id, language).

## Placeholder grammar

Processed **before** Markdown rendering, on the document body (and front matter `title`/`summary`).

| Syntax | Meaning |
|---|---|
| `{{key}}` | Value of `key` (dotted, lower-case). Unknown/empty required value: see Missing values. |
| `{{key\|fallback}}` | `fallback` if `key` is empty. |
| `{{#if key}}…{{else}}…{{/if}}` | Block if `key` is non-empty and not `0`. `{{else}}` optional. |
| `{{#unless key}}…{{/unless}}` | Inverse. |
| `\{{` | Literal `{{` (not currently used). |

Blocks nest. No expressions, no loops, no HTML escaping inside values: the consumer **must escape values for HTML safety** after rendering Markdown (or sanitise the HTML), because values come from site config. Do not render the Markdown with raw HTML enabled.

### Value resolution order

1. Site config value (non-empty).
2. Catalog `default`. A default of the form `@other.key` means "same as `other.key`", resolved recursively.
3. Required keys have no default: `company.name`, `company.address` (one line), `company.country`, `company.email`, `company.website`.
4. Computed by the consumer: `doc.id`, `doc.title`, `doc.version`, `doc.updated`, `doc.lang`, and **`url.<doc id>`**: the site URL where that document is published (for cross-links such as `[Privacy Policy]({{url.privacy}})`). A consumer publishes whatever `Library::published()` returns (always `privacy`, `terms`, `acceptable_use`, `cookies`, `impressum`, `copyright`, `security`, `subprocessors`; `dpa` with `feature.processor_role`; `refunds` with `feature.payments`; `game_rules` with `feature.game`; `app_eula` with `feature.mobile`).

### Feature flags

Keys prefixed `feature.` are booleans that switch whole clauses on and off, so a site gets only the clauses that fit what it actually does (for example `feature.ai`, `feature.ugc`, `feature.payments`, `feature.consumers`, `feature.processor_role`). Config booleans map to `1` / empty. **Unknown flags are false**, so adding a new flag in this repo never turns on text on an existing site.

### Block placeholders

`table.subprocessors` and `table.cookies` are multi-line Markdown (tables) supplied by the site. When empty the templates fall back to a sentence.

### Missing values

A required key with no value makes the document unpublishable. Consumers should: (1) refuse to publish and show the previous good render, if any; (2) log the missing keys; (3) in development, render `[key]` markers. Optional empty values render as nothing.

### What is guaranteed

- Every key used in a template exists in `placeholders.json` (CI-checked), so a consumer can validate its config **before** fetching the documents using `manifest.json → requires`.
- Section anchors (`{#anchor}` after headings) are stable within a major version; link to them.
- Cross-document links use only `{{url.<id>}}`; relative links are never used.

## Update policy for consumers

1. **Updates arrive with the package** (`composer update rapttor/legal`), which is the approval step. The lockfile records which legal release each site runs. Wrappers should store `Library::release()` with the site's publication record.
2. Review the release notes before updating: a document `version` MAJOR or MINOR bump means rights or obligations changed. The site must then give its users notice as its own Terms and Privacy Policy require (`policy.notice_days`) before the new text takes effect. PATCH bumps are wording fixes.
3. Publish only documents returned by `Library::published($config)`; never link to a document that is not published (the renderer reports `[url.x]` in that case).
4. Keep every published render (text, config snapshot, date) so you can show what was in force on any date.
5. If a required key is missing, refuse to publish and keep the previous good render.
6. Render Markdown with raw HTML disabled and sanitise the HTML: config values are untrusted.

## Adding or changing a document

Edit `en/<doc>.md`, bump `version` and `updated`, run `php tools/build.php`, commit `manifest.json` with the change. Add a translation by creating `<lang>/<doc>.md` for every document in `en/`; missing ones fall back to English (the lint warns).
