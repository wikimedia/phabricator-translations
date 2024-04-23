<?php

final class PhabricatorPasteRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      '%s updated the title for %s from %s to %s.' => '%s aggiornate \'u titole pe %s da %s a %s.',
      'PASTE LINK' => '\'NGOLLE \'U COLLEGAMENDE',
      'The title of the paste.' => '\'U titole da \'ngollà.',
    );
  }

}
