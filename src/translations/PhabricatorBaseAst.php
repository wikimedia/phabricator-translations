<?php

final class PhabricatorBaseAst
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ast';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nun esiste l\'aplicación \'%s\'',
      'Can Configure Application' => 'Puede configurar aplicación',
      'Can Use Application' => 'Puede usar aplicación',
      'No application!' => 'Nun esiste l\'aplicación',
      '%s Application' => 'Aplicación %s',
      'Developer Tools' => 'Ferramientes pa desendolcadores',
    );
  }

}
