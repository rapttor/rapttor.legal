---
doc: subprocessors
title: Lista de subencargados
version: 1.0.0
updated: 2026-10-23
lang: es-MX
translation_of: 1.0.0
status: draft
summary: Terceros que tratan datos personales por cuenta de {{product.name}}.
---

# Lista de subencargados

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Para prestar {{product.name}}, **{{company.name}}** utiliza los siguientes terceros que pueden tratar datos personales por nuestra cuenta. Cada uno está obligado por un acuerdo escrito de protección de datos. {{#if feature.processor_role}}Esta lista es el Anexo III del [Anexo de tratamiento de datos personales]({{url.dpa}}) y se menciona en el [Aviso de privacidad]({{url.privacy}}).{{else}}Se menciona en el [Aviso de privacidad]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
La lista vigente está disponible a solicitud en [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Cambios {#changes}

Le avisaremos con al menos **{{policy.notice_days}} días** de anticipación antes de añadir o reemplazar a un subencargado, actualizando esta página (verifique la fecha de "última actualización") y por correo electrónico a los clientes suscritos en [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Los clientes pueden oponerse por motivos razonables de protección de datos, según se establece en el Anexo de tratamiento de datos personales.{{/if}}
