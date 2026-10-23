---
doc: refunds
title: Politika povraćaja novca i otkazivanja
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
when: feature.payments
summary: Kako otkazati, kada možete odustati ili dobiti povraćaj novca i šta se dešava sa kupovinama izvršenim preko prodavnica aplikacija.
---

# Politika povraćaja novca i otkazivanja

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Ova politika je dio [Uslova korišćenja]({{url.terms}}) i odnosi se na kupovine od **{{company.name}}** („mi”) za {{product.name}}. Ništa u njoj ne ograničava prava koja imate prema obaveznom potrošačkom pravu.

## Mjesto kupovine je važno {#where}

- **Kupljeno direktno od nas** (na našem sajtu ili u našoj kasi): primjenjuje se ova politika.
- **Kupljeno preko prodavnice aplikacija ili platforme** (Apple App Store, Google Play, konzolne ili PC prodavnice): prodavnica je prodavac po ugovoru i **rješava povraćaje novca, otkazivanja i naplatu**. Zatražite povraćaj novca od prodavnice po njenom vlastitom postupku; mi ne možemo vratiti novac za te uplate, ali ćemo pomoći da se potvrde činjenice i možemo opozvati kupljenu stavku kada prodavnica izvrši povraćaj. Pravila prodavnice i vaše lokalno pravo određuju vaša prava u tom pogledu.

{{#if feature.subscriptions}}
## Otkazivanje pretplate {#cancel}

Možete otkazati u bilo kom trenutku u podešavanjima naloga{{#if feature.mobile}} (ili u podešavanjima pretplate u prodavnici, ako ste se pretplatili tamo){{/if}} ili pisanjem na [{{company.email}}](mailto:{{company.email}}). Otkazivanje zaustavlja buduća obnavljanja; pristup zadržavate do kraja perioda koji ste platili. Ne vršimo srazmjeran obračun za djelimične periode, osim ako zakon ili ova politika ne određuju drugačije. Otkazivanje je jednako jednostavno kao i prijava, a prije obnavljanja ili prelaska probnog perioda u plaćeni paket vas podsjećamo tamo gdje to zahtijeva zakon.
{{/if}}

## Pravo na odustanak za potrošače (EU, Velika Britanija i slični zakoni) {#withdrawal}

{{#if feature.consumers}}
Ako ste potrošač u EU, Velikoj Britaniji ili drugoj zemlji koja daje pravo na odustanak od ugovora zaključenih na daljinu, možete odustati od kupovine **u roku od {{policy.refund_days}} dana** od zaključenja ugovora, bez navođenja razloga.

**Digitalni sadržaj i digitalne usluge.** Ako od nas zatražite da počnemo pružati digitalnu uslugu ili digitalni sadržaj (na primjer pristup, kredite ili virtuelne predmete) tokom perioda za odustanak i potvrdite da razumijete da možete izgubiti pravo na odustanak, tada:
- za **digitalni sadržaj koji nije na fizičkom nosaču**, nakon što pružanje počne uz vašu izričitu saglasnost, gubite pravo na odustanak;
- za **digitalnu uslugu** i dalje možete odustati u roku, ali plaćate srazmjeran iznos za ono što je pruženo do trenutka kada nas obavijestite.

Ovu saglasnost tražimo na kasi. Ako je niste dali, primjenjuje se puno pravo na odustanak.

**Kako odustati.** Pošaljite jasnu izjavu (na primjer e-mailom na [{{company.email}}](mailto:{{company.email}})) o svojoj odluci da odustanete, sa svojim imenom, podacima o narudžbi ili nalogu i datumom kupovine. Možete koristiti obrazac ispod, ali to nije obavezno. Potvrdićemo prijem i vratiti vam novac **u roku od 14 dana** od saznanja za vašu odluku, koristeći isti način plaćanja.

> **Model obrasca za odustanak** (popunite i vratite samo ako želite da odustanete)
> Za: {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Ovim obavještavam/o da odustajem/o od ugovora o pružanju sljedeće usluge/digitalnog sadržaja: ______ ; naručeno/primljeno: ______ ; ime: ______ ; adresa: ______ ; datum: ______ (potpis samo ako je na papiru).
{{else}}
Naše usluge nude se samo poslovnim korisnicima, pa se zakonska prava potrošača na odustanak ne primjenjuju. Kontaktirajte nas ako smatrate da ste potrošač.
{{/if}}

## Ostale zemlje {#other-countries}

Neke države daju dodatna prava na otkazivanje ili povraćaj novca (na primjer rok za razmišljanje (cooling-off), pravila o automatskom obnavljanju u nekim američkim saveznim državama ili zakonske garancije u Australiji, Novom Zelandu i Velikoj Britaniji). Gdje su obavezna, primjenjuju se i nadjačavaju sve manje povoljne odredbe ove politike.

## Kada vraćamo novac {#refunds}

Vraćamo novac, u cjelosti ili djelimično, prema potrebi:

- **dvostruku ili pogrešnu naplatu**, ili naplatu koju niste ovlastili (prijavite je odmah; možemo tražiti pojedinosti);
- kupovinu kod koje **usluga nije mogla biti pružena** ili je bitno neispravna i ne možemo je popraviti u razumnom roku;
- kupovinu čije otkazivanje tražite u roku od **{{policy.refund_days}} dana** ako niste iskoristili ono što ste kupili (uključujući neiskorišćene kredite), prema našoj procjeni tamo gdje nijedno zakonsko pravo ne važi;
- sve drugo na što se pismeno dogovorimo.

Inače, plaćene naknade nisu povratne, uključujući one za djelimične periode, iskorišćene ili potrošene stavke i naloge zatvorene zbog kršenja [Politike prihvatljivog korišćenja]({{url.acceptable_use}}). Povraćaj novca vršimo na originalni način plaćanja; u vidu kredita vraćamo samo ako to zatražite.

{{#if feature.credits}}
## Krediti i virtuelni predmeti {#credits}

Neiskorišćeni unaprijed plaćeni krediti mogu se vratiti u roku navedenom iznad. Krediti i virtuelni predmeti koji su potrošeni ili iskorišćeni nisu povratni, osim ako zakon to ne zahtijeva. Ako prestanemo pružati uslugu, preostala plaćena stanja obrađujemo kako je opisano u [Uslovima korišćenja]({{url.terms}}){{#if feature.game}} i [Pravilima igre]({{url.game_rules}}){{/if}}.
{{/if}}

## Povraćaj naplate (chargeback) i sporovi {#chargebacks}

Molimo vas da nas kontaktirate prije nego što osporite naplatu kod svoje banke ili izdavaoca kartice: obično to brže riješimo. Ako pokrenete spor za naplatu koja je valjana, možemo privremeno suspendovati nalog dok se spor ne riješi i podijeliti dokaze o isporuci i korišćenju sa pružaocem platnih usluga.

## Porezi i valuta {#taxes}

Povraćaj novca obuhvata porez koji je naplaćen. Ako ste platili u drugoj valuti, iznos koji se vraća može se razlikovati zbog kretanja kursa i bankarskih naknada koje su van naše kontrole.

## Kako podnijeti zahtjev {#contact}

Pišite na [{{company.email}}](mailto:{{company.email}}) sa e-mail adresom svog naloga, brojem narudžbe ili računa i kratkim opisom. Odgovaramo u roku od 5 radnih dana. Ako ne možemo riješiti stvar, možete se obratiti lokalnom organu za zaštitu potrošača{{#if consumer_dispute}} ili {{consumer_dispute}}{{/if}}.
