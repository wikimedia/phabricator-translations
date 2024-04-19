<?php

final class PhabricatorSettingsZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Default (%s)' => '預設（%s）',
      'Personal Account Settings' => '個人帳戶設定',
      'Global Default Settings' => '全域預設設定',
      'Email Notifications' => '電子郵件通知',
      'Enable Email Notifications' => '啟用電子郵件通知',
      'Extra Settings' => '額外設定',
      'Edit Global Settings' => '編輯全域設定',
      'Edit Settings Configurations' => '編輯設定配置',
      'Changes saved.' => '已儲存變更。',
      'Choose which language you would like the UI to use.' => '選擇您希望使用者介面採用的語言。',
      'Edit settings for your personal account.' => '編輯您的個人帳戶設定。',
      'No Notifications' => '沒有通知',
      'Settings %d' => '設定%s',
      'Personal Settings' => '個人設定',
      'Edit Settings: %s' => '編輯設定：%s',
      'Account Activity Logs' => '帳戶活動日誌',
      'Pronoun' => '稱謂',
      'Choose the pronoun you prefer.' => '選擇您偏好的稱謂。',
      'This engine is used to edit settings.' => '此引擎用以編輯設定。',
    );
  }

}
