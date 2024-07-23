<?php

final class PhabricatorPhpastScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Gruppu %s: %s',
      'Generate XHP AST' => 'Ginira XHP AST',
      'Token %d: %s' => 'Token %s: %s',
      'XHPAST View' => 'Viduta d\'XHPAST',
      'Parse' => 'Analizza',
      'Visual PHP Parser' => 'Analizzaturi PHP visuali',
    );
  }

}
