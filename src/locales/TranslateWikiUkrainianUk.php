<?php

/**
 * TranslateWiki Locale for Ukrainian localization in Phabricator
 */
final class TranslateWikiUkrainianUk extends PhutilLocale {
    use SlavicPluralTrait;

    public function getLocaleCode() {
        return 'uk';
    }

    public function getLocaleName() {
        return pht('Ukrainian');
    }

}
