<?php

final class PhabricatorSystemLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'Panik!',
      'No such object "%s" exists!' => 'Et gëtt keen Objet "%s"!',
      '%d / hour' => '%s / Stonn',
      'IMPORTANT' => 'WICHTEG',
      '%d / minute' => '%s / Minutt',
    );
  }

}
