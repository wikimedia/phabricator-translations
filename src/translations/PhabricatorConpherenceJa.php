<?php

final class PhabricatorConpherenceJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
  'New Message' => '新規メッセージ',
  'Room Preferences' => '部屋の個人設定',
  'Add Participants' => '参加者を追加しました',
  '%s created this room.' => '%s がこの部屋を作成しました。',
  'No recent messages' => '最近のメッセージはありません',
  '%s added %d participant(s): %s.' => '%s が 参加者を追加しました: %3$s',
  '%s removed %d participant(s): %s.' => '%s が 参加者を除去しました: %3$s',
  'Theme' => 'テーマ',
  'Participants' => '参加者',
  'Remove Participant' => '参加者を除去',
);
  }

}
