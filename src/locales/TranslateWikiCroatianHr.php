<?php

/**
 * TranslateWiki Locale for Croatian localization in Phabricator
 */
final class TranslateWikiCroatianHr extends PhutilLocale {

    // Croatian CLDR plural rules technically differ from Russian/Belarusian/Ukranian
    // but the difference only applies to the handling of Fractions which isn't relevant
    // in the context of Phabricator
    use SlavicPluralTrait;

    public function getLocaleCode() {
        return 'hr';
    }

    public function getLocaleName() {
        return pht('Croatian');
    }

}
