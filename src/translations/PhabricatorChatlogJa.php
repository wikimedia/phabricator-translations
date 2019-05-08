<?php

final class PhabricatorChatlogJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(廃止予定)',
      'Jump' => 'ジャンプ',
      'Retrieve chatter.' => 'チャッターを取得する。',
      'Newer' => '新しい',
      'Jump to Bottom' => '一番下に移動する',
      'Older' => '古い',
      'ChatLog' => 'チャットログ',
      'Channel List' => 'チャンネルリスト',
      'Hide Dates' => '日付を非表示',
      'Channel Log' => 'チャンネルログ',
      'Newest' => '最新',
      'Record chatter.' => 'チャッターを記録する。',
    );
  }

}
