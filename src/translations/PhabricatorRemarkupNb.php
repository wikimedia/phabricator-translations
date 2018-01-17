<?php

final class PhabricatorRemarkupNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Prosesser tekst via remarkup i Phabricator-kontekst.',
      'Invalid markup engine.' => 'Ugyldig markup-motor.',
      'Content may not be empty.' => 'Innholdet kan ikke være tomt.',
    );
  }

}
