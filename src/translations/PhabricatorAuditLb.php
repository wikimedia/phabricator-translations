<?php

final class PhabricatorAuditLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'USERS' => 'BENOTZER',
  'Object "%s" is not a valid object.' => 'Den Objet „%s“ ass kee gültegen Objet.',
  'Unable to parse date "%s". Use a format like "%s".' => 'Den Datum „%s“ konnt net geparst ginn. Benotzt e Format wéi „%s“.',
  'Identifiers' => 'Identifianten',
);
  }

}
