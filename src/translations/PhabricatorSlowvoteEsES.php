<?php

final class PhabricatorSlowvoteEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Close Poll' => 'Cerrar encuesta',
      'Create a Poll' => 'Crear una encuesta',
      'CHANGES TO POLL DESCRIPTION' => 'CAMBIOS A LA DESCRIPCIÓN DE LA ENCUESTA',
      '%s updated the description for this poll.' => '%s actualizó la descripción de esta encuesta.',
      'Reopen' => 'Abrir de nuevo',
      '%s changed the status of this poll from %s to %s.' => '%s cambió el estado de esta encuesta de %s a %s.',
      'Are you sure you want to close the poll?' => '¿Confirmas que quieres cerrar la encuesta?',
      'Create Poll' => 'Crear encuesta',
      'Voting improves cardiovascular endurance.' => 'Votar mejora la resistencia cardiovascular.',
    );
  }

}
