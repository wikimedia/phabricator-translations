<?php

final class PhabricatorHelpEs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Cerrar cualquier cuadro de diálogo, incluido este.',
      'Unsupported Editor Protocol' => 'Protocolo de editor no admitido',
      'Change Settings' => 'Cambiar configuración',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'El URI de editor configurado utiliza un protocolo no admitido. Modifícalo para que utilice un protocolo compatible o pide a tu administrador que configure lo siguiente para añadir compatibilidad: %s',
      '%s Help' => 'Ayuda de %s',
      'Keyboard Shortcuts' => 'Atajos de teclado',
    );
  }

}
