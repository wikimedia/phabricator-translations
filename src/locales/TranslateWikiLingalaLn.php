<?php

/**
 * TranslateWiki Locale for Lingala localization in Phabricator
 */
final class TranslateWikiLingalaLn extends PhutilLocale {

  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'ln';
  }

  public function getLocaleName() {
    return pht('Lingala');
  }

  public function getFallbackLocaleCode() {
    return 'fr_FR';
  }

}