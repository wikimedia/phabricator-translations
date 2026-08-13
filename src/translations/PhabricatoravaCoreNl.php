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
  'Larger values inflate the overall score. This should be a value between 2 and 10.' => 'Hogere waarden verhogen de totale score. De waarde moet tussen de 2 en 10 liggen.',
  'Sessions Deleted' => 'Sessies verwijderd',
  'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.' => 'Hogere waarden resulteren in een snellere afname, wat betekent dat oudere bewerkingen lager scoren. Elke bewerking krijgt een score, die vervolgens wordt vermenigvuldigd met de leeftijdsfactor. De factor wordt als volgt berekend: leeftijdsfactor = factor * (leeftijd / leeftijd^afname). Leeftijd is hoe lang geleden de bewerking plaatsvond, in seconden.',
  'The username for whom transactions will be rolled back.' => 'De gebruikersnaam waarvoor transacties worden teruggedraaid.',
  'No vandalism detected.' => 'Geen vandalisme gedetecteerd.',
  'The time period examined when scoring edits made by a user, in hours. Note that an extremely high value (several weeks) in a busy Phabricator instance may not produce complete results due to the $id_limit SQL query performance parameter in the source code.' => 'De onderzochte tijdsperiode bij het scoren van door een gebruiker gemaakte bewerkingen, in uren. Houd er rekening mee dat een extreem hoge waarde (meerdere weken) in een drukke Phabricator-instantie mogelijk geen volledige resultaten oplevert vanwege de SQL-queryprestatieparameter $id_limit in de broncode.',
  'The time period examined when scoring edits made by a user.' => 'De tijdsperiode die wordt onderzocht bij het scoren van de bewerkingen van een gebruiker.',
  'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'Voor elke handeling die door een gebruiker wordt ondernomen, registreert Phabricator een of meer transacties. Het type transactie weerspiegelt welke handeling is uitgevoerd. Wanneer Antivandalism reageert op gebruikersactiviteit, wordt aan elke transactie een basisscore toegekend en worden de scores vervolgens bij elkaar opgeteld en vermenigvuldigd met een factor op basis van de frequentie van de activiteit die de gebruiker heeft gegenereerd. Sneller bewerken levert een grotere vermenigvuldigingsfactor op. De uiteindelijke score wordt vergeleken met de waarde in antivandalism.max-score. Als de score te hoog is, worden alle sessies van het account beëindigd of wordt het account uitgeschakeld. Om scores aan te passen, moet u een JSON-object met de sleutels van de transactietypen en de bijbehorende zwevendekommagetallen opgeven. Voor de meeste doeleinden moeten waarden tussen 0,0 en 1,0 liggen voor alle transactietypen.',
  'Adjust the base scores for each transaction type' => 'De basisscores voor elk transactietype aanpassen',
  'Whether to disable a user account when they have reached the antivandalism.max-score multiplied by a threshold in the codebase.' => 'Of een gebruikersaccount moet worden uitgeschakeld wanneer deze de antivandalism.max-score vermenigvuldigd met een ingestelde drempelwaarde heeft bereikt.',
  'Quarantine the vandal account.' => 'Zet het vandalenaccount in quarantaine.',
  'The rate of decay applied to the age component of the score.' => 'De mate van verval die wordt toegepast op de leeftijdscomponent van de score.',
  'The multiplier applied to the age component of the score.' => 'De vermenigvuldigingsfactor die wordt toegepast op de leeftijdscomponent van de score.',
  'You must provide either --user or --user-phid' => 'U moet --user of --user-phid opgeven',
  'Options for tuning the antivandalism filter.' => 'Opties voor het afstellen van het antivandalismefilter.',
  'Account Disabled' => 'Account uitgeschakeld',
  'Default scores applied to edits that change a text field.' => 'Standaardscores worden toegepast op bewerkingen die een tekstveld wijzigen.',
  'The specified username / userPHID was not found' => 'De opgegeven gebruikersnaam / userPHID is niet gevonden',
  'Disable vandal accounts.' => 'Vandaalaccounts opschorten.',
  'The username for whom transactions will be scored.' => 'De gebruikersnaam waarvoor transacties worden gescoord.',
  '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s heeft maatregelen tegen vandalisme geactiveerd (%s) bij het bewerken van %s.',
  'Minimum length below which a penalty is applied. See also: antivandalism.short-text-penalty' => 'Minimale lengte waaronder een sanctie wordt opgelegd. Zie ook: antivandalism.short-text-penalty',
  'Maximum score which a user is allowed to reach before they get logged out.' => 'De maximale score die een gebruiker mag behalen voordat hij of zij wordt argemeld.',
  'No action' => 'Niets gedaan',
  'This constant is added to the score when an edit results in very short title or description.' => 'Deze constante wordt bij de score opgeteld wanneer een bewerking resulteert in een zeer korte titel of beschrijving.',
  'Scan for vandalism' => 'Scannen op vandalisme',
  'These are the default scores applied to edits on text fields suchas task title or description. The base score is multiplied by a factor which is determined by how much the text was changed. What this means is that edits which only add text are scored lower than edits which remove or alter existing text. The base score for each field should represent its relative importance.' => 'Dit zijn de standaardscores die worden toegepast op bewerkingen van tekstvelden zoals de taaktitel of -beschrijving. De basisscore wordt vermenigvuldigd met een factor die wordt bepaald door de mate waarin de tekst is gewijzigd. Dit betekent dat bewerkingen waarbij alleen tekst wordt toegevoegd, lager scoren dan bewerkingen waarbij tekst wordt verwijderd of bestaande tekst wordt gewijzigd. De basisscore voor elk veld moet de relatieve belangrijkheid ervan weerspiegelen.',
);
  }

}
