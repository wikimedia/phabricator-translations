<?php

final class PhabricatorextCoreDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Next: %s' => 'Næste: %s',
      'Merged' => 'Flettet',
      'Gerrit Projects' => 'Gerrit projekter',
      'Allow' => 'Tillad',
      'MediaWiki' => 'MediaWiki',
      'Deny' => 'Afvis',
      '%s Line(s) removed' => '%s linje(r) fjernet',
      'Unknown' => 'Ukendt',
      'Global Accounts' => 'Globale konti',
      'Gerrit' => 'Gerrit',
    );
  }

}
