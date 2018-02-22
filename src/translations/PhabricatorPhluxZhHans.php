<?php

final class PhabricatorPhluxZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => '更新变量',
      'Variable value must be valid JSON.' => '变量值必须为有效JSON。',
      'Lowercase letters, digits, dot and hyphen only.' => '仅限小写字母、数字、点和连字符。',
      'Edit Variable: %s' => '编辑变量：%s',
      'Key/Value Configuration Store' => '关键字/值配置存储',
      'Variable "%s"' => '变量“%s”',
      'Phlux Variables' => 'Phlux变量',
      'Enter value as JSON.' => '输入值为JSON。',
      'Variable key must be unique.' => '变量关键字必须独一无二。',
      'Create Variable' => '创建变量',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s更新了此变量。',
      '%s created this variable.' => '%s创建了此变量。',
      'Edit Variable' => '编辑变量',
      'Variable List' => '变量列表',
      'Variable key is required.' => '必须提供变量关键字。',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => '变量关键字“%s”必须只包含小写字母、数字、句号和连字符。',
    );
  }

}
