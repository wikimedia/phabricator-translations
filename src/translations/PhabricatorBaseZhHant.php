<?php

final class PhabricatorBaseZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '沒有應用程式「%s」！',
      'This application is required, so all users must have access to it.' => 'Phabricator 需要此應用程式才能運作，因此所有使用者必須都要能存取它。',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => '預期允許使用者「%s」存取「%s」。',
      'Can Configure Application' => '可設置應用程式',
      'Can Use Application' => '可使用應用程式',
      'Application Controller' => '應用程式控制器',
      'Public + configured' => '公開 + 設置',
      'Public Access' => '公開存取',
      'Core Applications' => '核心應用程式',
      'No Login Required' => '不需登入',
      'No application!' => '沒有應用程式！',
      '%s Application' => '%s應用程式',
      'Email Verification Required' => '需要電子郵件確認',
      'Application Controller, No Login Required' => '應用程式控制器，不需登入',
      'Developer Tools' => '開發人員工具',
      'Expect user \'%s\' to be denied access to \'%s\'.' => '預期拒絕使用者「%s」存取「%s」。',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '請求裡包含受限制的參數「%s」，但此控制器（「%s」）未將其列入白名單。因為這可能是重新導向攻擊的一部分，因此拒絕處理此請求。',
      'Unknown capability \'%s\'!' => '未知功能「%s」！',
      'Admin Required' => '需要管理員',
      'Email Verification Required, With Exception' => '需要電子郵件確認，帶有例外',
      'Allow Disabled' => '允許停用',
    );
  }

}
