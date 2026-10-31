---
doc: terms
title: Servicevoorwaarden
version: 1.3.0
updated: 2026-10-31
lang: nl
translation_of: 1.3.0
status: draft
summary: De overeenkomst tussen u en {{product.name}} voor het gebruik van {{product.name}}.
---

# Servicevoorwaarden

*Versie {{doc.version}}, laatst bijgewerkt op {{doc.updated}}.*

## 1. Overeenkomst {#agreement}

Deze servicevoorwaarden (de "**Voorwaarden**") vormen een bindende overeenkomst tussen u en **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, registratienummer {{company.reg_id}}{{/if}} ("**{{product.name}}**", "wij", "ons") die uw toegang tot en gebruik van {{product.name}}, onze websites, applicaties, API's, documentatie en daarmee verband houdende diensten (de "**Diensten**") regelt.

Door een account aan te maken, een app te installeren of de Diensten anderszins te gebruiken, aanvaardt u deze Voorwaarden en de documenten waarnaar zij verwijzen: de [Privacyverklaring]({{url.privacy}}), het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}), het [Cookiebeleid]({{url.cookies}}){{#if feature.processor_role}}, de [Verwerkersovereenkomst]({{url.dpa}}) voor zover deze van toepassing is{{/if}}{{#if feature.payments}}, het [Retour- en annuleringsbeleid]({{url.refunds}}){{/if}}{{#if feature.game}}, het [Beleid voor spelregels en virtuele items]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, de [App-voorwaarden]({{url.app_eula}}){{/if}} en alle bestelformulieren of productspecifieke voorwaarden. Als u niet akkoord gaat, gebruik de Diensten dan niet.

Als u de Diensten voor een organisatie gebruikt, bevestigt u dat u bevoegd bent om die organisatie te binden, en "u" omvat die organisatie. Als productspecifieke voorwaarden of een ondertekende overeenkomst in strijd zijn met deze Voorwaarden, gaan zij voor, maar alleen voor dat product of die klant.

{{#if feature.consumers}}
**Consumenten.** Als u de Diensten als consument gebruikt, blijft het dwingendrechtelijke consumentenbeschermingsrecht van uw woonland van toepassing en beperkt niets in deze Voorwaarden die rechten. Secties die zijn gemarkeerd met *(zakelijke klanten)* gelden alleen als u geen consument bent.
{{/if}}

## 2. Toelaatbaarheid {#eligibility}

U mag de Diensten alleen gebruiken als u:

1. {{#if feature.minors}}ten minste **{{policy.min_age}}** jaar oud bent en, als u de meerderjarigheidsleeftijd in uw woonland nog niet heeft bereikt, de toestemming heeft van een ouder of wettelijke voogd die deze Voorwaarden namens u aanvaardt en verantwoordelijk is voor uw gebruik en aankopen (wij kunnen om bewijs vragen){{else}}ten minste **{{policy.min_age}}** jaar oud bent en in staat bent een bindende overeenkomst aan te gaan{{/if}};
2. niet uitgesloten bent van het ontvangen van de Diensten op grond van toepasselijk recht, waaronder sanctie- en exportcontrolewetgeving (sectie 22);
3. niet eerder uit de Diensten zijn verwijderd wegens schending van onze regels, tenzij wij schriftelijk hebben ingestemd met uw terugkeer; en
4. de Diensten rechtmatig gebruiken op de plaats waar u zich bevindt.
{{#if feature.age_gate}}5. bevestigt, wanneer wij daarom vragen, dat u ten minste **{{policy.age_gate}}** jaar oud bent en volgens de regels van uw land meerderjarig bent om functies te gebruiken waarbij {{policy.age_topics|leeftijdsgevoelige inhoud}} betrokken is. Wij hebben uw geboortedatum niet nodig: uw bevestiging wordt vastgelegd. Als dit niet waar is, kunnen wij het account blokkeren en de gegevens daarvan verwijderen.
{{/if}}{{#if feature.gambling}}6. bevestigt, wanneer wij daarom vragen, dat u ten minste **{{policy.gambling_age}}** jaar oud bent, dat gokken rechtmatig is in uw woonland, en dat u gokfuncties alleen voor uzelf gebruikt. Wij kunnen eisen dat uw werkelijke leeftijd en identiteit worden geverifieerd, en wij kunnen de toegang tot gokfuncties weigeren of beëindigen waar de wet of onze vergunningen dit vereisen.
{{/if}}{{#if policy.excluded_regions}}7. bevestigt, wanneer wij daarom vragen, dat u zich niet bevindt in, en geen inwoner of onderdaan bent van, een van deze landen of regio's: **{{policy.excluded_regions}}**, waar onze Diensten of deze Voorwaarden mogelijk niet rechtmatig zijn, niet afdwingbaar zijn of niet worden aangeboden. Wij kunnen niet zien waar u zich werkelijk bevindt (bijvoorbeeld achter een VPN), dus vertrouwen wij op uw bevestiging. Als die niet waar is, gebruikt u de Diensten op eigen risico, bent u zelf verantwoordelijk voor de naleving van het lokale recht, en kunnen wij het account blokkeren en de gegevens daarvan verwijderen. Niets in dit punt beperkt rechten die volgens de wet van uw woonland niet kunnen worden uitgesloten.
{{/if}}

Wij kunnen op elk moment bewijs van leeftijd, identiteit of bevoegdheid vragen, en wij kunnen een account weigeren of sluiten dat de controle niet doorstaat.

## 3. Accounts en beveiliging {#accounts}

- Verstrek accurate, actuele informatie en houd die up-to-date. Eén persoon of entiteit, één account, tenzij wij anders overeenkomen; het aanmaken van extra accounts om een beperking, limiet, verbod, proefperiode of prijsregel te omzeilen, is verboden.
- Houd uw inloggegevens geheim. Deel, verkoop, verhuur of draag uw account niet over. Elke licentieplaats is bestemd voor één benoemde persoon, tenzij het abonnement anders bepaalt.
- U bent verantwoordelijk voor alles wat onder uw account gebeurt, ook door personen die u toegang geeft of die u niet buiten de deur houdt, totdat u ons meldt dat het account is gecompromitteerd. Meld dit onmiddellijk via [{{company.email}}](mailto:{{company.email}}) als u vermoedt dat er sprake is van ongeoorloofde toegang.
- Wij kunnen sterkere authenticatie eisen, inloggegevens opnieuw laten instellen of een account vergrendelen waarvan wij redelijkerwijs vermoeden dat het is gecompromitteerd of misbruikt.
- Inactieve gratis accounts kunnen na voorafgaande kennisgeving aan het e-mailadres dat in ons bestand staat worden gesloten; betaalde accounts worden niet wegens inactiviteit gesloten.
{{#if feature.anonymous}}- **Anonieme accounts.** Waar wij dit aanbieden, maken de Diensten de eerste keer dat u ze gebruikt een anoniem account voor u aan. Daaraan is geen e-mailadres gekoppeld; wie die browser of dat apparaat gebruikt, kan het account gebruiken, en wij kunnen het niet voor u herstellen als u de toegang verliest. U kunt op elk moment een e-mailadres koppelen om het account te beveiligen en te herstellen: wij bevestigen het adres met een inloginlink die naar dat adres wordt gestuurd. Anonieme accounts die lange tijd ongebruikt blijven, kunnen na kennisgeving in de Diensten worden verwijderd, waar dat mogelijk is.
{{/if}}- **Accounthouder en toegang.** De persoon die via de inloginlink die wij sturen de controle over een e-mailadres bevestigt en deze Voorwaarden aanvaardt, is de accounthouder en wordt behandeld als de persoon die de keuzes in het account heeft gemaakt. Als u namens een organisatie handelt, bevestigt u dat u die organisatie mag binden. U beslist wie er binnen uw organisatie verder toegang krijgt (bijvoorbeeld beheerders met beperkte rollen); personen aan wie u toegang geeft, kunnen zien wat u voor hen beschikbaar stelt, en u bent verantwoordelijk voor die keuze.

## 4. Licentie en beperkingen {#licence}

Onder voorbehoud van deze Voorwaarden en betaling van de toepasselijke kosten verlenen wij u een beperkte, herroepbare, niet-exclusieve, niet-overdraagbare en niet-sublicentieerbare licentie om de Diensten gedurende de looptijd te openen en te gebruiken voor uw eigen persoonlijke of zakelijke doeleinden. Software die wij leveren, wordt in licentie gegeven en niet verkocht. Wij en onze licentiegevers behouden alle rechten die niet uitdrukkelijk zijn verleend.

Tenzij de wet u een recht geeft dat niet kan worden uitgesloten, mag u het volgende niet doen, en mag u ook niet toestaan dat iemand anders dit doet:

- de Diensten kopiëren, wijzigen, vertalen of afgeleide werken ervan maken;
- de Diensten reverse engineeren, decompileren, demonteren of proberen broncode, modellen, gewichten, algoritmen of niet-openbare API's af te leiden;
- de Diensten doorverkopen, sublicentiëren, verhuren, pachten, als dienstverlener hosten of de Diensten beschikbaar stellen aan derden anders dan uw geautoriseerde gebruikers;
- technische beperkingen, licenties, meting, toegangscontroles, snelheidslimieten of beveiligingsfuncties omzeilen;
- eigendomsvermeldingen, naamsvermeldingen of vermeldingen van open-sourcelicenties verwijderen of wijzigen;
- de Diensten of hun output gebruiken om een concurrerend product te bouwen of te trainen, of om prestatieresultaten te benchmarken of te publiceren zonder onze schriftelijke toestemming{{#if feature.ai}}, of om een AI-model te trainen, finetunen of distilleren op basis van de output van de Diensten waar wij dit in de documentatie verbieden{{/if}};
- de Diensten langs geautomatiseerde weg openen (bots, scrapers, crawlers), behalve via onze gedocumenteerde API onder de voorwaarden daarvan.

Het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}) bevat gedetailleerde regels en maakt deel uit van deze Voorwaarden. Open-sourcecomponenten worden beheerst door hun eigen licenties, die voor die componenten voorrang hebben.

## 5. Acceptabel gebruik en handhaving {#acceptable-use}

U bent verantwoordelijk voor uw gebruik van de Diensten en voor het gedrag van iedereen die u ze laat gebruiken. Misbruik kan andere gebruikers, derden en ons schaden, en wij kunnen optreden zoals beschreven in het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}) en in sectie 17, waaronder het verwijderen van content, het beperken van functies, het vertragen van verkeer, het opschorten of beëindigen van accounts, het inhouden van uitbetalingen, het melden aan autoriteiten en het instellen van rechtsmiddelen overeenkomstig sectie 21.

## 6. Uw content {#your-content}

{{#if feature.ugc}}
"**Uw Content**" betekent alles wat u via de Diensten uploadt, indient, publiceert, koppelt of genereert{{#if feature.ai}}, waaronder prompts en, in de verhouding tussen u en ons, de output die u ontvangt{{/if}}.

- **Eigendom.** U behoudt alle rechten in Uw Content. Wij verkrijgen geen eigendom.
- **Licentie aan ons.** U verleent ons een wereldwijde, niet-exclusieve, royaltyvrije licentie om Uw Content te hosten, op te slaan, te reproduceren, te verwerken, te verzenden, aan te passen (voor opmaak, miniaturen, vertalingen, veiligheidscontroles) en weer te geven, **uitsluitend voor zover nodig om de Diensten te exploiteren, te beveiligen, te ondersteunen en te verbeteren en om deze Voorwaarden te handhaven**, zolang u de content in de Diensten bewaart en gedurende de beperkte back-up- en juridische bewaarperiodes daarna. Wanneer u content openbaar maakt, strekt de licentie zich uit tot het tonen daarvan aan het publiek dat u kiest. Deze licentie eindigt wanneer u de content of uw account verwijdert, met inachtneming van die periodes en van kopieën die andere gebruikers al rechtmatig hebben ontvangen.
- **Uw toezeggingen.** U heeft en houdt alle rechten, toestemmingen en vergunningen die nodig zijn om Uw Content in te dienen en deze licentie te verlenen, ook van iedere persoon die daarin identificeerbaar is; Uw Content en ons gebruik daarvan zoals toegestaan, inbreuk maken niet op enig recht of schenden geen enkele wet of rechten van een persoon (auteursrecht, merkrecht, privacy, publiciteitsrecht, vertrouwelijkheid, contract); en Uw Content voldoet aan het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}).
- **Moderatie.** Wij hebben geen algemene verplichting om Uw Content te controleren, maar wij kunnen content die wij redelijkerwijs in strijd achten met de wet, de Voorwaarden of rechten van anderen, of waarover wij een geldige kennisgeving ontvangen, bekijken, verwijderen, beperken of weigeren (zie [Kennisgevingen over auteursrecht en onrechtmatige content]({{url.copyright}})). Waar dit vereist is (bijvoorbeeld op grond van de EU Digital Services Act), delen wij u onze redenen mee en leggen wij uit hoe u de beslissing kunt betwisten.
- **Back-ups.** U bent verantwoordelijk voor het bewaren van uw eigen kopieën van Uw Content. Tenzij een abonnement uitdrukkelijk back-ups of bewaring omvat, beloven wij niet dat verwijderde of verloren content hersteld kan worden.
- **Geaggregeerde gegevens.** Wij kunnen gebruiksgegevens gebruiken die u niet identificeren en die Uw Content niet onthullen, om de Diensten te exploiteren, te beveiligen en te verbeteren.
{{else}}
U behoudt alle rechten in alles wat u aan de Diensten voorlegt. U verleent ons de beperkte licentie die nodig is om het te verwerken om de Diensten te leveren, te beveiligen en te ondersteunen, en u belooft dat u het recht heeft om het in te dienen. U bent verantwoordelijk voor het bewaren van uw eigen kopieën.
{{/if}}

### Uw gegevens en bestanden {#your-data}

Tussen u en ons geldt dat **u eigenaar bent van de gegevens en bestanden die u in de Diensten plaatst, en u alleen verantwoordelijk bent voor die gegevens en bestanden**: voor het recht om ze te uploaden en te gebruiken, voor hun juistheid en rechtmatigheid, en voor de keuzes die u maakt over wie er toegang toe heeft. Wij bewaren en verwerken ze op uw instructie zodat de Diensten werken. Dit beperkt onze eigen wettelijke verplichtingen niet, bijvoorbeeld om de Diensten te beveiligen en persoonsgegevens te beschermen, en het doet geen afbreuk aan rechten die volgens de wet niet kunnen worden uitgesloten.
{{#if feature.uploads}}
- **Auteursrecht en andere rechten.** U bevestigt dat u eigenaar bent van wat u uploadt of dat u alle nodige toestemming heeft (ook van personen die op beelden zijn afgebeeld), en u aanvaardt dat **u aansprakelijk kunt worden gesteld voor claims** over auteursrecht, persoonlijkheidsrecht, privacy of andere rechten die daaruit voortvloeien. Wij kunnen content verwijderen en werken samen met rechthebbenden en autoriteiten, zoals beschreven in [Kennisgevingen over auteursrecht en onrechtmatige content]({{url.copyright}}).
- **Standaard privé.** Wat u uploadt, is alleen zichtbaar voor u en voor de personen aan wie u toegang geeft (bijvoorbeeld leden of beheerders van uw organisatie). Wij gebruiken uw uploads of andere content niet om openbaar materiaal te maken, zoals sjablonen, richtlijnen, voorbeelden, marketingmateriaal of trainingsgegevens, en wij maken ze niet beschikbaar aan personen die niet zijn ingelogd, tenzij u ze uitdrukkelijk publiceert of deelt.
{{/if}}

## 7. Als u de Diensten gebruikt om anderen te bedienen {#end-users}

Als u de Diensten gebruikt om iets te leveren aan uw eigen klanten, gebruikers, werknemers of andere derden ("**Eindgebruikers**"), bent u als enige verantwoordelijk voor hen: u moet beschikken over de rechtmatige grondslag, kennisgevingen en toestemmingen die vereist zijn voor alle persoonsgegevens die u verzamelt of verwerkt, eigen voorwaarden met hen overeenkomen, hun verzoeken en klachten afhandelen, ervoor zorgen dat zij zich houden aan het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}), en geen toezeggingen namens ons doen. U bent aansprakelijk voor de handelingen en nalatigheden van Eindgebruikers alsof het uw eigen handelingen en nalatigheden waren. Wij hebben geen verplichtingen jegens Eindgebruikers.

## 8. AI-functies {#ai}

{{#if feature.ai}}
- Output wordt automatisch gegenereerd en kan onjuist, onvolledig, aanstootgevend, bevooroordeeld of vergelijkbaar zijn met output die aan anderen is gegeven. U moet output beoordelen voordat u erop vertrouwt, en u neemt de verantwoordelijkheid voor hoe u die gebruikt.
- **Gebruik AI-functies niet als enige grondslag voor beslissingen met juridische of vergelijkbaar ingrijpende gevolgen voor personen** (bijvoorbeeld in werkgelegenheid, krediet, huisvesting, verzekeringen, onderwijs, gezondheidszorg, rechtshandhaving of immigratie), en gebruik ze niet voor medisch, juridisch, financieel of veiligheidskritisch advies zonder deskundige menselijke beoordeling.
- U moet AI-gegenereerde of gemanipuleerde content openbaar maken voor zover de wet of het platform waarop u publiceert dit vereist (waaronder deepfakes en synthetische media), en u mag AI-output niet voorstellen als door mensen gemaakt wanneer dat misleidend zou zijn.
- U mag de functies niet gebruiken voor een verboden gebruik zoals beschreven in het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}), en u mag niet proberen veiligheidssystemen te omzeilen (waaronder prompt-injectie, jailbreaking of extractieaanvallen tegen onze systemen of die van anderen).
- Aanbieders die wij gebruiken, kunnen hun eigen gebruiksbeleid toepassen; wij kunnen functies dienovereenkomstig beperken. Wij gebruiken Uw Content niet om algemene modellen te trainen, tenzij u daarvoor kiest (zie de [Privacyverklaring]({{url.privacy}})).
{{else}}
De Diensten bevatten momenteel geen AI-ondersteunde functies. Als wij die toevoegen, passen wij deze Voorwaarden aan en geven wij kennisgeving overeenkomstig sectie 16, en dan gelden de regels daarvoor (nauwkeurigheid, menselijke beoordeling, openbaarmaking, geen verboden gebruik).
{{/if}}

## 9. Kosten en betaling {#fees}

{{#if feature.payments}}
- **Prijzen en belastingen.** Prijzen worden getoond bij de aankoop en zijn exclusief btw, omzetbelasting en vergelijkbare belastingen, tenzij anders vermeld; u betaalt de toepasselijke belastingen. Prijzen voor consumenten bevatten de belastingen die de wet vereist.
{{#if feature.merchant_of_record}}- **Merchant of record.** Bestellingen worden verwerkt door onze betalingsaanbieder{{#if payments.provider}} {{payments.provider}}{{/if}}, die optreedt als wederverkoper en merchant of record, de betaling en belastingen int en de factuur of het bewijs van aankoop verstrekt. De afrekenvoorwaarden van die aanbieder gelden voor de aankoop naast deze Voorwaarden; betalingen, facturering, belastingen en terugbetalingen worden daaronder en onder ons [Retour- en annuleringsbeleid]({{url.refunds}}) afgehandeld.
{{/if}}- **Betaling.** U machtigt ons en onze betalingsverwerker om het betaalmiddel dat u ons verstrekt te belasten voor alle verschuldigde bedragen, waaronder verlengingen en kosten op basis van gebruik. U belooft dat u gerechtigd bent dat betaalmiddel te gebruiken en dat u de gegevens daarvan actueel houdt.
{{#if feature.subscriptions}}- **Voordat u betaalt.** Naast de betaalknop tonen wij de prijs, de factureringsperiode, het feit dat het abonnement automatisch wordt verlengd, wat er na een eventuele proefperiode gebeurt, hoe u kunt opzeggen, en links naar deze Voorwaarden, het [Retour- en annuleringsbeleid]({{url.refunds}}) en de [Privacyverklaring]({{url.privacy}}). U wordt pas belast nadat u het vakje heeft aangevinkt of de knop heeft ingedrukt waarmee u bevestigt dat u die informatie heeft gezien. Wij bewaren een registratie van die toestemming en sturen u een bevestiging die u kunt bewaren.
- **Abonnementen.** Tenzij bij het afrekenen anders is vermeld, worden abonnementen automatisch verlengd voor periodes van dezelfde lengte totdat ze worden opgezegd. U kunt op elk moment opzeggen via uw account of per e-mail vóór de verlengingsdatum; opzegging gaat in aan het einde van de betaalde periode en wij verrekenen geen pro-rata bedragen. Wij informeren u vooraf, zoals de wet vereist, voordat een proefperiode overgaat in een betaald abonnement of voordat een verlengingsprijs verandert.
- **Proefperiodes en aanbiedingen.** Eén proefperiode of promotieaanbieding per persoon of bedrijf. Wij kunnen een aanbieding intrekken of weigeren als wij vermoeden dat er misbruik wordt gemaakt (meerdere accounts, valse identiteiten, omzeilde limieten).
{{/if}}{{#if feature.credits}}- **Tegoeden.** Vooruitbetaalde tegoeden, tokens of in-app valuta zijn een beperkte licentie om de Diensten te gebruiken, geen geld, hebben geen contante waarde, zijn niet overdraagbaar, kunnen niet worden ingewisseld voor geld of worden verhandeld, en kunnen verlopen zoals bij de aankoop is vermeld. Ongebruikte tegoeden vervallen wanneer een account wegens schending wordt gesloten; in andere gevallen volgen terugbetalingen de onderstaande regels en het toepasselijke recht.{{#if feature.game}} Virtuele items in games worden beheerst door het [Beleid voor spelregels en virtuele items]({{url.game_rules}}).{{/if}}
{{/if}}- **Prijswijzigingen.** Wij kunnen prijzen met ingang van de toekomst wijzigen met een kennisgevingstermijn van ten minste {{policy.notice_days}} dagen. Als u niet akkoord gaat, zegt u op voordat de wijziging ingaat.
- **Late of mislukte betaling.** Wij kunnen de betaling opnieuw proberen, het account opschorten of verlagen, en redelijke invorderingskosten en wettelijke rente in rekening brengen over achterstallige zakelijke facturen. Diensten worden hersteld zodra de achterstand is betaald.
- **Chargebacks en fraude.** Een chargeback of betwisting van een betaling indienen zonder eerst contact met ons op te nemen via [{{company.email}}](mailto:{{company.email}}), of frauduleuze of ongeautoriseerde betalingen, kan leiden tot onmiddellijke opschorting, verlies van toegang tot content, en terugvordering van het betwiste bedrag en onze verwerkingskosten.
- **Terugbetalingen.** Tenzij de wet u een recht geeft of wij anders schriftelijk vermelden, zijn betaalde kosten niet-terugbetaalbaar, ook voor gedeeltelijke periodes en ongebruikte functies, en is geen terugbetaling verschuldigd als wij uw account wegens schending opschorten of beëindigen.
{{#if feature.consumers}}- **Opzegging, herroeping en terugbetalingen.** De herroepingsrechten van consumenten, hoe u opzegt en wanneer wij terugbetalen, staan in het [Retour- en annuleringsbeleid]({{url.refunds}}), dat deel uitmaakt van deze Voorwaarden. Voor digitale inhoud of diensten die direct op uw verzoek worden geleverd, vragen wij bij het afrekenen om uw uitdrukkelijke toestemming en bevestiging, zoals de wet vereist.
{{/if}}
{{else}}
De Diensten worden momenteel gratis aangeboden. Wij kunnen in de toekomst betaalde functies introduceren; deze worden u duidelijk gepresenteerd en u wordt nooit belast zonder uw instemming.
{{/if}}

## 10. API, integraties en diensten van derden {#integrations}

{{#if feature.api}}
Toegang tot de API is onderworpen aan deze Voorwaarden, de documentatie en eventuele snelheidslimieten. U moet uw API-sleutels en inloggegevens beschermen, bent verantwoordelijk voor alle aanroepen die ermee worden gedaan, en mag ze niet delen, niet in openbare code opnemen en niet gebruiken om toegang door te verkopen. Wij kunnen sleutels roteren, beperken of intrekken en API-versies wijzigen of buiten gebruik stellen met redelijke kennisgeving (korter waar dat nodig is om veiligheids- of juridische redenen). Gebruik de API niet op een manier die de Diensten voor anderen verslechtert of die limieten probeert te omzeilen, bijvoorbeeld door veel sleutels of accounts te gebruiken.

{{/if}}
De Diensten kunnen werken met producten, websites en diensten van derden die wij niet beheersen. Uw gebruik daarvan valt onder hun voorwaarden. Wij zijn niet verantwoordelijk voor die producten, websites en diensten, voor hun beschikbaarheid of wijzigingen, of voor de manier waarop zij gegevens gebruiken die u met hen deelt. Wij kunnen een integratie op elk moment stopzetten.

## 11. Bèta- en gratis functies {#beta}

Functies die als alpha, bèta, preview, experimenteel of vergelijkbaar zijn aangeduid, en gratis niveaus, worden geleverd "zoals ze zijn", kunnen op elk moment worden gewijzigd of ingetrokken, kunnen minder betrouwbaar zijn en vallen buiten elke dienstverleningsgarantie. Vertrouw er niet op voor kritische doeleinden.

## 12. Intellectueel eigendom {#ip}

De Diensten, waaronder software, ontwerp, tekst, afbeeldingen, gegevens, merken, logo's en documentatie, zijn eigendom van ons of van onze licentiegevers en worden beschermd door auteursrecht, merkenrecht en andere wetgeving. Niets in deze Voorwaarden draagt eigendom aan u over, en er wordt geen recht verleend om onze namen of merken te gebruiken, behalve voor zover nodig om de Diensten te gebruiken.

**Feedback.** Als u suggesties of ideeën stuurt, verleent u ons een eeuwigdurende, onherroepelijke, wereldwijde, royaltyvrije en sublicentieerbare licentie om deze zonder beperking en zonder naamsvermelding te gebruiken, voor zover de wet dit toestaat. Wij hebben geen verplichting om op feedback te handelen.

Kennisgevingen over auteursrecht en onrechtmatige content: zie [Kennisgevingen over auteursrecht en onrechtmatige content]({{url.copyright}}).

## 13. Geheimhouding (zakelijke klanten) {#confidentiality}

Elke partij houdt de niet-openbare zakelijke en technische informatie van de andere partij geheim, gebruikt die alleen om haar verplichtingen uit deze Voorwaarden na te komen of haar rechten daaruit uit te oefenen, en beschermt die met redelijke zorg, behalve voor informatie die openbaar is zonder schuld van de ontvanger, al bekend was, zelfstandig is ontwikkeld, of wettelijk moet worden openbaargemaakt (waar toegestaan met voorafgaande kennisgeving). De verplichting duurt drie jaar nadat de Voorwaarden zijn beëindigd en onbepaald voor bedrijfsgeheimen.

## 14. Privacy en gegevensbescherming {#privacy}

Onze [Privacyverklaring]({{url.privacy}}) legt uit hoe wij persoonsgegevens verwerken. {{#if feature.processor_role}}Waar wij persoonsgegevens namens u als uw verwerker verwerken, geldt de [Verwerkersovereenkomst]({{url.dpa}}), die deel uitmaakt van deze Voorwaarden.{{/if}} U moet bij uw gebruik van de Diensten voldoen aan het recht inzake gegevensbescherming en mag geen bijzondere categorieën of gereguleerde gegevens indienen (gezondheidsgegevens, betaalkaartgegevens, overheidsidentificatienummers, gegevens van kinderen), tenzij een functie of overeenkomst dit uitdrukkelijk toestaat.

## 15. Beschikbaarheid, ondersteuning en wijzigingen {#availability}

Wij streven naar een hoge beschikbaarheid, maar wij garanderen geen ononderbroken of foutloze werking. Wij kunnen onderhoud uitvoeren (met kennisgeving waar dat redelijkerwijs mogelijk is), en wij kunnen functies wijzigen, toevoegen of verwijderen. Als wij een betaalde functie tijdens een vooruitbetaalde looptijd wezenlijk verminderen, geven wij u ten minste {{policy.notice_days}} dagen kennisgeving en, als u redelijkerwijs niet kunt doorgaan, een pro-rata terugbetaling van de betroffen vooruitbetaalde periode. Ondersteuning wordt verleend via [{{company.email}}](mailto:{{company.email}}) op basis van redelijke inspanningen, tenzij uw abonnement een service-levelovereenkomst bevat.

## 16. Wijzigingen in deze Voorwaarden {#changes}

Wij kunnen deze Voorwaarden bijwerken om juridische, veiligheids-, productmatige of zakelijke redenen. Voor wezenlijke wijzigingen geven wij ten minste **{{policy.notice_days}} dagen** kennisgeving per e-mail of in de Diensten voordat zij voor u gelden. Als u niet akkoord gaat, kunt u stoppen met het gebruik van de Diensten en uw account vóór de ingangsdatum sluiten, en (voor betaalde abonnementen) een pro-rata terugbetaling van vooruitbetaalde kosten voor de periode na die datum vragen. Het blijven gebruiken van de Diensten na de ingangsdatum betekent dat u de bijgewerkte Voorwaarden aanvaardt. Wijzigingen die de wet vereist, of die niets verminderen en geen verplichting toevoegen, kunnen onmiddellijk ingaan. Wijzigingen gelden niet voor geschillen die al aanhangig zijn.

## 17. Opschorting en beëindiging {#termination}

**Door u.** U kunt op elk moment stoppen met het gebruik van de Diensten en uw account sluiten via uw instellingen of per e-mail. Betaalde kosten worden niet terugbetaald, tenzij sectie 9 of de wet dit bepaalt.

**Door ons, zonder dat er sprake is van een tekortkoming.** Wij kunnen betaalde abonnementen beëindigen met een kennisgevingstermijn van {{policy.notice_days}} dagen (met een pro-rata terugbetaling van vooruitbetaalde kosten) en gratis diensten stopzetten na redelijke kennisgeving.

**Door ons, wegens een reden.** Wij kunnen, met of zonder voorafgaande kennisgeving en voor zover de wet dit toestaat, uw toegang beperken, opschorten of beëindigen, content verwijderen of uw account onmiddellijk sluiten als:

- u deze Voorwaarden of het Acceptabel gebruiksbeleid schendt (de reactie is evenredig aan de ernst, herhaling en het risico);
- wij redelijkerwijs vermoeden dat uw gebruik beveiligings-, juridische, regelgevende, reputatie- of financiële risico's oplevert voor ons, andere gebruikers of derden;
- u niet op tijd betaalt;
- een rechtbank, autoriteit of toepasselijke wet dit vereist; of
- uw account gecompromitteerd, frauduleus of verlaten lijkt.

Waar dat praktisch en rechtmatig is, vertellen wij u waarom en geven wij u de gelegenheid om te reageren of het probleem eerst op te lossen, en waar de wet dit vereist (bijvoorbeeld de EU Digital Services Act) verstrekken wij een motivering en een mogelijkheid van beroep. Als wij u opschorten of beëindigen wegens schending, worden geen kosten terugbetaald en blijven verschuldigde bedragen betaalbaar.

**Gevolgen.** Bij beëindiging eindigt uw licentie; u moet stoppen met het gebruik van de Diensten; en, op verzoek binnen **{{policy.retention_account_days}} dagen**, maken wij Uw Content beschikbaar voor export waar dat technisch mogelijk is (niet waar dat onrechtmatig is of anderen zou schaden). Na die periode verwijderen wij die content zoals beschreven in de [Privacyverklaring]({{url.privacy}}). Bepalingen die naar hun aard moeten voortbestaan, blijven gelden, waaronder de secties 4, 6 (beperkingen van de licentie en uw toezeggingen), 9 (verschuldigde bedragen), 12, 13, 17-24 en 26.

## 18. Garanties en disclaimer {#disclaimer}

Wij leveren de Diensten met redelijke vakkundigheid en zorg. **Voor het overige, voor zover de wet dit maximaal toestaat, worden de Diensten geleverd "zoals ze zijn" en "zoals beschikbaar", en wijzen wij alle andere garanties uitdrukkelijk of stilzwijgend af,** waaronder verhandelbaarheid, geschiktheid voor een bepaald doel, niet-inbreuk, juistheid, beschikbaarheid, en dat de Diensten veilig, foutloos, ononderbroken of vrij van schadelijke componenten zullen zijn. Wij garanderen geen output, content van derden of resultaten die u verkrijgt. De Diensten zijn niet bedoeld voor gebruik in omgevingen met hoge risico's waar falen tot de dood, lichamelijk letsel of ernstige schade kan leiden (bijvoorbeeld medische hulpmiddelen, luchtvaart, nucleaire systemen of levensondersteunende systemen), en u mag ze niet op die manier gebruiken.

{{#if feature.consumers}}Als u consument bent, behoudt u alle wettelijke rechten die niet kunnen worden uitgesloten, zoals de wettelijke garanties en rechtsmiddelen voor digitale inhoud en diensten op grond van EU- en Britse recht, en de consumentengaranties op grond van de Australische Consumer Law en vergelijkbare wetten elders.{{/if}}

## 19. Beperking van aansprakelijkheid {#liability}

Niets in deze Voorwaarden sluit aansprakelijkheid uit of beperkt die die volgens de wet niet kan worden uitgesloten of beperkt, waaronder aansprakelijkheid voor overlijden of lichamelijk letsel, fraude of opzettelijk wangedrag, grove nalatigheid, of (voor consumenten) dwingendrechtelijke wettelijke rechtsmiddelen.

Onder voorbehoud daarvan en **voor zover de wet dit maximaal toestaat** en voor zakelijke klanten geldt:

1. zijn wij niet aansprakelijk voor indirecte, incidentele, bijzondere, gevolg-, voorbeeldschade of strafschadevergoeding, of voor gederfde winst, omzet, bedrijfsactiviteiten, goodwill, verwachte besparingen of gegevens, die voortvloeien uit of verband houden met de Diensten of deze Voorwaarden, zelfs als wij op de mogelijkheid daarvan zijn gewezen; en
2. is onze totale geaggregeerde aansprakelijkheid voor alle claims beperkt tot het hoogste van (a) de kosten die u ons heeft betaald voor de Diensten in de **{{policy.liability_cap_months}} maanden** vóór de gebeurtenis die als eerste aanleiding geeft tot de claim en (b) EUR 100.

{{#if feature.consumers}}Voor consumenten zijn wij aansprakelijk voor voorzienbaar verlies of schade die door onze schending of nalatigheid is veroorzaakt, maar niet voor verlies dat niet voorzienbaar was, noch voor zakelijk verlies.{{/if}}

Wij zijn niet aansprakelijk voor falen of vertraging veroorzaakt door gebeurtenissen buiten onze redelijke controle (sectie 24). Gratis diensten worden geleverd zonder aansprakelijkheid die verder gaat dan de wet vereist. Deze beperkingen gelden ongeacht hoe aansprakelijkheid ontstaat (contract, onrechtmatige daad waaronder nalatigheid, of anderszins) en zelfs als een rechtsmiddel zijn essentiële doel niet bereikt.

## 20. Vrijwaring {#indemnity}

Als u een zakelijke klant bent, zult u {{company.name}}, haar gelieerde ondernemingen, functionarissen, werknemers en vertegenwoordigers verdedigen, vrijwaren en schadeloos stellen van claims, schade, verliezen, boetes en kosten (waaronder redelijke advocaatkosten) die voortvloeien uit (a) Uw Content of uw gegevens, (b) een schending van deze Voorwaarden of de wet door u of uw Eindgebruikers, (c) uw misbruik van de Diensten, of (d) een geschil tussen u en een derde. Wij zullen u onverwijld informeren over elke claim, u de regie over de verdediging laten voeren (wij kunnen op onze kosten deelnemen), en u mag geen claim schikken die een schuldbekentenis van ons inhoudt zonder onze toestemming. {{#if feature.consumers}}Consumenten zijn alleen aansprakelijk voor het verlies dat zij zelf veroorzaken door hun eigen schending, zoals de wet bepaalt.{{/if}}

## 21. Rechtsmiddelen bij misbruik {#remedies}

Naast andere rechten en voor zover de wet dit toestaat:

- **Voorlopige voorziening.** U erkent dat een schending van de secties 4, 5 of 13 schade kan veroorzaken die met schadevergoeding niet volledig kan worden hersteld, en wij kunnen een verbod of ander billijk rechtsmiddel vorderen zonder de werkelijke schade te bewijzen of een zekerheid te stellen.
- **Kosten van misbruik.** Als uw misbruik ons kosten veroorzaakt (extra infrastructuur, incidentrespons, onderzoek, chargebacks, boetes van toezichthouders of claims van derden), vergoedt u de redelijke, gedocumenteerde kosten.
- **Bewijs en medewerking.** Wij kunnen logs en content bewaren die verband houden met vermoed misbruik, en wij kunnen die verstrekken aan betrokken partijen, platforms, rechtshandhavers of toezichthouders waar de wet dit toestaat. U werkt redelijkerwijs mee aan onze onderzoeken.
- **Melding.** Wij kunnen onrechtmatige activiteiten (waaronder seksueel misbruik van kinderen, fraude, bedreigingen, malware en aanvallen op systemen) melden aan autoriteiten en aan de betrokken partijen, en wij zullen dat doen waar de wet dit vereist.
- **Inhouding.** Wij kunnen bedragen die wij aan u verschuldigd zijn (bijvoorbeeld uitbetalingen) inhouden, bevriezen of verrekenen met bedragen die u ons verschuldigd bent of die voortvloeien uit misbruik, onder voorbehoud van de wet.

## 22. Export, sancties en anticorruptie {#export}

U mag de Diensten niet gebruiken, exporteren of opnieuw exporteren in strijd met toepasselijke exportcontrole- en sanctiewetgeving, waaronder die van de EU, de Verenigde Staten, het Verenigd Koninkrijk en de VN, en ook niet naar of voor personen of landen die aan uitgebreide sancties zijn onderworpen. U bevestigt dat u en uw gebruikers niet op een sanctielijst of lijst van beperkte partijen staan. U zult niets van waarde aanbieden of geven om iemand in verband met de Diensten onrechtmatig te beïnvloeden.

## 23. Toepasselijk recht en geschillen {#law}

Deze Voorwaarden en elk geschil of elke claim die voortvloeit uit of verband houdt met deze Voorwaarden of de Diensten (waaronder niet-contractuele geschillen) worden beheerst door het recht van **{{law.governing}}**, zonder toepassing van de regels van internationaal privaatrecht, en met uitsluiting van het VN-Verdrag inzake internationale koopovereenkomsten betreffende roerende zaken.

**Eerst informeel oplossen.** Voordat u een formele procedure start, schrijft u naar [{{company.legal_email}}](mailto:{{company.legal_email}}) met een beschrijving van het geschil, en laat u ons het te goeder trouw minstens 30 dagen proberen op te lossen.

**Rechtbanken.** Tenzij dwingend recht anders bepaalt, is de exclusieve bevoegdheid bij **{{law.venue}}**. Elke partij kan spoedeisende voorlopige voorzieningen vorderen bij elke bevoegde rechtbank.

{{#if feature.consumers}}**Consumenten.** Als u consument bent, behoudt u ook het recht om een procedure te starten bij de rechtbanken van uw woonland en om u te beroepen op het dwingendrechtelijke consumentenrecht daar, en niets in deze sectie neemt dat weg. {{#if consumer_dispute}}Wij nemen deel aan buitengerechtelijke geschillenbeslechting bij {{consumer_dispute}}.{{/if}}
{{/if}}
**Verjaringstermijn (zakelijke klanten).** Voor zover de wet dit toestaat, moet elke claim worden ingesteld binnen {{policy.claim_months}} maanden nadat de grondslag voor de vordering is ontstaan, anders vervalt de claim.

**Geen collectieve acties (zakelijke klanten, waar toegestaan).** Claims kunnen alleen individueel worden ingesteld, niet als onderdeel van een collectieve of representatieve procedure.

## 24. Overmacht {#force-majeure}

Geen van beide partijen is aansprakelijk voor vertraging of falen veroorzaakt door gebeurtenissen buiten haar redelijke controle, waaronder natuurrampen, oorlog, terrorisme, burgerlijke onrust, pandemie, overheidsmaatregelen, storingen in stroom-, internet- of telecommunicatie, storingen bij cloud- of andere infrastructuuraanbieders van derden, cyberaanvallen ondanks redelijke beveiligingsmaatregelen, arbeidsconflicten (behalve die van het eigen personeel van de partij), of leveringsproblemen. Betalingsverplichtingen voor reeds geleverde diensten worden niet opgeschort. Als een dergelijke gebeurtenis langer dan 60 dagen duurt, kan elke partij de getroffen diensten beëindigen.

## 25. Elektronische communicatie en kennisgevingen {#notices}

U stemt ermee in kennisgevingen en overeenkomsten elektronisch te ontvangen. Wij kunnen kennisgeving geven per e-mail aan het adres in uw account, in de Diensten, of door publicatie op onze website. Kennisgevingen aan ons moeten worden gestuurd naar [{{company.legal_email}}](mailto:{{company.legal_email}}) en naar {{company.address}}. Een kennisgeving wordt geacht te zijn ontvangen 24 uur nadat een e-mail is verzonden zonder terugkaatsing, en wanneer zij wordt geplaatst of getoond in de Diensten.

## 26. Algemeen {#general}

- **Volledige overeenkomst.** Deze Voorwaarden en de documenten waarnaar zij verwijzen vormen de volledige overeenkomst over hun onderwerp en vervangen eerdere afspraken. U heeft niet vertrouwd op enige verklaring die niet in deze Voorwaarden is opgenomen.
- **Splitsbaarheid.** Als een bepaling niet afdwingbaar is, wordt zij beperkt tot het minimaal noodzakelijke, of vervangen door een afdwingbare bepaling die het dichtst bij het doel ligt; de overige bepalingen blijven van kracht.
- **Geen verzaking.** Het niet uitoefenen van een recht is geen verzaking daarvan.
- **Overdracht.** U mag uw rechten of verplichtingen niet overdragen zonder onze schriftelijke toestemming. Wij kunnen deze Voorwaarden overdragen aan een gelieerde onderneming of een opvolger van ons bedrijf, en wij zullen u daarvan op de hoogte stellen.
- **Verhouding.** De partijen zijn onafhankelijke opdrachtnemers. Niets creëert een partnerschap, agentschap, dienstverband of joint venture.
- **Derden.** Niemand anders heeft het recht om deze Voorwaarden af te dwingen, behalve onze gelieerde ondernemingen, functionarissen en vertegenwoordigers onder de secties 19 en 20.
- **Taal.** Vertalingen worden verstrekt ter informatie; waar zij verschillen, geldt de Engelse versie, tenzij dwingend recht anders vereist.
- **Uitleg.** Koppen dienen alleen ter oriëntatie. "Waaronder" betekent "waaronder zonder beperking".
- **Publiciteit.** Wij kunnen u als klant met uw logo vermelden, tenzij u per e-mail bezwaar maakt; consumenten worden nooit vermeld.

## 27. Contact {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Registratienummer {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Btw-nummer {{company.tax_id}}{{/if}}
E-mail [{{company.email}}](mailto:{{company.email}}) · Juridisch [{{company.legal_email}}](mailto:{{company.legal_email}}) · Ondersteuning [{{company.email}}](mailto:{{company.email}}) · Zie ook ons [colofon]({{url.impressum}}).
