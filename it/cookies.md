---
doc: cookies
title: Informativa sui cookie
version: 1.1.0
updated: 2026-10-31
lang: it
translation_of: 1.1.0
status: draft
summary: Quali cookie e tecnologie simili utilizza {{product.name}}, per quale motivo e come controllarli.
---

# Informativa sui cookie

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

La presente informativa spiega come **{{company.name}}** utilizza cookie e tecnologie simili su {{product.name}} e sugli altri Servizi. I dati personali raccolti tramite questi strumenti sono trattati come descritto nell'[Informativa sulla privacy]({{url.privacy}}).

## 1. Cosa sono {#what}

I cookie sono piccoli file memorizzati sul dispositivo da un sito web. Tra le "tecnologie simili" rientrano il local storage e il session storage, gli identificativi del dispositivo e gli SDK nelle app mobili, i pixel e i segnali analoghi alle impronte digitali. Utilizziamo il termine "cookie" per tutti questi strumenti.

## 2. Categorie utilizzate {#categories}

| Categoria | Finalità | Consenso necessario? |
|---|---|---|
| **Strettamente necessari** | Mantenere l'accesso all'account, ricordare il carrello o le impostazioni per la sessione, proteggere da frodi e attacchi CSRF, distribuire il carico dei server, memorizzare le scelte relative ai cookie | No: indispensabili per il funzionamento dei Servizi o per fornire quanto richiesto |
| **Preferenze** | Ricordare lingua, tema, layout e scelte analoghe | Sì, salvo che siano strettamente necessari per una funzione richiesta |
{{#if feature.analytics}}| **Analisi** | Misurare come vengono utilizzati i Servizi e individuare errori per poterli migliorare | Sì (ove richiesto dalla legge) |
{{/if}}{{#if feature.ads}}| **Pubblicità / marketing** | Mostrare e misurare annunci pertinenti, limitarne le ripetizioni e collegare l'attività tra siti e app | Sì |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Attualmente utilizziamo **solo cookie strettamente necessari e cookie di preferenza**, e nessun cookie di analisi o pubblicitario.{{/unless}}{{/unless}}

## 3. I cookie nel dettaglio {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
I nomi esatti dei cookie, i fornitori e le durate sono indicati nella finestra delle impostazioni dei cookie e sono disponibili su richiesta a [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Le Sue scelte {#choices}

- **Banner di consenso / impostazioni.** Ove il consenso sia richiesto, Le chiediamo l'autorizzazione prima di installare cookie non essenziali, con un'opzione per rifiutare facile quanto quella per accettare. Può modificare o revocare la scelta in qualsiasi momento tramite il link alle impostazioni dei cookie nel piè di pagina. La revoca non pregiudica il trattamento già effettuato.
- **Controlli del browser.** La maggior parte dei browser consente di bloccare o eliminare i cookie; le impostazioni si trovano di solito in Impostazioni → Privacy. Il blocco dei cookie strettamente necessari può impedire l'accesso e altre funzioni.
- **Nessuna registrazione delle sessioni.** Non utilizziamo strumenti di registrazione delle sessioni o dello schermo.
{{#if feature.external}}- **Risorse di terze parti.** Quando una risorsa (ad esempio font, mappe o video) viene caricata dal server di un'altra società, il Suo indirizzo IP viene inviato a quest'ultima. Chiediamo il Suo consenso per ciascuna risorsa separatamente nelle impostazioni dei cookie e la carichiamo solo dopo che Lei ha acconsentito; può modificare la scelta in qualsiasi momento.
{{/if}}- **Segnali.** Trattiamo il Global Privacy Control (GPC) e i segnali analoghi di opt-out del browser come un rifiuto del tracciamento non essenziale e della vendita o condivisione di dati personali.
{{#if feature.ads}}- **Scelte pubblicitarie.** Può escludere la pubblicità basata sugli interessi tramite le impostazioni del dispositivo (reimpostando o limitando l'identificativo pubblicitario) e strumenti come youronlinechoices.eu o optout.aboutads.info. Continuerà a vedere annunci, ma meno pertinenti.
{{/if}}
## 5. Durata {#duration}

I cookie di sessione scadono alla chiusura del browser. I cookie persistenti durano per il periodo indicato nella tabella e in ogni caso non oltre quanto raccomandato dalla legge (in genere non più di 13 mesi per il consenso alle analisi e alla pubblicità, che Le chiediamo di rinnovare).

## 6. Terze parti {#third-parties}

Alcuni cookie sono impostati da terze parti i cui servizi utilizziamo (analisi, contenuti multimediali incorporati, pagamenti, chat di assistenza). Esse operano secondo le proprie politiche e, qualora siano titolari autonomi del trattamento, Lei dovrebbe consultarne le informative. Le elenchiamo nella tabella sopra.
{{#if table.external}}
Risorse che ricevono il Suo indirizzo IP al momento del caricamento:

{{table.external}}
{{/if}}

## 7. Modifiche {#changes}

Se aggiungiamo o modifichiamo cookie non essenziali, aggiorneremo la presente informativa e chiederemo nuovamente il consenso ove richiesto. Per domande: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
