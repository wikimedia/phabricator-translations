<?php

final class PhabricatorFilesLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'ERROR' => 'FEELER',
      'View as Image' => 'Als Bild weisen',
      'No file "%s" exists.' => 'Et gëtt kee Fichier "%s".',
      'View as PDF' => 'Als PDF weisen',
      'Dimensions' => 'Dimensiounen',
      'View as Video' => 'Als Video weisen',
      'language' => 'Sprooch',
    );
  }

}
