<?php

final class PhabricatorPhpastSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Node %d: %s' => 'Vozlišče %s: %s',
      'Token %d: %s' => 'Žeton %s: %s',
    );
  }

}
