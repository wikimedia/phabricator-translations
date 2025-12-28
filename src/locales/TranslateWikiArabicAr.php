<?php

/**
 * TranslateWiki Locale for Arabic localization in Phabricator
 */
final class TranslateWikiArabicAr extends PhutilLocale {

  public function getLocaleCode() {
    return 'ar';
  }

  public function getLocaleName() {
    return pht('Arabic');
  }
  public function selectPluralVariant($variant, array $translations) {
    $mh = $variant % 100;
    if ($variant < 3) {
        // zero, one, two each have their own variant
        $choice = $variant;
    } elseif ($mh % 100 < 3) {
        // 100, 101, 102, etc (other)
        $choice = 5;
    } elseif ($mh <= 10) {
        // 3-10, 103-110 each get few
        $choice = 3;
    } else {
        // Many
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
