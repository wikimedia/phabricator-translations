<?php

final class PhabricatorHelpHe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'he';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'סגור כל תיבת דו־שיח, כולל זאת.',
      'Page Shortcuts' => 'קיצורי דפים',
      '%s Help' => 'עזרה על %s',
      'Hiding Content' => 'הסתרת תוכן',
      'Editing Inline Comments' => 'עריכת הערות מובְנות',
      'Global Shortcuts' => 'קיצורי דרך גלובליים',
      'Keyboard Shortcuts' => 'קיצורי מקשים',
      'Diff Navigation' => 'ניווט בהבדל',
    );
  }

}
