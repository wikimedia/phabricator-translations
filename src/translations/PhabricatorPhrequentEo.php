<?php

final class PhabricatorPhrequentEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Laboras nun',
      'Stop Time' => 'Haltigi tempon',
      'Start Time' => 'Komenca tempo',
    );
  }

}
