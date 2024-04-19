<?php

final class PhabricatorTransactionsEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Bloquear/ocultar campos',
      'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => 'En la llamada a "transaction.search", el objeto seleccionado (de tipo "%s") no implementa "%s", entonces las transacciones no se pudieron cargar para ello.',
      '%s added a comment.' => '%s añadió un comentario.',
      'No object exists with PHID "%s".' => 'No existe ningún objeto con el PHID «%s».',
      'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier"' => 'Llamadas a "transaction.search" deben especificar un "objectType" o un "objectIdentifier"',
      'In %s, %s wrote:' => 'El %s, %s escribió:',
      '%s marked %s inline comment(s) as done.' => '%s marcó %s comentarios en línea como realizados.',
      'Optional instructions, shown above the form.' => 'Instrucciones opcionales, mostradas encima del formulario.',
      'Form Disabled' => 'Formulario desactivado',
      '🔒 Locked' => '🔒 Bloqueado',
      'Read transactions and comments for a particular object or an entire object type.' => 'Leer transacciones y comentarios para un objeto particular o para todo un tipo de objeto.',
      'Drag and drop fields to reorder them.' => 'Arrastra y coloca los campos para cambiar su orden.',
      'Not an Edit Form' => 'No es un formulario editable',
      'Save Defaults' => 'Guardar valores predeterminados',
      'Disable this form? Users will no longer be able to use it.' => '¿Quieres desactivar este formulario? Los usuarios ya no podrán utilizarlo.',
      'Really remove this comment?' => '¿De verdad quieres quitar este comentario?',
      'Mention' => 'Mención',
      'Calls to "transaction.search" must not specify both an "objectType" and an "objectIdentifier".' => 'Llamadas a "transaction.search" no deben especificar ambo un "objectType" y un "objectIdentifier".',
      'Edit Defaults' => 'Editar valores predeterminados',
      'Form name is required.' => 'Se requiere el nombre del formulario.',
      '%s edited this object (transaction type "%s").' => '%s modificó este objeto (tipo de transacción «%s»).',
      '%s disabled this form.' => '%s desactivó este formulario.',
      'In call to "transaction.search", specified "objectIdentifier" ("%s") does not exist.' => 'En la llamada a "transaction.search", el especificado "objectIdentifier" ("%s") no existe.',
      'Edit Form' => 'Editar formulario',
      '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s editó los contribuidores de %s. Añadió %s: %s; quitó %s: %s.',
      'Untitled Form' => 'Formulario sin título',
      'List of PHIDs to set.' => 'Lista de PHID que establecer.',
      'List of PHIDs to remove.' => 'Lista de PHID que eliminar.',
      'Apply remaining actions?' => '¿Quieres aplicar las acciones restantes?',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s editó suscriptor(es), añadió %s: %s, eliminó %s: %s',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'El parámetro «%s» debe contener una lista de descripciones de transacciones, pero el elemento con la clave «%s» no es un diccionario.',
      'Edit Comment' => 'Editar comentario',
      'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'El subtipo «%s» no es válido: las claves de subtipo solo pueden contener letras latinas en minúscula (de la «a» a la «z»).',
      'Task has no object PHID!' => 'La tarea no tiene PHID de objeto.',
      'In call to "transaction.search", specified "objectType" ("%s") is unknown. Valid object types are: %s.' => 'En la llamada a "transaction.search", el especificado "objectType" ("%s") es desconocido. Tipos de objetos válidos son: %s',
      '%s Action(s) Have No Effect' => '%s acción(es) no tuvieron efecto',
      'Capability not supported!' => 'No se admite esta funcionalidad.',
      '%s changed the visibility from "%s" to "%s".' => '%s modificó la visibilidad de «%s» a «%s».',
    );
  }

}
