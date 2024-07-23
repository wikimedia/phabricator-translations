<?php

final class PhabricatorCalendarJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'イベントはありません。',
      'New event icon.' => '新しいイベントのアイコンです。',
      'Change the event icon.' => 'イベントのアイコンを変更。',
      'Read information about events.' => 'イベントの情報を読みます。',
      '%s changed the automatic update frequency for this import.' => '%s がこのインポートの自動更新の頻度を変更しました。',
      'ICS File' => 'ICS ファイル',
      '.ics URI' => '.ics URI',
      'Export Query as .ics' => 'クエリを .ics 形式でエクスポート',
      'Edit Event' => 'イベントを編集',
      'Email Commands: Events' => 'メール コマンド: イベント',
      'End date is invalid.' => '終了日時が無効です。',
      '%s changed the icon for %s from %s to %s.' => '%s が %s のアイコンを %s から %s に変更しました。',
      '.ics File' => '.ics ファイル',
      '[Calendar]' => '[カレンダー]',
      'Create Event' => 'イベントを作成',
      '%s changed the query for this export.' => '%s がこのエクスポートのクエリを変更しました。',
      '%s created this event.' => '%s がこのイベントを作成しました。',
      'Edit this event and all events in the series which occur on or after %s. This will overwrite previous edits!' => 'このイベントと同じシリーズで%sもしくはそれ以降に行われるイベントを編集。以前の編集が上書きされます！',
      'All Events' => 'すべてのイベント',
      'Interacting with Calendar Events' => 'カレンダーイベントを操作',
      'Host PHID "%s" is not a valid user PHID.' => '主催者PHID「%s」は無効な利用者 PHID です。',
      'Create New Event' => '新しいイベントを作成',
      '%s updated the import URI.' => '%s がインポート URI を更新しました。',
      'End date must be after start date.' => '終了日時は開始日時以降にしてください。',
      'Calendar Events' => 'カレンダー イベント',
      'Automatic Updates' => '自動更新',
      '%s updated the event description.' => '%s がイベントの説明を更新しました。',
      'Calendar User Guide' => 'カレンダーのユーザー ガイド',
      'ICS URI' => 'ICS URI',
      '%s renamed this import from %s to %s.' => '%s がこのインポートの名前を %s から %s に変更しました。',
      '%s created this export.' => '%s がこのエクスポートを作成しました。',
      'Edit Recurrence' => '繰り返しを編集',
      'Export as .ics' => '.ics 形式でエクスポート',
      '%s changed the event icon from %s to %s.' => '%s がイベント アイコンを %s から %s に変更しました。',
      '%s created this import.' => '%s がこのインポートを作成しました。',
      'Choose Event Icon' => 'イベント アイコンの選択',
      'Edit Event: %s' => 'イベントの編集: %s',
      'ICS File "%s"' => 'ICS ファイル「%s」',
      'Import .ics File' => '.ics ファイルをインポート',
      'All Imports' => 'すべてのインポート',
      '%s changed the policy mode for this export from %s to %s.' => '%s がこのエクスポートのポリシー モードを %s から %s に変更しました。',
      'All Exports' => 'すべてのエクスポート',
      'Join' => '参加',
      'Import .ics URI' => '.ics URI からインポート',
      '%s renamed this event from %s to %s.' => '%s がこのイベントの名前を %s から %s に変更しました。',
      'Start date is invalid.' => '開始日時が無効です。',
      '%s renamed this export from %s to %s.' => '%s がこのエクスポートの名前を %s から %s に変更しました。',
      'Join Event' => 'イベントに参加',
      'Would you like to join this event?' => 'このイベントに参加しますか?',
    );
  }

}
