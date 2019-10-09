<?php

final class TranslatewikiCoreRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Dèje \'u percorse a \'na libbrerie da addò esportà le traduziune.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Non ge riesche a estratte \'a stringhe cu \'u pattern scanusciute "%%", "%s": %s.',
      'NONE' => 'NONE',
      'Provide a locale code with "--locale".' => 'Dèje \'nu codece locale cu "--locale".',
      'Ignoring string "%s"; not present in translation source file.' => 'Stoche a cache a stringhe "%s"; non g\'è presente jndr\'à \'u file sorgende d\'a traduzione.',
      'Provide the path to exactly one library to export translations from.' => 'Dèje \'u percorse precisamende a \'na libbrerie da addò esportà le traduziune.',
      'Provide a project name to export strings under with "--as".' => 'Dèje \'nu nome a \'u pruggette pe esportà stringhe sotte cu "--as".',
      'Raw strings' => 'Stringhe grezze',
      'Name of the project that a translation file is being generated for.' => 'Nome d\'u pruggette pu quale avène generate \'nu file de traduzione.',
      'Extracting library strings...' => 'Stoche a pigghie le stringhe d\'a libbrerie...',
      'GENDER' => 'SESSE',
      'Locale code for the generated source.' => 'Codece locale pa sorgende generate.',
      'Provide a classname with "--class".' => 'Dèje \'nu classname cu "--class".',
      'Read %s string(s).' => 'Lìgge %s stringhe.',
      'Class name to generate.' => 'Nome d\'a classe da generà.',
      'Frequency Data' => 'Frequenze d\'u date',
      'Provide a JSON source file with "--source".' => 'Dèje \'nu file sorgende JSON cu "--source".',
      'Generate a Phabricator translation classfile.' => 'Genere \'nu classfile de traduzione de Phabricator.',
      'JSON source file containing translation strings.' => 'File sorgende JSON ca tène le stringhe de traduzione.',
      'Export translation strings from a libphutil library.' => 'Esporte le stringhe de traduzione da \'na libbrerie libphutil.',
      'Writing data (%s, %s) to "%s"...' => 'Stoche a scrive le date (%s, %s) jndr\'à "%s"...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => 'Se aspette ca l\'estrazzione d\'a stringhe d\'a libbrerie genere \'u file "%s", ma non g\'esiste stu file!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Nome d\'u pruggette ca ste avène esportate. Le file esportate avènene scritte jndr\'à "projects/" ausanne stu nome.',
      'Used in:' => 'Ausate jndr\'à:',
      'English strings' => 'Stringhe inglese',
      'Context strings' => 'SZtringhe de conteste',
      'Provide a project name with "--project".' => 'Dèje \'nu nome d\'u pruggette cu "--project".',
      'Variable Types: %s.' => 'Tipe de variabbile: %s.',
      'Provide an output file with "--out".' => 'Dèje \'nu file de resultate cu "--out".',
      'Base URI for browsing files in the project being exported.' => 'URI de base pe sfogghià le file jndr\'à \'u pruggette ca ste avène esportate.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Passe --clean a l\'estrattore ca ste sotte pe relascià le cache apprime de estrarre le stringhe e eseguì \'na combilazione combletamende pulite. Lende!',
      'Done.' => 'Fatte.',
      'Location to write the generated translation file.' => 'Poste addò scrivere \'u file de traduzione generate.',
      'PLURAL' => 'PLURALE',
    );
  }

}
