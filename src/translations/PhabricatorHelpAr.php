<?php

final class PhabricatorHelpAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'أغلق أي حوار، بما فيها هذا الحوار.',
      'Page Shortcuts' => 'اختصارات الصفحة',
      '%s Help' => 'مساعدة %s',
      'Hiding Content' => 'إخفاء المحتوى',
      'Editing Inline Comments' => 'تحرير التعليقات المضمنة',
      'Global Shortcuts' => 'الاختصارات العالمية',
      'Keyboard Shortcuts' => 'اختصارات لوحة المفاتيح',
      'Diff Navigation' => 'التنقل Diff',
    );
  }

}
