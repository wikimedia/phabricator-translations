<?php

final class PhabricatorSubscriptionsEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => 'suscriptores',
      'Remove me as a subscriber' => 'Cancelar mi suscripción',
      'Remove subscribers.' => 'Quitar suscriptores.',
      'Set subscribers, overwriting current value.' => 'Establecer suscriptores sobrescribiendo el valor actual.',
      'Support for Subscriptions' => 'Compatibilidad con suscripciones',
      'Automatically Subscribed' => 'Suscrito automáticamente',
      '%d other(s)' => '%s más',
      'You are automatically subscribed to this object.' => 'Se te ha suscrito automáticamente a este objeto.',
      'Add subscribers' => 'Añadir suscriptores',
      'Remove yourself as a subscriber.' => 'Cancelar tu suscripción.',
      'Search for objects with certain subscribers.' => 'Buscar objetos con ciertos suscriptores.',
      'Subscribers can take this action.' => 'Los suscriptores pueden realizar esta acción.',
      'Remove subscribers' => 'Quitar suscriptores',
      'All %d subscribers removed by %s' => '%2$s quitó los %1$s suscriptores',
      'Added Subscribers' => 'Suscriptores añadidos',
      'Removed %s subscriber(s): %s.' => 'Se quitaron %s suscriptores: %s',
      'Unsubscribe' => 'Cancelar suscripción',
      'Bad Object' => 'Objeto incorrecto',
      'Add subscribers.' => 'Añadir suscriptores.',
      'Get information about subscribers.' => 'Obtener información sobre los suscriptores.',
    );
  }

}
