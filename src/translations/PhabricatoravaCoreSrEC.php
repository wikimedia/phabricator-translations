<?php

final class PhabricatoravaCoreSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
      'No vandalism detected.' => 'Није детектован вандализам.',
      'No action' => 'Нема радње',
    );
  }

}
