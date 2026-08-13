<?php

final class PhabricatoravaCoreSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Anti-Vandalism' => 'Antivandalizmus',
  'compute score for given transactions.' => 'vypočítať skóre pre dané transakcie.',
  'Vandalism detected' => 'Zistený vandalizmus',
  'Larger values inflate the overall score. This should be a value between 2 and 10.' => 'Vyššie hodnoty zvyšujú celkové skóre. Malo by ísť o hodnotu medzi 2 a 10.',
  'Sessions Deleted' => 'Relácie odstránené',
  'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.' => 'Vyššie hodnoty spôsobia rýchlejší útlm, čo znamená, že staršie úpravy majú nižšie skóre. Každá úprava sa oskóruje a skóre sa potom vynásobí násobiteľom veku. Násobiteľ sa počíta takto: age_factor = multiplier * (age / age^decay). Age je čas, ktorý uplynul od úpravy, v sekundách.',
  'The username for whom transactions will be rolled back.' => 'Používateľské meno, ktorého transakcie sa vrátia späť.',
  'No vandalism detected.' => 'Nezistil sa žiadny vandalizmus.',
  'The time period examined when scoring edits made by a user, in hours. Note that an extremely high value (several weeks) in a busy Phabricator instance may not produce complete results due to the $id_limit SQL query performance parameter in the source code.' => 'Skúmané časové obdobie pri skórovaní úprav používateľa, v hodinách. Pozor: extrémne vysoká hodnota (niekoľko týždňov) nemusí na vyťaženej inštancii Phabricatora priniesť úplné výsledky kvôli parametru výkonu SQL dopytu $id_limit v zdrojovom kóde.',
  'The time period examined when scoring edits made by a user.' => 'Skúmané časové obdobie pri skórovaní úprav používateľa.',
  'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'Pri každej akcii používateľa zaznamená Phabricator jednu alebo viac transakcií. Typ transakcie odráža, aká akcia sa vykonala. Keď antivandalizmus reaguje na aktivitu používateľa, každej transakcii sa priradí základné skóre, tieto skóre sa spočítajú a vynásobia faktorom založeným na frekvencii používateľovej aktivity. Rýchlejšie upravovanie znamená väčší násobiteľ. Výsledné skóre sa porovná s hodnotou **antivandalism.max-score**. Ak je skóre príliš vysoké, účet sa buď odhlási zo všetkých relácií, alebo sa zablokuje. Skóre prispôsobíte zadaním mapy vo formáte JSON, ktorá priraďuje kľúčom typov transakcií hodnoty s pohyblivou desatinnou čiarkou. Vo väčšine prípadov by mali byť hodnoty pre všetky typy transakcií medzi 0.0 a 1.0.',
  'Adjust the base scores for each transaction type' => 'Upraviť základné skóre pre jednotlivé typy transakcií',
  'Whether to disable a user account when they have reached the antivandalism.max-score multiplied by a threshold in the codebase.' => 'Či sa má používateľský účet zablokovať, keď dosiahne hodnotu antivandalism.max-score vynásobenú prahom nastaveným v kóde.',
  'Quarantine the vandal account.' => 'Umiestniť vandalský účet do karantény.',
  'The rate of decay applied to the age component of the score.' => 'Miera útlmu použitá na vekovú zložku skóre.',
  'The multiplier applied to the age component of the score.' => 'Násobiteľ použitý na vekovú zložku skóre.',
  'You must provide either --user or --user-phid' => 'Musíte zadať buď --user, alebo --user-phid',
  'Options for tuning the antivandalism filter.' => 'Možnosti na ladenie antivandalského filtra.',
  'Account Disabled' => 'Účet zablokovaný',
  'Default scores applied to edits that change a text field.' => 'Predvolené skóre pre úpravy, ktoré menia textové pole.',
  'The specified username / userPHID was not found' => 'Zadané používateľské meno / userPHID sa nenašlo',
  'Disable vandal accounts.' => 'Zablokovať vandalské účty.',
  'The username for whom transactions will be scored.' => 'Používateľské meno, ktorého transakcie sa budú skórovať.',
  '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s spustil(a) protivandalské opatrenia (%s) úpravou %s.',
  'Minimum length below which a penalty is applied. See also: antivandalism.short-text-penalty' => 'Minimálna dĺžka, pod ktorou sa uplatní penalizácia. Pozri tiež: antivandalism.short-text-penalty',
  'Maximum score which a user is allowed to reach before they get logged out.' => 'Maximálne skóre, ktoré smie používateľ dosiahnuť, kým bude odhlásený.',
  'No action' => 'Žiadna akcia',
  'This constant is added to the score when an edit results in very short title or description.' => 'Táto konštanta sa pripočíta ku skóre, keď úprava vyústi do veľmi krátkeho názvu alebo popisu.',
  'Scan for vandalism' => 'Hľadať vandalizmus',
  'These are the default scores applied to edits on text fields suchas task title or description. The base score is multiplied by a factor which is determined by how much the text was changed. What this means is that edits which only add text are scored lower than edits which remove or alter existing text. The base score for each field should represent its relative importance.' => 'Toto sú predvolené skóre pre úpravy textových polí, ako je názov alebo popis úlohy. Základné skóre sa vynásobí faktorom určeným podľa toho, ako veľmi sa text zmenil. To znamená, že úpravy, ktoré text iba pridávajú, majú nižšie skóre než úpravy, ktoré existujúci text odstraňujú alebo menia. Základné skóre každého poľa by malo vyjadrovať jeho relatívnu dôležitosť.',
);
  }

}
