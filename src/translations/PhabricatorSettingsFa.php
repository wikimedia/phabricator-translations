<?php

final class PhabricatorSettingsFa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fa';
  }

  protected function getTranslations() {
    return array(
      'Display Preferences' => 'تنظیمات نمایش',
      'Email Preferences' => 'ترجیحات ایمیل',
      'User Preferences' => 'ترجیحات کاربر',
      'Save Preferences' => 'ذخیرهٔ ترجیحات',
    );
  }

}
