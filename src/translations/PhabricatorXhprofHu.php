<?php

final class PhabricatorXhprofHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf minták',
      'All Samples' => 'Minden minta',
      'Symbol' => 'Szimbólum',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Névtelen minta',
      '%s Profile' => '%s profil',
      'Manual Run' => 'Kézi futtatás',
      'Drag and drop .xhprof files to import them.' => 'Húzd és dobd az .xhprof fájlokat importáláshoz.',
      'PHP Profiling Tool' => 'PHP profilozó eszköz',
      'XHProf Profile' => 'XHProf profil',
      'Download %s Profile' => '%s profil letöltése',
    );
  }

}
