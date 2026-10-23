---
doc: subprocessors
title: Lista podobrađivača
version: 1.0.0
updated: 2026-10-23
lang: bs
translation_of: 1.0.0
status: draft
summary: Treće strane koje obrađuju lične podatke u ime {{product.name}}.
---

# Lista podobrađivača

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Da bi pružala {{product.name}}, **{{company.name}}** koristi sljedeće treće strane koje mogu obrađivati lične podatke u naše ime. Svaka od njih obavezana je pisanim sporazumom o zaštiti podataka. {{#if feature.processor_role}}Ova lista je Prilog III [Aneksu o obradi podataka]({{url.dpa}}) i pominje se u [Politici privatnosti]({{url.privacy}}).{{else}}Pominje se u [Politici privatnosti]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Aktuelna lista je dostupna na zahtjev na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Izmjene {#changes}

Dajemo najmanje **{{policy.notice_days}} dana** obavještenja prije dodavanja ili zamjene podobrađivača, ažuriranjem ove stranice (provjerite datum "posljednje ažuriranje") i e-poštom korisnicima koji su se pretplatili na adresi [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Korisnici mogu uložiti prigovor iz opravdanih razloga zaštite podataka, kako je navedeno u Aneksu o obradi podataka.{{/if}}
