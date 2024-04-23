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
      'Defined' => 'Definéiert',
      'Book' => 'Buch',
    );
  }

}