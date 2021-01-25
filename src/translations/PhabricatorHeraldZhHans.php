<?php

final class PhabricatorHeraldZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => '需要对象名称。',
      'Rule passed.' => '规则已跳过。',
      'No object exists by that name.' => '不存在该名称的对象。',
      'Rule must have a name.' => '规则必须有一个名称。',
      'Invalid Targets' => '无效目标',
      '(Invalid List)' => '（无效列表）',
      'Herald field "%s" has unknown standard type "%s".' => '传令字段“%s”有未知的标准类型“%s”。',
      'Applies To' => '应用到',
      'all of' => '全部的',
      'lacks bit' => '缺少一点',
      'Type a Herald rule name...' => '输入传令规则名称...',
      'does not contain' => '不包含',
      'Invalid Content Type' => '无效的内容类型',
      'Run On Host' => '在主机上运行',
      'Object Rule' => '对象规则',
      'Rule Name' => '规则名称',
      'Unknown Field: "%s"' => '未知字段：“%s”',
      'Forbidden' => '禁止的',
      '<Unknown Action "%s">' => '<未知操作“%s”>',
      'Action: %s' => '操作：%s',
      'Global Rule' => '全域规则',
      'Do nothing.' => '不做任何事。',
      'Prevent' => '阻止',
      'Invalid Action' => '无效操作',
      'Conditions' => '条件',
      'Save Rule' => '保存规则',
      '%s disabled this rule.' => '%s禁用了此规则。',
      'Edit Herald Rule: %s' => '编辑传令规则：%s',
      'Related Fields' => '相关字段',
      'New Action' => '新操作',
      'No Effect' => '没有影响',
      'Did nothing.' => '不做任何事。',
      'is myself' => '是我自己的',
      'Herald Rules' => '传令规则',
      'Create Herald Rule' => '创建传令规则',
      'Disable Rule' => '禁用规则',
      'Affects: %s' => '影响：%s',
      '//There are no available Herald events for this object.//' => '//没有用于此对象的可用传令活动。//',
      'does not match regexp' => '不匹配正则表达式对象',
      'Wrong Rule Type' => '错误的规则类型',
      'Content Type' => '内容类型',
      'Unknown Action ("%s")' => '未知操作（“%s”）',
      'No rules found.' => '找不到规则。',
      'Browse Herald Rules' => '浏览传令规则',
      'Create Herald Rule: %s' => '创建传令规则：%s',
      'Create Rule' => '创建规则',
      'Edit Rule' => '编辑规则',
      'any of' => '任何的',
      'Dry Run' => '空运行',
      'Show Only Enabled Rules' => '只显示启用的规则',
      'Did Nothing' => '不做任何事',
      'has bit' => '有一点',
      'Test Console' => '测试控制台',
      'is' => '是',
      'is true' => '是真的',
      'H%d' => 'H%s',
      'contains' => '包含',
      'Herald Transcript' => '传令抄本',
      'Authored by %s' => '作者%s',
    );
  }

}
