<?php

/**
 * TranslateWiki Locale for Belarusian (Taraškievica orthography) localization in Phabricator
 */
final class TranslateWikiBelarusianBeTarask extends PhutilLocale {
  use SlavicPluralTrait;

  public function getLocaleCode() {
    return 'be_Tarask';
  }

  public function getLocaleName() {
    return pht('Belarusian (Taraškievica orthography)');
  }

  public function getFallbackLocaleCode() {
    return 'be';
  }

}
