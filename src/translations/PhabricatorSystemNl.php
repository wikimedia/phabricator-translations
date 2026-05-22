<?php

final class PhabricatorSystemNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'An Administrator has placed this server into read-only mode.' => 'Een beheerder heeft deze server in de alleen-lezenmodus gezet.',
  'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'Dit systeem heeft de uitbreiding "%s" niet geïnstalleerd, waardoor tekenencoderingen niet worden ondersteund. Installeer "%s" om ondersteuning in te schakelen.',
  'This mode is active because it is enabled in the configuration option "%s".' => 'Deze modus is actief omdat deze is ingeschakeld in de configuratieoptie "%s".',
  'Panic!' => 'Paniek!',
  'View Handle' => 'Verwijzing bekijken',
  'No Writable Database' => 'Geen beschrijfbare database',
  'Destroying %s **%s**...
' => 'Object **%2$s** van klasse %s wordt vernietigd...',
  'This server has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Deze server is er herhaaldelijk niet in geslaagd om de beschrijfbare (primaire) database te bereiken tijdens het verwerken van recente verzoeken.',
  'Object "%s" can not be destroyed (it does not implement %s).' => 'Object "%s" kan niet worden vernietigd (het implementeert %s niet).',
  'No Encoding Support' => 'Geen ondersteuning voor codering',
  'No such object "%s" exists!' => 'Het object "%s" bestaat niet!',
  'This server was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Deze server kon tijdens de verwerking van dit verzoek geen verbinding maken met de beschrijfbare (primaire) database en is automatisch overgeschakeld naar de alleen-lezen modus.',
  'Severed From Master' => 'Gescheiden van de primaire database',
  'Cluster Database Status' => 'Databaseclusterstatus',
  'Engine: Destruction' => 'Engine: Destruction',
  'Object ("%s") does not implement interface "%s", so this type of object can not be unlocked.' => 'Het object ("%s") implementeert de interface "%s" niet, dus dit type object kan niet worden ontgrendeld.',
  'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Dit verzoek is afkomstig van een replica-database. Replica-databases kunnen achterlopen op de primaire database, waardoor zeer recente activiteiten mogelijk niet in de gebruikersinterface worden weergegeven. Deze gegevens worden hersteld als de primaire database wordt hersteld, maar kunnen verloren zijn gegaan als de primaire database volledig onbruikbaar is geworden.',
  'Permanently destroy objects.' => 'Objecten permanent vernietigen.',
  'Choose a syntax highlighting to use.' => 'Kies een syntaxmarkering die u wilt gebruiken.',
  '%d / hour' => '%d / uur',
  'Rate Limiting Actions' => 'Maatregelen ter beperking van het aantal aanvragen',
  'Highlighting' => 'Markering',
  'Unable to Reach Master' => 'Primaire database niet bereikbaar',
  'View As' => 'Bekijken als',
  'Permanently destroyed %s object(s).' => '%s object(en) permanent vernietigd.',
  'Choose Encoding' => 'Kies codering',
  'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.

These tattered edges are an expected consequence of destroying objects, and the upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'Het verwijderen van objecten kan ertoe leiden dat gerelateerde objecten niet meer werken en kan verwijzingen achterlaten naar objecten die niet langer bestaan. In de meeste gevallen is het veel beter om objecten uit te schakelen of te archiveren in plaats van ze te verwijderen. Dit risico is het grootst bij het verwijderen van complexe of sterk met elkaar verbonden objecten zoals repository\'s, projecten en gebruikers. Deze problemen zijn een te verwachten gevolg van het verwijderen van objecten en de upstream-ontwikkelaars helpen u niet om ze op te lossen. We raden ten zeerste aan om objecten uit te schakelen of te archiveren.',
  'IMPORTANT' => 'BELANGRIJK',
  'Quite Unsettling' => 'Nogal verontrustend',
  'Object owner can not be unlocked: the unlocking engine ("%s") for this object does not implement an owner unlocking mechanism.' => 'De eigenaar van het object kan niet worden ontgrendeld: de ontgrendelingsengine ("%s") voor dit object implementeert geen mechanisme voor het ontgrendelen van de eigenaar.',
  'Choose a document engine to use.' => 'Kies een documentengine om te gebruiken.',
  'Destruction Logs' => 'Vernietigingslogboeken',
  'This likely indicates a severe misconfiguration or major service interruption.' => 'Dit duidt waarschijnlijk op een ernstige configuratiefout of een grote storing in de dienstverlening.',
  'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, this server will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Dit kan er ook op wijzen dat er een ernstiger probleem is opgetreden. Als deze onderbreking niet vanzelf verdwijnt, zal de server de aanhoudende storing snel detecteren en overschakelen naar de alleen-lezenmodus totdat het probleem is opgelost.',
  'Destroying objects...' => 'Objecten vernietigen...',
  'View Affected Path Index' => 'Index van getroffen paden bekijken',
  'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Deze modus is actief omdat geen enkele database een "%s"-rol heeft in de configuratieoptie "%s".',
  'This server will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Deze server probeert periodiek opnieuw te verbinden en herstelt zodra de dienst is hersteld. De meeste oorzaken van aanhoudende dienstonderbrekingen vereisen tussenkomst van de beheerder om de dienst te herstellen.',
  'Object view policy can not be unlocked because this object does not have a mutable view policy.' => 'Het objectweergavebeleid kan niet worden ontgrendeld omdat dit object geen wijzigbaar weergavebeleid heeft.',
  'Select Character Encoding' => 'Selecteer tekencodering',
  'Select Syntax Highlighting' => 'Selecteer syntaxismarkering',
  'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is %s in read-only mode??!" using your very loudest outside voice.' => 'De alleen-lezenmodus is door een menselijke beheerder ingeschakeld. U kunt meer informatie krijgen over de reden hiervoor door met uw bureaustoel weg te rollen en luidkeels te roepen: "Hé! Waarom staat %s in de alleen-lezenmodus?!"',
  'DATA WILL BE PERMANENTLY DESTROYED' => 'DE GEGEVENS WORDEN PERMANENT VERNIETIGD',
  'Choose Highlighting' => 'Kies markering',
  'Advanced/Developer...' => 'Gevorderd/Ontwikkelaar...',
  'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, this server will recover momentarily.' => 'Dit kan gebeuren als er een tijdelijke netwerkafwijking aan de serverzijde optreedt, zoals kosmische straling of spookachtige verschijningen. Als deze storing is veroorzaakt door een tijdelijke dienstonderbreking, herstelt de server zich binnen enkele ogenblikken.',
  'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'De objecten worden permanent vernietigd. Deze bewerking kan niet ongedaan gemaakt worden en de gegevens kunnen niet meer worden hersteld, tenzij u externe back-ups maakt.',
  'Aborted, your objects are safe.' => 'Afgebroken; uw objecten zijn veilig.',
  'No Object URI' => 'Geen object-URI',
  'As an Administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'Als beheerder kunt u statusinformatie bekijken via het "%s"-controlepaneel. Dit kan u meer inzicht geven in de huidige stand van zaken.',
  'Show a log of permanently destroyed objects.' => 'Een logboek weergeven van permanent vernietigde objecten.',
  'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'De cache-engine-uitbreiding "%s" heeft een object (van klasse "%s") geretourneerd zonder PHID.',
  'System' => 'Systeem',
  'You are performing too many actions too quickly.' => 'U voert te veel handelingen te snel uit.',
  'Choose a text encoding to use.' => 'Kies een tekstcodering die u wilt gebruiken.',
  'These %s object(s) will be destroyed forever:' => 'Deze %s objecten worden voorgoed vernietigd:',
  'Select Document Engine' => 'Selecteer documentengine',
  'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'In de alleen-lezenmodus kunt u bestaande informatie lezen, maar u kunt geen objecten bewerken of nieuwe objecten aanmaken totdat deze modus is uitgeschakeld.',
  'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Deze modus kan worden gebruikt voor tijdelijk onderhoud, het testen van configuraties of het permanent archiveren van een installatie.',
  'This server is currently configured with no writable ("master") database, so it can not write new information anywhere. This server will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Deze server is momenteel geconfigureerd zonder beschrijfbare (primaire) database, waardoor er nergens nieuwe informatie kan worden opgeslagen. Deze server draait in alleen-lezenmodus totdat een beheerder deze opnieuw configureert met een beschrijfbare database.',
  'DELETING OBJECTS OFTEN BREAKS THINGS' => 'OBJECTEN VERWIJDEREN MAAKT VAAK DINGEN STUK',
  'View Hovercard' => 'Dialoogscherm bekijken',
  'Cache engine extension "%s" did not return a list of linked objects.' => 'De cache-engine-uitbreiding "%s" heeft geen lijst met gekoppelde objecten geretourneerd.',
  'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Dit gebeurt meestal wanneer een beheerder actief bezig is met het oplossen van een tijdelijk configuratie- of implementatieprobleem.',
  '%d / minute' => '%d / minuut',
  'Destroy objects without prompting.' => 'Objecten vernietigen zonder bevestiging.',
  'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'De maximaal toegestane snelheid voor deze handeling is %s. U voert handelinen uit met een snelheid van %s.',
  'Are you absolutely certain you want to destroy these %s object(s)?' => 'Weet u absoluut zeker dat u deze %s objecten vernietigen?',
  'Administrative Read-Only Mode' => 'Administratieve alleen-lezenmodus',
  'Object edit policy can not be unlocked because this object does not have a mutable edit policy.' => 'Het bewerkingsbeleid voor dit object kan niet worden ontgrendeld omdat het geen wijzigbaar bewerkingsbeleid heeft.',
  '%d / second' => '%d / seconde',
  'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Hoewel dit het gevolg kan zijn van een verkeerde configuratie of een operationele fout, is dit ook de situatie waarin u terechtkomt als een meteoriet onlangs een datacenter heeft verwoest.',
  'Object "%s" exists, but does not have a URI to redirect to.' => 'Object "%s" bestaat, maar heeft geen URI waarnaar doorverwezen kan worden.',
  'Specify one or more objects to destroy.' => 'Geef een of meer objecten op die vernietigd moeten worden.',
  'Choose Engine' => 'Kies engine',
);
  }

}
