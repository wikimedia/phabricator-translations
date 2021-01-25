<?php

final class PhabricatorHelpZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => '關閉包含此的任何對話。',
      '%s Help' => '%s說明',
      'Keyboard Shortcuts' => '鍵盤熱鍵',
    );
  }

}
