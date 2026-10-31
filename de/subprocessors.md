---
doc: subprocessors
title: Liste der Unterauftragsverarbeiter
version: 1.0.0
updated: 2026-10-23
lang: de
translation_of: 1.0.0
status: draft
summary: Dritte, die personenbezogene Daten im Auftrag von {{product.name}} verarbeiten.
---

# Liste der Unterauftragsverarbeiter

*Version {{doc.version}}, zuletzt aktualisiert am {{doc.updated}}.*

Zur Bereitstellung von {{product.name}} setzt **{{company.name}}** die folgenden Dritten ein, die in unserem Auftrag personenbezogene Daten verarbeiten können. Jeder von ihnen ist durch eine schriftliche Datenschutzvereinbarung gebunden. {{#if feature.processor_role}}Diese Liste ist Anhang III zum [Auftragsverarbeitungsvertrag (AVV)]({{url.dpa}}) und wird in der [Datenschutzerklärung]({{url.privacy}}) erwähnt.{{else}}Sie wird in der [Datenschutzerklärung]({{url.privacy}}) erwähnt.{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Die aktuelle Liste ist auf Anfrage erhältlich unter [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Änderungen {#changes}

Wir geben mindestens **{{policy.notice_days}} Tage** Vorankündigung, bevor wir einen Unterauftragsverarbeiter hinzufügen oder ersetzen. Dies geschieht durch Aktualisierung dieser Seite (achten Sie auf das Datum „zuletzt aktualisiert“) und per E-Mail an Kunden, die sich unter [{{company.privacy_email}}](mailto:{{company.privacy_email}}) angemeldet haben. {{#if feature.processor_role}}Kunden können aus angemessenen datenschutzrechtlichen Gründen widersprechen, wie im AVV beschrieben.{{/if}}
