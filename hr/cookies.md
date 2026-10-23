---
doc: cookies
title: Politika kolačića
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
summary: Koje kolačiće i slične tehnologije koristi {{product.name}}, zašto ih koristi i kako njima možete upravljati.
---

# Politika kolačića

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Ova politika objašnjava kako **{{company.name}}** koristi kolačiće i slične tehnologije na {{product.name}} i drugim našim Uslugama. Osobni podaci prikupljeni putem njih obrađuju se kako je opisano u [Politici privatnosti]({{url.privacy}}).

## 1. Što su {#what}

Kolačići su male datoteke koje web-stranica sprema na vaš uređaj. Među „slične tehnologije” ubrajaju se lokalna pohrana i pohrana sesije, identifikatori uređaja i SDK-ovi u mobilnim aplikacijama, pikseli te signali slični otisku prsta (fingerprinting). Za sve njih koristimo naziv „kolačići”.

## 2. Kategorije koje koristimo {#categories}

| Kategorija | Svrha | Je li potrebna privola? |
|---|---|---|
| **Strogo nužni** | Održavanje vaše prijave, pamćenje košarice ili postavki za vrijeme sesije, zaštita od prijevara i CSRF napada, uravnoteženje opterećenja poslužitelja, pohrana vaših izbora kolačića | Ne: potrebni su da bi Usluge radile ili da bismo ispunili ono što ste zatražili |
| **Postavke** | Pamćenje jezika, teme, rasporeda i sličnih izbora | Da, osim ako su strogo nužni za funkciju koju ste zatražili |
{{#if feature.analytics}}| **Analitika** | Mjerenje načina korištenja Usluga i otkrivanje pogrešaka kako bismo ih mogli poboljšati | Da (ondje gdje to zakon zahtijeva) |
{{/if}}{{#if feature.ads}}| **Oglašavanje / marketing** | Prikazivanje i mjerenje relevantnih oglasa, ograničavanje ponavljanja i povezivanje aktivnosti na različitim stranicama i u aplikacijama | Da |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Trenutno koristimo **samo strogo nužne kolačiće i kolačiće postavki** te nikakve analitičke ni oglasne kolačiće.{{/unless}}{{/unless}}

## 3. Kolačići u pojedinostima {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Točni nazivi kolačića, pružatelji i trajanje navedeni su u dijaloškom okviru postavki kolačića te su dostupni na zahtjev na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Vaš izbor {#choices}

- **Banner za privolu / postavke.** Ondje gdje je privola potrebna, pitamo vas prije postavljanja nebitnih kolačića, uz jasnu mogućnost odbijanja koja je jednako jednostavna kao i prihvaćanje. Svoj izbor možete promijeniti ili povući u bilo kojem trenutku putem poveznice za postavke kolačića u podnožju. Povlačenje privole ne utječe na prethodnu obradu.
- **Kontrole preglednika.** Većina preglednika omogućuje vam blokiranje ili brisanje kolačića; potražite ih pod Postavke → Privatnost. Blokiranje strogo nužnih kolačića može onemogućiti prijavu i druge funkcije.
- **Signali.** Global Privacy Control (GPC) i slične signale za odjavu u pregledniku tretiramo kao odbijanje nebitnog praćenja te prodaje ili dijeljenja osobnih podataka.
{{#if feature.ads}}- **Izbor oglašavanja.** Od oglašavanja temeljenog na interesima možete se odjaviti putem postavki uređaja (resetiranjem ili ograničavanjem identifikatora za oglašavanje) i alata kao što su youronlinechoices.eu ili optout.aboutads.info. I dalje ćete vidjeti oglase, ali manje relevantne.
{{/if}}
## 5. Koliko dugo traju {#duration}

Sesijski kolačići prestaju vrijediti kad zatvorite preglednik. Trajni kolačići traju za razdoblje prikazano u tablici, a ni u kojem slučaju ne duže nego što zakon preporučuje (općenito ne više od 13 mjeseci za privolu za analitiku i oglašavanje, koju od vas tražimo da obnovite).

## 6. Treće strane {#third-parties}

Neke kolačiće postavljaju treće strane čije usluge koristimo (analitika, ugrađeni mediji, plaćanje, podrška putem chata). One djeluju prema vlastitim politikama te, ako su samostalni voditelji obrade, trebali biste čitati te politike. Navodimo ih u tablici iznad.

## 7. Promjene {#changes}

Ako dodamo ili promijenimo nebitne kolačiće, ažuriramo ovu politiku i, ondje gdje je to potrebno, ponovno tražimo vašu privolu. Pitanja: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
