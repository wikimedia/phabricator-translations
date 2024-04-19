<?php

final class PhabricatorCountdownTe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'te';
  }

  protected function getTranslations() {
    return array(
      'Minutes' => 'నిమిషాలు',
      'Hours' => 'గంటలు',
      'Days' => 'రోజులు',
    );
  }

}
