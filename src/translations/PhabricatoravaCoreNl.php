<?php

final class PhabricatoravaCoreNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, thenthe account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'Voor elke handeling die door een gebruiker wordt ondernomen, registreert phabricator een of meer transacties. Het type transactie weerspiegelt welke actie is ondernomen. Wanneer Antivandalism reageert op gebruikersactiviteit, wordt aan elke transactie een basisscore toegekend en worden de scores vervolgens bij elkaar opgeteld en vermenigvuldigd met een factor op basis van de frequentie van de activiteit die de gebruiker heeft gegenereerd. Sneller bewerken levert een grotere multiplier op. De uiteindelijke score wordt vergeleken met de waarde in **antivandalism.max-score**. Als de score te hoog is, wordt het account ofwel afgemeld bij alle sessies of uitgeschakeld. Om scores aan te passen, moet u een json-geformatteerde map van transactietypesleutels met drijvende-kommawaarden opgeven. Voor de meeste doeleinden moeten waarden tussen 0,0 en 1,0 liggen voor alle transactietypen.',
      'Anti-Vandalism' => 'Anti-vandalisme',
      'compute score for given transactions.' => 'bereken de score voor bepaalde transacties.',
      'Vandalism detected' => 'Vandalisme gedetecteerd',
      'The username for whom transactions will be rolled back.' => 'De gebruikersnaam voor wie transacties worden teruggedraaid.',
      'No vandalism detected.' => 'Geen vandalisme gedetecteerd.',
      'The time period examined when scoring edits made by a user.' => 'De periode waarin de bewerkingen van een gebruiker worden beoordeeld.',
      'Adjust the base scores for each transaction type' => 'Pas de basisscores voor elk transactietype aan',
      'Quarantine the vandal account.' => 'Zet het vandalenaccount in quarantaine.',
      'The number of tasks a new user can edit before we react.' => 'Het aantal taken dat een nieuwe gebruiker kan bewerken alvorens te reageren.',
      'You must provide either --user or --user-phid' => 'U moet --user of --user-phid opgeven',
      'Options for tuning the antivandalism filter.' => 'Opties voor het afstellen van het antivandalismefilter.',
      'Disable the accounts of vandals when these limits are exceeded' => 'Schakel de accounts van vandalen uit wanneer deze limieten worden overschreden',
      'The specified username / userPHID was not found' => 'De opgegeven gebruikersnaam / userPHID is niet gevonden',
      'Disable vandal accounts.' => 'Vandaalaccounts uitschakelen.',
      'The username for whom transactions will be scored.' => 'De gebruikersnaam voor wie transacties worden gescoord.',
      '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s heeft vandalismebestrijding geactiveerd (%s) door %s te bewerken.',
      'No action' => 'Geen handeling',
      'Scan for vandalism' => 'Scannen op vandalisme',
    );
  }

}
