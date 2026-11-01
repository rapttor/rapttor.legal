---
doc: cookies
title: Politica privind cookie-urile
version: 1.1.0
updated: 2026-10-31
lang: ro
translation_of: 1.1.0
status: draft
summary: Ce cookie-uri și tehnologii similare utilizează {{product.name}}, în ce scop și cum le puteți controla.
---

# Politica privind cookie-urile

*Versiunea {{doc.version}}, ultima actualizare {{doc.updated}}.*

Prezenta politică explică modul în care **{{company.name}}** utilizează cookie-uri și tehnologii similare pe {{product.name}} și pe celelalte Servicii ale noastre. Datele cu caracter personal colectate prin intermediul lor sunt prelucrate conform descrierii din [Politica de confidențialitate]({{url.privacy}}).

## 1. Ce sunt acestea {#what}

Cookie-urile sunt fișiere mici stocate pe dispozitivul dumneavoastră de un site web. Prin „tehnologii similare” înțelegem stocarea locală și de sesiune, identificatorii dispozitivelor și SDK-urile din aplicațiile mobile, pixelii și semnalele de tip amprentă digitală (fingerprinting). Folosim termenul „cookie-uri” pentru toate acestea.

## 2. Categoriile utilizate {#categories}

| Categorie | Scop | Este necesar consimțământul? |
|---|---|---|
| **Strict necesare** | Vă mențin autentificat, rețin coșul sau setările pe durata sesiunii, protejează împotriva fraudei și a atacurilor CSRF, echilibrează încărcarea serverelor, stochează alegerile dumneavoastră privind cookie-urile | Nu: sunt necesare pentru funcționarea Serviciilor sau pentru a oferi ceea ce ați solicitat |
| **Preferințe** | Rețin limba, tema, aspectul și alte alegeri similare | Da, cu excepția cazului în care sunt strict necesare pentru o funcție solicitată de dumneavoastră |
{{#if feature.analytics}}| **Analiză** | Măsoară modul în care sunt utilizate Serviciile și identifică erorile, pentru a le putea îmbunătăți | Da (acolo unde legea o impune) |
{{/if}}{{#if feature.ads}}| **Publicitate / marketing** | Afișează și măsoară reclame relevante, limitează repetările și leagă activitatea între site-uri și aplicații | Da |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}În prezent utilizăm **doar cookie-uri strict necesare și de preferințe**, fără cookie-uri de analiză sau de publicitate.{{/unless}}{{/unless}}

## 3. Cookie-urile în detaliu {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Denumirile exacte ale cookie-urilor, furnizorii și duratele acestora sunt enumerate în fereastra de setări pentru cookie-uri și pot fi obținute la cerere la [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Alegerile dumneavoastră {#choices}

- **Bannerul de consimțământ / setările.** Acolo unde este necesar consimțământul, vă cerem acordul înainte de a seta cookie-uri neesențiale, cu o opțiune clară de refuz, la fel de ușor de folosit ca acceptarea. Puteți modifica sau retrage alegerea oricând, prin linkul către setările cookie-urilor din subsol. Retragerea nu afectează prelucrările anterioare.
- **Comenzile browserului.** Majoritatea browserelor vă permit să blocați sau să ștergeți cookie-urile; căutați în Setări, apoi Confidențialitate. Blocarea cookie-urilor strict necesare poate afecta autentificarea și alte funcții.
- **Fără înregistrarea sesiunilor.** Nu utilizăm instrumente de redare a sesiunilor sau de înregistrare a ecranului.
{{#if feature.external}}- **Resurse ale terților.** Atunci când o resursă (de exemplu fonturi, hărți sau videoclipuri) este încărcată de pe serverul unei alte companii, adresa dumneavoastră IP este transmisă acesteia. Cerem consimțământul pentru fiecare resursă separat, în setările cookie-urilor, și o încărcăm doar după ce acceptați; puteți modifica alegerea oricând.
{{/if}}- **Semnale.** Tratăm Global Privacy Control (GPC) și semnalele similare de renunțare din browser ca pe un refuz al urmăririi neesențiale și al vânzării sau partajării datelor cu caracter personal.
{{#if feature.ads}}- **Alegeri privind publicitatea.** Puteți renunța la publicitatea bazată pe interese din setările dispozitivului (resetarea sau limitarea identificatorului publicitar) și prin instrumente precum youronlinechoices.eu sau optout.aboutads.info. Veți vedea în continuare reclame, doar mai puțin relevante.
{{/if}}
## 5. Cât timp rămân active {#duration}

Cookie-urile de sesiune expiră la închiderea browserului. Cookie-urile persistente rămân active pentru perioada indicată în tabel și, în orice caz, nu mai mult decât recomandă legea (în general cel mult 13 luni pentru consimțământul la analiză și publicitate, pe care vi-l cerem din nou).

## 6. Terți {#third-parties}

Unele cookie-uri sunt setate de terți ale căror servicii le utilizăm (analiză, conținut media încorporat, plăți, chat de asistență). Aceștia acționează conform propriilor politici și, acolo unde sunt operatori independenți, ar trebui să le citiți. Îi enumerăm în tabelul de mai sus.
{{#if table.external}}
Resurse care primesc adresa dumneavoastră IP la încărcare:

{{table.external}}
{{/if}}

## 7. Modificări {#changes}

Dacă adăugăm sau modificăm cookie-uri neesențiale, actualizăm această politică și vă cerem din nou consimțământul, acolo unde este necesar. Întrebări: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
