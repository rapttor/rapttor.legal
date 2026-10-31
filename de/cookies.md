---
doc: cookies
title: Cookie-Richtlinie
version: 1.1.0
updated: 2026-10-31
lang: de
translation_of: 1.1.0
status: draft
summary: Welche Cookies und ähnlichen Technologien {{product.name}} verwendet, warum und wie Sie sie steuern können.
---

# Cookie-Richtlinie

*Version {{doc.version}}, zuletzt aktualisiert am {{doc.updated}}.*

Diese Richtlinie erläutert, wie **{{company.name}}** Cookies und ähnliche Technologien auf {{product.name}} und unseren anderen Diensten einsetzt. Personenbezogene Daten, die auf diesem Weg erhoben werden, werden wie in der [Datenschutzerklärung]({{url.privacy}}) beschrieben behandelt.

## 1. Was sie sind {#what}

Cookies sind kleine Dateien, die eine Website auf Ihrem Gerät speichert. Zu „ähnlichen Technologien“ zählen lokaler Speicher und Sitzungsspeicher, Geräte-Kennungen und SDKs in mobilen Apps, Pixel sowie fingerprintähnliche Signale. Wir verwenden den Begriff „Cookies“ für all diese Technologien.

## 2. Verwendete Kategorien {#categories}

| Kategorie | Zweck | Einwilligung erforderlich? |
|---|---|---|
| **Unbedingt erforderlich** | Anmeldung aufrechterhalten, Warenkorb oder Einstellungen für eine Sitzung speichern, Betrug und CSRF-Angriffe abwehren, Serverlast verteilen, Ihre Cookie-Auswahl speichern | Nein: erforderlich, damit die Dienste funktionieren oder das von Ihnen Angeforderte bereitgestellt werden kann |
| **Präferenzen** | Sprache, Design, Layout und ähnliche Auswahlen speichern | Ja, sofern nicht für eine von Ihnen gewünschte Funktion unbedingt erforderlich |
{{#if feature.analytics}}| **Analyse** | Nutzung der Dienste messen und Fehler finden, damit wir sie verbessern können | Ja (wo das Gesetz es verlangt) |
{{/if}}{{#if feature.ads}}| **Werbung / Marketing** | relevante Werbung anzeigen und messen, Wiederholungen begrenzen und Aktivitäten über Websites und Apps hinweg verknüpfen | Ja |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Wir verwenden derzeit **nur unbedingt erforderliche und Präferenz-Cookies** und keine Analyse- oder Werbe-Cookies.{{/unless}}{{/unless}}

## 3. Die Cookies im Einzelnen {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Die genauen Cookie-Namen, Anbieter und Laufzeiten sind im Dialog der Cookie-Einstellungen aufgeführt und auf Anfrage unter [{{company.privacy_email}}](mailto:{{company.privacy_email}}) erhältlich.
{{/if}}

## 4. Ihre Wahlmöglichkeiten {#choices}

- **Cookie-Banner / Einstellungen.** Wo eine Einwilligung erforderlich ist, fragen wir, bevor wir nicht unbedingt erforderliche Cookies setzen. Die Option zur Ablehnung ist dabei ebenso einfach wie die zur Annahme. Sie können Ihre Auswahl jederzeit über den Link zu den Cookie-Einstellungen in der Fußzeile ändern oder widerrufen. Der Widerruf berührt die vorherige Verarbeitung nicht.
- **Browser-Einstellungen.** Die meisten Browser erlauben es, Cookies zu blockieren oder zu löschen; Sie finden dies unter Einstellungen → Datenschutz. Das Blockieren unbedingt erforderlicher Cookies kann die Anmeldung und andere Funktionen beeinträchtigen.
- **Keine Sitzungsaufzeichnung.** Wir verwenden keine Session-Replay- oder Bildschirmaufzeichnungstools.
{{#if feature.external}}- **Drittanbieter-Inhalte.** Wenn eine Ressource (zum Beispiel Schriften, Karten oder Videos) von einem Server eines anderen Unternehmens geladen wird, wird Ihre IP-Adresse an dieses Unternehmen übermittelt. Wir fragen für jede Ressource separat in den Cookie-Einstellungen um Ihre Einwilligung und laden sie erst, nachdem Sie zugestimmt haben. Ihre Auswahl können Sie jederzeit ändern.
{{/if}}- **Signale.** Wir behandeln Global Privacy Control (GPC) und ähnliche Opt-out-Signale des Browsers als Ablehnung nicht unbedingt erforderlichen Trackings sowie des Verkaufs bzw. der Weitergabe personenbezogener Daten.
{{#if feature.ads}}- **Werbeeinstellungen.** Sie können interessenbezogener Werbung über die Einstellungen Ihres Geräts widersprechen (Zurücksetzen oder Einschränken Ihrer Werbe-Kennung) sowie über Angebote wie youronlinechoices.eu oder optout.aboutads.info. Sie sehen weiterhin Werbung, nur weniger relevante.
{{/if}}
## 5. Wie lange sie gültig sind {#duration}

Sitzungs-Cookies laufen ab, wenn Sie den Browser schließen. Dauerhafte Cookies gelten für den in der Tabelle angegebenen Zeitraum und in jedem Fall nicht länger, als das Gesetz empfiehlt (in der Regel höchstens 13 Monate für Einwilligungen zu Analyse und Werbung; diese fragen wir erneut ab).

## 6. Dritte {#third-parties}

Einige Cookies werden von Dritten gesetzt, deren Dienste wir nutzen (Analyse, eingebettete Medien, Zahlung, Support-Chat). Sie handeln nach ihren eigenen Richtlinien. Soweit sie eigenständig Verantwortliche sind, sollten Sie diese lesen. Wir führen sie in der Tabelle oben auf.
{{#if table.external}}
Inhalte, die beim Laden Ihre IP-Adresse erhalten:

{{table.external}}
{{/if}}

## 7. Änderungen {#changes}

Wenn wir nicht unbedingt erforderliche Cookies hinzufügen oder ändern, aktualisieren wir diese Richtlinie und bitten, soweit erforderlich, erneut um Ihre Einwilligung. Fragen: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
