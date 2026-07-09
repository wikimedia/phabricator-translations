<?php

final class PhabricatorPeopleSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
  'User is not a member of any projects.' => 'Корисник није члан ниједног пројекта.',
  'The user\'s real name.' => 'Право име.',
  'Bot' => 'Бот',
  'Bots' => 'Ботови',
  'User Details' => 'Детаљи о кориснику',
  'Availability' => 'Доступност',
  '%s renamed this user.' => '%s преименовао овог корисника.',
  'Action Name' => 'Име радње',
);
  }

}
