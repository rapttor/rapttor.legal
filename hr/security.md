---
doc: security
title: Sigurnost i prijava ranjivosti
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
summary: Kako prijaviti sigurnosne ranjivosti u {{product.name}} i pravila sigurne luke za istraživanja provedena u dobroj vjeri.
---

# Sigurnost i prijava ranjivosti

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Sigurnost shvaćamo ozbiljno i dobrodošla su nam izvješća istraživača provedena u dobroj vjeri. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Opseg {#scope}

Obuhvaćeni su: {{product.name}}, {{company.website}} i naše vlastite poddomene, aplikacije i API-ji koje mi upravljamo. **Izvan opsega:** usluge i infrastruktura trećih strana, računi i podaci drugih korisnika, socijalni inženjering ili phishing naših zaposlenika ili korisnika, fizički napadi, uskraćivanje usluge (DoS) i volumetrijsko testiranje, neželjena pošta (spam) te nalazi koji zahtijevaju nerealističnu interakciju korisnika ili zastarjeli softver.

## 2. Pravila testiranja {#rules}

Ako testirate u dobroj vjeri, morate:

- testirati samo na **vlastitim računima i podacima**; odmah prekinuti i prijaviti ako dođete do tuđih podataka, te ne pristupati, ne preuzimati, ne mijenjati niti zadržavati više nego što je potrebno da biste pokazali problem;
- ne narušavati Usluge, ne pokretati automatizirana skeniranja velikim obujmom niti koristiti exploite za održavanje pristupa, kretanje kroz sustav ili izvlačenje podataka;
- ne otkrivati problem drugima niti objavljivati pojedinosti dok nam ne damo razumno vrijeme za popravak (**90 dana** od vašeg izvješća ili kraće, ako se dogovorimo);
- poštovati zakon i ova pravila.

## 3. Sigurna luka {#safe-harbour}

Ako se pridržavate ove politike, smatrat ćemo vaše istraživanje ovlaštenim, nećemo pokretati ni podupirati pravni postupak ili ukidanje korisničkog računa zbog njega te ćemo surađivati s vama kako bismo razumjeli i riješili problem. Ovo ne daje ovlast za kršenje zakona u odnosu na treće strane, a treća strana i dalje može djelovati samostalno. U slučaju sumnje, najprije nas pitajte.

## 4. Što poslati {#report}

Jasan opis ranjivosti, pogođeni URL ili komponentu, korake za reprodukciju ili dokaz koncepta (proof of concept), utjecaj, vaše kontaktne podatke te želite li da se navede vaša zasluga. Ako možete, šifrirajte osjetljiv materijal; zatražite naš ključ.

## 5. Što slijedi {#process}

Potvrđujemo primitak u roku od **3 radna dana**, procjenjujemo prijavu, držimo vas obaviještenima, popravljamo prema ozbiljnosti i, ako želite, navodimo vas u zaslugama. Trenutno ne vodimo program nagrada za otkrivanje ranjivosti (bounty) i ne možemo obećati nagrade, iako vam možemo ponuditi zahvalu ili promotivne predmete (swag).

## 6. Korisnici: zaštitite svoj račun {#users}

Koristite jedinstvenu i jaku lozinku te višefaktorsku autentifikaciju tamo gdje je dostupna, održavajte softver ažurnim, budite oprezni prema phishingu i odmah prijavite sumnju na kompromitiranje na [{{company.email}}](mailto:{{company.email}}). Zlouporaba ranjivosti ili testiranje izvan ove politike krši [Pravila prihvatljive uporabe]({{url.acceptable_use}}).
