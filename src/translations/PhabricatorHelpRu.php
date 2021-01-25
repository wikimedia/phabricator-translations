<?php

final class PhabricatorHelpRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Закрыть любой диалог, включая этот.',
      '%s Help' => 'Справка по %s',
      'Keyboard Shortcuts' => 'Сочетания клавиш',
    );
  }

}
