<?php

final class PhabricatorPhpastEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'Generate XHP AST',
      'Token %d: %s' => 'Token %s: %s',
      'XHPAST View' => 'XHPAST View',
      'Parse' => 'Parse',
      'No such AST!' => 'No such AST!',
      'Visual PHP Parser' => 'Visual PHP Parser',
    );
  }

}
