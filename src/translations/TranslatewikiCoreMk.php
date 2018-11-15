<?php

final class TranslatewikiCoreMk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mk';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Укажете патека кон библиотеката од која ќе се извезат преводи.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Не можев да ја извлечам низата со непрепознаена шема „%%“, „%s“: %s.',
      'NONE' => 'НЕМА',
      'Provide a locale code with "--locale".' => 'Укажете местојазичен код со „--locale“.',
      'Ignoring string "%s"; not present in translation source file.' => 'Ја занемарувам низата „%s“; не е присутна во изворната податотека за превод.',
      'Provide the path to exactly one library to export translations from.' => 'Укажете патека кон точно една библиотеката од која ќе се извезат преводи.',
      'Provide a project name to export strings under with "--as".' => 'Укажете под кое име да е извезат низите со „--as“.',
      'Raw strings' => 'Сирови низи',
      'Name of the project that a translation file is being generated for.' => 'Име на проектот за кој се создава преводната податотека.',
      'Extracting library strings...' => 'Ги добивам низите од библиотеката...',
      'GENDER' => 'ПОЛ',
      'Locale code for the generated source.' => 'Месен код за создадениот извор.',
      'Provide a classname with "--class".' => 'Укажете име на класата со „--class“.',
      'Read %s string(s).' => 'Прочитај %s низи.',
      'Class name to generate.' => 'Кое име на класа да се создаде.',
      'Frequency Data' => 'Податоци за честота',
      'Provide a JSON source file with "--source".' => 'Укажете изворна JSON-податотека со „--source“.',
      'Generate a Phabricator translation classfile.' => 'Создај класна податотека на преводот во Фабрикатор.',
      'JSON source file containing translation strings.' => 'Изворна JSON-податотека во која стојат преводните низи.',
      'Export translation strings from a libphutil library.' => 'Извезете ги преводните низи од библиотека libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Запишувам податоци (%s, %s) во „%s“...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Се очекуваше добиената библиотечна низа да ја создаде податотеката „%s“, но таква не постои!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Име на проектот што се извезува. Извезените податотеки ќе бидат запишани во „projects/“ под тоа име.',
      'Used in:' => 'Се користи во:',
      'English strings' => 'Низи на англиски',
      'Context strings' => 'Контекстуални низи',
      'Provide a project name with "--project".' => 'Укажете име на проектот со „--project“.',
      'Variable Types: %s.' => 'Видови променливи: %s.',
      'Provide an output file with "--out".' => 'Дај изводна податотека со „--out“.',
      'Base URI for browsing files in the project being exported.' => 'Основна URI за прелистување на податотеки во проектот што се извезува.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Помина --слободно за подложниот добивач да испушти меѓускладови пред да ги извлече низите и да направи целосно чистоа преградба. Бавно!',
      'Done.' => 'Готово.',
      'Location to write the generated translation file.' => 'Во кое место да се запише создадената преводна податотека.',
      'PLURAL' => 'МНОЖИНА',
    );
  }

}
