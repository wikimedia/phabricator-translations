<?php

final class PhabricatorManiphestRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
  'Priority of the task.' => 'Приоритет задачи.',
  'Update an existing Maniphest task.' => 'Обновить существующую задачу.',
  'Returns information about the possible statuses for Maniphest tasks.' => 'Возвращает информацию о возможных состояниях для задач.',
  'Merged' => 'Объединено',
  'Closed after %s' => 'Закрыто после %s',
  'Changed Task Priority' => 'Изменен приоритет задачи',
  'New task name.' => 'Новое название задачи.',
  'Unblock' => 'Разблокировать',
  'Description Preview' => 'Предварительный просмотр описания',
  'Subtasks' => 'Подзадача',
  'Update the task description.' => 'Обновление описания задачи.',
  'From Email' => 'Из электронного письма',
  'No tasks found.' => 'Задач не найдено.',
  'Assign task to: %s.' => 'Назначить задачу: %s.',
  'Mocks' => 'Наброски',
  'Closer' => 'Закрыть',
  'Subtask' => 'Подзадача',
  'task author' => 'автор задачи',
  'Subtasks.' => 'Подзадачи.',
  '%s closed this task as %s.' => '%s закрыл эту задачу как %s.',
  'Updated Before' => 'Обновленные ранее',
  'Task' => 'Задача',
  'Search for tasks created before a certain date.' => 'Поиск задач, созданных до определенной даты.',
  'Block' => 'Заблокировать',
  'Task Author' => 'Автор задачи',
  'Configure Maniphest Task Forms' => 'Изменить формы создания задач',
  'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Используйте "Задачи" для коллективного обнаружения ошибок, ведения в курс дела и вообще всего, что нужно сделать к сроку. Назначенные вам задачи появятся здесь.',
  'Current Mocks' => 'Текущие наброски',
  'No such Maniphest task exists.' => 'Нет такой задачи.',
  'Edit Mocks' => 'Редактировать наброски',
  'Save Related Mocks' => 'Сохранить связанные наброски',
  'Edit Related Mocks' => 'Редактировать связанные наброски',
  'Maniphest Task' => 'Задача',
  'Create a new Maniphest task.' => 'Создать новую задачу.',
  'Create New Task' => 'Создать новую задачу',
);
  }

}
