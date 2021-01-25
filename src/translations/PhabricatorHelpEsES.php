<?php

final class PhabricatorHelpEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Cerrar cualquier cuadro de diálogo, incluido este.',
      '%s Help' => 'Ayuda de %s',
      'Keyboard Shortcuts' => 'Atajos de teclado',
    );
  }

}
