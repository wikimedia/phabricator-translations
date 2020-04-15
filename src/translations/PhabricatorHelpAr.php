<?php

final class PhabricatorHelpAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'أغلق أي حوار، بما فيها هذا الحوار.',
      'Unsupported Editor Protocol' => 'بروتوكول محرر غير مدعوم.',
      'Change Settings' => 'تغيير الإعدادات',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'يستخدم محرر URI المشكل بروتوكول غير مدعوم. قم بتغيير الإعدادات الخاصة بك لاستخدام بروتوكول مدعوم، أو اطلب من المسؤول الخاص بك إضافة دعم للبروتوكول المختار عن طريق تكوين: %s',
      '%s Help' => 'مساعدة %s',
      'Keyboard Shortcuts' => 'اختصارات لوحة المفاتيح',
    );
  }

}
