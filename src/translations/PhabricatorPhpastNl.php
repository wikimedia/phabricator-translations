<?php

final class PhabricatorPhpastNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'Knooppunt %d: %s',
  'Generate XHP AST' => 'XHP AST genereren',
  'Token %d: %s' => 'Token %d: %s',
  'XHPAST View' => 'XHPAST-weergave',
  'Parse' => 'Ontleden',
  'No such AST!' => 'AST bestaat niet!',
  'Visual PHP Parser' => 'Visuele PHP-parser',
);
  }

}
