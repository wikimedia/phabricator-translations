<?php

final class PhabricatorNotificationEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Sin leer',
      'All Notifications' => 'Todas las notificaciones',
      'Unable to Connect to Notification Server' => 'No se pudo establecer una conexión con el servidor de notificaciones',
      'You have no unread notifications.' => 'No tienes notificaciones sin leer.',
      'Connecting...' => 'Conectando…',
      'Mark All Read' => 'Marcar todas como leídas',
      'Show only unread notifications.' => 'Mostrar solo las notificaciones no leídas.',
      'You have no notifications.' => 'No tienes ninguna notificación.',
    );
  }

}
