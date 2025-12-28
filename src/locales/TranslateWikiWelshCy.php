<?php

/**
 * TranslateWiki Locale for Welsh localization in Phabricator
 */
final class TranslateWikiWelshCy extends PhutilLocale {

  public function getLocaleCode() {
    return 'cy';
  }

  public function getLocaleName() {
    return pht('Welsh');
  }

  public function selectPluralVariant($variant, array $translations) {
    $mh = $variant % 100;
    if ($variant < 4) {
      // zero, one, two, three ("few" in CLDR) have their own variant
      $choice = $variant;
    } elseif ($variant === 6) {
      $choice = 4;
    } else {
      $choice = 5;
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

