---
doc: refunds
title: Politica di rimborso e annullamento
version: 1.1.1
updated: 2026-10-31
lang: it
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Come annullare, quando si può recedere o ottenere un rimborso e cosa accade per gli acquisti effettuati tramite gli store delle app.
---

# Politica di rimborso e annullamento

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

La presente politica fa parte delle [Condizioni di servizio]({{url.terms}}) e si applica agli acquisti effettuati presso **{{company.name}}** (“noi”) per {{product.name}}. Nulla in essa limita i diritti che Lei ha ai sensi della normativa imperativa a tutela dei consumatori.

## Dove si è effettuato l'acquisto {#where}

- **Acquistato direttamente da noi** (sito web o cassa): si applica la presente politica.
{{#if feature.merchant_of_record}}- **Acquistato tramite il nostro fornitore di pagamento{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): il fornitore è il venditore dell'ordine, gestisce il pagamento, le imposte e le ricevute, ed elabora i rimborsi ai sensi delle proprie condizioni di acquisto e della presente politica. Le richieste possono essere inviate a noi o al fornitore.
{{/if}}
- **Acquistato tramite uno store di app o una piattaforma** (Apple App Store, Google Play, store per console o PC): lo store è il venditore registrato e **gestisce rimborsi, annullamenti e fatturazione**. Richieda il rimborso allo store secondo la sua procedura; non possiamo rimborsare tali pagamenti, ma La aiuteremo a confermare i fatti e possiamo revocare l'articolo acquistato quando lo store effettua il rimborso. In tale ambito decidono le regole dello store e la legge locale.

{{#if feature.subscriptions}}
## Annullamento di un abbonamento {#cancel}

Può annullare in qualsiasi momento dalle impostazioni del Suo account{{#if feature.mobile}} (oppure dalle impostazioni di abbonamento dello store, se ha sottoscritto lì){{/if}} o scrivendo a [{{company.email}}](mailto:{{company.email}}). L'annullamento interrompe i rinnovi futuri; Lei mantiene l'accesso fino al termine del periodo già pagato. Non calcoliamo il rateo per periodi parziali, salvo che la legge o la presente politica dispongano diversamente. Annullare è semplice quanto registrarsi: un pulsante di annullamento diretto nel Suo account, senza telefonate né moduli. Le inviamo un promemoria prima di un rinnovo o della conversione di una prova in piano a pagamento ove la legge lo richieda; per i piani di un anno o più inviamo un promemoria tra 15 e 45 giorni prima del rinnovo e un promemoria annuale, con il prezzo e le modalità di annullamento. Le condizioni di rinnovo sono sempre indicate accanto al pulsante di pagamento.
{{/if}}

## Diritto di recesso per i consumatori (UE, Regno Unito e normative analoghe) {#withdrawal}

{{#if feature.consumers}}
Se è un consumatore nell'UE, nel Regno Unito o in un altro Paese che prevede un diritto di recesso dai contratti a distanza, può recedere da un acquisto **entro {{policy.refund_days}} giorni** dalla conclusione del contratto, senza doverne indicare il motivo.

**Contenuti digitali e servizi digitali.** Se Lei ci chiede di iniziare a fornire un servizio digitale o contenuti digitali (ad esempio accesso, crediti o oggetti virtuali) durante il periodo di recesso e conferma di comprendere che potrebbe perdere il diritto di recesso, allora:
- per i **contenuti digitali non forniti su supporto fisico**, una volta iniziata la fornitura con il Suo consenso espresso, Lei perde il diritto di recesso;
- per un **servizio digitale**, può comunque recedere entro il periodo, ma paga un importo proporzionato a quanto fornito fino al momento in cui ce lo comunica.

Chiediamo questo consenso al momento del checkout. Se non lo ha dato, si applica il diritto di recesso pieno.

**Funzione di recesso.** Come richiesto dalla legge a partire dal 19 giugno 2026, nel Suo account e nella conferma d'ordine è disponibile una funzione “Recedi dal contratto”: scelga il contratto, confermi, e riceverà una conferma su supporto durevole (e-mail) che indica data e ora. Non deve spiegare il motivo.

**Altri modi per recedere.** Invii una dichiarazione chiara (ad esempio via e-mail a [{{company.email}}](mailto:{{company.email}})) della Sua decisione di recedere, con il Suo nome, i dati dell'ordine o dell'account e la data dell'acquisto. Può usare il modulo sotto, ma non è obbligato a farlo. Confermeremo la ricezione e La rimborseremo **entro 14 giorni** da quando veniamo a conoscenza della Sua decisione, con lo stesso metodo di pagamento.

> **Modulo tipo di recesso** (da compilare e restituire solo se desidera recedere)
> A {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Con la presente comunico/comunichiamo il mio/nostro recesso dal contratto per la fornitura del seguente servizio/contenuto digitale: ______ ; ordinato il / ricevuto il: ______ ; nome: ______ ; indirizzo: ______ ; data: ______ (firma solo se su carta).
{{else}}
I nostri Servizi sono offerti solo alle imprese, pertanto i diritti legali di recesso dei consumatori non si applicano. Ci contatti se ritiene di essere un consumatore.
{{/if}}

## Altri Paesi {#other-countries}

Alcuni luoghi prevedono ulteriori diritti di annullamento o rimborso (ad esempio periodi di ripensamento, norme sul rinnovo automatico in diversi Stati USA o garanzie legali in Australia, Nuova Zelanda e Regno Unito). Ove obbligatori, si applicano e prevalgono su quanto previsto in modo meno favorevole nella presente politica.

## Quando rimborsiamo {#refunds}

Rimborseremo, in tutto o in parte a seconda dei casi:

- un **addebito duplicato o errato**, o un addebito che Lei non ha autorizzato (lo segnali tempestivamente; potremmo chiederLe dettagli);
- un acquisto per il quale il servizio **non ha potuto essere fornito** o è sostanzialmente difettoso e non possiamo porvi rimedio entro un termine ragionevole;
- un acquisto che Lei chiede di annullare entro **{{policy.refund_days}} giorni**, se non ha utilizzato ciò che ha acquistato (inclusi i crediti non utilizzati), a nostra discrezione ove non si applichi alcun diritto legale;
- qualsiasi altro caso da noi concordato per iscritto.

Negli altri casi le commissioni pagate non sono rimborsabili, incluse quelle per periodi parziali, per articoli utilizzati o consumati, e per gli account chiusi per violazione della [Politica di uso accettabile]({{url.acceptable_use}}). I rimborsi sono effettuati sul metodo di pagamento originale; possiamo rimborsare in crediti solo se Lei lo richiede.

{{#if feature.credits}}
## Crediti e oggetti virtuali {#credits}

I crediti prepagati non utilizzati possono essere rimborsati entro il periodo sopra indicato. I crediti e gli oggetti virtuali che sono stati spesi o consumati non sono rimborsabili, salvo ove la legge lo richieda. Se cessiamo un servizio, gestiamo i saldi a pagamento residui come descritto nelle [Condizioni di servizio]({{url.terms}}){{#if feature.game}} e nelle [Regole di gioco]({{url.game_rules}}){{/if}}.
{{/if}}

## Storni e contestazioni {#chargebacks}

La preghiamo di contattarci prima di contestare un addebito con la Sua banca o con l'emittente della carta: di norma risolviamo la questione più rapidamente. Se apre una contestazione per un addebito valido, possiamo sospendere l'account fino alla sua risoluzione e condividere con il fornitore di pagamento le prove di consegna e di utilizzo.

## Imposte e valuta {#taxes}

I rimborsi includono l'imposta che è stata addebitata. Se ha pagato in un'altra valuta, l'importo restituito può differire a causa dei movimenti dei tassi di cambio e delle commissioni bancarie, che non dipendono da noi.

## Come fare richiesta {#contact}

Scriva a [{{company.email}}](mailto:{{company.email}}) indicando l'e-mail del Suo account, il numero dell'ordine o della ricevuta e una breve descrizione. Risponderemo al Suo messaggio. Se non riusciamo a risolvere la questione, può rivolgersi all'autorità locale per i consumatori{{#if consumer_dispute}} o {{consumer_dispute}}{{/if}}.
