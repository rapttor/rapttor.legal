---
doc: privacy
title: Polityka prywatności
version: 1.2.1
updated: 2026-10-31
lang: pl
translation_of: 1.2.1
status: draft
summary: Jak {{product.name}} zbiera, wykorzystuje, udostępnia i chroni dane osobowe oraz jakie prawa przysługują użytkownikom.
---

# Polityka prywatności

*Wersja {{doc.version}}, ostatnia aktualizacja {{doc.updated}}.*

## 1. Kim jesteśmy {#who-we-are}

Niniejsza polityka wyjaśnia, jak **{{company.name}}** (adres siedziby: {{company.address}}; dalej „**{{product.name}}**”, „my”) przetwarza dane osobowe, gdy użytkownik korzysta z {{product.name}}, naszych stron internetowych, aplikacji, interfejsów API i powiązanych usług (dalej „**Usługi**”).

W odniesieniu do danych osobowych, co do których decydujemy, w jaki sposób i w jakim celu są przetwarzane (na przykład konto, odwiedziny stron i rozliczenia), jesteśmy **administratorem**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Nasz inspektor ochrony danych jest dostępny pod adresem [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nie wyznaczyliśmy inspektora ochrony danych, ponieważ prawo tego nie wymaga w związku z naszą działalnością. Pytania dotyczące prywatności należy kierować na adres [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Przedstawiciel w UE (art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Przedstawiciel w Wielkiej Brytanii (art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Gdy działamy jako podmiot przetwarzający

Jeżeli Usługi są wykorzystywane za pośrednictwem organizacji (pracodawcy, klienta biznesowego), to ta organizacja jest zazwyczaj administratorem danych, które wprowadza do Usług, a my przetwarzamy je w jej imieniu na podstawie naszego [Aneksu dotyczącego przetwarzania danych]({{url.dpa}}). W takim przypadku wnioski należy kierować do tej organizacji; my pomożemy jej na nie odpowiedzieć. Niniejsza polityka dotyczy wtedy wyłącznie danych, które kontrolujemy sami (administracja kontem, rozliczenia, bezpieczeństwo, strona internetowa).
{{/if}}

## 2. Dane, które zbieramy {#data-we-collect}

| Kategoria | Przykłady | Źródło |
|---|---|---|
| **Dane konta** | imię i nazwisko, adres e-mail, skrót hasła, dane profilu, język, preferencje | Użytkownik |
| **Dane kontaktowe i dane wsparcia** | wiadomości, załączniki, notatki z rozmów, opinie, odpowiedzi w ankietach | Użytkownik |
| **Treści przesłane przez użytkownika** | pliki, tekst, ustawienia, wszystko, co użytkownik umieszcza w Usługach | Użytkownik |
{{#if feature.anonymous}}| **Dane anonimowego konta** | losowy identyfikator konta, przeglądarka lub sesja urządzenia, która go przechowuje, treści utworzone przez użytkownika oraz adres e-mail, jeżeli zostanie później powiązany z kontem | Użytkownik, automatycznie |
{{/if}}{{#if feature.uploads}}| **Pliki i obrazy przesyłane przez użytkownika** | same pliki oraz metadane zawarte w nich (na przykład dane aparatu lub lokalizacja na zdjęciach) | Użytkownik |
{{/if}}| **Rejestry zgód** | na co użytkownik wyraził zgodę (dokumenty, potwierdzenie wieku, opcjonalne wybory), wersja, język, data i sposób wyrażenia zgody | Użytkownik |
| **Dane o użytkowaniu i urządzeniu** | adres IP, typ przeglądarki i urządzenia, system operacyjny, język, odwiedzane strony i używane funkcje, znaczniki czasu, adres strony odsyłającej (referrer), dzienniki awarii i błędów | Automatycznie |
| **Pliki cookie i podobne technologie** | identyfikatory w plikach cookie, local storage, zestawy SDK (zob. [Politykę plików cookie]({{url.cookies}})) | Automatycznie |
{{#if feature.payments}}| **Dane płatnicze i transakcyjne** | plan, faktury, imię i nazwisko oraz adres do rozliczeń, numer identyfikacji podatkowej, status płatności; dane karty obsługuje nasz operator płatności i nie są one przez nas przechowywane | Użytkownik, operator płatności |
{{/if}}{{#if feature.location}}| **Dane o lokalizacji** | dokładna lokalizacja wyłącznie wtedy, gdy zostanie włączona na urządzeniu; w pozostałych przypadkach przybliżona lokalizacja na podstawie adresu IP | Urządzenie użytkownika |
{{/if}}| **Dane z konta u osoby trzeciej** | imię i nazwisko, adres e-mail, zdjęcie profilowe i identyfikator udostępnione przez dostawcę logowania wybranego przez użytkownika | Osoba trzecia, za zgodą użytkownika |
{{#if feature.ugc}}| **Komunikacja między użytkownikami** | wiadomości i interakcje, które użytkownik wysyła za pośrednictwem Usług | Użytkownik |
{{/if}}{{#if feature.mobile}}| **Dane urządzenia mobilnego** | model urządzenia i wersja systemu operacyjnego, wersja aplikacji, identyfikatory instancji aplikacji i tokeny powiadomień push, język i strefa czasowa, status uprawnień; identyfikator reklamowy wyłącznie wtedy, gdy użytkownik zezwoli na śledzenie | Urządzenie użytkownika |
{{/if}}{{#if feature.game}}| **Dane z rozgrywki** | postęp w grze, wyniki, rankingi, przedmioty i zakupy, historia rozgrywek, czat w grze oraz (jeżeli jest używane) zgłoszenia głosowe, sygnały przeciwdziałania oszustwom i integralności, profil publiczny (nazwa, awatar, ranga) | Użytkownik, automatycznie |
{{/if}}| **Sygnały bezpieczeństwa i wykrywania oszustw** | nieudane próby logowania, zgłoszenia nadużyć, oceny ryzyka, zablokowane żądania | Automatycznie, inni użytkownicy |

Nie zbieramy celowo danych szczególnych kategorii (dane o zdrowiu, dane biometryczne, poglądy polityczne lub religijne i podobne). Prosimy o nieprzesyłanie takich danych, chyba że funkcja wyraźnie tego wymaga. Jeżeli użytkownik mimo to przesyła takie dane, odpowiada za posiadanie podstawy prawnej do ich przetwarzania.

Podanie danych osobowych nie jest obowiązkowe, ale bez niektórych z nich (na przykład adresu e-mail) nie możemy założyć konta.

### Śledzenie, którego nie stosujemy {#no-tracking}

Nie stosujemy narzędzi do nagrywania sesji ani ekranu, rejestrowania naciśnięć klawiszy lub ruchów myszy ani identyfikacji przeglądarki (browser fingerprinting). {{#if feature.analytics}}Analityka działa wyłącznie za zgodą (zob. [Politykę plików cookie]({{url.cookies}})).{{else}}Nie korzystamy z narzędzi analitycznych ani reklamowych.{{/if}}
{{#if feature.external}}
### Zasoby stron trzecich a adres IP {#external}

Niektóre funkcje ładują treści z serwerów innych firm (na przykład czcionki, mapy, wideo lub weryfikacje bezpieczeństwa). Gdy przeglądarka pobiera takie treści, **adres IP użytkownika i dane techniczne są przesyłane do tej firmy**, która może działać poza krajem użytkownika. Zasoby te ładujemy dopiero po wyrażeniu przez użytkownika zgody na każdy z nich w ustawieniach plików cookie, które można zmienić w dowolnym momencie; jeżeli użytkownik odmówi, używamy rozwiązania zastępczego albo funkcja pozostaje wyłączona.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-maile {#emails}

Wysyłamy wiadomości e-mail niezbędne do działania Usług (linki do logowania, potwierdzenia płatności, powiadomienia o bezpieczeństwie){{#if feature.marketing}} oraz – wyłącznie tam, gdzie użytkownik wyraził zgodę lub przepisy na to zezwalają – informacje o produktach{{/if}}. Każda wiadomość zawiera link umożliwiający rezygnację z otrzymywania od nas e-maili. {{#if feature.marketing}}Opcjonalne wiadomości przestają być wysyłane natychmiast po jednym kliknięciu. {{/if}}Ponieważ zablokowanie wszystkich e-maili zablokowałoby również linki do logowania, żądanie zablokowania **wszystkich** e-maili z tej usługi potwierdzamy jeszcze jedną wiadomością zawierającą link, który potwierdza, że adres należy do użytkownika. Następnie dodajemy adres do listy adresów wykluczonych z wysyłki u naszego dostawcy usług e-mailowych i przechowujemy go tam, aby móc uszanować wybór użytkownika (obowiązek prawny oraz nasz prawnie uzasadniony interes w poszanowaniu żądania).
{{/if}}{{#if feature.age_gate}}
### Potwierdzenie wieku {#age}

Przed skorzystaniem z funkcji dotyczących: {{policy.age_topics|treści o ograniczeniach wiekowych}}, prosimy o potwierdzenie, że użytkownik ma co najmniej {{policy.age_gate}} lat i jest pełnoletni zgodnie z przepisami swojego kraju. Nie pytamy o datę urodzenia; przechowujemy wyłącznie potwierdzenie oraz moment, w którym zostało złożone. Jeżeli dowiemy się, że użytkownik nie osiągnął wymaganego wieku, blokujemy konto i usuwamy dane.
{{/if}}{{#if feature.gambling}}
W przypadku funkcji hazardowych możemy także żądać dowodu wieku i tożsamości oraz w tym celu korzystać z dostawcy weryfikacji. Wynik weryfikacji oraz dowody wymagane przez prawo przechowujemy.
{{/if}}

## 3. Dlaczego przetwarzamy dane i nasze podstawy prawne {#purposes}

| Cel | Podstawa prawna (GDPR / UK GDPR) |
|---|---|
| Świadczenie Usług, zakładanie i zarządzanie kontem, realizacja zamówień | Umowa (art. 6 ust. 1 lit. b) |
| Obsługa klienta i komunikacja dotycząca korzystania z Usług | Umowa; prawnie uzasadnione interesy |
| Bezpieczeństwo, zapobieganie nadużyciom i oszustwom, egzekwowanie [Regulaminu]({{url.terms}}) i [Polityki dopuszczalnego użytkowania]({{url.acceptable_use}}) | Prawnie uzasadniony interes (art. 6 ust. 1 lit. f); obowiązek prawny |
| Diagnozowanie błędów, niezawodność, planowanie zdolności obsługi oraz ulepszanie Usług | Prawnie uzasadnione interesy |
{{#if feature.analytics}}| Analiza sposobu korzystania z Usług | Zgoda, jeżeli wymaga tego prawo; w pozostałych przypadkach prawnie uzasadnione interesy |
{{/if}}{{#if feature.marketing}}| Informacje o produktach i e-maile marketingowe | Zgoda albo prawnie uzasadnione interesy wobec dotychczasowych klientów, jeżeli prawo na to pozwala; sprzeciw można wnieść w dowolnym momencie |
{{/if}}{{#if feature.ads}}| Reklama i pomiar skuteczności | Zgoda |
{{/if}}| Rejestrowanie zgód i uwzględnianie wyborów dotyczących e-maili | Obowiązek prawny; prawnie uzasadnione interesy |
{{#if feature.external}}| Ładowanie zasobów stron trzecich, które otrzymują adres IP | Zgoda (art. 6 ust. 1 lit. a) oraz przepisy ePrivacy dotyczące dostępu do urządzenia |
{{/if}}| Rachunkowość, podatki i inne obowiązki prawne | Obowiązek prawny (art. 6 ust. 1 lit. c) |
| Ustalanie, dochodzenie lub obrona roszczeń prawnych; odpowiedzi na żądania organów | Prawnie uzasadnione interesy; obowiązek prawny |
| Transakcje biznesowe (połączenie, przejęcie, sprzedaż aktywów) | Prawnie uzasadnione interesy |

Tam, gdzie opieramy się na prawnie uzasadnionych interesach, zważyliśmy je z prawami użytkownika; użytkownik może zażądać szczegółów oraz wnieść sprzeciw (sekcja 10). Tam, gdzie opieramy się na zgodzie, można ją w każdej chwili wycofać; nie wpływa to na wcześniejsze przetwarzanie.

{{#if feature.ai}}
### Funkcje wspomagane sztuczną inteligencją {#ai}

Niektóre funkcje wykorzystują modele uczenia maszynowego lub modele generatywne. Gdy użytkownik z nich korzysta, treści przesłane jako dane wejściowe są przekazywane dostawcy działającemu jako nasz podmiot przetwarzający w celu wygenerowania wyniku.

- **Nie** wykorzystujemy treści użytkowników do trenowania modeli ogólnego przeznaczenia, a od naszych dostawców wymagamy tego samego, chyba że użytkownik wyraźnie na to wyrazi zgodę.
- Wyniki generowane przez AI mogą być błędne, niepełne lub stronnicze. Nie należy opierać na nich decyzji prawnych, medycznych, finansowych ani innych o dużym znaczeniu bez weryfikacji przez człowieka.
- Nie podejmujemy decyzji wywołujących wobec użytkownika skutki prawne lub podobnie istotnie na niego wpływających wyłącznie w sposób zautomatyzowany. Ograniczenia konta z powodu nadużyć są na żądanie weryfikowane przez człowieka (zob. [Politykę dopuszczalnego użytkowania]({{url.acceptable_use}}), część dotyczącą egzekwowania).
- Treści wygenerowane przez AI są oznaczane, jeżeli wymaga tego prawo.
{{/if}}

## 4. Komu udostępniamy dane {#sharing}

**Nie sprzedajemy danych osobowych użytkowników** i nie „udostępniamy” ich w celu reklamy behawioralnej międzykontekstowej{{#if feature.ads}}, z wyjątkiem opisanym w Polityce plików cookie i wyłącznie wtedy, gdy użytkownik wyraził zgodę{{/if}}.

Dane osobowe udostępniamy wyłącznie:

- **Dostawcom usług (podmiotom przetwarzającym)** działającym zgodnie z naszymi poleceniami na podstawie pisemnych umów: hosting i infrastruktura, dostarczanie wiadomości e-mail, narzędzia do obsługi klienta, monitorowanie błędów{{#if feature.payments}}, obsługa płatności{{/if}}{{#if feature.ai}}, dostawcy usług AI{{/if}}. Aktualna lista znajduje się w [Wykazie podmiotów przetwarzających]({{url.subprocessors}}).
- **Platformom i sklepom z aplikacjami**, za pośrednictwem których użytkownik korzysta z Usług (na przykład Apple, Google, sklepy konsolowe lub komputerowe), które obsługują płatności i mogą przekazywać nam ograniczone dane o zakupach i koncie;
- **Innym użytkownikom lub opinii publicznej**, wyłącznie zgodnie z decyzją użytkownika (na przykład treści, które użytkownik zdecyduje się opublikować{{#if feature.ugc}} lub wiadomości, które wysyła{{/if}});
- **Doradcom zawodowym** (prawnikom, audytorom, ubezpieczycielom) objętym obowiązkiem zachowania poufności;
- **Organom państwowym, sądom i zainteresowanym stronom**, jeżeli wymaga tego prawo, w celu odpowiedzi na prawnie wiążące żądania, ochrony praw, bezpieczeństwa lub mienia albo badania nadużyć i oszustw. Sprawdzamy ważność żądań i – jeżeli jest to zgodne z prawem – informujemy o nich użytkownika;
- **Następcy prawnemu** w razie połączenia, przejęcia, finansowania lub sprzedaży aktywów, który jest zobowiązany do przestrzegania niniejszej polityki; o istotnych zmianach kontroli, które dotyczą danych, powiadomimy użytkownika;
- **Każdemu innemu podmiotowi** wyłącznie za zgodą użytkownika.

## 5. Międzynarodowe przekazywanie danych {#transfers}

Siedziba działalności: {{company.country}}{{#if hosting.region}}; dane przechowujemy głównie w regionie: {{hosting.region}}{{/if}}. Niektórzy dostawcy przetwarzają dane w innych krajach, w tym w Stanach Zjednoczonych. Gdy dane osobowe z EOG, Wielkiej Brytanii lub Szwajcarii są przekazywane do państwa, dla którego nie wydano decyzji stwierdzającej odpowiedni stopień ochrony, stosujemy uznane zabezpieczenie: Ramy ochrony danych UE–USA (EU-U.S. Data Privacy Framework) lub ich odpowiedniki dla Wielkiej Brytanii i Szwajcarii, jeżeli odbiorca jest certyfikowany, a w pozostałych przypadkach **standardowe klauzule umowne** Komisji Europejskiej wraz z **Aneksem dotyczącym międzynarodowego przekazywania danych (UK International Data Transfer Addendum)** lub zmianami szwajcarskimi, jeżeli mają zastosowanie, oraz dodatkowe środki, takie jak szyfrowanie w transmisji i w spoczynku. Kopię odpowiednich zabezpieczeń można zażądać pod adresem [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Jak długo przechowujemy dane {#retention}

| Dane | Okres przechowywania |
|---|---|
| Dane konta i treści | Przez czas aktywności konta, następnie usunięcie lub anonimizacja w ciągu {{policy.retention_account_days}} dni od zamknięcia konta |
| Dzienniki serwerowe i bezpieczeństwa | 90 dni |
| Kopie zapasowe | Cyklicznie, do 35 dni; usunięte dane znikają z kopii w tym samym cyklu |
| Faktury i dokumentacja księgowa | {{policy.retention_billing_years}} lat lub tyle, ile wymaga prawo |
| Korespondencja z pomocą techniczną | Do 3 lat po zamknięciu sprawy lub przez czas aktywności konta, jeżeli jest dłuższy |
| Rejestry zgód, rezygnacji i żądań dotyczących praw | Tak długo, jak jest to potrzebne do wykazania zgodności |
| Dane potrzebne do roszczenia prawnego lub postępowania | Do rozstrzygnięcia sprawy i upływu terminów przedawnienia |
| Rejestry nadużyć i blokad (identyfikator, powód, data) | Do 5 lat, aby zapobiegać powtarzaniu się nadużyć |
| Rejestry zgód oraz lista adresów wykluczonych z wysyłki | Rejestry zgód: przez czas istnienia konta oraz termin przedawnienia; wpisy na liście wykluczonych: do czasu, aż użytkownik zażąda ich usunięcia |

Gdy cel przetwarzania ustanie, usuwamy dane lub nieodwracalnie je anonimizujemy.

## 7. Bezpieczeństwo {#security}

Stosujemy środki techniczne i organizacyjne odpowiednie do ryzyka: szyfrowanie w transmisji, szyfrowanie wrażliwych danych w spoczynku, kontrolę dostępu oparta na zasadzie najmniejszych uprawnień, zabezpieczenia uwierzytelniania, rejestrowanie zdarzeń, kopie zapasowe, zarządzanie podatnościami oraz obowiązki zachowania poufności przez personel. Żaden system nie jest w pełni bezpieczny. Zaleca się stosowanie silnego, unikalnego hasła, włączenie uwierzytelniania wieloskładnikowego, jeżeli jest oferowane, oraz niezwłoczne zgłoszenie na adres [{{company.email}}](mailto:{{company.email}}) podejrzenia, że konto zostało przejęte. Zob. także stronę [Bezpieczeństwo i zgłaszanie podatności]({{url.security}}).

Jeżeli naruszenie może powodować wysokie ryzyko dla praw i wolności osób, powiadomimy organ nadzorczy w ciągu 72 godzin od stwierdzenia naruszenia, gdy wymaga tego prawo, oraz – gdy prawo to nakazuje – powiadomimy o nim osoby, których dotyczy, bez zbędnej zwłoki.

## 8. Dzieci {#children}

{{#if feature.minors}}Usługi nie są kierowane do dzieci poniżej 13 lat i nie zbieramy świadomie danych osobowych od takich osób. Osoby w wieku {{policy.min_age}} lat i starsze, które nie osiągnęły jeszcze pełnoletności, mogą korzystać z Usług **wyłącznie za zgodą rodzica lub opiekuna prawnego**, który może przeglądać, poprawiać, ograniczać i usuwać dane małoletniego oraz wycofać zgodę, kontaktując się z [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Zbieramy wyłącznie dane niezbędne do działania Usług, nie wykorzystujemy danych małoletnich do reklamy behawioralnej i – tam, gdzie to możliwe – stosujemy domyślne ustawienia odpowiednie do wieku (profile prywatne, ograniczona komunikacja). Jeżeli prawo danego kraju wyznacza wyższy wiek wyrażenia zgody na usługi cyfrowe, wymagamy zgody rodzica poniżej tego wieku.{{else}}Usługi nie są kierowane do dzieci. Aby posiadać konto, trzeba mieć co najmniej {{policy.min_age}} lat. Nie zbieramy świadomie danych osobowych od osób poniżej {{policy.min_age}} lat (lub poniżej wyższego wieku wyrażenia zgody na usługi cyfrowe obowiązującego w ich kraju; w Stanach Zjednoczonych – poniżej 13 lat dla celów COPPA). Jeżeli istnieje podejrzenie, że dziecko przekazało nam dane osobowe, prosimy o kontakt na adres [{{company.privacy_email}}](mailto:{{company.privacy_email}}); wtedy dane zostaną usunięte, a konto zamknięte. Jeżeli rodzic lub opiekun prawny ważnie wyraził zgodę na korzystanie z Usług przez małoletniego, zgodę tę można w każdej chwili wycofać.{{/if}}

## 9. Strony i usługi stron trzecich {#third-parties}

Usługi mogą zawierać odnośniki do stron, wtyczek i aplikacji stron trzecich lub być z nimi zintegrowane, w tym z dostawcami logowania. Nie kontrolujemy ich i nie ponosimy odpowiedzialności za ich praktyki w zakresie prywatności; to ich własne polityki określają, jakie dane zbierają. Integracje można odłączyć w ustawieniach konta lub w ustawieniach danej strony trzeciej.

## 10. Prawa użytkownika {#rights}

W zależności od miejsca zamieszkania użytkownik może:

- **uzyskać dostęp** do swoich danych i otrzymać ich kopię;
- **sprostować** nieprawidłowe dane;
- **usunąć** dane („prawo do bycia zapomnianym”);
- **ograniczyć** przetwarzanie lub **sprzeciwić się** mu, w tym wobec marketingu bezpośredniego w dowolnym momencie;
- **przenieść** dane do innego dostawcy w formacie nadającym się do odczytu maszynowego;
- **wycofać zgodę** w dowolnym momencie;
- **nie podlegać** decyzjom opartym wyłącznie na zautomatyzowanym przetwarzaniu, wywołującym wobec niego skutki prawne lub podobnie istotnie na niego wpływającym;
- **złożyć skargę** do organu nadzorczego.

**Usunięcie konta.** Konto i dane osobowe można usunąć {{#if feature.mobile}}w aplikacji (Ustawienia, następnie Konto, następnie Usuń konto), {{/if}}w ustawieniach konta na naszej stronie internetowej lub wysyłając wiadomość e-mail; nie wymagamy kontaktu z pomocą techniczną, jeżeli dostępna jest obsługa samodzielna. Usunięcie konta jest nieodwracalne po upływie okresu karencji, który zostanie pokazany użytkownikowi. Odinstalowanie aplikacji nie usuwa konta.

Aby skorzystać z prawa, należy wysłać wiadomość e-mail na adres [{{company.privacy_email}}](mailto:{{company.privacy_email}}) lub skorzystać z ustawień konta. Możemy wymagać weryfikacji tożsamości, a jeżeli żądanie jest oczywiście bezzasadne lub nadmierne, możemy pobrać rozsądną opłatę lub odmówić jego realizacji, w granicach dopuszczonych przez prawo. Odpowiadamy w ciągu **jednego miesiąca** (termin można przedłużyć o dwa kolejne miesiące w przypadku złożonych żądań; w przypadku przepisów stanowych USA – 45 dni, z możliwością przedłużenia o kolejne 45 dni). Jeżeli nie możemy spełnić żądania, podajemy powód. Nie dyskryminujemy użytkownika za korzystanie z jego praw.

### 10.1 Europejski Obszar Gospodarczy, Wielka Brytania, Szwajcaria

Wszystkie wymienione powyżej prawa obowiązują. Skargę można wnieść do organu w kraju zamieszkania, pracy lub miejsca, w którym doszło do naruszenia ([wykaz organów EOG](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Wielka Brytania: [ICO](https://ico.org.uk); Szwajcaria: [FDPIC](https://www.edoeb.admin.ch)). Nasz wiodący organ nadzorczy to {{law.authority}}.

### 10.2 Serbia

Jeżeli ma zastosowanie serbska ustawa o ochronie danych osobowych, użytkownikowi przysługują prawa równoważne powyższym, a skargę może wnieść do Komisarza ds. informacji publicznych i ochrony danych osobowych (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Stany Zjednoczone (Kalifornia i inne stany) {#us-states}

Niniejsza sekcja uzupełnia powyższe postanowienia dla mieszkańców Kalifornii oraz innych stanów USA, które mają kompleksowe przepisy o prywatności (w tym Wirginii, Kolorado, Connecticut, Utah, Teksasu, Oregonu, Montany i innych, w miarę wchodzenia ich w życie).

- **Kategorie danych zebrane w ciągu ostatnich 12 miesięcy:** identyfikatory (imię i nazwisko, adres e-mail, adres IP, identyfikatory online); dane o klientach; informacje handlowe (plany, zakupy); aktywność w internecie lub sieci; przybliżona geolokalizacja{{#if feature.location}} oraz dokładna geolokalizacja za zgodą użytkownika{{/if}}; treści przesłane przez użytkownika; wnioski ograniczone do działania Usług. Ujawniamy je dostawcom usług do celów biznesowych wymienionych w sekcji 3.
- **Sprzedaż i udostępnianie:** nie sprzedajemy danych osobowych i nie udostępniamy ich do celów reklamy behawioralnej międzykontekstowej. Świadomie nie sprzedajemy ani nie udostępniamy danych osób poniżej 16 lat.
- **Wrażliwe dane osobowe:** nie wykorzystujemy ich do wnioskowania o cechach użytkownika i nie używamy ich w zakresie wykraczającym poza to, co niezbędne do świadczenia Usług.
- **Prawa użytkownika:** dostęp i wiedza, usunięcie, sprostowanie, przenoszenie, sprzeciw wobec sprzedaży lub udostępniania danych oraz reklamy ukierunkowanej lub profilowania, ograniczenie wykorzystania wrażliwych danych oraz zakaz dyskryminacji. Uznajemy **Global Privacy Control** oraz podobne sygnały rezygnacji przekazywane przez przeglądarkę za prawidłowe żądanie rezygnacji.
- **Pełnomocnicy i odwołania:** pełnomocnik może składać żądania za pisemnym upoważnieniem użytkownika. Jeżeli odmówimy spełnienia żądania, użytkownik może się odwołać, odpowiadając na naszą decyzję; jeżeli pozostaje niezadowolony, może skontaktować się z prokuratorem generalnym swojego stanu.
- **Kalifornia:** użytkownik może zażądać listy stron trzecich, którym w poprzednim roku kalendarzowym ujawniliśmy dane osobowe do ich marketingu bezpośredniego („Shine the Light”); takich ujawnień nie dokonujemy. Mieszkańcy Kalifornii poniżej 18 lat, będący zarejestrowanymi użytkownikami, mogą żądać usunięcia treści, które opublikowali publicznie.

### 10.4 Brazylia (LGPD)

Użytkownik może żądać potwierdzenia przetwarzania, dostępu, sprostowania, anonimizacji, zablokowania lub usunięcia danych zbędnych lub nadmiernych, przenoszenia danych, informacji o podmiotach, z którymi udostępniamy dane, informacji o możliwości odmowy zgody i jej konsekwencjach oraz ponownego rozpatrzenia decyzji podjętych w sposób zautomatyzowany. Może wnieść skargę do Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Inne regiony

Jeżeli użytkownik przebywa w innym miejscu, gdzie obowiązują przepisy o ochronie danych osobowych, uznajemy odpowiadające im prawa, które przysługują mu na mocy tych przepisów. W szczególności:

| Kraj lub region | Co dodajemy |
|---|---|
| **Kanada** (PIPEDA, Québec Law 25) | Użytkownik może uzyskać dostęp do swoich danych i je sprostować, wycofać zgodę oraz wnieść skargę do Office of the Privacy Commissioner albo Commission d'accès à l'information. Naszym kontaktem w sprawach prywatności jest osoba odpowiedzialna za ochronę danych osobowych; przekazywanie danych poza Québec jest oceniane i zabezpieczane. |
| **Indie** (DPDP Act 2023) | Użytkownik może uzyskać dostęp do swoich danych, sprostować je, usunąć, wskazać inną osobę, która wykona jego prawa w razie śmierci lub niezdolności, oraz skorzystać z kontaktu w sprawach skarg podanego poniżej; może też wnieść skargę do Data Protection Board. |
| **Australia, Nowa Zelandia** | Użytkownik może żądać dostępu do danych i ich sprostowania oraz złożyć skargę do nas, a następnie do OAIC (Australia) lub Privacy Commissioner (Nowa Zelandia). |
| **Japonia, Korea Południowa, Singapur, Tajlandia, Malezja, Türkiye, ZEA (UAE), Arabia Saudyjska, RPA, Kenia, Nigeria oraz podobne przepisy** | Stosujemy prawa i zabezpieczenia wymagane przez te przepisy (dostęp, sprostowanie, usunięcie, sprzeciw, skarga do lokalnego organu, zabezpieczenia przekazywania danych). Aby z nich skorzystać, należy się z nami skontaktować. |
| **Chiny** | Usługi nie są kierowane do osób przebywających w Chinach kontynentalnych; nie należy wykorzystywać ich do przekazywania danych osobowych takich osób. |

**Kontakt w sprawach prywatności i skarg dla wszystkich regionów:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Żądania rozpatrujemy w terminie, jaki przewiduje właściwe prawo.

## 11. Zmiany w polityce {#changes}

Możemy aktualizować niniejszą politykę, aby odzwierciedlić zmiany w Usługach lub w prawie. W przypadku istotnych zmian poinformujemy o nich z co najmniej {{policy.notice_days}} dni wyprzedzeniem, e-mailem lub w ramach Usług, zanim zaczną one obowiązywać, a jeżeli wymaga tego prawo, poprosimy o nową zgodę. Data „ostatniej aktualizacji” podana powyżej wskazuje aktualną wersję; wcześniejsze wersje są dostępne na żądanie.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
