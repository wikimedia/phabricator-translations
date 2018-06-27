<?php

final class PhabricatorHelpCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Tanca qualsevol diàleg, incloent aquest.',
      'Unsupported Editor Protocol' => 'Protocol d\'edició no suportat',
      'Change Settings' => 'Canvia configuració',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'El teu editor URI configurat utilitza un protocol no suportat. Canvia la teva configuració per utilitzar un protocol suportat, o pregunta a l\'administrador del sistema per afegir suport pel protocol escollit per configuració: %s',
      '%s Help' => 'Ajuda: %s',
      'Keyboard Shortcuts' => 'Dreceres de teclat',
    );
  }

}
