<?php

final class PhabricatorBaseSkrArab
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'skr_Arab';
  }

  protected function getTranslations() {
    return array(
      'Public Access' => 'عوامی رسائی',
      'No Login Required' => 'لاگ دی لوڑ کائنی',
    );
  }

}
