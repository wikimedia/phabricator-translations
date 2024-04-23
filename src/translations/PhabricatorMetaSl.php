<?php

final class PhabricatorMetaSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Informacije',
      'You cannot install an installed application.' => 'Namščene aplikacije ne morete namestiti.',
      'Policy does not exist.' => 'Pravilnik ne obstaja.',
      'Can\'t set non-public policies to public.' => 'Nejavnih pravilnikov ni mogoče nastaviti na javne.',
      'Uninstall' => 'Odmesti',
    );
  }

}
