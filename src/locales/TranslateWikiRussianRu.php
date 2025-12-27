<?php

/**
 * TranslateWiki Locale for Russian localization in Phabricator
 */
final class TranslateWikiRussianRu extends PhutilLocale {
    use SlavicPluralTrait;

    public function getLocaleCode() {
        return 'ru';
    }

    public function getLocaleName() {
        return pht('Russian');
    }

}
