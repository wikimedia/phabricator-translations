<?php

final class PhabricatorPhpastJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  'PHPAST' => 'PHPAST',
  'Node %d: %s' => 'ノード %d: %s',
  'Generate XHP AST' => 'XHP ASTを生成する',
  'Token %d: %s' => 'トークン %d: %s',
  'XHPAST View' => 'XHPASTビュー',
  'Parse' => '解析する',
  'No such AST!' => 'そのようなASTはありません！',
  'Visual PHP Parser' => 'ビジュアルPHPパーサー',
);
  }

}
