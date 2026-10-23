---
doc: cookies
title: Politika kolačića
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
summary: Koje kolačiće i slične tehnologije koristi {{product.name}}, zašto ih koristi i kako ih možete kontrolisati.
---

# Politika kolačića

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Ova politika objašnjava kako **{{company.name}}** koristi kolačiće i slične tehnologije na {{product.name}} i našim drugim Uslugama. Lični podaci prikupljeni putem njih obrađuju se na način opisan u [Politici privatnosti]({{url.privacy}}).

## 1. Šta su oni {#what}

Kolačići su male datoteke koje web sajt pohranjuje na vaš uređaj. "Slične tehnologije" obuhvataju lokalno i sesijsko skladište, identifikatore uređaja i SDK-ove u mobilnim aplikacijama, piksele i signale slične otisku prsta. Za sve njih koristimo izraz "kolačići".

## 2. Kategorije koje koristimo {#categories}

| Kategorija | Svrha | Potrebna saglasnost? |
|---|---|---|
| **Strogo neophodni** | Održavaju vašu prijavu, pamte korpu ili postavke za vrijeme sesije, štite od prevara i CSRF napada, ravnomjerno raspodjeljuju opterećenje servera i čuvaju vaše izbore u vezi s kolačićima | Ne: potrebni su da bi Usluge radile ili da bi se isporučilo ono što ste zatražili |
| **Postavke** | Pamte jezik, temu, raspored i slične izbore | Da, osim ako su strogo neophodni za funkciju koju ste zatražili |
{{#if feature.analytics}}| **Analitika** | Mjere kako se Usluge koriste i pronalaze greške kako bismo ih mogli unaprijediti | Da (tamo gdje to zakon zahtijeva) |
{{/if}}{{#if feature.ads}}| **Oglašavanje / marketing** | Prikazuju i mjere relevantne oglase, ograničavaju ponavljanje oglasa i povezuju aktivnost na različitim sajtovima i aplikacijama | Da |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Trenutno koristimo **samo strogo neophodne kolačiće i kolačiće za postavke**, bez kolačića za analitiku ili oglašavanje.{{/unless}}{{/unless}}

## 3. Kolačići detaljno {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Tačni nazivi kolačića, pružaoci i trajanje navedeni su u dijalogu za postavke kolačića i dostupni su na zahtjev na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Vaši izbori {#choices}

- **Banner za saglasnost / postavke.** Tamo gdje je saglasnost potrebna, tražimo je prije postavljanja kolačića koji nisu neophodni, uz jasnu opciju da odbijete jednako lako kao što prihvatate. Svoj izbor možete promijeniti ili povući u bilo kom trenutku putem linka za postavke kolačića u podnožju. Povlačenje ne utiče na prethodnu obradu.
- **Kontrole pregledača.** Većina pregledača omogućava da blokirate ili obrišete kolačiće; potražite u Podešavanjima → Privatnost. Blokiranje strogo neophodnih kolačića može onemogućiti prijavu i druge funkcije.
- **Signali.** Global Privacy Control (GPC) i slične signale za odjavu u pregledaču tretiramo kao odbijanje praćenja koje nije neophodno i prodaje ili dijeljenja ličnih podataka.
{{#if feature.ads}}- **Izbori u vezi s oglašavanjem.** Možete se odjaviti od oglašavanja zasnovanog na interesovanjima putem postavki vašeg uređaja (resetovanjem ili ograničavanjem identifikatora za oglašavanje) i alata kao što su youronlinechoices.eu ili optout.aboutads.info. I dalje ćete vidjeti oglase, ali manje relevantne.
{{/if}}
## 5. Koliko dugo traju {#duration}

Sesijski kolačići isteknu kada zatvorite pregledač. Trajni kolačići važe za period prikazan u tabeli, a u svakom slučaju ne duže nego što preporučuje zakon (uglavnom ne duže od 13 mjeseci za saglasnost za analitiku i oglašavanje, koju od vas tražimo da obnovite).

## 6. Treće strane {#third-parties}

Neke kolačiće postavljaju treće strane čije usluge koristimo (analitika, ugrađeni medijski sadržaj, plaćanje i chat podrška). One djeluju prema sopstvenim politikama i, ako su samostalni rukovaoci, treba da pročitate te politike. Navedene su u tabeli iznad.

## 7. Izmjene {#changes}

Ako dodamo ili izmijenimo kolačiće koji nisu neophodni, ažuriramo ovu politiku i, tamo gdje je to potrebno, ponovo tražimo vašu saglasnost. Pitanja: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
