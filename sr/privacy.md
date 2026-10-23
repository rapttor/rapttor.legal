---
doc: privacy
title: Politika privatnosti
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
summary: Kako {{product.name}} prikuplja, koristi, deli i štiti podatke o ličnosti i koja prava imate.
---

# Politika privatnosti

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

## 1. Ko smo {#who-we-are}

Ova politika objašnjava kako **{{company.name}}**, sa registrovanom adresom: {{company.address}} („**{{product.name}}**”, „mi”, „nas”), obrađuje podatke o ličnosti kada koristite {{product.name}}, naše veb-sajtove, aplikacije, API-je i povezane usluge („**Usluge**”).

Za podatke o ličnosti za koje odlučujemo kako i zašto ih obrađujemo (na primer Vaš nalog, posete veb-sajtu i naplatu), mi smo **rukovalac**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Lice za zaštitu podataka o ličnosti možete kontaktirati putem e-pošte: [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nismo imenovali lice za zaštitu podataka o ličnosti, jer zakon to ne zahteva za naše delatnosti. Pitanja o privatnosti šaljite na e-adresu: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Predstavnik u EU (čl. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Predstavnik u Ujedinjenom Kraljevstvu (čl. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Kada smo obrađivač

Ako koristite Usluge preko organizacije (Vašeg poslodavca, poslovnog korisnika), ta organizacija je obično rukovalac podacima koje unosi u Usluge, a mi ih obrađujemo u njeno ime u skladu sa našim [Aneksom o obradi podataka]({{url.dpa}}). U tom slučaju svoje zahteve upućujte toj organizaciji; mi ćemo joj pomoći da odgovori. Ova politika se tada primenjuje samo na podatke koje sami kontrolišemo (administracija naloga, naplata, bezbednost, veb-sajt).
{{/if}}

## 2. Podaci koje prikupljamo {#data-we-collect}

| Kategorija | Primeri | Izvor |
|---|---|---|
| **Podaci o nalogu** | ime, e-adresa, heš lozinke, podaci o profilu, jezik, podešavanja | Vi |
| **Podaci za kontakt i podršku** | poruke, prilozi, beleške sa poziva, povratne informacije, odgovori na ankete | Vi |
| **Sadržaj koji dostavljate** | datoteke, tekst, podešavanja, sve što postavite u Usluge | Vi |
| **Podaci o korišćenju i uređaju** | IP adresa, tip pregledača i uređaja, operativni sistem, jezik, stranice i funkcije koje koristite, vremenske oznake, preporučitelj (referrer), dnevnici padova i grešaka | Automatski |
| **Kolačići i slične tehnologije** | identifikatori u kolačićima, lokalnom skladištu, SDK-ovi (videti [Politiku kolačića]({{url.cookies}})) | Automatski |
{{#if feature.payments}}| **Podaci o plaćanju i transakcijama** | plan, fakture, ime i adresa za naplatu, poreski broj, status plaćanja; podatke o kartici obrađuje naš pružalac usluga plaćanja, a mi ih ne čuvamo | Vi, pružalac usluga plaćanja |
{{/if}}{{#if feature.location}}| **Podaci o lokaciji** | precizna lokacija samo ako je omogućite na uređaju; inače približna lokacija na osnovu IP adrese | Vaš uređaj |
{{/if}}| **Podaci o nalogu treće strane** | ime, e-adresa, profilna slika i identifikator koje deli pružalac usluge prijave koji izaberete | Treća strana, uz Vašu dozvolu |
{{#if feature.ugc}}| **Komunikacija između korisnika** | poruke i interakcije koje šaljete putem Usluga | Vi |
{{/if}}{{#if feature.mobile}}| **Podaci o mobilnom uređaju** | model i verzija operativnog sistema uređaja, verzija aplikacije, tokeni instance aplikacije i obaveštenja, jezik i vremenska zona, status dozvola; identifikator za oglašavanje samo ako dozvolite praćenje | Vaš uređaj |
{{/if}}{{#if feature.game}}| **Podaci o igranju** | napredak u igri, rezultati, rang-liste, predmeti i kupovine, istorija mečeva, ćaskanje u igri i (ako se koristi) glasovni izveštaji, signali protiv varanja i integriteta, javni profil (ime, avatar, rang) | Vi, automatski |
{{/if}}| **Signali bezbednosti i prevara** | neuspešne prijave, prijave zloupotrebe, ocene rizika, blokirani zahtevi | Automatski, drugi korisnici |

Namerno ne prikupljamo posebne kategorije podataka o ličnosti (zdravlje, biometrijske podatke, političke ili verske stavove i slično). Molimo Vas da ih ne dostavljate, osim ako funkcija to izričito ne traži. Ako ih ipak dostavite, Vi ste odgovorni da imate pravni osnov.

Niste dužni da nam dostavite podatke o ličnosti, ali bez nekih od njih (na primer e-adrese) ne možemo da Vam omogućimo nalog.

## 3. Zašto koristimo Vaše podatke i naše pravne osnove {#purposes}

| Svrha | Pravni osnov (GDPR / UK GDPR) |
|---|---|
| Pružanje Usluga, otvaranje i upravljanje Vašim nalogom, obrada porudžbina | Ugovor (čl. 6(1)(b)) |
| Korisnička podrška i komunikacija o Vašem korišćenju Usluga | Ugovor; legitimni interesi |
| Bezbednost, sprečavanje zloupotreba i prevara, sprovođenje naših [Uslova korišćenja]({{url.terms}}) i [Politike prihvatljivog korišćenja]({{url.acceptable_use}}) | Legitimni interesi (čl. 6(1)(f)); zakonska obaveza |
| Otklanjanje grešaka, pouzdanost, planiranje kapaciteta i unapređenje Usluga | Legitimni interesi |
{{#if feature.analytics}}| Analitika korišćenja | Pristanak, gde to zakon zahteva, inače legitimni interesi |
{{/if}}{{#if feature.marketing}}| Obaveštenja o proizvodu i marketinške e-poruke | Pristanak, ili legitimni interesi za postojeće korisnike gde zakon to dozvoljava; možete se odjaviti u bilo kom trenutku |
{{/if}}{{#if feature.ads}}| Oglašavanje i merenje | Pristanak |
{{/if}}| Računovodstvo, porezi i druge zakonske obaveze | Zakonska obaveza (čl. 6(1)(c)) |
| Utvrđivanje, ostvarivanje ili odbrana pravnih zahteva; postupanje po zahtevima organa | Legitimni interesi; zakonska obaveza |
| Prenos poslovanja (spajanje, preuzimanje, prodaja imovine) | Legitimni interesi |

Kada se oslanjamo na legitimne interese, odmerili smo ih u odnosu na Vaša prava; možete zatražiti pojedinosti i možete uložiti prigovor (odeljak 10). Kada se oslanjamo na pristanak, možete ga povući u bilo kom trenutku; to ne utiče na obradu izvršenu pre toga.

{{#if feature.ai}}
### Funkcije uz pomoć veštačke inteligencije {#ai}

Neke funkcije koriste modele mašinskog učenja ili generativne modele. Kada ih koristite, sadržaj koji unesete kao ulaz šalje se pružaocu, koji deluje kao naš obrađivač, radi generisanja izlaza.

- Sadržaj ne koristimo za obuku modela opšte namene, a od naših pružalaca zahtevamo da to ne rade, osim ako se Vi izričito ne saglasite.
- Izlaz veštačke inteligencije može biti netačan, nepotpun ili pristrasan. Ne oslanjajte se na njega pri donošenju pravnih, medicinskih, finansijskih ili drugih odluka sa velikim posledicama bez ljudskog pregleda.
- Ne donosimo isključivo automatizovane odluke sa pravnim ili sličnim značajnim dejstvima po Vas. Ograničenja naloga zbog zloupotrebe na zahtev pregleda osoba (videti [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}), Sprovođenje).
- Sadržaj generisan veštačkom inteligencijom označava se tamo gde to zakon zahteva.
{{/if}}

## 4. S kim delimo podatke {#sharing}

**Ne prodajemo Vaše podatke o ličnosti**, i ne „delimo” ih radi bihevioralnog oglašavanja u različitim kontekstima{{#if feature.ads}} osim kako je opisano u Politici kolačića i samo tamo gde ste pristali{{/if}}.

Podatke o ličnosti delimo samo sa:

- **Pružaocima usluga (obrađivačima)** koji postupaju po našim uputstvima na osnovu pisanih ugovora: hosting i infrastruktura, isporuka e-pošte, alati za korisničku podršku, praćenje grešaka{{#if feature.payments}}, obrada plaćanja{{/if}}{{#if feature.ai}}, pružaoci veštačke inteligencije{{/if}}. Aktuelni spisak nalazi se u našoj [Listi podobrađivača]({{url.subprocessors}}).
- **Platformama i prodavnicama aplikacija** koje koristite za pristup Uslugama (na primer Apple, Google, prodavnice za konzole ili PC), koje obrađuju plaćanja i mogu nam dostaviti ograničene podatke o kupovini i nalogu;
- **Drugim korisnicima ili javnosti**, samo na Vaše usmerenje (na primer sadržaj koji odlučite da objavite{{#if feature.ugc}} ili poruke koje šaljete{{/if}}).
- **Profesionalnim savetnicima** (advokatima, revizorima, osiguravajućim kućama) uz obavezu poverljivosti.
- **Organima vlasti, sudovima i zainteresovanim licima** kada to zahteva zakon, radi odgovora na važeći pravni postupak, zaštite prava, bezbednosti ili imovine, ili radi istrage zloupotreba i prevara. Proveravamo valjanost zahteva i, ako je to zakonito, o tome Vas obaveštavamo.
- **Pravnom sledbeniku** u spajanju, preuzimanju, finansiranju ili prodaji imovine, koji mora da poštuje ovu politiku; obavestićemo Vas o značajnim promenama vlasništva koje utiču na Vaše podatke.
- **Bilo kom drugom licu** samo uz Vaš pristanak.

## 5. Međunarodni prenosi podataka {#transfers}

Poslujemo iz države: {{company.country}}{{#if hosting.region}}, a podatke uglavnom čuvamo u regionu: {{hosting.region}}{{/if}}. Neki pružaoci obrađuju podatke u drugim državama, uključujući Sjedinjene Američke Države. Kada se podaci o ličnosti iz Evropskog ekonomskog prostora (EEP), Ujedinjenog Kraljevstva ili Švajcarske prenose u državu bez odluke o adekvatnosti, primenjujemo priznatu zaštitnu meru: Okvir za privatnost podataka EU-SAD (ili njegova proširenja za Ujedinjeno Kraljevstvo i Švajcarsku) ako je primalac sertifikovan, a inače **standardne ugovorne klauzule** Evropske komisije, uz **Dodatak o međunarodnom prenosu podataka za Ujedinjeno Kraljevstvo** ili izmene za Švajcarsku gde je to relevantno, kao i dopunske mere kao što su šifrovanje u prenosu i u mirovanju. Kopiju relevantnih zaštitnih mera možete zatražiti putem e-pošte: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Koliko dugo čuvamo podatke {#retention}

| Podaci | Čuvanje |
|---|---|
| Podaci o nalogu i sadržaj | Dok je Vaš nalog aktivan, a zatim se brišu ili anonimizuju u roku od {{policy.retention_account_days}} dana od zatvaranja |
| Serverski i bezbednosni dnevnici | 90 dana |
| Rezervne kopije | Rotirajuće, do 35 dana; obrisani podaci iz rezervnih kopija nestaju po tom ciklusu |
| Fakture i računovodstvena evidencija | {{policy.retention_billing_years}} godina, ili onoliko koliko zakon zahteva |
| Korespondencija podrške | Do 3 godine nakon zatvaranja predmeta, ili dok je nalog aktivan ako je to duže |
| Evidencija pristanaka, odjava i zahteva u vezi sa pravima | Onoliko dugo koliko je potrebno da se dokaže usklađenost |
| Podaci potrebni za pravni zahtev ili istragu | Do rešavanja predmeta i isteka rokova zastarelosti |
| Evidencija o zloupotrebama i zabranama (identifikator, razlog, datum) | Do 5 godina, radi sprečavanja ponovljenih zloupotreba |

Kada svrha prestane, podatke brišemo ili ih nepovratno anonimizujemo.

## 7. Bezbednost {#security}

Primenjujemo tehničke i organizacione mere srazmerne riziku: šifrovanje u prenosu, šifrovanje osetljivih podataka u mirovanju, kontrolu pristupa po principu najmanjih prava, zaštitne mere za autentifikaciju, evidentiranje, rezervne kopije, upravljanje ranjivostima i obaveze poverljivosti zaposlenih. Nijedan sistem nije potpuno bezbedan. Molimo Vas da koristite jaku, jedinstvenu lozinku, da uključite višefaktorsku autentifikaciju gde je ponuđena i da, ako sumnjate da je Vaš nalog kompromitovan, odmah nas obavestite putem e-pošte: [{{company.email}}](mailto:{{company.email}}). Pogledajte i našu stranicu [Bezbednost i prijava ranjivosti]({{url.security}}).

Ako je verovatno da povreda ugrozi Vaša prava i slobode, obavestićemo nadzorni organ u roku od 72 sata od saznanja, tamo gde je to potrebno, a Vas ćemo obavestiti bez nepotrebnog odlaganja kada to zahteva zakon.

## 8. Deca {#children}

{{#if feature.minors}}Usluge nisu namenjene deci mlađoj od 13 godina, i ne prikupljamo svesno podatke o ličnosti od njih. Korisnici koji imaju {{policy.min_age}} i više godina, a još nisu punoletni, mogu koristiti Usluge **samo uz pristanak roditelja ili staraoca**, koji mogu pregledati, ispraviti, ograničiti ili izbrisati podatke maloletnika i povući pristanak kontaktiranjem [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Prikupljamo samo podatke potrebne za Usluge, ne koristimo podatke maloletnika za bihevioralno oglašavanje i primenjujemo podrazumevana podešavanja primerena uzrastu (privatni profili, ograničena komunikacija) tamo gde možemo. Tamo gde zakon u nekoj državi propisuje višu starosnu granicu za digitalni pristanak, zahtevamo pristanak roditelja za uzrast ispod te granice.{{else}}Usluge nisu namenjene deci. Da biste imali nalog, morate imati najmanje {{policy.min_age}} godina. Svesno ne prikupljamo podatke o ličnosti ni od koga mlađeg od {{policy.min_age}} godina (ili od više starosne granice za digitalni pristanak u njegovoj državi; u Sjedinjenim Američkim Državama, mlađeg od 13 godina za potrebe COPPA). Ako smatrate da je dete nam dostavilo podatke o ličnosti, kontaktirajte [{{company.privacy_email}}](mailto:{{company.privacy_email}}) i mi ćemo ih izbrisati i zatvoriti nalog. Kada roditelj ili staralac valjano pristane na korišćenje Usluga od strane maloletnika, taj pristanak se može povući u bilo kom trenutku.{{/if}}

## 9. Sajtovi i usluge trećih lica {#third-parties}

Usluge mogu sadržati veze ka sajtovima, dodacima i aplikacijama trećih lica, ili biti integrisane sa njima, uključujući pružaoce usluga prijave. Ne kontrolišemo ih i nismo odgovorni za njihove prakse privatnosti; njihove sopstvene politike određuju šta prikupljaju. Prekinite integracije u podešavanjima Vašeg naloga ili u podešavanjima treće strane.

## 10. Vaša prava {#rights}

U zavisnosti od toga gde živite, možete:

- **pristupiti** svojim podacima i dobiti kopiju;
- **ispraviti** netačne podatke;
- **izbrisati** svoje podatke („pravo na zaborav”);
- **ograničiti** ili **uložiti prigovor** na obradu, uključujući direktni marketing u bilo kom trenutku;
- **preneti** svoje podatke drugom pružaocu u mašinski čitljivom formatu;
- **povući pristanak** u bilo kom trenutku;
- **ne biti predmet isključivo automatizovanih odluka** sa pravnim ili sličnim značajnim dejstvima;
- **podneti pritužbu** nadzornom organu.

**Brisanje naloga.** Nalog i podatke o ličnosti možete izbrisati {{#if feature.mobile}}unutar aplikacije (Podešavanja, zatim Nalog, zatim Obriši nalog), {{/if}}u podešavanjima naloga na našem veb-sajtu ili putem e-pošte; ne zahtevamo da kontaktirate podršku ako je samoposluga dostupna. Brisanje naloga je trajno po isteku perioda odlaganja koji Vam prikazujemo. Deinstaliranje aplikacije ne briše Vaš nalog.

Da biste ostvarili neko pravo, pošaljite e-poruku na adresu: [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ili koristite podešavanja u Vašem nalogu. Možda ćemo morati da proverimo Vaš identitet i, ako je zahtev očigledno neosnovan ili prekomeran, možemo naplatiti razumnu naknadu ili odbiti zahtev, u meri u kojoj to zakon dozvoljava. Odgovaramo u roku od **mesec dana** (za složene zahteve može se produžiti za najviše još dva meseca; prema zakonima američkih saveznih država 45 dana, uz mogućnost produženja za 45 dana), i obrazložićemo razlog ako ne možemo da postupimo po zahtevu. Nećemo Vas diskriminisati zbog ostvarivanja Vaših prava.

### 10.1 Evropski ekonomski prostor, Ujedinjeno Kraljevstvo, Švajcarska

Sva prava navedena iznad se primenjuju. Pritužbu možete podneti organu u državi u kojoj živite, radite ili u kojoj se problem dogodio ([spisak organa EEP](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Ujedinjeno Kraljevstvo: [ICO](https://ico.org.uk); Švajcarska: [FDPIC](https://www.edoeb.admin.ch)). Naš vodeći nadzorni organ je {{law.authority}}.

### 10.2 Srbija

Ako se primenjuje Zakon o zaštiti podataka o ličnosti, imate prava ekvivalentna navedenim iznad i možete podneti pritužbu Povereniku za informacije od javnog značaja i zaštitu podataka o ličnosti (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Sjedinjene Američke Države (Kalifornija i druge države) {#us-states}

Ovaj odeljak dopunjuje navedeno iznad za stanovnike Kalifornije i drugih američkih saveznih država sa sveobuhvatnim zakonima o privatnosti (uključujući Virdžiniju, Kolorado, Konektikat, Jutu, Teksas, Oregon, Montanu i druge, kako stupaju na snagu).

- **Kategorije prikupljene u poslednjih 12 meseci:** identifikatori (ime, e-adresa, IP adresa, onlajn identifikatori); evidencija o korisnicima; komercijalne informacije (planovi, kupovine); aktivnost na internetu ili u mreži; približna geolokacija{{#if feature.location}} i precizna geolokacija uz Vašu dozvolu{{/if}}; sadržaj koji dostavljate; zaključci ograničeni na rad Usluga. Ove podatke otkrivamo pružaocima usluga za poslovne svrhe iz odeljka 3.
- **Prodaja i deljenje:** ne prodajemo lične podatke i ne delimo ih radi bihevioralnog oglašavanja u različitim kontekstima. Svesno ne prodajemo niti delimo podatke nijednog lica mlađeg od 16 godina.
- **Osetljive lične informacije:** ne koristimo ih za zaključivanje o osobinama i ne koristimo ih više nego što je potrebno za pružanje Usluga.
- **Vaša prava:** pravo na uvid/pristup, brisanje, ispravku, prenosivost, odustanak od prodaje i deljenja te od ciljanog oglašavanja ili profilisanja, ograničenje upotrebe osetljivih podataka i zabranu diskriminacije. Poštujemo **Global Privacy Control** i slične signale za odjavu u pregledaču kao važeći zahtev za odjavu.
- **Ovlašćeni zastupnici i žalbe:** ovlašćeni zastupnik može podnositi zahteve uz Vašu pisanu saglasnost. Ako odbijemo zahtev, možete se žaliti odgovorom na našu odluku; ako ostanete nezadovoljni, možete se obratiti generalnom tužiocu Vaše države.
- **Kalifornija:** možete zatražiti spisak trećih lica kojima smo u prethodnoj kalendarskoj godini otkrili podatke o ličnosti za njihov direktni marketing („Shine the Light”); takvih otkrivanja nema. Stanovnici Kalifornije mlađi od 18 godina koji su registrovani korisnici mogu zatražiti uklanjanje sadržaja koji su javno objavili.

### 10.4 Brazil (LGPD)

Možete zatražiti potvrdu obrade, pristup, ispravku, anonimizaciju, blokiranje ili brisanje nepotrebnih ili prekomernih podataka, prenosivost, informacije o licima sa kojima delimo podatke, informacije o mogućnosti da odbijete pristanak i o posledicama, kao i preispitivanje automatizovanih odluka. Možete se žaliti organu Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Ostali regioni

Ako se nalazite u nekoj drugoj oblasti sa zakonom o zaštiti podataka, poštujemo ekvivalentna prava koja Vam taj zakon daje. Konkretno:

| Gde | Šta dodajemo |
|---|---|
| **Kanada** (PIPEDA, Zakon 25 Kvebeka) | Možete pristupiti svojim podacima i ispraviti ih, povući pristanak i podneti pritužbu Kancelariji poverenika za privatnost ili Komisiji za pristup informacijama (Commission d'accès à l'information). Naš kontakt za privatnost je lice zaduženo za zaštitu podataka o ličnosti; prenosi van Kvebeka se procenjuju i štite zaštitnim merama. |
| **Indija** (DPDP Act 2023) | Možete pristupiti svojim podacima, ispraviti ih, izbrisati ih, imenovati drugo lice koje će ostvarivati Vaša prava ako umrete ili postanete nesposobni, i koristiti naš kontakt za pritužbe navedeno ispod; možete se žaliti Odboru za zaštitu podataka. |
| **Australija, Novi Zeland** | Možete zatražiti pristup i ispravku i podneti pritužbu nama, a zatim OAIC-u (Australija) ili Povereniku za privatnost (Novi Zeland). |
| **Japan, Južna Koreja, Singapur, Tajland, Malezija, Turska, UAE, Saudijska Arabija, Južna Afrika, Kenija, Nigerija i slični zakoni** | Primenjujemo prava i zaštitne mere koje ti zakoni zahtevaju (pristup, ispravka, brisanje, prigovor, pritužba lokalnom organu, zaštitne mere za prenose). Kontaktirajte nas da biste ih ostvarili. |
| **Kina** | Usluge nisu namenjene licima u kontinentalnoj Kini; nemojte ih koristiti za dostavljanje podataka o ličnosti tih lica. |

**Kontakt za pritužbe i privatnost za sve regione:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Potvrđujemo prijem zahteva u roku od 72 sata i rešavamo ih u roku koji dozvoljava važeći zakon.

## 11. Izmene ove politike {#changes}

Ovu politiku možemo ažurirati da bismo odrazili promene u Uslugama ili zakonu. Za bitne promene obavestićemo Vas putem e-pošte ili u Uslugama najmanje {{policy.notice_days}} dana pre nego što se primene na Vas, i tražićemo nov pristanak tamo gde to zakon zahteva. Datum „poslednjeg ažuriranja” iznad pokazuje aktuelnu verziju; ranije verzije su dostupne na zahtev.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
