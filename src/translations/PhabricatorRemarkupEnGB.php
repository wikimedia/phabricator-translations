<?php

final class PhabricatorRemarkupEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Invalid markup engine.',
      'Content may not be empty.' => 'Content may not be empty.',
    );
  }

}
