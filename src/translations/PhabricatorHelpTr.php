<?php

final class PhabricatorHelpTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Bu dahil olmak üzere herhangi bir iletişim kutusunu kapatın.',
      'Page Shortcuts' => 'Sayfa Kısayolları',
      '%s Help' => '%s Yardım',
      'Global Shortcuts' => 'Evrensel Kısayollar',
      'Keyboard Shortcuts' => 'Klavye Kısayolları',
    );
  }

}
