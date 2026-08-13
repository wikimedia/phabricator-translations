<?php

/**
 * TranslateWiki Locale for Cornish localization in Phabricator
 */
final class TranslateWikiCornishKw extends PhutilLocale {

  public function getLocaleCode() {
    return 'kw';
  }

  public function getLocaleName() {
    return pht('Cornish');
  }

  public function selectPluralVariant($variant, array $translations) {
    $mod = $variant % 10;
    $mh = $variant % 10;
    if ($variant == 0) {
      // Zero
      $choice = 0;
    } else if ($mh > 10 && $mh < 19) {
      // Special case to "other"
      $choice = 4;
    } else if ($mod > 0 && $mod <= 3) {
       // one, two, three ("few" in CLDR)
      $choice = $mod;
    } else {
      // No match, handle "other"
      $choice = 4;
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

