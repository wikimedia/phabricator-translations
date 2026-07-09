<?php

/**
 * TranslateWiki Locale for Norwegian (Nynorsk) localization in Phabricator
 */
final class TranslateWikiNorwegianNn extends PhutilLocale {

    public function getLocaleCode() {
        return 'nn';
    }

    public function getLocaleName() {
        return pht('Norwegian Nynorsk');
    }

    public function getFallbackLocaleCode() {
        return ['nb', 'en_US'];
    }

}
