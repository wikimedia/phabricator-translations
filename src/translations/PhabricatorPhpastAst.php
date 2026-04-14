<?php

final class PhabricatorPhpastAst
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ast';
  }

  protected function getTranslations() {
    return array(
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'Nodiu %d: %s',
  'Generate XHP AST' => 'Xenerar XHP AST',
  'Token %d: %s' => 'Pase %d: %s',
  'XHPAST View' => 'XHPAST Ver',
  'Parse' => 'Analizar',
  'No such AST!' => 'Nun esiste AST',
  'Visual PHP Parser' => 'Analizador PHP Visual',
);
  }

}
