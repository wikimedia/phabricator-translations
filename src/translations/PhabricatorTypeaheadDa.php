<?php

final class PhabricatorTypeaheadDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Source Class' => 'Kildeklasse',
      'Image URI' => 'Billedeadresse',
      'Select' => 'Vælg',
      'Display Name' => 'Visningsnavn',
      'Invalid Function: %s' => 'Ugyldig funktion: %s',
      'More Results' => 'Flere resultater',
      'Browse Objects' => 'Gennemse objekter',
      'Auto' => 'Automatisk',
      'Browse Numbers' => 'Gennemse numre',
      'Priority Type' => 'Prioritetstype',
    );
  }

}
