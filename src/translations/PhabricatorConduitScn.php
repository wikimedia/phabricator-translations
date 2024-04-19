<?php

final class PhabricatorConduitScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      'All Methods' => 'Tutti li mètudi',
      'API Method: %s' => 'Mètudu API: %s',
      'cURL' => 'cURL',
      'List of usernames.' => 'Lista dî nomi di li utenti.',
      '<api-token>' => '<tekon-api>',
      'See error message for details.' => 'Talìa lu missaggiu d\'erruri pi cchiù dittagghî.',
      'List of user PHIDs.' => 'Elencu dî PHID di l\'utenti.',
      'List of PHIDs.' => 'Elencu dî PHID.',
      'List of project tags.' => 'Elencu di l\'etichetti dû pruggettu.',
      'A PHID.' => 'Nu PHID.',
      'List of strings.' => 'Elencu di stringhi.',
      'Errors' => 'Errura',
      'User PHID.' => 'PHID di l\'utenti.',
      'Username.' => 'Nomu utenti.',
      'A string.' => 'Na stringa.',
      'Active API Tokens' => 'Token API attivi',
      'API token "%s" is not valid.' => 'Lu token API "%s" nun è vàlidu.',
      'Developer API' => 'API dû sviluppaturi',
      'View API Token' => 'Talìa lu token API',
      'List of column PHIDs.' => 'Elencu dî PHID di culonna.',
      'List of project PHIDs.' => 'Elencu dî PHID di pruggettu.',
      'A boolean.' => 'Nu booleanu.',
    );
  }

}
