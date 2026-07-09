<?php

final class PhabricatorMetaSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
  'Information' => 'Informacije',
  'Policy does not exist.' => 'Pravilnik ne obstaja.',
  'Can\'t set non-public capabilities to public.' => 'Nejavnih pravilnikov ni mogoče nastaviti na javne.',
  'You cannot enable an enabled application.' => 'Namščene aplikacije ne morete namestiti.',
);
  }

}
