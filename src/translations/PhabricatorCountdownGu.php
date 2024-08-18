<?php

final class PhabricatorCountdownGu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'gu';
  }

  protected function getTranslations() {
    return array(
      'Minutes' => 'મિનિટો',
      'Hours' => 'કલાકો',
      'Days' => 'દિવસો',
    );
  }

}
