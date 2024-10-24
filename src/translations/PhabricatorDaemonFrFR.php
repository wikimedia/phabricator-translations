<?php

final class PhabricatorDaemonFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Temporary Failures' => 'Erreurs temporaires',
      'Clock' => 'Horloge',
      'Show daemon processes on this host.' => 'Affiche les processus de services d’arrière-plan sur cet hôte.',
      'Leased' => 'Emprunté',
      'Start the standard configured collection of daemons. This is appropriate for most installs. Use **%s** to customize which daemons are launched.' => 'Démarrer la collection configurée standard des services d’arrière-plan de Phabricator. C\'est ce qui convient à la plupart des installations. Utilisez **%s** pour personnaliser les services à lancer.',
      'Starting daemons as %s' => 'Démarrage des démons en tant que %s',
      'SURVIVED' => 'A SURVÉCU',
      'Gracefully restart daemon processes in-place to pick up changes to source. This will not disrupt running jobs. This is an advanced workflow; most installs should use __%s__.' => 'Redémarrer en douceur et sur place les processus de services d’arrière-plan pour prendre en compte les modifications dans les sources. Cela ne perturbera pas les tâches en cours d’exécution. Ceci est une méthode avancée ; la plupart des installations devraient utiliser __%s__.',
      'Retries' => 'Nouvelles tentatives',
      'Shutting Down' => 'En cours d’arrêt',
      'This daemon has not reported a status update recently (within %s). It may have exited abruptly. After %s, it will be presumed dead.' => 'Ce service d’arrière-plan n’a signalé aucune mise à jour d’état récente (pendant %s). Il peut s’être terminé brutalement. Après %s, il sera présumé mort.',
      'This daemon has been lost or exited uncleanly, and is presumed dead.' => 'Ce service d’arrière-plan a été perdu ou ne s’est pas arrêté proprement et est présumé mort.',
      'Terminating process %d...' => 'Terminaison du processus %s...',
      'Running as' => 'Exécution en tant que',
      'No daemons match \'%s\'! Use \'%s\' for a list of available daemons.' => 'Aucun service d’arrière-plan ne correspond à « %s » ! Utiliser « %s » pour une liste des services d’arrière-plan disponibles.',
      'No such daemon "%s"!' => 'Aucun service d’arrière-plan « %s » !',
      'Archived Tasks' => 'Tâches archivées',
      'No tasks have completed in the last 15 minutes.' => 'Aucune tâche ne s’est terminée dans le dernier quart d’heure.',
      'Task Class' => 'Classe de tâche',
      'Queued Tasks' => 'Tâches dans la file',
      'This daemon is shutting down.' => 'Ce service d’arrière-plan est en cours d’arrêt.',
      'Leased Tasks' => 'Tâches empruntées',
      'Enable, disable, or show the lock log.' => 'Activer, désactiver ou afficher le journal des verrous.',
      'Unable to stop all daemon processes. You may need to run this command as root with "sudo".' => 'Impossible d’arrêter tous les processus de services d’arrière-plan. Vous pourriez avoir besoin d’exécuter cette commande avec les privilèges de « root » au moyen de « sudo ».',
      'All Daemons' => 'Tous les services d’arrière-plan',
      'This daemon encountered an error recently and is waiting a moment to restart.' => 'Ce service d’arrière-plan a récemment rencontré une erreur et attend un moment avant de redémarrer.',
      'Daemon %d %s [%s] %s' => 'Service d’arrière-plan %s %s [%s] %s',
      'There are no upcoming event triggers.' => 'Il n’y a aucun déclencheur d’événement imminent.',
      'There are no running daemons for the current instance ("%s"). Use "--force" to stop daemons for all instances.' => 'Il n’y a aucun service d’arrière-plan en cours d’exécution pour l’instance actuelle (« %s »). Utiliser « --force » pour arrêter les services d’arrière-plan pour toutes les instances.',
      'Stop daemon processes on this host, then start the standard daemon loadout.' => 'Arrêter les processus de services d’arrière-plan sur cet hôte, puis démarre le chargement standard des services.',
      'You are trying to run a daemon as a nonstandard user, and `%s` was not able to `%s` to the correct user. 
    The daemons are configured to run as "%s", but the current user is "%s". 
    Use `%s` to run as a different user, pass `%s` to ignore this warning, or edit `%s` to change the configuration.' => 'Vous essayez d’exécuter un service d’arrière-plan en tant qu’utilisateur non standard et `%s` n’a pas pu `%s` vers le bon utilisateur.
    Phabricator est configuré pour lancer les services d’arrière-plan en tant que « %s », mais l’utilisateur actuel est « %s ».
    Utiliser `%s` pour exécuter en tant qu’un autre utilisateur, passer `%s` pour ignorer cet avertissement, ou bien modifier `%s` pour changer la configuration.',
      'STOP' => 'ARRÊTER',
      'You must specify which daemon to launch.' => 'Vous devez spécifier quel service d’arrière-plan lancer.',
      'Run the daemon as the current user instead of the configured %s' => 'Lancer le service d’arrière-plan avec l’utilisateur actuel plutôt que celui (%s) configuré',
      'PID "%d" is not a known daemon PID.' => 'Le PID « %s » n’est pas un PID de service d’arrière-plan de Phabricator connu.',
      'Enabling the lock log.' => 'Activer le journal des verrous.',
      'Reloading process %d...' => 'Rechargement du processus %s...',
      'Lock Logs' => 'Journaux des verrous',
      'Not Leased' => 'Sans bail',
      'This daemon is shutting down gracefully.' => 'Ce service d’arrière-plan est en cours d’arrêt doux.',
      'You can not both "--enable" or "--disable" with search parameters like "--name".' => 'Vous ne pouvez utiliser ni « --enable », ni « --disable » en même temps que des paramètres de recherche tels que  « --name ».',
      'Task Does Not Exist' => 'La tâche n’existe pas',
      'Failures' => 'Échecs',
      'Active Daemons' => 'Services d’arrière-plan actifs',
      'Unknown task status!' => 'État de la tâche inconnu !',
      'Start a specific __daemon__, or __n__ copies of a specific __daemon__.' => 'Démarrer un __service d’arrière-plan__ spécifique, ou __n__ copies d’un __service d’arrière-plan__ spécifique.',
      'There are no running daemons.' => 'Il n’y a aucun service d’arrière-plan en cours d’exécution.',
      'Stopped PID %d ("%s")' => 'Le PID %s (« %s ») a été arrêté',
      'Daemon' => 'Service d’arrière-plan',
      'Daemon Logs' => 'Journaux des services d’arrière-plan',
      'Not Completed' => 'Non terminé',
      'Exited' => 'Sorti',
      'Show a list of available daemons.' => 'Afficher une liste des services d’arrière-plan disponibles.',
      'Start daemons even if daemons are already running.' => 'Démarrer les services d’arrière-plan même si des services d’arrière-plan sont déjà en cours d’exécution.',
      'This task may have recently been garbage collected.' => 'Il est possible que cette tâche ait déjà été nettoyée par le ramasse-miettes.',
      'No matching lock logs.' => 'Aucun journal des verrous correspondant.',
      'Grace period for daemons to attempt a clean shutdown, in seconds. Defaults to __15__ seconds.' => 'Période de grâce que les services d’arrière-plan tentent un arrêt propre, en secondes. Par défaut, __15__ secondes.',
      'Daemon Class' => 'Classe de service d’arrière-plan',
      'Bulk Job %d' => 'Tâche en masse %s',
      'Waiting For Confirmation' => 'En attente de confirmation',
      'Seen' => 'Vu',
      'This daemon is running normally and reported a status update recently (within %s). The process is currently waiting to restart, either because it is hibernating or because it encountered an error.' => 'Ce service d’arrière-plan s’exécute normalement et a rapporté une mise à jour récente de sont état (dans %s). Le processus est actuellement en attente de redémarrage, soit parce qu’il est en hibernation, soit parce qu’une erreur est survenue.',
      'RELOAD' => 'RECHARGER',
      'Freed %s task lease(s).' => array(
        '%s bail de tâche relâché.',
        '%s baux de tâche relâchés.',
      ),
      'Print the logs for all daemons, or some daemon(s) identified by ID. You can get the ID for a daemon from the Daemon Console in the web interface.' => 'Imprimer les journaux pour tous les services d’arrière-plan, ou certains services d’arrière-plan identifiés par leur ID. Vous pouvez obtenir l’ID d’un service d’arrière-plan depuis la Console des services d’arrière-plan sur l’interface web.',
      'Lease Expires' => 'Le bail expire',
      'This daemon is running.' => 'Ce service d’arrière-plan est actif.',
      'This daemon has not reported its status recently. It may have exited uncleanly.' => 'Ce service d’arrière-plan n’a pas rapporté récemment son état. Il peut s’être terminé brutalement.',
      'Maximum pool size.' => 'Taille maximale de la réserve.',
      'Unknown status "%s"!' => 'État « %s » inconnu !',
      'Deprecated. Has no effect.' => 'Obsolète. N’a aucun effet.',
      'This job is waiting for tasks to be queued.' => 'Ce travail attend que des tâches soient ajoutées dans la file.',
      'ERROR: The PHP function %s is disabled. You must enable it to run daemons on this machine.
    ' => 'ERREUR : la fonction PHP %s est désactivée. Vous devez l’activer pour exécuter des services d’arrière-plan sur cette machine.',
      'Lease Status' => 'État du bail',
      'Show logs for daemon(s) with given ID(s).' => 'Afficher les journaux pour les services d’arrière-plan avec leur(s) identifiant(s) donné(s).',
      '%s requires the directory \'%s\' to exist, but it does not exist and could not be created. Create this directory or update \'%s\' in your configuration to point to an existing directory.' => '%s exige l’existence du répertoire « %s », mais il n’existe pas et n’a pas pu être créé. Créez ce répertoire ou mettez à jour « %s » dans votre configuration pour pointer vers un répertoire existant.',
      'Specify a proportion of machine memory which must be free before autoscale pools will grow. For example, a value of 0.25 means that pools will not grow unless the machine has at least 25%%%% of its RAM free.' => 'Spécifier une proportion de la mémoire de la machine qui doit rester libre avant d’agrandir les réserves dimensionnées automatiquement. Par exemple, une valeur « 0,25 » indique que les réserves ne grandiront pas tant que la machine n’a pas au moins 25 %%%% de mémoire libre.',
      'Review logs for a specific lock.' => 'Vérifier les journaux pour un verrou particulier.',
      'Stop all daemon processes on this host, even if they belong to another instance.' => 'Arrêter tous les processus de services d’arrière-plan sur cet hôte, même s’ils appartiennent à une autre instance de Phabricator.',
      'By default, **%s** will free all task leases held by the daemons. With this flag, this step will be skipped.' => 'Par défaut, **%s** libérera tous les baux de tâche détenus par les services d’arrière-plan. Avec ce drapeau, cette étape sera sautée.',
      'Killing process %d...' => 'Processus %s en train d’être tué...',
      'Recently Completed Tasks (Last 15m)' => 'Tâches récemment terminées (dans les 15 dernières minutes)',
      'There are no running daemon processes.' => 'Il n’y a aucun processus de service d’arrière-plan en cours d’exécution.',
      'Maximum Retries' => 'Nombre maximum de tentatives',
      'Task %d' => 'Tâche %s',
      'Manage Daemons' => 'Gérer les services d’arrière-plan de Phabricator',
      'Next In Queue' => 'Suivant en file d’attente',
      'Disabling the lock log.' => 'Désactivation du journal des verrous.',
      'Retries Forever' => 'Retente indéfiniment',
      'Exiting' => 'Fermeture en cours',
      'Held' => 'Détenu',
      'Argv' => 'Argv',
      'You must launch at least one daemon.' => 'Vous devez lancer au moins un service d’arrière-plan.',
      'Lock' => 'Verrouiller',
      'Enable the lock log.' => 'Activer le journal des verrous.',
      'Lease Expired' => 'Bail expiré',
      'Manage Bulk Jobs' => 'Gérer des travaux en masse',
      'Freeing active task leases...' => 'Libération des baux de tâches actives...',
      'Start work on this bulk job?' => 'Commencer l’exécution de ce travail en masse ?',
      'Lock log is already enabled.' => 'Le journal des verrous est déjà activé.',
      'Interrupting process %d...' => 'Interruption du processus %s...',
      'Disable the lock log.' => 'Désactiver le journal des verrous.',
      'View Full Logs' => 'Voir les journaux complets',
      'Lease Owner' => 'Détenteur du bail',
      'SURVIVORS' => 'SURVIVANTS',
      'Average Queue Time' => 'Délai moyen d’attente en file',
      'This job is running.' => 'Ce travail est en cours d’exécution.',
      'Show a specific number of log messages (default 100).' => 'Afficher un nombre spécifique de messages du journal (100 par défaut).',
      'Start Work' => 'Commencer le travail',
      'Daemons in library __%s__:' => 'Services d’arrière-plan dans la bibliothèque __%s__ :',
      'You can not both "--enable" and "--disable" the lock log.' => 'Vous ne pouvez pas utiliser à la fois « --enable » et « --disable » sur le journal des verrous.',
      'Dead' => 'Mort',
      'No tasks are leased by workers.' => 'Aucune tâche n’a été empruntée par des travailleurs.',
      'PPID' => 'PPID',
      '%s s' => '%s s',
      'RUNNING DAEMONS' => 'SERVICES D’ARRIÈRE-PLAN EN COURS D’EXÉCUTION',
      'Stop daemon processes on this host.' => 'Arrête les processus de services d’arrière-plan sur cet hôte.',
      'This daemon exited normally and is no longer running.' => 'Ce service d’arrière-plan s’est terminé normalement et ne s’exécute plus.',
      '(Pool: %s)' => '(Réserve : %s)',
      'No Such Task' => 'Aucune tâche de ce genre',
      '%s exited with a zero exit code, but emitted output consistent with failure under OSX.' => '%s s’est terminé avec un code de sortie à zéro, mais a produit une sortie semblable à un échec sous OSX.',
      'Specify a daemon unambiguously. Multiple daemons match \'%s\': %s.' => 'Spécifiez un service d’arrière-plan de façon non ambiguë. Plusieurs services d’arrière-plan correspondent à « %s » : %s.',
      'Lock log is already disabled.' => 'Le journal des verrous est déjà désactivé.',
      'This daemon did not report a status update for %s. It is presumed dead. Usually, this indicates that the daemon was killed or otherwise exited abruptly with an error. You may need to restart it.' => 'Ce service d’arrière-plan n’a pas rapporté de mise à jour de son état depuis %s. Il est présumé mort. En général, cela indique que le service d’arrière-plan a été tué ou s’est terminé brutalement avec une erreur. Vous pourriez avoir besoin de le redémarrer.',
      'Process %d exited.' => 'Le processus %s s’est terminé.',
      'This daemon is running normally and reported a status update recently (within %s).' => 'Ce service d’arrière-plan s’exécute normalement et a récemment indiqué une mise à jour de son état (dans %s).',
      'Average Duration' => 'Durée moyenne',
      'Daemons are configured to run as user "%s" in configuration option `%s`, but the current user is "%s" and `phd` was unable to switch to the correct user with `sudo`. Command output:
    %s' => 'Les services d’arrière-plan sont configurés pour s’exécuter avec l’utilisateur « %s » dans l’option de configuration `%s`, mais l’utilisateur actuel est « %s » et `php` n’a pas été capable de basculer vers le bon utilisateur avec `sudo`. Sortie de la commande :
    %s',
      'There are no running daemon processes for the current instance ("%s").' => 'Il n’y a aucun processus de services d’arrière-plan pour l’instance actuelle (« %s »).',
      'No log records exist for any daemons.' => 'Aucun enregistrement de journal n’existe pour les services d’arrière-plan.',
      'Unable to stop PID %d ("%s").' => 'Impossible d’arrêter le PID %s (« %s »).',
      'Daemon Processes' => 'Processus de services d’arrière-plan',
      'Not touching active task queue leases.' => 'Ne pas toucher aux baux de file de tâches actives.',
      'Failure Count' => 'Nombre d’échecs',
      'Queue Utilization (Approximate)' => 'Utilisation de la file (approximatif)',
      'Last' => 'Dernier',
      'Upcoming Triggers' => 'Prochains déclencheurs',
      'Daemons are already running:' => 'Des services d’arrière-plan sont déjà en cours d’exécution :',
      'You must specify which daemon to debug.' => 'Vous devez spécifier quel service d’arrière-plan déboguer.',
      'Launching daemons (in debug mode):' => 'Lancement des services d’arrière-plan (en mode de débogage) :',
      'This daemon exited cleanly.' => 'Ce service d’arrière-plan s’est terminé proprement.',
      'NO DAEMONS' => 'AUCUN SERVICE D’ARRIÈRE-PLAN',
      'Bulk Jobs' => 'Travaux en masse',
      'This job is complete.' => 'Ce travail est terminé.',
      'PID' => 'PID',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run daemons on this machine.
    ' => 'ERREUR : l’extension PHP « %s » n’est pas installée. Vous devez l’installer pour exécuter les services d’arrière-plan sur cette machine.',
      'Confirm Bulk Job' => 'Confirmer le travail en masse',
      'Daemon Log' => 'Journal du service d’arrière-plan',
      'Launching daemons:' => 'Lancement des services d’arrière-plan :',
      'There are no running daemon processes to reload.' => 'Il n’y a aucun processus de services d’arrière-plan à recharger.',
      'Use "phd stop" to stop daemons, "phd restart" to restart daemons, or "phd start --force" to ignore running processes.' => 'Utiliser « php stop » pour arrêter des services d’arrière-plan, « php restart » pour les redémarrer, ou bien « php start --force » pour ignorer les processus en cours d’exécution.',
      'This job is waiting for confirmation before work begins.' => 'Ce travail est en attente de confirmation avant de commencer les tâches demandées.',
      'Retries After' => 'Nouvelle tentative après',
      'Start __daemon__ in the foreground and print large volumes of diagnostic information to the console.' => 'Démarrer en avant-plan le __service d’arrière-plan__ et afficher un grand volume d’informations de diagnostic dans la console.',
      'Task %d: %s' => 'Tâche %s : %s',
      'No More Retries' => 'Plus d’autres tentatives.',
      'No log record exists for a daemon with ID "%s".' => 'Il n’existe aucun enregistrement de journal pour un service d’arrière-plan avec l’ID « %s ».',
      'Task %d Missing' => 'Tâche %s manquante',
      'Task queue is empty.' => 'La file des tâches est vide.',
      '%s ago (%s)' => 'il y a %s (%s)',
      'Daemon %s' => 'Service d’arrière-plan %s',
      'PID \'%s\' is not a valid PID.' => 'Le PID « %s » n’est pas valide.',
      'Started' => 'Démarré',
      'Daemon Details' => 'Détails du service d’arrière-plan',
      '(Logs will appear in "%s".)' => '(Les journaux apparaîtront dans « %s ».)',
      'Restart daemons to apply changes.' => 'Redémarrer les services d’arrière-plan pour appliquer les changements.',
    );
  }

}
