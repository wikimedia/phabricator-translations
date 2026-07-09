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
  'Standard Phabricator.' => 'Phabricator standard.',
  'Auto-generated release schedule details.' => 'Détails de planification de version auto-générée.',
  'Consumer Token' => 'Jeton du consommateur',
  'Merged' => 'Fusionné',
  'Unresolved code review comments: %d' => 'Commentaire de relecture de code non résolu : %d',
  'Customize query in gerrit' => 'Personnaliser la requête dans Gerrit',
  'Cannot Lock Task' => 'Tâche non verrouillable',
  'Deploy `%s` to %s Wikis.' => 'Déployer `%s` vers les wikis de « %s ».',
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
  'Show verbose output.' => 'Afficher une sortie verbeuse.',
  'OAuth JWT wasn\'t valid at this time' => 'L’authentification par OAuth JWT n’était pas valide à ce moment',
  'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Toute sérieuse anomalie qui affecte `%s` devrait être ajoutée en tant que sous-tâche en dessous de celle-ci.',
  'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'Si quelque chose est assez grave pour justifier une restauration, vous devriez alors la porter à l’attention des développeurs sur le [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | canal IRC #wikimedia-operations ]].',
  'The username for whom transactions will be rolled back.' => 'Le nom d’utilisateur pour lequel les transactions seront annulées.',
  'No "security" task subtype is defined in "maniphest.subtypes" in this installation. Please file a bug report.' => 'Aucun sous-type de tâche « security » n\'est défini dans « maniphest.subtypes » dans cette installation. Veuillez remplir un rapport de bogue.',
  'ChangeId' => 'Identifiant de modification',
  'Only admins can call this API' => 'Seuls les administrateurs peuvent appeler cette API',
  'OAuth provider returned an error response.' => 'Le fournisseur OAuth a retourné une réponse d’erreur.',
  'Ensure Security Task Policies are Enforced' => 'Assurez-vous que les politiques de tâches de sécurité sont renforcées.',
  'Release Details' => 'Détails de publication',
  'This MediaWiki Train Deployment is scheduled for the week of' => 'Ce train de déploiement de MediaWiki est planifié pour la semaine du',
  'WIP - Work in Progress' => 'WIP – Travaux en cours',
  'Query users by ldap username.' => 'Recherche d’utilisateurs par nom d’utilisateur LDAP.',
  'LDAP User' => 'Utilisateur LDAP',
  'Related Changes in GitLab:' => 'Modifications liées dans GitLab :',
  'Invalid action \'%s\'!' => 'Action « %s »  incorrecte !',
  'Shows the gerrit Change ID for a commit.' => 'Affiche l’ID du changement de gerrit pour une validation.',
  'MediaWiki' => 'MediaWiki',
  'MediaWiki Base URI' => 'URI de la base MediaWiki',
  'Execute searches for Policies.' => 'Exécute des recherches de politiques.',
  'Find public transactions by a particular user.' => 'Trouver les transactions publiques d’un utilisateur donné.',
  'Skip OFFSET rows before processing the remaining transactions.' => 'Sauter le nombre de rangées indiqué en OFFSET avant de traiter les transactions restantes.',
  'Execute a rollback.' => 'Entreprendre un retour en arrière.',
  '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.

NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s

Provide the following settings on the consumer registration:

  - **OAuth "callback" URL:** Set this to: `%s`
  - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
  - **Applicable grants:** `Basic Rights` is all that is needed for authentication.


After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.

NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s' => '**Étape 2 sur 2** : créer un consommateur d’authentification MédiaWiki pour cette instance de Phabricator.

NOTE : un consommateur en version OAuth 1.0a avec son formulaire est disponible à cette adresse : %s

Fournissez les paramètres suivants dans l’enregistrement du consommateur :

  - **OAuth "callback" URL** : complétez avec `%s`
  - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix** : activez ce paramètre
  - **Applicable grants** : `Basic Rights` est tout ce qui est nécessaire pour l\'authentification.

Une fois le consommateur enregistré, une **Consumer Token (jeton de consommateur)** et un **Secret Token (jeton secret du consommateur)** vous seront fournis par MédiaWiki. Pour compléter la configuration de Phabricator, copiez les clés fournies dans les champs correspondants ci-dessus.

NOTE : avant que Phabricator puisse réussir à s’authentifier sur votre MédiaWiki, un administrateur du wiki doit approuver l’enregistrement du consommateur OAuth en utilisant le formulaire qui peut être trouvé à l’URL suivante : %s',
  'Invalid' => 'Incorrect',
  'Blocked on Code Review - Needs Changes' => 'Bloqué en relecture de code - Nécessite des modifications',
  'View Change in Gerrit' => 'Voir les modifications dans Gerrit',
  'You must disable the user before rolling back their activity' => 'Vous devez désactiver l’utilisateur avant de revenir en arrière dans son activité',
  'Link to Open Tasks' => 'Lien vers les tâches ouvertes',
  'MediaWiki Instance Name' => 'Nom de l’instance MediaWiki',
  'Secret Token' => 'Jeton secret',
  'Secret Token is required' => 'Le jeton secret est requis',
  'Limit the number of transaction rows to process. Default: 10000' => 'Limiter le nombre de lignes de transaction à traiter. Par défaut : 10 000',
  'objectType is required.' => 'Le type d’objet est obligatoire.',
  'Unknown or missing ldap names: %s' => 'Noms LDAP inconnus ou manquants : %s',
  'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'NOTE : copiez les clés générées par l’enregistrement du consommateur OAuth MediaWiki et collez-les ici.',
  'Invalid rule class \'%s\'!' => 'Classe de règle « %s » incorrecte !',
  'Phabricator transaction rollback tool.' => 'Outil d’annulation de transaction de Phabricator.',
  'This task has no related gerrit patches.' => 'Cette tâche n’a aucun correctif Gerrit associé.',
  'Gerrit Patches' => 'Correctifs Gerrit',
  'This task has no related GitLab merge requests.' => 'Cette tâche n\'a aucune demande de fusion GitLab associée.',
  'Customize query in GitLab' => 'Personnaliser la requête dans GitLab',
  'You must provide either --user or --user-phid' => 'Vous devez fournir soit --user, soit --user-phid',
  'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'Pour plus d’informations sur les éléments bloquants du train de déploiement, consultez [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Blocage du train ]].',
  'Sort by Last Update' => 'Trier par dernière mise à jour',
  'Consumer Token is required' => 'Le jeton du consommateur est requis',
  '%s Line(s) removed' => '%s ligne(s) enlevée(s)',
  'Escalate security issue' => 'Élever le problème de sécurité',
  'OAuth JWT aud didn\'t match expected consumer key' => 'La clé aud de OAuth JWT ne correspondait pas à la clé de consommateur attendue',
  'Related Changes in Gerrit:' => 'Changements liés dans Gerrit :',
  'Code Review Started' => 'Relecture de code commencée',
  'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Activer le mode expert pour révéler des options « avancées » supplémentaires dans l’interface utilisateur de Phabricator.',
  'OAuth error: Login failed because your MediaWiki account "%s" is blocked' => 'Erreur OAuth : la connexion a échoué car votre compte MédiaWiki « %s » est bloqué',
  'Enforce Task Security Policy' => 'Mettre en vigueur la politique de sécurité des tâches',
  'Hide Instructions' => 'Masquer les instructions',
  'Rules do not have any effect.' => 'Les règles n’ont aucun effet.',
  '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.

In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.' => '**Étape 1 sur 2** : fournir le nom et l’URI de votre installation de MédiaWiki.

À l\'étape suivante, vous allez créer un consommateur OAuth dans MédiaWiki qui sera utilisé par Phabricator OAuth.',
  'users subscribed to' => 'utilisateurs abonnés à',
  'Execute a dry run, changes will not be writen back to the database.' => 'Lancer une exécution à blanc, les changements ne seront pas écrits dans la base de données.',
  'Cannot Protect as Security Issue' => 'Impossible de protéger en raison d\'un problème de sécurité',
  'Branch `%s` and deploy to %s Wikis.' => 'Créer une branche `%s` et déployer vers les wikis de « %s ».',
  'No project tags "Security" and "Security-Team" exist in this installation. Please file a bug report.' => 'Aucune balise de projet « Security » ou « Security-Team » n\'existe dans cette installation. Veuillez remplir un rapport de bogue.',
  'Expert Mode.' => 'Mode expert.',
  'No project tag "acl*security" exists in this installation. Please file a bug report.' => 'Il n\'existe pas de balise de projet « acl*security » dans cette installation. Veuillez remplir un rapport de bogue.',
  'The specified username / userPHID was not found' => 'Le nom ou le PHID d’utilisateur spécifié n’a pas été trouvé',
  'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'Consultez https://wikitech.wikimedia.org/wiki/Deployments pour la planification complète.',
  'You cannot lock this task because it is already protected by a custom security policy.' => 'Vous ne pouvez pas verrouiller cette tâche parce qu’elle est déjà protégée par une politique de sécurité personnalisée.',
  'Wikimedia Customizations' => 'Personnalisations de Wikimédia',
  'Missing or malformed parameter.' => 'Paramètre manquant ou mal formaté.',
  'MediaWiki base URI should include protocol (like "https://").' => 'L’URI de base de MediaWiki devrait inclure un protocole (tel que « https:// »)',
  'How this works' => 'Comment cela fonctionne',
  'Create custom access control policy objects.' => 'Créer des objets de politique de contrôle d’accès personnalisés.',
  'Use [[%s|this form]] to create one.' => 'Utiliser [[ %s | ce formulaire ]] pour en créer une.',
  'MediaWiki User' => 'Utilisateur MediaWiki',
  'Reset security settings' => 'Réinitialiser les paramètres de sécurité',
  'Open Tasks' => 'Tâches ouvertes',
  'Unknown' => 'Inconnu',
  '**MediaWiki Instance Name**

Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.

Use lowercase letters, digits, and period. For example: 

`mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**Nom d’instance de MediaWiki**

Choisissez un nom permanent pour cette instance de MediaWiki. Phabricator utilise ce nom interne pour garder la trace de cette instance de MediaWiki, au cas où l’URL change plus tard.

N’utilisez que des lettres minuscules, des chiffres ou le point. Par exemple :

`mediawiki`, `mediawiki.masociete` ou `mediawiki.ingenierie` sont des noms raisonnables.',
  'GitLab Patches' => 'Correctifs GitLab',
  'Global Accounts' => 'Comptes globaux',
  'Milestone Navigation Links' => 'Liens de navigation des jalons',
  'Previous: %s' => 'Précédent : %s',
  'Query users by MediaWiki username.' => 'Recherche d’utilisateurs par nom d’utilisateur de MediaWiki.',
  'Expand Instructions' => 'Développer les instructions',
  'You cannot roll back the activity of a privileged user.' => 'Vous ne pouvez pas annuler l’activité d’un utilisateur privilégié.',
  'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Toute sous-tâche ouverte bloquera l’avancement du train. Ceci signifie qu’il n’y aura plus d’autres déploiements tant que les éléments bloquants ne seront pas résolus.',
  'This adds a link to search Maniphest for open tasks which are tagged with this project. NOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'Ceci ajoute un lien pour rechercher dans Maniphest les tâches ouvertes qui sont balisées avec ce projet.\\n\\nREMARQUE : cette fonctionnalité est fournie par une extension maintenue par Wikimédia dans ProjectOpenTasksProfileMenuItem
.php. Voir https://gitlab.wikimedia.org/repos/phabricator/extensions pour la source.',
  'The full URL to your MediaWiki install, up to but not including "index.php"' => 'L’URL complète de votre installation MediaWiki, juste avant « index.php »',
  'This panel shows navigation links to other milestones in the same series.' => 'Ce panneau affiche des liens de navigation vers d’autres jalons dans la même suite.',
  'Expert Mode' => 'Mode expert',
  'Unknown or missing mediawiki names: %s' => 'Noms MediaWiki inconnus ou manquants : %s',
  'After reverting transactions, delete the reverted transaction records.' => 'Après le renversement de transactions, supprimer les enregistrements des transactions renversées.',
  'No Permission' => 'Pas d’autorisation',
  'Series Navigation' => 'Navigation de séries',
  'Required' => 'Obligatoire',
  'Abandoned' => 'Abandonné',
  '%s Line(s) added' => '%s ligne(s) ajoutée(s)',
  'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => 'Si vous avez un changement risqué dans le train de cette semaine, ajoutez un commentaire à cette tâche en utilisant le {icon train spin}{icon fire color=red} [https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template modèle pour correctif dangereux].',
  'Comments' => 'Commentaires',
);
  }

}
