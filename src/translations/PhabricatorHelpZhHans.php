<?php

final class PhabricatorHelpZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => '关闭任何对话框，包括这个。',
      'Unsupported Editor Protocol' => '不受支持的编辑器协议',
      'Change Settings' => '更改设置',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => '您使用不受支持的协议配置了编辑器URI。更改您的设置以使用受支持的协议，或询问您的管理员以通过配置添加选定协议支持：%s',
      '%s Help' => '%s帮助',
      'Keyboard Shortcuts' => '键盘快捷键',
    );
  }

}
