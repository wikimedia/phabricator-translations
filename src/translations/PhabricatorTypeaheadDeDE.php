<?php

final class PhabricatorTypeaheadDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Typeahead-Ergebnisse',
      'Typeahead' => 'Typeahead',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Die Datenquelle ("%s") konnte die Funktion "%s(...)" nicht evaluieren.',
      'Function Help' => 'Funktionshilfe',
      'Invalid Parameters' => 'Ungültige Parameter',
      'Source Class' => 'Quell-Klasse',
      'Token Results (%s)' => 'Tokenergebnisse (%s)',
      'Reference: Advanced Functions' => 'Referenz: Fortgeschrittene Funktionen',
      'Image URI' => 'Bild-URI',
      'Select' => 'Auswählen',
      'Display Name' => 'Anzeigename',
      'Unable to parse function and arguments for token "%s".' => 'Unfähig, die Funktion und die Argumente für den Token "%s" zu parsen.',
      'Invalid Function: %s' => 'Ungültige Funktion: %s',
      'More Results' => 'Weitere Ergebnisse',
      'Browse Numbers' => 'Nummern durchsuchen',
    );
  }

}
