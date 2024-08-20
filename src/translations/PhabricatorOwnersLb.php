<?php

final class PhabricatorOwnersLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Validating...' => 'Validéieren...',
      'Authority' => 'Autoritéit',
      '[Package]' => '[Pak]',
    );
  }

}
