<?php

final class PhabricatorCoreHa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ha';
  }

  protected function getTranslations() {
    return array(
      'Database "%s" is unknown. This script can only dump databases known to the current version of this software. Valid databases are: %s.' => 'Database" %s " ba a sani ba. Wannan rubutun na iya zubar da bayanan da aka sani kawai ga sigar wannan software na yanzu. Ingantattun bayanan bayanai sune: %s .',
      'The callsign of the repository.' => 'Alamar kira ta wurin ajiya.',
      'You are trying to save some data to permanent storage, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => 'Kuna ƙoƙarin adana wasu bayanai zuwa ma\'ajiya ta dindindin, amma buƙatar mai bincikenku ta haɗa da alamar da ba daidai ba. Sake shigar da shafin kuma a sake gwadawa. Kuna iya buƙatar share kukis ɗin ku.',
      'This server is currently in read-only mode. Use --force to override this mode.' => 'Wannan uwar garken a halin yanzu tana cikin yanayin karantawa kawai. Yi amfani da --ƙarfi don ƙetare wannan yanayin.',
      'This server is configured as "%s", but you are using the domain name "%s" to access a page which is trying to set a cookie. Access this service on the configured primary domain or a configured alternate domain. Cookies will not be set on other domains for security reasons.' => 'An saita wannan uwar garken azaman " %s ", amma kuna amfani da sunan yankin " %s " don samun damar wani shafi wanda ke ƙoƙarin saita kuki. Samun dama ga wannan sabis ɗin akan ƙayyadaddun yanki na farko ko wani yanki da aka saita. Ba za a saita kukis akan wasu wuraren ba saboda dalilai na tsaro.',
      'This server thinks you are using %s, but your client is convinced that it is using %s. This is a serious misconfiguration with subtle, but significant, consequences.' => 'Wannan uwar garken yana tsammanin kuna amfani da %s , amma abokin cinikin ku ya gamsu cewa yana amfani da %s . Wannan babban kuskure ne tare da dabara, amma mahimmanci, sakamako.',
      'September' => 'Satumba',
      'This server is in read-only mode.' => 'Wannan uwar garken yana cikin yanayin karantawa kawai.',
      'This server is in read-only mode (major interruption).' => 'Wannan uwar garken yana cikin yanayin karatu kawai (babban katsewa).',
      'Before running storage upgrades, you should take down the web interface and stop any running daemons (you can disable this warning with %s).' => 'Kafin gudanar da haɓakar ajiya, ya kamata ku saukar da ƙirar yanar gizo kuma ku dakatar da duk wani daemons mai gudana (za ku iya kashe wannan gargadi tare da $ 1).',
      'No permission to run "SHOW SLAVE STATUS". Grant this user "REPLICATION CLIENT" permission to allow this server to monitor replica health.' => 'Babu izini don gudanar da "NUNA MATSAYIN BAYI". Ba wa wannan mai amfani "CIN KWALLIYA" izini don ba da damar wannan uwar garken don saka idanu akan lafiyar kwafi.',
      'If you are developing %s, these errors usually indicate that your schema specifications do not agree with the schemata your code actually builds.' => 'Idan kuna haɓaka %s , waɗannan kurakuran yawanci suna nuna cewa ƙayyadaddun ƙirar ku ba su yarda da tsarin da lambar ku ke ginawa ba.',
      'Set a \'%s\' in your configuration!' => 'Saita \'%s\' a cikin tsarinka!',
      'Flood the queue with test tasks. This command is intended for use during development and debugging.' => 'Rufe layin tare da ayyukan gwaji. Wannan umarnin an yi amfani da shi yayin ci gaba da debugging.',
      'This server is not configured to serve cluster requests. Set `cluster.addresses` in the configuration to whitelist cluster hosts before sending requests that use a cluster authentication mechanism.' => 'Wannan uwar garken ba a daidaita shi don ba da buƙatun rukuni ba. Saita adiresoshin da ke cikin saitin zuwa ga masu ba da gudummawa na fararen fata kafin aika buƙatun da ke amfani da hanyar tabbatar da tarin.',
      'Unexpected object type provided as `action` - %s' => 'Nau\'in abin da ba a zato an bayar da shi azaman \'aiki\' - %s',
      'Data can not be exported to Excel because the PHPExcel library is not
    installed. This software component is required to create Excel files.
    You can install PHPExcel from GitHub:
    > https://github.com/PHPOffice/PHPExcel
    Briefly:
      - Clone that repository somewhere on the sever
        (like `/path/to/example/PHPExcel`).
      - Update your PHP `%s` setting (in `php.ini`) to include the PHPExcel
        `Classes` directory (like `/path/to/example/PHPExcel/Classes`).' => 'Ba za a iya fitar da bayanai zuwa Excel ba saboda ba a shigar da ɗakin karatu na PHPExcel ba. Ana buƙatar wannan ɓangaren software don ƙirƙirar fayilolin Excel.
     Kuna iya shigar da PHPExcel daga GitHub:
    > https://github.com/PHPOffice/PHPExcel
    A takaice:! N!
     - Clone wancan ma\'ajiyar wani wuri a kan sever! N! (kamar `/hanya/zuwa/misali/PHPExcel`).
     - Sabunta saitunan PHP ɗinku ` %s (a cikin `php.ini`) don haɗawa da PHPExcel
     Littafin \'classes\' (kamar\'/hanyar/zuwa/misali/PHPExcel/Class\').',
      'November' => 'Nuwamba',
      'Some of these errors are caused by access control problems. The user you are connecting with does not have permission to see all of the database or tables that this software uses. You need to GRANT the user more permission, or use a different user.' => 'Wasu daga cikin waɗannan kurakuran ana haifar da su ta hanyar matsalolin sarrafa shiga. Mai amfani da kuke haɗawa da shi bashi da izinin ganin duk bayanan bayanai ko teburi waɗanda wannan software ke amfani da su. Kuna buƙatar ba wa mai amfani ƙarin izini, ko amfani da wani mai amfani daban.',
      'List databases.' => 'Jerin bayanan bayanai.',
      'This server is configured with multiple master databases, but master "%s" is missing a "partition" configuration key to define application partitioning.' => 'Wannan uwar garken an saita shi tare da manyan bayanan bayanai da yawa, amma ubangiji "%s" ya rasa maɓallin daidaitawa "rabuwa" don bayyana rabuwa da aikace-aikace.',
      'March' => 'Maris',
      'Query class ("%s") did not return the correct type of object from "newResultObject()" (expected a subclass of "PhabricatorLiskDAO", found "%s"). Return an object of the expected type (this is common), or implement a custom "loadPage()" method (this is unusual in modern code).' => 'Ajin tambaya (" %s ") bai dawo da madaidaicin nau\'in abu daga "newResultObject()" (wanda ake tsammanin wani yanki na "PhabricatorLiskDAO", ya samo " %s "). Koma wani abu na nau\'in da ake tsammani (wannan na kowa ne), ko aiwatar da hanyar "loadPage()" ta al\'ada (wannan sabon abu ne a lambar zamani).',
      'If you are not developing %s itself, report this issue to the upstream.' => 'Idan ba ku haɓaka %s kanta ba, bayar da rahoton wannan batun zuwa sama.',
      'phabricator/' => 'mai rubutun ra\'ayi /',
      'Grant Permission' => 'Bada Izinin',
      'S|M|T|W|T|F|S' => 'S|M|T|W|T|F|S',
      'February' => 'Fabrairu',
      'Remarkup text.' => 'Rubutun tsokaci',
      'December' => 'Disamba',
      'Extensions' => 'Fadadawa',
      'Content source type "%s" is unknown.' => 'Nau\'in tushen abun ciki " %s " ba a sani ba.',
      'August' => 'Agusta',
      '%s changed the status of %s from %s to %s.' => '%s ya canza matsayin %s daga %s zuwa %s .',
      'Unable to establish a write-mode connection (to application database "%s") because this server is in read-only mode. Whatever you are trying to do does not function correctly in read-only mode.' => 'Ba zai iya kafa haɗin rubutu ba (zuwa bayanan aikace-aikacen "%s") saboda wannan uwar garken yana cikin yanayin karatu kawai. Duk abin da kake ƙoƙarin yi ba ya aiki daidai a cikin yanayin karatu kawai.',
      'arcanist/' => 'arcanist',
      'Pause' => 'Dakata',
      'Configure' => 'Sanya',
      'January' => 'Janairu',
      'Welcome to %s!' => 'Barka da zuwa %s !',
      'You have an old version of MySQL (older than 5.5) which does not support the utf8mb4 character set. We strongly recommend upgrading to 5.5 or newer.
    If you apply adjustments now and later update MySQL to 5.5 or newer, you\'ll need to apply adjustments again (and they will take a long time).
    You can exit this workflow, update MySQL now, and then run this workflow again. This is recommended, but may cause a lot of downtime right now.
    You can exit this workflow, continue using this software without applying adjustments, update MySQL at a later date, and then run this workflow again. This is also a good approach, and will let you delay downtime until later.
    You can proceed with this workflow, and then optionally update MySQL at a later date. After you do, you\'ll need to apply adjustments again.
    For more information, see "Managing Storage Adjustments" in the documentation.' => 'Kuna da tsohuwar sigar MySQL (tsofaffi 5.5) wanda baya goyan bayan saitin halayen utf8mb4. Muna ba da shawarar haɓakawa da ƙarfi zuwa 5.5 ko sabo! 
     Kuna iya fita daga wannan aikin, sabunta MySQL yanzu, sannan ku sake gudanar da wannan aikin. Ana bada shawarar wannan, amma yana iya haifar da raguwa mai yawa a yanzu. Wannan kuma hanya ce mai kyau, kuma zai ba ku damar jinkirin raguwa har zuwa gaba. Bayan kun yi, kuna buƙatar sake amfani da gyara.
     Don ƙarin bayani, duba "Managing Storage Adjustments" a cikin takaddun.',
      'SUCCESS' => 'NASARA',
      'October' => 'Oktoba',
      'This server is in read-only mode (unreachable master).' => 'Wannan uwar garken tana cikin yanayin karantawa kawai (maigidan da ba za a iya kaiwa ba).',
      'Attempting to compare a password saved with the "%s" hash. No such hasher is known.' => 'Ƙoƙarin kwatanta kalmar sirri da aka adana tare da " %s " hash. Ba a san irin wannan hasher ba.',
      'The PHID of the repository.' => 'PHID na ma\'ajiya',
      'The variable %s received an unexpected type: %s. Please share this stack trace as comment in Task %s' => 'Mai canzawa %s ya sami nau\'in da ba a zata: %s . Da fatan za a raba wannan tari kamar yadda sharhi a cikin Aiki %s',
      '[%s] %s' => '[ %s ] %s',
      'April' => 'Afrilu',
      'Download' => 'Sauke',
      'June' => 'Yuni',
      'No Builds' => 'Babu Gine-gine',
      'Data can not be exported to Excel because the "zip" PHP extension is not
    installed. Consult the setup issue in the Config application for guidance on
    installing the extension.' => 'Ba za a iya fitar da bayanai zuwa Excel ba saboda ba a shigar da "zip" na PHP ba! Tuntuɓi batun saitin a cikin aikace-aikacen Config don jagora akan
     shigar da tsawo.',
      'Generate a new quickstart database dump. This command is mostly useful for internal development.' => 'Samar da sabon saurin farawa. Wannan umarnin yana da amfani sosai ga ci gaban ciki.',
      'Database "%s" is specified more than once. Specify each database at most once.' => 'An ƙayyade bayanan "%s" fiye da sau ɗaya. Bayyana kowane bayanan a kalla sau ɗaya.',
      '%s has invited you to join %s.' => '%s ya gayyace ku don shiga %s .',
      'This service is configured in cluster mode and the address this request was received on ("%s") is not whitelisted as a cluster address.' => 'Wannan sabis ɗin an saita shi a cikin yanayin rukuni kuma adireshin da aka karɓi wannan buƙatar ("%s") ba a farar da shi a matsayin adireshin rukuni ba.',
      'Dump only tables in the named database (or databases, if the flag is repeated). Specify database names without the namespace prefix (that is: use "differential", not "phabricator_differential").' => 'Juji tebur kawai a cikin bayanan mai suna (ko bayanan bayanai, idan an maimaita tuta). Ƙayyade sunayen bayanai ba tare da prefix na sarari ba (wato: yi amfani da "differential", ba "phabricator_differential").',
      '%s attached %s file(s): %s.' => '%s haɗe %s fayil(s): %s .',
      'You have surplus schemata (extra tables or columns which this software does not expect). For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'Kuna da zane-zane masu yawa (ƙarin tebur ko ginshiƙai waɗanda wannan software ba ya tsammanin). Don bayani game da warware waɗannan batutuwan, duba sashin "Surplus Schemata" a cikin labarin "Managing Storage Adjustments" a cikin takardun.',
      'May' => 'Mayu',
      'This service is configured to operate in cluster mode, but %s is not defined in the request context. Your webserver configuration needs to forward %s to PHP so the software can reject requests received on external interfaces.' => 'An tsara wannan sabis ɗin don aiki a cikin yanayin rukuni, amma ba a bayyana $ 1 a cikin yanayin buƙata ba. Tsarin sabar yanar gizon ku yana buƙatar aika $ 2 zuwa PHP don haka software zai iya ƙin buƙatun da aka karɓa akan hanyoyin waje.',
      'This server is configured in cluster mode, with multiple database hosts. Use "--host" to specify which host you want to operate on.' => 'Wannan uwar garken an saita shi a cikin yanayin rukuni, tare da rundunonin bayanai da yawa. Yi amfani da "--host" don ƙayyade wane mai masaukin da kake so ka yi aiki.',
      'July' => 'Juli',
      'Are you completely sure you really want to permanently destroy all storage for %s data on host "%s"? This operation can not be undone and your data will not be recoverable if you proceed.' => 'Shin kun tabbata cewa da gaske kuna so ku lalata duk ajiya akan $ 1 data a kan mai karɓar bakuncin " $ 2"? Ba za a iya cire wannan aikin ba kuma ba za a iya dawo da bayananku ba idan ka ci gaba.',
      'This server is in read-only mode (no writable database is configured).' => 'Wannan uwar garken yana cikin yanayin karantawa kawai (ba a saita bayanan da aka rubuta ba).',
      'Referenced' => 'Nassoshi',
      'A JSON-encoded object.' => 'Abun da aka saka JSON.',
      'Install' => 'shigar',
      'Some of these errors are caused by surplus schemata (extra tables or columns which this software does not expect). These are not serious. For information on resolving these issues, see the "Surplus Schemata" section in the "Managing Storage Adjustments" article in the documentation.' => 'Wasu daga cikin waɗannan kurakurai ana haifar da su ne ta hanyar tsarin ragi (ƙarin tebur ko ginshiƙai waɗanda wannan software ba ta tsammani). Wadannan ba su da tsanani. Don bayani kan warware waɗannan batutuwa, duba sashin "Ƙarin Tsari" a cikin labarin "Sarrafa Ma\'ajiya Daidaitawa" a cikin takardun.',
    );
  }

}
