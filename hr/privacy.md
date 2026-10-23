---
doc: privacy
title: Politika privatnosti
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
summary: Kako {{product.name}} prikuplja, upotrebljava, dijeli i štiti osobne podatke te koja prava imate.
---

# Politika privatnosti

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

## 1. Tko smo {#who-we-are}

Ova politika objašnjava kako **{{company.name}}**, s registriranom adresom: {{company.address}} ("**{{product.name}}**", "mi", "nas"), obrađuje osobne podatke kada upotrebljavate {{product.name}}, naše web-stranice, aplikacije, API-je i povezane usluge (dalje: "**Usluge**").

Za osobne podatke čiju svrhu i načine obrade određujemo mi (primjerice vaš korisnički račun, posjete web-stranici i naplatu), mi smo **voditelj obrade**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Službeniku za zaštitu podataka možete se obratiti na [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nismo imenovali službenika za zaštitu podataka jer zakon to za naše djelatnosti ne zahtijeva. Pitanja o privatnosti šaljite na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Predstavnik u EU (čl. 27. GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Predstavnik u UK (čl. 27. UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Kada smo izvršitelj obrade

Ako se Uslugama koristite preko neke organizacije (vašeg poslodavca, poslovnog korisnika), ta je organizacija obično voditelj obrade podataka koje unosi u Usluge, a mi ih obrađujemo u njezino ime prema našem [Dodatku o obradi podataka]({{url.dpa}}). U tom slučaju svoje zahtjeve uputite toj organizaciji; mi ćemo joj pomoći da odgovori. Ova se politika tada primjenjuje samo na podatke koje sami kontroliramo (administracija korisničkog računa, naplata, sigurnost, web-stranica).
{{/if}}

## 2. Podaci koje prikupljamo {#data-we-collect}

| Kategorija | Primjeri | Izvor |
|---|---|---|
| **Podaci o korisničkom računu** | ime, e-adresa, hash lozinke, podaci profila, jezik, postavke | Vi |
| **Podaci za kontakt i podršku** | poruke, privitci, bilješke s poziva, povratne informacije, odgovori u anketama | Vi |
| **Sadržaj koji dostavljate** | datoteke, tekst, postavke, sve što stavite u Usluge | Vi |
| **Podaci o korištenju i uređaju** | IP adresa, vrsta preglednika i uređaja, operacijski sustav, jezik, korištene stranice i funkcije, vremenske oznake, izvor poveznice (referrer), zapisnici o padovima i pogreškama | Automatski |
| **Kolačići i slične tehnologije** | identifikatori u kolačićima, lokalna pohrana, SDK-ovi (vidi [Politika kolačića]({{url.cookies}})) | Automatski |
{{#if feature.payments}}| **Podaci o plaćanju i transakcijama** | paket, računi, ime i adresa za naplatu, porezni identifikacijski broj, status plaćanja; podatke o kartici obrađuje naš pružatelj platnih usluga, a mi ih ne pohranjujemo | Vi, pružatelj platnih usluga |
{{/if}}{{#if feature.location}}| **Podaci o lokaciji** | precizna lokacija samo ako je uključite na uređaju; inače približna lokacija na temelju IP adrese | Vaš uređaj |
{{/if}}| **Podaci s računa treće strane** | ime, e-adresa, profilna slika i identifikator koje dijeli pružatelj usluge prijave koji odaberete | Treća strana, uz vaše dopuštenje |
{{#if feature.ugc}}| **Komunikacija između korisnika** | poruke i interakcije koje šaljete putem Usluga | Vi |
{{/if}}{{#if feature.mobile}}| **Podaci o mobilnom uređaju** | model uređaja i verzija OS-a, verzija aplikacije, tokeni instance aplikacije i push obavijesti, jezik i vremenska zona, status dopuštenja; identifikator za oglašavanje samo ako dopustite praćenje | Vaš uređaj |
{{/if}}{{#if feature.game}}| **Podaci o igranju** | napredak u igri, rezultati, poredak, predmeti i kupnje, povijest mečeva, razgovori u igri i (ako se koriste) glasovne prijave, signali zaštite od varanja i integriteta, javni profil (ime, avatar, rang) | Vi, automatski |
{{/if}}| **Signali za sigurnost i prijevare** | neuspješne prijave, prijave zlouporabe, procjene rizika, blokirani zahtjevi | Automatski, drugi korisnici |

Namjerno ne prikupljamo posebne kategorije osobnih podataka (zdravlje, biometrijske podatke, političke ili vjerske stavove i slično). Molimo ne dostavljajte ih osim ako to izričito traži neka funkcija. Ako ipak dostavite takve podatke, vi ste odgovorni za to da imate pravnu osnovu.

Niste obvezni dati nam osobne podatke, ali bez nekih od njih (primjerice e-adrese) ne možemo vam omogućiti korisnički račun.

## 3. Zašto upotrebljavamo vaše podatke i pravne osnove koje primjenjujemo {#purposes}

| Svrha | Pravna osnova (GDPR / UK GDPR) |
|---|---|
| Pružanje Usluga, izrada i upravljanje vašim korisničkim računom, obrada narudžbi | Ugovor (čl. 6(1)(b)) |
| Korisnička podrška i komunikacija o vašem korištenju Usluga | Ugovor; legitimni interesi |
| Sigurnost, sprječavanje zlouporabe i prijevara, provođenje naših [Uvjeta korištenja]({{url.terms}}) i [Pravila prihvatljive uporabe]({{url.acceptable_use}}) | Legitimni interesi (čl. 6(1)(f)); pravna obveza |
| Otklanjanje pogrešaka, pouzdanost, planiranje kapaciteta i poboljšanje Usluga | Legitimni interesi |
{{#if feature.analytics}}| Analitika korištenja | Privola ako to zahtijeva zakon, inače legitimni interesi |
{{/if}}{{#if feature.marketing}}| Obavijesti o proizvodima i marketinške e-poruke | Privola, ili legitimni interesi za postojeće korisnike ako to zakon dopušta; u bilo kojem trenutku možete se odjaviti |
{{/if}}{{#if feature.ads}}| Oglašavanje i mjerenje | Privola |
{{/if}}| Računovodstvo, porez i druge zakonske obveze | Pravna obveza (čl. 6(1)(c)) |
| Uspostava, ostvarivanje ili obrana pravnih zahtjeva; odgovaranje tijelima vlasti | Legitimni interesi; pravna obveza |
| Poslovni prijenosi (spajanje, preuzimanje, prodaja imovine) | Legitimni interesi |

Kada se oslanjamo na legitimne interese, odvagnuli smo ih u odnosu na vaša prava; možete zatražiti pojedinosti i možete uložiti prigovor (odjeljak 10). Kada se oslanjamo na privolu, možete je povući u bilo kojem trenutku; to ne utječe na obradu koja je prethodno provedena.

{{#if feature.ai}}
### Funkcije uz pomoć umjetne inteligencije {#ai}

Neke funkcije koriste modele strojnog učenja ili generativne modele. Kada ih upotrebljavate, sadržaj koji unesete šalje se pružatelju koji djeluje kao naš izvršitelj obrade radi izrade rezultata.

- Vaš sadržaj **ne** upotrebljavamo za treniranje modela opće namjene i od naših pružatelja zahtijevamo da to ne čine, osim ako se izričito ne odlučite za to.
- Rezultati umjetne inteligencije mogu biti netočni, nepotpuni ili pristrani. Nemojte se oslanjati na njih pri pravnim, medicinskim, financijskim ili drugim odlukama visokih uloga bez ljudskog pregleda.
- Ne donosimo odluke s pravnim ili sličnim značajnim učincima za vas isključivo automatiziranim putem. Ograničenja korisničkog računa zbog zlouporabe na zahtjev pregledava osoba (vidi [Pravila prihvatljive uporabe]({{url.acceptable_use}}), Provođenje).
- Sadržaj koji generira umjetna inteligencija označava se tamo gdje to zakon zahtijeva.
{{/if}}

## 4. S kim dijelimo podatke {#sharing}

**Vaše osobne podatke ne prodajemo**, a ne "dijelimo" ih radi međukontekstualnog bihevioralnog oglašavanja{{#if feature.ads}} osim kako je opisano u Politici kolačića i samo ako ste na to pristali{{/if}}.

Osobne podatke dijelimo samo sa:

- **pružateljima usluga (izvršiteljima obrade)** koji postupaju prema našim uputama na temelju pisanih ugovora: smještaj i infrastruktura, isporuka e-pošte, alati za korisničku podršku, praćenje pogrešaka{{#if feature.payments}}, obrada plaćanja{{/if}}{{#if feature.ai}}, pružatelji umjetne inteligencije{{/if}}. Aktualni popis nalazi se u našem [Popisu podizvršitelja obrade]({{url.subprocessors}}).
- **platformama i trgovinama aplikacija** koje koristite za pristup Uslugama (primjerice Apple, Google, konzolne ili PC trgovine), koje obrađuju plaćanja i mogu nam dati ograničene podatke o kupnjama i korisničkom računu;
- **drugim korisnicima ili javnosti**, samo kako vi usmjerite (primjerice sadržaj koji odlučite objaviti{{#if feature.ugc}} ili poruke koje šaljete{{/if}});
- **stručnim savjetnicima** (odvjetnicima, revizorima, osiguravateljima) uz obvezu povjerljivosti;
- **tijelima vlasti, sudovima i zainteresiranim stranama** kada to zahtijeva zakon, radi odgovora na valjani pravni postupak, zaštite prava, sigurnosti ili imovine ili istrage zlouporabe i prijevara. Provjeravamo valjanost zahtjeva i, ako je to zakonito, obavješćujemo vas;
- **pravnom slijedniku** u slučaju spajanja, preuzimanja, financiranja ili prodaje imovine, koji mora poštovati ovu politiku; obavijestit ćemo vas o bitnim promjenama vlasništva koje utječu na vaše podatke;
- **bilo kome drugome** samo uz vašu privolu.

## 5. Međunarodni prijenosi {#transfers}

Poslujemo s lokacije: {{company.country}}{{#if hosting.region}}, a podatke pohranjujemo uglavnom u regiji: {{hosting.region}}{{/if}}. Neki pružatelji obrađuju podatke u drugim državama, uključujući Sjedinjene Američke Države. Kada se osobni podaci iz EGP-a, Ujedinjene Kraljevine ili Švicarske prenose u državu bez odluke o primjerenosti, koristimo priznatu zaštitnu mjeru: Okvir za zaštitu podataka EU-SAD (ili njegova proširenja za UK i Švicarsku) ako je primatelj certificiran, a inače **standardne ugovorne klauzule** Europske komisije, uz **Dodatak o međunarodnom prijenosu podataka za UK** ili švicarske izmjene, ako su relevantni, te dodatne mjere poput šifriranja tijekom prijenosa i u mirovanju. Relevantne zaštitne mjere možete zatražiti na [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Koliko dugo čuvamo podatke {#retention}

| Podaci | Razdoblje pohrane |
|---|---|
| Podaci o korisničkom računu i sadržaj | Dok je vaš korisnički račun aktivan, zatim se brišu ili anonimiziraju u roku od {{policy.retention_account_days}} dana od zatvaranja |
| Poslužiteljski i sigurnosni zapisnici | 90 dana |
| Sigurnosne kopije | Kružno, do 35 dana; izbrisani podaci nestaju iz sigurnosnih kopija tijekom tog ciklusa |
| Računi i računovodstvena evidencija | {{policy.retention_billing_years}} godina ili onoliko dugo koliko zahtijeva zakon |
| Korespondencija s podrškom | Do 3 godine nakon zatvaranja predmeta, ili dok je korisnički račun aktivan ako je to dulje |
| Evidencija privola, odjava i zahtjeva za ostvarivanje prava | Onoliko dugo koliko je potrebno za dokazivanje usklađenosti |
| Podaci potrebni za pravni zahtjev ili istragu | Do rješavanja predmeta i proteka zastarnih rokova |
| Evidencija zlouporaba i zabrana (identifikator, razlog, datum) | Do 5 godina, radi sprječavanja ponovljene zlouporabe |

Kada svrha prestane, podatke brišemo ili ih nepovratno anonimiziramo.

## 7. Sigurnost {#security}

Primjenjujemo tehničke i organizacijske mjere primjerene riziku: šifriranje tijekom prijenosa, šifriranje osjetljivih podataka u mirovanju, kontrolu pristupa prema načelu najmanjih ovlasti, mjere zaštite autentikacije, bilježenje, sigurnosne kopije, upravljanje ranjivostima i obveze povjerljivosti zaposlenika. Nijedan sustav nije savršeno siguran. Molimo koristite jaku, jedinstvenu lozinku, uključite višefaktorsku autentikaciju tamo gdje je ponuđena i odmah nas obavijestite na [{{company.email}}](mailto:{{company.email}}) ako sumnjate da je vaš korisnički račun ugrožen. Pogledajte i našu stranicu [Sigurnost i prijava ranjivosti]({{url.security}}).

Ako je vjerojatno da povreda ugrožava vaša prava i slobode, nadzorno tijelo ćemo obavijestiti u roku od 72 sata od saznanja, ako je to potrebno, a vas ćemo obavijestiti bez nepotrebne odgode kada to zahtijeva zakon.

## 8. Djeca {#children}

{{#if feature.minors}}Usluge nisu namijenjene djeci mlađoj od 13 godina i svjesno od njih ne prikupljamo osobne podatke. Korisnici stari {{policy.min_age}} i više godina koji još nisu punoljetni mogu koristiti Usluge **samo uz privolu roditelja ili skrbnika**, koji može pregledati, ispraviti, ograničiti ili izbrisati podatke maloljetnika te povući privolu obraćanjem na [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Prikupljamo samo podatke potrebne za Usluge, ne upotrebljavamo podatke maloljetnika za bihevioralno oglašavanje i, gdje možemo, primjenjujemo zadane postavke primjerene dobi (privatni profili, ograničena komunikacija). Ako zakon u nekoj državi propisuje višu dob za digitalnu privolu, za dobne skupine ispod te dobi zahtijevamo privolu roditelja.{{else}}Usluge nisu namijenjene djeci. Za korisnički račun morate imati najmanje {{policy.min_age}} godina. Svjesno ne prikupljamo osobne podatke od osoba mlađih od {{policy.min_age}} (ili od više dobne granice za digitalnu privolu u njihovoj državi; u Sjedinjenim Američkim Državama, mlađih od 13 godina za potrebe propisa COPPA). Ako smatrate da je dijete nama dostavilo osobne podatke, obratite se na [{{company.privacy_email}}](mailto:{{company.privacy_email}}) i mi ćemo ih izbrisati te zatvoriti korisnički račun. Ako su roditelj ili skrbnik valjano pristali na korištenje od strane maloljetnika, tu se privolu može povući u bilo kojem trenutku.{{/if}}

## 9. Web-stranice i usluge trećih strana {#third-parties}

Usluge mogu sadržavati poveznice na web-stranice, dodatke i aplikacije trećih strana ili se s njima integrirati, uključujući pružatelje usluga prijave. Mi ih ne kontroliramo i ne odgovaramo za njihove prakse privatnosti; za ono što prikupljaju vrijede njihove vlastite politike. Integracije prekinite u postavkama svog korisničkog računa ili u postavkama treće strane.

## 10. Vaša prava {#rights}

Ovisno o mjestu prebivališta, možete:

- **pristupiti** svojim podacima i dobiti njihovu kopiju;
- **ispraviti** netočne podatke;
- **izbrisati** svoje podatke ("pravo na zaborav");
- **ograničiti** obradu ili **uložiti prigovor** na obradu, uključujući izravni marketing u bilo kojem trenutku;
- ostvariti **prenosivost** podataka drugom pružatelju u strojno čitljivom obliku;
- **povući privolu** u bilo kojem trenutku;
- **ne biti podvrgnuti isključivo automatiziranim odlukama** s pravnim ili sličnim značajnim učincima;
- **podnijeti pritužbu** nadzornom tijelu.

**Brisanje korisničkog računa.** Korisnički račun i osobne podatke možete izbrisati {{#if feature.mobile}}unutar aplikacije (Postavke, zatim Korisnički račun, zatim Izbriši korisnički račun), {{/if}}u postavkama korisničkog računa na našoj web-stranici ili slanjem e-pošte; ne zahtijevamo da se obratite podršci ako je dostupna samoposluga. Brisanje korisničkog računa trajno je nakon razdoblja odgode koje vam prikažemo. Deinstaliranje aplikacije ne briše vaš korisnički račun.

Pravo ostvarujete slanjem e-pošte na [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ili putem postavki svog korisničkog računa. Možda ćemo morati provjeriti vaš identitet te, ako je zahtjev očito neutemeljen ili pretjeran, možemo naplatiti razumnu naknadu ili odbiti zahtjev, u mjeri koju zakon dopušta. Odgovaramo u roku od **jednog mjeseca** (koji se može produljiti za najviše dva dodatna mjeseca za složene zahtjeve; 45 dana prema zakonima američkih saveznih država, koji se može produljiti za 45 dana), a razlog ćemo vam obrazložiti ako ne možemo postupiti prema zahtjevu. Nećemo vas diskriminirati zbog ostvarivanja vaših prava.

### 10.1 Europski gospodarski prostor, Ujedinjena Kraljevina, Švicarska

Primjenjuju se sva prava navedena iznad. Pritužbu možete podnijeti tijelu u državi u kojoj živite, radite ili u kojoj je došlo do problema ([popis tijela EGP-a](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); UK: [ICO](https://ico.org.uk); Švicarska: [FDPIC](https://www.edoeb.admin.ch)). Naše vodeće nadzorno tijelo je {{law.authority}}.

### 10.2 Srbija

Ako se primjenjuje srpski Zakon o zaštiti osobnih podataka, imate prava istovjetna navedenima iznad i možete podnijeti pritužbu Povjereniku za informacije od javnog značaja i zaštitu osobnih podataka (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Sjedinjene Američke Države (Kalifornija i druge savezne države) {#us-states}

Ovaj odjeljak dopunjuje navedeno za stanovnike Kalifornije i drugih američkih saveznih država sa sveobuhvatnim zakonima o privatnosti (uključujući Virginiju, Colorado, Connecticut, Utah, Teksas, Oregon, Montanu i druge, kako stupe na snagu).

- **Kategorije prikupljene u posljednjih 12 mjeseci:** identifikatori (ime, e-adresa, IP adresa, mrežni identifikatori); evidencija korisnika; komercijalni podaci (paketi, kupnje); aktivnost na internetu ili mreži; približna geolokacija{{#if feature.location}} i precizna geolokacija uz vaše dopuštenje{{/if}}; sadržaj koji dostavite; zaključci ograničeni na rad Usluga. Ove podatke otkrivamo pružateljima usluga u poslovne svrhe iz odjeljka 3.
- **Prodaja i dijeljenje:** ne prodajemo osobne podatke i ne dijelimo ih radi međukontekstualnog bihevioralnog oglašavanja. Svjesno ne prodajemo niti dijelimo podatke osoba mlađih od 16 godina.
- **Osjetljivi osobni podaci:** ne upotrebljavamo ih za zaključivanje o osobinama te ih ne upotrebljavamo izvan onoga što je nužno za pružanje Usluga.
- **Vaša prava:** saznati i pristupiti, izbrisati, ispraviti, prenosivost, odustati od prodaje i dijeljenja te od ciljanog oglašavanja ili profiliranja, ograničiti upotrebu osjetljivih podataka te pravo na nediskriminaciju. Poštujemo **Global Privacy Control** i slične signale za odjavu u preglednicima kao valjani zahtjev za odjavu.
- **Ovlašteni zastupnici i žalbe:** ovlašteni zastupnik može podnijeti zahtjeve uz vaše pisano dopuštenje. Ako odbijemo zahtjev, možete uložiti žalbu odgovorom na našu odluku; ako ostanete nezadovoljni, možete se obratiti glavnom državnom odvjetniku svoje savezne države.
- **Kalifornija:** možete zatražiti popis trećih strana kojima smo u prethodnoj kalendarskoj godini otkrili osobne podatke za njihov izravni marketing ("Shine the Light"); takvih otkrivanja nema. Stanovnici Kalifornije mlađi od 18 godina koji su registrirani korisnici mogu zatražiti uklanjanje sadržaja koji su javno objavili.

### 10.4 Brazil (LGPD)

Možete zatražiti potvrdu obrade, pristup, ispravak, anonimizaciju, blokiranje ili brisanje nepotrebnih ili prekomjernih podataka, prenosivost, informacije o subjektima s kojima dijelimo podatke, informacije o mogućnosti uskraćivanja privole i njezinim posljedicama te preispitivanje automatiziranih odluka. Možete podnijeti pritužbu Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Ostale regije

Ako se nalazite drugdje, a na snazi je zakon o zaštiti podataka, poštujemo jednaka prava koja vam taj zakon daje. Osobito:

| Gdje | Što dodajemo |
|---|---|
| **Kanada** (PIPEDA, Zakon 25 pokrajine Quebec) | Možete pristupiti svojim podacima i ispraviti ih, povući privolu te podnijeti pritužbu Uredu povjerenika za privatnost ili Commission d'accès à l'information. Naša kontakt osoba za privatnost jest osoba zadužena za zaštitu osobnih podataka; prijenosi izvan Quebeca procjenjuju se i osiguravaju zaštitnim mjerama. |
| **Indija** (DPDP Act 2023) | Možete pristupiti podacima, ispraviti ih, izbrisati ih, imenovati drugu osobu koja će ostvarivati vaša prava ako umrete ili postanete nesposobni te se koristiti kontaktom za pritužbe u nastavku; možete podnijeti pritužbu Odboru za zaštitu podataka. |
| **Australija, Novi Zeland** | Možete zatražiti pristup i ispravak te se pritužiti nama, a zatim Uredu povjerenika za informacije (OAIC, Australija) ili povjereniku za privatnost (Novi Zeland). |
| **Japan, Južna Koreja, Singapur, Tajland, Malezija, Turska, UAE, Saudijska Arabija, Južna Afrika, Kenija, Nigerija i slični zakoni** | Primjenjujemo prava i zaštitne mjere koje ti zakoni zahtijevaju (pristup, ispravak, brisanje, prigovor, pritužba lokalnom tijelu, zaštitne mjere za prijenose). Za njihovo korištenje obratite nam se. |
| **Kina** | Usluge nisu namijenjene osobama na kopnenom dijelu Kine; nemojte ih upotrebljavati za dostavljanje osobnih podataka osoba koje se tamo nalaze. |

**Kontakt za pritužbe i privatnost za sve regije:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Zahtjeve potvrđujemo u roku od 72 sata i rješavamo ih u roku koji dopušta primjenjivi zakon.

## 11. Izmjene ove politike {#changes}

Ovu politiku možemo ažurirati kako bismo odražavali promjene u Uslugama ili zakonu. Za bitne izmjene obavijestit ćemo vas najmanje {{policy.notice_days}} dana unaprijed putem e-pošte ili u Uslugama, prije nego što stupe na snagu za vas, te ćemo zatražiti novu privolu tamo gdje to zakon zahtijeva. Datum "posljednjeg ažuriranja" iznad pokazuje aktualnu verziju; ranije verzije dostupne su na zahtjev.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
