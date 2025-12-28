<?php

/**
 * TranslateWiki Locale for Hindi localization in Phabricator
 */
final class TranslateWikiHindiHi extends PhutilLocale {

  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'hi';
  }

  public function getLocaleName() {
    return pht('Hindi');
  }
}
