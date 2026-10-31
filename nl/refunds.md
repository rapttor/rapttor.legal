---
doc: refunds
title: Retour- en annuleringsbeleid
version: 1.1.1
updated: 2026-10-31
lang: nl
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Hoe u kunt annuleren, wanneer u kunt herroepen of een terugbetaling kunt krijgen, en wat er gebeurt met aankopen via appwinkels.
---

# Retour- en annuleringsbeleid

*Versie {{doc.version}}, laatst bijgewerkt op {{doc.updated}}.*

Dit beleid maakt deel uit van de [Servicevoorwaarden]({{url.terms}}) en is van toepassing op aankopen bij **{{company.name}}** ("wij") voor {{product.name}}. Niets in dit beleid beperkt de rechten die u heeft krachtens dwingend consumentenrecht.

## Waar u heeft gekocht, is van belang {#where}

- **Rechtstreeks bij ons gekocht** (onze website of afrekenpagina): dit beleid is van toepassing.
{{#if feature.merchant_of_record}}- **Gekocht via onze betalingsprovider{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): de provider is de verkoper van de bestelling, verwerkt de betaling, belastingen en kwitanties, en verwerkt terugbetalingen onder haar afrekenvoorwaarden en dit beleid. Verzoeken kunnen aan ons of aan de provider worden gericht.
{{/if}}
- **Gekocht via een appwinkel of platform** (Apple App Store, Google Play, console- of pc-winkels): de winkel is de verkoper van de bestelling en **handelt terugbetalingen, annuleringen en facturering af**. Vraag een terugbetaling aan bij de winkel via haar eigen procedure. Wij kunnen die betalingen niet terugbetalen, maar we helpen graag bij het bevestigen van feiten en kunnen het gekochte item intrekken wanneer de winkel terugbetaalt. De regels van de winkel en uw lokale recht bepalen daar uw rechten.

{{#if feature.subscriptions}}
## Een abonnement opzeggen {#cancel}

U kunt op elk moment opzeggen in uw accountinstellingen{{#if feature.mobile}} (of in de abonnementsinstellingen van de winkel, als u daar een abonnement heeft afgesloten){{/if}} of door te schrijven naar [{{company.email}}](mailto:{{company.email}}). Opzegging beëindigt toekomstige verlengingen; u behoudt toegang tot het einde van de periode waarvoor u heeft betaald. Gedeeltelijke periodes worden niet naar rato verrekend, tenzij de wet of dit beleid dat bepaalt. Opzeggen is even eenvoudig als aanmelden: een directe opzegknop in uw account, zonder telefoontjes of formulieren. Waar de wet dat vereist, herinneren we u vóór een verlenging of vóór een proefperiode die overgaat naar een betaald abonnement. Voor abonnementen van een jaar of langer sturen we een herinnering 15 tot 45 dagen vóór de verlenging en een jaarlijkse herinnering, met de prijs en de manier waarop u kunt opzeggen. De voorwaarden voor de verlenging worden altijd naast de betaalknop getoond.
{{/if}}

## Herroepingsrecht voor consumenten (EU, Verenigd Koninkrijk en vergelijkbare wetten) {#withdrawal}

{{#if feature.consumers}}
Als u consument bent in de EU, het Verenigd Koninkrijk of een ander land dat een herroepingsrecht geeft bij overeenkomsten op afstand, kunt u een aankoop **binnen {{policy.refund_days}} dagen** na het sluiten van de overeenkomst herroepen, zonder opgave van reden.

**Digitale inhoud en digitale diensten.** Als u ons verzoekt om tijdens de herroepingstermijn te beginnen met het leveren van een digitale dienst of digitale inhoud (bijvoorbeeld toegang, tegoeden of virtuele items) en u bevestigt dat u begrijpt dat u uw herroepingsrecht mogelijk verliest, dan:
- verliest u bij **digitale inhoud die niet op een fysieke drager staat** het herroepingsrecht zodra de levering met uw uitdrukkelijke toestemming is begonnen;
- kunt u bij een **digitale dienst** nog binnen de termijn herroepen, maar betaalt u een evenredig bedrag voor wat tot het moment van uw mededeling is geleverd.

Wij vragen hier bij het afrekenen om toestemming. Als u die niet heeft gegeven, geldt het volledige herroepingsrecht.

**Herroepingsfunctie.** Zoals de wet vanaf 19 juni 2026 vereist, is in uw account en in de orderbevestiging een functie "Overeenkomst herroepen" beschikbaar. Kies de overeenkomst, bevestig, en u ontvangt een ontvangstbevestiging op een duurzame drager (e-mail) met de datum en het tijdstip. U hoeft niet uit te leggen waarom.

**Andere manieren om te herroepen.** Stuur een duidelijke verklaring van uw besluit om te herroepen, bijvoorbeeld per e-mail naar [{{company.email}}](mailto:{{company.email}}), met uw naam, de bestel- of accountgegevens en de datum van aankoop. U mag het onderstaande formulier gebruiken, maar dat is niet verplicht. Wij bevestigen de ontvangst en betalen u terug **binnen 14 dagen** nadat wij van uw besluit hebben vernomen, met dezelfde betaalmethode.

> **Modelformulier voor herroeping** (alleen invullen en retourneren als u wilt herroepen)
> Aan {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Ik/wij deel(en) hierbij mee dat ik/wij afzie(n) van mijn/onze overeenkomst voor de levering van de volgende dienst/digitale inhoud: ______ ; besteld op / ontvangen op: ______ ; naam: ______ ; adres: ______ ; datum: ______ (handtekening alleen als het op papier is).
{{else}}
Onze diensten worden alleen aan bedrijven aangeboden, dus de wettelijke herroepingsrechten van consumenten gelden niet. Neem contact met ons op als u meent dat u consument bent.
{{/if}}

## Andere landen {#other-countries}

Sommige landen geven extra annulerings- of terugbetalingsrechten, bijvoorbeeld bedenktijden, automatische-verlengingsregels in verschillende Amerikaanse staten, of wettelijke garanties in Australië, Nieuw-Zeeland en het Verenigd Koninkrijk. Waar die dwingend zijn, gelden ze en gaan ze voor op alles wat minder gunstig is in dit beleid.

## Wanneer wij terugbetalen {#refunds}

Wij betalen terug, geheel of gedeeltelijk naar gelang wat passend is:

- een **dubbele of foutieve afschrijving**, of een afschrijving die u niet heeft geautoriseerd (meld dit tijdig; we kunnen om details vragen);
- een aankoop waarbij de dienst **niet kon worden geleverd** of wezenlijk gebrekkig is en wij dat niet binnen een redelijke termijn kunnen herstellen;
- een aankoop die u binnen **{{policy.refund_days}} dagen** wilt annuleren, als u wat u heeft gekocht niet heeft gebruikt (inclusief ongebruikte tegoeden), naar ons oordeel waar geen wettelijk recht geldt;
- alles wat wij schriftelijk met u overeenkomen.

Anders zijn betaalde kosten niet terugbetaalbaar, ook niet voor gedeeltelijke periodes, gebruikte of verbruikte items, en accounts die zijn gesloten wegens schending van het [acceptabel gebruiksbeleid]({{url.acceptable_use}}). Terugbetalingen gaan naar de oorspronkelijke betaalmethode. Wij kunnen alleen in tegoeden terugbetalen als u daar zelf om vraagt.

{{#if feature.credits}}
## Tegoeden en virtuele items {#credits}

Ongebruikte vooruitbetaalde tegoeden kunnen binnen de hierboven genoemde termijn worden terugbetaald. Tegoeden en virtuele items die zijn besteed of verbruikt, zijn niet terugbetaalbaar, behalve waar de wet dat vereist. Als wij een dienst beëindigen, behandelen wij resterende betaalde saldi zoals beschreven in de [Servicevoorwaarden]({{url.terms}}){{#if feature.game}} en de [Spelregels]({{url.game_rules}}){{/if}}.
{{/if}}

## Chargebacks en geschillen {#chargebacks}

Neem contact met ons op voordat u een afschrijving betwist bij uw bank of kaartuitgever: wij lossen dat meestal sneller op. Als u een geschil opent over een geldige afschrijving, kunnen wij het account opschorten totdat het is opgelost, en bewijs van levering en gebruik delen met de betalingsprovider.

## Belastingen en valuta {#taxes}

Terugbetalingen omvatten de belasting die in rekening is gebracht. Als u in een andere valuta heeft betaald, kan het bedrag dat wordt teruggestort afwijken door koersschommelingen en bankkosten waar wij geen invloed op hebben.

## Hoe u een verzoek indient {#contact}

Schrijf naar [{{company.email}}](mailto:{{company.email}}) met uw accountadres, het bestel- of kwitantienummer en een korte beschrijving. Wij antwoorden op uw bericht. Als wij de zaak niet kunnen oplossen, kunt u contact opnemen met uw lokale consumentenautoriteit{{#if consumer_dispute}} of {{consumer_dispute}}{{/if}}.
