<?php

final class PhabricatorPeopleUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Delete User' => 'Видалити користувача',
      'Login: Partial Login' => 'Вхід: Частковий вхід',
      'User has not been awarded any badges.' => 'Користувач не отримав жодних значків.',
      'Not an Administrator' => 'Не адміністратор',
      'User does not belong to any projects.' => 'Користувач не належить до жодного проєкту.',
      'User Activity Logs' => 'Журнали діяльності користувача',
      'Disable User' => 'Відключити користувача',
      'Availability' => 'Доступність',
      'Animal' => 'Тварина',
      'Edit Profile Picture' => 'Ред. зображення профілю',
      'Make Administrator' => 'Зробити адміном',
      'Send Welcome Email' => 'Надіслати вітальний лист',
      'Edit Settings' => 'Редагувати налаштування',
      'Login: Upgrade to Full' => 'Вхід: Повне оновлення',
      'Change Username' => 'Змінити нікнейм',
      'Please verify that you own this email address (%s) by clicking this link:' => 'Підтвердіть, що ви володієте цією адресою електронної пошти (%s), натиснувши на це посилання:',
      'Email: Verify Address' => 'Ел. адреса: Підтвердьте адресу',
      'Edit Profile' => 'Редагувати профіль',
      'Hi %s' => 'Привіт %s',
      'You can not send welcome mail because you are not an administrator. Only administrators may send welcome mail.' => 'Ви не можете надіслати вітальне повідомлення, оскільки ви не адміністратор. Лише адміністратори можуть надсилати привітання.',
      'User Since' => 'Користувач з',
    );
  }

}
