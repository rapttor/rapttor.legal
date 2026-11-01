---
doc: subprocessors
title: Lista subprocesatorilor
version: 1.0.0
updated: 2026-10-23
lang: ro
translation_of: 1.0.0
status: draft
summary: Terțe părți care prelucrează date cu caracter personal în numele {{product.name}}.
---

# Lista subprocesatorilor

*Versiunea {{doc.version}}, ultima actualizare {{doc.updated}}.*

Pentru a furniza {{product.name}}, **{{company.name}}** utilizează următoarele terțe părți, care pot prelucra date cu caracter personal în numele nostru. Fiecare dintre acestea este obligată printr-un acord scris de protecție a datelor. {{#if feature.processor_role}}Această listă reprezintă Anexa III la [Anexa de prelucrare a datelor]({{url.dpa}}) și este menționată în [Politica de confidențialitate]({{url.privacy}}).{{else}}Ea este menționată în [Politica de confidențialitate]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Lista actuală este disponibilă la cerere, la adresa [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Modificări {#changes}

Vă comunicăm cu cel puțin **{{policy.notice_days}} zile** înainte de a adăuga sau înlocui un subprocesator, prin actualizarea acestei pagini (verificați data „ultimei actualizări") și prin e-mail clienților care s-au abonat la adresa [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Clienții pot obiecta din motive rezonabile de protecție a datelor, așa cum se prevede în Anexa de prelucrare a datelor.{{/if}}
