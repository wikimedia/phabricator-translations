<?php

final class PhabricatorRemarkupRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Недопустимый движок разметки.',
      'Process text through remarkup.' => 'Форматировать текст согласно особенностям Phabricator.',
      'Content may not be empty.' => 'Содержимое не может быть пустым.',
    );
  }

}
