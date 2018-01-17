<?php

final class PhabricatorRemarkupEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Process text through remarkup in Phabricator context.',
      'Invalid markup engine.' => 'Invalid markup engine.',
      'Content may not be empty.' => 'Content may not be empty.',
    );
  }

}
