<?php

/**
 * TranslateWiki Locale for Catalan localization in Phabricator
 */
final class TranslateWikiCatalanCa extends PhutilLocale {
    public function getLocaleCode() {
        return 'ca';
    }

    public function getLocaleName() {
        return pht('Catalan');
    }

    public function getFallbackLocaleCode() {
        // MediaWiki has Catalan fallback to Occitan, but Occitan doesn't have a Phabricator locale file
        // so skip that and fall back to English (or otherwise "Proto-English" AKA English without plural/grammar/gender
        // would be the fallback)
        return 'en_US';
    }
}
