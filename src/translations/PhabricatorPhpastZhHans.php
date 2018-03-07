<?php

final class PhabricatorPhpastZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => '节点%s：%s',
      'Generate XHP AST' => '生成XHP AST',
      'Token %d: %s' => '令牌%s：%s',
      'XHPAST View' => 'XHPAST视图',
      'Parse' => '解析',
      'No such AST!' => '没有这个AST！',
      'Visual PHP Parser' => '可视化PHP解析器',
    );
  }

}
