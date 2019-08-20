<?php

final class PhabricatorPhpastPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Nó %s: %s',
      'Generate XHP AST' => 'Gerar XHP AST',
      'Token %d: %s' => 'Token %s: %s',
      'XHPAST View' => 'Visualizar XHPAST',
      'Parse' => 'Analisar',
      'No such AST!' => 'Nenhum tal AST!',
      'Visual PHP Parser' => 'Analisador PHP Visual',
    );
  }

}
