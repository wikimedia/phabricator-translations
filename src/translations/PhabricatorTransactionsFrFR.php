<?php

final class PhabricatorTransactionsFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Verrouiller / masquer des champs',
      'Unmark as "Edit" Form' => 'Démarquer comme formulaire de « Modification »',
      'Parameter "%s" is not a list of transactions.' => 'Le paramètre « %s » n’est pas une liste de transactions.',
      'Transactions have no effect:' => 'Des transactions n’ont aucun effet :',
      'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => 'Ce point de terminaison prend en charge les types suivants de transactions. Voir ci-dessous pour des informations détaillées sur chaque type de transaction.',
      'To silence this edit, run this command:' => 'Pour réduire au silence cette modification, exécutez la commande suivante :',
      'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => 'Dans l’appel à « transaction.search », l’objet sélectionné (de type « %s ») ne met pas en œuvre « %s », donc les transactions ne peuvent pas être chargées pour lui.',
      'Builtin Form "%s"' => 'Formulaire intégré « %s »',
      '%s added a comment.' => '%s a ajouté un commentaire.',
      'Empty Comment' => 'Commentaire vide',
      'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => 'La politique %s sélectionnée vous exclut. Choisissez une politique %s qui vous permet de %s l’objet.',
      'All users are already subscribed to this %s.' => 'Tous les utilisateurs sont déjà abonnés à ce %s.',
      'Edge transaction has no \'%s\'!' => 'La transaction d’arête n’a aucun « %s » !',
      'No object exists with PHID "%s".' => 'Aucun objet n’existe avec le PHID « %s ».',
      'You can not edit this comment because the conversation is locked.' => 'Vous ne pouvez pas modifier ce commentaire car la conversation est verrouillée.',
      'Reorder Edit Forms' => 'Réordonner les formulaires de modification',
      'Reorder Create Forms' => 'Réordonner les formulaires de création',
      'Edit Form Defaults' => 'Modifier les valeurs par défaut du formulaire',
      'The %s action(s) you are taking have no effect:' => array(
        'L’action que vous prenez n’a aucun effet :',
        'Les %s actions que vous prenez n’ont aucun effet :',
      ),
      '%s removed %s subscriber(s) for %s: %s.' => '%s a retiré %s abonné(s) pour %s : %s .',
      'New Mode' => 'Nouveau mode',
      'Engine: Editor' => 'Moteur : éditeur',
      '%s moved %s to %s on the %s board.' => '%s a déplacé %s vers %s sur le tableau %s.',
      'To continue, configure multi-factor authentication in Settings.' => 'Pour continuer, configurez l’identification à facteurs multiples dans vos Paramètres.',
      'SearchEngine class to export data from.' => 'Classe SearchEngine pour exporter les données.',
      'In %s, %s wrote:' => 'Dans %s, %s a écrit :',
      'Unmark as Create Form' => 'Démarquer comme formulaire de création',
      'Mark as Edit Form' => 'Marquer comme formulaire de modification',
      'Edges already exist; transaction has no effect.' => 'Les arêtes existent déjà ; la transaction n’a aucun effet.',
      '%s updated the preamble for this form.' => '%s a mis à jour le préambule de ce formulaire.',
      '%s changed the default value for field %s.' => '%s a modifié la valeur par défaut du champ %s.',
      '%s marked %s inline comment(s) as done.' => '%s a marqué %s commentaire{{PLURAL:||s}} en ligne comme fait{{PLURAL:||s}}.',
      'Email Body Text' => 'Texte du corps du courriel',
      'Optional instructions, shown above the form.' => 'Instructions optionelles, apparaissant au-dessus du formulaire.',
      'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Ce groupe de transactions exige une authentification à facteurs multiples (MFA) pour s’appliquer, mais vous ne pouvez fournir aucune réponse MFA via Conduit. Modifiez cet objet via l’interface utilisateur sur le web.',
      'Subtype key "%s" does not identify a valid subtype.' => 'La clé de sous-type « %s » n\'identifie pas un sous-type valide.',
      'Name of the form.' => 'Nom du formulaire.',
      'No search engines match "%s". Available engines which support data export are: %s.' => 'Il n\'y a pas de moteur de recherche « %s ». Les moteurs disponibles prenant en charge l\'exportation de données sont : %s.',
      'Default Create Form' => 'Formulaire de création par défaut',
      '%s changed the visibility for %s.' => '%s a modifié la visibilité pour %s .',
      'Warnings' => 'Avertissements',
      'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".' => 'Attendait que « newTransactionWarning() » renvoie un objet de classe « PhabricatorTransactionWarning » (avertissement de transaction Phabricator), mais autre chose (« %s ») a été obtenu de la transaction de classe « %s ».',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s abonné(s) modifié(s), %s:%s ajouté(s); %s:%s retiré(s).',
      'Take Action' => 'Prendre l’action',
      'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Utiliser « --output <chemin> » pour spécifier un fichier de sortie, ou bien « --output - » pour imprimer vers le flux de sortie standard.',
      'Form Disabled' => 'Formulaire désactivé',
      'Failed to serialize() value for key "%s".' => 'Échec de « serialize() » pour sérialiser la valeur associée à la clé « %s ».',
      '%s marked %s inline comment(s) as not done.' => '%s a marqué %s commentaire{{PLURAL:||s}} en ligne comme pas fait{{PLURAL:||s}}.',
      'Recipient Removed' => 'Destinataire supprimé',
      'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'Le champ de modification (« EditField » avec la clé « %s », de classe « %s ») génère des transactions, mais n’a aucun type de modification (« EditType »).',
      'Bulk Edit Actions' => 'Actions de modification en masse',
      'Primary Fields' => 'Champs primaires',
      '%s updated %s attached file(s), removed %s: %s; modified %s: %s.' => '%s a mis à jour %s fichier(s) joint(s), à savoir %s a/ont été supprimé(s) : %s ; et %s modifié(s) : %s.',
      '%s attached %s referenced file(s): %s.' => '%s a joint %s fichier(s) référencé(s) : %s .',
      '%s moved %s on %s board(s): %s.' => '%s a déplacé %s sur %s tableau(x) : %s.',
      'Export format.' => 'Format d\'exportation.',
      'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Glissez et déposez des champs pour modifier l’ordre dans lequel ils apparaissent dans le menu « Créer » de l’application.',
      'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => 'Valeur « %s » non valide pour la transaction d’arêtes. La valeur ne doit contenir que des clés « %s » (ajouter des arêtes), « %s » (retirer des arêtes) ou « %s » (définir des arêtes).',
      'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'Le monogramme « %s »identifie un objet du mauvais type. L’objet chargé est de classe « %s », mais cet éditeur traite des objets de type « %s ».',
      '🔒 Locked' => '🔒 Vérouillé',
      'New Object' => 'Nouvel objet',
      'Type an object type name...' => 'Saisissez un nom de type d’objet...',
      '%s enabled this form.' => '%s a activé ce formulaire.',
      'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'Le moteur de modification « %s » a créé ou chargé un objet non valide : l’objet (de classe « %s ») doit mettre en œuvre « %s », mais ne le fait pas.',
      'Edit Configurations' => 'Modifier les configurations',
      'Edit type (with key "%s") is missing a Conduit parameter type.' => 'Il manque un type de paramètre Conduit pour le type de modification (avec la clé « %s »).',
      'Validation Errors' => 'Erreurs de validation',
      'You are about to apply a bulk edit which will affect %s object(s).' => array(
        'Vous allez appliquer une modification en masse qui converne %s objet.',
        'Vous allez appliquer une modification en masse qui converne %s objets.',
      ),
      'You do not have access to any forms which are enabled and marked as edit forms.' => 'Vous n\'avez accès à aucun formulaire activé et marqué en tant que formulaire d\'édition.',
      'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.' => 'Le moteur de modification (de classe « %s ») ne prend pas en charge les sous-types, les transactions de sous-types ne peuvent donc pas lui être appliquées.',
      'You are editing the default values for this form.' => 'Vous modifiez les valeurs par défaut de ce formulaire.',
      'This job is already configured to run silently.' => 'Cette tâche est déjà configurée pour s\'exécuter silencieusement.',
      'Failed to base64 encode value for key "%s".' => 'Échec de l’encodage en base64 de la valeur pour la clé « %s ».',
      'This form ("%s") has been disabled, so it can not be used.' => 'Ce formulaire (« %s ») a été désactivé, il ne peut donc pas être utilisé.',
      'Browse Forms' => 'Parcourir les formulaires',
      'Constraint "authorPHIDs" to "transaction.search" requires nonempty list, empty list provided.' => 'La contrainte « authorPHIDs » (PHID des auteurs) passée à « transaction.search » nécessite une liste non vide, mais une liste vide a été fournie.',
      'Specify an export format with "--format".' => 'Spécifiez un format d’exportation avec « --format ».',
      'Using HTTP Parameters' => 'Utilisation des paramètres HTTP',
      'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => 'Le sous-type « %s » n’est pas valide : les clés de sous-type doivent avoir une longueur minimale de 3 octets.',
      'Expected a query key or a set of query constraints.' => 'Attendu une clé de requête ou un ensemble de contraintes de requête.',
      'Enable Form' => 'Activer le formulaire',
      '%s edited edge metadata for %s.' => '%s a modifié les méta-données de bord pour %s.',
      'Create Forms' => 'Formulaires de création',
      'Post as Comment' => 'Publier en tant que commentaire',
      'Edit Configuration' => 'Modifier la configuration',
      '%s updated %s attached file(s), added %s: %s; modified %s: %s.' => '%s a mis à jour %s fichier(s) joint(s), à savoir %s a/ont été ajouté(s) : %s ; et %s modifié(s) : %s.',
      'Query does not match any objects you have permission to edit.' => 'La requête ne concerne aucun objet que vous pouvez modifier.',
      'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => 'Marquer ce formulaire comme un formulaire de modification ? Les utilisateurs qui peuvent le voir pourront l’utiliser pour modifier des objets.',
      'Query does not match any objects.' => 'La requête ne concerne aucun objet.',
      'Read transactions and comments for a particular object or an entire object type.' => 'Lire les transactions et les commentaires sur un objet particulier ou un type d’objet tout entier.',
      '✘ Hidden' => '✘ Masqué',
      'EditEngine BuiltinKey contains an invalid key character "/".' => 'La clé intégrée (BuiltinKey) du moteur de modification (EditEngine) contient un caractère clé « / » non valide.',
      '%s rescinded a token.' => '%s a annulé un jeton.',
      '%s awarded a token.' => '%s offre un jeton.',
      'New object subtype key.' => 'Nouvelle clé de sous-type d’objet.',
      'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.' => 'Ce commentaire a été signé avec une authentification multi-facteur (MFA), donc les modifications qui y sont apportées doivent également être signées avec MFA. Vous n’avez aucun facteur MFA attaché à votre compte, vous ne pouvez donc pas signer cette modification. Ajoutez MFA à votre compte dans vos Paramètres.',
      '%s added a comment to %s.' => '%s a ajouté un commentaire à %s.',
      '%s changed locked and hidden fields.' => '%s a changé des champs verrouillés et masqués.',
      'Edit Form %d: %s' => 'Modifier le formulaire %s : %s',
      'Output path already exists. Use "--overwrite" to overwrite it.' => 'Le chemin de sortie existe déjà. Utilisez « --overwrite » pour le substituer.',
      'Change Subtype' => 'Changer le sous-type',
      'Drag and drop fields to reorder them.' => 'Déplacez et relâchez les champs pour les réordonner.',
      '%s removed %d subscriber(s): %s.' => '%s a retiré %s abonné(s) : %s.',
      'Not an Edit Form' => 'Pas un formulaire de modification',
      'Mark Form' => 'Marquer le formulaire',
      'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine ("%s") contient un caractère de clé «&nbsp;/&nbsp;» invalide.',
      'Change Default Values' => 'Modifier les valeurs par défaut',
      '%s added %s watcher(s) for %s: %s.' => '%s a ajouté %s suiveur(s) pour %s : %s.',
      'No default edit engine configuration for bulk edit.' => 'Il n\'existe pas de configuration par défaut du moteur de modification pour les éditions en masse.',
      'After running this command, reload this page to see the new setting.' => 'Après avoir exécuté cette commande, veuillez recharger cette page pour voir les nouveaux paramètres.',
      'Save Defaults' => 'Enregistrer les valeurs par défaut',
      'Change how forms in other applications are created and edited. Advanced!' => 'Changer la manière dont les formulaires sont créés et modifiés dans les autres applications. Avancé !',
      'Form Order' => 'Ordre du formulaire',
      'Mention In' => 'Mentionné dans',
      'HTTP Parameters' => 'Paramètres HTTP',
      'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => 'La transaction est de type « %s », mais ce type de transaction n’est pas pris en charge par cet éditeur (%s).',
      'Edit Engines' => 'Modifier les moteurs',
      'Disable this form? Users will no longer be able to use it.' => 'Désactiver ce formulaire ? Les utilisateurs ne pourront plus l’utiliser.',
      'Bulk Editor' => 'Rédacteur en masse',
      'Aliases
    -------
    Aliases are alternate recognized keys for a field. For example, a field with
    a complex key like `examplePHIDs` might be have a simple version of that key
    as an alias, like `example`.
    Aliases work just like the primary key when prefilling forms. They make it
    easier to remember and use HTTP parameters by providing more natural ways to do
    some prefilling.
    For example, if a field has `examplePHIDs` as a key but has aliases `example`
    and `examples`, these three URIs will all do the same thing:
    ```
    %s?examplePHIDs=...
    %s?examples=...
    %s?example=...
    ```
    If a URI specifies multiple default values for a field, the value using the
    primary key has precedence. Generally, you can not mix different aliases in
    a single URI.
    ' => 'Alias
    -------
    Les alias sont des clés alternatives reconnues pour un champ. Par exemple, un champ avec une clé complexe comme `examplePHIDs` peut avoir une version simple de cette clé comme alias, comme `example`.
    Les alias fonctionnent exactement comme la clé primaire lors du pré-remplissage des formulaires. Ils facilitent la mémorisation et l\'utilisation des paramètres HTTP en fournissant des moyens plus naturels de faire certains pré-remplissages.
    Par exemple, si un champ a `examplePHIDs` comme clé mais a les alias `example` et `examples`, ces trois URI feront tous la même chose :
    ```
     %s?examplePHIDs=...
     %s?examples=...
     %s?example=...
    ```
    Si un URI spécifie plusieurs valeurs par défaut pour un champ, la valeur utilisant la clé primaire a la priorité. En règle générale, vous ne pouvez pas mélanger différents alias dans un seul URI.',
      'Transaction edge specification contains unexpected key "%s".' => 'La spécification d’arête de transaction contient une clé inattendue « %s ».',
      'Support Applications' => 'Prendre en charge des applications',
      'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.' => 'Le mode pour les pièces jointes « %s » (pour le fichier « %s ») n\'est pas valide. Les modes valides sont : %s.',
      'Transaction must have a PHID before calling %s!' => 'La transaction doit avoir un PHID avant d’appeler %s !',
      'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.' => 'Le moteur de modification (« %s ») n’a renvoyé aucune configuration de moteur intégrée, mais un moteur de modification doit avoir au moins une configuration.',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'Ce groupe de transactions exige une authentification à facteurs multiples (MFA) pour s’appliquer, mais l’éditeur n’a pas été configuré avec une requête. Ce flux de travail ne peut effectuer aucun contrôle MFA.',
      'Working Set' => 'Ensemble de travail',
      'Field Types
    -----------
    Fields in this form have the types described in the table below. This table
    shows how to format values for each field type.' => 'Types de champs
    -----------
    Les types de champs de ce formulaire sont décrits dans le tableau ci-dessous. Ce tableau montre comment formater les valeurs pour chaque type de champ.',
      'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.' => 'La configuration du sous-type n’est pas valide : aucun sous-type n’est défini avec la clé « %s ». Ce sous-type est obligatoire et doit être défini.',
      'Make comments.' => 'Faire des commentaires.',
      'No Manage Permission' => 'Aucune autorisation de gestion',
      'Via Content Source' => 'Via la source de contenu',
      'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.' => 'L’objet en cours de modification ne met en œuvre aucune interface standard (comme « PhabricatorSubscribableInterface ») permettant de générer automatiquement des copies conformes (CC) à d’autres destinataires ou abonnés. Remplacez la méthode « getMailCC() » et générez les copies explicitement.',
      'Really remove this comment?' => 'Supprimer vraiment ce commentaire ?',
      'No MFA' => 'Pas d’authentification à facteurs multiples (MFA)',
      '%s removed %s contributor(s) for %s: %s.' => '%s a retiré %s contributeur(s) pour %s : %s.',
      'Export format ("%s") is not enabled.' => 'Le format d’exportation (« %s ») n’est pas activé.',
      'This object has been locked.' => 'Cet objet a été verrouillé.',
      'Changed Policy' => 'Politique changée',
      'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier".' => 'Les appels à « transaction.search » doivent spécifier soit un « objectType » (type d’objet), soit un « objectIdentifier » (identifiant d’un objet).',
      'You can not apply transactions which already have IDs/PHIDs!' => 'Vous ne pouvez appliquer aucune transaction ayant déjà un identifiant ou PHID !',
      'Forms' => 'Formulaires',
      'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".' => 'Le mode pour les pièces jointes (pour le fichier « %s ») n\'est pas valide. Une chaîne était attendue, il a été trouvé « %s ».',
      'Hide Edit Forms' => 'Masquer les formulaires de modification',
      'Disable Form' => 'Désactiver le formulaire',
      'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => 'Ce formulaire (« %s ») n’est pas marqué comme formulaire de modification, il ne peut donc pas être utilisé pour modifier des objets.',
      'Export data to a flat file (JSON, CSV, Excel, etc.).' => 'Exporter les données vers un fichier plat (JSON, CSV, Excel, etc.).',
      'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'Vous devez fournir des certificats multi-facteurs pour commenter ou faire des modifications, mais vous n’avez pas configuré l’authentification à facteurs multiples sur votre compte.',
      '%s edited a custom field on %s.' => '%s a modifié un champ personnalisé sur %s.',
      'Mention' => 'Mention',
      'export' => 'exporter',
      'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'L’appel à « setShouldRequireMFA() » arrive trop tard : cet éditeur a déjà vérifié les exigences MFA.',
      'You have not selected any objects to edit.' => 'Vous n’avez sélectionné aucun objet à modifier.',
      'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => 'L’exécution a déjà commencé avec la tâche « %s ». Les tâches ne peuvent pas être reconfigurées une fois qu’elles ont été lancées.',
      'Post Comment' => 'Publier un commentaire',
      '%s moved this task to %s on the %s board.' => '%s a déplacé cette tâche vers %s sur le tableau %s.',
      'Enable this form? Users who can see it will be able to use it to create objects.' => 'Activer ce formulaire ? Les utilisateurs qui peuvent le voir pourront l\'utiliser et créer des objets.',
      'Specify one or more queries to export with "--query".' => 'Spécifiez une ou plusieurs requêtes à exporter avec  « --query ».',
      '%s changed the order in which this form appears in the "Edit" menu.' => '%s a changé l’ordre dans lequel ce formulaire apparaît dans le menu « Modifier ».',
      'View Herald Transcript' => 'Voir la transcription Herald',
      'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.' => 'Démarquer ce formulaire en tant que formulaire de création ? Il fonctionnera toujours correctement, mais ne sera plus accessible directement depuis le menu « Créer » de l’application.',
      'You can not select this %s policy, because you would no longer be able to %s the object.' => 'Vous ne pouvez pas selectionner cette politique %s, car vous ne pourrez plus %s l\'objet.',
      'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => 'La suppression d\'un commentaire empêche quiconque (y compris vous) de le lire. La suppression d\'un commentaire masque également l\'historique des modifications du commentaire et l\'empêche d\'être modifié.',
      '%s removed %s contributor(s): %s.' => '%s a retiré %s contributeur(s) : %s.',
      'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.' => 'La méthode « queuePublishing() » de l’éditeur de publication a été appelée, mais aucun objet publiable n’est présent. Cet éditeur de publication n’est pas prêt à publier.',
      '%s created %s in the %s space.' => '%s a créé %s dans l\'espace %s .',
      '%s added this form to the "Create" menu.' => '%s a ajouté ce formulaire au menu « Création ».',
      'This %s already has that interact policy.' => '%s a déjà cette politique d\'interaction.',
      'You will be required to provide multi-factor credentials to make changes.' => 'Vous devrez fournir les certificats multi-facteurs pour faire des modifications.',
      '%s renamed this form from %s to %s.' => '%s a renommé ce formulaire de « %s » en « %s ».',
      'Transaction edge data must either be the edge PHID or an edge specification dictionary.' => 'Les données d’arête de transaction doivent être soit le PHID de l’arête, soit un dictionnaire de spécification d’arête.',
      '**Locked** fields are visible in the form, but their values can not be changed
    by the user.
    **Hidden** fields are not visible in the form.
    Any assigned default values are still respected, even if the field is locked
    or hidden.' => 'Les champs **verrouillés** sont visibles dans le formulaire, mais leurs valeurs ne peuvent pas être modifiées par l\'utilisateur.
    Les champs **masqués** ne sont pas visibles dans le formulaire.
    Les valeurs par défaut attribuées restent prises en compte même si le champ est verrouillé ou masqué.',
      'Unmark as Edit Form' => 'Démarquer comme formulaire de modification',
      'Method Details' => 'Détails de la méthode',
      'No Default Create Forms' => 'Aucun formulaire de création par défaut',
      'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'La configuration du sous-type est non valide: le sous-type ayant pour clé « %s » spécifie à la fois des sous-types et des formulaires enfants. Choisissez l\'un ou l\'autre, mais non pas les deux.',
      'You can not sign a transaction group that has no other effects.' => 'Vous ne pouvez pas signer un groupe de transactions qui n\'a pas d\'autres effets.',
      'Some of your %s action(s) have no effect:' => 'Une ou plusieurs de vos %s action(s) n’ont aucun effet :',
      'No Edit Forms' => 'Aucun formulaire de modification',
      'Mark this form as a create form? It will appear in the application "Create" menus by default.' => 'Marquer ce formulaire comme formulaire de création ? Il apparaîtra dans les menus « Créer » de l’application par défaut.',
      '%s added %s unsubscriber(s) for %s: %s.' => '%s a ajouté %s désabonné(s) pour %s : %s.',
      'Calls to "transaction.search" must not specify both an "objectType" and an "objectIdentifier".' => 'Les appels à « transaction.search » ne doivent pas spécifier à la fois un « objectType » (type d’objet) et un « objectIdentifier » (identifiant d’un objet).',
      'Edit Defaults' => 'Modifier les valeurs par défaut',
      'Encryption Required' => 'Chiffrement exigé',
      'Form name is required.' => 'Le nom du formulaire est obligatoire.',
      'No object exists with ID "%s".' => 'Aucun objet n’existe avec l’identifiant « %s ».',
      'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => 'Vous n’avez encore aucun facteur attaché à votre compte pour l’authentification à facteurs multiples (MFA), vous ne pouvez donc pas signer ce groupe de transactions avec MFA. Ajoutez MFA à votre compte dans vos Préférences.',
      '%s wrote:' => '%s a écrit :',
      'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => 'L’extension « %s » définit un groupe de modification en masse avec la même clé (« %s ») que l’éditeur principal ou une autre extension. Chaque groupe de modification en masse doit avoir une clé unique.',
      'Save Edit Order' => 'Enregistrer la modification de l’ordre',
      'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.' => 'Le fichier « %s » n\'est pas valide : il n\'a pas pu être chargé ou vous n\'avez pas l\'autorisation de le visualiser. Vous devez pouvoir voir un fichier pour l\'attacher à un objet.',
      '%s removed %s unsubscriber(s): %s.' => '%s a retiré %s abonné(s) : %s.',
      'EMAIL PREFERENCES' => 'PRÉFÉRENCES DE COURRIEL',
      '%s edited this object (transaction type "%s").' => '%s a modifié cet objet (type de transaction « %s »).',
      'Mark as "Edit" Form' => 'Marquer comme formulaire de « Modification »',
      '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs observateurs pour %s ; en a ajouté %s : %s; en a retiré %s : %s.',
      'This %s already has that edit policy.' => 'Ce %s a déjà cette politique de modification.',
      'Conversation Locked' => 'Conversation verrouillée',
      'You do not have permission to configure forms for this application.' => 'Vous n’avez pas la permission de configurer les formulaires pour cette application.',
      'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.' => 'La transaction (« %s », de type « %s ») exige un descripteur (« %s ») qu’elle n’a pas chargé.',
      'Choose the object **subtype** that this form should create and edit.' => 'Choisissez l’objet **sous-type** (subtype) que ce formulaire doit créer et modifier.',
      'Unmark this form as an edit form? It will no longer be able to be used to edit objects.' => 'Ne plus marquer ce formulaire comme formulaire de modification ? Il ne pourra plus être utilisé pour modifier des objets.',
      'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => 'Configurer la tâche de travail en masse __id__ pour qu’elle s\'exécute silencieusement (sans envoyer de courriel ni émettre des notifications).',
      'User Guide: Customizing Forms' => 'Guide de l’utilisateur : personnalisation des formulaires',
      'Make Editable' => 'Rendre modifiable',
      '%s disabled this form.' => '%s a désactivé ce formulaire.',
      '%s created an object: %s.' => '%s a créé un objet : %s.',
      'Make this builtin form editable?' => 'Rendre ce formulaire intégré modifiable ?',
      'Duplicate Form' => 'Dupliquer le formulaire',
      'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.' => 'Glissez et déposez des champs pour modifier leur priorité pour les modifications. Lorsqu’un utilisateur modifiera un objet, il verra le premier formulaire de cette liste qu’il a la permission de voir.',
      '%s added %d subscriber(s): %s.' => '%s a ajouté %s abonné(s) : %s.',
      'Unmark as "Create" Form' => 'Démarquer comme formulaire de « Création »',
      'When creating objects in the web interface, you can use HTTP parameters to
    prefill fields in the form. This allows you to quickly create a link to a
    form with some of the fields already filled in with default values.
    To prefill a form, start by finding the URI for the form you want to prefill.
    Do this by navigating to the relevant application, clicking the "Create" button
    for the type of object you want to create, and then copying the URI out of your
    browser\'s address bar. It will usually look something like this:
    ```
    %s
    ```
    However, `phorge.example.com` will be the domain where your copy of this
    software is installed, and `application/` will be the URI for an application.
    Some applications have multiple forms for creating objects or URIs that look a
    little different than this example, so the URI may not look exactly like this.
    To prefill the form, add properly encoded HTTP parameters to the URI. You
    should end up with something like this:
    ```
    %s?title=Platypus&body=Ornithopter
    ```
    If the form has `title` and `body` fields of the correct types, visiting this
    link will prefill those fields with the values "Platypus" and "Ornithopter"
    respectively.
    The rest of this document shows which parameters you can add to this form and
    how to format them.
    Supported Fields
    ----------------
    This form supports these fields:
    ' => 'Lors de la création d\'objets dans l\'interface Internet, vous pouvez utiliser des paramètres HTTP pour préremplir les champs du formulaire. Cela vous permet de créer rapidement un lien vers un formulaire dont certains champs sont déjà remplis avec des valeurs par défaut.
    Pour préremplir un formulaire, commencez par trouver l\'URI du formulaire que vous souhaitez préremplir. Pour ce faire, accédez à l\'application concernée, cliquez sur le bouton « Créer » (Create) pour le type d\'objet que vous souhaitez créer, puis copiez l\'URI depuis la barre d\'adresse de votre navigateur. Cela ressemblera généralement à ceci :
    ```
    %s
    ```
    Cependant, `your.install.com` sera le domaine où votre copie de ce logiciel est installée, et `application/` sera l\'URI d\'une application. Certaines applications ont plusieurs formulaires pour créer des objets ou des URI qui semblent un peu
    différents de cet exemple, donc l\'URI peut ne pas ressembler exactement à ceci.
    Pour préremplir le formulaire, ajoutez des paramètres HTTP correctement codés à l\'URI. Vous devriez obtenir quelque chose comme ceci :
    ```
    %s?title=Platypus&body=Ornithopter
    ```
    Si le formulaire comporte des champs `title` et `body` de types corrects, la visite de ce lien préremplira ces champs avec respectivement les valeurs « Platypus » et « Ornithopter ».
    Le reste de ce document montre quels paramètres vous pouvez ajouter à ce formulaire et comment les formater.
    Champs pris en charge
    ----------------
    Ce formulaire prend en charge les champs suivants :',
      'Exception when processing transaction of type "%s": %s' => 'Exception lors du traitement d’une transaction de type « %s » : %s',
      'In call to "transaction.search", specified "objectIdentifier" ("%s") does not exist.' => 'Dans l’appel à « transaction.search », l’identifiant d’objet (« objectIdentifier ») spécifié (« %s ») n’existe pas.',
      '%s created this object in space %s.' => '%s a créé cet objet dans l’espace %s.',
      'Engine: Edit' => 'Moteur : modifier',
      '%s changed the interact policy for %s.' => '%s a modifié la politique d\'interaction de %s.',
      '%s removed %s watcher(s) for %s: %s.' => '%s a retiré %s suiveur(s) pour %s : %s.',
      '%s moved %s from %s to %s on the %s board.' => '%s a déplacé %s de %s vers %s sur le tableau %s.',
      'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").' => 'Le moteur de modification « %s » a créé ou chargé un objet non valide : l’objet doit réellement être un objet, mais il est d’un autre type (« %s »).',
      '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs désabonné(s) pour %s ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s' => 'Tentative d’application d’une transaction (de classe « %s », avec le type « %s ») qui n’a pas été correctement construite : %s',
      '%s modified %s attached file(s): %s.' => '%s a modifié %s fichier(s) joint(s) : %s .',
      'Unable to load transactions: %s.' => 'Impossible de charger les transactions : %s.',
      'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.' => 'La configuration du sous-type n’est pas valide : le sous-type avec la clé « %s » n\'a aucun nom. Les sous-types doivent avoir un nom.',
      'Comment to add, formatted as remarkup.' => 'Commentaire à ajouter, formaté en « remarkup ».',
      'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.' => 'La transaction avec la clé « %s » a un type « %s » non valide. Ce type n’est pas reconnu. Les types valides sont : %s.',
      'Show Only Create Forms' => 'Montrer uniquement les formulaires de création',
      'You can not interact with this object because it is locked.' => 'Vous ne pouvez pas interagir avec cet objet car il est verrouillé.',
      'This object is already in that space.' => 'Cet objet est déjà dans cet espace.',
      'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => 'Attendait que « newTimelineView() » renvoie un objet de classe « %s » (dans le moteur « %s »).',
      'This %s already has that join policy.' => 'Ce %s a déjà cette politique d’adhésion.',
      '%s shifted this object from the %s space to the %s space.' => '%s a déplacé cet objet de l’espace %s vers l’espace %s.',
      '%s changed the interact policy from "%s" to "%s".' => '%s a modifié la politique d\'interaction de « %s » à « %s ».',
      'Create Form' => 'Créer un formulaire',
      '%s moved this task on %s board(s): %s.' => '%s a déplacé cette tâche sur %s tableau(x) : %s.',
      'Unable to load query for transaction object "%s"!' => 'Impossible de charger la requête pour l’objet de transaction « %s » !',
      'Changed Subscribers' => 'Abonnés modifiés',
      'Comment for this transaction was not loaded.' => 'Le commentaire pour cette transaction n’a pas été chargé.',
      'Raw Comment' => 'Commentaire brut',
      '%s created this object with interact policy "%s".' => '%s a créé cet objet avec la politique d\'interaction « %s ».',
      'Save Create Order' => 'Enregistrer la création d’un ordre',
      '%s updated subscribers of %s.' => '%s a modifié des abonnés de %s.',
      '%s created this object.' => '%s a créé cet objet.',
      'Unknown export format ("%s"). Known formats are: %s.' => 'Format d’exportation inconnu (« %s »). Les formats connus sont : %s.',
      'You have not chosen any edits to apply.' => 'Vous n’avez choisi aucune modification à appliquer.',
      'No herald adapter specified.' => 'Aucun adaptateur Herald spécifié.',
      'Comment History' => 'Historique du commentaire',
      'Unable to load object with PHID "%s"!' => 'Impossible de charger l’objet avec le PHID « %s » !',
      'Edit Form' => 'Modifier le formulaire',
      'You can not apply transactions which already have %s!' => 'Vous ne pouvez pas appliquer des transactions qui ont déjà %s !',
      '%s edited an edge.' => '%s a modifié une arête.',
      '%s unsubscribed.' => '%s s\'est désabonné',
      '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs contributeur(s) pour %s ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.' => 'La configuration du sous-type n’est pas valide : deux sous-types utilisent la même clé (« %s »). Chaque sous-type doit avoir une clé unique.',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.' => 'Le paramètre « %s » doit contenir une liste de descriptions de transaction, mais il manque un champ « type » à l’élément avec la clé « %s ». Chaque transaction doit avoir un champ de type.',
      'This transaction is supposed to have an %s set, but it does not!' => 'Cette transaction est supposé avoir un %s défini, mais ce n’est pas le cas !',
      'Comment Preview' => 'Aperçu du commentaire',
      'Untitled Form' => 'Formulaire sans titre',
      '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs abonné(s) pour %s ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Unsupported bulk edit type "%s".' => 'Type de modification en masse « %s » non pris en charge.',
      'Validation errors:' => 'Erreurs de validation :',
      'This object has no select fields.' => 'Cet objet n’a aucun de champ de sélection.',
      'Mentioned User' => 'Utilisateur mentionné',
      '%s created this form.' => '%s a créé ce formulaire.',
      'List of PHIDs to set.' => 'Liste des PHID à définir.',
      'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.' => 'Ce commentaire a été signé avec une authentification multi-facteur (MFA), vous devrez donc fournir des informations d’identification MFA pour y apporter des modifications.',
      '%s added %s unsubscriber(s): %s.' => '%s a ajouté %s désabonné(s) : %s.',
      'EDIT DETAILS' => 'MODIFIER LES DÉTAILS',
      '%s edited a custom field (with key "%s").' => '%s a modifié un champ personnalisé (avec la clé « %s »).',
      'No Create Permission' => 'Aucune permission de création',
      'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").' => 'Les transactions d’arête doivent avoir des PHID ou des spécifications d’arête comme valeurs (valeur « %s » trouvée sur la transaction de type « %s »).',
      'Remove Action: %s' => 'Supprimer l’action : %s',
      'Show Only Edit Forms' => 'Afficher uniquement les formulaires de modification',
      'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.' => 'Il s’agit d’une méthode **ApplicationEditor** standard qui vous permet de créer et de modifier des objets en appliquant des transactions. Pour obtenir de la documentation sur ces points de terminaison, consultez **[[ %s | API Conduit : utilisation de la modification des points de terminaison ]]**.',
      'HTTP Parameters: %s' => 'Paramètres HTTP : %s',
      'Edit Form: %s' => 'Modifier le formulaire : %s',
      '%s moved this task from %s to %s on the %s board.' => '%s a renommé cette tâche de %s en %s sur le tableau %s.',
      'List of PHIDs to remove.' => 'Liste des PHID à retirer.',
      'Create New Form' => 'Créer un nouveau formulaire',
      'This application is not configured with any forms for creating objects that are visible to you and enabled.' => 'Cette application n’est configurée avec aucun formulaire de création d’objets qui soit visible par vous et activé.',
      'Select Fields
    -------------
    Some fields support selection from a specific set of values. When prefilling
    these fields, use the value in the **Value** column to select the appropriate
    setting.
    ' => 'Sélection prédéfinie de champs
    -------------
    Certains champs prennent en charge la sélection à partir d\'un ensemble spécifique de valeurs. Lorsque vous préremplissez ces champs, utilisez la valeur de la colonne **Valeur** (Value) pour sélectionner le paramètre approprié.',
      'Transaction requires handles and it did not load them.' => 'La transaction exige des descripteurs mais ne les a pas chargées.',
      '(Show Details)' => '(Afficher les détails)',
      '%s edited this %s.' => '%s a modifié ce %s.',
      '%s edited a custom field.' => '%s a modifié un champ personnalisé.',
      'Apply remaining actions?' => 'Exécuter les actions restantes ?',
      'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'Deux groupes de modification en masse ont la même clé (« %s »). Chaque groupe de modification en masse doit avoir une clé unique.',
      'If the output file already exists, overwrite it instead of raising an error.' => 'Si le fichier de sortie existe déjà, l’écraser au lieu de lever une erreur.',
      'List of PHIDs to add.' => 'Liste des PHID à ajouter.',
      'You have not moved this object to any columns it is not already in.' => 'Vous n’avez déplacé cet objet dans aucune colonne dans laquelle il ne se trouvait pas déjà.',
      'Failed to reload object identified by monogram "%s" when querying by PHID.' => 'Échec du rechargement de l’objet identifié par le monogramme « %s » lors de l’interrogation par PHID.',
      'Configure Form' => 'Configurer le formulaire',
      'Edit Locked Object' => 'Modifier l’objet verrouillé',
      'You can not post an empty comment.' => 'Vous ne pouvez publier aucun commentaire vide.',
      'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => 'Le champ « %s » possède une clé de groupe de modification en masse (« %s ») mais sans groupe de modification en masse correspondant.',
      'Exported data to "%s".' => 'Exporter les données vers « %s ».',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s a modifié un ou plusieurs abonnés ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.' => 'L’extension de courrier (« %s ») définit un modèle de timbre avec la même clé (« %s ») qu’un autre modèle. Chaque modèle de timbre doit avoir une clé unique.',
      'File attachment transaction must have a map of files to attachment modes, found "%s".' => 'La transaction de pièces jointes doit contenir une table (array) des fichiers en mode de pièces jointes, trouvée « %s ».',
      '%s updated %s attached file(s), added %s: %s; removed %s: %s.' => '%s a mis à jour %s fichier(s) joint(s), à savoir %s a/ont été ajouté(s) : %s ; %s supprimé(s) : %s.',
      '%s changed the order in which this form appears in the "Create" menu.' => '%s a changé l’ordre dans lequel ce formulaire apparaît dans le menu « Créer ».',
      '%s named this form %s.' => '%s a nommé ce formulaire %s.',
      '%s added %s subscriber(s) for %s: %s.' => '%s a ajouté %s abonné(s) pour %s : %s.',
      '%s mentioned this in %s.' => '%s a mentionné ceci dans %s.',
      '%s created this object with join policy "%s".' => '%s a créé cet objet avec la politique d’abonnement « %s ».',
      'Subtype configuration is invalid: it must be a list of subtype specifications.' => 'La configuration du sous-type n’est pas valide : elle doit être une liste de spécifications du sous-type.',
      'Transaction Summary' => 'Résumé de la transaction',
      'Use Form' => 'Utiliser le formulaire',
      'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => 'La commande « !%s » n’est pas une commande de courriel prise en charge. Les commandes valides pour cet objet sont : %s.',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'La paramètre « %s » doit contenir une liste de descriptions de transaction, mais l’élément avec la clé « %s » n’est pas un dictionnaire.',
      'Edit Comment' => 'Modifier un commentaire',
      '%s marked this form as an edit form.' => '%s a marqué ce formulaire en tant que formulaire de modification.',
      'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").' => 'Les transactions d’arête doivent avoir des PHID de destination comme dans les listes d’arêtes (clé « %s » trouvée sur une transaction de type « %s »).',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'Ce groupe de transactions exige une authentification à facteurs multiples (MFA) pour s’appliquer, mais l’éditeur n’a pas été configuré avec une URI d’annulation. Ce flux de travail ne peut effectuer aucun contrôle MFA.',
      'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).' => 'Le moteur de modification (« %s ») a renvoyé des configurations de moteur intégrées, mais il manque une clé intégrée à l’une d’entre elles (avec la clé « %s »). Fournissez une clé intégrée pour chaque configuration (vous pouvez l’omettre de la première configuration de la liste pour attribuer automatiquement la clé par défaut).',
      'Monogram "%s" does not identify a valid object.' => 'Le monogramme « %s » n’identifie pas un objet valide.',
      'Silent Edit' => 'Modification silencieuse',
      'Reorder Fields' => 'Réordonner les champs',
      'Task has invalid task data.' => 'La tâche contient des données de tâche non valides.',
      'Add Action...' => 'Ajouter une action...',
      'Detached' => 'Détaché',
      'This transaction should generate its %s automatically, but has already had one set!' => 'Cette transaction devrait générer son %s automatiquement, mais en a déjà un défini !',
      '%s removed this form from the "Create" menu.' => '%s a retiré ce formulaire du menu « Création ».',
      'Type a form name...' => 'Saisissez un nom de formulaire...',
      'Custom field transaction \'%s\' does not implement integration for %s.' => 'La transaction de champ personnalisé « %s » ne met en œuvre aucune intégration pour %s.',
      'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'Les requêtes spécifiées utilisent différents moteurs : « %s » utilise le moteur « %s », et non pas « %s ». Toutes les requêtes doivent s’exécuter sur le même moteur.',
      '%s changed the join policy from "%s" to "%s".' => '%s a changé la politique d’adhésion de « %s » en « %s ».',
      '%s updated subscribers...' => '%s a modifié des abonnés...',
      'Remove Comment' => 'Retirer le commentaire',
      'Transaction (of type "%s") has no effect.' => 'La transaction (de type « %s ») n’a aucun effet.',
      'Make Builtin Editable' => 'Rendre le formulaire intégré modifiable',
      'Editor ("%s") has no mail stamp template with provided key ("%s").' => 'L’éditeur (« %s ») n’a aucun modèle de timbre de courrier avec la clé fournie (« %s »).',
      'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.' => 'Vous ne pouvez pas déplacer cet objet dans l’espace sélectionné, car l’espace n’existe pas ou vous n’y avez pas accès.',
      'You must choose a space for this object.' => 'Vous devez choisir un espace pour cet objet.',
      'Edit Forms' => 'Formulaires de modification',
      'Mark as Create Form' => 'Marquer comme formulaire de création',
      '%s added %s subscriber(s): %s.' => '%s a ajouté %s abonné(s) : %s.',
      'Unmark Form' => 'Démarquer le formulaire',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.' => 'Le paramètre « %s » doit contenir une liste de descriptions de transaction, mais il manque un champ « value » (valeur) à l’élément avec la clé « %s ». Chaque transaction doit avoir un champ de valeur.',
      'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'Le sous-type \'\'%s\'\' n\'est pas valide: les clés du sous-type ne peuvent comporter que des caractères minuscules latins (de \'\'a\'\' à \'\'z\'\').',
      'Capability not supported.' => 'Capacité non prise en charge.',
      'Use "--id" to choose a bulk job to make silent.' => 'Utiliser « --id » pour choisir une tâche en masse à rendre silencieuse.',
      'Change Form Subtype' => 'Changer le sous-type de formulaire',
      '%s added %s contributor(s): %s.' => array(
        array(
          '%s a ajouté %s contributeur : %s.',
          '%s a ajouté %s contributeurs : %s.',
        ),
      ),
      '%s removed %s watcher(s): %s.' => '%s a retiré %s suiveur(s) : %s.',
      '%s created this object with edit policy "%s".' => '%s a créé cette objet avec la politique de modification « %s ».',
      'Unable to load bulk job with ID "%s".' => 'Impossible de charger la tâche de travail en masse avec l’identifiant « %s ».',
      '%s added %s watcher(s): %s.' => '%s a ajouté %s suiveur(s) : %s.',
      'Task has no object PHID!' => 'La tâche n’a aucun PHID d’objet !',
      'Transaction type \'%s\' is missing an internal apply implementation!' => 'Il manque au type de transaction « %s » une mise en œuvre interne pour l’appliquer !',
      '%s attached files...' => '%s a joint des fichiers...',
      'Old Mode' => 'Ancien mode',
      'Flag "--overwrite" has no effect when outputting to stdout.' => 'Le drapeau « --overwrite » (écraser) n’a aucun effet lors de la sortie vers le flux de sortie standard.',
      'You do not have permission to create these objects.' => 'Vous n’avez pas la permission de créer ces objets.',
      'Export the data selected by one or more queries.' => 'Exporter les données sélectionnées par une ou plusieurs requêtes.',
      'Bulk Edit' => 'Modification en masse',
      'Write output to a file. If omitted, output will be sent to stdout.' => 'Écrire la sortie dans un fichier. S’il est omis, la sortie sera envoyée vers le flux de sortie standard.',
      'You will be required to provide multi-factor credentials to comment or make changes.' => 'Vous devrez fournir les certificats multi-facteurs pour commenter ou faire des modifications.',
      '%s shifted %s from the %s space to the %s space.' => '%s a déplacé %s de l’espace %s vers l’espace %s.',
      'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.' => 'Le moteur de modification (« %s ») a renvoyé des configurations de moteur intégrées, mais au moins deux spécifient la même clé intégrée (« %s »). Les moteurs doivent avoir des clés intégrées uniques.',
      'This comment has been deleted.' => 'Ce commentaire a été supprimé.',
      'Add Another Action' => 'Ajouter une autre action',
      'Template Objects
    ----------------
    Instead of specifying each field value individually, you can specify another
    object to use as a template. Some of the initial fields will be copied from the
    template object.
    Specify a template object with the `template` parameter. You can use an ID,
    PHID, or monogram (for objects which have monograms). For example, you might
    use URIs like these:
    ```
    %s?template=123
    %s?template=PHID-WXYZ-abcdef...
    %s?template=T123
    ```
    You can combine the `template` parameter with HTTP parameters: the template
    object will be copied first, then any HTTP parameters will be read.
    When using `template`, these fields will be copied:' => 'Objets de modèle
    ----------------
    Au lieu de spécifier chaque valeur de champ individuellement, vous pouvez spécifier un autre objet à utiliser comme un modèle. Certains des champs initiaux seront copiés à partir de l\'objet de modèle.
    Spécifiez un objet de modèle avec le paramètre `template`. Vous pouvez utiliser un ID, un PHID ou un monogramme (pour les objets qui ont des monogrammes). Par exemple, vous pouvez utiliser des URI comme ceux-ci :
    ```
    %s?template=123
    %s?template=PHID-WXYZ-abcdef...
    %s?template=T123
    ```
    Vous pouvez combiner le paramètre `template` avec des paramètres HTTP : l\'objet de modèle sera copié en premier, puis tous les paramètres HTTP seront lus.
    Lorsque vous utilisez `template`, ces champs seront copiés :',
      'Hide Create Forms' => 'Masquer les formulaires de création',
      'Configure a bulk job to execute silently.' => 'Configurer une tâche en masse pour qu’elle s’exécute silencieusement.',
      'Custom field transaction has no \'%s\'!' => 'La transaction de champ personnalisé n’a aucun « %s » !',
      '%s signed these changes with MFA.' => '%s a signé ces modifications avec MFA.',
      'SearchEngine class ("%s") does not support data export.' => 'La classe SearchEngine (« %s ») ne prend pas en charge l’exportation de données.',
      '%s unmarked this form as an edit form.' => '%s a démarqué ce formulaire en tant que formulaire de modification.',
      'Multiple search engines match "%s": %s.' => 'Plusieurs moteurs de recherche correspondent à « %s » : %s.',
      'Mark as "Create" Form' => 'Marquer comme formulaire de « Création »',
      'Failed to base64_decode() value for key "%s".' => 'Échec de « base64_decode() » pour décoder la valeur en base64 associée à la clé « %s ».',
      'Create another form with the same settings as this one?' => 'Créer un autre formulaire avec les mêmes paramètres que celui-ci ?',
      'Change Field Order' => 'Modifier l’ordre des champs',
      'Forms must have a name.' => 'Les formulaires doivent avoir un nom.',
      '%s changed the default values for field %s.' => '%s a modifié les valeurs par défaut pour le champ %s.',
      'This EditField does not provide a Bulk EditType with key "%s".' => 'Ce champ de modification ne fournit aucun type de modification en masse avec la clé « %s ».',
      'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration' => 'Le moteur de modification (« %s ») a renvoyé des configurations de moteur intégrées, mais aucune n’est marquée par défaut et la première configuration a déjà une clé intégrée différente. Marquez une configuration intégrée par défaut ou omettez la clé de la première configuration.',
      '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => array(
        array(
          array(
            '%s a marqué %s commentaire en ligne comme fait et %s commentaire en ligne comme non fait.',
            '%s a marqué %s commentaire en ligne comme fait et %s commentaires en ligne comme non faits.',
          ),
          array(
            '%s a marqué %s commentaires en ligne comme faits et %s commentaire en ligne comme non fait.',
            '%s a marqué %s commentaires en ligne comme faits et %s commentaires en ligne comme non faits.',
          ),
        ),
      ),
      '!%s (or %s)' => '!%s (ou %s)',
      '%s reordered the fields in this form.' => '%s a réordonné les champs de ce formulaire.',
      'This is a preview of the current form configuration.' => 'Ceci est une prévisualisation de la configuration actuelle du formulaire.',
      '%s changed the edit policy for %s.' => '%s a modifié la politique de modification de %s.',
      'All Forms' => 'Tous les formulaires',
      'This %s already has that view policy.' => 'Ce %s a déjà cette politique de visibilité.',
      '%s subscribed.' => '%s s\'est abonné',
      'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.' => 'Les transactions sont visibles pour les utilisateurs qui peuvent voir l’objet sur lequel une action a été effectuée. Certaines transactions (en particulier les commentaires) sont modifiables par l’auteur de la transaction.',
      'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.' => 'La configuration du sous-type n’est pas valide : le sous-type avec la clé « %s » spécifie qu’il peut muter en sous-type « %s », mais ce n’est pas un sous-type valide.',
      'Subtype "%s" is not a valid subtype.' => 'Le sous-type « %s » n’est pas un sous-type valide.',
      'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'La requête « %s » est inconnue. Pour exécuter une requête intégrée comme « all » ou « active », précisez également le moteur de recherche avec « --class ».',
      'The source object has a comment which mentions the destination object.' => 'L’objet source a un commentaire qui mentionne l’objet destination.',
      '%s removed %s unsubscriber(s) for %s: %s.' => '%s a retiré %s désabonné(s) pour %s : %s.',
      'For full details, run `/bin/mail show-inbound --id %d`' => 'Pour plus de détails, exécutez `/bin/mail show-inbound --id %s`',
      'This object is locked. Edit it anyway?' => 'Cet objet est verrouillé. Le modifier quand même ?',
      '%s Action(s) With No Effect' => '%s action(s) sans effet',
      'Configured job "%s" to run silently.' => 'Tâche « %s » configurée pour s’exécuter silencieusement.',
      'View Form Configurations' => 'Afficher les configurations de formulaire',
      'In call to "transaction.search", specified "objectType" ("%s") is unknown. Valid object types are: %s.' => 'Dans l’appel à « transaction.search », le type d’objet (« objectType ») spécifié (« %s ») est inconnu. Les types d’objet valides sont : %s.',
      '%s removed %s attached file(s): %s.' => '%s a supprimé %s fichier(s) joint(s) : %s.',
      '%s ("%s")' => '%s (« %s »)',
      'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.' => 'Les commentaires sont visibles par les utilisateurs qui peuvent voir l’objet qui a été commenté. Les commentaires peuvent être modifiés par leurs auteurs.',
      'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => '« %s » n’est pas valide pour la transaction de champ utilisateur ; le champ « %s » est désactivé ou n’existe pas.',
      'This object has no fields with aliases.' => 'Cet objet n’a aucun champ avec des alias.',
      'Do you want to post your comment anyway?' => 'Voulez-vous publier votre commentaire malgré tout ?',
      'All Edit Engines' => 'Tous les moteurs de modification',
      '%s Action(s) Have No Effect' => '%s action(s) n’a/ont aucun effet',
      'This EditField does not provide a Conduit EditType with key "%s".' => 'Ce champ de modification ne fournit aucun type de modification Conduit avec la clé « %s ».',
      'None of the fields on this object support templating.' => 'Aucun des champs de cet objet ne prend en charge l’utilisation de modèles.',
      'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.' => 'La transaction d’arête inclut une arête de type « %s », mais la transaction est de type « %s ». Chaque transaction d’arête ne doit altérer des arêtes que d’un seul type.',
      'This comment was removed by %s.' => 'Ce commentaire a été retiré par %s.',
      'Apply Remaining Actions' => 'Appliquer les actions restantes',
      '%s edited watcher(s), added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs observateurs ; en a ajouté %s : %s ; en a retiré %s : %s.',
      '%s edited unsubscriber(s), added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs désabonné(s) ; en a ajouté %s : %s ; en a retiré %s : %s.',
      '%s changed the join policy for %s.' => '%s a modifié la politique d’adhésion de %s.',
      'Object Locked' => 'Objet verrouillé',
      'Edit Form Configuration' => 'Modifier la configuration du formulaire',
      'Query "%s" is not a recognized query for class "%s".' => 'La requête « %s » n’est pas une requête reconnue pour la classe « %s ».',
      'Constraint "phids" to "transaction.search" requires nonempty list, empty list provided.' => 'La contrainte « phids » passée à « transaction.search » demande une liste non vide, mais une liste vide a été fournie.',
      'You can not remove this comment because the conversation is locked.' => 'Vous ne pouvez pas retirer ce commentaire car la conversation est verrouillée.',
      '%s updated a token.' => '%s a mis à jour un jeton.',
      'Form Preview' => 'Aperçu du formulaire',
      '%s changed the subtype of this form from %s to %s.' => '%s a changé le sous-type de ce formulaire de « %s » en « %s ».',
      'If you start work now, this edit will send mail and publish notifications normally.' => 'Si vous commencez le travail maintenant, cette modification enverra des courriels et émettra des notifications normalement.',
      'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'Si vous commencez le travail maintenant, cette modification sera appliquée silencieusement : elle n’enverra aucun courriel et n’émettra aucune notification.',
      '%s edited contributor(s), added %s: %s; removed %s: %s.' => '%s a modifié un ou plusieurs contributeur(s) ; en a ajouté %s : %s ; en a supprimé %s : %s.',
      'Transaction type \'%s\' is missing an external apply implementation!' => 'Il manque au type de transaction « %s » une mise en œuvre externe pour l’appliquer !',
      'The subtype "%s" is not a valid subtype.' => 'Le sous-type « %s » n\'est pas un sous-type valide.',
      '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.' => '%s a mis à jour %s fichier(s) joint(s), à savoir %s a/ont été ajouté(s) : %s ; %s supprimé(s) : %s ; %s modifié(s) : %s.',
      'Form %d' => 'Formulaire %s',
      'Configure Forms for Configuring Forms' => 'Configurer des formulaires pour configurer les formulaires',
      '%s added %s contributor(s) for %s: %s.' => '%s a ajouté %s contributeur(s) pour %s : %s.',
      '%s changed the edit policy from "%s" to "%s".' => '%s a changé la politique de modification de « %s » en « %s ».',
      'The source object is mentioned in a comment on the destination object.' => 'L’objet source est mentionné dans un commentaire sur l’objet destination.',
      'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => 'Vous ne pouvez pas déplacer cet objet dans l’espace sélectionné, car l’espace est archivé. Les objets ne peuvent pas être créés dans (ou déplacés vers) des espaces archivés.',
      'Capability not supported!' => 'Capacité non prise en charge !',
      '%s created this object with visibility "%s".' => '%s a créé cet objet avec la visibilité « %s ».',
      'Override Lock' => 'Outrepasser le verrouillage',
      'You can not apply transactions which already have commentVersions!' => 'Vous ne pouvez appliquer aucune transaction ayant déjà des versions de commentaire !',
      'Object Monogram' => 'Monogramme de l’objet',
      'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.' => 'Le sous-type « %s » n’est pas valide : les clés de sous-type ne doivent pas dépasser 64 octets.',
      'Will Copy' => 'Effectuera une copie',
      '%s removed %s subscriber(s): %s.' => '%s a retiré %s abonné(s) : %s.',
      'Transaction comment must not yet have a PHID!' => 'Le commentaire de transaction ne doit encore avoir aucun PHID !',
      '%s changed the visibility from "%s" to "%s".' => '%s a changé la visibilité de « %s » en « %s ».',
      'Unable to load configuration for this EditEngine ("%s").' => 'Impossible de charger la configuration pour ce moteur de modification (« %s »).',
      'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).' => 'Valeur « %s » non valide pour la transaction de PHID. La valeur ne doit contenir que les clés « %s » (ajouter des PHID), « %s » (retirer des PHID) et « %s » (définir des PHID).',
      'Change the object subtype.' => 'Changer le sous-type d’objet.',
    );
  }

}
