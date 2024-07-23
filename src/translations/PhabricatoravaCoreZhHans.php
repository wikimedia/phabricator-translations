<?php

final class PhabricatoravaCoreZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => '反破坏',
      'compute score for given transactions.' => '计算给定事务的分数。',
      'Vandalism detected' => '检测到破坏',
      'No vandalism detected.' => '未检测到破坏。',
      'The time period examined when scoring edits made by a user.' => '对用户所做的编辑进行评分时要检查的时间段。',
      'The number of tasks a new user can edit before we react.' => '在我们做出反应之前新用户可以编辑的任务数量。',
      'You must provide either --user or --user-phid' => '您必须提供--user或--user-phid',
      'Disable the accounts of vandals when these limits are exceeded' => '当超过这些限制时，禁用破坏者的账号',
      'Disable vandal accounts.' => '禁用破坏者账号。',
      '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s在编辑%3$s时触发了反破坏措施（%2$s）。',
      'No action' => '无操作',
      'Scan for vandalism' => '扫描破坏',
    );
  }

}
