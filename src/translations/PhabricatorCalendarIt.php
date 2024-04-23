<?php

final class PhabricatorCalendarIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Movie' => 'Film',
      'Weekly' => 'Settimanale',
      'Travel' => 'Viaggio',
      '%s from %s' => '%s da %s',
      'Daily' => 'Giornaliero',
      'Yearly' => 'Annuale',
      'Next Update' => 'Prossimo aggiornamento',
      'Holiday' => 'Vacanza',
      'Decline' => 'Rifiuta',
      'Accept' => 'Accetta',
      'Monthly' => 'Mensile',
      '%s - %s' => '%s - %s',
      'Export %d %s' => 'Esporta %s %s',
    );
  }

}
