<?php

final class PhabricatorFactNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Not Stored' => 'Niet opgeslagen',
      'Not Generated' => 'Niet gegenereerd',
    );
  }

}
