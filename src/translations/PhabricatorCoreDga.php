<?php

final class PhabricatorCoreDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Database "%s" is unknown. This script can only dump databases known to the current version of this software. Valid databases are: %s.' => 'Dɛtabeesi "%s" e la bombabannaa. A pɛllɛ ŋa na baŋ bare la dɛtabeesi yoŋ a pampana vɛɛseŋ ko a sɔtwaɛ ŋa. Dɛtabeesi tonnee la: %s.',
      'The callsign of the repository.' => 'A boɔloo bondemanne kɔndoge.',
      'You are trying to save some data to permanent storage, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => 'Fo boɔrɔ ka fo seevi daata mine pamente emmo zie, kyɛ a sɔroo na a saseɛ miri naŋ sɔre paale la kooken mine naŋ ba tu. Leɛ loodi a paagyi kyɛ la enyɛ. Fo naŋ boɔrɔ ka fo meele a fo kɔɔkyiri.',
      'This server is currently in read-only mode. Use --force to override this mode.' => 'A sɛɛva ŋa be la pampana kanne-yoŋ moodi. Toŋ ne -- fere ka zo-pare a moodi.',
      'This server is configured as "%s", but you are using the domain name "%s" to access a page which is trying to set a cookie. Access this service on the configured primary domain or a configured alternate domain. Cookies will not be set on other domains for security reasons.' => 'A tontona leɛre la aŋa "%s" kyɛ fo derɛ la yuori kaŋa "%s" ka fooŋ naŋ nyɛ a gampɛle ŋa see ka fo sage kyɛ maale boma mine biŋ gu. Kpɛ a tontoŋ yiri poɔ ka o e a yel dɛŋdɛŋ soba. A tontoŋ bone na koŋ baŋ e yel zaa ka fo baŋ ne a.',
      'This server thinks you are using %s, but your client is convinced that it is using %s. This is a serious misconfiguration with subtle, but significant, consequences.' => 'A tontona teɔrɔ ka fo derɔ la %s, kyɛ areko neɛ soba sage la ka fo dirɔ la %s.
    A e LW yɛlɛ naŋ na baŋ wanne yɛlɛ.',
      'September' => 'Sɛtɛmbare',
      'This server is in read-only mode.' => 'A sɛɛva ŋa be la kanne-yoŋ moodi',
      'This server is in read-only mode (major interruption).' => 'A sɛɛva be la kanne-yoŋ moodi (daamo meŋɛ).',
      'Before running storage upgrades, you should take down the web interface and stop any running daemons (you can disable this warning with %s).' => 'Sɛre ka fo na toŋ ne stɔɔragye tage o do,aseŋ ka fo de a wɛb niŋe ka o sigi ane tɔge bonzaa naŋ kyɛnɛ (fo na baŋ ŋmaa la a kpaambo ŋa ne %s).',
      'No permission to run "SHOW SLAVE STATUS". Grant this user "REPLICATION CLIENT" permission to allow this server to monitor replica health.' => 'Sori ba kyebee a naŋ sage a toma \'\'SITAATU NEƐ\'\' sɔroo ka sage a sɛɛva ka o kaara laafeɛ.',
      'If you are developing %s, these errors usually indicate that your schema specifications do not agree with the schemata your code actually builds.' => 'Ka fooŋ wa maala %s, a ɛrɔɔ sere maŋ eŋ la a sikyiima wulluu zie ta sage neŋ a sikyiima a fo koodi maŋ soŋ mɛ la.',
      'Set a \'%s\' in your configuration!' => 'Maale a \'%s\' a fo leɛroo poɔ!',
      'Flood the queue with test tasks. This command is intended for use during development and debugging.' => 'Paale a zie ŋa ne yɛlɛ. Yel-fere eebo naŋ kyaare ne a yɛlɛ maaloŋ ane yɛlɛ maaloŋ',
      'This server is not configured to serve cluster requests. Set `cluster.addresses` in the configuration to whitelist cluster hosts before sending requests that use a cluster authentication mechanism.' => 'A sɛɛva ŋa ba konfigere a naŋ toŋ lammo sɔroo. Maale sɔroo. bammo ziiri\' a konfigerese a yelpeɛle lammo soobo kyɛ baŋ de tere a sɔroo naŋ tona neŋ lammo sage deɛbo gbɛbogiri.',
      'Unexpected object type provided as `action` - %s' => 'Bomepɔgere ba bagenaa pare maŋ tere  la \'eebo\'-%s',
      'Data can not be exported to Excel because the PHPExcel library is not
    installed. This software component is required to create Excel files.
    You can install PHPExcel from GitHub:
    > https://github.com/PHPOffice/PHPExcel
    Briefly:
      - Clone that repository somewhere on the sever
        (like `/path/to/example/PHPExcel`).
      - Update your PHP `%s` setting (in `php.ini`) to include the PHPExcel
        `Classes` directory (like `/path/to/example/PHPExcel/Classes`).' => 'Daata koŋ toɔŋ gaa ɛzaal bonso a PHPExcel laabere ba innitɔɔle. A saseɔ miri ŋa boɔrɔ la ka maale ɛzaal yineŋ GitHub
    :
    > https://github.com/PHPOffice/PHPExcel
    Ŋmaa lɛ:
      - pɔge a leɛ bimmo a sɛɛva zie kaŋa
        (Like `/path/to/example/PHPExcel`).
      - zɛge PHP `%s` sɛtere (a `php.ini`) a paale a PHPExcel
        `klaasi` kyaaroo (teseŋ `/path/to/example/PHPExcel/Classes`).',
      'November' => 'Novembare',
      'Some of these errors are caused by access control problems. The user you are connecting with does not have permission to see all of the database or tables that this software uses. You need to GRANT the user more permission, or use a different user.' => 'A sammo ama mine yi la asɛɛse guubu yɛlɛ. A daana fo naŋ tɔnnɔ neŋ ba taa sori a naŋ nyɛ a daatabaase kyɛ bee a taabole a saseɛ miri ŋa naŋ tɔnɔ neŋ. A seŋ ka fo tere sori ko a daana vuo, bee tonne daana kaŋa.',
      'List databases.' => 'Tere databaasere.',
      'This server is configured with multiple master databases, but master "%s" is missing a "partition" configuration key to define application partitioning.' => 'A sɛɛva e la konfigere neŋ daata masa yɔgaa, kyɛ masa \'\'%s\'\' bɔrɛɛ \'\' patisiri\'\'konfigere piiŋ a manne wuli boɔbo patisiri.',
      'March' => 'Maakye',
      'Query class ("%s") did not return the correct type of object from "newResultObject()" (expected a subclass of "PhabricatorLiskDAO", found "%s"). Return an object of the expected type (this is common), or implement a custom "loadPage()" method (this is unusual in modern code).' => 'Soore Karendie ("%s") ba leɛ tere a ɔbgyɛt parɛɛ toraa yi "newResultObject()" (ŋmaara la "PhabricatorLiskDAO", karendebile naŋ be "%s"). Leɛ a ɔbgyɛte ŋmaaraa paree tere (a ŋaa porɛɛ la), bee empliment yelbegere "loadpage()" sobi-bulo (aŋaa ba tu mɔɔdiŋ koodi poɔ).',
      'If you are not developing %s itself, report this issue to the upstream.' => 'Ka fooŋ ba maala a %s meŋɛ, de a yɛlɛ ko a maale maalba.',
      'Grant Permission' => 'Tere sori',
      'S|M|T|W|T|F|S' => 'S
    |M|T|W|T|F|S',
      'February' => 'Fɛboɔre',
      'Remarkup text.' => 'Iri-makap sɛgere',
      'December' => 'Desagbare',
      'Extensions' => 'Tagduloo',
      'Content source type "%s" is unknown.' => 'Yelzu yizie ŋmaaroŋ "%s" ba banne a.',
      'August' => 'Ɔɔgere',
      '%s changed the status of %s from %s to %s.' => '%s leɛre la a waaloŋ ko %s yineŋ %s te tɔ %s.',
      'Unable to establish a write-mode connection (to application database "%s") because this server is in read-only mode. Whatever you are trying to do does not function correctly in read-only mode.' => 'Ba toɔŋ maale a sʋgere moodi gyɔɔnoo( a apulikase daatabaasi \'\'%s\'\') bonso a sɛɛva ŋa be la moodi yoŋ. Lɛ zaa fo boɔrɔ ka fo e ba tɔnnɔ soŋ a kannoo yoŋ moodi.',
      'Pause' => 'Are a be',
      'Configure' => 'Leɛre',
      'January' => 'Gyɛnoɔre',
      'Welcome to %s!' => 'Neŋ fo waabo ko %s!',
      'You have an old version of MySQL (older than 5.5) which does not support the utf8mb4 character set. We strongly recommend upgrading to 5.5 or newer.
    If you apply adjustments now and later update MySQL to 5.5 or newer, you\'ll need to apply adjustments again (and they will take a long time).
    You can exit this workflow, update MySQL now, and then run this workflow again. This is recommended, but may cause a lot of downtime right now.
    You can exit this workflow, continue using this software without applying adjustments, update MySQL at a later date, and then run this workflow again. This is also a good approach, and will let you delay downtime until later.
    You can proceed with this workflow, and then optionally update MySQL at a later date. After you do, you\'ll need to apply adjustments again.
    For more information, see "Managing Storage Adjustments" in the documentation.' => 'Fo taa la MySQL vɛɛseŋ koroo (naŋ kore gaŋ 5.5) naŋ ba teɛ a utf8mb4 waaloŋ sɛte. Te na yeli ka zɛge o do eŋ 5.5 bee bompaalaa.
    Ka foŋ paale adgyɛsement pampana kyɛ zɛge MySQL do eŋ 5.5 a puoriŋ bee bompaalaa, a na seŋ ka fo la paale adgyɛsement la maale (lɛ na a na di la wagere yaga).
    Fo na baŋ bare la lɛ a toma ŋa naŋ kyɛnɛ, zɛge MySQL do pampana, kyɛ la leɛ e a toma ŋa la maale. Ŋa la a kaairuu, kyɛ na baŋ wane puori leɛbo pampana ŋa zaa.
    Fo na baŋ bare la lɛ a toma ŋa naŋ kyɛnɛ, can exit this workflow, kyoge tona ne a sɔtwaɛ ŋa ka fo ba paale adgyɛsement, zɛge MySQL do a baaroo puori, kyɛ pãã e a toma ŋa la maale. Ŋa meŋ e la da-soŋ, o na vɛŋ la ka fo di wagere te ta a puoriŋ.
    Fo na baŋ gɛrɛ la niŋe ne a toma kyɛmbo ŋa, kyɛ pãã e meŋɛ zɛge duobo MySQL a puoriŋ. Ka foŋ wa e, a na seŋ ka fo paale adgyɛsement la maale.
    Ka foŋ wa boɔrɔ yɛlɛ yaga, nyɛ "Managyiŋ stɔɔragye adgyɛsemet" a sɛgere poɔ.',
      'SUCCESS' => 'Susɛɛse',
      'October' => 'Ɔɔtoorebare',
      'This server is in read-only mode (unreachable master).' => 'A sɛva ŋa e la kannoo yoŋ waaloŋ (koŋ baŋ pɔge Masa).',
      'Attempting to compare a password saved with the "%s" hash. No such hasher is known.' => 'Boɔraa ka fo kaa fo meŋɛ gu bonne a biŋ o "%s" faŋa. Anaŋ na faŋa yɛlɛ ba kyɛ kyɛ.',
      'The PHID of the repository.' => 'A PHID a leɛ emmo.',
      '[%s] %s' => '[%s] %s',
      'April' => 'Kyapiril',
      'Download' => 'Daŋloodi',
      'June' => 'Gyuuni',
      'No Builds' => 'Meɛbo kye',
      'Data can not be exported to Excel because the "zip" PHP extension is not
    installed. Consult the setup issue in the Config application for guidance on
    installing the extension.' => 'Data koŋ baŋ yi a yelbie daga poɔ bonso a "zip" PHP tag-gaa tooro ba eŋ sere. Kpɛ kaa a gampɛle poɔ nyɛ ka o naŋ ba Leɛre soŋ see ka fo bɔ sommo.',
      'Generate a new quickstart database dump. This command is mostly useful for internal development.' => 'Yineŋ a yel-paala weoŋ a database dump poɔ. A gɔɔwuloo ŋa taa la tɔna ko a maaloŋ.',
      'Database "%s" is specified more than once. Specify each database at most once.' => 'Databaasi \'\'%s\'\' la wulli gaŋ yine. Wuli databaasi boyenaa yoŋ.',
      '%s has invited you to join %s.' => '%s boɔle fo la ka fo wa paale %s.',
      'This service is configured in cluster mode and the address this request was received on ("%s") is not whitelisted as a cluster address.' => 'A savisi ŋa konfigere la a lammo moodi aneŋ a bammo sɔroo da nyɛɛ la yineŋ ("%s") ba wɔɛ-liisi a e lammo bammo.',
      'Dump only tables in the named database (or databases, if the flag is repeated). Specify database names without the namespace prefix (that is: use "differential", not "phabricator_differential").' => 'Bare tabul yoŋ a yoe dɛtabeesi eŋɛ (bee dɛtabeesiri, ka a eeboŋ la leɛ e) wuli dɛtabeesi yoe ka vo-ŋmaara kyebe (ana la: de "tɛɛtɛɛloŋ", ka a ta e "wuoro_tɛɛtɛɛloŋ").',
      '%s attached %s file(s): %s.' => '%s paale %s faale(ba): %s',
      'You have surplus schemata (extra tables or columns which this software does not expect). For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'Fo taa la sikyiima guure("tabol kpaaraa bee kɔlɔm a saseɛ miri naŋ kyɛlle o soŋ). A yi yɛlɛ kyaare neŋ leɛmaaloo a yɛlɛ, nyɛ a \'\'guubo sikyiima\'\' lamgiri naŋ be a managyi sitorogyi yɔllɔɔ\'\' atikili a dokumetere.',
      'May' => 'Maane',
      'This service is configured to operate in cluster mode, but %s is not defined in the request context. Your webserver configuration needs to forward %s to PHP so the software can reject requests received on external interfaces.' => 'A toma leɛrɛɛ na baŋ toŋ ne feroo kaŋa kyɛ %s ba wuli a yɛlɛ e zie. A webserver leɛrɛɛ see ka a de gaa %s te ta PHP be la a software naŋ baŋ zagre la bone zaa naŋ na kpɛ o poɔ.',
      'This server is configured in cluster mode, with multiple database hosts. Use "--host" to specify which host you want to operate on.' => 'A sɛɛva be la kilasita moodi, aneŋ databaasi gyamaa taabo. Toŋ ne \'\'--taabo\'\' a Wulli a taabo fo naŋ boɔrɔ ka fo toŋ ne.',
      'July' => 'Gyɔlaai',
      'Are you completely sure you really want to permanently destroy all storage for %s data on host "%s"? This operation can not be undone and your data will not be recoverable if you proceed.' => 'Fo saŋɛɛ la fo zaa ka fo sereŋ boɔrɔ ka fo saŋe a sitoregyi a %s daata o taabo \'\'%s\'\'? A yuobo koŋ toɔŋ bare ka fo daata meŋ koŋ nyɛ nyaabo ka fooŋ gɛrɛ nimitɔɔre.',
      'This server is in read-only mode (no writable database is configured).' => 'A sɛɛva be la kanne-yoŋ moodi (daatabaasi sɛgere zaa ba e kofigere).',
      'Referenced' => 'Sommo yizie',
      'A JSON-encoded object.' => 'A JSON-bonpɔgere.',
      'Install' => 'De-emmo',
      'Some of these errors are caused by surplus schemata (extra tables or columns which this software does not expect). These are not serious. For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'A ɛrɔɔ ama mine yi la sikyiima kpaare(taabol mine bee kɔlɔm a saseɛ miri ŋa naŋ ba boɔrɔ). Ama ba e nimizeɛ. Yɛlɛ kyaare neŋ a maaloo, nyɛ a \'\' kpaabo sikiima\'\' zie a \'\' managyin bimmo zɛgebo\'\' atikili dokumetere.',
    );
  }

}
