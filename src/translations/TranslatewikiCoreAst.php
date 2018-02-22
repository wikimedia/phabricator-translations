<?php

final class TranslatewikiCoreAst
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ast';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Da\'l camín a una biblioteca de la qu\'esportar traducciones',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Nun pudo estrayese la cadena col patrón nun reconocíu «%%», «%s»: %s.',
      'NONE' => 'NENGÚN',
      'Provide a locale code with "--locale".' => 'Da un códigu de locale con «--locale».',
      'Ignoring string "%s"; not present in translation source file.' => 'Inórase la cadena «%s»; nun ta presente nel ficheru d\'orixe de la traducción.',
      'Provide the path to exactly one library to export translations from.' => 'Da\'l camín a exautamente una biblioteca de la qu\'esportar traducciones',
      'Provide a project name to export strings under with "--as".' => 'Da\'l nome d\'un proyectu baxo\'l qu\'esportar les cadenes con «--as».',
      'Raw strings' => 'Cadenes en bruto',
      'Name of the project that a translation file is being generated for.' => 'Nome del proyectu pal que ta xenerándose un ficheru de traducción.',
      'Extracting library strings...' => 'Estrayendo les cadenes de la biblioteca…',
      'GENDER' => 'XÉNERU',
      'Locale code for the generated source.' => 'Códigu del locale pa la fonte xenerada.',
      'Provide a classname with "--class".' => 'Da un nome de clase con «--class».',
      'Read %s string(s).' => 'Lleída %s cadena(es)',
      'Class name to generate.' => 'Nome de clase a xenerar.',
      'Frequency Data' => 'Datos de frecuencia',
      'Provide a JSON source file with "--source".' => 'Da un ficheru fonte en JSON con «--source».',
      'Generate a Phabricator translation classfile.' => 'Xenerar un ficheru de clase de traducción de Phabricator.',
      'JSON source file containing translation strings.' => 'Ficheru fonte en JSON que contien cadenes de traducción.',
      'Export translation strings from a libphutil library.' => 'Esportar cadenes de traducción dende una biblioteca libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Escribiendo datos (%s, %s) a «%s»…',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Esperábase la estraición de cadenes de la biblioteca pa xenerar el ficheru «%s», pero\'l ficheru nun esiste.',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Nome pal proyectu que va esportase. Los ficheros esportaos escribiránse\'n «projects/» usando esti nome.',
      'Used in:' => 'Usáu en:',
      'English strings' => 'Cadenes n\'inglés',
      'Context strings' => 'Cadenes de contestu',
      'Provide a project name with "--project".' => 'Da un nome de proyectu con «--project».',
      'Variable Types: %s.' => 'Tipos de variables: %s.',
      'Provide an output file with "--out".' => 'Da un ficheru de salida con «--out».',
      'Base URI for browsing files in the project being exported.' => 'URI base pa restolar los ficheros del proyectu que van esportase.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Pasa «--clean» al estractor de base pa descartar les caches antes d\'estrayer les cadenes y facer una reconstrucción llimpia completa. ¡Lento!',
      'Done.' => 'Fecho.',
      'Location to write the generated translation file.' => 'Allugamientu onde guardar el ficheru de traducción xeneráu.',
      'PLURAL' => 'PLURAL',
    );
  }

}
