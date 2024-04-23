<?php

final class PhabricatorBaseDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Aplikasyonê \'%s\' çıniyo!',
      '%s Application' => '%s Aplikasyon',
      'Email Verification Required' => 'Araştkerdışê e-postey lazımo',
    );
  }

}
