<?php

final class PhabricatorPhluxSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Update Variable' => 'Aktualizovať premennú',
  'Variable value must be valid JSON.' => 'Hodnota premennej musí byť platný JSON.',
  'Lowercase letters, digits, dot and hyphen only.' => 'Iba malé písmená, číslice, bodka a spojovník.',
  'Edit Variable: %s' => 'Upraviť premennú: %s',
  'Key/Value Configuration Store' => 'Úložisko konfigurácie kľúč/hodnota',
  'Variable "%s"' => 'Premenná „%s“',
  'Phlux Variables' => 'Premenné Phluxu',
  'Enter value as JSON.' => 'Zadajte hodnotu ako JSON.',
  'Variable key must be unique.' => 'Kľúč premennej musí byť jedinečný.',
  'Create Variable' => 'Vytvoriť premennú',
  'Phlux' => 'Phlux',
  '%s updated this variable.' => '%s aktualizoval(a) túto premennú.',
  '%s created this variable.' => '%s vytvoril(a) túto premennú.',
  'Edit Variable' => 'Upraviť premennú',
  'Variable List' => 'Zoznam premenných',
  'Variable key is required.' => 'Kľúč premennej je povinný.',
  'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'Kľúč premennej „%s“ smie obsahovať iba malé písmená, číslice, bodku a spojovník.',
);
  }

}
