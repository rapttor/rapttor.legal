---
doc: terms
title: Uvjeti korištenja
version: 1.0.0
updated: 2026-10-23
lang: hr
translation_of: 1.0.0
status: draft
summary: Ugovor između vas i {{product.name}} o korištenju {{product.name}}.
---

# Uvjeti korištenja

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

## 1. Ugovor {#agreement}

Ovi Uvjeti korištenja („**Uvjeti**“) obvezujući su ugovor između vas i **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, matični broj {{company.reg_id}}{{/if}} („**{{product.name}}**“, „mi“, „nas“) kojim se uređuje vaš pristup usluzi {{product.name}}, našim web-stranicama, aplikacijama, API-jima, dokumentaciji i povezanim uslugama („**Usluge**“) te njihovo korištenje.

Stvaranjem računa, instaliranjem aplikacije ili drugačijim korištenjem Usluga prihvaćate ove Uvjete i dokumente na koje se oni pozivaju: [Politiku privatnosti]({{url.privacy}}), [Pravila prihvatljive uporabe]({{url.acceptable_use}}), [Politiku kolačića]({{url.cookies}}){{#if feature.processor_role}}, [Dodatak o obradi podataka]({{url.dpa}}) gdje se primjenjuje{{/if}}{{#if feature.payments}}, [Pravila povrata novca i otkaza]({{url.refunds}}){{/if}}{{#if feature.game}}, [Pravila igre i politiku virtualnih predmeta]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Uvjete za aplikacije]({{url.app_eula}}){{/if}} te sve obrasce narudžbe ili uvjete specifične za proizvod. Ako se ne slažete, nemojte koristiti Usluge.

Ako Usluge koristite za neku organizaciju, potvrđujete da imate ovlast obvezati je, a izraz „vi“ obuhvaća tu organizaciju. Ako su uvjeti specifični za proizvod ili potpisani ugovor u suprotnosti s ovim Uvjetima, oni imaju prednost samo za taj proizvod ili kupca.

{{#if feature.consumers}}
**Potrošači.** Ako Usluge koristite kao potrošač, obvezni propisi o zaštiti potrošača u državi vašeg boravišta i dalje se primjenjuju te ništa u ovim Uvjetima ne ograničava ta prava. Odjeljci označeni *(poslovni korisnici)* primjenjuju se samo ako niste potrošač.
{{/if}}

## 2. Pravo na korištenje {#eligibility}

Usluge smijete koristiti samo ako:

1. {{#if feature.minors}}imate najmanje **{{policy.min_age}}** godina i, ako niste navršili punoljetnost u mjestu u kojem živite, imate privolu roditelja ili zakonskog skrbnika koji ovim Uvjetima prihvaća u vaše ime i odgovoran je za vaše korištenje i kupnje (možemo tražiti dokaz){{else}}imate najmanje **{{policy.min_age}}** godina i sposobni ste sklopiti obvezujući ugovor{{/if}};
2. na vas se ne odnosi zabrana primanja Usluga prema važećem pravu, uključujući propise o sankcijama i kontroli izvoza (odjeljak 22);
3. niste ranije bili isključeni iz Usluga zbog kršenja naših pravila, osim ako smo se pisano suglasili da vas ponovno primimo; i
4. Usluge koristite zakonito na mjestu na kojem se nalazite.

Možemo u bilo kojem trenutku tražiti dokaz o dobi, identitetu ili ovlasti te možemo odbiti ili zatvoriti račun koji ne prođe provjeru.

## 3. Računi i sigurnost {#accounts}

- Dajte točne i ažurne podatke te ih održavajte ažurnima. Jedna osoba ili jedan subjekt, jedan račun, osim ako se drukčije ne dogovorimo; otvaranje dodatnih računa radi zaobilaženja ograničenja, zabrane, probnog razdoblja ili pravila o cijenama zabranjeno je.
- Čuvajte svoje vjerodajnice u tajnosti. Ne dijelite, ne prodajte, ne iznajmljujte i ne prenosite svoj račun. Svako korisničko mjesto namijenjeno je jednoj imenovanoj osobi, osim ako paket ne određuje drukčije.
- Odgovorni ste za sve što se događa putem vašeg računa, uključujući radnje osoba koje ste pustili ili koje niste uspjeli spriječiti da pristupe, dok nas ne obavijestite da je račun ugrožen. Odmah nas obavijestite na [{{company.email}}](mailto:{{company.email}}) ako sumnjate na neovlašteni pristup.
- Možemo zahtijevati jaču autentifikaciju, resetirati vjerodajnice ili zaključati račun za koji razumno vjerujemo da je ugrožen ili zloupotrijebljen.
- Neaktivni besplatni računi mogu se zatvoriti nakon prethodne obavijesti na e-adresu evidentiranu u računu; plaćeni računi ne zatvaraju se zbog neaktivnosti.

## 4. Licenca i ograničenja {#licence}

Uz poštovanje ovih Uvjeta i plaćanje važećih naknada, dodjeljujemo vam ograničenu, opozivu, neekskluzivnu i neprenosivu licencu bez prava podlicenciranja za pristup Uslugama i njihovo korištenje u vlastite interne osobne ili poslovne svrhe tijekom trajanja ugovora. Softver koji vam isporučujemo licenciran je, a ne prodan. Mi i naši davatelji licencija zadržavamo sva prava koja nisu izričito dodijeljena.

Osim ako zakon ne daje pravo koje se ne može odreći, ne smijete i ne smijete dopustiti nikome da:

- kopira, mijenja, prevodi ili izrađuje izvedena djela Usluga;
- radi povratni inženjering, dekompajlira, rastavlja ili pokušava izvesti izvorni kôd, modele, težine, algoritme ili nejavne API-je;
- preprodaje, podlicencira, iznajmljuje, daje u zakup, hostira kao servisni centar ili na drugi način čini Usluge dostupnima trećim stranama, osim vašim ovlaštenim korisnicima;
- zaobilazi tehnička ograničenja, licenciranje, mjerenje, kontrole pristupa, ograničenja učestalosti zahtjeva ili sigurnosne značajke;
- uklanja ili mijenja vlasničke oznake, navode autorstva ili obavijesti o licencama otvorenog koda;
- koristi Usluge ili njihove rezultate za izradu ili obučavanje konkurentskog proizvoda ili za usporedbu i objavu rezultata performansi bez našeg pisanog pristanka{{#if feature.ai}}, ili za obučavanje, dodatno podešavanje ili destiliranje AI modela na temelju rezultata Usluga tamo gdje to u dokumentaciji zabranjujemo{{/if}};
- pristupa Uslugama automatiziranim sredstvima (botovi, strugači, crawleri), osim putem našeg dokumentiranog API-ja i pod njegovim uvjetima.

[Pravila prihvatljive uporabe]({{url.acceptable_use}}) sadrže detaljnija pravila i dio su ovih Uvjeta. Komponente otvorenog koda uređene su vlastitim licencama, koje za te komponente imaju prednost.

## 5. Prihvatljiva uporaba i provedba {#acceptable-use}

Odgovorni ste za svoje korištenje Usluga i za ponašanje svih osoba kojima ga dopustite. Zloupotreba može naštetiti drugim korisnicima, trećim stranama i nama, a mi možemo postupiti kako je opisano u [Pravilima prihvatljive uporabe]({{url.acceptable_use}}) i odjeljku 17, uključujući uklanjanje sadržaja, ograničavanje značajki, usporavanje (throttling), suspenziju ili raskid računa, zadržavanje isplata, prijavu tijelima vlasti i pokretanje pravnih lijekova iz odjeljka 21.

## 6. Vaš sadržaj {#your-content}

{{#if feature.ugc}}
„**Vaš sadržaj**“ znači sve što prenesete, pošaljete, objavite, povežete ili generirate putem Usluga{{#if feature.ai}}, uključujući upite i, u odnosu između vas i nas, rezultate koje primite{{/if}}.

- **Vlasništvo.** Zadržavate sva prava na Vaš sadržaj. Ne stječemo nikakvo vlasništvo nad njim.
- **Licencija nama.** Dajete nam svjetsku, neekskluzivnu licenciju bez naknade za pohranu, reprodukciju, obradu, prijenos, prilagodbu (radi oblikovanja, sličica, prijevoda i provjera sigurnosti) i prikazivanje Vašeg sadržaja **samo koliko je potrebno za rad, osiguranje, podršku i poboljšanje Usluga te za provedbu ovih Uvjeta**, dok ga držite u Uslugama i tijekom ograničenih razdoblja sigurnosnih kopija i pravnog zadržavanja nakon toga. Ako sadržaj učinite javnim, licencija se proteže i na prikazivanje publici koju odaberete. Ova licencija prestaje kada izbrišete sadržaj ili svoj račun, uz poštovanje tih razdoblja i kopija koje su drugi korisnici već zakonito primili.
- **Vaša jamstva.** Imate i održavat ćete sva prava, privole i dopuštenja potrebna za podnošenje Vašeg sadržaja i davanje ove licencije, uključujući ona od svake osobe koja se na njemu može prepoznati. Vaš sadržaj i naše korištenje njime, kako je dopušteno, ne krše nikakav zakon ni prava bilo koje osobe (autorska prava, zaštitne znakove, privatnost, prava osobnosti, povjerljivost, ugovore), i u skladu je s [Pravilima prihvatljive uporabe]({{url.acceptable_use}}).
- **Moderiranje.** Nemamo opću obvezu nadzirati Vaš sadržaj, ali ga možemo pregledati, ukloniti, ograničiti ili odbiti sadržaj za koji razumno vjerujemo da krši zakon, ove Uvjete ili prava drugih ili za koji zaprimimo valjanu obavijest (vidi [Obavijesti o autorskim pravima i nezakonitom sadržaju]({{url.copyright}})). Gdje je to propisano (primjerice prema EU Digital Services Act), obavijestit ćemo vas o razlozima i o tome kako možete osporiti odluku.
- **Sigurnosne kopije.** Odgovorni ste za čuvanje vlastitih kopija Vašeg sadržaja. Osim ako paket izričito ne uključuje sigurnosne kopije ili zadržavanje, ne obećavamo vraćanje izbrisanog ili izgubljenog sadržaja.
- **Zbirni podaci.** Možemo koristiti podatke o upotrebi koji vas ne identificiraju niti otkrivaju Vaš sadržaj, radi rada, osiguranja i poboljšanja Usluga.
{{else}}
Zadržavate sva prava na sve što pošaljete Uslugama. Dajete nam ograničenu licenciju potrebnu za obradu toga radi pružanja, osiguranja i podrške Usluga, a obećavate da imate pravo to poslati. Odgovorni ste za čuvanje vlastitih kopija.
{{/if}}

## 7. Ako Usluge koristite za druge osobe {#end-users}

Ako Usluge koristite za pružanje nečega vlastitim kupcima, korisnicima, zaposlenicima ili drugim trećim stranama („**Krajnji korisnici**“), isključivo ste odgovorni za njih: morate imati zakonitu osnovu, obavijesti i privole potrebne za sve osobne podatke koje prikupljate ili obrađujete, dogovoriti vlastite uvjete s njima, rješavati njihove zahtjeve i pritužbe, osigurati njihovu usklađenost s [Pravilima prihvatljive uporabe]({{url.acceptable_use}}) i ne preuzimati obveze u naše ime. Odgovorni ste za radnje i propuste Krajnjih korisnika kao da su vaši. Nemamo nikakve obveze prema Krajnjim korisnicima.

## 8. Funkcije umjetne inteligencije {#ai}

{{#if feature.ai}}
- Rezultati se generiraju automatski i mogu biti netočni, nepotpuni, uvredljivi, pristrani ili slični rezultatima danima drugima. Prije nego što se oslonite na rezultat, morate ga procijeniti i preuzeti odgovornost za način na koji ga koristite.
- **Nemojte koristiti funkcije umjetne inteligencije kao jedinu osnovu za odluke koje imaju pravne ili slično značajne posljedice za osobe** (primjerice zapošljavanje, kreditiranje, stanovanje, osiguranje, obrazovanje, zdravstvenu skrb, provedbu zakona ili imigraciju) i nemojte ih koristiti za medicinske, pravne, financijske savjete ili savjete o sigurnosno kritičnim pitanjima bez kvalificiranog ljudskog pregleda.
- Morate objaviti sadržaj koji je generirala ili izmijenila umjetna inteligencija u mjeri u kojoj to zahtijeva zakon ili platforma na kojoj objavljujete (uključujući lažne snimke (deepfakes) i sintetičke medije), i ne smijete predstavljati rezultat umjetne inteligencije kao ljudski proizvod ako bi to obmanjivalo.
- Ne smijete koristiti funkcije ni za jednu zabranjenu uporabu iz [Pravila prihvatljive uporabe]({{url.acceptable_use}}) niti pokušavati zaobići sustave sigurnosti (uključujući napade ubacivanjem upita (prompt injection), jailbreaking ili napade izvlačenja podataka protiv naših sustava ili sustava drugih).
- Davatelji koje koristimo mogu primjenjivati vlastita pravila korištenja; u skladu s time možemo ograničiti značajke. Vaš sadržaj ne koristimo za obučavanje modela opće namjene, osim ako ne pristanete (vidi [Politiku privatnosti]({{url.privacy}})).
{{else}}
Usluge trenutno ne uključuju funkcije potpomognute umjetnom inteligencijom. Ako ih dodamo, ažurirat ćemo ove Uvjete i obavijestiti vas prema odjeljku 16, a primjenjivat će se pravila za njih (točnost, ljudski pregled, objava i zabranjene uporabe).
{{/if}}

## 9. Naknade i plaćanje {#fees}

{{#if feature.payments}}
- **Cijene i porezi.** Cijene se prikazuju pri kupnji i ne uključuju PDV, porez na promet i slične poreze, osim ako nije drukčije navedeno; vi plaćate važeće poreze. Cijene za potrošače uključuju poreze propisane zakonom.
- **Plaćanje.** Dajete nama i našem procesoru plaćanja ovlast da za sve dospjele iznose, uključujući obnove i naplatu prema potrošnji, teretite način plaćanja koji nam dajete. Obećavate da ste ovlašteni koristiti taj način plaćanja i da ćete podatke o njemu držati ažurnima.
{{#if feature.subscriptions}}- **Pretplate.** Osim ako nije drukčije navedeno pri naplati, pretplate se automatski obnavljaju na razdoblja iste duljine dok se ne otkažu. Otkažite u bilo kojem trenutku u svom računu ili e-poštom prije datuma obnove; otkazivanje stupa na snagu na kraju plaćenog razdoblja i ne vršimo razmjerni obračun. Unaprijed vas obavještavamo, kako zakon zahtijeva, prije nego što se probno razdoblje pretvori u plaćeno ili se promijeni cijena obnove.
- **Probna razdoblja i promocije.** Jedno probno razdoblje ili promotivna ponuda po osobi ili poslovnom subjektu. Možemo povući ili odbiti ponudu ako sumnjamo na zloupotrebu (više računa, lažni identiteti, zaobiđena ograničenja).
{{/if}}{{#if feature.credits}}- **Krediti.** Unaprijed plaćeni krediti, tokeni ili valuta unutar aplikacije ograničena su licencija za korištenje Usluga, a ne novac; nemaju novčanu vrijednost, neprenosivi su, ne mogu se unovčiti niti njima trgovati te mogu isteći kako je navedeno pri kupnji. Neiskorišteni krediti propadaju kada se račun zatvori zbog kršenja; u drugim slučajevima povrati slijede pravila u nastavku i primjenjivo pravo.{{#if feature.game}} Virtualne predmete u igrama uređuju [Pravila igre i politika virtualnih predmeta]({{url.game_rules}}).{{/if}}
{{/if}}- **Promjene cijena.** Cijene možemo mijenjati s učinkom za budućnost, uz najmanje {{policy.notice_days}} dana obavijesti. Ako se ne slažete, otkažite prije nego što promjena stupi na snagu.
- **Kašnjenje ili neuspjelo plaćanje.** Možemo ponoviti naplatu, suspendirati ili smanjiti razinu računa i naplatiti razumne troškove naplate te zakonske kamate na dospjele račune poslovnih korisnika. Usluge se vraćaju čim se podmire dugovanja.
- **Povrati naplate i prijevare.** Pokretanje povrata naplate ili spora oko plaćanja bez prethodnog kontaktiranja nas na [{{company.email}}](mailto:{{company.email}}), kao i prijevarna ili neovlaštena plaćanja, mogu dovesti do trenutne suspenzije, gubitka pristupa sadržaju te naplate osporenog iznosa i naših troškova obrade.
- **Povrati novca.** Osim ako vam zakon ne daje pravo ili mi u pisanom obliku ne navedemo drukčije, plaćene naknade nisu povratne, uključujući za djelomična razdoblja i neiskorištene značajke, a povrat novca ne pripada ako suspendiramo ili raskinemo vaš račun zbog kršenja.
{{#if feature.consumers}}- **Otkazivanje, odustanak i povrat novca.** Prava potrošača na odustanak, način otkazivanja i trenutak u kojem vraćamo novac utvrđeni su u [Pravilima povrata novca i otkaza]({{url.refunds}}), koja je dio ovih Uvjeta. Za digitalni sadržaj ili usluge koje se pružaju odmah na vaš zahtjev tražimo vašu izričitu privolu i potvrdu pri plaćanju, kako to zakon zahtijeva.
{{/if}}{{else}}
Usluge se trenutno nude besplatno. U budućnosti možemo uvesti plaćene značajke; bit će vam jasno predstavljene i nikada vam se neće naplatiti bez vašeg pristanka.
{{/if}}

## 10. API, integracije i usluge trećih strana {#integrations}

{{#if feature.api}}
Pristup API-ju podliježe ovim Uvjetima, dokumentaciji i ograničenjima učestalosti zahtjeva. Morate zaštititi svoje API ključeve i vjerodajnice, odgovorni ste za sve pozive upućene s njima te ih ne smijete dijeliti, ugrađivati u javni kôd niti koristiti za preprodaju pristupa. Možemo rotirati, ograničiti ili opozvati ključeve te mijenjati ili povući verzije API-ja uz razumnu obavijest (kraću ako je to potrebno iz sigurnosnih ili pravnih razloga). Ne smijete koristiti API na način koji umanjuje kvalitetu Usluga za druge ili pokušava zaobići ograničenja, primjerice korištenjem mnogo ključeva ili računa.

{{/if}}
Usluge mogu raditi s proizvodima, web-stranicama i uslugama trećih strana koje ne kontroliramo. Vaše korištenje njima uređeno je njihovim uvjetima. Nismo odgovorni za njih, za njihovu dostupnost ili promjene niti za način na koji koriste podatke koje odlučite s njima podijeliti. Integraciju možemo u bilo kojem trenutku prestati podržavati.

## 11. Beta i besplatne značajke {#beta}

Značajke označene kao alfa, beta, pretpregled, eksperimentalno ili slično te besplatne razine pružaju se „kakve jesu“, mogu se promijeniti ili povući u bilo kojem trenutku, mogu biti manje pouzdane i isključene su iz svake obveze razine usluge. Nemojte se oslanjati na njih za kritične potrebe.

## 12. Intelektualno vlasništvo {#ip}

Usluge, uključujući softver, dizajn, tekst, grafiku, podatke, oznake, logotipe i dokumentaciju, u vlasništvu su nas ili naših davatelja licencija te su zaštićeni autorskim pravom, zaštitnim znakovima i drugim propisima. Ništa u ovim Uvjetima ne prenosi na vas vlasništvo, a pravo na korištenje naših naziva ili oznaka ne dodjeljuje se osim koliko je potrebno za korištenje Usluga.

**Povratne informacije.** Ako nam pošaljete prijedloge ili ideje, dajete nam trajnu, neopozivu, svjetsku licenciju bez naknade, s pravom podlicenciranja, za njihovo korištenje bez ograničenja i bez navođenja autorstva, u mjeri u kojoj to zakon dopušta. Nemamo obvezu postupiti po povratnim informacijama.

Obavijesti o autorskim pravima i nezakonitom sadržaju: vidi [Obavijesti o autorskim pravima i nezakonitom sadržaju]({{url.copyright}}).

## 13. Povjerljivost (poslovni korisnici) {#confidentiality}

Svaka će stranka čuvati u tajnosti nejavne poslovne i tehničke informacije druge stranke, koristiti ih samo za izvršavanje ili ostvarivanje prava prema ovim Uvjetima i štititi ih razumnom pažnjom, osim za informacije koje su javne bez krivnje primatelja, koje su već bile poznate, koje su neovisno razvijene ili koje zakon mora otkriti (uz prethodnu obavijest gdje je to zakonito). Obveza traje tri godine nakon prestanka ovih Uvjeta, a za poslovne tajne neograničeno.

## 14. Privatnost i zaštita podataka {#privacy}

Naša [Politika privatnosti]({{url.privacy}}) objašnjava kako obrađujemo osobne podatke. {{#if feature.processor_role}}Kada osobne podatke obrađujemo za vas kao vaš izvršitelj obrade, primjenjuje se [Dodatak o obradi podataka]({{url.dpa}}), koji čini dio ovih Uvjeta.{{/if}} Morate se pridržavati propisa o zaštiti podataka pri korištenju Usluga i ne smijete dostavljati podatke posebnih kategorija ili regulirane podatke (zdravlje, podatke o platnim karticama, državne identifikacijske brojeve, podatke o djeci), osim ako to ne dopušta izričito značajka ili ugovor.

## 15. Dostupnost, podrška i promjene {#availability}

Nastojimo osigurati visoku dostupnost, ali ne jamčimo neprekinut ili besprijekoran rad. Možemo provoditi održavanje (uz obavijest gdje je to razumno moguće) te možemo mijenjati, dodavati ili uklanjati značajke. Ako značajno smanjimo plaćenu značajku tijekom unaprijed plaćenog razdoblja, dat ćemo vam najmanje {{policy.notice_days}} dana obavijesti i, ako ne možete razumno nastaviti, razmjerni povrat novca za zahvaćeno unaprijed plaćeno razdoblje. Podrška se pruža na [{{company.email}}](mailto:{{company.email}}) na temelju razumnih napora, osim ako vaš paket ne uključuje ugovor o razini usluge (SLA).

## 16. Izmjene ovih Uvjeta {#changes}

Ove Uvjete možemo ažurirati iz pravnih, sigurnosnih, proizvodnih ili poslovnih razloga. Za bitne izmjene dat ćemo najmanje **{{policy.notice_days}} dana** obavijesti e-poštom ili unutar Usluga prije nego što stupe na snagu za vas. Ako se ne slažete, možete prestati koristiti Usluge i zatvoriti račun prije datuma stupanja na snagu te (za plaćene pakete) zatražiti razmjerni povrat unaprijed plaćenih naknada za razdoblje nakon tog datuma. Nastavak korištenja Usluga nakon datuma stupanja na snagu znači da prihvaćate ažurirane Uvjete. Izmjene koje zahtijeva zakon ili koje ništa ne smanjuju i ne dodaju nikakvu obvezu mogu stupiti na snagu odmah. Izmjene se ne primjenjuju na sporove koji su već u tijeku.

## 17. Suspenzija i raskid {#termination}

**Od vaše strane.** Možete prestati koristiti Usluge i zatvoriti račun u bilo kojem trenutku u svojim postavkama ili e-poštom. Plaćene naknade ne vraćaju se, osim ako odjeljak 9 ili zakon ne određuje drukčije.

**Od naše strane, iz razloga pogodnosti.** Možemo okončati plaćene pakete uz {{policy.notice_days}} dana obavijesti (uz razmjerni povrat unaprijed plaćenih naknada) i možemo ukinuti besplatne usluge uz razumnu obavijest.

**Od naše strane, zbog razloga.** Možemo, s prethodnom obavijesti ili bez nje i u mjeri koju zakon dopušta, ograničiti, suspendirati ili raskinuti vaš pristup, ukloniti sadržaj ili odmah zatvoriti vaš račun ako:

- kršite ove Uvjete ili Pravila prihvatljive uporabe (odgovor je razmjeran težini, ponavljanju i riziku);
- razumno vjerujemo da vaše korištenje predstavlja sigurnosni, pravni, regulatorni, reputacijski ili financijski rizik za nas, druge korisnike ili treće strane;
- ne platite na vrijeme;
- sud, tijelo vlasti ili primjenjivo pravo to zahtijeva; ili
- vaš račun izgleda ugrožen, prijevaran ili napušten.

Tamo gdje je to praktično i zakonito obavijestit ćemo vas zašto i dati vam priliku da odgovorite ili prvo otklonite problem. Gdje to zahtijeva zakon (primjerice EU Digital Services Act), dostavljamo obrazloženje i omogućujemo žalbu. Ako vas suspendiramo ili raskinemo zbog kršenja, naknade se ne vraćaju, a dospjeli iznosi ostaju plativi.

**Učinci.** Raskidom vaša licencija prestaje; morate prestati koristiti Usluge; a na zahtjev u roku od **{{policy.retention_account_days}} dana** učinit ćemo Vaš sadržaj dostupnim za izvoz tamo gdje je to tehnički izvedivo (ne tamo gdje je to nezakonito ili bi naštetilo drugima). Nakon tog razdoblja brišemo ga kako je opisano u [Politici privatnosti]({{url.privacy}}). Odjeljci koji po svojoj naravi moraju ostati na snazi ostaju, uključujući 4, 6 (ograničenja licencije i vaša jamstva), 9 (dospjeli iznosi), 12, 13, 17–24 i 26.

## 18. Jamstva i odricanje od odgovornosti {#disclaimer}

Usluge pružamo s razumnom vještinom i pažnjom. **Inače, u najvećoj mjeri koju zakon dopušta, Usluge se pružaju „kakve jesu“ i „kako su dostupne“, a odričemo se svih drugih jamstava, izričitih ili podrazumijevanih,** uključujući tržišnu prikladnost, prikladnost za određenu svrhu, nepovredu prava, točnost i dostupnost te jamstva da će Usluge biti sigurne, bez pogrešaka, neprekinute ili bez štetnih komponenti. Ne jamčimo rezultate, sadržaj trećih strana niti rezultate koje dobijete. Usluge nisu namijenjene za upotrebu u okruženjima visokog rizika u kojima bi kvar mogao uzrokovati smrt, tjelesne ozljede ili tešku štetu (primjerice medicinski uređaji, zrakoplovstvo, nuklearni ili sustavi održavanja života), i ne smijete ih tako koristiti.

{{#if feature.consumers}}Ako ste potrošač, zadržavate sva zakonska prava koja se ne mogu isključiti, kao što su zakonska jamstva i pravna sredstva za digitalni sadržaj i usluge prema pravu EU-a i Ujedinjene Kraljevine te potrošačka jamstva prema Australian Consumer Law i sličnim zakonima drugdje.{{/if}}

## 19. Ograničenje odgovornosti {#liability}

Ništa u ovim Uvjetima ne isključuje niti ne ograničava odgovornost koju zakon ne dopušta isključiti ili ograničiti, uključujući odgovornost za smrt ili tjelesne ozljede, prijevaru ili namjerno nedolično ponašanje, grubu nepažnju ili (za potrošače) obvezna zakonska pravna sredstva.

Podložno tome, **u najvećoj mjeri koju zakon dopušta** i za poslovne korisnike:

1. nismo odgovorni za neizravne, slučajne, posebne, posljedične, primjerne ili kaznene štete niti za izgubljenu dobit, prihod, poslovanje, dobar glas, očekivane uštede ili podatke, koji proizlaze iz Usluga ili ovih Uvjeta ili su s njima povezani, čak i ako smo bili upozoreni na mogućnost takve štete; i
2. naša ukupna zbrojna odgovornost za sve zahtjeve ograničena je na veći od sljedeća dva iznosa: (a) naknade koje ste nam platili za Usluge u **{{policy.liability_cap_months}} mjeseci** prije događaja koji je prvi doveo do zahtjeva i (b) EUR 100.

{{#if feature.consumers}}Za potrošače odgovaramo za predvidivu štetu ili gubitak koji nastanu našim kršenjem ili nepažnjom, ali ne i za gubitak koji nije bio predvidiv niti za gubitak povezan s poslovanjem.{{/if}}

Nismo odgovorni za neispunjenje ili kašnjenje uzrokovano događajima izvan naše razumne kontrole (odjeljak 24). Besplatne usluge pružaju se bez odgovornosti koja nadilazi ono što zahtijeva zakon. Ta se ograničenja primjenjuju bez obzira na to kako odgovornost nastaje (ugovor, deliktna odgovornost uključujući nepažnju ili drukčije) i čak ako pravni lijek ne ispuni svoju bitnu svrhu.

## 20. Naknada štete {#indemnity}

Ako ste poslovni korisnik, branit ćete, obeštetiti i držati bez štete {{company.name}}, njezina povezana društva, službenike, zaposlenike i zastupnike od potraživanja, šteta, gubitaka, kazni i troškova (uključujući razumne pravne troškove) koji proizlaze iz (a) Vašeg sadržaja ili vaših podataka, (b) vašeg kršenja ovih Uvjeta ili zakona, ili kršenja od strane vaših Krajnjih korisnika, (c) vaše zloupotrebe Usluga ili (d) spora između vas i treće strane. Odmah ćemo vas obavijestiti o svakom potraživanju, omogućiti vam da vodite obranu (mi možemo sudjelovati o vlastitom trošku), a vi ne smijete nagoditi potraživanje koje za nas priznaje krivnju bez našeg pristanka. {{#if feature.consumers}}Potrošači odgovaraju samo za gubitak koji uzrokuju vlastitim kršenjem, kako to propisuje zakon.{{/if}}

## 21. Pravni lijekovi zbog zloupotrebe {#remedies}

Osim ostalih prava i u mjeri koju zakon dopušta:

- **Sudska zabrana.** Priznajete da kršenje odjeljaka 4, 5 ili 13 može uzrokovati štetu koju se naknadom štete ne može u cijelosti otkloniti te možemo tražiti sudsku zabranu ili drugi pravični pravni lijek bez dokazivanja stvarne štete i bez polaganja jamstva.
- **Troškovi zloupotrebe.** Ako vaša zloupotreba za nas uzrokuje troškove (dodatna infrastruktura, odgovor na incident, istraga, povrati naplate, regulatorne kazne ili potraživanja trećih strana), nadoknadit ćete razumne, dokumentirane troškove.
- **Dokazi i suradnja.** Možemo čuvati zapise i sadržaj povezan s sumnjivom zloupotrebom te ih možemo otkriti pogođenim stranama, platformama, tijelima za provedbu zakona ili regulatorima ako to zakon dopušta. Razumno surađujete s našim istragama.
- **Prijavljivanje.** Možemo prijaviti nezakonite aktivnosti (uključujući seksualno zlostavljanje djece, prijevaru, prijetnje, zlonamjerni softver i napade na sustave) tijelima vlasti i pogođenim stranama, a to ćemo učiniti kada to zahtijeva zakon.
- **Zadržavanje isplata.** Možemo zadržati, zamrznuti ili prebiti iznose koje vam dugujemo (primjerice isplate) s iznosima koje nam dugujete ili koji proizlaze iz zloupotrebe, uz poštovanje zakona.

## 22. Izvoz, sankcije i suzbijanje korupcije {#export}

Ne smijete koristiti, izvoziti ili ponovno izvoziti Usluge kršeći primjenjive propise o kontroli izvoza i sankcijama, uključujući one EU-a, Sjedinjenih Američkih Država, Ujedinjene Kraljevine i UN-a, niti ih koristiti za osobe ili zemlje na koje se primjenjuju sveobuhvatne sankcije ili koje su njima obuhvaćene. Potvrđujete da vi i vaši korisnici niste na nijednom popisu sankcioniranih ili ograničenih osoba. Nećete nuditi niti davati bilo što vrijedno kako biste neprimjereno utjecali na bilo koju osobu u vezi s Uslugama.

## 23. Mjerodavno pravo i sporovi {#law}

Ovi Uvjeti i svaki spor ili potraživanje koji proizlaze iz njih ili su s njima povezani, odnosno s Uslugama (uključujući izvanugovorne sporove), uređeni su pravom **{{law.governing}}**, bez primjene pravila o sukobu zakona i isključujući Konvenciju UN-a o ugovorima o međunarodnoj prodaji robe.

**Prvo neformalno rješavanje.** Prije pokretanja formalnog postupka pišite na [{{company.legal_email}}](mailto:{{company.legal_email}}) s opisom spora i dopustite nam da ga u dobroj vjeri pokušamo riješiti najmanje 30 dana.

**Sudovi.** Osim ako obvezni zakon ne određuje drukčije, isključiva nadležnost je **{{law.venue}}**. Svaka stranka može tražiti hitnu sudsku zabranu pred bilo kojim nadležnim sudom.

{{#if feature.consumers}}**Potrošači.** Ako ste potrošač, zadržavate i pravo pokrenuti postupak pred sudovima države vašeg boravišta te se pozivati na obvezno zakonodavstvo o zaštiti potrošača tamo, a ništa u ovom odjeljku to ne uklanja. {{#if consumer_dispute}}Sudjelujemo u vansudskom rješavanju sporova pred {{consumer_dispute}}.{{/if}}
{{/if}}
**Rok (poslovni korisnici).** U mjeri u kojoj to zakon dopušta, svako potraživanje mora biti podneseno u roku od {{policy.claim_months}} mjeseci nakon što je nastao uzrok tužbe, inače se gubi.

**Bez grupnih tužbi (poslovni korisnici, gdje je to dopušteno).** Potraživanja se mogu podnijeti samo pojedinačno, a ne kao dio grupnog, kolektivnog ili predstavničkog postupka.

## 24. Viša sila {#force-majeure}

Nijedna stranka nije odgovorna za kašnjenje ili neispunjenje uzrokovano događajima izvan njezine razumne kontrole, uključujući prirodne katastrofe, rat, terorizam, građanske nemire, pandemiju, djelovanje državnih tijela, nestanak struje, kvar interneta ili telekomunikacija, kvarove u oblaku ili infrastrukturi drugih davatelja trećih strana, kibernetičke napade unatoč razumnim sigurnosnim mjerama, radne sporove (osim onih vlastitog osoblja stranke) ili nestašice opskrbe. Obveze plaćanja za već isporučene usluge ne prestaju. Ako takav događaj traje dulje od 60 dana, bilo koja stranka može raskinuti pogođene usluge.

## 25. Elektroničke komunikacije i obavijesti {#notices}

Pristajete na primanje obavijesti i ugovora elektroničkim putem. Obavijesti vam možemo dostaviti e-poštom na adresu vašeg računa, unutar Usluga ili objavom na našim web-stranicama. Obavijesti nama moraju se slati na [{{company.legal_email}}](mailto:{{company.legal_email}}) i na {{company.address}}. Obavijest se smatra primljenom 24 sata nakon što je e-pošta poslana bez povratne poruke o neisporuci te u trenutku kada je objavljena ili prikazana u Uslugama.

## 26. Opće odredbe {#general}

- **Cjelokupni sporazum.** Ovi Uvjeti i dokumenti na koje se oni pozivaju čine cjelokupni sporazum o njihovu predmetu i zamjenjuju prethodne dogovore. Niste se oslonili ni na jednu izjavu koja nije navedena u njima.
- **Djelomična nevaljanost.** Ako je odredba neprovediva, ograničava se na najmanji opseg potreban da bi bila provediva ili se zamjenjuje provedivom odredbom koja je najbliža njezinoj namjeni; ostatak ostaje na snazi.
- **Nema odricanja.** Nekorištenje prava nije odricanje od tog prava.
- **Ustupanje.** Ne smijete ustupiti niti prenijeti svoja prava ili obveze bez našeg pisanog pristanka. Ove Uvjete možemo ustupiti povezanom društvu ili pravnom slijedniku našeg poslovanja i o tome ćemo vas obavijestiti.
- **Odnos.** Stranke su neovisni izvođači. Ništa ne stvara partnerstvo, zastupništvo, radni odnos ili zajedničko ulaganje.
- **Treće strane.** Nitko drugi nema prava provoditi ove Uvjete, osim naših povezanih društava, službenika i zastupnika prema odjeljcima 19 i 20.
- **Jezik.** Prijevodi se pružaju radi praktičnosti; ako se razlikuju, prevladava engleska verzija, osim ako obvezni zakon ne zahtijeva drukčije.
- **Tumačenje.** Naslovi su radi praktičnosti. „Uključujući“ znači „uključujući bez ograničenja“.
- **Publicitet.** Možemo vas navesti kao klijenta s vašim logotipom, osim ako se e-poštom ne odjavite; potrošači se nikada ne navode.

## 27. Kontakt {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · matični broj {{company.reg_id}}{{/if}}{{#if company.tax_id}} · OIB {{company.tax_id}}{{/if}}
E-pošta [{{company.email}}](mailto:{{company.email}}) · Pravna služba [{{company.legal_email}}](mailto:{{company.legal_email}}) · Podrška [{{company.email}}](mailto:{{company.email}}) · Pogledajte i našu [Pravnu obavijest]({{url.impressum}}).
