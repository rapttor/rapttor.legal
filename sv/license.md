---
doc: license
title: Licens
version: 1.0.0
updated: 2026-10-23
lang: sv
translation_of: 1.0.0
status: draft
when: license.id
summary: Licensen under vilken {{product.name}} släpps.
---

# Licens

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

**{{product.name}}** släpps av **{{license.holder}}** under **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Detta är en sammanfattning på vanlig språk och ersätter inte licenstexten nedan.)*

{{#if license.url}}Originaltext: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Frågor eller begäranden om tillstånd: [{{company.legal_email}}](mailto:{{company.legal_email}}). Användningen av webbplatsen och tjänsterna för {{product.name}} regleras av våra [användarvillkor]({{url.terms}}).

## Fullständig text {#text}

Den engelska licenstexten nedan är den auktoritativa versionen; denna svenska sida är endast en hjälp för läsningen.

```text
{{license.text}}
```
