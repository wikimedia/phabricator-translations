<?php

final class PhabricatorDifferentialLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Invalid revision ID "%s".' => 'Ongülteg Versiouns-ID „%s“.',
  'Copied Here' => 'Heihinner kopéiert',
  'Accept Revision' => 'Versioun akzeptéieren',
  '%s] [%s' => '%s] [%s',
  'Load Changes' => 'Ännerunge lueden',
  '%s ERROR(S)' => '%s FEELER',
  '%s Lines' => '%s Linnen',
  'Error parsing field "%s": %s' => 'Feller beim Parse vum Feld „%s“: %s',
  'New Changes Shown' => 'Nei Ännerunge gewisen',
  'Read information about changesets.' => 'Informatiounen iwwer Ännerungssätz liesen.',
  'No Actions' => 'Keng Aktiounen',
  'Left' => 'Lénks',
  'Right' => 'Riets',
  'Change Author' => 'Auteur änneren',
  'All Changesets' => 'All Ännerungssätz',
  'Discard Edit' => 'Ännerung verwerfen',
  'Request Changes' => 'Ännerunge froen',
  'No revision "%s" exists.' => 'Et gëtt keng Versioun "%s".',
);
  }

}
