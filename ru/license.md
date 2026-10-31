---
doc: license
title: Лицензия
version: 1.0.0
updated: 2026-10-23
lang: ru
translation_of: 1.0.0
status: draft
when: license.id
summary: Лицензия, на условиях которой выпускается {{product.name}}.
---

# Лицензия

*Версия {{doc.version}}, последнее обновление: {{doc.updated}}.*

**{{product.name}}** выпускается **{{license.holder}}** на условиях лицензии **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Это краткое изложение простым языком, а не замена приведенному ниже тексту лицензии.)*

{{#if license.url}}Канонический текст: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Вопросы и запросы на разрешение: [{{company.legal_email}}](mailto:{{company.legal_email}}). Использование веб-сайта и Услуг {{product.name}} регулируется нашими [Условиями использования]({{url.terms}}).

## Полный текст {#text}

Английский текст лицензии является единственным обладающим юридической силой; ниже он приведен без изменений.

```text
{{license.text}}
```
