<?php

final class PhabricatorPhrictionNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Version %d' => 'Versjon %s',
      'Draft %d' => 'Kladd %s',
      'Save as Draft' => 'Lagre som kladd',
    );
  }

}
