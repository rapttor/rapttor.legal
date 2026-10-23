---
doc: license
title: Licenca
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
when: license.id
summary: Licenca pod kojom se objavljuje {{product.name}}.
---

# Licenca

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

**{{product.name}}** objavljuje **{{license.holder}}** pod **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Ovo je sažetak u jednostavnom jeziku, a ne zamjena za tekst licence ispod.)*

{{#if license.url}}Kanonski tekst: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Pitanja ili zahtjevi za dozvolu: [{{company.legal_email}}](mailto:{{company.legal_email}}). Upotreba veb stranice i usluga {{product.name}} regulisana je našim [Uslovima korišćenja]({{url.terms}}).

## Puni tekst {#text}

Engleski tekst licence je mjerodavan; ovaj prijevod je samo informativan.

```text
{{license.text}}
```
