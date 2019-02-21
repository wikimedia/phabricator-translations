<?php

final class PhabricatorAphlictDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Failed to %s!' => '%s mislykkedes!',
      'Aphlict is not running.' => 'Aphlict kører ikke.',
      'You must %s first!' => 'Du skal først gøre %s!',
      'Sending %s a SIGKILL.' => 'Sender et SIGKILL til %s.',
      'Launching server:' => 'Igangsætter server:',
      'Starting Aphlict server in foreground...' => 'Starter Aphlict server i forgrunden...',
      'Server exited!' => 'Serveren afsluttedes!',
      'Writing logs to: %s' => 'Skriver logs til: %s',
      'Reading configuration from: %s' => 'Læser konfigurationen fra: %s',
      'Aphlict Server started.' => 'Aphlict server startede.',
      'Aphlict (%s) is running.' => 'Aphlict (%s) kører.',
    );
  }

}
