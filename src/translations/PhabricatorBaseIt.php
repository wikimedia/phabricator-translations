<?php

final class PhabricatorBaseIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Public Access' => 'Accesso pubblico',
    );
  }

}
