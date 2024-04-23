<?php

final class PhabricatorNuanceIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'Tag %s' => 'Etiketo %s',
      'Source %d' => 'Fonto %s',
    );
  }

}
