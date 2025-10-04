<?php

final class PhabricatorCacheDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'APCu' => 'APCu',
      'OPcache' => 'OPcache',
      'Failed to inflate data!' => 'Data pıf nêbiyo!',
      'Zend OPcache' => 'Zend OPcache',
    );
  }

}
