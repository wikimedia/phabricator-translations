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
      'Key/Value Configuration Store' => '键/值配置存储',
      'Variable "%s"' => '变量“%s”',
      'Phlux Variables' => 'Phlux变量',
      'Enter value as JSON.' => '输入值为JSON。',
      'Variable key must be unique.' => '变量键必须唯一。',
      'Create Variable' => '创建变量',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s更新了此变量。',
      '%s created this variable.' => '%s创建了此变量。',
      'Edit Variable' => '编辑变量',
      'Variable List' => '变量列表',
      'Variable key is required.' => '变量键必填。',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => '变量键“%s”只能含有小写字母、数字、半角句号和连字符。',
    );
  }

}
