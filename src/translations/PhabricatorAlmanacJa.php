<?php

final class PhabricatorAlmanacJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s created this service.' => '%s がこのサービスを作成しました。',
      'Namespace name is required.' => '名前空間名は必須です。',
      'Device name is required.' => 'デバイス名は必須です。',
      'Type a service type name...' => 'サービスの種類名を入力...',
      'Network name is required.' => 'ネットワーク名は必須です。',
      'Type a service name...' => 'サービス名を入力...',
      'IMPORTANT!' => '重要!',
      '%s created this device.' => '%s がこのデバイスを作成しました。',
      '%s created this network.' => '%s がこのネットワークを作成しました。',
      'Delete Interface' => 'インターフェースを削除',
      'Type an interface name...' => 'インターフェイス名を入力...',
      '%s created this namespace.' => '%s がこの名前空間を作成しました。',
      '%s created this interface.' => '%s がこのインターフェイスを作成しました。',
    );
  }

}
