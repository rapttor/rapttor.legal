---
doc: license
title: Ліцензія
version: 1.0.0
updated: 2026-10-23
lang: uk
translation_of: 1.0.0
status: draft
when: license.id
summary: Ліцензія, на умовах якої випускається {{product.name}}.
---

# Ліцензія

*Версія {{doc.version}}, останнє оновлення {{doc.updated}}.*

**{{product.name}}** випускається **{{license.holder}}** на умовах **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Це стислий опис простою мовою, а не заміна наведеного нижче тексту ліцензії.)*

{{#if license.url}}Канонічний текст: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Питання або запити на дозвіл: [{{company.legal_email}}](mailto:{{company.legal_email}}). Використання веб-сайту та послуг {{product.name}} регулюється нашими [Умовами надання послуг]({{url.terms}}).

## Повний текст {#text}

Англійський текст ліцензії є авторитетним. У разі розбіжностей із перекладом переважає англійський текст.

```text
{{license.text}}
```
