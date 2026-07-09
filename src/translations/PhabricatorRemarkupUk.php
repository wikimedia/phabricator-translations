<?php

final class PhabricatorRemarkupUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'Некоректний рушій розмітки.',
  'Process text through remarkup.' => 'Обробити текст із допомогою розширеної розмітки.',
);
  }

}
