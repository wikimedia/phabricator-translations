<?php

final class PhabricatorFilesNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Standalone' => 'Zelfstandig',
      '<Invalid Output>' => '<ongeldige uitvoer>',
      'View as Source' => 'Als bron weergeven',
      'View as Video' => 'Als filmpje weergeven',
      'Covered' => 'Gedekt',
      'View as Audio' => 'Als geluid weergeven',
    );
  }

}
