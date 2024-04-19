<?php

final class PhabricatorDifferentialRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Differential Diff' => 'Сравнение',
      'Blocked Diff' => 'Заблокированное отклонение',
      'Close a Differential revision.' => 'Закрыть ревизию',
      'Create a new Differential revision.' => 'Создать новую ревизию.',
      'Differential Diffs' => 'Сравнения',
      'Hide Panel' => 'Скрыть панель',
      'Create a new Differential diff.' => 'Создать новое сравнение.',
      'You must select a comment to edit.' => 'Вы должны выбрать комментарий для редактирования.',
      'Add an inline comment to a Differential revision.' => 'Добавить врезной комментарий в ревизию.',
      'New author.' => 'Новый автор.',
      'No revisions are blocked on your review.' => 'Никакие изменения не блокируются в вашем обзоре.',
      'Blocked diff.' => 'Заблокированная разность.',
    );
  }

}
