---
doc: license
title: Licence
version: 1.0.0
updated: 2026-10-23
lang: en
when: license.id
summary: The licence under which {{product.name}} is released.
---

# Licence

*Version {{doc.version}}, last updated {{doc.updated}}.*

**{{product.name}}** is released by **{{license.holder}}** under the **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(This is a plain-language summary, not a replacement for the licence text below.)*

{{#if license.url}}Canonical text: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Questions or permission requests: [{{company.legal_email}}](mailto:{{company.legal_email}}). Use of the {{product.name}} website and services is governed by our [Terms of Service]({{url.terms}}).

## Full text {#text}

```text
{{license.text}}
```
