<?php

/**
 * TranslateWiki Locale for Tigrinya localization in Phabricator
 */
final class TranslateWikiTigrinyaTi extends PhutilLocale {

  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'ti';
  }

  public function getLocaleName() {
    return pht('Tigrinya');
  }
}