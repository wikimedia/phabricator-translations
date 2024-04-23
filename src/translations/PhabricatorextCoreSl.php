<?php

final class PhabricatorextCoreSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'The requested project does not exist' => 'Zahtevani projekt ne obstaja',
      'Skip OFFSET rows before processing the remaining transactions.' => 'Pred obdelavo preostalih transakcij preskoči vrstice OFFSET.',
      'Invalid' => 'Neveljavno',
      'Blocked on Code Review - Needs Changes' => 'Blokiran pri pregledu kode',
      'Limit the number of transaction rows to process. Default: 10000' => 'Omeji število transakcijskih vrstic na proces. Privzeto: 10.000.',
      'Unknown or missing ldap names: %s' => 'Neznana ali manjkajoča imena ldap: %s',
      'Code Review Started' => 'Pregled kode se je začel',
      'Changed Type' => 'Spremenjena vrsta',
      'Expert Mode.' => 'Strokovni način.',
      'Missing or malformed parameter.' => 'Manjkajoč ali napačno oblikovan parameter.',
      'Unknown' => 'Neznano',
      'Global Accounts' => 'Globalni računi',
      'You cannot roll back the activity of a privileged user.' => 'Aktivnosti privilegiranega uporabnika ne morete vrniti.',
      'Expert Mode' => 'Strokovni način',
      'Unknown or missing mediawiki names: %s' => 'Neznana ali manjkajoča imena MediaWiki: %s',
      'Abandoned' => 'Opuščeno',
    );
  }

}
