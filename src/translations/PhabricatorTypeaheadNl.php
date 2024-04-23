<?php

final class PhabricatorTypeaheadNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Invalid Parameters' => 'Ongeldige parameters',
      'Browse Numbers' => 'Door getallen bladeren',
    );
  }

}
