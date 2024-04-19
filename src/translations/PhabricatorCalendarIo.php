<?php

final class PhabricatorCalendarIo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'io';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'Nula eventi trovita.',
      'New event icon.' => 'Nova ikono di evento.',
      'Change the event icon.' => 'Modifikez ikono dil evento.',
      'Read information about events.' => 'Lektez informo pri eventi.',
      'Import Disabled' => 'Importaco deskapabligita',
      'File PHID "%s" is not valid or not visible.' => 'Arkivo PHID "%s" ne esas valida o ne esas videbla.',
      'Meal' => 'Nutrivo',
      'ICS File' => 'Arkivo ICS',
      'Event Host' => 'Hosto dil evento',
      'Unable to Disable' => 'Ne povis deskapabligar',
      'Exports' => 'Exportaci',
      'Query to execute.' => 'Demando por exekutar.',
      'Movie' => 'Filmo',
      'Official Business' => 'Oficala kontoro',
      'Start time of the event.' => 'Komenco-horo dil evento.',
      'Event icon.' => 'Ikono dil evento.',
      'Too Frequent' => 'Multe ofta',
      'Cancel this event?' => 'Eliminar ca evento?',
      'Weekly' => 'Semanale',
      'Meeting' => 'Renkontro',
      'Upcoming Events' => 'Venonta eventi',
    );
  }

}
