<?php

final class PhabricatorextCoreFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'Élever',
      'Next: %s' => 'Suivant : %s',
      'Provides instructions for applying a local patch using just git.' => 'Fournit des instructions pour appliquer un correctif local en utilisant juste « git ».',
      'Standard Phabricator.' => 'Phabricator standard.',
      'Auto-generated release schedule details.' => 'Détails de planification de version auto-générée.',
      '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki.Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**Nom d’instance de MediaWiki**
    Choisissez un nom permanent pour cette instance de MediaWiki. Phabricator utilise ce nom interne pour garder la trace de cette instance de MediaWiki, au cas où l’URL change plus tard.
    N’utilisez que des lettres minuscules, des chiffres ou le point. Par exemple :
    `mediawiki`, `mediawiki.masociete` ou `mediawiki.ingenierie` sont des noms raisonnables.',
      'Merged' => 'Fusionné',
      '**Step 2 of 2**: Create a MediaWiki auth consumer for this Phabricator instance.
    NOTE: Propose a consumer with the form at this url: %s
    Provide the following settings on the consumer registration:
      - **Callback URL:** Set this to: `%s`
      - **Grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Key** and **Consumer Secret** will be provided to you by MediaWiki. To complete configuration of phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the oauth consumer registration using the form which can be found at the following url: %s' => '**Étape 2 sur 2 :** création d’un consommateur d’authentification MediaWiki pour cette instance de Phabricator.
    NOTE : proposez un consommateur avec le formulaire à cette URL : %s
    Fournissez les paramètres suivants dans l’enregistrement du consommateur :
      - **URL de rappel :** Set this to: `%s`
      - **Grants:** `Basic Rights` is all that is needed for authentication.
    Une fois le consommateur enregistré, une  **Clé de consommateur** et un **Secret du consommateur** vous seront fournis par MediaWiki. Pour compléter la configuration de Phabricator, copiez les clés fournies dans les champs correspondants ci-dessus.
    NOTE : avant que Phabricator puisse réussir à s’authentifier sur votre wiki MediaWiki, un administrateur du wiki doit approuver l’enregistrement du consommateur OAuth en utilisant le formulaire qui peut être trouvé à l’URL suivante : %s',
      'Gerrit Projects' => 'Projets Gerrit',
      'Unresolved code review comments: %d' => 'Commentaire de relecture de code non résolu : %s',
      'Customize query in gerrit' => 'Personnaliser la requête dans Gerrit',
      'Cannot Lock Task' => 'Tâche non verrouillable',
      'Deploy `%s` to %s Wikis.' => 'Déployer `%s` vers les wikis de %s.',
      'Unknown objectType \'%s\'' => 'Type d’objet inconnu « %s »',
      'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'Vous n’avez pas la permission de remonter des tâches en tant que problèmes de sécurité. Cette action ne peut être entreprise que par des utilisateurs autorisés.',
      'Show related patches' => 'Voir les correctifs associés',
      'Related Links' => 'Liens associés',
      'No deployments on fridays' => 'Aucun déploiement les vendredis',
      'You must provide either a username or userPHID' => 'Vous devez fournir un nom ou PHID d’utilisateur.',
      'MediaWiki base URI is required.' => 'L’URI de la base de MediaWiki est obligatoire.',
      'Unknown policies: %s' => 'Règles inconnues : %s',
      'OAuth JWT nonce didn\'t match what we sent.' => 'Le nonce pour OAuth JWT ne correspondait pas à ce que nous avons envoyé.',
      'Protect as security issue' => 'Protéger comme problème de sécurité',
      'OAuth JWT iss didn\'t match expected server name' => 'Le valeur donnée à iss pour OAuth JWT ne correspond pas au nom de serveur attendu',
      'Secret Key' => 'Clé secrète',
      'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectBurnupGraphProfileMenuItem. See {rPHEX} for the source.' => 'Ceci ajoute un lien vers un maniphest de recherche pour les tâches ouvertes qui sont balisées par ce projet.
    NOTE : cette fonctionnalité est fournie par une extension maintenue par Wikimédia, ProjectBurnupGraphProfileMenuItem. Voir {rPHEX} pour la source.',
      'Show verbose output.' => 'Afficher une sortie verbeuse.',
      'OAuth JWT wasn\'t valid at this time' => 'L’authentification par OAuth JWT n’était pas valide à l’heure actuelle',
      'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Toute sérieuse anomalie qui affecte `%s` devrait être ajoutée en tant que sous-tâche en dessous de celle-ci.',
      'The username for whom transactions will be rolled back.' => 'Le nom d’utilisateur de qui des transactions devraient être renversées.',
      'ChangeId' => 'ID de modif',
      'Only admins can call this API' => 'Seuls les administrateurs peuvent appeler cette API',
      'OAuth provider returned an error response.' => 'Le fournisseur OAuth a retourné une réponse d’erreur.',
      'Ensure Security Task Policies are Enforced' => 'Assurez-vous que les politiques de tâches de sécurité sont renforcées.',
      'Release Details' => 'Détails de publication',
      'Allow' => 'Autoriser',
      'This MediaWiki Train Deployment is scheduled for the week of' => 'Ce train de déploiement de MediaWiki est planifié pour la semaine du',
      'Query users by ldap username.' => 'Recherche d’utilisateurs par nom d’utilisateur LDAP.',
      'LDAP User' => 'Utilisateur LDAP',
      'Invalid action \'%s\'!' => 'Action « %s »  incorrecte !',
      'Shows the gerrit Change ID for a commit.' => 'Affiche l’ID du changement de gerrit pour une validation.',
      'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectOpenTasksProfileMenuItemextension. See {rPHEX} for the source.' => 'Ceci ajoute un lien vers un maniphest de recherche pour les tâches ouvertes qui sont balisées par ce projet.
    NOTE : cette fonctionnalité est fournie par une extension maintenue par Wikimédia, ProjectOpenTasksProfileMenuItemextension. Voir {rPHEX} pour la source.',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'URI de la base MediaWiki',
      'The requested project does not exist' => 'Le projet demandé n’existe pas.',
      'Burnup Graph' => 'Graphique de consommation',
      'Any open subtask(s) block the train from moving forward.This means no further deployments until the blockers are resolved.' => 'Toute sous-tâche ouverte bloquera l’avancement du train. Ceci signifie qu’il n’y aura plus d’autres déploiements tant que les éléments bloquants ne seront pas résolus.',
      'Change type to "%s."' => 'Changer le type en « %s ».',
      'Execute searches for Policies.' => 'Exécute des recherches de politiques.',
      'Find public transactions by a particular user.' => 'Trouver les transactions publiques d’un utilisateur donné.',
      'Execute a rollback.' => 'Entreprendre un retour en arrière.',
      'Deny' => 'Refuser',
      'Consumer Key is required' => 'La clé du consommateur est obligatoire',
      'Invalid' => 'Incorrect',
      'View Change in Gerrit' => 'Voir les modifications dans Gerrit',
      'You must disable the user before rolling back their activity' => 'Vous devez désactiver l’utilisateur avant de revenir en arrière dans son activité',
      'Link to Open Tasks' => 'Lien vers les tâches ouvertes',
      'ElasticSearch' => 'ElasticSearch',
      'Disable ElasticSearch' => 'Désactiver ElasticSearch',
      'MediaWiki Instance Name' => 'Nom de l’instance MediaWiki',
      'Limit the number of transaction rows to process. Default: 10000' => 'Limiter le nombre de lignes de transaction à traiter. Par défaut : 10 000',
      'objectType is required.' => 'objectType est obligatoire.',
      'Unknown or missing ldap names: %s' => 'Noms LDAP inconnus ou manquants : %s',
      'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'NOTE : copiez les clés générées par l’enregistrement du consommateur OAuth Mediawiki et collez-les ici.',
      'Invalid rule class \'%s\'!' => 'Classe de règle « %s » incorrecte !',
      'Phabricator transaction rollback tool.' => 'Outil d’annulation de transaction de Phabricator.',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Activer ceci pour utiliser la recherche backend expérimentale en texte intégral ElasticSearch.',
      'This task has no related gerrit patches.' => 'Cette tâche n’a aucun correctif Gerrit associé.',
      'Gerrit Patches' => 'Correctifs Gerrit',
      'You must provide either --user or --user-phid' => 'Vous devez fournir soit --user, soit --user-phid',
      'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'Pour plus d’informations sur les éléments bloquants du train de déploiement, consultez [[https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train|Blocage du train]].',
      'Sort by Last Update' => 'Trier par dernière mise à jour',
      '%s Line(s) removed' => '%s ligne(s) enlevée(s)',
      'Escalate security issue' => 'Élever le problème de sécurité',
      'Consumer Secret is required' => 'Le secret du consommateur est exigé',
      'OAuth JWT aud didn\'t match expected consumer key' => 'La clé aud de OAuth JWT ne correspondait pas à la clé de consommateur attendue',
      'Related Changes in Gerrit:' => 'Changements liés dans Gerrit :',
      'Code Review Started' => 'Relecture de code commencée',
      'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Activer le mode expert pour révéler des options « avancées » supplémentaires dans l’interface utilisateur de Phabricator.',
      'Changed Type' => 'Type modifié',
      'Full-Text Search backend that uses ElasticSearch.' => 'Dorsal de recherche en texte complet qui utilise ElasticSearch.',
      'Enforce Task Security Policy' => 'Mettre en vigueur la politique de sécurité des tâches',
      'Hide Instructions' => 'Masquer les instructions',
      'Rules do not have any effect.' => 'Les règles n’ont aucun effet.',
      'users subscribed to' => 'utilisateurs abonnés à',
      'Execute a dry run, changes will not be writen back to the database.' => 'Lancer une exécution à blanc, les changements ne seront pas écrits dans la base de données.',
      'PHIDs required' => 'PHIDs exigés',
      'Branch `%s` and deploy to %s Wikis.' => 'Créer une branche `%s` et déployer vers les wikis de %s.',
      '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an auth consumer in MediaWiki to be used by Phabricator oauth.' => '**Étape 1 sur 2 :** fournir le nom et l’URI pour votre installation de MediaWiki.',
      'Expert Mode.' => 'Mode expert.',
      'The specified username / userPHID was not found' => 'Le nom ou le PHID d’utilisateur spécifié n’a pas été trouvé',
      'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'Consultez https://wikitech.wikimedia.org/wiki/Deployments pour la planification complète.',
      'Browse Gerrit Projects' => 'Voir les projets Gerrit',
      'You cannot lock this task because it is already protected by a custom security policy.' => 'Vous ne pouvez pas verrouiller cette tâche parce qu’elle est déjà protégée par une politique de sécurité personnalisée.',
      'Wikimedia Customizations' => 'Personnalisations de Wikimédia',
      'Missing or malformed parameter.' => 'Paramètre absent ou mal formaté.',
      'MediaWiki base URI should include protocol (like "https://").' => 'L’URI de base de MediaWiki devrait inclure un protocole (tel que « https:// »)',
      'Blocked on Code Review' => 'Bloqué en relecture de code',
      'How this works' => 'Comment cela fonctionne',
      'Create custom access control policy objects.' => 'Créer des objets de politique de contrôle d’accès personnalisés.',
      'Use [[%s|this form]] to create one.' => 'Utiliser [[%s|ce formulaire]] pour en créer une.',
      'MediaWiki User' => 'Utilisateur MediaWiki',
      'Change type to' => 'Modifier le type en',
      'Reset security settings' => 'Réinitialiser les paramètres de sécurité',
      'Open Tasks' => 'Tâches ouvertes',
      'Unknown' => 'Inconnu',
      'OAuth error: this account has been blocked in MediaWiki.' => 'Erreur OAuth : ce compte a été bloqué dans MediaWiki.',
      'Global Accounts' => 'Comptes globaux',
      'Milestone Navigation Links' => 'Liens de navigation des jalons',
      'Patch without arc' => 'Correctif sans arc',
      'Previous: %s' => 'Précédent : %s',
      'Query users by MediaWiki username.' => 'Recherche d’utilisateurs par nom d’utilisateur de MediaWiki.',
      'Expand Instructions' => 'Développer les instructions',
      'You cannot roll back the activity of a privileged user.' => 'Vous ne pouvez pas annuler l’activité d’un utilisateur privilégié.',
      'Download zip' => 'Télécharger le zip',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'L’URL complète de votre installation MediaWiki, juste avant « index.php »',
      'Download Archive' => 'Télécharger l’archive',
      'This panel shows navigation links to other milestones in the same series.' => 'Ce panneau affiche des liens de navigation vers d’autres jalons dans la même suite.',
      'Expert Mode' => 'Mode expert',
      'Unknown or missing mediawiki names: %s' => 'Noms MediaWiki inconnus ou manquants : %s',
      'After reverting transactions, delete the reverted transaction records.' => 'Après le renversement de transactions, supprimer les enregistrements des transactions renversées.',
      'No Permission' => 'Pas d’autorisation',
      'Series Navigation' => 'Navigation de séries',
      'Enable ElasticSearch' => 'Activer ElasticSearch',
      'Find stuff in elastic piles.' => 'Trouver des choses dans des tas élastiques.',
      'Consumer Key' => 'Clé du consommateur',
      'Required' => 'Obligatoire',
      'Number of open tasks over time' => 'Nombre de tâches ouvertes dans le temps',
      'Abandoned' => 'Abandonné',
      'Gerrit' => 'Gerrit',
      '%s Line(s) added' => '%s ligne(s) ajoutée(s)',
      'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'Si quelque chose est assez grave pour justifier un renversement, vous devriez alors la porter à l’attention des développeurs sur le [[ https://www.mediawiki.org/wiki/mediawiki_on_irc|canal IRC #wikimedia-operations]].',
      'Link to Burnup Graph' => 'Lien vers le graphique de consommation',
      'Comments' => 'Commentaires',
      'Skip OFFSET rows before processing the remaining tranactions.' => 'Sauter le nombre de rangées indiqué en OFFSET avant de traiter les transactions restantes.',
      'Download tar.gz' => 'Télécharger le tar.gz',
      'Change type to "%s"' => 'Modifier le type en « %s »',
    );
  }

}
