<?php

final class PhabricatorHelpKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
      '%s Help' => '%s боюнча жардам',
      'Keyboard Shortcuts' => 'Баскычтардын айкалыштары',
    );
  }

}
