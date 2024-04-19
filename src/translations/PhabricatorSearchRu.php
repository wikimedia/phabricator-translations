<?php

final class PhabricatorSearchRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'Нет результатов.',
      'Enable Query?' => 'Включить запросы?',
      'Personal Menu Items' => 'Пункты личного меню',
      'Format' => 'Формат',
      'Readable' => 'Читабельное',
      'Search Engines' => 'Поисковые движки',
      'N/A' => 'Н/Д',
      'INDEXING' => 'ИНДЕКСАЦИЯ',
      'You must choose a dashboard.' => 'Вам нужно выбрать доску.',
      'There is no active query yet.' => 'Нет активных запросов',
      'Query: %s' => 'Запрос: %s',
      '—' => '—',
      'Engine: Fulltext' => 'Движок: текст целиком',
      'Global Menu Items' => 'Пункты глобального меню',
      'Queries' => 'Запросы',
      'Add New Menu Item...' => 'Добавить новый пункт меню',
      'Profile Menu' => 'Меню профиля',
      'Query Errors' => 'Ошибки запроса',
      'Unsupported item action "%s".' => 'Неподдерживаемое действие "%s".',
      'Not supported.' => 'Не поддерживается.',
      'You must choose a form.' => 'Вам нужно выбрать доску.',
      'Home Menu' => 'Домашнее меню',
      'There is nothing here.' => 'Здесь ничего нет.',
    );
  }

}
