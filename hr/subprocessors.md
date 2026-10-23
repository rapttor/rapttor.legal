---
doc: subprocessors
title: Popis podizvršitelja obrade
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
summary: Treće strane koje obrađuju osobne podatke u ime „{{product.name}}”.
---

# Popis podizvršitelja obrade

*Verzija {{doc.version}}, zadnje ažuriranje {{doc.updated}}.*

Za pružanje „{{product.name}}” **{{company.name}}** koristi sljedeće treće strane koje mogu obrađivati osobne podatke u naše ime. Svaka od njih obvezana je pisanim ugovorom o zaštiti podataka. {{#if feature.processor_role}}Ovaj popis je Prilog III. [Dodatku o obradi podataka]({{url.dpa}}) i na njega se upućuje u [Politici privatnosti]({{url.privacy}}).{{else}}Na njega se upućuje u [Politici privatnosti]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Aktualni popis je na zahtjev dostupan na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Izmjene {#changes}

Najmanje **{{policy.notice_days}} dana** unaprijed obavještavamo vas o dodavanju ili zamjeni podizvršitelja obrade, ažuriranjem ove stranice (provjerite datum „zadnjeg ažuriranja”) i e-poštom korisnicima koji su se pretplatili na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Korisnici mogu uložiti prigovor na razumnim osnovama zaštite podataka, kako je navedeno u DPA.{{/if}}
