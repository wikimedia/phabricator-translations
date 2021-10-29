<?php

final class PhabricatorPhidCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Rescata informació sobre un PHID arbitrari.',
      'Requested handle "%s" was not loaded.' => 'No s\'ha carregat la referència «%s» sol·licitada.',
      'Handles should use viewer handle pool cache.' => 'Les referències han d’utilitzar el visor de referències de la caché.',
      'Restricted %s' => 'Restringit %s',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'S\'està intentant silenciar un %s, però això no està permès; les llistes de referència són immutables.',
      'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.' => 'S\'està intentant provar la capacitat «%s» per al maneig del tipus «%s», però aquesta capacitat no s\'ha adjuntat.',
      'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.' => 'L\'objecte (de classe «%s») no té PHID, de manera que les nanses no poden interaccionar amb les capacitats per a ell.',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => 'La classe "%2$s" de %1$s conté una propietat de %s no vàlida. Els PHID constants han de ser cadenes de caràcters formades per 4 lletres majúscules.',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'S\'està intentant carregar el PHID «%s», però cap llista de referències l\'ha demanat.',
      'The objects you have listed include objects of the wrong type (%s).' => 'Els objectes que heu llistat inclouen objectes del tipus incorrecte (%s).',
      'Query Test Package' => 'Paquet de prova de consultes',
      'Application Email' => 'Correu Electrònic de l\'Aplicació',
      'Look up objects by name.' => 'Cerca objectes pel nom.',
      'Trying to render a handle which does not exist!' => 'S\'està intentant renderitzar una referència que no existeix!',
      'Retrieve information about arbitrary PHIDs.' => 'Rescata informació sobre els PHID arbitraris.',
      'Unknown Object (%s)' => 'Objecte desconegut %s',
      'The objects you have listed include objects which do not exist (%s).' => 'Els objectes que heu llistat inclouen objectes que no existeixen (%s).',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'S\'està intentant crear una nova subllista d\'una llista de referències existent, però el PHID "%s" no apareix a la llista de pares.',
      'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.' => 'Intentant adjuntar la capacitat ("%s") per a l\'objecte ("%s") per gestionar, però aquesta nansa (de tipus "%s") no pot tenir capacitats.',
      'Replaced by \'phid.query\'.' => 'Reemplaçat per \'phid.query\'.',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Els objectes que heu llistat inclouen objectes de tipus incorrecte (%s) i objectes que no existeixen (%s).',
      'No such object exists.' => 'No existeix aquest objecte.',
      'Can not generate PHID with no type.' => 'No es pot generar un PHID sense tipus.',
    );
  }

}
