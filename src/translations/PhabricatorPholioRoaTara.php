<?php

final class PhabricatorPholioRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'This mock will be closed.' => 'Sta prove avène achiuse.',
      'This image will be removed from the mock.' => 'Ste immaggine avèna luate da \'a prove.',
      '%s replaced %s with %s.' => '%s sostituite da %s cu %s.',
      'Edit Mock: %s' => 'Cange \'a prove: %s',
      'Review Mocks and Design' => 'Revide prove e proggette',
      '%s added %d image(s): %s.' => '%s aggiunde %s immagine: %s.',
      'Close Mock' => 'Achiude \'a prove',
      '%s closed mock %s.' => '%s prove achiuse %s.',
    );
  }

}
