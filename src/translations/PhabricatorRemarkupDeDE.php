<?php

final class PhabricatorRemarkupDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'Ungültige Markup-Engine.',
  'Process text through remarkup.' => 'Verarbeite den Text über remarkup.',
);
  }

}
