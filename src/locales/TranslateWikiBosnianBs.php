<?php

/**
 * TranslateWiki Locale for Bosnian localization in Phabricator
 */
final class TranslateWikiBosnianBs extends PhutilLocale {

  // Bosnian CLDR plural rules technically differ from Russian/Belarusian/Ukranian
  // but the difference only applies to the handling of Fractions which isn't relevant
  // in the context of Phabricator
  use SlavicPluralTrait;

  public function getLocaleCode() {
    return 'bs';
  }

  public function getLocaleName() {
    return pht('Bosnian');
  }

}