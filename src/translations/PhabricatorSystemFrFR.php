<?php

final class PhabricatorSystemFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Phabricator est actuellement configuré sans base de données modifiable (« principale »), aussi vous ne pouvez inscrire  nulle part de nouvelles informations. Phabricator fonctionnera en lecture seule jusqu’a ce qu’un administrateur le reconfigure avec une base de données modifiable.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'L’extension « %s » n’est pas installée sur ce système, les codages de caractères ne sont donc pas pris en charge. Installez « %s » pour activer cette fonctionnalité.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'Ce mode est actif car il est activé par l’option de configuration « %s ».',
      'Panic!' => 'Panique !',
      'View Handle' => 'Voir le Handle',
      'No Writable Database' => 'Aucune base de données disponible en écriture',
      'Destroying %s **%s**...
    ' => 'Destruction de %s **%s**...',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'L’objet « %s » ne peut pas être détruit (il ne met pas en œuvre %s).',
      'No Encoding Support' => 'Pas de prise en charge de l’encodage',
      'No such object "%s" exists!' => 'Aucun objet « %s » n’existe !',
      'Severed From Master' => 'Restreint depuis la base principale',
      'Cluster Database Status' => 'État de la grappe de base de données',
      'Engine: Destruction' => 'Moteur : destruction',
      'Object ("%s") does not implement interface "%s", so this type of object can not be unlocked.' => 'L’objet (« %s ») ne met pas en œuvre l’interface « %s », ce type d’objet ne peut donc pas être déverrouillé.',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Cette requête a été servie depuis une base de données répliquée. Les bases de données répliquées peuvent avoir du retard par rapport à la base principale, aussi des activités récentes peuvent ne pas être reflétées dans l’interface utilisateur. Ces données seront restaurées si la base de données principale est restaurée, mais pourraient être perdues si la base principale a été réduite à un tas de cendre.',
      'Permanently destroy objects.' => 'Détruire les objets de façon définitive.',
      'Choose a syntax highlighting to use.' => 'Choisir une coloration syntaxique à utiliser.',
      '%d / hour' => '%s / heure',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.' => 'Cela peut se produire en cas d’anomalie temporaire du réseau côté serveur, comme des radiations cosmiques ou d’effrayants fantômes. Si cette défaillance a été causée par une interruption de service passagère, Phabricator se rétablira dans quelques instants.',
      'Rate Limiting Actions' => 'Actions à fréquence limitée',
      'Highlighting' => 'Coloration',
      'Unable to Reach Master' => 'Impossible de contacter la base principale',
      'Phabricator was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Phabricator n’a pas pu se connecter à la base de données modifiable (« principale ») lors du traitement de cette requête et a été automatiquement dégradé en mode de lecture seule.',
      'View As' => 'Voir comme',
      'Permanently destroyed %s object(s).' => '%s objet(s) détruit(s) de manière permanente.',
      'Choose Encoding' => 'Choisir le codage',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the Phabricator upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'La destruction d’objets peut causer l’arrêt du fonctionnement des objets liés et peut laisser des références éparses à des objets qui n’existent plus. Dans la plupart des cas, il est préférable de désactiver ou d’archiver des objets au lieu de les détruire. Ce risque est accru lors de la suppression d’objets complexes ou fortement connectés tels que les dépôts de fichiers, les projets et les utilisateurs.
    Ces cas bordures dégradés sont une conséquence inattendue de la destruction d’objets et le flux montant de Phabricator ne pourra pas vous aider à les corriger. Nous recommandons fortement de désactiver ou archiver des objets à la place.',
      'IMPORTANT' => 'IMPORTANT',
      'Quite Unsettling' => 'Assez troublant',
      'Object owner can not be unlocked: the unlocking engine ("%s") for this object does not implement an owner unlocking mechanism.' => 'Le propriétaire du fichier ne peut pas être déverrouillé : le moteur de déverrouillage (« %s ») pour cet objet ne met en œuvre aucun mécanisme de déverrouillage du propriétaire.',
      'Choose a document engine to use.' => 'Choisir un moteur de document à utiliser.',
      'Destruction Logs' => 'Journaux de destruction',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Cela indique probablement une mauvaise configuration ou une interruption majeure du service.',
      'Destroying objects...' => 'Objets en cours de destruction...',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.' => 'Le mode lecture seule a été explicitement activé par un administrateur humain. Vous pouvez donc obtenir plus d’informations sur cette activation en reculant votre chaise de bureau et en criant « Hé ! Pourquoi Phabricator est-il en mode lecture seule ??! » avec votre plus forte voix extérieure.',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Ce mode est actif car aucune base de données n’a de rôle « %s » dans l’option de configuration « %s ».',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Ceci peut aussi signifier qu’une erreur plus grave est survenue. Si l’interruption ne se résout pas seule, Phabricator détectera bientôt la panne persistante et activera le mode lecture seule jusqu’à ce que le problème soit résolu.',
      'Object view policy can not be unlocked because this object does not have a mutable view policy.' => 'La politique de visualisation de l’objet ne peut pas être déverrouillée car cet objet n’a pas de politique de visualisation mutable.',
      'Select Character Encoding' => 'Sélectionner le codage des caractères',
      'Select Syntax Highlighting' => 'Sélectionner la coloration syntaxique',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'LES DONNÉES SERONT SUPPRIMÉES DE FAÇON DÉFINITIVE',
      'Choose Highlighting' => 'Choisir une coloration',
      'An administrator has placed Phabricator into read-only mode.' => 'Un administrateur a placé Phabricator en mode de lecture seule.',
      'Advanced/Developer...' => 'Avancé / développeur...',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Les objets seront définitivement détruits. Il n’y aura aucun moyen d’annuler cette opération ni de récupérer ces données, à moins que vous conserviez des sauvegardes externes.',
      'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Phabricator a été constamment incapable d’atteindre la base de données (« master ») en écriture lors du traitement des demandes récentes.',
      'Aborted, your objects are safe.' => 'Annulé, vos objets sont en sécurité.',
      'No Object URI' => 'Aucun URI d’objet',
      'Show a log of permanently destroyed objects.' => 'Afficher un journal des objets définitivement détruits.',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'L’extension « %s » du moteur de cache a retourné un objet (de classe « %s ») sans PHID.',
      'System' => 'Système',
      'You are performing too many actions too quickly.' => 'Vous effectuez trop d’actions dans un laps de temps trop court.',
      'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Phabricator réessayera périodiquement la connexion et reprendra une fois le service rétabli. La plupart des causes d’interruption de service persistante nécessitent une intervention administrative pour rétablir le service.',
      'Choose a text encoding to use.' => 'Choisir le codage des caractères à utiliser.',
      'These %s object(s) will be destroyed forever:' => 'Ces %s objet(s) seront supprimés de façon définitive :',
      'Select Document Engine' => 'Sélectionner le moteur de document',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'En mode de lecture seule, vous pouvez lire les informations existantes, mais tant que ce mode ne sera pas désactivé, vous ne pourrez ni modifier des objets, ni en créer de nouveaux.',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Ce mode peut être utilisé pour effectuer une maintenance temporaire, tester une configuration ou archiver une installation de façon permanente.',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'LA SUPPRESSION D’OBJETS CASSE SOUVENT DES CHOSES',
      'View Hovercard' => 'Voir l’Hovercard',
      'Cache engine extension "%s" did not return a list of linked objects.' => 'L’extension du moteur de cache « %s » n’a retourné aucune liste d’objets liés.',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Ceci survient généralement lorsqu’un administrateur travaille de manière active à réparer une configuration temporaire ou un problème de déploiement.',
      '%d / minute' => '%s / minute',
      'Destroy objects without prompting.' => 'Détruire un objet sans demander confirmation.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'Le taux maximum autorisé pour cette action est de %s. Vous effectuez des actions à un taux de %s.',
      'Are you absolutely certain you want to destroy these %s object(s)?' => 'Êtes-vous absolument sûr(e) de vouloir détruire ces %s objet(s) ?',
      'Administrative Read-Only Mode' => 'Mode administratif de lecture seule',
      'Object edit policy can not be unlocked because this object does not have a mutable edit policy.' => 'La politique de modification de l’objet ne peut pas être déverrouillée car cet objet n’a pas de politique de modification mutable.',
      '%d / second' => '%s / seconde',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'En tant qu’administrateur, vous pouvez examiner les informations d’état depuis le tableau de bord de %s. Ce dernier peut fournir plus d’informations sur la situation actuelle.',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Bien que ceci puisse être le résultat d’une configuration inadéquate ou d’une erreur opérationnelle, c’est aussi l’état qui serait atteint si une météorite avait récemment anéanti un centre de données.',
      'Object "%s" exists, but does not have a URI to redirect to.' => 'L’objet « %s » existe mais n’a aucun URI auquel rediriger.',
      'Specify one or more objects to destroy.' => 'Spécifier un ou plusieurs objets à détruire.',
      'Choose Engine' => 'Choisir le moteur',
    );
  }

}
