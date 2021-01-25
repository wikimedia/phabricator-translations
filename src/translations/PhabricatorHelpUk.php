<?php

final class PhabricatorHelpUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Закрити будь-який діалог, в тому числі й цей.',
      '%s Help' => 'Довідка з %s',
      'Keyboard Shortcuts' => 'Комбінації клавіш',
    );
  }

}
