<?php

final class PhabricatorRemarkupUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Форматувати текст згідно з особливостями Phabricator.',
      'Invalid markup engine.' => 'Некоректний рушій розмітки.',
      'Content may not be empty.' => 'Вміст не може бути пустим.',
    );
  }

}
