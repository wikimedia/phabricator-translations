<?php

final class PhabricatorRemarkupNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'Ugyldig markup-motor.',
  'Process text through remarkup.' => 'Prosesser tekst via remarkup.',
  'Content may not be empty.' => 'Innholdet kan ikke være tomt.',
);
  }

}
