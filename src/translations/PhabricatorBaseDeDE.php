<?php

final class PhabricatorBaseDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Can Configure Application' => 'Kann Programm konfigurieren',
      'Can Use Application' => 'Kann Program benutzen',
      'Public + configured' => 'Öffentlich + konfiguriert',
      'Email Verification Required' => 'E-Mail-Verifizierung erforderlich',
      'Developer Tools' => 'Entwicklerwerkzeuge',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Die Anfrage enthält den eingeschränkten Parameter "%s", jedoch steht dieser Controller ("%s") nicht auf der Whitelist. Die Anfrage wird nicht bearbeitet, weil sie Teil eines Umleitungsangriffs sein könnte.',
    );
  }

}
