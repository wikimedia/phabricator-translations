<?php

/**
 * TranslateWiki Locale for Romanian localization in Phabricator
 */
final class TranslateWikiRomanianRo extends PhutilLocale {

    public function getLocaleCode() {
        return 'ro';
    }

    public function getLocaleName() {
        return pht('Romanian');
    }

    public function selectPluralVariant($variant, array $translations) {
        $mh = $variant % 100;
        // Order: One, few, other (in CLDR terms)
        if ($variant == 0) {
            $choice = 1;
        } elseif ($variant == 1) {
            $choice = 0;
        } elseif ($mh > 0 && $mh < 20) {
            $choice = 1;
        } else {
            $choice = 2;
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
