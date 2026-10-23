---
doc: privacy
title: Politika privatnosti
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
summary: Kako {{product.name}} prikuplja, koristi, dijeli i štiti lične podatke, i koja prava imate.
---

# Politika privatnosti

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

## 1. Ko smo mi {#who-we-are}

Ova politika objašnjava kako **{{company.name}}**, sa registrovanom adresom na {{company.address}} ("**{{product.name}}**", "mi", "nas"), obrađuje lične podatke kada koristite {{product.name}}, naše veb-sajtove, aplikacije, API-je i povezane usluge (zajedno: "**Usluge**").

Za lične podatke za koje mi odlučujemo kako i zašto ih obrađujemo (na primjer vaš nalog, posjete veb-sajtu i naplatu) mi smo **rukovalac**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Naš službenik za zaštitu ličnih podataka može se kontaktirati na [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nismo imenovali službenika za zaštitu ličnih podataka, jer zakon to ne zahtijeva za naše djelatnosti. Pitanja o privatnosti šaljite na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Predstavnik u EU (čl. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Predstavnik u Velikoj Britaniji (čl. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Kada smo mi obrađivač

Ako koristite Usluge preko neke organizacije (vašeg poslodavca, poslovnog korisnika), ta organizacija je obično rukovalac podacima koje unosi u Usluge, a mi ih obrađujemo u njeno ime prema našem [Aneksu o obradi podataka]({{url.dpa}}). U tom slučaju svoje zahtjeve uputite toj organizaciji; mi ćemo joj pomoći da odgovori. Ova politika se tada primjenjuje samo na podatke koje sami kontrolišemo (administracija naloga, naplata, bezbjednost, veb-sajt).
{{/if}}

## 2. Podaci koje prikupljamo {#data-we-collect}

| Kategorija | Primjeri | Izvor |
|---|---|---|
| **Podaci o nalogu** | ime, e-adresa, heš lozinke, detalji profila, jezik, postavke | vi |
| **Podaci za kontakt i podršku** | poruke, prilozi, bilješke sa poziva, povratne informacije, odgovori u anketama | vi |
| **Sadržaj koji dostavljate** | fajlovi, tekst, postavke, sve što stavite u Usluge | vi |
| **Podaci o korištenju i uređaju** | IP adresa, tip pregledača i uređaja, operativni sistem, jezik, stranice i funkcije koje koristite, oznake vremena, referrer, dnevnici padova i grešaka | automatski |
| **Kolačići i slične tehnologije** | identifikatori u kolačićima, lokalnoj pohrani, SDK-ovima (vidi [Politiku kolačića]({{url.cookies}})) | automatski |
{{#if feature.payments}}| **Podaci o plaćanju i transakcijama** | paket, fakture, ime i adresa za naplatu, poreski identifikacioni broj, status plaćanja; podatke o kartici obrađuje naš procesor plaćanja, a mi ih ne čuvamo | vi, procesor plaćanja |
{{/if}}{{#if feature.location}}| **Podaci o lokaciji** | tačna lokacija samo ako je omogućite na svom uređaju; u suprotnom približna lokacija na osnovu IP adrese | vaš uređaj |
{{/if}}| **Podaci o nalogu treće strane** | ime, e-adresa, profilna slika i identifikator koje dijeli pružalac usluge prijave koji izaberete | treća strana, uz vašu saglasnost |
{{#if feature.ugc}}| **Komunikacija između korisnika** | poruke i interakcije koje šaljete preko Usluga | vi |
{{/if}}{{#if feature.mobile}}| **Podaci o mobilnom uređaju** | model uređaja i verzija operativnog sistema, verzija aplikacije, identifikatori instance aplikacije i tokeni za push obavještenja, jezik i vremenska zona, status dozvola; identifikator za oglašavanje samo ako dozvolite praćenje | vaš uređaj |
{{/if}}{{#if feature.game}}| **Podaci o igranju** | napredak u igri, rezultati, rang-liste, predmeti i kupovine, istorija mečeva, ćaskanje u igri i (ako se koriste) glasovni izvještaji, signali za otkrivanje varanja i integriteta, javni profil (ime, avatar, rang) | vi, automatski |
{{/if}}| **Signali za bezbjednost i prevare** | neuspješne prijave, prijave zloupotreba, procjene rizika, blokirani zahtjevi | automatski, drugi korisnici |

Ne prikupljamo namjerno posebne kategorije ličnih podataka (zdravlje, biometrijski podaci, politička ili vjerska uvjerenja i slični). Molimo vas da ih ne dostavljate, osim ako funkcija to izričito ne traži. Ako ipak dostavite takve podatke, vi ste odgovorni za to da imate pravni osnov.

Niste obavezni da nam dostavite lične podatke, ali bez nekih od njih (na primjer e-adrese) ne možemo vam pružiti nalog.

## 3. Zašto koristimo vaše podatke i naši pravni osnovi {#purposes}

| Svrha | Pravni osnov (GDPR / UK GDPR) |
|---|---|
| Pružanje Usluga, kreiranje i upravljanje vašim nalogom, obrada narudžbina | Ugovor (čl. 6(1)(b)) |
| Podrška korisnicima i komunikacija o vašem korištenju Usluga | Ugovor; legitimni interesi |
| Bezbjednost, sprječavanje zloupotreba i prevara, sprovođenje naših [Uslova korišćenja]({{url.terms}}) i [Politike prihvatljivog korišćenja]({{url.acceptable_use}}) | Legitimni interesi (čl. 6(1)(f)); zakonska obaveza |
| Otklanjanje grešaka, pouzdanost, planiranje kapaciteta i unapređenje Usluga | Legitimni interesi |
{{#if feature.analytics}}| Analiza korištenja | Saglasnost tamo gdje zakon to zahtijeva, inače legitimni interesi |
{{/if}}{{#if feature.marketing}}| Obavještenja o proizvodima i marketinške e-poruke | Saglasnost, ili legitimni interesi za postojeće korisnike kada zakon to dozvoljava; možete se odjaviti u bilo kom trenutku |
{{/if}}{{#if feature.ads}}| Oglašavanje i mjerenje | Saglasnost |
{{/if}}| Računovodstvo, porez i druge zakonske obaveze | Zakonska obaveza (čl. 6(1)(c)) |
| Uspostavljanje, ostvarivanje ili odbrana pravnih zahtjeva; odgovaranje organima | Legitimni interesi; zakonska obaveza |
| Poslovni transferi (spajanje, preuzimanje, prodaja imovine) | Legitimni interesi |

Kada se oslanjamo na legitimne interese, odmjerili smo ih u odnosu na vaša prava; možete zatražiti detalje i možete uložiti prigovor (odjeljak 10). Kada se oslanjamo na saglasnost, možete je povući u bilo kom trenutku; to ne utiče na obradu koja je prethodno izvršena.

{{#if feature.ai}}
### Funkcije uz pomoć vještačke inteligencije {#ai}

Neke funkcije koriste modele mašinskog učenja ili generativne modele. Kada ih koristite, sadržaj koji unesete kao ulaz šalje se pružaocu koji za nas djeluje kao obrađivač, radi generisanja rezultata.

- Mi **ne** koristimo vaš sadržaj za obuku modela opšte namjene, i od naših pružalaca zahtijevamo da to ne rade, osim ako izričito ne pristanete.
- Rezultati vještačke inteligencije mogu biti netačni, nepotpuni ili pristrasni. Nemojte se oslanjati na njih za pravne, medicinske, finansijske ili druge odluke velikog značaja bez ljudskog pregleda.
- Ne donosimo isključivo automatizovane odluke sa pravnim ili sličnim značajnim posljedicama po vas. Ograničenja naloga zbog zloupotreba na zahtjev pregleda osoba (vidi [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}), Sprovođenje).
- Sadržaj koji generiše vještačka inteligencija označava se tamo gdje to zakon zahtijeva.
{{/if}}

## 4. Sa kim dijelimo podatke {#sharing}

**Ne prodajemo vaše lične podatke**, i ne "dijelimo" ih radi bihevioralnog oglašavanja u različitim kontekstima{{#if feature.ads}}, osim kako je opisano u Politici kolačića i samo ako ste dali saglasnost{{/if}}.

Lične podatke dijelimo samo sa:

- **Pružaocima usluga (obrađivačima)** koji postupaju po našim uputstvima na osnovu pisanih ugovora: hosting i infrastruktura, isporuka e-pošte, alati za podršku korisnicima, praćenje grešaka{{#if feature.payments}}, obrada plaćanja{{/if}}{{#if feature.ai}}, pružaoci vještačke inteligencije{{/if}}. Aktuelna lista nalazi se u našoj [Listi podobrađivača]({{url.subprocessors}}).
- **Platformama i prodavnicama aplikacija** koje koristite za pristup Uslugama (na primjer Apple, Google, konzolne ili PC prodavnice), koje obrađuju plaćanja i mogu nam dostaviti ograničene podatke o kupovini i nalogu;
- **Drugim korisnicima ili javnosti**, samo kako vi naložite (na primjer sadržaj koji odlučite objaviti{{#if feature.ugc}} ili poruke koje šaljete{{/if}});
- **Profesionalnim savjetnicima** (advokatima, revizorima, osiguravajućim društvima) uz obavezu čuvanja povjerljivosti;
- **Organima vlasti, sudovima i zainteresovanim licima** kada to zahtijeva zakon, radi odgovora na važeći pravni postupak, zaštite prava, bezbjednosti ili imovine, ili radi istrage zloupotreba i prevara. Zahtjeve provjeravamo u pogledu valjanosti i, kada je to zakonito, obavještavamo vas;
- **Pravnom sljedniku** u slučaju spajanja, preuzimanja, finansiranja ili prodaje imovine, koji mora poštovati ovu politiku; o materijalnim promjenama kontrole koje utiču na vaše podatke dostavićemo vam obavještenje;
- **Bilo kome drugom** samo uz vašu saglasnost.

## 5. Međunarodni prenosi {#transfers}

Poslujemo iz {{company.country}}{{#if hosting.region}}, a podatke čuvamo uglavnom u {{hosting.region}}{{/if}}. Neki pružaoci obrađuju podatke u drugim državama, uključujući Sjedinjene Američke Države. Kada se lični podaci iz EGP-a, Ujedinjenog Kraljevstva ili Švajcarske prenose u državu bez odluke o adekvatnosti, koristimo priznatu zaštitnu mjeru: Okvir za privatnost podataka EU-SAD (ili njegova proširenja za Ujedinjeno Kraljevstvo i Švajcarsku) ako je primalac sertifikovan, a inače **standardne ugovorne klauzule** Evropske komisije, uz **Aneks o međunarodnom prenosu podataka za Ujedinjeno Kraljevstvo** ili izmjene za Švajcarsku, gdje je to relevantno, te dodatne mjere, kao što su enkripcija u prenosu i u mirovanju. Kopiju relevantnih zaštitnih mjera možete zatražiti na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Koliko dugo čuvamo podatke {#retention}

| Podaci | Period čuvanja |
|---|---|
| Podaci o nalogu i sadržaj | Dok je vaš nalog aktivan, zatim se brišu ili anonimizuju u roku od {{policy.retention_account_days}} dana od zatvaranja |
| Serverski i sigurnosni dnevnici | 90 dana |
| Rezervne kopije | Rotirajuće, do 35 dana; izbrisani podaci u rezervnim kopijama nestaju u tom ciklusu |
| Fakture i računovodstvena evidencija | {{policy.retention_billing_years}} godina, ili onoliko koliko zakon zahtijeva |
| Korespondencija sa podrškom | Do 3 godine nakon zatvaranja predmeta, ili dok je nalog aktivan, ako je to duže |
| Evidencija o saglasnostima, odjavama i zahtjevima za ostvarivanje prava | Onoliko dugo koliko je potrebno da se dokaže usklađenost |
| Podaci potrebni za pravni zahtjev ili istragu | Dok se predmet ne riješi i ne isteknu rokovi zastare |
| Evidencija o zloupotrebama i zabranama (identifikator, razlog, datum) | Do 5 godina, radi sprječavanja ponovljenih zloupotreba |

Kada svrha prestane, brišemo podatke ili ih nepovratno anonimizujemo.

## 7. Bezbjednost {#security}

Primjenjujemo tehničke i organizacione mjere primjerene riziku: enkripciju u prenosu, enkripciju osjetljivih podataka u mirovanju, kontrolu pristupa po principu najmanjih ovlašćenja, mjere zaštite autentifikacije, evidentiranje, rezervne kopije, upravljanje ranjivostima i obaveze povjerljivosti zaposlenih. Nijedan sistem nije potpuno bezbjedan. Molimo vas da koristite jaku, jedinstvenu lozinku, uključite višefaktorsku autentifikaciju tamo gdje je ponuđena, i odmah nas obavijestite na [{{company.email}}](mailto:{{company.email}}) ako sumnjate da je vaš nalog kompromitovan. Pogledajte i našu stranicu [Bezbjednost i objava ranjivosti]({{url.security}}).

Ako je vjerovatno da povreda ličnih podataka ugrozi vaša prava i slobode, obavijestićemo nadzorni organ u roku od 72 sata od saznanja, gdje je to propisano, a vas ćemo obavijestiti bez nepotrebnog odlaganja kada to zakon zahtijeva.

## 8. Djeca {#children}

{{#if feature.minors}}Usluge nisu namijenjene djeci mlađoj od 13 godina, i svjesno ne prikupljamo lične podatke od njih. Korisnici stariji od {{policy.min_age}} godina koji još nisu dostigli punoljetstvo mogu koristiti Usluge **samo uz saglasnost roditelja ili staratelja**, koji može pregledati, ispraviti, ograničiti ili izbrisati podatke maloljetnika i povući saglasnost kontaktiranjem [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Prikupljamo samo podatke potrebne za Usluge, ne koristimo podatke maloljetnika za bihevioralno oglašavanje i primjenjujemo podrazumijevane postavke primjerene uzrastu (privatni profili, ograničene komunikacije) gdje možemo. Gdje zakon u nekoj državi propisuje višu granicu za digitalnu saglasnost, zahtijevamo saglasnost roditelja ispod te granice.{{else}}Usluge nisu namijenjene djeci. Morate imati najmanje {{policy.min_age}} godina da biste imali nalog. Svjesno ne prikupljamo lične podatke ni od koga mlađeg od {{policy.min_age}} godina (ili od više granice za digitalnu saglasnost u njegovoj državi; u Sjedinjenim Američkim Državama, mlađeg od 13 godina za potrebe COPPA-e). Ako smatrate da je dijete nama dostavilo lične podatke, kontaktirajte [{{company.privacy_email}}](mailto:{{company.privacy_email}}) i mi ćemo ih izbrisati i zatvoriti nalog. Kada je roditelj ili staratelj valjano dao saglasnost za korištenje od strane maloljetnika, ta saglasnost može se povući u bilo kom trenutku.{{/if}}

## 9. Sajtovi i usluge trećih strana {#third-parties}

Usluge mogu sadržavati veze ka veb-sajtovima, dodacima i aplikacijama trećih strana ili se s njima integrisati, uključujući pružaoce usluga prijave. Mi ih ne kontrolišemo i ne odgovaramo za njihove prakse u pogledu privatnosti; njihove sopstvene politike određuju šta prikupljaju. Integracije možete isključiti u podešavanjima vašeg naloga ili u podešavanjima treće strane.

## 10. Vaša prava {#rights}

U zavisnosti od toga gdje živite, možete:

- **pristupiti** svojim podacima i dobiti njihovu kopiju;
- **ispraviti** netačne podatke;
- **izbrisati** svoje podatke ("pravo na zaborav");
- **ograničiti** obradu ili **uložiti prigovor** na obradu, uključujući direktni marketing, u bilo kom trenutku;
- **prenijeti** svoje podatke drugom pružaocu u formatu koji se može mašinski čitati;
- **povući saglasnost** u bilo kom trenutku;
- **ne biti podvrgnuti** isključivo automatizovanim odlukama sa pravnim ili sličnim značajnim posljedicama;
- **podnijeti pritužbu** nadzornom organu.

**Brisanje vašeg naloga.** Nalog i lične podatke možete izbrisati {{#if feature.mobile}}unutar aplikacije (Podešavanja, zatim Nalog, zatim Izbriši nalog), {{/if}}u podešavanjima naloga na našem veb-sajtu ili putem e-pošte; ne zahtijevamo da kontaktirate podršku ako je samoposluga dostupna. Brisanje naloga je trajno nakon perioda odgode koji vam prikažemo. Deinstaliranje aplikacije ne briše vaš nalog.

Da biste ostvarili pravo, pošaljite e-poruku na [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ili koristite podešavanja u svom nalogu. Možemo zatražiti provjeru vašeg identiteta i, ako je zahtjev očigledno neosnovan ili prekomjeran, možemo naplatiti razumnu naknadu ili odbiti zahtjev, u mjeri koju zakon dozvoljava. Odgovaramo u roku od **mjesec dana** (koji se može produžiti za još dva mjeseca kod složenih zahtjeva; 45 dana prema zakonima američkih saveznih država, uz mogućnost produženja za još 45 dana), i obavijestićemo vas o razlogu ako ne možemo postupiti po zahtjevu. Nećemo vas diskriminisati zato što ostvarujete svoja prava.

### 10.1 Evropski ekonomski prostor, Ujedinjeno Kraljevstvo, Švajcarska

Sva prava navedena iznad se primjenjuju. Pritužbu možete podnijeti organu u državi u kojoj živite, radite ili gdje se problem dogodio ([spisak organa EGP-a](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Ujedinjeno Kraljevstvo: [ICO](https://ico.org.uk); Švajcarska: [FDPIC](https://www.edoeb.admin.ch)). Naš vodeći organ je {{law.authority}}.

### 10.2 Srbija

Ako se primjenjuje srpski Zakon o zaštiti podataka o ličnosti, imate prava ekvivalentna navedenim i možete se obratiti Povereniku za informacije od javnog značaja i zaštitu podataka o ličnosti (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Sjedinjene Američke Države (Kalifornija i druge države) {#us-states}

Ovaj odjeljak dopunjuje navedeno za stanovnike Kalifornije i drugih američkih saveznih država sa sveobuhvatnim zakonima o privatnosti (uključujući Virdžiniju, Kolorado, Konektikat, Jutu, Teksas, Oregon, Montanu i druge, kako stupaju na snagu).

- **Kategorije prikupljene u posljednjih 12 mjeseci:** identifikatori (ime, e-adresa, IP adresa, online identifikatori); evidencije o kupcima; komercijalne informacije (paketi, kupovine); aktivnost na internetu ili mreži; približna geolokacija{{#if feature.location}} i tačna geolokacija uz vašu saglasnost{{/if}}; sadržaj koji dostavljate; zaključci ograničeni na rad Usluga. Ove podatke otkrivamo pružaocima usluga za poslovne svrhe iz odjeljka 3.
- **Prodaja i dijeljenje:** ne prodajemo lične informacije i ne dijelimo ih radi bihevioralnog oglašavanja u različitim kontekstima. Svjesno ne prodajemo niti dijelimo podatke nikoga mlađeg od 16 godina.
- **Osjetljive lične informacije:** ne koristimo ih za zaključivanje o karakteristikama osoba i ne koristimo ih više nego što je potrebno za pružanje Usluga.
- **Vaša prava:** pristup i uvid, brisanje, ispravka, prenosivost, odustanak od prodaje i dijeljenja te od ciljanog oglašavanja ili profilisanja, ograničenje korištenja osjetljivih podataka, i zabrana diskriminacije. Poštujemo **Global Privacy Control** i slične signale za odustanak u pregledaču kao valjan zahtjev za odustanak.
- **Ovlašćeni zastupnici i žalbe:** ovlašćeni zastupnik može podnijeti zahtjeve uz vašu pisanu saglasnost. Ako odbijemo zahtjev, možete uložiti žalbu odgovarajući na našu odluku; ako ostanete nezadovoljni, možete se obratiti generalnom tužiocu svoje države.
- **Kalifornija:** možete zatražiti spisak trećih strana kojima smo u prethodnoj kalendarskoj godini otkrili lične informacije za njihov direktni marketing ("Shine the Light"); takvih otkrivanja nemamo. Stanovnici Kalifornije mlađi od 18 godina, koji su registrovani korisnici, mogu zatražiti uklanjanje sadržaja koji su javno objavili.

### 10.4 Brazil (LGPD)

Možete zatražiti potvrdu obrade, pristup, ispravku, anonimizaciju, blokiranje ili brisanje nepotrebnih ili prekomjernih podataka, prenosivost, informacije o subjektima sa kojima dijelimo podatke, informacije o mogućnosti da odbijete saglasnost i o njenim posljedicama, te preispitivanje automatizovanih odluka. Možete se žaliti Nacionalnoj agenciji za zaštitu podataka (Autoridade Nacional de Proteção de Dados, ANPD).

### 10.5 Ostali regioni

Ako se nalazite u nekoj drugoj državi sa zakonom o zaštiti podataka, poštujemo ekvivalentna prava koja vam taj zakon daje. Konkretno:

| Gdje | Šta dodajemo |
|---|---|
| **Kanada** (PIPEDA, Québec Law 25) | Možete pristupiti svojim podacima i ispraviti ih, povući saglasnost i podnijeti pritužbu Kancelariji povjerenika za privatnost ili Komisiji za pristup informacijama (Commission d'accès à l'information). Naše lice za kontakt za privatnost je osoba zadužena za zaštitu ličnih podataka; prenosi van Kvebeka procjenjuju se i obezbjeđuju zaštitnim mjerama. |
| **Indija** (DPDP Act 2023) | Možete pristupiti, ispraviti i izbrisati podatke, imenovati drugo lice da ostvaruje vaša prava u slučaju smrti ili nesposobnosti, i koristiti našu kontaktnu tačku za pritužbe navedenu ispod; možete se žaliti Odboru za zaštitu podataka. |
| **Australija, Novi Zeland** | Možete zatražiti pristup i ispravku i podnijeti pritužbu nama, a zatim OAIC-u (Australija) ili Povjereniku za privatnost (Novi Zeland). |
| **Japan, Južna Koreja, Singapur, Tajland, Malezija, Turska, UAE, Saudijska Arabija, Južna Afrika, Kenija, Nigerija i slični zakoni** | Primjenjujemo prava i zaštitne mjere koje ti zakoni zahtijevaju (pristup, ispravka, brisanje, prigovor, pritužba lokalnom organu, zaštitne mjere za prenose). Kontaktirajte nas da biste ih koristili. |
| **Kina** | Usluge nisu namijenjene osobama na teritoriji Kine; nemojte ih koristiti za dostavljanje ličnih podataka osoba iz te zemlje. |

**Kontakt za pritužbe i privatnost za sve regione:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Potvrdu prijema zahtjeva šaljemo u roku od 72 sata, a rješavamo ih u roku koji dozvoljava važeći zakon.

## 11. Izmjene ove politike {#changes}

Možemo ažurirati ovu politiku kako bismo odrazili promjene u Uslugama ili zakonu. Za materijalne promjene dostavićemo vam obavještenje najmanje {{policy.notice_days}} dana unaprijed, e-poštom ili u Uslugama, prije nego što se one primijene na vas, i tražićemo ponovnu saglasnost tamo gdje to zakon zahtijeva. Datum "posljednjeg ažuriranja" iznad pokazuje važeću verziju; ranije verzije su dostupne na zahtjev.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
