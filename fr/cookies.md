---
doc: cookies
title: Politique relative aux cookies
version: 1.1.0
updated: 2026-10-31
lang: fr
translation_of: 1.1.0
status: draft
summary: Les cookies et technologies similaires utilisés par {{product.name}}, leurs finalités et la manière de les contrôler.
---

# Politique relative aux cookies

*Version {{doc.version}}, dernière mise à jour le {{doc.updated}}.*

La présente politique explique comment **{{company.name}}** utilise les cookies et technologies similaires sur {{product.name}} et nos autres Services. Les données personnelles collectées par ce moyen sont traitées comme décrit dans la [politique de confidentialité]({{url.privacy}}).

## 1. Ce que sont les cookies {#what}

Les cookies sont de petits fichiers stockés sur votre appareil par un site internet. Les « technologies similaires » comprennent le stockage local et de session, les identifiants d'appareil et les kits de développement logiciel (SDK) des applications mobiles, les pixels et les signaux de type empreinte numérique. Nous utilisons le terme « cookies » pour désigner l'ensemble de ces technologies.

## 2. Catégories utilisées {#categories}

| Catégorie | Finalité | Consentement requis ? |
|---|---|---|
| **Strictement nécessaires** | Vous maintenir connecté, mémoriser votre panier ou vos paramètres pendant une session, protéger contre la fraude et les attaques CSRF, répartir la charge des serveurs, mémoriser vos choix en matière de cookies | Non : indispensables au fonctionnement des Services ou à la fourniture de ce que vous avez demandé |
| **Préférences** | Mémoriser la langue, le thème, la mise en page et les choix similaires | Oui, sauf s'ils sont strictement nécessaires à une fonctionnalité que vous avez demandée |
{{#if feature.analytics}}| **Mesure d'audience** | Mesurer l'utilisation des Services et détecter les erreurs afin de les améliorer | Oui (lorsque la loi l'exige) |
{{/if}}{{#if feature.ads}}| **Publicité / marketing** | Afficher et mesurer des publicités pertinentes, limiter les répétitions et relier l'activité entre sites et applications | Oui |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Nous n'utilisons actuellement **que des cookies strictement nécessaires et de préférences**, et aucun cookie de mesure d'audience ni publicitaire.{{/unless}}{{/unless}}

## 3. Détail des cookies {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Les noms exacts des cookies, leurs fournisseurs et leurs durées figurent dans la boîte de dialogue des paramètres de cookies et sont disponibles sur demande à [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Vos choix {#choices}

- **Bandeau de consentement / paramètres.** Lorsque le consentement est requis, nous vous demandons votre accord avant de déposer des cookies non essentiels, avec une option de refus aussi simple que celle d'acceptation. Vous pouvez modifier ou retirer votre choix à tout moment via le lien « paramètres des cookies » en bas de page. Le retrait n'affecte pas les traitements antérieurs.
- **Paramètres du navigateur.** La plupart des navigateurs vous permettent de bloquer ou de supprimer les cookies ; consultez Paramètres → Confidentialité. Bloquer les cookies strictement nécessaires peut empêcher la connexion et d'autres fonctionnalités de fonctionner.
- **Pas d'enregistrement de session.** Nous n'utilisons pas d'outils d'enregistrement de session ni d'enregistrement d'écran.
{{#if feature.external}}- **Ressources de tiers.** Lorsqu'une ressource (par exemple des polices, des cartes ou une vidéo) est chargée depuis le serveur d'une autre entreprise, votre adresse IP lui est transmise. Nous demandons votre consentement pour chaque ressource séparément dans les paramètres de cookies et ne la chargeons qu'après que vous l'avez accepté ; vous pouvez modifier votre choix à tout moment.
{{/if}}- **Signaux.** Nous traitons le Global Privacy Control (GPC) et les signaux similaires d'opposition transmis par les navigateurs comme un refus du suivi non essentiel et de la vente ou du partage de données personnelles.
{{#if feature.ads}}- **Choix publicitaires.** Vous pouvez vous opposer à la publicité ciblée par centres d'intérêt via les paramètres de votre appareil (réinitialisation ou limitation de votre identifiant publicitaire) et via des outils tels que youronlinechoices.eu ou optout.aboutads.info. Vous verrez toujours des publicités, mais elles seront moins pertinentes.
{{/if}}
## 5. Durée de conservation {#duration}

Les cookies de session expirent à la fermeture du navigateur. Les cookies persistants restent valables pendant la période indiquée dans le tableau, et en tout état de cause pas plus longtemps que ce que la loi recommande (en général 13 mois au maximum pour les consentements à la mesure d'audience et à la publicité, que nous vous demandons de renouveler).

## 6. Tiers {#third-parties}

Certains cookies sont déposés par des tiers dont nous utilisons les services (mesure d'audience, contenus multimédias intégrés, paiement, chat d'assistance). Ils agissent selon leurs propres politiques et, lorsqu'ils sont responsables de traitement indépendants, vous devriez consulter ces politiques. Nous les listons dans le tableau ci-dessus.
{{#if table.external}}
Ressources qui reçoivent votre adresse IP lors de leur chargement :

{{table.external}}
{{/if}}

## 7. Modifications {#changes}

Si nous ajoutons ou modifions des cookies non essentiels, nous mettons à jour la présente politique et demandons à nouveau votre consentement lorsque cela est requis. Questions : [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
