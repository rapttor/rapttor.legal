---
doc: license
title: Licenca
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
when: license.id
summary: Licenca pod kojom se objavljuje {{product.name}}.
---

# Licenca

*Verzija {{doc.version}}, posljednje ažuriranje {{doc.updated}}.*

**{{product.name}}** objavljuje **{{license.holder}}** pod **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Ovo je sažetak jednostavnim jezikom i ne zamjenjuje tekst licence u nastavku.)*

{{#if license.url}}Kanonski tekst: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Pitanja ili zahtjevi za dopuštenje: [{{company.legal_email}}](mailto:{{company.legal_email}}). Korištenje web-mjesta i usluga {{product.name}} uređeno je našim [Uvjetima korištenja]({{url.terms}}).

## Cjeloviti tekst {#text}

Mjerodavan je engleski tekst licence.

```text
{{license.text}}
```
