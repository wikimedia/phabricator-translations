<?php

/**
 * TranslateWiki Locale for Occitan localization in Phabricator
 */
final class TranslateWikiOccitanOc extends PhutilLocale {

  public function getLocaleCode() {
    return 'oc';
  }

  public function getLocaleName() {
    return pht('Occitan');
  }

  public function getFallbackLanguages() {
    return array('ca', 'fr_FR', 'en_US');
  }
  
}