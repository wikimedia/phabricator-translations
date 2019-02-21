<?php

final class PhabricatorNotificationFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Lukematon',
      'All Notifications' => 'Kaikki ilmoitukset',
      'Unread Notifications' => 'Lukemattomat ilmoitukset',
      'No notifications to mark as read.' => 'Ei luetuksi merkattavia ilmoituksia.',
      'You have no unread notifications.' => 'Sinulla ei ole lukemattomia ilmoituksia.',
      'Connecting...' => 'Yhdistetään...',
      'Mark All Read' => 'Merkitse kaikki luetuksi',
      'Show only unread notifications.' => 'Näytä vain lukemattomat ilmoitukset.',
      'You have no notifications.' => 'Sinulla ei ole ilmoituksia.',
    );
  }

}
