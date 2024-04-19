<?php

final class PhabricatorPholioNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Unknown (ID %d)' => 'Ukjent (ID %s)',
    );
  }

}
