<?php

/**
 * TranslateWiki Locale for Latvian localization in Phabricator
 */
final class TranslateWikiLatvianLv extends PhutilLocale {

  public function getLocaleCode() {
    return 'lv';
  }

  public function getLocaleName() {
    return pht('Latvian');
  }

  // Latvian has complicated plural rules that I don't want to work out right now when it's so far from being displayable anyway
}