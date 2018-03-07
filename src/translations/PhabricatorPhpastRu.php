<?php

final class PhabricatorPhpastRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Узел %s: %s',
      'Generate XHP AST' => 'Генерировать XHP AST',
      'Token %d: %s' => 'Знак %s: %s',
      'XHPAST View' => 'Просмотр XHPAST',
      'Parse' => 'Парсить',
      'No such AST!' => 'Нет такого AST!',
      'Visual PHP Parser' => 'Визуальный PHP Parser',
    );
  }

}
