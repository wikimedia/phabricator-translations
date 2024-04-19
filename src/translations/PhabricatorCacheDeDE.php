<?php

final class PhabricatorCacheDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Purge all caches.' => 'Leert alle Caches.',
    );
  }

}
