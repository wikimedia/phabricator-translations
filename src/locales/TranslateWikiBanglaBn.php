<?php

/**
 * TranslateWiki Locale for Bangla localization in Phabricator
 */
final class TranslateWikiBanglaBn extends PhutilLocale {

  use ZeroSingularTrait;

  public function getLocaleCode() {
    return 'bn';
  }

  public function getLocaleName() {
    return pht('Bangla');
  }
}
