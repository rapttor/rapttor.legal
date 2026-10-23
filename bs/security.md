---
doc: security
title: Sigurnost i objava ranjivosti
version: 1.0.0
updated: 2026-10-23
lang: bs
translation_of: 1.0.0
status: draft
summary: Kako prijaviti sigurnosne ranjivosti u {{product.name}} i pravila o sigurnoj luci za istraživanja u dobroj vjeri.
---

# Sigurnost i objava ranjivosti

*Verzija {{doc.version}}, posljednje ažuriranje {{doc.updated}}.*

Ozbiljno shvatamo sigurnost i dobrodošli su nam izvještaji istraživača u dobroj vjeri. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Opseg {#scope}

U opsegu su: {{product.name}}, {{company.website}} i naše vlastite poddomene, aplikacije i API-ji koje mi upravljamo. **Izvan opsega:** usluge i infrastruktura trećih strana, nalozi i podaci drugih korisnika, socijalni inženjering ili phishing našeg osoblja ili korisnika, fizički napadi, napadi uskraćivanjem usluge (denial-of-service) i testiranje zapremine, spam, te nalazi koji zahtijevaju nerealnu interakciju korisnika ili zastarjeli softver.

## 2. Pravila za testiranje {#rules}

Ako testirate u dobroj vjeri, morate:

- testirati samo na **vlastitim nalozima i podacima**; odmah zaustaviti testiranje i prijaviti ako dođete do tuđih podataka, te ne pristupati, ne preuzimati, ne mijenjati niti zadržavati više nego što je potrebno da biste pokazali problem;
- ne narušavati Usluge, ne pokretati automatizovane skenove u velikom obimu, niti koristiti eksploite za održavanje pristupa, prebacivanje na druge sisteme (pivot) ili izvlačenje podataka;
- ne otkrivati problem drugima niti objavljivati detalje dok ne dobijemo razumno vrijeme za njegovo rješavanje (**90 dana** od vašeg izvještaja, ili ranije ako se dogovorimo);
- poštovati zakon i ova pravila.

## 3. Sigurna luka {#safe-harbour}

Ako postupate u skladu s ovom politikom, smatraćemo vaše istraživanje ovlašćenim, nećemo pokretati ni podržavati pravne postupke ili raskid naloga zbog njega, te ćemo raditi s vama na razumijevanju i rješavanju problema. Ovo ne ovlašćuje kršenje zakona prema trećim licima, a treća lica mogu i dalje postupati samostalno. Ako niste sigurni, prvo pitajte.

## 4. Šta poslati {#report}

Jasan opis ranjivosti, pogođeni URL ili komponentu, koraci za reprodukciju ili dokaz koncepta (proof of concept), uticaj, vaši kontakt podaci i da li želite priznanje. Ako možete, šifrujte osjetljiv materijal; zatražite naš ključ.

## 5. Šta slijedi {#process}

Potvrdit ćemo prijem u roku od **3 radna dana**, izvršiti trijažu, držati vas obaviještenima, popraviti prema ozbiljnosti i, ako želite, navesti vas kao izvor otkrića. Trenutno ne vodimo program plaćanja nagrada za otkrivanje ranjivosti i ne možemo obećati nagrade, iako vam možemo ponuditi zahvalnost ili promotivne predmete.

## 6. Korisnici: zaštitite svoj nalog {#users}

Koristite jedinstvenu, jaku lozinku i višefaktorsku autentifikaciju tamo gdje je nudimo, držite softver ažurnim, budite oprezni prema phishingu i prijavite sumnju na kompromitovanje odmah na [{{company.email}}](mailto:{{company.email}}). Zloupotreba ranjivosti ili testiranje izvan ove politike predstavlja kršenje [Politike prihvatljive upotrebe]({{url.acceptable_use}}).
