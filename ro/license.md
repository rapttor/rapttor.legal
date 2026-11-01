---
doc: license
title: Licență
version: 1.0.0
updated: 2026-10-23
lang: ro
translation_of: 1.0.0
status: draft
when: license.id
summary: Licența în temeiul căreia este lansat {{product.name}}.
---

# Licență

*Versiunea {{doc.version}}, ultima actualizare {{doc.updated}}.*

**{{product.name}}** este lansat de **{{license.holder}}** sub **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Acesta este un rezumat în limbaj simplu, care nu înlocuiește textul licenței de mai jos.)*

{{#if license.url}}Textul canonic: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Întrebări sau cereri de permisiune: [{{company.legal_email}}](mailto:{{company.legal_email}}). Utilizarea site-ului și a serviciilor {{product.name}} este guvernată de [Termenii și condițiile]({{url.terms}}) noastre.

## Textul complet {#text}

Textul licenței în limba engleză, reprodus mai jos, este autoritar.

```text
{{license.text}}
```
