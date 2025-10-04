<?php

final class PhabricatorCacheIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'APCu' => 'APCu',
      'General Cache (TTL)' => 'Cache generale (TTL)',
    );
  }

}
