<?php

/**
 * TranslateWiki Locale for Norwegian localization in Phabricator
 */
final class TranslateWikiNorwegianNb extends PhutilLocale {
    public function getLocaleCode() {
        return 'nb';
    }

    public function getLocaleName() {
        return pht('Norwegian');
    }

    public function getFallbackLocaleCode() {
        // MediaWiki falls back to no (not supported by translatewiki at all)
        // and then nn (theoretically supported but no significant translation effort)
        // If one of those gets enough translations to warrant a locale then it should be
        // added here and getLocaleName() above should be renamed to "Norwegian Bokmal"
        // until then return en-US so proto-English strings aren't shown
        return 'en_US';
    }
}
