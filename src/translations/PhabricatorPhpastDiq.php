<?php

final class PhabricatorPhpastDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'XHP AST Vırazê',
      'Token %d: %s' => 'Jeton %s: %s',
      'XHPAST View' => 'XHPAST bıvêne',
      'Parse' => 'Tehlil',
      'No such AST!' => 'ASTo wınasi çıniyo!',
      'Visual PHP Parser' => 'Tehlilê PHPyo vênaye',
    );
  }

}
