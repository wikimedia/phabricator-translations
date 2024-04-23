<?php

final class PhabricatorManiphestSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Ustvari opravilo',
      'Search Subtasks' => 'Iskanje podopravil',
      'New task name.' => 'Novo ime opravila.',
      'Oldest (Pri)' => 'Najstarejši (Pri)',
      'Description Preview' => 'Predogled opisa',
      'Show Only Tasks With Open Parents' => 'Prikaži samo opravila z odpritimi nadrejenimi opravili',
      'New task description.' => 'Nov opis opravila.',
      'All Time' => 'Ves čas',
      'Missing Special' => 'Manjka posebno',
      'Tasks to Close and Merge' => 'Opravila za zapiranje in združevanje',
      'List of task monograms, as array.' => 'Seznam monogramov opravil kot matrika.',
      'Search...' => 'Išči ...',
      'Show Only Tasks With Open Subtasks' => 'Prikaži samo opravila z odprtimi podopravili',
      'Close As Duplicate' => 'Zapri kot dvojnik',
      'Block' => 'Blokiraj',
      'Select All' => 'Izberi vse',
      'Feature Request' => 'Predlog za možnost',
      'Task description.' => 'Opis opravila.',
      'Set title to' => 'Nastavite naslov na',
      'High' => 'Visoka',
      'Changed Status' => 'Sprememba stanja',
      'List of task PHIDs, as array.' => 'Seznam PHID-ov opravil kot matrika.',
      'TASK DESCRIPTION' => 'OPIS OPRAVILA',
      'Close and Merge Selected Tasks' => 'Izbrane naloge za zapiranje in združevanje',
      'Batch Task Editor' => 'Urejevalnik paketnih opravil',
      'Search Parent Tasks' => 'Preišči nadrejena opravila',
      'List of task IDs, as array.' => 'Seznam ID-jev opravil kot matrika.',
      'Create a new Maniphest task.' => 'Ustvari novo opravilo Maniphest.',
      'Create New Task' => 'Ustvari novo opravilo',
    );
  }

}
