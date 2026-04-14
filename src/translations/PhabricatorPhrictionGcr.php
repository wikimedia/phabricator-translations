<?php

final class PhabricatorPhrictionGcr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'gcr';
  }

  protected function getTranslations() {
    return array(
  'Draft %d' => 'Brouyon %d',
  'Save as Draft' => 'Anréjistré kou brouyon',
);
  }

}
