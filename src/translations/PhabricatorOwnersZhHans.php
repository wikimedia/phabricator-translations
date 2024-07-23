<?php

final class PhabricatorOwnersZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '“”（空字符串）',
      'Configure Owners Package Forms' => '配置主人程序包表单',
      'Package name is required.' => '需要程序包名称。',
      'Create New Package' => '创建新程序包',
      'Include' => '包含',
      'Validating...' => '验证……',
      'Auto Review' => '自动审核',
      'owner' => '所有者',
      'Weak' => '弱',
      'Create a Package' => '创建包',
      'Strong' => '强',
      'PACKAGE DETAIL' => '包详情',
      'Add New Path' => '添加新路径',
      'Exclude' => '排除',
      'Archive Package' => '归档包',
    );
  }

}
