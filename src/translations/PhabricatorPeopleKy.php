<?php

final class PhabricatorPeopleKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
  'Bot' => 'Бот',
  'Usernames' => 'Колдонуучунун аты',
  'Bots' => 'Боттор',
  'users' => 'колдонуучулар',
  'emails' => 'электрондук почталар',
  'message' => 'билдирме',
  'Log Out %s' => '%s аккаунтунан чыгуу',
);
  }

}
