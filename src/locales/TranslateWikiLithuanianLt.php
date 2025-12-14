<?php

/**
 * TranslateWiki Locale for Lithuanian localization in Phabricator
 */
final class TranslateWikiLithuanianLt extends PhutilLocale {
  public function getLocaleCode() {
    return 'lt';
  }

  public function getLocaleName() {
      return pht('Lithuanian');
  }
  public function selectPluralVariant($variant, array $translations) {
      $mh = $variant % 100;
      if ($mh > 10 && $mh < 20) {
          $choice = 2;
      } else {
          switch($variant % 10) {
              case 0:
                $choice = 2;
                break;
              case 1:
                $choice = 0;
                break;
              default:
                $choice = 1;
          }
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




