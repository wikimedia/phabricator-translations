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
      'Task %d' => 'Zadanie %s',
      'Task %d: %s' => 'Zadanie %s: %s',
    );
  }

}
