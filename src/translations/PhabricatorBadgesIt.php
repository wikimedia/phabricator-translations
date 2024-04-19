<?php

final class PhabricatorBadgesIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Poor' => 'Povero',
      '%s updated the quality of %s from %s to %s.' => '%s aggiornato la qualità di %s da %s a %s.',
      'Quality' => 'Qualità',
      'Epic' => 'Epico',
      'Legendary' => 'Leggendario',
      'International' => 'Internazionale',
      'Ladybug' => 'Coccinella',
      'Rare' => 'Raro',
    );
  }

}
