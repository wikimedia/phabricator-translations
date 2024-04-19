<?php

final class PhabricatorSystemFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'An Administrator has placed this server into read-only mode.' => 'Järjestelmänvalvoja on asettanut Phabricatorin vain luku -tilaan.',
      'Panic!' => 'Paniikki!',
      'No Writable Database' => 'Ei kirjoitettava tietokanta',
      '%d / hour' => '%s / tunti',
      'IMPORTANT' => 'TÄRKEÄ',
      'System' => 'Järjestelmä',
      '%d / minute' => '%s / minuutti',
      '%d / second' => '%s / sekunti',
    );
  }

}
