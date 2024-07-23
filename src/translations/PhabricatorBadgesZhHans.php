<?php

final class PhabricatorBadgesZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Rebel' => '叛徒',
      'Create Badge' => '创建徽章',
      'Active Badges' => '激活徽章',
      'New badge description.' => '新徽章描述。',
      'Edit Badge: %s' => '编辑徽章：%s',
      'All Badges' => '所有徽章',
      'View Badge' => '查看徽章',
      'Coder' => '码农',
      'Edit Badge' => '编辑徽章',
      'Choose Badge Icon' => '选择徽章图标',
      '%s renamed this badge from %s to %s.' => '%s将此徽章从%s重命名为%s。',
      'Already awarded' => '已授予',
      '%s created this badge.' => '%s创建了此徽章。',
      'Create a Badge' => '创建徽章',
      'Poor' => '差',
      'Superstar' => '超级明星',
      'New badge icon.' => '新徽章图标。',
      'User PHID of the creator.' => '创建者的用户PHID。',
    );
  }

}
