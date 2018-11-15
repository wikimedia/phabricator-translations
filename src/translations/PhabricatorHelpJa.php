<?php

final class PhabricatorHelpJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'これを含むすべてのダイアログを閉じます。',
      'Unsupported Editor Protocol' => 'サポートされていないエディタプロトコル',
      'Change Settings' => '設定を変更する',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => '設定済みのエディタURIがサポートされていないプロトコルを使用しています。 サポートされているプロトコルを使用するように設定を変更するか、管理者に選択したプロトコルのサポートを追加するように依頼してください：%s',
      '%s Help' => '%s ヘルプ',
      'Keyboard Shortcuts' => 'キーボード ショートカット',
    );
  }

}
