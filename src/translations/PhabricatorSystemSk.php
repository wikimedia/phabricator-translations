<?php

final class PhabricatorSystemSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'An Administrator has placed this server into read-only mode.' => 'Správca prepol tento server do režimu iba na čítanie.',
  'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'V tomto systéme nie je nainštalované rozšírenie „%s“, takže kódovania znakov nie sú podporované. Podporu povolíte inštaláciou „%s“.',
  'This mode is active because it is enabled in the configuration option "%s".' => 'Tento režim je aktívny, pretože je zapnutý v konfiguračnej možnosti „%s“.',
  'Panic!' => 'Panika!',
  'View Handle' => 'Zobraziť ovládač',
  'No Writable Database' => 'Žiadna zapisovateľná databáza',
  'Destroying %s **%s**...
' => 'Ničí sa %s **%s**...',
  'This server has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Tento server pri spracúvaní nedávnych požiadaviek opakovane nedokázal dosiahnuť zapisovateľnú („master“) databázu.',
  'Object "%s" can not be destroyed (it does not implement %s).' => 'Objekt „%s“ nie je možné zničiť (neimplementuje %s).',
  'No Encoding Support' => 'Žiadna podpora kódovania',
  'No such object "%s" exists!' => 'Objekt „%s“ neexistuje!',
  'This server was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Tento server sa počas spracovania tejto požiadavky nedokázal pripojiť k zapisovateľnej („master“) databáze a automaticky prešiel do režimu iba na čítanie.',
  'Severed From Master' => 'Odpojené od databázy master',
  'Cluster Database Status' => 'Stav klastrovej databázy',
  'Engine: Destruction' => 'Nástroj: ničenie',
  'Object ("%s") does not implement interface "%s", so this type of object can not be unlocked.' => 'Objekt („%s“) neimplementuje rozhranie „%s“, takže tento typ objektu nie je možné odomknúť.',
  'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Táto požiadavka bola obslúžená z repliky databázy. Repliky môžu zaostávať za databázou master, takže veľmi nedávna aktivita sa v používateľskom rozhraní nemusí prejaviť. Tieto údaje budú obnovené, ak sa obnoví databáza master, no mohli byť stratené, ak sa databáza master zmenila na kopu popola.',
  'Permanently destroy objects.' => 'Natrvalo zničiť objekty.',
  'Choose a syntax highlighting to use.' => 'Vyberte zvýrazňovanie syntaxe, ktoré sa má použiť.',
  '%d / hour' => '%d/hodina',
  'Rate Limiting Actions' => 'Obmedzovanie frekvencie akcií',
  'Highlighting' => 'Zvýrazňovanie',
  'Unable to Reach Master' => 'Databáza master je nedostupná',
  'View As' => 'Zobraziť ako',
  'Permanently destroyed %s object(s).' => array(
    'Natrvalo bol zničený %s objekt.',
    'Natrvalo boli zničené %s objekty.',
    'Natrvalo bolo zničených %s objektov.',
  ),
  'Choose Encoding' => 'Vybrať kódovanie',
  'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.

These tattered edges are an expected consequence of destroying objects, and the upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'Ničenie objektov môže spôsobiť, že súvisiace objekty prestanú fungovať, a môže zanechať roztrúsené odkazy na objekty, ktoré už neexistujú. Vo väčšine prípadov je oveľa lepšie objekty namiesto zničenia zakázať alebo archivovať. Toto riziko je najväčšie pri odstraňovaní zložitých alebo silno prepojených objektov, ako sú repozitáre, projekty a používatelia.

Tieto rozstrapkané okraje sú očakávaným dôsledkom ničenia objektov a upstream vám ich nepomôže opraviť. Dôrazne odporúčame objekty namiesto toho zakázať alebo archivovať.',
  'IMPORTANT' => 'DÔLEŽITÉ',
  'Quite Unsettling' => 'Dosť znepokojujúce',
  'Object owner can not be unlocked: the unlocking engine ("%s") for this object does not implement an owner unlocking mechanism.' => 'Vlastníka objektu nie je možné odomknúť: odomykací nástroj („%s“) pre tento objekt neimplementuje mechanizmus odomykania vlastníka.',
  'Choose a document engine to use.' => 'Vyberte nástroj na dokumenty, ktorý sa má použiť.',
  'Destruction Logs' => 'Záznamy o ničení',
  'This likely indicates a severe misconfiguration or major service interruption.' => 'Pravdepodobne to znamená vážnu nesprávnu konfiguráciu alebo veľký výpadok služby.',
  'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, this server will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Môže to tiež znamenať, že došlo k závažnejšiemu zlyhaniu. Ak sa toto prerušenie nevyrieši samo, tento server čoskoro zistí pretrvávajúci výpadok a prejde do režimu iba na čítanie, kým sa problém nevyrieši.',
  'Destroying objects...' => 'Objekty sa ničia...',
  'View Affected Path Index' => 'Zobraziť index ovplyvnených ciest',
  'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Tento režim je aktívny, pretože žiadna databáza nemá rolu „%s“ v konfiguračnej možnosti „%s“.',
  'This server will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Tento server bude pripojenie pravidelne skúšať znova a obnoví sa, keď sa služba obnoví. Väčšina príčin pretrvávajúceho výpadku služby si na obnovenie služby vyžiada zásah správcu.',
  'Object view policy can not be unlocked because this object does not have a mutable view policy.' => 'Zásadu zobrazenia objektu nie je možné odomknúť, pretože tento objekt nemá meniteľnú zásadu zobrazenia.',
  'Select Character Encoding' => 'Vybrať kódovanie znakov',
  'Select Syntax Highlighting' => 'Vybrať zvýrazňovanie syntaxe',
  'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is %s in read-only mode??!" using your very loudest outside voice.' => 'Režim iba na čítanie zapol výslovným zásahom človek – správca, takže viac informácií o tom, prečo bol zapnutý, získate tak, že sa odkotúľate na stoličke od stola a čo najhlasnejším vonkajším hlasom zakričíte: „Hej! Prečo je %s v režime iba na čítanie??!“',
  'DATA WILL BE PERMANENTLY DESTROYED' => 'ÚDAJE BUDÚ NATRVALO ZNIČENÉ',
  'Choose Highlighting' => 'Vybrať zvýrazňovanie',
  'View full transaction history' => 'Zobraziť úplnú históriu transakcií',
  'Advanced/Developer...' => 'Rozšírené/vývojárske...',
  'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, this server will recover momentarily.' => 'Môže sa to stať, ak na strane servera nastane dočasná sieťová anomália, napríklad kozmické žiarenie alebo strašidelní duchovia. Ak toto zlyhanie spôsobil prechodný výpadok služby, tento server sa o chvíľu obnoví.',
  'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Objekty budú natrvalo zničené. Túto operáciu nie je možné vrátiť späť a tieto údaje sa už nedajú získať, pokiaľ si neudržiavate externé zálohy.',
  'Aborted, your objects are safe.' => 'Prerušené, vaše objekty sú v bezpečí.',
  'No Object URI' => 'Žiadne URI objektu',
  'As an Administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'Ako správca môžete skontrolovať stavové informácie na ovládacom paneli %s. Môže to poskytnúť viac informácií o aktuálnom stave vecí.',
  'Show a log of permanently destroyed objects.' => 'Zobraziť záznam natrvalo zničených objektov.',
  'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'Rozšírenie nástroja vyrovnávacej pamäte „%s“ vrátilo objekt (triedy „%s“) bez PHID.',
  'System' => 'Systém',
  'You are performing too many actions too quickly.' => 'Vykonávate príliš veľa akcií príliš rýchlo.',
  'Choose a text encoding to use.' => 'Vyberte kódovanie textu, ktoré sa má použiť.',
  'These %s object(s) will be destroyed forever:' => array(
    'Tento objekt bude navždy zničený:',
    'Tieto objekty budú navždy zničené:',
  ),
  'Select Document Engine' => 'Vybrať nástroj na dokumenty',
  'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'V režime iba na čítanie si môžete existujúce informácie prezerať, ale kým nebude tento režim vypnutý, nebudete môcť upravovať objekty ani vytvárať nové.',
  'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Tento režim sa dá použiť na vykonanie dočasnej údržby, otestovanie konfigurácie alebo trvalé archivovanie inštalácie.',
  'This server is currently configured with no writable ("master") database, so it can not write new information anywhere. This server will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Tento server je momentálne nakonfigurovaný bez zapisovateľnej („master“) databázy, takže nemôže nikam zapisovať nové informácie. Tento server bude bežať v režime iba na čítanie, kým ho správca znova nenakonfiguruje so zapisovateľnou databázou.',
  'DELETING OBJECTS OFTEN BREAKS THINGS' => 'ODSTRAŇOVANIE OBJEKTOV ČASTO NIEČO POKAZÍ',
  'View Hovercard' => 'Zobraziť náhľadovú kartu',
  'Cache engine extension "%s" did not return a list of linked objects.' => 'Rozšírenie nástroja vyrovnávacej pamäte „%s“ nevrátilo zoznam prepojených objektov.',
  'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Zvyčajne k tomu dochádza, keď správca aktívne pracuje na oprave dočasného problému s konfiguráciou alebo nasadením.',
  '%d / minute' => '%d/minúta',
  'Destroy objects without prompting.' => 'Zničiť objekty bez pýtania sa.',
  'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'Maximálna povolená frekvencia pre túto akciu je %s. Vy vykonávate akcie s frekvenciou %s.',
  'Are you absolutely certain you want to destroy these %s object(s)?' => array(
    'Ste si úplne istí, že chcete zničiť tento objekt?',
    'Ste si úplne istí, že chcete zničiť tieto objekty?',
  ),
  'Administrative Read-Only Mode' => 'Správcovský režim iba na čítanie',
  'Object edit policy can not be unlocked because this object does not have a mutable edit policy.' => 'Zásadu úpravy objektu nie je možné odomknúť, pretože tento objekt nemá meniteľnú zásadu úpravy.',
  '%d / second' => '%d/sekunda',
  'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Hoci to môže byť dôsledok nesprávnej konfigurácie alebo prevádzkovej chyby, do tohto stavu sa dostanete aj vtedy, ak nedávno meteorit zrovnal so zemou dátové centrum.',
  'Object "%s" exists, but does not have a URI to redirect to.' => 'Objekt „%s“ existuje, ale nemá URI, na ktoré by sa dalo presmerovať.',
  'Specify one or more objects to destroy.' => 'Zadajte jeden alebo viac objektov na zničenie.',
  'Choose Engine' => 'Vybrať nástroj',
);
  }

}
