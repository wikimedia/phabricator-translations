<?php

final class PhabricatorCacheDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
  'APCu' => 'APCu',
  'APCu Disabled' => 'APC/APCu deaktiveret',
  'Unknown cache format.' => 'Ukendt cache-format.',
  'Purge all caches.' => 'Ryd alle cacher.',
  'OPcache Disabled' => 'OPcache deaktiveret',
);
  }

}
