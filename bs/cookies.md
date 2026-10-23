---
doc: cookies
title: Politika kolačića
version: 1.0.0
updated: 2026-10-23
lang: bs
translation_of: 1.0.0
summary: Koje kolačiće i slične tehnologije {{product.name}} koristi, zašto, i kako ih možete kontrolisati.
status: draft
---

# Politika kolačića

*Verzija {{doc.version}}, posljednje ažuriranje {{doc.updated}}.*

Ova politika objašnjava kako **{{company.name}}** koristi kolačiće i slične tehnologije na {{product.name}} i našim drugim Uslugama. Lični podaci prikupljeni putem njih obrađuju se kako je opisano u [Politici privatnosti]({{url.privacy}}).

## 1. Šta su oni {#what}

Kolačići su male datoteke koje web stranica pohranjuje na vaš uređaj. Među „slične tehnologije” spadaju lokalno i sesijsko skladište, identifikatori uređaja i SDK-ovi u mobilnim aplikacijama, pikseli i signali slični otisku prsta. Za sve njih koristimo riječ „kolačići”.

## 2. Kategorije koje koristimo {#categories}

| Kategorija | Svrha | Potrebna saglasnost? |
|---|---|---|
| **Strogo neophodni** | Održavaju vašu prijavu, pamte vašu korpu ili postavke za sesiju, štite od prevare i CSRF napada, ravnomjerno raspoređuju opterećenje servera, čuvaju vaše izbore kolačića | Ne: potrebni su da bi Usluge radile ili da bi isporučili ono što ste zatražili |
| **Preferencije** | Pamte jezik, temu, raspored i slične izbore | Da, osim ako su strogo neophodni za funkciju koju ste zatražili |
{{#if feature.analytics}}| **Analitika** | Mjere kako se Usluge koriste i pronalaze greške kako bismo ih mogli poboljšati | Da (tamo gdje to zakon zahtijeva) |
{{/if}}{{#if feature.ads}}| **Oglašavanje / marketing** | Prikazuju i mjere relevantne oglase, ograničavaju ponavljanja i povezuju aktivnost na različitim web stranicama i aplikacijama | Da |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Trenutno koristimo **samo strogo neophodne kolačiće i kolačiće za preferencije**, bez kolačića za analitiku ili oglašavanje.{{/unless}}{{/unless}}

## 3. Kolačići detaljno {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Tačni nazivi kolačića, pružaoci i trajanje navedeni su u dijaloškom okviru za postavke kolačića i dostupni su na zahtjev na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Vaši izbori {#choices}

- **Banner za saglasnost / postavke.** Tamo gdje je saglasnost potrebna, tražimo je prije postavljanja neesencijalnih kolačića, uz jasnu opciju odbijanja koja je jednako laka kao i prihvatanje. Svoj izbor možete promijeniti ili povući u bilo kom trenutku putem linka za postavke kolačića u podnožju. Povlačenje ne utiče na obradu koja je prethodno izvršena.
- **Kontrole preglednika.** Većina preglednika vam omogućava da blokirate ili obrišete kolačiće; potražite to pod Postavke → Privatnost. Blokiranje strogo neophodnih kolačića može onemogućiti prijavu i druge funkcije.
- **Signali.** Global Privacy Control (GPC) i slične signale za odjavu u pregledniku tretiramo kao odbijanje neesencijalnog praćenja i prodaje/dijeljenja ličnih podataka.
{{#if feature.ads}}- **Izbori za oglašavanje.** Možete se odjaviti od oglašavanja zasnovanog na interesovanjima kroz postavke vašeg uređaja (resetovanje ili ograničavanje vašeg identifikatora za oglašavanje) i alate poput youronlinechoices.eu ili optout.aboutads.info. I dalje ćete vidjeti oglase, ali manje relevantne.
{{/if}}
## 5. Koliko dugo traju {#duration}

Sesijski kolačići isteknu kada zatvorite preglednik. Trajni kolačići traju za period prikazan u tabeli, a u svakom slučaju ne duže nego što zakon preporučuje (uglavnom najviše 13 mjeseci za saglasnost za analitiku i oglašavanje, koju od vas tražimo da obnovite).

## 6. Treće strane {#third-parties}

Neke kolačiće postavljaju treće strane čije usluge koristimo (analitika, ugrađeni mediji, plaćanje, chat podrške). One djeluju prema vlastitim politikama i, ako su samostalni kontrolori, trebali biste pročitati njihove politike. Navodimo ih u tabeli iznad.

## 7. Izmjene {#changes}

Ako dodamo ili promijenimo neesencijalne kolačiće, ažuriramo ovu politiku i ponovo tražimo vašu saglasnost tamo gdje je to potrebno. Pitanja: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
