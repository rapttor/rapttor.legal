---
doc: privacy
title: Privacyverklaring
version: 1.2.1
updated: 2026-10-31
lang: nl
translation_of: 1.2.1
status: draft
summary: Hoe {{product.name}} persoonsgegevens verzamelt, gebruikt, deelt en beschermt, en welke rechten u heeft.
---

# Privacyverklaring

*Versie {{doc.version}}, laatst bijgewerkt op {{doc.updated}}.*

## 1. Wie wij zijn {#who-we-are}

Deze verklaring legt uit hoe **{{company.name}}** met geregistreerd adres te {{company.address}} ("**{{product.name}}**", "wij", "ons") persoonsgegevens verwerkt wanneer u {{product.name}}, onze websites, applicaties, API's en daarmee samenhangende diensten (de "**Diensten**") gebruikt.

Voor persoonsgegevens waarvan wij bepalen hoe en waarom ze worden verwerkt (bijvoorbeeld uw account, websitebezoeken en facturatie), zijn wij de **verwerkingsverantwoordelijke**. Contact: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Onze functionaris voor de gegevensbescherming is bereikbaar via [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Wij hebben geen functionaris voor de gegevensbescherming aangesteld, omdat de wet dat voor onze werkzaamheden niet verplicht stelt. Vragen over privacy kunt u richten aan [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**EU-vertegenwoordiger (art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Vertegenwoordiger in het Verenigd Koninkrijk (art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Wanneer wij verwerker zijn

Als u de Diensten gebruikt via een organisatie (uw werkgever, een zakelijke klant), is die organisatie doorgaans de verwerkingsverantwoordelijke voor de gegevens die zij in de Diensten invoert. Wij verwerken die gegevens namens haar op grond van onze [Verwerkersovereenkomst]({{url.dpa}}). Richt uw verzoeken in dat geval aan die organisatie; wij helpen haar bij het beantwoorden. Deze verklaring geldt dan alleen voor de gegevens die wijzelf beheren (accountadministratie, facturatie, beveiliging, website).
{{/if}}

## 2. Gegevens die wij verzamelen {#data-we-collect}

| Categorie | Voorbeelden | Bron |
|---|---|---|
| **Accountgegevens** | naam, e-mailadres, wachtwoordhash, profielgegevens, taal, voorkeuren | U |
| **Contact- en supportgegevens** | berichten, bijlagen, gespreksnotities, feedback, antwoorden op enquêtes | U |
| **Inhoud die u indient** | bestanden, tekst, instellingen, alles wat u in de Diensten plaatst | U |
{{#if feature.anonymous}}| **Gegevens van anoniem account** | een willekeurige accountidentificatie, de browser- of apparaatsessie waarin die is opgeslagen, de inhoud die u aanmaakt, en een e-mailadres als u later een adres koppelt | U, automatisch |
{{/if}}{{#if feature.uploads}}| **Bestanden en afbeeldingen die u uploadt** | de bestanden zelf en de metadata erin (bijvoorbeeld cameragegevens of locatie in foto's) | U |
{{/if}}| **Toestemmingsregistraties** | waarmee u heeft ingestemd (documenten, leeftijdsbevestiging, optionele keuzes), de versie, taal, datum en de manier waarop u heeft ingestemd | U |
| **Gebruiks- en apparaatgegevens** | IP-adres, browser- en apparaattype, besturingssysteem, taal, gebruikte pagina's en functies, tijdstempels, verwijzende pagina, crash- en foutlogboeken | Automatisch |
| **Cookies en vergelijkbare technieken** | identificaties in cookies, lokale opslag, SDK's (zie het [Cookiebeleid]({{url.cookies}})) | Automatisch |
{{#if feature.payments}}| **Betaal- en transactiegegevens** | abonnement, facturen, factuurnaam en -adres, btw-nummer, betaalstatus; kaartgegevens worden verwerkt door onze betalingsverwerker en door ons niet opgeslagen | U, betalingsverwerker |
{{/if}}{{#if feature.location}}| **Locatiegegevens** | nauwkeurige locatie alleen als u dat op uw apparaat inschakelt; anders een geschatte locatie op basis van het IP-adres | Uw apparaat |
{{/if}}| **Gegevens van account bij derden** | naam, e-mailadres, profielfoto en identificatie die worden gedeeld door een aanmeldingsprovider die u kiest | Derde partij, met uw toestemming |
{{#if feature.ugc}}| **Communicatie tussen gebruikers** | berichten en interacties die u via de Diensten verstuurt | U |
{{/if}}{{#if feature.mobile}}| **Gegevens van mobiel apparaat** | apparaatmodel en besturingssysteemversie, appversie, app-instantie- en pushmeldingstokens, taal en tijdzone, status van machtigingen; advertentie-identificatie alleen als u tracking toestaat | Uw apparaat |
{{/if}}{{#if feature.game}}| **Spelgegevens** | spelvoortgang, scores, ranglijsten, items en aankopen, wedstrijdgeschiedenis, chat in het spel en (indien gebruikt) spraakmeldingen, anti-valsspeel- en integriteitssignalen, openbaar profiel (naam, avatar, rang) | U, automatisch |
{{/if}}| **Beveiligings- en fraudesignalen** | mislukte inlogpogingen, misbruikmeldingen, risicoscores, geblokkeerde verzoeken | Automatisch, andere gebruikers |

Wij verzamelen bewust geen bijzondere categorieën persoonsgegevens (zoals gezondheid, biometrie, politieke of religieuze opvattingen). Dien deze gegevens niet in, tenzij een functie daar uitdrukkelijk om vraagt. Wanneer u dergelijke gegevens toch indient, bent u er zelf verantwoordelijk voor dat u daarvoor een rechtsgrond heeft.

U bent niet verplicht ons persoonsgegevens te verstrekken, maar zonder sommige gegevens (bijvoorbeeld een e-mailadres) kunnen wij geen account aanbieden.

### Tracking die wij niet gebruiken {#no-tracking}

Wij gebruiken **geen** tools voor sessie- of schermopname, geen registratie van toetsaanslagen of muisbewegingen, en geen browserfingerprinting. {{#if feature.analytics}}Analyse vindt alleen plaats met uw toestemming (zie het [Cookiebeleid]({{url.cookies}})).{{else}}Wij gebruiken geen analysetrackers of advertentietrackers.{{/if}}
{{#if feature.external}}
### Resources van derden en uw IP-adres {#external}

Sommige functies laden inhoud van servers van andere bedrijven (bijvoorbeeld lettertypen, kaarten, video of beveiligingscontroles). Wanneer uw browser zulke inhoud ophaalt, **worden uw IP-adres en technische gegevens naar dat bedrijf verzonden**, dat mogelijk buiten uw land is gevestigd. Wij laden deze resources pas nadat u in de cookie-instellingen voor elke resource toestemming heeft gegeven; u kunt dat op elk moment wijzigen. Als u weigert, gebruiken wij een alternatief of blijft de functie uitgeschakeld.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-mails {#emails}

Wij sturen e-mails die de Diensten nodig heeft (inloglinks, bonnen, beveiligingsmeldingen){{#if feature.marketing}} en, alleen waar u heeft ingestemd of de wet dit toestaat, productnieuws{{/if}}. Elke e-mail bevat een link waarmee u geen e-mail meer van ons ontvangt. {{#if feature.marketing}}Optionele e-mails stoppen direct met één klik. {{/if}}Omdat het blokkeren van alle e-mail ook inloglinks zou blokkeren, wordt een verzoek om **alle** e-mail van deze dienst te blokkeren bevestigd met één laatste e-mail die een link bevat waarmee wordt aangetoond dat het adres van u is. Daarna voegen wij het adres toe aan de verzendblokkering bij onze e-mailprovider en bewaren wij het daar, zodat wij uw keuze kunnen respecteren (wettelijke verplichting en ons gerechtvaardigd belang om uw verzoek te respecteren).
{{/if}}{{#if feature.age_gate}}
### Bevestiging van leeftijd {#age}

Voordat u gebruikmaakt van functies met {{policy.age_topics|leeftijdsgevoelige inhoud}}, vragen wij u te bevestigen dat u ten minste {{policy.age_gate}} jaar oud bent en volgens de regels van uw land meerderjarig bent. Wij vragen niet naar uw geboortedatum en bewaren alleen uw bevestiging en het moment waarop u die heeft gegeven. Als wij vernemen dat iemand jonger is dan die leeftijd, blokkeren wij het account en verwijderen wij de gegevens.
{{/if}}{{#if feature.gambling}}
Voor kansspelfuncties kunnen wij ook om een bewijs van uw leeftijd en identiteit vragen, en daarvoor een verificatieprovider inschakelen. Wij bewaren het resultaat en het bewijs dat de wet vereist.
{{/if}}

## 3. Waarom wij uw gegevens gebruiken, en onze rechtsgrondslagen {#purposes}

| Doel | Rechtsgrondslag (GDPR / UK GDPR) |
|---|---|
| Leveren van de Diensten, aanmaken en beheren van uw account, verwerken van bestellingen | Overeenkomst (art. 6 lid 1 sub b) |
| Klantenservice en communicatie over uw gebruik van de Diensten | Overeenkomst; gerechtvaardigde belangen |
| Beveiliging, voorkomen van misbruik en fraude, handhaving van onze [Servicevoorwaarden]({{url.terms}}) en [Acceptabel gebruiksbeleid]({{url.acceptable_use}}) | Gerechtvaardigde belangen (art. 6 lid 1 sub f); wettelijke verplichting |
| Foutopsporing, betrouwbaarheid, capaciteitsplanning en verbetering van de Diensten | Gerechtvaardigde belangen |
{{#if feature.analytics}}| Gebruiksanalyse | Toestemming waar de wet dit vereist, anders gerechtvaardigde belangen |
{{/if}}{{#if feature.marketing}}| Productnieuws en marketing-e-mails | Toestemming, of gerechtvaardigde belangen voor bestaande klanten waar de wet dit toestaat; u kunt zich op elk moment afmelden |
{{/if}}{{#if feature.ads}}| Advertenties en meting | Toestemming |
{{/if}}| Vastleggen van uw toestemmingen en respecteren van uw keuzes voor e-mail | Wettelijke verplichting; gerechtvaardigde belangen |
{{#if feature.external}}| Laden van resources van derden die uw IP-adres ontvangen | Toestemming (art. 6 lid 1 sub a, en de ePrivacy-regels voor toegang tot uw apparaat) |
{{/if}}| Boekhouding, belastingen en andere wettelijke verplichtingen | Wettelijke verplichting (art. 6 lid 1 sub c) |
| Instellen, uitoefenen of verdedigen van rechtsvorderingen; reageren op autoriteiten | Gerechtvaardigde belangen; wettelijke verplichting |
| Overdracht van bedrijfsonderdelen (fusie, overname, verkoop van activa) | Gerechtvaardigde belangen |

Wanneer wij ons beroepen op gerechtvaardigde belangen, hebben wij die afgewogen tegen uw rechten; u kunt om details vragen en u kunt bezwaar maken (sectie 10). Wanneer wij ons beroepen op toestemming, kunt u die op elk moment intrekken; dat heeft geen gevolgen voor eerdere verwerking.

{{#if feature.ai}}
### Functies met AI-ondersteuning {#ai}

Sommige functies maken gebruik van modellen voor machinaal leren of generatieve modellen. Wanneer u die gebruikt, wordt de inhoud die u als invoer aanlevert naar de aanbieder gestuurd, die voor ons als verwerker optreedt, om de uitvoer te genereren.

- Wij gebruiken uw inhoud **niet** om algemene modellen te trainen, en wij verplichten onze aanbieders dat ook niet te doen, tenzij u daar uitdrukkelijk mee instemt.
- AI-uitvoer kan onjuist, onvolledig of bevooroordeeld zijn. Vertrouw er niet op voor juridische, medische, financiële of andere beslissingen met grote gevolgen zonder menselijke beoordeling.
- Wij nemen geen besluiten met juridische of vergelijkbare ingrijpende gevolgen voor u die uitsluitend geautomatiseerd worden genomen. Accountbeperkingen wegens misbruik worden op verzoek door een persoon beoordeeld (zie het [Acceptabel gebruiksbeleid]({{url.acceptable_use}}), Handhaving).
- AI-gegenereerde inhoud wordt gelabeld waar de wet dat vereist.
{{/if}}

## 4. Met wie wij gegevens delen {#sharing}

**Wij verkopen uw persoonsgegevens niet**, en wij "delen" ze ook niet voor gedragsgerichte advertenties die over verschillende contexten heen worden getoond{{#if feature.ads}}, behalve zoals beschreven in het Cookiebeleid en alleen waar u daarmee heeft ingestemd{{/if}}.

Wij delen persoonsgegevens alleen met:

- **Dienstverleners (verwerkers)** die op onze instructie handelen op grond van schriftelijke overeenkomsten: hosting en infrastructuur, e-maildistributie, tools voor klantenservice, foutmonitoring{{#if feature.payments}}, betalingsverwerking{{/if}}{{#if feature.ai}}, AI-aanbieders{{/if}}. De actuele lijst staat in onze [Lijst van subverwerkers]({{url.subprocessors}}).
- **Platforms en appwinkels** die u gebruikt om toegang tot de Diensten te krijgen (bijvoorbeeld Apple, Google, console- of pc-winkels), die betalingen afhandelen en ons beperkte aankoop- en accountgegevens kunnen verstrekken;
- **Andere gebruikers of het publiek**, alleen zoals u aangeeft (bijvoorbeeld inhoud die u kiest om te publiceren{{#if feature.ugc}} of berichten die u verstuurt{{/if}});
- **Professionele adviseurs** (advocaten, accountants, verzekeraars) onder geheimhouding;
- **Autoriteiten, rechtbanken en betrokken partijen** wanneer de wet dit vereist, om te reageren op geldige juridische procedures, om rechten, veiligheid of eigendom te beschermen, of om misbruik en fraude te onderzoeken. Wij controleren verzoeken op geldigheid en informeren u, waar dat is toegestaan, over het verzoek;
- **Een opvolger** bij een fusie, overname, financiering of verkoop van activa, die deze verklaring moet naleven; wij stellen u op de hoogte van materiële wijzigingen in zeggenschap die uw gegevens raken;
- **Anderen** alleen met uw toestemming.

## 5. Internationale doorgifte {#transfers}

Wij opereren vanuit {{company.country}}{{#if hosting.region}} en slaan gegevens voornamelijk op in {{hosting.region}}{{/if}}. Sommige aanbieders verwerken gegevens in andere landen, waaronder de Verenigde Staten. Wanneer persoonsgegevens uit de EER, het Verenigd Koninkrijk of Zwitserland worden doorgegeven aan een land zonder adequaatheidsbesluit, gebruiken wij een erkende waarborg: het EU-VS Data Privacy Framework (of de uitbreidingen daarvan voor het Verenigd Koninkrijk en Zwitserland) wanneer de ontvanger is gecertificeerd, en anders de **standaardcontractbepalingen** van de Europese Commissie, met het **UK International Data Transfer Addendum** of Zwitserse aanvullingen waar relevant, plus aanvullende maatregelen zoals versleuteling bij verzending en in rust. U kunt een kopie van de relevante waarborgen opvragen via [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Hoe lang wij gegevens bewaren {#retention}

| Gegevens | Bewaartermijn |
|---|---|
| Accountgegevens en inhoud | Zolang uw account actief is; daarna worden deze binnen {{policy.retention_account_days}} dagen na sluiting verwijderd of geanonimiseerd |
| Server- en beveiligingslogboeken | 90 dagen |
| Back-ups | Doorlopend, tot 35 dagen; verwijderde gegevens verdwijnen met die cyclus uit de back-ups |
| Facturen en administratieve gegevens | {{policy.retention_billing_years}} jaar, of zolang de wet vereist |
| Supportcorrespondentie | Tot 3 jaar nadat de zaak is gesloten, of zolang het account actief is als dat langer is |
| Registraties van toestemmingen, afmeldingen en verzoeken over rechten | Zolang nodig om naleving aan te tonen |
| Gegevens die nodig zijn voor een rechtsvordering of onderzoek | Totdat de zaak is afgehandeld en de verjaringstermijnen zijn verstreken |
| Registraties van misbruik en verbanningen (identificatie, reden, datum) | Tot 5 jaar, om herhaald misbruik te voorkomen |
| Toestemmingsregistraties en verzendblokkering voor e-mail | Toestemmingsregistraties: voor de duur van het account plus de verjaringstermijn; items op de verzendblokkering: totdat u ons vraagt ze te verwijderen |

Wanneer het doel is vervallen, verwijderen wij de gegevens of maken wij ze onomkeerbaar anoniem.

## 7. Beveiliging {#security}

Wij nemen technische en organisatorische maatregelen die passen bij het risico: versleuteling bij verzending, versleuteling van gevoelige gegevens in rust, toegangscontrole op basis van het minimale recht, waarborgen voor authenticatie, logging, back-ups, kwetsbaarheidsbeheer en geheimhoudingsplichten voor medewerkers. Geen enkel systeem is volledig veilig. Gebruik een sterk, uniek wachtwoord, schakel meervoudige verificatie in waar die wordt aangeboden, en meld het ons direct via [{{company.email}}](mailto:{{company.email}}) als u vermoedt dat uw account is gecompromitteerd. Zie ook onze pagina [Beveiliging en melding van kwetsbaarheden]({{url.security}}).

Als een datalek waarschijnlijk een risico vormt voor uw rechten en vrijheden, melden wij dit waar vereist binnen 72 uur nadat wij ervan op de hoogte zijn geraakt aan de toezichthoudende autoriteit, en informeren wij u zonder onredelijke vertraging wanneer de wet dat vereist.

## 8. Kinderen {#children}

{{#if feature.minors}}De Diensten zijn niet gericht op kinderen jonger dan 13 jaar, en wij verzamelen bewust geen persoonsgegevens van hen. Gebruikers van {{policy.min_age}} jaar en ouder die de meerderjarige leeftijd nog niet hebben bereikt, mogen de Diensten **alleen gebruiken met toestemming van een ouder of voogd**. Die ouder of voogd kan de gegevens van de minderjarige inzien, corrigeren, beperken of verwijderen en de toestemming intrekken door contact op te nemen met [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Wij verzamelen alleen de gegevens die voor de Diensten nodig zijn, gebruiken gegevens van minderjarigen niet voor gedragsgerichte advertenties, en passen waar mogelijk standaardinstellingen toe die bij de leeftijd passen (privéprofielen, beperkte communicatie). Waar de wet in een land een hogere leeftijd voor digitale toestemming vaststelt, vragen wij toestemming van een ouder of voogd onder die leeftijd.{{else}}De Diensten zijn niet gericht op kinderen. U moet ten minste {{policy.min_age}} jaar oud zijn om een account te hebben. Wij verzamelen bewust geen persoonsgegevens van iemand die jonger is dan {{policy.min_age}} (of de hogere leeftijd voor digitale toestemming in zijn of haar land; in de Verenigde Staten jonger dan 13 jaar voor COPPA-doeleinden). Als u meent dat een kind persoonsgegevens aan ons heeft verstrekt, neem dan contact op via [{{company.privacy_email}}](mailto:{{company.privacy_email}}); wij verwijderen de gegevens dan en sluiten het account. Wanneer een ouder of voogd geldig heeft ingestemd met het gebruik door een minderjarige, kan die toestemming op elk moment worden ingetrokken.{{/if}}

## 9. Websites en diensten van derden {#third-parties}

De Diensten kunnen linken naar of worden geïntegreerd met websites, plug-ins en apps van derden, waaronder aanmeldingsproviders. Wij hebben daar geen zeggenschap over en zijn niet verantwoordelijk voor hun privacypraktijken; hun eigen beleid bepaalt welke gegevens zij verzamelen. Koppel integraties los in uw accountinstellingen of in de instellingen van de derde partij.

## 10. Uw rechten {#rights}

Afhankelijk van waar u woont, kunt u:

- uw gegevens **inzien** en een kopie ervan ontvangen;
- onjuiste gegevens **corrigeren**;
- uw gegevens **laten wissen** ("recht om vergeten te worden");
- de verwerking **beperken** of **bezwaar** maken, waaronder tegen direct marketing, op elk moment;
- uw gegevens naar een andere aanbieder **laten overdragen** in een machineleesbaar formaat;
- uw **toestemming op elk moment intrekken**;
- **niet onderworpen worden aan uitsluitend geautomatiseerde besluiten** met juridische of vergelijkbare ingrijpende gevolgen;
- een **klacht indienen** bij een toezichthoudende autoriteit.

**Uw account verwijderen.** U kunt uw account en persoonsgegevens verwijderen {{#if feature.mobile}}in de app (Instellingen, dan Account, dan Account verwijderen), {{/if}}in de accountinstellingen op onze website, of per e-mail. Wij vereisen niet dat u contact opneemt met de support als zelfbediening beschikbaar is. Het verwijderen van een account is definitief na de wachttermijn die wij u tonen. Het verwijderen van de app verwijdert uw account niet.

Om een recht uit te oefenen, stuurt u een e-mail naar [{{company.privacy_email}}](mailto:{{company.privacy_email}}) of gebruikt u de instellingen in uw account. Wij kunnen moeten controleren wie u bent en, als het verzoek kennelijk ongegrond of buitensporig is, kunnen wij binnen de grenzen van de wet een redelijke vergoeding vragen of het verzoek weigeren. Wij reageren binnen **één maand** (te verlengen met maximaal twee maanden voor complexe verzoeken; 45 dagen onder de wetten van Amerikaanse staten, te verlengen met 45 dagen), en wij vertellen u de reden als wij niet aan het verzoek kunnen voldoen. Wij behandelen u niet ongelijk omdat u uw rechten uitoefent.

### 10.1 Europese Economische Ruimte, Verenigd Koninkrijk, Zwitserland

Alle bovengenoemde rechten gelden. U kunt een klacht indienen bij de autoriteit in het land waar u woont of werkt, of waar het probleem zich heeft voorgedaan ([lijst van EER-autoriteiten](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Verenigd Koninkrijk: [ICO](https://ico.org.uk); Zwitserland: [FDPIC](https://www.edoeb.admin.ch)). Onze leidende autoriteit is {{law.authority}}.

### 10.2 Servië

Waar de Servische Wet op de bescherming van persoonsgegevens van toepassing is, heeft u rechten die gelijkwaardig zijn aan de hierboven genoemde, en kunt u een klacht indienen bij de Commissaris voor informatie van openbaar belang en bescherming van persoonsgegevens (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Verenigde Staten (Californië en andere staten) {#us-states}

Deze sectie vult het bovenstaande aan voor inwoners van Californië en andere Amerikaanse staten met uitgebreide privacywetgeving (waaronder Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana en andere, naarmate die in werking treden).

- **Categorieën die in de afgelopen 12 maanden zijn verzameld:** identificatoren (naam, e-mailadres, IP-adres, online-identificaties); klantgegevens; commerciële informatie (abonnementen, aankopen); internet- of netwerkactiviteit; benaderde geolocatie{{#if feature.location}} en nauwkeurige geolocatie met uw toestemming{{/if}}; inhoud die u indient; gevolgtrekkingen die zich beperken tot het exploiteren van de Diensten. Wij verstrekken deze gegevens aan dienstverleners voor de bedrijfsdoeleinden in sectie 3.
- **Verkoop en delen:** wij verkopen geen persoonsinformatie en delen die niet voor gedragsgerichte advertenties over verschillende contexten heen. Wij verkopen of delen bewust geen gegevens van iemand jonger dan 16 jaar.
- **Gevoelige persoonsinformatie:** wij gebruiken deze niet om kenmerken af te leiden, en niet verder dan nodig is om de Diensten te leveren.
- **Uw rechten:** inzage, verwijdering, correctie, overdraagbaarheid, afmelding voor verkoop of delen en voor gerichte advertenties of profilering, beperking van het gebruik van gevoelige gegevens, en non-discriminatie. Wij respecteren **Global Privacy Control** en vergelijkbare opt-outsignalen van browsers als een geldig verzoek tot afmelding.
- **Gemachtigde agenten en bezwaar:** een gemachtigde agent kan verzoeken indienen met uw schriftelijke toestemming. Als wij een verzoek afwijzen, kunt u bezwaar maken door op ons besluit te reageren; blijft u ontevreden, dan kunt u contact opnemen met de procureur-generaal van uw staat.
- **Californië:** u kunt een lijst opvragen van derden aan wie wij in het voorafgaande kalenderjaar persoonsgegevens hebben verstrekt voor hun direct marketing ("Shine the Light"); wij doen dergelijke verstrekkingen niet. Californische inwoners jonger dan 18 jaar die geregistreerde gebruikers zijn, kunnen verzoeken om verwijdering van inhoud die zij openbaar hebben geplaatst.

### 10.4 Brazilië (LGPD)

U kunt een bevestiging van de verwerking vragen, inzage, correctie, anonimisering, blokkering of verwijdering van onnodige of overmatige gegevens, overdraagbaarheid, informatie over de entiteiten met wie wij gegevens delen, informatie over de mogelijkheid om toestemming te weigeren en de gevolgen daarvan, en herziening van geautomatiseerde besluiten. U kunt een klacht indienen bij de Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Overige regio's

Als u zich elders bevindt, met een wet voor gegevensbescherming, respecteren wij de gelijkwaardige rechten die uw wet u verleent. Met name geldt het volgende:

| Waar | Wat wij daaraan toevoegen |
|---|---|
| **Canada** (PIPEDA, Québec Law 25) | U kunt uw gegevens inzien en corrigeren, uw toestemming intrekken, en een klacht indienen bij de Office of the Privacy Commissioner of de Commission d'accès à l'information. Ons privacycontact is de persoon die verantwoordelijk is voor de bescherming van persoonsgegevens; doorgiften buiten Québec worden beoordeeld en beveiligd. |
| **India** (DPDP Act 2023) | U kunt uw gegevens inzien, corrigeren en wissen, een andere persoon aanwijzen om uw rechten uit te oefenen als u overlijdt of handelingsonbekwaam wordt, en gebruikmaken van ons klachtencontact hieronder; u kunt een klacht indienen bij de Data Protection Board. |
| **Australië, Nieuw-Zeeland** | U kunt inzage en correctie vragen en een klacht bij ons indienen, en daarna bij de OAIC (Australië) of de Privacy Commissioner (Nieuw-Zeeland). |
| **Japan, Zuid-Korea, Singapore, Thailand, Maleisië, Turkije, de Verenigde Arabische Emiraten, Saoedi-Arabië, Zuid-Afrika, Kenia, Nigeria en vergelijkbare wetten** | Wij passen de rechten en waarborgen toe die die wetten vereisen (inzage, correctie, verwijdering, bezwaar, klacht bij de lokale autoriteit, waarborgen voor doorgiften). Neem contact met ons op om die rechten te gebruiken. |
| **China** | De Diensten zijn niet gericht op personen in het vasteland van China; gebruik ze niet om persoonsgegevens van personen daar in te dienen. |

**Klachten- en privacycontact voor alle regio's:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Wij behandelen verzoeken binnen de termijn die het toepasselijke recht toestaat.

## 11. Wijzigingen in deze verklaring {#changes}

Wij kunnen deze verklaring bijwerken om wijzigingen in de Diensten of in de wet te weerspiegelen. Bij materiële wijzigingen geven wij ten minste {{policy.notice_days}} dagen vooraf kennis per e-mail of binnen de Diensten voordat die wijzigingen voor u gelden, en vragen wij waar de wet dat vereist opnieuw om toestemming. De datum "laatst bijgewerkt" hierboven geeft de huidige versie aan; eerdere versies zijn op verzoek beschikbaar.

## 12. Contact {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
