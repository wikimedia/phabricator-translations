<?php

final class PhabricatorRemarkupDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Ugyldig markup-motor.',
      'Process text through remarkup.' => 'Bearbejd tekst gennem remarkup i Phabricator kontekst.',
      'Content may not be empty.' => 'Indhold kan ikke være tomt.',
    );
  }

}
