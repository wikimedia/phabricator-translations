<?php

final class PhabricatorPeopleTe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'te';
  }

  protected function getTranslations() {
    return array(
      'Usernames' => 'వాడుకరి పేరు',
      '  %s' => '  %s',
      'User Details' => 'వాడుకరి వివరాలు',
      'users' => 'వాడుకరులు',
      'User Accounts' => 'వాడుకరి ఖాతాలు',
      'Account Type' => 'ఖాతా రకం',
    );
  }

}
