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
      return array('oc', 'en_US');
    }

}
