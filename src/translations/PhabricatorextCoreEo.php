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
      'Download zip' => 'Elŝuti zip',
      'Required' => 'Deviga',
      'Abandoned' => 'Forlasita',
      'Download tar.gz' => 'Elŝuti tar.gz',
    );
  }

}
