<?php

final class PhabricatorDoorkeeperCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is running in silent mode.' => 'El Phabricator s\'està executant en mode silenciós.',
      'Available publishers class names are:' => 'Els noms de classe dels editors disponibles són:',
      'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.' => 'Per activar la sincronització a Asana, introduïu aquí un ID d\'espai de treball Asana. <br><br>NOTA: Aquesta característica és nova i experimental.',
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => 'ID de l\'espai de treball',
      'DoorkeeperURIRef display mode "%s" is unknown.' => 'Es desconeix el mode de visualització DoorkeeperURIRef "%s".',
      '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s no té cap objecte visible a l\'altra banda; això indica que la tasca d\'Asana ha estat eliminada.',
      'Using publisher \'%s\'.' => 'S\'està utilitzant l\'editor «%s».',
      'Connect to Other Software' => 'Connecta a un altre programari',
      'Failed to update object %s using user %s.' => 'No s\'ha pogut actualitzar l\'objecte %s utilitzant l\'usuari %s.',
      'You can find an Asana project ID by clicking the project in Asana and then examining the URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            This is the ID to use.
    ' => 'Podeu trobar un ID de projecte Asana fent clic al projecte a Asana i després examinant l\'URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            Aquest és l\'ID a usar.',
      'No Asana provider configured.' => 'No s\'ha configurat cap proveïdor Asana.',
      'Asana integration options.' => 'Opcions d\'integració d\'Asana.',
      'JIRA integration is configured not to post anything.' => 'La integració de JIRA està configurada per no publicar res.',
      'Skipping main task update, object is no longer visible.' => 'Ometent l\'actualització principal de la tasca, l\'objecte ja no és visible.',
      'Doorkeeper' => 'Porter',
      'Imported From' => 'Importat Des De',
      'When Phabricator creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in Phabricator comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => 'Quan Phabricator crea tasques a Asana, pot afegir les tasques als projectes Asana basant-se en l\'aplicació de la qual prové l\'objecte corresponent a Phabricator. Per exemple, podeu afegir revisions de codi a Asana a un projecte "Differential". <br><br>NOTA: Aquesta característica és nova i experimental.',
      'No related users have linked Asana accounts.' => 'Cap usuari relacionat té comptes Asana enllaçats.',
      'Story is about an unsupported object type.' => 'La història és sobre un tipus d\'objecte no admès.',
      'No JIRA provider configured.' => 'No s\'ha configurat cap proveïdor JIRA.',
      '%s could not be loaded.' => '%s no s\'ha pogut carregar.',
      'Expected "getDoorkeeperURIRef()" to return "null" or an object of type "DoorkeeperURIRef", but got %s from provider "%s".' => 'S\'esperava que "getDoorkeeperURIRef()" retornés "null" o un objecte del tipus "DoorkeeperURIRef", però va obtenir %s del proveïdor "%s".',
      'External Object' => 'Objecte extern',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Tasca Asana %s',
      'GitHub Issue %s' => 'Error de GitHub %s',
      'Asana Workspace ID to publish into.' => 'ID de l\'espai de treball Asana on publicar.',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in Phabricator.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ NO EDITEU AQUESTA TASCA ⚠
    ☠ Els canvis no es reflectiran en el Phabricator.
    ☠ Els canvis es destruiran la propera vegada que es sincronitzi l\'estat.',
      'Removing subtask edge to %s, foreign object is not visible.' => 'Eliminant el flanc de la subtasca a %s, l\'objecte estrany no és visible.',
      'Integration with Asana' => 'Integració amb Asana',
      'Doorkeeper worker \'%s\' is not enabled.' => 'El treballador porter «%s» no està habilitat.',
      'Object has no followers or active/passive users.' => 'L\'objecte no té seguidors ni usuaris actius ni passius.',
      'Skipping main task update, cursor is ahead of the story.' => 'Saltant l\'actualització principal de la tasca, el cursor està per davant de la història.',
      'Asana: %s' => 'Asana: %s',
      'Failed to load external object after collision.' => 'No s\'ha pogut carregar l\'objecte extern després de la col·lisió.',
      'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }
    ' => 'Per especificar projectes per afegir tasques, introduïu un mapa JSON amb noms de classes editorials com a claus i una llista d\'identificadors de projectes com a valors.  Per exemple, per posar tasques diferencials en projectes Asana amb ID `123` i `456`, introduïu: 
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }',
      'Synchronization of child task from Asana failed!' => 'Ha fallat la sincronització de la tasca fill d\'Asana!',
      'Expected external Asana account to have exactly one external account identifier, found %s.' => 'S\'esperava que el compte extern d\'Asana tingués exactament un identificador de compte extern, s\'han trobat %s.',
      'Story is about an object with no linked JIRA issues.' => 'La història tracta sobre un objecte sense problemes de JIRA relacionats.',
      'GitHub User %s' => 'Usuari GitHub %s',
      'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'L\'ID de la incidència de GitHub «%s» no està formatat correctament.  S\'esperava un ID en la forma «owner/repository#123».',
      'Workspace Name' => 'Nom de l\'espai de treball',
      'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => 'No s\'ha pogut trobar cap usuari Asana amb credencials vàlides per treure un testimoni OAuth.',
      'Synchronization of parent task from Asana failed!' => 'Ha fallat la sincronització de la tasca pare d\'Asana!',
      'Optional Asana projects to use as application tags.' => 'Projectes Asana opcionals per utilitzar com a etiquetes d\'aplicació.',
      'The Asana Workspaces your linked account has access to are:
    %s' => 'Els espais de treball Asana als quals té accés el vostre compte enllaçat són:
    %s',
      'No users to act on linked JIRA objects.' => 'No hi ha usuaris per actuar en objectes JIRA enllaçats.',
      'Updating main task.' => 'Actualitzant la tasca principal.',
      'Story object has no corresponding external JIRA objects.' => 'L\'objecte d\'història no té cap objecte JIRA extern corresponent.',
    );
  }

}
