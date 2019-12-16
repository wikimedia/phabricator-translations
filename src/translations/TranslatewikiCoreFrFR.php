<?php

final class TranslatewikiCoreFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Fournit le chemin d’une bibliothèque dont les traductions sont à exporter.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Impossible d’extraire la chaîne car le motif « %% » n’est pas reconnu, « %s » : %s.',
      'NONE' => 'NÉANT',
      'Provide a locale code with "--locale".' => 'Indiquez un code d’internationalisation avec « --locale ».',
      'Ignoring string "%s"; not present in translation source file.' => 'Chaîne « %s » ignorée ; absente du fichier source de traduction.',
      'Provide the path to exactly one library to export translations from.' => 'Indique le chemin vers exactement une bibliothèque d’où les traductions sont exportées.',
      'Provide a project name to export strings under with "--as".' => 'Indiquez un nom de projet dont les chaînes sont exportées avec « --as ».',
      'Raw strings' => 'Chaînes brutes',
      'Name of the project that a translation file is being generated for.' => 'Nom du projet pour lequel est généré un fichier de traduction.',
      'Extracting library strings...' => 'Extraction de chaînes de la bibliothèque...',
      'GENDER' => 'GENRE',
      'Locale code for the generated source.' => 'Code d’internationalisation pour le source généré.',
      'Provide a classname with "--class".' => 'Fournir un nom de classe avec « --class ».',
      'Read %s string(s).' => 'Lire %s chaîne(s) de caractères.',
      'Class name to generate.' => 'Nom de classe à générer.',
      'Frequency Data' => 'Données de fréquence',
      'Provide a JSON source file with "--source".' => 'Indiquez un fichier source JSON avec « --source ».',
      'Generate a Phabricator translation classfile.' => 'Générer un fichier de classe de traduction pour Phabricator.',
      'JSON source file containing translation strings.' => 'Fichier source JSON contenant des traductions de phrases.',
      'Export translation strings from a libphutil library.' => 'Exporter des chaînes de traduction d’une bibliothèque libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Écriture des données (%s, %s) dans « %s »...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Extraction des chaînes d’une bibliothèque attendue pour générer un fichier « %s », mais un tel fichier n’existe pas !',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Nom du projet à exporter. Les fichiers exportés seront écrits dans « projects/ » en utilisant ce nom.',
      'Used in:' => 'Utilisé dans :',
      'English strings' => 'Chaînes en anglais',
      'Context strings' => 'Chaînes de contexte',
      'Provide a project name with "--project".' => 'Indiquez un nom de projet avec « --project ».',
      'Variable Types: %s.' => 'Types de variables : %s.',
      'Provide an output file with "--out".' => 'Indiquez un fichier de sortie avec « --out ».',
      'Base URI for browsing files in the project being exported.' => 'URI de base pour parcourir les fichiers du projet à exporter.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Passez « --clean » à l’extracteur sous-jacent afin de purger les caches avant d’extraire les chaînes et réaliser une reconstruction propre et complète. Lent !',
      'Done.' => 'Terminé.',
      'Location to write the generated translation file.' => 'Emplacement où écrire le fichier de traduction généré.',
      'PLURAL' => 'PLURIEL',
    );
  }

}
