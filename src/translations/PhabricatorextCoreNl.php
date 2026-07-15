<?php

final class PhabricatorextCoreNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Escalate' => 'Escaleren',
  'Next: %s' => 'Volgende: %s',
  'Auto-generated release schedule details.' => 'Automatisch gegenereerde details van het releaseschema.',
  'Consumer Token' => 'Consumententoken',
  'Merged' => 'Samengevoegd',
  'Unresolved code review comments: %d' => 'Onopgeloste opmerkingen bij codereview: %d',
  'Customize query in gerrit' => 'Een zoekopdracht in Gerrit aanpassen',
  'Cannot Lock Task' => 'Kan taak niet vergrendelen',
  'Deploy `%s` to %s Wikis.' => '`%s` naar %s Wiki\'s deployen.',
  'Unknown objectType \'%s\'' => 'Onbekend objectType \'%s\'',
  'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'U hebt geen toestemming om taken als beveiligingsproblemen te escaleren. Deze handeling kan alleen worden uitgevoerd door geautoriseerde gebruikers.',
  'Show related patches' => 'Gerelateerde patches weergeven',
  'Related Links' => 'Gerelateerde koppelingen',
  'No deployments on fridays' => 'Geen deployments op vrijdag',
  'You must provide either a username or userPHID' => 'U dient een gebruikersnaam of userPHID op te geven',
  'MediaWiki base URI is required.' => 'MediaWiki-basis-URI is vereist.',
  'Unknown policies: %s' => 'Onbekend beleid: %s',
  'OAuth JWT nonce didn\'t match what we sent.' => 'De OAuth JWT-nonce kwam niet overeen met wat we hadden verzonden.',
  'Protect as security issue' => 'Beschermen als beveiligingsprobleem',
  'OAuth JWT iss didn\'t match expected server name' => 'De OAuth JWT ISS kwam niet overeen met de verwachte servernaam',
  'Show verbose output.' => 'gedetailleerde uitvoer weergeven.',
  'OAuth JWT wasn\'t valid at this time' => 'De OAuth JWT was op dit moment niet geldig.',
  'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Eventuele ernstige bugs die van invloed zijn op `%s` moeten als subtaken onder deze taak worden toegevoegd.',
  'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'Als er iets ernstig genoeg is om terugdraaien te rechtvaardigen, moet u de beheerders hiervan op de hoogte stellen via het [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | #wikimedia-operations IRC-kanaal ]]',
  'The username for whom transactions will be rolled back.' => 'De gebruikersnaam waarvoor transacties worden teruggedraaid.',
  'No "security" task subtype is defined in "maniphest.subtypes" in this installation. Please file a bug report.' => 'In deze installatie is geen subtype voor "beveiligingstaken" gedefinieerd in "maniphest.subtypes". Meld dit probleem alstublieft.',
  'ChangeId' => 'Wijzigings-ID',
  'Only admins can call this API' => 'Alleen beheerders kunnen deze API aanroepen.',
  'OAuth provider returned an error response.' => 'De OAuth-provider heeft een foutmelding geretourneerd.',
  'Ensure Security Task Policies are Enforced' => 'Zorg ervoor dat het beveiligingsbeleid wordt nageleefd',
  'Release Details' => 'Details van de release',
  'This MediaWiki Train Deployment is scheduled for the week of' => 'Deze MediaWiki Train-implementatie staat gepland voor de week van',
  'WIP - Work in Progress' => 'WIP - Werk in uitvoering',
  'Query users by ldap username.' => 'Gebruikers opvragen via LDAP-gebruikersnaam.',
  'LDAP User' => 'LDAP-gebruiker',
  'Related Changes in GitLab:' => 'Gerelateerde wijzigingen in GitLab:',
  'Invalid action \'%s\'!' => 'Ongeldige handeling \'%s\'!',
  'Shows the gerrit Change ID for a commit.' => 'Het Gerrit Change ID weergeven voor een commit.',
  'MediaWiki' => 'MediaWiki',
  'MediaWiki Base URI' => 'MediaWiki-basis-URI',
  'Execute searches for Policies.' => 'Zoekopdrachten uitvoeren naar beleidsregels.',
  'Find public transactions by a particular user.' => 'Openbare transacties zoeken van een specifieke gebruiker.',
  'Skip OFFSET rows before processing the remaining transactions.' => 'Sla de OFFSET-rijen over voordat de resterende transacties worden verwerkt.',
  'Execute a rollback.' => 'Terugdraaien uitvoeren.',
  '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.

NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s

Provide the following settings on the consumer registration:

  - **OAuth "callback" URL:** Set this to: `%s`
  - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
  - **Applicable grants:** `Basic Rights` is all that is needed for authentication.


After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.

NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s' => '**Stap 2 van 2**: Maak een MediaWiki OAuth-consumer aan voor deze Phabricator-instantie.

OPMERKING: Stel een OAuth 1.0a-consumer voor met de vorm op deze url: %s 

Geef de volgende instellingen op bij de registratie van de consumer:

 - **OAuth "callback"-url:** Stel dit in op: `%s`
 - **Sta de consumer toe om een callback in verzoeken te specificeren en gebruik de bovenstaande "callback"-url als verplicht voorvoegsel:** Schakel deze instelling in.
 - **Toepasselijke rechten:** `Basisrechten` is alles wat nodig is voor authenticatie.


Nadat u de consumer hebt geregistreerd, ontvangt u van MediaWiki een **Consumer Token** en een **Secret Token**. Om de configuratie van Phabricator te voltooien, kopieert u de meegeleverde sleutels naar de overeenkomstige velden hierboven.

OPMERKING: Voordat Phabricator zich kan authenticeren bij uw MediaWiki, moet een wiki-beheerder de OAuth-gebruikersregistratie goedkeuren via het formulier dat u kunt vinden op de volgende url: %s',
  'Invalid' => 'Onjuist',
  'Blocked on Code Review - Needs Changes' => 'Op codereview geblokkeerd - Er moeten wijzigingen worden aangebracht',
  'View Change in Gerrit' => 'Wijzigingen bekijken in Gerrit',
  'You must disable the user before rolling back their activity' => 'U moet de gebruiker uitschakelen voordat u hun activiteit ongedaan maakt.',
  'Link to Open Tasks' => 'Koppeling naar openstaande taken',
  'MediaWiki Instance Name' => 'MediaWiki-instantienaam',
  'Secret Token' => 'Geheim token',
  'Secret Token is required' => 'Geheim token is vereist',
  'Limit the number of transaction rows to process. Default: 10000' => 'Beperk het aantal transactierijen dat moet worden verwerkt. Standaard: 10.000',
  'objectType is required.' => 'objectType is vereist.',
  'Unknown or missing ldap names: %s' => 'Onbekende of ontbrekende ldap-namen: %s',
  'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'LET OP: Kopieer de sleutels die gegenereerd worden door de MediaWiki OAuth-consumerregistratie en plak ze hier.',
  'Invalid rule class \'%s\'!' => 'Ongeldige regelklasse \'%s\'!',
  'Phabricator transaction rollback tool.' => 'Phabricator-hulppprogramma voor het terugdraaien van transacties.',
  'This task has no related gerrit patches.' => 'Deze taak heeft geen gerelateerde Gerrit-patches.',
  'Gerrit Patches' => 'Gerrit-patches',
  'This task has no related GitLab merge requests.' => 'Deze taak heeft geen gerelateerde GitLab-mergeverzoeken.',
  'Customize query in GitLab' => 'Een zoekopdracht in GitLab aanpassen',
  'You must provide either --user or --user-phid' => 'U moet --user of --user-phid opgeven',
  'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'Voor meer informatie over deploymentblokkades, zie [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | De trein tegenhouden ]].',
  'Sort by Last Update' => 'Sorteren op laatste update',
  'Consumer Token is required' => 'Een consumertentoken is vereist',
  '%s Line(s) removed' => '%s regel(s) verwijderd',
  'Escalate security issue' => 'Beveiligingsprobleem escaleren',
  'OAuth JWT aud didn\'t match expected consumer key' => 'De OAuth JWT-authenticatie kwam niet overeen met de verwachte consumertensleutel',
  'Related Changes in Gerrit:' => 'Gerelateerde wijzigingen in Gerrit:',
  'Code Review Started' => 'Codereview gestart',
  'OAuth error: Login failed because your MediaWiki account "%s" is blocked' => 'OAuth-fout: Aanmelden mislukt omdat uw MediaWiki-account "%s" is geblokkeerd',
  'Enforce Task Security Policy' => 'Taakbeveiligingsbeleid handhaven',
  'Hide Instructions' => 'Instructies verbergen',
  'Rules do not have any effect.' => 'Regels hebben geen enkel effect.',
  '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.

In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.' => '**Stap 1 van 2**: Geef de naam en URI op voor uw MediaWiki-installatie.

In de volgende stap maakt u een OAuth-consumer aan in MediaWiki die door Phabricator OAuth gebruikt kan worden.',
  'users subscribed to' => 'gebruikers hebben zich geabonneerd op',
  'Execute a dry run, changes will not be writen back to the database.' => 'Voer een testrun uit; de wijzigingen worden niet naar de database geschreven.',
  'Cannot Protect as Security Issue' => 'Kan niet worden beveiligd als beveiligingsprobleem',
  'Branch `%s` and deploy to %s Wikis.' => 'Branch maken voor `%s` en deployen naar %s wiki\'s.',
  'No project tags "Security" and "Security-Team" exist in this installation. Please file a bug report.' => 'In deze installatie bestaan geen projecttags "Security" en "Security-Team". Meld dit probleem alstublieft.',
  'No project tag "acl*security" exists in this installation. Please file a bug report.' => 'Er bestaat geen projecttag "acl*security" in deze installatie. Meld dit probleem alstublieft.',
  'The specified username / userPHID was not found' => 'De opgegeven gebruikersnaam / userPHID is niet gevonden',
  'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'Zie https://wikitech.wikimedia.org/wiki/Deployments voor het volledige schema.',
  'You cannot lock this task because it is already protected by a custom security policy.' => 'U kunt deze taak niet vergrendelen omdat deze al beveiligd wordt door een aangepast beveiligingsbeleid.',
  'Wikimedia Customizations' => 'Wikimedia-aanpassingen',
  'Missing or malformed parameter.' => 'Ontbrekende of onjuist opgemaakte parameter.',
  'MediaWiki base URI should include protocol (like "https://").' => 'De basis-URI van MediaWiki moet het protocol bevatten (zoals "https://").',
  'How this works' => 'Hoe dit werkt',
  'Use [[%s|this form]] to create one.' => 'Gebruik [[%s|dit formulier]] om er een te maken.',
  'MediaWiki User' => 'MediaWiki-gebruiker',
  'Reset security settings' => 'Beveiligingsinstellingen opnieuw instellen',
  'Open Tasks' => 'Openstaande taken',
  'Unknown' => 'Onbekend',
  '**MediaWiki Instance Name**

Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.

Use lowercase letters, digits, and period. For example: 

`mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**MediaWiki-instantienaam**

Kies een permanente naam voor deze MediaWiki-instantie. Phabricator gebruikt deze naam intern om deze MediaWiki-instantie bij te houden, voor het geval de url later verandert.

Gebruik kleine letters, cijfers en een punt. Bijvoorbeeld: 

`mediawiki`, `mediawiki.mycompany` of `mediawiki.engineering` zijn geschikte namen.',
  'GitLab Patches' => 'GitLab-patches',
  'Global Accounts' => 'Globale accounts',
  'Milestone Navigation Links' => 'Mijlpaal-navigatiekoppelingen',
  'Previous: %s' => 'Vorige: %s',
  'Query users by MediaWiki username.' => 'Gebruikers zoeken op basis van hun MediaWiki-gebruikersnaam.',
  'Expand Instructions' => 'Instructies uitklappen',
  'You cannot roll back the activity of a privileged user.' => 'U kunt de handelingen van een gebruiker met beheerdersrechten niet ongedaan maken.',
  'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Eventuele openstaande subtaken blokkeren de voortgang van de trein. Dit betekent dat er geen verdere implementaties plaatsvinden totdat de blokkades zijn opgelost.',
  'This adds a link to search Maniphest for open tasks which are tagged with this project. NOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'Dit voegt een koppeling toe om in Maniphest te zoeken naar openstaande taken die zijn getagd met dit project. OPMERKING: Deze functie wordt geleverd door een door Wikimedia onderhouden uitbreiding in ProjectOpenTasksProfileMenuItem.php. Zie https://gitlab.wikimedia.org/repos/phabricator/extensions voor de broncode.',
  'The full URL to your MediaWiki install, up to but not including "index.php"' => 'De volledige URL van uw MediaWiki-installatie, tot en zonder "index.php"',
  'This panel shows navigation links to other milestones in the same series.' => 'In dit paneel worden navigatiekoppelingen weergegeven naar andere mijlpalen in dezelfde serie.',
  'Unknown or missing mediawiki names: %s' => 'Onbekende of ontbrekende MediaWiki-namen: %s',
  'After reverting transactions, delete the reverted transaction records.' => 'Nadat transacties zijn teruggedraaid, verwijdert u de records van de teruggedraaide transacties.',
  'No Permission' => 'Geen toestemming',
  'Series Navigation' => 'Serienavigatie',
  'Required' => 'Vereist',
  'Abandoned' => 'Verlaten',
  '%s Line(s) added' => '%s regel(s) toegevoegd',
  'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => 'Als u een risicovolle wijziging in de trein van deze week hebt, voeg dan een opmerking toe aan deze taak met behulp van het {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Sjabloon voor risicovolle patch ]]',
  'Comments' => 'Opmerkingen',
);
  }

}
