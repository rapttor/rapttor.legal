---
doc: refunds
title: Politica de rambursare și anulare
version: 1.1.1
updated: 2026-10-31
lang: ro
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Cum anulați, când puteți retrage sau obține o rambursare și ce se întâmplă cu achizițiile făcute prin magazinele de aplicații.
---

# Politica de rambursare și anulare

*Versiunea {{doc.version}}, ultima actualizare {{doc.updated}}.*

Prezenta politică face parte din [Termenii și condițiile]({{url.terms}}) și se aplică achizițiilor făcute de la **{{company.name}}** („noi”) pentru {{product.name}}. Nimic din prezenta politică nu limitează drepturile pe care le aveți în temeiul legislației obligatorii privind protecția consumatorilor.

## Contează de unde ați cumpărat {#where}

- **Cumpărat direct de la noi** (site-ul nostru sau procesul de plată): se aplică prezenta politică.
{{#if feature.merchant_of_record}}- **Cumpărat prin furnizorul nostru de plăți{{#if payments.provider}} {{payments.provider}}{{/if}}** (comerciant înregistrat, merchant of record): furnizorul este vânzătorul comenzii, se ocupă de plată, de taxe și de chitanțe și procesează rambursările în conformitate cu condițiile sale de plată și cu prezenta politică. Cererile pot fi trimise fie nouă, fie furnizorului.
{{/if}}
- **Cumpărat prin magazinul de aplicații sau o platformă** (Apple App Store, Google Play, magazine de consolă sau de PC): magazinul este vânzătorul înregistrat și **se ocupă de rambursări, anulări și facturare**. Solicitați rambursarea de la magazin, prin procesul propriu al acestuia; noi nu putem rambursa aceste plăți, dar vă vom ajuta să confirmați faptele și putem revoca articolul achiziționat atunci când magazinul efectuează rambursarea. Regulile magazinului și legea locală vă stabilesc drepturile în acest caz.

{{#if feature.subscriptions}}
## Anularea unui abonament {#cancel}

Puteți anula oricând din setările contului dumneavoastră{{#if feature.mobile}} (sau din setările de abonament ale magazinului, dacă v-ați abonat acolo){{/if}} sau scriindu-ne la [{{company.email}}](mailto:{{company.email}}). Anularea oprește reînnoirile viitoare; păstrați accesul până la sfârșitul perioadei plătite. Nu calculăm pro-rata pentru perioadele parțiale, decât dacă legea sau prezenta politică prevăd altfel. Anularea este la fel de ușoară ca înscrierea: un buton direct de anulare în contul dumneavoastră, fără apeluri și fără formulare. Vă reamintim înainte de o reînnoire sau de trecerea unei perioade de probă la un plan plătit acolo unde legea o cere; pentru planurile de un an sau mai mult trimitem un memento cu 15 până la 45 de zile înainte de reînnoire, precum și un memento anual, cu prețul și modul de anulare. Condițiile de reînnoire sunt afișate întotdeauna lângă butonul de plată.
{{/if}}

## Dreptul de retragere pentru consumatori (UE, Regatul Unit și legi similare) {#withdrawal}

{{#if feature.consumers}}
Dacă sunteți consumator în UE, în Regatul Unit sau într-o altă țară care acordă un drept de retragere pentru contractele la distanță, puteți să vă retrageți dintr-o achiziție **în termen de {{policy.refund_days}} zile** de la încheierea contractului, fără a fi nevoie să indicați un motiv.

**Conținut digital și servicii digitale.** Dacă ne cereți să începem furnizarea unui serviciu digital sau a unui conținut digital (de exemplu acces, credite sau obiecte virtuale) în perioada de retragere și confirmați că înțelegeți că este posibil să pierdeți dreptul de retragere, atunci:
- pentru **conținutul digital care nu este pe un suport material**, după ce furnizarea a început cu consimțământul dumneavoastră expres, pierdeți dreptul de retragere;
- pentru un **serviciu digital**, puteți totuși să vă retrageți în termen, dar plătiți o sumă proporțională cu ceea ce a fost furnizat până în momentul în care ne comunicați decizia.

Solicităm acest consimțământ la finalizarea comenzii. Dacă nu l-ați dat, se aplică dreptul de retragere integral.

**Funcția de retragere.** Așa cum impune legea începând cu 19 iunie 2026, în contul dumneavoastră și în confirmarea comenzii este disponibilă funcția „Retrage-te din contract”: alegeți contractul, confirmați și primiți pe un suport durabil (e-mail) o confirmare care menționează data și ora. Nu trebuie să explicați motivul.

**Alte modalități de retragere.** Trimiteți o declarație clară (de exemplu prin e-mail la [{{company.email}}](mailto:{{company.email}})) privind decizia dumneavoastră de retragere, cu numele, detaliile comenzii sau ale contului și data achiziției. Puteți folosi formularul de mai jos, dar nu sunteți obligat să o faceți. Vom confirma primirea și vă vom rambursa **în termen de 14 zile** de la aflarea deciziei dumneavoastră, folosind aceeași metodă de plată.

> **Model de formular de retragere** (completați și returnați numai dacă doriți să vă retrageți)
> Către {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Prin prezenta vă notific faptul că mă retrag/ne retragem din contractul meu/nostru pentru furnizarea următorului serviciu/conținut digital: ______ ; comandat la/primit la: ______ ; nume: ______ ; adresă: ______ ; data: ______ (semnătura doar dacă formularul este pe hârtie).
{{else}}
Serviciile noastre sunt oferite numai companiilor, prin urmare drepturile legale de retragere ale consumatorilor nu se aplică. Contactați-ne dacă considerați că sunteți consumator.
{{/if}}

## Alte țări {#other-countries}

Unele locuri acordă drepturi suplimentare de anulare sau de rambursare (de exemplu perioade de reflecție, reguli privind reînnoirea automată în mai multe state ale SUA sau garanții legale în Australia, Noua Zeelandă și Regatul Unit). Acolo unde sunt obligatorii, aceste drepturi se aplică și înlocuiesc orice dispoziție mai puțin favorabilă din prezenta politică.

## Când rambursăm {#refunds}

Vom rambursa, integral sau parțial, după caz:

- o **taxare duplicată sau eronată**, sau o taxare pe care nu ați autorizat-o (raportați-o prompt; este posibil să solicităm detalii);
- o achiziție la care **serviciul nu a putut fi furnizat** sau este defectuos în mod substanțial și pe care nu o putem remedia într-un termen rezonabil;
- o achiziție pe care solicitați să o anulați în termen de **{{policy.refund_days}} zile**, dacă nu ați folosit ceea ce ați cumpărat (inclusiv creditele neutilizate), la latitudinea noastră acolo unde nu se aplică niciun drept legal;
- orice altceva convenim în scris.

În caz contrar, tarifele plătite nu sunt rambursabile, inclusiv pentru perioadele parțiale, pentru articolele folosite sau consumate și pentru conturile închise din cauza încălcării [Politicii de utilizare acceptabilă]({{url.acceptable_use}}). Rambursările se fac în metoda de plată inițială; putem rambursa în credite numai dacă ni se solicită acest lucru.

{{#if feature.credits}}
## Credite și obiecte virtuale {#credits}

Creditele plătite în avans, dacă sunt neutilizate, pot fi rambursate în perioada de mai sus. Creditele și obiectele virtuale care au fost cheltuite sau consumate nu sunt rambursabile, cu excepția cazurilor în care legea o impune. Dacă încetăm un serviciu, gestionăm soldurile plătite rămase conform descrierii din [Termenii și condițiile]({{url.terms}}){{#if feature.game}} și din [Regulile jocului]({{url.game_rules}}){{/if}}.
{{/if}}

## Contestări de plăți și dispute {#chargebacks}

Vă rugăm să ne contactați înainte de a contesta o taxare la banca dumneavoastră sau la emitentul cardului: de obicei soluționăm problema mai rapid. Dacă deschideți o dispută pentru o taxare valabilă, putem suspenda contul până la soluționare și putem transmite furnizorului de plăți dovezile privind livrarea și utilizarea.

## Taxe și monedă {#taxes}

Rambursările includ taxa care a fost percepută. Dacă ați plătit într-o altă monedă, suma returnată poate diferi din cauza fluctuațiilor cursului de schimb și a comisioanelor bancare, care nu depind de noi.

## Cum solicitați {#contact}

Scrieți la [{{company.email}}](mailto:{{company.email}}), indicând adresa de e-mail a contului, numărul comenzii sau al chitanței și o scurtă descriere. Vă vom răspunde la mesaj. Dacă nu putem soluționa problema, puteți contacta autoritatea locală pentru protecția consumatorilor{{#if consumer_dispute}} sau {{consumer_dispute}}{{/if}}.
