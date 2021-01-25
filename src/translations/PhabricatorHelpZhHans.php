<?php

final class PhabricatorHelpZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => '关闭任何对话框，包括这个。',
      '%s Help' => '%s帮助',
      'Keyboard Shortcuts' => '键盘快捷键',
    );
  }

}
