<?php

final class PhabricatorChatlogCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Obsolet)',
      'Jump' => 'Saltar',
      'Retrieve chatter.' => 'Rescatar la conversa.',
      'Newer' => 'Posterior',
      'Jump to Bottom' => 'Anar a Baix',
      'Older' => 'Anterior',
      'ChatLog' => 'Registre de discussió',
      'Channel List' => 'Llista de canals',
      'Hide Dates' => 'Oculta les dates',
      'Channel Log' => 'Registre del canal',
      'Search Dates' => 'Cercar Dates',
      'Newest' => 'El més nou',
      'Record chatter.' => 'Desar la conversa.',
    );
  }

}
