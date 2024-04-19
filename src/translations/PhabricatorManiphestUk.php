<?php

final class PhabricatorManiphestUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Створити завдання',
      'Change Story Points' => 'Змінити сторі поінти',
      '%s created this task.' => '%s створив це завдання.',
      'Edit Task' => 'Ред. завдання',
      '%s renamed this task from %s to %s.' => '%s перейменував це завдання з %s на %s.',
      'Page Size' => 'Розмір сторінки',
      'Assign / Claim' => 'Призначити / Заявити',
    );
  }

}
