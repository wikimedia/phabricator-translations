<?php

final class PhabricatorCalendarRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
  'Import Disabled' => 'Импорт отключен',
  'Calendar Import' => 'Импорт календаря',
  'Exports' => 'Экспорт',
  'Movie' => 'Переименовать',
  'Weekly' => 'Еженедельно',
  '%s created this event.' => '%s создал это событие.',
  'An event\'s name, status, invite list, icon, and description changes.' => 'Изменение названия мероприятия, его статус, список участников, иконка и описание.',
  'List View' => 'Вид списка',
);
  }

}
