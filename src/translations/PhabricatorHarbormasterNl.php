<?php

final class PhabricatorHarbormasterNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Publishing "%s"...' => '"%s" publiceren…',
      'Follow Log' => 'Logboek volgen',
      'View Current Build' => 'Huidige bouw weergeven',
      'Preparing' => 'Voorbereiden',
      'Build Log %d' => 'Bouwlogboek %s',
      'Lines' => 'Regels',
      'Download Log' => 'Logboek ophalen',
      'Stop Following Log' => 'Logboek niet meer volgen',
    );
  }

}
