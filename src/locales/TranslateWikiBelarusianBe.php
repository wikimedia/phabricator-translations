<?php

/**
 * TranslateWiki Locale for Belarusian localization in Phabricator
 */
final class TranslateWikiBelarusianBe extends PhutilLocale {
  use SlavicPluralTrait;

  public function getLocaleCode() {
    return 'be_Tarask';
  }

  public function getLocaleName() {
      return pht('Belarusian (Belarus)');
  }
}




