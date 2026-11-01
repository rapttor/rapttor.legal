---
doc: license
title: Licencia
version: 1.0.0
updated: 2026-10-23
lang: es-MX
translation_of: 1.0.0
status: draft
when: license.id
summary: La licencia con la que se publica {{product.name}}.
---

# Licencia

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

**{{product.name}}** se publica por **{{license.holder}}** bajo los términos de **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Este es un resumen en lenguaje sencillo, no un sustituto del texto de la licencia que aparece abajo.)*

{{#if license.url}}Texto canónico: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Preguntas o solicitudes de permiso: [{{company.legal_email}}](mailto:{{company.legal_email}}). El uso del sitio web y de los servicios de {{product.name}} se rige por nuestros [Términos de servicio]({{url.terms}}).

## Texto completo {#text}

El texto original en inglés de la licencia es el único auténtico y prevalece sobre cualquier traducción; esta versión en español es solo orientativa.

```text
{{license.text}}
```
