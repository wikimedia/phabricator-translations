<?php

final class PhabricatorSearchEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'No hay ningún resultado.',
      'This menu item is very important, and can not be disabled.' => 'Este elemento del menú es muy importante y no se puede desactivar.',
      'Enable Query?' => '¿Quieres activar la consulta?',
      'cat -A can find mice hiding in files.' => 'La orden «cat -A» puede encontrar ratones escondidos en los archivos.',
      'N/A' => 'N/D',
      'Failed to load custom PHID "%s"!' => 'Falló la carga del PHID personalizado «%s».',
      'INDEXING' => 'INDEXANDO',
      'Query: %s' => 'Consulta: %s',
      'Queries' => 'Consultas',
      'No services need initialization.' => 'Ningún servicio necesita inicializarse.',
      'The first cats evolved on the savannah about 8,000 years ago.' => 'Los primeros gatos evolucionaron en la sabana hace 8000 años aproximadamente.',
      'Not all cats can retract their claws, but most of them can.' => 'No todos los gatos pueden guardar las garras, pero la mayoría de ellos sí.',
      'Run this workflow with "--background" to queue tasks for the daemon workers.' => 'Correr este workflow con "--background" para hacer que las tareas hagan fila para los trabajadores daemon.',
      'Open Documents' => 'Documentos abiertos',
      'Search for objects with specific IDs.' => 'Buscar objetos con identificadores específicos.',
      'Global Saved Queries' => 'Consultas guardadas globales',
      'Query Errors' => 'Errores de consulta',
      'Reindex objects previously indexed on or before a given date.' => 'Reindexar objetos previamente indexados en un fecha dada o antes de tal fecha.',
      'Mandatory Item' => 'Elemento obligatorio',
      'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.' => 'Provea una lista de objetos para indexar (por ejemplo "D123"), o un conjunto de banderas de constreñimiento de la consulta (como "--type"), o "--all" para indexar todos los objetos.',
      'Current Default' => 'Valor predeterminado actual',
      'Query Name' => 'Nombre de consulta',
      'No search engines available.' => 'No hay ningún buscador disponible.',
      'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'Los sentidos de la vista, el olfato y la audición de los gatos contribuyen a sus habilidades de cacería y a sus defensas naturales.',
      'Engine: Index' => 'Motor: índice',
      'Edit Saved Query' => 'Editar consulta guardada',
      'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".' => 'No puede utilizar banderas de constreñimiento de la consulta (como "--version", "--type", o una lista de objetos específicos) con "--all".',
      'Menu Items' => 'Elementos del menú',
      'NO OBJECTS' => 'NINGÚN OBJETO',
      'Reindex all documents.' => 'Volver a indizar todos los documentos.',
      'Hide Query' => 'Ocultar consulta',
      'Set Default Query' => 'Establecer consulta predeterminada',
      'Select a document type...' => 'Selecciona un tipo de documento…',
      '(Restricted/Invalid Project)' => '(Proyecto restringido/no válido)',
      'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Los gatos deben consumir una dieta rica en pescado para sustituir los minúsculos huesos en sus colas.',
      'Delete Query' => 'Eliminar consulta',
      'Selecting objects to index...' => 'Seleccionando objetos para indexar...',
      'Fulltext Search Results' => 'Resultados de búsqueda de texto completo',
      'Document Status' => 'Estado del documento',
      'Engine: Search' => 'Motor: búsqueda',
      'No objects selected to index.' => 'Ningún objeto seleccionado para indexar.',
      'A cat can run seven times faster than a human, but only for a short distance.' => 'Un gato puede correr varias veces más rápido que un humano, pero solo en cortas distancias.',
      'This engine is used to modify menu items on profiles.' => 'Este motor se utiliza para modificar los elementos del menú en cada perfil.',
      'Cats spend most of their time plotting to kill their owner.' => 'Los gatos pasan la mayor parte del tiempo tramando el asesinato de sus dueños.',
      'Reindex objects previously indexed on or after a given date.' => 'Reindexar objetos previamente indexados en una fecha dada o después de tal fecha.',
      '\'%s\' is not the name of a known object.' => '«%s» no es el nombre de algún objeto conocido.',
      'Cat Facts' => 'Curiosidades sobre los gatos',
      'All Open Objects' => 'Todos los objetos abiertos',
      'Disable Query' => 'Desactivar consulta',
      'Divider' => 'Divisor',
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'El gato más largo conocido medía casi 28 centímetros de la nariz a la cola.',
      'PHIDs' => 'PHID',
      'Save Query' => 'Guardar consulta',
      'SELECT' => 'SELECCIONAR',
      'Setting "%s" is misconfigured: %s' => 'La opción «%s» está mal configurada: %s',
      'Type specification "%s" duplicates type specification "%s". Specify each type only once.' => 'Especificación de tipo "%s" es duplica de la especificación de tipo "%s".
    Especifique cada tipo solo una vez.',
      'Disable Query?' => '¿Quieres desactivar la consulta?',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => 'No se puede crear una relación con el objeto «%s» dado que este no existe o no se pudo cargar.',
      '(Restricted/Invalid Application)' => '(Aplicación restringida/no válida)',
      'Reindex objects previously indexed with a particular version of the indexer.' => 'Reindexar objetos previamente indexados con una versión específica del indexados.',
      'Really Delete Query?' => '¿De verdad quieres eliminar la consulta?',
      'Circular Dependency' => 'Dependencia circular',
    );
  }

}
