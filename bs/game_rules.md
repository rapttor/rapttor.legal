---
doc: game_rules
title: Pravila igre i politika virtualnih predmeta
version: 1.0.0
updated: 2026-10-23
lang: bs
translation_of: 1.0.0
status: draft
when: feature.game
summary: Pravila fer igre, ponašanja u zajednici, virtualnih predmeta, vjerovatnoće nasumičnih nagrada i prestanka pružanja usluge za {{product.name}}.
---

# Pravila igre i politika virtualnih predmeta

*Verzija {{doc.version}}, posljednji put ažurirano {{doc.updated}}.*

Ova pravila dopunjuju [Uslove korištenja]({{url.terms}}) i [Politiku prihvatljive upotrebe]({{url.acceptable_use}}) za {{product.name}} i druge igre i interaktivna iskustva kompanije **{{company.name}}** (u daljem tekstu: „**Igra**”). Ako su u sukobu po pitanju specifičnom za igru, ova pravila imaju prednost.

## 1. Virtualni predmeti i valuta {#virtual-items}

1. **Licenca, a ne vlasništvo.** Virtualna valuta, predmeti, skinovi, likovi, napredak i slični sadržaji (**virtualni predmeti**) licencirani su vam na ograničenoj, ličnoj, opozivoj, neprenosivoj i nepodlicenciranoj osnovi, isključivo za korištenje u Igri. Vi ih ne posjedujete i nemate nikakvo pravo vlasništva nad njima, vašim nalogom ili njegovim napretkom.
2. **Bez novčane vrijednosti.** Virtualni predmeti nisu novac, elektronski novac, vrijednosni papiri ni pohranjena vrijednost. Ne mogu se zamijeniti za novac ili robu, osim ako obavezni zakon ne propisuje drukčije.
3. **Bez trgovine izvan Igre.** Ne smijete prodavati, kupovati, pokloniti, mijenjati, posuđivati, nuditi na aukciji niti na drugi način prenositi virtualne predmete, naloge ili napredak za novac ili bilo šta drugo od vrijednosti, izvan funkcija koje mi pružamo. Takva **trgovina za pravi novac** i korištenje tržišta trećih lica su zabranjeni. Predmeti i nalozi uključeni u to mogu biti uklonjeni, a nalozi blokirani. Nismo odgovorni za gubitke nastale poslovanjem s trećim licima.
4. **Cijene i jasnoća.** Prije nego što potvrdite kupovinu, prikazujemo cijene virtualnih predmeta u stvarnoj valuti (ili cijenu paketa valute i ono što on kupuje). Ne činimo napredak nemogućim bez plaćanja tamo gdje zakon to zabranjuje. Za potrošače su porezi uključeni tamo gdje je to propisano.
5. **Kontrola potrošnje.** Mi ili platforma pružamo alate za ograničavanje ili blokiranje kupovina (roditeljske kontrole uređaja ili prodavnice aplikacija i svako ograničenje potrošnje u Igri). Kupovine izvršene na uređaju ili nalogu od strane bilo koga ko ima pristup su vaša odgovornost. {{#if feature.payments}}Pogledajte [Povrat novca]({{url.refunds}}) za informacije o tome kako nas zamoliti da preispitamo neovlaštenu ili slučajnu kupovinu koju je izvršilo maloljetno lice.{{else}}Kontaktirajte nas da preispitamo neovlaštenu ili slučajnu kupovinu koju je izvršilo maloljetno lice.{{/if}}
6. **Izmjene.** Možemo mijenjati, ponovo balansirati, preimenovati, povući ili ograničiti virtualne predmete i funkcije te postaviti datume isteka za promotivne predmete, u skladu s razvojem Igre. Nećemo ukloniti plaćene virtualne predmete koje ste već kupili, osim kako je navedeno u ovim pravilima (zabrane, prestanak pružanja usluge) ili kako zakon dopušta.
7. **Besplatni i zarađeni predmeti.** Predmeti zarađeni igranjem ili dobijeni besplatno nemaju vrijednost, mogu biti poništeni i gube se pri zatvaranju naloga.

## 2. Nasumične nagrade („loot box”) {#random-rewards}

Ako Igra nudi predmete dobijene slučajno (loot box, gacha, paketi karata, vrtnje):
- **objavljujemo vjerovatnoće** svake kategorije ishoda prije kupovine, u Igri i tamo gdje to zahtijeva prodavnica aplikacija;
- predmeti dobijeni slučajno najčešće se mogu dobiti i bez plaćanja ako Igra to navodi, a plaćene nasumične nagrade **nisu ponuđene tamo gdje ih zakon zabranjuje ili ograničava**; možemo ih onemogućiti u tim državama ili za maloljetne igrače;
- nasumične nagrade vam **ne daju nikakvo pravo** da osvojite novac ili bilo šta izvan Igre.

## 3. Fer igra {#fair-play}

Igrajte fer. Ne smijete:

1. **varati ili koristiti neovlašten softver:** hakove, aimbotove, wallhackove, makroe ili skripte koje automatizuju igru, speed hackove, uređivače memorije, manipulaciju mrežnim paketima, izmijenjene ili emulirane klijente, ili alate koji daju nepoštenu prednost;
2. **iskorištavati greške ili bugove** radi prednosti, dupliciranja predmeta ili valute, ili zaobilaziti plaćanje. Otkrivene zloupotrebe dužni ste prijaviti na [{{company.email}}](mailto:{{company.email}}) umjesto da ih koristite ili dijelite;
3. **botovati ili farmati** pomoću automatizovanih naloga, ili koristiti više naloga radi prednosti, sakupljanja nagrada ili manipulacije sparivanjem igrača;
4. **manipulisati rezultatima:** dogovaranje pobjeda (win-trading), namještanje mečeva (match-fixing), boosting, namjerno gubljenje ili „bacanje” mečeva, kolusion, manipulaciju rang-listama i rangiranjem, smurfing radi nanošenja štete igračima nižeg ranga;
5. **ometati druge:** DDoS ili lag-switching protivnika, stream sniping ili ghosting u takmičarskoj igri, griefing, namjerno prekidanje veze, kampovanje na mjestu pojavljivanja (spawn camping) mimo pravila igre ili spamovanje;
6. **dijeliti, prodavati, kupovati ili boostovati naloge**, rangove, predmete ili usluge (trgovina nalozima i plaćeni boosting);
7. **raditi reverzni inženjering** Igre, servera, protokola ili anti-cheat sistema, ili praviti neovlaštene servere ili klijente;
8. **zaobilaziti zabrane** kreiranjem novih naloga, promjenom hardverskih ili mrežnih identifikatora, ili korištenjem tuđeg naloga.

## 4. Anti-cheat i mjere integriteta {#anti-cheat}

Da bismo igru održali poštenom, koristimo sisteme za sprječavanje varanja i zaštitu integriteta, koji mogu raditi tokom igre{{#if feature.mobile}} (na mobilnim uređajima, također provjere integriteta uređaja){{/if}}. Oni mogu skenirati neovlašten softver i čitati ograničene tehničke podatke, kao što su nazivi pokrenutih procesa, identifikatori uređaja i hardvera te telemetrija stanja igre. Igranjem dajete saglasnost za ovu obradu, kako je opisano u [Politici privatnosti]({{url.privacy}}). Tamo gdje je potrebna komponenta na nivou kernela ili sličnom privilegovanom nivou, ona je opisana u obavještenju o instalaciji ili pokretanju. Radi samo dok se Igra pokreće, tamo gdje je to tehnički izvodljivo, i ne čita vaše fajlove, komunikacije ni pregledanje interneta. Otkrivene povrede mogu dovesti do automatizovanih radnji i radnji koje pregledaju osobe, u skladu s odjeljkom 7.

## 5. Ponašanje u zajednici {#community}

Ophodite se prema drugima s poštovanjem. Pored odjeljka 1 [Politike prihvatljive upotrebe]({{url.acceptable_use}}), sljedeće nije dozvoljeno u četu, glasovnoj komunikaciji, imenima, avatarima, nazivima klanova ili cehova, nivoima ili predmetima koje kreiraju korisnici:

- mržnja, uznemiravanje, prijetnje, seksualni sadržaj koji uključuje maloljetnike ili je usmjeren na njih, maltretiranje, seksualno uznemiravanje, doksovanje, grooming ili pokušaji da se maloljetnik premjesti na drugu platformu;
- oglašavanje, spam, prevare, phishing, prosjačenje, lažno predstavljanje osoblja ili drugih igrača, nuđenje poslova za pravi novac;
- politička kampanja iz stvarnog svijeta, ekstremistički simboli ili veličanje nasilja; sadržaj koji krši tuđa prava.

**Sigurnost glasovne komunikacije i četa.** Radi provođenja ovih pravila, tekst u četu može se evidentirati i automatski filtrirati, a glasovna komunikacija prijavljena nama može biti pregledana na osnovu kratkog snimka ili transkripta sačuvanog za potrebe prijave (u pravilu ne duže od {{policy.notice_days}} dana, osim ako je potrebno za predmet koji je u toku). Igrače možete utišati, blokirati i prijaviti u Igri.

## 6. Sadržaj koji kreiraju korisnici, modovi i striming {#ugc}

{{#if feature.ugc}}Sadržaj koji kreirate u Igri (nivoi, predmeti, skinovi, poruke) uređen je odjeljkom 6 Uslova korištenja. {{/if}}Osim ako posebna politika sadržaja ne navodi drukčije:
- smijete **streamovati, snimati i dijeliti snimke igranja** i unovčavati takve videe, pod uslovom da poštujete ova pravila, ne sugerišete našu podršku i poštujete pravila platforme na kojoj objavljujete, uključujući pravila o muzici i sadržaju trećih lica (mi vam ne licenciramo sadržaj trećih lica);
- **modovi** ili dodaci dozvoljeni su samo ako objavljujemo alate za njih, ako su besplatni i nekomercijalni, ako ne utiču na fer igru ili bezbjednost i ako ne koriste naše brendove na obmanjujući način. Možemo opozvati dozvolu i onemogućiti ih;
- možemo koristiti snimke ekrana, isječke i sadržaj zajednice koji javno podijelite za promociju, uz navođenje autora, osim ako se ne usprotivite.

## 7. Provođenje pravila {#enforcement}

Srazmjerno ozbiljnosti, učestalosti i šteti, možemo: upozoriti; utišati ili ograničiti četovanje; ukloniti sadržaj ili nazive; poništiti ili ukloniti rangove, rezultate, napredak i virtualne predmete stečene nepoštenim putem; suspendovati ili blokirati naloge (uključujući po identifikatoru uređaja ili hardvera); uskratiti nagrade; i prijaviti nezakonite aktivnosti nadležnim organima. **Virtualni predmeti i valuta na nalozima zatvorenim zbog povrede (varanje, trgovina za pravi novac, prevara, zloupotreba povrata uplata) propadaju bez povrata novca** tamo gdje zakon to dopušta.

Razloge vam navodimo tamo gdje je to izvodljivo i gdje zakon to zahtijeva. Možete zatražiti preispitivanje pisanim putem na [{{company.legal_email}}](mailto:{{company.legal_email}}) u roku od 6 mjeseci. Evidenciju zabrana čuvamo radi sprječavanja ponovljenih prekršaja. Automatizovano otkrivanje u žalbenom postupku pregledava osoba.

## 8. Događaji, turniri i nagrade {#events}

Događaji, turniri, rang-liste i nagradne igre mogu imati **službena pravila** objavljena uz događaj, koja za njega imaju prednost. Ako nije drukčije navedeno, nema novčanih nagrada. Tamo gdje se nagrade nude, one zavise od vještine, a ne od slučaja ili kupovine. Dostupne su samo tamo gdje je to zakonito i za uzraste koji ispunjavaju uslove, mogu zahtijevati provjeru identiteta i prebivališta, a dobitnik podliježe porezu. Kupovine nikada ne povećavaju vaše šanse da osvojite nagradno izvlačenje. Nismo kockarski operater i Igra se ne smije koristiti za kockanje.

## 9. Dostupnost i prestanak pružanja usluge {#end-of-service}

Online igre zavise od servera. Možemo vršiti održavanje, mijenjati ili ukinuti funkcije, sadržaj, režime ili samu Igru. Ako odlučimo da **ukinemo Igru ili plaćenu uslugu**, dat ćemo vam najmanje **60 dana obavještenja** (kraći rok samo ako to zahtijeva zakon ili hitna situacija) putem e-pošte, u Igri i na našoj web stranici. Prestaćemo prodavati virtualne predmete najmanje 30 dana prije toga i navesti šta se dešava s vašim sadržajem i, tamo gdje zakon to zahtijeva ili tamo gdje to nudimo, kako se preostali plaćeni iznosi vraćaju ili nadoknađuju. Tamo gdje je to razumno izvodljivo, održavaćemo offline ili jednoigračke režime u funkciji ili objavljivati zakrpe ili alate koji omogućavaju nastavak igre. Ništa u ovim odredbama ne ograničava obavezna prava potrošača.

## 10. Zdravlje i sigurnost igrača {#health}

Dugotrajno igranje može negativno uticati na vas. Pravite pauze. Neke igre sadrže treptajuća svjetla koja mogu izazvati napade kod osoba s fotosenzitivnom epilepsijom. Ako se osjećate loše, prestanite i obratite se ljekaru. Roditelji i staratelji treba da pregledaju uzrasne oznake, roditeljske kontrole i ograničenja potrošnje te da razgovaraju s djecom o bezbjednom igranju na internetu.

## 11. Kontakt {#contact}

Podrška za Igru, prijave i žalbe: [{{company.email}}](mailto:{{company.email}}). Pravne prijave i prijave zloupotrebe: [{{company.legal_email}}](mailto:{{company.legal_email}}).
