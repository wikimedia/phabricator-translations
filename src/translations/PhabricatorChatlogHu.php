<?php

final class PhabricatorChatlogHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Elavult)',
      'Jump' => 'Ugrás',
      'Retrieve chatter.' => 'Csevegés letöltése.',
      'Newer' => 'Újabb',
      'Jump to Bottom' => 'Ugrás az aljára',
      'Older' => 'Régebbi',
      'ChatLog' => 'Csevegõnapló',
      'Channel List' => 'Csatorna lista',
      'Hide Dates' => 'Dátumok elrejtése',
      'Search Dates' => 'Keresési dátumok',
      'Newest' => 'Legújabb',
      'Record chatter.' => 'Csevegés rögzítése.',
    );
  }

}
