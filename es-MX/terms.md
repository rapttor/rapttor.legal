---
doc: terms
title: Términos de servicio
version: 1.3.0
updated: 2026-10-31
lang: es-MX
translation_of: 1.3.0
status: draft
summary: El acuerdo entre usted y {{product.name}} para el uso de {{product.name}}.
---

# Términos de servicio

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

## 1. Acuerdo {#agreement}

Estos Términos de servicio (los "**Términos**") constituyen un acuerdo vinculante entre usted y **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, número de registro {{company.reg_id}}{{/if}} ("**{{product.name}}**", "nosotros") que regula su acceso y uso de {{product.name}}, de nuestros sitios web, aplicaciones, API, documentación y servicios relacionados (los "**Servicios**").

Al crear una cuenta, instalar una aplicación o utilizar de cualquier otra forma los Servicios, usted acepta estos Términos y los documentos que incorporan: el [Aviso de privacidad]({{url.privacy}}), la [Política de uso aceptable]({{url.acceptable_use}}), la [Política de cookies]({{url.cookies}}){{#if feature.processor_role}}, el [Anexo de tratamiento de datos personales]({{url.dpa}}) cuando sea aplicable{{/if}}{{#if feature.payments}}, la [Política de reembolsos y cancelaciones]({{url.refunds}}){{/if}}{{#if feature.game}}, las [Reglas del juego y política de artículos virtuales]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, los [Términos de la aplicación]({{url.app_eula}}){{/if}} y cualquier formulario de pedido o condición específica del producto. Si no está de acuerdo, no utilice los Servicios.

Si utiliza los Servicios en nombre de una organización, usted confirma que tiene facultades para obligarla, y "usted" incluye a dicha organización. Si las condiciones específicas de un producto o un contrato firmado entran en conflicto con estos Términos, prevalecerán únicamente para ese producto o cliente.

{{#if feature.consumers}}
**Consumidores.** Si utiliza los Servicios como consumidor, la legislación obligatoria de protección al consumidor del país de su residencia sigue aplicándose y nada en estos Términos limita esos derechos. Las secciones marcadas *(clientes empresariales)* se aplican únicamente si usted no es consumidor.
{{/if}}

## 2. Elegibilidad {#eligibility}

Solo puede utilizar los Servicios si:

1. {{#if feature.minors}}tiene al menos **{{policy.min_age}}** años de edad y, si no ha alcanzado la mayoría de edad donde vive, cuenta con el consentimiento de un padre, madre o tutor legal que acepta estos Términos por usted y se hace responsable de su uso y de sus compras (podemos solicitar comprobante){{else}}tiene al menos **{{policy.min_age}}** años de edad y capacidad para celebrar un contrato vinculante{{/if}};
2. no tiene impedimento para recibir los Servicios conforme a la legislación aplicable, incluidas las leyes de sanciones y de control de exportaciones (sección 22);
3. no ha sido excluido previamente de los Servicios por infringir nuestras reglas, salvo que hayamos acordado por escrito permitirle regresar; y
4. utiliza los Servicios de forma lícita en el lugar donde se encuentra.
{{#if feature.age_gate}}5. confirma, cuando se lo solicitemos, que tiene al menos **{{policy.age_gate}}** años de edad y que es mayor de edad conforme a las normas de su país para usar funciones que involucren {{policy.age_topics|contenido sensible para la edad}}. No necesitamos su fecha de nacimiento: su confirmación queda registrada. Si no es cierto, podemos bloquear la cuenta y eliminar sus datos.
{{/if}}{{#if feature.gambling}}6. confirma, cuando se lo solicitemos, que tiene al menos **{{policy.gambling_age}}** años de edad, que los juegos de azar son lícitos donde vive y que utiliza las funciones de juegos de azar únicamente para sí mismo. Podemos exigir una verificación real de edad e identidad, y podemos negar o terminar el acceso a las funciones de juegos de azar cuando lo requieran la ley o nuestras licencias.
{{/if}}{{#if policy.excluded_regions}}7. confirma, cuando se lo solicitemos, que no se encuentra en, y que no es residente ni nacional de, ninguno de estos países o regiones: **{{policy.excluded_regions}}**, donde nuestros Servicios o estos Términos podrían no ser lícitos, podrían no ser exigibles o no se ofrecen. No podemos ver dónde se encuentra realmente (por ejemplo, detrás de una VPN), por lo que nos basamos en su confirmación; si no es cierto, usted utiliza los Servicios bajo su propio riesgo, es responsable de cumplir con la legislación local y podemos bloquear la cuenta y eliminar sus datos. Nada en este numeral limita los derechos que no pueden renunciarse conforme a la ley del lugar donde vive.
{{/if}}

Podemos solicitar en cualquier momento comprobante de edad, de identidad o de facultades, y podemos negar o cerrar una cuenta que no supere la verificación.

## 3. Cuentas y seguridad {#accounts}

- Proporcione información exacta y actualizada, y manténgala al día. Una persona o entidad, una cuenta, salvo que acordemos otra cosa; crear cuentas adicionales para eludir una restricción, límite, suspensión, prueba o regla de precios está prohibido.
- Mantenga sus credenciales en confidencialidad. No comparta, venda, rente ni transfiera su cuenta. Cada asiento de usuario es para una única persona identificada, salvo que el plan indique lo contrario.
- Usted es responsable de todo lo que ocurra bajo su cuenta, incluido lo que hagan las personas a las que permita el acceso o a las que no logre impedirlo, hasta que nos informe que la cuenta está comprometida. Notifíquenos de inmediato a [{{company.email}}](mailto:{{company.email}}) si sospecha un acceso no autorizado.
- Podemos exigir una autenticación más fuerte, restablecer credenciales o bloquear una cuenta que razonablemente consideremos comprometida o utilizada de forma abusiva.
- Las cuentas gratuitas inactivas podrán cerrarse previo aviso al correo electrónico registrado; las cuentas de pago no se cierran por inactividad.
{{#if feature.anonymous}}- **Cuentas anónimas.** Cuando lo ofrezcamos, los Servicios crean una cuenta anónima para usted la primera vez que los utiliza. No tiene dirección de correo electrónico; quien use ese navegador o dispositivo puede usar la cuenta, y no podemos recuperarla por usted si pierde el acceso. Puede vincular una dirección de correo electrónico en cualquier momento para proteger y recuperar la cuenta: confirmamos la dirección mediante un enlace de inicio de sesión que le enviamos. Las cuentas anónimas que permanezcan sin uso durante mucho tiempo podrán eliminarse, previo aviso en los Servicios cuando sea posible.
{{/if}}- **Titular de la cuenta y acceso.** La persona que confirme el control de una dirección de correo electrónico mediante el enlace de inicio de sesión que le enviamos, y que acepte estos Términos, es el titular de la cuenta y se considera la persona que tomó las decisiones en ella. Si actúa en nombre de una organización, usted confirma que puede obligarla. Usted decide qué otras personas de su organización tienen acceso (por ejemplo, operadores con funciones limitadas); las personas a las que dé acceso pueden ver lo que usted ponga a su disposición, y usted es responsable de esa decisión.

## 4. Licencia y restricciones {#licence}

Sujeto a estos Términos y al pago de las tarifas aplicables, le otorgamos una licencia limitada, revocable, no exclusiva, intransferible y no sublicenciable para acceder a los Servicios y utilizarlos con sus propios fines internos, personales o empresariales, durante la vigencia. El software que le entregamos se licencia, no se vende. Nosotros y nuestros licenciantes nos reservamos todos los derechos no otorgados expresamente.

A menos que la ley le conceda un derecho que no pueda renunciarse, usted no debe, ni permitir que nadie:

- copiar, modificar, traducir ni crear obras derivadas de los Servicios;
- aplicar ingeniería inversa, descompilar, desensamblar ni intentar derivar código fuente, modelos, pesos, algoritmos o API no públicas;
- revender, sublicenciar, rentar, arrendar, alojar como servicio para terceros ni poner los Servicios a disposición de terceros distintos de sus usuarios autorizados;
- eludir límites técnicos, licencias, medición, controles de acceso, límites de tasa o funciones de seguridad;
- eliminar o alterar avisos de propiedad, atribuciones o avisos de licencias de código abierto;
- utilizar los Servicios o sus resultados para crear o entrenar un producto competidor, o para hacer pruebas comparativas o publicar resultados de desempeño sin nuestro consentimiento por escrito{{#if feature.ai}}, o para entrenar, ajustar finamente o destilar un modelo de AI a partir del resultado de los Servicios cuando lo prohibamos en la documentación{{/if}};
- acceder a los Servicios por medios automatizados (bots, raspadores, rastreadores) salvo mediante nuestra API documentada y conforme a sus condiciones.

La [Política de uso aceptable]({{url.acceptable_use}}) añade reglas detalladas y forma parte de estos Términos. Los componentes de código abierto se rigen por sus propias licencias, que prevalecen para esos componentes.

## 5. Uso aceptable y aplicación {#acceptable-use}

Usted es responsable de su uso de los Servicios y de la conducta de todas las personas a las que permita usarlos. El uso indebido puede dañar a otros usuarios, a terceros y a nosotros, y podemos actuar como se describe en la [Política de uso aceptable]({{url.acceptable_use}}) y en la sección 17, lo que incluye eliminar contenido, restringir funciones, limitar la velocidad, suspender o terminar cuentas, retener pagos a usted, denunciar ante autoridades y reclamar recursos conforme a la sección 21.

## 6. Su contenido {#your-content}

{{#if feature.ugc}}
"**Su contenido**" significa todo lo que usted cargue, envíe, publique, conecte o genere a través de los Servicios{{#if feature.ai}}, incluidas las instrucciones y, entre usted y nosotros, el resultado que reciba{{/if}}.

- **Propiedad.** Usted conserva todos los derechos sobre Su contenido. No adquirimos ninguna propiedad sobre él.
- **Licencia a nosotros.** Usted nos otorga una licencia mundial, no exclusiva y libre de regalías para alojar, almacenar, reproducir, procesar, transmitir, adaptar (para formato, miniaturas, traducciones y verificaciones de seguridad) y mostrar Su contenido **únicamente en la medida necesaria para operar, proteger, dar soporte y mejorar los Servicios y para hacer valer estos Términos**, mientras lo mantenga en los Servicios y durante los periodos limitados de respaldo y de conservación por requerimiento legal que correspondan después. Cuando usted haga público un contenido, la licencia se extiende a mostrarlo al público que usted elija. Esta licencia termina cuando usted elimina el contenido o su cuenta, sujeta a esos periodos y a las copias que otros usuarios ya hayan recibido lícitamente.
- **Sus compromisos.** Usted tiene y mantendrá todos los derechos, consentimientos y permisos necesarios para enviar Su contenido y para otorgar esta licencia, incluidos los de cualquier persona identificable en él. Su contenido y el uso que hagamos de él conforme a lo permitido no infringen ni vulneran ninguna ley ni los derechos de ninguna persona (derechos de autor, marcas, privacidad, imagen, confidencialidad o contrato), y cumple con la [Política de uso aceptable]({{url.acceptable_use}}).
- **Moderación.** No tenemos una obligación general de supervisar Su contenido, pero podemos revisar, eliminar, restringir o rechazar contenido que razonablemente consideremos que viola la ley, estos Términos o los derechos de otros, o respecto del cual recibamos un aviso válido (véase [Avisos de derechos de autor y de contenido ilegal]({{url.copyright}})). Cuando se requiera (por ejemplo, conforme a la Digital Services Act de la UE), le comunicaremos nuestros motivos y la forma de impugnar la decisión.
- **Respaldos.** Usted es responsable de conservar sus propias copias de Su contenido. Salvo que un plan incluya expresamente respaldos o conservación, no prometemos restaurar contenido eliminado o perdido.
- **Datos agregados.** Podemos utilizar datos de uso que no lo identifiquen ni revelen Su contenido para operar, proteger y mejorar los Servicios.
{{else}}
Usted conserva todos los derechos sobre cualquier cosa que envíe a los Servicios. Nos otorga la licencia limitada necesaria para procesarla con el fin de prestar, proteger y dar soporte a los Servicios, y usted se compromete a tener derecho a enviarla. Usted es responsable de conservar sus propias copias.
{{/if}}

### Sus datos y archivos {#your-data}

Entre usted y nosotros, **usted es propietario de los datos y archivos que introduce en los Servicios, y es el único responsable de ellos**: de tener derecho a cargarlos y utilizarlos, de su exactitud y licitud, y de las decisiones que tome sobre quién puede acceder a ellos. Los almacenamos y procesamos siguiendo sus instrucciones para que los Servicios funcionen. Esto no limita nuestras obligaciones legales propias, por ejemplo, la de proteger los Servicios y los datos personales, y no afecta los derechos que la ley no permite excluir.
{{#if feature.uploads}}
- **Derechos de autor y otros derechos.** Usted confirma que es propietario de lo que carga o que cuenta con todos los permisos necesarios (incluidos los de las personas que aparecen en las imágenes), y acepta que **puede ser considerado responsable de las reclamaciones** sobre derechos de autor, derechos de la personalidad, privacidad u otros derechos que surjan de ello. Podemos eliminar contenido y cooperar con los titulares de derechos y con las autoridades, como se describe en [Avisos de derechos de autor y de contenido ilegal]({{url.copyright}}).
- **Privado por defecto.** Lo que usted carga solo es visible para usted y para las personas a las que dé acceso (por ejemplo, miembros u operadores de su organización). No utilizamos sus cargas ni otro contenido para crear material público, como plantillas, guías, ejemplos, material de marketing o datos de entrenamiento, ni los ponemos a disposición de personas que no hayan iniciado sesión, salvo que usted los publique o comparta de forma expresa.
{{/if}}

## 7. Si presta servicios a terceros con los Servicios {#end-users}

Si utiliza los Servicios para ofrecer algo a sus propios clientes, usuarios, empleados u otros terceros ("**Usuarios finales**"), usted es el único responsable de ellos: debe contar con la base jurídica, los avisos y los consentimientos requeridos para cualquier dato personal que recopile o procese, acordar sus propios términos con ellos, atender sus solicitudes y quejas, asegurar que cumplan con la [Política de uso aceptable]({{url.acceptable_use}}) y no asumir compromisos en nuestro nombre. Usted responde por los actos y omisiones de los Usuarios finales como si fueran propios. No tenemos obligaciones con los Usuarios finales.

## 8. Funciones de AI {#ai}

{{#if feature.ai}}
- Los resultados se generan automáticamente y pueden ser inexactos, incompletos, ofensivos, sesgados o similares a resultados entregados a otras personas. Debe evaluar el resultado antes de confiar en él y asumir la responsabilidad por el uso que le dé.
- **No utilice las funciones de AI como única base para decisiones que tengan efectos jurídicos o efectos igualmente significativos sobre las personas** (por ejemplo, empleo, crédito, vivienda, seguros, educación, atención médica, aplicación de la ley o migración), y no las utilice para asesoría médica, legal, financiera o de seguridad crítica sin revisión humana calificada.
- Debe divulgar el contenido generado o manipulado por AI en la medida en que lo exijan la ley o la plataforma en la que lo publique (incluidos los deepfakes y los medios sintéticos), y no debe presentar un resultado de AI como hecho por personas cuando ello pudiera engañar.
- No debe utilizar las funciones para ningún uso prohibido en la [Política de uso aceptable]({{url.acceptable_use}}), ni intentar eludir los sistemas de seguridad (incluidos los ataques de inyección de instrucciones, jailbreaking o extracción contra nuestros sistemas o los de otros).
- Los proveedores que utilizamos pueden aplicar sus propias políticas de uso; podemos restringir las funciones en consecuencia. No utilizamos Su contenido para entrenar modelos de propósito general, salvo que usted lo acepte (véase el [Aviso de privacidad]({{url.privacy}})).
{{else}}
Los Servicios no incluyen actualmente funciones asistidas por AI. Si las añadimos, actualizaremos estos Términos y daremos aviso conforme a la sección 16, y se aplicarán las reglas para ellas (exactitud, revisión humana, divulgación y ausencia de usos prohibidos).
{{/if}}

## 9. Tarifas y pagos {#fees}

{{#if feature.payments}}
- **Precios e impuestos.** Los precios se muestran al momento de la compra y no incluyen el IVA, impuestos sobre ventas ni impuestos similares, salvo que se indique lo contrario; usted paga los impuestos aplicables. Los precios para consumidores incluyen los impuestos que exige la ley.
{{#if feature.merchant_of_record}}- **Comerciante de registro (merchant of record).** Los pedidos son procesados por nuestro proveedor de pagos{{#if payments.provider}} {{payments.provider}}{{/if}}, que actúa como revendedor y *merchant of record*, cobra el pago y los impuestos, y emite el recibo. Sus condiciones de compra con dicho proveedor se aplican a la compra además de estos Términos; los pagos, la facturación, los impuestos y los reembolsos se rigen por ellas y por nuestra [Política de reembolsos y cancelaciones]({{url.refunds}}).
{{/if}}- **Pago.** Usted nos autoriza, a nosotros y a nuestro procesador de pagos, a cargar el método de pago que nos proporcione por todos los importes adeudados, incluidas las renovaciones y los cargos por uso. Usted se compromete a tener derecho a utilizar ese método de pago y a mantener sus datos actualizados.
{{#if feature.subscriptions}}- **Antes de pagar.** Junto al botón de pago le mostramos el precio, el periodo de facturación, que la suscripción se renueva automáticamente, qué ocurre después de cualquier prueba, cómo cancelar, y los enlaces a estos Términos, a la [Política de reembolsos y cancelaciones]({{url.refunds}}) y al [Aviso de privacidad]({{url.privacy}}). Solo se le cobra después de marcar la casilla o presionar el botón que confirma que los ha visto. Conservamos un registro de ese consentimiento y le enviamos una confirmación que puede guardar.
- **Suscripciones.** Salvo que se indique otra cosa al momento de pagar, las suscripciones se renuevan automáticamente por periodos de la misma duración hasta que se cancelen. Puede cancelar en cualquier momento desde su cuenta o por correo electrónico antes de la fecha de renovación; la cancelación surte efecto al final del periodo pagado y no prorrateamos. Le avisaremos con anticipación, como exige la ley, antes de que una prueba se convierta en cobro o de que cambie el precio de renovación.
- **Pruebas y promociones.** Una prueba o una oferta promocional por persona o empresa. Podemos retirar o negar una oferta cuando sospechemos de abuso (varias cuentas, identidades falsas, límites eludidos).
{{/if}}{{#if feature.credits}}- **Créditos.** Los créditos prepagados, tokens o moneda dentro de la aplicación son una licencia limitada para utilizar los Servicios, no dinero; no tienen valor en efectivo, no son transferibles, no pueden canjearse por dinero ni negociarse, y pueden vencer según se indique al momento de la compra. Los créditos no utilizados se pierden cuando una cuenta se cierra por incumplimiento; en los demás casos, los reembolsos siguen las reglas siguientes y la legislación aplicable.{{#if feature.game}} Los artículos virtuales en los juegos se rigen por las [Reglas del juego y política de artículos virtuales]({{url.game_rules}}).{{/if}}
{{/if}}- **Cambios de precio.** Podemos cambiar los precios hacia el futuro con un aviso de al menos {{policy.notice_days}} días. Si no está de acuerdo, cancele antes de que el cambio surta efecto.
- **Pago atrasado o fallido.** Podemos reintentar el cobro, suspender o degradar la cuenta, y cobrar costos razonables de recuperación e intereses legales sobre las facturas empresariales vencidas. Los Servicios se restablecen una vez pagados los adeudos.
- **Contracargos y fraude.** Iniciar un contracargo o una disputa de pago sin antes contactarnos en [{{company.email}}](mailto:{{company.email}}), o los pagos fraudulentos o no autorizados, pueden dar lugar a la suspensión inmediata, a la pérdida de acceso al contenido y a la recuperación del monto disputado y de nuestros costos de procesamiento.
- **Reembolsos.** Salvo que la ley le conceda un derecho o que indiquemos lo contrario por escrito, las tarifas pagadas no son reembolsables, incluso por periodos parciales y funciones no utilizadas, y no se debe reembolso alguno si suspendemos o terminamos su cuenta por incumplimiento.
{{#if feature.consumers}}- **Cancelación, desistimiento y reembolsos.** Los derechos de desistimiento del consumidor, la forma de cancelar y los casos en que reembolsamos se establecen en la [Política de reembolsos y cancelaciones]({{url.refunds}}), que forma parte de estos Términos. Para contenido o servicios digitales suministrados de inmediato a su solicitud, le pedimos su consentimiento expreso y su reconocimiento al momento de pagar, como exige la ley.
{{/if}}
{{else}}
Los Servicios se ofrecen actualmente de forma gratuita. Podríamos introducir funciones de pago en el futuro; se le presentarán de forma clara y nunca se le cobrará sin su acuerdo.
{{/if}}

## 10. API, integraciones y servicios de terceros {#integrations}

{{#if feature.api}}
El acceso a la API está sujeto a estos Términos, a la documentación y a cualquier límite de tasa. Usted debe proteger sus claves y credenciales de API, es responsable de todas las llamadas realizadas con ellas, y no debe compartirlas, incrustarlas en código público ni utilizarlas para revender acceso. Podemos rotar, limitar o revocar claves, y cambiar o retirar versiones de la API con un aviso razonable (más corto cuando sea necesario por motivos de seguridad o legales). No utilice la API de forma que degrade los Servicios para otros ni intente eludir límites, por ejemplo, usando muchas claves o cuentas.

{{/if}}
Los Servicios pueden funcionar con productos, sitios web y servicios de terceros que no controlamos. Su uso de ellos se rige por sus propias condiciones. No somos responsables de ellos, de su disponibilidad o de sus cambios, ni de la forma en que usen los datos que usted decida compartir con ellos. Podemos dejar de dar soporte a una integración en cualquier momento.

## 11. Funciones beta y gratuitas {#beta}

Las funciones marcadas como alfa, beta, vista previa, experimentales o similares, así como los planes gratuitos, se proporcionan "tal cual", pueden cambiar o retirarse en cualquier momento, pueden ser menos confiables y están excluidas de cualquier compromiso de nivel de servicio. No dependa de ellas para fines críticos.

## 12. Propiedad intelectual {#ip}

Los Servicios, incluidos el software, el diseño, los textos, los gráficos, los datos, las marcas, los logotipos y la documentación, son propiedad nuestra o de nuestros licenciantes, y están protegidos por derechos de autor, marcas y otras leyes. Nada en estos Términos le transfiere propiedad alguna, y no se le concede ningún derecho a usar nuestros nombres o marcas, salvo lo necesario para utilizar los Servicios.

**Retroalimentación.** Si nos envía sugerencias o ideas, nos otorga una licencia perpetua, irrevocable, mundial, libre de regalías y sublicenciable para usarlas sin restricción ni reconocimiento, en la medida que lo permita la ley. No tenemos la obligación de actuar conforme a la retroalimentación.

Avisos de derechos de autor y de contenido ilegal: véase [Avisos de derechos de autor y de contenido ilegal]({{url.copyright}}).

## 13. Confidencialidad (clientes empresariales) {#confidentiality}

Cada parte mantendrá la confidencialidad de la información empresarial y técnica no pública de la otra, la utilizará únicamente para cumplir o ejercer sus derechos conforme a estos Términos, y la protegerá con un cuidado razonable; quedan exceptuadas la información que sea pública sin culpa del receptor, la que ya fuera conocida, la que se haya desarrollado de forma independiente y la que deba divulgarse por ley (con aviso previo cuando sea lícito). La obligación dura tres años después de terminados los Términos, e indefinidamente en el caso de secretos comerciales.

## 14. Privacidad y protección de datos {#privacy}

Nuestro [Aviso de privacidad]({{url.privacy}}) explica cómo tratamos los datos personales. {{#if feature.processor_role}}Cuando tratemos datos personales por cuenta de usted como su encargado, se aplica el [Anexo de tratamiento de datos personales]({{url.dpa}}), que forma parte de estos Términos.{{/if}} Usted debe cumplir con la legislación de protección de datos en su uso de los Servicios y no debe enviar datos personales sensibles o regulados (salud, tarjetas de pago, identificadores gubernamentales, datos de menores) salvo que una función o un acuerdo lo permita expresamente.

## 15. Disponibilidad, soporte y cambios {#availability}

Procuramos una alta disponibilidad, pero no garantizamos un funcionamiento ininterrumpido ni libre de errores. Podemos realizar mantenimiento (con aviso cuando sea razonablemente posible), y podemos modificar, añadir o retirar funciones. Si reducimos de forma sustancial una función de pago durante un periodo prepagado, le daremos un aviso de al menos {{policy.notice_days}} días y, si usted no puede continuar razonablemente, un reembolso prorrateado del periodo prepagado afectado. El soporte se presta en [{{company.email}}](mailto:{{company.email}}) con base en esfuerzos razonables, salvo que su plan incluya un acuerdo de nivel de servicio.

## 16. Cambios a estos Términos {#changes}

Podemos actualizar estos Términos por motivos legales, de seguridad, de producto o de negocio. Para los cambios sustanciales le daremos un aviso de al menos **{{policy.notice_days}} días** por correo electrónico o en los Servicios, antes de que se apliquen a usted. Si no está de acuerdo, puede dejar de usar los Servicios y cerrar su cuenta antes de la fecha de entrada en vigor y (en planes de pago) solicitar un reembolso prorrateado de las tarifas prepagadas por el periodo posterior a esa fecha. Seguir usando los Servicios después de la fecha de entrada en vigor significa que acepta los Términos actualizados. Los cambios que exija la ley, o que no reduzcan nada ni añadan obligación alguna, pueden entrar en vigor de inmediato. Los cambios no se aplican a las controversias que ya estén pendientes.

## 17. Suspensión y terminación {#termination}

**Por usted.** Puede dejar de usar los Servicios y cerrar su cuenta en cualquier momento desde su configuración o por correo electrónico. Las tarifas pagadas no se reembolsan, salvo que la sección 9 o la ley lo establezcan.

**Por nosotros, por conveniencia.** Podemos terminar los planes de pago con {{policy.notice_days}} días de aviso (con reembolso prorrateado de las tarifas prepagadas), y podemos descontinuar los servicios gratuitos con un aviso razonable.

**Por nosotros, por causa.** Podemos, con o sin aviso previo y en la medida que lo permita la ley, restringir, suspender o terminar su acceso, eliminar contenido o cerrar su cuenta de inmediato si:

- usted incumple estos Términos o la Política de uso aceptable (la respuesta es proporcional a la gravedad, la reiteración y el riesgo);
- razonablemente consideramos que su uso crea un riesgo de seguridad, legal, regulatorio, reputacional o financiero para nosotros, para otros usuarios o para terceros;
- no paga cuando vence;
- un tribunal, una autoridad o la ley aplicable lo exige; o
- su cuenta parece comprometida, fraudulenta o abandonada.

Cuando sea práctico y lícito, le diremos el motivo y le daremos la oportunidad de responder o de corregir primero el problema, y cuando la ley lo exija (por ejemplo, la Digital Services Act de la UE), le proporcionaremos una declaración de motivos y una vía para impugnar. Si lo suspendemos o terminamos por incumplimiento, no se reembolsan tarifas y los importes adeudados siguen siendo pagaderos.

**Efectos.** Al terminar, su licencia termina; debe dejar de usar los Servicios; y, si lo solicita dentro de **{{policy.retention_account_days}} días**, pondremos Su contenido a su disposición para su exportación cuando sea técnicamente posible (no cuando sea ilícito o cause daño a otros). Después de ese periodo lo eliminamos como se describe en el [Aviso de privacidad]({{url.privacy}}). Las secciones que por su naturaleza deben sobrevivir seguirán vigentes, incluidas las secciones 4, 6 (límites de la licencia y sus compromisos), 9 (importes adeudados), 12, 13, 17-24 y 26.

## 18. Garantías y exención de responsabilidad {#disclaimer}

Prestamos los Servicios con una habilidad y un cuidado razonables. **En lo demás, en la máxima medida que permita la ley, los Servicios se proporcionan "tal cual" y "según disponibilidad", y renunciamos a todas las demás garantías, expresas o implícitas,** incluidas la comerciabilidad, la idoneidad para un fin particular, la no infracción, la exactitud y la disponibilidad, así como cualquier garantía de que los Servicios serán seguros, libres de errores, ininterrumpidos o libres de componentes dañinos. No garantizamos los resultados, el contenido de terceros ni los resultados que usted obtenga. Los Servicios no están diseñados para usarse en entornos de alto riesgo donde una falla podría causar la muerte, lesiones personales o daños graves (por ejemplo, dispositivos médicos, aviación, sistemas nucleares o sistemas de soporte vital), y usted no puede usarlos de esa manera.

{{#if feature.consumers}}Si usted es consumidor, conserva cualquier derecho legal que no pueda excluirse, como las garantías y recursos legales para contenidos y servicios digitales conforme al derecho de la UE y del Reino Unido, y las garantías al consumidor conforme a la Australian Consumer Law y leyes similares en otros países.{{/if}}

## 19. Limitación de responsabilidad {#liability}

Nada en estos Términos excluye ni limita la responsabilidad que no pueda excluirse ni limitarse por ley, incluida la responsabilidad por muerte o lesiones personales, fraude o dolo, negligencia grave o (para consumidores) los recursos legales obligatorios.

Sujeto a lo anterior, **en la máxima medida que permita la ley** y para clientes empresariales:

1. no somos responsables de daños indirectos, incidentales, especiales, consecuentes, ejemplares o punitivos, ni de la pérdida de utilidades, ingresos, negocio, fondo de comercio, ahorros previstos o datos, derivados de los Servicios o de estos Términos, o relacionados con ellos, incluso si se nos advirtió de esa posibilidad; y
2. nuestra responsabilidad total agregada por todas las reclamaciones se limita a la mayor de (a) las tarifas que usted nos pagó por los Servicios en los **{{policy.liability_cap_months}} meses** anteriores al hecho que dio origen por primera vez a la reclamación y (b) EUR 100.

{{#if feature.consumers}}Para consumidores, somos responsables de las pérdidas o daños previsibles causados por nuestro incumplimiento o negligencia, pero no de las pérdidas que no eran previsibles, ni de las pérdidas relacionadas con un negocio.{{/if}}

No somos responsables por fallas o retrasos causados por eventos fuera de nuestro control razonable (sección 24). Los servicios gratuitos se prestan sin responsabilidad más allá de lo que exija la ley. Estos límites se aplican sea cual sea la forma en que surja la responsabilidad (contrato, responsabilidad extracontractual incluida la negligencia, u otra) y aunque un recurso no cumpla su finalidad esencial.

## 20. Indemnización {#indemnity}

Si es cliente empresarial, usted defenderá, indemnizará y mantendrá indemnes a {{company.name}}, sus afiliadas, directivos, empleados y agentes frente a reclamaciones, daños, pérdidas, sanciones y gastos (incluidos honorarios legales razonables) derivados de (a) Su contenido o sus datos, (b) el incumplimiento de estos Términos o de la ley por parte de usted o de sus Usuarios finales, (c) el uso indebido de los Servicios por parte de usted, o (d) una controversia entre usted y un tercero. Le informaremos sin demora de cualquier reclamación, le permitiremos controlar la defensa (podemos participar a nuestro costo), y usted no podrá transigir una reclamación que implique reconocer una culpa nuestra sin nuestro consentimiento. {{#if feature.consumers}}Los consumidores solo son responsables de la pérdida que causen con su propio incumplimiento, como lo dispone la ley.{{/if}}

## 21. Recursos por uso indebido {#remedies}

Además de otros derechos, y en la medida que lo permita la ley:

- **Medidas cautelares.** Usted reconoce que el incumplimiento de las secciones 4, 5 o 13 puede causar un daño que los daños y perjuicios no pueden reparar por completo, y podemos solicitar medidas cautelares u otras medidas equitativas sin probar un daño efectivo ni otorgar una fianza.
- **Costos del abuso.** Si su uso indebido nos genera costos (infraestructura adicional, respuesta a incidentes, investigación, contracargos, multas regulatorias o reclamaciones de terceros), usted reembolsará los costos razonables y documentados.
- **Evidencia y cooperación.** Podemos conservar registros y contenido relacionados con un presunto abuso, y podemos divulgarlos a las partes afectadas, plataformas, autoridades policiales o reguladores cuando la ley lo permita. Coopere razonablemente con nuestras investigaciones.
- **Denuncia.** Podemos denunciar actividades ilícitas (incluido el material de abuso sexual infantil, el fraude, las amenazas, el malware y los ataques a sistemas) ante las autoridades y las partes afectadas, y lo haremos cuando la ley lo exija.
- **Retención.** Podemos retener, congelar o compensar los importes que le debamos (por ejemplo, pagos a usted) contra los importes que usted nos deba o que resulten de un abuso, sujeto a la ley.

## 22. Exportación, sanciones y anticorrupción {#export}

Usted no puede usar, exportar ni reexportar los Servicios en violación de las leyes aplicables de control de exportaciones y de sanciones, incluidas las de la UE, de los Estados Unidos, del Reino Unido y de la ONU, ni hacia personas o países sujetos a sanciones integrales, ni para ellos. Usted confirma que usted y sus usuarios no figuran en ninguna lista de sanciones o de personas con restricciones. No ofrecerá ni dará nada de valor para influir indebidamente en nadie en relación con los Servicios.

## 23. Ley aplicable y controversias {#law}

Estos Términos, así como cualquier controversia o reclamación que surja de ellos o esté relacionada con ellos o con los Servicios (incluidas las controversias extracontractuales), se rigen por las leyes de **{{law.governing}}**, sin considerar las reglas de conflicto de leyes, y excluyendo la Convención de las Naciones Unidas sobre los Contratos de Compraventa Internacional de Mercaderías.

**Resolución informal primero.** Antes de iniciar un procedimiento formal, escriba a [{{company.legal_email}}](mailto:{{company.legal_email}}) con una descripción de la controversia, y permítanos intentar resolverla de buena fe durante al menos 30 días.

**Tribunales.** Salvo que la ley imperativa disponga otra cosa, la jurisdicción exclusiva corresponde a **{{law.venue}}**. Cualquiera de las partes puede solicitar medidas cautelares urgentes ante cualquier tribunal competente.

{{#if feature.consumers}}**Consumidores.** Si usted es consumidor, también conserva el derecho a iniciar procedimientos ante los tribunales de su país de residencia y a invocar allí la legislación obligatoria de protección al consumidor, y nada en esta sección elimina ese derecho. {{#if consumer_dispute}}Participamos en la resolución extrajudicial de controversias ante {{consumer_dispute}}.{{/if}}
{{/if}}
**Plazo (clientes empresariales).** En la medida que lo permita la ley, toda reclamación debe presentarse dentro de los {{policy.claim_months}} meses siguientes a la fecha en que surgió la causa de la acción; de lo contrario, se renuncia a ella.

**Sin acciones colectivas (clientes empresariales, cuando se permita).** Las reclamaciones solo pueden presentarse de forma individual, y no como parte de un procedimiento colectivo, de grupo o representativo.

## 24. Fuerza mayor {#force-majeure}

Ninguna de las partes es responsable por retrasos o incumplimientos causados por eventos fuera de su control razonable, incluidos desastres naturales, guerra, terrorismo, disturbios civiles, pandemia, acciones gubernamentales, fallas de energía, de internet o de telecomunicaciones, fallas de proveedores de nube u otros proveedores externos de infraestructura, ciberataques pese a medidas de seguridad razonables, conflictos laborales (distintos de los del propio personal de la parte) o fallas de suministro. Las obligaciones de pago por servicios ya prestados no quedan excusadas. Si dicho evento dura más de 60 días, cualquiera de las partes puede terminar los servicios afectados.

## 25. Comunicaciones electrónicas y avisos {#notices}

Usted consiente recibir avisos y acuerdos por medios electrónicos. Podemos dar aviso por correo electrónico a la dirección de su cuenta, en los Servicios o publicándolo en nuestro sitio web. Los avisos dirigidos a nosotros deben enviarse a [{{company.legal_email}}](mailto:{{company.legal_email}}) y a {{company.address}}. Un aviso se considera recibido 24 horas después de enviado un correo electrónico sin rebote, y en el momento en que se publique o se muestre en los Servicios.

## 26. General {#general}

- **Acuerdo íntegro.** Estos Términos y los documentos a los que hacen referencia constituyen el acuerdo íntegro sobre su objeto y reemplazan cualquier entendimiento previo. Usted no se basó en ninguna declaración que no figure en ellos.
- **Divisibilidad.** Si una disposición no es ejecutable, se limita en la medida mínima necesaria o se sustituye por una ejecutable que se aproxime lo más posible a su intención; el resto permanece vigente.
- **No renuncia.** No ejercer un derecho no implica renunciar a él.
- **Cesión.** Usted no puede ceder ni transferir sus derechos u obligaciones sin nuestro consentimiento por escrito. Podemos ceder estos Términos a una afiliada o a un sucesor de nuestro negocio, y se lo notificaremos.
- **Relación.** Las partes son contratistas independientes. Nada crea una sociedad, un mandato, una relación laboral ni una empresa conjunta.
- **Terceros.** Nadie más tiene derechos para exigir el cumplimiento de estos Términos, salvo nuestras afiliadas, directivos y agentes conforme a las secciones 19 y 20.
- **Idioma.** Las traducciones se proporcionan por comodidad; en caso de diferencia, prevalece la versión en inglés, salvo que la ley imperativa exija otra cosa.
- **Interpretación.** Los encabezados son solo para fines de referencia. "Incluido" significa "incluido sin limitación".
- **Publicidad.** Podemos citarle como cliente con su logotipo, salvo que usted se oponga por correo electrónico; los consumidores nunca son citados.

## 27. Contacto {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Núm. de registro {{company.reg_id}}{{/if}}{{#if company.tax_id}} · ID fiscal {{company.tax_id}}{{/if}}
Correo electrónico [{{company.email}}](mailto:{{company.email}}) · Legal [{{company.legal_email}}](mailto:{{company.legal_email}}) · Soporte [{{company.email}}](mailto:{{company.email}}) · Consulte también nuestro [Aviso legal]({{url.impressum}}).
