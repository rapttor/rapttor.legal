---
doc: privacy
title: Politica de confidențialitate
version: 1.2.1
updated: 2026-10-31
lang: ro
translation_of: 1.2.1
status: draft
summary: Modul în care {{product.name}} colectează, utilizează, partajează și protejează datele cu caracter personal și drepturile pe care le aveți.
---

# Politica de confidențialitate

*Versiunea {{doc.version}}, ultima actualizare {{doc.updated}}.*

## 1. Cine suntem {#who-we-are}

Prezenta politică explică modul în care **{{company.name}}**, cu sediul înregistrat la {{company.address}} („**{{product.name}}**”, „**noi**”), prelucrează datele cu caracter personal atunci când utilizați {{product.name}}, site-urile noastre web, aplicațiile, API-urile și serviciile conexe (denumite „**Serviciile**”).

Pentru datele cu caracter personal pentru care decidem cum și de ce sunt prelucrate (de exemplu contul dumneavoastră, vizitele pe site și facturarea), noi suntem **operatorul**. Contact: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Responsabilul nostru cu protecția datelor poate fi contactat la [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nu am desemnat un responsabil cu protecția datelor, deoarece legea nu o impune pentru activitățile noastre. Întrebările privind confidențialitatea se adresează la [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Reprezentant în UE (art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Reprezentant în Regatul Unit (art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Când suntem persoană împuternicită de operator

Dacă utilizați Serviciile prin intermediul unei organizații (angajatorul dumneavoastră sau un client de afaceri), acea organizație este de obicei operatorul datelor pe care le introduce în Servicii, iar noi le prelucrăm în numele său în baza [Anexei de prelucrare a datelor]({{url.dpa}}). În acest caz, adresați cererile organizației respective; noi o vom ajuta să răspundă. Prezenta politică se aplică atunci doar datelor pe care le controlăm noi înșine (administrarea contului, facturarea, securitatea, site-ul web).
{{/if}}

## 2. Datele pe care le colectăm {#data-we-collect}

| Categorie | Exemple | Sursă |
|---|---|---|
| **Date ale contului** | nume, e-mail, hash-ul parolei, detalii de profil, limbă, preferințe | Dumneavoastră |
| **Date de contact și de asistență** | mesaje, atașamente, note din apeluri, feedback, răspunsuri la sondaje | Dumneavoastră |
| **Conținut transmis de dumneavoastră** | fișiere, texte, setări, orice plasați în Servicii | Dumneavoastră |
{{#if feature.anonymous}}| **Date ale contului anonim** | un identificator aleatoriu al contului, sesiunea din browser sau de pe dispozitiv care îl păstrează, conținutul creat de dumneavoastră și o adresă de e-mail, dacă o asociați ulterior | Dumneavoastră, automat |
{{/if}}{{#if feature.uploads}}| **Fișiere și imagini încărcate** | fișierele propriu-zise și metadatele din interiorul lor (de exemplu detaliile camerei sau locația din fotografii) | Dumneavoastră |
{{/if}}| **Înregistrările consimțământului** | ce ați acceptat (documente, confirmarea vârstei, opțiuni facultative), versiunea, limba, data și modul în care ați acceptat | Dumneavoastră |
| **Date de utilizare și ale dispozitivului** | adresa IP, tipul browserului și al dispozitivului, sistemul de operare, limba, paginile și funcțiile utilizate, marcajele temporale, referrer, jurnalele de blocare și de erori | Automat |
| **Cookie-uri și tehnologii similare** | identificatori din cookie-uri, din stocarea locală, SDK-uri (a se vedea [Politica privind cookie-urile]({{url.cookies}})) | Automat |
{{#if feature.payments}}| **Date de plată și tranzacții** | planul, facturile, numele și adresa de facturare, codul fiscal, starea plății; datele cardului sunt gestionate de procesatorul nostru de plăți și nu sunt stocate de noi | Dumneavoastră, procesatorul de plăți |
{{/if}}{{#if feature.location}}| **Date de localizare** | localizarea precisă doar dacă o activați pe dispozitiv; altfel, localizarea aproximativă din adresa IP | Dispozitivul dumneavoastră |
{{/if}}| **Date ale contului terț** | nume, e-mail, fotografia de profil și identificatorul transmise de un furnizor de autentificare ales de dumneavoastră | Terț, cu permisiunea dumneavoastră |
{{#if feature.ugc}}| **Comunicări între utilizatori** | mesaje și interacțiuni pe care le transmiteți prin Servicii | Dumneavoastră |
{{/if}}{{#if feature.mobile}}| **Date ale dispozitivului mobil** | modelul dispozitivului și versiunea sistemului de operare, versiunea aplicației, identificatorii instanței aplicației și ai notificărilor push, limba și fusul orar, starea permisiunilor; identificatorul publicitar doar dacă permiteți urmărirea | Dispozitivul dumneavoastră |
{{/if}}{{#if feature.game}}| **Date de joc** | progresul în joc, scoruri, clasamente, obiecte și achiziții, istoricul meciurilor, chatul din joc și (dacă este utilizat) rapoartele vocale, semnalele anti-trișare și de integritate, profilul public (nume, avatar, rang) | Dumneavoastră, automat |
{{/if}}| **Semnale de securitate și de fraudă** | autentificări eșuate, rapoarte de abuz, scoruri de risc, cereri blocate | Automat, alți utilizatori |

Nu colectăm intenționat date din categorii speciale (sănătate, date biometrice, opinii politice sau religioase și altele asemenea). Vă rugăm să nu le transmiteți decât dacă o funcție solicită expres acest lucru. Dacă transmiteți totuși astfel de date, sunteți responsabil pentru existența unui temei juridic.

Nu aveți obligația să ne furnizați date cu caracter personal, dar fără unele dintre ele (de exemplu o adresă de e-mail) nu vă putem crea un cont.

### Urmărire pe care nu o utilizăm {#no-tracking}

Nu utilizăm instrumente de redare a sesiunilor sau de înregistrare a ecranului, captarea tastelor sau a mișcărilor mouse-ului și nici amprentarea digitală a browserului. {{#if feature.analytics}}Analiza se efectuează doar cu consimțământul dumneavoastră (a se vedea [Politica privind cookie-urile]({{url.cookies}})).{{else}}Nu utilizăm trackere de analiză sau de publicitate.{{/if}}
{{#if feature.external}}
### Resurse ale terților și adresa dumneavoastră IP {#external}

Unele funcții încarcă conținut de pe serverele altor companii (de exemplu fonturi, hărți, videoclipuri sau verificări de securitate). Atunci când browserul dumneavoastră solicită un astfel de conținut, **adresa dumneavoastră IP și detaliile tehnice sunt transmise companiei respective**, care poate fi situată în afara țării dumneavoastră. Încărcăm aceste resurse doar după ce acceptați fiecare resursă în setările cookie-urilor, pe care le puteți modifica oricând; dacă refuzați, folosim o soluție alternativă sau funcția rămâne dezactivată.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-mailuri {#emails}

Trimitem e-mailurile necesare Serviciilor (linkuri de autentificare, chitanțe, notificări de securitate){{#if feature.marketing}} și, doar acolo unde ați fost de acord sau unde legea permite, noutăți despre produse{{/if}}. Fiecare e-mail conține un link prin care puteți înceta să mai primiți e-mailuri de la noi. {{#if feature.marketing}}E-mailurile facultative încetează printr-un singur clic, imediat. {{/if}}Deoarece blocarea tuturor e-mailurilor ar bloca și linkurile de autentificare, o cerere de blocare a **tuturor** e-mailurilor de la acest serviciu este confirmată printr-un ultim e-mail care conține un link ce dovedește că adresa vă aparține. Apoi adăugăm adresa în lista de nerecepționare a furnizorului nostru de e-mail și o păstrăm acolo, pentru a putea respecta alegerea dumneavoastră (obligație legală și interesul nostru legitim de a respecta cererea dumneavoastră).
{{/if}}{{#if feature.age_gate}}
### Confirmarea vârstei {#age}

Înainte de a utiliza funcții care implică {{policy.age_topics|conținut sensibil din punct de vedere al vârstei}}, vă cerem să confirmați că aveți cel puțin {{policy.age_gate}} ani și că aveți vârsta legală conform regulilor din țara dumneavoastră. Nu vă cerem data nașterii; păstrăm doar confirmarea dumneavoastră și momentul în care ați dat-o. Dacă aflăm că o persoană are o vârstă inferioară, blocăm contul și ștergem datele.
{{/if}}{{#if feature.gambling}}
Pentru funcțiile de jocuri de noroc putem cere și dovada vârstei și a identității dumneavoastră și putem utiliza în acest scop un furnizor de verificare. Păstrăm rezultatul și dovezile pe care legea le impune.
{{/if}}

## 3. De ce utilizăm datele dumneavoastră și temeiurile noastre juridice {#purposes}

| Scop | Temei juridic (GDPR / UK GDPR) |
|---|---|
| Furnizarea Serviciilor, crearea și administrarea contului dumneavoastră, procesarea comenzilor | Contract (art. 6 alin. (1) lit. b) |
| Asistența clienților și comunicarea privind utilizarea Serviciilor | Contract; interese legitime |
| Securitatea, prevenirea abuzurilor și a fraudei, aplicarea [Termenilor]({{url.terms}}) și a [Politicii de utilizare acceptabilă]({{url.acceptable_use}}) | Interese legitime (art. 6 alin. (1) lit. f); obligație legală |
| Depanare, fiabilitate, planificarea capacității și îmbunătățirea Serviciilor | Interese legitime |
{{#if feature.analytics}}| Analiza utilizării | Consimțământ acolo unde legea o impune, în caz contrar interese legitime |
{{/if}}{{#if feature.marketing}}| Noutăți despre produse și e-mailuri de marketing | Consimțământ sau interese legitime pentru clienții existenți, acolo unde legea permite; vă puteți retrage oricând |
{{/if}}{{#if feature.ads}}| Publicitate și măsurare | Consimțământ |
{{/if}}| Înregistrarea consimțămintelor dumneavoastră și respectarea alegerilor privind e-mailurile | Obligație legală; interese legitime |
{{#if feature.external}}| Încărcarea resurselor terțe care primesc adresa dumneavoastră IP | Consimțământ (art. 6 alin. (1) lit. a) și regulile ePrivacy privind accesul la dispozitivul dumneavoastră) |
{{/if}}| Contabilitate, fiscalitate și alte obligații legale | Obligație legală (art. 6 alin. (1) lit. c) |
| Constatarea, exercitarea sau apărarea unor pretenții în justiție; răspunsul la solicitările autorităților | Interese legitime; obligație legală |
| Transferuri de afaceri (fuziune, achiziție, vânzare de active) | Interese legitime |

Acolo unde ne bazăm pe interese legitime, le-am cântărit în raport cu drepturile dumneavoastră; puteți cere detalii și vă puteți opune (secțiunea 10). Acolo unde ne bazăm pe consimțământ, îl puteți retrage oricând; aceasta nu afectează prelucrările anterioare.

{{#if feature.ai}}
### Funcții asistate de inteligență artificială {#ai}

Unele funcții utilizează modele de învățare automată sau modele generative. Atunci când le utilizați, conținutul transmis ca intrare este trimis furnizorului care acționează ca persoană împuternicită de noi (procesator) pentru a produce rezultatul.

- **Nu** utilizăm conținutul dumneavoastră pentru a antrena modele cu scop general și cerem furnizorilor noștri să nu o facă, cu excepția cazului în care vă exprimați explicit acordul.
- Rezultatele generate de IA pot fi greșite, incomplete sau părtinitoare. Nu vă bazați pe ele pentru decizii juridice, medicale, financiare sau alte decizii cu miză mare, fără o verificare umană.
- Nu luăm decizii cu efecte juridice sau cu efecte similar semnificative asupra dumneavoastră exclusiv prin mijloace automate. Restricțiile de cont pentru abuz sunt analizate de o persoană, la cerere (a se vedea [Politica de utilizare acceptabilă]({{url.acceptable_use}}), secțiunea Aplicarea măsurilor).
- Conținutul generat de IA este etichetat acolo unde legea o impune.
{{/if}}

## 4. Cu cine partajăm datele {#sharing}

**Nu vindem datele dumneavoastră cu caracter personal** și nu le „partajăm” în scopul publicității comportamentale interculturale{{#if feature.ads}}, cu excepția cazului descris în Politica privind cookie-urile și doar acolo unde ați consimțit{{/if}}.

Partajăm datele cu caracter personal doar cu:

- **furnizorii de servicii (persoane împuternicite)**, care acționează conform instrucțiunilor noastre în baza unor contracte scrise: găzduire și infrastructură, livrarea e-mailurilor, instrumente de asistență pentru clienți, monitorizarea erorilor{{#if feature.payments}}, procesarea plăților{{/if}}{{#if feature.ai}}, furnizorii de IA{{/if}}. Lista actuală se află în [Lista subprocesatorilor]({{url.subprocessors}}).
- **platformele și magazinele de aplicații** prin care accesați Serviciile (de exemplu Apple, Google, magazinele consolelor sau ale PC-urilor), care gestionează plățile și ne pot furniza date limitate privind achizițiile și contul;
- **alți utilizatori sau publicul**, doar la indicația dumneavoastră (de exemplu conținutul pe care alegeți să îl publicați{{#if feature.ugc}} sau mesajele pe care le trimiteți{{/if}});
- **consilierii profesioniști** (avocați, auditori, asigurători), sub obligație de confidențialitate;
- **autoritățile, instanțele și părțile afectate**, atunci când legea o impune, pentru a răspunde unor proceduri legale valabile, pentru a proteja drepturile, siguranța sau bunurile ori pentru a investiga abuzurile și frauda. Verificăm validitatea solicitărilor și, acolo unde legea o permite, vă informăm;
- **un succesor** în cadrul unei fuziuni, achiziții, finanțări sau vânzări de active, care trebuie să respecte prezenta politică; vă vom notifica modificările importante ale controlului care vă afectează datele;
- **oricine altcineva**, doar cu consimțământul dumneavoastră.

## 5. Transferuri internaționale {#transfers}

Activăm din {{company.country}}{{#if hosting.region}} și stocăm datele în principal în {{hosting.region}}{{/if}}. Unii furnizori prelucrează datele în alte țări, inclusiv în Statele Unite ale Americii. Atunci când datele cu caracter personal din SEE, Regatul Unit sau Elveția sunt transferate într-o țară fără decizie de adecvare, utilizăm o garanție recunoscută: Cadrul UE-SUA privind confidențialitatea datelor (sau extensiile sale pentru Regatul Unit și Elveția), dacă destinatarul este certificat, iar în caz contrar **clauzele contractuale standard** ale Comisiei Europene, împreună cu **Addendumul privind transferul internațional de date din Regatul Unit** sau cu amendamentele elvețiene, acolo unde este cazul, plus măsuri suplimentare, precum criptarea în tranzit și în stare de repaus. Puteți solicita o copie a garanțiilor relevante la [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Cât timp păstrăm datele {#retention}

| Date | Perioada de păstrare |
|---|---|
| Datele contului și conținutul | Cât timp contul dumneavoastră este activ, apoi sunt șterse sau anonimizate în termen de {{policy.retention_account_days}} zile de la închidere |
| Jurnalele serverelor și de securitate | 90 de zile |
| Copiile de rezervă | Rotativ, până la 35 de zile; datele șterse dispar din copiile de rezervă pe acest ciclu |
| Facturile și evidențele contabile | {{policy.retention_billing_years}} ani sau cât timp impune legea |
| Corespondența de asistență | Până la 3 ani după închiderea cazului sau cât timp contul este activ, dacă perioada este mai lungă |
| Înregistrările consimțămintelor, ale renunțărilor și ale cererilor privind drepturile | Atât timp cât este necesar pentru a demonstra conformitatea |
| Datele necesare unei pretenții sau unei investigații în justiție | Până la soluționarea cazului și după expirarea termenelor de prescripție |
| Înregistrările privind abuzurile și interdicțiile (identificator, motiv, dată) | Până la 5 ani, pentru a preveni abuzurile repetate |
| Înregistrările consimțământului și lista de nerecepționare a e-mailurilor | Înregistrările consimțământului: pe durata existenței contului, plus termenul de prescripție; intrările din lista de nerecepționare: până când ne cereți să le eliminăm |

Când scopul încetează, ștergem datele sau le anonimizăm ireversibil.

## 7. Securitatea {#security}

Utilizăm măsuri tehnice și organizatorice adecvate riscului: criptare în tranzit, criptarea datelor sensibile în stare de repaus, control al accesului după principiul celui mai mic privilegiu, măsuri de protecție a autentificării, jurnalizare, copii de rezervă, gestionarea vulnerabilităților și obligații de confidențialitate pentru personal. Niciun sistem nu este perfect sigur. Vă rugăm să folosiți o parolă puternică și unică, să activați autentificarea multifactor acolo unde este oferită și să ne comunicați imediat, la [{{company.email}}](mailto:{{company.email}}), dacă bănuiți că vi s-a compromis contul. A se vedea și pagina noastră [Securitate și divulgarea vulnerabilităților]({{url.security}}).

Dacă o încălcare a securității este susceptibilă să pună în pericol drepturile și libertățile dumneavoastră, vom notifica autoritatea de supraveghere în termen de 72 de ore de la data la care am luat cunoștință, acolo unde este necesar, și vă vom notifica fără întârziere nejustificată atunci când legea o impune.

## 8. Copiii {#children}

{{#if feature.minors}}Serviciile nu sunt destinate copiilor sub 13 ani, iar noi nu colectăm cu bună știință date cu caracter personal de la aceștia. Utilizatorii în vârstă de {{policy.min_age}} ani sau peste, care nu au atins încă majoratul, pot utiliza Serviciile **doar cu consimțământul unui părinte sau tutore**, care poate consulta, corecta, limita sau șterge datele minorului și își poate retrage consimțământul contactând [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Colectăm doar datele necesare Serviciilor, nu utilizăm datele minorilor pentru publicitate comportamentală și aplicăm, acolo unde putem, setări implicite adecvate vârstei (profiluri private, comunicări limitate). Acolo unde legea unei țări stabilește o vârstă mai mare pentru consimțământul digital, cerem consimțământul parental sub acea vârstă.{{else}}Serviciile nu sunt destinate copiilor. Trebuie să aveți cel puțin {{policy.min_age}} ani pentru a deține un cont. Nu colectăm cu bună știință date cu caracter personal de la nimeni sub {{policy.min_age}} ani (sau sub vârsta mai mare a consimțământului digital din țara sa; în Statele Unite, sub 13 ani, în scopul COPPA). Dacă considerați că un copil ne-a transmis date cu caracter personal, contactați [{{company.privacy_email}}](mailto:{{company.privacy_email}}), iar noi le vom șterge și vom închide contul. Acolo unde un părinte sau tutore a consimțit valabil la utilizarea de către un minor, acest consimțământ poate fi retras oricând.{{/if}}

## 9. Site-uri și servicii ale terților {#third-parties}

Serviciile pot include linkuri către site-uri, module și aplicații ale terților sau pot fi integrate cu acestea, inclusiv cu furnizorii de autentificare. Nu le controlăm și nu răspundem pentru practicile lor de confidențialitate; politicile proprii ale acestora stabilesc ce colectează. Dezactivați integrările din setările contului dumneavoastră sau din setările terțului.

## 10. Drepturile dumneavoastră {#rights}

În funcție de locul în care locuiți, puteți:

- **să accesați** datele dumneavoastră și să obțineți o copie;
- **să corectați** datele inexacte;
- **să ștergeți** datele dumneavoastră („dreptul de a fi uitat”);
- **să restricționați** sau **să vă opuneți** prelucrării, inclusiv prelucrării în scopuri de marketing direct, în orice moment;
- **să transferați** datele către un alt furnizor, într-un format care poate fi citit automat;
- **să vă retrageți consimțământul** în orice moment;
- **să nu faceți obiectul unei decizii bazate exclusiv pe prelucrare automată**, cu efecte juridice sau cu efecte similar semnificative;
- **să depuneți o plângere** la o autoritate de supraveghere.

**Ștergerea contului dumneavoastră.** Puteți șterge contul și datele dumneavoastră cu caracter personal {{#if feature.mobile}}din aplicație (Setări, apoi Cont, apoi Ștergeți contul), {{/if}}din setările contului dumneavoastră de pe site-ul nostru sau prin e-mail; nu vă cerem să contactați asistența dacă există varianta de autoservire. Ștergerea contului este definitivă după perioada de grație pe care vi-o indicăm. Dezinstalarea aplicației nu vă șterge contul.

Pentru a exercita un drept, scrieți la [{{company.privacy_email}}](mailto:{{company.privacy_email}}) sau folosiți setările din contul dumneavoastră. Este posibil să fie necesar să verificăm identitatea dumneavoastră și, dacă cererea este vădit nefondată sau excesivă, putem percepe o taxă rezonabilă sau putem refuza, în măsura permisă de lege. Răspundem în termen de **o lună** (care poate fi prelungită cu încă două luni pentru cereri complexe; 45 de zile în temeiul legilor statelor SUA, prelungibile cu încă 45 de zile) și vă comunicăm motivul dacă nu putem da curs cererii. Nu vă discriminăm pentru exercitarea drepturilor dumneavoastră.

### 10.1 Spațiul Economic European, Regatul Unit, Elveția

Toate drepturile de mai sus se aplică. Puteți depune o plângere la autoritatea din țara în care locuiți sau lucrați ori unde a apărut problema ([lista autorităților din SEE](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Regatul Unit: [ICO](https://ico.org.uk); Elveția: [FDPIC](https://www.edoeb.admin.ch)). Autoritatea noastră principală de supraveghere este {{law.authority}}.

### 10.2 Serbia

Acolo unde se aplică Legea sârbă privind protecția datelor cu caracter personal, aveți drepturi echivalente celor de mai sus și puteți depune o plângere la Comisarul pentru informații de interes public și protecția datelor cu caracter personal (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Statele Unite (California și alte state) {#us-states}

Această secțiune completează cele de mai sus pentru rezidenții din California și din alte state ale SUA care au legi cuprinzătoare privind confidențialitatea (inclusiv Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana și altele, pe măsură ce intră în vigoare).

- **Categoriile colectate în ultimele 12 luni:** identificatori (nume, e-mail, adresă IP, identificatori online); evidențe ale clienților; informații comerciale (planuri, achiziții); activitate pe internet sau în rețea; geolocalizare aproximativă{{#if feature.location}} și geolocalizare precisă, cu permisiunea dumneavoastră{{/if}}; conținut transmis de dumneavoastră; deducții limitate la operarea Serviciilor. Divulgăm aceste categorii furnizorilor de servicii pentru scopurile de afaceri de la secțiunea 3.
- **Vânzarea și partajarea:** nu vindem informațiile cu caracter personal și nu le partajăm în scopul publicității comportamentale interculturale. Nu vindem și nu partajăm cu bună știință datele persoanelor sub 16 ani.
- **Informații personale sensibile:** nu le utilizăm pentru a deduce caracteristici și nu le folosim dincolo de ceea ce este necesar pentru furnizarea Serviciilor.
- **Drepturile dumneavoastră:** de a cunoaște și accesa datele, de a le șterge, de a le corecta, de portabilitate, de a renunța la vânzare și partajare, la publicitatea direcționată sau la profilare, de a limita utilizarea datelor sensibile și de nediscriminare. Respectăm **Global Privacy Control** și semnalele similare de renunțare din browser ca fiind o cerere valabilă de renunțare.
- **Agenți autorizați și contestații:** un agent autorizat poate transmite cereri cu acordul dumneavoastră scris. Dacă respingem o cerere, puteți contesta decizia răspunzând la comunicarea noastră; dacă rămâneți nemulțumit, puteți contacta procurorul general al statului dumneavoastră.
- **California:** puteți solicita o listă a terților cărora le-am divulgat informații cu caracter personal pentru marketingul lor direct în anul calendaristic anterior („Shine the Light”); nu efectuăm astfel de divulgări. Rezidenții din California sub 18 ani care sunt utilizatori înregistrați pot solicita eliminarea conținutului pe care l-au publicat.

### 10.4 Brazilia (LGPD)

Puteți solicita confirmarea prelucrării, accesul, corectarea, anonimizarea, blocarea sau ștergerea datelor inutile sau excesive, portabilitatea, informații despre entitățile cu care partajăm datele, informații despre posibilitatea de a refuza consimțământul și despre consecințele refuzului, precum și reexaminarea deciziilor automate. Puteți depune o plângere la Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Alte regiuni

Dacă vă aflați în altă parte, cu o lege privind protecția datelor, respectăm drepturile echivalente pe care vi le acordă legea dumneavoastră. În special:

| Unde | Ce adăugăm |
|---|---|
| **Canada** (PIPEDA, Legea 25 din Quebec) | Puteți accesa și corecta datele dumneavoastră, vă puteți retrage consimțământul și puteți depune o plângere la Office of the Privacy Commissioner sau la Commission d'accès à l'information. Persoana de contact pentru confidențialitate este persoana responsabilă cu protejarea informațiilor cu caracter personal; transferurile în afara Quebecului sunt evaluate și protejate. |
| **India** (DPDP Act 2023) | Puteți accesa, corecta și șterge datele, puteți desemna o altă persoană care să vă exercite drepturile în caz de deces sau incapacitate și puteți folosi contactul nostru pentru reclamații de mai jos; puteți depune o plângere la Data Protection Board. |
| **Australia, Noua Zeelandă** | Puteți solicita accesul și corectarea și ne puteți adresa o plângere, apoi la OAIC (Australia) sau la Privacy Commissioner (Noua Zeelandă). |
| **Japonia, Coreea de Sud, Singapore, Thailanda, Malaysia, Türkiye, Emiratele Arabe Unite, Arabia Saudită, Africa de Sud, Kenya, Nigeria și legi similare** | Aplicăm drepturile și garanțiile pe care le impun aceste legi (acces, corectare, ștergere, opoziție, plângere la autoritatea locală, garanții pentru transferuri). Contactați-ne pentru a le utiliza. |
| **China** | Serviciile nu sunt destinate persoanelor din China continentală; nu le utilizați pentru a transmite date cu caracter personal ale unor persoane de acolo. |

**Punctul de contact pentru reclamații și confidențialitate, pentru toate regiunile:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Tratăm cererile în termenul permis de legea aplicabilă.

## 11. Modificări ale prezentei politici {#changes}

Putem actualiza prezenta politică pentru a reflecta modificările Serviciilor sau ale legii. Pentru modificările importante vă vom acorda un preaviz de cel puțin {{policy.notice_days}} zile, prin e-mail sau în Servicii, înainte ca acestea să vă fie aplicabile, și vom cere un nou consimțământ acolo unde legea o impune. Data „ultimei actualizări” de mai sus indică versiunea curentă; versiunile anterioare sunt disponibile la cerere.

## 12. Contact {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
