<?php

final class PhabricatorXhprofSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Symbol' => 'Symbol',
      '%s μs' => '%s μs',
      'Unnamed Sample' => 'Onämnt prov',
      '%s Profile' => '%s profil',
      'XHProf Profile' => 'XHProf-profil',
      'Download %s Profile' => 'Ladda ned %s profil',
    );
  }

}
