<?php

final class PhabricatorNotificationDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'A sɛva ŋa konfigie la na toŋ ne teɛre ma Siva, kyɛ o ba tõɔ na kɔneɛt o. Aseŋ ka fo leɛmaale a yelwonaa ŋa bee ŋmaa a teɛre ma sɛva. Ana soma la ka foŋ la maale kaa a fo konfigiriseŋ bee leɛ piili a sɛva ne a tannoo naŋ be a puli kyɛ.
    %s',
      'This server is configured to use a notification server, but is not able to connect to it.' => 'A sɛva ŋa konfigie la na toŋ ne teɛre ma sɛva, kyɛ ba tõɔ na koneɛt o.',
    );
  }

}
