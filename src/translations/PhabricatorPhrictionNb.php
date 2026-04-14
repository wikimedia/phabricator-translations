<?php

final class PhabricatorPhrictionNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
  'Version %d' => 'Versjon %d',
  'Draft %d' => 'Kladd %d',
  'Save as Draft' => 'Lagre som kladd',
);
  }

}
