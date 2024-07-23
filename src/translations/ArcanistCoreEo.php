<?php

final class ArcanistCoreEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Ĉesigita pro malsukceso de dosiera alŝuto. Vi povas uzi %s nespecifi duumajn alŝutojn.',
      'This working copy is associated with the %s repository.' => 'Tiu laboranta kopio estas asociita kun la %s deponejo.',
      'Lint Disabler' => 'Lint malebligilo',
      'Call to "posix_getpgid(...)" failed!' => 'Voko de "posix_getpgid(...)" malsukcesis!',
      'A linter for Composer related files.' => 'Eraravertilo por dosieroj rilataj al Composer',
      '"%s" (%s)' => '"%s" (%s)',
      'Saved "%s" as "%s".' => '"%s" konservita kiel "%s".',
      'Not parsing!' => 'Ne disponiganta!',
      'Portuguese (Portugal)' => 'Portugala (Portugalio)',
      'File Symbol "%s"' => 'Dosiersimbolo "%s"',
      'Try running your arc command again.' => 'Provu ruli vian <code>arc</code> ordonon denove.',
      'CC: %s' => 'kaŝkopio: %s',
      'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'Se la dosiero ne estas teksta dosiero, vi povas marki ĝin \'duuma\'. Marku tiun dosieron kiel \'duuma\' kaj pluigi?',
      'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'Regulo \'%s\' estas nevalida, ĝi devas havi tipon kaj nomon kiel \'%s\'.',
      'Task Symbol "%s"' => 'Tasksimbolo "%s"',
      'None of the configured interpreters can be located.' => 'Neniu de la agordaj sencigiloj estas trovebla.',
      'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'Tiu laborfluo (\'%s\') necesas deponejan elvokingaro,      superprenigu %s por liveri veran.',
      'This patch may have failed because it attempts to change the case of a filename (for instance, from \'%s\' to \'%s\'). Mercurial cannot apply patches like this on case-insensitive filesystems. You must apply this patch manually.' => 'Ĉi tiu flikrimedo eble malsukcesis ĉar ĝi provas ŝanĝi la usklon de dosiernomo (ekzemple, de \'%s\' al \'%s\'). Mercurial ne povas apliki tiajn flikrimedojn al usklecivaj dosiersistemoj. Vi devas apliki tiun flikrimedon mane.',
      'Unknown argument \'%s\'. Try \'%s\'.' => 'Nekonata argumento \'%s\'. Provu \'%s\'.',
      'English (Pirate)' => 'Angla (pirata)',
      '**bookmarks**' => '**legosignoj**',
      'Runtime Error' => 'Rultempa eraro',
      'Inline HTML' => 'Enteksta HTML',
      'Remote Repository' => 'Fora deponejo',
      'Empty certificate in credentials.' => 'Malplena atestilo en ensalutiloj.',
      'No tests to run.' => 'Neniuj testoj por lanĉi.',
      '%s assertion(s) passed.' => '%s aserto(j) kontrolitaj.',
      'Unknown Symbol' => 'Nekonata simbolo',
      'Against which commit?' => 'Kontraŭ kiu enmeto?',
      'commit-message' => 'enmeto-mesaĝo',
      'HLint is a linter for Haskell code.' => 'HLint estas kodokontrolilo por programlingvo Haskell.',
      'Assertion failed, expected \'%s\' (at %s:%d): %s' => 'Aserto malsukcesis, atendita estis \'%s\' (ĉe %s:%s): %s',
      'Throwing Exception in `%s` Method' => 'Ĵetante escepton en la metodo \'%s\'',
      'English (Canada)' => 'Angla (Kanado)',
      'Author: %s' => 'Aŭtoro: %s',
      'ERROR' => 'ERARO',
      'Do not upload binaries (like images).' => 'Ne alŝutu duumaĵojn (kiel bildojn).',
      'Commit this revision anyway?' => 'Ĉu tamen enmeti tiun ĉi version?',
      'After creating the task, open it in a web browser.' => 'Post kreo de la tasko, malfermu ĝin en retfoliumilo.',
      'Changes Planned' => 'Planitaj ŝanĝoj',
      'Option \'%s\' requires a parameter.' => 'Opcio \'%s\' postulas parametron.',
      'Copied Here' => 'Kopiita ĉi tien',
      'Aborted generation of gigantic diff.' => 'Haltigita genero de giganta diferenco.',
      '    %s %s
    ' => '    %s %s',
      'Modified' => 'Ŝanĝita',
      'Revision %s' => 'Versio %s',
      'Uploaded binary data for "%s".' => 'Alŝutita duuma datumo por "%s".',
      'Open this page in your browser and log in if necessary:' => 'Malfermu ĉi tiun paĝon en via retumilo kaj ensalutu al Phabricator se necese:',
      'ALIAS' => 'Alinomo',
    );
  }

}
