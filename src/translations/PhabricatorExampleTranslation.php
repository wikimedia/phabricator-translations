<?php

final class PhabricatorExampleTranslation
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_E*';
  }

  protected function getTranslations() {
    return array(
      'Example String' => 'Replacement String',
    );
  }
}

