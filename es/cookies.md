---
doc: cookies
title: Política de cookies
version: 1.1.0
updated: 2026-10-31
lang: es
translation_of: 1.1.0
status: draft
summary: Qué cookies y tecnologías similares utiliza {{product.name}}, para qué, y cómo puede controlarlas.
---

# Política de cookies

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Esta política explica cómo **{{company.name}}** utiliza cookies y tecnologías similares en {{product.name}} y en nuestros demás Servicios. Los datos personales recogidos a través de ellas se tratan como se describe en la [Política de privacidad]({{url.privacy}}).

## 1. Qué son {#what}

Las cookies son pequeños archivos que un sitio web almacena en su dispositivo. Entre las "tecnologías similares" se incluyen el almacenamiento local y de sesión, los identificadores del dispositivo y los SDK de las aplicaciones móviles, los píxeles y las señales similares a las huellas digitales. Utilizamos la palabra "cookies" para referirnos a todas ellas.

## 2. Categorías que utilizamos {#categories}

| Categoría | Finalidad | ¿Requiere consentimiento? |
|---|---|---|
| **Estrictamente necesarias** | Mantenerle conectado, recordar su carrito o su configuración durante una sesión, proteger frente al fraude y los ataques CSRF, equilibrar la carga del servidor, almacenar sus opciones de cookies | No: son necesarias para que los Servicios funcionen o para ofrecer lo que ha solicitado |
| **Preferencias** | Recordar el idioma, el tema, la disposición y opciones similares | Sí, salvo que sean estrictamente necesarias para una función que usted haya solicitado |
{{#if feature.analytics}}| **Analítica** | Medir cómo se utilizan los Servicios y detectar errores para poder mejorarlos | Sí (cuando lo exija la ley) |
{{/if}}{{#if feature.ads}}| **Publicidad / marketing** | Mostrar y medir anuncios relevantes, limitar las repeticiones y vincular la actividad entre sitios y aplicaciones | Sí |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Actualmente utilizamos **solo cookies estrictamente necesarias y de preferencias**, y no utilizamos cookies de analítica ni de publicidad.{{/unless}}{{/unless}}

## 3. Detalle de las cookies {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Los nombres exactos de las cookies, sus proveedores y sus duraciones figuran en el cuadro de configuración de cookies, y pueden solicitarse en [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Sus opciones {#choices}

- **Banner de consentimiento / configuración.** Cuando se requiera consentimiento, le pediremos autorización antes de instalar cookies no esenciales, con una opción clara para rechazarlas tan fácil como para aceptarlas. Puede cambiar o retirar su elección en cualquier momento mediante el enlace de configuración de cookies del pie de página. La retirada no afecta al tratamiento realizado con anterioridad.
- **Controles del navegador.** La mayoría de los navegadores le permiten bloquear o borrar cookies; busque en Configuración → Privacidad. Bloquear las cookies estrictamente necesarias puede impedir el inicio de sesión y otras funciones.
- **Sin grabación de sesiones.** No utilizamos herramientas de reproducción de sesiones ni de grabación de pantalla.
{{#if feature.external}}- **Recursos de terceros.** Cuando un recurso (por ejemplo, tipografías, mapas o vídeos) se carga desde el servidor de otra empresa, su dirección IP se envía a esa empresa. Le pedimos consentimiento para cada recurso por separado en la configuración de cookies y lo cargamos solo después de que lo acepte; puede cambiar su elección en cualquier momento.
{{/if}}- **Señales.** Tratamos Global Privacy Control (GPC) y señales similares de exclusión de los navegadores como un rechazo del seguimiento no esencial y de la venta o compartición de datos personales.
{{#if feature.ads}}- **Opciones publicitarias.** Puede excluirse de la publicidad basada en intereses a través de la configuración de su dispositivo (restableciendo o limitando su identificador publicitario) y de herramientas como youronlinechoices.eu u optout.aboutads.info. Seguirá viendo anuncios, aunque menos relevantes.
{{/if}}
## 5. Cuánto duran {#duration}

Las cookies de sesión caducan al cerrar el navegador. Las cookies persistentes duran el periodo indicado en la tabla y, en todo caso, no más de lo que recomienda la ley (en general, no más de 13 meses para el consentimiento de analítica y publicidad, que le pedimos renovar).

## 6. Terceros {#third-parties}

Algunas cookies las instalan terceros cuyos servicios utilizamos (analítica, contenido multimedia incrustado, pagos, chat de atención). Actúan con arreglo a sus propias políticas y, cuando son responsables del tratamiento independientes, debe leer dichas políticas. Los enumeramos en la tabla anterior.
{{#if table.external}}
Recursos que reciben su dirección IP al cargarse:

{{table.external}}
{{/if}}

## 7. Cambios {#changes}

Si añadimos o modificamos cookies no esenciales, actualizaremos esta política y le pediremos de nuevo su consentimiento cuando sea necesario. Preguntas: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
