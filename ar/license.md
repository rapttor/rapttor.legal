---
doc: license
title: الترخيص
version: 1.0.0
updated: 2026-10-23
lang: ar
translation_of: 1.0.0
status: draft
when: license.id
summary: الترخيص الذي يُصدر {{product.name}} بموجبه.
---

# الترخيص

*الإصدار {{doc.version}}، آخر تحديث {{doc.updated}}.*

تُصدر **{{product.name}}** عن **{{license.holder}}** بموجب **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(هذا ملخص بلغة مبسطة، وليس بديلاً عن نص الترخيص أدناه.)*

{{#if license.url}}النص المعتمد: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

للاستفسارات أو طلبات الإذن: [{{company.legal_email}}](mailto:{{company.legal_email}}). ويخضع استخدام موقع {{product.name}} وخدماتها لـ[شروط الخدمة]({{url.terms}}) الخاصة بنا.

## النص الكامل {#text}

النص الإنجليزي للترخيص هو المعتمد قانوناً، والترجمة للإعلام فقط.

```text
{{license.text}}
```
