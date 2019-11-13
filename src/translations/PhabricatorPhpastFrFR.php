<?php

final class PhabricatorPhpastFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Nœud %s : %s',
      'Generate XHP AST' => 'Générer du XHP AST',
      'Token %d: %s' => 'Jeton %s : %s',
      'XHPAST View' => 'Vue de XHPAST',
      'Parse' => 'Analyser',
      'No such AST!' => 'Aucun AST !',
      'Visual PHP Parser' => 'Analyseur de PHP visuel',
    );
  }

}
