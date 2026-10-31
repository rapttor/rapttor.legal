---
doc: privacy
title: Política de privacidad
version: 1.2.1
updated: 2026-10-31
lang: es
translation_of: 1.2.1
status: draft
summary: Cómo {{product.name}} recoge, utiliza, comparte y protege los datos personales, y los derechos que usted tiene.
---

# Política de privacidad

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

## 1. Quiénes somos {#who-we-are}

Esta política explica cómo **{{company.name}}**, con domicilio social en {{company.address}} («**{{product.name}}**», «nosotros»), trata los datos personales cuando usted utiliza {{product.name}}, nuestros sitios web, aplicaciones, API y servicios relacionados (los «**Servicios**»).

Respecto de los datos personales cuyo tratamiento decidimos en cuanto al cómo y al porqué (por ejemplo, su cuenta, las visitas a nuestro sitio web y la facturación), somos el **responsable del tratamiento**. Contacto: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Nuestro delegado de protección de datos puede contactarse en [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}No hemos designado un delegado de protección de datos porque la ley no lo exige para nuestras actividades. Las consultas sobre privacidad se dirigen a [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Representante en la UE (art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Representante en el Reino Unido (art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Cuando actuamos como encargados del tratamiento

Si utiliza los Servicios a través de una organización (su empresa empleadora, un cliente profesional), esa organización suele ser la responsable del tratamiento de los datos que introduce en los Servicios, y nosotros los tratamos por cuenta de ella conforme a nuestro [Anexo de tratamiento de datos]({{url.dpa}}). En tal caso, dirija sus solicitudes a esa organización; nosotros la ayudaremos a responderlas. Esta política se aplica entonces únicamente a los datos que controlamos nosotros mismos (administración de la cuenta, facturación, seguridad y sitio web).
{{/if}}

## 2. Datos que recogemos {#data-we-collect}

| Categoría | Ejemplos | Origen |
|---|---|---|
| **Datos de la cuenta** | nombre, correo electrónico, hash de la contraseña, datos del perfil, idioma, preferencias | Usted |
| **Datos de contacto y de soporte** | mensajes, archivos adjuntos, notas de llamadas, comentarios, respuestas a encuestas | Usted |
| **Contenido que envía** | archivos, texto, configuración, cualquier elemento que incluya en los Servicios | Usted |
{{#if feature.anonymous}}| **Datos de cuenta anónima** | un identificador aleatorio de cuenta, la sesión del navegador o del dispositivo que lo contiene, el contenido que crea y una dirección de correo electrónico si la vincula más adelante | Usted, de forma automática |
{{/if}}{{#if feature.uploads}}| **Archivos e imágenes que sube** | los propios archivos y los metadatos que contienen (por ejemplo, datos de la cámara o la ubicación en las fotos) | Usted |
{{/if}}| **Registros de consentimiento** | lo que aceptó (documentos, confirmación de edad, opciones facultativas), la versión, el idioma, la fecha y la forma en que lo aceptó | Usted |
| **Datos de uso y del dispositivo** | dirección IP, tipo de navegador y de dispositivo, sistema operativo, idioma, páginas y funciones utilizadas, marcas de tiempo, referencia, registros de fallos y de errores | Automáticamente |
| **Cookies y tecnologías similares** | identificadores en cookies, almacenamiento local, SDK (véase la [Política de cookies]({{url.cookies}})) | Automáticamente |
{{#if feature.payments}}| **Datos de pago y de transacciones** | plan, facturas, nombre y dirección de facturación, número de identificación fiscal, estado del pago; los datos de la tarjeta los gestiona nuestro procesador de pagos y no los almacenamos nosotros | Usted, procesador de pagos |
{{/if}}{{#if feature.location}}| **Datos de ubicación** | ubicación precisa solo si la activa en su dispositivo; en otro caso, ubicación aproximada a partir de la dirección IP | Su dispositivo |
{{/if}}| **Datos de cuentas de terceros** | nombre, correo electrónico, imagen de perfil e identificador compartidos por un proveedor de inicio de sesión que usted elija | Tercero, con su permiso |
{{#if feature.ugc}}| **Comunicaciones entre usuarios** | mensajes e interacciones que envía a través de los Servicios | Usted |
{{/if}}{{#if feature.mobile}}| **Datos del dispositivo móvil** | modelo del dispositivo y versión del sistema operativo, versión de la aplicación, identificadores de instancia de la aplicación y de las notificaciones push, idioma y zona horaria, estado de los permisos; identificador publicitario solo si permite el seguimiento | Su dispositivo |
{{/if}}{{#if feature.game}}| **Datos de juego** | progreso en el juego, puntuaciones, clasificaciones, objetos y compras, historial de partidas, chat dentro del juego y, si se utilizan, informes de voz, señales antitrampas y de integridad, perfil público (nombre, avatar, rango) | Usted, de forma automática |
{{/if}}| **Señales de seguridad y de fraude** | intentos de inicio de sesión fallidos, denuncias de abuso, puntuaciones de riesgo, solicitudes bloqueadas | Automáticamente, otros usuarios |

No recogemos intencionadamente datos de categorías especiales (salud, datos biométricos, opiniones políticas o convicciones religiosas y similares). No los envíe salvo que una función lo solicite expresamente. Si envía este tipo de datos de todos modos, usted es responsable de contar con una base jurídica para su tratamiento.

Usted no está obligado a facilitarnos datos personales, pero sin algunos de ellos (por ejemplo, una dirección de correo electrónico) no podemos proporcionarle una cuenta.

### Seguimiento que no utilizamos {#no-tracking}

No utilizamos herramientas de reproducción de sesiones ni de grabación de pantalla, captura de pulsaciones de teclas o de movimientos del ratón, ni huellas digitales del navegador (*fingerprinting*). {{#if feature.analytics}}Las analíticas se ejecutan únicamente con su consentimiento (véase la [Política de cookies]({{url.cookies}})).{{else}}No utilizamos analíticas ni rastreadores publicitarios.{{/if}}
{{#if feature.external}}
### Recursos de terceros y su dirección IP {#external}

Algunas funciones cargan contenidos de servidores de otras empresas (por ejemplo, tipografías, mapas, vídeos o comprobaciones de seguridad). Cuando su navegador descarga dichos contenidos, **su dirección IP y sus datos técnicos se envían a esa empresa**, que puede estar fuera de su país. Cargamos estos recursos solo después de que usted acepte cada uno de ellos en la configuración de cookies, que puede modificar en cualquier momento; si los rechaza, utilizamos una alternativa o la función permanece desactivada.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### Correos electrónicos {#emails}

Enviamos los correos electrónicos que los Servicios necesitan (enlaces para iniciar sesión, recibos, avisos de seguridad){{#if feature.marketing}} y, solo cuando usted lo haya consentido o la ley lo permita, novedades sobre el producto{{/if}}. Todos los correos incluyen un enlace para dejar de recibir correos electrónicos nuestros. {{#if feature.marketing}}Los correos opcionales se dejan de recibir con un solo clic, de forma inmediata. {{/if}}Como bloquear todo el correo también bloquearía los enlaces para iniciar sesión, una solicitud para bloquear **todo** el correo de este servicio se confirma con un último correo electrónico que contiene un enlace que acredita que la dirección es suya. Después añadimos la dirección a la lista de no envío de nuestro proveedor de correo electrónico y la conservamos allí para poder respetar su decisión (obligación legal e interés legítimo en atender su solicitud).
{{/if}}{{#if feature.age_gate}}
### Confirmación de edad {#age}

Antes de que utilice funciones que impliquen {{policy.age_topics|contenido sensible para la edad}}, le pedimos que confirme que tiene al menos {{policy.age_gate}} años y la mayoría de edad legal con arreglo a las normas de su país. No le pedimos su fecha de nacimiento y solo conservamos su confirmación y la fecha en que la dio. Si sabemos que alguien no alcanza esa edad, bloqueamos la cuenta y eliminamos los datos.
{{/if}}{{#if feature.gambling}}
En el caso de las funciones de juego con dinero, también podemos pedirle una prueba de su edad y de su identidad, y utilizar para ello un proveedor de verificación. Conservamos el resultado y las pruebas que exige la ley.
{{/if}}

## 3. Por qué utilizamos sus datos y nuestras bases jurídicas {#purposes}

| Finalidad | Base jurídica (GDPR / UK GDPR) |
|---|---|
| Prestar los Servicios, crear y gestionar su cuenta, tramitar los pedidos | Contrato (art. 6, apartado 1, letra b) |
| Atención al cliente y comunicaciones sobre el uso de los Servicios | Contrato; intereses legítimos |
| Seguridad, prevención del abuso y del fraude, y exigencia del cumplimiento de nuestras [Condiciones del servicio]({{url.terms}}) y de nuestra [Política de uso aceptable]({{url.acceptable_use}}) | Intereses legítimos (art. 6, apartado 1, letra f); obligación legal |
| Depuración, fiabilidad, planificación de la capacidad y mejora de los Servicios | Intereses legítimos |
{{#if feature.analytics}}| Analítica de uso | Consentimiento cuando lo exija la ley; en otro caso, intereses legítimos |
{{/if}}{{#if feature.marketing}}| Novedades sobre el producto y correos electrónicos comerciales | Consentimiento o, para los clientes existentes, intereses legítimos cuando la ley lo permita; puede darse de baja en cualquier momento |
{{/if}}{{#if feature.ads}}| Publicidad y medición | Consentimiento |
{{/if}}| Registro de sus consentimientos y respeto de sus decisiones sobre el correo electrónico | Obligación legal; intereses legítimos |
{{#if feature.external}}| Carga de recursos de terceros que reciben su dirección IP | Consentimiento (art. 6, apartado 1, letra a); normas de la ePrivacy sobre el acceso a su dispositivo |
{{/if}}| Contabilidad, impuestos y otras obligaciones legales | Obligación legal (art. 6, apartado 1, letra c) |
| Formulación, ejercicio o defensa de reclamaciones legales; respuesta a las autoridades | Intereses legítimos; obligación legal |
| Transmisiones de empresa (fusión, adquisición, venta de activos) | Intereses legítimos |

Cuando basamos el tratamiento en intereses legítimos, los hemos ponderado frente a sus derechos; puede solicitar más información y oponerse (sección 10). Cuando basamos el tratamiento en el consentimiento, puede retirarlo en cualquier momento; ello no afecta al tratamiento realizado con anterioridad.

{{#if feature.ai}}
### Funciones asistidas por IA {#ai}

Algunas funciones utilizan modelos de aprendizaje automático o modelos generativos. Cuando las utiliza, el contenido que envía como entrada se transmite al proveedor, que actúa como nuestro encargado del tratamiento, para generar el resultado.

- **No** utilizamos su contenido para entrenar modelos de uso general, y exigimos a nuestros proveedores que tampoco lo hagan, salvo que usted lo acepte expresamente.
- Los resultados de la IA pueden ser erróneos, incompletos o sesgados. No los utilice como base para decisiones jurídicas, médicas, financieras u otras de gran trascendencia sin una revisión humana.
- No tomamos decisiones que produzcan efectos jurídicos sobre usted, o efectos significativos similares, basándonos únicamente en medios automatizados. Las restricciones de cuenta por abuso son revisadas por una persona cuando usted lo solicita (véase la [Política de uso aceptable]({{url.acceptable_use}}), apartado Aplicación de las normas).
- El contenido generado por IA se etiqueta cuando la ley lo exige.
{{/if}}

## 4. Con quién compartimos datos {#sharing}

**No vendemos sus datos personales** y no los "compartimos" con fines de publicidad conductual entre contextos{{#if feature.ads}}, salvo lo descrito en la Política de cookies y solo cuando usted haya dado su consentimiento{{/if}}.

Solo compartimos datos personales con:

- **Proveedores de servicios (encargados del tratamiento)** que actúan siguiendo nuestras instrucciones en virtud de contratos por escrito: alojamiento e infraestructura, envío de correo electrónico, herramientas de atención al cliente, supervisión de errores{{#if feature.payments}}, tramitación de pagos{{/if}}{{#if feature.ai}}, proveedores de IA{{/if}}. La lista vigente figura en nuestra [Lista de subencargados del tratamiento]({{url.subprocessors}}).
- **Plataformas y tiendas de aplicaciones** que utiliza para acceder a los Servicios (por ejemplo, Apple, Google, las tiendas de consolas o de PC), que gestionan los pagos y pueden facilitarnos datos limitados de compra y de cuenta;
- **Otros usuarios o el público**, solo según sus indicaciones (por ejemplo, el contenido que decida publicar{{#if feature.ugc}} o los mensajes que envíe{{/if}}).
- **Asesores profesionales** (abogados, auditores, aseguradoras), sujetos a confidencialidad.
- **Autoridades, tribunales y partes afectadas** cuando lo exija la ley, para responder a procedimientos legales válidos, para proteger derechos, la seguridad o los bienes, o para investigar abusos y fraudes. Comprobamos la validez de las solicitudes y, cuando la ley lo permite, se lo comunicamos.
- **Un sucesor** en una fusión, adquisición, financiación o venta de activos, que deberá respetar esta política; le notificaremos los cambios sustanciales de control que afecten a sus datos.
- **Cualquier otra persona**, solo con su consentimiento.

## 5. Transferencias internacionales {#transfers}

Operamos desde {{company.country}}{{#if hosting.region}} y almacenamos los datos principalmente en {{hosting.region}}{{/if}}. Algunos proveedores tratan datos en otros países, entre ellos Estados Unidos. Cuando se transfieren datos personales del EEE, del Reino Unido o de Suiza a un país sin decisión de adecuación, utilizamos una garantía reconocida: el Marco de Privacidad de Datos UE-EE. UU. (o sus extensiones para el Reino Unido y Suiza) cuando el destinatario esté certificado; en otro caso, las **cláusulas contractuales tipo** de la Comisión Europea, con el Anexo de transferencia internacional de datos del Reino Unido o las modificaciones suizas cuando proceda, además de medidas complementarias como el cifrado en tránsito y en reposo. Puede solicitar una copia de las garantías pertinentes en [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Durante cuánto tiempo conservamos los datos {#retention}

| Datos | Conservación |
|---|---|
| Datos de la cuenta y contenido | Mientras su cuenta esté activa; después se suprimen o anonimizan en un plazo de {{policy.retention_account_days}} días desde el cierre |
| Registros del servidor y de seguridad | 90 días |
| Copias de seguridad | Rotativas, hasta 35 días; los datos suprimidos desaparecen de las copias en ese ciclo |
| Facturas y registros contables | {{policy.retention_billing_years}} años, o el plazo que exija la ley |
| Correspondencia de atención al cliente | Hasta 3 años después de cerrar el caso, o mientras la cuenta esté activa si ese plazo es mayor |
| Registros de consentimientos, bajas y solicitudes de derechos | Durante el tiempo necesario para demostrar el cumplimiento |
| Datos necesarios para una reclamación legal o una investigación | Hasta que el asunto se resuelva y hayan transcurrido los plazos de prescripción |
| Registros de abusos y bloqueos (identificador, motivo, fecha) | Hasta 5 años, para evitar la reincidencia en el abuso |
| Registros de consentimiento y lista de no envío de correo electrónico | Registros de consentimiento: durante la vida de la cuenta más el plazo de prescripción; entradas de la lista de no envío: hasta que nos pida que las eliminemos |

Cuando desaparece la finalidad, suprimimos los datos o los anonimizamos de forma irreversible.

## 7. Seguridad {#security}

Aplicamos medidas técnicas y organizativas adecuadas al riesgo: cifrado en tránsito, cifrado de los datos sensibles en reposo, control de acceso con el mínimo privilegio necesario, garantías de autenticación, registro de actividad, copias de seguridad, gestión de vulnerabilidades y obligaciones de confidencialidad del personal. Ningún sistema es perfectamente seguro. Utilice una contraseña sólida y única, active la autenticación multifactor cuando se ofrezca e infórmenos de inmediato en [{{company.email}}](mailto:{{company.email}}) si sospecha que su cuenta ha sido comprometida. Véase también nuestra página de [Seguridad y comunicación de vulnerabilidades]({{url.security}}).

Si es probable que una violación de la seguridad de los datos personales suponga un riesgo para sus derechos y libertades, notificaremos a la autoridad de control en un plazo de 72 horas desde que tengamos conocimiento de ella, cuando así lo exija la ley, y se lo comunicaremos a usted sin dilación indebida cuando la ley lo exija.

## 8. Menores {#children}

{{#if feature.minors}}Los Servicios no están dirigidos a menores de 13 años, y no recogemos a sabiendas datos personales de ellos. Los usuarios de {{policy.min_age}} años o más que todavía no hayan alcanzado la mayoría de edad solo pueden utilizar los Servicios **con el consentimiento de un padre, madre o tutor**, quien puede consultar, rectificar, limitar o suprimir los datos del menor y retirar el consentimiento poniéndose en contacto con [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Recogemos únicamente los datos necesarios para los Servicios, no utilizamos los datos de menores para publicidad conductual y aplicamos ajustes por defecto adecuados a su edad (perfiles privados, comunicaciones limitadas) cuando es posible. Cuando la ley de un país fije una edad superior para el consentimiento digital, exigimos el consentimiento de los padres para los menores de esa edad.{{else}}Los Servicios no están dirigidos a menores. Debe tener al menos {{policy.min_age}} años para disponer de una cuenta. No recogemos a sabiendas datos personales de nadie menor de {{policy.min_age}} años (ni de la edad superior para el consentimiento digital de su país; en Estados Unidos, menores de 13 años a efectos de COPPA). Si cree que un menor nos ha facilitado datos personales, póngase en contacto con [{{company.privacy_email}}](mailto:{{company.privacy_email}}) y los eliminaremos y cerraremos la cuenta. Cuando un padre, madre o tutor haya consentido válidamente el uso por parte de un menor, ese consentimiento puede retirarse en cualquier momento.{{/if}}

## 9. Sitios y servicios de terceros {#third-parties}

Los Servicios pueden enlazar con sitios, complementos y aplicaciones de terceros, o integrarse con ellos, incluidos los proveedores de inicio de sesión. No los controlamos ni somos responsables de sus prácticas de privacidad; sus propias políticas rigen lo que recogen. Desconecte las integraciones en la configuración de su cuenta o en la configuración del tercero.

## 10. Sus derechos {#rights}

En función del lugar en que resida, puede:

- **acceder** a sus datos y obtener una copia;
- **rectificar** los datos inexactos;
- **suprimir** sus datos («derecho al olvido»);
- **restringir** el tratamiento u **oponerse** a él, incluido el marketing directo en cualquier momento;
- **trasladar** sus datos a otro proveedor en un formato legible por máquina;
- **retirar el consentimiento** en cualquier momento;
- **no ser objeto de decisiones basadas únicamente en medios automatizados** que produzcan efectos jurídicos o efectos significativos similares;
- **presentar una reclamación** ante una autoridad de control.

**Supresión de su cuenta.** Puede suprimir su cuenta y sus datos personales {{#if feature.mobile}}desde la aplicación (Ajustes, después Cuenta, después Eliminar cuenta), {{/if}}desde la configuración de su cuenta en nuestro sitio web o por correo electrónico; no le exigimos que se ponga en contacto con el servicio de atención al cliente si la gestión por cuenta propia está disponible. La supresión de la cuenta es definitiva una vez transcurrido el periodo de gracia que le mostramos. Desinstalar la aplicación no suprime su cuenta.

Para ejercer un derecho, escriba a [{{company.privacy_email}}](mailto:{{company.privacy_email}}) o utilice la configuración de su cuenta. Podemos necesitar verificar su identidad y, si la solicitud es manifiestamente infundada o excesiva, podemos cobrar una tasa razonable o denegarla, en la medida en que la ley lo permita. Respondemos en el plazo de **un mes** (prorrogable hasta dos meses más en solicitudes complejas; 45 días con arreglo a las leyes de los estados de EE. UU., prorrogables otros 45 días), y le indicamos el motivo si no podemos atenderla. No le discriminaremos por ejercer sus derechos.

### 10.1 Espacio Económico Europeo, Reino Unido, Suiza

Todos los derechos anteriores son aplicables. Puede presentar una reclamación ante la autoridad del país en que viva o trabaje, o donde se produjo el problema ([lista de autoridades del EEE](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Reino Unido: [ICO](https://ico.org.uk); Suiza: [FDPIC](https://www.edoeb.admin.ch)). Nuestra autoridad principal es {{law.authority}}.

### 10.2 Serbia

Cuando se aplica la Ley serbia de protección de datos personales, usted tiene derechos equivalentes a los anteriores y puede presentar una reclamación ante el Comisionado para la Información de Interés Público y Protección de Datos Personales (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Estados Unidos (California y otros estados) {#us-states}

Esta sección complementa lo anterior para los residentes de California y de otros estados de EE. UU. con leyes integrales de privacidad (entre ellos Virginia, Colorado, Connecticut, Utah, Texas, Oregón, Montana y otros, a medida que entren en vigor).

- **Categorías recogidas en los últimos 12 meses:** identificadores (nombre, correo electrónico, dirección IP, identificadores en línea); registros de clientes; información comercial (planes, compras); actividad en Internet o en la red; geolocalización aproximada{{#if feature.location}} y geolocalización precisa con su permiso{{/if}}; contenido que envía; inferencias limitadas a la explotación de los Servicios. Las revelamos a proveedores de servicios para las finalidades comerciales indicadas en la sección 3.
- **Venta y compartición:** no vendemos información personal ni la compartimos con fines de publicidad conductual entre contextos. No vendemos ni compartimos a sabiendas datos de nadie menor de 16 años.
- **Información personal sensible:** no la utilizamos para inferir características ni más allá de lo necesario para prestar los Servicios.
- **Sus derechos:** conocer o acceder, suprimir, rectificar, portabilidad, oponerse a la venta o compartición y a la publicidad dirigida o a la elaboración de perfiles, limitar el uso de datos sensibles y no discriminación. Respetamos **Global Privacy Control** y señales similares de exclusión de los navegadores como solicitud válida de exclusión.
- **Representantes autorizados y recursos:** un representante autorizado puede presentar solicitudes con su permiso por escrito. Si denegamos una solicitud, puede recurrirla respondiendo a nuestra decisión; si sigue sin estar conforme, puede dirigirse al fiscal general de su estado.
- **California:** puede solicitar una lista de terceros a los que hayamos revelado información personal para su marketing directo durante el año natural anterior («Shine the Light»); no realizamos tales revelaciones. Los residentes de California menores de 18 años que sean usuarios registrados pueden solicitar la eliminación del contenido que hayan publicado públicamente.

### 10.4 Brasil (LGPD)

Puede solicitar la confirmación del tratamiento, el acceso, la rectificación, la anonimización, el bloqueo o la supresión de datos innecesarios o excesivos, la portabilidad, información sobre las entidades con las que compartimos datos, información sobre la posibilidad de no dar el consentimiento y sus consecuencias, y la revisión de las decisiones automatizadas. Puede presentar una reclamación ante la Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Otras regiones

Si se encuentra en otra región con una ley de protección de datos, respetamos los derechos equivalentes que le reconozca esa ley. En particular:

| Lugar | Lo que añadimos |
|---|---|
| **Canadá** (PIPEDA, Ley 25 de Quebec) | Puede acceder y rectificar sus datos, retirar el consentimiento y presentar una reclamación ante la Oficina del Comisionado de Privacidad o ante la Commission d'accès à l'information. Nuestro contacto en materia de privacidad es la persona responsable de la protección de la información personal; las transferencias fuera de Quebec se evalúan y se garantizan. |
| **India** (Ley DPDP de 2023) | Puede acceder, rectificar y suprimir sus datos, designar a otra persona para ejercer sus derechos en caso de fallecimiento o incapacidad, y utilizar nuestro contacto para reclamaciones indicado más abajo; puede presentar una reclamación ante la Junta de Protección de Datos. |
| **Australia, Nueva Zelanda** | Puede solicitar acceso y rectificación y presentar una reclamación ante nosotros; después, ante la OAIC (Australia) o el Comisionado de Privacidad (Nueva Zelanda). |
| **Japón, Corea del Sur, Singapur, Tailandia, Malasia, Türkiye, EAU, Arabia Saudí, Sudáfrica, Kenia, Nigeria y leyes similares** | Aplicamos los derechos y garantías que exigen esas leyes (acceso, rectificación, supresión, oposición, reclamación ante la autoridad local, garantías para las transferencias). Póngase en contacto con nosotros para ejercerlos. |
| **China** | Los Servicios no están dirigidos a personas de China continental; no los utilice para enviar datos personales de personas de ese país. |

**Contacto para reclamaciones y para la privacidad en todas las regiones:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Atendemos las solicitudes en el plazo que permita la legislación aplicable.

## 11. Cambios en esta política {#changes}

Podemos actualizar esta política para reflejar cambios en los Servicios o en la ley. En el caso de cambios sustanciales, le avisaremos con al menos {{policy.notice_days}} días de antelación, por correo electrónico o en los Servicios, antes de que le sean aplicables, y le pediremos un nuevo consentimiento cuando la ley lo exija. La fecha de «última actualización» indicada más arriba corresponde a la versión vigente; las versiones anteriores están disponibles previa solicitud.

## 12. Contacto {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
