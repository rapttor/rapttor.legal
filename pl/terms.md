---
doc: terms
title: Regulamin
version: 1.3.0
updated: 2026-10-31
lang: pl
translation_of: 1.3.0
status: draft
summary: Umowa między użytkownikiem a {{product.name}} dotycząca korzystania z {{product.name}}.
---

# Regulamin

*Wersja {{doc.version}}, ostatnia aktualizacja {{doc.updated}}.*

## 1. Umowa {#agreement}

Niniejszy Regulamin (dalej „**Regulamin**”) stanowi wiążącą umowę między użytkownikiem a **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, nr rejestrowy {{company.reg_id}}{{/if}} (dalej „**{{product.name}}**”, „my”), regulującą dostęp do {{product.name}} i korzystanie z niego, naszych stron internetowych, aplikacji, interfejsów API, dokumentacji oraz powiązanych usług (dalej „**Usługi**”).

Zakładając konto, instalując aplikację lub w inny sposób korzystając z Usług, akceptuje się niniejszy Regulamin oraz dokumenty, które on włącza: [Politykę prywatności]({{url.privacy}}), [Politykę dopuszczalnego użytkowania]({{url.acceptable_use}}), [Politykę plików cookie]({{url.cookies}}){{#if feature.processor_role}}, [Aneks dotyczący przetwarzania danych]({{url.dpa}}), o ile ma zastosowanie{{/if}}{{#if feature.payments}}, [Politykę zwrotów i anulowania]({{url.refunds}}){{/if}}{{#if feature.game}}, [Zasady gry i politykę przedmiotów wirtualnych]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Warunki korzystania z aplikacji]({{url.app_eula}}){{/if}} oraz wszelkie formularze zamówienia lub warunki dotyczące konkretnego produktu. Jeżeli nie wyraża się zgody, nie należy korzystać z Usług.

Jeżeli Usługi są wykorzystywane w imieniu organizacji, potwierdza się posiadanie umocowania do jej reprezentowania, a określenie „użytkownik” obejmuje także tę organizację. Jeżeli warunki dotyczące konkretnego produktu lub podpisana umowa są sprzeczne z niniejszym Regulaminem, mają pierwszeństwo wyłącznie w odniesieniu do danego produktu lub klienta.

{{#if feature.consumers}}
**Konsumenci.** Jeżeli Usługi są wykorzystywane przez konsumenta, bezwzględnie obowiązujące przepisy o ochronie konsumentów w kraju stałego zamieszkania nadal mają zastosowanie, a żadne postanowienie niniejszego Regulaminu nie ogranicza tych praw. Punkty oznaczone *(klienci biznesowi)* stosuje się wyłącznie wtedy, gdy nie jest się konsumentem.
{{/if}}

## 2. Uprawnienie do korzystania {#eligibility}

Z Usług można korzystać wyłącznie wtedy, gdy:

1. {{#if feature.minors}}ma się co najmniej **{{policy.min_age}}** lat i, jeżeli nie osiągnięto pełnoletności w miejscu zamieszkania, uzyskano zgodę rodzica lub opiekuna prawnego, który akceptuje niniejszy Regulamin w imieniu tej osoby i ponosi odpowiedzialność za korzystanie z Usług oraz za dokonywane zakupy (możemy zażądać dowodu){{else}}ma się co najmniej **{{policy.min_age}}** lat i zdolność do zawarcia wiążącej umowy{{/if}};
2. nie podlega się zakazowi otrzymywania Usług na podstawie obowiązującego prawa, w tym przepisów o sankcjach i kontroli eksportu (sekcja 22);
3. nie został wcześniej usunięty z Usług za naruszenie naszych zasad, chyba że wyraziliśmy pisemną zgodę na ponowne przyjęcie; oraz
4. korzysta się z Usług zgodnie z prawem obowiązującym w miejscu pobytu.
{{#if feature.age_gate}}5. potwierdza, na żądanie, że ma co najmniej **{{policy.age_gate}}** lat i jest pełnoletni zgodnie z przepisami swojego kraju, aby korzystać z funkcji dotyczących: {{policy.age_topics|treści wrażliwych ze względu na wiek}}. Nie potrzebujemy daty urodzenia: potwierdzenie jest rejestrowane. Jeżeli nie jest ono zgodne z prawdą, możemy zablokować konto i usunąć jego dane.
{{/if}}{{#if feature.gambling}}6. potwierdza, na żądanie, że ma co najmniej **{{policy.gambling_age}}** lat, że hazard jest zgodny z prawem w miejscu zamieszkania i że korzysta z funkcji hazardowych wyłącznie na własny użytek. Możemy wymagać rzeczywistej weryfikacji wieku i tożsamości oraz odmówić dostępu do funkcji hazardowych lub go zakończyć, gdy wymagają tego prawo lub nasze licencje.
{{/if}}{{#if policy.excluded_regions}}7. potwierdza, na żądanie, że nie przebywa na terytorium ani nie jest rezydentem lub obywatelem żadnego z następujących państw lub regionów: **{{policy.excluded_regions}}**, w których nasze Usługi lub niniejszy Regulamin mogą być niezgodne z prawem, mogą nie podlegać egzekwowaniu albo nie są oferowane. Nie możemy ustalić, gdzie użytkownik faktycznie przebywa (np. przy użyciu VPN), dlatego polegamy na jego potwierdzeniu; jeżeli nie jest ono zgodne z prawdą, z Usług korzysta on na własne ryzyko, ponosi odpowiedzialność za przestrzeganie prawa lokalnego, a my możemy zablokować konto i usunąć jego dane. Nic w niniejszym punkcie nie ogranicza praw, których nie można zrzec się na mocy prawa obowiązującego w miejscu zamieszkania.
{{/if}}
Możemy w każdej chwili zażądać dowodu wieku, tożsamości lub umocowania i odmówić przyjęcia lub zamknąć konto, które nie przeszło tej weryfikacji.

## 3. Konta i bezpieczeństwo {#accounts}

- Należy podawać dokładne i aktualne informacje oraz je aktualizować. Jedna osoba lub jeden podmiot, jedno konto, chyba że uzgodniono inaczej; zakładanie kolejnych kont w celu obejścia ograniczenia, limitu, blokady, okresu próbnego lub zasad cenowych jest zabronione.
- Dane logowania należy zachować w poufności. Konta nie udostępnia się, nie sprzedaje, nie wynajmuje ani nie przenosi. Każde miejsce użytkownika jest przeznaczone dla jednej wskazanej osoby, chyba że plan stanowi inaczej.
- Odpowiada się za wszystko, co dzieje się na koncie, w tym za działania osób, którym je udostępniono lub których nie udało się od niego odsunąć, aż do chwili zgłoszenia, że konto zostało przejęte. W razie podejrzenia nieuprawnionego dostępu należy niezwłocznie zawiadomić nas pod adresem [{{company.email}}](mailto:{{company.email}}).
- Możemy wymagać silniejszego uwierzytelniania, zresetować dane logowania lub zablokować konto, co do którego w uzasadniony sposób uznajemy, że zostało przejęte lub nadużywane.
- Nieaktywne konta bezpłatne mogą zostać zamknięte po uprzednim powiadomieniu na zapisany adres e-mail; konta płatne nie są zamykane z powodu nieaktywności.
{{#if feature.anonymous}}- **Konta anonimowe.** Tam, gdzie je oferujemy, Usługi tworzą dla użytkownika konto anonimowe przy pierwszym korzystaniu. Konto nie ma adresu e-mail; może z niego korzystać każdy, kto używa danej przeglądarki lub urządzenia, a w razie utraty dostępu nie możemy go odzyskać. Adres e-mail można w każdej chwili powiązać z kontem, aby je zabezpieczyć i umożliwić jego odzyskanie: potwierdzamy adres linkiem do logowania wysłanym na ten adres. Konta anonimowe, które przez długi czas pozostają nieużywane, mogą zostać usunięte po powiadomieniu w Usługach, o ile jest to możliwe.
{{/if}}- **Posiadacz konta i dostęp.** Osoba, która potwierdza kontrolę nad adresem e-mail za pomocą wysłanego przez nas linku do logowania i akceptuje niniejszy Regulamin, jest posiadaczem konta i uznaje się, że to ona dokonuje wyborów w koncie. Jeżeli działa się w imieniu organizacji, potwierdza się, że można ją reprezentować. Decyzję o tym, kto jeszcze w organizacji otrzymuje dostęp (np. operatorzy o ograniczonych rolach), podejmuje się samodzielnie; osoby, którym przyznano dostęp, widzą to, co im udostępniono, a odpowiedzialność za ten wybór ponosi użytkownik.

## 4. Licencja i ograniczenia {#licence}

Pod warunkiem przestrzegania niniejszego Regulaminu i uiszczenia należnych opłat udzielamy ograniczonej, odwołalnej, niewyłącznej i nieprzenoszalnej licencji, bez prawa udzielania sublicencji, na dostęp do Usług i ich korzystanie na własne wewnętrzne cele osobiste lub biznesowe w okresie obowiązywania umowy. Oprogramowanie, które dostarczamy, jest udzielane w licencji, a nie sprzedawane. My i nasi licencjodawcy zachowujemy wszelkie prawa, które nie zostały wyraźnie przyznane.

O ile przepisy prawa nie przyznają prawa, którego nie można zrzec się, nie wolno (ani nie wolno zezwalać nikomu) na:

- kopiowanie, modyfikowanie, tłumaczenie ani tworzenie opracowań pochodnych Usług;
- dokonywanie inżynierii wstecznej, dekompilowanie, dezasemblowanie ani próby uzyskania kodu źródłowego, modeli, wag, algorytmów lub niepublicznych interfejsów API;
- odsprzedawanie, udzielanie sublicencji, wynajmowanie, dzierżawienie, udostępnianie jako usługi hostingowej lub udostępnianie Usług osobom trzecim innym niż uprawnieni użytkownicy;
- obchodzenie ograniczeń technicznych, zabezpieczeń licencyjnych, mechanizmów pomiaru zużycia, kontroli dostępu, limitów liczby żądań lub funkcji bezpieczeństwa;
- usuwanie lub zmienianie zastrzeżeń własności, oznaczeń autorstwa lub informacji o licencjach open source;
- wykorzystywanie Usług lub ich wyników do budowy lub trenowania konkurencyjnego produktu albo do porównawczych testów wydajności lub publikowania ich wyników bez naszej pisemnej zgody{{#if feature.ai}}, a także do trenowania, dostrajania lub destylacji modelu AI na podstawie wyników Usług, jeżeli zabraniamy tego w dokumentacji{{/if}};
- uzyskiwanie dostępu do Usług zautomatyzowanymi środkami (boty, scrapery, roboty indeksujące), z wyjątkiem korzystania z udokumentowanego przez nas interfejsu API na jego warunkach.

[Polityka dopuszczalnego użytkowania]({{url.acceptable_use}}) zawiera szczegółowe zasady i stanowi część niniejszego Regulaminu. Komponenty open source podlegają własnym licencjom, które mają pierwszeństwo w odniesieniu do tych komponentów.

## 5. Dopuszczalne użytkowanie i egzekwowanie {#acceptable-use}

Odpowiada się za korzystanie z Usług oraz za postępowanie wszystkich osób, którym umożliwiono z nich korzystanie. Nadużycia mogą szkodzić innym użytkownikom, osobom trzecim i nam, a my możemy działać w sposób opisany w [Polityce dopuszczalnego użytkowania]({{url.acceptable_use}}) oraz w sekcji 17, w tym usuwając treści, ograniczając funkcje lub przepustowość, zawieszając lub rozwiązując konta, wstrzymując wypłaty, zgłaszając sprawy organom państwowym oraz dochodząc środków ochrony na podstawie sekcji 21.

## 6. Treści użytkownika {#your-content}

{{#if feature.ugc}}
„**Treści użytkownika**” oznacza wszystko, co użytkownik przesyła, składa, publikuje, łączy lub generuje za pomocą Usług{{#if feature.ai}}, w tym polecenia (prompty) oraz – w relacji między użytkownikiem a nami – otrzymywane wyniki{{/if}}.

- **Własność.** Wszelkie prawa do Treści użytkownika pozostają po stronie użytkownika. Nie nabywamy żadnych praw własności do nich.
- **Licencja dla nas.** Użytkownik udziela nam licencji obowiązującej na całym świecie, niewyłącznej i nieodpłatnej, na przechowywanie, hostowanie, powielanie, przetwarzanie, przesyłanie, adaptowanie (w celach formatowania, tworzenia miniatur, tłumaczeń i kontroli bezpieczeństwa) oraz wyświetlanie Treści użytkownika **wyłącznie w zakresie niezbędnym do działania, zabezpieczania, obsługi i ulepszania Usług oraz do egzekwowania niniejszego Regulaminu**, przez cały czas, gdy treści pozostają w Usługach, oraz przez ograniczone okresy tworzenia kopii zapasowych i zachowania danych na potrzeby postępowań prawnych po tym czasie. Jeżeli treści są udostępniane publicznie, licencja obejmuje ich wyświetlanie wybranym przez użytkownika odbiorcom. Licencja wygasa z chwilą usunięcia treści lub konta, z zastrzeżeniem tych okresów oraz kopii, które inni użytkownicy już legalnie otrzymali.
- **Zapewnienia użytkownika.** Użytkownik posiada i będzie utrzymywać wszystkie prawa, zgody i zezwolenia niezbędne do przesłania Treści użytkownika i udzielenia tej licencji, w tym od każdej osoby, którą można w nich zidentyfikować. Treści użytkownika oraz ich wykorzystywanie przez nas w dozwolonym zakresie nie naruszają żadnego prawa ani praw innych osób (autorskich, znaków towarowych, prywatności, praw do wizerunku, poufności, umów), a także są zgodne z [Polityką dopuszczalnego użytkowania]({{url.acceptable_use}}).
- **Moderacja.** Nie mamy ogólnego obowiązku monitorowania Treści użytkownika, ale możemy je sprawdzać, usuwać, ograniczać lub odmawiać ich udostępnienia, jeżeli w uzasadniony sposób uznajemy, że naruszają prawo, niniejszy Regulamin lub prawa innych osób, albo jeżeli otrzymaliśmy ich dotyczące prawidłowe zawiadomienie (zob. [Zgłoszenia dotyczące praw autorskich i treści nielegalnych]({{url.copyright}})). Tam, gdzie wymaga tego prawo (np. unijne rozporządzenie o usługach cyfrowych, DSA), podajemy powody naszej decyzji oraz sposób jej zakwestionowania.
- **Kopie zapasowe.** Użytkownik odpowiada za przechowywanie własnych kopii Treści użytkownika. O ile plan wyraźnie nie obejmuje kopii zapasowych ani przechowywania danych, nie zobowiązujemy się do przywrócenia usuniętych lub utraconych treści.
- **Dane zbiorcze.** Możemy wykorzystywać dane o korzystaniu, które nie identyfikują użytkownika ani nie ujawniają Treści użytkownika, do działania, zabezpieczania i ulepszania Usług.
{{else}}
Użytkownik zachowuje wszelkie prawa do wszystkiego, co przesyła do Usług. Udziela nam ograniczonej licencji niezbędnej do przetwarzania tych treści w celu świadczenia, zabezpieczania i obsługi Usług oraz zapewnia, że ma prawo je przesłać. Użytkownik odpowiada za przechowywanie własnych kopii.
{{/if}}

### Dane i pliki użytkownika {#your-data}

W relacji między użytkownikiem a nami **dane i pliki umieszczone w Usługach należą do użytkownika, a wyłączną odpowiedzialność za nie ponosi on sam**: za posiadanie prawa do ich przesłania i wykorzystywania, za ich dokładność i zgodność z prawem oraz za wybory dotyczące tego, kto może do nich uzyskać dostęp. Przechowujemy je i przetwarzamy zgodnie z poleceniami użytkownika, aby Usługi działały. Nie ogranicza to naszych ustawowych obowiązków, np. obowiązku zabezpieczania Usług i ochrony danych osobowych, a także nie narusza praw, których nie można wyłączyć na mocy prawa.
{{#if feature.uploads}}
- **Prawa autorskie i inne prawa.** Użytkownik potwierdza, że jest właścicielem tego, co przesyła, lub że posiada wszelkie niezbędne zezwolenia (w tym od osób przedstawionych na obrazach), i przyjmuje do wiadomości, że **może ponosić odpowiedzialność za roszczenia** dotyczące praw autorskich, dóbr osobistych, prywatności lub innych praw, które wynikają z przesłanych treści. Możemy usuwać treści oraz współpracować z uprawnionymi podmiotami i organami w sposób opisany w [Zgłoszeniach dotyczących praw autorskich i treści nielegalnych]({{url.copyright}}).
- **Domyślnie prywatne.** Przesłane treści są widoczne wyłącznie dla użytkownika oraz dla osób, którym udzielono dostępu (np. członków lub operatorów jego organizacji). Nie wykorzystujemy przesłanych treści ani innych treści do tworzenia publicznych materiałów, takich jak szablony, wytyczne, przykłady, materiały marketingowe czy dane treningowe, i nie udostępniamy ich osobom niezalogowanym, chyba że użytkownik wyraźnie je opublikuje lub udostępni.
{{/if}}

## 7. Świadczenie usług innym osobom za pomocą Usług {#end-users}

Jeżeli Usługi są wykorzystywane do świadczenia czegokolwiek własnym klientom, użytkownikom, pracownikom lub innym osobom trzecim („**Użytkownicy końcowi**”), użytkownik ponosi za nich wyłączną odpowiedzialność: musi posiadać podstawę prawną, obowiązki informacyjne i zgody wymagane dla wszelkich danych osobowych, które zbiera lub przetwarza, uzgadniać z nimi własne warunki, rozpatrywać ich żądania i reklamacje, zapewniać ich zgodność z [Polityką dopuszczalnego użytkowania]({{url.acceptable_use}}) oraz nie składać zobowiązań w naszym imieniu. Użytkownik odpowiada za działania i zaniechania Użytkowników końcowych tak, jakby były jego własne. Nie mamy wobec Użytkowników końcowych żadnych obowiązków.

## 8. Funkcje AI {#ai}

{{#if feature.ai}}
- Wyniki są generowane automatycznie i mogą być nieprawidłowe, niekompletne, obraźliwe, stronnicze lub podobne do wyników przekazanych innym osobom. Przed poleganiem na wyniku należy go ocenić, a odpowiedzialność za sposób jego wykorzystania ponosi użytkownik.
- **Funkcji AI nie wolno używać jako jedynej podstawy decyzji wywołujących skutki prawne lub podobnie istotne dla osób** (np. w zatrudnieniu, kredytach, mieszkalnictwie, ubezpieczeniach, edukacji, ochronie zdrowia, ściganiu przestępstw lub imigracji) ani do porad medycznych, prawnych, finansowych lub dotyczących bezpieczeństwa bez kwalifikowanej weryfikacji przez człowieka.
- Treści wygenerowane przez AI lub zmanipulowane należy ujawniać w zakresie, w jakim wymaga tego prawo lub platforma, na której się je publikuje (w tym deepfake'i i media syntetyczne), i nie wolno przedstawiać wyników AI jako stworzonych przez człowieka, jeżeli mogłoby to wprowadzać w błąd.
- Nie wolno wykorzystywać funkcji do żadnego zakazanego celu określonego w [Polityce dopuszczalnego użytkowania]({{url.acceptable_use}}) ani podejmować prób obejścia systemów bezpieczeństwa (w tym ataków typu prompt injection, jailbreaking lub ekstrakcji przeciwko naszym systemom lub systemom innych podmiotów).
- Dostawcy, z których korzystamy, mogą stosować własne polityki użytkowania; możemy odpowiednio ograniczać funkcje. Nie wykorzystujemy Treści użytkownika do trenowania modeli ogólnego przeznaczenia, chyba że użytkownik wyrazi na to zgodę (zob. [Politykę prywatności]({{url.privacy}})).
{{else}}
Usługi obecnie nie zawierają funkcji wspomaganych przez AI. Jeżeli je dodamy, zaktualizujemy niniejszy Regulamin i powiadomimy o tym zgodnie z sekcją 16; wówczas zastosowanie będą miały zasady dotyczące tych funkcji (dokładność, weryfikacja przez człowieka, ujawnianie, brak zakazanych zastosowań).
{{/if}}

## 9. Opłaty i płatności {#fees}

{{#if feature.payments}}
- **Ceny i podatki.** Ceny są podawane przy zakupie i nie obejmują podatku VAT, podatku od sprzedaży ani podobnych podatków, chyba że zaznaczono inaczej; użytkownik płaci należne podatki. Ceny dla konsumentów zawierają podatki wymagane przez prawo.
{{#if feature.merchant_of_record}}- **Merchant of record.** Zamówienia są przetwarzane przez naszego dostawcę płatności{{#if payments.provider}} {{payments.provider}}{{/if}}, który działa jako odsprzedawca i merchant of record, pobiera płatność oraz podatki i wystawia paragon. Jego warunki zakupu mają zastosowanie do transakcji obok niniejszego Regulaminu; płatności, rozliczenia, podatki i zwroty są realizowane zgodnie z nimi oraz z naszą [Polityką zwrotów i anulowania]({{url.refunds}}).
{{/if}}- **Płatność.** Upoważnia się nas i naszego procesora płatności do obciążania podanej przez użytkownika metody płatności wszelkimi należnymi kwotami, w tym opłatami za odnowienia i opłatami zależnymi od zużycia. Użytkownik zapewnia, że jest uprawniony do korzystania z tej metody płatności, i zobowiązuje się do bieżącego aktualizowania danych.
{{#if feature.subscriptions}}- **Przed zapłatą.** Obok przycisku płatności podajemy cenę, okres rozliczeniowy, informację, że subskrypcja odnawia się automatycznie, co dzieje się po okresie próbnym, sposób anulowania oraz odnośniki do niniejszego Regulaminu, [Polityki zwrotów i anulowania]({{url.refunds}}) i [Polityki prywatności]({{url.privacy}}). Opłata jest pobierana dopiero po zaznaczeniu pola lub naciśnięciu przycisku potwierdzającego zapoznanie się z tymi dokumentami. Przechowujemy zapis tej zgody i wysyłamy potwierdzenie, które można zachować.
- **Subskrypcje.** O ile w trakcie zakupu nie zaznaczono inaczej, subskrypcje odnawiają się automatycznie na okresy tej samej długości, aż do ich anulowania. Anulować można w dowolnym momencie na koncie lub drogą e-mailową przed datą odnowienia; anulowanie wywiera skutek z końcem opłaconego okresu, a nie dokonuje się zwrotu proporcjonalnego. Informujemy z wyprzedzeniem, zgodnie z wymogami prawa, zanim okres próbny zostanie przekształcony w płatną subskrypcję lub zmieni się cena odnowienia.
- **Okresy próbne i promocje.** Jedna oferta próbna lub promocyjna na osobę lub przedsiębiorstwo. Możemy wycofać lub odmówić oferty, gdy podejrzewamy nadużycie (wiele kont, fałszywe tożsamości, obchodzenie limitów).
{{/if}}{{#if feature.credits}}- **Kredyty.** Przedpłacone kredyty, żetony lub waluta w aplikacji stanowią ograniczoną licencję na korzystanie z Usług, a nie pieniądze; nie mają wartości pieniężnej, nie są przenoszalne, nie można ich wymienić na pieniądze ani handlować nimi, i mogą wygasać na zasadach podanych przy zakupie. Niewykorzystane kredyty przepadają, gdy konto zostaje zamknięte z powodu naruszenia; w pozostałych przypadkach zwroty podlegają poniższym zasadom i obowiązującemu prawu.{{#if feature.game}} Przedmioty wirtualne w grach podlegają [Zasadom gry i polityce przedmiotów wirtualnych]({{url.game_rules}}).{{/if}}
{{/if}}- **Zmiany cen.** Możemy zmieniać ceny ze skutkiem na przyszłość, z wyprzedzeniem wynoszącym co najmniej {{policy.notice_days}} dni. Jeżeli nie wyraża się zgody, należy anulować subskrypcję przed wejściem zmiany w życie.
- **Opóźniona lub nieudana płatność.** Możemy ponowić obciążenie, zawiesić konto lub obniżyć jego plan, a w odniesieniu do zaległych faktur dla klientów biznesowych obciążyć uzasadnionymi kosztami windykacji oraz odsetkami ustawowymi. Usługi zostają przywrócone po uregulowaniu zaległości.
- **Chargebacki i oszustwa.** Otwarcie chargebacku lub sporu płatniczego bez uprzedniego kontaktu z nami pod adresem [{{company.email}}](mailto:{{company.email}}), a także płatności oszukańcze lub nieautoryzowane mogą skutkować natychmiastowym zawieszeniem konta, utratą dostępu do treści oraz dochodzeniem spornej kwoty i naszych opłat za przetwarzanie.
- **Zwroty.** Z wyjątkiem przypadków, w których prawo przyznaje prawo do zwrotu, lub gdy piszemy inaczej na piśmie, uiszczone opłaty nie podlegają zwrotowi, także za niepełne okresy i niewykorzystane funkcje, a zwrot nie przysługuje, jeżeli zawiesimy lub rozwiążemy konto z powodu naruszenia.
{{#if feature.consumers}}- **Anulowanie, odstąpienie i zwroty.** Prawa konsumenta do odstąpienia od umowy, sposób anulowania oraz zasady zwrotów określa [Polityka zwrotów i anulowania]({{url.refunds}}), która stanowi część niniejszego Regulaminu. W przypadku treści cyfrowych lub usług świadczonych natychmiast na żądanie użytkownika prosimy przy zakupie o wyraźną zgodę i potwierdzenie, zgodnie z wymogami prawa.
{{/if}}
{{else}}
Usługi są obecnie oferowane bezpłatnie. W przyszłości możemy wprowadzić funkcje płatne; zostaną one przedstawione w sposób jasny, a opłata nigdy nie zostanie pobrana bez zgody użytkownika.
{{/if}}

## 10. Interfejs API, integracje i usługi zewnętrzne {#integrations}

{{#if feature.api}}
Dostęp do interfejsu API podlega niniejszemu Regulaminowi, dokumentacji oraz wszelkim limitom liczby żądań. Należy chronić klucze API i dane uwierzytelniające; odpowiada się za wszystkie wywołania wykonane za ich pomocą, nie wolno ich udostępniać, umieszczać w publicznym kodzie ani wykorzystywać do dalszej odsprzedaży dostępu. Możemy rotować, ograniczać lub unieważniać klucze oraz zmieniać lub wycofywać wersje API, z rozsądnym wyprzedzeniem (krótszym, gdy wymagają tego względy bezpieczeństwa lub przepisy prawa). Nie wolno korzystać z interfejsu API w sposób pogarszający działanie Usług dla innych ani podejmować prób obejścia limitów, np. przez używanie wielu kluczy lub kont.

{{/if}}
Usługi mogą współpracować z produktami, stronami internetowymi i usługami osób trzecich, które nie znajdują się pod naszą kontrolą. Korzystanie z nich podlega ich warunkom. Nie odpowiadamy za te produkty i usługi, za ich dostępność lub zmiany ani za sposób, w jaki wykorzystują dane, którymi użytkownik zdecyduje się je udostępnić. Możemy w każdej chwili zakończyć wsparcie dla danej integracji.

## 11. Funkcje beta i bezpłatne {#beta}

Funkcje oznaczone jako alfa, beta, podgląd (preview), eksperymentalne lub podobnie oraz plany bezpłatne są udostępniane w stanie „tak jak są”, mogą ulec zmianie lub zostać wycofane w każdej chwili, mogą być mniej niezawodne i są wyłączone z wszelkich zobowiązań dotyczących poziomu usług. Nie należy polegać na nich w celach krytycznych.

## 12. Własność intelektualna {#ip}

Usługi, w tym oprogramowanie, wzornictwo, teksty, grafiki, dane, znaki, logo i dokumentacja, należą do nas lub do naszych licencjodawców i są chronione prawem autorskim, prawem znaków towarowych oraz innymi przepisami. Żadne postanowienie niniejszego Regulaminu nie przenosi na użytkownika prawa własności, a prawo do korzystania z naszych nazw lub znaków nie jest udzielane, z wyjątkiem zakresu niezbędnego do korzystania z Usług.

**Uwagi zwrotne.** Jeżeli przesyła się sugestie lub pomysły, udziela się nam wieczystej, nieodwołalnej, obowiązującej na całym świecie, nieodpłatnej licencji z prawem udzielania sublicencji na ich wykorzystanie bez ograniczeń i bez wskazywania autorstwa, w zakresie dozwolonym przez prawo. Nie mamy obowiązku działania na podstawie uwag zwrotnych.

Zgłoszenia dotyczące praw autorskich i treści nielegalnych: zob. [Zgłoszenia dotyczące praw autorskich i treści nielegalnych]({{url.copyright}}).

## 13. Poufność (klienci biznesowi) {#confidentiality}

Każda ze stron zachowa w poufności niepubliczne informacje biznesowe i techniczne drugiej strony, wykorzysta je wyłącznie do wykonania lub realizacji praw wynikających z niniejszego Regulaminu i będzie chronić je z należytą starannością, z wyjątkiem informacji, które są publiczne bez winy odbiorcy, były mu już znane, zostały opracowane niezależnie lub muszą zostać ujawnione na mocy prawa (z uprzednim powiadomieniem, o ile jest to dozwolone). Obowiązek ten trwa trzy lata po zakończeniu Regulaminu, a w odniesieniu do tajemnic przedsiębiorstwa – bezterminowo.

## 14. Prywatność i ochrona danych {#privacy}

Nasza [Polityka prywatności]({{url.privacy}}) wyjaśnia, w jaki sposób przetwarzamy dane osobowe. {{#if feature.processor_role}}Jeżeli przetwarzamy dane osobowe w imieniu użytkownika jako podmiot przetwarzający, zastosowanie ma [Aneks dotyczący przetwarzania danych]({{url.dpa}}), który stanowi część niniejszego Regulaminu.{{/if}} Korzystając z Usług, należy przestrzegać przepisów o ochronie danych i nie wolno przesyłać danych szczególnych kategorii lub podlegających szczególnej regulacji (dane o zdrowiu, dane kart płatniczych, identyfikatory nadawane przez państwo, dane dzieci), chyba że funkcja lub umowa wyraźnie na to zezwala.

## 15. Dostępność, wsparcie i zmiany {#availability}

Dążymy do wysokiej dostępności, ale nie gwarantujemy działania bez przerw ani wolnego od błędów. Możemy przeprowadzać prace serwisowe (z powiadomieniem, o ile jest to rozsądnie możliwe) oraz modyfikować, dodawać lub usuwać funkcje. Jeżeli w trakcie okresu opłaconego z góry istotnie ograniczymy płatną funkcję, powiadomimy z co najmniej {{policy.notice_days}} dni wyprzedzeniem, a w razie gdy nie można w rozsądny sposób kontynuować korzystania – dokonamy zwrotu proporcjonalnego za dotknięty okres opłacony z góry. Wsparcie jest świadczone pod adresem [{{company.email}}](mailto:{{company.email}}) na zasadzie dołożenia rozsądnych starań, chyba że plan obejmuje umowę o poziomie usług (SLA).

## 16. Zmiany niniejszego Regulaminu {#changes}

Możemy aktualizować niniejszy Regulamin z przyczyn prawnych, bezpieczeństwa, produktowych lub biznesowych. W przypadku istotnych zmian powiadomimy z co najmniej **{{policy.notice_days}} dni** wyprzedzeniem, e-mailem lub w Usługach, zanim zaczną one obowiązywać. Jeżeli nie wyraża się zgody, można przestać korzystać z Usług i zamknąć konto przed datą wejścia zmian w życie, a (w przypadku planów płatnych) złożyć wniosek o zwrot proporcjonalny opłat uiszczonych z góry za okres po tej dacie. Dalsze korzystanie z Usług po dacie wejścia zmian oznacza akceptację zaktualizowanego Regulaminu. Zmiany wymagane przez prawo lub takie, które niczego nie ograniczają i nie nakładają dodatkowych obowiązków, mogą wejść w życie natychmiast. Zmiany nie dotyczą sporów, które są już w toku.

## 17. Zawieszenie i rozwiązanie umowy {#termination}

**Ze strony użytkownika.** Można w każdej chwili przestać korzystać z Usług i zamknąć konto w ustawieniach lub drogą e-mailową. Opłaty uiszczone za plany płatne nie podlegają zwrotowi, chyba że sekcja 9 lub prawo stanowi inaczej.

**Ze strony nas, bez przyczyny.** Możemy zakończyć plany płatne z wyprzedzeniem wynoszącym {{policy.notice_days}} dni (ze zwrotem proporcjonalnym opłat uiszczonych z góry) oraz zaprzestać świadczenia usług bezpłatnych po rozsądnym powiadomieniu.

**Ze strony nas, z ważnej przyczyny.** Możemy – z uprzednim powiadomieniem lub bez niego i w zakresie dozwolonym przez prawo – ograniczyć, zawiesić lub rozwiązać dostęp, usunąć treści lub natychmiast zamknąć konto, jeżeli:

- naruszono niniejszy Regulamin lub Politykę dopuszczalnego użytkowania (reakcja jest proporcjonalna do wagi, powtarzalności i ryzyka);
- w uzasadniony sposób uznajemy, że korzystanie z Usług rodzi ryzyko bezpieczeństwa, prawne, regulacyjne, wizerunkowe lub finansowe dla nas, innych użytkowników lub osób trzecich;
- płatność nie została uiszczona w terminie;
- wymaga tego sąd, organ lub obowiązujące prawo; lub
- konto wydaje się przejęte, oszukańcze lub porzucone.

Tam, gdzie jest to praktycznie możliwe i dozwolone, podajemy powód oraz dajemy możliwość odpowiedzi lub usunięcia problemu w pierwszej kolejności; tam, gdzie wymaga tego prawo (np. unijne rozporządzenie o usługach cyfrowych, DSA), przekazujemy uzasadnienie i sposób odwołania się. Jeżeli zawieszamy lub rozwiązujemy umowę z powodu naruszenia, opłaty nie podlegają zwrotowi, a należności pozostają wymagalne.

**Skutki.** Po rozwiązaniu umowy licencja wygasa, a korzystanie z Usług należy przerwać. Na żądanie zgłoszone w ciągu **{{policy.retention_account_days}} dni** udostępnimy Treści użytkownika do eksportu, o ile jest to technicznie wykonalne (nie dotyczy to przypadków, w których byłoby to niezgodne z prawem lub szkodziłoby innym). Po upływie tego okresu usuwamy je zgodnie z opisem w [Polityce prywatności]({{url.privacy}}). Postanowienia, które z natury powinny obowiązywać nadal, pozostają w mocy, w tym sekcje 4, 6 (ograniczenia licencji i zapewnienia użytkownika), 9 (należności), 12, 13, 17-24 oraz 26.

## 18. Gwarancje i wyłączenie odpowiedzialności {#disclaimer}

Usługi świadczymy z należytą starannością. **Poza tym, w maksymalnym zakresie dozwolonym przez prawo, Usługi są udostępniane w stanie „tak jak są” i „w miarę dostępności”, a my wyłączamy wszelkie inne gwarancje, wyraźne lub dorozumiane,** w tym gwarancje przydatności handlowej, przydatności do określonego celu, braku naruszeń praw, dokładności, dostępności oraz gwarancje, że Usługi będą bezpieczne, wolne od błędów, nieprzerwane lub pozbawione szkodliwych elementów. Nie udzielamy gwarancji co do wyników, treści osób trzecich ani rezultatów uzyskanych przez użytkownika. Usługi nie są przeznaczone do użytku w środowiskach wysokiego ryzyka, w których awaria mogłaby spowodować śmierć, obrażenia ciała lub poważne szkody (np. wyroby medyczne, lotnictwo, instalacje jądrowe lub systemy podtrzymywania życia), i nie wolno ich tak wykorzystywać.

{{#if feature.consumers}}Jeżeli jest się konsumentem, zachowuje się wszelkie prawa ustawowe, których nie można wyłączyć, takie jak ustawowe gwarancje i środki ochrony dotyczące treści i usług cyfrowych na podstawie prawa UE i Wielkiej Brytanii oraz gwarancje konsumenckie na podstawie australijskiego prawa konsumenckiego (Australian Consumer Law) i podobnych przepisów obowiązujących w innych krajach.{{/if}}

## 19. Ograniczenie odpowiedzialności {#liability}

Żadne postanowienie niniejszego Regulaminu nie wyłącza ani nie ogranicza odpowiedzialności, której nie można wyłączyć ani ograniczyć na mocy prawa, w tym odpowiedzialności za śmierć lub uszczerbek na zdrowiu, oszustwo lub umyślne działanie, rażące niedbalstwo oraz (w odniesieniu do konsumentów) obowiązkowe środki ochrony przewidziane przez prawo.

Z zastrzeżeniem powyższego, **w maksymalnym zakresie dozwolonym przez prawo** oraz w odniesieniu do klientów biznesowych:

1. nie ponosimy odpowiedzialności za szkody pośrednie, przypadkowe, szczególne, następcze, przykładowe lub karne ani za utratę zysku, przychodów, działalności gospodarczej, dobrego imienia, oczekiwanych oszczędności lub danych, wynikające z Usług lub niniejszego Regulaminu bądź z nimi związane, nawet jeśli poinformowano o takiej możliwości; oraz
2. nasza łączna odpowiedzialność z tytułu wszystkich roszczeń jest ograniczona do wyższej z kwot: (a) opłat uiszczonych nam za Usługi w okresie **{{policy.liability_cap_months}} miesięcy** poprzedzającym zdarzenie, które po raz pierwszy dało podstawę do roszczenia, oraz (b) 100 EUR.

{{#if feature.consumers}}W odniesieniu do konsumentów ponosimy odpowiedzialność za przewidywalne straty lub szkody wyrządzone naszym naruszeniem lub zaniedbaniem, ale nie za straty, których nie można było przewidzieć, ani za straty związane z działalnością gospodarczą.{{/if}}

Nie ponosimy odpowiedzialności za niewykonanie lub opóźnienie spowodowane zdarzeniami pozostającymi poza naszą rozsądną kontrolą (sekcja 24). Usługi bezpłatne są świadczone bez odpowiedzialności wykraczającej poza wymogi prawa. Ograniczenia te mają zastosowanie niezależnie od podstawy odpowiedzialności (umowa, czyn niedozwolony, w tym zaniedbanie, lub inna) i nawet wtedy, gdy środek ochrony nie spełni swojego zasadniczego celu.

## 20. Zwolnienie z odpowiedzialności {#indemnity}

Jeżeli jest się klientem biznesowym, zobowiązuje się do obrony, zwolnienia z odpowiedzialności i zabezpieczenia przed szkodą {{company.name}}, jej podmiotów powiązanych, członków organów, pracowników i przedstawicieli, w zakresie roszczeń, szkód, strat, kar i wydatków (w tym uzasadnionych kosztów pomocy prawnej) wynikających z (a) Treści użytkownika lub danych użytkownika, (b) naruszenia niniejszego Regulaminu lub prawa przez użytkownika albo jego Użytkowników końcowych, (c) nadużycia Usług przez użytkownika lub (d) sporu między użytkownikiem a osobą trzecią. Niezwłocznie poinformujemy o każdym roszczeniu, pozwolimy użytkownikowi kierować obroną (możemy w niej uczestniczyć na własny koszt), a użytkownik nie może zawrzeć ugody w sprawie roszczenia, które przyznaje winę po naszej stronie, bez naszej zgody. {{#if feature.consumers}}Konsumenci ponoszą odpowiedzialność wyłącznie za straty, które spowodowali własnym naruszeniem, zgodnie z przepisami prawa.{{/if}}

## 21. Środki ochrony w przypadku nadużycia {#remedies}

Oprócz innych praw i w zakresie dozwolonym przez prawo:

- **Środki zabezpieczające.** Przyjmuje się do wiadomości, że naruszenie sekcji 4, 5 lub 13 może wyrządzić szkodę, której nie da się w pełni naprawić odszkodowaniem, i możemy dochodzić zakazu lub innych środków słusznościowych bez wykazywania rzeczywistej szkody i bez składania zabezpieczenia.
- **Koszty nadużycia.** Jeżeli nadużycie powoduje u nas koszty (dodatkowa infrastruktura, reagowanie na incydenty, postępowanie wyjaśniające, chargebacki, kary regulacyjne lub roszczenia osób trzecich), użytkownik zwraca uzasadnione, udokumentowane koszty.
- **Dowody i współpraca.** Możemy zabezpieczać logi i treści związane z podejrzewanym nadużyciem oraz ujawniać je zainteresowanym stronom, platformom, organom ścigania lub regulatorom, o ile przepisy na to pozwalają. Należy w rozsądnym zakresie współpracować z naszymi postępowaniami wyjaśniającymi.
- **Zgłaszanie.** Możemy zgłaszać działania niezgodne z prawem (w tym materiały przedstawiające seksualne wykorzystywanie dzieci, oszustwa, groźby, złośliwe oprogramowanie i ataki na systemy) organom oraz zainteresowanym stronom, a zrobimy to tam, gdzie wymaga tego prawo.
- **Zatrzymywanie świadczeń.** Możemy zatrzymać, zamrozić lub potrącić kwoty należne użytkownikowi (np. wypłaty) z kwotami, które użytkownik jest nam winien lub które wynikają z nadużycia, z zastrzeżeniem przepisów prawa.

## 22. Eksport, sankcje i zwalczanie korupcji {#export}

Nie wolno używać, eksportować ani reeksportować Usług z naruszeniem obowiązujących przepisów o kontroli eksportu i sankcjach, w tym przepisów UE, Stanów Zjednoczonych, Wielkiej Brytanii i ONZ, ani na rzecz lub dla osób albo państw objętych kompleksowymi sankcjami. Potwierdza się, że użytkownik i jego użytkownicy nie znajdują się na żadnej liście sankcyjnej ani liście podmiotów objętych ograniczeniami. Nie wolno oferować ani dawać czegokolwiek o wartości w celu niewłaściwego wpływania na kogokolwiek w związku z Usługami.

## 23. Prawo właściwe i spory {#law}

Niniejszy Regulamin oraz wszelkie spory lub roszczenia wynikające z niego lub z nim związane albo z Usługami (w tym spory pozaumowne) podlegają prawu: **{{law.governing}}**, z wyłączeniem reguł kolizyjnych, a także z wyłączeniem Konwencji Narodów Zjednoczonych o umowach międzynarodowej sprzedaży towarów.

**Najpierw polubowne rozwiązanie.** Przed wszczęciem postępowania sądowego należy napisać na adres [{{company.legal_email}}](mailto:{{company.legal_email}}), opisując spór, i pozwolić nam spróbować rozwiązać go w dobrej wierze przez co najmniej 30 dni.

**Sądy.** O ile bezwzględnie obowiązujące przepisy nie stanowią inaczej, wyłączną jurysdykcję mają: **{{law.venue}}**. Każda ze stron może wystąpić o pilne zabezpieczenie roszczenia (zakaz) do dowolnego właściwego sądu.

{{#if feature.consumers}}**Konsumenci.** Jeżeli jest się konsumentem, zachowuje się także prawo wniesienia powództwa do sądów kraju stałego zamieszkania oraz powoływania się na bezwzględnie obowiązujące przepisy o ochronie konsumentów obowiązujące tam; żadne postanowienie tej sekcji tego prawa nie usuwa. {{#if consumer_dispute}}Uczestniczymy w pozasądowym rozstrzyganiu sporów przed: {{consumer_dispute}}.{{/if}}
{{/if}}
**Termin przedawnienia (klienci biznesowi).** W zakresie dozwolonym przez prawo każde roszczenie należy dochodzić w ciągu {{policy.claim_months}} miesięcy od powstania podstawy roszczenia, pod rygorem jego utraty.

**Brak powództw zbiorowych (klienci biznesowi, o ile jest to dozwolone).** Roszczenia mogą być dochodzone wyłącznie indywidualnie, a nie w ramach postępowania grupowego, zbiorowego lub reprezentacyjnego.

## 24. Siła wyższa {#force-majeure}

Żadna ze stron nie ponosi odpowiedzialności za opóźnienie lub niewykonanie spowodowane zdarzeniami pozostającymi poza jej rozsądną kontrolą, w tym klęskami żywiołowymi, wojną, terroryzmem, zamieszkami, pandemią, działaniami organów państwowych, awariami zasilania, internetu lub telekomunikacji, awariami dostawców chmury lub innych zewnętrznych dostawców infrastruktury, cyberatakami mimo rozsądnych środków bezpieczeństwa, sporami pracowniczymi (innymi niż dotyczącymi pracowników danej strony) lub awariami dostaw. Nie zwalnia to z obowiązku płatności za usługi już świadczone. Jeżeli takie zdarzenie trwa dłużej niż 60 dni, każda ze stron może rozwiązać dotknięte nim usługi.

## 25. Komunikacja elektroniczna i zawiadomienia {#notices}

Wyraża się zgodę na otrzymywanie zawiadomień i umów drogą elektroniczną. Możemy przekazywać zawiadomienia e-mailem na adres przypisany do konta, w Usługach lub przez publikację na naszej stronie internetowej. Zawiadomienia do nas należy kierować na adres [{{company.legal_email}}](mailto:{{company.legal_email}}) oraz na adres {{company.address}}. Zawiadomienie uznaje się za doręczone po upływie 24 godzin od wysłania e-maila, który nie został zwrócony, oraz w chwili zamieszczenia lub wyświetlenia w Usługach.

## 26. Postanowienia ogólne {#general}

- **Całość umowy.** Niniejszy Regulamin i dokumenty, do których się odwołuje, stanowią całość umowy w tym zakresie i zastępują wcześniejsze ustalenia. Nie opierano się na żadnym oświadczeniu, które nie zostało w nich zawarte.
- **Rozdzielność postanowień.** Jeżeli postanowienie jest nieskuteczne lub nie może być egzekwowane, ogranicza się je w najmniejszym niezbędnym zakresie albo zastępuje skutecznym, najbliższym jego celowi; pozostała część pozostaje w mocy.
- **Brak zrzeczenia się.** Niewykonanie uprawnienia nie oznacza zrzeczenia się go.
- **Cesja.** Bez naszej pisemnej zgody nie wolno przenosić praw ani obowiązków wynikających z niniejszego Regulaminu. Możemy przenieść Regulamin na podmiot powiązany lub na następcę prawnego naszej działalności i poinformujemy o tym użytkownika.
- **Relacje stron.** Strony działają jako niezależni wykonawcy. Żadne postanowienie nie tworzy spółki osobowej, stosunku agencji, zatrudnienia ani wspólnego przedsięwzięcia.
- **Osoby trzecie.** Nikt inny nie ma uprawnień do egzekwowania niniejszego Regulaminu, z wyjątkiem naszych podmiotów powiązanych, członków organów i przedstawicieli na podstawie sekcji 19 i 20.
- **Język.** Tłumaczenia są udostępniane dla wygody; w razie rozbieżności pierwszeństwo ma wersja angielska, o ile bezwzględnie obowiązujące przepisy nie wymagają inaczej.
- **Wykładnia.** Nagłówki mają charakter pomocniczy. Określenie „w tym” oznacza „w tym, lecz nie wyłącznie”.
- **Rozgłos.** Możemy wskazać użytkownika jako klienta wraz z jego logo, chyba że zgłosi sprzeciw e-mailem; konsumenci nigdy nie są wymieniani z nazwy.

## 27. Kontakt {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · nr rej. {{company.reg_id}}{{/if}}{{#if company.tax_id}} · NIP / Tax ID {{company.tax_id}}{{/if}}
E-mail [{{company.email}}](mailto:{{company.email}}) · Sprawy prawne [{{company.legal_email}}](mailto:{{company.legal_email}}) · Wsparcie [{{company.email}}](mailto:{{company.email}}) · Zobacz także naszą [Informację prawną]({{url.impressum}}).
