<?php

final class PhabricatorPholioDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      '%s replaced %s with %s.' => '%s erstattede %s med %s.',
      'Undo' => 'Fortryd',
      'Pholio' => 'Pholio',
      'Uploading Image...' => 'Overfører billede...',
    );
  }

}
