<?php

/**
 * TranslateWiki Locale for Slovenian localization in Phabricator
 */
final class TranslateWikiSlovenianSl extends PhutilLocale {
  public function getLocaleCode() {
    return 'sl';
  }

  public function getLocaleName() {
      return pht('Slovenian');
  }
  public function selectPluralVariant($variant, array $translations) {
    switch($variant % 100) {
      case 1:
        $choice = 0;
        break;
      case 2:
        $choice = 1;
        break;
      case 3:
      case 4:
        $choice = 2;
        break;
      default:
        $choice = 3;
    }
    if (!isset($translations[$choice])) {
        // This shouldn't happen, but don't crash if a translator
        // enters the wrong number of plural forms
        return end($translations);
    } else {
        return $translations[$choice];
    }
  }
}




