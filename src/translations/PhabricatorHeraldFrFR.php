<?php

final class PhabricatorHeraldFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'Un nom d’objet est obligatoire.',
      'No object exists by that name.' => 'Aucun objet n’existe avec ce nom.',
      'Unable to retrieve profile: profiler stack is not empty. The stack has %s frame(s); the final frame has type "%s" and key "%s".' => 'Impossible de récupérer le profil : la pile du profileur n’est pas vide. La pile contient %s trame(s) ; la trame finale a le type « %s » et la clé « %s  ».',
      'Rule must have a name.' => 'La règle doit avoir un nom.',
      'Webhook ID to call' => 'Identifiant du point d’ancrage web à appeler',
      'Invalid Targets' => 'Cibles non valides',
      'Affected Objects' => 'Objets affectés',
      '(Invalid List)' => '(Liste non valide)',
      'Herald field "%s" has unknown standard type "%s".' => 'Le champ « %s » a un type standard « %s » inconnu.',
      'Object rules inherit the edit policies of their objects.' => 'Les règles d’objets héritent des politiques de modification de leurs objets.',
      'This is an old transcript which uses an obsolete log format. Detailed action information is not available.' => 'Ceci est une ancienne transcription qui utilise un format de journal obsolète. Aucune information d’action détaillée n’est disponible.',
      'Applies To' => 'S’applique à',
      'You can not create a rule for that object, because you do not have permission to edit it. You can only create rules for objects you can edit.' => 'Vous ne pouvez créer aucune règle pour cet objet car vous n’avez pas le droit de le modifier. Vous ne pouvez créer de règles que pour des objets que vous pouvez modifier.',
      'The selected content type ("%s") is not recognized by Herald.' => 'Le type de contenu sélectionné (« %s ») n’est pas reconnu par Herald.',
      'Regular expression pair is not a pair!' => 'Une paire d’expressions rationnelles n’en est pas une !',
      'Call webhooks: %s.' => 'Appel du point d\'ancrage web : %s.',
      'You must %s to a boolean first!' => 'Vous devez d’abord %s sur un booléen !',
      'Disable the rule.' => 'Désactiver la règle.',
      'Create Webhook' => 'Créer un point d’ancrage web',
      'This action has no effect on %s target(s): %s.' => 'Cette action n’a aucun effet sur %s cible(s) : %s.',
      '%s edited this rule.' => '%s a modifié cette règle.',
      'Failed to decode rule data.' => 'Échec du décodage des données de la règle.',
      'Unloadable Targets' => 'Cibles non chargeables',
      'Set the "silent" flag on the request.' => 'Poser le drapeau « silencieux » sur la requête.',
      'Rule failed because an exception occurred while evaluating it.' => 'La règle a échoué car une exception s’est produite lors de son évaluation.',
      'Unknown reason ("%s").' => 'Raison inconnue (« %s »).',
      'When all of these conditions are met:' => 'Lorsque toutes ces conditions sont réunies :',
      'all of' => 'tout dans',
      '%s changed hook status from %s to %s.' => '%s a modifié l’état du point d’ancrage de %s en %s.',
      'Back to Content Types' => 'Retour au types de contenu',
      'lacks bit' => 'bit manquant',
      'Type a Herald rule name...' => 'Saisir un nom de règle Herald...',
      '%s changed the URI for this webhook from %s to %s.' => '%s a modifié l’URI de ce point d’ancrage web de %s en %s.',
      'This adapter can not trigger on objects.' => 'Cet adaptateur ne peut pas se déclencher sur des objets.',
      'The first regexp in the regexp pair, "%s", is not a valid regexp.' => 'La première expression rationnelle de la paire, « %s », n’est pas une expression rationnelle valide.',
      'Unknown Field ("%s")' => 'Champ inconnu (« %s »)',
      'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.' => 'La paire d’expressions rationnelles « %s » n’est pas un JSON valide. Entrer un tableau JSON valide de deux éléments.',
      'Specify a webhook to call with "--id".' => 'Précisez avec « --id » un point d’ancrage web à appeler.',
      'Matched' => 'Correspondance trouvée',
      'Webhook status "%s" is not valid. Valid statuses are: %s.' => 'L’état du point d’ancrage « %s » web n’est pas valide. Les états valides sont : %s .',
      'Webhook names can be no longer than %s characters.' => array(
        'Les noms de point d’ancrage web ne peuvent pas dépasser %s caractère.',
        'Les noms de point d’ancrage web ne peuvent pas dépasser %s caractères.',
      ),
      'Version Issue' => 'Problème de version',
      'Unable to pop profiler stack: profiler stack is empty.' => 'Impossible de dépiler de la pile du profileur : la pile du profileur est vide.',
      'Set the "secure" flag on the request.' => 'Poser le drapeau « sécurisé » sur la requête.',
      'This %s rule triggers for %s.' => 'Cette règle %s se déclenche pour %s.',
      'Take these actions %s' => 'Prendre ces actions : %s',
      'Unknown view key "%s".' => 'Clé de visualisation « %s » inconnue.',
      'HMAC Key' => 'Clé HMAC',
      'Expected condition value to be an array.' => 'Un tableau était attendu comme valeur de la condition.',
      'All Transcripts' => 'Toutes les transcriptions',
      'does not contain' => 'ne contient pas',
      'Webhook %d' => 'Point d’ancrage web %s',
      'Invalid Content Type' => 'Type de contenu non valide',
      'Browse Herald Adapters' => 'Parcourir les adaptateurs Herald',
      'Run On Host' => 'Exécuter sur l’hôte',
      'Test Webhook' => 'Point d’ancrage web de test',
      'No Targets' => 'Aucune cible',
      'Specify "--enable" or "--disable", but not both.' => 'Indiquez « --enable » (activer) ou « --disable » (désactiver), mais pas les deux.',
      'only the first time this rule matches:' => 'seulement la première fois que cette règle est vérifiée :',
      'Herald rule "%s" does not have an evaluation result.' => 'La règle Herald « %s » n’a aucun résultat d’évaluation.',
      'This was a dry run to test Herald rules, no actions were executed.' => 'Ceci était une exécution à blanc pour tester les règles Herald, aucune action n’a été exécutée.',
      'Rule failed automatically because it is an object rule which is not relevant for this object.' => 'La règle a échoué automatiquement car c’est une règle d’objet inadéquate pour cet objet.',
      '[Herald]' => '[Herald]',
      'Profiler' => 'Profileur',
      'Object Rule' => 'Règle d’objet',
      'Rule Name' => 'Nom de la règle',
      'Disabled Rules' => 'Règles désactivées',
      'This engine is used to edit webhooks.' => 'Ce moteur est utilisé pour modifier les points d’ancrage web.',
      'Unable to pop profiler stack: expected frame of type "%s" with key "%s", but found frame of type "%s" with key "%s".' => 'Impossible de dépiler de la pile du profileur : trame attendue de type « %s » avec la clé « %s », mais trame trouvée de type « %s » avec la clé « %s ».',
      'Rule failed automatically because it has no conditions.' => 'La règle a échoué automatiquement car elle n’a aucune condition.',
      'When %s these conditions are met:' => 'Lorsque %s ces conditions sont réunies :',
      'Object is of wrong type for adapter!' => 'L’objet n’est pas du bon type pour l’adaptateur !',
      'Type an adapter name...' => 'Saisir un nom d’adaptateur...',
      'Specify an object to test rules for with "--object".' => 'Spécifier un objet duquel tester les règles avec « --object ».',
      'Enable Rule' => 'Activer la règle',
      'Unknown Field: "%s"' => 'Champ inconnu : « %s »',
      'Search for rules with given authors.' => 'Rechercher des règles avec les auteurs donnés.',
      'Webhook' => 'Point d’ancrage web',
      'This action specifies no targets.' => 'Cette action ne spécifie aucune cible.',
      'Called webhooks: %s.' => 'Points d’ancrage web appelés : %s.',
      'Herald Transcript %s' => 'Transcription d’Herald %s',
      'Take these actions the first time this rule matches:' => 'Effectuer ces actions à la première correspondance de la règle :',
      'Forbidden' => 'Interdit',
      '<Unknown Action "%s">' => '<Action inconnue « %s »>',
      'In Silent Mode' => 'En mode silencieux',
      'Action: %s' => 'Action : %s',
      'Any condition matched.' => 'Toute condition correspond.',
      'Global Rule' => 'Règle globale',
      'Search for rules of given types.' => 'Recherche de règles ayant les types donnés.',
      'Do nothing.' => 'Ne rien faire.',
      'Details of this transcript have been garbage collected.' => 'Les détails de cette transcription ont été effacés par le ramasse-miettes.',
      'This server is running in silent mode, so it will not publish webhooks. To adjust this setting, see @{config:phabricator.silent} in Config.' => 'Phabricator est actuellement configuré en mode silencieux et ne publiera donc aucun point d’ancrage web. Pour ajuster ce paramètre, regarder @{config:phabricator.silent} dans la configuration.',
      'You do not have permission to manage global Herald rules.' => 'Vois n’avez pas le droit de gérer des règles Herald globales.',
      'The second regexp in the regexp pair, "%s", is not a valid regexp.' => 'La seconde expression rationnelle de la paire, « %s », n’est pas une expression rationnelle valide.',
      'Test rules which run when another Herald rule is created or updated.' => 'Règles de test qui s’exécutent quand une autre règle Herald est créée ou mise à jour.',
      'Edit Attributes' => 'Modifier les attributs',
      'Effect type passed to "%s" must be a scalar string.' => 'Le type d’effet passé à « %s » doit être une chaîne de caractères scalaire.',
      'Old Transcript' => 'Ancienne transcription',
      'Is newly created' => 'A été créé récemment',
      'Regenerate HMAC Key' => 'Regénérer la clé HMAC',
      'Specify a content type to run rules for. For this object, valid content types are: %s.' => 'Spécifier le type de contenu avec lequel exécuter les règles. Pour cet objet, les types de contenu valides sont : %s.',
      'Herald' => 'Herald',
      'React to Herald rules being created or updated.' => 'Réagir aux règles Herald venant d’être créées ou mises à jour.',
      'Object state prevented rule evaluation.' => 'L’état de l’objet a empêché l’évaluation de la règle.',
      'This action has no effect.' => 'Cette action n’a aucun effet.',
      'Prevent' => 'Empêcher',
      'exists' => 'existe',
      'Regenerate the HMAC key used to sign requests made by this webhook?' => 'Regénérer la clé HMAC utilisée pour signer les requêtes faites par ce point d’ancrage web ?',
      'Two HeraldFields (of classes "%s" and "%s") have the same field key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each field must have a unique field key.' => 'Deux champs Herald (de classes « %s » et « %s ») ont la même clé de champ (« %s ») après leur expansion en un objet de classe « %s » dans l’adaptateur « %s ». Chaque champ doit avoir une clé de champ unique.',
      'Unable to load specified object ("%s").' => 'Impossible de charger l’objet spécifié (« %s »).',
      'Invalid Action' => 'Action non valide',
      'Webhooks must have a URI.' => 'Les points d’ancrage web doivent avoir une URI.',
      'URI for the webhook.' => 'URI du point d’ancrage web.',
      'Invalid Rule Type' => 'Type de règle incorrect',
      '%s target(s) do not have permission to see this object: %s.' => '%s cible(s) n’a/ont pas le droit de voir cet objet : %s.',
      'Webhook HMAC Key' => 'Clé HMAC de point d’ancrage web',
      '%s changed the URI for %s from %s to %s.' => '%s a modifié l’URI pour %s de %s en %s.',
      'Hook Disabled' => 'Point d’ancrage désactivé',
      'Silent Mode' => 'Mode silencieux',
      'Conditions' => 'Conditions',
      'Create Notification Rules' => 'Créer des règles de notification',
      'The selected rule type ("%s") is not supported by the selected content type ("%s").' => 'Le type de règle sélectionné (« %s ») n’est pas pris en charge par le type de contenu sélectionné (« %s »).',
      'Rule could not be processed because it was created with a newer version of Herald.' => 'La règle n’a pas pu être traitée car elle a été créée pour une nouvelle version d’Herald.',
      'Test run complete. Transcript:' => 'Test terminé. Transcription :',
      'Take these actions if this rule did not match the last time:' => 'Prendre ces actions si cette règle n’a pas été vérifiée la dernière fois :',
      'does not exist' => 'n’existe pas',
      'include all of' => 'inclure tout de',
      'Browse Rule Types' => 'Parcourir les types de règles',
      'Run rules on this object.' => 'Exécuter les règles sur cet objet.',
      'Invalid Condition' => 'Condition non valide',
      'Invalid URI' => 'URI non valide',
      'matches regexp' => 'correspond à l’expression rationnelle',
      'Enter an object to test rules for, like a Diffusion commit (e.g., `rX123`) or a Differential revision (e.g., `D123`). You will be shown the results of a dry run on the object.' => 'Entrer un objet duquel tester les règles, comme une validation de Diffusion (p. ex. « rX123 ») ou une révision Différentielle (p. ex. « D123 »). Les résultats d’un lancement de test sur l’objet vous seront montrés.',
      'true' => 'vrai',
      'Unknown rule type "%s"!' => 'Type de règle « %s » inconnu !',
      'This was a dry run, so no actions were taken.' => 'Ceci était une exécution à blanc, aucune action n’a donc été prise.',
      'Webhooks must have a name.' => 'Les points d’ancrage web doivent avoir un nom.',
      'Save Rule' => 'Enregistrer la règle',
      'every time this rule matches:' => 'chaque fois que cette règle est vérifiée :',
      'Associated hook ("%s") for webhook request ("%s") has invalid fetch URI: %s' => 'Le point d’ancrage associé (« %s ») pour la requête de point d’ancrage web (« %s ») possède une URI de récupération non valide : %s',
      '%s disabled this rule.' => '%s a désactivé cette règle.',
      'A personal rule can only be edited by its owner.' => 'Une règle personnelle ne peut être modifiée que par son propriétaire.',
      'Edit Herald Rule: %s' => 'Modifier la règle Herald : %s',
      'Webhook URIs can be no longer than %s characters.' => array(
        'Les URI de points d’ancrage web ne peuvent pas dépasser %s caractère.',
        'Les URI de points d’ancrage web ne peuvent pas dépasser %s caractères.',
      ),
      'Expected object (of class "%s") to return a transaction template (of class "%s"), but it returned something else ("%s").' => 'L’objet (de type « %s ») aurait dû retourner un modèle de transaction (de classe « %s »), mais a retourné autre chose (« %s »).',
      'Webhook request ("%s", to "%s") failed (%s / %s). The request will be retried.' => 'La requête de point d’ancrage web (« %s », vers « %s ») a échoué (%s / %s). La requête va être tentée à nouveau.',
      'Webhook Request %d' => 'Requête de point d’ancrage web %s',
      'Watch for danger!' => 'Veillez aux dangers !',
      'Status mode for the webhook.' => 'Mode d’état pour le point d’ancrage web.',
      'Related Fields' => 'Champs connexes',
      'New Test Request' => 'Nouvelle requête de test',
      'Rule failed automatically because it is a personal rule and its owner is invalid or disabled.' => 'La règle a échoué automatiquement car c’est une règle personnelle et son propriétaire n’est pas valide ou est désactivé.',
      'New Action' => 'Nouvelle action',
      'No Effect' => 'Sans effet',
      'Instead of making calls in the foreground, add the tasks to the daemon queue.' => 'Au lieu d’effectuer des appels en premier plan, ajoutez les tâches à la file du service d’arrière-plan.',
      'Changes triggered by Herald rules.' => 'Modifications déclenchées par les règles Herald.',
      'The %s repository is not tracked.' => 'Le répertoire %s n’est pas tracé.',
      'View HMAC Key' => 'Afficher la clé HMAC',
      'No field with key "%s" is available to Herald adapter "%s".' => 'Aucun champ avec la clé « %s » disponible pour l’adaptateur Herald « %s ».',
      'Unable to load specified webhook ("%s").' => 'Impossible de charger le point d’ancrage web spécifié (« %s »).',
      'Invalid Object' => 'Objet non valide',
      'Did nothing.' => 'N’a rien fait.',
      'is myself' => 'est moi-même',
      'Modify a rule, bypassing policies. This workflow can disable problematic personal rules.' => 'Modifier une règle en outrepassant les politiques. Ce flux de travail peut désactiver des règles personnelles problématiques.',
      'This rule has a recursive dependency on itself and can not be evaluated.' => 'Cette règle a une dépendance récursive sur elle-même et ne peut pas être évaluée.',
      'Object Transcript' => 'Transcription d’objet',
      'Herald Rules' => 'Règles Herald',
      'Create Herald Rule' => 'Créer une règle Herald',
      'Disable Rule' => 'Désactiver la règle',
      'Apply changes to this rule.' => 'Appliquer les modifications à cette règle.',
      'Rule names can be no longer than %s characters.' => array(
        'Les noms de règle ne peuvent pas dépasser %s caractère.',
        'Les noms de règle ne peuvent pas dépasser %s caractères.',
      ),
      'false' => 'faux',
      'Enable the rule.' => 'Activer la règle.',
      'Affects: %s' => 'Affecte : %s',
      'Unable to build a new transaction for adapter object; it does not implement "%s".' => 'Impossible de construire une nouvelle transaction pour l’objet de l’adaptateur : il ne met pas en  œuvre « %s ».',
      'Supporting Applications' => 'Applications prenant en charge',
      'Transcript %s' => 'Transcription %s',
      'Webhook request ("%s", to "%s") failed (%s / %s). The request will not be retried.' => 'La requête de point d’ancrage web (« %s », à « %s ») a échoué (%s / %s). La requête ne sera pas tentée à nouveau.',
      'Rules must have a name.' => 'Les règles doivent avoir un nom.',
      '//There are no available Herald events for this object.//' => '//Il n’y a aucun événement Herald disponible pour cet objet.//',
      'An unknown error occurred while evaluating this condition. No additional information is available.' => 'Une erreur inconnue s’est produite lors de l’évaluation de cette condition. Aucune information supplémentaire n’est disponible.',
      'does not match regexp' => 'ne correspond pas à l’expression rationnelle',
      'You have permission to create and manage global rules.' => 'Vous avez la permission de créer et de gérer les règles globales.',
      '%s renamed this rule from %s to %s.' => '%s a renommé cette règle de %s en %s.',
      'This rule matched, but did not take any actions because it is configured to act only if it did not match the last time.' => 'Cette règle a correspondu mais n’a pris aucune action, car elle est configurée pour agir uniquement si elle n’a pas correspondu la dernière fois.',
      'Wrong Rule Type' => 'Mauvais type de règle',
      'Content Type' => 'Type de contenu',
      'if this rule did not match the last time:' => 'si cette règle n’a pas correspondu la dernière fois :',
      'Global rules notify anyone about events. Global rules can bypass access control policies and act on any object.' => 'Les règles globales notifient n’importe qui sur des événements. Elles peuvent contourner les politiques de contrôle d’accès et agir sur tout objet.',
      'Make a total of __N__ copies of the call.' => 'Effectuer un total de __N__ copies de l’appel.',
      'This rule is only supposed to be repeated a single time, and it has already been applied.' => 'Cette règle est supposée se répéter une seule fois et elle a déjà été appliquée.',
      'Webhook Request' => 'Requête de point d’ancrage web',
      'Unknown Action ("%s")' => 'Action inconnue (« %s »)',
      'Search for rules affecting given types of content.' => 'Recherches des règles affectant les types de contenu donnés.',
      'When any of these conditions are met:' => 'Lorsque l’une quelconque de ces conditions est remplie :',
      'Utility' => 'Utilitaire',
      'No rules found.' => 'Aucune règle trouvée.',
      'Webhook request ("%s") is not in "%s" status (actual status is "%s"). Declining call to hook.' => 'La requête de point d’ancrage web (« %s ») n’est pas dans l’état « %s » (l’état réel est « %s »). L’appel au point d’ancrage web est refusé.',
      'Browse Herald Rules' => 'Parcourir les règles Herald',
      'Edit Webhook' => 'Modifier le point d’ancrage web',
      'No implementation is available for rule "%s".' => 'Aucune mise en œuvre disponible pour la règle « %s ».',
      'Herald rules will not trigger until tracking is enabled.' => 'Les règles Herald ne s’enclencheront pas avant l’activation du suivi.',
      'Edit Webhook: %s' => 'Modifier le point d\'ancrage web : %s',
      'Create Herald Rule: %s' => 'Créer la règle Herald : %s',
      'Global Herald rules can be edited by users with the "Can Manage Global Rules" Herald application permission.' => 'Les règles Herald globales peuvent être modifiées pas les utilisateurs ayant le droit d’application Herald « Peut gérer des règles globales ».',
      'Recursion' => 'Récursion',
      '%s (Disabled)' => '%s (désactivé)',
      'You must choose an object to associate this rule with.' => 'Vous devez choisir un objet auquel associer cette règle.',
      'Added Comment' => 'Commentaire ajouté',
      'Second regular expression is invalid!' => 'La deuxième expression rationnelle n’est pas valide !',
      'Create Rule' => 'Créer une règle',
      'Unable to load webhook request ("%s"). It may have been garbage collected.' => 'Impossible de charger la requête de point d’ancrage web (« %s »). Elle a pu être recyclée par le ramasse-miettes.',
      'The specified content type ("%s") does not support dry runs. Choose a testable content type. For this object, valid content types are: %s.' => 'Le type de contenu spécifié (« %s ») ne prend pas en charge les lancements de test. Choisir un type de contenu testable. Pour cet objet, les types de contenu valides sont : %s.',
      'Firehose' => 'Tuyau d’incendie',
      'Queueing webhook calls...' => 'Mise en file d’attente des appels de crochets web...',
      'Hook Error' => 'Erreur d’ancrage',
      'Regular expression "%s" in Herald rule "%s" is not valid, or exceeded backtracking or recursion limits while executing. Verify the expression and correct it or rewrite it with less backtracking.' => 'L’expression rationnelle « %s » dans la règle Herald « %s » n’est pas valide, ou a dépassé les limites de retours sur trace ou de récursion au cours de son exécution. Vérifiez l’expression et corrigez-la ou réécrivez-la avec moins de retours sur trace.',
      'No adapter exists for Herald content type "%s".' => 'Aucun adaptateur existant pour le type de contenu Herald « %s ».',
      'You do not have permission to create or manage global rules.' => 'Vous n’avez pas la permission de créer ou de gérer des règles globales.',
      'Many requests to this webhook have failed recently (at least %s errors in the last %s seconds). New requests are temporarily paused.' => 'Beaucoup de requêtes sur ce point d\'ancrage web ont échoué récemment (au moins %s erreurs durant ces %s dernières secondes). Les nouvelles requêtes sont temporairement suspendues.',
      'Call webhooks' => 'Appel des points d\'ancrage web',
      'Another Herald rule' => 'Une autre règle Herald',
      'What' => 'Quoi',
      'include none of' => 'n’inclure aucun parmi',
      'Unable to load Herald rule with ID or monogram "%s".' => 'Impossible de charger la règle Herald avec l’ID ou le monogramme « %s ».',
      'Edit Rule' => 'Modifier la règle',
      'any of' => 'n’importe lequel/laquelle de',
      'Dry Run' => 'Lancement de test',
      'Condition references a rule which does not exist!' => 'La condition fait référence à une règle inexistante !',
      'Show Only Enabled Rules' => 'Montrer les règles activées uniquement',
      'Webhook %d %s' => 'Point d\'ancrage web %s %s',
      'This object ("%s") has more than %s transactions in its most recent transaction group; this is too many.' => 'Cet objet (« %s ») a plus de %s transactions dans son groupe de transactions le plus récent ; c’est trop.',
      'Did Nothing' => 'N’a rien fait',
      'Choose the object this rule will act on (for example, enter `rX` to act on the `rX` repository, or `#project` to act on a project).' => 'Choisir l’objet sur lequel va agir cette règle (par exemple, entrer « rX » pour agir sur le répertoire « rX », ou « #project » pour agir sur un projet).',
      'No action with key "%s" is available to Herald adapter "%s".' => 'Aucune action avec la clé « %s » disponible pour l’adaptateur Herald « %s ».',
      'Specified object could not be loaded.' => 'L\'objet spécifié n\'a pas pu être chargé.',
      'Can Create Webhooks' => 'Possibilité de créer des points d\'ancrage web',
      'Author Not Active' => 'Auteur pas actif',
      'Test content rules for an object. Executes a dry run, like the web UI test console.' => 'Tester les règles de contenu pour un objet. Exécute un lancement de test, comme la console de test de l’interface web.',
      'Personal rules notify you about events. You own them, but they can only affect you. Personal rules only trigger for objects you have permission to see.' => 'Les règles personnelles vous notifient sur les événements. Vous les possédez, mais elles n’affectent que vous. Elles ne s’activent que pour les objets que vous avez le droit de voir.',
      'Comment content' => 'Contenu du commentaire',
      '%s target(s) are invalid or of the wrong type: %s.' => '%s cible(s) est/sont invalide(s) ou du mauvais type : %s.',
      'has bit' => 'a un bit',
      'Submit transactions for a particular object.' => 'Soumettre les transactions pour un objet particulier.',
      'The selected rule type ("%s") is not recognized by Herald.' => 'Le type de règle sélectionné (« %s ») n’est pas reconnu par Herald.',
      'Run Duration' => 'Durée d\'exécution',
      'No conditions matched.' => 'Aucune condition réunie.',
      'Test Console' => 'Console de Test',
      'Browse Webhooks' => 'Afficher les points d\'ancrage web',
      'Field: %s' => 'Champ : %s',
      'The %s repository is still importing.' => 'Le dépôt %s est toujours en cours d’importation.',
      'Transcripts' => 'Transcriptions',
      'Content source' => 'Source de contenu',
      'RULE DETAIL' => 'DETAIL DE LA REGLE',
      'Rule/Content Mismatch' => 'Incompatibilité des règles et du contenu',
      'Run rules for this content type.' => 'Règles d\'exécution pour ce type de contenu',
      'Add comment: %s' => 'Ajouter un commentaire: %s',
      'Rule type' => 'Type de règle',
      'is' => 'est',
      'This rule will become active again.' => 'Cette règle redeviendra active.',
      'Specify a content type to run rules for. The specified content type ("%s") is not valid. For this object, valid content types are: %s.' => 'Spécifier un type de contenu pour lequel exécuter les règles. Le type de contenu spécifié (« %s ») n’est pas valide. Pour cet objet, les types de contenu valides sont : %s.',
      'Herald Actions' => 'Actions d’Herald',
      'No active Herald rules call this webhook.' => 'Aucune règle active d’Herald n’appelle ce crochet web.',
      'Transcript %d' => 'Transcription %s',
      'Can Manage Global Rules' => 'Peut gérer les règles globales',
      'Called Webhooks' => 'Points d\'ancrage web appelés',
      'Requests which are currently authenticated with the old key may fail.' => 'Les requêtes qui sont actuellement authentifiées avec l\'ancienne clé peuvent échouer.',
      'Added a comment: %s' => 'Commentaire ajouté: %s',
      'To view a transcript, you must be able to view the object the transcript is about.' => 'Pour visionner une transcription, vous devez être en mesure de voir l’objet sur lequel porte la transcription.',
      'This rule type is not supported by the selected content type.' => 'Ce type de règle n’est pas pris en charge par le type de contenu sélectionné.',
      'Herald User Guide' => 'Guide utilisateur du messager',
      'Rule Owner' => 'Propriétaire de la règle',
      'Trigger Object' => 'Objet déclencheur',
      'Object Monograms' => 'Objet Monograms',
      'Really enable this rule?' => 'Voulez-vous réellement activer cette règle ?',
      'Take these actions every time this rule matches:' => 'Effectuer ces actions chaque fois que cette règle correspond :',
      'A flexible rules engine that can notify and act on other actions such as tasks, diffs, and commits.' => 'Un moteur de règles flexible qui peut notifier et agir sur d’autres actions comme des tâches, des diffs et des validations.',
      'Personal Rule' => 'Règle personnelle',
      'Already Applied' => 'Déjà appliqué',
      'Rule Fields' => 'Champs de la règle',
      'Show Only Inactive Rules' => 'Ne montrer que les règles non actives',
      '%s enabled this rule.' => '%s a activé cette règle.',
      'Rule repetition string constant "%s" is unknown.' => 'La constante de répétition de chaîne de la règle « %s » est inconnue.',
      'Unknown condition "%s"!' => 'Condition inconnue « %s » !',
      'Specified "--count" must be larger than 0.' => 'La valeur spécifiée pour « --count » (compteur) doit être supérieure à 0.',
      'is true' => 'est vrai',
      'This rule triggers for %s.' => 'Cette règle se déclenche pour %s.',
      'Found more than one ("%s") applied edge transactions with given edge type ("%s"); expected zero or one.' => 'Plus d’une (« %s ») transactions de bord ont été trouvées appliquées avec le type de bord donné (« %s ») ; n’en attendait aucune ou une seule.',
      'Rule Type' => 'Type de règle',
      'Applying changes to %s: %s...' => 'Application des changements à %s : %s...',
      'H%d' => 'H%s',
      'User Guide: Webhooks' => 'Guide utilisateur: les points d\'ancrage web',
      'Unable to load object ("%s") for webhook request ("%s").' => 'Impossible de charger l\'objet (« %s ») pour le requête de point d\'ancrage web (« %s »).',
      'Result code "%s" is unknown.' => 'Le code de résultat « %s » est inconnu.',
      'Field Values' => 'Valeurs des champs',
      'contains' => 'contient',
      'Type a webhook name...' => 'Saisissez un nom de point d’ancrage web...',
      'Call a webhook.' => 'Appeler un point d\'ancrage web.',
      'Recent Requests' => 'Demandes récentes',
      'Two HeraldActions (of classes "%s" and "%s") have the same action key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each action must have a unique action key.' => 'Deux HeraldActions (des classes « %s » et « %s ») ont la même clé d’action (« %s ») après expansion pour un objet de classe « %s » dans l’adaptateur « %s ». Chaque action doit avoir une clé d’action unique.',
      'Object rules notify anyone about events. They are bound to an object (like a repository) and can only act on that object. You must be able to edit an object to create object rules for it. Other users who can edit the object can edit its rules.' => 'Les règles d’objet peuvent informer tout le monde à propos d’un évènement. Elles sont liées à un objet (tel qu’un dépôt) et peuvent seulement agir sur cet objet. Vous devez avoir le droit de modifier un objet pour lui créer des règles d’objet. Les autres utilisateurs qui peuvent modifier l’objet peuvent modifier ses règles.',
      'Conditions were met for %s' => 'Les conditions ont été respectées pour %s',
      'Transcript IDs' => 'Identifiants de transcription',
      'Rule evaluation result is unknown.' => 'Le résultat de l’évaluation de la règle est inconnu.',
      'Calling webhook...' => 'Appel du crochet web...',
      'The regular expression "%s" is not valid. Regular expressions must have enclosing characters (e.g. "@/path/to/file@", not "/path/to/file") and be syntactically correct.' => 'L’expression rationnelle « %s » n’est pas valide. Les expressions rationnelles doivent encadrées par un même caractère délimiteur (par ex. « @/path/to/file@ » et pas « /path/to/file ») et être syntaxiquement correctes.',
      'Herald Transcript' => 'Transcription d’annonce',
      '%s target(s) could not be loaded: %s.' => '%s cible(s) n’ont pas pu être chargée(s) : %s.',
      'Unknown Effect ("%s")' => 'Effet inconnu (« %s »)',
      'Herald Transcripts' => 'Transcriptions d’annonce',
      'Herald rules will not trigger until import completes.' => 'Les règles d’annonce ne se déclencheront pas avant que l’importation ne soit terminée.',
      'Do nothing' => 'Ne rien faire',
      '%s %s %s' => '%s %s %s',
      '%s created this webhook.' => '%s a créé ce point d\'ancrage web.',
      '<Unknown Field "%s">' => '<Champ inconnu "%s">',
      'Show Only Disabled Rules' => 'Ne montrer que les règles désactivées',
      'Use flags to specify at least one edit to apply to the rule (for example, use "--disable" to disable a rule).' => 'Utilisez des indicateurs pour spécifier au moins une modification à appliquer à la règle (par exemple, utilisez « --disable » pour désactiver une règle).',
      'No Herald rules applied to this object.' => 'Aucune règle d’annonce ne s’applique à cet objet.',
      'This transcript has an invalid or inaccessible adapter.' => 'Cette transcription a un adaptateur invalide ou inaccessible.',
      'Request Timeout' => 'Temps d\'attente pour la requête',
      'All conditions matched.' => 'Toutes les conditions sont réunies.',
      'matches regexp pair' => 'correspond à la paire d’expressions rationnelles',
      'Content type' => 'Type de contenu',
      'Object produced non-array value!' => 'L’objet a produit une valeur non tableau !',
      'Action "%s" is not forbidden!' => 'L’action « %s » n’est pas interdite !',
      'does not match:' => 'pas de correspondance :',
      'Herald Webhooks' => 'Points d\'ancrage web Herald',
      'Rule failed because an exception occurred.' => 'La règle a échoué car une exception s’est produite.',
      'Type a rule type...' => 'Entrez un type de règle...',
      'This action does not support rules of type "%s".' => 'Cette action ne prend pas en charge les règles de type « %s ».',
      'Authored by %s' => 'Rédigé par %s',
      'Really disable this rule?' => 'Voulez-vous réellement désactiver cette règle ?',
      'Choose Object' => 'Choisir un objet',
      'Acting user' => 'Utilisateur actif',
      'Rule for' => 'Règle pour',
      'is any of' => 'est un de',
      'is not' => 'n’est pas',
      'Success, got HTTP %s from webhook.' => 'Succès, le point d\'ancrage web a fourni HTTP %s .',
      'Not all conditions matched.' => 'Toutes les conditions ne sont pas réunies.',
      'Active Rules' => 'Règles actives',
      'is not myself' => 'n’est pas moi-même',
      'Run Test' => 'Exécuter un test',
      'matches:' => 'correspondances :',
      'Show Only Active Rules' => 'N\'afficher que les règles actives',
      'No object exists with that name.' => 'Aucun objet n’existe avec ce nom.',
      'Edit Webhook Configurations' => 'Modifier les configurations Webhook',
      'New Condition' => 'Nouvelle condition',
      'Global rules can bypass access controls.' => 'Les règles globales peuvent contourner les contrôles d’accès.',
      'Object Link' => 'Lien d’objet',
      'This was a dry run, so no actions were actually taken.' => 'C’était une exécution à blanc, donc aucune action n’a effectivement faite.',
      'include any of' => 'inclure un des',
      'This change applied silently, so mail and other notifications will not be sent.' => 'Cette modification s\'est exécutée silencieusement, donc il ne sera pas envoyé de courriel ni d\'autres notifications.',
      'This rule has a dependency cycle and can not be evaluated:' => 'Cette règle a une dépendance cyclique et ne peut pas être évaluée :',
      'Requested At' => 'Demandé à',
      'Unknown condition \'%s\'.' => 'Condition inconnue « %s ».',
      'Associated hook ("%s") for webhook request ("%s") is disabled.' => 'Le point d\'ancrage associé ("%s") à la requête de point d\'ancrage web ("%s") est désactivé.',
      'Rule Transcript' => 'Règle de transcription',
      'HTTP Status Code' => 'Code d\'état HTTP',
      'Unable to render value for unknown field type ("%s").' => 'Impossible de faire le rendu de la valeur pour un type inconnu (« %s ») de champ.',
      'No webhooks found.' => 'Aucun point d\'ancrage web trouvé.',
      'Run At Epoch' => 'Exécuter au moment',
      '%s changed %s from %s to %s.' => '%s a modifié %s de %s à %s.',
      'Regular expression pair is not valid JSON!' => 'La paire d’expressions rationnelles n’est pas valide en JSON !',
      'You do not have permission to create webhooks.' => 'Vous n’avez pas la permission de créer des points d’ancrage web.',
      'is not any of' => 'n\'est pas l\'un des',
      'This object is not of an allowed type for the rule. Rules can only trigger on certain objects.' => 'Cet objet n’est pas du type autorisé pour la règle. Les règles ne peuvent déclencher que certains objets.',
      'This rule was created with a newer version of Herald. You can not view or edit it in this older version. Upgrade your software.' => 'Cette règle a été créée avec une version plus récente d’Herald. Vous ne pouvez pas la voir ou la modifier dans cette version. Mettez à jour votre installation de Phabricator.',
      'Called By Herald Rules' => 'Appelé par des règles Herald',
      'Regnerate Key' => 'Regénérer la clé',
      'View Full Transcript' => 'Afficher la transcription complète',
      'No valid object provided for object rule!' => 'Aucun objet valide fourni pour la règle d’objet !',
      'Herald rule "%s" already has an evaluation result.' => 'La règle d’Herald « %s » a déjà un résultat d’évaluation.',
      'This rule will no longer activate.' => 'Cette règle ne s’activera plus.',
      'Specify a rule to edit with "--rule <id|monogram>".' => 'Spécifiez une règle à modifier avec « --rule <id|monogram> ».',
      'is false' => 'est faux',
      'First regular expression is invalid!' => 'La première expression rationnelle n’est pas valide !',
      'Rule failed automatically because it is a personal rule and its owner does not have permission to view the object.' => 'La règle a échoué automatiquement car c’est une règle personnelle et son propriétaire n’a pas le droit de voir l’objet.',
      '%s renamed this webhook from %s to %s.' => '%s a renommé ce point d\'ancrage web de %s en %s.',
      'Name of the webhook.' => 'Nom du point d\'ancrage web.',
      'Webhooks' => 'Points d\'ancrage web',
      'The regular expression pair "%s" must have exactly two elements.' => 'La paire d’expressions rationnelles « %s » doit avoir exactement deux éléments.',
      'No transcripts found.' => 'Aucune transcription trouvée.',
    );
  }

}
