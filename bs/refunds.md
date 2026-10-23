---
doc: refunds
title: Politika povrata novca i otkazivanja
version: 1.0.0
updated: 2026-10-23
lang: bs
when: feature.payments
translation_of: 1.0.0
status: draft
summary: Kako otkazati, kada možete odustati ili dobiti povrat novca i šta se dešava s kupovinama napravljenim putem prodavnica aplikacija.
---

# Politika povrata novca i otkazivanja

*Verzija {{doc.version}}, posljednje ažurirano {{doc.updated}}.*

Ova politika je dio [Uslova korištenja]({{url.terms}}) i primjenjuje se na kupovine od **{{company.name}}** ("mi") za {{product.name}}. Ništa u njoj ne ograničava prava koja imate prema obaveznom zakonu o zaštiti potrošača.

## Gdje ste kupili je važno {#where}

- **Kupljeno direktno od nas** (naša web stranica ili kasa): primjenjuje se ova politika.
- **Kupljeno putem prodavnice aplikacija ili platforme** (Apple App Store, Google Play, prodavnice za konzole ili PC): prodavnica je prodavac i **rješava povrate novca, otkazivanja i naplatu**. Zatražite povrat od prodavnice putem njenog vlastitog postupka. Mi ne možemo vratiti novac za te uplate, ali ćemo pomoći u potvrdi činjenica i možemo opozvati kupljenu stavku kada prodavnica izvrši povrat. Pravila prodavnice i vaš lokalni zakon određuju vaša prava tamo.

{{#if feature.subscriptions}}
## Otkazivanje pretplate {#cancel}

Možete otkazati u bilo kojem trenutku u postavkama naloga{{#if feature.mobile}} (ili u postavkama pretplate prodavnice ako ste se pretplatili tamo){{/if}} ili pisanjem na [{{company.email}}](mailto:{{company.email}}). Otkazivanje zaustavlja buduća obnavljanja; pristup zadržavate do kraja perioda koji ste platili. Ne vršimo srazmjerni obračun za djelimične periode, osim ako zakon ili ova politika ne određuju drugačije. Otkazivanje je jednako jednostavno kao i prijava, a tamo gdje zakon to zahtijeva podsjećamo vas prije obnavljanja ili prije nego što se probni period pretvori u plaćeni plan.
{{/if}}

## Pravo na odustajanje za potrošače (EU, Ujedinjeno Kraljevstvo i slični zakoni) {#withdrawal}

{{#if feature.consumers}}
Ako ste potrošač u EU, Ujedinjenom Kraljevstvu ili drugoj zemlji koja daje pravo na odustajanje od ugovora sklopljenih na daljinu, možete odustati od kupovine **u roku od {{policy.refund_days}} dana** od zaključenja ugovora, bez navođenja razloga.

**Digitalni sadržaj i digitalne usluge.** Ako tražite od nas da počnemo pružati digitalnu uslugu ili digitalni sadržaj (na primjer pristup, kredite ili virtuelne predmete) tokom perioda za odustajanje i potvrdite da razumijete da možda gubite pravo na odustajanje, onda:
- za **digitalni sadržaj koji nije na fizičkom mediju**, nakon što isporuka počne uz vašu izričitu saglasnost, gubite pravo na odustajanje;
- za **digitalnu uslugu**, i dalje možete odustati u roku, ali plaćate srazmjeran iznos za ono što je isporučeno do trenutka kada nas obavijestite.

Tu saglasnost tražimo pri plaćanju. Ako je niste dali, primjenjuje se puno pravo na odustajanje.

**Kako odustati.** Pošaljite jasnu izjavu (na primjer e-poštom na [{{company.email}}](mailto:{{company.email}})) o svojoj odluci da odustanete, sa svojim imenom, podacima o narudžbi ili nalogu i datumom kupovine. Možete koristiti obrazac ispod, ali to nije obavezno. Potvrdit ćemo prijem i vratiti vam novac **u roku od 14 dana** od saznanja za vašu odluku, koristeći isti način plaćanja.

> **Model obrasca za odustajanje** (popunite i vratite samo ako želite odustati)
> Za {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Ovim vas obavještavam/obavještavamo da odustajem/odustajemo od svog/našeg ugovora o pružanju sljedeće usluge/digitalnog sadržaja: ______ ; naručeno / primljeno: ______ ; ime: ______ ; adresa: ______ ; datum: ______ (potpis samo ako je na papiru).
{{else}}
Naše usluge nude se samo poslovnim korisnicima, pa zakonska prava potrošača na odustajanje ne važe. Kontaktirajte nas ako smatrate da ste potrošač.
{{/if}}

## Ostale zemlje {#other-countries}

Neke zemlje daju dodatna prava na otkazivanje ili povrat novca (na primjer periode za razmišljanje, pravila o automatskom obnavljanju u nekoliko američkih država ili zakonske garancije u Australiji, Novom Zelandu i Ujedinjenom Kraljevstvu). Tamo gdje su obavezna, ona se primjenjuju i zamjenjuju sve što je manje povoljno u ovoj politici.

## Kada vraćamo novac {#refunds}

Vratit ćemo novac, u cijelosti ili djelimično, prema potrebi:

- **dupli ili pogrešno naplaćen iznos**, ili iznos koji niste ovlastili (prijavite ga odmah; možemo tražiti detalje);
- kupovinu kod koje **usluga nije mogla biti pružena** ili je materijalno neispravna, a ne možemo je popraviti u razumnom roku;
- kupovinu za koju tražite otkazivanje u roku od **{{policy.refund_days}} dana** ako niste iskoristili ono što ste kupili (uključujući neiskorištene kredite), prema našoj procjeni tamo gdje nema primjenjivog zakonskog prava;
- bilo šta drugo što pismeno dogovorimo.

Inače plaćene naknade nisu povratne, uključujući djelimične periode, iskorištene ili potrošene stavke i naloge zatvorene zbog kršenja [Politike prihvatljive upotrebe]({{url.acceptable_use}}). Povrat novca vrši se na originalni način plaćanja; kredite možemo vratiti samo ako to zatražite.

{{#if feature.credits}}
## Krediti i virtuelni predmeti {#credits}

Neiskorišteni unaprijed plaćeni krediti mogu se vratiti u periodu navedenom iznad. Krediti i virtuelni predmeti koji su potrošeni ili iskorišteni nisu povratni, osim ako zakon to ne zahtijeva. Ako prekinemo uslugu, preostala plaćena stanja obrađujemo kako je opisano u [Uslovima korištenja]({{url.terms}}){{#if feature.game}} i [Pravilima igre]({{url.game_rules}}){{/if}}.
{{/if}}

## Osporavanje naplate i sporovi {#chargebacks}

Molimo kontaktirajte nas prije nego što osporite naplatu kod svoje banke ili izdavaoca kartice: obično to brže riješimo. Ako pokrenete spor za valjanu naplatu, možemo suspendovati nalog dok se spor ne riješi i podijeliti dokaze o isporuci i korištenju s pružaocem platnih usluga.

## Porezi i valuta {#taxes}

Povrat novca uključuje porez koji je naplaćen. Ako ste platili u drugoj valuti, iznos koji se vraća može se razlikovati zbog kretanja kursa i bankarskih naknada koje su van naše kontrole.

## Kako se obratiti nama {#contact}

Pišite na [{{company.email}}](mailto:{{company.email}}) sa e-adresom svog naloga, brojem narudžbe ili potvrde o kupovini i kratkim opisom. Odgovaramo u roku od 5 radnih dana. Ako ne možemo riješiti stvar, možete se obratiti lokalnom organu za zaštitu potrošača{{#if consumer_dispute}} ili {{consumer_dispute}}{{/if}}.
