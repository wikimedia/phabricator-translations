<?php

final class PhabricatorBaseSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Public + configured' => 'Javno + konfigurirano',
      'Public Access' => 'Javni dostop',
      'No Login Required' => 'Prijava ni potrebna',
      'Email Verification Required, With Exception' => 'Obvezna je potrditev e-pošte, z izjemami',
    );
  }

}
