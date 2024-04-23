<?php

final class PhabricatorHeraldEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'Se requiere un nombre de objeto.',
      '(Invalid List)' => '(Lista no válida)',
      'Applies To' => 'Se aplica a',
      '%s edited this rule.' => '%s editó esta regla.',
      'Rule failed because an exception occurred while evaluating it.' => 'La regla falló debido a que una excepción ocurrió mientras se evaluaba.',
      'Unknown reason ("%s").' => 'Motivo desconocido («%s»).',
      'Unknown view key "%s".' => 'Llave de vista desconocida "%s".',
      'Herald rule "%s" does not have an evaluation result.' => 'Regla de Heraldo "%s" no tiene un resultado de evaluación.',
      'Unknown Field: "%s"' => 'Campo desconocido: «%s»',
      '<Unknown Action "%s">' => '<Acción desconocida «%s»>',
      'Action: %s' => 'Acción: %s',
      'Global Rule' => 'Regla global',
      'Do nothing.' => 'No hacer nada.',
      'Conditions' => 'Condiciones',
      'Rule could not be processed because it was created with a newer version of Herald.' => 'La regla no pudo ser procesada debido a que fue creada con una nueva versión de Heraldo.',
      'Invalid Condition' => 'Condición invalida',
      'Unknown rule type "%s"!' => 'Se desconoce el tipo de regla «%s».',
      'Save Rule' => 'Guardar regla',
      '%s disabled this rule.' => '%s desactivó esta regla.',
      'A personal rule can only be edited by its owner.' => 'Solo los propietarios de las reglas personales pueden editarlas.',
      'Related Fields' => 'Campos relacionados',
      'Rule failed automatically because it is a personal rule and its owner is invalid or disabled.' => 'La regla falló automáticamente debido a que es una regla personal y su dueño es inválido o ha sido desactivado.',
      'New Action' => 'Acción nueva',
      'Did nothing.' => 'No se hizo nada.',
      'An unknown error occurred while evaluating this condition. No additional information is available.' => 'Un error desconocido ocurrió mientras se evaluaba esta condición. Información adicional no disponible.',
      'Unknown Action ("%s")' => 'Acción desconocida («%s»)',
      'No rules found.' => 'No se encontró ninguna regla.',
      'Create Rule' => 'Crear regla',
      'Edit Rule' => 'Editar regla',
      'Comment content' => 'Contenido del comentario',
      'Rule Owner' => 'Dueño de regla',
      'Already Applied' => 'Ya Aplicado',
      'Unknown condition "%s"!' => 'Se desconoce la condición «%s».',
      'Rule Type' => 'Tipo de regla',
      'Result code "%s" is unknown.' => 'Código de resultado "%s" es desconocido.',
      'Rule failed because an exception occurred.' => 'La regla fallo debido a una excepción ocurrida.',
      'Herald rule "%s" already has an evaluation result.' => 'Regla de Heraldo "%s" ya tiene un resultado de evaluación.',
      'Rule failed automatically because it is a personal rule and its owner does not have permission to view the object.' => 'La regla falló automáticamente debido a que es una regla personal y su dueño no tiene permiso para ver el objeto.',
    );
  }

}
