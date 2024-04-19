<?php

final class PhabricatorPhrictionDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Version %d' => 'Versiyon %s',
      'Edit Draft Version %s...' => 'Versiyonê teslaği bıvurne %s...',
      'Draft %d' => 'Teslağ %s',
    );
  }

}
