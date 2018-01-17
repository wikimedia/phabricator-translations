<?php

final class PhabricatorPhpastNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'Generer XHP AST',
      'No such AST!' => 'Ingen slik AST!',
    );
  }

}
