---
doc: refunds
title: Politika povraćaja sredstava i otkazivanja
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
when: feature.payments
summary: Kako da otkažete, kada možete da odustanete ili dobijete povraćaj sredstava i šta se dešava sa kupovinama izvršenim putem prodavnica aplikacija.
---

# Politika povraćaja sredstava i otkazivanja

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

Ova politika je deo [Uslova korišćenja]({{url.terms}}) i odnosi se na kupovine od **{{company.name}}** („mi”) za {{product.name}}. Ništa u njoj ne ograničava prava koja imate prema obaveznom potrošačkom pravu.

## Važno je gde ste kupili {#where}

- **Kupljeno direktno kod nas** (na našem veb-sajtu ili preko naše kase): primenjuje se ova politika.
- **Kupljeno putem prodavnice aplikacija ili platforme** (Apple App Store, Google Play, konzolne ili PC prodavnice): prodavnica je prodavac po ugovoru i **rešava povraćaje, otkazivanja i naplatu**. Zatražite povraćaj od prodavnice po njenom sopstvenom postupku; mi ne možemo da vratimo novac za te uplate, ali ćemo pomoći da se potvrde činjenice i možemo opozvati kupljeni predmet kada prodavnica izvrši povraćaj. Pravila prodavnice i Vaše lokalno pravo određuju Vaša prava u tom pogledu.

{{#if feature.subscriptions}}
## Otkazivanje pretplate {#cancel}

Možete otkazati u bilo kom trenutku u podešavanjima naloga{{#if feature.mobile}} (ili u podešavanjima pretplate u prodavnici, ako ste se pretplatili tamo){{/if}} ili pisanjem na adresu [{{company.email}}](mailto:{{company.email}}). Otkazivanje zaustavlja buduća automatska obnavljanja; pristup i dalje zadržavate do kraja perioda za koji ste platili. Ne vršimo srazmerni obračun za delimične periode, osim ako zakon ili ova politika ne određuju drugačije. Otkazivanje je jednako lako kao i prijava, a pre obnavljanja ili pretvaranja probnog perioda u plaćeni paket Vas podsećamo tamo gde to zahteva zakon.
{{/if}}

## Pravo na odustanak za potrošače (EU, Velika Britanija i slični zakoni) {#withdrawal}

{{#if feature.consumers}}
Ako ste potrošač u EU, Velikoj Britaniji ili drugoj zemlji koja daje pravo na odustanak od ugovora na daljinu, možete odustati od kupovine **u roku od {{policy.refund_days}} dana** od zaključenja ugovora, bez navođenja razloga.

**Digitalni sadržaj i digitalne usluge.** Ako tražite od nas da počnemo da pružamo digitalnu uslugu ili digitalni sadržaj (na primer pristup, kredite ili virtuelne predmete) tokom roka za odustanak i potvrdite da razumete da možete izgubiti pravo na odustanak, tada:
- za **digitalni sadržaj koji nije na fizičkom nosaču**, kada pružanje počne uz Vaš izričit pristanak, gubite pravo na odustanak;
- za **digitalnu uslugu**, i dalje možete odustati u roku, ali plaćate srazmeran iznos za ono što je pruženo do trenutka kada nas obavestite.

Ovaj pristanak tražimo prilikom plaćanja. Ako ga niste dali, važi puno pravo na odustanak.

**Kako odustati.** Pošaljite jasnu izjavu (na primer e-poštom na adresu [{{company.email}}](mailto:{{company.email}})) o odluci da odustanete, sa Vašim imenom, podacima o porudžbini ili nalogu i datumom kupovine. Možete koristiti obrazac ispod, ali to nije obavezno. Potvrdićemo prijem i vratiti novac **u roku od 14 dana** od dana kada saznamo za Vašu odluku, koristeći isti način plaćanja.

> **Model obrasca za odustanak** (popunite i vratite samo ako želite da odustanete)
> Kompaniji {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Ovim obaveštavam/o da odustajem/o od svog ugovora o pružanju sledeće usluge/digitalnog sadržaja: ______ ; naručeno/primljeno dana: ______ ; ime: ______ ; adresa: ______ ; datum: ______ (potpis samo ako je na papiru).
{{else}}
Naše Usluge se nude isključivo poslovnim korisnicima, pa se zakonska prava potrošača na odustanak ne primenjuju. Kontaktirajte nas ako smatrate da ste potrošač.
{{/if}}

## Ostale zemlje {#other-countries}

Neka mesta daju dodatna prava na otkazivanje ili povraćaj (na primer periode za razmišljanje, pravila o automatskom obnavljanju u nekoliko američkih saveznih država ili zakonske garancije u Australiji, Novom Zelandu i Velikoj Britaniji). Tamo gde su obavezna, primenjuju se i nadjačavaju sve što je manje povoljno u ovoj politici.

## Kada vraćamo novac {#refunds}

Vratićemo novac, u celosti ili delimično, kada je to odgovarajuće:

- **dvostruku ili pogrešnu naplatu**, ili naplatu koju niste ovlastili (prijavite je odmah; možemo tražiti detalje);
- kupovinu gde se usluga **nije mogla pružiti** ili je bitno neispravna i ne možemo je popraviti u razumnom roku;
- kupovinu za koju zatražite otkazivanje u roku od **{{policy.refund_days}} dana** ako niste iskoristili ono što ste kupili (uključujući neiskorišćene kredite), po našem nahođenju tamo gde nijedno zakonsko pravo ne važi;
- sve drugo što se pismeno dogovorimo.

Inače, plaćene naknade se ne vraćaju, uključujući delimične periode, iskorišćene ili potrošene predmete i naloge zatvorene zbog kršenja [Politike prihvatljivog korišćenja]({{url.acceptable_use}}). Povraćaj ide na prvobitni način plaćanja; kredite možemo vratiti samo ako to tražite.

{{#if feature.credits}}
## Krediti i virtuelni predmeti {#credits}

Neiskorišćeni unapred plaćeni krediti mogu se vratiti u okviru gore navedenog roka. Krediti i virtuelni predmeti koji su potrošeni ili iskorišćeni ne podležu povraćaju, osim kada zakon to zahteva. Ako prekinemo uslugu, preostala plaćena stanja rešavamo na način opisan u [Uslovima korišćenja]({{url.terms}}){{#if feature.game}} i [Pravilima igre]({{url.game_rules}}){{/if}}.
{{/if}}

## Osporavanja naplate {#chargebacks}

Molimo Vas da nas kontaktirate pre nego što osporite naplatu kod svoje banke ili izdavaoca kartice: obično to brže rešavamo. Ako pokrenete osporavanje za naplatu koja je valjana, možemo privremeno suspendovati nalog dok se ne reši i podeliti dokaze o isporuci i korišćenju sa pružaocem usluga plaćanja.

## Porezi i valuta {#taxes}

Povraćaj uključuje porez koji je naplaćen. Ako ste platili u drugoj valuti, iznos koji se vraća može se razlikovati zbog kretanja kursa i bankarskih naknada van naše kontrole.

## Kako da tražite {#contact}

Pišite na [{{company.email}}](mailto:{{company.email}}) sa adresom e-pošte Vašeg naloga, brojem porudžbine ili računa i kratkim opisom. Odgovaramo u roku od 5 radnih dana. Ako ne možemo da rešimo stvar, možete se obratiti lokalnom organu za zaštitu potrošača{{#if consumer_dispute}} ili {{consumer_dispute}}{{/if}}.
