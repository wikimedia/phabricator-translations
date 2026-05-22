<?php

final class PhabricatorSpacesNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  '%s updated the space description for %s.' => '%s heeft de ruimtebeschrijving bijgewerkt voor %s.',
  '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Deze foutmelding geeft over het algemeen aan dat %s is ingeschakeld, maar dat er geen ruimtes zijn met een weergavebeleid "%s". Deze instellingen zijn tegenstrijdig en duiden op een verkeerde configuratie.)',
  'Spaces User Guide' => 'Gebruikershandleiding Ruimtes',
  'Hide Active Spaces' => 'Actieve ruimtes verbergen',
  '%s updated the space description.' => '%s heeft de ruimtebeschrijving is bijgewerkt.',
  '%s archived space %s.' => '%s heeft de ruimte %s gearchiveerd.',
  'PHID of the policy space this object is part of.' => 'PHID van de beleidsruimte waar dit object deel van uitmaakt.',
  'Default edit policy for newly created spaces.' => 'Standaard bewerkingsbeleid voor nieuw aangemaakte ruimtes.',
  'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Alleen de eerst aangemaakte ruimte kan de standaardruimte zijn, en deze moet voor altijd de standaardruimte blijven.',
  'Search for objects in certain spaces.' => 'Zoeken naar objecten in bepaalde ruimtes.',
  'Activate Space: %s' => 'Ruimte activeren: %s',
  'Support for Spaces' => 'Ondersteuning voor ruimtes',
  '%s renamed space %s from %s to %s.' => '%s heeft de ruimte %s hernoemd van %s naar %s.',
  'Create a Space' => 'Ruimte aanmaken',
  '%s activated this space.' => '%s heeft deze ruimte geactiveerd.',
  'Archive Space: %s' => 'Ruimte archiveren: %s',
  'Spaces must have a name.' => 'Ruimtes moeten een naam hebben.',
  'Existing objects in this Space will be hidden from query results by default.' => 'Bestaande objecten in deze ruimte worden standaard verborgen voor zoekresultaten.',
  '%s made this the default space.' => '%s heeft dit de standaardruimte gemaakt.',
  '%s archived this space.' => '%s heeft deze ruimte gearchiveerd.',
  'Type a space name...' => 'Typ een ruimtenaam...',
  'Existing objects will no longer be hidden from query results.' => 'Bestaande objecten worden niet langer verborgen in de zoekresultaten.',
  'You do not have permission to create spaces.' => 'U hebt geen rechten om nieuwe ruimtes te maken.',
  'Ask someone to give you access to a space so you can view and create objects.' => 'Vraag iemand om u toegang te geven tot een ruimte waar u objecten kunt bekijken en maken.',
  'Default Space' => 'Standaardruimte',
  'Archive Space' => 'Ruimte archiveren',
  'CHANGES TO SPACE DESCRIPTION' => 'WIJZIGINGEN IN DE RUIMTEBESCHRIJVING',
  'Default view policy for newly created spaces.' => 'Standaardweergavebeleid voor nieuw aangemaakte ruimtes.',
  'Spaces' => 'Ruimtes',
  'Drift Aimlessly' => 'Doelloos ronddrijven',
  'Browse Spaces' => 'Ruimtes bekijken',
  'Can Create Spaces' => 'Kan ruimtes aanmaken',
  'All Spaces' => 'Alle ruimtes',
  'Control access to groups of objects.' => 'Toegang beheren tot groepen objecten.',
  'If you activate this space, you will be able to create objects inside it again.' => 'Als u deze ruimte activeert, kunt u er weer objecten in plaatsen.',
  'Create Space' => 'Ruimte aanmaken',
  'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Meld u aan, of vraag iemand om een openbare ruimte aan te maken waartoe ook niet aangemelde gebruikers toegang hebben.',
  'Policy Namespaces' => 'Beleidsnaamruimten',
  '%s activated space %s.' => '%s heeft de ruimte %s geactiveerd.',
  '%s created this space.' => '%s heeft deze ruimte aangemaakt.',
  'Space %s: %s' => 'Ruimte %s: %s',
  'No Access to Spaces' => 'Geen toegang tot ruimtes',
  '%s renamed this space from %s to %s.' => '%s heeft deze ruimte hernoemd van %s naar %s.',
  'No spaces found.' => 'Geen ruimtes gevonden.',
  'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'Deze installatie maakt gebruik van ruimtes om objecten te organiseren, maar niet aangemelde gebruikers hebben geen toegang tot ruimtes.',
  'Edit Space' => 'Ruimte bewerken',
  '%s made space %s the default space.' => '%s heeft de ruimte %s de standaardruimte gemaakt.',
  'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'LET OP: U maakt de **standaardruimte** aan. Alle bestaande objecten worden in deze ruimte geplaatst. U moet een standaardruimte aanmaken voordat u andere ruimtes kunt aanmaken.',
  'Activate Space' => 'Ruimte activeren',
  'Show Only Active Spaces' => 'Alleen actieve ruimtes weergeven',
  'Policy namespaces to segment object visibility throughout your instance.' => 'Beleidsnaamruimten om de zichtbaarheid van objecten binnen uw instantie te segmenteren.',
  'If you archive this Space, you will no longer be able to create new objects inside it.' => 'Als u deze ruimte archiveert, kunt u er geen nieuwe objecten meer in aanmaken.',
  '%s created space %s.' => '%s heeft de ruimte %s aangemaakt.',
  'Active Spaces' => 'Actieve ruimtes',
  'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'Deze installatie maakt gebruik van ruimtes om objecten te organiseren, maar uw account heeft geen toegang tot ruimtes.',
);
  }

}
