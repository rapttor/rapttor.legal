---
doc: refunds
title: Villkor för återbetalning och avbokning
version: 1.1.1
updated: 2026-10-31
lang: sv
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Hur du avbokar, när du kan frånträda ett köp eller få återbetalning och vad som gäller för köp via appbutiker.
---

# Villkor för återbetalning och avbokning

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

Denna policy är en del av [användarvillkoren]({{url.terms}}) och gäller köp från **{{company.name}}** (”vi”) för {{product.name}}. Ingenting i den begränsar de rättigheter du har enligt tvingande konsumentlagstiftning.

## Var du köpte har betydelse {#where}

- **Köpt direkt från oss** (vår webbplats eller kassa): denna policy gäller.
{{#if feature.merchant_of_record}}- **Köpt via vår betalningsleverantör{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): leverantören är säljare av beställningen, hanterar betalning, skatter och kvitton samt behandlar återbetalningar enligt sina kassavillkor och denna policy. Begäranden kan skickas till oss eller till leverantören.
{{/if}}
- **Köpt via en appbutik eller plattform** (Apple App Store, Google Play, konsol- eller datorbutiker): butiken är säljare och **hanterar återbetalningar, avbokningar och fakturering**. Begär återbetalning från butiken enligt dess egen process. Vi kan inte återbetala dessa betalningar, men vi hjälper till att bekräfta fakta och kan återkalla det köpta föremålet när butiken har återbetalat. Butikens regler och din lokala lag avgör dina rättigheter där.

{{#if feature.subscriptions}}
## Avbokning av en prenumeration {#cancel}

Du kan avboka när som helst i dina kontoinställningar{{#if feature.mobile}} (eller i butikens prenumerationsinställningar om du prenumererade där){{/if}} eller genom att skriva till [{{company.email}}](mailto:{{company.email}}). Avbokningen stoppar framtida förnyelser, och du behåller åtkomsten till slutet av den period du har betalat för. Vi räknar inte om delperioder pro rata, om inte lagen eller denna policy säger något annat. Att avboka är lika enkelt som att registrera sig: en direkt avbokningsknapp i ditt konto, utan telefonsamtal eller formulär. Vi påminner dig före en förnyelse, eller före att en provperiod övergår till ett betalt abonnemang, där lagen kräver det. För abonnemang på ett år eller längre skickar vi en påminnelse 15 till 45 dagar före förnyelsen samt en årlig påminnelse, med priset och hur du avbokar. Villkoren för förnyelse visas alltid bredvid betalningsknappen.
{{/if}}

## Ångerrätt för konsumenter (EU, Storbritannien och liknande lagar) {#withdrawal}

{{#if feature.consumers}}
Om du är konsument i EU, Storbritannien eller ett annat land som ger ångerrätt vid distansavtal kan du frånträda ett köp **inom {{policy.refund_days}} dagar** från den dag avtalet ingicks, utan att ange något skäl.

**Digitalt innehåll och digitala tjänster.** Om du ber oss börja tillhandahålla en digital tjänst eller digitalt innehåll (till exempel åtkomst, krediter eller virtuella föremål) under ångerfristen och bekräftar att du förstår att du kan förlora din ångerrätt, gäller följande:
- för **digitalt innehåll som inte finns på ett fysiskt medium** förlorar du ångerrätten när tillhandahållandet har börjat med ditt uttryckliga samtycke;
- för en **digital tjänst** kan du fortfarande frånträda inom perioden men betalar ett proportionellt belopp för det som har tillhandahållits fram till den tidpunkt då du meddelar oss.

Vi begär detta samtycke vid kassan. Om du inte har gett det gäller den fulla ångerrätten.

**Funktion för att frånträda avtalet.** Från och med den 19 juni 2026 finns, enligt vad lagen kräver, en funktion för ”Frånträd avtal” i ditt konto och i orderbekräftelsen. Välj avtalet, bekräfta, så får du en bekräftelse på ett varaktigt medium (e-post) som anger datum och tid. Du behöver inte förklara varför.

**Andra sätt att frånträda avtalet.** Skicka ett tydligt meddelande (till exempel via e-post till [{{company.email}}](mailto:{{company.email}})) om ditt beslut att frånträda avtalet, med ditt namn, order- eller kontouppgifter och köpdatum. Du kan använda formuläret nedan men behöver inte göra det. Vi bekräftar mottagandet och återbetalar dig **inom 14 dagar** från det att vi fick kännedom om ditt beslut, med samma betalningsmetod.

> **Modellformulär för frånträde** (fyll i och skicka endast om du vill frånträda avtalet)
> Till {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Jag/vi meddelar härmed att jag/vi frånträder mitt/vårt avtal om tillhandahållande av följande tjänst/digitala innehåll: ______ ; beställt den/mottaget den: ______ ; namn: ______ ; adress: ______ ; datum: ______ (underskrift endast om formuläret är på papper).
{{else}}
Våra tjänster erbjuds endast till företag, så de lagstadgade ångerrätterna för konsumenter gäller inte. Kontakta oss om du anser att du är konsument.
{{/if}}

## Andra länder {#other-countries}

Vissa platser ger extra rätt att avboka eller få återbetalning, till exempel betänketider, regler om automatisk förnyelse i flera amerikanska delstater eller lagstadgade garantier i Australien, Nya Zeeland och Storbritannien. Där de är tvingande gäller de och går före allt som är mindre förmånligt i denna policy.

## När vi återbetalar {#refunds}

Vi återbetalar, helt eller delvis beroende på omständigheterna:

- en **dubbel eller felaktig debitering**, eller en debitering som du inte har godkänt (anmäl den utan dröjsmål; vi kan be om uppgifter);
- ett köp där tjänsten **inte kunde tillhandahållas** eller är väsentligt bristfällig och vi inte kan åtgärda den inom rimlig tid;
- ett köp som du begär att avbryta inom **{{policy.refund_days}} dagar**, om du inte har använt det du köpt (inklusive oanvända krediter), efter vårt gottfinnande där ingen lagstadgad rätt gäller;
- allt annat som vi skriftligen har kommit överens om.

I övrigt är betalda avgifter inte återbetalningsbara, inklusive för delperioder, använda eller förbrukade föremål och konton som stängts på grund av överträdelse av [användningspolicyn]({{url.acceptable_use}}). Återbetalningar går till ursprungligt betalningssätt. Vi kan återbetala i form av krediter endast om du begär det.

{{#if feature.credits}}
## Krediter och virtuella föremål {#credits}

Oanvända förbetalda krediter kan återbetalas inom perioden ovan. Krediter och virtuella föremål som har använts eller förbrukats är inte återbetalningsbara, utom när lagen kräver det. Om vi avslutar en tjänst hanterar vi återstående betalda saldon enligt beskrivningen i [användarvillkoren]({{url.terms}}){{#if feature.game}} och i [spelreglerna]({{url.game_rules}}){{/if}}.
{{/if}}

## Chargebacks och tvister {#chargebacks}

Kontakta oss innan du bestrider en debitering hos din bank eller ditt kortföretag, eftersom vi brukar kunna lösa ärendet snabbare. Om du inleder en tvist om en giltig debitering kan vi stänga av kontot tills tvisten är löst och dela bevis på leverans och användning med betalningsleverantören.

## Skatter och valuta {#taxes}

Återbetalningar inkluderar den skatt som debiterades. Om du betalade i en annan valuta kan det återbetalade beloppet skilja sig på grund av valutakursförändringar och bankavgifter som ligger utanför vår kontroll.

## Så begär du återbetalning {#contact}

Skriv till [{{company.email}}](mailto:{{company.email}}) med ditt kontos e-postadress, order- eller kvittonummer och en kort beskrivning. Vi svarar på ditt meddelande. Om vi inte kan lösa ärendet kan du kontakta din lokala konsumentmyndighet{{#if consumer_dispute}} eller {{consumer_dispute}}{{/if}}.
