<?php

final class PhabricatorPeopleSe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'se';
  }

  protected function getTranslations() {
    return array(
      'Email: Add Address' => 'E-poasta: lasit čujuhusa',
      'Usernames' => 'Geavaheaddjinamat',
      'Hide Bots' => 'Čiega bohtaid',
      'users' => 'geavaheaddjit',
      'New Username: %s' => 'Ođđa geavaheaddjinamma: %s',
      'Email: Verify Address' => 'E-poasta: Nanne čujuhusa',
      'Log Out %s' => 'Čálit olggos %s',
      '    Username: %s' => '    Geavaheaddjinamma: %s',
      'New Username' => 'Ođđa geavaheaddjinamma',
    );
  }

}
