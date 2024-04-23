<?php

final class PhabricatorProjectFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Month' => 'Kuukausi',
      '%d month(s)' => '%s kuukausi/kuukautta',
      'Quarter' => 'Vuosineljännes',
      '%s removed this project\'s image.' => '%s poistin projektin kuvan.',
      'Edit Column' => 'Muokkaa saraketta',
      '%s hid this column.' => '%s piilotti tämän sarakkeen.',
      'Members' => 'Jäsenet',
      '%s edited project(s), added %s: %s; removed %s: %s.' => '%s muokkasi projekteja. Lisäsi %s: %s. Poisti %s: %s.',
      'Show All Projects' => 'Näytä kaikki projektit',
      'Columns must have a name.' => 'Sarakkeilla on oltava nimi.',
      'Removed %s project(s): %s.' => 'Poistettiin %s projekti(a): %s.',
      '%d week(s)' => '%s viikko(a)',
      'Hide Column' => 'Piilota sarake',
      'Maximum Depth' => 'Enimmäissyvyys',
      'Tasks Closed' => 'Suljettuja tehtäviä',
      'Group by Owner' => 'Ryhmittele omistajan mukaan',
      'Added Projects' => 'Lisätyt projektit',
      '%s added %s project(s): %s.' => '%s lisäsi %s projekti(a): %s.',
      'Add Column' => 'Lisää sarake',
      'Project Details' => 'Projektin tiedot',
      'Added %s project(s): %s.' => 'Lisäsi %s projekti(a): %s.',
      'Import Columns' => 'Tuo sarakkeet',
      'Save Column' => 'Tallenna sarake',
      'Closed Tasks' => 'Suljetut tehtävät',
      'Column: %s' => 'Sarake: %s',
      'Change Owner' => 'Vaihda omistajaa',
      'Change status to %s.' => 'Vaihda tilaksi %s.',
      'Create New Project' => 'Luo uusi projekti',
      'Simple move' => 'Yksinkertainen siirto',
      'Move to Column' => 'Siirry sarakkeeseen',
      'Remove projects' => 'Poista projekteja',
      'Projects must have a name.' => 'Projekteilla täytyy olla nimi.',
      'Hidden Columns' => 'Piilotetut sarakkeet',
      'Create a project.' => 'Luo projekti.',
      'Hidden Column' => 'Piilotettu sarake',
      'Edit Details' => 'Muokkaa tietoja',
      'Assign task to %s.' => 'Aseta tehtävän omistajaksi %s.',
      'Create Milestone' => 'Luo virstanpylväs',
      'Group by Status' => 'Lajittele tilan mukaan',
      'Restricted Column' => 'Rajoitettu sarake',
      'Minimum Depth' => 'Vähimmäissyvyys',
      'See full report.' => 'Näytä koko raportti.',
      'Show Column' => 'Näytä sarake',
      '%d day(s)' => '%s päivä(ä)',
      'Play sound %s.' => 'Toista ääni %s.',
      'Create Column' => 'Luo sarake',
      'Milestone' => 'Virstanpylväs',
      'Removed Projects' => 'Poistetut projektit',
      'Week' => 'Viikko',
      'Play sound' => 'Toista ääni',
      'Used on %s column(s).' => 'Käytetty %s sarakkeessa.',
    );
  }

}
