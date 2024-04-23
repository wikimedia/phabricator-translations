<?php

final class PhabricatorDivinerMdf
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mdf';
  }

  protected function getTranslations() {
    return array(
      'Books' => 'Китапт',
      'Book' => 'Китап',
    );
  }

}
