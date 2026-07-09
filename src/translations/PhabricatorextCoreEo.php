<?php

final class PhabricatorextCoreEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
  'Invalid' => 'Nevalida',
  'Unknown' => 'Nekonata',
  'Required' => 'Deviga',
  'Abandoned' => 'Forlasita',
);
  }

}
