<?php

final class PhabricatorPhurlDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Alias' => 'Alias',
      '%s changed the alias from %s to %s.' => '%s ændrede aliaset fra %s til %s.',
      '[Phurl]' => '[Phurl]',
      'New alias.' => 'Nyt alias.',
    );
  }

}
