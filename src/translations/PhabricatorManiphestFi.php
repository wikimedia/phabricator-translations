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
  'TASK DESCRIPTION' => 'TEHTÄVÄN KUVAUS',
  'You do not have permission to batch edit tasks.' => 'Sinulla ei ole oikeutta muokata tehtäviä erissä.',
  'Closed By' => 'Sulkenut',
);
  }

}
