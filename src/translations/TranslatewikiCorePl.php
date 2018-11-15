<?php

final class TranslatewikiCorePl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Podaj ścieżkę do biblioteki, z której będą eksportowane tłumaczenia.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Nie można wyodrębnić łańcucha z nierozpoznanym wzorcem "%%", "%s": %s.',
      'NONE' => 'BRAK',
      'Provide a locale code with "--locale".' => 'Podaj kod lokalizacji przy użyciu "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Ignorowanie łańcucha "%s"; nieobecny w pliku źródłowym tłumaczeń.',
      'Provide the path to exactly one library to export translations from.' => 'Podaj ścieżkę do dokładnie jednej biblioteki, z której będą eksportowane tłumaczenia.',
      'Raw strings' => 'Surowe ciągi',
      'Name of the project that a translation file is being generated for.' => 'Nazwa projektu, dla którego tworzony jest plik tłumaczenia.',
      'Extracting library strings...' => 'Wyodrębnianie ciągów biblioteki...',
      'GENDER' => 'PŁEĆ',
      'Locale code for the generated source.' => 'Kod lokalizacji dla wygenerowanego źródła.',
      'Provide a classname with "--class".' => 'Podaj nazwę klasy za pomocą "--class".',
      'Generate a Phabricator translation classfile.' => 'Wygeneruj plik klasy tłumaczenia Phabricator.',
      'Used in:' => 'Użyty w:',
      'Provide a project name with "--project".' => 'Podaj nazwę projektu za pomocą "--project".',
      'Variable Types: %s.' => 'Typy zmiennych: %s.',
      'Provide an output file with "--out".' => 'Podaj plik wyjściowy za pomocą "--out".',
    );
  }

}
