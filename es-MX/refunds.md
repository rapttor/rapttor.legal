---
doc: refunds
title: Política de reembolsos y cancelaciones
version: 1.1.1
updated: 2026-10-31
lang: es-MX
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Cómo cancelar, cuándo puede desistir o recibir un reembolso, y qué ocurre con las compras hechas a través de tiendas de aplicaciones.
---

# Política de reembolsos y cancelaciones

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Esta política forma parte de los [Términos de servicio]({{url.terms}}) y se aplica a las compras realizadas a **{{company.name}}** ("nosotros") por {{product.name}}. Nada de lo establecido en ella limita los derechos que usted tenga conforme a la legislación obligatoria de protección al consumidor.

## Dónde compró importa {#where}

- **Comprado directamente a nosotros** (nuestro sitio web o proceso de pago): se aplica esta política.
{{#if feature.merchant_of_record}}- **Comprado a través de nuestro proveedor de pagos{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): el proveedor es el vendedor del pedido, gestiona el pago, los impuestos y los recibos, y procesa los reembolsos conforme a sus términos de compra y a esta política. Las solicitudes pueden enviarse a nosotros o al proveedor.
{{/if}}
- **Comprado a través de una tienda de aplicaciones o plataforma** (Apple App Store, Google Play, tiendas de consolas o de PC): la tienda es el vendedor registrado y **gestiona los reembolsos, las cancelaciones y la facturación**. Solicite el reembolso a la tienda mediante su propio proceso; nosotros no podemos reembolsar esos pagos, pero le ayudaremos a confirmar los hechos y podemos revocar el artículo comprado cuando la tienda reembolse. Las reglas de la tienda y su legislación local determinan sus derechos en ese caso.

{{#if feature.subscriptions}}
## Cancelar una suscripción {#cancel}

Puede cancelar en cualquier momento desde la configuración de su cuenta{{#if feature.mobile}} (o desde la configuración de suscripciones de la tienda, si se suscribió allí){{/if}}, o escribiendo a [{{company.email}}](mailto:{{company.email}}). La cancelación detiene las renovaciones futuras; usted conserva el acceso hasta el final del periodo que ya pagó. No prorrateamos los periodos parciales, salvo que la ley o esta política disponga otra cosa. Cancelar es tan fácil como suscribirse: un botón directo de cancelación en su cuenta, sin llamadas ni formularios. Le recordamos antes de una renovación, o antes de que una prueba se convierta en un plan de pago, cuando la ley lo exija; en los planes de un año o más, le enviamos un recordatorio entre 15 y 45 días antes de la renovación y un recordatorio anual, con el precio y la forma de cancelar. Los términos de renovación siempre se muestran junto al botón de pago.
{{/if}}

## Derecho de desistimiento para consumidores (UE, Reino Unido y leyes similares) {#withdrawal}

{{#if feature.consumers}}
Si usted es consumidor en la UE, en el Reino Unido o en otro país que otorgue un derecho de desistimiento para contratos a distancia, puede desistir de una compra **dentro de {{policy.refund_days}} días** a partir de la celebración del contrato, sin necesidad de indicar un motivo.

**Contenido digital y servicios digitales.** Si nos pide que comencemos a prestar un servicio digital o a suministrar contenido digital (por ejemplo, acceso, créditos o artículos virtuales) durante el periodo de desistimiento, y confirma que entiende que puede perder su derecho de desistimiento, entonces:
- para el **contenido digital que no se encuentre en un soporte físico**, una vez iniciado el suministro con su consentimiento expreso, usted pierde el derecho de desistimiento;
- para un **servicio digital**, puede seguir desistiendo dentro del periodo, pero debe pagar un monto proporcional a lo que se haya suministrado hasta el momento en que nos lo comunique.

Solicitamos este consentimiento al momento de la compra. Si no lo dio, aplica el derecho de desistimiento completo.

**Función de desistimiento.** Como lo exige la ley a partir del 19 de junio de 2026, en su cuenta y en la confirmación del pedido hay disponible una función "Desistir del contrato": elija el contrato, confírmelo, y recibirá un acuse de recibo en un soporte duradero (correo electrónico) con la fecha y la hora. No necesita explicar el motivo.

**Otras formas de desistir.** Envíe una declaración clara de su decisión de desistir (por ejemplo, por correo electrónico a [{{company.email}}](mailto:{{company.email}})), con su nombre, los datos del pedido o de la cuenta y la fecha de compra. Puede usar el formulario siguiente, pero no está obligado a hacerlo. Confirmaremos la recepción y le reembolsaremos **dentro de 14 días** a partir de que conozcamos su decisión, utilizando el mismo medio de pago.

> **Formulario modelo de desistimiento** (complételo y devuélvalo solo si desea desistir)
> A {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Por la presente comunico que desisto de mi contrato (o comunicamos que desistimos de nuestro contrato) para la prestación del siguiente servicio o contenido digital: ______ ; pedido o recibido el: ______ ; nombre: ______ ; domicilio: ______ ; fecha: ______ (firma solo si se presenta en papel).
{{else}}
Nuestros Servicios se ofrecen solo a empresas, por lo que los derechos legales de desistimiento de los consumidores no aplican. Contáctenos si considera que es consumidor.
{{/if}}

## Otros países {#other-countries}

Algunos lugares otorgan derechos adicionales de cancelación o reembolso (por ejemplo, periodos de reflexión, reglas de renovación automática en varios estados de EE. UU., o garantías legales en Australia, Nueva Zelanda y el Reino Unido). Cuando sean obligatorios, se aplican y prevalecen sobre cualquier disposición menos favorable de esta política.

## Cuándo reembolsamos {#refunds}

Reembolsaremos, total o parcialmente según corresponda:

- un **cargo duplicado o erróneo**, o un cargo que usted no autorizó (repórtelo con prontitud; podemos pedirle detalles);
- una compra en la que el servicio **no pudo prestarse** o es materialmente defectuoso y no podemos corregirlo en un plazo razonable;
- una compra que solicite cancelar dentro de **{{policy.refund_days}} días**, si no ha usado lo que compró (incluidos los créditos no utilizados), a nuestra discreción cuando no aplique ningún derecho legal;
- cualquier otro caso que acordemos por escrito.

En los demás casos, las tarifas pagadas no son reembolsables, incluidos los periodos parciales, los artículos usados o consumidos, y las cuentas cerradas por incumplir la [Política de uso aceptable]({{url.acceptable_use}}). Los reembolsos se hacen al medio de pago original; solo podemos reembolsar en créditos si usted lo solicita.

{{#if feature.credits}}
## Créditos y artículos virtuales {#credits}

Los créditos prepagados no utilizados pueden reembolsarse dentro del periodo indicado arriba. Los créditos y artículos virtuales que se hayan gastado o consumido no son reembolsables, salvo que la ley lo exija. Si terminamos un servicio, tratamos los saldos pagados restantes como se describe en los [Términos de servicio]({{url.terms}}){{#if feature.game}} y en las [Reglas del juego]({{url.game_rules}}){{/if}}.
{{/if}}

## Contracargos y disputas {#chargebacks}

Le pedimos que se comunique con nosotros antes de disputar un cargo con su banco o con el emisor de su tarjeta: normalmente lo resolvemos más rápido. Si abre una disputa por un cargo válido, podemos suspender la cuenta hasta que se resuelva y compartir las pruebas de entrega y de uso con el proveedor de pagos.

## Impuestos y moneda {#taxes}

Los reembolsos incluyen el impuesto que se cobró. Si pagó en otra moneda, el monto devuelto puede diferir por las variaciones del tipo de cambio y por las comisiones bancarias, que están fuera de nuestro control.

## Cómo solicitarlo {#contact}

Escriba a [{{company.email}}](mailto:{{company.email}}) indicando el correo electrónico de su cuenta, el número de pedido o de recibo y una breve descripción. Responderemos a su mensaje. Si no podemos resolver el asunto, puede acudir a la autoridad local de protección al consumidor{{#if consumer_dispute}} o a {{consumer_dispute}}{{/if}}.
