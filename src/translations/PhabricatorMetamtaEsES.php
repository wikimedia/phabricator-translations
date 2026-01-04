<?php

final class PhabricatorMetamtaEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Type a username, project, mailing list, package, or function...' => 'Escriba un nombre de usuario, proyecto, lista de correo, paquete o función...',
      'Type a username, mailing list, or function...' => 'Escriba un nombre de usuario, lista de correo o función...',
      'This recipient is the user whose actions caused delivery of this message, but they have set preferences so they do not receive mail about their own actions (Settings > Email Preferences > Self Actions).' => 'Este destinatario es el usuario cuyas acciones provocaron la entrega de este mensaje, pero ha establecido preferencias para no recibir correos sobre sus propias acciones (Configuración > Preferencias de correo electrónico > Acciones propias).',
      'Type a user, project, package, or mailing list name...' => 'Escriba un nombre de usuario, proyecto, paquete o lista de correo...',
    );
  }

}
