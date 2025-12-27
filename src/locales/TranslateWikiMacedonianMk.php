<?php

/**
 * TranslateWiki Locale for Macedonian localization in Phabricator
 */
final class TranslateWikiMacedonianMk extends PhutilLocale {

    public function getLocaleCode() {
        return 'mk';
    }

    public function getLocaleName() {
        return pht('Macedonian');
    }

    public function selectPluralVariant($variant, array $translations) {
      if ($variant % 10 == 1 && $variant % 100 !== 11) {
        return reset($translations);
      } else {
        return end($translations);
      }
    }

}
