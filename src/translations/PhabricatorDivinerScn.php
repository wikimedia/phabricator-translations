<?php

final class PhabricatorDivinerScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Found %s book(s).' => '%s libbru/i attruvatu/i.',
      'All Atoms' => 'Tutti li àtumi',
      'Article' => 'Vuci',
      'Books' => 'Libbra',
      'Edit Book' => 'Cancia libbru',
      'Untitled Article "%s"' => 'Vuci "%s" senza tìtulu',
      'Documentation Atoms' => 'Àtumi di ducumintazzioni',
      'Edit Book: %s' => 'Cancia libbru: %s',
      'Documentation Books' => 'Libbri di ducumintazzioni',
      'Book' => 'Libbru',
    );
  }

}
