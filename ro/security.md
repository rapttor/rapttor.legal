---
doc: security
title: Securitate și divulgarea vulnerabilităților
version: 1.0.1
updated: 2026-10-23
lang: ro
translation_of: 1.0.1
status: draft
summary: Cum raportați vulnerabilitățile de securitate din {{product.name}} și regulile clauzei de siguranță pentru cercetarea realizată cu bună-credință.
---

# Securitate și divulgarea vulnerabilităților

*Versiunea {{doc.version}}, ultima actualizare {{doc.updated}}.*

Luăm securitatea în serios și salutăm rapoartele realizate cu bună-credință de cercetătorii în domeniu. Contact: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Domeniul de aplicare {#scope}

Intră în domeniu: {{product.name}}, {{company.website}} și subdomeniile noastre, aplicațiile și API-urile pe care le operăm. **Nu intră în domeniu:** serviciile și infrastructura terților, conturile și datele altor clienți, ingineria socială sau phishingul împotriva personalului ori a utilizatorilor noștri, atacurile fizice, atacurile de tip denial-of-service și testele volumetrice, spamul, precum și constatările care presupun o interacțiune nerealistă a utilizatorului sau software învechit.

## 2. Reguli pentru testare {#rules}

Dacă testați cu bună-credință, trebuie să:

- testați doar împotriva **propriilor conturi și date**; opriți-vă și raportați imediat dacă ajungeți la datele altcuiva și nu accesați, nu descărcați, nu modificați și nu păstrați mai mult decât este necesar pentru a demonstra problema;
- nu degradați Serviciile, nu rulați scanări automate în volum mare și nu folosiți exploatări pentru a persista, a pivota sau a extrage date;
- nu divulgați problema altor persoane și nu publicați detalii până când nu ne-a fost acordat un termen rezonabil pentru remediere (**90 de zile** de la raportul dumneavoastră sau mai puțin, dacă ne înțelegem);
- respectați legea și prezentele reguli.

## 3. Clauza de siguranță (safe harbour) {#safe-harbour}

Dacă vă conformați prezentei politici, vom considera cercetarea dumneavoastră autorizată, nu vom iniția și nu vom sprijini acțiuni în justiție sau rezilieri de cont din acest motiv și vom colabora cu dumneavoastră pentru a înțelege și a rezolva problema. Aceasta nu autorizează încălcarea legii împotriva unor terți, iar un terț poate acționa în continuare din proprie inițiativă. Dacă aveți dubii, întrebați mai întâi.

## 4. Ce să trimiteți {#report}

O descriere clară a vulnerabilității, URL-ul sau componenta afectată, pașii de reproducere sau o dovadă a conceptului (proof of concept), impactul, datele dumneavoastră de contact și dacă doriți să fiți menționat. Criptați materialele sensibile dacă puteți și solicitați-ne cheia.

## 5. Ce urmează {#process}

Confirmăm primirea rapoartelor, le analizăm, vă ținem la curent, remediem în funcție de gravitate și, dacă doriți, vă menționăm numele. În prezent nu derulăm un program de recompense plătite și nu putem promite recompense, deși putem oferi mulțumiri sau produse promoționale.

## 6. Utilizatori: protejați-vă contul {#users}

Folosiți o parolă unică și puternică și autentificarea multifactor acolo unde este oferită, mențineți software-ul actualizat, fiți atenți la phishing și raportați de îndată orice suspiciune de compromitere la [{{company.email}}](mailto:{{company.email}}). Abuzul unei vulnerabilități sau testarea în afara acestei politici încalcă [Politica de utilizare acceptabilă]({{url.acceptable_use}}).
