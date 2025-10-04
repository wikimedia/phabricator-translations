<?php

final class PhabricatoravaCoreNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'Anti-vandalisme',
      'compute score for given transactions.' => 'De score voor bepaalde transacties berekenen.',
      'Vandalism detected' => 'Vandalisme gedetecteerd',
      'The username for whom transactions will be rolled back.' => 'De gebruikersnaam waarvoor transacties worden teruggedraaid.',
      'No vandalism detected.' => 'Geen vandalisme gedetecteerd.',
      'The time period examined when scoring edits made by a user.' => 'De tijdsperiode die wordt onderzocht bij het scoren van de bewerkingen van een gebruiker.',
      'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'Voor elke handeling die door een gebruiker wordt verricht, registreert Phabricator een of meer transacties. Het type transactie weerspiegelt de verrichte handeling. Wanneer Antivandalism op gebruikersactiviteit reageert, krijgt elke transactie een basisscore. De scores worden dan bij elkaar opgeteld en vermenigvuldigd met een factor die gebaseerd is op de frequentie van de activiteit die de gebruiker heeft opgewekt. Sneller bewerken levert een grotere vermenigvuldigingsfactor op. De uiteindelijke score wordt vergeleken met de waarde in **antivandalism.max-score**. Als de score te hoog is, wordt het account ofwel van alle sessies afgemeld ofwel opgeschort. Om scores aan te passen moet u een in JSON opgemaakte lijst van transactietypesleutels met drijvende-kommawaarden opgeven. Doorgaans moeten de waarden voor alle transactietypen tussen 0,0 en 1,0 liggen.',
      'Adjust the base scores for each transaction type' => 'De basisscores voor elk transactietype aanpassen',
      'Quarantine the vandal account.' => 'Zet het vandalenaccount in quarantaine.',
      'You must provide either --user or --user-phid' => 'U moet --user of --user-phid opgeven',
      'Options for tuning the antivandalism filter.' => 'Opties voor het afstellen van het antivandalismefilter.',
      'The specified username / userPHID was not found' => 'De opgegeven gebruikersnaam / userPHID is niet gevonden',
      'Disable vandal accounts.' => 'Vandaalaccounts opschorten.',
      'The username for whom transactions will be scored.' => 'De gebruikersnaam waarvoor transacties worden gescoord.',
      '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s heeft maatregelen tegen vandalisme geactiveerd (%s) bij het bewerken van %s.',
      'No action' => 'Niets gedaan',
      'Scan for vandalism' => 'Scannen op vandalisme',
    );
  }

}
