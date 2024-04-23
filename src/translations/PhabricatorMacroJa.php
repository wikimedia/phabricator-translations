<?php

final class PhabricatorMacroJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Type an emoji name...' => '絵文字名を入力...',
      '%s renamed this macro from %s to %s.' => '%s がこのマクロの名前を %s から %s に変更しました。',
      '%s changed the image for this macro.' => '%s がこのマクロの画像を変更しました。',
      '%s changed the image for %s.' => '%s が %s の画像を変更しました。',
      'Macro name is required.' => 'マクロ名は必須です。',
      '%s changed the audio for %s from %s to %s.' => '%s が %s の音声を %s から %s に変更しました。',
      '%s created this macro.' => '%s がこのマクロを作成しました。',
      '%s changed the audio for this macro from %s to %s.' => '%s がこのマクロの音声を %s から %s に変更しました。',
      'Email Commands: Macros' => 'メール コマンド: マクロ',
      'Type a macro name...' => 'マクロ名を入力...',
    );
  }

}
