<?php

final class PhabricatorManiphestJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'タスクを作成',
      '%s added %s commit(s) to %s: %s.' => '%s が %s 件のコミットを %s に追加しました: %s。',
      'TASK DETAIL' => 'タスクの詳細',
      '%s closed this task as a duplicate by committing %s.' => '%s が %s をコミットすることでこのタスクを重複としてクローズしました。',
      'Search Subtasks' => 'サブタスクを検索',
      'Description Preview' => '説明のプレビュー',
      '%s changed the subtype of %s from "%s" to "%s".' => '%s が %s のサブタイプを「%s」から「%s」に変更しました。',
      'Needs Triage' => '応急処置を求む',
      'Story Points' => 'ストーリーポイント',
      '%s closed this task as a duplicate of %s.' => '%s がこのタスクを %s との重複としてクローズしました。',
      'Assigned Task' => '割り当てられているタスク',
      '%s updated the task description for %s.' => '%s が %s のタスクの説明を更新した。',
      'Change Story Points' => 'ストーリーポイントを変更',
      '%s added %s subtask(s): %s.' => '%s が %s 件のサブタスクを追加しました: %s。',
      'Edit Related Tasks...' => '関連タスクを編集...',
      '%s created subtask %s.' => '%s がサブタスク %s を作成しました。',
      '%s changed the task status from %s to %s by committing %s.' => '%s が %4$s をコミットすることでタスクの状態を %2$s から %3$s に変更しました。',
      '%s added %s parent task(s): %s.' => '%s が %s 件の親タスクを追加しました: %s。',
      'Points' => 'ポイント',
      'Filter By Project' => 'プロジェクトで絞り込む',
      '%s claimed this task.' => '%s がこのタスクを奪取した。',
      'Edit Subtasks' => 'サブタスクを編集',
      'Type a task subtype name...' => 'タスクのサブタイプ名を入力...',
      'Assign task to me' => '私にタスクをアサインする',
      '%s updated the task description.' => '%s がタスクの説明を更新しました。',
      '%s added %s revision(s) to %s: %s.' => '%s が %s 件のリビジョンを %s に追加しました: %s。',
      'Closed, Duplicate' => 'クローズ, 重複',
      '%s closed this task as %s.' => '%s がこのタスクを "%s" として閉じた。',
      '%s changed the status of %s from %s to %s by committing %s.' => '%s が %5$s をコミットすることで %2$s の状態を %3$s から %4$s に変更しました。',
      '%s created this task.' => '%s がこのタスクを作成しました。',
      '%s added %s revision(s): %s.' => '%s が %s 件のリビジョンを追加しました: %s。',
      'Duplicates' => '重複',
      'Current Subtasks' => '現在のサブタスク',
      'Save Subtasks' => 'サブタスクを保存',
      'Task Priority' => 'タスク優先度',
      '%s added %s subtask(s) for %s: %s.' => '%s が %s 件のサブタスクを %s に追加しました: %s。',
      'Parent Task' => '親タスク',
      'Edit Parent Tasks' => '親タスクを編集',
      'Email Commands: Tasks' => 'メール コマンド: タスク',
      'Edit Task' => 'タスクを編集',
      'Low' => '低',
      'Save Parent Tasks' => '親タスクを保存',
      'Current Parent Tasks' => '現在の親タスク',
      'Related Objects' => '関連オブジェクト',
      '%s renamed this task from %s to %s.' => '%s がこのタスクの名前を %s から %s に変更しました。',
      '%s removed %s revision(s): %s.' => '%s が %s 件のリビジョンを除去しました: %s。',
      '%s closed %s as a duplicate by committing %s.' => '%s が %3$s をコミットすることで %2$s を重複としてクローズしました。',
      '%s closed %s as a duplicate.' => '%s が %s を重複としてクローズしました。',
      '%s removed %s parent task(s) for %s: %s.' => '%s が %s 件の親タスクを %s から除去しました: %s。',
      'Browse Priorities' => '優先度一覧',
      '%s added %s parent task(s) for %s: %s.' => '%s が %s 件の親タスクを %s に追加しました: %s。',
      '%s closed this task as a duplicate.' => '%s がこのタスクを重複としてクローズしました。',
      '%s removed %s revision(s) from %s: %s.' => '%s が %s 件のリビジョンを %s から除去しました: %s。',
      '%s removed %s commit(s) from %s: %s.' => '%s が %s 件のコミットを %s から除去しました: %s。',
      'Search Parent Tasks' => '親タスクを検索',
      '%s changed the task status from %s to %s.' => '%s がタスクの状態を %s から %s に変更しました。',
      '%s changed the status of subtask %s from %s to %s.' => '%s がサブタスク %s の状態を %s から %s に変更しました。',
      '%s changed the subtype of this task from "%s" to "%s".' => '%s がこのタスクのサブタイプを「%s」から「%s」に変更しました。',
      '%s removed %s subtask(s): %s.' => '%s が %s 件のサブタスクを除去しました: %s。',
      'Page Size' => 'ページ サイズ',
      '%s reopened %s as "%s".' => '%s が %s を「%s」として再オープンしました。',
    );
  }

}
