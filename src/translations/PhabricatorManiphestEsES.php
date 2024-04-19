<?php

final class PhabricatorManiphestEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Crear tarea',
      'Triage' => 'Triaje',
      'Priority of the task.' => 'Prioridad de la tarea.',
      'Assignee' => 'Asignada a',
      'Update an existing Maniphest task.' => 'Actualizar una tarea existente en Maniphest.',
      'List of columns to move the task to.' => 'Lista de columnas a las que mover la tarea.',
      'A task\'s subscribers change.' => 'Un suscriptor de la tarea cambia.',
      'Change Points' => 'Cambiar puntos',
      'Returns information about the possible statuses for Maniphest tasks.' => 'Devuelve información sobre los posibles estados para las tareas en Maniphest',
      '%s closed %s as %s.' => '%s cerró %s como %s.',
      'This task has been locked.' => 'Esta tarea ha sido bloqueada.',
      'TASK DETAIL' => 'DETALLES DE LA TAREA',
      'Search Subtasks' => 'Buscar subtareas',
      'Merged' => 'Fusionada',
      'Closed after %s' => 'Cerrada tras %s',
      'Changed Task Priority' => 'Cambiar la prioridad de la tarea',
      'New task name.' => 'Nombre de la tarea nueva.',
      'Tasks must have a title.' => 'Las tareas deben tener un título.',
      'Unblock' => 'Desbloquear',
      'Description Preview' => 'Previsualización de la descripción',
      '%s changed the subtype of %s from "%s" to "%s".' => '%s cambió el subtipo de %s de "%s" a "%s".',
      'Subtasks' => 'Subtareas',
      'Update has no effect.' => 'La actualización no surte ningún efecto.',
      'Needs Triage' => 'Necesita triaje',
      'Mentioned In' => 'Mencionada en',
      'Recently Closed' => 'Cerrada recientemente',
      'Unbreak Now!' => '¡Arreglar ahora!',
      'Validate "%s"' => 'Validar «%s»',
      'Open Subtasks' => 'Subtareas abiertas',
      'Assign a task to a specific user.' => 'Asignar una tarea a un usuario concreto.',
      'Edit Related Tasks...' => 'Editar tareas relacionadas...',
      'A task\'s owner changes.' => 'El dueño de una tarea cambia.',
      '%s created subtask %s.' => '%s creó la subtarea %s.',
      'Finished' => 'Finalizada',
      'Estimated number of hours this will take.' => 'Número estimado de horas que esto tomará.',
      'Assigned task to: %s.' => 'Tarea asignada a: %s.',
      'List of subtask PHIDs.' => 'Lista de PHIDs de las subtareas.',
      'Default view policy for newly created tasks.' => 'Normativa de visibilidad predeterminada para proyectos recién creados.',
      'New task description.' => 'Nueva descripción de la tarea.',
      'Subtask' => 'Subtarea',
      'Filter By Project' => 'Filtrar por proyecto',
      'Edit Subtasks' => 'Editar subtareas',
      '%s assigned this task to %s.' => '%s asignó esta tarea a %s.',
      'Assign task to me' => 'Asignar tarea a mí mismo',
      'Epoch timestamp when the task was closed.' => 'Cronomarcador de época de cuando se cerró la tarea.',
      'task author' => 'autor de la tarea',
      'Search...' => 'Buscar…',
      'Task Graph' => 'Gráfico de la tarea',
      'Task Author' => 'Autor de la tarea',
      '(No Project)' => '(Ningún proyecto)',
      'Priorities' => 'Prioridades',
      'Task Priority' => 'Prioridad de tarea',
      'Edit Task' => 'Editar tarea',
      'Default edit policy for newly created tasks.' => 'Normativa de edición predeterminada para tareas recién creadas.',
      'Change the priority of a task.' => 'Cambiar la prioridad de una tarea.',
      'High' => 'Alta',
      'Unbreak!' => '¡Arreglar ahora!',
      'By Project' => 'Por proyecto',
      '%s triaged %s as %s priority.' => '%s clasificó la tarea %s con una prioridad %s.',
      'Change priority to: %s.' => 'Cambiar prioridad a: %s',
      'A task\'s associated projects change.' => 'Los proyectos asociados a una tarea cambian.',
      'Changed Project Column' => 'Columna de proyecto modificada',
    );
  }

}
