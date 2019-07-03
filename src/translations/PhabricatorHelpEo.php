<?php

final class PhabricatorHelpEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Fermi ajnan dialogon, inkluzive de ĉi tiu.',
      'Unsupported Editor Protocol' => 'Nesubtenata Redaktila Protokolo',
      'Change Settings' => 'Agordi',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Via agordita redaktila retadreso uzas nesubtenatan protokolon. Ŝanĝu viajn agordojn por uzi subtenatan protokolon, aŭ petu vian administranton por aldoni subtenon de la elektita protokolo per agordado de: %s',
      '%s Help' => 'Helpo pri %s',
      'Keyboard Shortcuts' => 'Fulmoklavoj',
    );
  }

}
