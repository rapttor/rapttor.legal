---
doc: game_rules
title: Pravila igre i politika virtualnih predmeta
version: 1.0.0
updated: 2026-10-23
lang: hr
when: feature.game
translation_of: 1.0.0
status: draft
summary: Pravila poštene igre, ponašanje u zajednici, virtualni predmeti, izgledi nasumičnih nagrada i pravila o prestanku usluge za {{product.name}}.
---

# Pravila igre i politika virtualnih predmeta

*Verzija {{doc.version}}, posljednje ažuriranje {{doc.updated}}.*

Ova pravila dopunjuju [Uvjete korištenja]({{url.terms}}) i [Pravila prihvatljive uporabe]({{url.acceptable_use}}) za {{product.name}} i druge igre i interaktivna iskustva društva **{{company.name}}** (,,**Igra**"). Ako su u sukobu u pogledu točke specifične za igru, ova pravila imaju prednost.

## 1. Virtualni predmeti i valuta {#virtual-items}

1. **Licenca, a ne vlasništvo.** Virtualna valuta, predmeti, skinovi, likovi, napredak i slični sadržaji ("**Virtualni predmeti**") licencirani su vam na ograničenoj, osobnoj, opozivoj, neprenosivoj i nepodlicenciranoj osnovi za korištenje isključivo u Igri. Ne posjedujete ih i nemate nikakvo vlasničko pravo na njih, na vaš račun ili na njegov napredak.
2. **Bez novčane vrijednosti.** Virtualni predmeti nisu novac, elektronički novac, vrijednosni papiri ni pohranjena vrijednost; ne mogu se unovčiti za gotovinu ili robu, osim ako obvezno pravo ne propisuje drugačije.
3. **Zabrana trgovanja izvan Igre.** Ne smijete prodavati, kupovati, pokloniti, mijenjati, posuđivati, dražbati ili na drugi način prenositi Virtualne predmete, račune ili napredak za novac ili bilo što drugo vrijedno, izvan značajki koje mi pružamo. Takvo **trgovanje za pravi novac** i korištenje tržnica trećih strana zabranjeno je; predmeti i računi uključeni u to mogu se ukloniti, a računi blokirati. Nismo odgovorni za gubitke nastale poslovanjem s trećim stranama.
4. **Cijene i jasnoća.** Cijene Virtualnih predmeta prikazujemo u stvarnoj valuti (ili kao cijenu paketa valute i ono što on kupuje) prije nego što potvrdite kupnju te ne činimo napredak nemogućim bez plaćanja tamo gdje to zakon zabranjuje. Za potrošače su porezi uključeni tamo gdje je to propisano.
5. **Kontrola potrošnje.** Mi ili platforma pružamo alate za ograničavanje ili blokiranje kupnji (roditeljski nadzor uređaja ili trgovine i svako ograničenje potrošnje u Igri). Kupnje obavljene na uređaju ili računu od strane bilo koga tko ima pristup odgovornost su vaša; {{#if feature.payments}}pogledajte [Povrate]({{url.refunds}}) kako zatražiti pregled neovlaštene ili slučajne kupnje od strane maloljetne osobe.{{else}}obratite nam se kako bismo pregledali neovlaštenu ili slučajnu kupnju od strane maloljetne osobe.{{/if}}
6. **Izmjene.** Možemo mijenjati, ponovno uravnotežiti, preimenovati, povući ili ograničiti Virtualne predmete i značajke te postaviti datume isteka promotivnih predmeta, kako se Igra razvija. Plaćene Virtualne predmete koje ste već kupili ne uklanjamo, osim kako je navedeno u ovim pravilima (zabrane, prestanak usluge) ili kako zakon dopušta.
7. **Besplatni i zarađeni predmeti.** Predmeti zarađeni igranjem ili dobiveni besplatno nemaju vrijednost, mogu se resetirati i gube se zatvaranjem računa.

## 2. Nasumične nagrade ("loot boxes") {#random-rewards}

Ako Igra nudi predmete dobivene slučajem (loot boxes, gacha, paketi karata, vrtnje):
- **objavljujemo vjerojatnosti** svake kategorije ishoda prije kupnje, u Igri i tamo gdje to zahtijeva trgovina;
- predmeti dobiveni slučajem obično se mogu dobiti i bez plaćanja ako Igra to navodi, a plaćene nasumične nagrade **ne nudimo tamo gdje ih zakon zabranjuje ili ograničava**; u tim državama ili za igrače mlađe od dobne granice možemo ih isključiti;
- nasumične nagrade **ne daju vam nikakvo pravo** da osvojite novac ili bilo što izvan Igre.

## 3. Pošten nastup {#fair-play}

Igrajte pošteno. Ne smijete:

1. **varati ili koristiti neovlašteni softver:** hakove, aimbotove, wallhackove, makroe ili skripte koje automatiziraju igru, speed hackove, uređivače memorije, manipulaciju mrežnim paketima, izmijenjene ili emulirane klijente ili alate koji daju nepoštenu prednost;
2. **iskorištavati greške (bugove) ili propuste** radi prednosti, dupliciranja predmeta ili valute ili zaobilaženja plaćanja; otkrivene propuste dužni ste prijaviti na [{{company.email}}](mailto:{{company.email}}) umjesto da ih koristite ili dijelite;
3. **botati ili farmati** automatiziranim računima ili držati više računa radi stjecanja prednosti, prikupljanja nagrada ili manipuliranja uparivanjem igrača;
4. **manipulirati rezultatima:** win-trading, namještanje utakmica, boostanje, namjerno gubljenje ili "bacanje" mečeva, dogovaranje, manipuliranje ljestvicama ili rangiranjem, smurfanje radi štete igračima nižeg ranga;
5. **ometati druge:** DDoS ili lag-switching protivnika, stream sniping ili ghosting u natjecateljskoj igri, griefing, namjerno prekidanje veze, kampiranje na mjestima ponovnog pojavljivanja izvan pravila igre ili spamanje;
6. **dijeliti, prodavati, kupovati ili boostati račune**, rangove, predmete ili usluge (trgovina računima i plaćeni boost);
7. **raditi reverse engineering** Igre, poslužitelja, protokola ili sustava protiv varanja (anti-cheat) ili stvarati neovlaštene poslužitelje ili klijente;
8. **zaobilaziti zabrane** stvaranjem novih računa, promjenom hardverskih ili mrežnih identifikatora ili korištenjem tuđeg računa.

## 4. Mjere protiv varanja i integriteta {#anti-cheat}

Kako bismo igru održali poštenom, koristimo sustave protiv varanja i za očuvanje integriteta koji mogu raditi tijekom igranja{{#if feature.mobile}} (na mobilnim uređajima i provjere integriteta uređaja){{/if}}. Mogu tražiti neovlašteni softver i čitati ograničene tehničke podatke, poput naziva pokrenutih procesa, identifikatora uređaja i hardvera te telemetrije stanja igre. Igranjem pristajete na tu obradu kako je opisano u [Politici privatnosti]({{url.privacy}}). Ako je potrebna komponenta na razini jezgre sustava ili slično povlaštena komponenta, ona je opisana u obavijesti o instalaciji ili pokretanju, radi samo dok se Igra izvodi tamo gdje je to tehnički izvedivo te ne čita vaše datoteke, komunikaciju ni pregledavanje weba. Otkrivene povrede mogu dovesti do automatskih mjera i mjera koje pregledava čovjek, u skladu s odjeljkom 7.

## 5. Ponašanje u zajednici {#community}

Postupajte prema drugima s poštovanjem. Uz odjeljak 1 [Pravila prihvatljive uporabe]({{url.acceptable_use}}), u chatu, glasovnoj komunikaciji, imenima, avatarima, nazivima klanova ili cehova te u korisnički izrađenim razinama i predmetima nisu dopušteni sljedeći sadržaji:

- mržnja, uznemiravanje, prijetnje, seksualni sadržaj koji uključuje maloljetnike ili je usmjeren prema njima, zlostavljanje, seksualno uznemiravanje, objavljivanje osobnih podataka radi zastrašivanja (doxxing), vrbovanje ili pokušaji da se maloljetnik premjesti na drugu platformu;
- oglašavanje, neželjena poruka (spam), prijevare, phishing, prošnja, lažno predstavljanje kao osoblje ili drugi igrači, nuđenje poslova za pravi novac;
- politička kampanja u stvarnom svijetu, ekstremistički simboli ili veličanje nasilja; sadržaj kojim se krše tuđa prava.

**Sigurnost u chatu i glasovnoj komunikaciji.** Radi provedbe ovih pravila tekst u chatu može se bilježiti i automatski filtrirati, a glasovna komunikacija prijavljena nama može se pregledati iz kratkog snimka ili transkripta sačuvanog radi prijave (općenito ne dulje od {{policy.notice_days}} dana, osim ako je potrebno za postupak koji je u tijeku). Igrače možete utišati i blokirati te ih prijaviti unutar Igre.

## 6. Sadržaj korisnika, modovi i streaming {#ugc}

{{#if feature.ugc}}Sadržaj koji sami izradite u Igri (razine, predmeti, skinovi, poruke) uređen je odjeljkom 6 Uvjeta. {{/if}}Osim ako posebna politika sadržaja ne određuje drukčije:
- smijete **streamati, snimati i dijeliti igranje** te od takvih videozapisa zarađivati, pod uvjetom da poštujete ova pravila, ne sugerirate našu podršku i poštujete pravila platforme na kojoj objavljujete o glazbi i drugom sadržaju trećih strana (mi vam ne licenciramo sadržaj trećih strana);
- **modovi** ili dodaci dopušteni su samo ako objavimo alate za njih, ako su besplatni i nekomercijalni, ako ne utječu na pošten nastup ili sigurnost te ako ne koriste naše robne marke na obmanjujući način; dopuštenje možemo opozvati i onemogućiti ih;
- možemo koristiti snimke zaslona, isječke i sadržaj zajednice koji javno podijelite za promociju uz navođenje autora, osim ako prigovorite.

## 7. Provedba {#enforcement}

Razmjerno ozbiljnosti, ponavljanju i šteti možemo: upozoriti; utišati ili ograničiti chat; ukloniti sadržaj ili imena; resetirati ili ukloniti rangove, rezultate, napredak i Virtualne predmete stečene nepošteno; suspendirati ili blokirati račune (uključujući po identifikatoru uređaja ili hardvera); uskratiti nagrade te prijaviti nezakonite aktivnosti tijelima vlasti. **Virtualni predmeti i valuta na računima zatvorenima zbog povrede (varanje, trgovanje za pravi novac, prijevara, zloupotreba povrata uplate) propadaju bez naknade**, gdje zakon to dopušta.

Razlog vam navodimo kad je to izvedivo i kad to zahtijeva zakon, a preispitivanje možete zatražiti pisanim putem na [{{company.legal_email}}](mailto:{{company.legal_email}}) u roku od 6 mjeseci. Evidenciju zabrana čuvamo radi sprječavanja ponovnih povreda. Automatsko otkrivanje pri žalbi pregledava osoba.

## 8. Događaji, turniri i nagrade {#events}

Za događaje, turnire, ljestvice i nagradne igre mogu vrijediti **službena pravila** objavljena uz događaj, koja za njih imaju prednost. Ako nije drukčije navedeno, nema novčanih nagrada; tamo gdje se nagrade nude, ovise o vještini, a ne o slučaju ili kupnji, dostupne su samo tamo gdje je to zakonito i prema dobnim uvjetima, mogu zahtijevati provjeru identiteta i prebivališta te na osobu koja ih osvoji primjenjuje se porez. Kupnje nikad ne povećavaju vaše šanse da osvojite nagradu u ždrijebanju. Nismo kockarski operator te se Igra ne smije koristiti za kockanje.

## 9. Dostupnost i prestanak usluge {#end-of-service}

Online igre ovise o poslužiteljima. Možemo provoditi održavanje, mijenjati ili ukinuti značajke, sadržaj, načine igre ili samu Igru. Ako odlučimo **prekinuti Igru ili plaćenu uslugu**, dat ćemo vam najmanje **60 dana obavijesti** (kraći rok samo ako to zahtijeva zakon ili hitan slučaj) e-poštom, u Igri i na našim web-stranicama, prestat ćemo prodavati Virtualne predmete najmanje 30 dana prije toga te ćemo navesti što se događa s vašim sadržajem i, ako zakon to zahtijeva ili ako to nudimo, kako se preostali plaćeni iznosi vraćaju ili nadoknađuju. Gdje je to razumno izvedivo, održat ćemo načine rada izvan mreže ili jednog igrača u funkciji ili objaviti zakrpe ili alate koji omogućuju nastavak igranja. Ništa ovdje ne ograničava obvezna prava potrošača.

## 10. Zdravlje i sigurnost igrača {#health}

Dugotrajno igranje može utjecati na vas. Napravite stanke. Neke igre sadrže treperuća svjetla koja mogu izazvati napadaje kod osoba s fotosenzitivnom epilepsijom; prestanite i posavjetujte se s liječnikom ako se osjećate loše. Roditelji i skrbnici trebali bi pregledati dobne oznake, roditeljski nadzor i ograničenja potrošnje te razgovarati s djecom o sigurnom igranju na internetu.

## 11. Kontakt {#contact}

Podrška za igru, prijave i žalbe: [{{company.email}}](mailto:{{company.email}}). Pravne prijave i prijave zlouporabe: [{{company.legal_email}}](mailto:{{company.legal_email}}).
