---
doc: subprocessors
title: Elenco dei sub-responsabili del trattamento
version: 1.0.0
updated: 2026-10-23
lang: it
translation_of: 1.0.0
status: draft
summary: Terzi che trattano dati personali per conto di {{product.name}}.
---

# Elenco dei sub-responsabili del trattamento

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

Per fornire {{product.name}}, **{{company.name}}** si avvale dei seguenti terzi che possono trattare dati personali per nostro conto. Ciascuno è vincolato da un accordo scritto in materia di protezione dei dati. {{#if feature.processor_role}}Questo elenco costituisce l'Allegato III dell'[Addendum sul trattamento dei dati]({{url.dpa}}) ed è richiamato nell'[Informativa sulla privacy]({{url.privacy}}).{{else}}Esso è richiamato nell'[Informativa sulla privacy]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
L'elenco aggiornato è disponibile su richiesta all'indirizzo [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Modifiche {#changes}

Diamo un preavviso di almeno **{{policy.notice_days}} giorni** prima di aggiungere o sostituire un sub-responsabile del trattamento, aggiornando questa pagina (si veda la data di "ultimo aggiornamento") e inviando un'e-mail ai clienti che si sono iscritti all'indirizzo [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}I clienti possono opporsi per motivi ragionevoli di protezione dei dati, come previsto nell'Addendum.{{/if}}
