<?php

final class PhabricatorNotificationMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'မဖတ်ရသေး',
      'All Notifications' => 'အသိပေးချက်များ အားလုံး',
      'Connecting...' => 'ချိတ်ဆက်နေသည်...',
    );
  }

}
