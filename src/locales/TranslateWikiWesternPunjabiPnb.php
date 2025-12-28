<?php

/**
 * TranslateWiki Locale for Western Punjabi localization in Phabricator
 */
final class TranslateWikiWesternPunjabiPnb extends PhutilLocale {

  // Not in CLDR but I'm assuming this uses the same plurals as Punjabi
  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'pnb';
  }

  public function getLocaleName() {
    return pht('Western Punjabi');
  }

}