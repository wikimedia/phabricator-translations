<?php

final class PhabricatorManiphestCsCS
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs_CS';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Vytvořit úkol',
      'Triage' => 'Zatřídit',
      'Define task subtypes.' => 'Definice podtypů úkolů.',
      'Priority of the task.' => 'Priorita úkolu.',
      'Assignee' => 'Řešitel',
      '%s closed %s as %s.' => '%s uzavřel %s jako %s.',
      'This task has been locked.' => 'Tento úkol byl uzamčen.',
      'TASK DETAIL' => 'DETAILY ÚKOLU',
      'Merged' => 'Sloučeno',
      'Description Preview' => 'Náhled popisu',
      'Subtasks' => 'Podúkoly',
      'Needs Triage' => 'Potřebuje zatřídit',
      'Story Points' => 'Příběhové body',
      'Closed, Spite' => 'Uzavřeno, Truc',
      'Recently Closed' => 'Nedávno uzavřené',
      'Valid setting' => 'Platné nastavení',
      'Merged In' => 'Sloučeno',
      'Task' => 'Úkol',
      'Mentions' => 'Zmínky',
      'Select All' => 'Vybrat vše',
      'Duplicates' => 'Duplikáty',
      'Task Locked' => 'Úkol uzamčen',
      'Edit Task: %s' => 'Editovat úkol: %s',
      'Edit Task' => 'Editovat úkol',
      'Low' => 'Nízká',
      'High' => 'Vysoká',
      'Opened' => 'Otevřený',
      '%s closed %s as a duplicate.' => '%s uzavřel %s jako duplikát.',
      'Rename the task.' => 'Přejmenovat úkol.',
      'Wish' => 'Přání',
    );
  }

}
