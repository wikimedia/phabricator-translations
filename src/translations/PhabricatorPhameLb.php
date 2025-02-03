<?php

final class PhabricatorPhameLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'here' => 'hei',
      'Archived Post' => 'Archivéierte Bäitrag',
      'Write Post' => 'Bäitrag schreiwen',
    );
  }

}
