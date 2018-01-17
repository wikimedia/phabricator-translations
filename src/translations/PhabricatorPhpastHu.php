<?php

final class PhabricatorPhpastHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'Generált XHP AST',
      'Token %d: %s' => 'Token %s: %s',
      'XHPAST View' => 'XHPAST nézet',
      'Parse' => 'Elemző',
      'No such AST!' => 'Nincs ilyen AST!',
      'Visual PHP Parser' => 'Vizuális PHP elemző',
    );
  }

}
