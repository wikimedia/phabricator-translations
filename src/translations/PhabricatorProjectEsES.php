<?php

final class PhabricatorProjectEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Really activate project?' => '¿Realmente activar el proyecto?',
      '%s changed project member(s), added %d: %s; removed %d: %s.' => '%s modificó la lista de miembros del proyecto, añadió a %s: %s; retiró a %s: %s.',
      '%s set this project\'s color to %s.' => '%s modificó el color de este proyecto a %s',
      '%s created this column.' => '%s creó esta columna.',
      'Project Column' => 'Columna del proyecto',
      'Edit Background Color' => 'Cambiar el color de fondo',
      'New project tag color.' => 'Nuevo color de la etiqueta del proyecto.',
      'Find results in any of a user\'s projects.' => 'Buscar resultados en cualquiera de los proyectos de un usuario.',
      'Lock Project' => 'Bloquear proyecto',
      'Intensity' => 'Intensidad',
      'The name of the project.' => 'El nombre del proyecto.',
      'Type a project name or function...' => 'Escriba un nombre de proyecto o función...',
      'Add projects' => 'Añadir proyectos',
      'Archive Project' => 'Archivar proyecto',
      'Default view policy for newly created projects.' => 'Normativa de visibilidad predeterminada para proyectos recién creados.',
      'When mail is sent to members of this project, you will receive a copy.' => 'Cuando se envíe el correo a los miembros de este proyecto, usted recibirá una copia.',
      'Project Members' => 'Miembros del proyecto',
      '%s of %s %s' => '%s de %s %s',
      '%s removed this project\'s image.' => '%s eliminó la imagen de este proyecto.',
      'You can not change members of a project with subprojects directly. Members of any subproject are automatically members of the parent project.' => 'No puedes modificar los miembros de un proyecto con subproyectos directamente. Los miembros de cualquier subproyecto son automáticamente miembros del proyecto principal.',
      'Unwatch Project?' => '¿Dejar de vigilar el proyecto?',
      'Convert Project' => 'Convertir proyecto',
      'Manage Workboard' => 'Gestionar el tablón de tareas',
      'Projects, Tags, and Teams' => 'Proyectos, etiquetas y equipos',
      '%s updated the image for %s from %s to %s.' => '%s actualizó la imagen de %s de %s a %s.',
      'Activate Subproject' => 'Activar subproyecto',
      '(Hidden)' => '(oculto)',
      'If you lock this project, members will be prevented from leaving it.' => 'Si bloqueas este proyecto sus miembros no podrán dejarlo.',
      'Create Subproject' => 'Crear subproyecto',
      'Configure Projects.' => 'Configurar proyectos.',
      'Show All Projects' => 'Mostrar todos los proyectos',
      'Enable Project Mail' => 'Activar correos electrónicos del proyecto',
      'Remove members.' => 'Retirar miembros.',
      'Project Subprojects' => 'Subproyectos del proyecto',
      'Unknown project status \'%s\'!' => '\'%s\' es un estado desconocido para el proyecto',
      'Leave Project' => 'Dejar proyecto',
      'Disable Workboard' => 'Deshabilitar el tablero de tareas',
      'Not In: %s' => 'No en: %s',
      'Watch Project?' => '¿Vigilar el proyecto?',
      'Joinable By' => 'Pueden unirse',
      'Hide Column' => 'Ocultar columna',
      'Initial Members' => 'Miembros iniciales',
      'Type a user or project name...' => 'Escribe un nombre de usuario o un nombre de proyecto...',
      'Project icon.' => 'Icono del proyecto.',
      'Project Picture' => 'Imagen del proyecto',
      'Unlock Project' => 'Desbloquear proyecto',
      'Umbrella' => 'Paraguas',
      'Subprojects' => 'Subproyectos',
      'Information about the project color.' => 'Información acerca de los colores de los proyectos.',
      'Unsupported Project' => 'Proyecto sin servicio técnico',
      'Archive Subproject' => 'Archivar subproyecto',
      'Whether this is the default column.' => 'Si esta es la columna predeterminada.',
    );
  }

}
