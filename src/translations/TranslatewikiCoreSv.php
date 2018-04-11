<?php

final class TranslatewikiCoreSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Tillhandahåll sökvägen till ett bibliotek att exportera översättningar från.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Kunde inte extrahera sträng med det oigenkända mönstret "%%", "%s": %s.',
      'NONE' => 'INGEN',
      'Provide a locale code with "--locale".' => 'Tillhandahåll en språkkod med "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Ignorerar strängen "%s"; förekommer inte i översättningens källfil.',
      'Provide the path to exactly one library to export translations from.' => 'Tillhandahåll sökvägen till exakt ett bibliotek att exportera översättningar från.',
      'Provide a project name to export strings under with "--as".' => 'Tillhandahåll ett projektnamn för att exportera strängar under med "--as".',
      'Raw strings' => 'Råa strängar',
      'Name of the project that a translation file is being generated for.' => 'Namnet på projektet som en översättningsfil genereras för.',
      'Extracting library strings...' => 'Extraherar bibliotekssträngar...',
      'GENDER' => 'KÖN',
      'Locale code for the generated source.' => 'Språkkod för den genererade källan.',
      'Provide a classname with "--class".' => 'Tillhandahåll ett klassnamn med "--class".',
      'Read %s string(s).' => 'Läs %s sträng(ar).',
      'Class name to generate.' => 'Klassnamn att generera.',
      'Frequency Data' => 'Frekvensdata',
      'Provide a JSON source file with "--source".' => 'Tillhandahåll en JSON-källfil med "--source".',
      'Generate a Phabricator translation classfile.' => 'Generera en klassfil för Phabricator-översättningen.',
      'JSON source file containing translation strings.' => 'JSON-källfil som innehåller översättningssträngar.',
      'Export translation strings from a libphutil library.' => 'Exportera översättningssträngar från ett libphutil-bibliotek.',
      'Writing data (%s, %s) to "%s"...' => 'Skriver data (%s, %s) till "%s"...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Förväntade att extrahera bibliotekssträngar för att generera filen "%s", men ingen sådan fil finns!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Namnet på projektet som exporteras. Exporterade filer kommer att skrivas till "projects/" med detta namn.',
      'Used in:' => 'Används i:',
      'English strings' => 'Engelska strängar',
      'Context strings' => 'Sammanhangssträngar',
      'Provide a project name with "--project".' => 'Tillhandahåll ett projektnamn med "--project".',
      'Variable Types: %s.' => 'Variabeltyper: %s.',
      'Provide an output file with "--out".' => 'Tillhandahåll en utmatningsfil med "--out".',
      'Base URI for browsing files in the project being exported.' => 'Grund-URI för att bläddra filer i projektet som exporteras.',
      'Done.' => 'Klar.',
      'Location to write the generated translation file.' => 'Plats att skriva den genererade översättningsfilen.',
      'PLURAL' => 'PLURAL',
    );
  }

}
