---
doc: cookies
title: Polityka plików cookie
version: 1.1.0
updated: 2026-10-31
lang: pl
translation_of: 1.1.0
status: draft
summary: Jakie pliki cookie i podobne technologie stosuje {{product.name}}, w jakim celu oraz jak można nimi zarządzać.
---

# Polityka plików cookie

*Wersja {{doc.version}}, ostatnia aktualizacja {{doc.updated}}.*

Niniejsza polityka wyjaśnia, jak **{{company.name}}** wykorzystuje pliki cookie i podobne technologie w {{product.name}} oraz w innych naszych Usługach. Dane osobowe zbierane za ich pomocą są przetwarzane zgodnie z opisem w [Polityce prywatności]({{url.privacy}}).

## 1. Czym są {#what}

Pliki cookie to niewielkie pliki zapisywane na urządzeniu użytkownika przez stronę internetową. „Podobne technologie” obejmują lokalną i sesyjną pamięć przeglądarki (local storage i session storage), identyfikatory urządzeń oraz zestawy SDK w aplikacjach mobilnych, piksele śledzące i sygnały zbliżone do identyfikacji przeglądarki (fingerprinting). W dalszej części tej polityki określenie „pliki cookie” odnosi się do wszystkich tych technologii.

## 2. Kategorie, których używamy {#categories}

| Kategoria | Cel | Czy wymagana zgoda? |
|---|---|---|
| **Ściśle niezbędne** | Utrzymywanie sesji logowania, zapamiętywanie koszyka lub ustawień na czas sesji, ochrona przed oszustwami i atakami CSRF, równoważenie obciążenia serwerów, zapisywanie wyborów dotyczących plików cookie | Nie: wymagane do działania Usług lub do zrealizowania funkcji, o którą użytkownik wyraźnie poprosił |
| **Preferencyjne** | Zapamiętywanie języka, motywu, układu i podobnych wyborów | Tak, chyba że są ściśle niezbędne dla funkcji, o którą użytkownik poprosił |
{{#if feature.analytics}}| **Analityczne** | Pomiar sposobu korzystania z Usług oraz wykrywanie błędów, abyśmy mogli je ulepszać | Tak (jeżeli wymaga tego prawo) |
{{/if}}{{#if feature.ads}}| **Reklamowe / marketingowe** | Wyświetlanie i mierzenie trafności reklam, ograniczanie ich powtarzania oraz łączenie aktywności między stronami i aplikacjami | Tak |
{{/if}}

{{#unless feature.analytics}}{{#unless feature.ads}}Obecnie używamy **wyłącznie plików ściśle niezbędnych i preferencyjnych**, bez plików analitycznych i reklamowych.{{/unless}}{{/unless}}

## 3. Szczegółowy opis plików cookie {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Dokładne nazwy plików cookie, ich dostawcy i okresy ważności są podane w oknie ustawień plików cookie oraz dostępne na żądanie pod adresem [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Wybory użytkownika {#choices}

- **Baner zgody / ustawienia.** Tam, gdzie wymagana jest zgoda, pytamy przed ustawieniem plików cookie innych niż niezbędne, a opcja odmowy jest równie łatwa do wybrania jak zgoda. Wybór można zmienić lub wycofać w dowolnym momencie za pomocą odnośnika do ustawień plików cookie w stopce strony. Wycofanie zgody nie wpływa na wcześniejsze przetwarzanie.
- **Ustawienia przeglądarki.** Większość przeglądarek umożliwia blokowanie lub usuwanie plików cookie; odpowiednie opcje znajdują się zazwyczaj w sekcji Ustawienia → Prywatność. Blokowanie plików ściśle niezbędnych może uniemożliwić logowanie i działanie innych funkcji.
- **Brak nagrywania sesji.** Nie stosujemy narzędzi do odtwarzania ani nagrywania sesji ekranowych.
{{#if feature.external}}- **Zasoby stron trzecich.** Jeżeli zasób (na przykład czcionki, mapy lub wideo) jest ładowany z serwera innej firmy, adres IP użytkownika jest do niej przesyłany. Zgodę na każdy zasób wyrażamy osobno w ustawieniach plików cookie i ładujemy go dopiero po jej wyrażeniu; wybór można zmienić w dowolnym momencie.
{{/if}}- **Sygnały.** Global Privacy Control (GPC) oraz podobne sygnały rezygnacji przekazywane przez przeglądarkę traktujemy jako odmowę zgody na śledzenie inne niż niezbędne oraz na sprzedaż lub udostępnianie danych osobowych.
{{#if feature.ads}}- **Wybory dotyczące reklam.** Można zrezygnować z reklam opartych na zainteresowaniach w ustawieniach urządzenia (resetując lub ograniczając identyfikator reklamowy) oraz za pomocą narzędzi takich jak youronlinechoices.eu lub optout.aboutads.info. Reklamy nadal będą się wyświetlać, ale będą mniej dopasowane do zainteresowań.
{{/if}}
## 5. Czas ich działania {#duration}

Pliki cookie sesyjne wygasają po zamknięciu przeglądarki. Pliki trwałe działają przez okres podany w tabeli, i w każdym razie nie dłużej, niż zaleca prawo (zazwyczaj nie dłużej niż 13 miesięcy w przypadku zgód na analitykę i reklamy, które prosimy odnawiać).

## 6. Strony trzecie {#third-parties}

Niektóre pliki cookie są ustawiane przez strony trzecie, których usługi wykorzystujemy (analityka, osadzone media, płatności, czat wsparcia). Działają one zgodnie z własnymi politykami i, jeżeli są niezależnymi administratorami, należy zapoznać się z ich politykami. Wymieniamy je w tabeli powyżej.
{{#if table.external}}
Zasoby, które otrzymują adres IP w momencie ich ładowania:

{{table.external}}
{{/if}}

## 7. Zmiany {#changes}

Jeżeli dodamy lub zmienimy pliki cookie inne niż niezbędne, zaktualizujemy niniejszą politykę i – tam, gdzie jest to wymagane – ponownie poprosimy o zgodę. Pytania prosimy kierować na adres [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
