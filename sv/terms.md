---
doc: terms
title: Användarvillkor
version: 1.3.0
updated: 2026-10-31
lang: sv
translation_of: 1.3.0
status: draft
summary: Avtalet mellan dig och {{product.name}} för användningen av {{product.name}}.
---

# Användarvillkor

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

## 1. Avtal {#agreement}

Dessa användarvillkor (”**Villkoren**”) utgör ett bindande avtal mellan dig och **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, registreringsnummer {{company.reg_id}}{{/if}} (”**{{product.name}}**”, ”vi”, ”oss”) och reglerar din åtkomst till och användning av {{product.name}}, våra webbplatser, applikationer, API:er, dokumentation och tillhörande tjänster (”**Tjänsterna**”).

Genom att skapa ett konto, installera en app eller på annat sätt använda Tjänsterna godkänner du dessa villkor och de dokument som de innehåller genom hänvisning: [integritetspolicyn]({{url.privacy}}), [användningspolicyn]({{url.acceptable_use}}), [cookiepolicyn]({{url.cookies}}){{#if feature.processor_role}}, [personuppgiftsbiträdesavtalet]({{url.dpa}}) där det är tillämpligt{{/if}}{{#if feature.payments}}, [villkoren för återbetalning och avbokning]({{url.refunds}}){{/if}}{{#if feature.game}}, [spelregler och policy för virtuella föremål]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [appvillkoren]({{url.app_eula}}){{/if}} samt eventuell beställningsblankett eller produktspecifika villkor. Om du inte godkänner dem ska du inte använda Tjänsterna.

Om du använder Tjänsterna för en organisation bekräftar du att du har behörighet att binda den, och ”du” omfattar då även organisationen. Om produktspecifika villkor eller ett undertecknat avtal står i strid med dessa villkor gäller de endast för den produkten eller kunden.

{{#if feature.consumers}}
**Konsumenter.** Om du använder Tjänsterna som konsument fortsätter tvingande konsumentskyddslagstiftning i ditt bosättningsland att gälla, och ingenting i dessa villkor begränsar de rättigheterna. Avsnitt markerade *(företagskunder)* gäller endast om du inte är konsument.
{{/if}}

## 2. Behörighet {#eligibility}

Du får använda Tjänsterna endast om du:

1. {{#if feature.minors}}är minst **{{policy.min_age}}** år gammal och, om du inte har nått myndighetsåldern där du bor, har samtycke från en förälder eller vårdnadshavare som godkänner dessa villkor för din del och ansvarar för din användning och dina köp (vi kan begära bevis){{else}}är minst **{{policy.min_age}}** år gammal och kan ingå ett bindande avtal{{/if}};
2. inte är förhindrad att ta emot Tjänsterna enligt tillämplig lag, inklusive sanktions- och exportkontrollregler (avsnitt 22);
3. inte tidigare har blivit borttagen från Tjänsterna för överträdelse av våra regler, såvida vi inte skriftligen har godkänt att du återfår tillträde; och
4. använder Tjänsterna på ett lagligt sätt där du befinner dig.
{{#if feature.age_gate}}5. bekräftar, när vi frågar, att du är minst **{{policy.age_gate}}** år gammal och har uppnått lagstadgad ålder enligt reglerna i ditt land för att använda funktioner som omfattar {{policy.age_topics|åldersreglerat innehåll}}. Vi behöver inte din födelsedag: din bekräftelse registreras. Om den inte stämmer kan vi blockera kontot och radera dess uppgifter.
{{/if}}{{#if feature.gambling}}6. bekräftar, när vi frågar, att du är minst **{{policy.gambling_age}}** år gammal, att spel om pengar är lagligt där du bor och att du endast använder spelfunktionerna för egen del. Vi kan kräva verifiering av verklig ålder och identitet, och kan neka eller avbryta åtkomst till spelfunktionerna där lagen eller våra licenser kräver det.
{{/if}}{{#if policy.excluded_regions}}7. bekräftar, när vi frågar, att du inte befinner dig i, och inte är bosatt eller medborgare i, något av följande länder eller områden: **{{policy.excluded_regions}}**, där våra Tjänster eller dessa villkor kanske inte är lagliga, kanske inte är verkställbara eller inte erbjuds. Vi kan inte se var du verkligen befinner dig (till exempel bakom en VPN), så vi förlitar oss på din bekräftelse. Om den inte stämmer använder du Tjänsterna på egen risk, du ansvarar själv för att följa lokal lag, och vi kan blockera kontot och radera dess uppgifter. Ingenting i denna punkt begränsar rättigheter som enligt lagen i ditt bosättningsland inte kan avstås från.
{{/if}}
Vi kan när som helst begära bevis för ålder, identitet eller behörighet, och kan vägra eller stänga ett konto som inte klarar kontrollen.

## 3. Konton och säkerhet {#accounts}

- Ange korrekt och aktuell information och håll den uppdaterad. En person eller enhet, ett konto, om vi inte kommer överens om annat; att skapa ytterligare konton för att kringgå en begränsning, gräns, avstängning, provperiod eller prisregel är förbjudet.
- Håll dina inloggningsuppgifter konfidentiella. Dela, sälj, hyr ut eller överlåt inte ditt konto. Varje plats är avsedd för en namngiven enskild person, om inte planen anger något annat.
- Du ansvarar för allt som sker under ditt konto, även det som sker genom personer du släpper in eller inte lyckas hålla borta, tills du informerar oss om att kontot har komprometterats. Meddela oss omedelbart på [{{company.email}}](mailto:{{company.email}}) om du misstänker obehörig åtkomst.
- Vi kan kräva starkare autentisering, återställa inloggningsuppgifter eller låsa ett konto som vi rimligen anser är komprometterat eller missbrukat.
- Inaktiva kostnadsfria konton kan stängas efter förhandsbesked till den e-postadress som finns registrerad; betalda konton stängs inte på grund av inaktivitet.
{{#if feature.anonymous}}- **Anonyma konton.** Där vi erbjuder det skapar Tjänsterna ett anonymt konto åt dig första gången du använder dem. Kontot har ingen e-postadress; den som använder just den webbläsaren eller enheten kan använda kontot, och vi kan inte återställa det åt dig om du förlorar åtkomsten. Du kan när som helst koppla en e-postadress för att säkra och återställa kontot: vi bekräftar adressen med en inloggningslänk som skickas dit. Anonyma konton som förblir oanvända under lång tid kan raderas efter meddelande i Tjänsterna, där det är möjligt.
{{/if}}- **Kontoinnehavare och åtkomst.** Den person som bekräftar kontrollen över en e-postadress med den inloggningslänk vi skickar, och som godkänner dessa villkor, är kontoinnehavare och behandlas som den person som gjort valen i kontot. Om du agerar för en organisation bekräftar du att du får binda den. Du bestämmer vilka andra i din organisation som får åtkomst (till exempel operatörer med begränsade roller). Personer som du ger åtkomst kan se det du gör tillgängligt för dem, och du ansvarar för det valet.

## 4. Licens och begränsningar {#licence}

Med förbehåll för dessa villkor och betalning av tillämpliga avgifter beviljar vi dig en begränsad, återkallelig, icke-exklusiv, icke-överlåtbar och icke-underlicensierbar licens att under avtalstiden använda och få åtkomst till Tjänsterna för dina egna interna personliga eller affärsmässiga ändamål. Programvara som vi levererar licensieras och säljs inte. Vi och våra licensgivare behåller alla rättigheter som inte uttryckligen har beviljats.

Om inte lagen ger dig en rättighet som inte kan avstås från får du inte, och du får inte låta någon annan:

- kopiera, ändra, översätta eller skapa härledda verk av Tjänsterna;
- göra reverse engineering, dekompilera, demontera eller försöka härleda källkod, modeller, vikter, algoritmer eller icke-offentliga API:er;
- återförsälja, underlicensiera, hyra ut, leasa, tillhandahålla som tjänstebyrå eller göra Tjänsterna tillgängliga för tredje part utöver dina auktoriserade användare;
- kringgå tekniska begränsningar, licensiering, mätning, åtkomstkontroller, hastighetsgränser eller säkerhetsfunktioner;
- ta bort eller ändra äganderättsliga meddelanden, upphovsangivelser eller meddelanden om licenser för öppen källkod;
- använda Tjänsterna eller deras resultat för att bygga eller träna en konkurrerande produkt, eller för att jämföra eller publicera prestandaresultat utan vårt skriftliga samtycke{{#if feature.ai}}, eller för att träna, finjustera eller destillera en AI-modell från Tjänsternas resultat där vi förbjuder det i dokumentationen{{/if}};
- få åtkomst till Tjänsterna med automatiserade metoder (botar, skrapor, sökrobotar) utom via vårt dokumenterade API och enligt dess villkor.

[Användningspolicyn]({{url.acceptable_use}}) innehåller detaljerade regler och är en del av dessa villkor. Komponenter med öppen källkod omfattas av sina egna licenser, som gäller för just dessa komponenter.

## 5. Acceptabel användning och efterlevnad {#acceptable-use}

Du ansvarar för din användning av Tjänsterna och för hur alla du låter använda dem beter sig. Missbruk kan skada andra användare, tredje part och oss, och vi kan agera enligt beskrivningen i [användningspolicyn]({{url.acceptable_use}}) och avsnitt 17, bland annat genom att ta bort innehåll, begränsa funktioner, strypa, stänga av eller säga upp konton, hålla inne utbetalningar, anmäla till myndigheter och driva rättsliga anspråk enligt avsnitt 21.

## 6. Ditt innehåll {#your-content}

{{#if feature.ugc}}
”**Ditt innehåll**” avser allt du laddar upp, skickar in, publicerar, kopplar eller genererar genom Tjänsterna{{#if feature.ai}}, inklusive prompter och, i förhållandet mellan dig och oss, de resultat du får{{/if}}.

- **Ägande.** Du behåller alla rättigheter till Ditt innehåll. Vi förvärvar inget ägande.
- **Licens till oss.** Du beviljar oss en världsomspännande, icke-exklusiv, royaltyfri licens att lagra, reproducera, behandla, överföra, anpassa (för formatering, miniatyrbilder, översättningar och säkerhetskontroller) och visa Ditt innehåll **endast i den mån det behövs för att driva, säkra, ge support till och förbättra Tjänsterna samt för att upprätthålla dessa villkor**, så länge du behåller det i Tjänsterna och under de begränsade perioder för säkerhetskopior och rättsligt bevarande som gäller efteråt. Om du gör innehåll offentligt sträcker sig licensen till att visa det för den publik du väljer. Licensen upphör när du raderar innehållet eller ditt konto, med förbehåll för dessa perioder och för kopior som andra användare redan lagligen har tagit emot.
- **Dina löften.** Du har och kommer att behålla alla rättigheter, samtycken och tillstånd som krävs för att lämna in Ditt innehåll och för att bevilja denna licens, inklusive från varje person som kan identifieras i innehållet. Ditt innehåll och vår användning av det på det sätt som är tillåtet gör inte intrång i och kränker inte någon lag eller någon persons rättigheter (upphovsrätt, varumärke, integritet, offentlighetsrätt, konfidentialitet, avtal). Ditt innehåll följer dessutom [användningspolicyn]({{url.acceptable_use}}).
- **Modering.** Vi har ingen allmän skyldighet att övervaka Ditt innehåll, men vi kan granska, ta bort, begränsa eller vägra innehåll som vi rimligen anser bryter mot lag, dessa villkor eller andras rättigheter, eller som vi har fått ett giltigt meddelande om (se [Upphovsrätt och anmälningar om olagligt innehåll]({{url.copyright}})). Där det krävs (till exempel enligt EU:s förordning om digitala tjänster) meddelar vi dig våra skäl och hur du kan överklaga beslutet.
- **Säkerhetskopior.** Du ansvarar för att behålla egna kopior av Ditt innehåll. Om inte en plan uttryckligen omfattar säkerhetskopior eller lagring lovar vi inte att återställa raderat eller förlorat innehåll.
- **Aggregerade uppgifter.** Vi kan använda användningsdata som inte identifierar dig eller avslöjar Ditt innehåll för att driva, säkra och förbättra Tjänsterna.
{{else}}
Du behåller alla rättigheter till allt du lämnar in till Tjänsterna. Du beviljar oss den begränsade licens som krävs för att behandla det för att tillhandahålla, säkra och ge support till Tjänsterna, och du lovar att du har rätt att lämna in det. Du ansvarar för att behålla egna kopior.
{{/if}}

### Dina data och filer {#your-data}

Mellan dig och oss **äger du de data och filer som du lägger in i Tjänsterna, och du ensam ansvarar för dem**: för att du har rätt att ladda upp och använda dem, för deras korrekthet och laglighet samt för de val du gör om vem som får åtkomst till dem. Vi lagrar och behandlar dem efter dina instruktioner så att Tjänsterna fungerar. Detta begränsar inte våra egna rättsliga skyldigheter, till exempel att säkra Tjänsterna och skydda personuppgifter, och påverkar inte rättigheter som inte kan uteslutas enligt lag.

{{#if feature.uploads}}
- **Upphovsrätt och andra rättigheter.** Du bekräftar att du äger det du laddar upp eller har alla tillstånd som krävs (även från personer som visas på bilder), och du godtar att **du kan hållas ansvarig för anspråk** om upphovsrätt, personlighetsrätt, integritet eller andra rättigheter som uppstår till följd av det. Vi kan ta bort innehåll och samarbeta med rättighetshavare och myndigheter enligt beskrivningen i [Upphovsrätt och anmälningar om olagligt innehåll]({{url.copyright}}).
- **Privat som standard.** Det du laddar upp är synligt endast för dig och för de personer som du ger åtkomst (till exempel medlemmar eller operatörer i din organisation). Vi använder inte dina uppladdningar eller annat innehåll för att skapa offentligt material som mallar, riktlinjer, exempel, marknadsföring eller träningsdata, och vi gör dem inte tillgängliga för personer som inte är inloggade, såvida du inte uttryckligen publicerar eller delar dem.
{{/if}}

## 7. Om du tillhandahåller Tjänsterna till andra {#end-users}

Om du använder Tjänsterna för att tillhandahålla något till dina egna kunder, användare, anställda eller andra tredje parter (”**Slutanvändare**”) ansvarar du ensam för dem. Du måste ha den rättsliga grund, de meddelanden och de samtycken som krävs för alla personuppgifter du samlar in eller behandlar, komma överens med dem om egna villkor, hantera deras begäranden och klagomål, säkerställa att de följer [användningspolicyn]({{url.acceptable_use}}), och du får inte göra åtaganden för vår räkning. Du ansvarar för Slutanvändarnas handlingar och underlåtenheter som om de vore dina egna. Vi har inga skyldigheter gentemot Slutanvändare.

## 8. AI-funktioner {#ai}

{{#if feature.ai}}
- Resultat genereras automatiskt och kan vara felaktiga, ofullständiga, stötande, partiska eller liknande det som ges till andra. Du måste granska resultatet innan du förlitar dig på det och ta ansvar för hur du använder det.
- **Använd inte AI-funktioner som enda grund för beslut som har rättsliga eller liknande betydande följder för personer** (till exempel anställning, kreditprövning, boende, försäkring, utbildning, hälso- och sjukvård, brottsbekämpning eller migration), och använd dem inte för medicinska, juridiska, finansiella eller säkerhetskritiska råd utan kvalificerad mänsklig granskning.
- Du måste upplysa om AI-genererat eller manipulerat innehåll i den utsträckning som lagen eller den plattform där du publicerar kräver (inklusive deepfakes och syntetiskt medieinnehåll), och du får inte presentera AI-resultat som mänskligt skapade om det skulle vilseleda.
- Du får inte använda funktionerna för något förbjudet användningsområde enligt [användningspolicyn]({{url.acceptable_use}}), och du får inte försöka kringgå säkerhetssystem (inklusive promptinjektion, jailbreaking eller extraheringsattacker mot våra system eller andras system).
- Leverantörer som vi använder kan tillämpa egna användningspolicyer, och vi kan begränsa funktionerna i enlighet med dem. Vi använder inte Ditt innehåll för att träna generella modeller om du inte har valt att delta (se [integritetspolicyn]({{url.privacy}})).
{{else}}
Tjänsterna innehåller för närvarande inga AI-assisterade funktioner. Om vi lägger till sådana kommer vi att uppdatera dessa villkor och lämna meddelande enligt avsnitt 16, och reglerna för dem (korrekthet, mänsklig granskning, upplysning och inga förbjudna användningsområden) kommer att gälla.
{{/if}}

## 9. Avgifter och betalning {#fees}

{{#if feature.payments}}
- **Priser och skatter.** Priserna visas vid köpet och inkluderar inte moms, försäljningsskatt och liknande skatter om inget annat anges; du betalar tillämpliga skatter. Priser för konsumenter inkluderar de skatter som krävs enligt lag.
{{#if feature.merchant_of_record}}- **Merchant of record.** Beställningar behandlas av vår betalningsleverantör{{#if payments.provider}} {{payments.provider}}{{/if}}, som agerar återförsäljare och merchant of record, tar emot betalningen och skatterna och utfärdar kvittot. Dess köpvillkor gäller för köpet utöver dessa villkor. Betalningar, fakturering, skatter och återbetalningar hanteras enligt dem och enligt vår [policy för återbetalning och avbokning]({{url.refunds}}).
{{/if}}- **Betalning.** Du ger oss och vår betalningsprocessor tillstånd att debitera det betalningssätt du anger för alla belopp som förfaller, inklusive förnyelser och användningsbaserade avgifter. Du lovar att du har rätt att använda det betalningssättet och måste hålla uppgifterna aktuella.
{{#if feature.subscriptions}}- **Innan du betalar.** Bredvid betalningsknappen visar vi priset, faktureringsperioden, att prenumerationen förnyas automatiskt, vad som händer efter eventuell provperiod, hur du säger upp den samt länkar till dessa villkor, [villkoren för återbetalning och avbokning]({{url.refunds}}) och [integritetspolicyn]({{url.privacy}}). Du debiteras först efter att du har kryssat i rutan eller tryckt på knappen som bekräftar att du har tagit del av dem. Vi sparar en logg över det samtycket och skickar dig en bekräftelse som du kan spara.
- **Prenumerationer.** Om inget annat anges vid köpet förnyas prenumerationer automatiskt för perioder av samma längd tills de sägs upp. Du kan när som helst säga upp dem i ditt konto eller via e-post före förnyelsedatumet. Uppsägningen träder i kraft vid slutet av den betalda perioden, och vi gör ingen proportionell återbetalning. Vi informerar dig i förväg, så som lagen kräver, innan en provperiod övergår till betalning eller ett förnyelsepris ändras.
- **Provperioder och kampanjer.** En provperiod eller ett kampanjerbjudande per person eller företag. Vi kan dra tillbaka eller vägra ett erbjudande om vi misstänker missbruk (flera konton, falska identiteter, kringgångna begränsningar).
{{/if}}{{#if feature.credits}}- **Krediter.** Förbetalda krediter, tokens eller valuta i appen är en begränsad licens att använda Tjänsterna, inte pengar. De har inget kontantvärde, är inte överlåtbara, kan inte lösas in mot pengar eller handlas och kan löpa ut enligt vad som anges vid köpet. Oanvända krediter förverkas när ett konto stängs på grund av överträdelse. I övriga fall följer återbetalningar reglerna nedan och tillämplig lag.{{#if feature.game}} Virtuella föremål i spel omfattas av [spelregler och policy för virtuella föremål]({{url.game_rules}}).{{/if}}
{{/if}}- **Prisändringar.** Vi kan ändra priser med verkan framåt och med minst {{policy.notice_days}} dagars varsel. Om du inte godtar en ändring ska du säga upp abonnemanget innan ändringen träder i kraft.
- **Sen eller misslyckad betalning.** Vi kan försöka debitera igen, tillfälligt stänga av eller nedgradera kontot och ta ut rimliga inkassokostnader samt lagstadgad ränta på förfallna affärsfakturor. Tjänsterna återställs när skulden har betalats.
- **Chargebacks och bedrägerier.** Att begära chargeback eller öppna en betalningstvist utan att först kontakta oss på [{{company.email}}](mailto:{{company.email}}), eller bedrägliga eller obehöriga betalningar, kan leda till omedelbar avstängning, förlorad åtkomst till innehåll samt återkrav av det omtvistade beloppet och våra behandlingsavgifter.
- **Återbetalningar.** Om inte lagen ger dig en rättighet eller vi anger annat skriftligen är betalda avgifter inte återbetalningsbara, inklusive för delperioder och oanvända funktioner. Ingen återbetalning är skyldig om vi stänger av eller säger upp ditt konto på grund av överträdelse.
{{#if feature.consumers}}- **Uppsägning, ånger och återbetalningar.** Konsumenters ångerrätt, hur du säger upp avtalet och när vi återbetalar anges i [villkoren för återbetalning och avbokning]({{url.refunds}}), som är en del av dessa villkor. För digitalt innehåll eller digitala tjänster som levereras omedelbart på din begäran ber vi om ditt uttryckliga samtycke och din bekräftelse vid köpet, så som lagen kräver.
{{/if}}
{{else}}
Tjänsterna erbjuds för närvarande kostnadsfritt. Vi kan införa betalfunktioner i framtiden. De kommer att presenteras tydligt för dig, och du debiteras aldrig utan ditt godkännande.
{{/if}}

## 10. API, integrationer och tredjepartstjänster {#integrations}

{{#if feature.api}}
API-åtkomst omfattas av dessa villkor, dokumentationen och eventuella hastighetsgränser. Du måste skydda dina API-nycklar och inloggningsuppgifter, du ansvarar för alla anrop som görs med dem, och du får inte dela dem, bädda in dem i offentlig kod eller använda dem för att vidareförsälja åtkomst. Vi kan rotera, begränsa eller återkalla nycklar samt ändra eller avveckla API-versioner med rimligt varsel (kortare om det behövs av säkerhets- eller rättsliga skäl). Använd inte API:et på ett sätt som försämrar Tjänsterna för andra eller försöker kringgå gränser, till exempel genom att använda många nycklar eller konton.

{{/if}}
Tjänsterna kan fungera tillsammans med tredjepartsprodukter, webbplatser och tjänster som vi inte kontrollerar. Din användning av dem omfattas av deras villkor. Vi ansvarar inte för dem, för deras tillgänglighet eller ändringar, eller för hur de använder data som du väljer att dela med dem. Vi kan när som helst upphöra med att stödja en integration.

## 11. Beta- och kostnadsfria funktioner {#beta}

Funktioner som är märkta alfa, beta, förhandsversion, experimentell eller liknande, samt kostnadsfria nivåer, tillhandahålls ”i befintligt skick”. De kan ändras eller dras tillbaka när som helst, kan vara mindre tillförlitliga och omfattas inte av någon åtagen servicenivå. Förlita dig inte på dem för kritiska ändamål.

## 12. Immateriella rättigheter {#ip}

Tjänsterna, inklusive programvara, design, text, grafik, data, varumärken, logotyper och dokumentation, ägs av oss eller våra licensgivare och skyddas av upphovsrätt, varumärkesrätt och andra lagar. Ingenting i dessa villkor överför något ägande till dig, och ingen rätt att använda våra namn eller varumärken beviljas, utom i den mån det behövs för att använda Tjänsterna.

**Feedback.** Om du skickar förslag eller idéer ger du oss en evig, oåterkallelig, världsomspännande, royaltyfri och underlicensierbar licens att använda dem utan begränsning eller krav på namngivning, i den utsträckning lagen tillåter. Vi är inte skyldiga att agera på feedback.

Meddelanden om upphovsrätt och olagligt innehåll: se [Upphovsrätt och anmälningar om olagligt innehåll]({{url.copyright}}).

## 13. Konfidentialitet (företagskunder) {#confidentiality}

Varje part ska hålla den andra partens icke-offentliga affärs- och tekniska information konfidentiell, använda den endast för att fullgöra eller utöva rättigheter enligt dessa villkor och skydda den med rimlig omsorg. Detta gäller inte information som är offentlig utan att mottagaren bär skuld, som redan var känd, som har utvecklats självständigt eller som måste lämnas ut enligt lag (med föregående meddelande där det är lagligt). Skyldigheten gäller i tre år efter att villkoren upphör och tillsvidare för affärshemligheter.

## 14. Integritet och dataskydd {#privacy}

Vår [integritetspolicy]({{url.privacy}}) förklarar hur vi behandlar personuppgifter. {{#if feature.processor_role}}När vi behandlar personuppgifter för dig som din personuppgiftsbiträde gäller [personuppgiftsbiträdesavtalet]({{url.dpa}}), som utgör en del av dessa villkor.{{/if}} Du måste följa dataskyddslagstiftningen när du använder Tjänsterna och får inte lämna in särskilda kategorier av personuppgifter eller reglerade uppgifter (hälsa, betalkortsuppgifter, personnummer eller andra myndighetsidentifierare, barns uppgifter) om inte en funktion eller ett avtal uttryckligen tillåter det.

## 15. Tillgänglighet, support och ändringar {#availability}

Vi strävar efter hög tillgänglighet men garanterar inte oavbruten eller felfri drift. Vi kan genomföra underhåll (med meddelande där det är rimligt möjligt) och kan ändra, lägga till eller ta bort funktioner. Om vi väsentligt minskar en betald funktion under en förbetald period ger vi dig minst {{policy.notice_days}} dagars varsel och, om du inte rimligen kan fortsätta, en proportionell återbetalning för den berörda förbetalda perioden. Support tillhandahålls på [{{company.email}}](mailto:{{company.email}}) på basis av rimliga ansträngningar, om inte din plan omfattar ett serviceavtal.

## 16. Ändringar i dessa villkor {#changes}

Vi kan uppdatera dessa villkor av rättsliga, säkerhetsmässiga, produktrelaterade eller affärsmässiga skäl. Vid väsentliga ändringar ger vi minst **{{policy.notice_days}} dagars** varsel via e-post eller i Tjänsterna innan de gäller för dig. Om du inte godtar dem kan du sluta använda Tjänsterna och stänga ditt konto före ikraftträdandedagen och (för betalda abonnemang) begära en proportionell återbetalning av förbetalda avgifter för perioden efter det datumet. Att fortsätta använda Tjänsterna efter ikraftträdandedagen innebär att du godtar de uppdaterade villkoren. Ändringar som krävs enligt lag, eller som varken minskar något eller lägger till någon skyldighet, kan träda i kraft omedelbart. Ändringar gäller inte för tvister som redan är anhängiga.

## 17. Avstängning och uppsägning {#termination}

**Av dig.** Du kan sluta använda Tjänsterna och stänga ditt konto när som helst i dina inställningar eller via e-post. Betalda avgifter återbetalas inte om inte avsnitt 9 eller lagen föreskriver det.

**Av oss, utan orsak.** Vi kan avsluta betalda abonnemang med {{policy.notice_days}} dagars varsel (med en proportionell återbetalning av förbetalda avgifter) och kan upphöra med kostnadsfria tjänster med rimligt varsel.

**Av oss, med orsak.** Vi kan, med eller utan föregående meddelande och i den utsträckning lagen tillåter, begränsa, stänga av eller säga upp din åtkomst, ta bort innehåll eller stänga ditt konto omedelbart om:

- du bryter mot dessa villkor eller användningspolicyn (åtgärden är proportionerlig i förhållande till allvaret, upprepningen och risken);
- vi rimligen anser att din användning medför säkerhetsrisker eller juridiska, regulatoriska, anseendemässiga eller ekonomiska risker för oss, andra användare eller tredje part;
- du inte betalar när betalning förfaller;
- en domstol, myndighet eller tillämplig lag kräver det; eller
- ditt konto verkar vara komprometterat, bedrägligt eller övergivet.

Där det är praktiskt och lagligt berättar vi varför och ger dig chans att svara eller att åtgärda problemet först. Där lagen kräver det (till exempel enligt EU:s förordning om digitala tjänster) tillhandahåller vi ett motiverat beslut och ett sätt att överklaga. Om vi stänger av eller säger upp ditt konto på grund av överträdelse återbetalas inga avgifter, och belopp som förfallit förblir betalningsskyldiga.

**Verkningar.** Vid uppsägning upphör din licens och du måste sluta använda Tjänsterna. På begäran inom **{{policy.retention_account_days}} dagar** gör vi Ditt innehåll tillgängligt för export där det är tekniskt möjligt (inte där det är olagligt eller skulle skada andra). Efter den perioden raderar vi det enligt beskrivningen i [integritetspolicyn]({{url.privacy}}). Avsnitt som till sin natur ska fortsätta att gälla gör det, bland annat 4, 6 (licensbegränsningar och dina löften), 9 (förfallna belopp), 12, 13, 17-24 och 26.

## 18. Garantier och ansvarsfriskrivning {#disclaimer}

Vi tillhandahåller Tjänsterna med rimlig skicklighet och omsorg. **I övrigt, i den utsträckning lagen tillåter, tillhandahålls Tjänsterna ”i befintligt skick” och ”i mån av tillgänglighet”, och vi frånsäger oss alla andra garantier, uttryckliga eller underförstådda,** inklusive säljbarhet, lämplighet för ett visst ändamål, avsaknad av intrång, korrekthet och tillgänglighet samt garantier om att Tjänsterna kommer att vara säkra, felfria, oavbrutna eller fria från skadliga komponenter. Vi garanterar inte resultat, tredjepartsinnehåll eller resultat som du får. Tjänsterna är inte avsedda för användning i miljöer med hög risk där ett fel kan orsaka dödsfall, personskada eller allvarlig skada (till exempel medicintekniska produkter, flyg, kärnkraft eller livsuppehållande system), och du får inte använda dem på det sättet.

{{#if feature.consumers}}Om du är konsument behåller du de lagstadgade rättigheter som inte kan uteslutas, till exempel de lagstadgade garantierna och rättsmedlen för digitalt innehåll och digitala tjänster enligt EU-rätt och brittisk rätt samt konsumentgarantierna enligt Australian Consumer Law och liknande lagar i andra länder.{{/if}}

## 19. Ansvarsbegränsning {#liability}

Ingenting i dessa villkor utesluter eller begränsar ansvar som enligt lag inte kan uteslutas eller begränsas, inklusive ansvar vid dödsfall eller personskada, bedrägeri eller uppsåtligt fel, grov oaktsamhet eller (för konsumenter) tvingande lagstadgade påföljder.

Med förbehåll för detta, **i den utsträckning lagen tillåter** och för företagskunder gäller följande:

1. vi ansvarar inte för indirekta, oavsiktliga, särskilda, följdskador, exemplariska eller straffrättsliga skador, eller för utebliven vinst, intäkter, verksamhet, goodwill, förväntade besparingar eller data, som uppstår av eller har samband med Tjänsterna eller dessa villkor, även om vi har informerats om möjligheten; och
2. vårt sammanlagda ansvar för alla anspråk är begränsat till det högre av (a) de avgifter du har betalat oss för Tjänsterna under de **{{policy.liability_cap_months}} månaderna** före den händelse som först gav upphov till anspråket och (b) 100 EUR.

{{#if feature.consumers}}För konsumenter ansvarar vi för förutsebar förlust eller skada som orsakats av vårt avtalsbrott eller vår oaktsamhet, men inte för förlust som inte var förutsebar, och inte för affärsrelaterad förlust.{{/if}}

Vi ansvarar inte för utebliven prestation eller försening som orsakas av händelser utanför vår rimliga kontroll (avsnitt 24). Kostnadsfria tjänster tillhandahålls utan ansvar utöver vad lagen kräver. Dessa begränsningar gäller oavsett hur ansvaret uppstår (avtal, skadeståndsrätt inklusive oaktsamhet eller på annat sätt) och även om ett rättsmedel inte uppfyller sitt väsentliga syfte.

## 20. Skadeslöshet {#indemnity}

Om du är företagskund ska du försvara {{company.name}}, dess närstående bolag, företrädare, anställda och agenter, ersätta dem och hålla dem skadeslösa från anspråk, skador, förluster, sanktionsavgifter och kostnader (inklusive rimliga advokatkostnader) som uppstår från (a) Ditt innehåll eller dina data, (b) ditt eller dina Slutanvändares avtalsbrott eller brott mot lagen, (c) ditt missbruk av Tjänsterna eller (d) en tvist mellan dig och en tredje part. Vi informerar dig utan dröjsmål om varje anspråk och låter dig styra försvaret (vi kan delta på egen bekostnad). Du får inte förlika ett anspråk som innebär att vi erkänner skuld utan vårt samtycke. {{#if feature.consumers}}Konsumenter ansvarar endast för den förlust de orsakar genom sitt eget avtalsbrott, i enlighet med vad lagen föreskriver.{{/if}}

## 21. Påföljder vid missbruk {#remedies}

Utöver andra rättigheter och i den utsträckning lagen tillåter:

- **Förbud och andra rättsmedel.** Du erkänner att överträdelse av avsnitten 4, 5 eller 13 kan orsaka skada som skadestånd inte fullt ut kan kompensera, och vi kan begära ett förbudsföreläggande eller annat rättsmedel utan att behöva bevisa faktisk skada eller ställa säkerhet.
- **Kostnader för missbruk.** Om ditt missbruk orsakar oss kostnader (extra infrastruktur, incidenthantering, utredning, chargebacks, myndighetsbeslut om sanktionsavgifter eller anspråk från tredje part) ersätter du de rimliga, dokumenterade kostnaderna.
- **Bevis och samarbete.** Vi kan bevara loggar och innehåll som har samband med misstänkt missbruk och kan lämna ut dem till berörda parter, plattformar, brottsbekämpande myndigheter eller tillsynsmyndigheter där lagen tillåter det. Du samarbetar rimligen med våra utredningar.
- **Anmälan.** Vi kan anmäla olaglig verksamhet (inklusive material som innehåller sexuella övergrepp mot barn, bedrägeri, hot, skadlig programvara och attacker mot system) till myndigheter och berörda parter, och vi gör det där lagen kräver det.
- **Innehållning och kvittning.** Vi kan hålla inne, frysa eller kvitta belopp som vi är skyldiga dig (till exempel utbetalningar) mot belopp som du är skyldig oss eller som härrör från missbruk, med beaktande av lagen.

## 22. Export, sanktioner och antikorruption {#export}

Du får inte använda, exportera eller reexportera Tjänsterna i strid med tillämpliga exportkontroll- och sanktionsregler, inklusive sådana från EU, USA, Storbritannien och FN, och inte till eller för personer eller länder som omfattas av omfattande sanktioner. Du bekräftar att varken du eller dina användare finns på någon sanktionslista eller förteckning över begränsade parter. Du får inte erbjuda eller ge något av värde för att otillbörligt påverka någon i samband med Tjänsterna.

## 23. Tillämplig lag och tvister {#law}

Dessa villkor och alla tvister eller anspråk som härrör från eller har samband med dem eller Tjänsterna (inklusive tvister utanför avtal) regleras av lagstiftningen i **{{law.governing}}**, utan hänsyn till lagvalsregler, och med undantag för FN:s konvention om avtal om internationella köp av varor.

**Informell lösning först.** Innan formella förfaranden inleds ska du skriva till [{{company.legal_email}}](mailto:{{company.legal_email}}) med en beskrivning av tvisten, och låta oss försöka lösa den i god tro under minst 30 dagar.

**Domstolar.** Om inte tvingande lag föreskriver annat är den exklusiva behörigheten **{{law.venue}}**. Vardera parten kan begära ett brådskande förbud vid vilken behörig domstol som helst.

{{#if feature.consumers}}**Konsumenter.** Om du är konsument behåller du också rätten att väcka talan vid domstolarna i ditt bosättningsland och att åberopa tvingande konsumentskyddslagstiftning där, och ingenting i detta avsnitt tar bort den rätten. {{#if consumer_dispute}}Vi deltar i extrajudiciell tvistlösning inför {{consumer_dispute}}.{{/if}}
{{/if}}
**Tidsgräns (företagskunder).** I den utsträckning lagen tillåter ska ett anspråk framställas inom {{policy.claim_months}} månader efter att grunden för anspråket uppstod, annars är det förverkat.

**Ingen grupptalan (företagskunder, där det är tillåtet).** Anspråk får endast framställas individuellt, inte som del av en grupptalan, kollektiv talan eller annan talan för flera personers räkning.

## 24. Force majeure {#force-majeure}

Ingen part är ansvarig för försening eller utebliven prestation som orsakas av händelser utanför dess rimliga kontroll, inklusive naturkatastrof, krig, terrorism, civil oro, pandemi, myndighetsåtgärder, el-, internet- eller telekommunikationsstörningar, fel hos molninfrastruktur eller andra tredjepartsleverantörer, cyberattacker trots rimliga säkerhetsåtgärder, arbetskonflikter (andra än de som berör partens egen personal) eller leveransstörningar. Betalningsskyldigheter för tjänster som redan har levererats befrias inte. Om en sådan händelse varar längre än 60 dagar kan någon av parterna säga upp de berörda tjänsterna.

## 25. Elektronisk kommunikation och meddelanden {#notices}

Du samtycker till att ta emot meddelanden och avtal elektroniskt. Vi kan lämna meddelanden via e-post till adressen på ditt konto, i Tjänsterna eller genom att publicera dem på vår webbplats. Meddelanden till oss ska skickas till [{{company.legal_email}}](mailto:{{company.legal_email}}) och till {{company.address}}. Ett meddelande anses mottaget 24 timmar efter att ett e-postmeddelande har skickats utan studsmeddelande, och när det publiceras eller visas i Tjänsterna.

## 26. Allmänt {#general}

- **Hela avtalet.** Dessa villkor och de dokument de hänvisar till utgör hela avtalet i de frågor de reglerar och ersätter tidigare överenskommelser. Du har inte förlitat dig på något uttalande som inte anges i dem.
- **Delbarhet.** Om en bestämmelse inte är verkställbar begränsas den till det minsta nödvändiga omfånget, eller ersätts av en verkställbar bestämmelse som ligger närmast dess syfte. Övriga delar förblir i kraft.
- **Ingen eftergift.** Att inte utöva en rättighet innebär inte att man avstår från den.
- **Överlåtelse.** Du får inte överlåta dina rättigheter eller skyldigheter utan vårt skriftliga samtycke. Vi kan överlåta dessa villkor till ett närstående bolag eller en efterträdare till vår verksamhet, och vi informerar dig om det.
- **Förhållandet mellan parterna.** Parterna är självständiga uppdragstagare. Ingenting skapar partnerskap, ombud, anställningsförhållande eller joint venture.
- **Tredje part.** Ingen annan har rätt att verkställa dessa villkor, utom våra närstående bolag, företrädare och agenter enligt avsnitten 19 och 20.
- **Språk.** Översättningar tillhandahålls för bekvämlighets skull. Vid skillnader gäller den engelska versionen, om inte tvingande lag kräver något annat.
- **Tolkning.** Rubriker är till för bekvämlighets skull. ”Inklusive” betyder ”inklusive men inte begränsat till”.
- **Referenser.** Vi kan nämna dig som kund med din logotyp om du inte avböjer det via e-post. Konsumenter nämns aldrig.

## 27. Kontakt {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Reg. nr {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Skatte-ID {{company.tax_id}}{{/if}}
E-post [{{company.email}}](mailto:{{company.email}}) · Juridik [{{company.legal_email}}](mailto:{{company.legal_email}}) · Support [{{company.email}}](mailto:{{company.email}}) · Se även vår [juridiska information]({{url.impressum}}).
