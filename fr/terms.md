---
doc: terms
title: Conditions générales d'utilisation
version: 1.3.0
updated: 2026-10-31
lang: fr
translation_of: 1.3.0
status: draft
summary: Le contrat entre vous et {{product.name}} pour l'utilisation de {{product.name}}.
---

# Conditions générales d'utilisation

*Version {{doc.version}}, dernière mise à jour {{doc.updated}}.*

## 1. Accord {#agreement}

Les présentes conditions générales d'utilisation (les « **Conditions** ») constituent un accord ayant force obligatoire entre vous et **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, numéro d'immatriculation {{company.reg_id}}{{/if}} (« **{{product.name}}** », « nous »), et régissent votre accès à {{product.name}} et son utilisation, à nos sites web, applications, API, documentation et services associés (les « **Services** »).

En créant un compte, en installant une application ou en utilisant les Services de toute autre manière, vous acceptez les présentes Conditions ainsi que les documents qu'elles incorporent : la [Politique de confidentialité]({{url.privacy}}), la [Politique d'utilisation acceptable]({{url.acceptable_use}}), la [Politique relative aux cookies]({{url.cookies}}){{#if feature.processor_role}}, l'[annexe relative au traitement des données]({{url.dpa}}) lorsqu'elle s'applique{{/if}}{{#if feature.payments}}, la [Politique de remboursement et d'annulation]({{url.refunds}}){{/if}}{{#if feature.game}}, les [Règles du jeu et politique relative aux biens virtuels]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, les [Conditions applicables aux applications]({{url.app_eula}}){{/if}} et tout bon de commande ou conditions propres à un produit. Si vous n'acceptez pas les présentes Conditions, n'utilisez pas les Services.

Si vous utilisez les Services pour le compte d'une organisation, vous confirmez que vous êtes habilité à engager celle-ci, et « vous » désigne également cette organisation. Si des conditions propres à un produit ou un contrat signé sont en contradiction avec les présentes Conditions, elles prévalent uniquement pour ce produit ou ce client.

{{#if feature.consumers}}
**Consommateurs.** Si vous utilisez les Services en tant que consommateur, les dispositions impératives de protection des consommateurs du pays de votre résidence continuent de s'appliquer, et rien dans les présentes Conditions ne limite ces droits. Les sections signalées *(clients professionnels)* ne s'appliquent que si vous n'êtes pas un consommateur.
{{/if}}

## 2. Éligibilité {#eligibility}

Vous ne pouvez utiliser les Services que si vous :

1. {{#if feature.minors}}avez au moins **{{policy.min_age}}** ans et, si vous n'avez pas atteint l'âge de la majorité dans votre lieu de résidence, avez obtenu le consentement d'un parent ou d'un tuteur légal qui accepte les présentes Conditions pour vous et est responsable de votre utilisation et de vos achats (nous pouvons demander une preuve){{else}}avez au moins **{{policy.min_age}}** ans et êtes en mesure de conclure un contrat ayant force obligatoire{{/if}} ;
2. n'êtes pas privé du droit de recevoir les Services en vertu du droit applicable, y compris les lois sur les sanctions et le contrôle des exportations (section 22) ;
3. n'avez pas déjà été exclu des Services pour violation de nos règles, sauf si nous avons accepté par écrit de vous réadmettre ; et
4. utilisez les Services de manière licite dans le lieu où vous vous trouvez.
{{#if feature.age_gate}}5. confirmez, lorsque nous le demandons, que vous avez au moins **{{policy.age_gate}}** ans et l'âge légal, selon les règles de votre pays, pour utiliser les fonctionnalités impliquant {{policy.age_topics|des contenus sensibles selon l'âge}}. Nous n'avons pas besoin de votre date de naissance : votre confirmation est enregistrée. Si elle n'est pas exacte, nous pouvons bloquer le compte et supprimer ses données.
{{/if}}{{#if feature.gambling}}6. confirmez, lorsque nous le demandons, que vous avez au moins **{{policy.gambling_age}}** ans, que les jeux d'argent sont licites dans votre lieu de résidence, et que vous n'utilisez les fonctionnalités de jeux d'argent que pour vous-même. Nous pouvons exiger une vérification réelle de l'âge et de l'identité, et pouvons refuser ou interrompre l'accès aux fonctionnalités de jeux d'argent partout où la loi ou nos licences l'exigent.
{{/if}}{{#if policy.excluded_regions}}7. confirmez, lorsque nous le demandons, que vous ne vous trouvez pas dans l'un des pays ou régions suivants, et que vous n'en êtes ni résident ni ressortissant : **{{policy.excluded_regions}}**, où nos Services ou les présentes Conditions peuvent être illicites, peuvent ne pas être exécutoires ou ne sont pas proposés. Nous ne pouvons pas voir où vous vous trouvez réellement (par exemple derrière un VPN) ; nous nous fions donc à votre confirmation. Si elle n'est pas exacte, vous utilisez les Services à vos propres risques, vous êtes responsable du respect du droit local, et nous pouvons bloquer le compte et supprimer ses données. Rien dans le présent point ne limite les droits qui ne peuvent être écartés en vertu du droit du lieu où vous vivez.
{{/if}}

Nous pouvons vous demander à tout moment une preuve d'âge, d'identité ou de pouvoir, et pouvons refuser ou fermer un compte qui ne satisfait pas à cette vérification.

## 3. Comptes et sécurité {#accounts}

- Fournissez des informations exactes et à jour, et maintenez-les à jour. Une personne ou une entité, un compte, sauf accord contraire de notre part ; créer d'autres comptes pour contourner une restriction, une limite, une interdiction, un essai ou une règle tarifaire est interdit.
- Gardez vos identifiants confidentiels. Ne partagez pas, ne vendez pas, ne louez pas et ne transférez pas votre compte. Chaque siège est réservé à une personne nommément désignée, sauf si le forfait en dispose autrement.
- Vous êtes responsable de tout ce qui se produit sous votre compte, y compris du fait des personnes que vous autorisez à y accéder ou que vous ne parvenez pas à tenir à l'écart, jusqu'à ce que vous nous informiez que le compte est compromis. Informez-nous immédiatement à [{{company.email}}](mailto:{{company.email}}) si vous soupçonnez un accès non autorisé.
- Nous pouvons exiger une authentification renforcée, réinitialiser des identifiants, ou verrouiller un compte que nous estimons raisonnablement compromis ou utilisé de manière abusive.
- Les comptes gratuits inactifs peuvent être fermés après un préavis envoyé à l'adresse e-mail enregistrée ; les comptes payants ne sont pas fermés pour cause d'inactivité.
{{#if feature.anonymous}}- **Comptes anonymes.** Lorsque nous le proposons, les Services créent pour vous un compte anonyme la première fois que vous les utilisez. Ce compte n'a pas d'adresse e-mail ; quiconque utilise ce navigateur ou cet appareil peut utiliser le compte, et nous ne pouvons pas le récupérer pour vous si vous perdez l'accès. Vous pouvez à tout moment associer une adresse e-mail afin de sécuriser et de récupérer le compte : nous confirmons l'adresse au moyen d'un lien de connexion qui lui est envoyé. Les comptes anonymes restés inutilisés pendant une longue période peuvent être supprimés après notification dans les Services, lorsque cela est possible.
{{/if}}- **Titulaire du compte et accès.** La personne qui confirme le contrôle d'une adresse e-mail au moyen du lien de connexion que nous envoyons, et qui accepte les présentes Conditions, est le titulaire du compte et est considérée comme la personne ayant effectué les choix dans le compte. Si vous agissez pour le compte d'une organisation, vous confirmez que vous êtes habilité à l'engager. Vous décidez qui d'autre au sein de votre organisation a accès (par exemple des opérateurs disposant de rôles limités) ; les personnes auxquelles vous donnez accès peuvent voir ce que vous mettez à leur disposition, et vous êtes responsable de ce choix.

## 4. Licence et restrictions {#licence}

Sous réserve des présentes Conditions et du paiement des frais applicables, nous vous accordons une licence limitée, révocable, non exclusive, non transférable et non sous-licenciable, pour accéder aux Services et les utiliser à vos propres fins personnelles ou professionnelles internes pendant la durée du contrat. Les logiciels que nous vous fournissons sont concédés sous licence, et non vendus. Nous et nos concédants conservons tous les droits qui ne sont pas expressément accordés.

Sauf si la loi vous confère un droit qui ne peut être écarté, vous ne devez pas, ni permettre à quiconque de :

- copier, modifier, traduire ou créer des œuvres dérivées des Services ;
- procéder à de l'ingénierie inverse, décompiler, désassembler ou tenter de dériver le code source, les modèles, les poids, les algorithmes ou les API non publiques ;
- revendre, sous-licencier, louer, héberger en tant que prestataire de services ou mettre les Services à la disposition de tiers autres que vos utilisateurs autorisés ;
- contourner les limites techniques, les licences, la mesure de l'utilisation, les contrôles d'accès, les limites de débit ou les mécanismes de sécurité ;
- supprimer ou modifier les mentions de propriété, les attributions ou les mentions de licences open source ;
- utiliser les Services ou leurs résultats pour créer ou entraîner un produit concurrent, ou pour réaliser des tests de performance et en publier les résultats sans notre consentement écrit{{#if feature.ai}}, ou pour entraîner, affiner ou distiller un modèle d'IA à partir des résultats des Services lorsque nous l'interdisons dans la documentation{{/if}} ;
- accéder aux Services par des moyens automatisés (robots, scrapers, crawlers), sauf par l'intermédiaire de notre API documentée et selon ses conditions.

La [Politique d'utilisation acceptable]({{url.acceptable_use}}) énonce des règles détaillées et fait partie des présentes Conditions. Les composants open source sont régis par leurs propres licences, qui prévalent pour ces composants.

## 5. Utilisation acceptable et application des règles {#acceptable-use}

Vous êtes responsable de votre utilisation des Services ainsi que du comportement de toute personne que vous autorisez à les utiliser. Un usage abusif peut nuire aux autres utilisateurs, à des tiers et à nous-mêmes. Nous pouvons agir comme décrit dans la [Politique d'utilisation acceptable]({{url.acceptable_use}}) et à la section 17, notamment en supprimant des contenus, en restreignant des fonctionnalités, en limitant le débit, en suspendant ou en résiliant des comptes, en retenant des versements, en signalant des faits aux autorités et en engageant des recours en vertu de la section 21.

## 6. Vos contenus {#your-content}

{{#if feature.ugc}}
« **Vos Contenus** » désigne tout ce que vous téléchargez, soumettez, publiez, connectez ou générez par l'intermédiaire des Services{{#if feature.ai}}, y compris les requêtes et, entre vous et nous, les résultats que vous recevez{{/if}}.

- **Propriété.** Vous conservez tous les droits sur Vos Contenus. Nous n'acquérons aucun droit de propriété.
- **Licence accordée à nous.** Vous nous accordez une licence mondiale, non exclusive et libre de redevances, pour héberger, stocker, reproduire, traiter, transmettre, adapter (pour la mise en forme, les vignettes, les traductions et les contrôles de sécurité) et afficher Vos Contenus **uniquement dans la mesure nécessaire pour exploiter, sécuriser, assister et améliorer les Services et faire respecter les présentes Conditions**, tant que vous les conservez dans les Services, puis pendant les périodes limitées de sauvegarde et de conservation à des fins juridiques qui suivent. Lorsque vous rendez un contenu public, la licence s'étend à sa présentation au public que vous choisissez. Cette licence prend fin lorsque vous supprimez le contenu ou votre compte, sous réserve de ces périodes et des copies déjà reçues légalement par d'autres utilisateurs.
- **Vos engagements.** Vous disposez de tous les droits, consentements et autorisations nécessaires pour soumettre Vos Contenus et accorder la présente licence, y compris de la part de toute personne identifiable dans ceux-ci, et vous vous engagez à les conserver ; Vos Contenus et notre utilisation de ceux-ci, dans les limites autorisées, ne portent atteinte à aucune loi ni aux droits de quiconque (droit d'auteur, marque, vie privée, droit à l'image, confidentialité, contrat) ; et ils sont conformes à la [Politique d'utilisation acceptable]({{url.acceptable_use}}).
- **Modération.** Nous n'avons pas d'obligation générale de surveiller Vos Contenus, mais nous pouvons examiner, supprimer, restreindre ou refuser des contenus que nous estimons raisonnablement contraires à la loi, aux présentes Conditions ou aux droits d'autrui, ou à propos desquels nous recevons un signalement valable (voir les [Notifications relatives au droit d'auteur et aux contenus illicites]({{url.copyright}})). Lorsque la loi l'exige (par exemple au titre du règlement européen sur les services numériques), nous vous indiquons nos motifs et la manière de contester la décision.
- **Sauvegardes.** Vous êtes responsable de la conservation de vos propres copies de Vos Contenus. Sauf si un forfait prévoit expressément des sauvegardes ou une conservation, nous ne promettons pas de restaurer des contenus supprimés ou perdus.
- **Données agrégées.** Nous pouvons utiliser des données d'usage qui ne permettent pas de vous identifier et qui ne révèlent pas Vos Contenus, pour exploiter, sécuriser et améliorer les Services.
{{else}}
Vous conservez tous les droits sur tout ce que vous soumettez aux Services. Vous nous accordez la licence limitée nécessaire pour le traiter afin de fournir, de sécuriser et d'assister les Services, et vous déclarez disposer du droit de le soumettre. Vous êtes responsable de la conservation de vos propres copies.
{{/if}}

### Vos données et fichiers {#your-data}

En ce qui vous concerne et à notre égard, **vous êtes propriétaire des données et fichiers que vous versez dans les Services, et vous en êtes seul responsable** : du droit de les télécharger et de les utiliser, de leur exactitude et de leur licéité, ainsi que des choix que vous faites quant aux personnes pouvant y accéder. Nous les stockons et les traitons sur vos instructions afin que les Services fonctionnent. Cela ne limite pas nos propres obligations légales, par exemple celle de sécuriser les Services et de protéger les données à caractère personnel, et n'affecte pas les droits qui ne peuvent être exclus par la loi.
{{#if feature.uploads}}
- **Droit d'auteur et autres droits.** Vous confirmez que vous êtes propriétaire de ce que vous téléchargez ou que vous disposez de toutes les autorisations nécessaires (y compris de la part des personnes représentées sur les images), et vous acceptez que **votre responsabilité puisse être engagée** pour les réclamations relatives au droit d'auteur, au droit à l'image, à la vie privée ou à d'autres droits qui en découlent. Nous pouvons supprimer des contenus et coopérer avec les titulaires de droits et les autorités, comme décrit dans les [Notifications relatives au droit d'auteur et aux contenus illicites]({{url.copyright}}).
- **Confidentialité par défaut.** Ce que vous téléchargez n'est visible que par vous et par les personnes auxquelles vous donnez accès (par exemple les membres ou les opérateurs de votre organisation). Nous n'utilisons pas vos téléchargements ni d'autres contenus pour créer des contenus publics tels que des modèles, des lignes directrices, des exemples, du matériel marketing ou des données d'entraînement, et nous ne les mettons pas à la disposition de personnes non connectées, sauf si vous les publiez ou les partagez explicitement.
{{/if}}

## 7. Si vous fournissez les Services à d'autres personnes {#end-users}

Si vous utilisez les Services pour fournir quelque chose à vos propres clients, utilisateurs, salariés ou autres tiers (les « **Utilisateurs finaux** »), vous en êtes seul responsable : vous devez disposer de la base juridique, des informations et des consentements requis pour tout traitement de données à caractère personnel que vous collectez, convenir de vos propres conditions avec eux, traiter leurs demandes et réclamations, veiller à ce qu'ils respectent la [Politique d'utilisation acceptable]({{url.acceptable_use}}), et ne pas prendre d'engagements en notre nom. Vous êtes responsable des actes et omissions des Utilisateurs finaux comme s'ils étaient les vôtres. Nous n'avons aucune obligation envers les Utilisateurs finaux.

## 8. Fonctionnalités d'IA {#ai}

{{#if feature.ai}}
- Les résultats sont générés automatiquement et peuvent être inexacts, incomplets, choquants, biaisés ou semblables à des résultats fournis à d'autres personnes. Vous devez évaluer les résultats avant de vous y fier et assumer la responsabilité de l'usage que vous en faites.
- **N'utilisez pas les fonctionnalités d'IA comme seul fondement de décisions ayant des effets juridiques ou des effets comparables significatifs pour des personnes** (par exemple en matière d'emploi, de crédit, de logement, d'assurance, d'éducation, de santé, de police ou d'immigration), et ne les utilisez pas pour des conseils médicaux, juridiques, financiers ou relatifs à la sécurité sans examen humain qualifié.
- Vous devez signaler les contenus générés ou manipulés par l'IA dans la mesure où la loi ou la plateforme sur laquelle vous les publiez l'exige (y compris les hypertrucages et les médias synthétiques), et vous ne devez pas présenter un résultat de l'IA comme étant d'origine humaine lorsque cela serait trompeur.
- Vous ne devez pas utiliser les fonctionnalités pour un usage interdit par la [Politique d'utilisation acceptable]({{url.acceptable_use}}), ni tenter de contourner les systèmes de sécurité (y compris les attaques par injection de requêtes, « jailbreak » ou extraction contre nos systèmes ou ceux d'autrui).
- Les fournisseurs que nous utilisons peuvent appliquer leurs propres politiques d'utilisation ; nous pouvons restreindre les fonctionnalités en conséquence. Nous n'utilisons pas Vos Contenus pour entraîner des modèles à usage général, sauf si vous y consentez (voir la [Politique de confidentialité]({{url.privacy}})).
{{else}}
Les Services ne comportent pas actuellement de fonctionnalités assistées par l'IA. Si nous en ajoutons, nous mettrons à jour les présentes Conditions et donnerons un préavis conformément à la section 16, et les règles qui leur sont applicables (exactitude, examen humain, information, absence d'usages interdits) s'appliqueront.
{{/if}}

## 9. Frais et paiement {#fees}

{{#if feature.payments}}
- **Prix et taxes.** Les prix sont indiqués au moment de l'achat et sont hors TVA, taxes sur les ventes et taxes similaires, sauf mention contraire ; vous acquittez les taxes applicables. Pour les consommateurs, les prix incluent les taxes exigées par la loi.
{{#if feature.merchant_of_record}}- **Merchant of record (revendeur officiel).** Les commandes sont traitées par notre prestataire de paiement{{#if payments.provider}} {{payments.provider}}{{/if}}, qui agit en qualité de revendeur et de merchant of record, encaisse le paiement et les taxes, et délivre le justificatif. Ses conditions de paiement s'appliquent à l'achat en complément des présentes Conditions ; les paiements, la facturation, les taxes et les remboursements sont régis par celles-ci et par notre [Politique de remboursement et d'annulation]({{url.refunds}}).
{{/if}}- **Paiement.** Vous nous autorisez, ainsi que notre prestataire de paiement, à débiter le moyen de paiement que vous nous fournissez de tous les montants dus, y compris les renouvellements et les frais liés à l'usage. Vous garantissez que vous êtes habilité à utiliser ce moyen de paiement, et vous devez tenir ses informations à jour.
{{#if feature.subscriptions}}- **Avant le paiement.** À côté du bouton de paiement, nous indiquons le prix, la période de facturation, le fait que l'abonnement se renouvelle automatiquement, ce qui se passe à l'issue d'une éventuelle période d'essai, la manière de résilier, ainsi que des liens vers les présentes Conditions, la [Politique de remboursement et d'annulation]({{url.refunds}}) et la [Politique de confidentialité]({{url.privacy}}). Vous n'êtes débité qu'après avoir coché la case ou cliqué sur le bouton confirmant que vous avez pris connaissance de ces documents. Nous conservons une trace de ce consentement et vous envoyons une confirmation que vous pouvez conserver.
- **Abonnements.** Sauf indication contraire lors de la commande, les abonnements se renouvellent automatiquement pour des périodes de même durée jusqu'à leur résiliation. Vous pouvez résilier à tout moment depuis votre compte ou par e-mail avant la date de renouvellement ; la résiliation prend effet à la fin de la période payée, et nous n'effectuons aucun remboursement au prorata. Nous vous informons à l'avance, comme la loi l'exige, de la conversion d'une période d'essai ou de la modification du prix de renouvellement.
- **Essais et promotions.** Une seule période d'essai ou offre promotionnelle par personne ou par entreprise. Nous pouvons retirer ou refuser une offre lorsque nous soupçonnons un abus (comptes multiples, fausses identités, limites contournées).
{{/if}}{{#if feature.credits}}- **Crédits.** Les crédits prépayés, jetons ou devises intégrées à l'application constituent une licence limitée d'utilisation des Services, et non de l'argent ; ils n'ont aucune valeur monétaire, ne sont pas transférables, ne peuvent être ni échangés contre de l'argent ni négociés, et peuvent expirer selon les conditions indiquées lors de l'achat. Les crédits non utilisés sont perdus lorsqu'un compte est fermé pour manquement ; dans les autres cas, les remboursements suivent les règles ci-dessous et le droit applicable.{{#if feature.game}} Les biens virtuels dans les jeux sont régis par les [Règles du jeu et politique relative aux biens virtuels]({{url.game_rules}}).{{/if}}
{{/if}}- **Modification des prix.** Nous pouvons modifier nos prix pour l'avenir moyennant un préavis d'au moins {{policy.notice_days}} jours. Si vous n'acceptez pas la modification, résiliez avant son entrée en vigueur.
- **Retard ou échec de paiement.** Nous pouvons réitérer le prélèvement, suspendre ou rétrograder le compte, et facturer des frais de recouvrement raisonnables ainsi que les intérêts légaux sur les factures professionnelles impayées. Les Services sont rétablis dès le règlement des sommes dues.
- **Rétrofacturations et fraude.** L'ouverture d'une rétrofacturation ou d'un litige de paiement sans nous avoir d'abord contactés à [{{company.email}}](mailto:{{company.email}}), ainsi que les paiements frauduleux ou non autorisés, peuvent entraîner une suspension immédiate, la perte d'accès aux contenus, et le recouvrement du montant contesté ainsi que de nos frais de traitement.
- **Remboursements.** Sauf lorsque la loi vous confère un droit ou que nous l'indiquons autrement par écrit, les frais payés ne sont pas remboursables, y compris pour les périodes partielles et les fonctionnalités non utilisées, et aucun remboursement n'est dû si nous suspendons ou résilions votre compte pour manquement.
{{#if feature.consumers}}- **Résiliation, rétractation et remboursements.** Les droits de rétractation des consommateurs, la manière de résilier et les conditions de remboursement sont énoncés dans la [Politique de remboursement et d'annulation]({{url.refunds}}), qui fait partie des présentes Conditions. Pour les contenus ou services numériques fournis immédiatement à votre demande, nous recueillons votre consentement exprès et votre reconnaissance lors de la commande, comme la loi l'exige.
{{/if}}
{{else}}
Les Services sont actuellement proposés gratuitement. Nous pouvons introduire des fonctionnalités payantes à l'avenir ; elles vous seront présentées clairement, et vous ne serez jamais facturé sans votre accord.
{{/if}}

## 10. API, intégrations et services tiers {#integrations}

{{#if feature.api}}
L'accès à l'API est soumis aux présentes Conditions, à la documentation et aux éventuelles limites de débit. Vous devez protéger vos clés d'API et vos identifiants, vous êtes responsable de tous les appels effectués avec ceux-ci, et vous ne devez pas les partager, les intégrer dans du code public ni les utiliser pour revendre l'accès. Nous pouvons renouveler, limiter ou révoquer des clés, et modifier ou retirer des versions de l'API moyennant un préavis raisonnable (plus court lorsque la sécurité ou des raisons juridiques l'exigent). N'utilisez pas l'API d'une manière qui dégrade les Services pour les autres ou qui tente de contourner les limites, par exemple en recourant à de nombreuses clés ou de nombreux comptes.

{{/if}}
Les Services peuvent fonctionner avec des produits, sites web et services tiers que nous ne contrôlons pas. Votre utilisation de ceux-ci est régie par leurs conditions. Nous ne sommes pas responsables de ces tiers, de leur disponibilité ou de leurs modifications, ni de la manière dont ils utilisent les données que vous choisissez de partager avec eux. Nous pouvons cesser à tout moment de prendre en charge une intégration.

## 11. Fonctionnalités bêta et gratuites {#beta}

Les fonctionnalités désignées comme alpha, bêta, préversion, expérimentales ou similaires, ainsi que les offres gratuites, sont fournies « en l'état », peuvent être modifiées ou retirées à tout moment, peuvent être moins fiables, et sont exclues de tout engagement de niveau de service. Ne vous y fiez pas pour des usages critiques.

## 12. Propriété intellectuelle {#ip}

Les Services, y compris les logiciels, la conception, les textes, les graphismes, les données, les marques, les logos et la documentation, appartiennent à nous ou à nos concédants et sont protégés par le droit d'auteur, le droit des marques et d'autres lois. Rien dans les présentes Conditions ne vous transfère de droit de propriété, et aucun droit d'utiliser nos noms ou nos marques ne vous est accordé, si ce n'est dans la mesure nécessaire à l'utilisation des Services.

**Retours.** Si vous nous adressez des suggestions ou des idées, vous nous accordez une licence perpétuelle, irrévocable, mondiale, libre de redevances et sous-licenciable pour les utiliser sans restriction ni mention d'origine, dans la mesure permise par la loi. Nous ne sommes pas tenus de donner suite aux retours.

Notifications relatives au droit d'auteur et aux contenus illicites : voir les [Notifications relatives au droit d'auteur et aux contenus illicites]({{url.copyright}}).

## 13. Confidentialité (clients professionnels) {#confidentiality}

Chaque partie préservera la confidentialité des informations commerciales et techniques non publiques de l'autre, ne les utilisera que pour exécuter ou exercer ses droits au titre des présentes Conditions, et les protégera avec un soin raisonnable, à l'exception des informations qui sont publiques sans faute du destinataire, étaient déjà connues de lui, ont été développées de manière indépendante ou doivent être divulguées en vertu de la loi (avec un préavis préalable lorsque cela est licite). Cette obligation dure trois ans après la fin des présentes Conditions, et indéfiniment pour les secrets d'affaires.

## 14. Vie privée et protection des données {#privacy}

Notre [Politique de confidentialité]({{url.privacy}}) explique comment nous traitons les données à caractère personnel. {{#if feature.processor_role}}Lorsque nous traitons des données à caractère personnel pour votre compte en qualité de sous-traitant, l'[annexe relative au traitement des données]({{url.dpa}}) s'applique et fait partie intégrante des présentes Conditions.{{/if}} Vous devez respecter le droit de la protection des données dans votre utilisation des Services, et ne pas soumettre de données relevant de catégories particulières ou de données réglementées (santé, cartes de paiement, identifiants publics, données relatives aux enfants), sauf si une fonctionnalité ou un contrat le permet expressément.

## 15. Disponibilité, assistance et modifications {#availability}

Nous visons une haute disponibilité, mais ne garantissons pas un fonctionnement ininterrompu ou exempt d'erreurs. Nous pouvons effectuer des opérations de maintenance (avec un préavis lorsque cela est raisonnablement possible), et modifier, ajouter ou retirer des fonctionnalités. Si nous réduisons de manière substantielle une fonctionnalité payante pendant une période prépayée, nous vous donnerons un préavis d'au moins {{policy.notice_days}} jours et, lorsque vous ne pouvez raisonnablement pas continuer, un remboursement au prorata de la période prépayée concernée. L'assistance est fournie à [{{company.email}}](mailto:{{company.email}}) sur la base d'un effort raisonnable, sauf si votre forfait comprend un accord de niveau de service.

## 16. Modifications des présentes Conditions {#changes}

Nous pouvons mettre à jour les présentes Conditions pour des raisons juridiques, de sécurité, de produit ou commerciales. Pour les modifications substantielles, nous donnerons un préavis d'au moins **{{policy.notice_days}} jours** par e-mail ou dans les Services avant qu'elles ne vous soient applicables. Si vous n'acceptez pas, vous pouvez cesser d'utiliser les Services et fermer votre compte avant la date d'effet et, pour les forfaits payants, demander un remboursement au prorata des frais prépayés pour la période postérieure à cette date. La poursuite de l'utilisation des Services après la date d'effet vaut acceptation des Conditions mises à jour. Les modifications requises par la loi, ou qui ne réduisent rien et n'ajoutent aucune obligation, peuvent prendre effet immédiatement. Les modifications ne s'appliquent pas aux litiges déjà en cours.

## 17. Suspension et résiliation {#termination}

**Par vous.** Vous pouvez cesser d'utiliser les Services et fermer votre compte à tout moment depuis vos paramètres ou par e-mail. Les frais payés ne sont pas remboursés, sauf si la section 9 ou la loi le prévoit.

**Par nous, pour convenance.** Nous pouvons mettre fin aux forfaits payants moyennant un préavis de {{policy.notice_days}} jours (avec un remboursement au prorata des frais prépayés) et interrompre les services gratuits moyennant un préavis raisonnable.

**Par nous, pour motif.** Nous pouvons, avec ou sans préavis préalable et dans la mesure permise par la loi, restreindre, suspendre ou résilier votre accès, supprimer des contenus, ou fermer votre compte immédiatement si :

- vous violez les présentes Conditions ou la Politique d'utilisation acceptable (la réponse est proportionnée à la gravité, à la répétition et au risque) ;
- nous estimons raisonnablement que votre utilisation crée un risque pour la sécurité, sur le plan juridique, réglementaire, en matière de réputation ou financier, pour nous, pour d'autres utilisateurs ou pour des tiers ;
- vous ne payez pas à l'échéance ;
- un tribunal, une autorité ou le droit applicable l'exige ; ou
- votre compte semble compromis, frauduleux ou abandonné.

Lorsque cela est possible et licite, nous vous indiquons les raisons de la mesure et vous donnons la possibilité de répondre ou de corriger le problème au préalable. Lorsque la loi l'exige (par exemple le règlement européen sur les services numériques), nous fournissons un exposé des motifs et un moyen de recours. Si nous suspendons ou résilions votre accès pour manquement, aucun frais n'est remboursé et les montants dus restent exigibles.

**Effets.** À la résiliation, votre licence prend fin ; vous devez cesser d'utiliser les Services ; et, sur demande formulée dans un délai de **{{policy.retention_account_days}} jours**, nous mettrons Vos Contenus à disposition pour export lorsque cela est techniquement possible (mais pas lorsque cela est illicite ou porterait atteinte à autrui). Passé ce délai, nous les supprimons comme décrit dans la [Politique de confidentialité]({{url.privacy}}). Les sections qui, par nature, doivent survivre continuent de s'appliquer, notamment les sections 4, 6 (limites de la licence et vos engagements), 9 (montants dus), 12, 13, 17-24 et 26.

## 18. Garanties et exclusion de responsabilité {#disclaimer}

Nous fournissons les Services avec une compétence et un soin raisonnables. **Pour le surplus, dans la mesure maximale permise par la loi, les Services sont fournis « en l'état » et « selon leur disponibilité », et nous excluons toutes autres garanties, expresses ou implicites**, y compris la qualité marchande, l'adéquation à un usage particulier, la non-contrefaçon, l'exactitude, la disponibilité, ainsi que toute garantie selon laquelle les Services seront sécurisés, exempts d'erreurs, ininterrompus ou exempts de composants nuisibles. Nous ne garantissons ni les résultats, ni les contenus de tiers, ni les résultats que vous obtenez. Les Services ne sont pas conçus pour être utilisés dans des environnements à haut risque où une défaillance pourrait causer la mort, des dommages corporels ou des dommages graves (par exemple dispositifs médicaux, aviation, installations nucléaires ou systèmes de maintien des fonctions vitales), et vous ne pouvez pas les utiliser de cette manière.

{{#if feature.consumers}}Si vous êtes un consommateur, vous conservez tous les droits légaux qui ne peuvent être écartés, tels que les garanties légales et les recours applicables aux contenus et services numériques en vertu du droit de l'UE et du Royaume-Uni, ainsi que les garanties des consommateurs prévues par l'Australian Consumer Law et les lois similaires dans d'autres pays.{{/if}}

## 19. Limitation de responsabilité {#liability}

Rien dans les présentes Conditions n'exclut ni ne limite une responsabilité qui ne peut être exclue ou limitée par la loi, notamment en cas de décès ou de dommage corporel, de fraude ou de faute intentionnelle, de faute lourde, ou (pour les consommateurs) de recours légaux impératifs.

Sous réserve de ce qui précède, **dans la mesure maximale permise par la loi** et pour les clients professionnels :

1. nous ne sommes pas responsables des dommages indirects, accessoires, spéciaux, consécutifs, exemplaires ou punitifs, ni de la perte de bénéfices, de chiffre d'affaires, d'activité, de clientèle, d'économies anticipées ou de données, résultant des Services ou des présentes Conditions ou qui y sont liés, même si nous avons été informés de cette possibilité ; et
2. notre responsabilité totale cumulée pour l'ensemble des réclamations est limitée au montant le plus élevé entre (a) les frais que vous nous avez payés pour les Services au cours des **{{policy.liability_cap_months}} mois** précédant le fait générateur de la réclamation et (b) 100 EUR.

{{#if feature.consumers}}Pour les consommateurs, nous sommes responsables des pertes ou dommages prévisibles causés par notre manquement ou notre négligence, mais non des pertes imprévisibles, ni des pertes de nature commerciale.{{/if}}

Nous ne sommes pas responsables des défaillances ou retards causés par des événements échappant à notre contrôle raisonnable (section 24). Les services gratuits sont fournis sans responsabilité au-delà de ce que la loi exige. Ces limites s'appliquent quel que soit le fondement de la responsabilité (contrat, responsabilité délictuelle y compris la négligence, ou autre), et même si un recours ne remplit pas sa finalité essentielle.

## 20. Indemnisation {#indemnity}

Si vous êtes un client professionnel, vous défendrez, indemniserez et dégagerez de toute responsabilité {{company.name}}, ses sociétés affiliées, ses dirigeants, salariés et agents, contre les réclamations, dommages, pertes, pénalités et frais (y compris des honoraires d'avocat raisonnables) résultant (a) de Vos Contenus ou de vos données, (b) de votre manquement, ou de celui de vos Utilisateurs finaux, aux présentes Conditions ou à la loi, (c) de votre usage abusif des Services, ou (d) d'un litige entre vous et un tiers. Nous vous informerons rapidement de toute réclamation, nous vous laisserons la maîtrise de la défense (nous pouvons y participer à nos frais), et vous ne pourrez transiger sur une réclamation qui reconnaît une faute de notre part sans notre accord. {{#if feature.consumers}}Les consommateurs ne sont responsables que des pertes qu'ils causent par leur propre manquement, comme le prévoit la loi.{{/if}}

## 21. Recours en cas d'usage abusif {#remedies}

En plus des autres droits, et dans la mesure permise par la loi :

- **Mesures d'injonction.** Vous reconnaissez qu'une violation des sections 4, 5 ou 13 peut causer un préjudice que des dommages-intérêts ne peuvent pas entièrement réparer, et nous pouvons demander une injonction ou toute autre mesure équitable sans avoir à prouver un préjudice réel ni à fournir de caution.
- **Coûts de l'abus.** Si votre usage abusif nous occasionne des coûts (infrastructure supplémentaire, réponse à incident, enquête, rétrofacturations, amendes réglementaires ou réclamations de tiers), vous rembourserez les coûts raisonnables et justifiés.
- **Preuves et coopération.** Nous pouvons conserver les journaux et les contenus liés à un abus présumé, et les communiquer aux personnes concernées, aux plateformes, aux autorités répressives ou aux régulateurs lorsque la loi le permet. Vous coopérerez raisonnablement à nos enquêtes.
- **Signalements.** Nous pouvons signaler toute activité illicite (y compris les contenus d'abus sexuels sur mineurs, la fraude, les menaces, les logiciels malveillants et les attaques contre les systèmes) aux autorités et aux personnes concernées, et nous le ferons lorsque la loi l'exige.
- **Retenue.** Nous pouvons retenir, geler ou compenser les montants qui vous sont dus (par exemple des versements) avec les montants que vous nous devez ou qui résultent d'un abus, sous réserve du droit applicable.

## 22. Exportations, sanctions et lutte contre la corruption {#export}

Vous ne pouvez pas utiliser, exporter ou réexporter les Services en violation des lois applicables en matière de contrôle des exportations et de sanctions, y compris celles de l'UE, des États-Unis, du Royaume-Uni et de l'ONU, ni au profit ou pour le compte de personnes ou de pays soumis à des sanctions globales. Vous confirmez que vous-même et vos utilisateurs ne figurez sur aucune liste de sanctions ou de personnes faisant l'objet de restrictions. Vous ne proposerez ni n'accorderez aucun avantage de valeur dans le but d'influencer indûment quiconque dans le cadre des Services.

## 23. Droit applicable et litiges {#law}

Les présentes Conditions et tout litige ou toute réclamation qui en découle ou s'y rapporte, ainsi que les Services (y compris les litiges non contractuels), sont régis par le droit applicable suivant : **{{law.governing}}**, sans considération des règles de conflit de lois, et à l'exclusion de la Convention des Nations Unies sur les contrats de vente internationale de marchandises.

**Résolution amiable préalable.** Avant d'engager une procédure contentieuse, écrivez à [{{company.legal_email}}](mailto:{{company.legal_email}}) en décrivant le litige, et laissez-nous tenter de le résoudre de bonne foi pendant au moins 30 jours.

**Tribunaux.** Sauf si le droit impératif en dispose autrement, la compétence exclusive est attribuée aux juridictions suivantes : **{{law.venue}}**. Chaque partie peut demander des mesures d'injonction urgentes devant tout tribunal compétent.

{{#if feature.consumers}}**Consommateurs.** Si vous êtes un consommateur, vous conservez également le droit de saisir les tribunaux de votre pays de résidence et de vous prévaloir du droit impératif de protection des consommateurs qui y est applicable ; rien dans la présente section ne supprime ce droit. {{#if consumer_dispute}}Nous participons à un règlement extrajudiciaire des litiges devant {{consumer_dispute}}.{{/if}}
{{/if}}
**Délai de prescription (clients professionnels).** Dans la mesure permise par la loi, toute action doit être engagée dans un délai de {{policy.claim_months}} mois après la naissance de la cause d'action, faute de quoi elle sera éteinte.

**Absence d'actions collectives (clients professionnels, lorsque cela est permis).** Les réclamations ne peuvent être formées que sur une base individuelle, et non dans le cadre d'une action de groupe, collective ou représentative.

## 24. Force majeure {#force-majeure}

Aucune partie n'est responsable d'un retard ou d'une défaillance causé par des événements échappant à son contrôle raisonnable, notamment une catastrophe naturelle, la guerre, le terrorisme, des troubles civils, une pandémie, une décision gouvernementale, une panne de courant, d'internet ou de télécommunications, la défaillance de fournisseurs d'infrastructures cloud ou d'autres prestataires tiers, les cyberattaques malgré des mesures de sécurité raisonnables, les conflits du travail (autres que ceux touchant le personnel propre de la partie concernée), ou les défaillances d'approvisionnement. Les obligations de paiement pour les services déjà fournis ne sont pas excusées. Si un tel événement dure plus de 60 jours, l'une ou l'autre partie peut résilier les services concernés.

## 25. Communications électroniques et notifications {#notices}

Vous acceptez de recevoir les notifications et accords par voie électronique. Nous pouvons notifier par e-mail à l'adresse figurant sur votre compte, dans les Services, ou en publiant sur notre site web. Les notifications qui nous sont adressées doivent être envoyées à [{{company.legal_email}}](mailto:{{company.legal_email}}) ainsi qu'à {{company.address}}. Une notification est réputée reçue 24 heures après l'envoi d'un e-mail qui n'a pas fait l'objet d'un message de non-remise, et lorsqu'elle est publiée ou affichée dans les Services.

## 26. Dispositions générales {#general}

- **Intégralité de l'accord.** Les présentes Conditions et les documents auxquels elles renvoient constituent l'intégralité de l'accord sur leur objet et remplacent tout accord antérieur. Vous n'avez pas conclu sur la base d'une déclaration qui n'y figure pas.
- **Divisibilité.** Si une stipulation est inapplicable, elle est limitée au minimum nécessaire, ou remplacée par une stipulation applicable la plus proche de son intention ; le reste demeure en vigueur.
- **Absence de renonciation.** Le fait de ne pas exercer un droit n'emporte pas renonciation à ce droit.
- **Cession.** Vous ne pouvez pas céder ni transférer vos droits ou obligations sans notre consentement écrit. Nous pouvons céder les présentes Conditions à une société affiliée ou à un successeur de notre activité, et vous en informerons.
- **Relations.** Les parties sont des prestataires indépendants. Rien ne crée un partenariat, un mandat, un contrat de travail ou une coentreprise.
- **Tiers.** Aucune autre personne ne dispose de droits pour faire valoir les présentes Conditions, à l'exception de nos sociétés affiliées, dirigeants et agents au titre des sections 19 et 20.
- **Langue.** Les traductions sont fournies à titre de commodité ; en cas de divergence, la version anglaise prévaut, sauf si le droit impératif exige le contraire.
- **Interprétation.** Les intitulés sont donnés à titre indicatif. « Y compris » signifie « y compris, sans limitation ».
- **Publicité.** Nous pouvons vous citer comme client avec votre logo, sauf si vous vous y opposez par e-mail ; les consommateurs ne sont jamais cités.

## 27. Contact {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Numéro d'immatriculation {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Identifiant fiscal {{company.tax_id}}{{/if}}
E-mail [{{company.email}}](mailto:{{company.email}}) · Juridique [{{company.legal_email}}](mailto:{{company.legal_email}}) · Assistance [{{company.email}}](mailto:{{company.email}}) · Voir aussi nos [mentions légales]({{url.impressum}}).
