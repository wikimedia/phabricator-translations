<?php

final class PhabricatorLegalpadSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Last Updated' => 'Mââimõssân peiʹvvuum',
      'Version %d (%s)' => 'Versio %s (%s)',
    );
  }

}
