<?php

final class PhabricatorSettingsIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'Default (%s)' => 'Predeterminita (%s)',
      'Saturday' => 'Saturdio',
      'Settings %d' => 'Preferaji ̩%s',
    );
  }

}
