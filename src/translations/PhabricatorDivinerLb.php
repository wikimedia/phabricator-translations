<?php

final class PhabricatorDivinerLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Rule \'%s\' is not a valid regular expression.' => 'D\'Reegel „%s“ ass kee gültege regulären Ausdrock.',
  'Article' => 'Artikel',
  'Books' => 'Bicher',
  'No books found.' => 'Keng Bicher fonnt.',
  'Edit Book' => 'Buch änneren',
  'Defined' => 'Definéiert',
  'Documentation Not Found' => 'Dokumentatioun net fonnt',
  'Edit Book: %s' => 'Buch änneren: %s',
  'Book' => 'Buch',
);
  }

}
