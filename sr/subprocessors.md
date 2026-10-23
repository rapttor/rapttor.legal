---
doc: subprocessors
title: Lista podobrađivača
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
summary: Treća lica koja obrađuju podatke o ličnosti u ime „{{product.name}}”.
---

# Lista podobrađivača

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

Da bismo obezbedili „{{product.name}}”, **{{company.name}}** koristi sledeća treća lica koja mogu da obrađuju podatke o ličnosti u naše ime. Svako od njih vezan je pisanim ugovorom o zaštiti podataka. {{#if feature.processor_role}}Ova lista je Aneks III uz [Aneks o obradi podataka]({{url.dpa}}) i na nju se upućuje u [Politici privatnosti]({{url.privacy}}).{{else}}Na nju se upućuje u [Politici privatnosti]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Aktuelna lista je dostupna na zahtev na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Izmene {#changes}

Najmanje **{{policy.notice_days}} dana** unapred obaveštavamo Vas o dodavanju ili zameni podobrađivača, ažuriranjem ove stranice (proverite datum „poslednjeg ažuriranja”) i e-poštom korisnicima koji su se pretplatili na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Korisnici mogu da ulože prigovor na razumnim osnovama zaštite podataka, kako je navedeno u DPA.{{/if}}
