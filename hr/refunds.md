---
doc: refunds
title: Pravila povrata novca i otkaza
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
when: feature.payments
summary: Kako otkazati, kada možete odustati ili dobiti povrat novca i što se događa s kupnjama putem trgovina aplikacijama.
---

# Pravila povrata novca i otkaza

*Verzija {{doc.version}}, posljednje ažuriranje {{doc.updated}}.*

Ova pravila dio su [Uvjeta korištenja]({{url.terms}}) i primjenjuju se na kupnje od **{{company.name}}** ("mi") za {{product.name}}. Ništa u njima ne ograničava vaša prava iz obvezne potrošačke zaštite.

## Gdje ste kupili, to je važno {#where}

- **Kupljeno izravno od nas** (na našoj web stranici ili pri naplati): primjenjuju se ova pravila.
- **Kupljeno putem trgovine aplikacijama ili platforme** (Apple App Store, Google Play, trgovine za konzole ili računala): trgovina je prodavatelj i **rješava povrate, otkaze i naplatu**. Zatražite povrat od trgovine prema njezinom vlastitom postupku. Mi ne možemo vratiti novac za te uplate, ali ćemo pomoći potvrditi činjenice i možemo opozvati kupljenu stavku kada trgovina vrati novac. Pravila trgovine i vaše lokalno pravo određuju vaša prava u tom slučaju.

{{#if feature.subscriptions}}
## Otkazivanje pretplate {#cancel}

Pretplatu možete otkazati u bilo kojem trenutku u postavkama svog računa{{#if feature.mobile}} (ili u postavkama pretplate u trgovini, ako ste se tamo pretplatili){{/if}} ili pisanjem na [{{company.email}}](mailto:{{company.email}}). Otkaz zaustavlja buduća obnavljanja. Pristup zadržavate do kraja razdoblja koje ste platili. Djelomična razdoblja ne obračunavamo proporcionalno, osim ako zakon ili ova pravila ne određuju drugačije. Otkazivanje je jednako jednostavno kao i prijava, a podsjećamo vas prije obnavljanja ili prije nego što se probno razdoblje pretvori u plaćeni paket, gdje to zakon zahtijeva.
{{/if}}

## Pravo na odustanak za potrošače (EU, Ujedinjena Kraljevina i slični zakoni) {#withdrawal}

{{#if feature.consumers}}
Ako ste potrošač u EU, Ujedinjenoj Kraljevini ili drugoj zemlji koja daje pravo na odustanak od ugovora sklopljenih na daljinu, možete odustati od kupnje **u roku od {{policy.refund_days}} dana** od sklapanja ugovora, bez navođenja razloga.

**Digitalni sadržaj i digitalne usluge.** Ako zatražite da za vrijeme roka za odustanak počnemo pružati digitalnu uslugu ili digitalni sadržaj (na primjer pristup, kredite ili virtualne predmete) i potvrdite da razumijete da možda gubite pravo na odustanak, tada:
- za **digitalni sadržaj koji nije na fizičkom mediju**, nakon što isporuka počne uz vašu izričitu privolu, gubite pravo na odustanak;
- za **digitalnu uslugu** i dalje možete odustati u roku, ali plaćate razmjeran iznos za ono što je pruženo do trenutka kada nas obavijestite.

Ovu privolu tražimo pri plaćanju. Ako je niste dali, primjenjuje se puno pravo na odustanak.

**Kako odustati.** Pošaljite jasnu izjavu (na primjer e-poštom na [{{company.email}}](mailto:{{company.email}})) o svojoj odluci o odustanku, uz svoje ime, podatke o narudžbi ili računu i datum kupnje. Možete upotrijebiti obrazac u nastavku, ali ne morate. Potvrdit ćemo primitak i vratiti vam novac **u roku od 14 dana** od saznanja o vašoj odluci, na isti način plaćanja.

> **Model obrasca za odustanak** (popunite i pošaljite samo ako želite odustati)
> Za {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Ovime obavješćujem/obavješćujemo da odustajem/odustajemo od svog/našeg ugovora o pružanju sljedeće usluge/digitalnog sadržaja: ______ ; naručeno/primljeno: ______ ; ime: ______ ; adresa: ______ ; datum: ______ (potpis samo ako je obrazac na papiru).
{{else}}
Naše usluge nude se isključivo poslovnim korisnicima, pa zakonska prava potrošača na odustanak ne primjenjuju se. Obratite nam se ako smatrate da ste potrošač.
{{/if}}

## Ostale zemlje {#other-countries}

Neka mjesta daju dodatna prava na otkaz ili povrat novca (na primjer razdoblja za razmišljanje (cooling-off), pravila o automatskom obnavljanju u nekoliko američkih saveznih država ili zakonska jamstva u Australiji, Novom Zelandu i Ujedinjenoj Kraljevini). Gdje su obvezna, primjenjuju se i nadjačavaju sve što je manje povoljno u ovim pravilima.

## Kada vraćamo novac {#refunds}

Vratit ćemo novac, u cijelosti ili djelomično, ovisno o slučaju:

- **dvostruku ili pogrešnu naplatu**, ili naplatu koju niste odobrili (prijavite je odmah; možemo tražiti pojedinosti);
- kupnju za koju **usluga nije mogla biti pružena** ili je bitno neispravna i ne možemo je popraviti u razumnom roku;
- kupnju za koju zatražite otkaz u roku od **{{policy.refund_days}} dana**, ako niste iskoristili ono što ste kupili (uključujući neiskorištene kredite), prema našoj procjeni tamo gdje nijedno zakonsko pravo ne vrijedi;
- sve drugo što pisano dogovorimo.

Inače su uplaćene naknade neovratne, uključujući one za djelomična razdoblja, iskorištene ili potrošene stavke te račune zatvorene zbog kršenja [Pravila prihvatljive uporabe]({{url.acceptable_use}}). Povrati idu na izvorni način plaćanja. Povrat u obliku kredita možemo izvršiti samo ako to zatražite.

{{#if feature.credits}}
## Krediti i virtualni predmeti {#credits}

Neiskorišteni unaprijed plaćeni krediti mogu se vratiti u roku navedenom iznad. Krediti i virtualni predmeti koji su potrošeni ili iskorišteni nisu povratni, osim ako zakon ne zahtijeva drugačije. Ako prestanemo pružati uslugu, preostala plaćena stanja obrađujemo kako je opisano u [Uvjetima korištenja]({{url.terms}}){{#if feature.game}} i [Pravilima igre]({{url.game_rules}}){{/if}}.
{{/if}}

## Osporavanje naplate i sporovi {#chargebacks}

Obratite nam se prije nego što osporite naplatu kod svoje banke ili izdavatelja kartice: obično to rješavamo brže. Ako otvorite spor za naplatu koja je valjana, možemo obustaviti račun dok se spor ne riješi i podijeliti dokaze o isporuci i korištenju s pružateljem plaćanja.

## Porezi i valuta {#taxes}

Povrati uključuju porez koji je naplaćen. Ako ste platili u drugoj valuti, iznos koji vam se vrati može se razlikovati zbog kretanja tečaja i bankovnih naknada na koje ne možemo utjecati.

## Kako postaviti upit {#contact}

Pišite na [{{company.email}}](mailto:{{company.email}}) s adresom e-pošte svog računa, brojem narudžbe ili računa i kratkim opisom. Odgovaramo u roku od 5 radnih dana. Ako ne možemo riješiti stvar, možete se obratiti svom lokalnom tijelu za zaštitu potrošača{{#if consumer_dispute}} ili {{consumer_dispute}}{{/if}}.
