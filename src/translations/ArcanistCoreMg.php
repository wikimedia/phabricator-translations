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
      'Lint Disabler' => 'Mpanajanona Lint',
      '"%s" (%s)' => '"%s" (%s)',
      'Saved "%s" as "%s".' => 'Nanatahiry an\'i "%s" ho "%s".',
      'CC: %s' => 'CC: %s',
      'English (Pirate)' => 'Anglisy (Piraty)',
      'Pick' => 'Alaina',
      'LANDING' => 'FIDINANA',
      'Remote Repository' => 'Tahiry any lavitra',
      'SHELL' => 'SHELL',
      '`%s` Statement Must Be The First Statement' => 'Tsy maintsy baiko voalohany ny baiko `%s`',
      'English (Canada)' => 'Anglisy (Kanada)',
      'Author: %s' => 'Mpanoratra: %s',
      'ERROR' => 'HADISOANA',
      'DETACHED HEAD' => 'LOHA NAILIKA',
      'Changes Planned' => 'Fiovana voalahatra',
      'Copied Here' => 'Nadika teto',
    );
  }

}
