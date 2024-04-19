<?php

final class PhabricatorTypeaheadSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Token Name' => 'Ime leksikalnega elementa',
      'Image URI' => 'URI slike',
      'Select' => 'Izberi',
      'This source is not usable directly.' => 'Ta vir ni neposredno uporaben.',
      'Token Query' => 'Poizvedba po leksikalnem elementu',
      'More Results' => 'Več zadetkov',
    );
  }

}
