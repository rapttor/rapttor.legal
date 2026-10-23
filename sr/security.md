---
doc: security
title: Bezbednost i prijavljivanje ranjivosti
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
summary: Kako prijaviti bezbednosne ranjivosti u {{product.name}} i pravila pravne zaštite (safe harbour) za istraživanja sprovedena u dobroj veri.
---

# Bezbednost i prijavljivanje ranjivosti

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

Ozbiljno shvatamo bezbednost i dobrodošli su nam izveštaji istraživača koji postupaju u dobroj veri. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Obuhvat {#scope}

U obuhvatu: {{product.name}}, {{company.website}} i naši sopstveni poddomeni, aplikacije i API-ji koje mi upravljamo. **Van obuhvata:** usluge i infrastruktura trećih lica, nalozi i podaci drugih korisnika, socijalni inženjering ili phishing naših zaposlenih ili korisnika, fizički napadi, testiranje uskraćivanja usluge (denial-of-service) i testiranje zapremine, spam, kao i nalazi koji zahtevaju nerealno aktivno učešće korisnika ili zastareli softver.

## 2. Pravila za testiranje {#rules}

Ako testirate u dobroj veri, morate:

- testirati samo na **Vašim sopstvenim nalozima i podacima**; odmah prekinuti i prijaviti ako dođete do tuđih podataka, i ne pristupati, ne preuzimati, ne menjati i ne zadržavati više nego što je neophodno da biste prikazali problem;
- ne degradirati Usluge, ne pokretati automatizovana skeniranja velikim obimom, niti koristiti eksploite da biste se zadržali, prebacili na druge sisteme ili izvukli podatke;
- ne otkrivati problem drugima niti objavljivati detalje dok im ne damo razumno vreme za popravku (**90 dana** od Vašeg izveštaja, ili ranije ako se tako dogovorimo);
- poštovati zakon i ova pravila.

## 3. Pravna zaštita (safe harbour) {#safe-harbour}

Ako postupate u skladu sa ovom politikom, Vaše istraživanje ćemo smatrati ovlašćenim, nećemo pokretati niti podržavati pravne postupke ili raskid naloga zbog njega i radićemo sa Vama na razumevanju i rešavanju problema. Ovo ne ovlašćuje kršenje zakona prema trećim licima, a treće lice može i dalje da deluje samostalno. Ako ste u nedoumici, prvo pitajte.

## 4. Šta poslati {#report}

Jasan opis ranjivosti, pogođeni URL ili komponentu, korake za reprodukciju ili dokaz koncepta, uticaj, Vaše kontakt podatke i da li želite da budete navedeni. Ako možete, šifrujte osetljiv materijal; zatražite naš ključ.

## 5. Šta sledi {#process}

Potvrđujemo prijem u roku od **3 radna dana**, procenjujemo prijavu, obaveštavamo Vas, popravljamo u skladu sa ozbiljnošću i, ako to želite, navodimo Vas kao prijavioca. Trenutno ne vodimo program plaćenih nagrada za otkrivanje grešaka i ne možemo obećati nagrade, mada Vam možemo ponuditi zahvalnicu ili sitne promotivne predmete (swag).

## 6. Korisnici: zaštitite Vaš nalog {#users}

Koristite jedinstvenu jaku lozinku i višefaktorsku autentifikaciju tamo gde je ponuđena, držite softver ažurnim, budite oprezni prema phishing-u i odmah prijavite sumnju na kompromitovanje na [{{company.email}}](mailto:{{company.email}}). Zloupotreba ranjivosti ili testiranje van ove politike krši [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}).
