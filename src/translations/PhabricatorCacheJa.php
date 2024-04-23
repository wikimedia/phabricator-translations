<?php

final class PhabricatorCacheJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s is not available; unable to read deflated data!' => '%sは利用できません。圧縮したデータを読み取ることができません！',
      'APCu' => 'APCu',
      '"%s" Disabled' => '「%s」は無効',
      'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => '「--all」または「--caches」でパージするキャッシュを選択します。使用可能なキャッシュは%sです。',
      'APC' => 'APC',
      'OPcache is not configured properly for development.' => 'OPcacheが開発用に正しく構成されていません。',
      'Enabling APC/APCu will improve performance.' => 'APC/APCuを有効にすると、パフォーマンスが向上します。',
      'Zend OPcache Not Installed' => 'Zend OPcacheはインストールされていません',
      '"%s" Enabled' => '「%s」は有効',
      'Unknown cache format.' => '不明なキャッシュ形式です。',
      'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'PHPの「Zend OPcache」拡張機能はインストールされていますが、PHPの設定では有効になっていません。これを有効にすると、Phabricatorのパフォーマンスが大幅に向上します。「%s」設定を編集して拡張機能を有効にします。',
      'Installing the "Zend OPcache" extension will dramatically improve performance.' => '「Zend OPcache」拡張機能をインストールすると、パフォーマンスが飛躍的に向上します。',
      'Only strings may be written to the DB cache!' => '文字列のみをデータベースキャッシュに書き込むことができます！',
      'Purge all caches.' => '全てのキャッシュをパージする。',
      'APC/APCu Extensions Not Enabled' => 'APC/APCu拡張機能は有効になっていません',
      'PHP Extension "APCu" Not Installed' => 'PHP拡張機能「APCu」はインストールされていません',
      'Zend OPcache Not Enabled' => 'Zend OPcache拡張機能は有効になっていません',
      'OPcache Disabled' => 'OPcacheは無効',
      'APC/APCu Disabled' => 'APC/APCuは無効',
      'OPcache' => 'OPcache',
      'Zend OPcache' => 'Zend OPcache',
      'PHP Extension \'APC\' Not Installed' => 'PHP拡張機能「APC」がインストールされていません',
    );
  }

}
