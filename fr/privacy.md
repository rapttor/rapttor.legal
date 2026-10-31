---
doc: privacy
title: Politique de confidentialité
version: 1.2.1
updated: 2026-10-31
lang: fr
translation_of: 1.2.1
status: draft
summary: Comment {{product.name}} collecte, utilise, partage et protège les données à caractère personnel, et les droits dont vous disposez.
---

# Politique de confidentialité

*Version {{doc.version}}, dernière mise à jour le {{doc.updated}}.*

## 1. Qui nous sommes {#who-we-are}

La présente politique explique comment **{{company.name}}**, dont le siège social est situé à {{company.address}} (« **{{product.name}}** », « **nous** »), traite les données à caractère personnel lorsque vous utilisez {{product.name}}, nos sites internet, applications, API et services associés (les « **Services** »).

Pour les données à caractère personnel dont nous déterminons la manière et les finalités du traitement (par exemple votre compte, vos visites sur le site et la facturation), nous sommes le **responsable du traitement**. Contact : [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Notre délégué à la protection des données peut être contacté à l'adresse [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Nous n'avons pas désigné de délégué à la protection des données, la loi ne l'exigeant pas pour nos activités. Les questions relatives à la vie privée doivent être adressées à [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Représentant dans l'UE (art. 27 RGPD) :** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Représentant au Royaume-Uni (art. 27 UK GDPR) :** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Lorsque nous agissons en tant que sous-traitant

Si vous utilisez les Services par l'intermédiaire d'une organisation (votre employeur, un client professionnel), cette organisation est en général la responsable du traitement des données qu'elle saisit dans les Services, et nous traitons ces données pour son compte en vertu de notre [annexe relative au traitement des données]({{url.dpa}}). Dans ce cas, adressez vos demandes à cette organisation ; nous l'aiderons à y répondre. La présente politique ne s'applique alors qu'aux données que nous contrôlons nous-mêmes (administration du compte, facturation, sécurité, site internet).
{{/if}}

## 2. Données que nous collectons {#data-we-collect}

| Catégorie | Exemples | Source |
|---|---|---|
| **Données de compte** | nom, adresse e-mail, empreinte du mot de passe, détails du profil, langue, préférences | Vous |
| **Données de contact et d'assistance** | messages, pièces jointes, notes d'appel, commentaires, réponses aux enquêtes | Vous |
| **Contenus que vous soumettez** | fichiers, textes, paramètres, tout élément que vous placez dans les Services | Vous |
{{#if feature.anonymous}}| **Données de compte anonyme** | un identifiant de compte aléatoire, la session du navigateur ou de l'appareil qui le contient, les contenus que vous créez, et une adresse e-mail si vous en associez une ultérieurement | Vous, automatiquement |
{{/if}}{{#if feature.uploads}}| **Fichiers et images que vous téléversez** | les fichiers eux-mêmes et les métadonnées qu'ils contiennent (par exemple les caractéristiques de l'appareil photo ou la localisation figurant dans les photos) | Vous |
{{/if}}| **Justificatifs de consentement** | ce à quoi vous avez consenti (documents, confirmation d'âge, choix facultatifs), la version, la langue, la date et le mode d'acceptation | Vous |
| **Données d'utilisation et de l'appareil** | adresse IP, type de navigateur et d'appareil, système d'exploitation, langue, pages et fonctionnalités utilisées, horodatages, site de provenance, journaux de plantage et d'erreurs | Automatiquement |
| **Cookies et technologies similaires** | identifiants stockés dans les cookies, le stockage local, les kits de développement logiciel (SDK) (voir la [politique relative aux cookies]({{url.cookies}})) | Automatiquement |
{{#if feature.payments}}| **Données de paiement et de transaction** | forfait, factures, nom et adresse de facturation, numéro d'identification fiscale, statut du paiement ; les données de carte sont traitées par notre prestataire de paiement et ne sont pas conservées par nous | Vous, prestataire de paiement |
{{/if}}{{#if feature.location}}| **Données de localisation** | localisation précise uniquement si vous l'activez sur votre appareil ; sinon, localisation approximative déduite de l'adresse IP | Votre appareil |
{{/if}}| **Données de compte tiers** | nom, adresse e-mail, photo de profil et identifiant transmis par un fournisseur d'authentification de votre choix | Tiers, avec votre autorisation |
{{#if feature.ugc}}| **Communications entre utilisateurs** | messages et interactions que vous envoyez par les Services | Vous |
{{/if}}{{#if feature.mobile}}| **Données de l'appareil mobile** | modèle d'appareil et version du système d'exploitation, version de l'application, jetons d'instance de l'application et de notifications push, langue et fuseau horaire, état des autorisations ; identifiant publicitaire uniquement si vous autorisez le suivi | Votre appareil |
{{/if}}{{#if feature.game}}| **Données de jeu** | progression, scores, classements, objets et achats, historique des parties, discussions en jeu et signalements vocaux (le cas échéant), signaux anti-triche et d'intégrité, profil public (nom, avatar, rang) | Vous, automatiquement |
{{/if}}| **Signaux de sécurité et de fraude** | échecs de connexion, signalements d'abus, scores de risque, requêtes bloquées | Automatiquement, autres utilisateurs |

Nous ne collectons pas intentionnellement de catégories particulières de données (santé, données biométriques, opinions politiques ou convictions religieuses et données similaires). Merci de ne pas les transmettre, sauf si une fonctionnalité le demande expressément. Si vous les transmettez malgré tout, il vous appartient de disposer d'une base juridique valable.

Vous n'êtes pas obligé de nous communiquer des données à caractère personnel, mais sans certaines d'entre elles (par exemple une adresse e-mail), nous ne pouvons pas vous fournir de compte.

### Suivi que nous n'utilisons pas {#no-tracking}

Nous n'utilisons **pas** d'outils d'enregistrement de session ou d'écran, de capture des frappes ou des mouvements de souris, ni d'empreinte numérique du navigateur. {{#if feature.analytics}}Les outils de mesure d'audience ne fonctionnent qu'avec votre consentement (voir la [politique relative aux cookies]({{url.cookies}})).{{else}}Nous n'utilisons ni outils de mesure d'audience ni traceurs publicitaires.{{/if}}
{{#if feature.external}}
### Ressources de tiers et votre adresse IP {#external}

Certaines fonctionnalités chargent des contenus depuis les serveurs d'autres entreprises (par exemple des polices de caractères, des cartes, des vidéos ou des vérifications de sécurité). Lorsque votre navigateur récupère ces contenus, **votre adresse IP et des informations techniques sont transmises à cette entreprise**, qui peut être située hors de votre pays. Nous ne chargeons ces ressources qu'après que vous avez accepté chacune d'elles dans les paramètres de cookies, que vous pouvez modifier à tout moment ; si vous refusez, nous utilisons une solution de remplacement ou la fonctionnalité reste désactivée.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-mails {#emails}

Nous envoyons les e-mails dont les Services ont besoin (liens de connexion, reçus, avis de sécurité){{#if feature.marketing}} et, uniquement lorsque vous y avez consenti ou lorsque la loi le permet, des actualités sur le produit{{/if}}. Chaque e-mail contient un lien permettant de ne plus recevoir d'e-mails de notre part. {{#if feature.marketing}}Les e-mails facultatifs cessent en un clic, immédiatement. {{/if}}Comme le blocage de tous les e-mails bloquerait aussi les liens de connexion, une demande visant à bloquer **tous** les e-mails provenant de ce service est confirmée par un dernier e-mail contenant un lien qui prouve que l'adresse vous appartient. Nous ajoutons ensuite l'adresse à la liste d'exclusion de notre prestataire d'envoi d'e-mails et l'y conservons afin de pouvoir respecter votre choix (obligation légale et intérêt légitime à respecter votre demande).
{{/if}}{{#if feature.age_gate}}
### Confirmation de l'âge {#age}

Avant que vous n'utilisiez des fonctionnalités comportant {{policy.age_topics|contenus soumis à une limite d'âge}}, nous vous demandons de confirmer que vous avez au moins {{policy.age_gate}} ans et que vous êtes majeur selon les règles de votre pays. Nous ne demandons pas votre date de naissance ; nous conservons uniquement votre confirmation et la date à laquelle vous l'avez donnée. Si nous apprenons qu'une personne n'a pas atteint cet âge, nous bloquons le compte et supprimons les données.
{{/if}}{{#if feature.gambling}}
Pour les fonctionnalités de jeux d'argent, nous pouvons également demander une preuve de votre âge et de votre identité, et faire appel à un prestataire de vérification à cette fin. Nous conservons le résultat ainsi que les justificatifs que la loi exige.
{{/if}}

## 3. Pourquoi nous utilisons vos données, et nos bases juridiques {#purposes}

| Finalité | Base juridique (RGPD / UK GDPR) |
|---|---|
| Fournir les Services, créer et gérer votre compte, traiter les commandes | Contrat (art. 6(1)(b)) |
| Assistance client et communication concernant votre utilisation des Services | Contrat ; intérêts légitimes |
| Sécurité, prévention des abus et de la fraude, application de nos [conditions générales d'utilisation]({{url.terms}}) et de notre [politique d'utilisation acceptable]({{url.acceptable_use}}) | Intérêts légitimes (art. 6(1)(f)) ; obligation légale |
| Débogage, fiabilité, planification des capacités et amélioration des Services | Intérêts légitimes |
{{#if feature.analytics}}| Statistiques d'utilisation | Consentement lorsque la loi l'exige, sinon intérêts légitimes |
{{/if}}{{#if feature.marketing}}| Actualités sur le produit et e-mails marketing | Consentement, ou intérêts légitimes pour les clients existants lorsque la loi le permet ; vous pouvez vous désinscrire à tout moment |
{{/if}}{{#if feature.ads}}| Publicité et mesure d'audience | Consentement |
{{/if}}| Enregistrement de vos consentements et respect de vos choix en matière d'e-mails | Obligation légale ; intérêts légitimes |
{{#if feature.external}}| Chargement de ressources de tiers qui reçoivent votre adresse IP | Consentement (art. 6(1)(a), et règles ePrivacy relatives à l'accès à votre appareil) |
{{/if}}| Comptabilité, fiscalité et autres obligations légales | Obligation légale (art. 6(1)(c)) |
| Constatation, exercice ou défense de droits en justice ; réponse aux autorités | Intérêts légitimes ; obligation légale |
| Opérations sur le capital de l'entreprise (fusion, acquisition, cession d'actifs) | Intérêts légitimes |

Lorsque nous nous appuyons sur des intérêts légitimes, nous les avons mis en balance avec vos droits ; vous pouvez demander des précisions et vous opposer au traitement (section 10). Lorsque nous nous appuyons sur votre consentement, vous pouvez le retirer à tout moment ; cela n'affecte pas les traitements antérieurs.

{{#if feature.ai}}
### Fonctionnalités assistées par l'IA {#ai}

Certaines fonctionnalités utilisent des modèles d'apprentissage automatique ou d'IA générative. Lorsque vous les utilisez, le contenu que vous soumettez en entrée est transmis au prestataire agissant comme notre sous-traitant afin de produire le résultat.

- Nous n'utilisons **pas** vos contenus pour entraîner des modèles à usage général, et nous exigeons de nos prestataires qu'ils ne le fassent pas, sauf si vous y consentez expressément.
- Les résultats de l'IA peuvent être erronés, incomplets ou biaisés. Ne vous y fiez pas pour des décisions juridiques, médicales, financières ou d'autres décisions à fort enjeu sans examen humain.
- Nous ne prenons pas à votre égard de décisions produisant des effets juridiques ou des effets significatifs similaires, uniquement par des moyens automatisés. Les restrictions de compte pour abus sont réexaminées par une personne sur demande (voir la [politique d'utilisation acceptable]({{url.acceptable_use}}), partie relative à l'application).
- Les contenus générés par l'IA sont signalés lorsque la loi l'exige.
{{/if}}

## 4. Avec qui nous partageons des données {#sharing}

**Nous ne vendons pas vos données à caractère personnel**, et nous ne les « partageons » pas à des fins de publicité comportementale inter-contextes{{#if feature.ads}}, sauf comme décrit dans la politique relative aux cookies et uniquement lorsque vous y avez consenti{{/if}}.

Nous ne communiquons des données à caractère personnel qu'aux destinataires suivants :

- **Prestataires de services (sous-traitants)** agissant sur nos instructions en vertu de contrats écrits : hébergement et infrastructure, envoi d'e-mails, outils d'assistance client, surveillance des erreurs{{#if feature.payments}}, traitement des paiements{{/if}}{{#if feature.ai}}, fournisseurs d'IA{{/if}}. La liste actuelle figure dans notre [liste des sous-traitants ultérieurs]({{url.subprocessors}}).
- **Plateformes et magasins d'applications** que vous utilisez pour accéder aux Services (par exemple Apple, Google, les boutiques de consoles ou de PC), qui gèrent les paiements et peuvent nous transmettre des données limitées d'achat et de compte ;
- **Autres utilisateurs ou le public**, uniquement selon vos instructions (par exemple les contenus que vous choisissez de publier{{#if feature.ugc}} ou les messages que vous envoyez{{/if}}).
- **Conseils professionnels** (avocats, auditeurs, assureurs) soumis à une obligation de confidentialité.
- **Autorités, tribunaux et personnes concernées** lorsque la loi l'exige, pour répondre à une procédure judiciaire valable, pour protéger des droits, la sécurité ou des biens, ou pour enquêter sur les abus et la fraude. Nous vérifions la validité des demandes et, lorsque la loi le permet, nous vous en informons.
- **Un successeur** en cas de fusion, d'acquisition, de financement ou de cession d'actifs, qui doit respecter la présente politique ; nous vous informerons de tout changement important de contrôle affectant vos données.
- **Toute autre personne**, uniquement avec votre consentement.

## 5. Transferts internationaux {#transfers}

Nous opérons depuis {{company.country}}{{#if hosting.region}} et conservons les données principalement dans {{hosting.region}}{{/if}}. Certains prestataires traitent des données dans d'autres pays, notamment aux États-Unis. Lorsque des données à caractère personnel provenant de l'EEE, du Royaume-Uni ou de la Suisse sont transférées vers un pays ne faisant pas l'objet d'une décision d'adéquation, nous recourons à une garantie reconnue : le Cadre de protection des données UE-États-Unis (ou ses extensions britannique et suisse) lorsque le destinataire est certifié, à défaut les **clauses contractuelles types** de la Commission européenne, complétées le cas échéant par l'addendum britannique relatif au transfert international de données ou par les modifications suisses, ainsi que par des mesures complémentaires telles que le chiffrement en transit et au repos. Vous pouvez demander une copie des garanties applicables à [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Durée de conservation des données {#retention}

| Données | Durée de conservation |
|---|---|
| Données de compte et contenus | Tant que votre compte est actif, puis suppression ou anonymisation dans un délai de {{policy.retention_account_days}} jours après la fermeture |
| Journaux serveur et de sécurité | 90 jours |
| Sauvegardes | Glissantes, jusqu'à 35 jours ; les données supprimées disparaissent des sauvegardes selon ce cycle |
| Factures et documents comptables | {{policy.retention_billing_years}} ans, ou aussi longtemps que la loi l'exige |
| Correspondance avec le support | Jusqu'à 3 ans après la clôture du dossier, ou tant que le compte est actif si cette durée est plus longue |
| Justificatifs de consentements, de désinscriptions et de demandes de droits | Aussi longtemps que nécessaire pour démontrer la conformité |
| Données nécessaires à une action en justice ou à une enquête | Jusqu'à la résolution de l'affaire et l'expiration des délais de prescription |
| Registres d'abus et de bannissements (identifiant, motif, date) | Jusqu'à 5 ans, pour prévenir les abus répétés |
| Justificatifs de consentement et liste d'exclusion des e-mails | Justificatifs de consentement : pendant la durée de vie du compte, augmentée du délai de prescription ; entrées de la liste d'exclusion : jusqu'à ce que vous nous demandiez de les retirer |

Lorsque la finalité prend fin, nous supprimons les données ou les anonymisons de manière irréversible.

## 7. Sécurité {#security}

Nous mettons en œuvre des mesures techniques et organisationnelles adaptées au risque : chiffrement en transit, chiffrement des données sensibles au repos, contrôle d'accès selon le principe du moindre privilège, garanties d'authentification, journalisation, sauvegardes, gestion des vulnérabilités et obligations de confidentialité du personnel. Aucun système n'est parfaitement sûr. Utilisez un mot de passe robuste et unique, activez l'authentification multifacteur lorsqu'elle est proposée, et signalez-nous sans délai à [{{company.email}}](mailto:{{company.email}}) si vous soupçonnez que votre compte a été compromis. Voir aussi notre page [Sécurité et divulgation des vulnérabilités]({{url.security}}).

Si une violation de données est susceptible de porter atteinte à vos droits et libertés, nous notifierons l'autorité de contrôle dans un délai de 72 heures après en avoir eu connaissance, lorsque la loi l'exige, et nous vous informerons dans les meilleurs délais lorsque la loi l'impose.

## 8. Enfants {#children}

{{#if feature.minors}}Les Services ne s'adressent pas aux enfants de moins de 13 ans, et nous ne collectons pas sciemment de données à caractère personnel les concernant. Les utilisateurs âgés de {{policy.min_age}} ans et plus qui n'ont pas encore atteint l'âge de la majorité ne peuvent utiliser les Services **qu'avec le consentement d'un parent ou d'un tuteur**, qui peut consulter, rectifier, limiter ou supprimer les données du mineur et retirer ce consentement en contactant [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Nous ne collectons que les données nécessaires aux Services, n'utilisons pas les données des mineurs à des fins de publicité comportementale, et appliquons, lorsque cela est possible, des paramètres par défaut adaptés à l'âge (profils privés, communications limitées). Lorsque la loi fixe dans un pays un âge plus élevé pour le consentement numérique, nous exigeons le consentement parental en deçà de cet âge.{{else}}Les Services ne s'adressent pas aux enfants. Vous devez avoir au moins {{policy.min_age}} ans pour disposer d'un compte. Nous ne collectons pas sciemment de données à caractère personnel concernant une personne âgée de moins de {{policy.min_age}} ans (ou de l'âge plus élevé du consentement numérique dans son pays ; aux États-Unis, moins de 13 ans au sens de la COPPA). Si vous pensez qu'un enfant nous a transmis des données à caractère personnel, contactez [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ; nous les supprimerons et fermerons le compte. Lorsqu'un parent ou un tuteur a valablement consenti à l'utilisation des Services par un mineur, ce consentement peut être retiré à tout moment.{{/if}}

## 9. Sites et services de tiers {#third-parties}

Les Services peuvent renvoyer vers des sites, extensions et applications de tiers, ou les intégrer, y compris des fournisseurs d'authentification. Nous ne les contrôlons pas et ne sommes pas responsables de leurs pratiques en matière de vie privée ; leurs propres politiques régissent les données qu'ils collectent. Déconnectez ces intégrations dans les paramètres de votre compte ou dans ceux du tiers.

## 10. Vos droits {#rights}

Selon l'endroit où vous vivez, vous pouvez :

- **accéder** à vos données et en obtenir une copie ;
- **rectifier** les données inexactes ;
- **supprimer** vos données (« droit à l'effacement ») ;
- **limiter** le traitement ou vous y **opposer**, y compris à la prospection directe à tout moment ;
- **transférer** vos données à un autre prestataire dans un format lisible par machine ;
- **retirer votre consentement** à tout moment ;
- **ne pas faire l'objet d'une décision fondée exclusivement sur un traitement automatisé** produisant des effets juridiques ou des effets significatifs similaires ;
- **introduire une réclamation** auprès d'une autorité de contrôle.

**Supprimer votre compte.** Vous pouvez supprimer votre compte et vos données à caractère personnel {{#if feature.mobile}}depuis l'application (Paramètres, puis Compte, puis Supprimer le compte), {{/if}}dans les paramètres de votre compte sur notre site internet, ou par e-mail ; nous ne vous demandons pas de contacter le support lorsque la gestion en libre-service est disponible. La suppression d'un compte est définitive à l'issue du délai de grâce que nous vous indiquons. La désinstallation d'une application ne supprime pas votre compte.

Pour exercer un droit, écrivez à [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ou utilisez les paramètres de votre compte. Nous pouvons devoir vérifier votre identité et, si la demande est manifestement infondée ou excessive, exiger des frais raisonnables ou refuser, dans la mesure où la loi le permet. Nous répondons dans un délai d'**un mois** (prolongeable de deux mois supplémentaires pour les demandes complexes ; 45 jours en vertu des lois des États américains, prolongeables de 45 jours), et nous vous indiquons le motif si nous ne pouvons pas donner suite. Nous ne vous traiterons pas de manière discriminatoire pour avoir exercé vos droits.

### 10.1 Espace économique européen, Royaume-Uni, Suisse

Tous les droits ci-dessus s'appliquent. Vous pouvez introduire une réclamation auprès de l'autorité du pays dans lequel vous vivez, travaillez ou dans lequel le problème est survenu ([liste des autorités de l'EEE](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en) ; Royaume-Uni : [ICO](https://ico.org.uk) ; Suisse : [FDPIC](https://www.edoeb.admin.ch)). Notre autorité chef de file est {{law.authority}}.

### 10.2 Serbie

Lorsque la loi serbe relative à la protection des données à caractère personnel s'applique, vous disposez de droits équivalents à ceux décrits ci-dessus et pouvez introduire une réclamation auprès du Commissaire à l'information d'intérêt public et à la protection des données à caractère personnel (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 États-Unis (Californie et autres États) {#us-states}

La présente section complète ce qui précède pour les résidents de Californie et des autres États américains disposant de lois complètes sur la vie privée (notamment la Virginie, le Colorado, le Connecticut, l'Utah, le Texas, l'Oregon, le Montana et d'autres, au fur et à mesure de leur entrée en vigueur).

- **Catégories collectées au cours des 12 derniers mois :** identifiants (nom, adresse e-mail, adresse IP, identifiants en ligne) ; dossiers clients ; informations commerciales (forfaits, achats) ; activité sur internet ou sur le réseau ; géolocalisation approximative{{#if feature.location}} et géolocalisation précise avec votre autorisation{{/if}} ; contenus que vous soumettez ; déductions limitées au fonctionnement des Services. Nous communiquons ces données à des prestataires de services pour les finalités commerciales énoncées à la section 3.
- **Vente et partage :** nous ne vendons pas d'informations personnelles et ne les partageons pas à des fins de publicité comportementale inter-contextes. Nous ne vendons ni ne partageons sciemment les données de personnes âgées de moins de 16 ans.
- **Informations personnelles sensibles :** nous ne les utilisons pas pour déduire des caractéristiques, ni au-delà de ce qui est nécessaire pour fournir les Services.
- **Vos droits :** savoir et accéder, supprimer, rectifier, portabilité, vous opposer à la vente, au partage, à la publicité ciblée ou au profilage, limiter l'utilisation des données sensibles, et non-discrimination. Nous respectons le **Global Privacy Control** et les signaux similaires d'opposition transmis par les navigateurs, comme une demande d'opposition valable.
- **Mandataires autorisés et recours :** un mandataire autorisé peut soumettre des demandes avec votre autorisation écrite. Si nous refusons une demande, vous pouvez faire appel en répondant à notre décision ; si vous restez insatisfait, vous pouvez contacter le procureur général de votre État.
- **Californie :** vous pouvez demander la liste des tiers auxquels nous avons communiqué des informations personnelles à des fins de prospection directe au cours de l'année civile précédente (« Shine the Light ») ; nous ne procédons à aucune communication de ce type. Les résidents de Californie âgés de moins de 18 ans qui sont des utilisateurs enregistrés peuvent demander la suppression des contenus qu'ils ont publiés publiquement.

### 10.4 Brésil (LGPD)

Vous pouvez demander la confirmation de l'existence d'un traitement, l'accès, la rectification, l'anonymisation, le blocage ou la suppression de données inutiles ou excessives, la portabilité, des informations sur les entités avec lesquelles nous partageons des données, des informations sur la possibilité de refuser votre consentement et sur ses conséquences, ainsi que le réexamen des décisions automatisées. Vous pouvez introduire une réclamation auprès de l'Autorité nationale de protection des données (ANPD).

### 10.5 Autres régions

Si vous vous trouvez dans un autre pays disposant d'une loi de protection des données, nous respectons les droits équivalents que cette loi vous accorde. En particulier :

| Lieu | Ce que nous ajoutons |
|---|---|
| **Canada** (LPRPDE, loi 25 du Québec) | Vous pouvez accéder à vos données et les rectifier, retirer votre consentement, et introduire une réclamation auprès du Commissariat à la protection de la vie privée ou de la Commission d'accès à l'information. Notre contact en matière de vie privée est la personne responsable de la protection des renseignements personnels ; les transferts hors du Québec sont évalués et encadrés. |
| **Inde** (DPDP Act 2023) | Vous pouvez accéder à vos données, les rectifier, les effacer, désigner une personne pour exercer vos droits en cas de décès ou d'incapacité, et utiliser notre contact pour les réclamations ci-dessous ; vous pouvez saisir le Data Protection Board. |
| **Australie, Nouvelle-Zélande** | Vous pouvez demander l'accès et la rectification et nous adresser une réclamation, puis saisir l'OAIC (Australie) ou le Commissaire à la protection de la vie privée (Nouvelle-Zélande). |
| **Japon, Corée du Sud, Singapour, Thaïlande, Malaisie, Türkiye, Émirats arabes unis, Arabie saoudite, Afrique du Sud, Kenya, Nigeria et lois similaires** | Nous appliquons les droits et garanties que ces lois exigent (accès, rectification, suppression, opposition, réclamation auprès de l'autorité locale, garanties pour les transferts). Contactez-nous pour les exercer. |
| **Chine** | Les Services ne s'adressent pas aux personnes situées en Chine continentale ; n'y soumettez pas de données à caractère personnel de personnes se trouvant dans ce pays. |

**Contact pour les réclamations et la vie privée, pour toutes les régions :** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Nous traitons les demandes dans le délai qu'autorise le droit applicable.

## 11. Modifications de la présente politique {#changes}

Nous pouvons mettre à jour la présente politique pour refléter les évolutions des Services ou de la loi. Pour les modifications importantes, nous vous donnerons un préavis d'au moins {{policy.notice_days}} jours par e-mail ou dans les Services avant qu'elles ne vous soient applicables, et nous demanderons un nouveau consentement lorsque la loi l'exige. La date de « dernière mise à jour » indiquée ci-dessus correspond à la version en vigueur ; les versions antérieures sont disponibles sur demande.

## 12. Contact {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
