<?php

final class PhabricatorDashboardJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Edit Panel' => 'パネルを編集',
      'New dashboard icon.' => '新しいダッシュボードのアイコン',
      'Edit Panel: %s' => 'パネルを編集：%s',
      'Add to Project Menu' => 'プロジェクトメニューに追加',
      'No dashboards found.' => 'ダッシュボードが見つかりません。',
      'Add to Personal Home Menu' => '個人用ホームメニューに追加',
      'This engine is used to modify dashboards.' => 'このエンジンはダッシュボードを修正するために使用されます。',
      'Add this dashboard to the global home menu, visible to all users.' => 'このダッシュボードをグローバルホームメニューに追加し、すべてのユーザーが見ることができるようにします。',
      'Dashboards' => 'ダッシュボード',
      'Choose Dashboard Icon' => 'ダッシュボード アイコンの選択',
      'Edit Dashboard' => 'ダッシュボードを編集',
      'Archive Dashboard' => 'アクティブなダッシュボード',
      'Type a panel name...' => 'パネル名を入力...',
      'Query Panel' => 'クエリ パネル',
      'Custom Query ("%s")' => 'カスタム クエリ ("%s")',
      '%s archived this dashboard.' => '%s がこのダッシュボードをアーカイブしました。',
      'Create Dashboard Panel' => 'ダッシュボード パネルを作成',
      '(None)' => '(なし)',
      'Flag' => 'フラグ',
      'Archived Panels' => 'アーカイブ済みのパネル',
      '%s archived this panel.' => '%s がこのパネルをアーカイブしました。',
      'Create Dashboard' => 'ダッシュボードを作成',
      'Type a dashboard name...' => 'ダッシュボード名を入力...',
    );
  }

}
