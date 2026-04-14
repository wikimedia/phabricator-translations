<?php

final class PhabricatorPhpastEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'Node %d: %s',
  'Generate XHP AST' => 'Generate XHP AST',
  'Token %d: %s' => 'Token %d: %s',
  'XHPAST View' => 'XHPAST View',
  'Parse' => 'Parse',
  'No such AST!' => 'No such AST!',
  'Visual PHP Parser' => 'Visual PHP Parser',
);
  }

}
