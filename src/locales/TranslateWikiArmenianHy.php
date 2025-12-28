<?php

/**
 * TranslateWiki Locale for Armenian localization in Phabricator
 */
final class TranslateWikiArmenianHy extends PhutilLocale {

  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'hy';
  }

  public function getLocaleName() {
    return pht('Armenian');
  }
}
