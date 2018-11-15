<?php

final class PhabricatorPhpastRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'Genere XHP AST',
      'Token %d: %s' => 'Gettone %s: %s',
      'XHPAST View' => 'Viste de XHPAST',
      'Parse' => 'Analizze',
      'No such AST!' => 'Non ne stonne AST!',
      'Visual PHP Parser' => 'Analizzatore Visual PHP',
    );
  }

}
