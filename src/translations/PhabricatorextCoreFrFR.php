<?php

final class PhabricatorextCoreFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Standard Phabricator.' => 'Phabricator standard.',
      'Auto-generated release schedule details.' => 'Détails de planification de version auto-générée.',
      'Merged' => 'Fusionné',
      'Gerrit Projects' => 'Projets Gerrit',
      'Unresolved code review comments: %d' => 'Commentaire de relecture de code non résolu : %s',
      'Customize query in gerrit' => 'Personnaliser la requête dans Gerrit',
      'Cannot Lock Task' => 'Tâche non verrouillable',
      'Unknown objectType \'%s\'' => 'Type d’objet inconnu « %s »',
      'Show related patches' => 'Voir les correctifs associés',
      'Related Links' => 'Liens associés',
      'No deployments on fridays' => 'Aucun déploiement les vendredis',
      'You must provide either a username or userPHID' => 'Vous devez fournir un nom ou PHID d’utilisateur.',
      'MediaWiki base URI is required.' => 'L’URI de la base de MediaWiki est obligatoire.',
      'Unknown policies: %s' => 'Règles inconnues : %s',
      'Protect as security issue' => 'Protéger comme problème de sécurité',
      'OAuth JWT iss didn\'t match expected server name' => 'Le valeur donnée à iss pour OAuth JWT ne correspond pas au nom de serveur attendu',
      'Secret Key' => 'Clé secrète',
      'ChangeId' => 'ID de modif',
      'Only admins can call this API' => 'Seuls les administrateurs peuvent appeler cette API',
      'Ensure Security Task Policies are Enforced' => 'Assurez-vous que les politiques de tâches de sécurité sont renforcées.',
      'Release Details' => 'Détails de publication',
      'Allow' => 'Autoriser',
      'Query users by ldap username.' => 'Recherche d’utilisateurs par nom d’utilisateur LDAP.',
      'LDAP User' => 'Utilisateur LDAP',
      'Invalid action \'%s\'!' => 'Action « %s »  incorrecte !',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'URI de la base MediaWiki',
      'The requested project does not exist' => 'Le projet demandé n’existe pas.',
      'Change type to "%s."' => 'Changer le type en « %s ».',
      'Find public transactions by a particular user.' => 'Trouver les transactions publiques d’un utilisateur donné.',
      'Execute a rollback.' => 'Entreprendre un retour en arrière.',
      'Deny' => 'Refuser',
      'Consumer Key is required' => 'La clé du consommateur est obligatoire',
      'Invalid' => 'Incorrect',
      'View Change in Gerrit' => 'Voir les modifications dans Gerrit',
      'You must disable the user before rolling back their activity' => 'Vous devez désactiver l’utilisateur avant de revenir en arrière dans son activité',
      'ElasticSearch' => 'ElasticSearch',
      'Disable ElasticSearch' => 'Désactiver ElasticSearch',
      'MediaWiki Instance Name' => 'Nom de l’instance MediaWiki',
      'Limit the number of transaction rows to process. Default: 10000' => 'Limiter le nombre de lignes de transaction à traiter. Par défaut : 10 000',
      'objectType is required.' => 'objectType est obligatoire.',
      'Invalid rule class \'%s\'!' => 'Classe de règle « %s » incorrecte !',
      'Phabricator transaction rollback tool.' => 'Outil d’annulation de transaction de Phabricator.',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Activer ceci pour utiliser la recherche backend expérimentale en texte intégral ElasticSearch.',
      'This task has no related gerrit patches.' => 'Cette tâche n’a aucun correctif Gerrit associé.',
      'Gerrit Patches' => 'Correctifs Gerrit',
      'You must provide either --user or --user-phid' => 'Vous devez fournir soit --user, soit --user-phid',
      'Code Review Started' => 'Relecture de code commencée',
      'Changed Type' => 'Type modifié',
      'Hide Instructions' => 'Masquer les instructions',
      'Rules do not have any effect.' => 'Les règles n’ont aucun effet.',
      'Expert Mode.' => 'Mode expert.',
      'Browse Gerrit Projects' => 'Voir les projets Gerrit',
      'Missing or malformed parameter.' => 'Paramètre absent ou mal formatté.',
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
      'Expand Instructions' => 'Développer les instructions',
      'You cannot roll back the activity of a privileged user.' => 'Vous ne pouvez pas annuler l’activité d’un utilisateur privilégié.',
      'Download zip' => 'Télécharger le zip',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'L’URL complète de votre installation MediaWiki, juste avant « index.php »',
      'Download Archive' => 'Télécharger l’archive',
      'This panel shows navigation links to other milestones in the same series.' => 'Ce panneau affiche des liens de navigation vers d’autres jalons dans la même suite.',
      'Expert Mode' => 'Mode expert',
      'Unknown or missing mediawiki names: %s' => 'Noms MediaWiki inconnus ou manquants : %s',
      'No Permission' => 'Pas d’autorisation',
      'Consumer Key' => 'Clé du consommateur',
      'Required' => 'Obligatoire',
      'Number of open tasks over time' => 'Nombre de tâches ouvertes dans le temps',
      'Gerrit' => 'Gerrit',
      '%s Line(s) added' => '%s ligne(s) ajoutée(s)',
      'Comments' => 'Commentaires',
      'Download tar.gz' => 'Télécharger le tar.gz',
      'Change type to "%s"' => 'Modifier le type en « %s »',
    );
  }

}