<?php

final class PhabricatorPhidRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Pigghie \'mbormaziune sus a \'nu PHID arbitrarie.',
      'Requested handle "%s" was not loaded.' => 'L\'handle richieste "%s" non g\'ha state carecate.',
      'Handles should use viewer handle pool cache.' => 'Le handle avessera ausà \'u \'nzieme de handle \'ndrucature in cache.',
      'Restricted %s' => 'Limitate %s',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'Stè pruève a cangià \'nu %s, ma non g\'è permesse; l\'elenghe de le handle no se ponne cangià.',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s classe "%s" tène \'na probbietà %s invalide. Le costande PHID onna essere de quattre carattere tutte maiuscole.',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'Stoche a prove a carecà PHID "%s", ma non g\'ha state cercate da nisciune elenghe handle.',
      'The objects you have listed include objects of the wrong type (%s).' => 'Le oggette ca tu è elengate tènene oggette cu \'u tipe errate (%s).',
      'Query Test Package' => 'Pacchette de test de le \'nderrogaziune',
      'Application Email' => 'Email de l\'applecazione',
      'Look up objects by name.' => 'Pigghie le oggette pe nome.',
      'Trying to render a handle which does not exist!' => 'Ste pruève a renderizzà \'nu handle ca non g\'esiste!',
      'Retrieve information about arbitrary PHIDs.' => 'Pigghie \'mbormaziune sus a de le PHID arbitrarie.',
      'Unknown Object (%s)' => 'Oggette scanusciute (%s)',
      'The objects you have listed include objects which do not exist (%s).' => 'Le oggette ca tu è elengate tènene oggette ca non g\'esistene (%s).',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'Ste pruève a ccrejà \'nu sottelenghe nuève de \'n\'elenghe de handle ca esiste, ma \'u PHID "%s" non ge iesse jndr\'à l\'elenghe de le attane.',
      'Replaced by \'phid.query\'.' => 'Sostituite da \'phid.query\'.',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Le oggette ca tu è elengate tènene oggette cu \'u tipe errate (%s) e oggette ca non g\'esistene (%s).',
      'No such object exists.' => 'Non ge ste nisciune oggette.',
      'Can not generate PHID with no type.' => 'Non ge se pò generà \'u PHID senza tipe.',
    );
  }

}
