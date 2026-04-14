<?php

final class PhabricatorDaemonPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
  'Clock' => 'Zegar',
  'Archived Tasks' => 'Zarchiwizowane zadania',
  'Task %d' => 'Zadanie %d',
  'Task %d: %s' => 'Zadanie %d: %s',
);
  }

}
