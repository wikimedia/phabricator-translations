<?php

/**
 * TranslateWiki Locale for Breton localization in Phabricator
 */
final class TranslateWikiBretonBr extends PhutilLocale {

  public function getLocaleCode() {
    return 'br';
  }

  public function getLocaleName() {
    return pht('Breton');
  }
  public function selectPluralVariant($variant, array $translations) {
    $mh = $variant % 100;
    $div = intdiv($mh, 10);
    if ($div == 1 || $div == 7 || $div == 9) {
        $choice = 4;
    } else {
        switch ($variant % 10) {
            case 1:
                $choice = 0;
                break;
            case 2:
                $choice = 1;
                break;
            case 3:
            case 4:
            case 9:
                $choice = 2;
                break;
            default:
                // Mostly for paranoia so the right thing happens if all 5 plural forms are given
                if ($variant !== 0 && $variant % 1000000 == 0) {
                  $choice = 3;
                } else {
                  $choice = 4;
                }
                break;
        }
    }

    if (!isset($translations[$choice])) {
        // Use the last plural form if not specified
        return end($translations);
    } else {
        return $translations[$choice];
    }
  }
}