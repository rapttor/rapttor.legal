---
doc: security
title: Sicurezza e divulgazione delle vulnerabilità
version: 1.0.1
updated: 2026-10-23
lang: it
translation_of: 1.0.1
status: draft
summary: Come segnalare le vulnerabilità di sicurezza di {{product.name}} e le regole di porto sicuro per la ricerca in buona fede.
---

# Sicurezza e divulgazione delle vulnerabilità

*Versione {{doc.version}}, ultimo aggiornamento {{doc.updated}}.*

Prendiamo sul serio la sicurezza e accogliamo con favore le segnalazioni in buona fede da parte dei ricercatori. Contatto: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Ambito {#scope}

Sono nell'ambito: {{product.name}}, {{company.website}} e i nostri sottodomini, applicazioni e API che gestiamo direttamente. **Sono esclusi:** servizi e infrastrutture di terzi, account e dati di altri clienti, ingegneria sociale o phishing ai danni del nostro personale o dei nostri utenti, attacchi fisici, attacchi di negazione del servizio e test volumetrici, spam, e i risultati che richiedono un'interazione dell'utente non realistica o software non aggiornato.

## 2. Regole per i test {#rules}

Se esegue test in buona fede, deve:

- testare esclusivamente con **i Suoi account e i Suoi dati**; si fermi e segnali immediatamente la situazione se accede ai dati di un'altra persona, e non acceda, scarichi, modifichi o conservi più di quanto necessario per dimostrare il problema;
- non degradare i Servizi, non eseguire scansioni automatizzate ad alto volume, né usare exploit per mantenere l'accesso, spostarsi lateralmente o esfiltrare dati;
- non divulgare il problema ad altri né pubblicarne i dettagli finché non abbiamo avuto un tempo ragionevole per correggerlo (**90 giorni** dalla Sua segnalazione, o anche prima se concordiamo diversamente);
- rispettare la legge e le presenti regole.

## 3. Porto sicuro {#safe-harbour}

Se si attiene alla presente politica, considereremo la Sua ricerca come autorizzata, non intenteremo né sosterremo azioni legali o la risoluzione dell'account per tale motivo, e collaboreremo con Lei per comprendere e risolvere il problema. Ciò non autorizza a violare la legge ai danni di terzi, e un terzo può comunque agire autonomamente. In caso di dubbio, chieda prima.

## 4. Cosa inviare {#report}

Una descrizione chiara della vulnerabilità, l'URL o il componente interessato, i passaggi per riprodurla o una prova di concetto, l'impatto, i Suoi recapiti e se desidera essere citato. Se possibile, cifri il materiale sensibile e ci chieda la nostra chiave.

## 5. Cosa succede dopo {#process}

Confermiamo la ricezione delle segnalazioni, le valutiamo, La teniamo informato, correggiamo in base alla gravità e, se lo desidera, La citiamo. Al momento non gestiamo un programma di bug bounty a pagamento e non possiamo promettere ricompense, anche se potremmo offrire ringraziamenti o gadget promozionali.

## 6. Utenti: protegga il Suo account {#users}

Utilizzi una password unica e robusta e l'autenticazione a più fattori ove offerta, mantenga aggiornato il software, diffidi del phishing e segnali tempestivamente un sospetto di compromissione a [{{company.email}}](mailto:{{company.email}}). Abusare di una vulnerabilità o testare al di fuori della presente politica viola la [Politica di uso accettabile]({{url.acceptable_use}}).
