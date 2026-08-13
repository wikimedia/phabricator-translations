<?php

final class PhabricatorFilesLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'ERROR' => 'FEELER',
  '<Invalid Output>' => '<Ongültegen Output>',
  'Save Image' => 'Bild späicheren',
  'Temporary' => 'Temporär',
  'Failed to load file.' => 'De Fichier konnt net geluede ginn.',
  'Unable to parse this document as JSON: %s' => 'Dëst Dokument kann net als JSON geparst ginn: %s',
  'SKIPPED' => 'IWWERSPRONGEN',
  'Field "data_base64" must be non-empty.' => 'D\'Feld „data_base64“ däerf net eidel sinn.',
  'File "%s" has a valid integrity hash.' => 'De Fichier „%s“ huet e gültegen Integritéits-Hash.',
  'View as Image' => 'Als Bild weisen',
  'No file "%s" exists.' => 'Et gëtt kee Fichier "%s".',
  'This document is not valid JSON: %s' => 'Dat hei Dokument ass kee gültegen JSON: %s',
  'View as PDF' => 'Als PDF weisen',
  'Dimensions' => 'Dimensiounen',
  'View as Video' => 'Als Video weisen',
  'Video' => 'Video',
  'File "%s" has an invalid integrity hash!' => 'De Fichier „%s“ huet en ongültegen Integritéits-Hash!',
  'Delete File' => 'Fichier läschen',
  'Friendly Fruit' => 'Frëndlech Fruucht',
  'Upload a file to the server.' => 'E Fichier op de Server eroplueden.',
);
  }

}
