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
  'User Details' => 'Данные пользователя',
  'Projects (%s)' => 'Проекты (%s)',
  'Save Profile' => 'Сохранить профиль',
  'Type a username...' => 'Введите имя пользователя...',
  'Edit Settings' => 'Изменить настройки',
  'Edit Profile' => 'Редактировать профиль',
  'User Since' => 'Пользователь с',
);
  }

}
