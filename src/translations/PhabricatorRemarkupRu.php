<?php

final class PhabricatorRemarkupRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Обработать текст через примечание в контексте Phabricator.',
      'Invalid markup engine.' => 'Недопустимый механизм разметки.',
      'Content may not be empty.' => 'Содержимое не может быть пустым.',
    );
  }

}
