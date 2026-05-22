<?php

final class PhabricatorSubscriptionsLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'subscribers' => 'Abonnenten',
  'Remove me as a subscriber' => 'Mech als Abonnent ewechhuelen',
  'Automatically Subscribed' => 'Automatesch abonéiert',
  'You are automatically subscribed to this object.' => 'Dir sidd automatesch op dësen Objet abonéiert.',
  'Removed %s subscriber(s): %s.' => '%s Abonnente déi ewechgeholl goufen: %s',
  'Choose subscribers.' => 'Abonnenten eraussichen',
  'Change Subscribers' => 'Abonnenten änneren',
);
  }

}
