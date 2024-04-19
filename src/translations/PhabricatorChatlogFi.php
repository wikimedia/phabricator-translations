<?php

final class PhabricatorChatlogFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Newer' => 'Uudemmat',
      'Older' => 'Vanhempi',
      'Channel List' => 'Kanavalista',
      'Hide Dates' => 'Piilota päivämäärät',
      'Channel Log' => 'Kanavaloki',
      'Newest' => 'Uusin',
    );
  }

}
