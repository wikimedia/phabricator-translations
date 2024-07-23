<?php

final class PhabricatorHelpUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Закрити будь-який діалог, в тому числі й цей.',
      'Page Shortcuts' => 'Ярлики сторінок',
      '%s Help' => 'Довідка з %s',
      'Hiding Content' => 'Приховати вміст',
      'Editing Inline Comments' => 'Редагування вбудованих коментарів',
      'Global Shortcuts' => 'Глобальні ярлики',
      'Keyboard Shortcuts' => 'Комбінації клавіш',
    );
  }

}
