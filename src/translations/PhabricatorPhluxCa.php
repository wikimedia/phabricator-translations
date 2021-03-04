<?php

final class PhabricatorPhluxCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Actualitza la variable',
      'Variable value must be valid JSON.' => 'El valor variable ha de ser JSON vàlid.',
      'Lowercase letters, digits, dot and hyphen only.' => 'Només lletres minúscules, dígits, punt i guió.',
      'Edit Variable: %s' => 'Edita la variable: %s',
      'Key/Value Configuration Store' => 'Magatzem de configuració de claus / valors',
      'Variable "%s"' => 'Variable "%s"',
      'Phlux Variables' => 'Variables Phlux',
      'Enter value as JSON.' => 'Introduïu el valor com a JSON.',
      'Variable key must be unique.' => 'La clau variable ha de ser única.',
      'Create Variable' => 'Crea una Variable',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s ha actualitzat aquesta variable.',
      '%s created this variable.' => '%s ha creat aquesta variable.',
      'Edit Variable' => 'Edita la Variable',
      'Variable List' => 'Llista de Variables',
      'Variable key is required.' => 'Cal una clau variable.',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'La clau variable "%s" només ha de contenir minúscules, números, punt i guió.',
    );
  }

}
