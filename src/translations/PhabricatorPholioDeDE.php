<?php

final class PhabricatorPholioDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      '%s edited image(s), added %d: %s; removed %d: %s.' => '%s bearbeitete(s) Bild(er), hinzugefügt %s: %s; entfernt %s: %s.',
    );
  }

}
