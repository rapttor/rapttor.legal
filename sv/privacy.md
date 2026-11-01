---
doc: privacy
title: Integritetspolicy
version: 1.2.1
updated: 2026-10-31
lang: sv
translation_of: 1.2.1
status: draft
summary: Hur {{product.name}} samlar in, använder, delar och skyddar personuppgifter, och vilka rättigheter du har.
---

# Integritetspolicy

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

## 1. Vilka vi är {#who-we-are}

Denna policy förklarar hur **{{company.name}}** med registrerad adress på {{company.address}} (”**{{product.name}}**”, ”vi”, ”oss”) behandlar personuppgifter när du använder {{product.name}}, våra webbplatser, applikationer, API:er och relaterade tjänster (”**tjänsterna**”).

För personuppgifter där vi bestämmer hur och varför de behandlas (till exempel ditt konto, dina webbplatsbesök och faktureringen) är vi **personuppgiftsansvarig**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Vårt dataskyddsombud nås på [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Vi har inte utsett något dataskyddsombud eftersom lagen inte kräver det för vår verksamhet. Frågor om integritet skickas till [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**EU-representant (art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**UK-representant (art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### När vi är personuppgiftsbiträde

Om du använder tjänsterna via en organisation (till exempel din arbetsgivare eller en affärskund) är den organisationen vanligtvis personuppgiftsansvarig för de uppgifter den lägger in i tjänsterna, och vi behandlar dem för dess räkning enligt vårt [Personuppgiftsbiträdesavtal]({{url.dpa}}). I så fall riktar du dina förfrågningar till den organisationen; vi hjälper den att svara. Denna policy gäller då endast de uppgifter som vi själva bestämmer över (kontoadministration, fakturering, säkerhet och webbplatsen).
{{/if}}

## 2. Uppgifter vi samlar in {#data-we-collect}

| Kategori | Exempel | Källa |
|---|---|---|
| **Kontouppgifter** | namn, e-postadress, lösenordshash, profiluppgifter, språk, inställningar | Du |
| **Kontakt- och supportuppgifter** | meddelanden, bilagor, anteckningar från samtal, återkoppling, svar i enkäter | Du |
| **Innehåll du skickar in** | filer, text, inställningar, allt du lägger in i tjänsterna | Du |
{{#if feature.anonymous}}| **Uppgifter för anonymt konto** | en slumpmässig kontoidentifierare, webbläsar- eller enhetssessionen som håller den, innehållet du skapar och en e-postadress om du senare kopplar en | Du, automatiskt |
{{/if}}{{#if feature.uploads}}| **Filer och bilder du laddar upp** | själva filerna och metadata i dem (till exempel kamerauppgifter eller plats i foton) | Du |
{{/if}}| **Samtyckesregister** | vad du har godkänt (dokument, åldersbekräftelse, valfria val), version, språk, datum och hur du godkände | Du |
| **Användnings- och enhetsuppgifter** | IP-adress, webbläsar- och enhetstyp, operativsystem, språk, sidor och funktioner som använts, tidsstämplar, hänvisande webbadress, krasch- och felloggar | Automatiskt |
| **Cookies och liknande tekniker** | identifierare i cookies, lokal lagring, SDK:er (se [cookiepolicyn]({{url.cookies}})) | Automatiskt |
{{#if feature.payments}}| **Betalnings- och transaktionsuppgifter** | abonnemang, fakturor, namn och adress för fakturering, skatte-ID, betalningsstatus; kortuppgifter hanteras av vår betalningsleverantör och lagras inte av oss | Du, betalningsleverantören |
{{/if}}{{#if feature.location}}| **Platsuppgifter** | exakt plats endast om du aktiverar det i din enhet; annars ungefärlig plats utifrån IP-adressen | Din enhet |
{{/if}}| **Uppgifter från tredjepartskonto** | namn, e-postadress, profilbild och identifierare som delas av en inloggningsleverantör som du väljer | Tredje part, med ditt tillstånd |
{{#if feature.ugc}}| **Kommunikation mellan användare** | meddelanden och interaktioner som du skickar via tjänsterna | Du |
{{/if}}{{#if feature.mobile}}| **Uppgifter om mobil enhet** | enhetsmodell och operativsystemversion, appversion, app-instans- och pushnotistokens, språk och tidszon, behörighetsstatus; reklamidentifierare endast om du tillåter spårning | Din enhet |
{{/if}}{{#if feature.game}}| **Speldata** | spelframsteg, poäng, rankingar, föremål och köp, matchhistorik, chatt i spelet och (om den används) röstrapporter, signaler för fusk- och integritetskontroll, offentlig profil (namn, avatar, rang) | Du, automatiskt |
{{/if}}| **Säkerhets- och bedrägerisignaler** | misslyckade inloggningar, missbruksrapporter, riskpoäng, blockerade förfrågningar | Automatiskt, andra användare |

Vi samlar inte medvetet in särskilda kategorier av personuppgifter (hälsa, biometri, politiska eller religiösa åsikter och liknande). Lämna dem inte, om inte en funktion uttryckligen ber om det. Om du ändå lämnar sådana uppgifter ansvarar du för att ha en rättslig grund för det.

Du är inte skyldig att lämna personuppgifter till oss, men utan vissa av dem (till exempel en e-postadress) kan vi inte tillhandahålla ett konto.

### Spårning som vi inte använder {#no-tracking}

Vi använder **inte** verktyg för sessionsinspelning eller skärminspelning, registrering av tangenttryckningar eller musrörelser, eller webbläsarfingeravtryck. {{#if feature.analytics}}Analys körs endast med ditt samtycke (se [cookiepolicyn]({{url.cookies}})).{{else}}Vi använder inga analys- eller reklamspårare.{{/if}}
{{#if feature.external}}
### Resurser från tredje part och din IP-adress {#external}

Vissa funktioner laddar innehåll från andra företags servrar (till exempel teckensnitt, kartor, video eller säkerhetskontroller). När din webbläsare hämtar sådant innehåll **skickas din IP-adress och tekniska uppgifter till det företaget**, som kan finnas utanför ditt land. Vi laddar dessa resurser först när du har godkänt varje resurs i cookieinställningarna, som du kan ändra när som helst; om du säger nej använder vi en reservlösning eller så är funktionen avstängd.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-post {#emails}

Vi skickar e-post som tjänsterna behöver (inloggningslänkar, kvitton, säkerhetsmeddelanden){{#if feature.marketing}} och, endast när du har godkänt det eller lagen tillåter det, produktnyheter{{/if}}. Varje e-postmeddelande innehåller en länk för att sluta få e-post från oss. {{#if feature.marketing}}Valfria e-postmeddelanden upphör med ett klick, omedelbart. {{/if}}Eftersom en blockering av all e-post också skulle blockera inloggningslänkar bekräftas en begäran om att blockera **all** e-post från denna tjänst med ett sista e-postmeddelande som innehåller en länk som visar att adressen är din. Vi lägger sedan till adressen i vår e-postleverantörs sändningsspärrlista och behåller den där för att kunna respektera ditt val (rättslig skyldighet och vårt berättigade intresse av att respektera din begäran).
{{/if}}{{#if feature.age_gate}}
### Bekräftelse av ålder {#age}

Innan du använder funktioner som involverar {{policy.age_topics|åldersbegränsat innehåll}} ber vi dig bekräfta att du är minst {{policy.age_gate}} år gammal och myndig enligt reglerna i ditt land. Vi frågar inte efter ditt födelsedatum utan sparar endast din bekräftelse och när du lämnade den. Om vi får veta att någon är under åldern blockerar vi kontot och raderar uppgifterna.
{{/if}}{{#if feature.gambling}}
För spelfunktioner kan vi även be dig visa upp bevis på din ålder och identitet, och vi använder en verifieringsleverantör för detta. Vi sparar resultatet och de bevis som lagen kräver.
{{/if}}

## 3. Varför vi använder dina uppgifter och våra rättsliga grunder {#purposes}

| Ändamål | Rättslig grund (GDPR / UK GDPR) |
|---|---|
| Tillhandahålla tjänsterna, skapa och hantera ditt konto, behandla beställningar | Avtal (art. 6.1 b) |
| Kundsupport och kommunikation om din användning av tjänsterna | Avtal; berättigade intressen |
| Säkerhet, förebyggande av missbruk och bedrägerier, och upprätthållande av våra [Användarvillkor]({{url.terms}}) och [användningspolicy]({{url.acceptable_use}}) | Berättigade intressen (art. 6.1 f); rättslig skyldighet |
| Felsökning, tillförlitlighet, kapacitetsplanering och förbättring av tjänsterna | Berättigade intressen |
{{#if feature.analytics}}| Användningsanalys | Samtycke där lagen kräver det, annars berättigade intressen |
{{/if}}{{#if feature.marketing}}| Produktnyheter och marknadsföringsmejl | Samtycke, eller berättigade intressen för befintliga kunder där lagen tillåter det; du kan avregistrera dig när som helst |
{{/if}}{{#if feature.ads}}| Reklam och mätning | Samtycke |
{{/if}}| Registrering av dina samtycken och respekterande av dina val om e-post | Rättslig skyldighet; berättigade intressen |
{{#if feature.external}}| Laddning av resurser från tredje part som tar emot din IP-adress | Samtycke (art. 6.1 a, och ePrivacy-reglerna för åtkomst till din enhet) |
{{/if}}| Bokföring, skatt och andra rättsliga skyldigheter | Rättslig skyldighet (art. 6.1 c) |
| Fastställande, utövande eller försvar av rättsliga anspråk; svar till myndigheter | Berättigade intressen; rättslig skyldighet |
| Överlåtelser av verksamhet (fusion, förvärv, försäljning av tillgångar) | Berättigade intressen |

Där vi grundar oss på berättigade intressen har vi vägt dem mot dina rättigheter; du kan begära detaljer och du kan göra invändningar (avsnitt 10). Där vi grundar oss på samtycke kan du återkalla det när som helst; det påverkar inte tidigare behandling.

{{#if feature.ai}}
### AI-stödda funktioner {#ai}

Vissa funktioner använder modeller för maskininlärning eller generativ AI. När du använder dem skickas det innehåll du lämnar som indata till leverantören, som agerar som vårt personuppgiftsbiträde, för att ta fram resultatet.

- Vi använder **inte** ditt innehåll för att träna allmänna modeller, och vi kräver att våra leverantörer inte gör det, om du inte uttryckligen väljer att samtycka.
- Resultat från AI kan vara felaktiga, ofullständiga eller partiska. Förlita dig inte på det för juridiska, medicinska, ekonomiska eller andra beslut med stora konsekvenser utan mänsklig granskning.
- Vi fattar inte beslut med rättsliga eller liknande betydande verkningar om dig enbart på automatiserad väg. Kontobegränsningar på grund av missbruk granskas av en person på begäran (se [användningspolicyn]({{url.acceptable_use}}), Verkställighet).
- AI-genererat innehåll märks där lagen kräver det.
{{/if}}

## 4. Vilka vi delar uppgifter med {#sharing}

**Vi säljer inte dina personuppgifter**, och vi ”delar” dem inte för beteendebaserad reklam över olika sammanhang{{#if feature.ads}}, utom såsom beskrivs i cookiepolicyn och endast där du har samtyckt{{/if}}.

Vi delar personuppgifter endast med:

- **Tjänsteleverantörer (personuppgiftsbiträden)** som agerar enligt våra instruktioner och skriftliga avtal: webbhotell och infrastruktur, leverans av e-post, verktyg för kundsupport, felövervakning{{#if feature.payments}}, betalningshantering{{/if}}{{#if feature.ai}}, AI-leverantörer{{/if}}. Den aktuella listan finns i vår [underbiträdeslista]({{url.subprocessors}}).
- **Plattformar och appbutiker** som du använder för att komma åt tjänsterna (till exempel Apple, Google, konsol- eller datorbutiker), som hanterar betalningar och kan ge oss begränsade köp- och kontouppgifter;
- **Andra användare eller allmänheten**, endast enligt dina anvisningar (till exempel innehåll som du väljer att publicera{{#if feature.ugc}} eller meddelanden som du skickar{{/if}});
- **Professionella rådgivare** (advokater, revisorer, försäkringsbolag) under sekretess.
- **Myndigheter, domstolar och berörda parter** när lagen kräver det, för att svara på giltig rättslig begäran, för att skydda rättigheter, säkerhet eller egendom, eller för att utreda missbruk och bedrägerier. Vi kontrollerar att begäranden är giltiga och, där det är lagligt, informerar vi dig.
- **En efterträdare** vid fusion, förvärv, finansiering eller försäljning av tillgångar, som måste följa denna policy; vi meddelar dig om väsentliga förändringar av ägandet som påverkar dina uppgifter.
- **Andra** endast med ditt samtycke.

## 5. Internationella överföringar {#transfers}

Vi är verksamma från {{company.country}}{{#if hosting.region}} och lagrar uppgifter huvudsakligen i {{hosting.region}}{{/if}}. Vissa leverantörer behandlar uppgifter i andra länder, bland annat i USA. När personuppgifter från EES, Storbritannien eller Schweiz överförs till ett land utan adekvat skyddsnivå använder vi ett erkänt skyddsinstrument: EU–USA:s ramverk för dataskydd (eller dess förlängningar för Storbritannien och Schweiz) där mottagaren är certifierad, annars Europeiska kommissionens **standardavtalsklausuler**, med **UK International Data Transfer Addendum** eller schweiziska tillägg där det är relevant, samt kompletterande åtgärder såsom kryptering under överföring och i vila. Du kan begära en kopia av relevanta skyddsinstrument via [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Hur länge vi sparar uppgifter {#retention}

| Uppgifter | Lagringstid |
|---|---|
| Kontouppgifter och innehåll | Så länge ditt konto är aktivt, därefter raderas eller anonymiseras uppgifterna inom {{policy.retention_account_days}} dagar efter att kontot stängts |
| Server- och säkerhetsloggar | 90 dagar |
| Säkerhetskopior | Löpande, upp till 35 dagar; raderade uppgifter försvinner ur säkerhetskopiorna i den cykeln |
| Fakturor och bokföringshandlingar | {{policy.retention_billing_years}} år, eller så länge lagen kräver |
| Supportkorrespondens | Upp till 3 år efter att ärendet avslutats, eller så länge kontot är aktivt om det är längre |
| Register över samtycken, avregistreringar och begäranden om rättigheter | Så länge det behövs för att kunna visa efterlevnad |
| Uppgifter som behövs för ett rättsligt anspråk eller en utredning | Tills ärendet är avslutat och preskriptionstiderna har löpt ut |
| Register över missbruk och avstängningar (identifierare, skäl, datum) | Upp till 5 år, för att förhindra upprepat missbruk |
| Samtyckesregister och sändningsspärrlista för e-post | Samtyckesregister: under kontots hela livstid plus preskriptionstiden; poster i sändningsspärrlistan: tills du begär att de tas bort |

När ändamålet upphör raderar vi uppgifterna eller anonymiserar dem på ett oåterkalleligt sätt.

## 7. Säkerhet {#security}

Vi använder tekniska och organisatoriska åtgärder som är anpassade efter risken: kryptering under överföring, kryptering av känsliga uppgifter i vila, åtkomstkontroll med minsta möjliga behörighet, skydd vid autentisering, loggning, säkerhetskopior, hantering av sårbarheter och sekretessskyldighet för personal. Inget system är helt säkert. Använd ett starkt, unikt lösenord, aktivera flerfaktorautentisering där det erbjuds och kontakta oss omedelbart på [{{company.email}}](mailto:{{company.email}}) om du misstänker att ditt konto har komprometterats. Se även vår sida [Säkerhet och sårbarhetsrapportering]({{url.security}}).

Om en personuppgiftsincident sannolikt medför en risk för dina rättigheter och friheter kommer vi att anmäla den till tillsynsmyndigheten inom 72 timmar från det att vi fick kännedom om den, när lagen kräver det, och vi informerar dig utan onödigt dröjsmål när lagen kräver det.

## 8. Barn {#children}

{{#if feature.minors}}Tjänsterna riktar sig inte till barn under 13 år, och vi samlar inte medvetet in personuppgifter från dem. Användare som är {{policy.min_age}} år eller äldre men som ännu inte har nått myndighetsåldern får använda tjänsterna **endast med samtycke från en vårdnadshavare**, som kan granska, rätta, begränsa eller radera den minderårigas uppgifter och återkalla samtycket genom att kontakta [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Vi samlar endast in de uppgifter som behövs för tjänsterna, använder inte minderårigas uppgifter för beteendebaserad reklam och tillämpar åldersanpassade standardinställningar (privata profiler, begränsad kommunikation) där vi kan. Där lagen i ett land anger en högre digital samtyckesålder kräver vi vårdnadshavares samtycke under den åldern.{{else}}Tjänsterna riktar sig inte till barn. Du måste vara minst {{policy.min_age}} år för att ha ett konto. Vi samlar inte medvetet in personuppgifter från någon under {{policy.min_age}} år (eller under den högre digitala samtyckesåldern i deras land; i USA under 13 år enligt COPPA). Om du anser att ett barn har lämnat personuppgifter till oss, kontakta [{{company.privacy_email}}](mailto:{{company.privacy_email}}) så raderar vi dem och stänger kontot. Där en vårdnadshavare har lämnat giltigt samtycke till att en minderårig använder tjänsterna kan det samtycket återkallas när som helst.{{/if}}

## 9. Tredjepartswebbplatser och tjänster {#third-parties}

Tjänsterna kan länka till eller integreras med webbplatser, tillägg och appar från tredje part, inklusive inloggningsleverantörer. Vi kontrollerar dem inte och ansvarar inte för deras integritetsrutiner; deras egna policyer styr vad de samlar in. Koppla bort integrationer i dina kontoinställningar eller i tredje parts inställningar.

## 10. Dina rättigheter {#rights}

Beroende på var du bor kan du:

- **få tillgång** till dina uppgifter och en kopia av dem;
- **rätta** felaktiga uppgifter;
- **radera** dina uppgifter (”rätten att bli bortglömd”);
- **begränsa** behandlingen eller **göra invändningar** mot den, inklusive direktmarknadsföring när som helst;
- **flytta** dina uppgifter till en annan leverantör i ett maskinläsbart format;
- **återkalla ditt samtycke** när som helst;
- **inte bli föremål för beslut som enbart grundas på automatiserad behandling** och som har rättsliga eller liknande betydande verkningar;
- **klaga** till en tillsynsmyndighet.

**Radera ditt konto.** Du kan radera ditt konto och dina personuppgifter {{#if feature.mobile}}i appen (Inställningar, sedan Konto, sedan Radera konto), {{/if}}i dina kontoinställningar på vår webbplats eller genom att skicka e-post; vi kräver inte att du kontaktar supporten om självbetjäning finns tillgänglig. Att radera ett konto är permanent efter den karensperiod som vi visar dig. Att avinstallera en app raderar inte ditt konto.

För att utöva en rättighet, skicka e-post till [{{company.privacy_email}}](mailto:{{company.privacy_email}}) eller använd inställningarna i ditt konto. Vi kan behöva verifiera din identitet och, om begäran är uppenbart ogrundad eller överdriven, kan vi ta ut en rimlig avgift eller avslå den, i den mån lagen tillåter. Vi svarar inom **en månad** (kan förlängas med ytterligare upp till två månader för komplexa begäranden; 45 dagar enligt delstatslagar i USA, med möjlighet till förlängning med 45 dagar), och vi berättar varför om vi inte kan uppfylla begäran. Vi diskriminerar dig inte för att du utövar dina rättigheter.

### 10.1 Europeiska ekonomiska samarbetsområdet, Storbritannien, Schweiz

Alla rättigheter ovan gäller. Du kan lämna in ett klagomål till myndigheten i det land där du bor, arbetar eller där problemet uppstod ([förteckning över EES-myndigheter](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Storbritannien: [ICO](https://ico.org.uk); Schweiz: [FDPIC](https://www.edoeb.admin.ch)). Vår ledande tillsynsmyndighet är {{law.authority}}.

### 10.2 Serbien

Där den serbiska lagen om skydd av personuppgifter är tillämplig har du rättigheter som motsvarar de ovan, och du kan klaga till Poverenik (kommissionären för information av allmänt intresse och skydd av personuppgifter), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Förenta staterna (Kalifornien och andra delstater) {#us-states}

Detta avsnitt kompletterar det ovanstående för invånare i Kalifornien och andra amerikanska delstater med omfattande integritetslagar (bland annat Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana och andra när de träder i kraft).

- **Kategorier som samlats in under de senaste 12 månaderna:** identifierare (namn, e-post, IP-adress, onlineidentifierare); kundregister; kommersiell information (abonnemang, köp); internet- eller nätverksaktivitet; ungefärlig geolokalisering{{#if feature.location}} och exakt geolokalisering med ditt tillstånd{{/if}}; innehåll du lämnar; slutsatser som endast begränsas till att driva tjänsterna. Vi lämnar ut dessa till tjänsteleverantörer för de affärsändamål som anges i avsnitt 3.
- **Försäljning och delning:** vi säljer inte personlig information och delar den inte för beteendebaserad reklam över olika sammanhang. Vi säljer eller delar medvetet inte uppgifter om någon under 16 år.
- **Känslig personlig information:** vi använder den inte för att dra slutsatser om egenskaper och använder den inte utöver vad som är nödvändigt för att tillhandahålla tjänsterna.
- **Dina rättigheter:** att få veta vad som finns och få tillgång till det, att radera, rätta, flytta, avstå från försäljning och delning samt från riktad reklam eller profilering, begränsa användningen av känsliga uppgifter och icke-diskriminering. Vi respekterar **Global Privacy Control** och liknande signaler för avböjande i webbläsaren som en giltig begäran om avböjande.
- **Behöriga ombud och överklaganden:** ett behörigt ombud får lämna begäranden med ditt skriftliga tillstånd. Om vi avslår en begäran kan du överklaga genom att svara på vårt beslut; om du fortfarande är missnöjd kan du kontakta din delstats justitieombudsman (attorney general).
- **Kalifornien:** du kan begära en förteckning över tredje parter till vilka vi har lämnat personlig information för deras direktmarknadsföring under föregående kalenderår (”Shine the Light”); vi gör inga sådana utlämnanden. Kaliforniska invånare under 18 år som är registrerade användare kan begära att innehåll som de offentligt har publicerat tas bort.

### 10.4 Brasilien (LGPD)

Du kan begära bekräftelse på behandling, tillgång, rättelse, anonymisering, blockering eller radering av onödiga eller överdrivna uppgifter, portabilitet, information om vilka enheter vi delar uppgifter med, information om möjligheten att vägra samtycke och vilka konsekvenser det har, samt en översyn av automatiserade beslut. Du kan klaga till Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Andra regioner

Om du befinner dig någon annanstans med en lag om dataskydd respekterar vi de motsvarande rättigheter som din lag ger dig. I synnerhet gäller följande:

| Var | Vad vi lägger till |
|---|---|
| **Kanada** (PIPEDA, Québec Law 25) | Du kan få tillgång till och rätta dina uppgifter, återkalla samtycke och klaga till Office of the Privacy Commissioner eller Commission d'accès à l'information. Vår kontakt för integritet är den person som ansvarar för skyddet av personlig information; överföringar utanför Québec bedöms och skyddas. |
| **Indien** (DPDP Act 2023) | Du kan få tillgång till, rätta och radera dina uppgifter, utse en annan person att utöva dina rättigheter om du avlider eller blir oförmögen, och använda vår klagomålskontakt nedan; du kan klaga till Data Protection Board. |
| **Australien, Nya Zeeland** | Du kan begära tillgång och rättelse och klaga till oss, och sedan till OAIC (Australien) eller Privacy Commissioner (Nya Zeeland). |
| **Japan, Sydkorea, Singapore, Thailand, Malaysia, Turkiet, UAE, Saudiarabien, Sydafrika, Kenya, Nigeria och liknande lagar** | Vi tillämpar de rättigheter och skyddsåtgärder som dessa lagar kräver (tillgång, rättelse, radering, invändning, klagomål till lokal myndighet, skyddsåtgärder för överföringar). Kontakta oss för att använda dem. |
| **Kina** | Tjänsterna riktar sig inte till personer i Kinas fastland; använd dem inte för att lämna personuppgifter om personer där. |

**Kontakt för klagomål och integritet i alla regioner:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Vi hanterar begäranden inom den tid som den tillämpliga lagen tillåter.

## 11. Ändringar i denna policy {#changes}

Vi kan uppdatera denna policy för att återspegla ändringar i tjänsterna eller i lagen. Vid väsentliga ändringar ger vi dig minst {{policy.notice_days}} dagars varsel via e-post eller i tjänsterna innan de träder i kraft för dig, och vi begär nytt samtycke där lagen kräver det. Datumet för ”senast uppdaterad” ovan visar den aktuella versionen; tidigare versioner finns tillgängliga på begäran.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
