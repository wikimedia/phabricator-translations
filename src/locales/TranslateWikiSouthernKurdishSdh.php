<?php

/**
 * TranslateWiki Locale for Southern Kurdish localization in Phabricator
 */
final class TranslateWikiSouthernKurdishSdh extends PhutilLocale {

    public function getLocaleCode() {
      return 'sdh';
    }

    public function getLocaleName() {
      return pht('Southern Kurdish');
    }

    public function getFallbackLocaleCode() {
      return array('ckb','fa','en_US');
    }

}
