---
doc: terms
title: Condiciones del servicio
version: 1.3.0
updated: 2026-10-31
lang: es
translation_of: 1.3.0
status: draft
summary: El acuerdo entre usted y {{product.name}} para el uso de {{product.name}}.
---

# Condiciones del servicio

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

## 1. Acuerdo {#agreement}

Estas Condiciones del servicio (las "**Condiciones**") constituyen un acuerdo vinculante entre usted y **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, número de registro {{company.reg_id}}{{/if}} ("**{{product.name}}**", "nosotros") que regula su acceso y uso de {{product.name}}, nuestros sitios web, aplicaciones, API, documentación y servicios relacionados (los "**Servicios**").

Al crear una cuenta, instalar una aplicación o utilizar de otro modo los Servicios, usted acepta estas Condiciones y los documentos que incorporan: la [Política de privacidad]({{url.privacy}}), la [Política de uso aceptable]({{url.acceptable_use}}), la [Política de cookies]({{url.cookies}}){{#if feature.processor_role}}, el [Anexo de tratamiento de datos]({{url.dpa}}) cuando sea aplicable{{/if}}{{#if feature.payments}}, la [Política de reembolsos y cancelación]({{url.refunds}}){{/if}}{{#if feature.game}}, las [Normas del juego y política de objetos virtuales]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, las [Condiciones de la aplicación]({{url.app_eula}}){{/if}} y cualquier formulario de pedido o condición específica del producto. Si no está de acuerdo, no utilice los Servicios.

Si utiliza los Servicios en nombre de una organización, usted confirma que tiene facultades para vincularla, y "usted" incluye a dicha organización. Si las condiciones específicas de un producto o un contrato firmado entran en conflicto con estas Condiciones, prevalecerán solo para ese producto o ese cliente.

{{#if feature.consumers}}
**Consumidores.** Si utiliza los Servicios como consumidor, seguirá aplicándose la normativa imperativa de protección de los consumidores del país de su residencia, y nada de lo dispuesto en estas Condiciones limita esos derechos. Las secciones marcadas *(clientes profesionales)* solo se aplican si usted no es consumidor.
{{/if}}

## 2. Elegibilidad {#eligibility}

Solo puede utilizar los Servicios si:

1. {{#if feature.minors}}tiene al menos **{{policy.min_age}}** años y, si no ha alcanzado la mayoría de edad en su lugar de residencia, cuenta con el consentimiento de un padre, una madre o un tutor legal que acepte estas Condiciones en su nombre y se responsabilice de su uso y de sus compras (podemos solicitar una prueba){{else}}tiene al menos **{{policy.min_age}}** años y capacidad para celebrar un contrato vinculante{{/if}};
2. no tiene prohibido recibir los Servicios en virtud de la normativa aplicable, incluidas las leyes de sanciones y de control de exportaciones (sección 22);
3. no ha sido excluido anteriormente de los Servicios por infringir nuestras normas, salvo que hayamos acordado por escrito permitirle volver; y
4. utiliza los Servicios de forma lícita en el lugar en que se encuentra.

{{#if feature.age_gate}}5. confirma, cuando se lo solicitemos, que tiene al menos **{{policy.age_gate}}** años y la mayoría de edad legal, según las normas de su país, para utilizar funciones que impliquen {{policy.age_topics|contenido sensible por razón de edad}}. No necesitamos su fecha de nacimiento: su confirmación queda registrada. Si no es cierta, podemos bloquear la cuenta y eliminar sus datos.
{{/if}}{{#if feature.gambling}}6. confirma, cuando se lo solicitemos, que tiene al menos **{{policy.gambling_age}}** años, que los juegos de azar son lícitos en el lugar donde reside y que utiliza las funciones de juego únicamente para sí mismo. Podemos exigir una verificación real de edad e identidad, y podemos denegar o poner fin al acceso a las funciones de juego cuando lo exijan la ley o nuestras licencias.
{{/if}}{{#if policy.excluded_regions}}7. confirma, cuando se lo solicitemos, que no se encuentra en, ni es residente o nacional de, ninguno de estos países o regiones: **{{policy.excluded_regions}}**, donde nuestros Servicios o estas Condiciones podrían no ser lícitos, podrían no ser ejecutables o no se ofrecen. No podemos saber dónde se encuentra realmente (por ejemplo, detrás de una VPN), por lo que nos basamos en su confirmación; si no es cierta, usted utiliza los Servicios bajo su propio riesgo, es responsable de cumplir la normativa local y podemos bloquear la cuenta y eliminar sus datos. Nada de lo dispuesto en este punto limita los derechos que no puedan renunciarse en virtud de la ley del lugar donde reside.
{{/if}}

Podemos solicitar en cualquier momento una prueba de edad, de identidad o de facultades, y podemos denegar o cerrar una cuenta que no supere la verificación.

## 3. Cuentas y seguridad {#accounts}

- Facilite información exacta y actualizada, y manténgala al día. Una persona o entidad, una cuenta, salvo que acordemos otra cosa; crear cuentas adicionales para eludir una restricción, un límite, una prohibición, un período de prueba o una norma de precios está prohibido.
- Mantenga la confidencialidad de sus credenciales. No comparta, venda, alquile ni transfiera su cuenta. Cada puesto está destinado a una única persona identificada, salvo que el plan disponga otra cosa.
- Usted es responsable de todo lo que ocurra en su cuenta, incluido lo que hagan las personas a las que permita acceder o a las que no logre impedir el acceso, hasta que nos comunique que la cuenta ha sido comprometida. Póngase en contacto de inmediato con nosotros en [{{company.email}}](mailto:{{company.email}}) si sospecha un acceso no autorizado.
- Podemos exigir una autenticación más robusta, restablecer las credenciales o bloquear una cuenta que, según creemos razonablemente, esté comprometida o se utilice de forma abusiva.
- Las cuentas gratuitas inactivas podrán cerrarse previa notificación al correo electrónico registrado; las cuentas de pago no se cierran por inactividad.
{{#if feature.anonymous}}- **Cuentas anónimas.** Cuando lo ofrezcamos, los Servicios crean para usted una cuenta anónima la primera vez que los utiliza. Esa cuenta no tiene dirección de correo electrónico; quien utilice ese navegador o dispositivo podrá usarla, y no podemos recuperarla por usted si pierde el acceso. Puede vincular una dirección de correo electrónico en cualquier momento para proteger y recuperar la cuenta: confirmamos la dirección mediante un enlace de inicio de sesión que le enviamos. Las cuentas anónimas que permanezcan sin uso durante mucho tiempo podrán eliminarse previa notificación en los Servicios, cuando sea posible.
{{/if}}- **Titular de la cuenta y acceso.** La persona que confirme el control de una dirección de correo electrónico mediante el enlace de inicio de sesión que enviamos, y acepte estas Condiciones, es el titular de la cuenta y se la considera la persona que tomó las decisiones en ella. Si actúa en nombre de una organización, usted confirma que puede vincularla. Usted decide quién más de su organización tiene acceso (por ejemplo, operadores con funciones limitadas); las personas a las que dé acceso pueden ver lo que usted ponga a su disposición, y usted es responsable de esa decisión.

## 4. Licencia y restricciones {#licence}

Con sujeción a estas Condiciones y al pago de las tarifas aplicables, le concedemos una licencia limitada, revocable, no exclusiva, intransferible y no sublicenciable para acceder a los Servicios y utilizarlos con fines personales o empresariales internos durante el plazo de vigencia. El software que le entregamos se licencia, no se vende. Nosotros y nuestros licenciantes conservamos todos los derechos que no se conceden expresamente.

Salvo que la ley le conceda un derecho que no pueda renunciarse, no debe, ni debe permitir que nadie:

- copiar, modificar, traducir ni crear obras derivadas de los Servicios;
- aplicar ingeniería inversa, descompilar, desensamblar ni tratar de obtener el código fuente, los modelos, los pesos, los algoritmos o las API no públicas;
- revender, sublicenciar, alquilar, arrendar, alojar como servicio para terceros, ni poner los Servicios a disposición de terceros distintos de sus usuarios autorizados;
- eludir los límites técnicos, las licencias, la medición de uso, los controles de acceso, los límites de frecuencia o las medidas de seguridad;
- eliminar o alterar avisos de propiedad, atribuciones o avisos de licencias de código abierto;
- utilizar los Servicios o sus resultados para crear o entrenar un producto competidor, o para realizar pruebas comparativas o publicar resultados de rendimiento sin nuestro consentimiento por escrito{{#if feature.ai}}, o para entrenar, ajustar o destilar un modelo de IA a partir de los resultados de los Servicios cuando lo prohibamos en la documentación{{/if}};
- acceder a los Servicios por medios automatizados (bots, rastreadores, robots de indexación), salvo a través de nuestra API documentada y con arreglo a sus condiciones.

La [Política de uso aceptable]({{url.acceptable_use}}) añade normas detalladas y forma parte de estas Condiciones. Los componentes de código abierto se rigen por sus propias licencias, que prevalecen para dichos componentes.

## 5. Uso aceptable y aplicación de las normas {#acceptable-use}

Usted es responsable de su uso de los Servicios y de la conducta de todas las personas a las que permita utilizarlos. El uso indebido puede perjudicar a otros usuarios, a terceros y a nosotros, y podremos actuar como se describe en la [Política de uso aceptable]({{url.acceptable_use}}) y en la sección 17, por ejemplo eliminando contenido, restringiendo funciones, limitando la velocidad de uso, suspendiendo o cancelando cuentas, reteniendo pagos pendientes, informando a las autoridades y ejerciendo acciones conforme a la sección 21.

## 6. Su contenido {#your-content}

{{#if feature.ugc}}
Por "**Su contenido**" se entiende todo lo que cargue, envíe, publique, conecte o genere a través de los Servicios{{#if feature.ai}}, incluidas las instrucciones (prompts) y, en la relación entre usted y nosotros, el resultado que reciba{{/if}}.

- **Titularidad.** Usted conserva todos los derechos sobre Su contenido. No adquirimos ninguna titularidad sobre él.
- **Licencia a nuestro favor.** Usted nos concede una licencia mundial, no exclusiva y libre de regalías para alojar, almacenar, reproducir, tratar, transmitir, adaptar (para dar formato, crear miniaturas, traducir o realizar comprobaciones de seguridad) y mostrar Su contenido **únicamente en la medida necesaria para operar, proteger, dar soporte y mejorar los Servicios y para hacer valer estas Condiciones**, mientras lo mantenga en los Servicios y durante los períodos limitados de copia de seguridad y de conservación por mandato legal posteriores. Cuando haga público un contenido, la licencia se extiende a mostrarlo al público que usted elija. Esta licencia termina cuando elimine el contenido o su cuenta, sin perjuicio de esos períodos y de las copias que otros usuarios hayan recibido lícitamente.
- **Sus garantías.** Usted tiene y mantendrá todos los derechos, consentimientos y autorizaciones necesarios para enviar Su contenido y para conceder esta licencia, incluido el de cualquier persona identificable en él. Su contenido, y nuestro uso de él en los términos permitidos, no infringen ni vulneran ninguna ley ni los derechos de ninguna persona (derechos de autor, marcas, privacidad, derechos de imagen, confidencialidad o contrato), y cumple la [Política de uso aceptable]({{url.acceptable_use}}).
- **Moderación.** No tenemos un deber general de supervisar Su contenido, pero podemos revisar, eliminar, restringir o rechazar contenido que, según creemos razonablemente, vulnere la ley, estas Condiciones o los derechos de otros, o respecto del cual recibamos una notificación válida (véanse las [Notificaciones de derechos de autor y de contenido ilícito]({{url.copyright}})). Cuando sea obligatorio (por ejemplo, en virtud del Reglamento de Servicios Digitales de la UE), le comunicaremos nuestros motivos y la forma de impugnar la decisión.
- **Copias de seguridad.** Usted es responsable de conservar sus propias copias de Su contenido. Salvo que un plan incluya expresamente copias de seguridad o conservación, no garantizamos la restauración de contenido eliminado o perdido.
- **Datos agregados.** Podemos utilizar datos de uso que no le identifiquen ni revelen Su contenido para operar, proteger y mejorar los Servicios.
{{else}}
Usted conserva todos los derechos sobre cualquier material que envíe a los Servicios. Nos concede la licencia limitada necesaria para tratarlo con el fin de prestar, proteger y dar soporte a los Servicios, y usted garantiza que tiene derecho a enviarlo. Usted es responsable de conservar sus propias copias.
{{/if}}

### Sus datos y archivos {#your-data}

En la relación entre usted y nosotros, **usted es titular de los datos y archivos que introduce en los Servicios y es el único responsable de ellos**: de tener derecho a cargarlos y utilizarlos, de su exactitud y licitud, y de las decisiones que tome sobre quién puede acceder a ellos. Los almacenamos y tratamos siguiendo sus instrucciones para que los Servicios funcionen. Esto no limita nuestros propios deberes legales, por ejemplo los de proteger los Servicios y los datos personales, ni afecta a los derechos que la ley no permite excluir.
{{#if feature.uploads}}
- **Derechos de autor y otros derechos.** Usted confirma que es titular de lo que carga o que dispone de todas las autorizaciones necesarias (incluidas las de las personas que aparezcan en las imágenes), y acepta que **puede ser considerado responsable de las reclamaciones** sobre derechos de autor, derechos de la personalidad, privacidad u otros derechos que se deriven de ello. Podemos eliminar contenido y cooperar con los titulares de derechos y con las autoridades, tal como se describe en las [Notificaciones de derechos de autor y de contenido ilícito]({{url.copyright}}).
- **Privado por defecto.** Lo que carga solo es visible para usted y para las personas a las que dé acceso (por ejemplo, miembros u operadores de su organización). No utilizamos sus cargas ni otro contenido para crear material público, como plantillas, directrices, ejemplos, material de marketing o datos de entrenamiento, ni los ponemos a disposición de personas que no hayan iniciado sesión, salvo que usted los publique o comparta de forma explícita.
{{/if}}

## 7. Si presta los Servicios a otras personas {#end-users}

Si utiliza los Servicios para ofrecer algo a sus propios clientes, usuarios, empleados u otros terceros ("**Usuarios finales**"), usted es el único responsable de ellos: debe contar con la base jurídica, los avisos y los consentimientos exigidos para cualquier dato personal que recopile o trate, acordar sus propias condiciones con ellos, atender sus solicitudes y reclamaciones, garantizar que cumplen la [Política de uso aceptable]({{url.acceptable_use}}) y no asumir compromisos en nuestro nombre. Usted responde de los actos y omisiones de los Usuarios finales como si fueran propios. No tenemos obligaciones frente a los Usuarios finales.

## 8. Funciones de IA {#ai}

{{#if feature.ai}}
- Los resultados se generan automáticamente y pueden ser inexactos, incompletos, ofensivos, sesgados o similares a los resultados entregados a otras personas. Debe evaluar cualquier resultado antes de confiar en él y asumir la responsabilidad por la forma en que lo utiliza.
- **No utilice las funciones de IA como única base para decisiones que tengan efectos jurídicos o efectos significativos similares sobre las personas** (por ejemplo, en materia de empleo, crédito, vivienda, seguros, educación, asistencia sanitaria, aplicación de la ley o inmigración), y no las utilice para asesoramiento médico, jurídico, financiero o relativo a la seguridad sin una revisión por una persona cualificada.
- Debe informar sobre el contenido generado o manipulado por IA en la medida en que lo exijan la ley o la plataforma en la que lo publique (incluidos los deepfakes y los medios sintéticos), y no debe presentar como creados por personas los resultados de IA cuando ello pueda inducir a error.
- No debe utilizar las funciones para ningún uso prohibido en la [Política de uso aceptable]({{url.acceptable_use}}), ni tratar de eludir los sistemas de seguridad (incluidos los ataques de inyección de instrucciones, jailbreaking o extracción contra nuestros sistemas o los de otros).
- Los proveedores que utilizamos pueden aplicar sus propias políticas de uso; podemos restringir las funciones en consecuencia. No utilizamos Su contenido para entrenar modelos de uso general salvo que usted lo autorice expresamente (véase la [Política de privacidad]({{url.privacy}})).
{{else}}
Los Servicios no incluyen actualmente funciones asistidas por IA. Si las añadimos, actualizaremos estas Condiciones y se lo notificaremos conforme a la sección 16, y se aplicarán las normas correspondientes (exactitud, revisión humana, información y ausencia de usos prohibidos).
{{/if}}

## 9. Tarifas y pago {#fees}

{{#if feature.payments}}
- **Precios e impuestos.** Los precios se muestran en el momento de la compra y no incluyen el IVA, el impuesto sobre las ventas ni tributos similares, salvo que se indique lo contrario; usted abona los impuestos aplicables. Los precios para consumidores incluyen los impuestos exigidos por la ley.
{{#if feature.merchant_of_record}}- **Comerciante de registro.** Los pedidos son tramitados por nuestro proveedor de pagos{{#if payments.provider}} {{payments.provider}}{{/if}}, que actúa como revendedor y comerciante de registro, cobra el pago y los impuestos y emite el recibo. Sus condiciones de compra se aplican además de estas Condiciones; los pagos, la facturación, los impuestos y los reembolsos se rigen por ellas y por nuestra [Política de reembolsos y cancelación]({{url.refunds}}).
{{/if}}- **Pago.** Usted nos autoriza, a nosotros y a nuestro procesador de pagos, a cargar en el medio de pago que nos facilite todos los importes adeudados, incluidas las renovaciones y los cargos por uso. Usted garantiza que tiene derecho a utilizar ese medio de pago y debe mantener sus datos actualizados.
{{#if feature.subscriptions}}- **Antes de pagar.** Junto al botón de pago mostramos el precio, el período de facturación, que la suscripción se renueva automáticamente, qué ocurre tras cualquier período de prueba, cómo cancelar, y enlaces a estas Condiciones, a la [Política de reembolsos y cancelación]({{url.refunds}}) y a la [Política de privacidad]({{url.privacy}}). Solo se le cobra después de marcar la casilla o pulsar el botón que confirma que los ha visto. Conservamos un registro de ese consentimiento y le enviamos una confirmación que puede guardar.
- **Suscripciones.** Salvo que se indique otra cosa en el proceso de compra, las suscripciones se renuevan automáticamente por períodos de la misma duración hasta que se cancelen. Puede cancelarlas en cualquier momento desde su cuenta o por correo electrónico antes de la fecha de renovación; la cancelación surte efecto al final del período pagado y no prorrateamos. Le informaremos con antelación, como exige la ley, antes de que una prueba se convierta en un plan de pago o de que cambie un precio de renovación.
- **Pruebas y promociones.** Una prueba o una oferta promocional por persona o empresa. Podemos retirar o denegar una oferta cuando sospechemos un abuso (varias cuentas, identidades falsas, límites eludidos).
{{/if}}{{#if feature.credits}}- **Créditos.** Los créditos prepagados, los tokens o la moneda virtual dentro de la aplicación son una licencia limitada para utilizar los Servicios, no dinero; no tienen valor en efectivo, son intransferibles, no pueden canjearse por dinero ni negociarse, y pueden caducar en los términos indicados en el momento de la compra. Los créditos no utilizados se pierden cuando se cierra una cuenta por incumplimiento; en los demás casos, los reembolsos se rigen por las normas siguientes y por la legislación aplicable.{{#if feature.game}} Los objetos virtuales de los juegos se rigen por las [Normas del juego y política de objetos virtuales]({{url.game_rules}}).{{/if}}
{{/if}}- **Cambios de precio.** Podemos modificar los precios con efecto futuro, con al menos {{policy.notice_days}} días de antelación. Si no está de acuerdo, cancele antes de que el cambio surta efecto.
- **Pago atrasado o fallido.** Podemos reintentar el cobro, suspender la cuenta o rebajar su plan, y cobrar los costes razonables de recobro y los intereses legales sobre las facturas empresariales vencidas. Los Servicios se restablecen cuando se abonen los importes atrasados.
- **Contracargos y fraude.** La presentación de un contracargo o de una reclamación de pago sin haberse puesto antes en contacto con nosotros en [{{company.email}}](mailto:{{company.email}}), así como los pagos fraudulentos o no autorizados, pueden dar lugar a la suspensión inmediata, a la pérdida de acceso al contenido y al reclamo del importe discutido y de nuestras comisiones de tramitación.
- **Reembolsos.** Salvo que la ley le conceda un derecho o que indiquemos otra cosa por escrito, las tarifas pagadas no son reembolsables, incluidos los períodos parciales y las funciones no utilizadas, y no se debe ningún reembolso si suspendemos o cancelamos su cuenta por incumplimiento.
{{#if feature.consumers}}- **Cancelación, desistimiento y reembolsos.** Los derechos de desistimiento de los consumidores, la forma de cancelar y los supuestos en que reembolsamos se establecen en la [Política de reembolsos y cancelación]({{url.refunds}}), que forma parte de estas Condiciones. En el caso de contenidos o servicios digitales que se suministren de inmediato a petición suya, le pedimos su consentimiento expreso y su aceptación durante el proceso de compra, tal como exige la ley.
{{/if}}
{{else}}
Los Servicios se ofrecen actualmente de forma gratuita. Podemos introducir funciones de pago en el futuro; se le presentarán de forma clara y nunca se le cobrará sin su consentimiento.
{{/if}}

## 10. API, integraciones y servicios de terceros {#integrations}

{{#if feature.api}}
El acceso a la API está sujeto a estas Condiciones, a la documentación y a los límites de frecuencia que se apliquen. Debe proteger sus claves de API y sus credenciales, es responsable de todas las llamadas realizadas con ellas, y no debe compartirlas, incrustarlas en código público ni utilizarlas para revender el acceso. Podemos rotar, limitar o revocar claves, y modificar o retirar versiones de la API con un preaviso razonable (más breve cuando sea necesario por motivos de seguridad o legales). No utilice la API de un modo que perjudique el funcionamiento de los Servicios para otros ni intente eludir los límites, por ejemplo utilizando muchas claves o cuentas.

{{/if}}
Los Servicios pueden funcionar con productos, sitios web y servicios de terceros que no controlamos. Su uso de ellos se rige por las condiciones de esos terceros. No somos responsables de ellos, de su disponibilidad ni de sus cambios, ni de la forma en que utilicen los datos que usted decida compartir con ellos. Podemos dejar de dar soporte a una integración en cualquier momento.

## 11. Funciones beta y gratuitas {#beta}

Las funciones etiquetadas como alfa, beta, versión preliminar, experimental o similar, así como los niveles gratuitos, se proporcionan "tal cual", pueden cambiar o retirarse en cualquier momento, pueden ser menos fiables y quedan excluidas de cualquier compromiso de nivel de servicio. No confíe en ellas para fines críticos.

## 12. Propiedad intelectual {#ip}

Los Servicios, incluidos el software, el diseño, los textos, los gráficos, los datos, las marcas, los logotipos y la documentación, son propiedad nuestra o de nuestros licenciantes y están protegidos por las leyes de derechos de autor, de marcas y otras normas. Nada de lo dispuesto en estas Condiciones le transfiere ninguna titularidad, y no se le concede ningún derecho a utilizar nuestros nombres o marcas salvo en la medida necesaria para utilizar los Servicios.

**Sugerencias.** Si nos envía sugerencias o ideas, nos concede una licencia perpetua, irrevocable, mundial, libre de regalías y sublicenciable para utilizarlas sin restricción ni obligación de reconocimiento, en la medida permitida por la ley. No tenemos la obligación de actuar en función de las sugerencias.

Notificaciones de derechos de autor y de contenido ilícito: véanse las [Notificaciones de derechos de autor y de contenido ilícito]({{url.copyright}}).

## 13. Confidencialidad (clientes profesionales) {#confidentiality}

Cada parte mantendrá la confidencialidad de la información empresarial y técnica no pública de la otra, la utilizará únicamente para cumplir o ejercer sus derechos en virtud de estas Condiciones y la protegerá con una diligencia razonable, salvo que se trate de información que sea pública sin culpa del destinatario, que ya conociera, que haya desarrollado de forma independiente o que deba revelarse por ley (con notificación previa cuando sea lícito). La obligación subsiste durante tres años después de la finalización de estas Condiciones y de forma indefinida en el caso de los secretos comerciales.

## 14. Privacidad y protección de datos {#privacy}

Nuestra [Política de privacidad]({{url.privacy}}) explica cómo tratamos los datos personales. {{#if feature.processor_role}}Cuando tratemos datos personales por cuenta suya en calidad de encargados del tratamiento, será de aplicación el [Anexo de tratamiento de datos]({{url.dpa}}), que forma parte de estas Condiciones.{{/if}} Debe cumplir la normativa de protección de datos en su uso de los Servicios y no debe enviar categorías especiales de datos ni datos sujetos a regulación (salud, tarjetas de pago, identificadores oficiales, datos de menores) salvo que una función o un acuerdo lo permita expresamente.

## 15. Disponibilidad, soporte y cambios {#availability}

Nos esforzamos por garantizar una disponibilidad elevada, pero no garantizamos un funcionamiento ininterrumpido ni libre de errores. Podemos realizar tareas de mantenimiento (con aviso cuando sea razonablemente posible) y podemos modificar, añadir o eliminar funciones. Si reducimos de forma sustancial una función de pago durante un período prepagado, le avisaremos con al menos {{policy.notice_days}} días de antelación y, si no puede continuar razonablemente, le reembolsaremos a prorrata el período prepagado afectado. El soporte se presta en [{{company.email}}](mailto:{{company.email}}) sobre la base de esfuerzos razonables, salvo que su plan incluya un acuerdo de nivel de servicio.

## 16. Modificaciones de estas Condiciones {#changes}

Podemos actualizar estas Condiciones por motivos legales, de seguridad, de producto o empresariales. En el caso de los cambios sustanciales, le avisaremos con una antelación mínima de **{{policy.notice_days}} días**, por correo electrónico o en los Servicios, antes de que se apliquen a usted. Si no está de acuerdo, puede dejar de utilizar los Servicios y cerrar su cuenta antes de la fecha de entrada en vigor y, en el caso de los planes de pago, solicitar un reembolso a prorrata de las tarifas prepagadas correspondientes al período posterior a esa fecha. Seguir utilizando los Servicios después de la fecha de entrada en vigor implica que acepta las Condiciones actualizadas. Los cambios exigidos por la ley, o que no reduzcan nada ni impongan ninguna obligación adicional, pueden entrar en vigor de inmediato. Los cambios no se aplican a las controversias ya pendientes.

## 17. Suspensión y resolución {#termination}

**Por parte de usted.** Puede dejar de utilizar los Servicios y cerrar su cuenta en cualquier momento desde su configuración o por correo electrónico. Las tarifas pagadas no se reembolsan salvo que lo establezca la sección 9 o la ley.

**Por parte nuestra, por conveniencia.** Podemos rescindir los planes de pago con un preaviso de {{policy.notice_days}} días (con reembolso a prorrata de las tarifas prepagadas) y podemos interrumpir los servicios gratuitos con un preaviso razonable.

**Por parte nuestra, por causa justificada.** Podemos, con o sin notificación previa y en la medida permitida por la ley, restringir, suspender o rescindir su acceso, eliminar contenido o cerrar su cuenta de inmediato si:

- incumple estas Condiciones o la Política de uso aceptable (la respuesta será proporcionada a la gravedad, la reiteración y el riesgo);
- creemos razonablemente que su uso genera un riesgo de seguridad, jurídico, regulatorio, reputacional o financiero para nosotros, para otros usuarios o para terceros;
- no paga en la fecha debida;
- un tribunal, una autoridad o la normativa aplicable lo exige; o
- su cuenta parece comprometida, fraudulenta o abandonada.

Cuando sea práctico y lícito, le comunicaremos los motivos y le daremos la oportunidad de responder o de subsanar antes el problema, y cuando la ley lo exija (por ejemplo, el Reglamento de Servicios Digitales de la UE) le facilitaremos una exposición de motivos y una vía de recurso. Si le suspendemos o rescindimos por incumplimiento, no se reembolsará ninguna tarifa y los importes adeudados seguirán siendo exigibles.

**Efectos.** Al finalizar, su licencia termina y debe dejar de utilizar los Servicios; y, si lo solicita en un plazo de **{{policy.retention_account_days}} días**, pondremos Su contenido a su disposición para su exportación cuando sea técnicamente posible (no cuando sea ilícito o pueda perjudicar a otros). Transcurrido ese plazo, lo eliminamos conforme a lo descrito en la [Política de privacidad]({{url.privacy}}). Las cláusulas que por su naturaleza deban subsistir seguirán vigentes, en concreto las secciones 4, 6 (límites de la licencia y sus garantías), 9 (importes adeudados), 12, 13, 17-24 y 26.

## 18. Garantías y exención de responsabilidad {#disclaimer}

Prestamos los Servicios con la diligencia y el cuidado razonables. **Salvo lo anterior, y en la máxima medida permitida por la ley, los Servicios se prestan "tal cual" y "según disponibilidad", y renunciamos a todas las demás garantías, expresas o implícitas,** incluidas la comerciabilidad, la idoneidad para un fin determinado, la no infracción, la exactitud y la disponibilidad, así como cualquier garantía de que los Servicios serán seguros, libres de errores, ininterrumpidos o exentos de componentes dañinos. No garantizamos los resultados, el contenido de terceros ni los resultados que usted obtenga. Los Servicios no están diseñados para su uso en entornos de alto riesgo en los que un fallo pudiera causar la muerte, lesiones personales o daños graves (por ejemplo, dispositivos médicos, aviación, sistemas nucleares o sistemas de soporte vital), y usted no puede utilizarlos de esa manera.

{{#if feature.consumers}}Si usted es consumidor, conserva cualquier derecho legal que no pueda excluirse, como las garantías y los recursos legales previstos para los contenidos y servicios digitales en el Derecho de la UE y del Reino Unido, y las garantías para consumidores previstas en la Australian Consumer Law y en leyes similares de otros países.{{/if}}

## 19. Limitación de responsabilidad {#liability}

Nada de lo dispuesto en estas Condiciones excluye ni limita una responsabilidad que la ley no permita excluir ni limitar, en particular por muerte o lesiones personales, fraude o dolo, negligencia grave o (en el caso de los consumidores) los recursos legales imperativos.

Sin perjuicio de lo anterior, **en la máxima medida permitida por la ley** y para los clientes profesionales:

1. no somos responsables de los daños indirectos, incidentales, especiales, consecuenciales, ejemplares o punitivos, ni de la pérdida de beneficios, ingresos, negocio, fondo de comercio, ahorros previstos o datos, derivados de los Servicios o de estas Condiciones o relacionados con ellos, aunque se nos hubiera advertido de esa posibilidad; y
2. nuestra responsabilidad total acumulada por todas las reclamaciones se limita a la cantidad mayor entre (a) las tarifas que nos haya abonado por los Servicios durante los **{{policy.liability_cap_months}} meses** anteriores al hecho que dio origen por primera vez a la reclamación y (b) EUR 100.

{{#if feature.consumers}}Para los consumidores, somos responsables de las pérdidas o daños previsibles causados por nuestro incumplimiento o negligencia, pero no de las pérdidas que no fueran previsibles ni de las pérdidas de carácter empresarial.{{/if}}

No somos responsables de los fallos o retrasos causados por hechos ajenos a nuestro control razonable (sección 24). Los servicios gratuitos se prestan sin responsabilidad más allá de lo que exija la ley. Estos límites se aplican cualquiera que sea el fundamento de la responsabilidad (contrato, responsabilidad extracontractual, incluida la negligencia, u otro) e incluso si un recurso no cumple su finalidad esencial.

## 20. Indemnización {#indemnity}

Si es cliente profesional, usted defenderá, indemnizará y mantendrá indemne a {{company.name}}, a sus filiales, directivos, empleados y agentes frente a reclamaciones, daños, pérdidas, sanciones y gastos (incluidos los honorarios razonables de abogados) derivados de (a) Su contenido o sus datos, (b) el incumplimiento de estas Condiciones o de la ley por su parte o por parte de sus Usuarios finales, (c) su uso indebido de los Servicios o (d) una controversia entre usted y un tercero. Le informaremos sin demora de cualquier reclamación, le permitiremos dirigir la defensa (nosotros podremos participar a nuestro cargo), y usted no podrá transigir una reclamación que implique reconocer una culpa nuestra sin nuestro consentimiento. {{#if feature.consumers}}Los consumidores solo responden de la pérdida que causen con su propio incumplimiento, según lo dispuesto por la ley.{{/if}}

## 21. Recursos frente al uso indebido {#remedies}

Además de otros derechos, y en la medida permitida por la ley:

- **Medidas cautelares.** Usted reconoce que el incumplimiento de las secciones 4, 5 o 13 puede causar un perjuicio que los daños y perjuicios no puedan reparar del todo, y podremos solicitar medidas cautelares u otras medidas de equidad sin tener que probar un perjuicio efectivo ni prestar fianza.
- **Costes del uso indebido.** Si su uso indebido nos genera costes (infraestructura adicional, respuesta a incidentes, investigación, contracargos, multas regulatorias o reclamaciones de terceros), usted reembolsará los costes razonables y documentados.
- **Pruebas y cooperación.** Podemos conservar registros y contenido relacionados con un presunto uso indebido, y podemos revelarlos a las partes afectadas, a plataformas, a las fuerzas de seguridad o a los reguladores cuando la ley lo permita. Usted colaborará razonablemente en nuestras investigaciones.
- **Denuncias.** Podemos denunciar actividades ilícitas (incluidos el material de abuso sexual infantil, el fraude, las amenazas, el software malicioso y los ataques a sistemas) ante las autoridades y las partes afectadas, y lo haremos cuando la ley lo exija.
- **Retención.** Podemos retener, bloquear o compensar los importes que le debamos (por ejemplo, pagos a su favor) con los importes que usted nos deba o que resulten de un uso indebido, con sujeción a la ley.

## 22. Exportación, sanciones y anticorrupción {#export}

No puede utilizar, exportar ni reexportar los Servicios en contravención de las leyes de control de exportaciones y de sanciones aplicables, incluidas las de la UE, de Estados Unidos, del Reino Unido y de la ONU, ni a personas o países sujetos a sanciones generales, ni para ellos. Usted confirma que usted y sus usuarios no figuran en ninguna lista de sanciones o de partes restringidas. No ofrecerá ni entregará nada de valor para influir indebidamente en nadie en relación con los Servicios.

## 23. Ley aplicable y controversias {#law}

Estas Condiciones y cualquier controversia o reclamación que surja de ellas o guarde relación con ellas o con los Servicios (incluidas las controversias extracontractuales) se rigen por el derecho de la siguiente jurisdicción: **{{law.governing}}**, sin tener en cuenta las normas de conflicto de leyes y con exclusión de la Convención de las Naciones Unidas sobre los Contratos de Compraventa Internacional de Mercaderías.

**Resolución amistosa previa.** Antes de iniciar un procedimiento formal, escriba a [{{company.legal_email}}](mailto:{{company.legal_email}}) describiendo la controversia. Intentaremos resolverla de buena fe durante al menos 30 días.

**Tribunales.** Salvo que el derecho imperativo disponga otra cosa, la jurisdicción exclusiva corresponde a **{{law.venue}}**. Cualquiera de las partes puede solicitar medidas cautelares urgentes ante cualquier tribunal competente.

{{#if feature.consumers}}**Consumidores.** Si usted es consumidor, también conserva el derecho a interponer acciones ante los tribunales de su país de residencia y a invocar la normativa imperativa de protección de los consumidores vigente allí, y nada de lo dispuesto en esta sección lo elimina. {{#if consumer_dispute}}Participamos en la resolución extrajudicial de controversias ante {{consumer_dispute}}.{{/if}}
{{/if}}
**Plazo para reclamar (clientes profesionales).** En la medida permitida por la ley, toda reclamación debe interponerse en el plazo de {{policy.claim_months}} meses desde que nace la causa de la acción; de lo contrario, se considerará renunciada.

**Sin acciones colectivas (clientes profesionales, cuando se permita).** Las reclamaciones solo podrán formularse de forma individual, y no como parte de un procedimiento colectivo, de grupo o representativo.

## 24. Fuerza mayor {#force-majeure}

Ninguna de las partes es responsable de un retraso o incumplimiento causado por hechos ajenos a su control razonable, incluidos catástrofes naturales, guerra, terrorismo, disturbios civiles, pandemias, actuaciones gubernamentales, fallos de suministro eléctrico, de internet o de telecomunicaciones, fallos de proveedores de infraestructura en la nube u otros terceros, ciberataques pese a las medidas de seguridad razonables, conflictos laborales (salvo los del propio personal de la parte) o fallos de suministro. Las obligaciones de pago por servicios ya prestados no quedan eximidas. Si dicho hecho se prolonga más de 60 días, cualquiera de las partes podrá rescindir los servicios afectados.

## 25. Comunicaciones electrónicas y notificaciones {#notices}

Usted consiente recibir notificaciones y acuerdos por medios electrónicos. Podemos enviarle notificaciones por correo electrónico a la dirección de su cuenta, en los Servicios o publicándolas en nuestro sitio web. Las notificaciones dirigidas a nosotros deben enviarse a [{{company.legal_email}}](mailto:{{company.legal_email}}) y a {{company.address}}. Una notificación se considerará recibida 24 horas después de enviar un correo electrónico sin devolución, y en el momento de publicarse o mostrarse en los Servicios.

## 26. Disposiciones generales {#general}

- **Acuerdo íntegro.** Estas Condiciones y los documentos a los que hacen referencia constituyen el acuerdo íntegro sobre su objeto y sustituyen cualquier entendimiento anterior. Usted no se ha basado en ninguna declaración que no figure en ellas.
- **Divisibilidad.** Si una disposición no es ejecutable, se limitará al mínimo necesario o se sustituirá por una disposición ejecutable que se aproxime lo más posible a su finalidad, y el resto permanece en vigor.
- **No renuncia.** No ejercer un derecho no implica renunciar a él.
- **Cesión.** No puede ceder ni transferir sus derechos u obligaciones sin nuestro consentimiento por escrito. Podemos ceder estas Condiciones a una filial o a un sucesor de nuestro negocio, y se lo notificaremos.
- **Relación.** Las partes son contratistas independientes. Nada de lo dispuesto crea una sociedad, un mandato, una relación laboral ni una empresa conjunta.
- **Terceros.** Nadie más tiene derechos para exigir el cumplimiento de estas Condiciones, salvo nuestras filiales, directivos y agentes conforme a las secciones 19 y 20.
- **Idioma.** Las traducciones se facilitan para mayor comodidad; en caso de discrepancia, prevalece la versión en inglés, salvo que la ley imperativa exija otra cosa.
- **Interpretación.** Los encabezamientos tienen solo fines prácticos. "Incluido" significa "incluido, sin limitación".
- **Publicidad.** Podemos citarle como cliente con su logotipo, salvo que usted se oponga por correo electrónico; los consumidores nunca se citan.

## 27. Contacto {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Núm. de registro {{company.reg_id}}{{/if}}{{#if company.tax_id}} · ID fiscal {{company.tax_id}}{{/if}}
Correo electrónico [{{company.email}}](mailto:{{company.email}}) · Jurídico [{{company.legal_email}}](mailto:{{company.legal_email}}) · Soporte [{{company.email}}](mailto:{{company.email}}) · Véase también nuestro [Aviso legal]({{url.impressum}}).
