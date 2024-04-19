<?php

final class PhabricatorNuanceLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'User %s' => 'Benotzer %s',
      'Renamed' => 'Ëmbenannt',
    );
  }

}
