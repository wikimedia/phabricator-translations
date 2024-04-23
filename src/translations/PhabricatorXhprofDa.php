<?php

final class PhabricatorXhprofDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Symbol' => 'Symbol',
      '%s μs' => '%s μs',
      '%s Profile' => '%s profil',
      'XHProf Profile' => 'XHProf-profil',
      'Download %s Profile' => 'Download %s profil',
    );
  }

}
