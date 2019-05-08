<?php

final class PhabricatorChatlogDe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Veraltet)',
      'Jump' => 'Springen',
      'Newer' => 'Neuere',
      'Older' => 'Ältere',
      'Hide Dates' => 'Daten verstecken',
      'Search Dates' => 'Daten suchen',
      'Newest' => 'Neueste',
    );
  }

}
