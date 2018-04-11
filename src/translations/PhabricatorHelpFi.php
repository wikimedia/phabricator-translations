<?php

final class PhabricatorHelpFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Change Settings' => 'Muuta asetuksia',
      '%s Help' => '%s Ohje',
      'Keyboard Shortcuts' => 'Pikanäppäimet',
    );
  }

}
