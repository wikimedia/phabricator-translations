<?php

final class PhabricatorHelpEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
  'Close any dialog, including this one.' => 'Fermi ajnan dialogon, inkluzive de ĉi tiu.',
  '%s Help' => 'Helpo pri %s',
  'Keyboard Shortcuts' => 'Fulmoklavoj',
);
  }

}
