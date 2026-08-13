<?php

final class TranslatewikiCoreHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
  'Provide the path to a library to export translations from.' => 'Szolgáltat egy könyvtár elérési utat a fordítások exportálásához.',
  'Extracting library strings...' => 'A könyvtárak kibontása...',
  'Locale code for the generated source.' => 'Helyi kód a létrehozott forráshoz.',
  'Provide a classname with "--class".' => 'Szolgáltat egy osztálynevet a "--class" kapcsolóval.',
  'Class name to generate.' => 'A létrehozandó osztálynév.',
  'Provide a JSON source file with "--source".' => 'Szolgáltat egy JSON forrás fájlt a "--source" kapcsolóval.',
  'Generate a Phabricator translation classfile.' => 'Generál egy Phabricator fordítás osztályfájlt.',
  'JSON source file containing translation strings.' => 'JSON forrásfájl tartalmaz fordítási szövegeket.',
  'Export translation strings from a libphutil library.' => 'A libphutil könyvtárból exportálhat fordításokat.',
  'Used in:' => 'Használatban:',
  'English strings' => 'Angol szövegek',
  'Context strings' => 'Tartalom szövegek',
  'Done.' => 'Kész.',
  'Location to write the generated translation file.' => 'A generált fordítási fájl írási helye.',
);
  }

}
