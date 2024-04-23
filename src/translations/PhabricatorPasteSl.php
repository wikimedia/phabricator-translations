<?php

final class PhabricatorPasteSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Change language used for syntax highlighting.' => 'Spremenite jezik, ki ga želite uporabljati za označevanje skladnje.',
      'Language to use for syntax highlighting.' => 'Izbira jezika za označevanje skladnje.',
      'PASTE LINK' => 'PRILEPI POVEZAVO',
      'Retrieve an array of information about a paste.' => 'Pridobitev matrike podatkov o prilepljenju.',
      '%s archived this paste.' => '%s je arhiviral_a to lepljenje.',
      'Language used for syntax highlighting. By default, inferred from the title.' => 'Jezik, ki se uporablja za označevanje skladnje. Po privzetem se povzame iz naslova.',
      'Active or archived status of the paste.' => 'Aktivno ali arhivirano stanje lepljenja.',
      'New paste title.' => 'Novi naslov kolaža.',
    );
  }

}
