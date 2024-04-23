<?php

final class PhabricatorDashboardZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Edit Panel' => '编辑面板',
      'Edit Panel: %s' => '编辑面板：%s',
      'Add to Project Menu' => '添加到项目菜单',
      'No dashboards found.' => '找不到控制面板。',
      'Archive Panel' => '存档面板',
      'Dashboards' => '仪表板',
      'Browse Dashboards' => '浏览仪表板',
      'Add the dashboard %s to the menu for project %s?' => '要将仪表板%s添加到项目%s的菜单中吗？',
      'Add Dashboard to Project Menu' => '将仪表板添加到项目菜单',
      'Create Custom Pages' => '创建自定义页面',
      'Select which project menu you want to add the dashboard %s to.' => '选择要将仪表板%s添加到的项目菜单。',
    );
  }

}
