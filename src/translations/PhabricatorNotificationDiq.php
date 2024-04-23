<?php

final class PhabricatorNotificationDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Nêwaneya',
      'Connecting...' => 'Gıre beno...',
      'Mark All Read' => 'Pêroyın wanıyayş nışan kerê',
      'Show only unread notifications.' => 'Teyna tebliğanê nêwanê ya bımocne',
      'You have no notifications.' => 'Şıma rê tebliği çıniyê',
    );
  }

}
