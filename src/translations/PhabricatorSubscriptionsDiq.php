<?php

final class PhabricatorSubscriptionsDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Bêveng',
      'Subscriber' => 'Abone',
      'Unmute Notifications' => 'Tebliğa akerê',
      'subscribers' => 'aboneyi',
      'Remove me as a subscriber' => 'Me aboneyan ra vecê',
      'Remove subscribers.' => 'Aboneya wedarne',
      '%d other(s)' => '%s sewbi(ê bini)',
      '%s, %s, %s and %s' => '%s, %s, %s u %s',
    );
  }

}
