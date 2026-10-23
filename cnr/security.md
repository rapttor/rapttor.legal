---
doc: security
title: Bezbjednost i prijavljivanje ranjivosti
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
summary: Kako prijaviti bezbjednosne ranjivosti u {{product.name}} i pravila pravne zaštite (safe harbour) za istraživanja sprovedena u dobroj vjeri.
---

# Bezbjednost i prijavljivanje ranjivosti

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Ozbiljno shvatamo bezbjednost i dobrodošli su nam izvještaji istraživača koji postupaju u dobroj vjeri. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Obuhvat {#scope}

U obuhvatu su: {{product.name}}, {{company.website}} i naši sopstveni poddomeni, aplikacije i API-ji kojima upravljamo. **Van obuhvata:** usluge i infrastruktura trećih lica, nalozi i podaci drugih korisnika, socijalni inženjering ili phishing naših zaposlenih ili korisnika, fizički napadi, testiranje uskraćivanja usluge (denial-of-service) i testiranje zapremine, spam, kao i nalazi koji zahtijevaju nerealnu interakciju korisnika ili zastarjeli softver.

## 2. Pravila za testiranje {#rules}

Ako testirate u dobroj vjeri, morate:

- testirati isključivo na **svojim nalozima i podacima**; odmah prekinite i prijavite ako dođete do tuđih podataka, te ne pristupajte, ne preuzimajte, ne mijenjajte niti zadržavajte više nego što je potrebno da biste pokazali problem;
- ne narušavati Usluge, ne pokretati automatizovane skenove velikog obima i ne koristiti eksploate radi zadržavanja pristupa, širenja na druge sisteme ili iznošenja podataka;
- ne otkrivati problem drugima niti objavljivati detalje dok ne prođe razumno vrijeme za otklanjanje problema (**90 dana** od vašeg izvještaja ili kraće, ako se dogovorimo);
- poštovati zakon i ova pravila.

## 3. Pravna zaštita (safe harbour) {#safe-harbour}

Ako postupate u skladu sa ovom politikom, smatraćemo vaše istraživanje ovlašćenim, nećemo pokretati niti podržavati pravne radnje ili ukidanje naloga zbog njega i sarađivaćemo s vama na razumijevanju i otklanjanju problema. Ovo ne ovlašćuje na kršenje zakona prema trećim licima, a treće lice i dalje može samostalno da postupi. U slučaju sumnje, prvo se obratite nama.

## 4. Šta da pošaljete {#report}

Jasan opis ranjivosti, pogođeni URL ili komponenta, koraci za reprodukciju ili dokaz koncepta, uticaj, vaši kontakt podaci i to da li želite da budete navedeni. Ako možete, šifrujte osjetljiv materijal; zatražite naš ključ.

## 5. Šta slijedi {#process}

Potvrđujemo prijem u roku od **3 radna dana**, procjenjujemo prijavu, obavještavamo vas o toku, otklanjamo problem prema ozbiljnosti i, ako želite, pripisujemo vam zasluge. Trenutno ne vodimo plaćeni program nagrađivanja (bounty) i ne možemo garantovati nagrade, iako vam možemo ponuditi zahvalnost ili promotivne poklone.

## 6. Korisnici: zaštitite svoj nalog {#users}

Koristite jedinstvenu i jaku lozinku te višefaktorsku autentifikaciju gdje je ponuđena, držite softver ažurnim, budite oprezni prema phishing pokušajima i odmah prijavite sumnju na kompromitovanje na [{{company.email}}](mailto:{{company.email}}). Zloupotreba ranjivosti ili testiranje van ove politike krši [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}).
