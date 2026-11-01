---
doc: security
title: Seguridad y divulgación de vulnerabilidades
version: 1.0.1
updated: 2026-10-23
lang: es-MX
translation_of: 1.0.1
status: draft
summary: Cómo reportar vulnerabilidades de seguridad en {{product.name}} y las reglas de puerto seguro para la investigación de buena fe.
---

# Seguridad y divulgación de vulnerabilidades

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Nos tomamos la seguridad en serio y damos la bienvenida a los reportes de buena fe de personas investigadoras. Contacto: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Alcance {#scope}

Dentro del alcance: {{product.name}}, {{company.website}} y nuestros propios subdominios, aplicaciones y APIs que operamos. **Fuera del alcance:** servicios e infraestructura de terceros, cuentas y datos de otros clientes, ingeniería social o phishing contra nuestro personal o nuestros usuarios, ataques físicos, denegación de servicio y pruebas de volumen, spam, y hallazgos que requieren una interacción poco realista del usuario o software desactualizado.

## 2. Reglas para las pruebas {#rules}

Si realiza pruebas de buena fe, debe:

- probar únicamente con **sus propias cuentas y datos**; detenerse e informar de inmediato si llega a datos de otra persona, y no acceder, descargar, modificar ni conservar más de lo necesario para demostrar el problema;
- no degradar los Servicios, no ejecutar escaneos automatizados de alto volumen ni usar exploits para persistir, pivotar o exfiltrar información;
- no divulgar el problema a otras personas ni publicar detalles hasta que hayamos tenido un plazo razonable para corregirlo (**90 días** desde su reporte, o antes si lo acordamos);
- cumplir con la ley y con estas reglas.

## 3. Puerto seguro {#safe-harbour}

Si cumple con esta política, consideraremos su investigación como autorizada, no iniciaremos ni apoyaremos acciones legales ni la terminación de cuentas por ese motivo, y trabajaremos con usted para entender y resolver el problema. Esto no autoriza infringir la ley contra terceros, y un tercero podría actuar por su cuenta. En caso de duda, pregunte antes.

## 4. Qué enviar {#report}

Una descripción clara de la vulnerabilidad, la URL o el componente afectado, los pasos para reproducirla o una prueba de concepto, el impacto, sus datos de contacto y si desea que se le dé crédito. Cifre el material sensible si le es posible; solicite nuestra clave.

## 5. Qué sucede después {#process}

Acusamos recibo de los reportes, los evaluamos, le mantenemos informado, corregimos según la gravedad y, si lo desea, le damos crédito. Actualmente no operamos un programa de recompensas pagadas y no podemos prometer premios, aunque podríamos ofrecerle agradecimientos o artículos promocionales.

## 6. Usuarios: proteja su cuenta {#users}

Use una contraseña única y segura, y la autenticación de múltiples factores cuando esté disponible, mantenga su software actualizado, tenga cuidado con el phishing e informe de inmediato cualquier sospecha de compromiso a [{{company.email}}](mailto:{{company.email}}). El uso indebido de una vulnerabilidad o las pruebas fuera de esta política violan la [Política de uso aceptable]({{url.acceptable_use}}).
