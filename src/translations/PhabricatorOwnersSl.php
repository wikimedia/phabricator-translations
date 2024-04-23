<?php

final class PhabricatorOwnersSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Create New Package' => 'Ustvari nov paket',
      'Auto Review' => 'Samodejni pregled',
      'Auto review information.' => 'Podatki o samodejnem pregledu.',
      'The package description.' => 'Opis paketa.',
      'Save Paths' => 'Shrani poti',
      'Ignore generated files (review only).' => 'Prezri ustvarjene datoteke (samo pregled).',
      'Review All Changes' => 'Preglej vse spremembe',
      'Review All Changes (Blocking)' => 'Pregled vseh sprememb (blokiranje)',
      '%s archived this package.' => '%s je arhiviral_a ta paket.',
      'Overwrite existing package paths with new paths.' => 'Prepiši obstoječe poti paketov z novimi potmi.',
      'Active or archived status of the package.' => 'Aktivno ali arhivirano stanje paketa.',
      'Add New Path' => 'Dodaj novo pot',
      'This package will be marked as archived.' => 'Ta paket bo označen kot arhiviran.',
    );
  }

}
