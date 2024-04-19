<?php

final class PhabricatorAuditZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'USERS' => '用户',
      '%s added subscribers: %s.' => '%s添加了订阅者：%s。',
      'Unknown Audit Request Status ("%s")' => '未知审计请求状态（%s）',
      '%s added subscribers...' => '%s添加了订阅者...',
      '%s edited subscribers; added: %s, removed: %s.' => '%s编辑了订阅者；添加了：%s，移除了：%s。',
      'none' => '无',
      '%s removed subscribers: %s.' => '%s移除了订阅者：%s。',
      'A commit\'s subscribers change.' => '一个提交的订阅者更改。',
    );
  }

}
