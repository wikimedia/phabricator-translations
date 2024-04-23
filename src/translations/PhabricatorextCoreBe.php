<?php

final class PhabricatorextCoreBe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'be';
  }

  protected function getTranslations() {
    return array(
      'Download zip' => 'Спампаваць zip-архіў',
      'Download Archive' => 'Спампаваць архіў',
      'Download tar.gz' => 'Спампаваць tar.gz-архіў',
    );
  }

}
