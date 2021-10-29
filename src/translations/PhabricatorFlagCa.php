<?php

final class PhabricatorFlagCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Removed "%s" flag.' => 'S\'ha eliminat l\'indicador de seguiment «%s».',
      'Marked with "%s" flag.' => 'Marcat amb l\'indicador de seguiment «%s».',
      'Personal Bookmarks' => 'Marcadors personals',
      'Query flag markers.' => 'Consulta dels indicadors de seguiment.',
      'Clear a flag.' => 'Esborrar un indicador.',
      'Purple' => 'Morat',
      'Unknown groupBy parameter: %s' => 'Paràmetre de grup desconegut: %s',
      'Mark with %s flag.' => 'Marca amb l\'indicador de seguiment %s.',
      'Flags are private. Only you can view or edit your flags.' => 'Els indicadors de seguiment són privats. Només podeu veure o modificar els vostres indicadors de seguiment.',
      'Must pass an id or an objectPHID.' => 'Ha de passar un id o un objectPHID.',
      'Already marked with %s flag.' => 'Ja marcat amb l\'indicador de seguiment %s.',
      'Remove %s flag.' => 'Elimina l\'indicador %s.',
      'Flag For Later' => 'Indicador de seguiment per a més endavant',
      'Remove flag' => 'Elimina l\'indicador de seguiment',
      'You are not the creator of this flag.' => 'No ets el creador d\'aquest indicador de seguiment.',
      'Flag %s' => 'Bandera %s',
      'Removed Flag' => 'S\'ha eliminat l\'indicador de seguiment',
      'Create or modify a flag.' => 'Crear o modificar un indicador de seguiment.',
      'Create Flag' => 'Crear una Bandera',
      'Marked with flag of the wrong color ("%s").' => 'Marcat amb l\'indicador de seguiment del color incorrecte (\'%s\').',
      'You can flag this %s if you want to remember to look at it later.' => 'Podeu marcar aquest %s si voleu recordar-lo més tard.',
      'No flags found.' => 'No s\'ha trobat cap indicador de seguiment.',
      'Bad flag ID.' => 'ID de marcador incorrecte.',
      'Remove %s Flag' => 'Elimina l\'indicador de seguiment %s',
      'All Object Types' => 'Tot Tipus d\'Objecte',
      'Already Marked' => 'Ja Marcat',
      'Flag Color' => 'Color de l\'indicador de seguiment',
      'Mark with flag' => 'Marca amb un indicador de seguiment',
      'Did Not Remove Flag' => 'No s\'ha eliminat l\'indicador de seguiment',
      'Not marked with any flag.' => 'No està marcat amb cap indicador de seguiment.',
      'Flagged' => 'Senyalat',
    );
  }

}
