<?php

/**
 * TranslateWiki Locale for Saraiki localization in Phabricator
 */
final class TranslateWikiSaraikiSkrArab extends PhutilLocale {
    public function getLocaleCode() {
        return 'skr_Arab';
    }

    public function getLocaleName() {
        return pht('Saraiki (Arabic Script)');
    }

    public function getFallbackLocaleCode() {
        // None of the fallback languages defined on MediaWiki have locale files for Phabricator
        return 'en_US';
    }
}
