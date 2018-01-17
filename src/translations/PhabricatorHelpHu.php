<?php

final class PhabricatorHelpHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Zárjon be minden párbeszédablakot, beleértve ezt is.',
      'Unsupported Editor Protocol' => 'Nem támogatott szerkesztő protokoll',
      'Change Settings' => 'Beállítások módosítása',
      '%s Help' => '%s Súgó',
      'Keyboard Shortcuts' => 'Billentyűparancsok',
    );
  }

}
