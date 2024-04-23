<?php

final class PhabricatorAphlictRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Отправить уведомление пользователю.',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'ОШИБКА: функция PHP %s выключен. Вы должны включить его для запуска Aphlict на этом компьютере.',
      'Message to send.' => 'Сообщение к отправке.',
    );
  }

}
