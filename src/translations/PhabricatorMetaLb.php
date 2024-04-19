<?php

final class PhabricatorMetaLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Informatiounen',
      'Syntax' => 'Syntax',
      'You cannot install an installed application.' => 'Dir kënnt installéiert Applikatiounen net installéieren.',
      'Really Uninstall Application?' => 'Applikatioun wierklech desinstalléieren?',
      'Really uninstall the %s application?' => 'D\'Applikatioun %s wierklech desinstalléieren?',
      'Uninstalled' => 'Desinstalléiert',
      'Show Uninstalled Applications' => 'Desinstalléiert Applikatioune weisen',
      'Show Installed Applications' => 'Installéiert Applikatioune weisen',
      'Uninstall' => 'Desinstalléieren',
      'This application is required and cannot be uninstalled.' => 'Dës Applikatioun kann net desinstalléiert ginn, well se gebraucht gëtt, fir datt Phabricator leeft.',
    );
  }

}
