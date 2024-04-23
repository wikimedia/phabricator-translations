<?php

final class PhabricatorDifferentialFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'File Size' => 'Tiedoston koko',
      'Jump to next file.' => 'Siirry seuraavaan tiedostoon.',
      'Load File' => 'Lataa tiedosto',
      'CHANGE DETAILS' => 'MUUTA TIETOJA',
      'Reviewed By' => 'Tarkistanut',
      'This file is larger than %s, so syntax highlighting is disabled by default.' => 'Tämä tiedosto on suurempi kuin %s, joten syntaksin korostus on oletuksena pois käytöstä.',
      'All Revisions' => 'Kaikki tarkistukset',
      'Editing Comment' => 'Muokataan kommenttia',
      'List of tasks.' => 'Tehtävälista.',
      'Jump to next change.' => 'Siirry seuraavaan muutokseen.',
      'Open in Editor' => 'Avaa muokkaimessa',
      '(Empty.)' => '(Tyhjä.)',
    );
  }

}
