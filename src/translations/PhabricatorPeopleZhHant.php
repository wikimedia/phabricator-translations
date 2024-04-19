<?php

final class PhabricatorPeopleZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Account Activity' => '帳戶活動',
      'User Activity Logs' => '使用者活動日誌',
      '[%s] Welcome to %s' => '[%s] 歡迎來到%s',
      'Roles' => '身份',
      'Edit Settings' => '編輯設定',
    );
  }

}
