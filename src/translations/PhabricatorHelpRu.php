<?php

final class PhabricatorHelpRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Закрыть любой диалог, включая этот.',
      'Page Shortcuts' => 'Шорткаты страницы',
      '%s Help' => 'Справка по %s',
      'Hiding Content' => 'Скрываемое содержимое',
      'Editing Inline Comments' => 'Редактирование внутренних комментариев',
      'Global Shortcuts' => 'Глобальные шорткаты',
      'Keyboard Shortcuts' => 'Сочетания клавиш',
      'Diff Navigation' => 'Навигация по версиям',
    );
  }

}
