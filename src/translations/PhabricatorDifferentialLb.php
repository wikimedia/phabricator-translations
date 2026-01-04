<?php

final class PhabricatorDifferentialLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Copied Here' => 'Heihinner kopéiert',
      'Accept Revision' => 'Versioun akzeptéieren',
      '%s] [%s' => '%s] [%s',
      '%s Lines' => '%s Linnen',
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
