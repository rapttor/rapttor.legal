---
doc: license
title: Licenza
version: 1.0.0
updated: 2026-10-23
lang: it
translation_of: 1.0.0
status: draft
when: license.id
summary: La licenza con cui viene rilasciato {{product.name}}.
---

# Licenza

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

**{{product.name}}** è rilasciato da **{{license.holder}}** con la licenza **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Questo è un riepilogo in linguaggio semplice, che non sostituisce il testo della licenza riportato sotto.)*

{{#if license.url}}Testo ufficiale: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Domande o richieste di autorizzazione: [{{company.legal_email}}](mailto:{{company.legal_email}}). L'uso del sito web e dei servizi di {{product.name}} è disciplinato dalle nostre [Condizioni di servizio]({{url.terms}}).

## Testo completo {#text}

Il testo inglese della licenza fa fede; la presente traduzione è fornita solo a titolo informativo.

```text
{{license.text}}
```
