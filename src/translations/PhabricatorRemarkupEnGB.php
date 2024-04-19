<?php

final class PhabricatorRemarkupEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Invalid markup engine.',
      'Process text through remarkup.' => 'Process text through remarkup in Phabricator context.',
      'Content may not be empty.' => 'Content may not be empty.',
    );
  }

}
