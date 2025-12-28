<?php

/**
 * TranslateWiki Locale for Hebrew localization in Phabricator
 */
final class TranslateWikiHebrewHe extends PhutilLocale {

  use OneTwoPluralTrait;

  public function getLocaleCode() {
    return 'he';
  }

  public function getLocaleName() {
    return pht('Hebrew');
  }

}