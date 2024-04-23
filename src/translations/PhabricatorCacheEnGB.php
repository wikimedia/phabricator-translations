<?php

final class PhabricatorCacheEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Cache purger "%s" is not recognized. Available caches are: %s.' => 'Cache purger "%s" is not recognised. Available caches are: %s.',
      'Serializing cache can not write objects (for key "%s")!' => 'Serialising cache can not write objects (for key "%s")!',
    );
  }

}
