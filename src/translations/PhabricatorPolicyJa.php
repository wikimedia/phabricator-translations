<?php

final class PhabricatorPolicyJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'User Policies' => 'ユーザー ポリシー',
      'You do not have permission to edit this object.' => 'あなたにはオブジェクトを編集する権限がありません。',
      'Object Policies' => 'オブジェクトのポリシー',
      'Members of Project...' => 'プロジェクトのメンバー...',
      'Advanced' => '高度',
      'Special Rules' => '特別ルール',
      'Object Policy' => 'オブジェクトのポリシー',
      'Members of Project: %s' => 'プロジェクトのメンバー: %s',
      'Custom Policy' => 'カスタム ポリシー',
      'Basic Policies' => '基本ポリシー',
      'All Users' => 'すべてのユーザー',
    );
  }

}
