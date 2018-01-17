<?php

final class TranslatewikiCoreFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Impossible d\'extraire la chaîne car le motif "%%" n\'est pas reconnu, "%s": %s.',
      'NONE' => 'NEANT',
      'Ignoring string "%s"; not present in translation source file.' => 'Chaîne « %s » ignorée; absente du fichier source de traduction.',
      'Extracting library strings...' => 'Extraction de chaînes de la bibliothèque ...',
      'Provide a classname with "--class".' => 'Fournir un nom de classe avec « --class ».',
      'Class name to generate.' => 'Nom de classe à générer.',
      'Provide a JSON source file with "--source".' => 'Fournir un fichier source JSON avec "--source".',
      'Export translation strings from a libphutil library.' => 'Exporter des chaînes de traduction d\'une bibliothèque libphutil .',
      'Writing data (%s, %s) to "%s"...' => 'Écriture des données (%s, %s) dans « %s » ...',
      'Provide an output file with "--out".' => 'Fournir un fichier de sortie avec \'\'--out\'\'.',
      'Location to write the generated translation file.' => 'Adresse où sauvegarder le fichier de traduction généré.',
      'PLURAL' => 'PLURIEL',
    );
  }

}
