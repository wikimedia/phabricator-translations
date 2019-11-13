<?php

final class PhabricatorHelpZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => '關閉包含此的任何對話。',
      'Unsupported Editor Protocol' => '未支援的編輯器協定',
      'Change Settings' => '變更設定',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => '您設置的編輯器 URI 使用了未支援的協定。請更改您的設定來使用支援協定，或是請求您的管理員透過設置來添加所挑選協定的支援：%s',
      '%s Help' => '%s說明',
      'Keyboard Shortcuts' => '鍵盤熱鍵',
    );
  }

}
