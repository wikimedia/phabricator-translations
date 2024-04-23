<?php

final class PhabricatorFlagSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Flag %s' => 'Zastavica %s',
      'Already Marked' => 'Že označeno',
    );
  }

}
