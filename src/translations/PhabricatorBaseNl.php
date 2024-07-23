<?php

final class PhabricatorBaseNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Geen toepassing "%s"!',
      'This application is required, so all users must have access to it.' => 'Deze toepassing is vereist, dus alle gebruikers moeten er toegang toe hebben.',
      'Can Configure Application' => 'Kan toepassing instellen',
      'Can Use Application' => 'Kan toepassing gebruiken',
      'Core Applications' => 'Kerntoepassingen',
      'No application!' => 'Geen toepassing!',
      '%s Application' => 'Toepassing %s',
      'Developer Tools' => 'Ontwikkelaarshulpmiddelen',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Het verzoek bevat de beperkte parameter "%s", maar deze staat voor deze controller ("%s") niet op de witte lijst. Dit verzoek wordt niet gehonoreerd omdat het onderdeel kan zijn van een doorverwijzingsaanval.',
      'Unknown capability \'%s\'!' => 'Onverwachte functie "%s"!',
      'Unable to find transaction query for object of class "%s".' => 'Kan geen transactiequery vinden voor object van klasse “%s”.',
    );
  }

}
