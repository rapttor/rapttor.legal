---
doc: license
title: Licencia
version: 1.0.0
updated: 2026-10-23
lang: es
translation_of: 1.0.0
status: draft
when: license.id
summary: La licencia con la que se publica {{product.name}}.
---

# Licencia

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

**{{product.name}}** se publica por **{{license.holder}}** bajo la **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Este es un resumen en lenguaje llano, que no sustituye al texto de la licencia que figura más abajo.)*

{{#if license.url}}Texto canónico: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Preguntas o solicitudes de permiso: [{{company.legal_email}}](mailto:{{company.legal_email}}). El uso del sitio web y de los servicios de {{product.name}} se rige por nuestras [Condiciones del servicio]({{url.terms}}).

## Texto completo {#text}

El texto inglés de la licencia que figura a continuación es el texto auténtico.

```text
{{license.text}}
```
