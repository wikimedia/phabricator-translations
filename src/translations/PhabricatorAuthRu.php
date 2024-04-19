<?php

final class PhabricatorAuthRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'This key has been revoked. Choose or generate a new, unique key.' => 'Этот ключ был отозван. Выберите или сгенерируйте новый, уникальный ключ.',
      'Algorithm' => 'Алгоритм',
      'You must specify the username of the account to recover.' => 'Для восстановления вы должны указать имя пользователя от аккаунта.',
      'Revoke Tokens' => 'Отозвать токены',
      'Unlink "%s" Account?' => 'Отсоединить аккаунт "%s"?',
      'You must confirm the selected password.' => 'Вы должны подтвердить выбранный пароль.',
      'Unknown session type "%s".' => 'Неизвестный тип сессии "%s".',
      'Invalid OAuth Access Token' => 'Неверный токен доступа OAuth',
      'Path to public keyfile.' => 'Путь до файла публичного ключа.',
      'LDAP Port' => 'Порт LDAP',
      'Really trust this PKCS8 keyfile?' => 'Действительно доверяете этому PKCS8 ключу?',
      'No public key was provided.' => 'Не предоставлено публичного ключа.',
      'Log In with LDAP' => 'Зайти с помощью LDAP',
      'Start TLS after binding to the LDAP server.' => 'Запустить TLS после подключения к LDAP-серверу.',
      'TOTP Code' => 'Код TOTP',
      'Too Short' => 'Слишком короткий',
      'LDAP Username: ' => 'LDAP имя пользователя:',
      'Terminate Session?' => 'Прервать сессию?',
      'Google' => 'Google',
      'Generate New Keypair' => 'Сгенерировать новую ключевую пару',
      'Connecting to LDAP...' => 'Подключение к LDAP...',
      'No matching SSH keys.' => 'Нет подходящих ключей SSH.',
      'Authentication Error' => 'Ошибка аутентификации',
      'Your account has been disabled.' => 'Ваш аккаунт был отключено.',
      'Account Disabled' => 'Учётная запись отключена',
      'OAuth client "%s" is already trusted.' => 'Phabricator уже доверяет клиенту OAuth "%s".',
      '%s disabled login.' => '%s отключён логин.',
      '%s disabled registration.' => '%s отключён регистрация.',
      '%s disabled auto login.' => '%s отключён автоматическая авторизация.',
    );
  }

}
