<?php

final class PhabricatorCelerityId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Found %d packages.' => 'Ditemukan %s paket.',
    );
  }

}
