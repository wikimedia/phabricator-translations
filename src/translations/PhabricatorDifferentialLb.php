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
      'No Actions' => 'Keng Aktiounen',
      'Left' => 'Lenks',
      'Right' => 'Riets',
      'Discard Edit' => 'Ännerung verwerfen',
      'Request Changes' => 'Ännerunge froen',
      'No revision "%s" exists.' => 'Et gëtt keng Versioun "%s".',
    );
  }

}
