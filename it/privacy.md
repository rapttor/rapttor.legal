---
doc: privacy
title: Informativa sulla privacy
version: 1.2.1
updated: 2026-10-31
lang: it
translation_of: 1.2.1
status: draft
summary: Come {{product.name}} raccoglie, utilizza, condivide e protegge i dati personali, e quali diritti sono riconosciuti all'utente.
---

# Informativa sulla privacy

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

## 1. Chi siamo {#who-we-are}

La presente informativa spiega come **{{company.name}}**, con sede legale in {{company.address}} ("**{{product.name}}**", "noi"), tratta i dati personali quando Lei utilizza {{product.name}}, i nostri siti web, le applicazioni, le API e i servizi correlati (i "**Servizi**").

Per i dati personali di cui decidiamo modalità e finalità del trattamento (ad esempio il Suo account, le visite al sito e la fatturazione), siamo il **titolare del trattamento**. Contatto: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Il nostro responsabile della protezione dei dati è raggiungibile all'indirizzo [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Non abbiamo nominato un responsabile della protezione dei dati, poiché la legge non lo richiede per le nostre attività. Le domande in materia di privacy vanno inviate a [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Rappresentante nell'UE (art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Rappresentante nel Regno Unito (art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Quando agiamo come responsabili del trattamento

Se Lei utilizza i Servizi tramite un'organizzazione (il Suo datore di lavoro, un cliente business), tale organizzazione è di norma il titolare dei dati che inserisce nei Servizi, e noi li trattiamo per suo conto ai sensi del nostro [Addendum sul trattamento dei dati]({{url.dpa}}). In tal caso, Le chiediamo di rivolgere le richieste a tale organizzazione; noi la assisteremo nel rispondere. La presente informativa si applica quindi solo ai dati che controlliamo direttamente (gestione dell'account, fatturazione, sicurezza, sito web).
{{/if}}

## 2. Dati che raccogliamo {#data-we-collect}

| Categoria | Esempi | Fonte |
|---|---|---|
| **Dati dell'account** | nome, email, hash della password, dettagli del profilo, lingua, preferenze | Lei |
| **Dati di contatto e di assistenza** | messaggi, allegati, note di chiamata, feedback, risposte ai sondaggi | Lei |
| **Contenuti inviati** | file, testi, impostazioni, qualsiasi elemento inserito nei Servizi | Lei |
{{#if feature.anonymous}}| **Dati dell'account anonimo** | un identificativo casuale dell'account, la sessione del browser o del dispositivo che lo contiene, i contenuti creati e un indirizzo email se in seguito ne collega uno | Lei, automaticamente |
{{/if}}{{#if feature.uploads}}| **File e immagini caricati** | i file stessi e i metadati in essi contenuti (ad esempio dati della fotocamera o posizione nelle foto) | Lei |
{{/if}}| **Registrazioni del consenso** | ciò a cui Lei ha acconsentito (documenti, conferma dell'età, scelte facoltative), la versione, la lingua, la data e le modalità del consenso | Lei |
| **Dati di utilizzo e del dispositivo** | indirizzo IP, tipo di browser e dispositivo, sistema operativo, lingua, pagine e funzioni utilizzate, marcature temporali, referrer, registri di arresti anomali ed errori | Automaticamente |
| **Cookie e tecnologie simili** | identificativi contenuti in cookie, local storage, SDK (si veda l'[Informativa sui cookie]({{url.cookies}})) | Automaticamente |
{{#if feature.payments}}| **Dati di pagamento e di transazione** | piano, fatture, nome e indirizzo di fatturazione, codice identificativo fiscale, stato del pagamento; i dati della carta sono gestiti dal nostro processore di pagamento e non sono da noi conservati | Lei, processore di pagamento |
{{/if}}{{#if feature.location}}| **Dati di localizzazione** | posizione precisa solo se Lei la attiva sul dispositivo; altrimenti posizione approssimativa ricavata dall'indirizzo IP | Il Suo dispositivo |
{{/if}}| **Dati dell'account di terze parti** | nome, email, immagine del profilo e identificativo condivisi da un fornitore di accesso da Lei scelto | Terza parte, con il Suo consenso |
{{#if feature.ugc}}| **Comunicazioni tra utenti** | messaggi e interazioni che Lei invia tramite i Servizi | Lei |
{{/if}}{{#if feature.mobile}}| **Dati del dispositivo mobile** | modello del dispositivo e versione del sistema operativo, versione dell'app, token dell'istanza dell'app e delle notifiche push, lingua e fuso orario, stato delle autorizzazioni; identificativo pubblicitario solo se Lei consente il tracciamento | Il Suo dispositivo |
{{/if}}{{#if feature.game}}| **Dati di gioco** | avanzamento, punteggi, classifiche, oggetti e acquisti, cronologia delle partite, chat in gioco e (se utilizzate) segnalazioni vocali, segnali anti-cheat e di integrità, profilo pubblico (nome, avatar, rango) | Lei, automaticamente |
{{/if}}| **Segnali di sicurezza e di frode** | accessi falliti, segnalazioni di abuso, punteggi di rischio, richieste bloccate | Automaticamente, altri utenti |

Non raccogliamo intenzionalmente dati appartenenti a categorie particolari (salute, dati biometrici, opinioni politiche o religiose e simili). La preghiamo di non inviarli, salvo che una funzione lo richieda espressamente. Qualora Lei li invii comunque, è Lei a dover disporre di una base giuridica lecita.

Non è obbligatorio fornirci dati personali, ma senza alcuni di essi (ad esempio un indirizzo email) non possiamo fornirLe un account.

### Tracciamenti che non utilizziamo {#no-tracking}

Non utilizziamo strumenti di registrazione delle sessioni o dello schermo, di cattura della digitazione o dei movimenti del mouse, né tecniche di impronta digitale del browser (browser fingerprinting). {{#if feature.analytics}}Le analisi vengono eseguite solo con il Suo consenso (si veda l'[Informativa sui cookie]({{url.cookies}})).{{else}}Non utilizziamo strumenti di analisi né di tracciamento pubblicitario.{{/if}}
{{#if feature.external}}
### Risorse di terze parti e indirizzo IP {#external}

Alcune funzioni caricano contenuti dai server di altre società (ad esempio font, mappe, video o verifiche di sicurezza). Quando il Suo browser recupera tali contenuti, **il Suo indirizzo IP e i dati tecnici vengono inviati a tale società**, che può trovarsi al di fuori del Suo paese. Carichiamo queste risorse solo dopo che Lei ha acconsentito a ciascuna di esse nelle impostazioni dei cookie, che può modificare in qualsiasi momento; se rifiuta, utilizziamo un'alternativa oppure la funzione resta disattivata.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### Email {#emails}

Inviamo le email necessarie per i Servizi (link di accesso, ricevute, avvisi di sicurezza){{#if feature.marketing}} e, solo ove Lei abbia acconsentito o la legge lo consenta, notizie sul prodotto{{/if}}. Ogni email contiene un link per cessare di ricevere email da noi. {{#if feature.marketing}}Le email facoltative cessano con un solo clic, immediatamente. {{/if}}Poiché bloccare tutte le email bloccherebbe anche i link di accesso, una richiesta di bloccare **tutte** le email di questo servizio viene confermata con un'ultima email contenente un link che dimostra che l'indirizzo è Suo. Aggiungiamo poi l'indirizzo all'elenco di non invio presso il nostro fornitore di posta elettronica e lo conserviamo lì per rispettare la Sua scelta (obbligo di legge e nostro legittimo interesse a rispettare la Sua richiesta).
{{/if}}{{#if feature.age_gate}}
### Conferma dell'età {#age}

Prima di utilizzare funzioni che riguardano {{policy.age_topics|contenuti sensibili rispetto all'età}}, Le chiediamo di confermare di avere almeno {{policy.age_gate}} anni e la maggiore età secondo le norme del Suo paese. Non chiediamo la data di nascita e conserviamo solo la Sua conferma e la data in cui l'ha fornita. Se veniamo a sapere che una persona non ha l'età richiesta, blocchiamo l'account ed eliminiamo i dati.
{{/if}}{{#if feature.gambling}}
Per le funzioni di gioco d'azzardo possiamo inoltre chiederLe una prova della Sua età e della Sua identità, avvalendoci a tal fine di un fornitore di verifica. Conserviamo l'esito e le prove che la legge richiede.
{{/if}}

## 3. Perché utilizziamo i dati e le nostre basi giuridiche {#purposes}

| Finalità | Base giuridica (GDPR / UK GDPR) |
|---|---|
| Fornire i Servizi, creare e gestire l'account, elaborare gli ordini | Contratto (art. 6, par. 1, lett. b) |
| Assistenza clienti e comunicazioni sull'utilizzo dei Servizi | Contratto; legittimi interessi |
| Sicurezza, prevenzione di abusi e frodi, applicazione delle nostre [Condizioni di servizio]({{url.terms}}) e della [Politica di uso accettabile]({{url.acceptable_use}}) | Legittimo interesse (art. 6, par. 1, lett. f); obbligo di legge |
| Debugging, affidabilità, pianificazione della capacità e miglioramento dei Servizi | Legittimo interesse |
{{#if feature.analytics}}| Analisi di utilizzo | Consenso ove richiesto dalla legge, altrimenti legittimo interesse |
{{/if}}{{#if feature.marketing}}| Notizie sul prodotto ed email di marketing | Consenso, oppure legittimo interesse per i clienti esistenti ove la legge lo consenta; può opporsi in qualsiasi momento |
{{/if}}{{#if feature.ads}}| Pubblicità e misurazione | Consenso |
{{/if}}| Registrazione dei consensi e rispetto delle Sue scelte sulle email | Obbligo di legge; legittimo interesse |
{{#if feature.external}}| Caricamento di risorse di terze parti che ricevono l'indirizzo IP | Consenso (art. 6, par. 1, lett. a, e norme ePrivacy sull'accesso al dispositivo) |
{{/if}}| Contabilità, fiscalità e altri obblighi di legge | Obbligo di legge (art. 6, par. 1, lett. c) |
| Accertamento, esercizio o difesa di diritti in sede legale; risposte alle autorità | Legittimo interesse; obbligo di legge |
| Trasferimenti d'azienda (fusione, acquisizione, cessione di attività) | Legittimo interesse |

Ove ci basiamo sul legittimo interesse, lo abbiamo bilanciato con i Suoi diritti; può chiedere dettagli e opporsi (sezione 10). Ove ci basiamo sul consenso, Lei può revocarlo in qualsiasi momento; ciò non pregiudica il trattamento già effettuato.

{{#if feature.ai}}
### Funzioni assistite dall'intelligenza artificiale {#ai}

Alcune funzioni utilizzano modelli di apprendimento automatico o modelli generativi. Quando Lei le utilizza, i contenuti che inserisce come input vengono inviati al fornitore, che agisce come nostro responsabile del trattamento, per produrre l'output.

- **Non** utilizziamo i Suoi contenuti per addestrare modelli di uso generale, e imponiamo ai nostri fornitori di non farlo, salvo Sua esplicita adesione.
- L'output dell'IA può essere errato, incompleto o parziale. Non vi si faccia affidamento per decisioni legali, mediche, finanziarie o di altra rilevanza elevata senza una verifica umana.
- Non prendiamo decisioni con effetti giuridici o similmente significativi che La riguardano esclusivamente con mezzi automatizzati. Le restrizioni dell'account per abuso sono riesaminate da una persona su richiesta (si veda la [Politica di uso accettabile]({{url.acceptable_use}}), Enforcement).
- I contenuti generati dall'IA sono contrassegnati ove la legge lo richieda.
{{/if}}

## 4. Con chi condividiamo i dati {#sharing}

**Non vendiamo i Suoi dati personali** e non li "condividiamo" a fini di pubblicità comportamentale cross-contesto{{#if feature.ads}}, salvo quanto descritto nell'Informativa sui cookie e solo ove Lei abbia acconsentito{{/if}}.

Condividiamo i dati personali solo con:

- **fornitori di servizi (responsabili del trattamento)** che agiscono secondo le nostre istruzioni in forza di accordi scritti: hosting e infrastruttura, consegna delle email, strumenti di assistenza clienti, monitoraggio degli errori{{#if feature.payments}}, elaborazione dei pagamenti{{/if}}{{#if feature.ai}}, fornitori di intelligenza artificiale{{/if}}. L'elenco aggiornato è disponibile nel nostro [Elenco dei sub-responsabili del trattamento]({{url.subprocessors}});
- **piattaforme e app store** che Lei utilizza per accedere ai Servizi (ad esempio Apple, Google, gli store per console o PC), che gestiscono i pagamenti e possono fornirci dati limitati su acquisti e account;
- **altri utenti o il pubblico**, solo su Sua indicazione (ad esempio contenuti che sceglie di pubblicare{{#if feature.ugc}} o messaggi che invia{{/if}});
- **consulenti professionali** (avvocati, revisori, assicuratori) vincolati alla riservatezza;
- **autorità, tribunali e soggetti interessati** ove richiesto dalla legge, per rispondere a un valido procedimento legale, per tutelare diritti, sicurezza o beni, o per indagare su abusi e frodi. Verifichiamo la validità delle richieste e, ove lecito, ne diamo comunicazione a Lei;
- **un successore** in una fusione, acquisizione, operazione di finanziamento o cessione di attività, che è tenuto a rispettare la presente informativa; La informeremo di eventuali modifiche sostanziali del controllo che incidano sui Suoi dati;
- **qualsiasi altro soggetto** solo con il Suo consenso.

## 5. Trasferimenti internazionali {#transfers}

Operiamo da {{company.country}}{{#if hosting.region}} e conserviamo i dati principalmente in {{hosting.region}}{{/if}}. Alcuni fornitori trattano dati in altri paesi, compresi gli Stati Uniti. Quando dati personali provenienti dallo SEE, dal Regno Unito o dalla Svizzera vengono trasferiti verso un paese privo di decisione di adeguatezza, utilizziamo una garanzia riconosciuta: il Quadro UE-USA per la protezione dei dati personali (EU-U.S. Data Privacy Framework), o le sue estensioni per Regno Unito e Svizzera, ove il destinatario sia certificato; in caso contrario, le **clausole contrattuali tipo** della Commissione europea, con la **UK International Data Transfer Addendum** o le modifiche svizzere ove pertinenti, oltre a misure supplementari quali la cifratura in transito e a riposo. Può richiedere una copia delle garanzie pertinenti scrivendo a [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Per quanto tempo conserviamo i dati {#retention}

| Dati | Conservazione |
|---|---|
| Dati dell'account e contenuti | Finché l'account è attivo, poi cancellati o anonimizzati entro {{policy.retention_account_days}} giorni dalla chiusura |
| Registri del server e di sicurezza | 90 giorni |
| Backup | Ciclo continuo, fino a 35 giorni; i dati cancellati scadono dai backup secondo tale ciclo |
| Fatture e registri contabili | {{policy.retention_billing_years}} anni, o per il periodo richiesto dalla legge |
| Corrispondenza di assistenza | Fino a 3 anni dopo la chiusura della pratica, o finché l'account è attivo se più lungo |
| Registrazioni di consensi, opt-out e richieste relative ai diritti | Per il tempo necessario a dimostrare la conformità |
| Dati necessari per un diritto in sede legale o per un'indagine | Fino alla conclusione della questione e al decorso dei termini di prescrizione |
| Registri di abusi e divieti di accesso (identificativo, motivo, data) | Fino a 5 anni, per prevenire abusi ripetuti |
| Registrazioni di consensi ed elenco di non invio delle email | Registrazioni di consensi: per tutta la durata dell'account più il termine di prescrizione; voci dell'elenco di non invio: finché non ne chiede la rimozione |

Quando la finalità cessa, cancelliamo o anonimizziamo irreversibilmente i dati.

## 7. Sicurezza {#security}

Adottiamo misure tecniche e organizzative adeguate al rischio: cifratura in transito, cifratura dei dati sensibili a riposo, controllo degli accessi secondo il principio del privilegio minimo, misure di autenticazione, registrazione degli eventi (logging), backup, gestione delle vulnerabilità e obblighi di riservatezza del personale. Nessun sistema è perfettamente sicuro. La preghiamo di utilizzare una password robusta e unica, di attivare l'autenticazione a più fattori ove offerta e di segnalarcelo subito a [{{company.email}}](mailto:{{company.email}}) se sospetta che il Suo account sia stato compromesso. Si veda anche la nostra pagina [Sicurezza e divulgazione delle vulnerabilità]({{url.security}}).

Se una violazione è probabile che metta a rischio i diritti e le libertà, notificheremo all'autorità di controllo entro 72 ore dalla conoscenza dell'evento, ove richiesto, e La informeremo senza ingiustificato ritardo ove la legge lo preveda.

## 8. Minori {#children}

{{#if feature.minors}}I Servizi non sono rivolti a minori di 13 anni e non raccogliamo consapevolmente dati personali da loro. Gli utenti di età pari o superiore a {{policy.min_age}} anni che non hanno ancora raggiunto la maggiore età possono utilizzare i Servizi **solo con il consenso di un genitore o di un tutore**, che può consultare, rettificare, limitare o cancellare i dati del minore e revocare il consenso contattando [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Raccogliamo solo i dati necessari ai Servizi, non utilizziamo i dati dei minori per la pubblicità comportamentale e applichiamo, ove possibile, impostazioni predefinite adeguate all'età (profili privati, comunicazioni limitate). Ove la legge di un paese fissi un'età più elevata per il consenso digitale, richiediamo il consenso dei genitori al di sotto di tale età.{{else}}I Servizi non sono rivolti a minori. Per avere un account è necessario avere almeno {{policy.min_age}} anni. Non raccogliamo consapevolmente dati personali di persone di età inferiore a {{policy.min_age}} anni (o all'età più elevata per il consenso digitale nel loro paese; negli Stati Uniti, di età inferiore a 13 anni ai fini COPPA). Se ritiene che un minore ci abbia fornito dati personali, contatti [{{company.privacy_email}}](mailto:{{company.privacy_email}}): li cancelleremo e chiuderemo l'account. Ove un genitore o un tutore abbia validamente acconsentito all'uso da parte di un minore, tale consenso può essere revocato in qualsiasi momento.{{/if}}

## 9. Siti e servizi di terze parti {#third-parties}

I Servizi possono rinviare a siti, plug-in e app di terze parti o integrarsi con essi, compresi i fornitori di accesso. Non li controlliamo e non siamo responsabili delle loro pratiche in materia di privacy; le rispettive informative stabiliscono cosa raccolgono. Può disattivare le integrazioni nelle impostazioni del Suo account o in quelle della terza parte.

## 10. I Suoi diritti {#rights}

A seconda del luogo in cui vive, Lei può:

- **accedere** ai Suoi dati e ottenerne una copia;
- **rettificare** i dati inesatti;
- **cancellare** i Suoi dati ("diritto all'oblio");
- **limitare** il trattamento o **opporsi** ad esso, compreso il marketing diretto in qualsiasi momento;
- **trasferire** i Suoi dati a un altro fornitore in un formato leggibile da dispositivo automatico;
- **revocare il consenso** in qualsiasi momento;
- **non essere sottoposto a decisioni basate unicamente su trattamenti automatizzati** che producano effetti giuridici o similmente significativi;
- **proporre reclamo** a un'autorità di controllo.

**Cancellazione dell'account.** Può cancellare l'account e i dati personali {{#if feature.mobile}}direttamente nell'app (Impostazioni, poi Account, poi Elimina account), {{/if}}nelle impostazioni del Suo account sul nostro sito web oppure via email; non Le chiederemo di contattare l'assistenza se è disponibile la procedura self-service. La cancellazione dell'account è definitiva al termine del periodo di tolleranza che Le viene indicato. La disinstallazione di un'app non cancella l'account.

Per esercitare un diritto, scriva a [{{company.privacy_email}}](mailto:{{company.privacy_email}}) oppure utilizzi le impostazioni del Suo account. Potremmo dover verificare la Sua identità e, se la richiesta è manifestamente infondata o eccessiva, potremmo addebitare un contributo ragionevole o rifiutarla, nei limiti consentiti dalla legge. Rispondiamo entro **un mese** (prorogabile di altri due mesi per richieste complesse; 45 giorni ai sensi delle leggi statali degli Stati Uniti, prorogabili di altri 45), e Le comunichiamo il motivo se non possiamo dar seguito alla richiesta. Non La discrimineremo per aver esercitato i Suoi diritti.

### 10.1 Spazio economico europeo, Regno Unito, Svizzera

Si applicano tutti i diritti sopra indicati. Può proporre reclamo all'autorità del paese in cui vive, lavora o in cui si è verificato il problema ([elenco delle autorità SEE](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Regno Unito: [ICO](https://ico.org.uk); Svizzera: [FDPIC](https://www.edoeb.admin.ch)). La nostra autorità capofila è {{law.authority}}.

### 10.2 Serbia

Ove si applichi la legge serba sulla protezione dei dati personali, Lei dispone di diritti equivalenti a quelli sopra indicati e può proporre reclamo al Commissario per le informazioni di interesse pubblico e la protezione dei dati personali (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Stati Uniti (California e altri Stati) {#us-states}

La presente sezione integra quanto sopra per i residenti in California e negli altri Stati USA dotati di leggi complete sulla privacy (tra cui Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana e altri, man mano che entrano in vigore).

- **Categorie raccolte negli ultimi 12 mesi:** identificativi (nome, email, indirizzo IP, identificativi online); dati dei clienti; informazioni commerciali (piani, acquisti); attività su internet o sulla rete; geolocalizzazione approssimativa{{#if feature.location}} e geolocalizzazione precisa con il Suo consenso{{/if}}; contenuti inviati; deduzioni limitate al funzionamento dei Servizi. Comunichiamo tali categorie ai fornitori di servizi per le finalità commerciali di cui alla sezione 3.
- **Vendita e condivisione:** non vendiamo informazioni personali e non le condividiamo a fini di pubblicità comportamentale cross-contesto. Non vendiamo né condividiamo consapevolmente i dati di persone di età inferiore a 16 anni.
- **Informazioni personali sensibili:** non le utilizziamo per desumere caratteristiche e non le usiamo oltre quanto necessario per fornire i Servizi.
- **Suoi diritti:** conoscere/accedere, cancellare, rettificare, portabilità, opporsi alla vendita o alla condivisione e alla pubblicità mirata o alla profilazione, limitare l'uso dei dati sensibili, non discriminazione. Rispettiamo il **Global Privacy Control** e analoghi segnali di opt-out del browser come richiesta di opt-out valida.
- **Agenti autorizzati e ricorsi:** un agente autorizzato può presentare richieste con il Suo consenso scritto. Se rigettiamo una richiesta, può presentare ricorso rispondendo alla nostra decisione; se resta insoddisfatto, può rivolgersi al procuratore generale del Suo Stato.
- **California:** può chiedere un elenco delle terze parti a cui abbiamo comunicato informazioni personali per il loro marketing diretto nell'anno civile precedente ("Shine the Light"); non effettuiamo tali comunicazioni. I residenti in California di età inferiore a 18 anni che sono utenti registrati possono chiedere la rimozione dei contenuti che hanno pubblicato pubblicamente.

### 10.4 Brasile (LGPD)

Può chiedere la conferma del trattamento, l'accesso, la rettifica, l'anonimizzazione, il blocco o la cancellazione di dati non necessari o eccessivi, la portabilità, informazioni sui soggetti con cui condividiamo i dati, informazioni sulla possibilità di non fornire il consenso e sulle relative conseguenze, e il riesame delle decisioni automatizzate. Può proporre reclamo all'Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Altre regioni

Se si trova in un'altra area con una legge sulla protezione dei dati, riconosciamo i diritti equivalenti che tale legge Le attribuisce. In particolare:

| Dove | Cosa aggiungiamo |
|---|---|
| **Canada** (PIPEDA, Québec Law 25) | Può accedere e rettificare i Suoi dati, revocare il consenso e proporre reclamo all'Office of the Privacy Commissioner o alla Commission d'accès à l'information. Il nostro referente per la privacy è la persona incaricata della protezione dei dati personali; i trasferimenti al di fuori del Québec sono valutati e tutelati con garanzie. |
| **India** (DPDP Act 2023) | Può accedere, rettificare, cancellare, designare un'altra persona che eserciti i Suoi diritti in caso di decesso o incapacità, e utilizzare il recapito per i reclami indicato sotto; può proporre reclamo al Data Protection Board. |
| **Australia, Nuova Zelanda** | Può richiedere accesso e rettifica e presentare reclamo a noi, quindi all'OAIC (Australia) o al Privacy Commissioner (Nuova Zelanda). |
| **Giappone, Corea del Sud, Singapore, Thailandia, Malaysia, Türkiye, EAU, Arabia Saudita, Sudafrica, Kenya, Nigeria e leggi analoghe** | Applichiamo i diritti e le garanzie che tali leggi richiedono (accesso, rettifica, cancellazione, opposizione, reclamo all'autorità locale, garanzie per i trasferimenti). Ci contatti per esercitarli. |
| **Cina** | I Servizi non sono rivolti a persone della Cina continentale; non utilizzi i Servizi per inviare dati personali di persone in tale paese. |

**Recapito per i reclami e per la privacy, valido per tutte le regioni:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Gestiamo le richieste entro i termini consentiti dalla legge applicabile.

## 11. Modifiche alla presente informativa {#changes}

Possiamo aggiornare la presente informativa per riflettere modifiche ai Servizi o alla legge. Per le modifiche sostanziali daremo un preavviso di almeno {{policy.notice_days}} giorni, via email o nei Servizi, prima che si applichino a Lei, e chiederemo un nuovo consenso ove la legge lo richieda. La data di "ultimo aggiornamento" indicata sopra si riferisce alla versione corrente; le versioni precedenti sono disponibili su richiesta.

## 12. Contatti {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
