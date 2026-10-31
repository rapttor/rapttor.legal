---
doc: license
title: Licencja
version: 1.0.0
updated: 2026-10-23
lang: pl
translation_of: 1.0.0
status: draft
when: license.id
summary: Licencja, na której udostępniane jest {{product.name}}.
---

# Licencja

*Wersja {{doc.version}}, ostatnia aktualizacja {{doc.updated}}.*

**{{product.name}}** jest udostępniane przez **{{license.holder}}** na warunkach **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(To jest streszczenie napisane prostym językiem, a nie zamiennik poniższego tekstu licencji.)*

{{#if license.url}}Tekst wzorcowy: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Pytania lub wnioski o zgodę: [{{company.legal_email}}](mailto:{{company.legal_email}}). Korzystanie z witryny i usług (produkt: {{product.name}}) jest regulowane [Regulaminem]({{url.terms}}).

## Pełny tekst {#text}

Wiążący jest angielski tekst licencji.

```text
{{license.text}}
```
