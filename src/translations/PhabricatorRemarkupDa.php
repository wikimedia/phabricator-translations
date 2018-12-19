<?php

final class PhabricatorRemarkupDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Bearbejd tekst gennem remarkup i Phabricator kontekst.',
      'Invalid markup engine.' => 'Ugyldig markup-motor.',
      'Content may not be empty.' => 'Indhold kan ikke være tomt.',
    );
  }

}
