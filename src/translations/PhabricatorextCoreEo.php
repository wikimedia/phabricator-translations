<?php

final class PhabricatorextCoreEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
      'Allow' => 'Permesi',
      'Deny' => 'Malaprobi',
      'Invalid' => 'Nevalida',
      'Unknown' => 'Nekonata',
      'Required' => 'Deviga',
      'Abandoned' => 'Forlasita',
    );
  }

}
