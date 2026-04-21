<?php

final class PhabricatorPhluxNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Update Variable' => 'Variabele bijwerken',
  'Variable value must be valid JSON.' => 'De variabelewaarde moet geldige JSON zijn.',
  'Lowercase letters, digits, dot and hyphen only.' => 'Alleen kleine letters, cijfers, punten en koppeltekens.',
  'Edit Variable: %s' => 'Variabele bewerken: %s',
  'Key/Value Configuration Store' => 'Sleutel/waarde instellingenopslag',
  'Variable "%s"' => 'Variabele "%s"',
  'Phlux Variables' => 'Phlux-variabelen',
  'Enter value as JSON.' => 'Voer de waarde in als JSON.',
  'Variable key must be unique.' => 'De variabele sleutel moet uniek zijn.',
  'Create Variable' => 'Variabele maken',
  'Phlux' => 'Phlux',
  '%s updated this variable.' => '%s heeft deze variabele bijgewerkt.',
  '%s created this variable.' => '%s heeft deze variabele gemaakt.',
  'Edit Variable' => 'Variabele bewerken',
  'Variable List' => 'Variabelenlijst',
  'Variable key is required.' => 'Een variabelesleutel is vereist.',
  'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'De variabelesleutel "%s" mag alleen kleine letters, cijfers, punten en koppeltekens bevatten.',
);
  }

}
