<?php

final class PhabricatorextCoreSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Escalate' => 'Eskalovať',
  'Next: %s' => 'Ďalší: %s',
  'Auto-generated release schedule details.' => 'Automaticky generované podrobnosti harmonogramu vydania.',
  'Consumer Token' => 'Token spotrebiteľa',
  'Merged' => 'Zlúčené',
  'Unresolved code review comments: %d' => 'Nevyriešené komentáre revízie kódu: %d',
  'Customize query in gerrit' => 'Prispôsobiť dopyt v Gerrite',
  'Cannot Lock Task' => 'Úlohu nie je možné uzamknúť',
  'Deploy `%s` to %s Wikis.' => 'Nasadiť `%s` na %s wiki.',
  'Supported values for `objectType` (some object types might not be supported
if the corresponding application is not available to the user):

%s

Supported values for `default`: `%s`, `%s`.

Values for `policy` must be arrays which include an `action` (either `%s` or
`%s`), a `rule` (PolicyRule class), and a `value` array (e.g. PHIDs).
' => 'Podporované hodnoty pre `objectType` (niektoré typy objektov nemusia byť podporované,
ak príslušná aplikácia nie je používateľovi dostupná):

%s

Podporované hodnoty pre `default`: `%s`, `%s`.

Hodnoty pre `policy` musia byť polia, ktoré obsahujú `action` (buď `%s`, alebo
`%s`), `rule` (trieda PolicyRule) a pole `value` (napr. PHID).',
  'Unknown objectType \'%s\'' => 'Neznámy objectType „%s“',
  'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'Nemáte oprávnenie eskalovať úlohy ako bezpečnostné problémy. Túto akciu môžu vykonať iba oprávnení používatelia.',
  'Show related patches' => 'Zobraziť súvisiace záplaty',
  'Related Links' => 'Súvisiace odkazy',
  'No deployments on fridays' => 'V piatky sa nenasadzuje',
  'You must provide either a username or userPHID' => 'Musíte zadať buď používateľské meno, alebo userPHID',
  'MediaWiki base URI is required.' => 'Základné URI MediaWiki je povinné.',
  'Unknown policies: %s' => 'Neznáme zásady: %s',
  'OAuth JWT nonce didn\'t match what we sent.' => 'Nonce v OAuth JWT sa nezhodoval s tým, čo sme odoslali.',
  'Protect as security issue' => 'Chrániť ako bezpečnostný problém',
  'Policy array data must provide values for \'action\', \'rule\', and \'value\'.' => 'Údaje poľa zásad musia poskytovať hodnoty pre „action“, „rule“ a „value“.',
  'OAuth JWT iss didn\'t match expected server name' => 'iss v OAuth JWT sa nezhodoval s očakávaným názvom servera',
  'Show verbose output.' => 'Zobraziť podrobný výstup.',
  'Invalid JWT signature from Special:OAuth/identify.' => 'Neplatný podpis JWT zo Special:OAuth/identify.',
  'OAuth JWT wasn\'t valid at this time' => 'OAuth JWT v tomto čase nebol platný',
  'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Všetky vážne chyby ovplyvňujúce `%s` by mali byť pridané ako podúlohy pod túto úlohu.',
  'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'Ak je niečo dostatočne vážne na to, aby si to vyžadovalo vrátenie zmien, mali by ste na to upozorniť nasadzovateľov na [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | IRC kanáli #wikimedia-operations ]].',
  'The username for whom transactions will be rolled back.' => 'Používateľské meno, pre ktoré sa transakcie vrátia späť.',
  'No "security" task subtype is defined in "maniphest.subtypes" in this installation. Please file a bug report.' => 'V tejto inštalácii nie je v „maniphest.subtypes“ definovaný žiadny podtyp úlohy „security“. Nahláste, prosím, chybu.',
  'ChangeId' => 'ChangeId',
  'Only admins can call this API' => 'Toto API môžu volať iba správcovia',
  'OAuth provider returned an error response.' => 'Poskytovateľ OAuth vrátil chybovú odpoveď.',
  'Ensure Security Task Policies are Enforced' => 'Zabezpečiť vynucovanie zásad bezpečnostných úloh',
  'Release Details' => 'Podrobnosti vydania',
  'This MediaWiki Train Deployment is scheduled for the week of' => 'Toto vlakové nasadenie MediaWiki je naplánované na týždeň od',
  'WIP - Work in Progress' => 'WIP – rozpracované',
  'Query users by ldap username.' => 'Dopytovať používateľov podľa používateľského mena LDAP.',
  'LDAP User' => 'Používateľ LDAP',
  'Related Changes in GitLab:' => 'Súvisiace zmeny v GitLabe:',
  'Invalid action \'%s\'!' => 'Neplatná akcia „%s“!',
  'Shows the gerrit Change ID for a commit.' => 'Zobrazuje Change ID Gerritu pre commit.',
  'Policy data must be a non-empty array.' => 'Údaje zásady musia byť neprázdne pole.',
  'MediaWiki' => 'MediaWiki',
  'Default action must be \'%s\' or \'%s\'.' => 'Predvolená akcia musí byť „%s“ alebo „%s“.',
  'MediaWiki Base URI' => 'Základné URI MediaWiki',
  'unknown' => 'neznáme',
  'Execute searches for Policies.' => 'Vykonať vyhľadávanie zásad.',
  'Find public transactions by a particular user.' => 'Nájsť verejné transakcie konkrétneho používateľa.',
  'Skip OFFSET rows before processing the remaining transactions.' => 'Preskočiť OFFSET riadkov pred spracovaním zvyšných transakcií.',
  'Execute a rollback.' => 'Vykonať vrátenie späť.',
  '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.

NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s

Provide the following settings on the consumer registration:

  - **OAuth "callback" URL:** Set this to: `%s`
  - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
  - **Applicable grants:** `Basic Rights` is all that is needed for authentication.


After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.

NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s' => '**Krok 2 z 2**: Vytvorte pre túto inštanciu Phabricatora spotrebiteľa OAuth MediaWiki.

POZNÁMKA: Navrhnite spotrebiteľa OAuth 1.0a pomocou formulára na tejto URL: %s

Pri registrácii spotrebiteľa zadajte nasledujúce nastavenia:

  - **URL „callback“ OAuth:** Nastavte na: `%s`
  - **Povoliť spotrebiteľovi zadať callback v požiadavkách a použiť vyššie uvedenú URL „callback“ ako povinnú predponu:** Povoľte toto nastavenie.
  - **Príslušné oprávnenia:** Na overenie stačia `Basic Rights`.


Po zaregistrovaní spotrebiteľa vám MediaWiki poskytne **token spotrebiteľa** a **tajný token** spotrebiteľa. Konfiguráciu Phabricatora dokončíte skopírovaním poskytnutých kľúčov do príslušných polí vyššie.

POZNÁMKA: Skôr než sa Phabricator dokáže úspešne overiť voči vašej MediaWiki, správca wiki musí schváliť registráciu spotrebiteľa OAuth pomocou formulára, ktorý nájdete na tejto URL: %s',
  'Invalid' => 'Neplatné',
  'Blocked on Code Review - Needs Changes' => 'Blokované revíziou kódu – vyžaduje zmeny',
  'View Change in Gerrit' => 'Zobraziť zmenu v Gerrite',
  'You must disable the user before rolling back their activity' => 'Pred vrátením aktivity používateľa ho musíte deaktivovať',
  'Link to Open Tasks' => 'Odkaz na otvorené úlohy',
  'Method Details' => 'Podrobnosti metódy',
  'open' => 'otvorené',
  'MediaWiki Instance Name' => 'Názov inštancie MediaWiki',
  'Must pass valid Policy PHIDs as an array.' => 'Musíte odovzdať platné PHID zásad ako pole.',
  'Secret Token' => 'Tajný token',
  'Secret Token is required' => 'Tajný token je povinný',
  'Limit the number of transaction rows to process. Default: 10000' => 'Obmedziť počet spracovaných riadkov transakcií. Predvolene: 10000',
  'objectType is required.' => 'objectType je povinný.',
  'Unknown or missing ldap names: %s' => 'Neznáme alebo chýbajúce názvy LDAP: %s',
  'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'POZNÁMKA: Skopírujte kľúče vygenerované registráciou spotrebiteľa OAuth MediaWiki a vložte ich sem.',
  'Invalid rule class \'%s\'!' => 'Neplatná trieda pravidla „%s“!',
  'Phabricator transaction rollback tool.' => 'Nástroj na vrátenie transakcií Phabricatora.',
  'This task has no related gerrit patches.' => 'Táto úloha nemá žiadne súvisiace záplaty Gerritu.',
  'Name' => 'Názov',
  'Gerrit Patches' => 'Záplaty Gerritu',
  'This task has no related GitLab merge requests.' => 'Táto úloha nemá žiadne súvisiace žiadosti o zlúčenie GitLabu.',
  'Customize query in GitLab' => 'Prispôsobiť dopyt v GitLabe',
  'You must provide either --user or --user-phid' => 'Musíte zadať buď --user, alebo --user-phid',
  'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'Ďalšie informácie o blokátoroch nasadenia nájdete v [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].',
  'Sort by Last Update' => 'Zoradiť podľa poslednej aktualizácie',
  'Consumer Token is required' => 'Token spotrebiteľa je povinný',
  '%s Line(s) removed' => 'Odstránené riadky: %s',
  'Escalate security issue' => 'Eskalovať bezpečnostný problém',
  'OAuth JWT aud didn\'t match expected consumer key' => 'aud v OAuth JWT sa nezhodoval s očakávaným kľúčom spotrebiteľa',
  'Related Changes in Gerrit:' => 'Súvisiace zmeny v Gerrite:',
  'Code Review Started' => 'Revízia kódu sa začala',
  'Invalid JWT format from Special:OAuth/identify.' => 'Neplatný formát JWT zo Special:OAuth/identify.',
  'OAuth error: Login failed because your MediaWiki account "%s" is blocked' => 'Chyba OAuth: Prihlásenie zlyhalo, pretože váš účet MediaWiki „%s“ je zablokovaný',
  'Enforce Task Security Policy' => 'Vynútiť bezpečnostnú zásadu úlohy',
  'Hide Instructions' => 'Skryť pokyny',
  'Rules do not have any effect.' => 'Pravidlá nemajú žiadny účinok.',
  '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.

In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.' => '**Krok 1 z 2**: Zadajte názov a URI vašej inštalácie MediaWiki.

V ďalšom kroku vytvoríte v MediaWiki spotrebiteľa OAuth, ktorého bude používať OAuth Phabricatora.',
  'users subscribed to' => 'používatelia prihlásení na odber',
  'Execute a dry run, changes will not be writen back to the database.' => 'Vykonať skúšobný beh, zmeny sa nezapíšu späť do databázy.',
  'Cannot Protect as Security Issue' => 'Nie je možné chrániť ako bezpečnostný problém',
  'Branch `%s` and deploy to %s Wikis.' => 'Vetviť `%s` a nasadiť na %s wiki.',
  'No project tags "Security" and "Security-Team" exist in this installation. Please file a bug report.' => 'V tejto inštalácii neexistujú projektové štítky „Security“ a „Security-Team“. Nahláste, prosím, chybu.',
  'No project tag "acl*security" exists in this installation. Please file a bug report.' => 'V tejto inštalácii neexistuje projektový štítok „acl*security“. Nahláste, prosím, chybu.',
  'locked' => 'uzamknuté',
  'The specified username / userPHID was not found' => 'Zadané používateľské meno / userPHID sa nenašlo',
  'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'Úplný harmonogram nájdete na https://wikitech.wikimedia.org/wiki/Deployments.',
  'You cannot lock this task because it is already protected by a custom security policy.' => 'Túto úlohu nemôžete uzamknúť, pretože je už chránená vlastnou bezpečnostnou zásadou.',
  'Wikimedia Customizations' => 'Prispôsobenia Wikimedia',
  'Missing or malformed parameter.' => 'Chýbajúci alebo nesprávne sformovaný parameter.',
  'MediaWiki base URI should include protocol (like "https://").' => 'Základné URI MediaWiki by malo obsahovať protokol (napríklad „https://“).',
  'Create a nameless custom access control policy object. (For custom policies which can be shared between multiple objects and can be selected in dropdowns, create **[[ %s | Named Policies ]]** instead.)' => 'Vytvoriť bezmenný objekt vlastnej zásady riadenia prístupu. (Pre vlastné zásady, ktoré možno zdieľať medzi viacerými objektmi a vyberať z rozbaľovacích ponúk, vytvorte namiesto toho **[[ %s | pomenované zásady ]]**.)',
  'How this works' => 'Ako to funguje',
  'Use [[%s|this form]] to create one.' => 'Na vytvorenie použite [[%s|tento formulár]].',
  'MediaWiki User' => 'Používateľ MediaWiki',
  'Reset security settings' => 'Obnoviť bezpečnostné nastavenia',
  'Open Tasks' => 'Otvorené úlohy',
  'Unknown' => 'Neznáme',
  '**MediaWiki Instance Name**

Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.

Use lowercase letters, digits, and period. For example: 

`mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**Názov inštancie MediaWiki**

Zvoľte trvalý názov pre túto inštanciu MediaWiki. Phabricator používa tento názov interne na sledovanie tejto inštancie MediaWiki pre prípad, že sa URL neskôr zmení.

Použite malé písmená, číslice a bodku. Napríklad: 

`mediawiki`, `mediawiki.mycompany` alebo `mediawiki.engineering` sú rozumné názvy.',
  'GitLab Patches' => 'Záplaty GitLabu',
  'Global Accounts' => 'Globálne účty',
  'Milestone Navigation Links' => 'Navigačné odkazy míľnikov',
  'Object Type' => 'Typ objektu',
  'Previous: %s' => 'Predchádzajúci: %s',
  'Query users by MediaWiki username.' => 'Dopytovať používateľov podľa používateľského mena MediaWiki.',
  'Expand Instructions' => 'Rozbaliť pokyny',
  'You cannot roll back the activity of a privileged user.' => 'Aktivitu privilegovaného používateľa nemôžete vrátiť späť.',
  'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Akékoľvek otvorené podúlohy blokujú posun vlaku vpred. To znamená žiadne ďalšie nasadenia, kým sa blokátory nevyriešia.',
  'This adds a link to search Maniphest for open tasks which are tagged with this project. NOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'Toto pridá odkaz na vyhľadávanie otvorených úloh v Maniphest, ktoré sú označené týmto projektom. POZNÁMKA: Túto funkciu poskytuje rozšírenie spravované Wikimediou v súbore ProjectOpenTasksProfileMenuItem.php. Zdroj nájdete na https://gitlab.wikimedia.org/repos/phabricator/extensions.',
  'The full URL to your MediaWiki install, up to but not including "index.php"' => 'Úplná URL vašej inštalácie MediaWiki, až po „index.php“ (bez neho)',
  'This panel shows navigation links to other milestones in the same series.' => 'Tento panel zobrazuje navigačné odkazy na iné míľniky v tej istej sérii.',
  'Unknown or missing mediawiki names: %s' => 'Neznáme alebo chýbajúce názvy MediaWiki: %s',
  'After reverting transactions, delete the reverted transaction records.' => 'Po vrátení transakcií odstrániť záznamy vrátených transakcií.',
  'No Permission' => 'Bez oprávnenia',
  'merged' => 'zlúčené',
  'closed' => 'zatvorené',
  'Series Navigation' => 'Navigácia série',
  'Required' => 'Povinné',
  'Create an unnamed custom access control policy object.' => 'Vytvoriť nepomenovaný objekt vlastnej zásady riadenia prístupu.',
  'Abandoned' => 'Opustené',
  '%s Line(s) added' => 'Pridané riadky: %s',
  'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => 'Ak máte v tomto týždňovom vlaku rizikovú zmenu, pridajte k tejto úlohe komentár pomocou {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]',
  'Comments' => 'Komentáre',
);
  }

}
