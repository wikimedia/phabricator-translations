<?php

final class PhabricatorOwnersFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Create New Package' => 'Luo uusi paketti',
      'owner' => 'omistaja',
      '%s added %s owner(s): %s.' => '%s lisäsi %s omistaja(a): %s.',
      'Package %d' => 'Paketti %s',
    );
  }

}
