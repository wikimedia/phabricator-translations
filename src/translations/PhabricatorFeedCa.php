<?php

final class PhabricatorFeedCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Crideu a %s abans de publicar!',
      'Dictionary with various data of the story' => 'Diccionari amb diverses dades de la història',
      'All Stories' => 'Totes les Històries',
      'Query the feed for stories' => 'Consulteu els continguts per a escriure històries',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'El tipus d\'història ha de ser un nom de classe vàlid i ha de subclassificar %s.  \'%s\' no és una subclasse de %s.',
      'Full HTML presentation of story' => 'Presentació HTML completa de la història',
      '(Unable to render story of class %s for Doorkeeper.)' => '(No es pot renderitzar la història de la classe %s per a Doorkeeper.)',
      'Story has no primary object!' => 'La història no té cap objecte principal!',
      'Republishing story...' => 'Republicant història...',
      'Story is asking for an object it did not request (\'%s\')!' => 'La història pregunta per un objecte que no ha demanat (\'%s\')!',
      'Simple one-line plain text representation of story' => 'Representació de la història en línia com a text sense format',
      'Include Projects' => 'Incloure Projectes',
      'Specify a story key to republish.' => 'Especifiqueu una clau d\'història per tornar a publicar.',
      'The specified "Created Before" date is earlier in time than the specified "Created After" date, so this query can never match any results.' => 'La data especificada "Creada abans" és anterior a la data especificada "Creada després", de manera que aquesta consulta no pot donar cap resultat.',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'La data especificada de "Anterior" és anterior en temps que la data especificada de "Anterior", de manera que aquesta consulta mai no pot coincidir amb cap resultat.',
      'Republish a feed event to all consumers.' => 'Tornar a publicar un esdeveniment de continguts a tots els consumidors.',
      'Include Users' => 'Incloure Usuaris',
      'Feed Story Failed to Render (%s)' => 'La història de continguts ha fallat en renderitzar (%s)',
      'Story' => 'Història',
      'Specify exactly one story key to republish.' => 'Especifiqueu exactament una clau d\'història per tornar a publicar.',
      'You must call %s if you %s!' => 'Heu de trucar %s si tu %s!',
      'Unloaded Object \'%s\'' => 'S\'ha descarregat l\'objecte \'%s\'',
      'No story exists with key "%s"!' => 'No existeix cap història amb la clau «%s»!',
      'Feed options.' => 'Opcions de continguts.',
      'Deprecated.' => 'Obsolet.',
      'No Stories.' => 'Cap Història.',
      'Story contains only the title of the story' => 'La història només conté el títol de la història',
      'Unsupported view type, possibles are: %s' => 'Tipus de vista no admès, els possibles són: %s',
      'Object Types' => 'Tipus d\'Objecte',
      'Transaction Logs' => 'Registres de transaccions',
      'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'S\'està intentant rescatar la clau de camp de marcatge "%s", però aquesta història de continguts no ha demanat que es renderitzi.',
      'Feed Stories' => 'Històries del Canal de Continguts',
      'Unknown rendering target: %s' => 'Objectiu de renderització desconegut: %s',
      'Include stories about projects I am a member of.' => 'Inclou històries sobre projectes dels quals sóc membre.',
      'All Transactions' => 'Totes les transaccions',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'El tipus d\'història ha de ser un nom de classe vàlid i ha de subclassificar %s.  \'%s\' no és una classe carregable.',
      'Feed story (with key "%s") does not exist or could not be loaded.' => 'La història de continguts (amb la clau «%s») no existeix o no s\'ha pogut carregar.',
      'Review Recent Activity' => 'Revisa l\'activitat recent',
    );
  }

}
