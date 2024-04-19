<?php

final class PhabricatorSubscriptionsFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'All %d subscribers removed by %s' => 'Kaikki %s tilaajaa poisti %s',
      'Removed %s subscriber(s): %s.' => 'Poistettiin %s tilaaja(a): %s.',
      'All %d subscribers added by %s' => 'Kaikki %s tilaajaa lisäsi %s',
      'Mute Notifications' => 'Hiljennä ilmoitukset',
    );
  }

}
