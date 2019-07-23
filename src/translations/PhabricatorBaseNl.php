<?php

final class PhabricatorBaseNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Geen toepassing "%s"!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Verwacht dat gebruiker "%s" toegang heeft tot "%s".',
      'Can Configure Application' => 'Kan toepassing instellen',
      'Can Use Application' => 'Kan toepassing gebruiken',
      'Application Controller' => 'Toepassingbeheer',
      'Public + configured' => 'Openbaar en ingesteld',
      'Public Access' => 'Openbare toegang',
      'Core Applications' => 'Kerntoepassingen',
      'No Login Required' => 'Aanmelden niet verplicht',
      'No application!' => 'Geen toepassing!',
      '%s Application' => 'Toepassing %s',
      'Email Verification Required' => 'E-mailverificatie verplicht',
      'Application Controller, No Login Required' => 'Toepassingbeheer, aanmelden niet verplicht',
      'Developer Tools' => 'Ontwikkelaarshulpmiddelen',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Deze toepassing is nodig zodat Phabricator kan werken, dus alle gebruikers moeten er toegang toe hebben.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'Verwacht dat gebruiker "%s" geen toegang heeft tot "%s".',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Het verzoek bevat de beperkte parameter "%s", maar deze staat voor deze controller ("%s") niet op de witte lijst. Dit verzoek wordt niet gehonoreerd omdat het onderdeel kan zijn van een doorverwijzingsaanval.',
      'Unknown capability \'%s\'!' => 'Onverwachte functie "%s"!',
      'Admin Required' => 'Beheerder verplicht',
      'Email Verification Required, With Exception' => 'E-mailverificatie verplicht, met uitzondering',
      'Allow Disabled' => 'Toestaan uitgeschakeld',
    );
  }

}
