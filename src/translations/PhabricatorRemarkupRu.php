<?php

final class PhabricatorRemarkupRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Форматировать текст согласно особенностям Phabricator.',
      'Invalid markup engine.' => 'Недопустимый движок разметки.',
      'Content may not be empty.' => 'Содержимое не может быть пустым.',
    );
  }

}
