---
doc: cookies
title: Política de cookies
version: 1.1.0
updated: 2026-10-31
lang: es-MX
translation_of: 1.1.0
status: draft
summary: Qué cookies y tecnologías similares usa {{product.name}}, para qué y cómo puede controlarlas.
---

# Política de cookies

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Esta política explica cómo **{{company.name}}** usa cookies y tecnologías similares en {{product.name}} y en nuestros demás Servicios. Los datos personales recopilados a través de ellas se tratan como se describe en el [Aviso de privacidad]({{url.privacy}}).

## 1. Qué son {#what}

Las cookies son pequeños archivos que un sitio web guarda en su dispositivo. "Tecnologías similares" incluye el almacenamiento local y de sesión, los identificadores de dispositivo y los SDK en aplicaciones móviles, los píxeles y las señales parecidas a la huella digital del dispositivo (fingerprinting). Usamos la palabra "cookies" para referirnos a todas ellas.

## 2. Categorías que usamos {#categories}

| Categoría | Finalidad | ¿Se requiere consentimiento? |
|---|---|---|
| **Estrictamente necesarias** | Mantener su sesión iniciada, recordar su carrito o su configuración durante una sesión, proteger contra fraudes y ataques CSRF, equilibrar la carga del servidor y guardar sus opciones de cookies | No: son necesarias para que los Servicios funcionen o para entregar lo que usted solicitó |
| **Preferencias** | Recordar el idioma, el tema, el diseño y opciones similares | Sí, salvo que sean estrictamente necesarias para una función que usted solicitó |
{{#if feature.analytics}}| **Analítica** | Medir cómo se usan los Servicios y detectar errores para poder mejorarlos | Sí (cuando la ley lo exija) |
{{/if}}{{#if feature.ads}}| **Publicidad / marketing** | Mostrar y medir anuncios relevantes, limitar repeticiones y vincular la actividad entre sitios y aplicaciones | Sí |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Actualmente usamos **solo cookies estrictamente necesarias y de preferencias**, y no usamos cookies de analítica ni de publicidad.{{/unless}}{{/unless}}

## 3. Las cookies en detalle {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Los nombres exactos de las cookies, sus proveedores y su duración aparecen en el cuadro de configuración de cookies, y están disponibles a solicitud en [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Sus opciones {#choices}

- **Aviso de consentimiento / configuración.** Cuando se requiere consentimiento, le pedimos permiso antes de instalar cookies no esenciales, con una opción para rechazarlas tan fácil como aceptarlas. Puede cambiar o retirar su elección en cualquier momento a través del enlace de configuración de cookies en el pie de página. Retirar su consentimiento no afecta el tratamiento realizado con anterioridad.
- **Controles del navegador.** La mayoría de los navegadores le permiten bloquear o eliminar cookies; busque en Configuración → Privacidad. Bloquear las cookies estrictamente necesarias puede impedir el inicio de sesión y otras funciones.
- **Sin grabación de sesiones.** No usamos herramientas de reproducción de sesiones ni de grabación de pantalla.
{{#if feature.external}}- **Recursos de terceros.** Cuando un recurso (por ejemplo, tipografías, mapas o video) se carga desde el servidor de otra empresa, su dirección IP se envía a esa empresa. Pedimos su consentimiento para cada recurso por separado en la configuración de cookies y lo cargamos solo después de que usted lo acepte; puede cambiar su elección en cualquier momento.
{{/if}}- **Señales.** Tratamos Global Privacy Control (GPC) y otras señales similares de exclusión del navegador como un rechazo al rastreo no esencial y a la venta o compartición de datos personales.
{{#if feature.ads}}- **Opciones de publicidad.** Puede desactivar la publicidad basada en intereses desde la configuración de su dispositivo (restableciendo o limitando su identificador publicitario) y con herramientas como youronlinechoices.eu u optout.aboutads.info. Seguirá viendo anuncios, solo que menos relevantes.
{{/if}}
## 5. Cuánto tiempo duran {#duration}

Las cookies de sesión expiran cuando cierra el navegador. Las cookies persistentes duran el periodo indicado en la tabla y, en todo caso, no más de lo que recomienda la ley (generalmente no más de 13 meses para el consentimiento de analítica y publicidad, que le pedimos renovar).

## 6. Terceros {#third-parties}

Algunas cookies las instalan terceros cuyos servicios utilizamos (analítica, contenido multimedia incrustado, pagos, chat de soporte). Estos actúan bajo sus propias políticas y, cuando son responsables independientes, usted debe leer esas políticas. Los enumeramos en la tabla de arriba.
{{#if table.external}}
Recursos que reciben su dirección IP al cargarse:

{{table.external}}
{{/if}}
## 7. Cambios {#changes}

Si agregamos o cambiamos cookies no esenciales, actualizaremos esta política y le pediremos nuevamente su consentimiento cuando sea necesario. Preguntas: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
