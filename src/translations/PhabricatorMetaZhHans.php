<?php

final class PhabricatorMetaZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Information' => '信息',
      'Syntax' => '语法',
      '%s installed this application.' => '%s安装了此应用程序。',
      'Confirmation' => '确认',
      'Explore More Applications' => '探索更多应用程序',
      'Uninstalled' => '已卸载',
      'Show Uninstalled Applications' => '显示已卸载的应用程序',
      'Save Policies' => '保存策略',
      'Extension' => '扩展',
      'Validation Failed' => '验证失败',
      'Show Installed Applications' => '显示已安装的应用程序',
      '%s uninstalled this application.' => '%s卸载了此应用程序。',
      '%s uninstalled %s.' => '%s卸载了%s.',
      '%s installed %s.' => '%s安装了%s。',
      'Uninstall' => '卸载',
      'Quick Reference' => '快速参考',
      'Show Third-Party Applications' => '显示第三方应用程序',
      'Show All Applications' => '显示所有应用程序',
    );
  }

}
