<?php

final class PhabricatorHelpEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Close any dialog, including this one.',
      'Unsupported Editor Protocol' => 'Unsupported Editor Protocol',
      'Change Settings' => 'Change Settings',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s',
      '%s Help' => '%s Help',
      'Keyboard Shortcuts' => 'Keyboard Shortcuts',
    );
  }

}
