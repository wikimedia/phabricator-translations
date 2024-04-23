<?php

final class PhabricatorConsoleId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Realtime' => 'Waktu nyata',
      'Machine' => 'Mesin',
      'STOPPED' => 'TERHENTI',
    );
  }

}
