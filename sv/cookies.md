---
doc: cookies
title: Cookiepolicy
version: 1.1.0
updated: 2026-10-31
lang: sv
translation_of: 1.1.0
status: draft
summary: Vilka cookies och liknande tekniker {{product.name}} använder, varför och hur du kontrollerar dem.
---

# Cookiepolicy

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

Denna policy förklarar hur **{{company.name}}** använder cookies och liknande tekniker på {{product.name}} och våra övriga tjänster. Personuppgifter som samlas in via dem hanteras enligt vad som beskrivs i [integritetspolicyn]({{url.privacy}}).

## 1. Vad de är {#what}

Cookies är små filer som en webbplats lagrar på din enhet. ”Liknande tekniker” omfattar lokal lagring och sessionslagring, enhetsidentifierare och SDK:er i mobilappar, pixlar och signaler som liknar fingeravtryck. Vi använder ordet ”cookies” för alla dessa.

## 2. Kategorier som vi använder {#categories}

| Kategori | Syfte | Krävs samtycke? |
|---|---|---|
| **Strikt nödvändiga** | Håller dig inloggad, kommer ihåg din varukorg eller dina inställningar under en session, skyddar mot bedrägerier och CSRF-attacker, balanserar serverbelastningen och sparar dina cookieval | Nej: krävs för att tjänsterna ska fungera eller för att leverera det du begärt |
| **Inställningar** | Kommer ihåg språk, tema, layout och liknande val | Ja, om de inte är strikt nödvändiga för en funktion som du har begärt |
{{#if feature.analytics}}| **Analys** | Mäter hur tjänsterna används och hittar fel så att vi kan förbättra dem | Ja (där lagen kräver det) |
{{/if}}{{#if feature.ads}}| **Reklam / marknadsföring** | Visar och mäter relevant reklam, begränsar upprepningar och kopplar aktivitet mellan webbplatser och appar | Ja |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Vi använder för närvarande **endast strikt nödvändiga cookies och inställningscookies** och inga analys- eller reklamcookies.{{/unless}}{{/unless}}

## 3. Cookies i detalj {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
De exakta namnen på cookies, leverantörer och livslängder finns i dialogrutan för cookieinställningar och kan begäras från [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Dina val {#choices}

- **Samtyckesbanner / inställningar.** Där samtycke krävs frågar vi innan vi sätter icke nödvändiga cookies, och det finns ett tydligt alternativ att avböja som är lika lätt att välja som att godkänna. Du kan ändra eller återkalla ditt val när som helst via länken till cookieinställningarna i sidfoten. Återkallande påverkar inte tidigare behandling.
- **Webbläsarinställningar.** De flesta webbläsare låter dig blockera eller radera cookies; se under Inställningar → Integritet. Om du blockerar strikt nödvändiga cookies kan inloggning och andra funktioner sluta fungera.
- **Ingen sessionsinspelning.** Vi använder inga verktyg för sessionsinspelning eller skärminspelning.
{{#if feature.external}}- **Resurser från tredje part.** Där en resurs (till exempel teckensnitt, kartor eller video) laddas från ett annat företags server skickas din IP-adress dit. Vi ber om ditt samtycke för varje resurs separat i cookieinställningarna och laddar den först efter att du har godkänt; du kan ändra ditt val när som helst.
{{/if}}- **Signaler.** Vi behandlar Global Privacy Control (GPC) och liknande signaler för avböjande i webbläsaren som ett avslag mot icke nödvändig spårning och mot försäljning och delning av personuppgifter.
{{#if feature.ads}}- **Val för reklam.** Du kan välja bort intressebaserad reklam via inställningarna i din enhet (återställa eller begränsa din reklamidentifierare) och med verktyg som youronlinechoices.eu eller optout.aboutads.info. Du kommer fortfarande att se reklam, men den blir mindre relevant.
{{/if}}
## 5. Hur länge de gäller {#duration}

Sessionscookies upphör när du stänger webbläsaren. Permanenta cookies gäller under den period som visas i tabellen, och i vart fall inte längre än vad lagen rekommenderar (i allmänhet högst 13 månader för samtycke till analys och reklam, som vi ber dig förnya).

## 6. Tredje parter {#third-parties}

Vissa cookies sätts av tredje parter vars tjänster vi använder (analys, inbäddad media, betalning, supportchatt). De agerar enligt sina egna policyer och, där de är självständiga personuppgiftsansvariga, bör du läsa deras policyer. Vi listar dem i tabellen ovan.
{{#if table.external}}
Resurser som tar emot din IP-adress när de laddas:

{{table.external}}
{{/if}}

## 7. Ändringar {#changes}

Om vi lägger till eller ändrar icke nödvändiga cookies uppdaterar vi denna policy och begär ditt samtycke på nytt där det krävs. Frågor: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
