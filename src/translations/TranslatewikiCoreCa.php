<?php

final class TranslatewikiCoreCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'NONE' => 'CAP',
      'GENDER' => 'GÈNERE',
      'Read %s string(s).' => 'Llegeix %s cadena(es).',
      'Frequency Data' => 'Dada de freqüència',
      'Writing data (%s, %s) to "%s"...' => 'Escrivint dades (%s, %s) a "%s"...',
      'Used in:' => 'Utilitzat a:',
      'English strings' => 'Cadenes en anglès',
      'Context strings' => 'Contexte de les cadenes',
      'Variable Types: %s.' => 'Tipus de variables: %s.',
      'Done.' => 'Fet.',
      'PLURAL' => 'PLURAL',
    );
  }

}
