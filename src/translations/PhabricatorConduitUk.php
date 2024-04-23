<?php

final class PhabricatorConduitUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Standard API Token' => 'Стандартний токен API',
      'There are no API tokens to terminate.' => 'Немає токенів API для припинення.',
      'Really terminate this token? Any system using this token will no longer be able to make API requests.' => 'Дійсно припинити дію цього токена? Будь-яка система, яка використовує цей токен, більше не зможе робити запити API.',
      'Terminate Tokens' => 'Припинення токенів',
      'Active API Tokens' => 'Активні токени API',
      'You don\'t have any active API tokens.' => 'У вас немає активних токенів API.',
      'Generate API Token' => 'Створити токен API',
      'Generate a new API token?' => 'Згенерувати новий токен API?',
      'Terminate API Token' => 'Припинення API токену',
      'View API Token' => 'Переглянути API-токен',
      'No Tokens to Terminate' => 'Немає токенів для припинення',
      'Terminate API Tokens' => 'Припинення API токенів',
      'Generate Token' => 'Створити токен',
    );
  }

}
