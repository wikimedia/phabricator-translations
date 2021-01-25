<?php

final class PhabricatorHelpTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Bu dahil olmak üzere herhangi bir iletişim kutusunu kapatın.',
      '%s Help' => '%s Yardım',
      'Keyboard Shortcuts' => 'Klavye Kısayolları',
    );
  }

}
