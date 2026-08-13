<?php

final class PhabricatorDoorkeeperSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Available publishers class names are:' => 'Názvy tried dostupných vydavateľov sú:',
  'To enable synchronization into Asana, enter an Asana Workspace ID here.

NOTE: This feature is new and experimental.' => 'Ak chcete povoliť synchronizáciu do Asany, zadajte sem ID pracovného priestoru Asany.

POZNÁMKA: Táto funkcia je nová a experimentálna.',
  'JIRA %s %s' => 'JIRA %s %s',
  'Workspace ID' => 'ID pracovného priestoru',
  'DoorkeeperURIRef display mode "%s" is unknown.' => 'Režim zobrazenia DoorkeeperURIRef „%s“ je neznámy.',
  '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s nemá na druhej strane žiadny viditeľný objekt; to pravdepodobne znamená, že úloha v Asane bola odstránená.',
  'Using publisher \'%s\'.' => 'Používa sa vydavateľ „%s“.',
  'Connect to Other Software' => 'Prepojenie s iným softvérom',
  'When %s creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in %s comes from. For example, you can add code reviews in Asana to a "Differential" project.

NOTE: This feature is new and experimental.' => 'Keď %s vytvára úlohy v Asane, môže ich pridávať do projektov Asany podľa toho, z ktorej aplikácie pochádza zodpovedajúci objekt v %s. Napríklad revízie kódu môžete v Asane pridávať do projektu „Differential“.

POZNÁMKA: Táto funkcia je nová a experimentálna.',
  'Failed to update object %s using user %s.' => 'Nepodarilo sa aktualizovať objekt %s pomocou používateľa %s.',
  'You can find an Asana project ID by clicking the project in Asana and then examining the URL:

  lang=txt
  https://app.asana.com/0/12345678901234567890/111111111111111111
                          ^^^^^^^^^^^^^^^^^^^^
                        This is the ID to use.
' => 'ID projektu Asany zistíte tak, že v Asane kliknete na projekt a preskúmate adresu URL:

  lang=txt
  https://app.asana.com/0/12345678901234567890/111111111111111111
                          ^^^^^^^^^^^^^^^^^^^^
                        Toto je ID, ktoré sa má použiť.',
  'No Asana provider configured.' => 'Nie je nakonfigurovaný žiadny poskytovateľ Asany.',
  'Asana integration options.' => 'Možnosti integrácie s Asanou.',
  '⚠ DO NOT EDIT THIS TASK ⚠
☠ Your changes will not be reflected in %s.
☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ NEUPRAVUJTE TÚTO ÚLOHU ⚠
☠ Vaše zmeny sa v %s neprejavia.
☠ Vaše zmeny budú pri najbližšej synchronizácii stavu zničené.',
  'JIRA integration is configured not to post anything.' => 'Integrácia s JIRA je nakonfigurovaná tak, aby nič nepublikovala.',
  'Skipping main task update, object is no longer visible.' => 'Aktualizácia hlavnej úlohy sa preskakuje, objekt už nie je viditeľný.',
  'Doorkeeper' => 'Doorkeeper',
  'Imported From' => 'Importované z',
  'No related users have linked Asana accounts.' => 'Žiadni súvisiaci používatelia nemajú prepojené účty Asany.',
  'Story is about an unsupported object type.' => 'Príspevok sa týka nepodporovaného typu objektu.',
  'No JIRA provider configured.' => 'Nie je nakonfigurovaný žiadny poskytovateľ JIRA.',
  '%s could not be loaded.' => '%s sa nepodarilo načítať.',
  'Expected "getDoorkeeperURIRef()" to return "null" or an object of type "DoorkeeperURIRef", but got %s from provider "%s".' => 'Očakávalo sa, že „getDoorkeeperURIRef()“ vráti „null“ alebo objekt typu „DoorkeeperURIRef“, ale od poskytovateľa „%2$s“ prišlo %s.',
  'External Object' => 'Externý objekt',
  'JIRA %s' => 'JIRA %s',
  'Asana Task %s' => 'Úloha Asany %s',
  'GitHub Issue %s' => 'Problém GitHubu %s',
  'Asana Workspace ID to publish into.' => 'ID pracovného priestoru Asany, do ktorého sa má publikovať.',
  'Removing subtask edge to %s, foreign object is not visible.' => 'Odstraňuje sa väzba podúlohy na %s, cudzí objekt nie je viditeľný.',
  'Integration with Asana' => 'Integrácia s Asanou',
  'Doorkeeper worker \'%s\' is not enabled.' => 'Pracovník Doorkeeper „%s“ nie je povolený.',
  'Object has no followers or active/passive users.' => 'Objekt nemá žiadnych sledovateľov ani aktívnych/pasívnych používateľov.',
  'Skipping main task update, cursor is ahead of the story.' => 'Aktualizácia hlavnej úlohy sa preskakuje, kurzor je pred príspevkom.',
  'Asana: %s' => 'Asana: %s',
  'Failed to load external object after collision.' => 'Po kolízii sa nepodarilo načítať externý objekt.',
  'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:

  lang=txt
  {
    "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
  }
' => 'Ak chcete určiť projekty, do ktorých sa majú pridávať úlohy, zadajte mapu JSON s názvami tried vydavateľov ako kľúčmi a so zoznamom ID projektov ako hodnotami. Napríklad ak chcete úlohy z aplikácie Differential umiestniť do projektov Asany s ID `123` a `456`, zadajte:

  lang=txt
  {
    "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
  }',
  'Synchronization of child task from Asana failed!' => 'Synchronizácia podradenej úlohy z Asany zlyhala!',
  'Expected external Asana account to have exactly one external account identifier, found %s.' => 'Očakávalo sa, že externý účet Asany bude mať presne jeden identifikátor externého účtu, nájdených %s.',
  'Story is about an object with no linked JIRA issues.' => 'Príspevok sa týka objektu bez prepojených problémov v JIRA.',
  'GitHub User %s' => 'Používateľ GitHubu %s',
  'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'ID problému GitHubu „%s“ nie je správne naformátované. Očakávalo sa ID v tvare „vlastník/repozitár#123“.',
  'Workspace Name' => 'Názov pracovného priestoru',
  'This software is running in silent mode.' => 'Tento softvér beží v tichom režime.',
  'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => 'Nepodarilo sa nájsť žiadneho používateľa Asany s platnými prihlasovacími údajmi, z ktorých by sa dal získať token OAuth.',
  'Synchronization of parent task from Asana failed!' => 'Synchronizácia nadradenej úlohy z Asany zlyhala!',
  'Optional Asana projects to use as application tags.' => 'Voliteľné projekty Asany, ktoré sa majú použiť ako značky aplikácií.',
  'The Asana Workspaces your linked account has access to are:

%s' => 'Pracovné priestory Asany, ku ktorým má váš prepojený účet prístup:

%s',
  'No users to act on linked JIRA objects.' => 'Žiadni používatelia, ktorí by mohli konať s prepojenými objektmi JIRA.',
  'Updating main task.' => 'Aktualizuje sa hlavná úloha.',
  'Story object has no corresponding external JIRA objects.' => 'Objekt príspevku nemá žiadne zodpovedajúce externé objekty JIRA.',
);
  }

}
