<?php

/**
 * TranslateWiki Locale for Persian localization in Phabricator
 */
final class TranslateWikiPersianFa extends PhutilLocale {

  use ZeroSingularTrait;
  
  public function getLocaleCode() {
    return 'fa';
  }

  public function getLocaleName() {
    return pht('Persian');
  }

}