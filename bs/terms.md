---
doc: terms
title: Uslovi korištenja
version: 1.0.0
updated: 2026-10-23
lang: bs
translation_of: 1.0.0
status: draft
summary: Ugovor između vas i {{product.name}} o korištenju {{product.name}}.
---

# Uslovi korištenja

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

## 1. Ugovor {#agreement}

Ovi Uslovi korištenja („**Uslovi**“) predstavljaju obavezujući ugovor između vas i **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, registarski broj {{company.reg_id}}{{/if}} („**{{product.name}}**“, „mi“, „nas“), kojim se uređuje vaš pristup i korištenje {{product.name}}, naših web-stranica, aplikacija, API-ja, dokumentacije i povezanih usluga („**Usluge**“).

Kreiranjem naloga, instaliranjem aplikacije ili na drugi način korištenjem Usluga prihvatate ove Uslove i dokumente na koje se oni pozivaju: [Politiku privatnosti]({{url.privacy}}), [Politiku prihvatljive upotrebe]({{url.acceptable_use}}), [Politiku kolačića]({{url.cookies}}){{#if feature.processor_role}}, [Aneks o obradi podataka]({{url.dpa}}) ako se primjenjuje{{/if}}{{#if feature.payments}}, [Politiku povrata novca i otkazivanja]({{url.refunds}}){{/if}}{{#if feature.game}}, [Pravila igre i politiku o virtualnim predmetima]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Uslove za aplikacije]({{url.app_eula}}){{/if}} i svaki obrazac narudžbe ili uslove specifične za proizvod. Ako se ne slažete, nemojte koristiti Usluge.

Ako Usluge koristite za neku organizaciju, potvrđujete da imate ovlaštenje da je obavežete, a „vi“ obuhvata i tu organizaciju. Ako se uslovi specifični za proizvod ili potpisani ugovor razlikuju od ovih Uslova, oni imaju prednost samo za taj proizvod ili tog kupca.

{{#if feature.consumers}}
**Potrošači.** Ako Usluge koristite kao potrošač, obavezni propisi o zaštiti potrošača u državi vašeg prebivališta i dalje se primjenjuju, a ništa u ovim Uslovima ne ograničava ta prava. Odjeljci označeni sa *(poslovni korisnici)* primjenjuju se samo ako niste potrošač.
{{/if}}

## 2. Pravo na korištenje {#eligibility}

Usluge možete koristiti samo ako:

1. {{#if feature.minors}}imate najmanje **{{policy.min_age}}** godina i, ako niste navršili punoljetstvo u mjestu u kojem živite, imate saglasnost roditelja ili zakonskog staratelja koji u vaše ime prihvata ove Uslove i odgovoran je za vaše korištenje i kupovine (možemo tražiti dokaz){{else}}imate najmanje **{{policy.min_age}}** godina i sposobni ste zaključiti obavezujući ugovor{{/if}};
2. vam pružanje Usluga nije zabranjeno prema važećem pravu, uključujući zakone o sankcijama i kontroli izvoza (odjeljak 22);
3. ranije niste bili uklonjeni iz Usluga zbog kršenja naših pravila, osim ako smo se pismeno saglasili da vam ponovo omogućimo pristup; i
4. Usluge koristite zakonito na mjestu na kojem se nalazite.

Možemo u bilo kojem trenutku tražiti dokaz o godinama, identitetu ili ovlaštenju, a možemo odbiti ili zatvoriti nalog koji ne prođe tu provjeru.

## 3. Nalozi i sigurnost {#accounts}

- Dajte tačne i ažurne podatke i održavajte ih ažurnim. Jedna osoba ili jedan pravni subjekt, jedan nalog, osim ako se drukčije ne dogovorimo; otvaranje dodatnih naloga radi zaobilaženja ograničenja, limita, zabrane, probnog perioda ili pravila o cijenama je zabranjeno.
- Držite svoje pristupne podatke povjerljivim. Ne dijelite, ne prodajte, ne iznajmljujte i ne prenosite svoj nalog. Svako licencno mjesto namijenjeno je jednom imenovanom pojedincu, osim ako paket ne određuje drukčije.
- Odgovorni ste za sve što se dešava putem vašeg naloga, uključujući radnje osoba kojima dozvolite pristup ili koje ne uspijete spriječiti da pristupe, sve dok nas ne obavijestite da je nalog ugrožen. Odmah nas obavijestite na [{{company.email}}](mailto:{{company.email}}) ako sumnjate na neovlašteni pristup.
- Možemo zahtijevati jaču autentifikaciju, resetovati pristupne podatke ili zaključati nalog za koji opravdano smatramo da je ugrožen ili zloupotrijebljen.
- Neaktivni besplatni nalozi mogu se zatvoriti nakon prethodnog obavještenja poslatog na e-mail adresu koja je u evidenciji; plaćeni nalozi se ne zatvaraju zbog neaktivnosti.

## 4. Licenca i ograničenja {#licence}

Pod uslovom da poštujete ove Uslove i platite važeće naknade, dodjeljujemo vam ograničenu, opozivu, neekskluzivnu, neprenosivu i nepodlicenciranu licencu za pristup Uslugama i njihovo korištenje za vaše interne lične ili poslovne potrebe tokom trajanja ugovora. Softver koji vam isporučimo se licencira, ne prodaje. Mi i naši davaoci licence zadržavamo sva prava koja nisu izričito dodijeljena.

Osim ako zakon ne daje pravo koje se ne može odreći, ne smijete i ne smijete dopustiti nikome da:

- kopira, mijenja, prevodi ili pravi izvedena djela od Usluga;
- vrši reverzni inženjering, dekompajlira, rastavlja ili pokušava izvesti izvorni kod, modele, težine, algoritme ili nejavne API-je;
- preprodaje, podlicencira, iznajmljuje, zakupljuje, hostuje kao servisni biro ili Usluge stavlja na raspolaganje trećim licima osim vašim ovlaštenim korisnicima;
- zaobilazi tehnička ograničenja, licenciranje, mjerenje, kontrolu pristupa, ograničenja broja zahtjeva ili sigurnosne funkcije;
- uklanja ili mijenja vlasničke napomene, navođenje autorstva ili napomene o licencama otvorenog koda;
- koristi Usluge ili njihov rezultat za izradu ili treniranje konkurentskog proizvoda, ili za testiranje performansi i objavljivanje rezultata bez našeg pismenog pristanka{{#if feature.ai}}, ili za treniranje, dodatno podešavanje ili destilaciju AI modela na osnovu rezultata Usluga tamo gdje mi to zabranjujemo u dokumentaciji{{/if}};
- pristupa Uslugama automatizovanim sredstvima (botovi, skreperi, crawleri), osim putem naše dokumentovane API-ja i pod njegovim uslovima.

[Politika prihvatljive upotrebe]({{url.acceptable_use}}) sadrži detaljnija pravila i dio je ovih Uslova. Komponente otvorenog koda regulisane su vlastitim licencama, koje za te komponente imaju prednost.

## 5. Prihvatljiva upotreba i provođenje {#acceptable-use}

Vi ste odgovorni za svoje korištenje Usluga i za ponašanje svih osoba kojima dozvolite da ih koriste. Zloupotreba može naškoditi drugim korisnicima, trećim licima i nama, pa možemo postupiti kako je opisano u [Politici prihvatljive upotrebe]({{url.acceptable_use}}) i odjeljku 17, uključujući uklanjanje sadržaja, ograničavanje funkcija, usporavanje, suspenziju ili raskid naloga, zadržavanje isplata, prijavljivanje nadležnim organima i traženje pravnih lijekova u skladu s odjeljkom 21.

## 6. Vaš sadržaj {#your-content}

{{#if feature.ugc}}
„**Vaš sadržaj**“ označava sve što otpremite, pošaljete, objavite, povežete ili generišete putem Usluga{{#if feature.ai}}, uključujući upite i, između vas i nas, rezultat koji dobijete{{/if}}.

- **Vlasništvo.** Vi zadržavate sva prava na Vaš sadržaj. Mi ne stičemo vlasništvo.
- **Licenca nama.** Dajete nam širom svijeta važeću, neekskluzivnu licencu bez autorske naknade za hostovanje, čuvanje, reprodukovanje, obradu, prenos, prilagođavanje (za formatiranje, sličice, prijevode, provjere sigurnosti) i prikazivanje Vašeg sadržaja **samo u mjeri potrebnoj za rad, obezbjeđenje, podršku i poboljšanje Usluga i za sprovođenje ovih Uslova**, dok ga čuvate u Uslugama i za ograničene periode rezervnih kopija i pravnog zadržavanja nakon toga. Ako sadržaj učinite javnim, licenca se proteže i na prikazivanje publici koju izaberete. Ova licenca prestaje kada obrišete sadržaj ili nalog, uz navedene periode i uz kopije koje su drugi korisnici već zakonito primili.
- **Vaša obećanja.** Imate i zadržaćete sva prava, saglasnosti i dozvole potrebne za slanje Vašeg sadržaja i davanje ove licence, uključujući one od svakog lica koje se na njemu može identifikovati; Vaš sadržaj i naše korištenje u dopuštenom obimu ne krše niti povređuju nijedan zakon ni prava bilo koje osobe (autorska prava, žig, privatnost, prava na lik i ime, povjerljivost, ugovor); i sadržaj je u skladu s [Politikom prihvatljive upotrebe]({{url.acceptable_use}}).
- **Moderacija.** Nemamo opštu obavezu da nadziremo Vaš sadržaj, ali možemo pregledati, ukloniti, ograničiti ili odbiti sadržaj za koji opravdano smatramo da krši zakon, ove Uslove ili prava drugih, ili za koji dobijemo valjanu prijavu (vidi [Obavještenja o autorskim pravima i nezakonitom sadržaju]({{url.copyright}})). Tamo gdje se to zahtijeva (na primjer prema EU Digital Services Act), obavještavamo vas o razlozima i o tome kako možete osporiti odluku.
- **Rezervne kopije.** Odgovorni ste za čuvanje vlastitih kopija Vašeg sadržaja. Osim ako paket izričito ne uključuje rezervne kopije ili čuvanje, ne obećavamo da ćemo vratiti obrisani ili izgubljeni sadržaj.
- **Agregirani podaci.** Možemo koristiti podatke o upotrebi koji vas ne identifikuju niti otkrivaju Vaš sadržaj, radi rada, obezbjeđenja i poboljšanja Usluga.
{{else}}
Vi zadržavate sva prava na sve što pošaljete Uslugama. Dajete nam ograničenu licencu potrebnu da to obrađujemo radi pružanja, obezbjeđenja i podrške Uslugama, i obavezujete se da imate pravo da to pošaljete. Odgovorni ste za čuvanje vlastitih kopija.
{{/if}}

## 7. Ako Usluge koristite za druge osobe {#end-users}

Ako Usluge koristite da biste nešto pružali svojim kupcima, korisnicima, zaposlenicima ili drugim trećim licima („**Krajnji korisnici**“), za njih ste isključivo odgovorni: morate imati zakonit osnov, obavještenja i saglasnosti potrebne za svaki lični podatak koji prikupljate ili obrađujete, dogovoriti vlastite uslove s njima, rješavati njihove zahtjeve i pritužbe, osigurati da poštuju [Politiku prihvatljive upotrebe]({{url.acceptable_use}}), i ne davati obaveze u naše ime. Odgovorni ste za radnje i propuste Krajnjih korisnika kao da su vaši. Mi nemamo obaveze prema Krajnjim korisnicima.

## 8. Funkcije vještačke inteligencije {#ai}

{{#if feature.ai}}
- Rezultati se generišu automatski i mogu biti netačni, nepotpuni, uvredljivi, pristrasni ili slični rezultatima datim drugima. Prije nego što se oslonite na rezultat, morate ga provjeriti i preuzeti odgovornost za način na koji ga koristite.
- **Ne koristite funkcije vještačke inteligencije kao jedinu osnovu za odluke koje imaju pravne ili slično značajne posljedice po ljude** (na primjer u zapošljavanju, kreditiranju, stanovanju, osiguranju, obrazovanju, zdravstvu, provođenju zakona ili imigraciji), i ne koristite ih za medicinske, pravne, finansijske ili savjete od značaja za bezbjednost bez kvalifikovanog ljudskog pregleda.
- Morate objaviti sadržaj koji je generisala ili izmijenila vještačka inteligencija u mjeri u kojoj to zahtijeva zakon ili platforma na kojoj objavljujete (uključujući lažne snimke i sintetičke medije), i ne smijete predstavljati rezultat vještačke inteligencije kao ljudski rad ako bi to dovelo u zabludu.
- Ne smijete koristiti funkcije za bilo koju zabranjenu upotrebu iz [Politike prihvatljive upotrebe]({{url.acceptable_use}}), niti pokušavati zaobići sisteme sigurnosti (uključujući napade ubrizgavanjem upita (prompt-injection), jailbreakingom ili izvlačenjem podataka protiv naših sistema ili sistema drugih).
- Dobavljači koje koristimo mogu primjenjivati vlastite politike korištenja; funkcije možemo u skladu s tim ograničiti. Ne koristimo Vaš sadržaj za treniranje modela opšte namjene osim ako se ne opredijelite za to (vidi [Politiku privatnosti]({{url.privacy}})).
{{else}}
Usluge trenutno ne uključuju funkcije uz pomoć vještačke inteligencije. Ako ih dodamo, ažurirat ćemo ove Uslove i obavijestiti vas u skladu s odjeljkom 16, a pravila za te funkcije (tačnost, ljudski pregled, objavljivanje, zabranjene upotrebe) primjenjivat će se.
{{/if}}

## 9. Naknade i plaćanje {#fees}

{{#if feature.payments}}
- **Cijene i porezi.** Cijene se prikazuju pri kupovini i ne uključuju PDV, prodajni i slične poreze, osim ako nije drukčije navedeno; vi plaćate važeće poreze. Cijene za potrošače uključuju poreze propisane zakonom.
- **Plaćanje.** Ovlašćujete nas i našeg procesora plaćanja da naplatimo sredstva s načina plaćanja koji ste nam dali, za sve iznose koji dospijevaju, uključujući obnove i naplate prema korištenju. Obećavate da ste ovlašteni koristiti taj način plaćanja i morate držati podatke ažurnim.
{{#if feature.subscriptions}}- **Pretplate.** Osim ako nije drukčije navedeno pri plaćanju, pretplate se automatski obnavljaju za periode iste dužine dok se ne otkažu. Otkažite u bilo kojem trenutku u svom nalogu ili e-mailom prije datuma obnove; otkazivanje stupa na snagu na kraju plaćenog perioda i ne vršimo proporcionalni obračun. Unaprijed vas obavještavamo, kako zakon zahtijeva, prije nego što se probni period pretvori u plaćeni ili se promijeni cijena obnove.
- **Probni periodi i promocije.** Jedna probna ili promotivna ponuda po osobi ili preduzeću. Ponudu možemo povući ili odbiti ako sumnjamo na zloupotrebu (više naloga, lažni identiteti, zaobilaženje ograničenja).
{{/if}}{{#if feature.credits}}- **Krediti.** Unaprijed plaćeni krediti, tokeni ili valuta unutar aplikacije predstavljaju ograničenu licencu za korištenje Usluga, a ne novac; nemaju novčanu vrijednost, neprenosivi su, ne mogu se unovčiti ili trgovati njima, i mogu isteći kako je navedeno pri kupovini. Neiskorišteni krediti se gube kada se nalog zatvori zbog kršenja; u ostalim slučajevima povrati slijede pravila u nastavku i važeći zakon.{{#if feature.game}} Virtualni predmeti u igrama uređeni su [Pravilima igre i politikom o virtualnim predmetima]({{url.game_rules}}).{{/if}}
{{/if}}- **Promjene cijena.** Cijene možemo mijenjati za buduće periode uz najmanje {{policy.notice_days}} dana prethodnog obavještenja. Ako se ne slažete, otkažite prije nego što promjena stupi na snagu.
- **Kašnjenje ili neuspjelo plaćanje.** Možemo ponovo pokušati naplatu, suspendovati ili smanjiti nivo naloga i naplatiti razumne troškove naplate i zakonske kamate na dospjele poslovne fakture. Usluge se vraćaju kada se dug isplati.
- **Povrati naplate i prevare.** Pokretanje povrata naplate ili spora oko plaćanja bez prethodnog obraćanja nama na [{{company.email}}](mailto:{{company.email}}), kao i prevarna ili neovlaštena plaćanja, mogu dovesti do trenutne suspenzije, gubitka pristupa sadržaju i naplate spornog iznosa i naših troškova obrade.
- **Povrati novca.** Osim ako vam zakon ne daje pravo ili mi to ne navedemo pismeno, plaćene naknade se ne vraćaju, uključujući za djelimične periode i neiskorištene funkcije, a povrat nije dužan ako suspendujemo ili raskinemo vaš nalog zbog kršenja.
{{#if feature.consumers}}- **Otkazivanje, odustanak i povrati novca.** Prava potrošača na odustanak, način otkazivanja i uslovi povrata novca navedeni su u [Politici povrata novca i otkazivanja]({{url.refunds}}), koja je dio ovih Uslova. Za digitalni sadržaj ili usluge koje se isporučuju odmah na vaš zahtjev tražimo vašu izričitu saglasnost i potvrdu pri plaćanju, kako zakon zahtijeva.
{{/if}}
{{else}}
Usluge se trenutno nude besplatno. Možemo uvesti plaćene funkcije u budućnosti; bit će vam jasno predstavljene i nikada vam se neće naplatiti bez vaše saglasnosti.
{{/if}}

## 10. API, integracije i usluge trećih strana {#integrations}

{{#if feature.api}}
Pristup API-ju podliježe ovim Uslovima, dokumentaciji i svim ograničenjima broja zahtjeva. Morate štititi svoje API ključeve i pristupne podatke, odgovorni ste za sve pozive upućene s njima, i ne smijete ih dijeliti, ugrađivati u javni kod niti ih koristiti za preprodaju pristupa. Možemo rotirati, ograničiti ili opozvati ključeve i mijenjati ili ukinuti verzije API-ja uz razumno obavještenje (kraće ako je to potrebno iz bezbjednosnih ili pravnih razloga). Ne koristite API na način koji pogoršava Usluge za druge ili pokušava zaobići ograničenja, na primjer korištenjem velikog broja ključeva ili naloga.

{{/if}}
Usluge mogu raditi s proizvodima, web-stranicama i uslugama trećih strana koje ne kontrolišemo. Vaše korištenje njih regulisano je njihovim uslovima. Nismo odgovorni za njih, za njihovu dostupnost ili izmjene, niti za način na koji koriste podatke koje odlučite s njima podijeliti. Podršku za neku integraciju možemo prekinuti u bilo kojem trenutku.

## 11. Beta i besplatne funkcije {#beta}

Funkcije označene kao alfa, beta, pregled (preview), eksperimentalne ili slično, kao i besplatni nivoi, pružaju se „kakve jesu“, mogu se mijenjati ili povući u bilo kojem trenutku, mogu biti manje pouzdane i isključene su iz svake obaveze u pogledu nivoa usluge. Nemojte se oslanjati na njih za kritične svrhe.

## 12. Intelektualna svojina {#ip}

Usluge, uključujući softver, dizajn, tekst, grafiku, podatke, oznake, logotipe i dokumentaciju, u vlasništvu su nas ili naših davalaca licence i zaštićene su autorskim pravom, žigom i drugim propisima. Ništa u ovim Uslovima ne prenosi vlasništvo na vas, a pravo na korištenje naših naziva ili oznaka ne dodjeljuje se, osim u mjeri potrebnoj za korištenje Usluga.

**Povratne informacije.** Ako nam pošaljete prijedloge ili ideje, dajete nam trajnu, neopozivu, širom svijeta važeću licencu bez autorske naknade, s pravom daljeg podlicenciranja, za njihovo korištenje bez ograničenja i bez navođenja autorstva, u mjeri u kojoj to zakon dopušta. Nemamo obavezu da postupamo po povratnim informacijama.

Obavještenja o autorskim pravima i nezakonitom sadržaju: vidi [Obavještenja o autorskim pravima i nezakonitom sadržaju]({{url.copyright}}).

## 13. Povjerljivost (poslovni korisnici) {#confidentiality}

Svaka strana čuvaće kao povjerljive nejavne poslovne i tehničke informacije druge strane, koristiti ih samo radi izvršenja obaveza ili ostvarivanja prava prema ovim Uslovima i štititi ih razumnom pažnjom, osim za informacije koje su javne bez krivice primaoca, koje su mu već bile poznate, koje je samostalno razvio ili koje se po zakonu moraju otkriti (uz prethodno obavještenje, ako je to zakonski dopušteno). Obaveza traje tri godine nakon prestanka ovih Uslova, a za poslovne tajne neograničeno.

## 14. Privatnost i zaštita podataka {#privacy}

Naša [Politika privatnosti]({{url.privacy}}) objašnjava kako obrađujemo lične podatke. {{#if feature.processor_role}}Tamo gdje lične podatke obrađujemo za vas kao vaš obrađivač, primjenjuje se [Aneks o obradi podataka]({{url.dpa}}) i on čini dio ovih Uslova.{{/if}} Vi morate poštovati propise o zaštiti podataka pri korištenju Usluga i ne smijete dostavljati podatke posebnih kategorija ili regulisane podatke (zdravlje, brojeve platnih kartica, državne identifikacione brojeve, podatke o djeci), osim ako funkcija ili ugovor to izričito ne dozvoljava.

## 15. Dostupnost, podrška i izmjene {#availability}

Težimo visokoj dostupnosti, ali ne garantujemo neprekidan rad bez grešaka. Možemo vršiti održavanje (uz obavještenje kad je to razumno moguće) i možemo mijenjati, dodavati ili uklanjati funkcije. Ako značajno smanjimo plaćenu funkciju tokom unaprijed plaćenog perioda, dat ćemo vam najmanje {{policy.notice_days}} dana obavještenja i, ako ne možete razumno nastaviti, proporcionalni povrat novca za pogođeni unaprijed plaćeni period. Podrška se pruža na adresi [{{company.email}}](mailto:{{company.email}}) na principu razumnih napora, osim ako vaš paket uključuje ugovor o nivou usluge.

## 16. Izmjene ovih Uslova {#changes}

Ove Uslove možemo ažurirati iz pravnih, bezbjednosnih, proizvodnih ili poslovnih razloga. Za značajne izmjene dat ćemo najmanje **{{policy.notice_days}} dana** obavještenja e-poštom ili u Uslugama prije nego što se primijene na vas. Ako se ne slažete, možete prestati koristiti Usluge i zatvoriti nalog prije datuma stupanja na snagu, a (za plaćene pakete) zatražiti proporcionalni povrat unaprijed plaćenih naknada za period nakon tog datuma. Nastavak korištenja Usluga nakon datuma stupanja na snagu znači da prihvatate ažurirane Uslove. Izmjene koje zahtijeva zakon ili koje ništa ne umanjuju niti dodaju nikakvu obavezu mogu stupiti na snagu odmah. Izmjene se ne primjenjuju na sporove koji su već u toku.

## 17. Obustava i raskid {#termination}

**Od strane vas.** Možete prestati koristiti Usluge i zatvoriti nalog u bilo kojem trenutku u svojim postavkama ili e-poštom. Plaćene naknade se ne vraćaju, osim ako odjeljak 9 ili zakon to ne predviđa.

**Od strane nas, iz praktičnih razloga.** Možemo ukinuti plaćene pakete uz {{policy.notice_days}} dana obavještenja (uz proporcionalni povrat unaprijed plaćenih naknada) i možemo ukinuti besplatne usluge uz razumno obavještenje.

**Od strane nas, zbog razloga.** Možemo, sa ili bez prethodnog obavještenja i u mjeri koju zakon dopušta, ograničiti, suspendovati ili raskinuti vaš pristup, ukloniti sadržaj ili odmah zatvoriti vaš nalog ako:

- kršite ove Uslove ili Politiku prihvatljive upotrebe (reakcija je srazmjerna težini, ponavljanju i riziku);
- opravdano smatramo da vaše korištenje stvara bezbjednosni, pravni, regulatorni, reputacioni ili finansijski rizik za nas, druge korisnike ili treća lica;
- ne platite na vrijeme;
- sud, organ ili važeći zakon to zahtijeva; ili
- se vaš nalog čini ugroženim, prevarnim ili napuštenim.

Kad je to praktično i zakonito, reći ćemo vam zašto i dati vam priliku da odgovorite ili prvo otklonite problem, a tamo gdje zakon to zahtijeva (na primjer EU Digital Services Act) dajemo obrazloženje i način da se žalite. Ako vas suspendujemo ili raskinemo zbog kršenja, naknade se ne vraćaju, a dospjeli iznosi ostaju plativi.

**Posljedice.** Raskidom vaša licenca prestaje; morate prestati koristiti Usluge; i, na zahtjev podnesen u roku od **{{policy.retention_account_days}} dana**, učinićemo Vaš sadržaj dostupnim za izvoz tamo gdje je to tehnički izvodljivo (ne tamo gdje je to nezakonito ili bi štetilo drugima). Nakon tog perioda brišemo ga kako je opisano u [Politici privatnosti]({{url.privacy}}). Odjeljci koji po svojoj prirodi treba da ostanu na snazi ostaju na snazi, uključujući 4, 6 (ograničenja licence i vaša obećanja), 9 (dospjeli iznosi), 12, 13, 17-24 i 26.

## 18. Garancije i odricanje od odgovornosti {#disclaimer}

Usluge pružamo uz razumnu vještinu i pažnju. **Inače, u najvećoj mjeri koju dozvoljava zakon, Usluge se pružaju „kakve jesu“ i „kakve su dostupne“, a odričemo se svih drugih garancija, izričitih ili podrazumijevanih,** uključujući tržišnu prikladnost, pogodnost za određenu svrhu, nepovredu prava, tačnost, dostupnost, te da će Usluge biti bezbjedne, bez grešaka, neprekidne ili bez štetnih komponenti. Ne garantujemo rezultate, sadržaj trećih strana niti rezultate koje dobijete. Usluge nisu namijenjene za upotrebu u okruženjima visokog rizika u kojima bi kvar mogao izazvati smrt, tjelesnu povredu ili ozbiljnu štetu (na primjer medicinski uređaji, avijacija, nuklearni ili sistemi održavanja života), i ne smijete ih tako koristiti.

{{#if feature.consumers}}Ako ste potrošač, zadržavate sva zakonska prava koja se ne mogu isključiti, kao što su zakonske garancije i pravni lijekovi za digitalni sadržaj i usluge prema pravu EU i Ujedinjenog Kraljevstva, kao i potrošačke garancije prema Australian Consumer Law i sličnim zakonima drugdje.{{/if}}

## 19. Ograničenje odgovornosti {#liability}

Ništa u ovim Uslovima ne isključuje niti ograničava odgovornost koja se po zakonu ne može isključiti ili ograničiti, uključujući odgovornost za smrt ili tjelesnu povredu, prevaru ili namjerno nedolično ponašanje, grubu nepažnju ili (za potrošače) obavezne zakonske pravne lijekove.

Podložno tome, **u najvećoj mjeri koju dozvoljava zakon** i za poslovne korisnike:

1. nismo odgovorni za indirektnu, slučajnu, posebnu, posljedičnu, primjernu ili kaznenu štetu, niti za gubitak dobiti, prihoda, poslovanja, dobrog glasa, očekivanih ušteda ili podataka, koji proizlaze iz Usluga ili ovih Uslova ili su s njima povezani, čak i ako smo bili upozoreni na tu mogućnost; i
2. naša ukupna zbirna odgovornost za sve zahtjeve ograničena je na veći od sljedećeg: (a) naknada koje ste nam platili za Usluge u **{{policy.liability_cap_months}} mjeseci** prije događaja koji je prvi doveo do zahtjeva i (b) 100 EUR.

{{#if feature.consumers}}Za potrošače smo odgovorni za predvidivu štetu ili gubitak prouzrokovan našim kršenjem ili nepažnjom, ali ne i za gubitak koji nije bio predvidiv, niti za gubitak vezan za poslovanje.{{/if}}

Nismo odgovorni za neispunjavanje ili kašnjenje uzrokovano događajima izvan našeg razumnog nadzora (odjeljak 24). Besplatne usluge pružaju se bez odgovornosti koja nadilazi ono što zahtijeva zakon. Ova ograničenja primjenjuju se bez obzira na to kako odgovornost nastaje (ugovor, delikt uključujući nemar ili na drugi način), čak i ako pravni lijek ne ispuni svoju suštinsku svrhu.

## 20. Obeštećenje {#indemnity}

Ako ste poslovni korisnik, branićete, obeštetićete i držaćete bez štete {{company.name}}, njena povezana lica, službenike, zaposlenike i zastupnike od zahtjeva, šteta, gubitaka, kazni i troškova (uključujući razumne advokatske troškove) koji proizlaze iz (a) Vašeg sadržaja ili vaših podataka, (b) kršenja ovih Uslova ili zakona od strane vas ili vaših Krajnjih korisnika, (c) vaše zloupotrebe Usluga, ili (d) spora između vas i treće strane. Obavijestićemo vas bez odlaganja o svakom zahtjevu, dopustiti vam da kontrolišete odbranu (mi možemo učestvovati o vlastitom trošku), a vi ne smijete nagoditi zahtjev koji priznaje našu krivicu bez našeg pristanka. {{#if feature.consumers}}Potrošači su odgovorni samo za gubitak koji sami prouzroče vlastitim kršenjem, kako to propisuje zakon.{{/if}}

## 21. Pravni lijekovi za zloupotrebu {#remedies}

Pored ostalih prava i u mjeri koju zakon dopušta:

- **Privremena mjera.** Priznajete da kršenje odjeljaka 4, 5 ili 13 može prouzrokovati štetu koju naknada štete ne može u potpunosti nadoknaditi, te možemo tražiti privremenu sudsku zabranu ili druge pravične mjere bez dokazivanja stvarne štete i bez polaganja jemstva.
- **Troškovi zloupotrebe.** Ako vaša zloupotreba prouzrokuje troškove za nas (dodatna infrastruktura, odgovor na incident, istraga, povrati naplate, regulatorne kazne ili potraživanja trećih strana), nadoknadićete razumne, dokumentovane troškove.
- **Dokazi i saradnja.** Možemo sačuvati zapise i sadržaj povezane s sumnjivom zloupotrebom i možemo ih otkriti pogođenim stranama, platformama, organima za provođenje zakona ili regulatorima tamo gdje zakon to dopušta. Razumno sarađujete s našim istragama.
- **Prijavljivanje.** Možemo prijaviti nezakonite aktivnosti (uključujući seksualno zlostavljanje djece, prevare, prijetnje, zlonamjerni softver i napade na sisteme) nadležnim organima i pogođenim stranama, i to ćemo učiniti tamo gdje zakon to zahtijeva.
- **Zadržavanje.** Možemo zadržati, zamrznuti ili prebiti iznose koje dugujemo vama (na primjer isplate) s iznosima koje vi dugujete nama ili koji proizlaze iz zloupotrebe, podložno zakonu.

## 22. Izvoz, sankcije i borba protiv korupcije {#export}

Ne smijete koristiti, izvoziti ili reizvoziti Usluge suprotno važećim propisima o kontroli izvoza i sankcijama, uključujući propise EU, Sjedinjenih Američkih Država, Ujedinjenog Kraljevstva i UN-a, niti ih koristiti prema licima ili državama pod sveobuhvatnim sankcijama ili za njih. Potvrđujete da vi i vaši korisnici niste na nekoj listi sankcija ili listi ograničenih lica. Nećete nuditi niti davati bilo šta od vrijednosti s namjerom da na neprimjeren način utičete na bilo koga u vezi s Uslugama.

## 23. Mjerodavno pravo i sporovi {#law}

Ovi Uslovi i svaki spor ili potraživanje koji proizlazi iz njih ili je u vezi s njima ili Uslugama (uključujući vanugovorne sporove) uređeni su pravom **{{law.governing}}**, bez obzira na pravila o sukobu zakona i isključujući Konvenciju UN-a o ugovorima o međunarodnoj prodaji robe.

**Prvo neformalno rješavanje.** Prije pokretanja formalnog postupka pišite na [{{company.legal_email}}](mailto:{{company.legal_email}}) s opisom spora i omogućite nam da u dobroj vjeri pokušamo riješiti spor najmanje 30 dana.

**Sudovi.** Osim ako obavezni zakon ne predviđa drukčije, isključiva nadležnost je **{{law.venue}}**. Svaka strana može tražiti hitnu privremenu sudsku zabranu pred bilo kojim nadležnim sudom.

{{#if feature.consumers}}**Potrošači.** Ako ste potrošač, zadržavate i pravo da pokrenete postupak pred sudovima države vašeg prebivališta i da se pozovete na obavezne propise o zaštiti potrošača u toj državi, a ništa u ovom odjeljku to ne uklanja. {{#if consumer_dispute}}Učestvujemo u vansudskom rješavanju sporova pred {{consumer_dispute}}.{{/if}}
{{/if}}
**Rok za podnošenje (poslovni korisnici).** U mjeri koju zakon dopušta, svaki zahtjev mora se podnijeti u roku od {{policy.claim_months}} mjeseci od nastanka osnova za zahtjev, inače se gubi.

**Bez kolektivnih tužbi (poslovni korisnici, gdje je to dopušteno).** Zahtjevi se mogu podnositi samo pojedinačno, a ne kao dio grupnog, kolektivnog ili predstavničkog postupka.

## 24. Viša sila {#force-majeure}

Nijedna strana nije odgovorna za kašnjenje ili neispunjenje uzrokovano događajima izvan njene razumne kontrole, uključujući prirodnu katastrofu, rat, terorizam, građanske nemire, pandemiju, mjere državnih organa, nestanak električne energije, interneta ili telekomunikacija, otkaze oblaka ili drugih infrastrukturnih pružalaca usluga trećih strana, sajber napade uprkos razumnim sigurnosnim mjerama, radne sporove (osim onih u vlastitom osoblju strane) ili neisporuke. Obaveze plaćanja za već isporučene usluge ne prestaju. Ako takav događaj traje duže od 60 dana, bilo koja strana može raskinuti pogođene usluge.

## 25. Elektronska komunikacija i obavještenja {#notices}

Pristajete da primate obavještenja i sporazume elektronskim putem. Obavještenja vam možemo dostaviti e-poštom na adresu na vašem nalogu, u Uslugama ili objavom na našoj web-stranici. Obavještenja nama moraju se slati na [{{company.legal_email}}](mailto:{{company.legal_email}}) i na adresu {{company.address}}. Obavještenje se smatra primljenim 24 sata nakon što je e-pošta poslana bez povratne poruke o neisporuci, odnosno kada je objavljeno ili prikazano u Uslugama.

## 26. Opšte odredbe {#general}

- **Cjelokupni sporazum.** Ovi Uslovi i dokumenti na koje se oni pozivaju predstavljaju cjelokupni sporazum o njihovom predmetu i zamjenjuju ranije dogovore. Niste se oslonili ni na jednu izjavu koja nije navedena u njima.
- **Djelimična nevažnost.** Ako je neka odredba neprovediva, ograničava se na najmanji obim potreban da bi bila provediva ili se zamjenjuje provedivom odredbom koja je njenoj namjeri najbliža; ostatak ostaje na snazi.
- **Nema odricanja.** Nekorištenje nekog prava nije odricanje od tog prava.
- **Ustupanje.** Ne smijete ustupiti ili prenijeti svoja prava ili obaveze bez našeg pismenog pristanka. Ove Uslove možemo ustupiti povezanom licu ili pravnom sljedniku našeg poslovanja, i o tome ćemo vas obavijestiti.
- **Odnos.** Strane su nezavisni ugovarači. Ništa ne stvara partnerstvo, zastupanje, radni odnos ili zajednički poduhvat.
- **Treća lica.** Niko drugi nema pravo da provodi ove Uslove, osim naših povezanih lica, službenika i zastupnika prema odjeljcima 19 i 20.
- **Jezik.** Prijevodi se pružaju radi praktičnosti; ako se razlikuju, engleska verzija ima prednost, osim ako obavezni zakon ne zahtijeva drukčije.
- **Tumačenje.** Naslovi su radi praktičnosti. „Uključujući“ znači „uključujući bez ograničenja“.
- **Publicitet.** Možemo vas navesti kao kupca s vašim logotipom, osim ako se e-poštom ne odlučite drukčije; potrošači se nikada ne navode.

## 27. Kontakt {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Registarski broj {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Porezni ID {{company.tax_id}}{{/if}}
E-pošta [{{company.email}}](mailto:{{company.email}}) · Pravni [{{company.legal_email}}](mailto:{{company.legal_email}}) · Podrška [{{company.email}}](mailto:{{company.email}}) · Pogledajte i našu [Pravnu napomenu (Impressum)]({{url.impressum}}).
