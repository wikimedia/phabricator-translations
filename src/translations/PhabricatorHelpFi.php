<?php

final class PhabricatorHelpFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      '%s Help' => '%s Ohje',
      'Keyboard Shortcuts' => 'Pikanäppäimet',
    );
  }

}
