<?php

final class PhabricatorChatlogFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Obsolète)',
      'Jump' => 'Sauter',
      'Retrieve chatter.' => 'Récupérer le bavardage.',
      'Newer' => 'Plus récent',
      'Jump to Bottom' => 'Aller en bas',
      'Older' => 'Plus ancien',
      'ChatLog' => 'Journal de discussion',
      'Channel List' => 'Liste du canal',
      'Hide Dates' => 'Masquer les dates',
      'Channel Log' => 'Journal du canal',
      'Search Dates' => 'Rechercher les dates',
      'Newest' => 'Le plus récent',
      'Record chatter.' => 'Enregistrer le bavardage.',
    );
  }

}
