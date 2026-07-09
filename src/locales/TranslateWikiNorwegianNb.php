<?php

/**
 * TranslateWiki Locale for Norwegian (Bokmal) localization in Phabricator
 */
final class TranslateWikiNorwegianNb extends PhutilLocale {

    public function getLocaleCode() {
        return 'nb';
    }

    public function getLocaleName() {
        return pht('Norwegian Bokmal');
    }

    public function getFallbackLocaleCode() {
        return ['nn', 'en_US'];
    }

}
