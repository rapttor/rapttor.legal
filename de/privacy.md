---
doc: privacy
title: Datenschutzerklärung
version: 1.2.1
updated: 2026-10-31
lang: de
translation_of: 1.2.1
status: draft
summary: Wie {{product.name}} personenbezogene Daten erhebt, verwendet, weitergibt und schützt und welche Rechte Sie haben.
---

# Datenschutzerklärung

*Version {{doc.version}}, zuletzt aktualisiert am {{doc.updated}}.*

## 1. Wer wir sind {#who-we-are}

Diese Datenschutzerklärung erläutert, wie **{{company.name}}** mit Sitz unter {{company.address}} („**{{product.name}}**“, „wir“, „uns“) personenbezogene Daten verarbeitet, wenn Sie {{product.name}}, unsere Websites, Anwendungen, APIs und damit verbundene Dienste (die „**Dienste**“) nutzen.

Für personenbezogene Daten, deren Zwecke und Mittel wir selbst bestimmen (zum Beispiel Ihr Konto, Besuche auf unseren Websites und die Abrechnung), sind wir der **Verantwortliche**. Kontakt: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Unseren Datenschutzbeauftragten erreichen Sie unter [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Wir haben keinen Datenschutzbeauftragten benannt, da das Gesetz dies für unsere Tätigkeiten nicht vorschreibt. Datenschutzfragen richten Sie bitte an [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Vertreter in der EU (Art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Vertreter im Vereinigten Königreich (Art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Wenn wir Auftragsverarbeiter sind

Wenn Sie die Dienste über eine Organisation nutzen (zum Beispiel Ihren Arbeitgeber oder einen Geschäftskunden), ist diese Organisation in der Regel der Verantwortliche für die Daten, die sie in die Dienste einbringt. Wir verarbeiten diese Daten in ihrem Auftrag gemäß unserem [Auftragsverarbeitungsvertrag (AVV)]({{url.dpa}}). In diesem Fall richten Sie Ihre Anfragen an diese Organisation; wir unterstützen sie bei der Beantwortung. Diese Datenschutzerklärung gilt dann nur für die Daten, die wir selbst verantworten (Kontoverwaltung, Abrechnung, Sicherheit und Website).
{{/if}}

## 2. Welche Daten wir erheben {#data-we-collect}

| Kategorie | Beispiele | Quelle |
|---|---|---|
| **Kontodaten** | Name, E-Mail-Adresse, Passwort-Hash, Profilangaben, Sprache, Einstellungen | Sie |
| **Kontakt- und Supportdaten** | Nachrichten, Anhänge, Notizen zu Gesprächen, Feedback, Umfrageantworten | Sie |
| **Von Ihnen übermittelte Inhalte** | Dateien, Texte, Einstellungen, alles, was Sie in die Dienste einstellen | Sie |
{{#if feature.anonymous}}| **Anonyme Kontodaten** | eine zufällige Konto-Kennung, die Browser- oder Gerätesitzung, die sie hält, die von Ihnen erstellten Inhalte und eine E-Mail-Adresse, falls Sie später eine verbinden | Sie, automatisch |
{{/if}}{{#if feature.uploads}}| **Von Ihnen hochgeladene Dateien und Bilder** | die Dateien selbst und die darin enthaltenen Metadaten (zum Beispiel Kameradaten oder Standort in Fotos) | Sie |
{{/if}}| **Einwilligungsnachweise** | wozu Sie zugestimmt haben (Dokumente, Altersbestätigung, optionale Auswahl), die Version, Sprache, das Datum und die Art Ihrer Zustimmung | Sie |
| **Nutzungs- und Gerätedaten** | IP-Adresse, Browser- und Gerätetyp, Betriebssystem, Sprache, genutzte Seiten und Funktionen, Zeitstempel, Referrer, Absturz- und Fehlerprotokolle | Automatisch |
| **Cookies und ähnliche Technologien** | Kennungen in Cookies, im lokalen Speicher und in SDKs (siehe [Cookie-Richtlinie]({{url.cookies}})) | Automatisch |
{{#if feature.payments}}| **Zahlungs- und Transaktionsdaten** | Tarif, Rechnungen, Name und Anschrift für die Abrechnung, Steuer-ID, Zahlungsstatus; Kartendaten werden von unserem Zahlungsdienstleister verarbeitet und nicht von uns gespeichert | Sie, Zahlungsdienstleister |
{{/if}}{{#if feature.location}}| **Standortdaten** | genauer Standort nur, wenn Sie ihn auf Ihrem Gerät aktivieren; andernfalls ungefährer Standort aus Ihrer IP-Adresse | Ihr Gerät |
{{/if}}| **Daten von Drittanbieter-Konten** | Name, E-Mail-Adresse, Profilbild und Kennung, die ein Anmeldeanbieter Ihrer Wahl mit Ihrer Erlaubnis übermittelt | Dritte, mit Ihrer Erlaubnis |
{{#if feature.ugc}}| **Kommunikation zwischen Nutzern** | Nachrichten und Interaktionen, die Sie über die Dienste senden | Sie |
{{/if}}{{#if feature.mobile}}| **Mobile Gerätedaten** | Gerätemodell und Betriebssystemversion, App-Version, App-Instanz- und Push-Benachrichtigungs-Token, Sprache und Zeitzone, Berechtigungsstatus; Werbe-Kennung nur, wenn Sie Tracking erlauben | Ihr Gerät |
{{/if}}{{#if feature.game}}| **Spieldaten** | Spielfortschritt, Punktestände, Ranglisten, Gegenstände und Käufe, Spielverlauf, Chat im Spiel und (falls genutzt) Sprachberichte, Anti-Cheat- und Integritätssignale, öffentliches Profil (Name, Avatar, Rang) | Sie, automatisch |
{{/if}}| **Sicherheits- und Betrugssignale** | fehlgeschlagene Anmeldeversuche, Missbrauchsmeldungen, Risikobewertungen, blockierte Anfragen | Automatisch, andere Nutzer |

Wir erheben nicht absichtlich besondere Kategorien personenbezogener Daten (Gesundheit, biometrische Daten, politische oder religiöse Ansichten und ähnliche Angaben). Bitte übermitteln Sie solche Daten nicht, sofern eine Funktion nicht ausdrücklich danach fragt. Wenn Sie solche Daten dennoch übermitteln, sind Sie dafür verantwortlich, dass eine Rechtsgrundlage dafür besteht.

Sie sind nicht verpflichtet, uns personenbezogene Daten zu geben. Ohne einige davon (zum Beispiel eine E-Mail-Adresse) können wir Ihnen jedoch kein Konto bereitstellen.

### Tracking, das wir nicht einsetzen {#no-tracking}

Wir setzen **keine** Session-Replay- oder Bildschirmaufzeichnungs-Tools, keine Erfassung von Tastatur- oder Mausbewegungen und kein Browser-Fingerprinting ein. {{#if feature.analytics}}Analysen laufen nur mit Ihrer Einwilligung (siehe [Cookie-Richtlinie]({{url.cookies}})).{{else}}Wir verwenden keine Analyse- oder Werbe-Tracker.{{/if}}
{{#if feature.external}}
### Drittanbieter-Inhalte und Ihre IP-Adresse {#external}

Einige Funktionen laden Inhalte von Servern anderer Unternehmen (zum Beispiel Schriften, Karten, Videos oder Sicherheitsprüfungen). Wenn Ihr Browser solche Inhalte abruft, **werden Ihre IP-Adresse und technische Angaben an dieses Unternehmen übermittelt**, das sich möglicherweise außerhalb Ihres Landes befindet. Wir laden diese Inhalte erst, nachdem Sie jedem einzelnen in den Cookie-Einstellungen zugestimmt haben; dies können Sie jederzeit ändern. Wenn Sie ablehnen, verwenden wir eine Ersatzlösung oder die Funktion bleibt deaktiviert.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}
{{#if feature.email}}
### E-Mails {#emails}

Wir senden E-Mails, die die Dienste benötigen (Anmelde-Links, Quittungen, Sicherheitshinweise){{#if feature.marketing}} sowie, nur wenn Sie zugestimmt haben oder das Gesetz es erlaubt, Produktneuigkeiten{{/if}}. Jede E-Mail enthält einen Link, über den Sie keine E-Mails mehr von uns erhalten. {{#if feature.marketing}}Optionale E-Mails werden mit einem Klick sofort abbestellt. {{/if}}Da eine Sperrung aller E-Mails auch Anmelde-Links blockieren würde, wird eine Anfrage, **alle** E-Mails dieses Dienstes zu sperren, mit einer letzten E-Mail bestätigt. Sie enthält einen Link, der belegt, dass die Adresse Ihnen gehört. Anschließend nehmen wir die Adresse in die Sperrliste unseres E-Mail-Dienstleisters auf und bewahren sie dort auf, damit wir Ihre Entscheidung achten können (rechtliche Verpflichtung und unser berechtigtes Interesse, Ihre Entscheidung zu respektieren).
{{/if}}{{#if feature.age_gate}}
### Altersbestätigung {#age}

Bevor Sie Funktionen mit {{policy.age_topics|altersbeschränkten Inhalten}} verwenden, bitten wir Sie zu bestätigen, dass Sie mindestens {{policy.age_gate}} Jahre alt sind und nach den Regeln Ihres Landes volljährig sind. Wir fragen nicht nach Ihrem Geburtsdatum und speichern nur Ihre Bestätigung und den Zeitpunkt, zu dem Sie sie abgegeben haben. Erfahren wir, dass eine Person jünger als das Mindestalter ist, sperren wir das Konto und löschen die Daten.
{{/if}}{{#if feature.gambling}}
Für Glücksspielfunktionen können wir zusätzlich einen Alters- und Identitätsnachweis verlangen und dafür einen Verifizierungsdienstleister einsetzen. Wir bewahren das Ergebnis und die Nachweise auf, soweit das Gesetz dies verlangt.
{{/if}}

## 3. Warum wir Ihre Daten verwenden und welche Rechtsgrundlagen wir haben {#purposes}

| Zweck | Rechtsgrundlage (GDPR / UK GDPR) |
|---|---|
| Bereitstellung der Dienste, Erstellung und Verwaltung Ihres Kontos, Abwicklung von Bestellungen | Vertrag (Art. 6(1)(b)) |
| Kundenbetreuung und Kommunikation über Ihre Nutzung der Dienste | Vertrag; berechtigte Interessen |
| Sicherheit, Missbrauchs- und Betrugsprävention sowie Durchsetzung unserer [Nutzungsbedingungen]({{url.terms}}) und [Nutzungsrichtlinie]({{url.acceptable_use}}) | Berechtigte Interessen (Art. 6(1)(f)); rechtliche Verpflichtung |
| Fehlerbehebung, Zuverlässigkeit, Kapazitätsplanung und Verbesserung der Dienste | Berechtigte Interessen |
{{#if feature.analytics}}| Nutzungsanalysen | Einwilligung, soweit gesetzlich erforderlich, sonst berechtigte Interessen |
{{/if}}{{#if feature.marketing}}| Produktneuigkeiten und Werbe-E-Mails | Einwilligung oder berechtigte Interessen für Bestandskunden, soweit gesetzlich zulässig; Sie können jederzeit widersprechen |
{{/if}}{{#if feature.ads}}| Werbung und Messung | Einwilligung |
{{/if}}| Nachweis Ihrer Einwilligungen und Beachtung Ihrer E-Mail-Entscheidungen | Rechtliche Verpflichtung; berechtigte Interessen |
{{#if feature.external}}| Einbindung von Drittanbieter-Inhalten, die Ihre IP-Adresse erhalten | Einwilligung (Art. 6(1)(a) sowie die ePrivacy-Regeln zum Zugriff auf Ihr Gerät) |
{{/if}}| Buchhaltung, Steuern und andere gesetzliche Pflichten | Rechtliche Verpflichtung (Art. 6(1)(c)) |
| Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen; Reaktion auf Behörden | Berechtigte Interessen; rechtliche Verpflichtung |
| Unternehmenstransaktionen (Fusion, Übernahme, Verkauf von Vermögenswerten) | Berechtigte Interessen |

Soweit wir uns auf berechtigte Interessen stützen, haben wir diese gegen Ihre Rechte abgewogen. Details können Sie erfragen, und Sie können widersprechen (Abschnitt 10). Soweit wir uns auf eine Einwilligung stützen, können Sie diese jederzeit widerrufen; dies berührt die bisherige Verarbeitung nicht.

{{#if feature.ai}}
### KI-gestützte Funktionen {#ai}

Einige Funktionen nutzen Modelle für maschinelles Lernen oder generative Modelle. Wenn Sie sie nutzen, wird der von Ihnen eingegebene Inhalt an den Anbieter gesendet, der als unser Auftragsverarbeiter tätig ist, um die Ausgabe zu erzeugen.

- Wir verwenden Ihre Inhalte **nicht** zum Training allgemeiner Modelle, und wir verlangen von unseren Anbietern, dies ebenfalls nicht zu tun, sofern Sie nicht ausdrücklich zustimmen.
- KI-Ausgaben können falsch, unvollständig oder verzerrt sein. Verlassen Sie sich nicht darauf für rechtliche, medizinische, finanzielle oder andere folgenreiche Entscheidungen, ohne dass ein Mensch sie geprüft hat.
- Wir treffen keine Entscheidungen mit rechtlichen oder vergleichbar erheblichen Wirkungen über Sie allein auf Grundlage automatisierter Verfahren. Kontosperren wegen Missbrauchs werden auf Anfrage von einer Person überprüft (siehe [Nutzungsrichtlinie]({{url.acceptable_use}}), Durchsetzung).
- KI-generierte Inhalte werden gekennzeichnet, soweit das Gesetz dies verlangt.
{{/if}}

## 4. Mit wem wir Daten teilen {#sharing}

**Wir verkaufen Ihre personenbezogenen Daten nicht**, und wir „teilen“ sie nicht für kontextübergreifende verhaltensbasierte Werbung{{#if feature.ads}}, außer wie in der Cookie-Richtlinie beschrieben und nur, wenn Sie eingewilligt haben{{/if}}.

Wir geben personenbezogene Daten nur weiter an:

- **Dienstleister (Auftragsverarbeiter)**, die auf unsere Weisung und auf Grundlage schriftlicher Vereinbarungen handeln: Hosting und Infrastruktur, E-Mail-Versand, Tools für den Kundensupport, Fehlerüberwachung{{#if feature.payments}}, Zahlungsabwicklung{{/if}}{{#if feature.ai}}, KI-Anbieter{{/if}}. Die aktuelle Liste finden Sie in unserer [Liste der Unterauftragsverarbeiter]({{url.subprocessors}}).
- **Plattformen und App-Stores**, über die Sie auf die Dienste zugreifen (zum Beispiel Apple, Google, Konsolen- oder PC-Shops), die Zahlungen abwickeln und uns eingeschränkte Kauf- und Kontodaten übermitteln können;
- **Andere Nutzer oder die Öffentlichkeit**, nur soweit Sie es anweisen (zum Beispiel Inhalte, die Sie veröffentlichen{{#if feature.ugc}} oder Nachrichten, die Sie senden{{/if}});
- **Berufsgeheimnisträger** wie Rechtsanwälte, Wirtschaftsprüfer und Versicherer, die zur Vertraulichkeit verpflichtet sind;
- **Behörden, Gerichte und betroffene Parteien**, soweit dies gesetzlich vorgeschrieben ist, um auf wirksame rechtliche Verfahren zu reagieren, um Rechte, Sicherheit oder Eigentum zu schützen oder um Missbrauch und Betrug zu untersuchen. Wir prüfen Anfragen auf ihre Wirksamkeit und informieren Sie, soweit zulässig, darüber;
- **Einen Rechtsnachfolger** bei Fusion, Übernahme, Finanzierung oder Verkauf von Vermögenswerten, der diese Datenschutzerklärung einhalten muss. Wir informieren Sie über wesentliche Änderungen der Kontrolle, die Ihre Daten betreffen;
- **Andere** nur mit Ihrer Einwilligung.

## 5. Internationale Übermittlungen {#transfers}

Wir sind in {{company.country}} tätig{{#if hosting.region}} und speichern Daten hauptsächlich in {{hosting.region}}{{/if}}. Einige Anbieter verarbeiten Daten in anderen Ländern, darunter die Vereinigten Staaten. Werden personenbezogene Daten aus dem EWR (EEA), dem Vereinigten Königreich oder der Schweiz in ein Land ohne Angemessenheitsbeschluss übermittelt, verwenden wir eine anerkannte Garantie: das EU-U.S. Data Privacy Framework (bzw. dessen Erweiterungen für das Vereinigte Königreich und die Schweiz), sofern der Empfänger zertifiziert ist. Andernfalls gelten die **Standardvertragsklauseln** der Europäischen Kommission, gegebenenfalls ergänzt um das **UK International Data Transfer Addendum** oder die Schweizer Anpassungen, sowie zusätzliche Schutzmaßnahmen wie Verschlüsselung bei der Übertragung und im Ruhezustand. Eine Kopie der jeweiligen Garantien können Sie unter [{{company.privacy_email}}](mailto:{{company.privacy_email}}) anfordern.

## 6. Wie lange wir Daten aufbewahren {#retention}

| Daten | Speicherdauer |
|---|---|
| Kontodaten und Inhalte | Solange Ihr Konto aktiv ist, danach Löschung oder Anonymisierung innerhalb von {{policy.retention_account_days}} Tagen nach Schließung |
| Server- und Sicherheitsprotokolle | 90 Tage |
| Backups | Rollierend, bis zu 35 Tage; gelöschte Daten laufen im Backup-Zyklus aus |
| Rechnungen und Buchhaltungsunterlagen | {{policy.retention_billing_years}} Jahre oder solange das Gesetz es verlangt |
| Support-Korrespondenz | Bis zu 3 Jahre nach Abschluss des Falls, oder solange das Konto aktiv ist, falls das länger ist |
| Nachweise über Einwilligungen, Widersprüche und Anträge auf Rechte | So lange, wie es zum Nachweis der Einhaltung erforderlich ist |
| Daten, die für einen Rechtsanspruch oder eine Untersuchung benötigt werden | Bis die Angelegenheit erledigt ist und die Verjährungsfristen abgelaufen sind |
| Missbrauchs- und Sperrdaten (Kennung, Grund, Datum) | Bis zu 5 Jahre, um wiederholten Missbrauch zu verhindern |
| Einwilligungsnachweise und E-Mail-Sperrliste | Einwilligungsnachweise: für die Dauer des Kontos zuzüglich der Verjährungsfrist; Einträge in der Sperrliste: bis Sie uns um deren Entfernung bitten |

Wenn der Zweck entfällt, löschen wir die Daten oder anonymisieren sie unumkehrbar.

## 7. Sicherheit {#security}

Wir setzen technische und organisatorische Maßnahmen ein, die dem Risiko angemessen sind: Verschlüsselung bei der Übertragung, Verschlüsselung sensibler Daten im Ruhezustand, Zugriffskontrolle nach dem Prinzip der minimalen Rechte, Schutzmechanismen für die Authentifizierung, Protokollierung, Backups, Schwachstellenmanagement und die Vertraulichkeitspflichten unserer Mitarbeitenden. Kein System ist vollkommen sicher. Bitte verwenden Sie ein starkes, einzigartiges Passwort, aktivieren Sie die Multi-Faktor-Authentifizierung, sofern angeboten, und informieren Sie uns umgehend unter [{{company.email}}](mailto:{{company.email}}), wenn Sie vermuten, dass Ihr Konto kompromittiert wurde. Siehe auch unsere Seite [Sicherheit & Meldung von Schwachstellen]({{url.security}}).

Ist eine Verletzung des Schutzes personenbezogener Daten wahrscheinlich mit einem Risiko für Ihre Rechte und Freiheiten verbunden, melden wir sie der Aufsichtsbehörde, soweit gesetzlich vorgeschrieben, innerhalb von 72 Stunden, nachdem wir davon Kenntnis erlangt haben. Sie benachrichtigen wir ohne unangemessene Verzögerung, wenn das Gesetz dies verlangt.

## 8. Kinder {#children}

{{#if feature.minors}}Die Dienste richten sich nicht an Kinder unter 13 Jahren, und wir erheben wissentlich keine personenbezogenen Daten von ihnen. Nutzer ab {{policy.min_age}} Jahren, die die Volljährigkeit noch nicht erreicht haben, dürfen die Dienste **nur mit Einwilligung eines Elternteils oder Erziehungsberechtigten** nutzen. Diese Person kann die Daten des Minderjährigen einsehen, berichtigen, einschränken oder löschen lassen und ihre Einwilligung widerrufen, indem sie sich an [{{company.privacy_email}}](mailto:{{company.privacy_email}}) wendet. Wir erheben nur die für die Dienste erforderlichen Daten, verwenden Daten von Minderjährigen nicht für verhaltensbasierte Werbung und wenden, wo möglich, altersgerechte Voreinstellungen an (private Profile, eingeschränkte Kommunikation). Sieht das Recht eines Landes ein höheres Alter für die digitale Einwilligung vor, verlangen wir unterhalb dieses Alters die Einwilligung der Eltern.{{else}}Die Dienste richten sich nicht an Kinder. Sie müssen mindestens {{policy.min_age}} Jahre alt sein, um ein Konto zu haben. Wir erheben wissentlich keine personenbezogenen Daten von Personen unter {{policy.min_age}} Jahren (oder unter dem höheren Alter für die digitale Einwilligung in ihrem Land; in den Vereinigten Staaten unter 13 Jahren im Sinne des COPPA). Wenn Sie glauben, dass ein Kind uns personenbezogene Daten übermittelt hat, wenden Sie sich an [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Wir löschen die Daten und schließen das Konto. Hat ein Elternteil oder Erziehungsberechtigter der Nutzung durch einen Minderjährigen wirksam zugestimmt, kann diese Einwilligung jederzeit widerrufen werden.{{/if}}

## 9. Websites und Dienste Dritter {#third-parties}

Die Dienste können auf Websites, Plug-ins und Apps Dritter verlinken oder mit ihnen integriert sein, einschließlich Anmeldeanbietern. Wir kontrollieren diese nicht und sind nicht für deren Datenschutzpraktiken verantwortlich; es gelten deren eigene Richtlinien dafür, welche Daten sie erheben. Trennen Sie Verbindungen in Ihren Kontoeinstellungen oder in den Einstellungen des Drittanbieters.

## 10. Ihre Rechte {#rights}

Je nach Ihrem Wohnort können Sie:

- **Auskunft** über Ihre Daten verlangen und eine Kopie erhalten;
- unrichtige Daten **berichtigen** lassen;
- Ihre Daten **löschen** lassen („Recht auf Vergessenwerden“);
- die Verarbeitung **einschränken** oder ihr **widersprechen**, einschließlich Direktwerbung, jederzeit;
- Ihre Daten in einem maschinenlesbaren Format zu einem anderen Anbieter **übertragen** lassen (Datenübertragbarkeit);
- Ihre Einwilligung jederzeit **widerrufen**;
- nicht **allein automatisierten Entscheidungen** unterworfen werden, die rechtliche oder vergleichbar erhebliche Auswirkungen haben;
- sich bei einer Aufsichtsbehörde **beschweren**.

**Löschen Ihres Kontos.** Sie können Ihr Konto und Ihre personenbezogenen Daten {{#if feature.mobile}}in der App (Einstellungen, dann Konto, dann Konto löschen), {{/if}}in den Kontoeinstellungen auf unserer Website oder per E-Mail löschen. Wir verlangen nicht, dass Sie den Support kontaktieren, wenn eine Selbstbedienung möglich ist. Die Löschung eines Kontos ist nach der Karenzfrist, die wir Ihnen anzeigen, endgültig. Das Deinstallieren einer App löscht Ihr Konto nicht.

Um ein Recht auszuüben, schreiben Sie an [{{company.privacy_email}}](mailto:{{company.privacy_email}}) oder nutzen Sie die Einstellungen in Ihrem Konto. Wir können Ihre Identität überprüfen. Ist ein Antrag offensichtlich unbegründet oder übermäßig, können wir, soweit das Gesetz es zulässt, eine angemessene Gebühr verlangen oder den Antrag ablehnen. Wir antworten innerhalb **eines Monats** (bei komplexen Anträgen um bis zu zwei weitere Monate verlängerbar; nach US-Landesrecht 45 Tage, um weitere 45 Tage verlängerbar). Können wir einem Antrag nicht nachkommen, teilen wir Ihnen den Grund mit. Wir benachteiligen Sie nicht, weil Sie Ihre Rechte ausüben.

### 10.1 Europäischer Wirtschaftsraum, Vereinigtes Königreich, Schweiz

Alle oben genannten Rechte gelten. Sie können sich bei der Behörde des Landes beschweren, in dem Sie leben oder arbeiten oder in dem der Sachverhalt sich ereignet hat ([Liste der EWR-Behörden](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Vereinigtes Königreich: [ICO](https://ico.org.uk); Schweiz: [EDÖB (FDPIC)](https://www.edoeb.admin.ch)). Unsere federführende Aufsichtsbehörde ist {{law.authority}}.

### 10.2 Serbien

Soweit das serbische Gesetz über den Schutz personenbezogener Daten gilt, haben Sie Rechte, die den oben genannten gleichwertig sind. Sie können sich beim Kommissar für Informationen von öffentlicher Bedeutung und für den Schutz personenbezogener Daten (Poverenik), [www.poverenik.rs](https://www.poverenik.rs), beschweren.

### 10.3 Vereinigte Staaten (Kalifornien und andere Bundesstaaten) {#us-states}

Dieser Abschnitt ergänzt die obigen Angaben für Einwohner Kaliforniens und anderer US-Bundesstaaten mit umfassenden Datenschutzgesetzen (darunter Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana und weitere, sobald sie in Kraft treten).

- **In den letzten 12 Monaten erhobene Kategorien:** Kennungen (Name, E-Mail-Adresse, IP-Adresse, Online-Kennungen); Kundendaten; Geschäftsinformationen (Tarife, Käufe); Internet- oder Netzwerkaktivitäten; ungefährer Standort{{#if feature.location}} sowie genauer Standort mit Ihrer Erlaubnis{{/if}}; von Ihnen übermittelte Inhalte; Rückschlüsse, die sich auf den Betrieb der Dienste beschränken. Wir geben diese Daten an Dienstleister für die Geschäftszwecke in Abschnitt 3 weiter.
- **Verkauf und Weitergabe:** Wir verkaufen keine personenbezogenen Informationen und geben sie nicht für kontextübergreifende verhaltensbasierte Werbung weiter. Wir verkaufen oder geben wissentlich keine Daten von Personen unter 16 Jahren weiter.
- **Sensible personenbezogene Informationen:** Wir verwenden sie nicht, um Eigenschaften abzuleiten, und nicht über das hinaus, was zur Bereitstellung der Dienste erforderlich ist.
- **Ihre Rechte:** Auskunft, Löschung, Berichtigung, Datenübertragbarkeit, Widerspruch gegen Verkauf oder Weitergabe sowie gegen gezielte Werbung oder Profiling, Einschränkung der Verwendung sensibler Daten und Gleichbehandlung. Wir beachten **Global Privacy Control** und vergleichbare Opt-out-Signale des Browsers als gültigen Widerspruch.
- **Bevollmächtigte und Widersprüche:** Ein Bevollmächtigter kann mit Ihrer schriftlichen Erlaubnis Anträge stellen. Lehnen wir einen Antrag ab, können Sie dagegen Widerspruch einlegen, indem Sie auf unsere Entscheidung antworten. Sind Sie weiterhin unzufrieden, können Sie sich an die Generalstaatsanwaltschaft Ihres Bundesstaats wenden.
- **Kalifornien:** Sie können eine Liste der Dritten anfordern, denen wir im vorangegangenen Kalenderjahr personenbezogene Informationen für deren Direktwerbung offengelegt haben („Shine the Light“). Solche Offenlegungen nehmen wir nicht vor. In Kalifornien ansässige registrierte Nutzer unter 18 Jahren können die Entfernung von Inhalten verlangen, die sie öffentlich veröffentlicht haben.

### 10.4 Brasilien (LGPD)

Sie können die Bestätigung einer Verarbeitung, Auskunft, Berichtigung, Anonymisierung, Sperrung oder Löschung nicht erforderlicher oder übermäßiger Daten, Datenübertragbarkeit, Informationen über Stellen, mit denen wir Daten teilen, Informationen über die Möglichkeit, eine Einwilligung zu verweigern, und deren Folgen sowie die Überprüfung automatisierter Entscheidungen verlangen. Sie können sich bei der Autoridade Nacional de Proteção de Dados (ANPD) beschweren.

### 10.5 Andere Regionen

Wenn Sie in einem anderen Gebiet mit einem Datenschutzgesetz leben, gewähren wir die gleichwertigen Rechte, die Ihr Recht vorsieht. Insbesondere:

| Wo | Was wir ergänzen |
|---|---|
| **Kanada** (PIPEDA, Québec-Gesetz 25) | Sie können auf Ihre Daten zugreifen und sie berichtigen lassen, Ihre Einwilligung widerrufen und sich beim Office of the Privacy Commissioner oder bei der Commission d'accès à l'information beschweren. Unser Datenschutzkontakt ist die für den Schutz personenbezogener Informationen verantwortliche Person. Übermittlungen außerhalb Québecs werden bewertet und abgesichert. |
| **Indien** (DPDP Act 2023) | Sie können auf Ihre Daten zugreifen, sie berichtigen und löschen lassen, eine Person benennen, die Ihre Rechte ausübt, falls Sie versterben oder geschäftsunfähig werden, und unsere unten genannte Beschwerdestelle nutzen. Sie können sich beim Data Protection Board beschweren. |
| **Australien, Neuseeland** | Sie können Auskunft und Berichtigung verlangen und sich zunächst bei uns beschweren, danach beim OAIC (Australien) bzw. beim Privacy Commissioner (Neuseeland). |
| **Japan, Südkorea, Singapur, Thailand, Malaysia, Türkei, VAE, Saudi-Arabien, Südafrika, Kenia, Nigeria und ähnliche Gesetze** | Wir wenden die Rechte und Schutzmaßnahmen an, die diese Gesetze vorschreiben (Auskunft, Berichtigung, Löschung, Widerspruch, Beschwerde bei der örtlichen Behörde, Schutzmaßnahmen für Übermittlungen). Kontaktieren Sie uns, um sie in Anspruch zu nehmen. |
| **China** | Die Dienste richten sich nicht an Personen in der Volksrepublik China. Nutzen Sie die Dienste nicht, um personenbezogene Daten von dort ansässigen Personen zu übermitteln. |

**Beschwerde- und Datenschutzkontakt für alle Regionen:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Wir bearbeiten Anfragen innerhalb der Frist, die das jeweils anwendbare Recht zulässt.

## 11. Änderungen dieser Datenschutzerklärung {#changes}

Wir können diese Datenschutzerklärung aktualisieren, um Änderungen an den Diensten oder an der Rechtslage abzubilden. Bei wesentlichen Änderungen informieren wir Sie mindestens {{policy.notice_days}} Tage im Voraus per E-Mail oder in den Diensten, bevor sie für Sie gelten, und bitten gegebenenfalls um eine neue Einwilligung, soweit das Gesetz dies verlangt. Das oben angegebene Datum „zuletzt aktualisiert“ zeigt die aktuelle Fassung an. Frühere Fassungen stellen wir auf Anfrage zur Verfügung.

## 12. Kontakt {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
