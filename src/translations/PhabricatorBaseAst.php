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
      'Application Controller' => 'Controlador d\'aplicación',
      'Public Access' => 'Accesu públicu',
      'No Login Required' => 'Nun rique aniciar sesión',
      'No application!' => 'Nun esiste l\'aplicación',
      '%s Application' => 'Aplicación %s',
      'Developer Tools' => 'Ferramientes pa desendolcadores',
    );
  }

}
