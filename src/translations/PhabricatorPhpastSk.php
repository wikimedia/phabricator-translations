<?php

final class PhabricatorPhpastSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Generate PHP AST' => 'Vygenerovať PHP AST',
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'Uzol %d: %s',
  'Generate XHP AST' => 'Vygenerovať XHP AST',
  'Use PHPAST' => 'Použiť PHPAST',
  'Token %d: %s' => 'Token %d: %s',
  'Use XHPAST' => 'Použiť XHPAST',
  'XHPAST View' => 'Zobrazenie XHPAST',
  'PHPAST View' => 'Zobrazenie PHPAST',
  'Parse' => 'Analyzovať',
  'No such AST!' => 'Taký AST neexistuje!',
  'Visual PHP Parser' => 'Vizuálny analyzátor PHP',
);
  }

}
