---
doc: subprocessors
title: Lista de subencargados del tratamiento
version: 1.0.0
updated: 2026-10-23
lang: es
translation_of: 1.0.0
status: draft
summary: Terceros que tratan datos personales por cuenta de {{product.name}}.
---

# Lista de subencargados del tratamiento

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Para prestar {{product.name}}, **{{company.name}}** recurre a los siguientes terceros, que pueden tratar datos personales por nuestra cuenta. Cada uno de ellos está vinculado por un contrato escrito de protección de datos. {{#if feature.processor_role}}Esta lista es el Anexo III del [Anexo de tratamiento de datos]({{url.dpa}}) y se menciona en la [Política de privacidad]({{url.privacy}}).{{else}}Se menciona en la [Política de privacidad]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
La lista vigente está disponible previa solicitud en [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Cambios {#changes}

Damos un preaviso de al menos **{{policy.notice_days}} días** antes de añadir o sustituir un subencargado, actualizando esta página (compruebe la fecha de "última actualización") y enviando un correo electrónico a los clientes que se hayan suscrito en [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Los clientes pueden oponerse por motivos razonables de protección de datos, tal como se establece en el Anexo de tratamiento de datos.{{/if}}
