<?php

final class PhabricatorPhpastZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => '節點%s：%s',
      'Generate XHP AST' => '產生 XHP AST',
      'Token %d: %s' => '權杖%s：%s',
      'XHPAST View' => 'XHPAST 概觀',
      'Parse' => '解析',
      'No such AST!' => '沒有這樣的 AST！',
      'Visual PHP Parser' => '視覺化 PHP Parser',
    );
  }

}
