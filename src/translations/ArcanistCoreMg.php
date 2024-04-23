<?php

final class ArcanistCoreMg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mg';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Nofoanana noho ny tsy fahombiazan\'ny fampidinana rakitra. Azonao atao ny mampiasa %s hialana amin\'ny fampidinana binera.',
      'Ref "%s" does not exist in remote "%s".' => 'Ny referansa "%s" dia tsy misy amin\'ny any lavitra "%s".',
      'This working copy is associated with the %s repository.' => 'Ity kopia fiasana ity dia mifandraika amin\'ny tahiry %s.',
      'Shortening of %s' => 'Fanafohezana ny %s',
      'Should throw on empty input' => 'Tokony manipy amin\'ny iditra poak\'aty',
      'Lint Disabler' => 'Mpanajanona Lint',
      '"%s" (%s)' => '"%s" (%s)',
      '(No messages.)' => '(Tsy misy hafatra.)',
      'Saved "%s" as "%s".' => 'Nanatahiry an\'i "%s" ho "%s".',
      'CC: %s' => 'CC: %s',
      'English (Pirate)' => 'Anglisy (Piraty)',
      'Phage does not target Windows.' => 'Phage dia tsy mikendry an\'i Windows.',
      'Pick' => 'Alaina',
      '%d >= %d' => '%s >= %s',
      'LANDING' => 'FIDINANA',
      'port' => 'seranana',
      'Remote Repository' => 'Tahiry any lavitra',
      'SHELL' => 'SHELL',
      'Set locale to en_GB.' => 'Handraikitra ny an-toerana ho en_GB.',
      '`%s` Statement Must Be The First Statement' => 'Tsy maintsy baiko voalohany ny baiko `%s`',
      '%s on %s' => '%s amin\'i %s',
      'English (Canada)' => 'Anglisy (Kanada)',
      'Author: %s' => 'Mpanoratra: %s',
      'ERROR' => 'HADISOANA',
      'PM' => 'Hrv',
      'DETACHED HEAD' => 'LOHA NAILIKA',
      'Changes Planned' => 'Fiovana voalahatra',
      'is_utf(%s)' => 'is_utf(%s)',
      'This test doesn\'t work on Windows.' => 'Tsy mandeha amin\'i Windows ity andrana ity.',
      'user' => 'mpampiasa',
      'Copied Here' => 'Nadika teto',
    );
  }

}
