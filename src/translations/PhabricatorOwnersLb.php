<?php

final class PhabricatorOwnersLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  '"" (empty string)' => '"" (eidel Zeecheketten)',
  'Validating...' => 'Validéieren...',
  'Own Source Code' => 'Eegene Quellcode',
  'Authority' => 'Autoritéit',
  '[Package]' => '[Pak]',
);
  }

}
