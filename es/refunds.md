---
doc: refunds
title: Política de reembolsos y cancelación
version: 1.1.1
updated: 2026-10-31
lang: es
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Cómo cancelar, cuándo puede desistir o solicitar un reembolso y qué ocurre con las compras realizadas a través de las tiendas de aplicaciones.
---

# Política de reembolsos y cancelación

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Esta política forma parte de las [Condiciones del servicio]({{url.terms}}) y se aplica a las compras de {{product.name}} realizadas a **{{company.name}}** («nosotros»). Nada de lo dispuesto en ella limita los derechos que le correspondan con arreglo a la normativa imperativa de protección de los consumidores.

## El lugar de compra es relevante {#where}

- **Comprado directamente a nosotros** (nuestro sitio web o nuestro proceso de pago): se aplica esta política.
{{#if feature.merchant_of_record}}- **Comprado a través de nuestro proveedor de pagos{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): el proveedor es el vendedor del pedido, gestiona el pago, los impuestos y los recibos, y tramita los reembolsos conforme a sus condiciones de compra y a esta política. Las solicitudes pueden dirigirse a nosotros o al proveedor.
{{/if}}
- **Comprado a través de una tienda de aplicaciones o de una plataforma** (Apple App Store, Google Play, tiendas de consolas o de PC): la tienda es el vendedor a efectos legales y **gestiona los reembolsos, las cancelaciones y la facturación**. Solicite el reembolso a la tienda siguiendo su propio procedimiento; nosotros no podemos reembolsar esos pagos, pero le ayudaremos a confirmar los hechos y podremos revocar el artículo adquirido cuando la tienda efectúe el reembolso. Las normas de la tienda y su derecho local determinan sus derechos en ese ámbito.

{{#if feature.subscriptions}}
## Cancelación de una suscripción {#cancel}

Puede cancelar en cualquier momento desde la configuración de su cuenta{{#if feature.mobile}} (o desde la configuración de suscripciones de la tienda, si se suscribió a través de ella){{/if}} o escribiendo a [{{company.email}}](mailto:{{company.email}}). La cancelación impide las renovaciones futuras; conservará el acceso hasta el final del periodo que ha pagado. No prorrateamos los periodos parciales, salvo que la ley o esta política dispongan otra cosa. Cancelar es tan sencillo como suscribirse: un botón de cancelación directa en su cuenta, sin llamadas ni formularios. Le recordamos la renovación o la conversión de una prueba en un plan de pago antes de que se produzca, cuando la ley lo exija; en los planes de un año o más, le enviamos un recordatorio entre 15 y 45 días antes de la renovación y un recordatorio anual, con el precio y la forma de cancelar. Las condiciones de renovación se muestran siempre junto al botón de pago.
{{/if}}

## Derecho de desistimiento de los consumidores (UE, Reino Unido y normativa similar) {#withdrawal}

{{#if feature.consumers}}
Si es consumidor en la UE, en el Reino Unido o en otro país que reconozca un derecho de desistimiento en los contratos a distancia, puede desistir de una compra **en un plazo de {{policy.refund_days}} días** desde la celebración del contrato, sin necesidad de alegar motivo alguno.

**Contenidos y servicios digitales.** Si nos pide que empecemos a prestar un servicio digital o a suministrar un contenido digital (por ejemplo, acceso, créditos u objetos virtuales) durante el periodo de desistimiento, y confirma que entiende que puede perder su derecho de desistimiento, entonces:
- en el caso de un **contenido digital que no se suministre en un soporte material**, una vez iniciado el suministro con su consentimiento expreso, pierde el derecho de desistimiento;
- en el caso de un **servicio digital**, puede seguir desistiendo dentro del plazo, pero deberá pagar un importe proporcional a lo prestado hasta el momento en que nos comunique su decisión.

Solicitamos este consentimiento en el momento de la compra. Si no lo ha dado, se aplica el derecho de desistimiento completo.

**Función de desistimiento.** Tal como exige la ley a partir del 19 de junio de 2026, en su cuenta y en la confirmación del pedido está disponible una función «Desistir del contrato»: seleccione el contrato, confírmelo y recibirá un acuse de recibo en soporte duradero (correo electrónico) en el que constarán la fecha y la hora. No necesita explicar los motivos.

**Otras formas de desistir.** Envíe una declaración clara (por ejemplo, por correo electrónico a [{{company.email}}](mailto:{{company.email}})) en la que comunique su decisión de desistir, con su nombre, los datos del pedido o de la cuenta y la fecha de compra. Puede utilizar el formulario que figura a continuación, pero no es obligatorio. Confirmaremos la recepción y le reembolsaremos **en un plazo de 14 días** desde que tengamos conocimiento de su decisión, utilizando el mismo medio de pago.

> **Formulario modelo de desistimiento** (complételo y devuélvalo solo si desea desistir)
> A {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Por la presente comunico/comunicamos que desisto/desistimos de mi/nuestro contrato de prestación del siguiente servicio/contenido digital: ______ ; pedido el / recibido el: ______ ; nombre: ______ ; dirección: ______ ; fecha: ______ (firma solo si se envía en papel).
{{else}}
Nuestros Servicios se ofrecen únicamente a empresas, por lo que no se aplican los derechos legales de desistimiento de los consumidores. Póngase en contacto con nosotros si considera que es consumidor.
{{/if}}

## Otros países {#other-countries}

Algunos lugares reconocen derechos adicionales de cancelación o reembolso (por ejemplo, periodos de reflexión, normas de renovación automática en varios estados de EE. UU. o garantías legales en Australia, Nueva Zelanda y el Reino Unido). Cuando sean de obligado cumplimiento, se aplicarán y prevalecerán sobre cualquier disposición menos favorable de esta política.

## Cuándo reembolsamos {#refunds}

Reembolsaremos, total o parcialmente según proceda:

- un **cargo duplicado o erróneo**, o un cargo que no haya autorizado (comuníquelo sin demora; podemos pedirle más detalles);
- una compra cuyo servicio **no haya podido prestarse** o sea materialmente defectuoso y no podamos subsanarlo en un plazo razonable;
- una compra cuya cancelación solicite dentro de los **{{policy.refund_days}} días** si no ha utilizado lo adquirido (incluidos los créditos no utilizados), a nuestra discreción cuando no exista un derecho legal aplicable;
- cualquier otro supuesto que acordemos por escrito.

En caso contrario, las tarifas pagadas no son reembolsables, incluidas las correspondientes a periodos parciales, a artículos usados o consumidos y a cuentas cerradas por infracción de la [Política de uso aceptable]({{url.acceptable_use}}). Los reembolsos se abonan en el medio de pago original; solo podremos reembolsar en créditos si usted lo solicita.

{{#if feature.credits}}
## Créditos y objetos virtuales {#credits}

Los créditos prepagados no utilizados pueden reembolsarse dentro del plazo indicado más arriba. Los créditos y objetos virtuales que se hayan gastado o consumido no son reembolsables, salvo que la ley lo exija. Si ponemos fin a un servicio, gestionaremos los saldos de pago pendientes tal como se describe en las [Condiciones del servicio]({{url.terms}}){{#if feature.game}} y en las [Reglas del juego]({{url.game_rules}}){{/if}}.
{{/if}}

## Contracargos y reclamaciones {#chargebacks}

Le rogamos que se ponga en contacto con nosotros antes de impugnar un cargo ante su banco o emisor de la tarjeta: normalmente lo resolvemos con mayor rapidez. Si presenta una reclamación por un cargo válido, podremos suspender la cuenta hasta que se resuelva y compartir con el proveedor de pagos las pruebas de entrega y de uso.

## Impuestos y divisa {#taxes}

Los reembolsos incluyen el impuesto que se haya cobrado. Si pagó en otra divisa, el importe devuelto puede diferir por las variaciones de los tipos de cambio y por las comisiones bancarias, que escapan a nuestro control.

## Cómo solicitarlo {#contact}

Escriba a [{{company.email}}](mailto:{{company.email}}) indicando el correo electrónico de su cuenta, el número de pedido o de recibo y una breve descripción. Responderemos a su mensaje. Si no podemos resolver el asunto, puede dirigirse a la autoridad de consumo de su localidad{{#if consumer_dispute}} o {{consumer_dispute}}{{/if}}.
