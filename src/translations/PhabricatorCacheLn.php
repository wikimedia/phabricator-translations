<?php

final class PhabricatorCacheLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'Extension ya APCu PHP etiamaki, kasi efungolami te na configuration ya PHP na yo. Kofungola bobakisi oyo ekobongisa mosala. Bongisa paramètre " %s " mpo na kofungola bobakisi oyo.',
  'APCu Extension Not Enabled' => 'Extension ya APCu Ezali Activé Te',
  'Enabling APCu will improve performance.' => 'Kofungola APCu ekobongisa mosala.',
  'APCu Disabled' => 'APCu Ezali Désactivé',
);
  }

}
