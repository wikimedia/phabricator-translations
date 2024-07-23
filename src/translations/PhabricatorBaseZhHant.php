<?php

final class PhabricatorBaseZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '沒有應用程式「%s」！',
      'This application is required, so all users must have access to it.' => '此應用程式是必需的，因此所有使用者必須都要能存取它。',
      'Can Configure Application' => '可設置應用程式',
      'Can Use Application' => '可使用應用程式',
      'Core Applications' => '核心應用程式',
      'No application!' => '沒有應用程式！',
      '%s Application' => '%s應用程式',
      'Developer Tools' => '開發人員工具',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '請求裡包含受限制的參數「%s」，但此控制器（「%s」）未將其列入白名單。因為這可能是重新導向攻擊的一部分，因此拒絕處理此請求。',
      'Unknown capability \'%s\'!' => '未知功能「%s」！',
    );
  }

}
