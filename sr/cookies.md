---
doc: cookies
title: Politika kolačića
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
summary: Koje kolačiće i slične tehnologije koristi {{product.name}}, zašto ih koristi i kako ih možete kontrolisati.
---

# Politika kolačića

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

Ova politika objašnjava kako **{{company.name}}** koristi kolačiće i slične tehnologije u proizvodu „{{product.name}}” i drugim našim Uslugama. Podaci o ličnosti prikupljeni putem njih obrađuju se na način opisan u [Politici privatnosti]({{url.privacy}}).

## 1. Šta su {#what}

Kolačići su male datoteke koje veb-sajt čuva na Vašem uređaju. „Slične tehnologije” obuhvataju lokalno i sesijsko skladište, identifikatore uređaja i SDK-ove u mobilnim aplikacijama, piksele i signale slične tehnikama fingerprinting-a. Pojam „kolačići” koristimo za sve njih.

## 2. Kategorije koje koristimo {#categories}

| Kategorija | Svrha | Potreban pristanak? |
|---|---|---|
| **Strogo neophodni** | Održavanje Vaše prijave, pamćenje sadržaja korpe ili podešavanja za sesiju, zaštita od prevara i CSRF napada, raspodela opterećenja servera, čuvanje Vaših izbora u vezi sa kolačićima | Ne: neophodni su da bi Usluge radile ili da bi se isporučilo ono što ste tražili |
| **Postavke** | Pamćenje jezika, teme, rasporeda i sličnih izbora | Da, osim ako su strogo neophodni za funkciju koju ste zatražili |
{{#if feature.analytics}}| **Analitika** | Merenje načina na koji se Usluge koriste i otkrivanje grešaka radi njihovog poboljšanja | Da (tamo gde to zakon zahteva) |
{{/if}}{{#if feature.ads}}| **Oglašavanje / marketing** | Prikazivanje i merenje relevantnih oglasa, ograničavanje ponavljanja i povezivanje aktivnosti na različitim sajtovima i aplikacijama | Da |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Trenutno koristimo **samo strogo neophodne kolačiće i kolačiće za postavke**, a ne kolačiće za analitiku ili oglašavanje.{{/unless}}{{/unless}}

## 3. Detaljno o kolačićima {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Tačni nazivi kolačića, pružaoci i trajanja navedeni su u dijalogu za podešavanja kolačića i dostupni su na zahtev na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Vaši izbori {#choices}

- **Baner za pristanak / podešavanja.** Tamo gde je pristanak potreban, pitamo Vas pre postavljanja neesencijalnih kolačića, uz jasnu opciju odbijanja koja je jednako laka kao i prihvatanje. Svoj izbor možete promeniti ili povući u bilo kom trenutku putem linka za podešavanja kolačića u podnožju. Povlačenje pristanka ne utiče na obradu izvršenu pre toga.
- **Kontrole pregledača.** Većina pregledača omogućava da blokirate ili izbrišete kolačiće; potražite u delu Podešavanja → Privatnost. Blokiranje strogo neophodnih kolačića može onemogućiti prijavu i druge funkcije.
- **Signali.** Global Privacy Control (GPC) i slične signale za odjavu u pregledaču smatramo odbijanjem neesencijalnog praćenja i prodaje ili deljenja podataka o ličnosti.
{{#if feature.ads}}- **Izbori u vezi sa oglašavanjem.** Odjavite se od oglašavanja zasnovanog na interesovanjima putem podešavanja Vašeg uređaja (resetovanje ili ograničavanje identifikatora za oglašavanje) i alata kao što su youronlinechoices.eu ili optout.aboutads.info. I dalje ćete videti oglase, ali manje relevantne.
{{/if}}
## 5. Koliko dugo traju {#duration}

Sesijski kolačići prestaju da važe kada zatvorite pregledač. Trajni kolačići važe za period naveden u tabeli i, u svakom slučaju, ne duže nego što zakon preporučuje (uglavnom najviše 13 meseci za pristanak za analitiku i oglašavanje, koji ćemo Vas zamoliti da obnovite).

## 6. Treća lica {#third-parties}

Neke kolačiće postavljaju treća lica čije usluge koristimo (analitika, ugrađeni mediji, plaćanje, čet podrške). Ona deluju u skladu sa sopstvenim politikama i, tamo gde su samostalni rukovaoci, trebalo bi da ih pročitate. Navodimo ih u tabeli iznad.

## 7. Izmene {#changes}

Ukoliko dodamo ili promenimo neesencijalne kolačiće, ažuriraćemo ovu politiku i, tamo gde je potrebno, ponovo tražiti Vaš pristanak. Pitanja: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
