<?php

final class PhabricatorManiphestRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Update an existing Maniphest task.' => 'Обновить существующую задачу.',
      'Returns information about the possible statuses for Maniphest tasks.' => 'Возвращает информацию о возможных состояниях для задач.',
      'Mocks' => 'Наброски',
      'Configure Maniphest Task Forms' => 'Изменить формы создания задач',
      'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Используйте "Задачи" для коллективного обнаружения ошибок, ведения в курс дела и вообще всего, что нужно сделать к сроку. Назначенные вам задачи появятся здесь.',
      'Current Mocks' => 'Текущие наброски',
      'No such Maniphest task exists.' => 'Нет такой задачи.',
      'Edit Mocks' => 'Редактировать наброски',
      'Save Related Mocks' => 'Сохранить связанные наброски',
      'Edit Related Mocks' => 'Редактировать связанные наброски',
      'Maniphest Task' => 'Задача',
      'Create a new Maniphest task.' => 'Создать новую задачу.',
    );
  }

}
