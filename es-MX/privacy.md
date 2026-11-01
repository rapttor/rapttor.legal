---
doc: privacy
title: Aviso de privacidad
version: 1.2.1
updated: 2026-10-31
lang: es-MX
translation_of: 1.2.1
status: draft
summary: Cómo {{product.name}} recopila, usa, comparte y protege los datos personales, y los derechos que usted tiene.
---

# Aviso de privacidad

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

## 1. Quiénes somos {#who-we-are}

Este aviso explica cómo **{{company.name}}**, con domicilio registrado en {{company.address}} ("**{{product.name}}**", "nosotros"), trata datos personales cuando usted usa {{product.name}}, nuestros sitios web, aplicaciones, APIs y servicios relacionados (los "**Servicios**").

Para los datos personales cuyo tratamiento decidimos, en cuanto a su finalidad y su forma (por ejemplo, su cuenta, sus visitas a nuestro sitio web y la facturación), somos el **responsable**. Contacto: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Nuestro oficial de protección de datos personales puede ser contactado en [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}No hemos designado un oficial de protección de datos personales porque la ley no lo exige para nuestras actividades. Las preguntas sobre privacidad se envían a [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Representante en la UE (art. 27 RGPD):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Representante en el Reino Unido (art. 27 RGPD del Reino Unido):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Cuando actuamos como encargado

Si usted usa los Servicios a través de una organización (su empleador o un cliente empresarial), esa organización normalmente es la responsable de los datos que coloca en los Servicios, y nosotros los tratamos por cuenta de ella conforme a nuestro [Anexo de tratamiento de datos personales]({{url.dpa}}). En ese caso, dirija sus solicitudes a esa organización; nosotros la ayudaremos a responder. Este aviso se aplica entonces solo a los datos que controlamos nosotros mismos (administración de cuentas, facturación, seguridad y sitio web).
{{/if}}

## 2. Datos que recopilamos {#data-we-collect}

| Categoría | Ejemplos | Fuente |
|---|---|---|
| **Datos de la cuenta** | nombre, correo electrónico, hash de la contraseña, datos del perfil, idioma, preferencias | Usted |
| **Datos de contacto y de soporte** | mensajes, archivos adjuntos, notas de llamadas, comentarios, respuestas de encuestas | Usted |
| **Contenido que envía** | archivos, texto, configuraciones y cualquier otra cosa que coloque en los Servicios | Usted |
{{#if feature.anonymous}}| **Datos de cuenta anónima** | un identificador aleatorio de cuenta, el navegador o la sesión del dispositivo que lo contiene, el contenido que usted crea y una dirección de correo electrónico si después la vincula | Usted, automáticamente |
{{/if}}{{#if feature.uploads}}| **Archivos e imágenes que carga** | los archivos en sí y los metadatos que contienen (por ejemplo, datos de la cámara o la ubicación en las fotos) | Usted |
{{/if}}| **Registros de consentimiento** | lo que aceptó (documentos, confirmación de edad, opciones voluntarias), la versión, el idioma, la fecha y la forma en que lo aceptó | Usted |
| **Datos de uso y del dispositivo** | dirección IP, tipo de navegador y de dispositivo, sistema operativo, idioma, páginas y funciones utilizadas, marcas de tiempo, referente, registros de fallos y errores | Automáticamente |
| **Cookies y tecnologías similares** | identificadores en cookies, almacenamiento local y SDK (véase la [Política de cookies]({{url.cookies}})) | Automáticamente |
{{#if feature.payments}}| **Datos de pago y de transacciones** | plan, facturas, nombre y domicilio de facturación, número de identificación fiscal, estado del pago; los datos de la tarjeta los maneja nuestro procesador de pagos y nosotros no los almacenamos | Usted, procesador de pagos |
{{/if}}{{#if feature.location}}| **Datos de ubicación** | ubicación precisa solo si la activa en su dispositivo; de lo contrario, ubicación aproximada a partir de su dirección IP | Su dispositivo |
{{/if}}| **Datos de cuentas de terceros** | nombre, correo electrónico, foto de perfil e identificador compartidos por un proveedor de inicio de sesión que usted elija | Tercero, con su permiso |
{{#if feature.ugc}}| **Comunicaciones entre usuarios** | mensajes e interacciones que envía a través de los Servicios | Usted |
{{/if}}{{#if feature.mobile}}| **Datos del dispositivo móvil** | modelo y versión del sistema operativo del dispositivo, versión de la aplicación, identificadores de instancia de la aplicación y tokens de notificaciones push, idioma y zona horaria, estado de los permisos; el identificador publicitario solo si usted permite el rastreo | Su dispositivo |
{{/if}}{{#if feature.game}}| **Datos de juego** | progreso del juego, puntuaciones, clasificaciones, artículos y compras, historial de partidas, chat dentro del juego y, si se usan, reportes de voz, señales antitrampas y de integridad, perfil público (nombre, avatar, rango) | Usted, automáticamente |
{{/if}}| **Señales de seguridad y fraude** | intentos fallidos de inicio de sesión, reportes de abuso, puntajes de riesgo, solicitudes bloqueadas | Automáticamente, otros usuarios |

No recopilamos intencionalmente datos de categorías especiales (salud, datos biométricos, opiniones políticas o religiosas y similares). Por favor, no los envíe salvo que una función lo solicite expresamente. Si los envía de todos modos, usted es responsable de contar con una base jurídica para hacerlo.

Usted no está obligado a proporcionarnos datos personales, pero sin algunos de ellos (por ejemplo, una dirección de correo electrónico) no podemos crearle una cuenta.

### Rastreo que no utilizamos {#no-tracking}

**No** usamos herramientas de reproducción de sesiones ni de grabación de pantalla, captura de pulsaciones de teclas o de movimientos del ratón, ni huellas digitales del navegador (fingerprinting). {{#if feature.analytics}}La analítica solo se ejecuta con su consentimiento (véase la [Política de cookies]({{url.cookies}})).{{else}}No usamos rastreadores de analítica ni de publicidad.{{/if}}
{{#if feature.external}}
### Recursos de terceros y su dirección IP {#external}

Algunas funciones cargan contenido desde servidores de otras empresas (por ejemplo, tipografías, mapas, video o verificaciones de seguridad). Cuando su navegador obtiene ese contenido, **su dirección IP y datos técnicos se envían a esa empresa**, que puede estar fuera de su país. Cargamos estos recursos solo después de que usted acepte cada uno en la configuración de cookies, la cual puede cambiar en cualquier momento; si lo rechaza, usamos una alternativa o la función permanece desactivada.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### Correos electrónicos {#emails}

Enviamos los correos electrónicos que necesitan los Servicios (enlaces para iniciar sesión, recibos, avisos de seguridad){{#if feature.marketing}} y, solo cuando usted lo haya aceptado o la ley lo permita, noticias sobre el producto{{/if}}. Cada correo contiene un enlace para dejar de recibir correos de nuestra parte. {{#if feature.marketing}}Los correos opcionales dejan de enviarse con un solo clic, de inmediato. {{/if}}Como bloquear todos los correos también bloquearía los enlaces para iniciar sesión, una solicitud para bloquear **todos** los correos de este servicio se confirma con un último correo que contiene un enlace que demuestra que la dirección es suya. Después agregamos la dirección a la lista de no envío de nuestro proveedor de correo electrónico y la conservamos ahí para respetar su decisión (obligación legal e interés legítimo en respetar su solicitud).
{{/if}}{{#if feature.age_gate}}
### Confirmación de edad {#age}

Antes de que use funciones que involucren {{policy.age_topics|contenido sensible por edad}}, le pedimos que confirme que tiene al menos {{policy.age_gate}} años y la mayoría de edad conforme a las reglas de su país. No le pedimos su fecha de nacimiento; solo conservamos su confirmación y la fecha en que la dio. Si sabemos que alguien no tiene la edad requerida, bloqueamos la cuenta y eliminamos los datos.
{{/if}}{{#if feature.gambling}}
Para las funciones de juegos de azar también podemos pedirle prueba de su edad e identidad, y usar un proveedor de verificación para ello. Conservamos el resultado y las pruebas que exige la ley.
{{/if}}

## 3. Por qué usamos sus datos y nuestros fundamentos jurídicos {#purposes}

| Finalidad | Fundamento jurídico (GDPR / UK GDPR) |
|---|---|
| Prestar los Servicios, crear y administrar su cuenta, procesar pedidos | Contrato (Art. 6(1)(b)) |
| Atención al cliente y comunicación sobre su uso de los Servicios | Contrato; intereses legítimos |
| Seguridad, prevención de abuso y fraude, y cumplimiento de nuestros [Términos]({{url.terms}}) y de la [Política de uso aceptable]({{url.acceptable_use}}) | Intereses legítimos (Art. 6(1)(f)); obligación legal |
| Depuración, confiabilidad, planeación de capacidad y mejora de los Servicios | Intereses legítimos |
{{#if feature.analytics}}| Analítica de uso | Consentimiento cuando lo exija la ley; de lo contrario, intereses legítimos |
{{/if}}{{#if feature.marketing}}| Noticias del producto y correos de marketing | Consentimiento, o intereses legítimos para clientes existentes cuando la ley lo permita; puede darse de baja en cualquier momento |
{{/if}}{{#if feature.ads}}| Publicidad y medición | Consentimiento |
{{/if}}| Registro de sus consentimientos y atención de sus elecciones sobre correos electrónicos | Obligación legal; intereses legítimos |
{{#if feature.external}}| Carga de recursos de terceros que reciben su dirección IP | Consentimiento (Art. 6(1)(a), y las reglas de ePrivacy para el acceso a su dispositivo) |
{{/if}}| Contabilidad, impuestos y otras obligaciones legales | Obligación legal (Art. 6(1)(c)) |
| Establecer, ejercer o defender reclamaciones legales; responder a autoridades | Intereses legítimos; obligación legal |
| Transmisiones de negocio (fusión, adquisición, venta de activos) | Intereses legítimos |

Cuando nos basamos en intereses legítimos, los hemos sopesado frente a sus derechos; puede solicitar detalles y oponerse (sección 10). Cuando nos basamos en el consentimiento, puede retirarlo en cualquier momento; ello no afecta el tratamiento realizado con anterioridad.

{{#if feature.ai}}
### Funciones asistidas por IA {#ai}

Algunas funciones usan modelos de aprendizaje automático o modelos generativos. Cuando las usa, el contenido que envía como entrada se envía al proveedor, que actúa como nuestro encargado, para producir el resultado.

- **No** usamos su contenido para entrenar modelos de uso general, y exigimos a nuestros proveedores que tampoco lo hagan, salvo que usted lo acepte expresamente.
- El resultado de la IA puede ser erróneo, incompleto o sesgado. No lo use como base de decisiones legales, médicas, financieras u otras de alto impacto sin revisión humana.
- No tomamos decisiones con efectos jurídicos o efectos similarmente significativos sobre usted únicamente por medios automatizados. Las restricciones de cuenta por abuso las revisa una persona cuando usted lo solicita (véase la [Política de uso aceptable]({{url.acceptable_use}}), Enforcement).
- El contenido generado por IA se etiqueta cuando la ley lo exige.
{{/if}}

## 4. Con quién compartimos datos {#sharing}

**No vendemos sus datos personales** y no los "compartimos" para publicidad conductual entre contextos{{#if feature.ads}}, salvo como se describe en la Política de cookies y solo cuando usted haya dado su consentimiento{{/if}}.

Compartimos datos personales únicamente con:

- **Proveedores de servicios (encargados)** que actúan por nuestra instrucción conforme a contratos por escrito: alojamiento e infraestructura, entrega de correo electrónico, herramientas de atención al cliente, monitoreo de errores{{#if feature.payments}}, procesamiento de pagos{{/if}}{{#if feature.ai}}, proveedores de IA{{/if}}. La lista vigente está en nuestra [Lista de subencargados]({{url.subprocessors}}).
- **Plataformas y tiendas de aplicaciones** que usted utiliza para acceder a los Servicios (por ejemplo, Apple, Google, tiendas de consolas o de PC), que gestionan los pagos y pueden proporcionarnos datos limitados de compra y de cuenta;
- **Otros usuarios o el público**, solo según lo que usted indique (por ejemplo, el contenido que decida publicar{{#if feature.ugc}} o los mensajes que envíe{{/if}}).
- **Asesores profesionales** (abogados, auditores, aseguradoras) bajo confidencialidad.
- **Autoridades, tribunales y personas afectadas** cuando la ley lo exija, para responder a procesos legales válidos, para proteger derechos, la seguridad o el patrimonio, o para investigar abusos y fraudes. Verificamos la validez de las solicitudes y, cuando la ley lo permita, se lo informamos.
- **Un sucesor** en una fusión, adquisición, financiamiento o venta de activos, que deberá respetar este aviso; le notificaremos los cambios materiales de control que afecten sus datos.
- **Cualquier otra persona** solo con su consentimiento.

## 5. Transferencias internacionales {#transfers}

Operamos desde {{company.country}}{{#if hosting.region}} y almacenamos los datos principalmente en {{hosting.region}}{{/if}}. Algunos proveedores tratan datos en otros países, incluidos los Estados Unidos. Cuando datos personales del EEE, del Reino Unido o de Suiza se transfieren a un país sin decisión de adecuación, usamos una salvaguarda reconocida: el Marco de Privacidad de Datos UE-EE. UU. (o sus extensiones para el Reino Unido y Suiza) cuando el destinatario está certificado; de lo contrario, las **cláusulas contractuales tipo** de la Comisión Europea, con el **Anexo de transferencia internacional de datos del Reino Unido** o las modificaciones suizas cuando corresponda, además de medidas complementarias como el cifrado en tránsito y en reposo. Puede solicitar una copia de las salvaguardas pertinentes en [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Cuánto tiempo conservamos los datos {#retention}

| Datos | Conservación |
|---|---|
| Datos de la cuenta y contenido | Mientras su cuenta esté activa; después, se eliminan o anonimizan dentro de {{policy.retention_account_days}} días posteriores al cierre |
| Registros del servidor y de seguridad | 90 días |
| Copias de respaldo | Rotativas, hasta 35 días; los datos eliminados salen de los respaldos conforme a ese ciclo |
| Facturas y registros contables | {{policy.retention_billing_years}} años, o por el tiempo que exija la ley |
| Correspondencia de soporte | Hasta 3 años después del cierre del caso, o mientras la cuenta esté activa si es más largo |
| Registros de consentimientos, bajas y solicitudes de derechos | Mientras sea necesario para demostrar el cumplimiento |
| Datos necesarios para una reclamación legal o una investigación | Hasta que el asunto se resuelva y hayan vencido los plazos de prescripción |
| Registros de abuso y de suspensiones (identificador, motivo, fecha) | Hasta 5 años, para evitar abusos reiterados |
| Registros de consentimiento y lista de no envío de correos | Registros de consentimiento: durante la vida de la cuenta más el plazo de prescripción; entradas de no envío: hasta que nos pida eliminarlas |

Cuando la finalidad termina, eliminamos los datos o los anonimizamos de forma irreversible.

## 7. Seguridad {#security}

Aplicamos medidas técnicas y organizativas acordes con el riesgo: cifrado en tránsito, cifrado de los datos sensibles en reposo, control de acceso con privilegios mínimos, salvaguardas de autenticación, registro de actividad, respaldos, gestión de vulnerabilidades y obligaciones de confidencialidad del personal. Ningún sistema es perfectamente seguro. Use una contraseña fuerte y única, active la autenticación de múltiples factores cuando esté disponible e informe de inmediato a [{{company.email}}](mailto:{{company.email}}) si sospecha que su cuenta fue comprometida. Consulte también nuestra página de [Seguridad y divulgación de vulnerabilidades]({{url.security}}).

Si una vulneración de seguridad probablemente ponga en riesgo sus derechos y libertades, notificaremos a la autoridad de protección de datos en un plazo de 72 horas desde que tengamos conocimiento de ella, cuando la ley lo exija, y le notificaremos sin demora indebida cuando la ley lo requiera.

## 8. Menores {#children}

{{#if feature.minors}}Los Servicios no están dirigidos a niños menores de 13 años, y no recopilamos a sabiendas datos personales de ellos. Las personas de {{policy.min_age}} años en adelante que aún no han alcanzado la mayoría de edad pueden usar los Servicios **solo con el consentimiento de un padre, madre o tutor**, quien puede revisar, corregir, limitar o eliminar los datos del menor y retirar el consentimiento contactando a [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Recopilamos solo los datos necesarios para los Servicios, no usamos datos de menores para publicidad conductual y aplicamos configuraciones predeterminadas adecuadas para su edad (perfiles privados, comunicaciones limitadas) cuando podemos. Cuando la ley de un país fija una edad mayor para el consentimiento digital, exigimos el consentimiento de los padres por debajo de esa edad.{{else}}Los Servicios no están dirigidos a niños. Debe tener al menos {{policy.min_age}} años para tener una cuenta. No recopilamos a sabiendas datos personales de nadie menor de {{policy.min_age}} años (o de la edad mayor de consentimiento digital de su país; en Estados Unidos, menor de 13 años para efectos de COPPA). Si cree que un niño nos ha proporcionado datos personales, contacte a [{{company.privacy_email}}](mailto:{{company.privacy_email}}) y los eliminaremos y cerraremos la cuenta. Cuando un padre, madre o tutor haya consentido válidamente el uso de los Servicios por parte de un menor, ese consentimiento puede retirarse en cualquier momento.{{/if}}

## 9. Sitios y servicios de terceros {#third-parties}

Los Servicios pueden enlazar con sitios, complementos y aplicaciones de terceros, o integrarse con ellos, incluidos los proveedores de inicio de sesión. No los controlamos y no somos responsables de sus prácticas de privacidad; sus propias políticas rigen lo que recopilan. Desconecte las integraciones en la configuración de su cuenta o en la configuración del tercero.

## 10. Sus derechos {#rights}

Según el lugar donde viva, usted puede:

- **acceder** a sus datos y obtener una copia;
- **rectificar** los datos inexactos;
- **cancelar** (suprimir) sus datos ("derecho al olvido");
- **restringir** u **oponerse** al tratamiento, incluida la mercadotecnia directa en cualquier momento;
- solicitar la **portabilidad** de sus datos a otro proveedor, en un formato legible por máquina;
- **retirar su consentimiento** en cualquier momento;
- **no ser objeto de decisiones basadas únicamente en medios automatizados** con efectos jurídicos o efectos similarmente significativos;
- **presentar una queja** ante una autoridad de protección de datos.

**Eliminar su cuenta.** Puede eliminar su cuenta y sus datos personales {{#if feature.mobile}}dentro de la aplicación (Configuración, luego Cuenta, luego Eliminar cuenta), {{/if}}en la configuración de su cuenta en nuestro sitio web o por correo electrónico; no le exigimos que contacte a soporte si existe la opción de autoservicio. La eliminación de la cuenta es permanente una vez transcurrido el periodo de gracia que le mostramos. Desinstalar una aplicación no elimina su cuenta.

Para ejercer un derecho, escriba a [{{company.privacy_email}}](mailto:{{company.privacy_email}}) o use la configuración de su cuenta. Podemos necesitar verificar su identidad y, si la solicitud es manifiestamente infundada o excesiva, podemos cobrar una tarifa razonable o rechazarla, en la medida en que la ley lo permita. Respondemos dentro de **un mes** (prorrogable por hasta dos meses más en solicitudes complejas; 45 días conforme a las leyes estatales de Estados Unidos, prorrogables por otros 45), y le informamos el motivo si no podemos cumplir. No lo discriminaremos por ejercer sus derechos.

### 10.1 Espacio Económico Europeo, Reino Unido, Suiza

Se aplican todos los derechos anteriores. Puede presentar una queja ante la autoridad del país donde vive, trabaja o donde ocurrió el problema ([lista de autoridades del EEE](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Reino Unido: [ICO](https://ico.org.uk); Suiza: [FDPIC](https://www.edoeb.admin.ch)). Nuestra autoridad principal es {{law.authority}}.

### 10.2 Serbia

Cuando se aplica la Ley serbia de Protección de Datos Personales, usted tiene derechos equivalentes a los anteriores y puede presentar una queja ante el Comisionado de Información de Interés Público y de Protección de Datos Personales (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Estados Unidos (California y otros estados) {#us-states}

Esta sección complementa lo anterior para residentes de California y de otros estados de Estados Unidos con leyes integrales de privacidad (incluidos Virginia, Colorado, Connecticut, Utah, Texas, Oregón, Montana y otros, conforme entren en vigor).

- **Categorías recopiladas en los últimos 12 meses:** identificadores (nombre, correo electrónico, dirección IP, identificadores en línea); registros de clientes; información comercial (planes, compras); actividad en internet o en la red; geolocalización aproximada{{#if feature.location}} y geolocalización precisa con su permiso{{/if}}; contenido que envía; inferencias limitadas a operar los Servicios. Las divulgamos a proveedores de servicios para las finalidades comerciales de la sección 3.
- **Venta y compartición:** no vendemos información personal ni la compartimos para publicidad conductual entre contextos. No vendemos ni compartimos a sabiendas datos de personas menores de 16 años.
- **Información personal sensible:** no la usamos para inferir características, ni la usamos más allá de lo necesario para prestar los Servicios.
- **Sus derechos:** conocer y acceder, eliminar, corregir, portabilidad, oponerse a la venta o compartición y a la publicidad dirigida o a la elaboración de perfiles, limitar el uso de datos sensibles y no discriminación. Respetamos **Global Privacy Control** y señales similares de exclusión del navegador como una solicitud válida de exclusión.
- **Representantes autorizados y apelaciones:** un representante autorizado puede presentar solicitudes con su permiso por escrito. Si rechazamos una solicitud, puede apelar respondiendo a nuestra decisión; si sigue inconforme, puede contactar a la procuraduría general (attorney general) de su estado.
- **California:** puede solicitar una lista de los terceros a quienes divulgamos información personal para su mercadotecnia directa en el año calendario anterior ("Shine the Light"); no hacemos tales divulgaciones. Los residentes de California menores de 18 años que sean usuarios registrados pueden solicitar la eliminación del contenido que publicaron públicamente.

### 10.4 Brasil (LGPD)

Puede solicitar confirmación del tratamiento, acceso, corrección, anonimización, bloqueo o eliminación de datos innecesarios o excesivos, portabilidad, información sobre las entidades con las que compartimos datos, información sobre la posibilidad de no otorgar el consentimiento y sus consecuencias, y revisión de decisiones automatizadas. Puede presentar una queja ante la Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Otras regiones

Si se encuentra en otro lugar con una ley de protección de datos, respetamos los derechos equivalentes que le otorga esa ley. En particular:

| Dónde | Lo que añadimos |
|---|---|
| **Canadá** (PIPEDA, Ley 25 de Quebec) | Puede acceder y corregir sus datos, retirar su consentimiento y presentar una queja ante la Oficina del Comisionado de Privacidad o ante la Commission d'accès à l'information. Nuestro contacto de privacidad es la persona encargada de proteger la información personal; las transferencias fuera de Quebec se evalúan y se salvaguardan. |
| **India** (Ley DPDP 2023) | Puede acceder, corregir y suprimir sus datos, designar a otra persona para ejercer sus derechos en caso de fallecimiento o incapacidad, y usar nuestro contacto de quejas indicado abajo; puede presentar una queja ante el Consejo de Protección de Datos. |
| **Australia, Nueva Zelanda** | Puede solicitar acceso y corrección y presentar una queja ante nosotros; después, ante la OAIC (Australia) o el Comisionado de Privacidad (Nueva Zelanda). |
| **Japón, Corea del Sur, Singapur, Tailandia, Malasia, Türkiye, Emiratos Árabes Unidos, Arabia Saudita, Sudáfrica, Kenia, Nigeria y leyes similares** | Aplicamos los derechos y salvaguardas que exigen esas leyes (acceso, corrección, supresión, oposición, queja ante la autoridad local y salvaguardas para transferencias). Contáctenos para ejercerlos. |
| **China** | Los Servicios no están dirigidos a personas de China continental; no use los Servicios para enviar datos personales de personas de ese país. |

**Contacto de privacidad y quejas para todas las regiones:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Atendemos las solicitudes dentro del plazo que permita la ley aplicable.

## 11. Cambios a este aviso {#changes}

Podemos actualizar este aviso para reflejar cambios en los Servicios o en la ley. Para los cambios sustanciales le daremos al menos {{policy.notice_days}} días de aviso por correo electrónico o en los Servicios antes de que se apliquen a usted, y pediremos un nuevo consentimiento cuando la ley lo exija. La fecha de "última actualización" indicada arriba muestra la versión vigente; las versiones anteriores están disponibles a solicitud.

## 12. Contacto {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
