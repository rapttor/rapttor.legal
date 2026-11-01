---
doc: game_rules
title: Spelregler och policy för virtuella föremål
version: 1.0.0
updated: 2026-10-23
lang: sv
translation_of: 1.0.0
status: draft
when: feature.game
summary: Rättvist spel, uppförande i gemenskapen, virtuella föremål, oddsen för slumpmässiga belöningar och regler vid avslut av tjänsten för {{product.name}}.
---

# Spelregler och policy för virtuella föremål

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

Dessa regler kompletterar [användarvillkoren]({{url.terms}}) och [användningspolicyn]({{url.acceptable_use}}) för {{product.name}} och andra spel och interaktiva upplevelser från **{{company.name}}** (”**Spelet**”). Om de står i strid med varandra i en spelspecifik fråga gäller dessa regler.

## 1. Virtuella föremål och valuta {#virtual-items}

1. **Licens, inte ägande.** Virtuell valuta, föremål, skins, karaktärer, framsteg och liknande innehåll (”**Virtuella föremål**”) licensieras till dig på en begränsad, personlig, återkallelig, icke överlåtbar och icke underlicensierbar basis, endast för användning i Spelet. Du äger dem inte och har ingen äganderätt till dem, ditt konto eller dess framsteg.
2. **Inget kontantvärde.** Virtuella föremål är inte pengar, e-pengar, värdepapper eller lagrat värde. De kan inte lösas in mot kontanter eller varor, om inte tvingande lag föreskriver något annat.
3. **Ingen handel utanför Spelet.** Du får inte sälja, köpa, ge bort, byta, låna ut, auktionera eller på annat sätt överlåta virtuella föremål, konton eller framsteg mot riktiga pengar eller något annat värde utanför de funktioner som vi tillhandahåller. Sådan handel mot riktiga pengar (”**real-money trading**”) och all användning av tredjepartsmarknadsplatser är förbjuden. Föremål och konton som är inblandade kan tas bort, och kontona kan stängas av. Vi ansvarar inte för förluster till följd av affärer med tredje part.
4. **Priser och tydlighet.** Vi visar priserna för virtuella föremål i riktig valuta (eller priset för valutapaketet och vad det ger) innan du bekräftar ett köp, och vi gör inte framsteg omöjliga utan betalning där lagen förbjuder det. Skatter ingår för konsumenter när det krävs.
5. **Kontroll av utgifter.** Vi tillhandahåller, eller plattformen tillhandahåller, verktyg för att begränsa eller blockera köp (föräldrakontroller i enheten eller butiken samt eventuell utgiftsgräns i Spelet). Köp som görs på en enhet eller ett konto av någon som har åtkomst till det är ditt ansvar. {{#if feature.payments}}Se [Återbetalningar]({{url.refunds}}) för hur du begär att vi granskar ett obehörigt eller oavsiktligt köp gjort av en minderårig.{{else}}Kontakta oss för att begära granskning av ett obehörigt eller oavsiktligt köp gjort av en minderårig.{{/if}}
6. **Ändringar.** Vi kan ändra, balansera om, byta namn på, dra tillbaka eller begränsa virtuella föremål och funktioner, och vi kan sätta utgångsdatum för kampanjföremål, i takt med att Spelet utvecklas. Vi tar inte bort betalda virtuella föremål som du redan har köpt, utom på det sätt som anges i denna policy (avstängningar, avslut av tjänsten) eller när lagen tillåter det.
7. **Fritt tilldelade och förtjänade föremål.** Föremål som förtjänats genom spel eller getts gratis har inget värde, kan återställas och går förlorade när kontot stängs.

## 2. Slumpmässiga belöningar (”lootboxar”) {#random-rewards}

Om Spelet erbjuder föremål som erhålls genom slumpen (lootboxar, gacha, kortpaket, snurrar) gäller följande:
- vi **redovisar sannolikheterna** för varje utfallskategori före köpet, i Spelet och där butiken kräver det;
- föremål som erhålls genom slumpen kan normalt också erhållas utan betalning om Spelet anger det, och betalda slumpmässiga belöningar **erbjuds inte där lagen förbjuder eller begränsar dem**; vi kan inaktivera dem i sådana länder eller för spelare under åldersgränsen;
- slumpmässiga belöningar ger **inte** dig någon rätt att vinna pengar eller något annat utanför Spelet.

## 3. Rättvist spel {#fair-play}

Spela rättvist. Du får inte:

1. **fuska eller använda obehörig programvara:** hack, aimbots, wallhacks, makron eller skript som automatiserar spelandet, speedhacks, minneseditorer, manipulering av datapaket, ändrade eller emulerade klienter eller verktyg som ger en orättvis fördel;
2. **utnyttja buggar eller glitchar** för fördel, för att duplicera föremål eller valuta eller för att kringgå betalning. Du ska rapportera upptäckta brister till [{{company.email}}](mailto:{{company.email}}) i stället för att använda eller dela dem;
3. **bota eller farma** med automatiserade konton, eller köra flera konton för att få fördel, samla belöningar eller manipulera matchmaking;
4. **manipulera resultat:** win-trading, matchfixning, boosting, avsiktlig förlust eller medvetet kast, samspel, manipulation av ledartavlor eller rankningar, smurfing för att skada spelare med lägre rating;
5. **störa andra:** DDoS eller lag switching mot motståndare, stream sniping eller ghosting i tävlingsspel, griefing, avsiktlig frånkoppling, spawn camping utöver spelreglerna eller spam;
6. **dela, sälja, köpa eller boosta konton**, rankningar, föremål eller tjänster (kontohandel och betald boosting);
7. **göra reverse engineering** av Spelet, servrarna, protokollen eller fusksystemet, eller skapa obehöriga servrar eller klienter;
8. **kringgå avstängningar** genom att skapa nya konton, ändra hårdvaru- eller nätverksidentifierare eller använda någon annans konto.

## 4. Skydd mot fusk och integritetsåtgärder {#anti-cheat}

För att hålla spelandet rättvist använder vi system mot fusk och integritetssystem som kan köras under Spelet{{#if feature.mobile}} (på mobil även kontroller av enhetens integritet){{/if}}. De kan söka efter obehörig programvara och läsa begränsade tekniska uppgifter, till exempel namn på körande processer, enhets- och hårdvaruidentifierare samt telemetri om spelets tillstånd. Genom att spela samtycker du till denna behandling enligt beskrivningen i [integritetspolicyn]({{url.privacy}}). Där en komponent på kärnnivå (kernel-level) eller med liknande privilegier krävs beskrivs den i installations- eller startmeddelandet. Den körs endast medan Spelet körs, där det är tekniskt möjligt, och läser inte dina filer, din kommunikation eller din surfning. Upptäckta överträdelser kan leda till automatiska åtgärder och åtgärder efter mänsklig granskning enligt avsnitt 7.

## 5. Uppförande i gemenskapen {#community}

Behandla andra med respekt. Utöver avsnitt 1 i [användningspolicyn]({{url.acceptable_use}}) är följande inte tillåtet i chatt, röst, namn, avatarer, klan- eller gillenamn eller i användarskapade nivåer och föremål:

- hat, trakasserier, hot, sexuellt innehåll som involverar eller riktar sig mot minderåriga, mobbning, sexuella trakasserier, doxxing, grooming eller försök att få en minderårig att flytta till en annan plattform;
- reklam, skräppost, bedrägerier, nätfiske, tiggeri, utgivning av sig för att vara personal eller andra spelare, eller erbjudanden om affärer mot riktiga pengar;
- politisk kampanjverksamhet i verkliga sammanhang, extremistiska symboler eller hyllning av våld, samt innehåll som kränker andras rättigheter.

**Säkerhet i röst och chatt.** För att upprätthålla dessa regler kan chatttext loggas och filtreras automatiskt, och röstchatt som anmäls till oss kan granskas utifrån en kort inspelning eller transkription som sparas för anmälan (i regel inte längre än {{policy.notice_days}} dagar, om den inte behövs för ett pågående ärende). Du kan tysta och blockera spelare samt anmäla dem i Spelet.

## 6. Användarskapat innehåll, mods och streaming {#ugc}

{{#if feature.ugc}}Innehåll som du skapar i Spelet (nivåer, föremål, skins, meddelanden) omfattas av avsnitt 6 i användarvillkoren. {{/if}}Om inte en separat innehållspolicy säger något annat gäller följande:
- du får **streama, spela in och dela spelupplevelser** och tjäna pengar på sådana videor, under förutsättning att du följer dessa regler, inte antyder att vi godkänner dem och respekterar de regler för tredjepartsmusik och annat innehåll som gäller på den plattform du publicerar på (vi licensierar inte tredjepartsinnehåll till dig);
- **mods** eller tillägg är tillåtna endast om vi publicerar verktyg för dem, de är kostnadsfria och icke-kommersiella, de inte påverkar rättvist spel eller säkerhet och de inte använder våra varumärken på ett vilseledande sätt; vi kan återkalla tillståndet och inaktivera dem;
- vi kan använda skärmbilder, klipp och gemenskapsinnehåll som du delar offentligt för marknadsföring, med angivande av källa, om du inte invänder.

## 7. Åtgärder {#enforcement}

I proportion till allvar, upprepning och skada kan vi: varna; stänga av eller begränsa chatt; ta bort innehåll eller namn; återställa eller ta bort rankningar, poäng, framsteg och virtuella föremål som erhållits på otillåtet sätt; stänga av eller avstänga konton (även genom enhets- eller hårdvaruidentifierare); hålla inne belöningar; och anmäla olaglig verksamhet till myndigheterna. **Virtuella föremål och valuta på konton som stängts på grund av överträdelse (fusk, handel mot riktiga pengar, bedrägeri, missbruk av chargebacks) förverkas utan återbetalning** där lagen tillåter det.

Vi anger skälet när det är praktiskt möjligt och när lagen kräver det, och du kan begära omprövning genom att skriva till [{{company.legal_email}}](mailto:{{company.legal_email}}) inom 6 månader. Vi för register över avstängningar för att förhindra upprepade överträdelser. Automatiska upptäckter granskas av en person vid överklagande.

## 8. Evenemang, turneringar och priser {#events}

Evenemang, turneringar, ledartavlor och utlottningar kan ha **officiella regler** som publiceras i samband med evenemanget, och de gäller före dessa regler för det evenemanget. Om inget annat anges finns inga kontantpriser. Där priser erbjuds beror de på skicklighet och inte på slumpen eller på köp, de är öppna endast där det är lagligt och för behöriga åldrar, de kan kräva kontroll av identitet och bosättning, och vinnaren är skattskyldig. Köp förbättrar aldrig dina chanser i en utlottning. Vi är inte ett spelbolag, och Spelet får inte användas för spel om pengar.

## 9. Tillgänglighet och avslut av tjänsten {#end-of-service}

Onlinespel är beroende av servrar. Vi kan utföra underhåll, ändra eller avsluta funktioner, innehåll, spellägen eller själva Spelet. Om vi beslutar att **avsluta Spelet eller en betald tjänst** ger vi minst **60 dagars varsel** (kortare endast när lagen eller en nödsituation kräver det) via e-post, i Spelet och på vår webbplats. Vi slutar sälja virtuella föremål minst 30 dagar före det och anger vad som händer med ditt innehåll och, där lagen kräver det eller vi erbjuder det, hur återstående betalda saldon återbetalas eller kompenseras. Där det är rimligt möjligt håller vi offline- eller enspelarlägen igång eller släpper uppdateringar eller verktyg som gör det möjligt att fortsätta spela. Ingenting i detta avsnitt begränsar tvingande konsumenträttigheter.

## 10. Spelarens hälsa och säkerhet {#health}

Långa spelpass kan påverka dig. Ta pauser. Vissa spel innehåller blinkande ljus som kan utlösa anfall hos personer med fotosensitiv epilepsi. Sluta och rådgör med läkare om du mår dåligt. Föräldrar och vårdnadshavare bör granska åldersgränser, föräldrakontroller och utgiftsgränser samt prata med barn om säkert nätspelande.

## 11. Kontakt {#contact}

Spelsupport, anmälningar och överklaganden: [{{company.email}}](mailto:{{company.email}}). Juridiska anmälningar och anmälningar om missbruk: [{{company.legal_email}}](mailto:{{company.legal_email}}).
