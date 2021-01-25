<?php

final class PhabricatorHelpJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'これを含むすべてのダイアログを閉じます。',
      '%s Help' => '%s ヘルプ',
      'Keyboard Shortcuts' => 'キーボード ショートカット',
    );
  }

}
