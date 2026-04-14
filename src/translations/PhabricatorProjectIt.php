<?php

final class PhabricatorProjectIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
  'Period' => 'Periodo',
  'Value for "%s" rule is invalid: %s' => 'Il valore per la regola "%s" non è valido: %s',
  'Maximum number of tasks allowed in the column.' => 'Numero massimo di attività consentite nella colonna.',
  'Only' => 'Solo',
  'Subtype of the project.' => 'Sottotipo del progetto.',
  '(Default)' => '(Predifinito)',
  'T403385' => 'T403385',
);
  }

}
