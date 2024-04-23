<?php

final class PhabricatorCacheScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'APCu' => 'APCu',
      'APC' => 'APC',
      'General Cache (TTL)' => 'Cache ginirali (TTL)',
      'General Cache' => 'Cache ginirali',
      'Unknown cache format.' => 'Furmatu di cache scanusciutu.',
      'APC User Cache' => 'Cache utenti APC',
      'OPcache' => 'OPcache',
    );
  }

}
