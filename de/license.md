---
doc: license
title: Lizenz
version: 1.0.0
updated: 2026-10-23
lang: de
translation_of: 1.0.0
status: draft
when: license.id
summary: Die Lizenz, unter der {{product.name}} veröffentlicht wird.
---

# Lizenz

*Version {{doc.version}}, zuletzt aktualisiert am {{doc.updated}}.*

**{{product.name}}** wird von **{{license.holder}}** unter der **{{license.name}}** veröffentlicht{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Dies ist eine allgemein verständliche Zusammenfassung und kein Ersatz für den unten stehenden Lizenztext.)*

{{#if license.url}}Maßgeblicher Text: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Der englische Lizenztext ist maßgeblich; die deutsche Übersetzung dient nur der Information.

Fragen oder Anfragen zur Erlaubnis: [{{company.legal_email}}](mailto:{{company.legal_email}}). Die Nutzung der Website und der Dienste von {{product.name}} unterliegt unseren [Nutzungsbedingungen]({{url.terms}}).

## Vollständiger Text {#text}

```text
{{license.text}}
```
