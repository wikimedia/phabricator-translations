<?php

final class PhabricatorSubscriptionsDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Stummschalten',
      'Automatically Subscribed' => 'Automatisch Abonniert',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Dieses Object stummschalten? Du wirst keine weiteren Meldungen oder Emails darüber erhalten.',
      'Mute Notifications' => 'Meldungen stummschalten',
      '%s, %s, %s and %s' => '%s, %s, %s und %s',
      'Change Subscribers' => 'Abonnenten bearbeiten',
    );
  }

}
