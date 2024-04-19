<?php

final class PhabricatorPeopleDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Account Menu' => 'Menuyê hesabi',
      '  %s' => '%s',
      'Edit User: %s' => 'Karberi bıvurne: %s',
      'Log Out %s' => 'Bıveciye %s',
      '    Username: %s' => 'Nameyê karberi: %s',
    );
  }

}
