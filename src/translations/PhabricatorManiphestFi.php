<?php

final class PhabricatorManiphestFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Luo tehtävä',
      'TASK DETAIL' => 'TEHTÄVÄN TIEDOT',
      'No tasks found.' => 'Tehtäviä ei löytynyt.',
      'Search...' => 'Hae...',
      'Task' => 'Tehtävä',
      'No tasks.' => 'Ei tehtäviä.',
      'Edit Task' => 'Muokkaa tehtävää',
      'TASK DESCRIPTION' => 'TEHTÄVÄN KUVAUS',
      'Closed By' => 'Sulkenut',
    );
  }

}
