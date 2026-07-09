<?php

final class PhabricatorPhpastNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Generate PHP AST' => 'PHP AST genereren',
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'Knooppunt %d: %s',
  'Generate XHP AST' => 'XHP AST genereren',
  'Use PHPAST' => 'PHPAST gebruiken',
  'Token %d: %s' => 'Token %d: %s',
  'Use XHPAST' => 'XHPAST gebruiken',
  'XHPAST View' => 'XHPAST-weergave',
  'PHPAST View' => 'XHPAST-weergave',
  'Parse' => 'Ontleden',
  'No such AST!' => 'AST bestaat niet!',
  'Visual PHP Parser' => 'Visuele PHP-parser',
);
  }

}
