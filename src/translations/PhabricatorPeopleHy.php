<?php

final class PhabricatorPeopleHy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hy';
  }

  protected function getTranslations() {
    return array(
      'Bot' => 'Բոտ',
      'Bots' => 'Բոտեր',
      'Projects (%s)' => 'Նախագծեր (%s)',
      'Log Out %s' => 'Դուրս գալ %s',
    );
  }

}
