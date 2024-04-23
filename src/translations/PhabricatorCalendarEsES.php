<?php

final class PhabricatorCalendarEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'No se encontró ningún evento.',
      'New event icon.' => 'Icono de evento nuevo.',
      'Change the event icon.' => 'Cambiar el icono de evento.',
      'Read information about events.' => 'Leer información sobre eventos.',
      'Drag and drop .ics files to upload them and import them into Calendar.' => 'Arrastra y coloca archivos .ics para cargarlos e importarlos en el calendario.',
      'Configure Calendar Event Forms' => 'Configurar formularios de eventos de calendario',
      'You can not attach an ICS file to an import type other than an ICS import (type is "%s").' => 'No puedes adjuntar un archivo ICS a un tipo de importación distinto de ICS (el tipo es «%s»).',
      'Import Disabled' => 'Importación desactivada',
      'File PHID "%s" is not valid or not visible.' => 'El PHID del archivo «%s» no es válido o no es visible.',
      'Calendar Import' => 'Importación de calendario',
      'Meal' => 'Comida',
      'ICS File' => 'Archivo ICS',
      'Event Host' => 'Anfitrión del evento',
      'Unable to Disable' => 'No se puede desactivar',
      'Exports' => 'Exportaciones',
      'Query to execute.' => 'Consulta que ejecutar.',
      'Movie' => 'Película',
      'Official Business' => 'Asuntos oficiales',
      'Edit This And All Later Events' => 'Editar este evento y los posteriores',
      'Start time of the event.' => 'Hora de inicio del evento.',
      'Event icon.' => 'Icono del evento.',
      'Too Frequent' => 'Demasiado frecuente',
      'Cancel this event?' => '¿Quieres cancelar este evento?',
      'Uses Import Policy' => 'Utiliza la directiva de importación',
      'Weekly' => 'Semanalmente',
      'Export private data.' => 'Exportar datos privados.',
      'Meeting' => 'Reunión',
      'Upcoming Events' => 'Eventos venideros',
      'Adjust export mode.' => 'Ajustar el modo de exportación.',
      'Imported Events' => 'Eventos importados',
      'Set the automatic update frequency.' => 'Establecer la frecuencia de actualización automática.',
      'Cancel This And All Later Events' => 'Cancelar este evento y los posteriores',
      '.ics URI' => 'URI de .ics',
      'Travel' => 'Viaje',
      'Calendar Import Logs' => 'Registros de importación de calendario',
      'Imported By' => 'Importado por',
      'Export Query as .ics' => 'Exportar consulta como .ics',
      'This export has an invalid mode ("%s").' => 'Esta exportación posee un modo no válido («%s»).',
      'Disable Export' => 'Desactivar exportación',
      'The host of an event can always view and edit it.' => 'El anfitrión de un evento siempre puede verlo y editarlo.',
      'Cancel the event.' => 'Cancelar el evento.',
      'Edit Event' => 'Editar evento',
      'Host of the event.' => 'Anfitrión del evento.',
      'Create Export' => 'Crear exportación',
      'Mode "%s" is not a valid policy mode. Valid modes are: %s.' => '«%s» no es un modo de directiva válido. Los modos válidos son: %s.',
      'Edit Export' => 'Editar exportación',
      'No Automatic Updates' => 'Sin actualizaciones automáticas',
      '%s declined %s.' => '%s rechazó %s.',
      'Staycation' => 'Vacaciones en casa',
      'Reload Events' => 'Recargar eventos',
      'Guide: Exporting Events' => 'Guía: exportación de eventos',
      'The host of this event can take this action.' => 'El anfitrión de este evento puede realizar esta acción.',
      '%s changed the host of this event from %s to %s.' => '%s cambió el anfitrión de este evento de %s a %s.',
      'The event description.' => 'La descripción del evento.',
      'Event Fields' => 'Campos del evento',
      'New export mode.' => 'Modo de exportación nuevo.',
      'Warning ("%s") while parsing ICS data (near line %s): %s' => 'Alerta («%s») al analizar los datos del ICS (junto al renglón %s): %s',
      'Description of the event.' => 'Descripción del evento.',
      'Started background processing.' => 'Comenzó el procesamiento en segundo plano.',
      'New Import' => 'Importación nueva',
      'Type a user or project name, or function...' => 'Escriba un nombre de usuario o de proyecto, o una función...',
    );
  }

}
