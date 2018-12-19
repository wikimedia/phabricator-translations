<?php

final class PhabricatorChatlogDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Forældet)',
      'Jump' => 'Gå til',
      'Newer' => 'Nyere',
      'Jump to Bottom' => 'Gå til bunden',
      'Older' => 'Ældre',
      'Channel List' => 'Kanalliste',
      'Hide Dates' => 'Skjul datoer',
      'Search Dates' => 'Søg datoer',
      'Newest' => 'Nyeste',
    );
  }

}
