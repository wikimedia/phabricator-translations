<?php

final class PhabricatorPackagesSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Edit Version' => 'Muuʹtt versio',
      'Edit Version: %s' => 'Muuʹtt versio: %s',
      'Create Version' => 'Raaj versio',
    );
  }

}
