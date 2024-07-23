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
      'Rename Panel' => 'パネルの名前を変更',
      'Choose Dashboard Icon' => 'ダッシュボード アイコンの選択',
      'New Portal' => '新しいポータル',
      'Edit Dashboard' => 'ダッシュボードを編集',
      'Archive Dashboard' => 'アクティブなダッシュボード',
      'View Chart' => 'チャートを見る',
      'Panel' => 'パネル',
      'Type a panel name...' => 'パネル名を入力...',
      'Query Panel' => 'クエリ パネル',
      'Manage Portal' => 'ポータルの管理',
      'Add to Project' => 'プロジェクトに追加',
      'Blocks' => 'ブロック',
      'Custom Query ("%s")' => 'カスタム クエリ ("%s")',
      'Menu' => 'メニュー',
      'All Dashboards' => '全てのダッシュボード',
      '%s archived this dashboard.' => '%s がこのダッシュボードをアーカイブしました。',
      'All Panels' => '全てのパネル',
      'Create Dashboard Panel' => 'ダッシュボード パネルを作成',
      'Edit Portals' => 'ポータルを編集',
      '(None)' => '(なし)',
      'Portals' => 'ポータル',
      'Flag' => 'フラグ',
      'Archived Panels' => 'アーカイブ済みのパネル',
      '%s archived this panel.' => '%s がこのパネルをアーカイブしました。',
      'All Portals' => 'すべてのポータル',
      'Portals must have a title.' => 'ポータルにはタイトルが必要です。',
      'Active Dashboards' => 'アクティブなダッシュボード',
      'Create Dashboard' => 'ダッシュボードを作成',
      'Type a dashboard name...' => 'ダッシュボード名を入力...',
    );
  }

}
