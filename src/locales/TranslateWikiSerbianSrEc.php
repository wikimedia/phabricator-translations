<?php

/**
 * TranslateWiki Locale for Serbian localization in Phabricator
 */
final class TranslateWikiSerbianSrEc extends PhutilLocale {
    // Serbian CLDR plural rules technically differ from Russian/Belarusian/Ukranian
    // but the difference only applies to the handling of Fractions which isn't relevant
    // in the context of Phabricator
    use SlavicPluralTrait;

    public function getLocaleCode() {
        return 'sr_EC';
    }

    public function getLocaleName() {
        return pht('Serbian (Cyrillic script)');
    }

}
