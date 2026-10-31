---
doc: security
title: Sicherheit & Meldung von Schwachstellen
version: 1.0.1
updated: 2026-10-23
lang: de
translation_of: 1.0.1
status: draft
summary: Wie Sie Sicherheitslücken in {{product.name}} melden können und welche Schutzregeln für Forschung in gutem Glauben gelten.
---

# Sicherheit & Meldung von Schwachstellen

*Version {{doc.version}}, zuletzt aktualisiert am {{doc.updated}}.*

Wir nehmen Sicherheit ernst und begrüßen Meldungen von Forschenden, die in gutem Glauben handeln. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Geltungsbereich {#scope}

Im Geltungsbereich: {{product.name}}, {{company.website}} sowie unsere eigenen Subdomains, Anwendungen und APIs, die wir betreiben. **Nicht im Geltungsbereich:** Dienste und Infrastruktur Dritter, Konten und Daten anderer Kunden, Social Engineering oder Phishing gegenüber unseren Mitarbeitenden oder Nutzern, physische Angriffe, Denial-of-Service- und volumetrische Tests, Spam sowie Befunde, die unrealistische Interaktionen von Nutzern oder veraltete Software voraussetzen.

## 2. Regeln für Tests {#rules}

Wenn Sie in gutem Glauben testen, müssen Sie:

- nur **Ihre eigenen Konten und Daten** testen; halten Sie inne und melden Sie es sofort, wenn Sie auf Daten anderer Personen stoßen. Greifen Sie nicht auf mehr zu, laden nichts herunter, ändern nichts und behalten nicht mehr als nötig, um das Problem zu zeigen;
- die Dienste nicht beeinträchtigen, keine automatisierten Scans mit hohem Volumen durchführen und keine Exploits nutzen, um sich festzusetzen, weiterzuspringen oder Daten abzuziehen;
- den Befund nicht anderen mitteilen und keine Einzelheiten veröffentlichen, bevor wir eine angemessene Zeit zur Behebung hatten (**90 Tage** ab Ihrer Meldung oder früher, wenn wir dies vereinbaren);
- das Recht und diese Regeln einhalten.

## 3. Safe-Harbour-Regelung {#safe-harbour}

Wenn Sie diese Richtlinie einhalten, behandeln wir Ihre Forschung als autorisiert. Wir werden deswegen weder rechtliche Schritte einleiten oder unterstützen noch eine Kündigung des Kontos veranlassen. Wir arbeiten mit Ihnen zusammen, um das Problem zu verstehen und zu lösen. Dies erlaubt keinen Rechtsverstoß zulasten Dritter, und ein Dritter kann eigenständig handeln. Bei Zweifeln fragen Sie zuerst nach.

## 4. Was Sie senden sollten {#report}

Eine klare Beschreibung der Schwachstelle, die betroffene URL oder Komponente, Schritte zur Reproduktion oder einen Proof of Concept, die Auswirkungen, Ihre Kontaktdaten und ob Sie eine Nennung Ihres Namens wünschen. Verschlüsseln Sie sensibles Material, wenn Sie können, und fragen Sie nach unserem Schlüssel.

## 5. Wie es weitergeht {#process}

Wir bestätigen Meldungen, prüfen sie, halten Sie auf dem Laufenden, beheben Schwachstellen entsprechend ihrem Schweregrad und nennen Sie auf Wunsch namentlich. Derzeit betreiben wir kein bezahltes Bug-Bounty-Programm und können keine Belohnungen zusichern, wir können Ihnen jedoch Dank oder kleine Werbegeschenke anbieten.

## 6. Nutzer: Schützen Sie Ihr Konto {#users}

Verwenden Sie ein einzigartiges, starkes Passwort und, wo angeboten, die Multi-Faktor-Authentifizierung. Halten Sie Ihre Software aktuell, seien Sie vorsichtig bei Phishing und melden Sie einen vermuteten Missbrauch Ihres Kontos umgehend an [{{company.email}}](mailto:{{company.email}}). Der Missbrauch einer Schwachstelle oder Tests außerhalb dieser Richtlinie verstoßen gegen die [Nutzungsrichtlinie]({{url.acceptable_use}}).
