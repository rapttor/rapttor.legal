---
doc: terms
title: Uslovi korišćenja
version: 1.0.0
updated: 2026-10-23
lang: sr
translation_of: 1.0.0
status: draft
summary: Ugovor između Vas i {{product.name}} o korišćenju proizvoda {{product.name}}.
---

# Uslovi korišćenja

*Verzija {{doc.version}}, poslednji put ažurirano {{doc.updated}}.*

## 1. Ugovor {#agreement}

Ovi Uslovi korišćenja (u daljem tekstu: „**Uslovi**”) predstavljaju obavezujući ugovor između Vas i **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, registarski broj {{company.reg_id}}{{/if}} („**{{product.name}}**”, „mi”, „nas”), kojim se uređuje Vaš pristup i korišćenje {{product.name}}, naših veb-sajtova, aplikacija, API-ja, dokumentacije i povezanih usluga (u daljem tekstu: „**Usluge**”).

Kreiranjem naloga, instaliranjem aplikacije ili na drugi način korišćenjem Usluga prihvatate ove Uslove i dokumente na koje se oni pozivaju: [Politiku privatnosti]({{url.privacy}}), [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}), [Politiku kolačića]({{url.cookies}}){{#if feature.processor_role}}, [Aneks o obradi podataka]({{url.dpa}}) tamo gde se primenjuje{{/if}}{{#if feature.payments}}, [Politiku povraćaja sredstava i otkazivanja]({{url.refunds}}){{/if}}{{#if feature.game}}, [Pravila za igre i politiku o virtuelnim predmetima]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Uslove za aplikaciju]({{url.app_eula}}){{/if}} i sve obrasce naloga ili uslove specifične za proizvod. Ako se ne slažete, nemojte koristiti Usluge.

Ako Usluge koristite za neku organizaciju, potvrđujete da imate ovlašćenje da je obavežete, a pojam „Vi” obuhvata i tu organizaciju. Ako uslovi specifični za proizvod ili potpisani ugovor budu u suprotnosti sa ovim Uslovima, oni imaju prednost samo za taj proizvod ili tog korisnika.

{{#if feature.consumers}}
**Potrošači.** Ako Usluge koristite kao potrošač, obavezni propisi o zaštiti potrošača u državi Vašeg prebivališta i dalje se primenjuju i ništa u ovim Uslovima ne ograničava ta prava. Odeljci označeni sa *(poslovni korisnici)* primenjuju se samo ako niste potrošač.
{{/if}}

## 2. Pravo na korišćenje {#eligibility}

Usluge smete koristiti samo ako:

1. {{#if feature.minors}}imate najmanje **{{policy.min_age}}** godina i, ako niste dostigli punoletstvo u mestu u kojem živite, imate pristanak roditelja ili zakonskog staratelja koji u Vaše ime prihvata ove Uslove i odgovara za Vaše korišćenje i kupovine (možemo tražiti dokaz){{else}}imate najmanje **{{policy.min_age}}** godina i sposobni ste da zaključite obavezujući ugovor{{/if}};
2. Vam nije zabranjeno primanje Usluga na osnovu važećeg prava, uključujući propise o sankcijama i kontroli izvoza (odeljak 22);
3. niste ranije bili isključeni iz Usluga zbog kršenja naših pravila, osim ako smo se pismeno saglasili da Vam ponovo omogućimo pristup; i
4. Usluge koristite zakonito na mestu na kojem se nalazite.

Možemo u bilo kom trenutku tražiti dokaz o godinama, identitetu ili ovlašćenju i možemo odbiti ili zatvoriti nalog koji ne prođe proveru.

## 3. Nalozi i bezbednost {#accounts}

- Dajte tačne i aktuelne podatke i održavajte ih ažurnim. Jedno lice ili jedan pravni subjekat, jedan nalog, osim ako se drugačije ne dogovorimo; kreiranje dodatnih naloga radi zaobilaženja ograničenja, limita, zabrane, probnog perioda ili pravila o cenama je zabranjeno.
- Čuvajte svoje podatke za prijavu u tajnosti. Ne deljite, ne prodajte, ne izdajte i ne prenosite svoj nalog. Svako mesto namenjeno je jednom imenovanom korisniku, osim ako paket ne određuje drugačije.
- Odgovorni ste za sve što se dešava putem Vašeg naloga, uključujući radnje lica kojima dozvolite pristup ili koja ne sprečite da mu pristupe, sve dok nas ne obavestite da je nalog ugrožen. Odmah nas obavestite na adresi [{{company.email}}](mailto:{{company.email}}) ako sumnjate na neovlašćen pristup.
- Možemo zahtevati jaču autentifikaciju, resetovati podatke za prijavu ili zaključati nalog za koji razumno verujemo da je ugrožen ili zloupotrebljen.
- Neaktivni besplatni nalozi mogu biti zatvoreni nakon prethodnog obaveštenja poslatog na e-adresu koja je evidentirana; plaćeni nalozi se ne zatvaraju zbog neaktivnosti.

## 4. Licenca i ograničenja {#licence}

Uz poštovanje ovih Uslova i plaćanje važećih naknada, dodeljujemo Vam ograničenu, opozivu, neekskluzivnu, neprenosivu licencu bez prava podlicenciranja za pristup Uslugama i njihovo korišćenje za Vaše sopstvene interne lične ili poslovne svrhe tokom trajanja ugovora. Softver koji Vam isporučujemo licenciramo, a ne prodajemo. Mi i naši davaoci licence zadržavamo sva prava koja nisu izričito dodeljena.

Osim ako Vam zakon daje pravo koje se ne može odreći, ne smete, niti smete dozvoliti bilo kome da:

- kopirate, menjate, prevodite ili pravite izvedena dela od Usluga;
- vršite reverzni inženjering, dekompajlirate, rastavljate ili pokušavate da dođete do izvornog koda, modela, težina, algoritama ili nejavnih API-ja;
- preprodajete, podlicencirate, izdajete pod zakup, hostujete kao servisni biro ili na drugi način činite Usluge dostupnim trećim licima, osim Vašim ovlašćenim korisnicima;
- zaobilazite tehnička ograničenja, licenciranje, merenje, kontrole pristupa, ograničenja broja zahteva ili bezbednosne funkcije;
- uklanjate ili menjate obaveštenja o vlasništvu, navode autorstva ili obaveštenja o licencama za softver otvorenog koda;
- koristite Usluge ili njihove rezultate za pravljenje ili obuku konkurentskog proizvoda, ili za merenje performansi (benchmarking) ili objavljivanje rezultata performansi bez našeg pisanog pristanka{{#if feature.ai}}, ili za obuku, dorađivanje ili destilaciju AI modela na osnovu rezultata Usluga tamo gde mi to zabranjujemo u dokumentaciji{{/if}};
- pristupate Uslugama automatizovanim putem (botovi, skreperi, crawleri), osim preko naše dokumentovane API-ja i pod njegovim uslovima.

[Politika prihvatljivog korišćenja]({{url.acceptable_use}}) sadrži detaljnija pravila i deo je ovih Uslova. Komponente otvorenog koda regulisane su sopstvenim licencama, koje za te komponente imaju prednost.

## 5. Prihvatljiva upotreba i sprovođenje {#acceptable-use}

Odgovorni ste za svoje korišćenje Usluga i za ponašanje svih lica koja im dozvolite da pristupe. Zloupotreba može naštetiti drugim korisnicima, trećim licima i nama, pa mi možemo postupiti kako je opisano u [Politici prihvatljivog korišćenja]({{url.acceptable_use}}) i odeljku 17, uključujući uklanjanje sadržaja, ograničavanje funkcija, ograničavanje brzine, suspenziju ili raskid naloga, zadržavanje isplata, prijavljivanje nadležnim organima i ostvarivanje pravnih lekova prema odeljku 21.

## 6. Vaš sadržaj {#your-content}

{{#if feature.ugc}}
„**Vaš sadržaj**” označava sve što otpremate, podnosite, objavljujete, povezujete ili generišete putem Usluga{{#if feature.ai}}, uključujući upite i, u odnosu na Vas i nas, rezultate koje primite{{/if}}.

- **Vlasništvo.** Zadržavate sva prava na Vaš sadržaj. Mi ne stičemo nikakvo vlasništvo.
- **Licenca za nas.** Dodeljujete nam svetsku, neekskluzivnu, besplatnu licencu da čuvamo, skladištimo, reprodukujemo, obrađujemo, prenosimo, prilagođavamo (radi formatiranja, sličica, prevoda, provera bezbednosti) i prikazujemo Vaš sadržaj **samo onoliko koliko je potrebno za rad, bezbednost, podršku i unapređenje Usluga i za sprovođenje ovih Uslova**, sve dok ga držite u Uslugama i za ograničene periode rezervnih kopija i pravnog zadržavanja nakon toga. Ako sadržaj učinite javnim, licenca se proširuje i na prikazivanje publici koju birate. Ova licenca prestaje kada obrišete sadržaj ili nalog, uz poštovanje tih perioda i kopija koje su drugi korisnici već zakonito primili.
- **Vaša obećanja.** Imate i zadržaćete sva prava, saglasnosti i dozvole potrebne za podnošenje Vašeg sadržaja i za dodelu ove licence, uključujući i od bilo kog lica koje se na njemu može identifikovati; Vaš sadržaj i naše korišćenje u dozvoljenoj meri ne krše i ne povređuju nijedan zakon ili prava bilo kog lica (autorska prava, žig, privatnost, pravo na lik, poverljivost, ugovor); i u skladu je sa [Politikom prihvatljivog korišćenja]({{url.acceptable_use}}).
- **Moderacija.** Nemamo opštu obavezu da nadziremo Vaš sadržaj, ali možemo pregledati, ukloniti, ograničiti ili odbiti sadržaj za koji razumno verujemo da krši zakon, ove Uslove ili prava drugih, ili za koji dobijemo valjano obaveštenje (vidi [Obaveštenja o autorskim pravima i nezakonitom sadržaju]({{url.copyright}})). Tamo gde je to obavezno (na primer prema Zakonu EU o digitalnim uslugama (Digital Services Act)), navodimo Vam razloge i način osporavanja odluke.
- **Rezervne kopije.** Odgovorni ste za čuvanje sopstvenih kopija Vašeg sadržaja. Osim ako paket izričito ne obuhvata rezervne kopije ili čuvanje, ne obećavamo da ćemo vratiti obrisani ili izgubljeni sadržaj.
- **Agregirani podaci.** Možemo koristiti podatke o upotrebi koji Vas ne identifikuju niti otkrivaju Vaš sadržaj, radi upravljanja, obezbeđivanja i unapređenja Usluga.
{{else}}
Zadržavate sva prava na sve što podnesete Uslugama. Dajete nam ograničenu licencu potrebnu za obradu tog sadržaja radi pružanja, obezbeđivanja i podrške Usluga, i obećavate da imate pravo da ga podnesete. Odgovorni ste za čuvanje sopstvenih kopija.
{{/if}}

## 7. Ako Usluge koristite za usluživanje drugih lica {#end-users}

Ako Usluge koristite da biste nešto pružali svojim klijentima, korisnicima, zaposlenima ili drugim trećim licima („**Krajnji korisnici**”), Vi ste isključivo odgovorni za njih: morate imati zakonit osnov, obaveštenja i saglasnosti potrebne za svaki podatak o ličnosti koji prikupljate ili obrađujete, dogovoriti sopstvene uslove sa njima, rešavati njihove zahteve i pritužbe, obezbediti njihovu usklađenost sa [Politikom prihvatljivog korišćenja]({{url.acceptable_use}}) i ne preuzimati obaveze u naše ime. Odgovarate za radnje i propuste Krajnjih korisnika kao da su Vaši. Mi nemamo obaveze prema Krajnjim korisnicima.

## 8. Funkcije veštačke inteligencije {#ai}

{{#if feature.ai}}
- Rezultati se generišu automatski i mogu biti netačni, nepotpuni, uvredljivi, pristrasni ili slični rezultatima datim drugima. Morate proceniti rezultat pre nego što se na njega oslonite i preuzeti odgovornost za način na koji ga koristite.
- **Ne koristite funkcije veštačke inteligencije kao jedinu osnovu za odluke koje imaju pravne ili slično značajne posledice po lica** (na primer u oblasti zapošljavanja, kreditiranja, stanovanja, osiguranja, obrazovanja, zdravstva, sprovođenja zakona ili useljavanja), i ne koristite ih za medicinske, pravne, finansijske savete ni savete od kritičnog značaja za bezbednost bez stručnog pregleda od strane kvalifikovanog čoveka.
- Morate otkriti sadržaj koji je generisala ili izmenila veštačka inteligencija u meri u kojoj to zahteva zakon ili platforma na kojoj ga objavljujete (uključujući lažne snimke (deepfake) i sintetičke medije), i ne smete predstavljati rezultat veštačke inteligencije kao delo čoveka ako bi to dovelo u zabludu.
- Ne smete koristiti funkcije za bilo koju zabranjenu upotrebu iz [Politike prihvatljivog korišćenja]({{url.acceptable_use}}), niti pokušavati da zaobiđete sisteme bezbednosti (uključujući napade ubacivanjem upita (prompt injection), jailbreak i ekstrakcione napade protiv naših sistema ili sistema drugih).
- Dobavljači koje koristimo mogu primenjivati sopstvene politike upotrebe, pa možemo shodno tome ograničiti funkcije. Ne koristimo Vaš sadržaj za obuku modela opšte namene, osim ako se na to ne saglasite (vidi [Politiku privatnosti]({{url.privacy}})).
{{else}}
Usluge trenutno ne obuhvataju funkcije uz pomoć veštačke inteligencije. Ako ih dodamo, ažuriraćemo ove Uslove i obavestiti Vas u skladu sa odeljkom 16, a primenjivaće se pravila za njih (tačnost, pregled od strane čoveka, otkrivanje i zabrana zabranjenih upotreba).
{{/if}}

## 9. Naknade i plaćanje {#fees}

{{#if feature.payments}}
- **Cene i porezi.** Cene se prikazuju pri kupovini i ne uključuju PDV, prodajne i slične poreze, osim ako nije drugačije navedeno; Vi plaćate važeće poreze. Cene za potrošače uključuju poreze propisane zakonom.
- **Plaćanje.** Ovlašćujete nas i našeg procesora plaćanja da naplatimo sredstvo plaćanja koje nam date za sve dospele iznose, uključujući obnavljanja i naplate zasnovane na upotrebi. Obećavate da ste ovlašćeni da koristite to sredstvo plaćanja i da ćete čuvati podatke o njemu ažurnim.
{{#if feature.subscriptions}}- **Pretplate.** Osim ako nije drugačije navedeno pri plaćanju, pretplate se automatski obnavljaju na periode iste dužine dok se ne otkažu. Otkažite u bilo kom trenutku u svom nalogu ili e-poštom pre datuma obnavljanja; otkazivanje stupa na snagu na kraju plaćenog perioda i ne vršimo srazmerni obračun. Unapred Vas obaveštavamo, kako to zahteva zakon, pre nego što se probni period pretvori u plaćeni ili pre promene cene obnavljanja.
- **Probni periodi i promocije.** Jedna probna ili promotivna ponuda po licu ili preduzeću. Možemo povući ili odbiti ponudu ako sumnjamo na zloupotrebu (više naloga, lažni identiteti, zaobiđena ograničenja).
{{/if}}{{#if feature.credits}}- **Krediti.** Unapred plaćeni krediti, tokeni ili valuta unutar aplikacije predstavljaju ograničenu licencu za korišćenje Usluga, a ne novac; nemaju novčanu vrednost, neprenosivi su, ne mogu se unovčiti ili njima trgovati i mogu isteći kako je navedeno pri kupovini. Neiskorišćeni krediti gube se kada se nalog zatvori zbog kršenja; u ostalim slučajevima povraćaj sledi pravila u nastavku i važeće propise.{{#if feature.game}} Virtuelni predmeti u igrama uređeni su [Pravilima za igre i politikom o virtuelnim predmetima]({{url.game_rules}}).{{/if}}
{{/if}}- **Promene cena.** Cene možemo menjati za ubuduće, uz najmanje {{policy.notice_days}} dana obaveštenja. Ako se ne slažete, otkažite pre nego što promena stupi na snagu.
- **Kašnjenje ili neuspelo plaćanje.** Možemo ponovo pokušati naplatu, suspendovati ili smanjiti obim naloga, i naplatiti razumne troškove naplate i zakonske kamate na dospele poslovne fakture. Usluge se vraćaju kada se dug isplati.
- **Reklamacije na naplatu i prevare.** Pokretanje reklamacije na naplatu (chargeback) ili spora oko plaćanja bez prethodnog kontaktiranja s nama na [{{company.email}}](mailto:{{company.email}}), kao i prevarna ili neovlašćena plaćanja, mogu dovesti do trenutne suspenzije, gubitka pristupa sadržaju i naplate osporenog iznosa i naših troškova obrade.
- **Povraćaj sredstava.** Osim tamo gde Vam zakon daje pravo ili drugačije pisano navedemo, plaćene naknade se ne vraćaju, uključujući delimične periode i neiskorišćene funkcije, i nijedan povraćaj ne dospeva ako obustavimo ili raskinemo Vaš nalog zbog kršenja.
{{#if feature.consumers}}- **Otkazivanje, odustanak i povraćaj sredstava.** Prava potrošača na odustanak, način otkazivanja i uslove za povraćaj sredstava utvrđuje [Politika povraćaja sredstava i otkazivanja]({{url.refunds}}), koja je deo ovih Uslova. Za digitalne sadržaje ili usluge koje se isporučuju odmah na Vaš zahtev tražimo Vaš izričit pristanak i potvrdu pri plaćanju, kako to zahteva zakon.
{{/if}}
{{else}}
Usluge se trenutno nude besplatno. U budućnosti možemo uvesti plaćene funkcije; one će Vam biti jasno predstavljene i nikada Vam se neće naplaćivati bez Vašeg pristanka.
{{/if}}

## 10. API, integracije i usluge trećih strana {#integrations}

{{#if feature.api}}
Pristup API-ju podleže ovim Uslovima, dokumentaciji i eventualnim ograničenjima broja zahteva. Morate čuvati svoje API ključeve i podatke za prijavu, odgovorni ste za sve pozive izvršene njima i ne smete ih deliti, ugrađivati u javni kod niti ih koristiti za preprodaju pristupa. Možemo rotirati, ograničiti ili opozvati ključeve i menjati ili ukidati verzije API-ja uz razumno obaveštenje (kraće ako je to potrebno iz bezbednosnih ili pravnih razloga). Ne smete koristiti API na način koji umanjuje kvalitet Usluga za druge niti pokušavati da zaobiđete ograničenja, na primer korišćenjem velikog broja ključeva ili naloga.

{{/if}}
Usluge mogu raditi sa proizvodima, veb-sajtovima i uslugama trećih strana koje ne kontrolišemo. Vaše korišćenje tih proizvoda uređeno je njihovim uslovima. Mi nismo odgovorni za njih, za njihovu dostupnost ili izmene, niti za način na koji koriste podatke koje odlučite da s njima podelite. Podršku za neku integraciju možemo obustaviti u bilo kom trenutku.

## 11. Beta i besplatne funkcije {#beta}

Funkcije označene kao alfa, beta, pregled (preview), eksperimentalne ili slično, kao i besplatni paketi, pružaju se „kakve jesu”, mogu se menjati ili povući u bilo kom trenutku, mogu biti manje pouzdane i izuzete su od bilo kakve obaveze o nivou usluge. Ne oslanjajte se na njih za kritične svrhe.

## 12. Intelektualna svojina {#ip}

Usluge, uključujući softver, dizajn, tekst, grafiku, podatke, žigove, logotipe i dokumentaciju, u vlasništvu su nas ili naših davalaca licence i zaštićene su autorskim pravom, pravom žiga i drugim zakonima. Ništa u ovim Uslovima ne prenosi Vam bilo kakvo vlasništvo, a pravo na korišćenje naših naziva ili znakova ne dodeljuje se, osim u meri potrebnoj za korišćenje Usluga.

**Povratne informacije.** Ako nam šaljete predloge ili ideje, dajete nam trajnu, neopozivu, svetsku, besplatnu licencu sa pravom podlicenciranja da ih koristimo bez ograničenja i bez navođenja autorstva, u meri u kojoj to dozvoljava zakon. Nemamo obavezu da postupamo po povratnim informacijama.

Obaveštenja o autorskim pravima i nezakonitom sadržaju: vidi [Obaveštenja o autorskim pravima i nezakonitom sadržaju]({{url.copyright}}).

## 13. Poverljivost (poslovni korisnici) {#confidentiality}

Svaka strana će čuvati u tajnosti javne poslovne i tehničke informacije druge strane, koristiti ih samo za izvršenje obaveza ili ostvarivanje prava iz ovih Uslova i štititi ih uz razumnu pažnju, osim za informacije koje su javne bez krivice primaoca, koje su već bile poznate, koje su nezavisno razvijene ili koje moraju biti otkrivene po zakonu (uz prethodno obaveštenje tamo gde je to zakonito). Ova obaveza traje tri godine nakon prestanka Uslova, a neograničeno za poslovne tajne.

## 14. Privatnost i zaštita podataka {#privacy}

[Politika privatnosti]({{url.privacy}}) objašnjava kako obrađujemo podatke o ličnosti. {{#if feature.processor_role}}Tamo gde obrađujemo podatke o ličnosti u Vaše ime kao Vaš obrađivač, primenjuje se [Aneks o obradi podataka]({{url.dpa}}) i postaje deo ovih Uslova.{{/if}} Vi morate poštovati propise o zaštiti podataka pri korišćenju Usluga i ne smete dostavljati podatke o posebnim kategorijama ili regulisane podatke (zdravstvene, podatke o platnim karticama, državne identifikatore, podatke o deci), osim ako funkcija ili ugovor to izričito ne dozvoljava.

## 15. Dostupnost, podrška i izmene {#availability}

Težimo visokoj dostupnosti, ali ne garantujemo neprekidan ili bezgrešan rad. Možemo vršiti održavanje (uz obaveštenje kad je to razumno moguće) i možemo menjati, dodavati ili ukidati funkcije. Ako tokom perioda unapred plaćenog korišćenja bitno smanjimo plaćenu funkciju, obavestićemo Vas najmanje {{policy.notice_days}} dana unapred i, ako ne možete razumno da nastavite, vratiti Vam srazmerni deo unapred plaćenog perioda koji se odnosi na pogođene Usluge. Podrška se pruža na adresi [{{company.email}}](mailto:{{company.email}}) na principu razumnih napora, osim ako Vaš paket ne uključuje ugovor o nivou usluge.

## 16. Izmene ovih Uslova {#changes}

Možemo ažurirati ove Uslove iz pravnih, bezbednosnih, proizvodnih ili poslovnih razloga. Za bitne izmene obavestićemo Vas najmanje **{{policy.notice_days}} dana** unapred, e-poštom ili u Uslugama, pre nego što se primene na Vas. Ako se ne slažete, možete prestati da koristite Usluge i zatvoriti nalog pre datuma stupanja na snagu i (za plaćene pakete) zatražiti srazmerni povraćaj unapred plaćenih naknada za period nakon tog datuma. Nastavak korišćenja Usluga nakon datuma stupanja na snagu znači da prihvatate ažurirane Uslove. Izmene koje zahteva zakon ili koje ništa ne umanjuju i ne dodaju nikakvu obavezu mogu stupiti na snagu odmah. Izmene se ne primenjuju na sporove koji su već u toku.

## 17. Obustava i raskid {#termination}

**Od strane Vas.** Možete prestati da koristite Usluge i zatvoriti nalog u bilo kom trenutku u podešavanjima ili putem e-pošte. Plaćene naknade se ne vraćaju, osim ako odeljak 9 ili zakon to ne predviđa.

**Od strane nas, iz razloga pogodnosti.** Možemo okončati plaćene pakete uz {{policy.notice_days}} dana obaveštenja (uz srazmerni povraćaj unapred plaćenih naknada), i možemo ukinuti besplatne usluge uz razumno obaveštenje.

**Od strane nas, zbog razloga.** Možemo, sa ili bez prethodnog obaveštenja i u meri u kojoj to dozvoljava zakon, ograničiti, suspendovati ili raskinuti Vaš pristup, ukloniti sadržaj ili odmah zatvoriti Vaš nalog ako:

- kršite ove Uslove ili Politiku prihvatljivog korišćenja (odgovor je srazmeran ozbiljnosti, ponavljanju i riziku);
- razumno verujemo da Vaše korišćenje stvara bezbednosni, pravni, regulatorni, reputacioni ili finansijski rizik za nas, druge korisnike ili treća lica;
- ne platite o dospeću;
- sud, organ ili važeći zakon to zahteva; ili
- Vaš nalog deluje ugrožen, prevaran ili napušten.

Kada je to praktično i zakonito, objasnićemo Vam razloge i dati Vam priliku da odgovorite ili prvo otklonite problem, a tamo gde zakon to zahteva (na primer Zakon EU o digitalnim uslugama (Digital Services Act)) dostavljamo obrazloženje i način za žalbu. Ako Vas suspendujemo ili raskinemo zbog kršenja, naknade se ne vraćaju i dospeli iznosi ostaju plativi.

**Posledice.** Po raskidu Vaša licenca prestaje; morate prestati da koristite Usluge; i, na zahtev podnet u roku od **{{policy.retention_account_days}} dana**, učinićemo Vaš sadržaj dostupnim za izvoz tamo gde je to tehnički izvodljivo (ne tamo gde je to nezakonito ili bi štetilo drugima). Nakon tog perioda brišemo ga kako je opisano u [Politici privatnosti]({{url.privacy}}). Odeljci koji po svojoj prirodi treba da opstanu ostaju na snazi, uključujući 4, 6 (ograničenja licence i Vaša obećanja), 9 (dospeli iznosi), 12, 13, 17-24 i 26.

## 18. Garancije i odricanje od odgovornosti {#disclaimer}

Usluge pružamo uz razumnu stručnost i pažnju. **Inače, u najvećoj meri dozvoljenoj zakonom, Usluge se pružaju „kakve jesu” i „kakve su dostupne”, a mi se odričemo svih drugih garancija, izričitih ili podrazumevanih,** uključujući tržišnu podobnost, podobnost za određenu svrhu, neprekršavanje prava, tačnost, dostupnost i da će Usluge biti bezbedne, bez grešaka, neprekidne ili bez štetnih komponenti. Ne garantujemo rezultate, sadržaj trećih strana niti rezultate koje dobijete. Usluge nisu namenjene za upotrebu u okruženjima visokog rizika u kojima bi otkaz mogao izazvati smrt, telesne povrede ili ozbiljnu štetu (na primer medicinski uređaji, avijacija, nuklearni ili sistemi za održavanje života), i ne smete ih tako koristiti.

{{#if feature.consumers}}Ako ste potrošač, zadržavate sva zakonska prava koja se ne mogu isključiti, kao što su zakonske garancije i pravni lekovi za digitalne sadržaje i usluge prema pravu EU i Ujedinjenog Kraljevstva, kao i potrošačke garancije prema Australijskom zakonu o potrošačima i sličnim zakonima drugde.{{/if}}

## 19. Ograničenje odgovornosti {#liability}

Ništa u ovim Uslovima ne isključuje niti ograničava odgovornost koja se po zakonu ne može isključiti ili ograničiti, uključujući smrt ili telesne povrede, prevaru ili namernu štetu, krajnju nepažnju ili (za potrošače) obavezne zakonske pravne lekove.

Uz to, **u najvećoj meri dozvoljenoj zakonom** i za poslovne korisnike:

1. ne odgovaramo za indirektnu, slučajnu, posebnu, posledičnu, primernu ili kaznenu štetu, niti za izgubljenu dobit, prihod, poslovanje, dobar glas, očekivane uštede ili podatke, koji proizlaze iz Usluga ili ovih Uslova ili su sa njima povezani, čak i ako nas je neko na tu mogućnost upozorio; i
2. naša ukupna zbirna odgovornost za sve zahteve ograničena je na veći iznos od (a) naknada koje ste nam platili za Usluge u **{{policy.liability_cap_months}} meseci** pre događaja koji je prvi doveo do zahteva i (b) 100 EUR.

{{#if feature.consumers}}Za potrošače odgovaramo za predvidivu štetu ili gubitak koji prouzrokujemo kršenjem ili nepažnjom, ali ne i za gubitak koji nije bio predvidiv, niti za poslovni gubitak.{{/if}}

Nismo odgovorni za neizvršenje ili kašnjenje izazvano događajima van našeg razumnog uticaja (odeljak 24). Besplatne usluge pružaju se bez odgovornosti preko one koju zahteva zakon. Ova ograničenja važe bez obzira na to kako odgovornost nastaje (ugovor, delikt, uključujući nemar, ili na drugi način) i čak i ako pravni lek ne ispuni svoju suštinsku svrhu.

## 20. Naknada štete {#indemnity}

Ako ste poslovni korisnik, branićete, obeštetićete i čuvaćete od štete {{company.name}}, njena povezana lica, rukovodioce, zaposlene i zastupnike od zahteva, šteta, gubitaka, kazni i troškova (uključujući razumne advokatske troškove) koji proizlaze iz (a) Vašeg sadržaja ili Vaših podataka, (b) kršenja ovih Uslova ili zakona od strane Vas ili Vaših Krajnjih korisnika, (c) Vaše zloupotrebe Usluga ili (d) spora između Vas i trećeg lica. Odmah ćemo Vas obavestiti o svakom zahtevu, dozvoliti Vam da kontrolišete odbranu (mi možemo učestvovati o svom trošku), a Vi ne smete nagoditi zahtev koji priznaje našu krivicu bez našeg pristanka. {{#if feature.consumers}}Potrošači odgovaraju samo za gubitak koji sami prouzrokuju svojim kršenjem, kako to predviđa zakon.{{/if}}

## 21. Pravni lekovi zbog zloupotrebe {#remedies}

Pored ostalih prava i u meri u kojoj to dozvoljava zakon:

- **Privremena sudska zabrana.** Priznajete da kršenje odeljaka 4, 5 ili 13 može izazvati štetu koju naknada štete ne može u potpunosti otkloniti, i možemo tražiti privremenu sudsku zabranu ili drugi pravični pravni lek bez dokazivanja stvarne štete i bez polaganja garancije.
- **Troškovi zloupotrebe.** Ako Vaša zloupotreba prouzrokuje troškove za nas (dodatna infrastruktura, odgovor na incident, istraga, reklamacije na naplatu (chargebacks), regulatorne kazne ili zahtevi trećih lica), nadoknadićete razumne, dokumentovane troškove.
- **Dokazi i saradnja.** Možemo čuvati evidencije i sadržaj vezan za sumnju na zloupotrebu i možemo ih otkriti pogođenim licima, platformama, organima reda ili regulatorima tamo gde to zakon dozvoljava. Razumno ćete sarađivati sa našim istragama.
- **Prijavljivanje.** Možemo prijaviti nezakonitu aktivnost (uključujući seksualno zlostavljanje dece, prevare, pretnje, zlonamerni softver i napade na sisteme) nadležnim organima i pogođenim licima, i to ćemo učiniti tamo gde zakon to zahteva.
- **Zadržavanje.** Možemo zadržati, zamrznuti ili prebiti iznose koji Vam duguju (na primer isplate) sa iznosima koje nam dugujete ili koji proizlaze iz zloupotrebe, uz poštovanje zakona.

## 22. Izvoz, sankcije i borba protiv korupcije {#export}

Ne smete koristiti, izvoziti ili reizvoziti Usluge suprotno važećim propisima o kontroli izvoza i sankcijama, uključujući one EU, Sjedinjenih Američkih Država, Ujedinjenog Kraljevstva i UN, niti za lica ili države pod sveobuhvatnim sankcijama ili prema njima. Potvrđujete da Vi i Vaši korisnici niste na nijednoj listi sankcionisanih ili ograničenih lica. Nećete nuditi niti davati bilo šta vredno da biste neprimereno uticali na bilo koje lice u vezi sa Uslugama.

## 23. Merodavno pravo i sporovi {#law}

Na ove Uslove i svaki spor ili zahtev koji proizlazi iz njih ili je u vezi s njima ili Uslugama (uključujući vanugovorne sporove) primenjuje se pravo {{law.governing}}, bez obzira na pravila o sukobu zakona, uz isključenje Konvencije UN o ugovorima o međunarodnoj prodaji robe.

**Prvo neformalno rešavanje.** Pre pokretanja formalnog postupka pišite na adresu [{{company.legal_email}}](mailto:{{company.legal_email}}) sa opisom spora i dozvolite nam da pokušamo da ga rešimo u dobroj veri najmanje 30 dana.

**Sudovi.** Osim ako obavezni zakon ne predviđa drugačije, isključiva nadležnost je **{{law.venue}}**. Svaka strana može zatražiti hitnu privremenu sudsku zabranu pred bilo kojim nadležnim sudom.

{{#if feature.consumers}}**Potrošači.** Ako ste potrošač, zadržavate i pravo da pokrenete postupak pred sudovima države Vašeg prebivališta i da se pozovete na obavezne propise o zaštiti potrošača tamo, a ništa u ovom odeljku to ne ukida. {{#if consumer_dispute}}Učestvujemo u vansudskom rešavanju sporova pred telom: {{consumer_dispute}}.{{/if}}
{{/if}}
**Rok za podnošenje zahteva (poslovni korisnici).** U meri u kojoj to dozvoljava zakon, svaki zahtev mora biti podnet u roku od {{policy.claim_months}} meseci od nastanka osnova za zahtev, inače se odriče.

**Bez kolektivnih tužbi (poslovni korisnici, tamo gde je dozvoljeno).** Zahtevi se mogu podnositi samo pojedinačno, a ne kao deo grupnog, kolektivnog ili predstavničkog postupka.

## 24. Viša sila {#force-majeure}

Nijedna strana nije odgovorna za kašnjenje ili neizvršenje izazvano događajima van njenog razumnog uticaja, uključujući prirodnu katastrofu, rat, terorizam, građanske nemire, pandemiju, akte državnih organa, prekid napajanja, interneta ili telekomunikacija, otkaze oblaka ili drugih infrastrukturnih provajdera trećih strana, sajber napade uprkos razumnim merama bezbednosti, radne sporove (osim onih u sopstvenom osoblju strane) ili prekide snabdevanja. Obaveze plaćanja za usluge koje su već isporučene ne prestaju. Ako takav događaj traje duže od 60 dana, bilo koja strana može raskinuti pogođene usluge.

## 25. Elektronska komunikacija i obaveštenja {#notices}

Pristajete da primate obaveštenja i sporazume elektronskim putem. Obaveštenja Vam možemo dostaviti e-poštom na adresu vezanu za Vaš nalog, u Uslugama ili objavljivanjem na našem veb-sajtu. Obaveštenja za nas moraju se slati na adresu [{{company.legal_email}}](mailto:{{company.legal_email}}) i na poštansku adresu: {{company.address}}. Obaveštenje se smatra primljenim 24 sata nakon što je e-pošta poslata bez vraćanja (bounce-back), odnosno kada je objavljeno ili prikazano u Uslugama.

## 26. Opšte odredbe {#general}

- **Celokupan sporazum.** Ovi Uslovi i dokumenti na koje se oni pozivaju predstavljaju celokupan sporazum o njihovom predmetu i zamenjuju ranije dogovore. Niste se oslonili ni na jednu izjavu koja nije navedena u njima.
- **Delimična nevažnost.** Ako odredba nije izvršiva, ograničava se na najmanji obim potreban ili se zamenjuje izvršivom odredbom koja je najbliža njenoj nameri; ostatak ostaje na snazi.
- **Nepostojanje odricanja.** Nekorišćenje prava ne predstavlja odricanje od tog prava.
- **Ustupanje.** Ne smete ustupiti ili preneti svoja prava ili obaveze bez našeg pisanog pristanka. Ove Uslove možemo ustupiti povezanom licu ili pravnom sledbeniku našeg poslovanja i o tome ćemo Vas obavestiti.
- **Odnos.** Strane su nezavisni izvođači. Ništa ne stvara partnerstvo, zastupanje, radni odnos ili zajednički poduhvat.
- **Treća lica.** Niko drugi nema prava da sprovodi ove Uslove, osim naših povezanih lica, rukovodilaca i zastupnika prema odeljcima 19 i 20.
- **Jezik.** Prevodi su dati radi praktičnosti; ako se razlikuju, verzija na engleskom jeziku ima prednost, osim ako obavezni zakon ne zahteva drugačije.
- **Tumačenje.** Naslovi su radi praktičnosti. „Uključujući” znači „uključujući bez ograničenja”.
- **Publicitet.** Možemo Vas navesti kao klijenta sa Vašim logotipom, osim ako se e-poštom ne isključite; potrošači se nikada ne navode.

## 27. Kontakt {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Registarski broj: {{company.reg_id}}{{/if}}{{#if company.tax_id}} · PIB: {{company.tax_id}}{{/if}}
E-pošta [{{company.email}}](mailto:{{company.email}}) · Pravni [{{company.legal_email}}](mailto:{{company.legal_email}}) · Podrška [{{company.email}}](mailto:{{company.email}}) · Pogledajte i [Pravne napomene (Impressum)]({{url.impressum}}).
