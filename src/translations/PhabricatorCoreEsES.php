<?php

final class PhabricatorCoreEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Question' => 'Pregunta',
      'No repository "%s" exists!' => 'No existe el repositorio «%s».',
      '%s edited %s.' => '%s editó %s.',
      'Move Document' => 'Mover documento',
      'Maximum must be larger than minimum.' => 'El máximo tiene que ser más grande que mínimo.',
      'User "%s" is not a valid user.' => 'El usuario "%s" no es válido.',
      'Authored' => 'Creado por',
      'Creators' => 'Creadores',
      'Minus' => 'Menos',
      'OPTIMIZE' => 'OPTIMIZAR',
      'Raised Concern' => 'Preocupación comunicada',
      'Create Document' => 'Crear documento',
      'The repository base URI, excluding the "Short Name"' => 'La URI del repositorio base, excluyendo el "nombre corto"',
      'Commented On' => 'Comentó en',
      '%s added %s task(s): %s.' => '%s añadió %s tarea(s): %s.',
      'Unsupported action "%s".' => 'Acción «%s» no admitida.',
      'Reopened' => 'Reabierto',
      'Untitled Document' => 'Documento sin título',
      'Executed %s task(s).' => 'Tarea(s) %s ejecutada(s).',
      'MFA Authenticated' => 'Autenticado con MFA',
      'Browse Documents' => 'Examinar documentos',
      'Favorites' => 'Favoritos',
      'italic text' => 'texto en cursiva',
      'Custom' => 'Personalizado',
      '%s (Preview)' => '%s (previsualización)',
      'Tasks' => 'Tareas',
      'Repository URI' => 'URI del repositorio',
      'Inactive' => 'Inactivo',
      'View Email Body' => 'Ver cuerpo del email',
      'Email Addresses' => 'Direcciones de correo electrónico',
      'Restoring "%s" to the default retention policy.' => 'Restaurando «%s» a la directiva de retención predeterminada.',
      'Orange' => 'Naranja',
      'Failed' => 'Falló',
      'Upload Picture' => 'Cargar imagen',
      'Packages' => 'Paquetes',
      'Assigned to Me' => 'Asignado a mí',
      'Author: %s' => 'Autor: %s',
      'Revoke' => 'Revocar',
      'No task exists with id "%s"!' => 'No existe ninguna tarea con el identificador «%s».',
      'Administrators' => 'Administradores',
      'Normalization of \'%s\'' => 'Normalización de «%s»',
      'Example' => 'Ejemplo',
      '%s confirmed this job.' => '%s confirmó este trabajo.',
      'Previous Day' => 'Día anterior',
      'MODIFIED' => 'MODIFICADO',
      '(Use Default)' => '(Utilizar predeterminado)',
      'Main Request' => 'Solicitud principal',
      'Unknown Error' => 'Error desconocido',
      '%s added %s task(s) to %s: %s.' => '%s añadió %s tarea(s) a %s: %s.',
      'Current Tasks' => 'Tareas actuales',
      'Summary' => 'Resumen',
      'Current Application' => 'Aplicación actual',
      'Duration' => 'Duración',
      'Meme' => 'Meme',
      '(%s -> %s @ %s) %s' => '(%s → %s @ %s) %s',
      'Comma-Separated Values (.csv)' => 'Valores separados por comas (.csv)',
      'Paths' => 'Rutas',
      'OLD MySQL VERSION' => 'VERSIÓN ANTIGUA DE MySQL',
      'Custom Fields' => 'Campos personalizados',
      'Comment' => 'Comentario',
      'Create a Task' => 'Crear una tarea',
      'Failure' => 'Fallo',
      'Malformed header.' => 'Cabecera con formato incorrecto.',
      'Group' => 'Grupo',
      'Other Project...' => 'Otro proyecto…',
      'Utilities' => 'Utilidades',
      'Tomorrow' => 'Mañana',
      'Variable' => 'Variable',
      'Bold' => 'Negrita',
      'Analyzing tables...' => 'Analizando tablas…',
      'Active Repositories' => 'Repositorios activos',
      'Expiration' => 'Caducidad',
      'Grey' => 'Gris',
      'Color' => 'Color',
      'Order' => 'Orden',
      'Protocol' => 'Protocolo',
      'Administrator' => 'Administrador',
      'Complete' => 'Completado',
      'Open Status' => 'Estado abierto',
      'Visible' => 'Visible',
      'Exception' => 'Excepción',
      'Enable' => 'Activar',
      'Active Revisions' => 'Revisiones activas',
      'Up' => 'Subir',
      'Direct Subtask' => 'Subtarea directa',
      '(Show All)' => '(Mostrar todo)',
      'EXTRACT' => 'EXTRAER',
      'Drafts' => 'Borradores',
      'Wed' => 'Mié',
      'Draft' => 'Borrador',
      'Repository Identity' => 'Identidad del repositorio',
      'Today' => 'Hoy',
      'Current Viewer' => 'Vista actual',
      '%s %s' => '%s %s',
      'Bug' => 'Error',
      'No notifications.' => 'Ninguna notificación.',
      'This linter is intended for use with the Javelin JS library and extensions. Use `%s` to run Javelin rules on Javascript source files.' => 'Este optimizador está pensado para utilizarse con la biblioteca de JS Javelin y sus extensiones. Utiliza «%s» para ejecutar reglas de Javelin en los archivos de código en JavaScript.',
      'Object' => 'Objeto',
      'File' => 'Archivo',
      'Note' => 'Nota',
      'Submit' => 'Enviar',
      'Continue' => 'Continuar',
      'Callsign' => 'Identificador',
      'All Documents' => 'Todos los documentos',
      'Quote' => 'Citar',
      'Repository' => 'Repositorio',
      'Empty' => 'Vacío',
      'Any' => 'Cualquiera',
      'Service' => 'Servicio',
      'Waiting' => 'Esperando',
      '%s' => '%s',
      'In Use' => 'En uso',
      'Welcome to %s' => 'Te damos la bienvenida a %s',
      '· · ·' => '· · ·',
      'Allow' => 'Permitir',
      'Broken' => 'Roto',
      'Browse Packages' => 'Explora paquetes',
      'Executing %s...' => 'Ejecutando %s...',
      'From' => 'De',
      'Edit Package' => 'Editar paquete',
      'Reset Password' => 'Restablecer contraseña',
      'Changing connection while locked is forbidden.' => 'Cambiando conexión mientras cerrado está prohibido.',
      'Personal' => 'Personal',
      'NO TASKS' => 'NINGUNA TAREA',
      'Epoch timestamp when the object was created.' => 'Cronomarcador de época de cuando se creó el objeto.',
      'Class' => 'Clase',
      'Tuesday' => 'Martes',
      'SKIP' => 'SALTA',
      '%s, %s' => '%s, %s',
      'Amount' => 'Importe',
      'Normal' => 'Normal',
      '%s was reprioritized (from "%d" to "%d").' => '%s fue repriorizado (del "%s" al "%s).',
      'UNARCHIVING' => 'DESARCHIVANDO',
      'Owners' => 'Propietarios',
      'Current' => 'Actual',
      'Closed, Resolved' => 'Cerrado, Resuelto',
      'Image' => 'Imagen',
      'Path' => 'Ruta',
      'Stopped' => 'Parado',
      'Edit' => 'Editar',
      'Invited' => 'Invitado',
      'Yes' => 'Sí',
      'Projects' => 'Proyectos',
      'Database Not Initialized' => 'No se inicializó la base de datos',
      'Pink' => 'Rosa',
      'GitHub' => 'GitHub',
      'Invalid' => 'No válido',
      'Read/Write' => 'Leer/Escribir',
      'CANCELLED' => 'CANCELADO',
      'Fullscreen Mode' => 'Modo de pantalla completa',
      'Wednesday' => 'Miércoles',
      'Subscriptions' => 'Suscripciones',
      'Updated %s' => 'Actualizado %s',
      'Users' => 'Usuarios',
      'Git' => 'Git',
      'Public Key' => 'Clave pública',
      'Design' => 'Diseño',
      'DOCUMENT DETAIL' => 'DETALLE DEL DOCUMENTO',
      'TOTAL' => 'TOTAL',
      'PRIORITY' => 'PRIORIDAD',
      'Global' => 'Global',
      'Seconds' => 'Segundos',
      'Author' => 'Autor',
      'Exact Names' => 'Nombres exactos',
      'Accepted' => 'Aceptado',
      'Target' => 'Destino',
      'Good' => 'Bueno',
      'Analysis' => 'Análisis',
      'This query is constrained by a project you do not have permission to see.' => 'Esta consulta está restringida por un proyecto que no tiene permiso para ver.',
      'New' => 'Nuevo',
      'Change' => 'Cambiar',
      'Column' => 'Columna',
      'Partial' => 'Parcial',
      'Documents' => 'Documentos',
      'Message' => 'Mensaje',
      'Queued' => 'En espera',
      'All' => 'Todos',
      'Aliases' => 'Alias',
      'EXECUTE' => 'EJECUTAR',
      'You must choose a project.' => 'Debes seleccionar un proyecto.',
      'Welcome to %s!' => '¡Te damos la bienvenida a Phabricator!',
      '%s was delayed until "%s".' => '%s fue demorado hasta "%s".',
      'Select all active tasks.' => 'Seleccionar todas las tareas activas.',
      'No tasks selected to delay.' => 'Ningúna tarea seleccionada para demorar.',
      'project' => 'proyecto',
      'List of project hashtags, as array.' => 'Lista de hashtags del proyecto, como array.',
      '%s has invited you to join %s.' => '%s te ha invitado a que te unas a Phabricator.',
      'No Projects' => 'No hay proyectos',
      'Find Project:' => 'Buscar proyecto:',
      'Cancelled %s task(s).' => '%s tarea(s) cancelada(s).',
      'Create a Project' => 'Crear un proyecto',
      'The \'%s\' binary in the Javelin project is not available in %s, so the Javelin linter can\'t run. This isn\'t a big concern, but means some Javelin problems can\'t be automatically detected.' => 'El binario «%s» del proyecto Javelin no está disponible en %s, por lo que no se puede ejecutar el optimizador de Javelin. Esto no constituye un problema importante, pero implica que no se podrán detectar automáticamente algunos problemas de Javelin.',
      'Comma-separated list of project hashtags.' => 'Lista de hashtags de proyectos separados por comas.',
      'Javelin Linter' => 'Optimizador Javelin',
      'Disabled' => 'Desactivado',
      'Project' => 'Proyecto',
    );
  }

}
