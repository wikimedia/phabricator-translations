<?php

final class PhabricatorConpherenceEs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es';
  }

  protected function getTranslations() {
    return array(
      '%s edited participant(s), added %d: %s; removed %d: %s.' => '%s editó la lista de participantes, añadidos %s: %s; retirados %s: %s.',
      'Show Newer Messages' => 'Mostrar mensajes nuevos',
      'Room name.' => 'Nombre de la sala.',
      'Leave Room' => 'Dejar sala',
      'Initial Participants' => 'Participantes iniciales',
      'You must choose a file when uploading a new room picture.' => 'Debes escoger un archivo cuando cargas una nueva imagen para la sala.',
      '%s set the room topic to %s.' => '%s modificó el asunto de la sala a %s.',
      'All Rooms' => 'Todas las salas',
      'Room Picture' => 'Imagen de la sala',
      'You must specify participant phids.' => 'Debes especificar los «phids» de los participantes.',
      'Edit Room: %s' => 'Editar sala: %s',
      'Remove %s from this room?' => '¿Eliminar a %s de esta sala?',
      'New Message' => 'Nuevo mensaje',
      '%s renamed this room from %s to %s.' => '%s cambió el nombre de esta sala de %s a %s.',
      'Conpherence Threads' => 'Hilos de Conpherence',
      'Log In to Participate' => 'Inicia sesión para participar',
      'Create a Room' => 'Crear una sala',
      'Room Preferences' => 'Preferencias de la sala',
      '%s left the room.' => '%s salió de la sala.',
      'Chat with Others' => 'Chatear con otros',
      'Room does not exist or logged in user can not see it.' => 'La sala no existe o el usuario no puede verla.',
      'Joined Rooms' => 'Salas a las que me he unido',
      'Room Participants' => 'Participantes de la sala',
      'Find Rooms' => 'Encontrar salas',
      'Room Contains Words' => 'La sala contiene las palabras',
      'Rooms' => 'Salas',
      'Edit Room' => 'Editar sala',
      'No topic set' => 'No se ha establecido ningún asunto',
      'Add Participants' => 'Añadir participantes',
      'Rooms must have a title.' => 'Las salas deben tener un título.',
      'Send a message...' => 'Enviar un mensaje...',
      'Room participants.' => 'Participantes en la sala.',
      'That was a non-update. Try cancel.' => 'Eso no fue una actualización. Prueba con cancelar.',
      'New Room participants.' => 'Nuevos participantes de la sala.',
      'Participants (%d)' => 'Participantes (%s)',
      'Type a room title...' => 'Escribe un nombre de sala...',
      '%s set the room topic to %s in %s.' => '%s ajustó el asunto de la sala de %s e %s.',
      '%s created this room.' => '%s creó esta sala.',
      'EMAIL PREFERENCES FOR THIS ROOM' => 'PREFERENCIAS DE CORREO ELECTRÓNICO PARA ESTA SALA',
      'Search Rooms' => 'Buscar salas',
      'Show Older Messages' => 'Mostrar mensajes más antiguos',
      'Update an existing conpherence room.' => 'Actualizar una sala de conpherence ya existente.',
      'Room topic.' => 'Asunto de la sala.',
      'No recent messages' => 'Ningún mensaje reciente',
      '%s sent you a message.' => '%s te envió un mensaje.',
      'Messages: %d' => 'Mensajes: %s',
      'You are the last member, so you will never be able to rejoin the room.' => 'Eres el último miembro, por lo que no podrás volver a unirte a esta sala.',
      'Participant PHID "%s" is not a valid user PHID.' => 'El PHID "%s" no es un PHID de usuario válido.',
      'Log in to join this room and participate.' => 'Inicia sesión para unirte a esta sala y participar.',
      'Create Room' => 'Crear sala',
      'They will be able to rejoin the room later.' => 'Serán capaces de entrar en la sala de nuevo.',
      'Create New Room' => 'Crear nueva sala',
      'Hide Window' => 'Ocultar ventana',
      'The topic can be no longer than %s characters.' => 'El asunto no puede tener más de %s caracteres.',
      '%s updated the room image.' => '%s actualizó la imagen de la sala.',
      'You must specify a title.' => 'Debes especificar un título.',
    );
  }

}
