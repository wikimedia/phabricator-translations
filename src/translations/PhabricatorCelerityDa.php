<?php

final class PhabricatorCelerityDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Brug standardfarver',
      'Use Larger Font Size' => 'Brug større skriftstørrelse',
      'Found %d binary resources.' => 'Fandt %s binære ressourcer.',
      'Found %d text resources.' => 'Fandt %s tekst ressourcer.',
      'Found %d packages.' => 'Fandt %s pakker.',
    );
  }

}
