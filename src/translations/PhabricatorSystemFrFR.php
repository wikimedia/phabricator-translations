<?php

final class PhabricatorSystemFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'L\'extension « %s » n\'est pas installée sur ce système, le codage des caractères n\'est donc pas pris en compte. Installez « %s » pour activer cette fonctionnalité.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'Ce mode est actif car il est autorisé par l\'option de configuration « %s ».',
      'Panic!' => 'C\'est la panique !',
      'No Writable Database' => 'Aucune base de données disponible en écriture',
      'Destroying %s **%s**...
    ' => 'Destruction de %s **%s**…',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'L\'objet « %s » ne peut pas être détruit (il n\'implémente pas %s).',
      'No Encoding Support' => 'Pas de prise en charge de l’encodage',
      'No such object "%s" exists!' => 'il n\'existe pas l\'objet « %s » .',
      'Engine: Destruction' => 'Moteur : Destruction',
      'Permanently destroy objects.' => 'Détruire les objets de façon définitive.',
      'Choose a syntax highlighting to use.' => 'Choisir une coloration syntaxique à utiliser.',
      '%d / hour' => '%s / heure',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.' => 'Cela peut se produire en cas d’anomalie temporaire du réseau côté serveur, comme les radiations cosmiques ou les fantômes effrayants. Si cette défaillance a été causée par une interruption de service passagère, Phabricator se rétablira dans quelques instants.',
      'Highlighting' => 'Coloration',
      'Permanently destroyed %s object(s).' => 'Objet(s) détruit(s) de manière permanente: %s .',
      'Choose Encoding' => 'Choisir le codage',
      'IMPORTANT' => 'IMPORTANT',
      'Quite Unsettling' => 'Presque ininstallable',
      'Destruction Logs' => 'Journaux de destruction',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Cela indique probablement une mauvaise configuration ou une interruption majeure du service.',
      'Destroying objects...' => 'Objets en cours de suppression...',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.' => 'Le mode lecture seule a été explicitement activé par un administrateur humain. Vous pouvez donc obtenir plus d\'informations sur cette activation en reculant votre chaise de bureau et en criant « Hé ! Pourquoi Phabricator est-il en mode lecteure seule ??! » à l\'aide de votre voix la plus puissante.',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Ce mode est actif car aucune base de données n\'a de rôle « %s » dans l\'option de configuration « %s ».',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Ceci peut aussi signifier qu\'une erreur plus grave est survenue. Si l\'interruption ne se résout pas seule, Phabricator détectera bientôt la panne persistante et activera le mode lecture seule jusqu\'à ce que le problème soit résolu.',
      'Select Character Encoding' => 'Choisir le codage des caractères',
      'Select Syntax Highlighting' => 'Choisir la coloration syntaxique',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'LES DONNÉES SERONT SUPPRIMÉES DE FAÇON DÉFINITIVE',
      'Choose Highlighting' => 'Choisir une coloration',
      'An administrator has placed Phabricator into read-only mode.' => 'Un administrateur a activé le mode lecture seule sur Phabricator.',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Les objets seront définitivement détruits. Il n\'y a aucun moyen d\'annuler cette opération ou de récupérer ces données à moins de conserver des sauvegardes externes.',
      'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Phabricator n\'a pas été capable d’atteindre la base de données ("master") en écriture pendant le traitement des demandes récentes.',
      'Aborted, your objects are safe.' => 'Annulé, vos objets sont en sécurité.',
      'No Object URI' => 'Pas d\'URI d\'objet',
      'Show a log of permanently destroyed objects.' => 'Afficher un journal des objets définitivement détruits.',
      'System' => 'Système',
      'You are performing too many actions too quickly.' => 'Vous effectuez trop d\'actions dans un laps de temps trop court.',
      'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Phabricator réessaye périodiquement la reconnexion et restaurer une fois le service rétabli. La plupart des causes d’interruption de service persistante nécessiteront une intervention administrative afin de rétablir le service.',
      'Choose a text encoding to use.' => 'Choisir le codage des caractères à utiliser.',
      'These %s object(s) will be destroyed forever:' => 'Ces objet(s) %s seront supprimés de façon définitive :',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'En mode lecture seule, vous pouvez lire l\'information existante mais vous ne pourrez ni modifier les objets, ni créer de nouveaux objets jusqu\'à ce que ce mode soit désactivé.',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Ce mode peut être utilisé pour effectuer une maintenance temporaire, tester une configuration ou archiver une installation de façon définitive.',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'LA SUPPRESSION D’OBJETS CASSE SOUVENT DES CHOSES',
      'Cache engine extension "%s" did not return a list of linked objects.' => 'Extension du moteur de cache « %s » n’a pas retourné une liste d’objets liés.',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Ceci survient généralement lorsqu\'un administrateur travaille de manière active à réparer une configuration temporaire ou un problème de déploiement.',
      '%d / minute' => '%s / minute',
      'Destroy objects without prompting.' => 'Détruire un objet sans demander l\'autorisation.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'Le taux maximum autorisé pour cette action est de %s. Vous prenez des actions à un taux de %s.',
      'Are you absolutely certain you want to destroy these %s object(s)?' => 'Êtes-vous absolument sûr de vouloir détruire ces %s objet(s) ?',
      'Administrative Read-Only Mode' => 'Mode de lecture seule administrative',
      '%d / second' => '%s / seconde',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'En tant qu\'administrateur, vous pouvez examiner les informations d\'état à l\'aide du tableau de bord %s. Ceci peut fournir plus d\'information sur la situation actuelle.',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Bien que ceci puisse être le résultat d\'une configuration inadéquate ou d\'une erreur opérationnelle, c\'est aussi l\'état atteint si une météorite a récemment anéanti un centre de données.',
      'Object "%s" exists, but does not have a URI to redirect to.' => 'L\'objet « %s » existe, mais ne possède pas d\'URI de redirection.',
      'Specify one or more objects to destroy.' => 'Spécifier un ou plusieurs objets à détruire.',
    );
  }

}
