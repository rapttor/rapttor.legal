---
doc: terms
title: Condizioni di servizio
version: 1.3.0
updated: 2026-10-31
lang: it
translation_of: 1.3.0
status: draft
summary: L'accordo tra Lei e {{product.name}} per l'utilizzo di {{product.name}}.
---

# Condizioni di servizio

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

## 1. Accordo {#agreement}

Le presenti Condizioni di servizio (le "**Condizioni**") costituiscono un accordo vincolante tra Lei e **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, numero di registrazione {{company.reg_id}}{{/if}} ("**{{product.name}}**", "noi", "ci") che disciplina l'accesso e l'utilizzo di {{product.name}}, dei nostri siti web, delle applicazioni, delle API, della documentazione e dei servizi correlati (i "**Servizi**").

Creando un account, installando un'app o utilizzando in altro modo i Servizi, Lei accetta le presenti Condizioni e i documenti che esse richiamano: l'[Informativa sulla privacy]({{url.privacy}}), la [Politica di uso accettabile]({{url.acceptable_use}}), l'[Informativa sui cookie]({{url.cookies}}){{#if feature.processor_role}}, l'[Addendum sul trattamento dei dati]({{url.dpa}}) ove applicabile{{/if}}{{#if feature.payments}}, la [Politica di rimborso e annullamento]({{url.refunds}}){{/if}}{{#if feature.game}}, le [Regole di gioco e politica sugli oggetti virtuali]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, le [Condizioni dell'app]({{url.app_eula}}){{/if}} e qualsiasi modulo d'ordine o condizione specifica del prodotto. Se non è d'accordo, non utilizzi i Servizi.

Se utilizza i Servizi per conto di un'organizzazione, Lei dichiara di avere il potere di vincolarla, e il riferimento a "Lei" include tale organizzazione. Se condizioni specifiche del prodotto o un contratto firmato sono in conflitto con le presenti Condizioni, prevalgono solo per quel prodotto o quel cliente.

{{#if feature.consumers}}
**Consumatori.** Se utilizza i Servizi in qualità di consumatore, continuano ad applicarsi le norme imperative a tutela dei consumatori del Paese di residenza, e nulla nelle presenti Condizioni limita tali diritti. Le sezioni contrassegnate *(clienti business)* si applicano solo se Lei non è un consumatore.
{{/if}}

## 2. Idoneità {#eligibility}

Può utilizzare i Servizi solo se:

1. {{#if feature.minors}}ha almeno **{{policy.min_age}}** anni e, se non ha raggiunto la maggiore età nel luogo in cui risiede, ha il consenso di un genitore o di un tutore legale che accetta per Lei le presenti Condizioni ed è responsabile del Suo utilizzo e dei Suoi acquisti (potremmo chiederne la prova){{else}}ha almeno **{{policy.min_age}}** anni ed è in grado di stipulare un contratto vincolante{{/if}};
2. non è escluso dalla fruizione dei Servizi ai sensi della legge applicabile, incluse le norme in materia di sanzioni e controllo delle esportazioni (sezione 22);
3. non è stato precedentemente rimosso dai Servizi per violazione delle nostre regole, salvo che non abbiamo concordato per iscritto di riammetterlo; e
4. utilizza i Servizi in modo lecito nel luogo in cui si trova.
{{#if feature.age_gate}}5. conferma, quando glielo chiediamo, di avere almeno **{{policy.age_gate}}** anni e di avere l'età legale secondo le norme del Paese in cui vive per utilizzare funzionalità che coinvolgono {{policy.age_topics|contenuti sensibili rispetto all'età}}. Non abbiamo bisogno della Sua data di nascita: la Sua conferma viene registrata. Se non è vera, possiamo bloccare l'account ed eliminarne i dati.
{{/if}}{{#if feature.gambling}}6. conferma, quando glielo chiediamo, di avere almeno **{{policy.gambling_age}}** anni, che il gioco d'azzardo è consentito nel luogo in cui vive e che utilizza le funzionalità di gioco d'azzardo solo per sé. Possiamo richiedere una verifica effettiva dell'età e dell'identità e possiamo rifiutare o interrompere l'accesso alle funzionalità di gioco d'azzardo ove lo richiedano la legge o le nostre licenze.
{{/if}}{{#if policy.excluded_regions}}7. conferma, quando glielo chiediamo, di non trovarsi in, e di non essere residente o cittadino di, nessuno dei seguenti Paesi o regioni: **{{policy.excluded_regions}}**, dove i nostri Servizi o le presenti Condizioni potrebbero non essere leciti, potrebbero non essere applicabili o non sono offerti. Non possiamo vedere dove si trova realmente (ad esempio dietro una VPN), quindi ci affidiamo alla Sua conferma; se non è vera, utilizza i Servizi a proprio rischio, è responsabile del rispetto della legge locale e possiamo bloccare l'account ed eliminarne i dati. Nulla in questo punto limita i diritti che non possono essere rinunciati ai sensi della legge del luogo in cui vive.
{{/if}}

Possiamo chiedere in qualsiasi momento una prova dell'età, dell'identità o dei poteri di rappresentanza, e possiamo rifiutare o chiudere un account che non superi la verifica.

## 3. Account e sicurezza {#accounts}

- Fornisca informazioni accurate e aggiornate e le mantenga tali. Una persona o un soggetto, un account, salvo diverso accordo con noi; la creazione di ulteriori account per eludere una restrizione, un limite, un divieto, una prova gratuita o una regola sui prezzi è vietata.
- Mantenga riservate le proprie credenziali. Non condivida, venda, noleggi o trasferisca il Suo account. Ogni postazione è destinata a un'unica persona fisica nominativa, salvo diversa previsione del piano.
- Lei è responsabile di tutto ciò che avviene tramite il Suo account, incluse le azioni delle persone che fa entrare o che non riesce a tenere lontane, fino al momento in cui ci comunica che è stato compromesso. Ci contatti immediatamente all'indirizzo [{{company.email}}](mailto:{{company.email}}) se sospetta un accesso non autorizzato.
- Possiamo richiedere un'autenticazione più forte, reimpostare le credenziali o bloccare un account che riteniamo ragionevolmente compromesso o abusato.
- Gli account gratuiti inattivi possono essere chiusi previa comunicazione all'indirizzo e-mail registrato; gli account a pagamento non vengono chiusi per inattività.
{{#if feature.anonymous}}- **Account anonimi.** Ove lo offriamo, i Servizi creano per Lei un account anonimo la prima volta che li utilizza. Tale account non ha un indirizzo e-mail; chiunque utilizzi quel browser o dispositivo può usare l'account, e non possiamo recuperarlo per Lei se perde l'accesso. Può collegare in qualsiasi momento un indirizzo e-mail per proteggere e recuperare l'account: confermiamo l'indirizzo tramite un link di accesso che gli inviamo. Gli account anonimi rimasti inutilizzati per lungo tempo possono essere eliminati previa comunicazione nei Servizi, ove ciò sia possibile.
{{/if}}- **Titolare dell'account e accesso.** La persona che conferma il controllo di un indirizzo e-mail tramite il link di accesso che inviamo, e accetta le presenti Condizioni, è il titolare dell'account ed è considerata la persona che ha compiuto le scelte nell'account. Se agisce per conto di un'organizzazione, dichiara di avere il potere di vincolarla. Lei decide quali altre persone della Sua organizzazione ottengono l'accesso (ad esempio operatori con ruoli limitati); le persone a cui concede l'accesso possono vedere ciò che Lei rende disponibile loro, e Lei è responsabile di tale scelta.

## 4. Licenza e restrizioni {#licence}

Fatte salve le presenti Condizioni e il pagamento delle commissioni applicabili, Le concediamo una licenza limitata, revocabile, non esclusiva, non trasferibile e non sublicenziabile per accedere ai Servizi e utilizzarli per i Suoi scopi personali o aziendali interni, per la durata del contratto. Il software che Le consegniamo è concesso in licenza, non venduto. Noi e i nostri concedenti di licenza conserviamo tutti i diritti non espressamente concessi.

Salvo che la legge Le riconosca un diritto non rinunciabile, Lei non deve, né deve consentire a chiunque di:

- copiare, modificare, tradurre o creare opere derivate dai Servizi;
- effettuare il reverse engineering, decompilare, disassemblare o tentare di ricavare codice sorgente, modelli, pesi, algoritmi o API non pubbliche;
- rivendere, sublicenziare, noleggiare, dare in locazione, ospitare come servizio per conto terzi, o rendere i Servizi disponibili a terzi diversi dai Suoi utenti autorizzati;
- eludere limiti tecnici, meccanismi di licenza, misurazione dell'utilizzo, controlli di accesso, limiti di frequenza o funzionalità di sicurezza;
- rimuovere o alterare avvisi di proprietà, attribuzioni o avvisi di licenza open source;
- utilizzare i Servizi o il loro output per costruire o addestrare un prodotto concorrente, oppure per effettuare benchmark o pubblicare risultati di prestazioni senza il nostro consenso scritto{{#if feature.ai}}, oppure per addestrare, mettere a punto (fine-tuning) o distillare un modello di IA a partire dall'output dei Servizi, ove ciò sia da noi vietato nella documentazione{{/if}};
- accedere ai Servizi con mezzi automatizzati (bot, scraper, crawler), salvo tramite la nostra API documentata e secondo le relative condizioni.

La [Politica di uso accettabile]({{url.acceptable_use}}) contiene regole dettagliate e fa parte delle presenti Condizioni. I componenti open source sono regolati dalle proprie licenze, che prevalgono per tali componenti.

## 5. Uso accettabile e applicazione {#acceptable-use}

Lei è responsabile del Suo utilizzo dei Servizi e della condotta di chiunque Lei consenta di utilizzarli. L'abuso può danneggiare altri utenti, terzi e noi, e possiamo agire come descritto nella [Politica di uso accettabile]({{url.acceptable_use}}) e nella sezione 17, incluse la rimozione di contenuti, la limitazione di funzionalità, il rallentamento del servizio, la sospensione o la risoluzione di account, il trattenimento dei pagamenti dovuti, la segnalazione alle autorità e l'esercizio dei rimedi di cui alla sezione 21.

## 6. I Suoi contenuti {#your-content}

{{#if feature.ugc}}
"**Suoi Contenuti**" indica tutto ciò che Lei carica, invia, pubblica, collega o genera tramite i Servizi{{#if feature.ai}}, inclusi i prompt e, nei rapporti tra Lei e noi, l'output che riceve{{/if}}.

- **Titolarità.** Lei conserva tutti i diritti sui Suoi Contenuti. Noi non acquisiamo alcuna titolarità su di essi.
- **Licenza a noi concessa.** Lei ci concede una licenza mondiale, non esclusiva ed esente da royalty per ospitare, memorizzare, riprodurre, trattare, trasmettere, adattare (per la formattazione, le miniature, le traduzioni e i controlli di sicurezza) e visualizzare i Suoi Contenuti **solo nella misura necessaria a gestire, proteggere, supportare e migliorare i Servizi e a far valere le presenti Condizioni**, per tutto il tempo in cui li conserva nei Servizi e per i periodi limitati di backup e di conservazione per ragioni legali successivi. Ove Lei renda pubblici dei contenuti, la licenza si estende alla loro presentazione al pubblico da Lei scelto. Questa licenza termina quando Lei elimina i contenuti o il Suo account, fatti salvi tali periodi e le copie già ricevute legittimamente da altri utenti.
- **Sue dichiarazioni.** Lei possiede e manterrà tutti i diritti, i consensi e le autorizzazioni necessari per inviare i Suoi Contenuti e concedere questa licenza, anche da parte di ogni persona identificabile in essi; i Suoi Contenuti e il nostro utilizzo degli stessi, nei limiti consentiti, non violano alcuna legge né i diritti di alcuno (diritto d'autore, marchi, privacy, diritti di immagine, riservatezza, contratto); e sono conformi alla [Politica di uso accettabile]({{url.acceptable_use}}).
- **Moderazione.** Non abbiamo un obbligo generale di sorvegliare i Suoi Contenuti, ma possiamo esaminare, rimuovere, limitare o rifiutare contenuti che riteniamo ragionevolmente violino la legge, le presenti Condizioni o i diritti altrui, oppure per i quali riceviamo una segnalazione valida (si veda [Avvisi su copyright e contenuti illegali]({{url.copyright}})). Ove richiesto (ad esempio ai sensi del Digital Services Act, DSA), Le comunichiamo i motivi della nostra decisione e come contestarla.
- **Backup.** Lei è responsabile della conservazione di proprie copie dei Suoi Contenuti. Salvo che un piano includa espressamente backup o conservazione, non ci impegniamo a ripristinare i contenuti eliminati o persi.
- **Dati aggregati.** Possiamo utilizzare dati di utilizzo che non La identificano né rivelano i Suoi Contenuti per gestire, proteggere e migliorare i Servizi.
{{else}}
Lei conserva tutti i diritti su quanto invia ai Servizi. Ci concede la licenza limitata necessaria a trattarlo per fornire, proteggere e supportare i Servizi, e Lei dichiara di avere il diritto di inviarlo. Lei è responsabile della conservazione di proprie copie.
{{/if}}

### I Suoi dati e file {#your-data}

Nei rapporti tra Lei e noi, **Lei è proprietario dei dati e dei file che inserisce nei Servizi, e ne è il solo responsabile**: per avere il diritto di caricarli e utilizzarli, per la loro accuratezza e liceità, e per le scelte che compie su chi può accedervi. Li memorizziamo e trattiamo secondo le Sue istruzioni affinché i Servizi funzionino. Ciò non limita i nostri obblighi di legge, ad esempio di proteggere i Servizi e i dati personali, né incide sui diritti che non possono essere esclusi dalla legge.
{{#if feature.uploads}}
- **Diritto d'autore e altri diritti.** Lei conferma di essere titolare di ciò che carica o di disporre di ogni autorizzazione necessaria (inclusa quella delle persone raffigurate nelle immagini), e accetta che **Lei può essere ritenuto responsabile per le richieste** relative al diritto d'autore, ai diritti della personalità, alla privacy o ad altri diritti che ne derivano. Possiamo rimuovere i contenuti e collaborare con i titolari dei diritti e con le autorità come descritto in [Avvisi su copyright e contenuti illegali]({{url.copyright}}).
- **Privato per impostazione predefinita.** Ciò che carica è visibile solo a Lei e alle persone a cui concede l'accesso (ad esempio membri od operatori della Sua organizzazione). Non utilizziamo i Suoi caricamenti o altri contenuti per creare materiale pubblico come modelli, linee guida, esempi, materiale promozionale o dati di addestramento, e non li rendiamo disponibili a persone che non hanno effettuato l'accesso, salvo che Lei non li pubblichi o condivida esplicitamente.
{{/if}}

## 7. Se fornisce ad altri servizi tramite i Servizi {#end-users}

Se utilizza i Servizi per fornire qualcosa ai propri clienti, utenti, dipendenti o altri terzi ("**Utenti finali**"), Lei ne è il solo responsabile: deve disporre della base giuridica, delle informative e dei consensi richiesti per qualsiasi dato personale che raccoglie o tratta, concordare i propri termini con loro, gestire le loro richieste e i loro reclami, garantire che rispettino la [Politica di uso accettabile]({{url.acceptable_use}}) e non assumere impegni per nostro conto. Lei risponde degli atti e delle omissioni degli Utenti finali come se fossero Suoi. Non abbiamo alcun obbligo nei confronti degli Utenti finali.

## 8. Funzionalità di IA {#ai}

{{#if feature.ai}}
- Gli output sono generati automaticamente e possono essere inesatti, incompleti, offensivi, distorti o simili a output forniti ad altri. Deve valutare un output prima di farvi affidamento e si assume la responsabilità del modo in cui lo utilizza.
- **Non utilizzi le funzionalità di IA come unica base per decisioni che producono effetti giuridici o altrettanto significativi sulle persone** (ad esempio in materia di occupazione, credito, alloggio, assicurazioni, istruzione, sanità, attività di polizia o immigrazione), e non le utilizzi per consulenze mediche, legali, finanziarie o relative alla sicurezza senza una revisione qualificata da parte di una persona.
- Deve dichiarare i contenuti generati o manipolati dall'IA nella misura in cui la legge o la piattaforma su cui li pubblica lo richiedano (inclusi i deepfake e i contenuti sintetici), e non deve presentare un output dell'IA come opera umana ove ciò risulti ingannevole.
- Non deve utilizzare le funzionalità per alcun uso vietato dalla [Politica di uso accettabile]({{url.acceptable_use}}), né cercare di eludere i sistemi di sicurezza (inclusi gli attacchi di prompt injection, jailbreaking o estrazione contro i nostri sistemi o quelli altrui).
- I fornitori che utilizziamo possono applicare le proprie politiche di utilizzo; possiamo limitare le funzionalità di conseguenza. Non utilizziamo i Suoi Contenuti per addestrare modelli di uso generale, salvo Sua adesione (si veda l'[Informativa sulla privacy]({{url.privacy}})).
{{else}}
I Servizi non includono attualmente funzionalità assistite dall'IA. Se ne aggiungiamo, aggiorneremo le presenti Condizioni e daremo comunicazione ai sensi della sezione 16; si applicheranno le relative regole (accuratezza, revisione umana, dichiarazione, divieto di usi vietati).
{{/if}}

## 9. Commissioni e pagamento {#fees}

{{#if feature.payments}}
- **Prezzi e imposte.** I prezzi sono indicati al momento dell'acquisto e non includono l'IVA, le imposte sulle vendite e imposte simili, salvo diversa indicazione; Lei paga le imposte applicabili. Per i consumatori i prezzi includono le imposte richieste dalla legge.
{{#if feature.merchant_of_record}}- **Merchant of record.** Gli ordini sono elaborati dal nostro fornitore di servizi di pagamento{{#if payments.provider}} {{payments.provider}}{{/if}}, che agisce come rivenditore e merchant of record, incassa il pagamento e le imposte ed emette la ricevuta. Le sue condizioni di checkout si applicano all'acquisto in aggiunta alle presenti Condizioni; pagamenti, fatturazione, imposte e rimborsi sono gestiti ai sensi di tali condizioni e della nostra [Politica di rimborso e annullamento]({{url.refunds}}).
{{/if}}- **Pagamento.** Lei ci autorizza, e autorizza il nostro processore di pagamento, ad addebitare il metodo di pagamento che ci fornisce per tutti gli importi dovuti, inclusi i rinnovi e gli addebiti basati sull'utilizzo. Lei dichiara di essere autorizzato a utilizzare tale metodo di pagamento e deve mantenerne aggiornati i dati.
{{#if feature.subscriptions}}- **Prima del pagamento.** Accanto al pulsante di pagamento mostriamo il prezzo, il periodo di fatturazione, il fatto che l'abbonamento si rinnova automaticamente, cosa accade al termine di un eventuale periodo di prova, come disdire, e i link alle presenti Condizioni, alla [Politica di rimborso e annullamento]({{url.refunds}}) e all'[Informativa sulla privacy]({{url.privacy}}). Il pagamento Le viene addebitato solo dopo che ha spuntato la casella o premuto il pulsante che conferma di averli visionati. Conserviamo una registrazione di tale consenso e Le inviamo una conferma che può conservare.
- **Abbonamenti.** Salvo diversa indicazione al momento del checkout, gli abbonamenti si rinnovano automaticamente per periodi di pari durata fino a disdetta. Può disdire in qualsiasi momento dal Suo account o via e-mail prima della data di rinnovo; la disdetta ha effetto al termine del periodo pagato e non prevediamo rimborsi pro rata. La informiamo in anticipo, come richiesto dalla legge, prima che una prova si converta in abbonamento a pagamento o che cambi il prezzo di rinnovo.
- **Prove e promozioni.** Una prova o un'offerta promozionale è riservata a una persona o impresa. Possiamo ritirare o rifiutare un'offerta quando sospettiamo un abuso (account multipli, identità false, limiti aggirati).
{{/if}}{{#if feature.credits}}- **Crediti.** I crediti prepagati, i token o la valuta in-app costituiscono una licenza limitata a utilizzare i Servizi, non denaro; non hanno valore in contanti, non sono trasferibili, non possono essere riscattati in denaro né scambiati, e possono scadere come indicato al momento dell'acquisto. I crediti non utilizzati decadono quando un account viene chiuso per violazione; negli altri casi i rimborsi seguono le regole sotto indicate e la legge applicabile.{{#if feature.game}} Gli oggetti virtuali nei giochi sono disciplinati dalle [Regole di gioco e politica sugli oggetti virtuali]({{url.game_rules}}).{{/if}}
{{/if}}- **Modifiche dei prezzi.** Possiamo modificare i prezzi per il futuro con un preavviso di almeno {{policy.notice_days}} giorni. Se non è d'accordo, disdica prima che la modifica abbia effetto.
- **Pagamento tardivo o non riuscito.** Possiamo ritentare l'addebito, sospendere o declassare l'account, e addebitare costi di recupero ragionevoli e interessi legali sulle fatture scadute dei clienti business. I Servizi vengono ripristinati una volta pagati gli arretrati.
- **Storni e frodi.** L'apertura di uno storno o di una contestazione di pagamento senza aver prima contattato noi all'indirizzo [{{company.email}}](mailto:{{company.email}}), oppure pagamenti fraudolenti o non autorizzati, possono comportare la sospensione immediata, la perdita dell'accesso ai contenuti e il recupero dell'importo contestato e delle nostre commissioni di elaborazione.
- **Rimborsi.** Salvo che la legge Le riconosca un diritto o che noi indichiamo diversamente per iscritto, le commissioni pagate non sono rimborsabili, inclusi i periodi parziali e le funzionalità non utilizzate, e non è dovuto alcun rimborso se sospendiamo o risolviamo il Suo account per violazione.
{{#if feature.consumers}}- **Disdetta, recesso e rimborsi.** I diritti di recesso dei consumatori, le modalità di disdetta e i casi di rimborso sono indicati nella [Politica di rimborso e annullamento]({{url.refunds}}), che fa parte delle presenti Condizioni. Per i contenuti o servizi digitali forniti immediatamente su Sua richiesta, chiediamo il Suo consenso espresso e la Sua presa d'atto al momento del checkout, come richiesto dalla legge.
{{/if}}
{{else}}
I Servizi sono attualmente offerti gratuitamente. In futuro potremmo introdurre funzionalità a pagamento; saranno presentate in modo chiaro e non Le verrà mai addebitato alcun importo senza il Suo consenso.
{{/if}}

## 10. API, integrazioni e servizi di terzi {#integrations}

{{#if feature.api}}
L'accesso alle API è soggetto alle presenti Condizioni, alla documentazione e agli eventuali limiti di frequenza. Lei deve proteggere le Sue chiavi API e le credenziali, è responsabile di tutte le chiamate effettuate con esse, e non deve condividerle, incorporarle in codice pubblico o utilizzarle per rivendere l'accesso. Possiamo ruotare, limitare o revocare le chiavi e modificare o ritirare le versioni dell'API con un preavviso ragionevole (più breve ove necessario per motivi di sicurezza o legali). Non utilizzi l'API in modo da compromettere i Servizi per altri o da tentare di eludere i limiti, ad esempio usando molte chiavi o account.

{{/if}}
I Servizi possono funzionare con prodotti, siti web e servizi di terzi che non controlliamo. Il loro utilizzo è regolato dalle rispettive condizioni. Non siamo responsabili di tali prodotti e servizi, della loro disponibilità o delle loro modifiche, né del modo in cui utilizzano i dati che Lei sceglie di condividere con loro. Possiamo interrompere in qualsiasi momento il supporto a un'integrazione.

## 11. Funzionalità beta e gratuite {#beta}

Le funzionalità etichettate come alpha, beta, anteprima, sperimentali o simili, e i piani gratuiti, sono forniti "così come sono", possono essere modificati o ritirati in qualsiasi momento, possono essere meno affidabili e sono esclusi da qualsiasi impegno sul livello di servizio. Non faccia affidamento su di essi per scopi critici.

## 12. Proprietà intellettuale {#ip}

I Servizi, inclusi software, design, testi, grafica, dati, marchi, loghi e documentazione, sono di nostra proprietà o dei nostri concedenti di licenza e sono tutelati dal diritto d'autore, dalla normativa sui marchi e da altre leggi. Nulla nelle presenti Condizioni Le trasferisce alcuna titolarità, e non Le viene concesso alcun diritto di utilizzare i nostri nomi o marchi, se non nella misura necessaria a utilizzare i Servizi.

**Feedback.** Se invia suggerimenti o idee, ci concede una licenza perpetua, irrevocabile, mondiale, esente da royalty e sublicenziabile per utilizzarli senza restrizioni né attribuzione, nella misura consentita dalla legge. Non abbiamo alcun obbligo di dare seguito ai feedback.

Avvisi di copyright e contenuti illegali: si veda [Avvisi su copyright e contenuti illegali]({{url.copyright}}).

## 13. Riservatezza (clienti business) {#confidentiality}

Ciascuna parte manterrà riservate le informazioni commerciali e tecniche non pubbliche dell'altra, le utilizzerà solo per adempiere le presenti Condizioni o esercitare i diritti da esse previsti, e le proteggerà con ragionevole diligenza, salvo che si tratti di informazioni pubbliche senza colpa del destinatario, già note, sviluppate autonomamente o che debbano essere divulgate per legge (previa comunicazione, ove lecito). L'obbligo dura tre anni dopo la cessazione delle presenti Condizioni e a tempo indeterminato per i segreti commerciali.

## 14. Privacy e protezione dei dati {#privacy}

La nostra [Informativa sulla privacy]({{url.privacy}}) spiega come trattiamo i dati personali. {{#if feature.processor_role}}Ove trattiamo dati personali per Suo conto in qualità di responsabile del trattamento, si applica l'[Addendum sul trattamento dei dati]({{url.dpa}}), che costituisce parte integrante delle presenti Condizioni.{{/if}} Lei deve rispettare la normativa in materia di protezione dei dati nell'utilizzo dei Servizi e non deve inviare dati di categorie particolari o altri dati soggetti a regolamentazione (dati sulla salute, numeri di carte di pagamento, identificativi governativi, dati dei minori), salvo che una funzionalità o un accordo lo consenta espressamente.

## 15. Disponibilità, assistenza e modifiche {#availability}

Puntiamo a un'elevata disponibilità, ma non garantiamo un funzionamento ininterrotto o privo di errori. Possiamo effettuare interventi di manutenzione (previa comunicazione ove ragionevolmente possibile) e possiamo modificare, aggiungere o rimuovere funzionalità. Se riduciamo in modo sostanziale una funzionalità a pagamento durante un periodo prepagato, Le daremo un preavviso di almeno {{policy.notice_days}} giorni e, qualora Lei non possa ragionevolmente proseguire, un rimborso pro rata del periodo prepagato interessato. L'assistenza è fornita all'indirizzo [{{company.email}}](mailto:{{company.email}}) secondo il criterio dei ragionevoli sforzi, salvo che il Suo piano includa un accordo sul livello di servizio.

## 16. Modifiche alle presenti Condizioni {#changes}

Possiamo aggiornare le presenti Condizioni per motivi legali, di sicurezza, di prodotto o commerciali. Per le modifiche sostanziali daremo un preavviso di almeno **{{policy.notice_days}} giorni** via e-mail o nei Servizi, prima che si applichino a Lei. Se non è d'accordo, può smettere di utilizzare i Servizi e chiudere il Suo account prima della data di efficacia e (per i piani a pagamento) chiedere un rimborso pro rata delle commissioni prepagate per il periodo successivo a tale data. Continuare a utilizzare i Servizi dopo la data di efficacia significa accettare le Condizioni aggiornate. Le modifiche richieste dalla legge, o che non riducono nulla e non aggiungono alcun obbligo, possono entrare in vigore immediatamente. Le modifiche non si applicano alle controversie già pendenti alla data della modifica.

## 17. Sospensione e risoluzione {#termination}

**Da parte Sua.** Può smettere di utilizzare i Servizi e chiudere il Suo account in qualsiasi momento dalle impostazioni o via e-mail. Le commissioni pagate non sono rimborsate, salvo che la sezione 9 o la legge lo prevedano.

**Da parte nostra, per comodità.** Possiamo cessare i piani a pagamento con un preavviso di {{policy.notice_days}} giorni (con rimborso pro rata delle commissioni prepagate) e possiamo interrompere i servizi gratuiti con un preavviso ragionevole.

**Da parte nostra, per giusta causa.** Possiamo, con o senza preavviso e nella misura consentita dalla legge, limitare, sospendere o risolvere il Suo accesso, rimuovere contenuti o chiudere immediatamente il Suo account se:

- Lei viola le presenti Condizioni o la Politica di uso accettabile (la risposta è proporzionata alla gravità, alla reiterazione e al rischio);
- riteniamo ragionevolmente che il Suo utilizzo comporti un rischio per la sicurezza, sul piano legale, normativo, reputazionale o finanziario, per noi, per altri utenti o per terzi;
- Lei non paga alla scadenza;
- un tribunale, un'autorità o la legge applicabile lo richiedono; oppure
- il Suo account risulta compromesso, fraudolento o abbandonato.

Ove sia pratico e lecito Le comunicheremo il motivo e Le daremo la possibilità di rispondere o di risolvere prima il problema; ove la legge lo richieda (ad esempio il Digital Services Act, DSA), Le forniremo una motivazione e un modo per presentare ricorso. Se La sospendiamo o La risolviamo per violazione, nessun importo viene rimborsato e gli importi dovuti restano esigibili.

**Effetti.** Alla risoluzione la Sua licenza cessa; Lei deve smettere di utilizzare i Servizi; e, su richiesta entro **{{policy.retention_account_days}} giorni**, renderemo disponibili per l'esportazione i Suoi Contenuti, ove tecnicamente fattibile (non ove ciò sia illecito o possa arrecare danno ad altri). Trascorso tale periodo li eliminiamo come descritto nell'[Informativa sulla privacy]({{url.privacy}}). Restano in vigore le clausole che per loro natura devono sopravvivere, incluse le sezioni 4, 6 (limiti della licenza e Sue dichiarazioni), 9 (importi dovuti), 12, 13, 17-24 e 26.

## 18. Garanzie ed esclusione di responsabilità {#disclaimer}

Forniamo i Servizi con ragionevole competenza e diligenza. **Per il resto, nella misura massima consentita dalla legge, i Servizi sono forniti "così come sono" e "come disponibili", ed escludiamo ogni altra garanzia, espressa o implicita,** incluse la commerciabilità, l'idoneità a uno scopo particolare, la non violazione, l'accuratezza, la disponibilità, e che i Servizi siano sicuri, privi di errori, ininterrotti o privi di componenti dannosi. Non garantiamo gli output, i contenuti di terzi né i risultati che Lei ottiene. I Servizi non sono progettati per l'uso in ambienti ad alto rischio in cui un guasto potrebbe causare morte, lesioni personali o gravi danni (ad esempio dispositivi medici, aviazione, impianti nucleari o sistemi di supporto vitale), e Lei non può utilizzarli in tal modo.

{{#if feature.consumers}}Se Lei è un consumatore, conserva i diritti legali che non possono essere esclusi, come le garanzie e i rimedi legali per i contenuti e i servizi digitali previsti dal diritto dell'UE e del Regno Unito, e le garanzie per i consumatori previste dall'Australian Consumer Law e da leggi analoghe altrove.{{/if}}

## 19. Limitazione di responsabilità {#liability}

Nulla nelle presenti Condizioni esclude o limita una responsabilità che non può essere esclusa o limitata per legge, inclusa quella per morte o lesioni personali, frode o dolo, colpa grave o (per i consumatori) rimedi legali inderogabili.

Fatto salvo quanto sopra, **nella misura massima consentita dalla legge** e per i clienti business:

1. non siamo responsabili per danni indiretti, incidentali, speciali, consequenziali, esemplari o punitivi, né per perdite di profitto, ricavi, affari, avviamento, risparmi previsti o dati, derivanti da o connessi ai Servizi o alle presenti Condizioni, anche se siamo stati avvisati della possibilità di tali danni; e
2. la nostra responsabilità complessiva per tutte le richieste è limitata al maggiore tra (a) le commissioni che Lei ci ha pagato per i Servizi nei **{{policy.liability_cap_months}} mesi** precedenti all'evento che per primo dà origine alla richiesta e (b) 100 EUR.

{{#if feature.consumers}}Per i consumatori, siamo responsabili per le perdite o i danni prevedibili causati dalla nostra violazione o negligenza, ma non per le perdite non prevedibili, né per le perdite di natura commerciale.{{/if}}

Non siamo responsabili per inadempimenti o ritardi causati da eventi al di fuori del nostro ragionevole controllo (sezione 24). I servizi gratuiti sono forniti senza responsabilità oltre quanto richiesto dalla legge. Questi limiti si applicano comunque sorga la responsabilità (contratto, illecito, inclusa la negligenza, o altro) e anche se un rimedio non raggiunge il suo scopo essenziale.

## 20. Manleva {#indemnity}

Se è un cliente business, Lei difenderà, manleverà e terrà indenne {{company.name}}, le sue affiliate, i dirigenti, i dipendenti e gli agenti da richieste, danni, perdite, sanzioni e spese (incluse le ragionevoli spese legali) derivanti da (a) i Suoi Contenuti o i Suoi dati, (b) la violazione delle presenti Condizioni o della legge da parte Sua o dei Suoi Utenti finali, (c) un uso improprio dei Servizi da parte Sua, oppure (d) una controversia tra Lei e un terzo. La informeremo tempestivamente di qualsiasi richiesta, Le lasceremo la gestione della difesa (potremo partecipare a nostre spese), e Lei non potrà transigere una richiesta che ammetta una nostra colpa senza il nostro consenso. {{#if feature.consumers}}I consumatori sono responsabili solo per la perdita che causano con la propria violazione, come previsto dalla legge.{{/if}}

## 21. Rimedi per abuso {#remedies}

In aggiunta agli altri diritti, e nella misura consentita dalla legge:

- **Provvedimenti inibitori.** Lei riconosce che la violazione delle sezioni 4, 5 o 13 può causare un danno che il risarcimento non può riparare integralmente, e possiamo chiedere provvedimenti inibitori o altri rimedi equitativi senza dover provare un danno effettivo né prestare cauzione.
- **Costi dell'abuso.** Se il Suo abuso ci causa costi (infrastrutture aggiuntive, gestione di incidenti, indagini, storni, sanzioni normative o richieste di terzi), Lei rimborserà i costi ragionevoli e documentati.
- **Prove e collaborazione.** Possiamo conservare log e contenuti relativi a presunti abusi e comunicarli alle parti interessate, alle piattaforme, alle forze dell'ordine o alle autorità di regolamentazione ove la legge lo consenta. Lei collaborerà ragionevolmente alle nostre indagini.
- **Segnalazioni.** Possiamo segnalare attività illecite (inclusi materiale pedopornografico, frodi, minacce, malware e attacchi ai sistemi) alle autorità e alle parti interessate, e lo faremo ove la legge lo richieda.
- **Trattenuta.** Possiamo trattenere, bloccare o compensare gli importi che Le sono dovuti (ad esempio pagamenti) con gli importi che Lei ci deve o che derivano da abusi, nel rispetto della legge.

## 22. Esportazioni, sanzioni e anticorruzione {#export}

Non può utilizzare, esportare o riesportare i Servizi in violazione delle leggi applicabili in materia di controllo delle esportazioni e di sanzioni, incluse quelle dell'UE, degli Stati Uniti, del Regno Unito e dell'ONU, né a favore o a beneficio di persone o Paesi soggetti a sanzioni complessive. Lei conferma che Lei e i Suoi utenti non figurano in alcuna lista di sanzioni o di soggetti sottoposti a restrizioni. Non offrirà né darà nulla di valore per influenzare indebitamente qualcuno in relazione ai Servizi.

## 23. Legge applicabile e controversie {#law}

Le presenti Condizioni e qualsiasi controversia o pretesa derivante da esse, o connessa ad esse o ai Servizi (incluse le controversie extracontrattuali), sono regolate dalle leggi di **{{law.governing}}**, senza considerare le norme di conflitto di leggi, ed escludendo la Convenzione delle Nazioni Unite sui contratti di vendita internazionale di merci.

**Risoluzione informale preliminare.** Prima di avviare un procedimento formale, scriva a [{{company.legal_email}}](mailto:{{company.legal_email}}) descrivendo la controversia, e lasci che cerchiamo di risolverla in buona fede per almeno 30 giorni.

**Foro competente.** Salvo che la legge imperativa disponga diversamente, il foro esclusivo è **{{law.venue}}**. Ciascuna parte può chiedere con urgenza provvedimenti inibitori davanti a qualsiasi tribunale competente.

{{#if feature.consumers}}**Consumatori.** Se Lei è un consumatore, conserva anche il diritto di agire davanti ai tribunali del Paese di residenza e di far valere la normativa imperativa a tutela dei consumatori ivi vigente, e nulla in questa sezione lo rimuove. {{#if consumer_dispute}}Partecipiamo a procedure di risoluzione extragiudiziale delle controversie davanti a {{consumer_dispute}}.{{/if}}
{{/if}}
**Termine di decadenza (clienti business).** Nella misura consentita dalla legge, ogni richiesta deve essere proposta entro {{policy.claim_months}} mesi dal sorgere della causa, altrimenti decade.

**Nessuna azione collettiva (clienti business, ove consentito).** Le richieste possono essere proposte solo su base individuale, non come parte di un'azione collettiva, di classe o rappresentativa.

## 24. Forza maggiore {#force-majeure}

Nessuna parte è responsabile per ritardi o inadempimenti causati da eventi al di fuori del suo ragionevole controllo, inclusi calamità naturali, guerre, terrorismo, disordini civili, pandemie, provvedimenti governativi, guasti di energia, internet o telecomunicazioni, guasti dei fornitori di infrastrutture cloud o di altri fornitori terzi, attacchi informatici nonostante misure di sicurezza ragionevoli, controversie di lavoro (diverse da quelle del personale della parte stessa) o carenze di forniture. Gli obblighi di pagamento per servizi già erogati non sono esonerati. Se un evento di questo tipo dura più di 60 giorni, ciascuna parte può risolvere i servizi interessati.

## 25. Comunicazioni elettroniche e avvisi {#notices}

Lei acconsente a ricevere avvisi e accordi per via elettronica. Possiamo inviare comunicazioni via e-mail all'indirizzo associato al Suo account, nei Servizi o pubblicandole sul nostro sito web. Gli avvisi indirizzati a noi devono essere inviati a [{{company.legal_email}}](mailto:{{company.legal_email}}) e a {{company.address}}. Un avviso si considera ricevuto 24 ore dopo l'invio di un'e-mail senza mancato recapito, e quando è pubblicato o visualizzato nei Servizi.

## 26. Disposizioni generali {#general}

- **Intero accordo.** Le presenti Condizioni e i documenti a cui fanno riferimento costituiscono l'intero accordo sul loro oggetto e sostituiscono ogni precedente intesa. Lei non ha fatto affidamento su alcuna dichiarazione non riportata in essi.
- **Separabilità.** Se una clausola non è applicabile, è limitata nella misura minima necessaria, oppure sostituita da una clausola applicabile il più vicina possibile al suo scopo; il resto resta in vigore.
- **Nessuna rinuncia.** Il mancato esercizio di un diritto non costituisce rinuncia allo stesso.
- **Cessione.** Lei non può cedere né trasferire i Suoi diritti od obblighi senza il nostro consenso scritto. Possiamo cedere le presenti Condizioni a un'affiliata o a un successore della nostra attività, e Le daremo comunicazione.
- **Rapporto.** Le parti sono appaltatori indipendenti. Nulla crea un partenariato, un mandato, un rapporto di lavoro subordinato o una joint venture.
- **Terzi.** Nessun altro soggetto ha diritto di far valere le presenti Condizioni, salvo le nostre affiliate, i dirigenti e gli agenti ai sensi delle sezioni 19 e 20.
- **Lingua.** Le traduzioni sono fornite per comodità; in caso di differenze prevale la versione inglese, salvo che la legge imperativa richieda diversamente.
- **Interpretazione.** I titoli sono indicati per comodità. "Includendo" significa "includendo, senza limitazioni".
- **Pubblicità.** Possiamo indicarLa come cliente con il Suo logo, salvo che Lei non vi si opponga via e-mail; i consumatori non vengono mai indicati.

## 27. Contatti {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · N. di registrazione {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Partita IVA / codice fiscale {{company.tax_id}}{{/if}}
E-mail [{{company.email}}](mailto:{{company.email}}) · Legale [{{company.legal_email}}](mailto:{{company.legal_email}}) · Assistenza [{{company.email}}](mailto:{{company.email}}) · Vedi anche le nostre [Note legali]({{url.impressum}}).
