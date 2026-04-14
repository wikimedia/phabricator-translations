<?php

final class PhabricatorPhpastCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'Node %d: %s',
  'Generate XHP AST' => 'Genera XHP AST',
  'Token %d: %s' => 'Testimoni %d: %s',
  'XHPAST View' => 'Vista XHPAST',
  'Parse' => 'Analitzar sintàcticament',
  'No such AST!' => 'Cap AST!',
  'Visual PHP Parser' => 'Analitzador sintàctic PHP visual',
);
  }

}
