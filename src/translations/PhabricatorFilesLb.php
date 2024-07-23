<?php

final class PhabricatorFilesLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'ERROR' => 'FEELER',
      'SKIPPED' => 'IWWERSPRONGEN',
      'Field "data_base64" must be non-empty.' => 'D\'Feld „data_base64“ däerf net eidel sinn.',
      'View as Image' => 'Als Bild weisen',
      'No file "%s" exists.' => 'Et gëtt kee Fichier "%s".',
      'View as PDF' => 'Als PDF weisen',
      'Dimensions' => 'Dimensiounen',
      'View as Video' => 'Als Video weisen',
      'Friendly Fruit' => 'Frëndlech Fruucht',
    );
  }

}
