<?php

final class PhabricatorPeopleRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Bot' => 'Бот',
      'Bots' => 'Боты',
      'Type a username...' => 'Введите имя пользователя...',
      'Edit Profile' => 'Редактировать профиль',
    );
  }

}
