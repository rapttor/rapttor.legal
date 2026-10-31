---
doc: refunds
title: Politique de remboursement et d'annulation
version: 1.1.1
updated: 2026-10-31
lang: fr
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Comment résilier, quand vous pouvez vous rétracter ou être remboursé, et ce qui se passe pour les achats effectués par l'intermédiaire des boutiques d'applications.
---

# Politique de remboursement et d'annulation

*Version {{doc.version}}, dernière mise à jour : {{doc.updated}}.*

La présente politique fait partie des [Conditions générales d'utilisation]({{url.terms}}) et s'applique aux achats effectués auprès de **{{company.name}}** (« nous ») pour {{product.name}}. Rien dans la présente politique ne limite les droits que vous confère le droit impératif de la consommation.

## Le lieu d'achat compte {#where}

- **Achat effectué directement auprès de nous** (notre site ou notre caisse) : la présente politique s'applique.
{{#if feature.merchant_of_record}}- **Achat effectué auprès de notre prestataire de paiement{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record) : le prestataire est le vendeur de la commande ; il gère le paiement, les taxes et les reçus, et traite les remboursements selon ses conditions de vente et la présente politique. Les demandes peuvent nous être adressées ou être adressées au prestataire.
{{/if}}
- **Achat effectué par l'intermédiaire d'une boutique d'applications ou d'une plateforme** (App Store d'Apple, Google Play, boutiques de consoles ou de PC) : la boutique est le vendeur enregistré et **gère les remboursements, les annulations et la facturation**. Demandez un remboursement à la boutique selon sa propre procédure ; nous ne pouvons pas rembourser ces paiements, mais nous vous aiderons à confirmer les faits et pouvons retirer l'article acheté lorsque la boutique procède au remboursement. Les règles de la boutique et votre droit local déterminent vos droits dans ce cas.

{{#if feature.subscriptions}}
## Résiliation d'un abonnement {#cancel}

Vous pouvez résilier à tout moment dans les paramètres de votre compte{{#if feature.mobile}} (ou dans les paramètres d'abonnement de la boutique si vous vous y êtes abonné){{/if}}, ou en écrivant à [{{company.email}}](mailto:{{company.email}}). La résiliation met fin aux renouvellements futurs ; vous conservez l'accès jusqu'à la fin de la période que vous avez payée. Nous ne calculons pas de prorata pour les périodes partielles, sauf si la loi ou la présente politique le prévoit. Résilier est aussi simple que souscrire : un bouton d'annulation direct dans votre compte, sans appel ni formulaire. Nous vous rappelons l'échéance avant un renouvellement, ou avant la conversion d'un essai en formule payante, lorsque la loi l'exige ; pour les formules d'une durée d'un an ou plus, nous vous envoyons un rappel 15 à 45 jours avant le renouvellement, ainsi qu'un rappel annuel, indiquant le prix et la manière de résilier. Les conditions de renouvellement sont toujours affichées à côté du bouton de paiement.
{{/if}}

## Droit de rétractation pour les consommateurs (UE, Royaume-Uni et droits similaires) {#withdrawal}

{{#if feature.consumers}}
Si vous êtes un consommateur dans l'Union européenne, au Royaume-Uni ou dans un autre pays accordant un droit de rétractation pour les contrats à distance, vous pouvez vous rétracter d'un achat **dans un délai de {{policy.refund_days}} jours** à compter de la conclusion du contrat, sans avoir à motiver votre décision.

**Contenus et services numériques.** Si vous nous demandez de commencer à fournir un service numérique ou un contenu numérique (par exemple un accès, des crédits ou des objets virtuels) pendant le délai de rétractation, et que vous confirmez comprendre que vous pourriez perdre votre droit de rétractation, alors :
- pour un **contenu numérique non fourni sur un support matériel**, une fois la fourniture commencée avec votre consentement exprès, vous perdez le droit de vous rétracter ;
- pour un **service numérique**, vous pouvez toujours vous rétracter pendant le délai, mais vous payez un montant proportionné à ce qui a été fourni jusqu'au moment où vous nous informez de votre décision.

Nous demandons ce consentement lors du paiement. Si vous ne l'avez pas donné, le plein droit de rétractation s'applique.

**Fonction de rétractation.** Comme l'exige la loi à compter du 19 juin 2026, une fonction « Se rétracter du contrat » est disponible dans votre compte et dans la confirmation de commande : choisissez le contrat, confirmez, et vous recevez un accusé de réception sur un support durable (courriel) indiquant la date et l'heure. Vous n'avez pas à expliquer les raisons de votre décision.

**Autres moyens de vous rétracter.** Envoyez une déclaration claire (par exemple par courriel à [{{company.email}}](mailto:{{company.email}})) de votre décision de vous rétracter, avec votre nom, les détails de la commande ou du compte et la date d'achat. Vous pouvez utiliser le formulaire ci-dessous, mais vous n'y êtes pas obligé. Nous accuserons réception et vous rembourserons **dans un délai de 14 jours** à compter de la date à laquelle nous avons connaissance de votre décision, en utilisant le même moyen de paiement.

> **Formulaire type de rétractation** (à compléter et à renvoyer uniquement si vous souhaitez vous rétracter)
> À {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}) :
> Je/Nous notifie(ons) par la présente ma/notre rétractation du contrat portant sur la fourniture du service/contenu numérique suivant : ______ ; commandé le / reçu le : ______ ; nom : ______ ; adresse : ______ ; date : ______ (signature uniquement si le formulaire est sur papier).
{{else}}
Nos Services ne sont proposés qu'à des clients professionnels ; les droits légaux de rétractation des consommateurs ne s'appliquent donc pas. Contactez-nous si vous pensez être un consommateur.
{{/if}}

## Autres pays {#other-countries}

Certains pays accordent des droits supplémentaires d'annulation ou de remboursement (par exemple des délais de réflexion, des règles de renouvellement automatique dans plusieurs États américains, ou des garanties légales en Australie, en Nouvelle-Zélande et au Royaume-Uni). Lorsqu'ils sont impératifs, ces droits s'appliquent et l'emportent sur toute disposition moins favorable de la présente politique.

## Cas de remboursement {#refunds}

Nous procéderons au remboursement, en totalité ou en partie selon le cas :

- d'un **débit en double ou erroné**, ou d'un débit que vous n'avez pas autorisé (signalez-le sans délai ; nous pouvons vous demander des précisions) ;
- d'un achat dont le service **n'a pas pu être fourni** ou est substantiellement défectueux, et que nous ne pouvons pas corriger dans un délai raisonnable ;
- d'un achat dont vous demandez l'annulation dans un délai de **{{policy.refund_days}} jours**, si vous n'avez pas utilisé ce que vous avez acheté (y compris les crédits non utilisés), à notre discrétion lorsqu'aucun droit légal ne s'applique ;
- de tout autre cas convenu par écrit avec nous.

Sinon, les frais payés ne sont pas remboursables, y compris pour les périodes partielles, les articles utilisés ou consommés, et les comptes clôturés pour violation de la [Politique d'utilisation acceptable]({{url.acceptable_use}}). Les remboursements sont versés sur le moyen de paiement d'origine ; nous ne pouvons rembourser en crédits que si vous en faites la demande.

{{#if feature.credits}}
## Crédits et objets virtuels {#credits}

Les crédits prépayés non utilisés peuvent être remboursés dans le délai indiqué ci-dessus. Les crédits et objets virtuels dépensés ou consommés ne sont pas remboursables, sauf si la loi l'exige. Si nous mettons fin à un service, nous traitons les soldes payés restants comme le décrivent les [Conditions générales d'utilisation]({{url.terms}}){{#if feature.game}} et les [Règles du jeu]({{url.game_rules}}){{/if}}.
{{/if}}

## Rétrofacturations et litiges {#chargebacks}

Veuillez nous contacter avant de contester un débit auprès de votre banque ou de l'émetteur de votre carte : nous résolvons généralement la situation plus rapidement. Si vous ouvrez un litige pour un débit valide, nous pouvons suspendre le compte jusqu'à son règlement et communiquer au prestataire de paiement les preuves de livraison et d'utilisation.

## Taxes et devise {#taxes}

Les remboursements incluent la taxe qui a été facturée. Si vous avez payé dans une autre devise, le montant restitué peut différer en raison des variations de taux de change et des frais bancaires, indépendants de notre volonté.

## Comment faire une demande {#contact}

Écrivez à [{{company.email}}](mailto:{{company.email}}) en indiquant l'adresse courriel de votre compte, le numéro de commande ou de reçu et une brève description. Nous vous répondrons. Si nous ne parvenons pas à résoudre le problème, vous pouvez vous adresser à votre autorité locale de protection des consommateurs{{#if consumer_dispute}} ou {{consumer_dispute}}{{/if}}.
