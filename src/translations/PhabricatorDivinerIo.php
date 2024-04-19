<?php

final class PhabricatorDivinerIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'Books' => 'Libri',
      'Book' => 'Libro',
    );
  }

}
