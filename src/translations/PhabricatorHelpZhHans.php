<?php

final class PhabricatorHelpZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
  'Close any dialog, including this one.' => '关闭任何对话框，包括这个。',
  'Page Shortcuts' => '页面快捷方式',
  '%s Help' => '%s帮助',
  'Hiding Content' => '隐藏内容',
  'Editing Inline Comments' => '编辑内联评论',
  'Global Shortcuts' => '全局快捷方式',
  'Keyboard Shortcuts' => '键盘快捷键',
  'Diff Navigation' => '边栏导航',
);
  }

}
