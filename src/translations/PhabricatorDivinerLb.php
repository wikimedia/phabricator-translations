<?php

final class PhabricatorDivinerLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Article' => 'Artikel',
  'Books' => 'Bicher',
  'No books found.' => 'Keng Bicher fonnt.',
  'Defined' => 'Definéiert',
  'Documentation Not Found' => 'Dokumentatioun net fonnt',
  'Book' => 'Buch',
);
  }

}
