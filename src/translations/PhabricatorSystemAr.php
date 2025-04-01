<?php

final class PhabricatorSystemAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'ذعر!',
      'View Handle' => 'عرض المقبض',
      'No Writable Database' => 'لا قاعدة بيانات قابلة للكتابة',
      'System' => 'النظام',
    );
  }

}
