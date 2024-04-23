<?php

final class PhabricatorSettingsNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Default (%s)' => 'Standaard (%s)',
      'Send Stamps' => 'Stempels verzenden',
      'Adjust Timezone' => 'Tijdzone aanpassen',
      '%s updated her profile' => '%s heeft haar profiel bijgewerkt',
      'All Messages' => 'Alle berichten',
      '%s updated their profile' => '%s heeft diens profiel bijgewerkt',
      'You must enter your current password.' => 'Je moet je huidige wachtwoord invoeren.',
      '%s updated his profile' => '%s heeft zijn profiel bijgewerkt',
      'Replaced With' => 'Vervangen door',
      '⚫ Email' => '⚫ E-mail',
      'Pronoun' => 'Voornaamwoord',
      'Choose the pronoun you prefer.' => 'Kies het voornaamwoord dat je prefereert.',
    );
  }

}
