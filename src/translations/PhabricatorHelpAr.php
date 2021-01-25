<?php

final class PhabricatorHelpAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'أغلق أي حوار، بما فيها هذا الحوار.',
      '%s Help' => 'مساعدة %s',
      'Keyboard Shortcuts' => 'اختصارات لوحة المفاتيح',
    );
  }

}
