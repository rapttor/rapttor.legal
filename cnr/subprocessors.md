---
doc: subprocessors
title: Lista podobrađivača
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
summary: Treća lica koja obrađuju lične podatke u ime {{product.name}}.
---

# Lista podobrađivača

*Verzija {{doc.version}}, posljednji put ažurirana {{doc.updated}}.*

Za pružanje usluge {{product.name}}, **{{company.name}}** koristi sljedeća treća lica koja mogu obrađivati lične podatke u naše ime. Svako od njih obavezano je pisanim ugovorom o zaštiti podataka. {{#if feature.processor_role}}Ova lista je Prilog III [Aneksa o obradi podataka]({{url.dpa}}) i na nju se upućuje u [Politici privatnosti]({{url.privacy}}).{{else}}Na nju se upućuje u [Politici privatnosti]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Aktuelna lista je dostupna na zahtjev na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Promjene {#changes}

Najmanje **{{policy.notice_days}} dana** unaprijed dajemo obavještenje o dodavanju ili zamjeni podobrađivača, ažuriranjem ove stranice (provjerite datum „posljednjeg ažuriranja“) i e-poštom korisnicima koji su se pretplatili, na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Korisnici mogu uložiti prigovor na osnovanim razlozima zaštite podataka, kako je navedeno u Aneksu o obradi podataka (DPA).{{/if}}
