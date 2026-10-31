---
doc: security
title: Bezpieczeństwo i zgłaszanie podatności
version: 1.0.1
updated: 2026-10-23
lang: pl
translation_of: 1.0.1
status: draft
summary: Jak zgłaszać podatności bezpieczeństwa w {{product.name}} oraz zasady bezpiecznej przystani (safe harbour) dla badań prowadzonych w dobrej wierze.
---

# Bezpieczeństwo i zgłaszanie podatności

*Wersja {{doc.version}}, ostatnia aktualizacja {{doc.updated}}.*

Poważnie traktujemy bezpieczeństwo i z zadowoleniem przyjmujemy zgłoszenia od badaczy działających w dobrej wierze. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Zakres {#scope}

Objęte zakresem są: {{product.name}}, {{company.website}} oraz nasze własne subdomeny, aplikacje i interfejsy API, które prowadzimy. **Poza zakresem:** usługi i infrastruktura stron trzecich, konta i dane innych klientów, inżynieria społeczna lub phishing wobec naszego personelu lub użytkowników, ataki fizyczne, ataki typu odmowa usługi (DoS) i testy wolumetryczne, spam oraz ustalenia wymagające nierealistycznego udziału użytkownika lub nieaktualnego oprogramowania.

## 2. Zasady testowania {#rules}

Testując w dobrej wierze, należy:

- testować wyłącznie na **własnych kontach i danych**; po dotarciu do danych innej osoby natychmiast przerwać i zgłosić to, a nie uzyskiwać dostępu do danych, ich nie pobierać, nie modyfikować ani nie zachowywać więcej, niż jest to konieczne do wykazania problemu;
- nie pogarszać działania Usług, nie uruchamiać zautomatyzowanych skanów o dużej intensywności ani nie wykorzystywać exploitów do utrwalania dostępu, przechodzenia dalej w sieci (pivoting) lub eksfiltracji danych;
- nie ujawniać problemu innym osobom ani nie publikować szczegółów, dopóki nie dostaniemy rozsądnego czasu na jego usunięcie (**90 dni** od zgłoszenia lub krócej, jeżeli wyrazimy zgodę);
- przestrzegać prawa oraz niniejszych zasad.

## 3. Bezpieczna przystań {#safe-harbour}

Jeżeli badanie jest prowadzone zgodnie z niniejszą polityką, uznamy je za autoryzowane, nie będziemy wszczynać ani wspierać postępowań prawnych ani rozwiązywać konta w związku z tym badaniem i będziemy wspólnie z badaczem dążyć do zrozumienia problemu i jego usunięcia. Nie upoważnia to do łamania prawa wobec osób trzecich, a osoba trzecia może działać we własnym zakresie. W razie wątpliwości należy najpierw zapytać.

## 4. Co wysłać {#report}

Jasny opis podatności, dotknięty adres URL lub komponent, kroki odtworzenia lub dowód koncepcji (proof of concept), opis skutków, dane kontaktowe oraz informację, czy zgłaszający chce zostać wymieniony z nazwiska. Jeżeli to możliwe, wrażliwe materiały należy zaszyfrować; w razie potrzeby można poprosić o nasz klucz.

## 5. Co dzieje się dalej {#process}

Potwierdzamy otrzymanie zgłoszeń, dokonujemy ich wstępnej oceny, informujemy zgłaszającego o postępach, usuwamy problem zgodnie z jego wagą i – jeżeli zgłaszający tego chce – podajemy jego nazwisko jako autora zgłoszenia. Obecnie nie prowadzimy płatnego programu nagród (bug bounty) i nie możemy obiecać wynagrodzenia, choć możemy podziękować lub przekazać drobne upominki.

## 6. Użytkownicy: chroń swoje konto {#users}

Zaleca się stosowanie unikalnego, silnego hasła oraz uwierzytelniania wieloskładnikowego, jeżeli jest oferowane, aktualizowanie oprogramowania, zachowanie czujności wobec phishingu oraz niezwłoczne zgłaszanie podejrzenia przejęcia konta na adres [{{company.email}}](mailto:{{company.email}}). Nadużycie podatności lub testowanie poza zakresem niniejszej polityki narusza [Politykę dopuszczalnego użytkowania]({{url.acceptable_use}}).
