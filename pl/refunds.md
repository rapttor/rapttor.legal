---
doc: refunds
title: Polityka zwrotów i anulowania
version: 1.1.1
updated: 2026-10-31
lang: pl
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Jak anulować zamówienie, kiedy można odstąpić od umowy lub otrzymać zwrot oraz co dzieje się z zakupami dokonanymi za pośrednictwem sklepów z aplikacjami.
---

# Polityka zwrotów i anulowania

*Wersja {{doc.version}}, ostatnia aktualizacja {{doc.updated}}.*

Niniejsza polityka stanowi część [Regulaminu]({{url.terms}}) i dotyczy zakupów dokonywanych u **{{company.name}}** („my”) w zakresie produktu: {{product.name}}. Żadne jej postanowienie nie ogranicza praw wynikających z obowiązkowego prawa konsumenckiego.

## Miejsce zakupu ma znaczenie {#where}

- **Zakup bezpośrednio u nas** (nasza witryna lub kasa): stosuje się niniejszą politykę.
{{#if feature.merchant_of_record}}- **Zakup za pośrednictwem dostawcy płatności{{#if payments.provider}} {{payments.provider}}{{/if}}** (podmiot rozliczający zamówienie jako sprzedawca): dostawca jest sprzedawcą zamówienia, obsługuje płatność, podatki i paragony oraz rozpatruje zwroty na podstawie warunków swojej kasy i niniejszej polityki. Wnioski można kierować do nas lub do dostawcy.
{{/if}}
- **Zakup za pośrednictwem sklepu z aplikacjami lub platformy** (Apple App Store, Google Play, sklepy konsolowe lub komputerowe): sklep jest sprzedawcą i **rozpatruje zwroty, anulowania oraz rozliczenia**. Zwrot należy wnioskować w sklepie, zgodnie z jego procedurą. Nie możemy zwrócić płatności dokonanych w takim sklepie, ale pomożemy potwierdzić fakty i możemy odebrać zakupiony przedmiot, gdy sklep dokona zwrotu. O prawach w tym zakresie decydują regulamin sklepu oraz lokalne prawo.

{{#if feature.subscriptions}}
## Anulowanie subskrypcji {#cancel}

Subskrypcję można anulować w dowolnym momencie w ustawieniach konta{{#if feature.mobile}} (lub w ustawieniach subskrypcji w sklepie, jeśli została wykupiona tam){{/if}} albo pisząc na adres [{{company.email}}](mailto:{{company.email}}). Anulowanie zatrzymuje kolejne odnowienia, a dostęp pozostaje aktywny do końca opłaconego okresu. Nie naliczamy proporcjonalnych zwrotów za niepełne okresy, chyba że prawo lub niniejsza polityka stanowią inaczej. Anulowanie jest równie łatwe jak zapisanie się: przycisk anulowania znajduje się w koncie, bez połączeń telefonicznych i formularzy. Przypominamy przed odnowieniem lub przed przejściem okresu próbnego w płatny plan tam, gdzie wymaga tego prawo. W przypadku planów rocznych lub dłuższych wysyłamy przypomnienie 15–45 dni przed odnowieniem oraz coroczne przypomnienie z ceną i informacją o sposobie anulowania. Warunki odnowienia są zawsze wyświetlane obok przycisku płatności.
{{/if}}

## Prawo odstąpienia od umowy dla konsumentów (UE, Wielka Brytania i podobne przepisy) {#withdrawal}

{{#if feature.consumers}}
Konsument w UE, w Wielkiej Brytanii lub w innym kraju, w którym przepisy przyznają prawo odstąpienia od umów zawieranych na odległość, może odstąpić od zakupu **w ciągu {{policy.refund_days}} dni** od zawarcia umowy, bez podawania przyczyny.

**Treści cyfrowe i usługi cyfrowe.** Jeżeli konsument zażąda, aby w okresie odstąpienia rozpocząć świadczenie usługi cyfrowej lub dostarczanie treści cyfrowych (np. dostępu, kredytów lub przedmiotów wirtualnych), i potwierdzi, że wie, iż może utracić prawo odstąpienia, wówczas:
- w przypadku **treści cyfrowych niedostarczanych na nośniku materialnym** po rozpoczęciu dostarczania za wyraźną zgodą konsument traci prawo odstąpienia;
- w przypadku **usługi cyfrowej** konsument może nadal odstąpić od umowy w tym okresie, ale płaci proporcjonalną kwotę za to, co zostało dostarczone do chwili poinformowania nas o decyzji.

Tę zgodę zbieramy podczas składania zamówienia. Jeżeli nie została wyrażona, obowiązuje pełne prawo odstąpienia.

**Funkcja odstąpienia od umowy.** Zgodnie z przepisami obowiązującymi od 19 czerwca 2026 r. w koncie oraz w potwierdzeniu zamówienia dostępna jest funkcja „Odstąp od umowy”: wybiera się umowę i potwierdza decyzję. Następnie otrzymuje się potwierdzenie na trwałym nośniku (e-mail) z datą i godziną. Nie trzeba podawać przyczyny.

**Inne sposoby odstąpienia.** Wystarczy przesłać jednoznaczne oświadczenie o odstąpieniu (np. e-mailem na adres [{{company.email}}](mailto:{{company.email}})), zawierające imię i nazwisko, dane zamówienia lub konta oraz datę zakupu. Można skorzystać z poniższego wzoru formularza, ale nie jest to obowiązkowe. Potwierdzimy otrzymanie oświadczenia i dokonamy zwrotu **w ciągu 14 dni** od otrzymania informacji o decyzji, tą samą metodą płatności.

> **Wzór formularza odstąpienia** (wypełnić i odesłać tylko w razie chęci odstąpienia)
> Do {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Niniejszym oświadczam/oświadczamy, że odstępuję/odstępujemy od mojej/naszej umowy o świadczenie następującej usługi/treści cyfrowej: ______ ; zamówionej/odebranej dnia: ______ ; imię i nazwisko: ______ ; adres: ______ ; data: ______ (podpis tylko w wersji papierowej).
{{else}}
Nasze usługi są oferowane wyłącznie przedsiębiorcom, więc ustawowe prawa konsumenckie do odstąpienia od umowy nie mają zastosowania. W razie uznania, że jest się konsumentem, prosimy o kontakt.
{{/if}}

## Inne kraje {#other-countries}

W niektórych krajach obowiązują dodatkowe prawa do anulowania lub zwrotu (np. okresy na namysł, zasady automatycznego odnawiania w kilku stanach USA lub ustawowe gwarancje w Australii, Nowej Zelandii i Wielkiej Brytanii). Jeżeli są obowiązkowe, mają zastosowanie i zastępują wszelkie mniej korzystne postanowienia niniejszej polityki.

## Kiedy dokonujemy zwrotu {#refunds}

Zwrócimy w całości lub w części, w zależności od okoliczności:

- **zduplikowaną lub błędną opłatę** albo opłatę, której nie autoryzowano (prosimy o niezwłoczne zgłoszenie; możemy poprosić o szczegóły);
- zakup, w ramach którego **nie można było zrealizować usługi** lub jest ona istotnie wadliwa, a nie możemy tego naprawić w rozsądnym czasie;
- zakup, którego anulowania zażądano w ciągu **{{policy.refund_days}} dni**, jeżeli nie wykorzystano tego, co kupiono (w tym niewykorzystanych kredytów), według naszego uznania, gdy nie ma zastosowania żadne prawo ustawowe;
- wszystko inne, co uzgodnimy na piśmie.

W pozostałych przypadkach opłaty są bezzwrotne, w tym za niepełne okresy, wykorzystane lub zużyte przedmioty oraz konta zamknięte z powodu naruszenia [Polityki dopuszczalnego użytkowania]({{url.acceptable_use}}). Zwroty trafiają na pierwotną metodę płatności. Zwrot w formie kredytów możliwy jest wyłącznie na wniosek klienta.

{{#if feature.credits}}
## Kredyty i przedmioty wirtualne {#credits}

Niewykorzystane kredyty przedpłacone mogą zostać zwrócone w okresie podanym powyżej. Kredyty i przedmioty wirtualne, które zostały wydane lub zużyte, nie podlegają zwrotowi, z wyjątkiem przypadków, w których wymaga tego prawo. Jeżeli zakończymy usługę, pozostałe opłacone saldo rozliczamy w sposób opisany w [Regulaminie]({{url.terms}}){{#if feature.game}} oraz w [Zasadach gry i przedmiotów wirtualnych]({{url.game_rules}}){{/if}}.
{{/if}}

## Obciążenia zwrotne i spory {#chargebacks}

Prosimy o kontakt z nami, zanim zgłosi się spór dotyczący opłaty do swojego banku lub wydawcy karty: zwykle pozwala to szybciej rozwiązać sprawę. Jeżeli zgłoszono spór dotyczący prawidłowej opłaty, możemy zawiesić konto do czasu rozstrzygnięcia sprawy i przekazać dostawcy płatności dowody dostarczenia usługi oraz jej wykorzystania.

## Podatki i waluta {#taxes}

Zwroty obejmują podatek, który został naliczony. Jeżeli płatność dokonano w innej walucie, zwracana kwota może się różnić ze względu na zmiany kursów walut i opłaty bankowe, na które nie mamy wpływu.

## Jak złożyć wniosek {#contact}

Wniosek należy przesłać na adres [{{company.email}}](mailto:{{company.email}}), podając adres e-mail konta, numer zamówienia lub paragonu oraz krótki opis sprawy. Odpowiemy na wiadomość. Jeżeli nie uda nam się rozstrzygnąć sprawy, można zwrócić się do lokalnego organu ochrony konsumentów{{#if consumer_dispute}} lub do: {{consumer_dispute}}{{/if}}.
