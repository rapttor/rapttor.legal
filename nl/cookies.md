---
doc: cookies
title: Cookiebeleid
version: 1.1.0
updated: 2026-10-31
lang: nl
translation_of: 1.1.0
status: draft
summary: Welke cookies en vergelijkbare technieken {{product.name}} gebruikt, waarom, en hoe u ze beheert.
---

# Cookiebeleid

*Versie {{doc.version}}, laatst bijgewerkt op {{doc.updated}}.*

Dit beleid legt uit hoe **{{company.name}}** cookies en vergelijkbare technieken gebruikt op {{product.name}} en onze overige Diensten. Persoonsgegevens die via deze technieken worden verzameld, worden verwerkt zoals beschreven in de [Privacyverklaring]({{url.privacy}}).

## 1. Wat ze zijn {#what}

Cookies zijn kleine bestanden die een website op uw apparaat opslaat. Vergelijkbare technieken omvatten lokale en sessieopslag, apparaatidentificaties en SDK's in mobiele apps, pixels, en signalen die lijken op fingerprinting. Wij gebruiken het woord "cookies" voor al deze technieken.

## 2. Categorieën die wij gebruiken {#categories}

| Categorie | Doel | Toestemming nodig? |
|---|---|---|
| **Strikt noodzakelijk** | U ingelogd houden, uw winkelwagen of instellingen voor een sessie onthouden, beschermen tegen fraude en CSRF-aanvallen, serverbelasting verdelen, uw cookiekeuzes opslaan | Nee: vereist om de Diensten te laten werken of om te leveren wat u heeft gevraagd |
| **Voorkeuren** | Taal, thema, indeling en vergelijkbare keuzes onthouden | Ja, tenzij strikt noodzakelijk voor een functie die u heeft gevraagd |
{{#if feature.analytics}}| **Analyse** | Meten hoe de Diensten worden gebruikt en fouten opsporen, zodat wij ze kunnen verbeteren | Ja (waar de wet dat vereist) |
{{/if}}{{#if feature.ads}}| **Advertenties / marketing** | Relevante advertenties tonen en meten, herhalingen beperken, en activiteit over sites en apps heen koppelen | Ja |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}We gebruiken momenteel **alleen strikt noodzakelijke en voorkeurscookies** en geen analyse- of advertentiecookies.{{/unless}}{{/unless}}

## 3. De cookies in detail {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
De exacte cookienamen, aanbieders en looptijden staan in het dialoogvenster met cookie-instellingen en zijn op verzoek beschikbaar via [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Uw keuzes {#choices}

- **Cookiemelding / instellingen.** Waar toestemming vereist is, vragen wij die voordat wij niet-essentiële cookies plaatsen. Weigeren is even eenvoudig als accepteren. U kunt uw keuze op elk moment wijzigen of intrekken via de link naar de cookie-instellingen in de voettekst. Intrekking heeft geen gevolgen voor eerdere verwerking.
- **Browserinstellingen.** De meeste browsers laten u cookies blokkeren of verwijderen; kijk onder Instellingen → Privacy. Het blokkeren van strikt noodzakelijke cookies kan inloggen en andere functies verstoren.
- **Geen sessieopname.** Wij gebruiken geen tools voor sessie- of schermopname.
{{#if feature.external}}- **Resources van derden.** Wanneer een resource (bijvoorbeeld lettertypen, kaarten of video) van de server van een ander bedrijf wordt geladen, wordt uw IP-adres naar dat bedrijf verzonden. Wij vragen voor elke resource afzonderlijk om uw toestemming in de cookie-instellingen en laden die pas nadat u heeft ingestemd. U kunt uw keuze op elk moment wijzigen.
{{/if}}- **Signalen.** Wij behandelen Global Privacy Control (GPC) en vergelijkbare opt-outsignalen van browsers als een weigering van niet-essentiële tracking en van verkoop of delen van persoonsgegevens.
{{#if feature.ads}}- **Keuzes voor advertenties.** U kunt zich afmelden voor op interesse gebaseerde advertenties via de instellingen van uw apparaat (uw advertentie-identificatie resetten of beperken) en via hulpmiddelen zoals youronlinechoices.eu of optout.aboutads.info. U blijft advertenties zien, alleen minder relevante.
{{/if}}
## 5. Hoe lang ze blijven bestaan {#duration}

Sessiecookies verlopen wanneer u de browser sluit. Permanente cookies blijven bestaan gedurende de periode die in de tabel staat, en in ieder geval niet langer dan de wet aanbeveelt (doorgaans niet langer dan 13 maanden voor analyse- en advertentietoestemming, die wij u vragen te vernieuwen).

## 6. Derden {#third-parties}

Sommige cookies worden geplaatst door derden wier diensten wij gebruiken (analyse, ingesloten media, betalingen, chat voor support). Zij handelen onder hun eigen beleid. Waar zij zelfstandige verwerkingsverantwoordelijken zijn, moet u dat beleid lezen. Wij vermelden ze in de tabel hierboven.
{{#if table.external}}

Resources die uw IP-adres ontvangen wanneer ze worden geladen:

{{table.external}}
{{/if}}

## 7. Wijzigingen {#changes}

Als wij niet-essentiële cookies toevoegen of wijzigen, werken wij dit beleid bij en vragen wij waar nodig opnieuw om uw toestemming. Vragen: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
