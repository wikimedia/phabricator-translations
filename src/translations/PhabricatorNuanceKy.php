<?php

final class PhabricatorNuanceKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
  'User %s' => 'Колдонуучу %s',
  'Source %d' => '%d булагы',
  'Item %d' => '%d элементи',
);
  }

}
