<?php

final class PhabricatorNotificationEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognised type ("%s"). Valid types are "%s" or "%s".',
    );
  }

}
