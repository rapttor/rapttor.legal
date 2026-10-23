---
doc: terms
title: Uslovi korišćenja
version: 1.0.0
updated: 2026-10-23
lang: cnr
translation_of: 1.0.0
status: draft
summary: Ugovor između vas i {{product.name}} o korišćenju {{product.name}}.
---

# Uslovi korišćenja

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

## 1. Ugovor {#agreement}

Ovi Uslovi korišćenja („**Uslovi**”) predstavljaju obavezujući ugovor između vas i **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, registarski broj {{company.reg_id}}{{/if}} („**{{product.name}}**”, „mi”, „nas”), kojim se uređuje vaš pristup i korišćenje {{product.name}}, naših veb-sajtova, aplikacija, API-ja, dokumentacije i povezanih usluga („**Usluge**”).

Kreiranjem naloga, instaliranjem aplikacije ili na drugi način korišćenjem Usluga prihvatate ove Uslove i dokumente na koje se oni oslanjaju: [Politiku privatnosti]({{url.privacy}}), [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}), [Politiku kolačića]({{url.cookies}}){{#if feature.processor_role}}, [Aneks o obradi podataka]({{url.dpa}}) ako se primjenjuje{{/if}}{{#if feature.payments}}, [Politiku povraćaja novca i otkazivanja]({{url.refunds}}){{/if}}{{#if feature.game}}, [Pravila igre i politiku virtuelnih predmeta]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Uslove za aplikaciju]({{url.app_eula}}){{/if}} i svaki obrazac narudžbe ili uslove specifične za proizvod. Ako se ne slažete, nemojte koristiti Usluge.

Ako Usluge koristite u ime organizacije, potvrđujete da imate ovlašćenje da je obavežete, a pojam „vi” obuhvata i tu organizaciju. Ako uslovi specifični za proizvod ili potpisani ugovor budu u suprotnosti s ovim Uslovima, oni imaju prednost samo za taj proizvod ili tog korisnika.

{{#if feature.consumers}}
**Potrošači.** Ako Usluge koristite kao potrošač, obavezni propisi o zaštiti potrošača u zemlji vašeg prebivališta i dalje se primjenjuju, a ništa u ovim Uslovima ne ograničava ta prava. Odjeljci označeni sa *(poslovni korisnici)* primjenjuju se samo ako niste potrošač.
{{/if}}

## 2. Pravo na korišćenje {#eligibility}

Usluge možete koristiti samo ako:

1. {{#if feature.minors}}imate najmanje **{{policy.min_age}}** godina i, ako niste dostigli punoljetstvo u mjestu u kojem živite, imate saglasnost roditelja ili zakonskog staratelja koji u vaše ime prihvata ove Uslove i odgovara za vaše korišćenje i kupovine (možemo tražiti dokaz){{else}}imate najmanje **{{policy.min_age}}** godina i sposobni ste da zaključite obavezujući ugovor{{/if}};
2. korišćenje Usluga vam nije zabranjeno prema važećem zakonu, uključujući zakone o sankcijama i kontroli izvoza (odjeljak 22);
3. ranije niste bili isključeni iz Usluga zbog kršenja naših pravila, osim ako smo se pismeno saglasili da vas ponovo primimo; i
4. Usluge koristite zakonito u mjestu u kojem se nalazite.

Možemo u bilo kom trenutku tražiti dokaz o godinama, identitetu ili ovlašćenju, i možemo odbiti ili zatvoriti nalog koji ne prođe provjeru.

## 3. Nalozi i bezbjednost {#accounts}

- Dajte tačne i aktuelne podatke i ažurirajte ih. Jedno lice ili jedan subjekt, jedan nalog, osim ako se drukčije ne dogovorimo; otvaranje daljih naloga radi izbjegavanja ograničenja, limita, zabrane, probnog perioda ili pravila o cijenama je zabranjeno.
- Čuvajte svoje pristupne podatke u tajnosti. Nemojte dijeliti, prodavati, iznajmljivati niti prenositi svoj nalog. Svako korisničko mjesto namijenjeno je jednom imenovanom licu, osim ako plan ne određuje drukčije.
- Odgovorni ste za sve što se dešava pod vašim nalogom, uključujući radnje lica kojima ste dozvolili pristup ili koje niste spriječili da pristupe, dok nas ne obavijestite da je nalog ugrožen. Odmah nas obavijestite na [{{company.email}}](mailto:{{company.email}}) ako sumnjate na neovlašćen pristup.
- Možemo zahtijevati jaču autentifikaciju, resetovati pristupne podatke ili zaključati nalog za koji opravdano smatramo da je ugrožen ili zloupotrijebljen.
- Neaktivni besplatni nalozi mogu biti zatvoreni nakon prethodnog obavještenja na e-mail adresu koja je u evidenciji; plaćeni nalozi se ne zatvaraju zbog neaktivnosti.

## 4. Licenca i ograničenja {#licence}

Uz poštovanje ovih Uslova i plaćanje važećih naknada, dajemo vam ograničenu, opozivu, neekskluzivnu, neprenosivu i nepodlicencirajuću licencu za pristup Uslugama i njihovo korišćenje za vaše sopstvene interne lične ili poslovne svrhe tokom trajanja ugovora. Softver koji vam isporučujemo licencira se, a ne prodaje. Mi i naši davaoci licence zadržavamo sva prava koja nisu izričito dodijeljena.

Osim ako vam zakon ne daje pravo od kojeg se ne možete odreći, ne smijete i ne smijete dopustiti nikome da:

- kopira, mijenja, prevodi ili pravi izvedena djela Usluga;
- vrši reverzni inženjering, dekompajlira, rastavlja ili pokušava da dođe do izvornog koda, modela, težina, algoritama ili nejavnih API-ja;
- preprodaje, podlicencira, iznajmljuje, izdaje u zakup, hostuje kao uslugu za treća lica ili čini Usluge dostupnim trećim licima, osim vašim ovlašćenim korisnicima;
- zaobilazi tehnička ograničenja, licenciranje, mjerenje, kontrolu pristupa, ograničenja brzine ili sigurnosne funkcije;
- uklanja ili mijenja vlasničke napomene, navode autorstva ili napomene o licencama otvorenog koda;
- koristi Usluge ili njihove rezultate za izradu ili treniranje konkurentskog proizvoda, ili za objavljivanje rezultata poređenja performansi bez naše pisane saglasnosti{{#if feature.ai}}, ili za treniranje, dodatno podešavanje ili destilaciju AI modela na osnovu izlaza Usluga tamo gdje to zabranjujemo u dokumentaciji{{/if}};
- pristupa Uslugama automatskim sredstvima (botovi, skreperi, crawleri), osim preko našeg dokumentovanog API-ja i pod njegovim uslovima.

[Politika prihvatljivog korišćenja]({{url.acceptable_use}}) sadrži detaljnija pravila i čini dio ovih Uslova. Komponente otvorenog koda regulisane su sopstvenim licencama, koje za te komponente imaju prednost.

## 5. Prihvatljivo korišćenje i sprovođenje {#acceptable-use}

Odgovorni ste za svoje korišćenje Usluga i za ponašanje svih lica kojima dozvolite da ih koriste. Zloupotreba može naštetiti drugim korisnicima, trećim licima i nama, pa možemo postupiti kako je opisano u [Politici prihvatljivog korišćenja]({{url.acceptable_use}}) i odjeljku 17, uključujući uklanjanje sadržaja, ograničavanje funkcija, ograničavanje propusnosti, suspenziju ili raskid naloga, zadržavanje isplata, prijavu nadležnim organima i traženje pravnih lijekova prema odjeljku 21.

## 6. Vaš sadržaj {#your-content}

{{#if feature.ugc}}
Pojam „**vaš sadržaj**” označava sve što otpremite, pošaljete, objavite, povežete ili generišete putem Usluga{{#if feature.ai}}, uključujući upite i, u odnosu između vas i nas, rezultat koji dobijete{{/if}}.

- **Vlasništvo.** Zadržavate sva prava na vaš sadržaj. Mi ne stičemo nikakvo vlasništvo nad njim.
- **Licenca za nas.** Dajete nam svjetsku, neekskluzivnu, besplatnu licencu da čuvamo, skladištimo, umnožavamo, obrađujemo, prenosimo, prilagođavamo (radi formatiranja, sličica, prevoda i provjera bezbjednosti) i prikazujemo vaš sadržaj **samo koliko je potrebno za rad, obezbjeđenje, podršku i unapređenje Usluga i za sprovođenje ovih Uslova**, dok ga čuvate u Uslugama i za ograničene periode rezervnih kopija i pravnog zadržavanja nakon toga. Ako sadržaj učinite javnim, licenca se proteže i na prikazivanje publici koju odaberete. Ova licenca prestaje kada obrišete sadržaj ili nalog, uz poštovanje tih perioda i kopija koje su drugi korisnici zakonito primili.
- **Vaša obećanja.** Imate i zadržavate sva prava, saglasnosti i dozvole potrebne za podnošenje vašeg sadržaja i davanje ove licence, uključujući od bilo kojeg lica koje se na njemu može prepoznati; vaš sadržaj i naše korišćenje u skladu s ovim ne krše nijedan zakon ni prava nijednog lica (autorska prava, žigovi, privatnost, pravo na publicitet, povjerljivost, ugovori); i on je u skladu s [Politikom prihvatljivog korišćenja]({{url.acceptable_use}}).
- **Moderacija.** Nemamo opštu obavezu da pratimo vaš sadržaj, ali možemo pregledati, ukloniti, ograničiti ili odbiti sadržaj za koji opravdano smatramo da krši zakon, ove Uslove ili prava drugih, ili o kojem primimo valjano obavještenje (vidi [Obavještenja o autorskim pravima i nezakonitom sadržaju]({{url.copyright}})). Gdje se to zahtijeva (na primjer prema Aktu o digitalnim uslugama EU) obrazložićemo vam razloge i objasniti kako možete osporiti odluku.
- **Rezervne kopije.** Odgovorni ste za čuvanje sopstvenih kopija vašeg sadržaja. Osim ako plan izričito ne uključuje rezervne kopije ili čuvanje, ne obećavamo da ćemo vratiti obrisan ili izgubljen sadržaj.
- **Agregirani podaci.** Možemo koristiti podatke o upotrebi koji vas ne identifikuju niti otkrivaju vaš sadržaj, da bismo upravljali, obezbjeđivali i unapređivali Usluge.
{{else}}
Zadržavate sva prava na svemu što pošaljete Uslugama. Dajete nam ograničenu licencu potrebnu za obradu radi pružanja, obezbjeđivanja i podrške Usluga, i obećavate da imate pravo da to pošaljete. Odgovorni ste za čuvanje sopstvenih kopija.
{{/if}}

## 7. Ako Usluge koristite za pružanje usluga drugima {#end-users}

Ako Usluge koristite da biste nešto pružali svojim kupcima, korisnicima, zaposlenima ili drugim trećim licima („**Krajnji korisnici**”), vi ste isključivo odgovorni za njih: morate imati zakonit osnov, obavještenja i saglasnosti potrebne za svaki lični podatak koji prikupljate ili obrađujete, dogovoriti sopstvene uslove s njima, rješavati njihove zahtjeve i pritužbe, obezbijediti da poštuju [Politiku prihvatljivog korišćenja]({{url.acceptable_use}}) i ne davati obaveze u naše ime. Odgovorni ste za radnje i propuste Krajnjih korisnika kao da su vaši. Nemamo obaveza prema Krajnjim korisnicima.

## 8. Funkcije vještačke inteligencije {#ai}

{{#if feature.ai}}
- Rezultati se generišu automatski i mogu biti netačni, nepotpuni, uvredljivi, pristrasni ili slični rezultatima datim drugima. Prije nego što se oslonite na rezultat, morate ga procijeniti i preuzeti odgovornost za način na koji ga koristite.
- **Ne koristite funkcije vještačke inteligencije kao jedinu osnovu za odluke koje imaju pravne ili slično značajne posljedice po lica** (na primjer zapošljavanje, kreditiranje, stanovanje, osiguranje, obrazovanje, zdravstvenu zaštitu, sprovođenje zakona ili imigraciju) i ne koristite ih za medicinske, pravne ili finansijske savjete, ili savjete o bezbjednosti, bez kvalifikovane ljudske provjere.
- Morate obznaniti sadržaj koji je nastao ili izmijenjen uz pomoć vještačke inteligencije u mjeri u kojoj to zahtijeva zakon ili platforma na kojoj objavljujete (uključujući lažne snimke i sintetičke medije), i ne smijete predstavljati rezultat vještačke inteligencije kao ljudsko djelo tamo gdje bi to dovelo u zabludu.
- Ne smijete koristiti funkcije za bilo koju zabranjenu upotrebu iz [Politike prihvatljivog korišćenja]({{url.acceptable_use}}), niti pokušavati da zaobiđete sisteme bezbjednosti (uključujući napade ubacivanjem upita (prompt injection), džejlbrejkovanje ili napade izvlačenjem podataka protiv naših ili tuđih sistema).
- Provajderi koje koristimo mogu primjenjivati sopstvene politike upotrebe, pa možemo shodno tome ograničiti funkcije. Ne koristimo vaš sadržaj za treniranje modela opšte namjene, osim ako se ne opredijelite za to (vidi [Politiku privatnosti]({{url.privacy}})).
{{else}}
Usluge trenutno ne uključuju funkcije uz pomoć vještačke inteligencije. Ako ih dodamo, ažuriraćemo ove Uslove i obavijestiti vas prema odjeljku 16, a primjenjivaće se pravila za njih (tačnost, ljudska provjera, obznanjivanje, nema zabranjenih upotreba).
{{/if}}

## 9. Naknade i plaćanje {#fees}

{{#if feature.payments}}
- **Cijene i porezi.** Cijene se prikazuju prilikom kupovine i ne uključuju PDV, prodajne i slične poreze, osim ako nije navedeno drukčije; vi plaćate važeće poreze. Cijene za potrošače uključuju poreze koje propisuje zakon.
- **Plaćanje.** Ovlašćujete nas i našeg procesora plaćanja da naplatimo način plaćanja koji nam date za sve dospjele iznose, uključujući obnavljanja i naplate prema upotrebi. Obećavate da ste ovlašćeni da koristite taj način plaćanja i da održavate podatke ažurnim.
{{#if feature.subscriptions}}- **Pretplate.** Osim ako nije drukčije navedeno pri kupovini, pretplate se automatski obnavljaju na periode iste dužine dok se ne otkažu. Otkažite u bilo kojem trenutku u svom nalogu ili e-mailom prije datuma obnavljanja; otkazivanje stupa na snagu na kraju plaćenog perioda i ne vršimo proporcionalni obračun. Unaprijed vas obavještavamo, kako zakon zahtijeva, prije nego što se probni period pretvori u plaćeni ili prije nego što se promijeni cijena pri obnavljanju.
- **Probni periodi i promocije.** Jedna probna ili promotivna ponuda po licu ili preduzeću. Možemo povući ili odbiti ponudu ako sumnjamo na zloupotrebu (više naloga, lažni identiteti, zaobilaženje ograničenja).
{{/if}}{{#if feature.credits}}- **Krediti.** Unaprijed plaćeni krediti, tokeni ili valuta unutar aplikacije predstavljaju ograničenu licencu za korišćenje Usluga, a ne novac; nemaju novčanu vrijednost, neprenosivi su, ne mogu se unovčiti niti njima trgovati, i mogu isteći kako je navedeno pri kupovini. Neiskorišćeni krediti se gube kada se nalog zatvori zbog kršenja; u ostalim slučajevima povraćaj se vrši prema pravilima u nastavku i važećem zakonu.{{#if feature.game}} Virtuelni predmeti u igrama regulisani su [Pravilima igre i politikom virtuelnih predmeta]({{url.game_rules}}).{{/if}}
{{/if}}- **Promjene cijena.** Cijene možemo mijenjati za buduće periode uz najmanje {{policy.notice_days}} dana prethodnog obavještenja. Ako se ne slažete, otkažite prije nego što promjena stupi na snagu.
- **Kašnjenje ili neuspjelo plaćanje.** Možemo ponoviti naplatu, suspendovati nalog ili ga prebaciti na niži nivo i naplatiti razumne troškove naplate i zakonsku kamatu na dospjele poslovne fakture. Usluge se vraćaju kada se dug isplati.
- **Chargeback i prevara.** Pokretanje chargeback-a ili spora oko plaćanja bez prethodnog kontaktiranja s nama na [{{company.email}}](mailto:{{company.email}}), kao i prevarne ili neovlašćene uplate, mogu dovesti do trenutne suspenzije, gubitka pristupa sadržaju i naplate spornog iznosa i naših troškova obrade.
- **Povraćaj novca.** Osim ako vam zakon ne daje pravo ili mi drukčije ne navedemo pisano, plaćene naknade se ne vraćaju, uključujući za djelimične periode i neiskorišćene funkcije, a povraćaj novca ne duguje se ni ako suspendujemo ili raskinemo nalog zbog kršenja.
{{#if feature.consumers}}- **Otkazivanje, odustanak i povraćaj novca.** Prava potrošača na odustanak, način otkazivanja i trenutak kada vršimo povraćaj utvrđeni su u [Politici povraćaja novca i otkazivanja]({{url.refunds}}), koja čini dio ovih Uslova. Za digitalni sadržaj ili usluge koje se isporučuju odmah na vaš zahtjev tražimo vašu izričitu saglasnost i potvrdu pri plaćanju, kako zakon zahtijeva.
{{/if}}
{{else}}
Usluge se trenutno nude besplatno. Možemo uvesti plaćene funkcije u budućnosti; one će vam biti jasno predstavljene i nikada vam se neće naplatiti bez vaše saglasnosti.
{{/if}}

## 10. API, integracije i usluge trećih lica {#integrations}

{{#if feature.api}}
Pristup API-ju podliježe ovim Uslovima, dokumentaciji i eventualnim ograničenjima brzine. Morate štititi svoje API ključeve i pristupne podatke, odgovorni ste za sve pozive izvršene njima, i ne smijete ih dijeliti, ugrađivati u javni kod ili koristiti za preprodaju pristupa. Možemo rotirati, ograničiti ili opozvati ključeve i mijenjati ili ukidati verzije API-ja uz razumno obavještenje (kraće kada je to potrebno iz bezbjednosnih ili pravnih razloga). Ne smijete koristiti API na način koji narušava Usluge za druge ili pokušava da zaobiđe ograničenja, na primjer korišćenjem velikog broja ključeva ili naloga.

{{/if}}
Usluge mogu raditi s proizvodima, veb-sajtovima i uslugama trećih lica koje ne kontrolišemo. Vaše korišćenje njih podliježe njihovim uslovima. Nismo odgovorni za njih, za njihovu dostupnost ili izmjene, niti za način na koji koriste podatke koje odlučite da s njima podijelite. Možemo u bilo kojem trenutku prestati da podržavamo neku integraciju.

## 11. Beta i besplatne funkcije {#beta}

Funkcije označene kao alfa, beta, pregled (preview), eksperimentalne ili slične, kao i besplatni nivoi, pružaju se „onakvi kakvi jesu”, mogu se promijeniti ili povući u bilo kojem trenutku, mogu biti manje pouzdani i isključeni su iz svake obaveze u pogledu nivoa usluge. Nemojte se oslanjati na njih u kritične svrhe.

## 12. Intelektualna svojina {#ip}

Usluge, uključujući softver, dizajn, tekst, grafiku, podatke, žigove, logotipe i dokumentaciju, u vlasništvu su nas ili naših davalaca licence i zaštićeni su autorskim pravom, žigovima i drugim propisima. Ništa u ovim Uslovima ne prenosi na vas bilo kakvo vlasništvo, i ne dodjeljuje se nikakvo pravo na korišćenje naših naziva ili žigova, osim onog koje je potrebno za korišćenje Usluga.

**Povratne informacije.** Ako nam pošaljete prijedloge ili ideje, dajete nam trajnu, neopozivu, svjetsku, besplatnu licencu, koja se može podlicencirati, da ih koristimo bez ograničenja i bez navođenja autora, u mjeri u kojoj to dozvoljava zakon. Nemamo obavezu da postupamo po povratnim informacijama.

Obavještenja o autorskim pravima i nezakonitom sadržaju: vidi [Obavještenja o autorskim pravima i nezakonitom sadržaju]({{url.copyright}}).

## 13. Povjerljivost (poslovni korisnici) {#confidentiality}

Svaka strana će čuvati u tajnosti nejavne poslovne i tehničke informacije druge strane, koristiti ih samo radi izvršenja ili ostvarivanja prava prema ovim Uslovima i štititi ih s razumnom pažnjom, osim za informacije koje su javne bez krivice primaoca, koje su već bile poznate, koje su nezavisno razvijene ili koje moraju biti otkrivene po zakonu (uz prethodno obavještenje, gdje je to zakonom dozvoljeno). Ova obaveza traje tri godine nakon prestanka ovih Uslova, a za poslovne tajne traje neograničeno.

## 14. Privatnost i zaštita podataka {#privacy}

Naša [Politika privatnosti]({{url.privacy}}) objašnjava kako obrađujemo lične podatke. {{#if feature.processor_role}}Kada obrađujemo lične podatke za vas kao vaš obrađivač, primjenjuje se [Aneks o obradi podataka]({{url.dpa}}) i čini dio ovih Uslova.{{/if}} Morate poštovati propise o zaštiti podataka u korišćenju Usluga i ne smijete dostavljati podatke posebnih kategorija ili regulisane podatke (zdravlje, podatke o platnim karticama, državne identifikatore, podatke o djeci), osim ako to funkcija ili ugovor izričito ne dozvoljava.

## 15. Dostupnost, podrška i izmjene {#availability}

Težimo visokoj dostupnosti, ali ne garantujemo neprekidan ili bezgrešan rad. Možemo vršiti održavanje (uz obavještenje gdje je to razumno moguće) i možemo mijenjati, dodavati ili uklanjati funkcije. Ako značajno smanjimo plaćenu funkciju tokom unaprijed plaćenog perioda, dajemo vam najmanje {{policy.notice_days}} dana obavještenja i, ako ne možete razumno nastaviti, proporcionalni povraćaj novca za zahvaćeni unaprijed plaćeni period. Podrška se pruža na adresi [{{company.email}}](mailto:{{company.email}}) na principu razumnih napora, osim ako vaš plan ne uključuje ugovor o nivou usluge.

## 16. Izmjene ovih Uslova {#changes}

Ove Uslove možemo ažurirati iz pravnih, bezbjednosnih, proizvodnih ili poslovnih razloga. Za značajne izmjene dajemo najmanje **{{policy.notice_days}} dana** obavještenja e-mailom ili u Uslugama prije nego što se primijene na vas. Ako se ne slažete, možete prestati da koristite Usluge i zatvoriti nalog prije datuma stupanja na snagu i (za plaćene planove) zatražiti proporcionalni povraćaj unaprijed plaćenih naknada za period nakon tog datuma. Nastavak korišćenja Usluga nakon datuma stupanja na snagu znači da prihvatate izmijenjene Uslove. Izmjene koje zahtijeva zakon, ili koje ne umanjuju vaša prava i ne uvode nove obaveze, mogu stupiti na snagu odmah. Izmjene se ne primjenjuju na sporove koji su već pokrenuti.

## 17. Suspenzija i raskid {#termination}

**Od vaše strane.** Možete prestati da koristite Usluge i zatvoriti nalog u bilo kojem trenutku u podešavanjima ili e-mailom. Plaćene naknade se ne vraćaju, osim ako odjeljak 9 ili zakon ne predviđa drukčije.

**Od naše strane, iz razloga pogodnosti.** Možemo okončati plaćene planove uz {{policy.notice_days}} dana obavještenja (uz proporcionalni povraćaj unaprijed plaćenih naknada), i možemo ukinuti besplatne usluge uz razumno obavještenje.

**Od naše strane, zbog razloga.** Možemo, s prethodnim obavještenjem ili bez njega i u mjeri koju dozvoljava zakon, ograničiti, suspendovati ili raskinuti vaš pristup, ukloniti sadržaj ili odmah zatvoriti nalog ako:

- kršite ove Uslove ili Politiku prihvatljivog korišćenja (odgovor je srazmjeran ozbiljnosti, ponavljanju i riziku);
- opravdano smatramo da vaše korišćenje stvara bezbjednosni, pravni, regulatorni, reputacioni ili finansijski rizik za nas, druge korisnike ili treća lica;
- ne platite na vrijeme;
- sud, organ ili važeći zakon to zahtijeva; ili
- vaš nalog izgleda ugrožen, prevaran ili napušten.

Gdje je to praktično i zakonito, reći ćemo vam zašto i dati vam priliku da odgovorite ili prvo otklonite problem, a gdje zakon to zahtijeva (na primjer Akt o digitalnim uslugama EU) dostavljamo obrazloženje i mogućnost žalbe. Ako vas suspendujemo ili raskinemo zbog kršenja, naknade se ne vraćaju i iznosi koji dospijevaju ostaju plativi.

**Posljedice.** Nakon raskida vaša licenca prestaje; morate prestati da koristite Usluge; i, na zahtjev podnijet u roku od **{{policy.retention_account_days}} dana**, učinićemo vaš sadržaj dostupnim za izvoz tamo gdje je to tehnički izvodljivo (ne tamo gdje je to nezakonito ili bi naštetilo drugima). Nakon tog perioda brišemo ga na način opisan u [Politici privatnosti]({{url.privacy}}). Odjeljci koji po svojoj prirodi treba da opstanu ostaju na snazi, uključujući odjeljke 4, 6 (ograničenja licence i vaša obećanja), 9 (dospjeli iznosi), 12, 13, 17-24 i 26.

## 18. Garancije i odricanje od odgovornosti {#disclaimer}

Usluge pružamo uz razumnu vještinu i pažnju. **Inače, u najvećoj mjeri koju dozvoljava zakon, Usluge se pružaju „onakve kakve jesu” i „kakve su dostupne”, a odričemo se svih drugih garancija, izričitih ili podrazumijevanih,** uključujući prodajivost, podobnost za određenu svrhu, nepovredu prava, tačnost, dostupnost i to da će Usluge biti bezbjedne, bez grešaka, neprekidne ili bez štetnih komponenti. Ne garantujemo rezultate, sadržaj trećih lica niti rezultate koje dobijete. Usluge nisu namijenjene za upotrebu u okruženjima visokog rizika u kojima bi kvar mogao izazvati smrt, tjelesne povrede ili ozbiljnu štetu (na primjer medicinski uređaji, avijacija, nuklearni ili sistemi za održavanje života), i ne smijete ih tako koristiti.

{{#if feature.consumers}}Ako ste potrošač, zadržavate sva zakonska prava koja se ne mogu isključiti, kao što su zakonske garancije i pravni lijekovi za digitalni sadržaj i usluge prema zakonima EU i Ujedinjenog Kraljevstva, kao i garancije potrošačima prema Australian Consumer Law i sličnim zakonima drugdje.{{/if}}

## 19. Ograničenje odgovornosti {#liability}

Ništa u ovim Uslovima ne isključuje niti ograničava odgovornost koja se po zakonu ne može isključiti ili ograničiti, uključujući odgovornost za smrt ili tjelesnu povredu, prevaru ili namjerno protivpravno ponašanje, krajnji nemar, ili (za potrošače) obavezne zakonske pravne lijekove.

Uz to, **u najvećoj mjeri koju dozvoljava zakon** i za poslovne korisnike:

1. nismo odgovorni za indirektnu, slučajnu, posebnu, posljedičnu, primjernu ili kaznenu štetu, niti za izgubljenu dobit, prihod, posao, dobru reputaciju, očekivane uštede ili podatke, koji proističu iz Usluga ili ovih Uslova ili su s njima povezani, čak i ako smo bili upozoreni na tu mogućnost; i
2. naša ukupna zbirna odgovornost za sve zahtjeve ograničena je na veći od sljedeća dva iznosa: (a) naknada koje ste nam platili za Usluge u **{{policy.liability_cap_months}} mjeseci** prije događaja koji je prvi doveo do zahtjeva i (b) 100 EUR.

{{#if feature.consumers}}Za potrošače odgovaramo za predvidivu štetu koju prouzrokuje naše kršenje ili nemar, ali ne i za gubitak koji nije bio predvidiv, niti za poslovni gubitak.{{/if}}

Nismo odgovorni za neuspjeh ili kašnjenje izazvano događajima van naše razumne kontrole (odjeljak 24). Besplatne usluge pružaju se bez odgovornosti veće od one koju propisuje zakon. Ova ograničenja primjenjuju se bez obzira na to kako odgovornost nastane (ugovor, delikt uključujući nemar, ili na drugi način) i čak i ako pravni lijek izgubi svoju suštinsku svrhu.

## 20. Obeštećenje {#indemnity}

Ako ste poslovni korisnik, braniće te, obeštetiti i držati bez štete {{company.name}}, njegova povezana lica, službenike, zaposlene i zastupnike od zahtjeva, šteta, gubitaka, kazni i troškova (uključujući razumne advokatske honorare) koji proističu iz (a) vašeg sadržaja ili vaših podataka, (b) kršenja ovih Uslova ili zakona od strane vas ili vaših Krajnjih korisnika, (c) vaše zloupotrebe Usluga, ili (d) spora između vas i trećeg lica. Odmah ćemo vas obavijestiti o svakom zahtjevu, prepustiti vam kontrolu nad odbranom (možemo učestvovati o svom trošku), i ne smijete poravnati zahtjev koji priznaje našu krivicu bez naše saglasnosti. {{#if feature.consumers}}Potrošači odgovaraju samo za gubitak koji sami prouzrokuju svojim kršenjem, kako zakon predviđa.{{/if}}

## 21. Pravni lijekovi za zloupotrebu {#remedies}

Pored ostalih prava i u mjeri koju dozvoljava zakon:

- **Sudska zabrana.** Priznajete da kršenje odjeljaka 4, 5 ili 13 može prouzrokovati štetu koju naknada štete ne može u potpunosti nadoknaditi, i možemo tražiti sudsku zabranu ili drugi pravični lijek bez dokazivanja stvarne štete i bez polaganja jemstva.
- **Troškovi zloupotrebe.** Ako vaša zloupotreba nama prouzrokuje troškove (dodatna infrastruktura, odgovor na incident, istraga, chargeback-ovi, regulatorne kazne ili zahtjevi trećih lica), nadoknadićete razumne, dokumentovane troškove.
- **Dokazi i saradnja.** Možemo čuvati zapise i sadržaj povezan s sumnjivom zloupotrebom i možemo ih otkriti zahvaćenim stranama, platformama, organima za sprovođenje zakona ili regulatorima, gdje to zakon dozvoljava. Razumno sarađujte s našim istragama.
- **Prijavljivanje.** Možemo prijaviti nezakonite aktivnosti (uključujući materijal o seksualnom zlostavljanju djece, prevare, prijetnje, zlonamjerni softver i napade na sisteme) nadležnim organima i zahvaćenim stranama, i to ćemo učiniti gdje to zakon zahtijeva.
- **Zadržavanje.** Možemo zadržati, zamrznuti ili prebiti iznose koje vam dugujemo (na primjer isplate) protiv iznosa koje vi dugujete nama ili koji proističu iz zloupotrebe, u skladu sa zakonom.

## 22. Izvoz, sankcije i borba protiv korupcije {#export}

Ne smijete koristiti, izvoziti ili reizvoziti Usluge suprotno važećim propisima o kontroli izvoza i sankcijama, uključujući one EU, Sjedinjenih Američkih Država, Ujedinjenog Kraljevstva i UN, niti ih koristiti za lica ili države koje su pod sveobuhvatnim sankcijama ili za njih. Potvrđujete da vi i vaši korisnici niste na nijednoj listi sankcija ili lica s ograničenjima. Nećete nuditi niti davati bilo šta vrijedno kako biste nepropisno uticali na bilo koje lice u vezi s Uslugama.

## 23. Mjerodavno pravo i sporovi {#law}

Ovi Uslovi i svaki spor ili zahtjev koji proističe iz njih, ili je s njima povezan, odnosno povezan s Uslugama (uključujući vanugovorne sporove), uređeni su pravom **{{law.governing}}**, bez obzira na pravila o sukobu zakona, i isključujući Konvenciju UN o ugovorima o međunarodnoj prodaji robe.

**Prethodno neformalno rješavanje.** Prije pokretanja formalnog postupka, pišite na [{{company.legal_email}}](mailto:{{company.legal_email}}) s opisom spora i dozvolite nam da pokušamo da ga riješimo u dobroj vjeri, najmanje 30 dana.

**Sudovi.** Osim ako obavezan zakon ne određuje drukčije, isključiva nadležnost je **{{law.venue}}**. Svaka strana može zatražiti hitnu sudsku zabranu pred bilo kojim nadležnim sudom.

{{#if feature.consumers}}**Potrošači.** Ako ste potrošač, zadržavate i pravo da pokrenete postupak pred sudovima zemlje vašeg prebivališta i da se oslonite na obavezne propise o zaštiti potrošača tamo, a ništa u ovom odjeljku to ne uklanja. {{#if consumer_dispute}}Učestvujemo u vansudskom rješavanju sporova pred {{consumer_dispute}}.{{/if}}
{{/if}}
**Rok (poslovni korisnici).** U mjeri u kojoj to dozvoljava zakon, svaki zahtjev mora biti podnesen u roku od {{policy.claim_months}} mjeseci nakon što je nastao uzrok tužbe, inače se gubi.

**Bez kolektivnih tužbi (poslovni korisnici, gdje je to dozvoljeno).** Zahtjevi se mogu podnositi samo pojedinačno, a ne u okviru grupne, kolektivne ili predstavničke tužbe.

## 24. Viša sila {#force-majeure}

Nijedna strana nije odgovorna za kašnjenje ili neuspjeh uzrokovan događajima van njene razumne kontrole, uključujući prirodnu katastrofu, rat, terorizam, građanske nemire, pandemiju, akte državnih organa, nestanak struje, interneta ili telekomunikacija, otkaze oblaka ili druge infrastrukture trećih lica, sajber napade uprkos razumnim bezbjednosnim mjerama, radne sporove (osim onih u vlastitom osoblju strane) ili nestašice u snabdijevanju. Obaveze plaćanja za već isporučene usluge ne prestaju. Ako takav događaj traje duže od 60 dana, svaka strana može raskinuti pogođene usluge.

## 25. Elektronska komunikacija i obavještenja {#notices}

Pristajete da primate obavještenja i ugovore elektronskim putem. Obavještenja vam možemo dostaviti e-mailom na adresu iz vašeg naloga, u Uslugama ili objavom na našem veb-sajtu. Obavještenja nama moraju se slati na [{{company.legal_email}}](mailto:{{company.legal_email}}) i na {{company.address}}. Obavještenje se smatra primljenim 24 sata nakon što je e-mail poslat bez povratne poruke o neisporuci, odnosno kada je objavljeno ili prikazano u Uslugama.

## 26. Opšte odredbe {#general}

- **Cjelokupan sporazum.** Ovi Uslovi i dokumenti na koje oni upućuju predstavljaju cjelokupan sporazum o njihovom predmetu i zamjenjuju ranije dogovore. Niste se oslonili ni na jednu izjavu koja nije navedena u njima.
- **Djelimična nevažnost.** Ako odredba nije izvršiva, ograničava se na najmanji obim neophodan za to ili se zamjenjuje izvršivom odredbom koja je najbliža njenoj namjeri; ostatak ostaje na snazi.
- **Nema odricanja.** Nekorišćenje prava ne predstavlja njegovo odricanje.
- **Ustupanje.** Ne smijete ustupiti niti prenijeti svoja prava ili obaveze bez naše pisane saglasnosti. Ove Uslove možemo ustupiti povezanom licu ili pravnom sljedbeniku našeg poslovanja, i o tome ćemo vas obavijestiti.
- **Odnos.** Strane su nezavisni izvođači. Ništa ne stvara partnerstvo, zastupništvo, radni odnos ni zajednički poduhvat.
- **Treća lica.** Niko drugi nema pravo da sprovodi ove Uslove, osim naših povezanih lica, službenika i zastupnika prema odjeljcima 19 i 20.
- **Jezik.** Prevodi se daju radi praktičnosti; ako se razlikuju, engleska verzija ima prednost, osim ako obavezan zakon ne zahtijeva drukčije.
- **Tumačenje.** Naslovi služe radi preglednosti. „Uključujući” znači „uključujući bez ograničenja”.
- **Publicitet.** Možemo vas navesti kao kupca uz vaš logotip, osim ako se e-mailom ne odjavite; potrošači se nikada ne navode.

## 27. Kontakt {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Reg. br. {{company.reg_id}}{{/if}}{{#if company.tax_id}} · PIB {{company.tax_id}}{{/if}}
E-mail [{{company.email}}](mailto:{{company.email}}) · Pravna služba [{{company.legal_email}}](mailto:{{company.legal_email}}) · Podrška [{{company.email}}](mailto:{{company.email}}) · Pogledajte i našu [Pravne napomene (Impressum)]({{url.impressum}}).
