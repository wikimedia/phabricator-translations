<?php

final class PhabricatorPhpastIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'Node %d: %s' => 'Nodo %s: %s',
    );
  }

}
