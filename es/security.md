---
doc: security
title: Seguridad y comunicación de vulnerabilidades
version: 1.0.1
updated: 2026-10-23
lang: es
translation_of: 1.0.1
status: draft
summary: Cómo comunicar vulnerabilidades de seguridad en {{product.name}} y las normas de puerto seguro para la investigación de buena fe.
---

# Seguridad y comunicación de vulnerabilidades

*Versión {{doc.version}}, última actualización {{doc.updated}}.*

Nos tomamos la seguridad en serio y damos la bienvenida a los informes de investigadores hechos de buena fe. Contacto: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Ámbito {#scope}

Dentro del ámbito: {{product.name}}, {{company.website}} y nuestros propios subdominios, aplicaciones y API que operamos. **Fuera del ámbito:** los servicios e infraestructuras de terceros, las cuentas y los datos de otros clientes, la ingeniería social o el phishing contra nuestro personal o nuestros usuarios, los ataques físicos, las pruebas de denegación de servicio y de volumen, el spam, y los hallazgos que requieran una interacción poco realista del usuario o software desactualizado.

## 2. Normas para las pruebas {#rules}

Si realiza pruebas de buena fe, debe:

- probar únicamente con **sus propias cuentas y datos**; deténgase e informe de inmediato si llega a datos de otra persona, y no acceda, descargue, modifique ni conserve más de lo necesario para demostrar el problema;
- no degradar los Servicios, no ejecutar análisis automatizados de gran volumen ni utilizar exploits para mantener el acceso, pivotar o extraer datos;
- no revelar el problema a otras personas ni publicar detalles hasta que hayamos tenido un plazo razonable para corregirlo (**90 días** desde su informe, o antes si lo acordamos);
- cumplir la ley y estas normas.

## 3. Puerto seguro {#safe-harbour}

Si cumple esta política, consideraremos autorizada su investigación, no emprenderemos ni apoyaremos acciones legales ni la cancelación de cuentas por ese motivo, y trabajaremos con usted para comprender y resolver el problema. Esto no autoriza a infringir la ley contra terceros, y un tercero puede seguir actuando por su cuenta. En caso de duda, pregunte antes.

## 4. Qué enviar {#report}

Una descripción clara de la vulnerabilidad, la URL o el componente afectado, los pasos para reproducirla o una prueba de concepto, el impacto, sus datos de contacto y si desea que se le reconozca la autoría. Cifre el material sensible si puede; solicite nuestra clave.

## 5. Qué ocurre después {#process}

Acusamos recibo de los informes, los evaluamos, le mantenemos informado, corregimos según la gravedad y, si lo desea, le reconocemos la autoría. Actualmente no tenemos un programa de recompensas económicas y no podemos prometer premios, aunque podemos ofrecerle agradecimiento o artículos promocionales.

## 6. Usuarios: proteja su cuenta {#users}

Utilice una contraseña única y robusta y la autenticación multifactor cuando se ofrezca, mantenga el software actualizado, desconfíe del phishing y comunique cualquier sospecha de compromiso de forma inmediata a [{{company.email}}](mailto:{{company.email}}). El uso indebido de una vulnerabilidad, o las pruebas realizadas al margen de esta política, infringen la [Política de uso aceptable]({{url.acceptable_use}}).
