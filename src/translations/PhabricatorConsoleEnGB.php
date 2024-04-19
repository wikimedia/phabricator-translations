<?php

final class PhabricatorConsoleEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Analyze Query Plans' => 'Analyse Query Plans',
      'Can\'t Analyze' => 'Can\'t Analyse',
    );
  }

}
