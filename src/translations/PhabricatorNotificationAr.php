<?php

final class PhabricatorNotificationAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
  'Unread' => 'غير مقروءة',
  'All Notifications' => 'جميع الإشعارات',
  'Unread Notifications' => 'الإشعارات غير المقروءة',
  'Disconnected' => 'قطع الاتصال',
  'Connecting...' => 'جارٍ التوصيل...',
);
  }

}
