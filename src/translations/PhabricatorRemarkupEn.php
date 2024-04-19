<?php

final class PhabricatorRemarkupEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Invalid markup engine.',
      'Process text through remarkup.' => 'Process text through remarkup.',
      'Content may not be empty.' => 'Content may not be empty.',
    );
  }

}
