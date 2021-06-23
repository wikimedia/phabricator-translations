<?php

final class TranslatewikiCoreRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Укажите путь к библиотеку для экспорта оттуда переводов.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Невозможно извлечь строку с нераспознанным паттерном "%%" "%s": %s.',
      'NONE' => 'NONE',
      'Provide a locale code with "--locale".' => 'Обозначьте участок кода параметром "--locale".',
      'Raw strings' => 'Сырые строки',
      'GENDER' => 'ГЕНДЕР',
      'Provide a classname with "--class".' => 'Укажите название класса опцией "--class".',
      'Read %s string(s).' => 'Прочесть строку(и) %s',
      'Generate a Phabricator translation classfile.' => 'Сгенерировать class-файл перевода Фабрикатора',
      'Used in:' => 'Используется в:',
      'Context strings' => 'Контекстные строки',
      'Provide a project name with "--project".' => 'Укажите название проекта опцией "--project".',
      'Variable Types: %s.' => 'Типы переменной:%s.',
      'Provide an output file with "--out".' => 'Укажите название файла вывода опцией "--out".',
      'Done.' => 'Готово.',
      'PLURAL' => 'МНОЖЕСТВО',
    );
  }

}
