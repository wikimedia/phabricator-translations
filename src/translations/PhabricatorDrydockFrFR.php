<?php

final class PhabricatorDrydockFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'All Operations' => 'Toutes les opérations',
      'Repository Operation %d' => 'Opération de dépôt %s',
      'Failed to acquire slot locks: %s.' => 'Échec d’acquisition de verrous d’emplacement : %s.',
      'Authorized Object' => 'Objet autorisé',
      'Resource' => 'Ressource',
      'Lease has unknown status "%s".' => 'Le bail a un état « %s » inconnu.',
      'Show Details' => 'Voir les détails',
      'This change could not be fetched from the remote.' => 'Cette modification ne peut pas être récupérée du serveur distant.',
      'Resource "%s" is not releasable.' => 'La ressource « %s » ne peut pas être relâchée.',
      'Search engine has no blueprint, resource, lease, or operation.' => 'Le moteur de recherche n’a aucun plan, aucune ressource, aucun bail, ni aucune opération.',
      'Not Acquired' => 'Non acquis',
      'Lease "%s" is not releasable.' => 'Le bail « %s » ne peut pas être relâché.',
      'Scheduled release of resource "%s".' => 'Relâchement programmé de la ressource « %s ».',
      'This operation has already been dismissed, and can not be dismissed any further.' => 'Cette opération a déjà été révoquée et ne peut plus l’être davantage.',
      'Lease %d' => 'Bail %s',
      'Blueprint' => 'Plan',
      'Staging Area Skipped' => 'Zone de mise en place sautée',
      'Committing this change failed. It may already have been merged.' => 'La validation de cette modification a échoué. Elle a peut-être déjà été fusionnée.',
      'Drydock Blueprints' => 'Plans de Drydock',
      'Release a lease.' => 'Relâcher un bail.',
      'Queued lease for activation:' => 'Bail mis en file pour activation :',
      'The PHID of the object that authorized this lease.' => 'Le PHID de l’objet qui a autorisé ce bail.',
      'Set lease expiration time.' => 'Définir la date d’expiration du bail.',
      'Unable to parse argument to "%s".' => 'Impossible d’analyser l’argument pour « %s ».',
      'Active Authorizations' => 'Autorisations actives',
      'Allows Drydock to lease existing hosts defined in an Almanac service pool.' => 'Permet à Drydock de louer des hôtes existants définis dans une réserve de service Almanac.',
      'Drydock Console' => 'Console de Drydock',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without acquiring a lease.' => 'Le plan « %s » (de type « %s ») n’est pas correctement mis en œuvre : il a fait un retour de « %s » sans obtenir de bail.',
      'Type of blueprint.' => 'Type de plan.',
      '%s enabled this blueprint.' => '%s a activé ce plan.',
      'Waiting to land revision into %s on %s...' => 'Attente d’atterrissage de la version dans %s sur %s...',
      'Resource type.' => 'Type de ressource.',
      'No blueprints found.' => 'Aucun plan trouvé.',
      'Trying to allocate a resource with no generated PHID. Use "%s" to create new resource templates.' => 'Essai d’allocation d’une ressource sans PHID généré. Utiliser « %s » pour créer de nouveaux modèles de ressource.',
      'Edit Blueprint' => 'Modifier le plan',
      'Disable Blueprint' => 'Désactiver le plan',
      'Blueprint Type' => 'Type de plan',
      'Logs' => 'Journaux d’opérations',
      'Specify one or more resource IDs to update with "%s".' => 'Spécifier au moins un ID de ressource à mettre à jour avec « %s ».',
      'Specify one or more lease IDs to release with "%s".' => 'Spécifier au moins un ID de bail à relâcher avec « %s ».',
      'Show Only Disabled Blueprints' => 'Afficher uniquement les plans désactivés',
      'Type a resource name...' => 'Saisissez un nom de ressource...',
      'Hide Details' => 'Masquer les détails',
      'Drydock Authorization' => 'Autorisation Drydock',
      'Resource %d: %s' => 'Ressource %s : %s',
      'This lease does not list any usable blueprints.' => 'Ce bail ne liste aucun plan utilisable.',
      'Lease activation failed: [%s] %s' => 'Échec d’activation du bail : [%s] %s',
      'Resource %d' => 'Ressource %s',
      'When this diff was generated, the repository was not configured with a staging area, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quand ce diff a été généré, le dépôt n’était pas configuré avec une zone de mise en place, donc la modification n’y a pas été poussée. Les modifications doivent être poussées vers la mise en place avant de pouvoir atterrir sur le web.',
      'This revision has been abandoned. Only accepted revisions may land.' => 'Cette version a été abandonnée. Seules les versions acceptées peuvent atterrir.',
      'Retrieve information about Drydock blueprints.' => 'Récupérer des informations sur les plans Drydock.',
      'Drydock Resources' => 'Ressources Drydock',
      'Resource Type' => 'Type de ressource',
      'The object which authorized this lease (%s) is not authorized to use any of the blueprints the lease lists. Approve the authorizations before using the lease.' => 'L’objet qui a autorisé ce bail (%s) n’est pas autorisé à utiliser un des plans que liste le bail. Approuver les autorisations avant d’utiliser le bail.',
      'Diff ("%s") has wrong revision ID ("%s", expected "%s").' => 'Le diff (« %s ») a un mauvais ID de version (« %s », « %s » attendu).',
      'Trying to acquire lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'Essai d’acquisition d’un bail (« %s ») sur une ressource (« %s ») dans le mauvais état (« %s »).',
      'Drydock Authorization %d' => 'Autorisation Drydock %s',
      'This blueprint has no active resources.' => 'Ce plan n’a aucune ressource active.',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" with a lease acquired on the wrong resource.' => 'Le plan « %s » (du type « %s ») n’est pas correctement mis en œuvre : il est revenu de « %s » avec un bail acquis sur la mauvaise ressource.',
      'This revision is not associated with a known repository. Only revisions associated with a tracked repository can be landed automatically.' => 'Cette version n’est pas associée à un dépôt connu. Seules les révisions associées à un dépôt tracé peuvent atterrir automatiquement.',
      'Stdout' => 'Sortie standard',
      'Failed to acquire lock for resource ("%s") while trying to acquire lease ("%s").' => 'Échec d’acquisition d’un verrou pour la ressource (« %s ») pendant l’essai d’acquisition d’un bail (« %s »).',
      'Trying to activate lease with no resource.' => 'Essai d’activation du bail sans ressource.',
      'Via:' => 'Via :',
      'Operation Status' => 'État de l’opération',
      'Slot Lock Failure' => 'Échec de verrouillage de l’emplacement',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must return an object of type %s or throw, but returned something else.' => 'Le plan « %s » (de type « %s ») n’est pas correctement mis en œuvre : %s doit renvoyer un objet de type %s ou lever une exception, mais il a renvoyé autre chose.',
      'Unknown repository operation target type "%s" (in target "%s").' => 'Type de cible de l’opération de dépôt « %s » inconnu (sur la cible « %s »).',
      'Drydock commands have the same policies as their targets.' => 'Les commandes de Drydock ont la même politique que leurs cibles.',
      'The diff was generated from a raw input source, so the change could not be pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Le diff a été généré depuis une source de données brute, donc la modification n’a pas pu être poussée dans la zone de mise en place. Les modifications doivent être poussées dans la zone de mise en place avant qu’elles puissent atterrir depuis le web.',
      'Host (%s)' => 'Hôte (%s)',
      'Drydock Repository Operations' => 'Opérations de dépôt Drydock',
      'Browse Blueprints' => 'Parcourir les plans',
      'No objects have active authorizations to use this blueprint.' => 'Aucun objet ne dispose d’autorisations actives pour utiliser ce plan.',
      'You do not have permission to create Drydock blueprints.' => 'Vous n’avez pas la permission de créer des plans Drydock.',
      'Name of the blueprint.' => 'Nom du plan.',
      'Really release resource?' => 'Vraiment relâcher la ressource ?',
      'Already Dismissed' => 'Déjà rejeté',
      'Dismiss this operation? It will no longer be shown, but logs can be found in Drydock.' => 'Rejeter cette opération ? Elle ne sera plus affichée, mais les journaux peuvent être trouvés dans Drydock.',
      'Resource "%s" was reclaimed.' => 'La ressource « %s » a été récupérée.',
      'Default Blueprint View Policy' => 'Politique d’affichage des plans par défaut',
      'Allows Drydock to check out working copies of repositories.' => 'Permet à Drydock de vérifier les copies de travail des dépôts.',
      'Lease released.' => 'Bail relâché.',
      'Unknown Repository' => 'Dépôt inconnu',
      'Lease "%s" does not exist.' => 'Le bail « %s » n’existe pas.',
      'When this diff was generated, the server was running an older version of Phabricator which did not support staging areas for this version control system, so the chagne was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quand ce diff a été généré, le serveur tournait avec une version plus ancienne de Phabricator qui ne prenait pas en charge les zones de mise en place pour ce système de gestion de configuration, donc la modification n’a pas été poussée en zone de mise en place. Les modifications doivent être poussées en zone de mise en place avant de pouvoir être récupérées depuis le web.',
      'All blueprints failed to allocate a suitable new resource when trying to allocate lease ("%s").' => 'Tous les plans ont échoué à allouer une nouvelle ressource appropriée en essayant d’allouer le bail (« %s »).',
      'Enable Blueprint' => 'Activer le plan',
      'When this diff was generated, the server was running an older version of Phabricator which did not support staging areas, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quand le diff a été généré, le serveur tournait avec une version plus ancienne de Phabricator qui ne prenait pas en charge les zones de mise en place, donc la modification n’avait pas été poussée en zone de mise en place. Les modifications doivent être poussées vers la zone de mise en place avant de pouvoir être récupérées depuis le web.',
      'Authorization State' => 'État d’autorisation',
      'One or more blueprints promised a new resource, but failed when allocating: [%s] %s' => 'Au moins un plan a promis une nouvelle ressource, mais a échoué à l’allouer : [%s] %s',
      'Revision Closed' => 'Version close',
      'Update a resource.' => 'Mettre à jour une ressource.',
      'Lease has already been released!' => 'Le bail a déjà été relâché !',
      'Lease has been broken!' => 'Le bail a été rompu !',
      'This revision is already landing.' => 'Cette version est déjà en atterrissage.',
      'Hide Disabled Blueprints' => 'Masquer les plans désactivés',
      'Search authorizations from specific objects.' => 'Rechercher des autorisations à partir d’objets spécifiques.',
      'Drydock Leases' => 'Baux de Drydock',
      'A repository operation inherits the policies of the repository it affects.' => 'Une opération de dépôt hérite de la politique du dépôt qu’elle affecte.',
      'Unable to load lease with ID "%s"!' => 'Impossible de charger le bail avec l’ID « %s » !',
      'Working' => 'Travail en cours',
      'Success! Automation is configured properly and Drydock can operate on %s.' => 'Succès ! L’automatisation est bien configurée et Drydock peut travailler sur %s.',
      'Configure blueprints so Drydock can build resources, like hosts and working copies.' => 'Configurer les plans pour que Drydock puisse construire les ressources, comme les hôtes et les copies de travail.',
      'Edit Blueprint: %s' => 'Modifier le plan : %s',
      'All Authorizations' => 'Toutes les autorisations',
      'Unable to pop working directory, directory stack is empty.' => 'Impossible de récupérer le répertoire de travail, la pile de répertoires est vide.',
      'Unknown blueprint field "%s"!' => 'Champ du plan « %s » inconnu !',
      'Dismiss Operation' => 'Annuler l’opération',
      'Trying to activate a resource from the wrong status. Status must be "%s", actually "%s".' => 'Essai d’activation d’une ressource dans un mauvais état. L’état doit être « %s », mais est en fait « %s ».',
      'Retrieve information about Drydock leases.' => 'Récupérer des informations sur les baux Drydock.',
      'Operation' => 'Opération',
      '"%s" (owned by "%s")' => '« %s » (appartient à « %s »)',
      'All Resources' => 'Toutes les ressources',
      'The string constant and name of this lease\'s status.' => 'La constante chaîne et le nom de cet état de bail.',
      'Client Support Unavailable' => 'Assistance client indisponible',
      'Resource reclaimed by %s.' => 'Ressource à nouveau revendiquée par %s.',
      'Leases' => 'Baux',
      'Lease Queued' => 'Bail mis en file',
      'Commands' => 'Commandes',
      'Drydock Resource' => 'Ressource Drydock',
      'If you disable this blueprint, Drydock will no longer use it to allocate new resources. Existing resources will not be affected.' => 'Si vous désactivez ce plan, Drydock ne pourra plus l’utiliser pour allouer de nouvelles ressources. Les ressources existantes ne seront pas affectées.',
      'The repository this revision is associated with ("%s") is not configured to support automation. Configure automation for the repository to enable revisions to be landed automatically.' => 'Le dépôt avec lequel est associé cette révision (« %s ») n’est pas configuré pour prendre en charge l’automatisation. Configurez l’automatisation pour le dépôt afin de permettre aux versions d’y atterrir automatiquement.',
      'Staging Unavailable' => 'Zone de mise en place indisponible',
      'Blueprint type "%s" is not valid. Valid types are: %s.' => 'Le type de plan « %s » n’est pas valide. Les types valides sont : %s.',
      'Review the repository operation queue.' => 'Revoir la file des opérations du dépôt.',
      'Unable to Push' => 'Impossible de pousser',
      'Specify a resource type with `%s`.' => 'Spécifiez un type de ressource avec « %s ».',
      'This revision has already been closed. Only open, accepted revisions may land.' => 'Cette version a déjà été fermée. Seules les versions ouvertes et acceptées peuvent atterrir.',
      'Lease Released' => 'Bail relâché',
      'No Authorizations' => 'Aucune autorisation',
      'PHID of the leased resource, if any.' => 'PHID de la ressource louée, s’il y en a.',
      'Lease a resource.' => 'Emprunter une ressource.',
      'Failed to acquire slot locks.' => 'Échec d’acquisition de verrous d’emplacement.',
      'Unable to acquire slot locks: %s.' => 'Impossible d’acquérir des verrous d’emplacement : %s.',
      'Activation complete. This lease is permanent until manually released with:' => 'Activation terminée. Ce bail est permanent jusqu’à ce qu’il soit relâché manuellement avec :',
      'Authorization state of this request.' => 'État d’autorisation de cette requête.',
      'No such operation "%s"!' => 'L’opération « %s » n’existe pas !',
      'No matching operations.' => 'Aucune opération correspondante.',
      'Permanent failure while activating lease ("%s"): %s' => 'Échec permanent pendant l’activation du bail (« %s ») : %s',
      'Run a command on a leased resource.' => 'Lancer une commande sur une ressource empruntée.',
      'When the diff was generated, the client was not able to determine which repository it belonged to, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Quand le diff a été généré, le client ne pouvait pas déterminer à quel dépôt il appartenait, donc la modification n’a pas été poussée en zone de mise en place. Les modifications doivent être poussées en zone de mise en place avant qu’elles puissent atterrir depuis le web.',
      'PHID of the object which requested authorization.' => 'PHID de l’objet qui a demandé l’autorisation.',
      'Scheduled release of lease "%s".' => 'Relâchement planifié du bail « %s ».',
      'Blueprint %d: %s' => 'Plan %s : %s',
      'Drydock Authorizations' => 'Autorisations Drydock',
      'Search authorizations for specific blueprints.' => 'Rechercher des autorisations à partir de plans spécifiques.',
      'Started this operation in a working copy.' => 'Démarrage de cette opération dans une copie de travail.',
      'Operation %d' => 'Opération %s',
      'This change could not be fetched from the remote staging area. It may not have been pushed, or may have been removed.' => 'Cette modification n’a pas pu être récupérée de la zone de mise en place distante. Elle n’a peut-être pas été poussée ou a peut-être été supprimée.',
      'Slot Locks' => 'Verrous d’emplacement',
      'Trying to allocate a resource from the wrong status. Status must be "%s", actually "%s".' => 'Essai d’allocation d’une ressource avec le mauvais état. L’état doit être « %s », mais est « %s ».',
      'No slot locks held.' => 'Aucun verrou d’emplacement détenu.',
      'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.' => 'Décliner cette autorisation ? L’objet ne pourra plus emprunter ni allouer des ressources créées par ce plan.',
      '<Unknown>' => '<Inconnu>',
      'Can Create Blueprints' => 'Peut créer des plans',
      'Already In Flight' => 'Déjà déployé',
      'Lease ("%s") is in bad state ("%s"), expected "%s".' => 'Le bail (« %s ») est dans un état incohérent (« %s »), « %s » attendu.',
      'Lock Key' => 'Verrouiller la clé',
      'Leases can not be released after they are destroyed.' => 'Les baux ne peuvent pas être relâchés après avoir été détruits.',
      'No Repository' => 'Aucun dépôt',
      'You do not have permission to view this log event.' => 'Vous n’avez pas le droit d’afficher cet événement du journal.',
      'Create New Blueprint' => 'Créer un nouveau plan',
      'Resource ID to update.' => 'ID de ressource à mettre à jour.',
      'Allocate Software Resources' => 'Allouer les ressources logicielles',
      'Lease ID to update.' => 'ID du bail à mettre à jour.',
      'Activation Failed' => 'Activation échouée',
      'Already Declined' => 'Déjà refusé',
      'Apply transactions to create or edit a blueprint.' => 'Appliquer les transactions pour créer ou modifier un plan.',
      'Release Resource' => 'Relâcher la ressource',
      'Approve this authorization? The object will be able to lease and allocate resources created by this blueprint.' => 'Approuver cette autorisation ? L’objet pourra emprunter et allouer des ressources créées par ce plan.',
      'An authorization inherits the policies of the blueprint it authorizes access to.' => 'Une autorisation hérite de la politique du plan auquel elle autorise l’accès.',
      'Forcefully releasing a lease may interfere with the operation of the lease holder and trigger destruction of the underlying resource. It can not be undone.' => 'Relâcher de force un bail peut interférer avec l’opération du détenteur du bail et déclencher la destruction de la ressource sous-jacente. Cela ne peut pas être annulé.',
      'All Blueprints' => 'Tous les plans',
      'Lease destroyed.' => 'Bail détruit.',
      'The PHID of the object that owns this lease.' => 'Le PHID de l’objet qui détient le bail.',
      'States' => 'États',
      'Lease activated.' => 'Bail activé.',
      'This resource has no active leases.' => 'Cette ressource n’a aucun bail actif.',
      'Dismiss' => 'Fermer',
      'Lease queued for acquisition.' => 'Bail mis en file pour être acquis.',
      'Resource "%s" could not be reclaimed.' => 'La ressource « %s » n’a pas pu être récupérée.',
      'When this diff was generated, the client did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web. Updating the client may resolve this issue.' => 'Quand ce diff a été généré, le client ne prenait pas en charge les zones de mise en place pour ce système de contrôle de versions, donc la modification n’a pas été poussée en zone de mise en place. Les modifications doivent être poussées en zone de mise en place avant qu’elles puissent être atterries depuis le web. Mettre à jour le client peut résoudre ce problème.',
      'No blueprints exist which can plausibly allocate resources to satisfy the requested lease.' => 'Aucun plan n’existe qui puisse de façon plausible allouer les ressources pour satisfaire le bail demandé.',
      'The push failed. This usually indicates that the change is breaking some rules or some custom commit hook has failed.' => 'La poussée a échoué. Cela indique en général que la modification viole certaines règles ou qu’un complément de validation personnalisée a échoué.',
      'Maximum number of resources this blueprint can have active concurrently.' => 'Nombre maximal de ressources que ce plan peut avoir actives en même temps.',
      'Lease ID to release.' => 'ID du bail à relâcher.',
      'Authorization state of the requesting object.' => 'État d’autorisation de l’objet demandeur.',
      'Repository Operation' => 'Opération sur le dépôt',
      'Operation encountered an error.' => 'L’opération a rencontré une erreur.',
      'This authorization has already been declined.' => 'Cette autorisation a déjà été refusée.',
      'Drydock resource ("%s") has no Almanac binding PHID, so its binding can not be loaded.' => 'La ressource Drydock (« %s ») n’a pas de PHID de lien Almanac, donc sa liaison ne peut pas être chargée.',
      'Manage leases on resources.' => 'Gérer les baux sur les ressources.',
      'The type of a blueprint can not be changed once it has been created.' => 'Le type de plan ne peut pas être modifié une fois qu’il a été créé.',
      'Trying to acquire an active lease on a pending resource. You can not immediately activate leases on resources which need time to start up.' => 'Essai d’acquérir un bail actif sur une ressource en attente. Vous ne pouvez pas activer immédiatement les baux sur les ressources qui demandent du temps pour démarrer.',
      'Invalid or unknown object ("%s") for land operation, expected Differential Revision.' => 'Objet non valide ou inconnu (« %s ») pour faire atterrir l’opération, révision de Differential attendue.',
      'View and manage resources Drydock has built, like hosts.' => 'Afficher et gérer les ressources que Drydock a construites, comme les hôtes.',
      'This revision is still under review. Only revisions which have been accepted may land.' => 'Cette révision est encore en relecture. Seules les révisions qui ont été acceptées peuvent atterrir.',
      'Provides: %s' => 'Fournit : %s',
      'Lease Activated' => 'Bail activé',
      'Specify a command to run.' => 'Spécifiez une commande à exécuter.',
      '%s renamed this blueprint from %s to %s.' => '%s a renommé ce plan de %s en %s.',
      'No active Drydock blueprint exists which can ever allocate a resource for lease "%s".' => 'Aucun plan Drydock actif n’existe qui puisse allouer une ressource pour le bail « %s ».',
      'Release Lease?' => 'Relâcher le bail ?',
      'Approve Authorization' => 'Approuver l\'autorisation',
      'Default Blueprint Edit Policy' => 'Politique de modification des plans par défaut',
      'Blueprint "%s" (of type "%s") is not properly implemented: it built a resource of type "%s" to satisfy a lease requesting a resource of type "%s".' => 'Le plan « %s » (de type « %s ») n’est pas correctement implémenté : il construit une ressource de type « %s » pour satisfaire un bail demandant une ressource de type « %s ».',
      'Implementation' => 'Implémentation',
      'Testing configuration for %s. This may take a moment if Drydock has to clone the repository for the first time.' => 'Test de la configuration pour %s. Cela peut prendre un moment si Drydock doit cloner le dépôt pour la première fois.',
      'Type a lease ID (exact match)...' => 'Saisir un ID de bail (correspondance exacte)…',
      'Resource ID to release.' => 'ID de la ressource à relâcher.',
      'Started Work' => 'Travail démarré',
      'Reclaimed Resources' => 'Ressources récupérées',
      'Unable to acquire slot locks.' => 'Impossible d’acquérir des verrous d’emplacement.',
      'Unable to load lease ("%s").' => 'Impossible de charger le bail (« %s »).',
      'Trying to activate a lease which has the wrong status: status must be "%s", actually "%s".' => 'Essai pour activer un bail qui a le mauvais état : l’état doit être « %s », mais il est « %s ».',
      'You must choose a blueprint type.' => 'Vous devez choisir un type de plan.',
      'Stderr' => 'Stderr',
      'Release a resource.' => 'Relâcher une ressource.',
      'Lease acquired.' => 'Bail acquis.',
      'Unexpected failure while destroying resource ("%s").' => 'Échec inattendu en détruisant la ressource (« %s »).',
      'WARNING: There are %s unapproved authorization(s)!' => 'ATTENTION: Il y a %s autorisation(s) non approuvée(s)!',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must actually allocate the resource it returns.' => 'Le plan « %s » (de type « %s ») n’est pas implémenté correctement : %s doit actuellement allouer la ressource qu’il renvoie.',
      'No commands issued.' => 'Aucune commande émise.',
      'Revision landed into %s.' => 'Révision atterrie en %s.',
      'Waiting %s second(s) for lease to activate.' => array(
        'Attente de %s seconde pour activer le bail.',
        'Attente de %s secondes pour activer le bail.',
      ),
      'Allocation Failed' => 'Echec d\'allocation',
      'Landing revision into %s on %s...' => 'Atterrissage de la révision dans %s le %s…',
      'Authorized' => 'Autorisé',
      'A nautical adventure.' => 'Une aventure nautique.',
      'All Leases' => 'Tous les baux',
      'Resource %s %s' => 'Ressource %s %s',
      'Search for blueprints by name substring.' => 'Rechercher les plans par partie du nom.',
      'Activated' => 'Activé',
      'Reclaimed resource %s.' => 'Ressource %s récupérée.',
      'Already Complete' => 'Déjà terminé',
      'Waiting to test configuration for %s...' => 'Attente de la configuration de test pour %s…',
      'Decline Authorization' => 'Refuser l\'autorisation',
      'Unable to load diff "%s".' => 'Impossible de charger le diff « %s ».',
      'Blueprint type.' => 'Type de plan',
      'Repository PHID "%s" does not exist.' => 'Le dépôt PHID « %s » n’existe pas.',
      'This change did not merge cleanly. This usually indicates that the change is out of date and needs to be updated.' => 'Cette modification n’a pas fusionné proprement. Cela indique en général que la modification est obsolète et doit être mise à jour.',
      'Repository ("%s") has unsupported VCS ("%s").' => 'Le dépôt (« %s ») a un VCS non pris en charge (« %s »).',
      'Drydock Logs' => 'Journaux de Drydock',
      'Authorizations' => 'Autorisations',
      'Updating resource "%s".' => 'Mise à jour de la ressource « %s ».',
      'Repository Unsupported' => 'Dépôt non pris en charge',
      'Type of resource being leased.' => 'Type de ressource empruntée.',
      'Resources can not be released after they are destroyed.' => 'Les ressources ne peuvent pas être relâchées après avoir été détruites.',
      '%s enabled %s.' => '%s a activé %s.',
      'Specify one or more resource IDs to release with "%s".' => 'Spécifier au moins un ID de ressource à relâcher avec « %s ».',
      'Only private key credentials are supported.' => 'Seuls les certificats de clé privée sont pris en charge.',
      'New Blueprint' => 'Nouveau plan',
      'Trying to activate a lease on a pending resource.' => 'Essai d’activation de bail sur une ressource en attente.',
      'Blueprint names can be no longer than %s characters.' => 'Les noms de plans ne peuvent dépasser %s caractères.',
      'Permanent failure while activating resource ("%s"): %s' => 'Échec permanent dans l\'activation de la ressource (« %s ») : %s',
      'Lease' => 'Bail',
      'Lease Not Releasable' => 'Bail non relâchable',
      'Specify one or more lease IDs to update with "%s".' => 'Spécifier au moins un ID de bail à mettre à jour avec « %s ».',
      'The name of this blueprint.' => 'Le nom de ce plan.',
      'Not Activated' => 'Non activé',
      'Use %s to specify a lease.' => 'Utiliser %s pour spécifier un bail.',
      'Some of the Almanac Services defined by this blueprint could not be loaded. They may be invalid, no longer exist, or be of the wrong type: %s.' => 'Certains des services Almanac définis par ce plan n’ont pas pu être chargés. Ils peuvent être non valides, ne plus exister, ou être de type incorrect : %s.',
      '%s created this blueprint.' => '%s a créé ce plan.',
      'JSON file with lease attributes. Use "-" to read attributes from stdin.' => 'Fichier JSON avec les attributs du bail. Utiliser « - » pour lire les attributs depuis stdin.',
      'Update a lease.' => 'Mettre à jour un bail.',
      'Unable to load Almanac binding ("%s") for resource ("%s").' => 'Impossible de charger la liaison Almanac (« %s ») pour la ressource (« %s »).',
      'This authorization has already been approved.' => 'Cette autorisation a déjà été approuvée.',
      'Blueprint %d' => 'Plan %s',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without activating a lease.' => 'Le plan « %s » (de type « %s ») n’est pas implémenté correctement : il est revenu de « %s » sans activer de bail.',
      'Operation encountered an error while performing repository operations.' => 'L’opération a rencontré une erreur en effectuant des opérations de dépôt.',
      'If you enable this blueprint, Drydock will start using it to allocate new resources.' => 'Si vous activez ce plan, Drydock démarrera en l’utilisant pour allouer de nouvelles ressources.',
      'Blueprint failed to allocate a resource after claiming it would be able to: [%s] %s' => 'Le plan a échoué pour allouer une ressource après avoir affirmé qu’il le pourrait : [%s] %s',
      'Command to execute.' => 'Commande à exécuter.',
      'Releasing a resource releases all leases and destroys the resource. It can not be undone.' => 'Relâcher une ressource relâche tous les baux et détruit la ressource. Cela ne peut pas être annulé.',
      '%s disabled this blueprint.' => '%s a désactivé ce plan.',
      'Trying to activate a resource which has not yet been persisted.' => 'Essai d’activation d\'une ressource qui n’a pas encore été persistée.',
      'Blueprint type "%s" is unrecognized. Valid types are: %s.' => 'Le plan de type « %s » n’est pas reconnu. Les types valides sont : %s.',
      'No such resource "%s"!' => 'La ressource « %s » n\'existe pas!',
      'autocommitter' => 'valideur automatique',
      'Waiting for Activation' => 'Attente d’activation',
      'Blueprints must have a name.' => 'Les plans doivent avoir un nom.',
      'Waiting for daemons to activate lease...' => 'Attente que les démons activent le bail…',
      'Already Authorized' => 'Déjà autorisé',
      'Unable to build resource interface of type "%s".' => 'Impossible de construire l’interface de la ressource de type « %s ».',
      'Lease Destroyed' => 'Bail détruit',
      'Active Leases' => 'Baux actifs',
      'Resources inherit the policies of their blueprints.' => 'Les ressources héritent des politiques de leurs plans.',
      'Active Blueprints' => 'Plans actifs',
      'When creating a blueprint, set the type.' => 'Lors de la création d’un plan, définir le type.',
      'To view log details, you must be able to view all associated blueprints, resources, leases, and repository operations.' => 'Pour afficher les détails du journal, vous devez avoir le droit d’afficher les plans, ressources, baux et opérations de dépôt concernés.',
      'Raw Diff Source' => 'Source du diff brut',
      'Edit Drydock Blueprint Configurations' => 'Modifier les configurations du plan Drydock',
      'Resource activation failed: [%s] %s' => 'L’activation de la ressource a échoué : [%s] %s',
      'PHID of the blueprint this request was made for.' => 'PHID du plan pour lequel cette requête a été faite.',
      'Unable to acquire lease "%s" on any resource.' => 'Impossible d’acquérir le bail « %s » sur une ressource.',
      'Updating lease "%s".' => 'Mise à jour du bail « %s ».',
      'Lease has already been destroyed!' => 'Le bail a déjà été détruit !',
      'Create Blueprint' => 'Créer un plan',
      'Retrieve information about Drydock authorizations.' => 'Récupérer l’information sur les autorisations de Drydock.',
      'Repository Unconfigured' => 'Dépôt non configuré',
      'Only new leases may be queued for activation!' => 'Seuls les nouveaux baux peuvent être mis en file pour l’activation !',
      'This blueprint ("%s") does not define any Almanac Service PHIDs.' => 'Ce plan (« %s ») ne définit aucun PHID de service Almanac.',
      'The diff author used the %s flag to skip pushing this change to staging. Changes must be pushed to staging before they can be landed from the web.' => 'L’auteur du diff a utilisé le drapeau %s pour sauter l’étape de poussée cette modification en zone de mise en place. Les modifications doivent être poussées en mise en place avant de pouvoir être atterries depuis le web.',
      'No Resource' => 'Aucune ressource',
      'Trying to queue a lease for activation without any allowed Blueprints. Use "%s" to specify allowed blueprints. The authorizing object must be approved to use the allowed blueprints.' => 'Essai de mettre en file un bail pour activation sans plan autorisé. Utiliser « %s » pour spécifier les plans autorisés. L’objet autorisé doit être approuvé pour utiliser les plans autorisés.',
      'Resource: %s' => 'Ressource: %s',
      'Lease Acquired' => 'Bail acquis',
      'Resource Not Releasable' => 'Ressource non relâchable',
      'You must select a blueprint type when creating a blueprint.' => 'Vous devez sélectionner un type de plan pour créer un plan.',
      'The type of resource this blueprint provides.' => 'Le type de ressource que fournit ce plan.',
      'Reacquiring Resource' => 'Réacquisition de la ressource',
      'Revision Abandoned' => 'Révision abandonnée',
      'Resource "%s" does not exist.' => 'La ressource « %s » n’existe pas.',
      'This revision has already landed.' => 'Cette révision a déjà atterri.',
      'When this diff was generated, it was not pushed to staging for an unknown reason (the status code was "%s"). Changes must be pushed to staging before they can be landed from the web. The server may be running an out-of-date version of Phabricator, and updating may provide more information about this error.' => 'Quand ce diff a été généré, il n’a pas été poussé en zone de mise en place pour une raison inconnue (le code retour était « %s »). Les modifications doivent être poussées en zone de mise en place avant de pouvoir être atterries depuis le code. Le serveur exécute peut-être une version obsolète de Phabricator, et la mettre à jour pourrait fournir plus d’information sur cette erreur.',
      'Activated on Acquisition' => 'Activé à l’acquisition',
      'Release Lease' => 'Relâcher le bail',
      'This engine is used to edit Drydock blueprints.' => 'Ce moteur est utilisé pour modifier les plans de Drydock.',
      'Epoch at which this lease expires, if any.' => 'Epoch auquel le bail expire, s’il y en a un.',
      'Type a blueprint name...' => 'Saisissez un nom de plan...',
      'Reclaim unused resources.' => 'Récupérer les ressources non utilisées.',
      'Waiting For Resource' => 'Attente de la ressource',
      'Revision Not Accepted' => 'Révision non acceptée',
      'Trying to activate lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'Essai d’activation du bail (« %s ») sur une ressource (« %s ») dans le mauvais état (« %s »).',
      'No such lease "%s"!' => 'Pas de bail « %s » !',
      'No Repository Automation' => 'Pas d’automatisation du dépôt',
      'Trying to acquire a lease on a resource which is in the wrong state: status must be "%s", actually "%s".' => 'Essai d’acquisition d’un bail sur une ressource qui est dans le mauvais état : l’état doit être « %s », mais il vaut « %s ».',
      'Lease activated in %sms.' => 'Bail activé en %sms.',
      'Blueprints' => 'Plans',
      'Lease acquired a resource but failed to activate; acquisition will be retried: [%s] %s' => 'Bail acquis sur une ressource, mais échec à son activation ; l’acquisition sera retentée : [%s] %s',
      'Search leases by owner.' => 'Rechercher les baux par propriétaire.',
      'Almanac Hosts' => 'Hôtes d’Almanac',
      'Repository Operations' => 'Opérations de dépôt',
      'Leases inherit policies from the resources they lease.' => 'Les baux héritent des politiques des ressources qu’ils détiennent.',
      'Drydock User Guide' => 'Guide utilisateur de Drydock',
      'Waiting %s second(s) for resource to activate.' => array(
        'Attente de %s seconde pour que la ressource s’active.',
        'Attente de %s secondes pour que la ressource s’active.',
      ),
      'When creating a new Drydock blueprint via the Conduit API, you must provide a "type" transaction to select a type.' => 'En créant un nouveau plan Drydock via l’API Conduit, vous devez fournir une transaction « type » pour sélectionner un type.',
      'Trying to queue a lease for activation without an authorizing object. Use "%s" to specify the PHID of the authorizing object. The authorizing object must be approved to use the allowed blueprints.' => 'Essai de mettre en file un bail pour activation sans un objet l’autorisant. Utiliser « %s » pour spécifier le PHID de l’objet autorisant. L’objet autorisant doit être approuvé pour utiliser les plans permis.',
      'Set the blueprint type.' => 'Définissez le type de plan.',
      'Lease ID.' => 'ID du bail.',
      'Unexpected failure while destroying lease ("%s").' => 'Échec inattendu en détruisant le bail (« %s »).',
      'No Blueprints' => 'Pas de plans',
      'You do not have permission to push to the repository this revision is associated with ("%s"), so you can not land it.' => 'Vous n’avez pas le droit de pousser vers le dépôt ;  cette révision est associée à (« %s »), donc vous ne pouvez la faire atterrir.',
      'Waiting for available resources from: %s.' => 'Attente de ressources disponibles depuis : %s.',
      'Active Resources' => 'Ressources actives',
      'Unable to allocate any binding as a resource.' => 'Impossible d’allouer une liaison comme ressource.',
    );
  }

}
