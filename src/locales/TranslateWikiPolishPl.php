<?php

/**
 * TranslateWiki Locale for Polish localization in Phabricator
 */
final class TranslateWikiPolishPl extends PhutilLocale {

    public function getLocaleCode() {
        return 'pl';
    }

    public function getLocaleName() {
        return pht('Polish');
    }

    public function selectPluralVariant($variant, array $translations) {
        if ($variant == 1) {
            return reset($translations);
        }
        $mh = $variant % 100;
        if ($mh > 10 && $mh < 20) {
            $choice = 2;
        } else {
            switch ($variant % 10) {
                case 2:
                case 3:
                case 4:
                    $choice = 1;
                    break;
                default:
                    $choice = 2;
                    break;
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
