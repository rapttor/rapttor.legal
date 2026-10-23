---
doc: license
title: Licenca
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
when: license.id
summary: Licenca pod kojom se {{product.name}} objavljuje.
---

# Licenca

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

**{{product.name}}** se objavljuje pod licencom: **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}, a nosilac je **{{license.holder}}**.

{{license.summary}} *(Ovo je sažetak običnim jezikom i ne zamenjuje tekst licence ispod.)*

{{#if license.url}}Zvanični tekst: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Pitanja ili zahtevi za dozvolu: [{{company.legal_email}}](mailto:{{company.legal_email}}). Korišćenje veb-sajta i usluga {{product.name}} uređeno je našim [Uslovima korišćenja]({{url.terms}}).

## Pun tekst (merodavan je engleski original) {#text}

```text
{{license.text}}
```
