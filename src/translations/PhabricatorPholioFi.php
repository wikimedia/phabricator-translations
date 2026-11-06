<?php

final class PhabricatorPholioFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Undo' => 'Kumoa',
  '%s edited task(s), added %s: %s; removed %s: %s.' => '%s muokkasi tehtäviä lisäämällä tämän: %3$s ja poistamalla tämän: %5$s',
);
  }

}
