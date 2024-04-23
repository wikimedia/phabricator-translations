<?php

final class PhabricatorAphlictIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Invia una notifica a un utente.',
      'User to notify.' => 'Utente da notificare.',
      'Message to send.' => 'Messaggio da inviare.',
    );
  }

}
