<?php

final class PhabricatorDiffusionUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'VCS Password' => 'Пароль VCS',
      'Set VCS Password' => 'Встановити пароль VCS',
      'Remove VCS Password' => 'Вилучити пароль VCS',
      'Confirm VCS Password' => 'Підтвердити пароль VCS',
      'New VCS Password' => 'Новий пароль VCS',
      'Your VCS password has been updated.' => 'Ваш пароль VCS було оновлено.',
      'Your VCS password is currently hashed using an algorithm which is no longer available on this install.' => 'Ваш пароль VCS наразі хешується за допомогою алгоритму, який більше не доступний під час цієї інсталяції.',
      'Current Password' => 'Поточний пароль',
      'No Password Set' => 'Пароль не встановлено',
      'You can remove your VCS password, which will prevent your account from accessing repositories.' => 'Ви можете видалити свій пароль VCS, що не дозволить вашому акаунту отримати доступ до сховищ.',
      'To access repositories hosted on this server over HTTP, you must set a version control password. This password should be unique.
    This password applies to all repositories available over HTTP.' => 'Щоб отримати доступ до сховищ, розміщених у Фабрикаторі через HTTP, необхідно встановити пароль контролю версій. Цей пароль має бути унікальним.
    Цей пароль застосовується до всіх сховищ, доступних через HTTP.',
      'You do not currently have a VCS password set. If you set one, you can remove it here later.' => 'Наразі у вас не встановлено пароль VCS. Якщо ви встановите його, ви зможете видалити його тут пізніше.',
    );
  }

}
