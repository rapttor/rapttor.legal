---
doc: subprocessors
title: Liste des sous-traitants ultérieurs
version: 1.0.0
updated: 2026-10-23
lang: fr
translation_of: 1.0.0
status: draft
summary: Tiers qui traitent des données à caractère personnel pour le compte de {{product.name}}.
---

# Liste des sous-traitants ultérieurs

*Version {{doc.version}}, dernière mise à jour {{doc.updated}}.*

Pour fournir {{product.name}}, **{{company.name}}** fait appel aux tiers suivants, susceptibles de traiter des données à caractère personnel pour notre compte. Chacun est lié par un accord écrit de protection des données. {{#if feature.processor_role}}La présente liste constitue l'annexe III de l'[annexe relative au traitement des données]({{url.dpa}}) et est mentionnée dans la [Politique de confidentialité]({{url.privacy}}).{{else}}Elle est mentionnée dans la [Politique de confidentialité]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
La liste actuelle peut être obtenue sur demande à [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Modifications {#changes}

Nous vous donnons un préavis d'au moins **{{policy.notice_days}} jours** avant d'ajouter ou de remplacer un sous-traitant ultérieur, en mettant à jour la présente page (consultez la date de « dernière mise à jour ») et par e-mail aux clients qui se sont abonnés, à l'adresse [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Les clients peuvent s'opposer pour des motifs raisonnables de protection des données, dans les conditions prévues par l'annexe relative au traitement des données.{{/if}}
