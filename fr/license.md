---
doc: license
title: Licence
version: 1.0.0
updated: 2026-10-23
lang: fr
translation_of: 1.0.0
status: draft
when: license.id
summary: La licence sous laquelle {{product.name}} est publié.
---

# Licence

*Version {{doc.version}}, dernière mise à jour : {{doc.updated}}.*

**{{product.name}}** est publié par **{{license.holder}}** sous la **{{license.name}}**{{#if license.spdx}} (SPDX : `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Il s'agit d'un résumé en langage courant, qui ne remplace pas le texte de la licence ci-dessous.)*

{{#if license.url}}Texte de référence : [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Questions ou demandes d'autorisation : [{{company.legal_email}}](mailto:{{company.legal_email}}). L'utilisation du site web et des services de {{product.name}} est régie par nos [Conditions générales d'utilisation]({{url.terms}}).

## Texte intégral {#text}

Le texte anglais de la licence ci-dessous fait seul foi ; la présente version française n'est fournie qu'à titre informatif.

```text
{{license.text}}
```
