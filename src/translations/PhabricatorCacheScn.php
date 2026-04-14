<?php

final class PhabricatorCacheScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
  'APCu' => 'APCu',
  'General Cache (TTL)' => 'Cache ginirali (TTL)',
  'General Cache' => 'Cache ginirali',
  'Unknown cache format.' => 'Furmatu di cache scanusciutu.',
  'OPcache' => 'OPcache',
);
  }

}
