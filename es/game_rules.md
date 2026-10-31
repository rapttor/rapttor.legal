---
doc: game_rules
title: Reglas del juego y política de objetos virtuales
version: 1.0.0
updated: 2026-10-23
lang: es
translation_of: 1.0.0
status: draft
when: feature.game
summary: Normas de juego limpio, conducta de la comunidad, objetos virtuales, probabilidades de las recompensas aleatorias y normas de fin del servicio para {{product.name}}.
---

# Reglas del juego y política de objetos virtuales

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Estas reglas complementan las [Condiciones del servicio]({{url.terms}}) y la [Política de uso aceptable]({{url.acceptable_use}}) de {{product.name}} y de otros juegos y experiencias interactivas de **{{company.name}}** (el «**Juego**»). Si se contradicen en un aspecto específico de un juego, prevalecen estas reglas.

## 1. Objetos virtuales y moneda {#virtual-items}

1. **Licencia, no propiedad.** La moneda virtual, los objetos, las skins, los personajes, el progreso y otros contenidos similares («**Objetos virtuales**») se le conceden bajo licencia, de forma limitada, personal, revocable, intransferible y no sublicenciable, únicamente para su uso en el Juego. Usted no es su propietario y no tiene ningún derecho de propiedad sobre ellos, ni sobre su cuenta o su progreso.
2. **Sin valor en efectivo.** Los Objetos virtuales no son dinero, dinero electrónico, valores ni valor almacenado; no pueden canjearse por efectivo ni por bienes, salvo que la ley imperativa disponga lo contrario.
3. **Sin comercio fuera del Juego.** No puede vender, comprar, regalar, intercambiar, prestar, subastar ni transferir de otro modo Objetos virtuales, cuentas o progreso por dinero real u otro valor, fuera de las funciones que ofrecemos. Esta **compraventa por dinero real** y el uso de mercados de terceros están prohibidos; los artículos y las cuentas implicados podrán eliminarse, y las cuentas podrán ser bloqueadas. No somos responsables de las pérdidas derivadas de operaciones con terceros.
4. **Precios y claridad.** Mostramos los precios de los Objetos virtuales en moneda real (o el precio del paquete de moneda y lo que incluye) antes de que confirme una compra, y no hacemos imposible avanzar sin pagar cuando la ley lo prohíbe. Los impuestos están incluidos para los consumidores cuando así se exige.
5. **Controles de gasto.** Ofrecemos, o lo hace la plataforma, herramientas para limitar o bloquear las compras (controles parentales del dispositivo o de la tienda y cualquier límite de gasto dentro del Juego). Las compras realizadas en un dispositivo o cuenta por cualquier persona con acceso son responsabilidad suya; {{#if feature.payments}}consulte [Reembolsos]({{url.refunds}}) para saber cómo pedirnos que revisemos una compra no autorizada o accidental realizada por un menor.{{else}}póngase en contacto con nosotros para que revisemos una compra no autorizada o accidental realizada por un menor.{{/if}}
6. **Cambios.** Podemos modificar, reequilibrar, renombrar, retirar o limitar los Objetos virtuales y las funciones, y fijar fechas de caducidad para los artículos promocionales, a medida que el Juego evolucione. No retiraremos los Objetos virtuales de pago que ya haya adquirido, salvo en los supuestos previstos en esta política (bloqueos, fin del servicio) o cuando la ley lo permita.
7. **Artículos gratuitos y obtenidos jugando.** Los artículos obtenidos jugando o regalados no tienen valor, pueden restablecerse y se pierden al cerrar la cuenta.

## 2. Recompensas aleatorias («cajas de botín») {#random-rewards}

Si el Juego ofrece artículos obtenidos por azar (cajas de botín, gacha, sobres de cartas o giros):
- **revelamos las probabilidades** de cada categoría de resultado antes de la compra, en el Juego y cuando lo exija la tienda;
- los artículos obtenidos por azar suelen poder conseguirse también sin pagar cuando así lo indique el Juego, y las recompensas aleatorias de pago **no se ofrecen cuando la ley lo prohíbe o restringe**; podemos desactivarlas en esos países o para jugadores menores de edad;
- las recompensas aleatorias **no** le dan derecho a ganar dinero ni nada ajeno al Juego.

## 3. Juego limpio {#fair-play}

Juegue limpio. No debe:

1. **hacer trampas o usar software no autorizado:** hacks, aimbots, wallhacks, macros o scripts que automaticen el juego, speed hacks, editores de memoria, manipulación de paquetes, clientes modificados o emulados, ni herramientas que den una ventaja injusta;
2. **aprovechar errores o fallos** para obtener ventaja, duplicar artículos o moneda, o eludir el pago. Debe comunicar los fallos que descubra a [{{company.email}}](mailto:{{company.email}}) en lugar de utilizarlos o compartirlos;
3. **usar bots o granjas** con cuentas automatizadas, ni manejar varias cuentas para obtener ventaja, recoger recompensas o manipular el emparejamiento;
4. **manipular resultados:** trampas en las partidas (win-trading), amaño de partidas, boosting, dejarse perder a propósito, colusión, manipulación de clasificaciones o rankings, o «smurfing» para perjudicar a jugadores de menor nivel;
5. **perjudicar a otros:** ataques DDoS o lag switching contra rivales, stream sniping o ghosting en el juego competitivo, griefing, desconexiones intencionadas, acampar en los puntos de aparición más allá de lo permitido por las reglas del juego, o spam;
6. **compartir, vender, comprar o potenciar cuentas**, rangos, artículos o servicios (venta de cuentas y boosting de pago);
7. **realizar ingeniería inversa** del Juego, de los servidores, de los protocolos o del sistema antitrampas, ni crear servidores o clientes no autorizados;
8. **eludir las prohibiciones** creando cuentas nuevas, cambiando de hardware o de identificadores de red, o utilizando la cuenta de otra persona.

## 4. Medidas antitrampas e integridad {#anti-cheat}

Para mantener el juego limpio utilizamos sistemas antitrampas y de integridad que pueden ejecutarse durante el Juego{{#if feature.mobile}} (en móviles, también comprobaciones de integridad del dispositivo){{/if}}. Pueden detectar la presencia de software no autorizado y leer datos técnicos limitados, como los nombres de los procesos en ejecución, los identificadores del dispositivo y del hardware, y la telemetría del estado del juego. Al jugar, usted consiente este tratamiento en los términos descritos en la [Política de privacidad]({{url.privacy}}). Cuando se requiera un componente con privilegios de núcleo (kernel) o similares, se describirá en el aviso de instalación o de inicio, se ejecutará solo mientras el Juego esté en marcha cuando sea técnicamente posible, y no leerá sus archivos, sus comunicaciones ni su navegación. Las infracciones detectadas pueden dar lugar a medidas automatizadas y revisadas por personas, conforme a la sección 7.

## 5. Conducta en la comunidad {#community}

Trate a los demás con respeto. Además de la sección 1 de la [Política de uso aceptable]({{url.acceptable_use}}), no se permite lo siguiente en el chat, en el chat de voz, en los nombres, los avatares, los nombres de clanes o gremios, ni en los niveles u objetos creados por usuarios:

- odio, acoso, amenazas, contenido sexual que afecte a menores o esté dirigido a ellos, acoso escolar (bullying), acoso sexual, doxing, grooming, o intentos de llevar a un menor a otra plataforma;
- publicidad, spam, estafas, phishing, mendicidad, suplantación del personal o de otros jugadores, u ofertas de tratos por dinero real;
- campañas políticas reales, símbolos extremistas o exaltación de la violencia, y contenido que vulnere los derechos de otros.

**Seguridad en el chat y en la voz.** Para aplicar estas reglas, el texto del chat puede registrarse y filtrarse automáticamente, y las conversaciones de voz que se nos notifiquen podrán revisarse a partir de una grabación o transcripción breve, conservada a efectos de la denuncia (en general, no más de {{policy.notice_days}} días, salvo que sea necesaria para un caso pendiente). Puede silenciar y bloquear a otros jugadores y denunciarlos en el Juego.

## 6. Contenidos creados por usuarios, mods y retransmisiones {#ugc}

{{#if feature.ugc}}El contenido que cree en el Juego (niveles, objetos, skins, mensajes) se rige por la sección 6 de las Condiciones del servicio. {{/if}}Salvo que una política de contenidos independiente disponga otra cosa:
- puede **transmitir, grabar y compartir la partida**, y monetizar esos vídeos, siempre que cumpla estas reglas, no dé a entender que contamos con su respaldo y respete las normas de contenido de terceros de la plataforma en la que publique, incluidas las de música (no le concedemos licencias sobre contenidos de terceros);
- los **mods** o complementos solo se permiten si publicamos herramientas para crearlos, son gratuitos y no comerciales, no afectan al juego limpio ni a la seguridad, y no usan nuestras marcas de forma engañosa; podemos revocar el permiso y desactivarlos;
- podemos utilizar capturas de pantalla, clips y contenidos de la comunidad que comparta públicamente con fines promocionales, con mención de su autoría, salvo que usted se oponga.

## 7. Aplicación de medidas {#enforcement}

En proporción a la gravedad, la reiteración y el daño, podemos: advertir; silenciar o limitar el chat; eliminar contenidos o nombres; restablecer o eliminar rangos, puntuaciones, progreso y Objetos virtuales obtenidos de forma indebida; suspender o bloquear cuentas (también por identificador de dispositivo o de hardware); retener recompensas, y denunciar a las autoridades las actividades ilegales. **Los Objetos virtuales y la moneda de las cuentas cerradas por infracción (trampas, compraventa por dinero real, fraude, abuso de contracargos) se pierden sin reembolso** cuando la ley lo permita.

Le comunicamos el motivo cuando sea posible y la ley lo exija, y puede pedir una revisión escribiendo a [{{company.legal_email}}](mailto:{{company.legal_email}}) en un plazo de 6 meses. Conservamos los registros de bloqueos para evitar la reincidencia. La detección automatizada es revisada por una persona en caso de recurso.

## 8. Eventos, torneos y premios {#events}

Los eventos, torneos, clasificaciones y sorteos pueden tener **bases oficiales** publicadas con el evento, que prevalecen para dicho evento. Salvo que se indique lo contrario, no hay premios en metálico; cuando se ofrezcan premios, dependen de la habilidad y no del azar ni de la compra, solo están abiertos cuando sea lícito y para las edades permitidas, pueden requerir verificaciones de identidad y de residencia, y el ganador está sujeto a impuestos. Las compras nunca mejoran sus probabilidades de ganar un sorteo. No somos un operador de juegos de azar, y el Juego no puede utilizarse para apostar.

## 9. Disponibilidad y fin del servicio {#end-of-service}

Los juegos en línea dependen de servidores. Podemos realizar tareas de mantenimiento, modificar o poner fin a funciones, contenidos, modos o al propio Juego. Si decidimos **poner fin al Juego o a un servicio de pago**, se lo notificaremos con al menos **60 días de antelación** (un plazo menor solo cuando lo exijan la ley o una emergencia), por correo electrónico, en el Juego y en nuestro sitio web. Dejaremos de vender Objetos virtuales con al menos 30 días de antelación e indicaremos qué ocurrirá con sus contenidos y, cuando lo exija la ley o cuando lo ofrezcamos, cómo se reembolsarán o compensarán los saldos de pago pendientes. Cuando sea razonablemente viable, mantendremos operativos los modos sin conexión o para un solo jugador, o publicaremos parches o herramientas que permitan seguir jugando. Nada de lo dispuesto aquí limita los derechos imperativos de los consumidores.

## 10. Salud y seguridad del jugador {#health}

Jugar durante periodos prolongados puede afectarle. Haga pausas. Algunos juegos contienen luces parpadeantes que pueden provocar convulsiones en personas con epilepsia fotosensible; deje de jugar y consulte a un médico si se encuentra mal. Los padres y tutores deben revisar las clasificaciones por edades, los controles parentales y los límites de gasto, y hablar con los menores sobre el juego seguro en línea.

## 11. Contacto {#contact}

Soporte del Juego, denuncias y recursos: [{{company.email}}](mailto:{{company.email}}). Denuncias legales y de abuso: [{{company.legal_email}}](mailto:{{company.legal_email}}).
