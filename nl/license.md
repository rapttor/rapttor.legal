---
doc: license
title: Licentie
version: 1.0.0
updated: 2026-10-23
lang: nl
translation_of: 1.0.0
status: draft
when: license.id
summary: De licentie waaronder {{product.name}} wordt uitgebracht.
---

# Licentie

*Versie {{doc.version}}, laatst bijgewerkt op {{doc.updated}}.*

**{{product.name}}** wordt uitgebracht door **{{license.holder}}** onder de **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Dit is een samenvatting in eenvoudige taal en geen vervanging van de licentietekst hieronder. De Engelse licentietekst is gezaghebbend.)*

{{#if license.url}}Canonieke tekst: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Vragen of verzoeken om toestemming: [{{company.legal_email}}](mailto:{{company.legal_email}}). Het gebruik van de website en diensten van {{product.name}} wordt beheerst door onze [Servicevoorwaarden]({{url.terms}}).

## Volledige tekst {#text}

```text
{{license.text}}
```
