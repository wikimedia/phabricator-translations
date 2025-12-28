<?php

/**
 * TranslateWiki Locale for Kannada localization in Phabricator
 */
final class TranslateWikiKannadaKn extends PhutilLocale {

  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'kn';
  }

  public function getLocaleName() {
    return pht('Kannada');
  }
}