<?php

final class PhabricatorMetamtaJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Type an application email address...' => 'アプリケーションのメール アドレスを入力...',
      'Type a user, project, package, or mailing list name...' => 'ユーザー、プロジェクト、パッケージ、メーリング リストの名前を入力...',
      'Related Object' => '関連オブジェクト',
      'Browse Subscribers' => '購読者一覧',
    );
  }

}
