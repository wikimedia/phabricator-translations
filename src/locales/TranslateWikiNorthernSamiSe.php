<?php

/**
 * TranslateWiki Locale for Northern Sami localization in Phabricator
 */
final class TranslateWikiNorthernSamiSe extends PhutilLocale {

  use OneTwoPluralTrait;

  public function getLocaleCode() {
    return 'se';
  }

  public function getLocaleName() {
    return pht('Northern Sámi');
  }

}