---
doc: privacy
title: Politika privatnosti
version: 1.0.0
updated: 2026-10-23
lang: bs
translation_of: 1.0.0
status: draft
summary: Kako {{product.name}} prikuplja, koristi, dijeli i štiti lične podatke te prava koja imate.
---

# Politika privatnosti

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

## 1. Ko smo mi {#who-we-are}

Ova politika objašnjava kako **{{company.name}}**, sa registrovanom adresom na {{company.address}} ("**{{product.name}}**", "mi", "nas"), obrađuje lične podatke kada koristite {{product.name}}, naše web-stranice, aplikacije, API-je i povezane usluge (u daljem tekstu "**Usluge**").

Za lične podatke za koje odlučujemo kako i zašto ih obrađujemo (na primjer vaš nalog, posjete web-stranici i naplatu), mi smo **kontrolor**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Naš službenik za zaštitu ličnih podataka može se kontaktirati na [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nismo imenovali službenika za zaštitu ličnih podataka jer zakon to za naše djelatnosti ne zahtijeva. Pitanja o privatnosti šaljite na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Predstavnik u EU (čl. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Predstavnik u Velikoj Britaniji (čl. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Kada smo obrađivač

Ako koristite Usluge preko organizacije (vašeg poslodavca, poslovnog korisnika), ta organizacija je obično kontrolor podataka koje unosi u Usluge, a mi ih obrađujemo u njeno ime prema našem [Aneksu o obradi podataka]({{url.dpa}}). U tom slučaju svoje zahtjeve upućujte toj organizaciji; mi ćemo joj pomoći da odgovori. Ova politika se tada primjenjuje samo na podatke koje sami kontrolišemo (administracija naloga, naplata, sigurnost, web-stranica).
{{/if}}

## 2. Podaci koje prikupljamo {#data-we-collect}

| Kategorija | Primjeri | Izvor |
|---|---|---|
| **Podaci o nalogu** | ime, e-pošta, heš lozinke, detalji profila, jezik, postavke | Vi |
| **Podaci za kontakt i podršku** | poruke, prilozi, bilješke o pozivima, povratne informacije, odgovori u anketama | Vi |
| **Sadržaj koji dostavljate** | datoteke, tekst, postavke, sve što stavite u Usluge | Vi |
| **Podaci o upotrebi i uređaju** | IP adresa, tip pregledača i uređaja, operativni sistem, jezik, stranice i funkcije koje koristite, vremenske oznake, izvor preusmjeravanja, zapisi o padovima i greškama | Automatski |
| **Kolačići i slične tehnologije** | identifikatori u kolačićima, lokalnoj pohrani, SDK-ovima (vidi [Politiku kolačića]({{url.cookies}})) | Automatski |
{{#if feature.payments}}| **Podaci o plaćanju i transakcijama** | plan, fakture, ime i adresa za naplatu, porezni ID, status plaćanja; podatke o kartici obrađuje naš procesor plaćanja i mi ih ne pohranjujemo | Vi, procesor plaćanja |
{{/if}}{{#if feature.location}}| **Podaci o lokaciji** | precizna lokacija samo ako je uključite na uređaju; inače približna lokacija na osnovu IP adrese | Vaš uređaj |
{{/if}}| **Podaci s računa trećih strana** | ime, e-pošta, profilna slika i identifikator koje dijeli provajder prijave kojeg izaberete | Treća strana, uz vašu saglasnost |
{{#if feature.ugc}}| **Komunikacija između korisnika** | poruke i interakcije koje šaljete putem Usluga | Vi |
{{/if}}{{#if feature.mobile}}| **Podaci o mobilnom uređaju** | model uređaja i verzija operativnog sistema, verzija aplikacije, tokeni instance aplikacije i push-obavještenja, jezik i vremenska zona, status dozvola; identifikator za oglašavanje samo ako dozvolite praćenje | Vaš uređaj |
{{/if}}{{#if feature.game}}| **Podaci o igranju** | napredak u igri, rezultati, rangiranja, predmeti i kupovine, historija mečeva, razgovor u igri i (ako se koriste) glasovni izvještaji, signali protiv varanja i integriteta, javni profil (ime, avatar, rang) | Vi, automatski |
{{/if}}| **Sigurnosni signali i signali prevare** | neuspješne prijave, prijave zloupotrebe, ocjene rizika, blokirani zahtjevi | Automatski, drugi korisnici |

Namjerno ne prikupljamo posebne kategorije podataka (zdravlje, biometrijske podatke, političke ili vjerske stavove i slično). Molimo vas da ih ne dostavljate, osim ako funkcija to izričito ne traži. Ako ih ipak dostavite, vi ste odgovorni za to da imate zakonit osnov.

Niste dužni dati nam lične podatke, ali bez nekih od njih (na primjer e-adrese) ne možemo omogućiti nalog.

## 3. Zašto koristimo vaše podatke i naši pravni osnovi {#purposes}

| Svrha | Pravni osnov (GDPR / UK GDPR) |
|---|---|
| Pružanje Usluga, kreiranje i upravljanje vašim nalogom, obrada narudžbi | Ugovor (čl. 6(1)(b)) |
| Korisnička podrška i komunikacija o vašem korištenju Usluga | Ugovor; legitimni interesi |
| Sigurnost, sprječavanje zloupotrebe i prevare, provođenje naših [Uslova]({{url.terms}}) i [Politike prihvatljive upotrebe]({{url.acceptable_use}}) | Legitimni interesi (čl. 6(1)(f)); zakonska obaveza |
| Otklanjanje grešaka, pouzdanost, planiranje kapaciteta i poboljšanje Usluga | Legitimni interesi |
{{#if feature.analytics}}| Analitika upotrebe | Saglasnost tamo gdje to zakon zahtijeva, inače legitimni interesi |
{{/if}}{{#if feature.marketing}}| Vijesti o proizvodima i marketinške e-poruke | Saglasnost, ili legitimni interesi za postojeće korisnike tamo gdje zakon dozvoljava; možete se odjaviti u bilo kojem trenutku |
{{/if}}{{#if feature.ads}}| Oglašavanje i mjerenje | Saglasnost |
{{/if}}| Računovodstvo, porez i druge zakonske obaveze | Zakonska obaveza (čl. 6(1)(c)) |
| Uspostavljanje, ostvarivanje ili odbrana pravnih zahtjeva; odgovaranje organima vlasti | Legitimni interesi; zakonska obaveza |
| Poslovni transferi (spajanje, preuzimanje, prodaja imovine) | Legitimni interesi |

Tamo gdje se oslanjamo na legitimne interese, odvagali smo ih u odnosu na vaša prava; pojedinosti možete zatražiti, a možete i podnijeti prigovor (odjeljak 10). Tamo gdje se oslanjamo na saglasnost, možete je povući u bilo kojem trenutku; to ne utiče na prethodnu obradu.

{{#if feature.ai}}
### Funkcije uz pomoć vještačke inteligencije {#ai}

Neke funkcije koriste modele mašinskog učenja ili generativne modele. Kada ih koristite, sadržaj koji unesete kao ulaz šalje se provajderu koji djeluje kao naš obrađivač radi izrade rezultata.

- **Ne** koristimo vaš sadržaj za obuku modela opće namjene, i zahtijevamo od naših provajdera da to ne čine, osim ako se izričito ne saglasite.
- Rezultati vještačke inteligencije mogu biti netačni, nepotpuni ili pristrasni. Ne oslanjajte se na njih pri donošenju pravnih, medicinskih, finansijskih ili drugih odluka visokog rizika bez ljudskog pregleda.
- Ne donosimo odluke s pravnim ili sličnim značajnim posljedicama za vas isključivo automatizovanim putem. Ograničenja naloga zbog zloupotrebe pregleda osoba na zahtjev (vidi [Politiku prihvatljive upotrebe]({{url.acceptable_use}}), Provođenje).
- Sadržaj generisan vještačkom inteligencijom označava se tamo gdje to zakon zahtijeva.
{{/if}}

## 4. Sa kim dijelimo podatke {#sharing}

**Ne prodajemo vaše lične podatke**, i ne "dijelimo" ih radi oglašavanja ponašanja u različitim kontekstima{{#if feature.ads}} osim kako je opisano u Politici kolačića i samo ako ste dali saglasnost{{/if}}.

Lične podatke dijelimo samo sa:

- **Pružaocima usluga (obrađivačima)** koji djeluju prema našim uputama na osnovu pisanih ugovora: hosting i infrastruktura, isporuka e-pošte, alati za korisničku podršku, praćenje grešaka{{#if feature.payments}}, obrada plaćanja{{/if}}{{#if feature.ai}}, provajderi vještačke inteligencije{{/if}}. Aktuelna lista je na našoj [Listi podobrađivača]({{url.subprocessors}}).
- **Platformama i prodavnicama aplikacija** koje koristite za pristup Uslugama (na primjer Apple, Google, konzolne ili PC prodavnice), koje obrađuju plaćanja i mogu nam dostaviti ograničene podatke o kupovini i nalogu;
- **Drugim korisnicima ili javnosti**, samo kako vi usmjerite (na primjer sadržaj koji odlučite objaviti{{#if feature.ugc}} ili poruke koje šaljete{{/if}}).
- **Profesionalnim savjetnicima** (advokatima, revizorima, osiguravajućim kućama) uz obavezu čuvanja povjerljivosti.
- **Organima vlasti, sudovima i zainteresovanim stranama** kada to zahtijeva zakon, radi odgovora na valjane pravne postupke, zaštite prava, sigurnosti ili imovine, ili radi istrage zloupotrebe i prevare. Zahtjeve provjeravamo u pogledu valjanosti i, ako je to zakonito, o tome vas obavještavamo.
- **Pravnom sljedniku** u slučaju spajanja, preuzimanja, finansiranja ili prodaje imovine, koji mora poštovati ovu politiku; o značajnim promjenama vlasništva koje utiču na vaše podatke obavijestićemo vas.
- **Bilo kome drugom** samo uz vašu saglasnost.

## 5. Međunarodni prenos podataka {#transfers}

Djelujemo iz {{company.country}}{{#if hosting.region}} i podatke pohranjujemo uglavnom u {{hosting.region}}{{/if}}. Neki provajderi obrađuju podatke u drugim zemljama, uključujući Sjedinjene Američke Države. Kada se lični podaci iz EGP-a, Ujedinjenog Kraljevstva ili Švicarske prenose u zemlju bez odluke o adekvatnosti, koristimo priznatu zaštitnu mjeru: EU-U.S. Data Privacy Framework (ili njegova proširenja za Ujedinjeno Kraljevstvo i Švicarsku) tamo gdje je primalac certificiran, a inače **Standardne ugovorne klauzule** Evropske komisije, uz **Dodatak o međunarodnom prenosu podataka za Ujedinjeno Kraljevstvo** ili švicarske dopune tamo gdje je to relevantno, te dodatne mjere kao što su šifriranje u prenosu i u mirovanju. Kopiju relevantnih zaštitnih mjera možete zatražiti na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Koliko dugo čuvamo podatke {#retention}

| Podaci | Čuvanje |
|---|---|
| Podaci o nalogu i sadržaj | Dok je vaš nalog aktivan, zatim se brišu ili anonimizuju u roku od {{policy.retention_account_days}} dana nakon zatvaranja |
| Serverski i sigurnosni zapisi | 90 dana |
| Rezervne kopije | Rotirajuće, do 35 dana; izbrisani podaci iz rezervnih kopija nestaju tim ciklusom |
| Fakture i računovodstvena evidencija | {{policy.retention_billing_years}} godina, ili onoliko koliko zakon zahtijeva |
| Korespondencija podrške | Do 3 godine nakon zatvaranja predmeta, ili dok je nalog aktivan ako je to duže |
| Evidencija o saglasnostima, odjavama i zahtjevima za ostvarivanje prava | Onoliko dugo koliko je potrebno da se dokaže usklađenost |
| Podaci potrebni za pravni zahtjev ili istragu | Dok se predmet ne riješi i ne isteknu rokovi zastare |
| Evidencija o zloupotrebama i zabranama (identifikator, razlog, datum) | Do 5 godina, radi sprječavanja ponovljene zloupotrebe |

Kada svrha prestane, podatke brišemo ili ih nepovratno anonimizujemo.

## 7. Sigurnost {#security}

Primjenjujemo tehničke i organizacione mjere primjerene riziku: šifriranje u prenosu, šifriranje osjetljivih podataka u mirovanju, kontrolu pristupa po principu najmanjih privilegija, zaštitne mjere za autentifikaciju, evidentiranje, rezervne kopije, upravljanje ranjivostima i obaveze povjerljivosti zaposlenih. Nijedan sistem nije savršeno siguran. Molimo vas da koristite jaku, jedinstvenu lozinku, uključite višefaktorsku autentifikaciju gdje je ponuđena, i odmah nas obavijestite na [{{company.email}}](mailto:{{company.email}}) ako sumnjate da je vaš nalog kompromitovan. Pogledajte i našu stranicu [Sigurnost i prijavljivanje ranjivosti]({{url.security}}).

Ako je vjerovatno da će povreda ugroziti vaša prava i slobode, obavijestićemo nadzorni organ u roku od 72 sata od saznanja, tamo gdje to zahtijeva zakon, a vas ćemo obavijestiti bez nepotrebnog odlaganja kada to zakon zahtijeva.

## 8. Djeca {#children}

{{#if feature.minors}}Usluge nisu namijenjene djeci mlađoj od 13 godina i svjesno ne prikupljamo lične podatke od njih. Korisnici stari {{policy.min_age}} i više godina, a koji još nisu punoljetni, mogu koristiti Usluge **samo uz saglasnost roditelja ili staratelja**, koji može pregledati, ispraviti, ograničiti ili izbrisati podatke maloljetnika i povući saglasnost kontaktiranjem [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Prikupljamo samo podatke potrebne za Usluge, ne koristimo podatke maloljetnika za bihevioralno oglašavanje i primjenjujemo podrazumijevane postavke primjerene uzrastu (privatni profili, ograničene komunikacije) tamo gdje možemo. Tamo gdje zakon u nekoj zemlji propisuje višu granicu digitalne saglasnosti, za uzrast ispod te granice zahtijevamo saglasnost roditelja.{{else}}Usluge nisu namijenjene djeci. Morate imati najmanje {{policy.min_age}} godina da biste imali nalog. Svjesno ne prikupljamo lične podatke od osoba mlađih od {{policy.min_age}} godina (ili od više granice digitalne saglasnosti u njihovoj zemlji; u Sjedinjenim Američkim Državama, mlađih od 13 godina za potrebe COPPA). Ako smatrate da je dijete nama dostavilo lične podatke, kontaktirajte [{{company.privacy_email}}](mailto:{{company.privacy_email}}) i izbrisaćemo ih i zatvoriti nalog. Tamo gdje je roditelj ili staratelj valjano dao saglasnost za korištenje Usluga od strane maloljetnika, ta saglasnost može se povući u bilo kojem trenutku.{{/if}}

## 9. Web-stranice i usluge trećih strana {#third-parties}

Usluge mogu sadržavati veze ka web-stranicama, dodacima i aplikacijama trećih strana ili se s njima integrisati, uključujući provajdere prijave. Ne kontrolišemo ih i nismo odgovorni za njihove prakse privatnosti; njihove vlastite politike određuju šta prikupljaju. Integracije možete prekinuti u postavkama svog naloga ili u postavkama treće strane.

## 10. Vaša prava {#rights}

Zavisno od toga gdje živite, možete:

- **pristupiti** svojim podacima i dobiti njihovu kopiju;
- **ispraviti** netačne podatke;
- **izbrisati** svoje podatke ("pravo na zaborav");
- **ograničiti** obradu ili **uložiti prigovor** na nju, uključujući direktni marketing u bilo kojem trenutku;
- **prenijeti** svoje podatke drugom pružaocu u mašinski čitljivom formatu;
- **povući saglasnost** u bilo kojem trenutku;
- **ne biti predmet isključivo automatizovanih odluka** s pravnim ili sličnim značajnim posljedicama;
- **podnijeti pritužbu** nadzornom organu.

**Brisanje naloga.** Svoj nalog i lične podatke možete izbrisati {{#if feature.mobile}}unutar aplikacije (Postavke, zatim Nalog, zatim Izbriši nalog), {{/if}}u postavkama naloga na našoj web-stranici ili slanjem e-pošte; ne zahtijevamo da kontaktirate podršku ako je samoposluga dostupna. Brisanje naloga je trajno nakon perioda čekanja koji vam prikažemo. Deinstaliranje aplikacije ne briše vaš nalog.

Da biste ostvarili pravo, pošaljite e-poruku na [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ili koristite postavke svog naloga. Možda ćemo morati provjeriti vaš identitet i, ako je zahtjev očigledno neosnovan ili pretjeran, možemo naplatiti razumnu naknadu ili odbiti zahtjev, u mjeri koju zakon dozvoljava. Odgovaramo u roku od **mjesec dana** (koji se može produžiti za najviše dva dodatna mjeseca kod složenih zahtjeva; 45 dana prema zakonima američkih saveznih država, uz mogućnost produženja za 45), i obavještavamo vas o razlozima ako ne možemo postupiti. Nećemo vas diskriminisati zato što ostvarujete svoja prava.

### 10.1 Evropski ekonomski prostor, Ujedinjeno Kraljevstvo, Švicarska

Sva prava navedena iznad se primjenjuju. Možete podnijeti pritužbu organu u zemlji u kojoj živite, radite ili gdje se problem dogodio ([lista organa EGP-a](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); UK: [ICO](https://ico.org.uk); Švicarska: [FDPIC](https://www.edoeb.admin.ch)). Naš vodeći organ je {{law.authority}}.

### 10.2 Srbija

Tamo gdje se primjenjuje Zakon o zaštiti podataka o ličnosti, imate prava ekvivalentna navedenim iznad i možete podnijeti pritužbu Povjereniku za informacije od javnog značaja i zaštitu ličnih podataka (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Sjedinjene Američke Države (Kalifornija i druge države) {#us-states}

Ovaj odjeljak dopunjuje navedeno za stanovnike Kalifornije i drugih američkih država sa sveobuhvatnim zakonima o privatnosti (uključujući Virdžiniju, Koloradu, Konektikat, Jutu, Teksas, Oregon, Montanu i druge, kako stupaju na snagu).

- **Kategorije prikupljene u posljednjih 12 mjeseci:** identifikatori (ime, e-pošta, IP adresa, online identifikatori); evidencija o kupcima; komercijalne informacije (planovi, kupovine); aktivnost na internetu ili mreži; približna geolokacija{{#if feature.location}} i precizna geolokacija uz vašu saglasnost{{/if}}; sadržaj koji dostavljate; zaključci ograničeni na rad Usluga. Ove podatke otkrivamo pružaocima usluga za poslovne svrhe iz odjeljka 3.
- **Prodaja i dijeljenje:** ne prodajemo lične informacije i ne dijelimo ih radi oglašavanja ponašanja u različitim kontekstima. Svjesno ne prodajemo niti dijelimo podatke nikoga ko je mlađi od 16 godina.
- **Osjetljive lične informacije:** ne koristimo ih za zaključivanje o karakteristikama i ne koristimo ih više nego što je neophodno za pružanje Usluga.
- **Vaša prava:** pravo na uvid, odnosno pristup, brisanje, ispravku, prenosivost, odustajanje od prodaje i dijeljenja te od ciljanog oglašavanja ili profilisanja, ograničenje upotrebe osjetljivih podataka i pravo na zabranu diskriminacije. Poštujemo **Global Privacy Control** i slične signale za odjavu iz pregledača kao valjan zahtjev za odjavu.
- **Ovlašteni zastupnici i žalbe:** ovlašteni zastupnik može podnositi zahtjeve uz vašu pisanu saglasnost. Ako odbijemo zahtjev, možete se žaliti odgovarajući na našu odluku; ako ostanete nezadovoljni, možete se obratiti državnom glavnom tužiocu.
- **Kalifornija:** možete zatražiti spisak trećih strana kojima smo otkrili lične informacije za njihov direktni marketing u prethodnoj kalendarskoj godini ("Shine the Light"); takvih otkrivanja nemamo. Stanovnici Kalifornije mlađi od 18 godina koji su registrovani korisnici mogu zatražiti uklanjanje sadržaja koji su javno objavili.

### 10.4 Brazil (LGPD)

Možete zatražiti potvrdu obrade, pristup, ispravku, anonimizaciju, blokiranje ili brisanje nepotrebnih ili prekomjernih podataka, prenosivost, informacije o subjektima s kojima dijelimo podatke, informacije o mogućnosti da odbijete saglasnost i o posljedicama, te preispitivanje automatizovanih odluka. Možete se žaliti Nacionalnoj agenciji za zaštitu podataka (Autoridade Nacional de Proteção de Dados, ANPD).

### 10.5 Ostale regije

Ako se nalazite drugdje, a na snazi je zakon o zaštiti podataka, poštujemo ekvivalentna prava koja vam taj zakon daje. Konkretno:

| Gdje | Šta dodajemo |
|---|---|
| **Kanada** (PIPEDA, Zakon 25 Quebeca) | Možete pristupiti svojim podacima i ispraviti ih, povući saglasnost i podnijeti pritužbu Uredu povjerenika za privatnost ili Komisiji za pristup informacijama (Commission d'accès à l'information). Naš kontakt za privatnost je osoba zadužena za zaštitu ličnih podataka; prenosi izvan Quebeca se procjenjuju i štite. |
| **Indija** (DPDP Act 2023) | Možete pristupiti podacima, ispraviti ih, izbrisati ih, imenovati drugu osobu da ostvaruje vaša prava ako umrete ili postanete nesposobni, te koristiti kontakt za pritužbe naveden ispod; možete se žaliti Odboru za zaštitu podataka. |
| **Australija, Novi Zeland** | Možete zatražiti pristup i ispravku te podnijeti pritužbu nama, a zatim OAIC-u (Australija) ili Povjereniku za privatnost (Novi Zeland). |
| **Japan, Južna Koreja, Singapur, Tajland, Malezija, Turska, UAE, Saudijska Arabija, Južnoafrička Republika, Kenija, Nigerija i slični zakoni** | Primjenjujemo prava i zaštitne mjere koje ti zakoni zahtijevaju (pristup, ispravka, brisanje, prigovor, pritužba lokalnom organu, zaštitne mjere za prenose). Kontaktirajte nas da biste ih koristili. |
| **Kina** | Usluge nisu namijenjene osobama na kontinentalnoj Kini; nemojte ih koristiti za dostavljanje ličnih podataka osoba iz te zemlje. |

**Kontakt za pritužbe i privatnost za sve regije:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Zahtjeve potvrđujemo u roku od 72 sata i rješavamo ih u roku koji dozvoljava primjenjivi zakon.

## 11. Izmjene ove politike {#changes}

Ovu politiku možemo ažurirati kako bismo odrazili promjene u Uslugama ili zakonu. Za značajne izmjene dat ćemo vam najmanje {{policy.notice_days}} dana obavještenja putem e-pošte ili u Uslugama prije nego što se primijene na vas, i tražićemo ponovnu saglasnost tamo gdje zakon to zahtijeva. Datum "posljednje ažuriranje" iznad pokazuje važeću verziju; ranije verzije dostupne su na zahtjev.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
