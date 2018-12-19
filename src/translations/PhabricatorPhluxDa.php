<?php

final class PhabricatorPhluxDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Opdater variabel',
      'Variable value must be valid JSON.' => 'Variableværdien skal være gyldig JSON.',
      'Lowercase letters, digits, dot and hyphen only.' => 'Kun små bogstaver, tal, punktummer og bindestreger.',
      'Edit Variable: %s' => 'Rediger variabel: %s',
      'Key/Value Configuration Store' => 'Nøgle/Værdi konfigurationslager',
      'Variable "%s"' => 'Variabel "%s"',
      'Phlux Variables' => 'Phlux variabler',
      'Enter value as JSON.' => 'Indtast værdi som JSON.',
      'Variable key must be unique.' => 'Variabelnøglen skal være unik.',
      'Create Variable' => 'Opret variabel',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s opdaterede denne variabel.',
      '%s created this variable.' => '%s oprettede denne variabel.',
      'Edit Variable' => 'Rediger variabel',
      'Variable List' => 'Variabelliste',
      'Variable key is required.' => 'Variabelnøgle er påkrævet.',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'Variabelnøglen "%s" må kun indeholde små bogstaver, tal, punktummer og bindestreger.',
    );
  }

}
