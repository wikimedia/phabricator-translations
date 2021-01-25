<?php

final class PhabricatorFlagCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => 'Marcat amb bandera de «%s».',
      'Personal Bookmarks' => 'Adreces d\'Interès Personals',
      'Query flag markers.' => 'Consulta marcadors de bandera.',
      'Clear a flag.' => 'Esborrar un indicador.',
      'Purple' => 'Morat',
      'Unknown groupBy parameter: %s' => 'Paràmetre de grup desconegut: %s',
      'Mark with %s flag.' => 'Marca amb el marcador %s.',
      'Flags are private. Only you can view or edit your flags.' => 'Els marcadors són privats.  Només podeu veure o modificar els vostres marcadors.',
      'Must pass an id or an objectPHID.' => 'Ha de passar un id o un objectPHID.',
      'Already marked with %s flag.' => 'Ja marcat amb el marcador %s.',
      'Flag For Later' => 'Indicador per a més Endavant',
      'You are not the creator of this flag.' => 'No ets el creador d\'aquest marcador.',
      'Flag %s' => 'Bandera %s',
      'Create or modify a flag.' => 'Crear o modificar un marcador.',
      'Create Flag' => 'Crear una Bandera',
      'You can flag this %s if you want to remember to look at it later.' => 'Podeu marcar aquest %s si voleu recordar-lo més tard.',
      'No flags found.' => 'No s\'ha trobat cap bandera.',
      'Bad flag ID.' => 'ID de marcador incorrecte.',
      'Remove %s Flag' => 'Elimina el marcador %s',
      'All Object Types' => 'Tot Tipus d\'Objecte',
      'Already Marked' => 'Ja Marcat',
      'Flag Color' => 'Color del marcador',
      'Mark with flag' => 'Marca amb bandera',
      'Flagged' => 'Senyalat',
    );
  }

}
