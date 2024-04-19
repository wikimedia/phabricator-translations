<?php

final class PhabricatorDoorkeeperFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Available publishers class names are:' => 'Les noms de classe d’éditeur disponibles sont :',
      'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.' => 'Pour activer la synchronisation dans Asana, saisir un ID d’espace de travail Asana ici.
    NOTE : cette fonctionnalité est nouvelle et expérimentale.',
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => 'Identifiant d’espace de travail',
      'DoorkeeperURIRef display mode "%s" is unknown.' => 'Le mode d ’affichage de DoorkeeperURIRef « %s » est inconnu.',
      '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s n’a aucun objet visible de l’autre côté ; cela signifie sans doute que la tâche Asana a été supprimée.',
      'Using publisher \'%s\'.' => 'Utilisation de l’éditeur « %s ».',
      'Connect to Other Software' => 'Connecter avec un autre logiciel',
      'When %s creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in %s comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => 'Quand Phabricator crée des tâches dans Asana, il peut ajouter les tâches aux projets d’Asana selon l’application depuis laquelle provient l’objet correspondant dans Phabricator. Par exemple, vous pouvez ajouter des revues de code dans Asana à un projet « Differential ».
    NOTE : cette fonctionnalité est nouvelle et expérimentale.',
      'Failed to update object %s using user %s.' => 'Échec de mise à jour de l’objet %s au moyen de l’utilisateur %s.',
      'You can find an Asana project ID by clicking the project in Asana and then examining the URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            This is the ID to use.
    ' => 'Vous pouvez trouver un ID de projet Asana en cliquant sur le projet dans Asana et en examinant l’URL :
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            Voici l’ID à utiliser.',
      'No Asana provider configured.' => 'Aucun fournisseur Asana configuré.',
      'Asana integration options.' => 'Options d’intégration d’Asana.',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in %s.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ NE PAS MODIFIER CETTE TÂCHE ⚠
    ☠ Vos modifications ne se répercuteront pas dans Phabricator.
    ☠ Vos modifications seront détruites à la prochaine synchronisation de l’état.',
      'JIRA integration is configured not to post anything.' => 'L’intégration de JIRA est configurée pour ne rien publier.',
      'Skipping main task update, object is no longer visible.' => 'Saut de la mise à jour de la tâche principale, l’objet n’est plus visible.',
      'Doorkeeper' => 'Portier',
      'Imported From' => 'Importé depuis',
      'No related users have linked Asana accounts.' => 'Aucun utilisateur associé n’a de compte Asana lié.',
      'Story is about an unsupported object type.' => 'L’histoire concerne un type d’objet non pris en charge.',
      'No JIRA provider configured.' => 'Aucun fournisseur JIRA configuré.',
      '%s could not be loaded.' => '%s n’a pas pu être chargé.',
      'Expected "getDoorkeeperURIRef()" to return "null" or an object of type "DoorkeeperURIRef", but got %s from provider "%s".' => 'Attendait que « getDoorkeeperURIRef() » retourne une valeur nulle ou un objet de type « DoorkeeperURIRef », mais a obtenu « %s » du fournisseur « %s ».',
      'External Object' => 'Objet externe',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Tâche Asana %s',
      'GitHub Issue %s' => 'Problème GitHub %s',
      'Asana Workspace ID to publish into.' => 'Identifiant de l’espace de travail Asana dans lequel publier.',
      'Removing subtask edge to %s, foreign object is not visible.' => 'Suppression de l’arête de la sous-tâche vers %s, l’objet étranger n’est pas visible.',
      'Integration with Asana' => 'Intégration avec Asana',
      'Doorkeeper worker \'%s\' is not enabled.' => 'Le travailleur du portier « %s » n’est pas activé.',
      'Object has no followers or active/passive users.' => 'L’objet n’a aucun abonné ou ni aucun utilisateur actif / passif.',
      'Skipping main task update, cursor is ahead of the story.' => 'Saut de la mise à jour de la tâche principale, le curseur devance l’histoire.',
      'Asana: %s' => 'Asana : %s',
      'Failed to load external object after collision.' => 'Échec du chargement de l’objet externe après une collision.',
      'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }
    ' => 'Pour spécifier les projets auxquels ajouter des tâches, entrer une correspondance JSON avec les noms de classe de l’éditeur en clé et une liste d’ID de projet comme valeur. Par exemple, pour mettre des tâches Differential dans les projets Asana d’ID `123` et `456`, saisir :
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }',
      'Synchronization of child task from Asana failed!' => 'La synchronisation de la tâche enfant depuis Asana a échoué !',
      'Expected external Asana account to have exactly one external account identifier, found %s.' => 'Attendait que le compte Asana externe ait exactement un identifiant de compte externe, mais en a trouvé %s.',
      'Story is about an object with no linked JIRA issues.' => 'L’histoire concerne un objet JIRA sans problème lié.',
      'GitHub User %s' => 'Utilisateur GitHub %s',
      'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'Le problème GitHub d’ID « %s » n’a pas le bon format. Un ID est attendu, de la forme « propriétaire/dépôt#123 ».',
      'Workspace Name' => 'Nom de l’espace de travail',
      'This software is running in silent mode.' => 'Phabricator fonctionne en mode silencieux.',
      'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => 'Impossible de trouver un utilisateur Asana avec des certificats valides pour en obtenir un jeton OAuth.',
      'Synchronization of parent task from Asana failed!' => 'La synchronisation de la tâche parente depuis Asana a échoué !',
      'Optional Asana projects to use as application tags.' => 'Projets facultatifs d’Asana à utiliser comme balises de l’application.',
      'The Asana Workspaces your linked account has access to are:
    %s' => 'Les espaces de nom d’Asana auxquels a accès votre compte lié sont :
    %s',
      'No users to act on linked JIRA objects.' => 'Aucun utilisateur pour agir sur les objets JIRA liés.',
      'Updating main task.' => 'Mise à jour de la tâche principale.',
      'Story object has no corresponding external JIRA objects.' => 'L’objet histoire n’a aucun objet JIRA externe correspondant.',
    );
  }

}
