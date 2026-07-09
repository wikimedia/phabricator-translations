<?php

/**
 * TranslateWiki Locale for Slovak localization in Phabricator
 */
final class TranslateWikiSlovakSk extends PhutilLocale {

  public function getLocaleCode() {
    return 'sk';
  }

  public function getLocaleName() {
    return pht('Slovak');
  }

  // Copied from PhutilCzechLocale.php in Arcanist upstream. Someday when 
  // upstream Phorge has a working extension mechanism I should downstream the locale
  // files upstream has and use a trait to reduce the code duplication
  public function selectPluralVariant($variant, array $translations) {
    if (count($translations) === 2) {
      list($singular, $plural) = $translations;
      $paucal = $plural;
    } else {
      list($singular, $paucal, $plural) = $translations;
    }

    if ($variant == 1) {
      return $singular;
    }

    if ($variant >= 2 && $variant <= 4) {
      return $paucal;
    }

    return $plural;
  }
}