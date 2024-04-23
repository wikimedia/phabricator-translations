<?php

final class PhabricatorConfigDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.
    This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.
    This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.
    Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => 'A tontonneba sɛge la yɛlɛ naŋ taa URIs, a zaa naŋ fere leɛre la klikabol liŋkiri ka a URI porotokol wa saaŋ a sɛte ŋa poɔ.
    A sɛɛte ŋa sagɛɛ la a porotokole ka o e puliŋ boɔbo ka o gu guubu mine neŋ \'\'gyava sikripi:\'\' an yelfaare mine URI tarebo.
    A sɛɛte ŋa e la meŋ maŋ fere nyɛ la URIs. A sɛɛvisi ŋa maŋ zagere la ka o tere a HTTP \'\'bezie\'\' leɛ-wulli a URI neŋ porotokol naŋ ba be  a sɛɛte zuŋ.
    Wagere zaa, \'\'http\'\' ane \'\'https\'\' seŋ ka a be a sɛɛte. Ka fooŋ iri boyeni bee a porotokol zaa bare, yɛlɛ mine naŋ be a liŋkiri bee leɛ-Wulli koŋ wa e.',
      'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => 'A konfigirisiŋ tegeroŋ "%s" lare la (a lɛ na o koŋ baŋ maale eŋ yi a wɛb UI), kyɛ o taa la a dɛtabeesi tegeroŋ. A lɛ na, ŋaa wuli ka o da ba lare, fo sɛt o la ne a wɛb UI, a puoriŋ ka o leɛ lare.
    Aseŋ ka fo kopi a konfigirisiŋ ŋa tegeroŋ gaane lokal konfigirisiŋ yizie (yaane ne %s) kyɛ pãã iri o yi a dɛtabeesi ne a tanno naŋ be a puli kyɛ.
    Ka foŋ wa boɔrɔ duoro gyɛmaa kyaare ne larebo ane sɔgelebo konfigirisiŋ, a paale yɛlɛ kyaare ne a sɛtɔp yelwonaa ŋa, nyɛ %s.
    A dɛtabeesi ŋa tegeroŋ pampana taa la emmo, kyɛ a nandaare vɛɛseŋ ko a sɔtwaɛ ŋa na tɔge ennɛ la dɛtabeesi tegeroŋ ko konfigirisiŋ lare kaairuu.',
      'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.' => 'A sɔroo ba paale a \'\'Hoosi\'\' yelzu. Ŋa na baŋ a fo wɛb-sɛɛva ( aŋa nginx bee apakyi) ba e konfigere azuiŋ \'\'Hoosi\'\' yelzu ba maale a saseɛ miri, bee ka fo maala la sɔroo mine kyɛ ba taa \'\'Hoosi\'\' yelzu aneŋ tuuli bee laabiri.
    Ka foo tona neŋ wɛb beraasa, kaa a fo wɛb-sɛɛva konfigere. Ka fooŋ tona neŋ tuuli bee laabiri, kaa lɛ sɔroo naŋ maale.
    A meŋ naŋ baŋ e la (kyɛ ba e) ka a saseɛ mie mine (aŋa tuori sentaa)  boɔrɔ la a yelzu.
    Sɔroo ferɛ la ka a taa \'\'Hoosi\'\' velaa yelzu.',
      'The request body that was sent began:' => 'A sɔroo eŋene na naŋ toɔle gaa piilee:',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing applications or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'IMPORTANT: A apstriŋ ba tere teɛbo ko prototape aplikaasinne.
    A laŋgbuli ŋa paale la prototape aplikaasinne naŋ e **baabo piiluu dare**. Aŋ difilati, prototape aplikaasinne furi, bonzuiŋ a naŋ ba maŋ baa yaga na e yaga de toŋ toma. Fo na baŋ eŋ la a kaairuu ŋa na furi a ka foŋ baara aplikaasinne bee taa enyuo na e nandaare naŋ na wa leɛkaabo.
    Ka foŋ na zanne yɛlɛ yaga kyaare prototapes, nyɛ [[ %s | %s ]].
    Ka foŋ wa eŋ prototapes baare, fo na baŋ kaa la iri e ba furi a kyɛ (aŋa aplikaasiŋ sennaa).',
      'The best available MYSQL implementation is now selected automatically.' => 'A bonsoŋ naŋ bebe MYSQL de tontoma maŋ kaa iri la omeŋɛ pampana.',
      'Alternative URIs that can access this service.' => 'URIs mine naŋ na toɔŋ pɔge a saseɛ miri ŋa',
      'This server is not configured in cluster mode.' => 'A tonton boma naŋ ba leɛrɛ',
      'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    This software will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s' => 'PHP derɛ la bonkore "mysql" tagduloo ne a database. A seŋ ka fo eŋ "mysqli" paalaa ka a soŋbaa noba mine teɛroo.
    A software naŋ na toŋne la bonkore na kyɛ tag-doloo la ne maal paalaa la KO a bone paalaa ŋa.
    Fo naŋ baŋ eŋ o la ne yelbegɛ  mine aŋa:%s',
      'The current configuration has these %d value(s):' => 'Pampana ŋa leɛrɛɛ taa la %s tegroo',
      'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.
    Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).
    This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.
    Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":
    %s
    Note that if you run other applications against the same database, they may not work in strict mode.
    If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => 'Kyaare dɛtabeesi hosi "%s", a gulobal "sql_mode" sɛgeroo ba paale a "STRICT_ALL_TABLES" moodi. A moodi ŋa emmo na irikomendi wuli la lɛ baabo yaga naŋ na MySQL kaa gbɛɛ ŋmɛ mine.
    Ka a moodi ŋa ba eŋ, MySQL na leɛ la kpaare ko gbɛ ŋmɛ binni mine gbuli lɛ, a paale ensɛte naŋ boɔrɔ ka o biŋ dɛta yaga gbuli poɔ gaŋ a kpɛzie meŋɛ. A gyogo ŋa gbɛɛ yaga ba maŋ senne, a na baŋ wane la dɛta nannyigiroŋ (by truncating multibyte characters in the middle), dɛta boɔrebo (by discarding the data which does not fit into the column), bee guubo yelwonee (for example, by truncating keys or credentials).
    A sɔtwaɛ ŋa baa la ane nyoore "STRICT_ALL_TABLES" poɔ moodi alɛna fo ba seŋ ka fo nyɛ yɛlɛ ama, kyɛ na baŋ kpɛ a poɔ ka fo toŋ ne a dɛtabeesi daadaa lɛ, e third-party koodi, baa yelyɔllii,bee tore kpɛ bɔge a sɔtwaɛ poɔ.
    Eŋ na "STRICT_ALL_TABLES" vɛŋ la ka MySQL zɛge isiplisi gbɛ ŋmɛ ka ana yel-erre ama kaŋa zaa boŋyeni wa e. Aŋa e la sɔtwaɛ gyogo ane begerɛ yel-erre ama yire sɔgle e, ba kyaannoo, ane nimize yelwonee mine a puoriŋ.
    Fo na baŋ bɔ la duoro yaga kyaare ne a moodi ŋa (and how to configure it) a MySQL gane poɔ. Gbɛɛ yaga, a maŋ soma la ka fo paale a ŋa fo "my.cnf" pɛll (a "[mysqld]" poɔ gbuli) kyɛ la leɛ piili "mysqld":
    %s
    Ba ka ka foŋ wa toŋ ne aplikaaseŋ yobo kyaare ana dɛtabeesi na ne o zu, a na erɛ la ba wa toŋ figibo moodi poɔ.
    Ka foŋ koŋ ba wa bee ba wa boɔrɔ na eŋ "STRICT_ALL_TABLES", fo na baŋ leɛ la kpaare ko a kpaambo ŋa. A sɔtwaɛ ŋa na toŋ la soŋ zaa ne a moodi ŋa emmbo bee ba emmbo.',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'Fo taa la \'%s\' naŋ eŋ a fo PHP konfigirisiŋ.
    A dare ŋa ba tõɔna derɛ a sɔtwaɛ ŋa. Iri \'%s\' yi fo konfigirisiŋ poɔ na kyoge.',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'A kaa-iruu bogi ŋa la daana wulo ka tontonneba na baŋ maale la ba die daga eemail adrɛsiri ane die zu yoe menne.
    Ka fõõ sɛte boma biŋ ka a na lanna erɛ die daga yɛlɛ a menne yi faŋa so-yuo, fo na baŋ ŋmaa la tontonneba ka ba ta erɛ a maale eŋ ama na vɛŋ ka duoro e boŋyeni yi a sisitim zaa poore.',
      'Use Pygments to highlight code?' => 'De yɔɔbo a wuli a koodi?',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => 'Fo taa la \'%s\' yuobu a fo PHP konfigere. 
    A iruŋ ŋa ba e lamboori neŋ a saseɛ miri. Pɔge a \'%s\' a fo \'PHP\' konfigere ka a taa nimitɔɔre.',
      'The keyring stores master encryption keys. For help with configuring a keyring
    and encryption, see **[[ %s | Configuring Encryption ]]**.' => 'A duori daga banna guubo biri. Ka fõõ wa boɔrɔ sommo ne maale emmo biri ane guubo, nyɛ **[[%s|maale emmo guubo]]**.',
      'When email is sent, what format should the software use for users\' email
    addresses? Valid values are:
     - `short`: \'gwashington <gwashington@example.com>\'
     - `real`:  \'George Washington <gwashington@example.com>\'
     - `full`: \'gwashington (George Washington) <gwashington@example.com>\'
    The default is `full`.' => 'Ka emaale wa gaa, bo fɔmate la saseɛ miri la seŋka de toŋ ne ko a emaale bambo magere ko a tontonneba? Nambare naŋ Senne la:
    - `ŋmaa`: \'gwashington <gwashington@example.com>\'
     - `meŋɛ`:  \'George Washington <gwashington@example.com>\'
     - `paaleŋ`: \'gwashington (George Washington) <gwashington@example.com>\'
    A yelbulo `paaleŋ`.',
      'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'Ana na ba seŋ bonne la 2.4, la da yi a yuoni 2012.',
      'You are running PHP version %s. PHP versions between 7.0 and 7.1 are not supported
    PHP removed reqiured signal handling features in PHP 7.0, and did not restore an equivalent mechanism until PHP 7.1.
    Upgrade to PHP 7.1 or newer (recommended) or downgrade to an older version of PHP 5 (discouraged).' => 'Fo tona ne la PHP vɛɛseŋ %s. PHP vɛɛsenne yi 7.0 te tɔ 7.1 ba teɛ.
    PHP iri la irikɔɛ bomannaa taabo nandaare 7.0 PHP poɔ, ane o ba leɛ biŋ manne taa mɛkaneseŋ te ta PHP 7.1.
    Apgyeredi gaa PHP 7.1 bee paalaa (recommended) bee ŋmaa sigi gaa PHP 5 vɛɛseŋ koroo (discouraged).',
      'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => 'Fo ba taa konfigere maali pampana, lɛ zuiŋ a sɛɛva koŋ toɔŋ sɛɛdi maali naŋ be yoŋe bee poɔŋ maali. Nyɛ a konfigere sɛɛtere \'\'kluutare.maaliri\'\' neŋ ditaali.',
      'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => 'Iri a lambori na a fo saseɛ  miri poɔ yɛlɛ bimmo naŋ ba tõɔ sagera sɔroo bee pɔge o bare. A saseɛ miri kop toŋ toma soŋ kyɛ guru ka foo wa e o.',
      'The \'%s\' extension is not installed. Without \'%s\', support, this software may not be able to determine the MIME types of uploaded files.' => 'A \'%s\' tage yɔloo ba taa arezie.ka \'%s\', ba soŋ teɛ, a sɔtwaɛ koŋ baŋ tõɔ wuli a MIME ɔplood gampɛlɛ iruŋ.',
      'Stop this software from sending any email, etc.' => 'Bare a saseɛ miri yineŋ maali deterebo poɔŋ, ane ataaba',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'A \'%s\' bainare ba tõɔ nyɛ. Sinliŋk o eŋ \'%s\', bee sɛte a wɛbsɛva %s gbaŋgbale vaarabol a na poɔ a daarɛtere zie o naŋ kpeɛrɛ, bee poɔ ana daarɛtere kyɛ \'%s\' konfigiriseŋ poɔ.',
      'Define one or more mail transmission services. For help with configuring
    mailers, see **[[ %s | %s ]]** in the documentation.' => 'Yelle yɛlɛ kyaare neŋ a yɛyɛ daga. Fooŋ boɔra sommo kyaare neŋ a yɛlɛ daga, kaa **[[ %s | %s ]]** a gampɛle.',
      'Configure services to run on a cluster of hosts.' => 'Kyaanoo mie mine naŋ na toŋ lammo daana sere.',
      'URI where this software is installed.' => 'URL yeŋ la ka seŋ ka a software naŋ de eŋ.',
      'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
    \'[Commented]\' in them. This makes subjects more useful, but might break
    threading on some clients. If you\'ve set \'%s\', users can override this setting
    in their preferences.' => 'Ka  a yelmeŋɛ, sage  a MetaMTA ka o leɛre a maali yelzuri a eŋ yɛlɛ \'(sagɛɛ)\' ane \'(yel-eŋ)\' a poɔ. A ŋaa veŋɛɛ la a yelzuri taa tɔnɔ gyamaa, kyɛ koŋ wa tara noba ziiri. Ka fooŋ taa sɛɛte \'%s\', tontonneba gaa la tɔɔre a pɛrenrefɛ poɔ',
      'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'ka  a sikima ko a peɛrtɔnnaa la leɛre bee a peɛrtɔnnaa la Maale a nambare a manne. Toŋ ne yele ama mine a leɛ bɔ neŋ a namba',
      'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow this server to interact better with the database.
    This software will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s' => 'PHP la tona a MySQL Koraa yoŋe doraba na seŋ ka e MySQL paale doraba bagenaa. A doraba koraa ba taa iruŋ ane yɛlɛ mine ( aŋa sommo ko guubu wagere baaroo) naŋ sage a sɛɛva ka o toŋ neŋ a daata-baasi.
    A saseɛ miri ŋa naŋ toŋ ne la a doraba koraa, kyɛ gaa nimitɔɔre neŋ a doraba bagena na naŋ da sage.
    Fo naŋ baŋ toɔŋ iŋtɔɔle la a doraba bagenaa na neŋ feroo aŋa: %s',
      'Configure the UI, including colors.' => 'Leɛrɛ a UI, pãã de colasire.',
      'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'A \'%s\' yɔloo teɛ la enfuomo mine yoŋ parɛɛ. A sɛva ŋa koŋ tõɔ leɛre enfuomo naŋ ba be ana parɛɛ ŋa te ta ka fo wa mɛ \'%s\' ne teɛbo ko ba. Teɛbo parɛɛ: %s. Bɔrebo parɛɛ: %s.',
      'Control how user names are rendered in mail.' => 'Maale gu lɛ tontonneba yoe naŋ be a be akantere poɔ',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'Kyaanoo iruŋ \'%s\' ba tona toma. A URI ba seŋka o taa sori, teseŋ; \'%s\' seŋɛɛ, kyɛ \'%s\' ba seŋɛɛ. A saseɛ miri ŋa seŋka tona a zusoga poɔŋ; o kombaŋ tona sori poɔŋ.',
      'Define one or more fulltext storage services. Here you can configure which
    hosts will handle fulltext search queries and indexing. For help with
    configuring fulltext search clusters, see **[[ %s | %s ]]** in the
    documentation.' => 'Wuli boyine bee gaŋ lɛ a yɛlɛ biŋ zie. Zie ŋa lɛ ka fo naŋ baŋ leɛ a 
    A de niŋɛ soba na taa bonzaa zomzom lɛ. Ka fooŋ boɔra sommo kyaare neŋ  a yɛlɛ bɔɔbo, kaa **[[ %s | %s ]]** a gampɛle poɔ.',
      'Manage extensions.' => 'Maale tag-gaa',
      'Storage engines are now discovered automatically at runtime.' => 'Stɔɔragye mansime be la wagerediibo a meŋɛ pampana.',
      'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'A saseɛ miri ŋa wuli ka o be la a EC2 bile poɔ(a klaasi "%s") neŋ CPU naŋ na baŋ puri. Ŋaa maŋ saana poteɛre yɛlɛ. A saseɛ miri ŋa maŋ derɛ boɔrɔ la CPU, kyɛ a ama maŋ tasɔga paale a zaa a kpi neŋ CPU sigibo. De CPU meŋɛ a tonne a toma.',
      'Daemons no longer use PID files.' => 'Daemons ba la tona neŋ PID boma',
      'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).
    If not set, no log will be written.' => 'Ka fooŋ na yuo SSH lugi, kaa iri a sori.  A loogi na toɔŋ nyɛ la duori yaga kyaare neŋ  SSH loogi( teseŋ, o naŋ toɔŋ loogi la a daana, komaadere,ane apulkasi datare).
    Ka ana ba e sɛɛte, loogi zaa koŋ nyɛ sɛgebo.',
      'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'A sɔtwaɛ ŋa toɔle la omeŋɛ sɛgere iriquisi ne sobie saana, na enyɛ ka fo websɛva leɛ sɛgere la soe soŋ. A sori na ba toɔle gaa soŋ.
    A sɔtwaɛ ŋa toɔle la sori ko a sobiri "%s", a empɛterɛ a websɛva ka o dikood a leɛ sɛge ana sobiri a na tõɔ nyɛ a iriquisi ko "%s". Ane a lɛ zaa, o nyɛ la iriquisi ko "%s" ŋa ne ŋa.
    Wuli ka a fo leɛsegere begere konfigie la soŋ, tuuro a sobie a sɛgere poɔ. Ka sobiri eŋkoodiŋ ba wa tona soŋ fo koŋ tõɔ asɛɛse pɛllɛ ne yoe naŋ ba tori a iripoisiri eŋɛ, paale a yelwonee mine.
    (A yelwonaa ŋa na baŋ wa la yi "B" naŋ ba kyebe a fo leɛsɛgerebegere poɔ.)',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Ka anaŋ ba tu velaa, de a Google. Mɔ kyɛ eŋ PHP tag-duloŋ ba e a gampɛle ane yɛlɛ mine fo naŋ na nyɛ eŋɛ a toma fo naŋ toŋ. Mac 05 x, fo naŋ boɔra ka fo e Homebrew nyɛ.',
      'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
    smaller messages. The actions themselves will still work properly.' => 'Fo na baŋ ŋmaa la a fu naŋ be a "REPLY HANDLER ACTIONS" ka a tontonaŋ wa boɔrɔ masɛgye bilee. A eebore menne naŋ na tona la soŋ.',
      'When a message is sent to multiple recipients (for example, several reviewers on
    a code review), it can either be delieverd as one email to everyone (e.g., "To:
    alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
    alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
    of each approach are:
      - One mail to everyone:
        - This violates policy controls. The body of the mail is generated without
          respect for object policies.
        - Recipients can see To/Cc at a glance.
        - If you use mailing lists, you won\'t get duplicate mail if you\'re
          a normal recipient and also Cc\'d on a mailing list.
        - Getting threading to work properly is harder, and probably requires
          making mail less useful by turning off options.
        - Sometimes people will "Reply All", which can send mail to too many
          recipients. This software will try not to send mail to users who already
          received a similar message, but can not prevent all stray email arising
          from "Reply All".
        - Not supported with a private reply-to address.
        - Mail messages are sent in the server default translation.
        - Mail that must be delivered over secure channels will leak the recipient
          list in the "To" and "Cc" headers.
      - One mail to each user:
        - Policy controls work correctly and are enforced per-user.
        - Recipients need to look in the mail body to see To/Cc.
        - If you use mailing lists, recipients may sometimes get duplicate
          mail.
        - Getting threading to work properly is easier, and threading settings
          can be customized by each user.
        - "Reply All" will never send extra mail to other users involved in the
          thread.
        - Required if private reply-to addresses are configured.
        - Mail messages are sent in the language of user preference.
    ' => 'Ka duoroŋ wa toɔle ko derebɛ yaga (aseŋ, leɛkare yaga koodi leɛkaabo eŋɛ), o na baŋ gaa la ŋa eemail boŋyeni ba kaŋa zaa zie (e.g., \'\'To: alincoln, usgrant, htaft\'\'), bee eemail tɔɛtɔɛ ko a tontona kaŋa zaa (e.g., \'\'To: alincoln\'\', \'\'To: usgrant\'\', \'\'To: htaft\'\'). A yelsonne ane yelbasonne ko a yeltuuri ama kaŋa zaa la:
    - Mail boŋyeni ko ba zaa:
     - Aŋaa gaŋ la poolisi yelbegere. A mail nandaa yi la kyɛ ba ko boma poolisi gyeremɛ.
     - Duori derebɛ na baŋ nyɛ la To/Cc fileo.
     -Ka fõõ tona ne mailiŋ pɛllɛ, fo koŋ nyɛ pulluu mail ka fõõ e duori derɛ naŋ manne ne ane meŋ Cc\'d a mailiŋ pɛllɛ poɔ.
     - E lɛ nyɛ daga sosoŋ na toŋ soŋ e la tuo, alɛ na boɔrɔ la ka fo e a mail ka o ta yuo yɛrɛɛ lɛ ka fõõ pɔge a kaairi.
     - Wagere kaŋa noba na \'\'sage la a zaa\'\', naŋ na baŋ toɔle mail ko dederebɛ yaga. A sɔtwaɛ ŋa koŋ moɔrɔ ka o toɔle mail ko tontomba naŋ ta daŋ nyɛ a duoro ŋa tɔ, kyɛ koŋ baŋ leɛre eemail naŋ bɔrɔ yire \'\'sage a zaa\'\'.
     - Ba teɛ a ko sommeŋɛ sage-ko adrɛse.
     -Ba toɔle la mail duori eŋ a sɛva difiliti leɛroo poɔ.
     - Mail naŋ seŋ ka o tu sobiguuri na yaare la derɛ pɛllɛ a \'\'To\'\' ane \'\'Cc\'\' zuri poɔ.
    - Mail boŋyeni ko tontona kaŋa zaa: 
     -Poolisi yelbegere maŋ toŋ la soŋ zaa kyɛ maŋ kyɛŋe soŋ ko a tontona kaŋa zaa.
     -Derebɛ seŋ ka ba kaa a mail nandaa poɔ na nyɛ To/Cc.
     -Ka fõõ de mailiŋ pɛllɛ toŋ neŋ, derebɛ wagere kaŋa na baŋ nyɛ la pulluu mail.
     -Nyɛrɛ daga sosoŋ na toŋ toma soŋ e la mɔla, a daga sosoŋ sɛgeroo na baŋ maale eŋ la tontona kaŋa zaa boɔbo eŋɛ.
     -\'\'sage a zaa\'\' daŋ koŋ toɔle mail naŋ ba seŋ neŋ ko tontomba naŋ paale a daga sosoŋ poɔ.
     -Seŋ ne la ka sommeŋɛ sage-ko adrɛse wa eŋ .
     -Mail duoro na toɔle la a tontona boɔbo kɔkɔre poɔ.',
      'Global access controls now exist, see `%s`.' => 'Tendaa zaa tukpeɛbo guubu pãã bebe la, nyɛ \'%s\'.',
      'Unable to connect to MySQL!
    %s
    Make sure databases connection information and MySQL are correctly configured.' => 'Ba tõɔ nyɔge a MySQL! %s
    Vɛŋ ka dɛtabeesi nyɔgebo duoro ane MySQL konfigie toree la.',
      'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'Kookisi sɛɛte ko x.com meŋ toɔle tere la ko y.x.com. Kaa  nyɛ ka a zaa da tona, ŋa na maale la koleesi naŋ na gu yineŋ a kpeɛbo poɔŋ.',
      'You can provide a custom highlighter engine by extending class %s.' => 'Fo na baŋ tere la kɔsetɔŋ kyaane wuolaa mansiŋ yi %s karendie tage gaabo.',
      'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.
    If not set, no log will be written.' => 'Ka foŋ na eŋ a SSH ɛɛrɔ lɔɔge, wuli sobiri. Ɛɛrɔre naŋ erɛ kontɛse poɔ, be a sɔtwaɛ ŋa naŋ sɛverɛ SSH irikɔse na sɛge ko la a lɔɔge ŋa.
    Ka lɛ naane sɛte, lɔɔge zaa koŋ sɛge.',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Ka foŋ wa aploodi pɛllɛ via via tage kyɛŋe a biŋ bee a API,  kyaŋk seŋ ka a kpɛ mɛmɔre poɔ sɛre ka a sɛge eŋ ko-la-baŋ-yi strɔɔragye.      A sɛva ŋa boɔrɔ la mɛmɔre naŋ bebe na biŋ a kyaŋkiri ŋa kyɛ ka a aploodi, kyɛ PHP pampana konfigie la na ŋmaa a mɛmɔre beebo yaga zie zaa.
    PHP puroses pampana taa la mɛmɔre kpale fĩĩ naŋ bebe (%s). Ka onaŋ na toŋ soŋ, puroses seŋ ka a ne alɛzaa taa %s.
    (Baŋ ka a aplikaaseŋ meŋɛ seŋ ka o meŋ kpɛ vaarable mɛmɔre, a mɛmɔre zaa naane naŋ be a mɛmɔre bɔge la bebe na baŋ toŋ wɛklood.)
    A sobi-laanfeɛ na tu maale a yelwonaa ŋa la ka fo sɛte %s gaane %s a fo PHP konfigirisiŋ poɔ, na tɔge a mɛmɔre bɔge. Wagere zaa fĩĩ lɛ bee tegeroŋ ba maŋ be fo naŋ de a kaairuu ŋa na bege puroses mɛmɔre.
    Fo meŋ na baŋ paale la a bɔge bee tɛe kpaare ko a yelwonaa ŋa kyɛ sage ka fo na baŋ nyɛ la awombo aploodiŋ pɛllɛ bɛrɛ ane purosesiŋ yelboɔre bɛrɛ.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Kyaanoo S3 baaroo saŋa la da tontoma. Ŋaa la seŋ ka o e a baaroo saŋa naŋ seŋka yineŋ a irigyin na fo naŋ iri o yineŋ \'amazon-s3.irigyin\'.
    A saseɛ miri na kombaŋ baŋe a baaroo saŋa tori omeŋɛ bonso a baaroo bammo mine bezie ba maale saana',
      'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => 'Ka foo na yuo a HTTP kpeɛbo poɔ, Willi a sori. A kpeɛbo ŋa taa la bonzaa gaŋ a HTTP asɛɛsi kpeɛbo meŋɛ (ma ŋaa, o naŋ baŋ wuli la kpeɛrebɛ,  guuba,ane daata mine kaŋa).
    Ka ana ba e sɛɛte, kpeɛbo kaŋa zaa koŋ nyɛ sɛgere.',
      'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'A defaali, a saseɛ miri liŋkiri la a ɔɔgyɛ yoe a leɛ-maakere faalɛ te ko a ɔɔgyɛre tu tɔ. A ŋaa na baŋ toɔŋ toŋ neŋ la a toma ama; ɔɔgyɛ yoe naŋ tu a ŋaa koŋ baŋ liŋki.',
      'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects this software, see %s.' => 'A %s veɛɛseŋ a sisitiŋ ŋa poɔ bebiri parɛɛ la, a taa nimize, waedill disikuloosi valabiliti (a \'\'Shellshock\'\' valabiliti).
    Ɔpgyiridi %s gaa wulibu vɛɛseŋ ŋa.
    Ka fõõ wa boɔrɔ ka fo zanne yɛlɛ yaga kyaare lɛ na a yelwonaa ŋa naŋ danna a sɔtwaɛ ŋa, nyɛ %s.',
      'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Die daga paalaa irigyisitiri na baŋ paale la manual sagebo queue ko adminisitrati leɛkaa, bee e a meŋɛ paretɛɛloŋ lɛ. A sagebo queue eŋɛ la o meŋɛ bonso o maŋ ko fo kpeɛŋ zuo neɛ naŋ na baŋ irigyisi die daga ane asɛses a sɛva.
    Ka fo furuu wa e yieŋ yuoŋ, bee be VPN poɔ, bee Tontonneba na baŋ irigyisi la yoŋ ne sage di tereterɛ aŋa LDAP, bee ka fo na konfigie la a sɛva na bege ba tere sori irigyisiroŋ, fo na baŋ ŋmaa la a queue na sigiri adminisiritiri zu gambo.
    BAŊ KA: sɛre ka fo na pɔge queue, eŋ siri ka @{config:auth.email-domains} konfigie la soŋ ko fo furo!',
      'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'A software ŋa na de la o meŋɛ gaa neŋ a sɛgrɛ zie na te kaa nyɛ kyɛ tere sori  HTTP yelzu, kyɛmeŋ kaara ayelnimie ka a gaa. A me a lɛ zaa gbɛ ŋmɛ kaŋa bebe la a deebu zie. A software ŋa de la a tontona yuori "%s" ne a taŋgaraa "%s; de la a yuori " %s" aŋa a taŋgaraa "%s".
    A webserver koŋ leɛrɔ a bee de gaa ne a HTTP zie na ba naŋ te kaa nyɛ. A see ka fo leɛre a.',
      'Controls whether email is sent "From" users.' => 'Kaa nyɛ ka maali terebo \'\'yi\'\' tontonneba',
      'PHP 7 Compatibility Information' => 'PHP 7 kpɛtaaloŋ duoroo',
      'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'A koŋfigere SORI paale la a gbɛɛ naŋ na ba tona toma. A sɛɛva ŋa koŋ toɔŋ bo-nyɛ bee kaa nyɛ baanare bezie a kyɛ;
    %s
    A tontonne na a wɛbsɛɛva na neŋ e la feroo ka o kanne a wulluu zaa a PATH a toɔŋ toŋ neŋ toma soŋ.',
      'You can rebuild repository identities while the server is running.' => 'Fo naŋ baŋ Leɛ mɛ la kyɛ ka tonton boma naŋ tona gɛrɛ.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.
    ' => 'Sigiri a loogo yenfuone ane a yɛlɛ naŋ saaŋ a saate yelzu meŋɛ:
      - **Loogo
     Yenfuone**: eŋ bompaala 80 x 80px yenfuoni a leɛre a loogo a saate yelzu.
      - **Yɛlɛ-maake**: kaa iri ttɛɛsi paala a wuli neŋ a puori loogo. Aneŋ defaali, a yelzuri maŋ wuli la //%s//.',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'A kaairi maale bimmu ŋa e la bomba bannaa. O na baŋ e la batuubo bee da daŋ be a sɔtwaɛ waaloŋ kaŋa.',
      'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.
    %s' => 'Boŋ yuoraa leɛroo (ne a %s maaloo) kyɛ kaapɔge a ŋmaaroŋ a me a sɛgrɛ yuori na la.
    %s',
      'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'A mulitimeta apilikaasi maŋ de la tontonnee sampelɛ. Fo na baŋ de la a deta ŋa ka o sombo ka fo baŋ bone na a sɔtwaɛ naŋ deri wagere ane boma erɛ ane na identifaa problɛmate assɛse begere.
    A kaairuu ŋa la wullo lɛ wagere zaa sampelɛŋ yel-erre. Sɛte o eŋ sonne mine entegya N na sampelɛ wagere la wagere 1/N pɛllɛ.
    Furi-kyɛ yaga zie, a difiliti tegeroŋ (1 sampelɛ pɛ 100 pɛllɛ) seŋ ka o de deta yaga a na tona kyɛ ta boɔrɔ stɔɔragya yaga bee meŋɛnfu impaatiŋ tontonnee. Ka fõõ wa peɛrɛ tontonnee yelwonee, fo na baŋ paale la faŋa, a na tõɔ nyɛ deta yaga.',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'Databaasi nyɔgebo \'\'%s\'\'tona ne la   mɛ niŋeŋ faali ko meɛbo peɛroo endɛre. Ŋaa na baŋ mɛ la a peɛroo boma mine toma lɛɛsi.
    Baaroo yelbie ela yelbie naŋ na ba endɛɛsi azuiŋ a koŋ toɔŋ nyɛ peɛbo.  A defaali baaroo yelbie faali taa aŋa 500 yelbie,paale yelbie mine fo naŋ na boɔrɔ ka fo peɛre, aŋa ama mine \'\'zi balaa\'\', \'boɔrɔ\' ane \'zagela\'.
    Ka fooŋ naŋ peɛre yɛlɛ mine, fo naŋ toɔŋ toŋ ne la yele mine baaroo yelbie faali neŋ yelbi-fēē. Yele mine poore, ka fo teɛroŋ ba kyaare a yelbie mine peɛroo, fo baŋ bare la kpaamo. Ka fooŋ paaŋ maale fo teɛroŋ ka fo konfigere tagebo peɛroo, fo meŋ naŋ baŋ bare la a kpaabo: a baaroo yelbie fere a MySQL yɛlɛ endɛɛsere.
    Ka fooŋ na iri  baaroo faali tɛɛtɛɛ, paale a %s faale (a %s poɔŋ) kyɛ leɛ piili %s:
    %s
    (fo meŋ na baŋ toŋ la neŋ faali tɛɛtɛɛ ka fooŋ boɔrɔ. A faali boɔbo saazu kyɛ la 50 Egilisi yelbie.)
    Baara, toŋ ne a leɛ-meɛbo kyaare a endɛɛsi tommo merɛ pala:
    %s',
      'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'A \'\'InnoDB\'\' egyin ba paale a MySQL ( a hoosi \'\'%s\'\'). Yuo InnoDB a fo MySQL konfigere poɔ.
    ( Ka fooŋ daŋ maale a taabole, MySQL ba yoɔŋ tonneŋ a egyini mine a maale a. A seŋ ka fo leɛre a bee biŋi kyɛ la leɛre maale a.)',
      'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'A sɔtwaɛ ŋa pampana konfigie la ko sɛva tontona aploodi daadaa lɛ yi a gbuli na ne o zu aŋa yelzubulo mine. ŋa e la guubo yelkyɛrre.
    Konfigie a CDN (or alternate file domain) na iri a yelkyɛraa ŋa. Tona ne CDN meŋ na baa la tontonne. Nyɛ sobi-tuuri yi de-gu-meŋɛ a puli kyɛ.',
      'Syntax highlighting a supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Yelbie tutaa merɛ e ka o kyaane teɛbo ko kɔkɔɛ fĩĩ a meŋɛ, kyɛ fo na baŋ furi la Pygments (a third-party syntax highlighting tool) na tere teɛbo ko kɔkɔɛ yaga.
    Ka fõõ na furi pygment, gaa kyɛ [[ http://pygments.org | pygments.org ]] a tu a danloodi a furi sobi-tuuri.
    Ka Pygments wa furi, eŋ dare ŋa (`pygments.enabled`) na toŋ ne Pygments ka foŋ wa kyaane yizie koodi.
    Ka foŋ wa furi baare a eŋ Pygments, yizie koodi kuri paalaa (like diffs and pastes) na kyaane la sonzaa. A na seŋ ka fo kɔre boŋkorɔ na nyɛ yizie koodi naŋ da daŋ bebe na kyaane o. Sobi-tuuri kyaare boŋkorɔ managyiŋ, nyɛ [[ %s | boŋkorɔ managyiŋ ]].',
      'The namespace that databases should use.' => 'A yuori voɔ na la a database seŋ ka o de',
      'Constant' => 'Wagere zaa',
      'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'A saseɛ miri ŋa la tere omeŋɛ sɔroo naŋ da taa  "yelzu-nyaabo: gzip", kyɛ nyɛ bytes tɛɛtɛɛ gaŋ o naŋ toɔle',
      'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'A konfigirisiŋ kaairuu "%s" ba nyɛ emmo. Kaa pɔge o sɛgebo la ba tori, bee o da daŋ be la a sɔtwaɛ vɛɛseŋ koroo eŋɛ. O ba taa faaloŋ, a seŋ ka dɛnne o bee sãã o.',
      'You can rebuild the search index while the server is running.' => 'Fo naŋ baŋ leɛ mɛ la a bɔɔbu daga kyɛ ka a tonton boma naŋ tona gɛrɛ',
      'Daemons Are Not Running' => 'Sɔɔre ba zoro',
      'The request body that was received began:' => 'A sɔroo eŋbani naŋ da nyɛ deɛbo da piilee',
      'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'A meŋɛ naŋ, a sɔtwaɛ ŋa maŋ tere la HTTP leɛwuli ka o naŋ wa toɔle POST baare soŋ. ŋaa na baŋ vɛŋ la ka o yɛlɛ e tuo na dibɔge boma naŋ e saŋa a POST naŋ prosɛse, bonso sɛɛvese ane profaaliŋ duoro borɛɛ la. Ka foŋ wa sɛgere a konfigiriseŋ dabogi ŋa, entɛsetali peegye na sãã la, o naŋ da naŋ e otomatikal leɛwulloo, korɔ fo vuo ka fo na gyenne sɛɛvese ane profaaliŋ duoro. O meŋ na la e la a UX naŋ ba soma, a seŋ ka fo eŋ o yoŋ, ka foŋ wa dibɔɔge.',
      'By default, this software generates unique reply-to addresses and sends a
    separate email to each recipient when you enable reply handling. This is more
    secure than using "From" to establish user identity, but can mean users may
    receive multiple emails when they are on mailing lists. Instead, you can use a
    single, non-unique reply to address and authenticate users based on the "From"
    address by setting this to \'true\'. This trades away a little bit of security
    for convenience, but it\'s reasonable in many installs. Object interactions are
    still protected using hashes in the single public email address, so objects
    can not be replied to blindly.' => 'Aneŋ defaali, a saseɛ mie ama taa la  iribu yeni wulluu kyɛ toɔle emaali tɛɛtɛɛ ko a tontonneba kaŋa zaa ka foo nɔ-iri taabo.addresses Ŋaa soma te gaŋ a "yizie" a wuli tontoneba waaloŋ, kyɛ naŋ baŋ wuli tontonneba naŋ baŋ nyɛ la emaali tɛɛtɛɛ ka ba naŋ be maali yɛlɛ poɔ. A da seŋɛɛ, fo naŋ baŋ toŋ la tendaa, bayitaa iribu a wuli kyɛ sage ko tontonneba a yi a \'\'yizie\'\' wulluu ane tontonneba sagebo yineŋ a \'mennoŋ\'. Ŋaa veŋɛɛ la guubu beɛle peɛloo mine, kyɛ o taa la tɔnɔ entɔɔle gyamaale. Yelbulo mine yelsɔŋe taa kyaa taa la guubu yineŋ haasi a pobiliki emaali aderesi, lɛ wuli ka yelbulo koŋ nyɛ iribu ko bilindi.',
      'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole e la baabo ane profiiliŋ tonton-bone naŋ mɛ eŋ a wɛb niŋe eŋɛ. A seŋ ka fo e o ka o ta tona ka anaŋ ba wa e ŋa fo baara la bee boɔrɔ la yelfɛrre mine %s.
    Ka foŋ aŋ wa ativeeti DarkConsole ko a furi-kyɛ, **aseŋ ka fo eŋ o ko a fo korodie sɛre ka o na baŋ sãã pɛllɛ eŋɛ.** Fo na baŋ e la aŋaa sɛgeroo eŋɛ > Baara Sɛgere eŋɛ.
    DarkConsole yire neŋ la potensall sɛnsiti dɛta (like queries, stack traces, and configuration) gyɛmaa lɛ a ba seŋ ka fo leɛ o eŋɛ, maaloo eŋɛ.',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'A fo konfigere ba toɔŋ wuli a sɛɛva wagere begere. Fo naŋ baŋ maale la a PHP konfigere boma \'%s\' bee a %s konfigere boma \'%s\' a wuli boŋyeni.',
      'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'A sɛva ŋa taa la %s naŋ be %s, kyɛ a bainare yie la ne ɛɛroɔ koodi ka onaŋ wa toŋ ŋa %s. Kaa nyɛ ka o furi la soŋ.',
      'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'Iruu taŋgaraa pãã maŋ wanne la" kyoge: gbuli" ka soŋ baa',
      'Without \'%s\', this software can not test for the availability of other binaries.' => 'Ka \'%s\', ba kyebe a sɔtwaɛ koŋ baŋ kaa wuli a binari mine beebo.',
      'Do not install this software on an instance class with burstable CPU.' => 'Ta WS derɛɛ a Gaŋpɛle ŋa naŋ na dɔɔna fo CPU.',
      'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.
    If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Ba tõɔ wuli a vɛɛseŋ ŋa "%s" numba. Wagere la wagere, aŋaa maŋ wuli ka a progyɛm leɛre la o vɛɛseŋ 
    Meɛroŋ sori ka a ba kɔɔre ane a sɔtwaɛ ŋa ba baŋ lɛ o naŋ na e toŋ ne a bompaalaa na sɛre, kyɛ na baŋ wuli ka fo taa la binare naŋ kure paa (bee naŋ ŋmare).
    Te naŋ koŋ baŋ wuli a vɛɛseŋ numba na, kaa nyaabo kyaare minimɔŋ ane vɛɛseŋ banne naŋ ba soma na gaŋ bare la, te na baŋ ŋmɛ la gbɛre na wuli binare naŋ koŋ baŋ wɛle taaŋ.
    Fo na baŋ tõɔ sɛgere la a yelwonaa ŋa, ka fõõ apdeeti a sɛva ŋa, saŋa na a sɔtwaɛ vɛɛseŋ paalaa naŋ na baŋ tõɔ toŋ ne a vɛɛseŋ paalaa soe.
    Ka a sɔtwaɛ apdeetiŋ ba wa tõɔ e a yeli ŋa, fo na baŋ tere la duoro kyaare ne a yelwonaa ko a ɔpasirim ka te baŋ tõɔ tage a pɛza do.
    Ka fõõ wa sage di ka fo taa la pampana vɛɛseŋ ko "%s" naŋ furi kyɛ ane tona soŋ, ana baŋ maŋ e la laanfeɛ ka fo duli kpaare ko a kpaamo ŋa.',
      'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Maale a URI zie naa software na maale.maale a begɛ naŋ na gu enfuo mine naŋ na de zu, kyɛ ko daemoms ka a de yɛlɛ eŋ a daga.',
      'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'Detabeese hosi "%s" konfigie la ne bone naŋ ba seŋ bone %s (%s). A ŋaa na baŋ wane la poɔɔ detabeese tontonnee ane ba taa baaroo pɔgebo.
    Kpeɛŋaa ane wieoŋ begere ba kyebe yeltoori zegeroŋ sɛgeroo eŋ, kyɛ irizinable bogi piiluu ko a standad furi-kyɛ e ŋa 40%% yi a mɛmɔre zaa mansiŋ eŋɛ. Aseŋ, ka foŋ taa 4GB RAM a mansiŋ eŋɛ fo furi-la-kyɛ a sɔtwaɛ ŋa, a fere ka fo sɛte a zɛgeroŋ ŋa ko %s.
    Fo na baŋ kanne la yɛlɛ yaga a kyaare ne a kaairuu ŋa a MySQL sɛgere poɔ a na soŋ fo maale teɛroŋ kyaare ne lɛ foŋ na konfigie o ko a fo tonton-yelwonaa. Yelwonee ba kyebe kyaare ne a sɔtwaɛ ŋa naŋ vɛŋ ka o be o tɔɔraa yi a nɔɔmal wɛkloods yire a sɛgeroo ŋa.
    Ka fõõ na maale sɛgere a sɛgeroo, paale boŋkaŋa aŋa bone ŋa a fo %s pɛll (a %s lombori poɔ), aleɛrɛ %s ne zɛgere yeltoori ko fo hosi ane tonton-yelwonaa. A pãã leɛpiili %s:
    %s
    Ka a pampana sɛgeroo wa seŋ fo, fo na ba inni la a sɛtap ŋa kpaambo yɛlɛ laanfeɛ lɛ.',
      'Set a string this software should use to prefix cookie names.' => 'Maale a gampɛle ŋa ka o taa aroozie maraa yoe.',
      'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'A sɔtwaɛ ŋa toɔle la o meŋɛ sɛgere boɔbo ne HTTP GET paramita,kyɛ a paramita ba transimiti. Toɔle "%s" ne tegeroŋ "%s", nyɛ "%s" ne tegeroŋ "%s".
    Fo wɛbsɛva konfiguu ba tori  ane a sɔtwaɛ ŋa lombo beɛrɛ koŋ toŋ toma te ta saŋa na a yelwonaa ŋa naŋ maale tori.
    (A tɔɔrɔ ŋa na baŋ wa la yi a bone ŋa "QSA" naŋ koŋ be a fo RewriteRule.)',
      'Enable the debugging console.' => 'Maale a yesaŋgaraa bombinnaa kaŋa.',
      'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => 'A sommo semmo vɛɛsi yine Git a sɛɛva e la %s, naŋ nyɛ iribu yineŋ %s. A yi vɛɛsere mine, a Git sɛɛva koŋ wa toɔŋ erɛ ka o yel-tagetaa neŋ \'\'--\'\' tontonneba. Kyɛlle: a fo tontonneba ba boɔrɔ vɛɛsere mine a Git poɔŋ.',
      'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => ' A saseɛ miri ŋa toɔle la omeŋɛ a enyɛ neŋ a \'\'X-Setup-SelfCheck\'\' zukaara kyɛ boɔrɔ ka o nyɛ JSON sagebo gsoŋ a baaroo.
    Lɛ meŋɛ, a sagebo piiluu:
    %s
    Boŋkaŋa ba maale kyaane SOP bee mine kaŋa leɛ a sagebo.',
      'The timezone this software should use by default.' => 'A wagere zie a saseɛ miri ŋa seŋ ka o toŋ neŋ difaali.',
      'Thhi software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s' => 'Thhi sɔtwaɛ wagere kaŋa maŋ ɛzikiti la bainare yobo a sɛva eŋɛ. A Bondemannewullaa la a ŋa `%s` tannoo, naŋ maŋ de sentase-kyaane koodi naŋ sɛge kɔkɔɛ poɔ a gaŋ a PHP. Difiliti poɔ, o teɛre ka a bainare ama be la a %s ko a tontona naŋ kaara a sɔtwaɛ ŋa (a meŋɛ naŋ \'apache\', \'httpd\', bee \'neɛzaa kyebe\'). Kyɛ fo na baŋ poɔ la peɛre ko a %s gbaŋgbale vaarabole, ka ana bainare ama ba wa be bakaabo bezie.
    Baŋ ka fo meŋ na baŋ poɔ la bainare kyɛ `%s` (a seŋ, by symlinking them).
    PATH pampana tegeroŋ konfigiriseŋ na wa aplaai e la:
      lang=text
      %s',
      'The \'%s\' extension is not installed. Without \'%s\', support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'A \'%s\' yɔllɔɔ ba e entɔɔle. Ka \'%s\' ba kyebee, sommo, a sɛɛva ŋa koŋ toɔŋ to a toma bee maale a enfuoni eŋ( aseŋ, nubi-pɛgɛ maaloo). Entɔɔli bee yuo \'%s\'.',
      'Reply hints are no longer shown in mail.' => 'Nu-iri yeltuuri mine ba la be a maali poɔŋ.',
      'If you want to use a single mailbox for reply mail, you can use this
    and set a common prefix for generated reply addresses. It will
    make use of the fact that a mail-address such as
    `devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
    user\'s mailbox. Set this to the left part of the email address and it will be
    prepended to all generated reply addresses.
    For example, if you want to use `devtools@example.com`, this should be set
    to `devtools`.' => 'Ka fõõ boɔrɔ ka fo toŋ ne mailbosi bonyeni ko sagebo mail, fo na baŋ de la ŋa a sɛte kɔmoŋ prifisi ko gyɛnireeti sagebo adrɛse. O na sage di la ka a mail-adrɛse aseŋ
    `devtools+D123+1hjk213h@example.com` na gaa la a `devtools`
    Tontona mailbosi. Sɛte aŋa eŋ a eemail gɔɔ sɛŋ adrɛse, ka o na nyɔge gyɛnireeti sage adrɛse.
    Aseŋ, ka fõõ boɔrɔ ka fo toŋ ne `devtools@example.com`, aŋa seŋ ka sɛte eŋ `devtools`.',
      'Typeahead strategies are now managed automatically.' => 'Sɛgezurri lambogiri mine paaŋ toŋ ne la a menne.',
      'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'A sɔtwaɛ ŋa na tõɔ kaa iri la kɔkɔɛ fĩĩ lɛ omeŋɛ, kyɛ furi kyɛ ane na eŋ yɔɔre (sɔtwaɛ yuo kaa iri tontoŋ boma) na paale la yelbie tutaa merɛ kaa iri ko kɔkɔ yaga.
    Ka foŋ wa boɔrɔ sobi-tuuri kyaare furoo ane na eŋ tɔɔre, nyɛ a %s konfigirisiŋ kaa-iruu.
    Ka foŋ ba wa boɔrɔ ka fo furi yɔɔre, fo na baŋ leɛ la kpaare ko a yelwonaa ŋa.',
      'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.
    Use %s to start daemons. See %s for more information.' => 'A daemons ba tona toma, zie waaloŋ tontonne (te paale email deterebo, la leɛ Maala a bonwulli tutaaloŋ, dewaabo eebo, namba-kore miile baroo, ane toma mine leɛ maaloo) koŋ baŋ tontoma.
    De %s piili neŋ a daemons. Kaa %s bo yɛlɛ yaga.',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'Database daana "%s" wuli ka o eɛ la masta, kyɛ pãã dogele daana kaŋa zu. Ŋa de eɛ la nimizeɛ a naŋ tõɔ saana bee saa data.
    Dogeleba yoŋ la naŋ dogelɔ. Bare dogelebo a daana bee paale a waaloŋ.',
      'Define a cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Manne wuli a lammo a wulo neŋ yelpɛle mine a daana bammo magere naŋ paale a lammo poɔ.
    Daana na be a yelpɛle poɔ taa la fantoɔre mine. A daana bama taa la sori a na baŋ gaŋe guubu merɛ mine, kyɛ e a yɛlɛ ama k\'o  ba tori naŋ baŋ vɛŋ la a boma mine guubu e fēē lɛ. Ka fo boɔrɔ yelyaga mine,  nyɛ **[[ %s | %s ]]**.
    Manne wuli yɛlɛ mine kyaare CIDR pɔgebo a yelpɛle zaa daana a lammo ane daana saane zaa naŋ ba kyebe. Kaa a puli kyɛ nyɛ bondemannewulli mine.
    A lammo bammo wuli ka, daana meŋ naŋ zagere la sɔroo a yelwulli naŋ na ba e yelpeɛle mine.',
      'Configure %s' => 'Leɛre %s',
      'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'REMOTE_ADDR zaa ba kyebe, a lɛ na a sɛva ŋa koŋ baŋ wuli a adrɛse yiibu zie na irikɛse. A ŋaa na bege la a sɔtwaɛ yi nimize gu meŋɛ kaabo tontonne. Gbɛɛ yaga a ŋaa maŋ wulo ka fo taa la gbɛɛŋmɛ a fo dabi-sɛgeraa poɔ. Peɛre a sɛgebo (%s) a kaa gborɔ gborɔ, ka a sɛgere sɛge la soŋ.',
      'Available search engines are now automatically discovered at runtime.' => 'Peɛroo mansime naŋ bebe pampana be la a zobɔ ŋa a menne.',
      'When a user takes an action which generates an email notification (like
    commenting on a Differential revision), the "From" address can either be set
    to the user\'s email address (like "alincoln@logcabin.com") or the
    "metamta.defualt-address" address.
    The user experience is generally better if the user\'s real address is used as
    the "From" header value, since the messages are easier to organize when they
    appear in mail clients, but this will only work if the server is authorized to
    send email on behalf of the "From" domain. Practically, this means:
      - If you are doing an install for Example Corp and all the users will have
        corporate @corp.example.com addresses and any hosts this software is running
        on are authorized to send email from corp.example.com, you can enable this
        to make the user experience a little better.
      - If you are doing an install for an open source project and your users will
        be registering via third-party services and/or using personal email
        addresses, you probably should not enable this or all of your outgoing
        email might vanish into SFP blackholes.
      - If your install is anything else, you\'re safer leaving this off, at least
        initially, since the risk in turning it on is that your outgoing mail will
        never arrive.' => 'Ka tontona wa e eebo ka o yi neŋ eemail teɛre ma (Aŋa kɔmɛnterɛ tɛɛtɛɛ leɛkaabo eŋɛ), a \'\'From\'\' adrɛse na baŋ sɛte la ka a tontona eemail adrɛse (aŋa \'\'alincoln@logcabin.com\'\') bee a \'\'metamta.defualt-address\'\' adrɛse.
    A tontona dannyaa na soma la yaga zaa ka a o toma meŋɛ adrɛse na e a \'\'From\'\' zu tegeroŋ, a yi a duoro narebo naŋ na e laanfeɛ ka ana wa be a mail kilayane poɔ, kyɛ aŋaa na e la ka ona wa tere sori ka a sɛva toɔle eemail a \'\'From\'\' gbɛbogiri vuoŋ. A eeboŋ, ŋaa wuli ka:
     - ka fõõ wa erɛ furi-kyɛ aseŋ Corp, a Tontonne ba zaa na e la boŋyeni @Corp.example.com adrɛse ane gbulo zaa a sɔtwaɛ ŋa naŋ kaara na tere la sori ka o toɔle eemail yi Corp.example.com, fo na baŋ e la a ŋaa a vɛŋ ka tontona dannyaa taa zɛgeroŋ fẽẽ.
     -ka fõõ wa erɛ furi-kyɛ ko yuo yizie progyɛte ka fo Tontonne ba na irigyisi yi zie kaŋa sɛɛvisi ane/bee ba menne eemail adrɛse, a ba seŋ ka fo eŋ a ŋa ka lɛ naane fo eemail toɔle zaa na bɔre la kpɛ SFP dansarka.
     -ka furi-kyɛ wa e boŋkaŋa zaa, fo ba taa dabeɛŋ o barebo ka a pɔge a piiluu eŋɛ, saŋa na o emmo tɔɔrɔ naŋ na e, a fo mail toɔle naŋ daŋ koŋ ta.',
      'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'A paaloŋ %s e la zaglaa.A server aŋ koŋ baŋ wuli yɛlɛ mine.',
      'Partitioning and replication are now managed in primary configuration.' => 'Kyaabo ane pulluu pampana maŋ managye la peramere konfigiriseŋ poɔ.',
      'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Difiliti poɔ, a sɔtwaɛ ŋa sɛvera la pɛllɛ yi a vuo na ne o zu a aplikaaseŋ naŋ sɛvereɛ yire. A ŋaa soma la, kyɛ tere guubo irisik.
    Aseŋ ka fo konfiga CDN bee alternate pɛllɛ vuo na maa a irisik ŋa. CDN konfiguu meŋ naŋ baa la tontonnee. Nyɛ [[ %s | %s ]] na de sobituuri.',
      'Default address used as a "From" or "To" email address when an address is
    required but no meaningful address is available.
    If you configure inbound mail, you generally do not need to set this:
    the software will automatically generate and use a suitable mailbox on the
    inbound mail domain.
    Otherwise, this option should be configured to point at a valid mailbox which
    discards all mail sent to it. If you point it at an invalid mailbox, mail sent
    by the software and some mail sent by users will bounce. If you point it at a
    real user mailbox, that user will get a lot of mail they don\'t want.
    For further guidance, see **[[ %s | %s ]]** in the documentation.' => 'Difiliti adrɛse tona naŋ e "From" bee "To" eemail adrɛse ka adrɛse wa irikɔɛ kyɛ ka adrɛse yɛlɛ naŋ taa nimiri kyebe.
    Ka foŋ konfigie embone mail, fo ba la seŋ ka fo sɛte ŋa: a sɔtwaɛ na gyɛnerate a la omeŋɛ a toŋ ne mailbosi naŋ senne a embone mail vuo eŋɛ.
    Ka leɛ meŋ naane, a dabiri ŋa seŋ ka o konfigie na teɛŋ tɔgle mailbosi naŋ tona naŋ disikaadi mail zaa naŋ toɔle ko o. Ka foŋ teɛŋ o tɔgle mailbosi naŋ ba tona, mail a sɔtwaɛ naŋ toɔle ane mail mine tontonneba naŋ toɔle na viri leɛ la. Ka foŋ teɛŋ o tɔgle tontona meŋɛ mailbosi, ana tontona na, na nyɛ la mail yaga ba naŋ ba boɔrɔ.
    Ka foŋ wa boɔrɔ yɛlɛ naŋ na gu fo, nyɛ **[[ %s | %s ]]** a gansɛgere poɔ.',
      'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'A seŋ ka fo piili a daemons a toɔle a emaali, leɛ-mɛ a boɔbo nambare, kyɛ e yɛlɛ mine eebo.',
      'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Ka foŋ wa maale a PHP konfigiriseŋ eŋ baare, <strong>leɛpiili bonzaa ka a leɛre piili toma</strong>. Ka foŋ wa boɔrɔ soma yi leɛpiili bonzaa, nyɛ %s a sɛgere poɔ.',
      'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'A \'%s\' binare ba tõɔ nyɛ. Sɛte a wɛbsɛva %s gbaŋgbale vaarable a paale a daga na zie o naŋ be, bee paale ana daga kyɛ \'%s\' konfigirisiŋ poɔ.',
      'You can disable the email preference link in emails if users prefer smaller
    emails.' => 'Fo naŋ toɔŋ pɔge la a maali dɔlɔ mine a maali poɔ ka tontonneba wa boɔrɔ maali bili',
      'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => 'Nɔ-iri bambo mine naŋ tõɔŋ e la meŋɛ taabo (nyɛ a) bee gyamaa(a tontonneba naŋ maŋ tona neŋ maali yeltare).',
      'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'A sɛva ŋa nyɛ la "x-Mod-Pagespeed" bee "x-page-Speed" HTTP zu a boɔbo ŋa eŋɛ, naŋ wullo ka fo eŋ la "mod_pagespeed" a sɛva ŋa eŋɛ. A module ŋa ba tõna na tona ne a sɔtwaɛ ŋa. Aseŋ ka fo ŋmaa a module.',
      'Customized settings for applications.' => 'Zi balɛɛ mine ko a boɔbo.',
      'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipeint in the "To:" line.' => 'Daane wuli ka eemail na toɔle ko noba yaga na e la masɛgye boŋyeni kuribo, ka neɛzaa be a "To:" sɔɔmaa, bee masɛgyere yaga ka kaŋa zaa taa derɛ boŋyeni a "To:" poɔ sɔɔmaa.',
      'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
    messages.' => 'Fo naŋ toɔŋ pɔge la a \'\'te tɔ:\'\' ane \'\'Cc:\'\' baare yineŋ maali ka tontonneba wa boɔrɔ a yelbilii.',
      'Options for platform developers, including debugging.' => 'Iribu sere ko pilaafɛlɔm maaleba, te poɔ dibaagi.',
      'Allow a single mailbox to be used for all replies.' => 'Vuo maali daga yeni tona a nɔ-iri toma',
      'This option allows you to stop this service from sending data to most external
    services: it will disable email, SMS, repository mirroring, remote builds,
    Doorkeeper writes, and webhooks.
    This option is intended to allow an instance to be exported, copied, imported,
    and run in a test environment without impacting users. For example, if you are
    migrating to new hardware, you could perform a test migration first with this
    flag set, make sure things work, and then do a production cutover later with
    higher confidence and less disruption.
    Without making use of this flag to silence the temporary test environment,
    users would receive duplicate email during the time the test instance and old
    production instance were both in operation.' => 'A
    iruŋ ŋa maŋ vɛŋɛɛ ka tõɔŋ bare a saseɛ vuo ŋa a yi boma mine detereroo ko a saseɛ mie gyamaa mine: o maŋ vɛŋɛɛ ka email ba la tono, SMS, boma bimmo mine zie, vuo toɔre mine,
    dendore mine tukpeɛbo ziiri, ane saseɛ mie mine.
    A iruŋ ŋa boɔbo la ka o sage boma mine deterebo, zideyiraa kaŋa, tage yiibu mine zie aneŋ tage fomeŋɛ yi zie kaŋa kyɛ wuli tontonneba. Te seŋ, ka fooŋ gɛrɛ saseɛ boŋkpeɛre paala mine poɔre, fo naŋ baŋ e la gaabo enyɛ piiluu saŋa ane a yɛlɛ ama mine, tõɔ vuo a yɛlɛ toŋ toma, kyɛ e maaloo yel-leɛre mine neŋ nimizeeloŋ mine ane yelbafere yaga.
    Ka fooŋ ba tona neŋ a nambare ama a vɛŋ a enyɛ kombaŋ baare paaloŋ, tontnneba koŋ nyɛ email yɛlɛ a saŋa na a enyɛ eebo ane maale kore a saŋa na a maaloo eebo zaa naŋ tona toma.',
      'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access this server, like "http://devtools.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.' => 'A beesi URI ko a fur-kyɛ ŋa ba konfigie, ane nanda zuri koŋ toŋ soŋ te ta ka fo wa konfigie o.
    A seŋ ka fo sɛte a URI foŋ na de asɛɛse ne a sɛva ŋa, aseŋ "http://devtools.example.com/".
    Paale a protokɔl (http or https), laŋgbuli yuori, ane a pɔɔte numba ka foŋ wa tona ne pɔɔte gaŋ 80 (http) bee 443 (https).
    A are a iriquisi ŋa eŋɛ, a e ŋa a sɛgeroo soŋ la:
    %s
    Ka foŋ na konfigie a beesi URI, e a tannoo naŋ wuli a puli.',
      'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Daata-baasiri maale la a yoe-voe, ka defaali ko \'fabirika\' --ko pampana, a daata-baasi tɛɛtɛɛ e la defaali. Fo naŋ toɔŋ leɛre la yoe-voe ka fooŋ boɔrɔ. Gbɛɛ yaga, a ba seŋ ka fo e ŋaa ka fooŋ ba maala yɔllɔɔ kyɛ tona neŋ yoe-voe a yineŋ a sɛndi voe daata sɛɛtere.',
      'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Ko fõõ taa boŋyaga %s gbaŋgbale (like a development/staging environment and a production environment), sɛte a maaloo gbaŋgbale URI kyɛ a lɛ na ka eemail ane doorabol URIs mine na maŋ gyɛnerate wagere zaa ne liŋkere na teɛŋ tɔgle a maaloo gbaŋgbale. Ka fõõ ba wa sɛte, difiliti ga `%s`. Furi kyɛ yaga ba seŋ ka a sɛte a dabi-bogi ŋa.',
      'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Tontonneba na baŋ sɔre la sɛɛvese yobo yi hosi vori mine poɔ (for example, by creating a repository with a remote URL).
    Aŋaa na baŋ areko la guubo valibiliti ka sɛɛvese kyaare a sabnɛt na ne o zu na sage la tannoo bee oore sommeŋɛ duoro yi basage diibu HTTP GET, beesi kyaare a yizie IP adrɛse. Gbuli poɔ, hosiri zaa EC2 poɔ taa la sori na kpɛ ana sɛɛvese na.
    A dare ŋa wulo la pɛllɛ nɛtbolɔkere yelboɔre naŋ daŋ koŋ nyɛ. Yaga lɛ, aseŋ ka fo pore sommeŋɛ IP zaa naŋ be kyɛ.',
      'Provide a list of notification servers to enable real-time notifications.
    For help setting up notification servers, see **[[ %s | %s ]]** in the
    documentation.' => 'Bo yelmanwulli saseɛ mie mine a wuli wagre menne yelmanwulli mine.
    Ka sommo eŋɛ kyaare neŋ a yelmanwuli saseɛ mie na, nyɛ
     **[[ %s | %s ]]** a dokumete poɔŋ.',
      'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s' => 'PHP konfigere sommo la ko a sɔrooŋ yi a MySQL sɛɛva o naŋ gyonne a neŋ lookal faali yelzu.
    A toɔmo ŋa sɔŋɛɛ MySQL \'\'LOODI DAATA LOOKAL FAALI POORE \'\' guubu, kyɛ sage MySQL sɛɛva kannoo pagebo ko a lookal dɛɛke: a sɛɛva naŋ baŋ soore la a kilaaya ka o tere a o lookal faali yelzu, kyɛ ka a kilaaya tu a lɛ onaŋ yeli.
    A yi o naŋ maŋ ferɛ gba ka a ataaka burburi a saseɛ miri ŋa ka o gyoone a MySQL sɛɛva,a seŋ ka pɔge a iribu: a boɔbo ba taa tɔna kyɛ soma ka gbandi o.
    Ka fo naŋ na pɔge a iribu, maale: %s',
      'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.
    Disable this setting to continue.' => 'Fo sɛva konfigie la ne \'%s\', naŋ bege a sɔtwaɛ ŋa yi pɛllɛ yuobo, o boɔrɔ la asɛse na.
    ŋmaa a sɛgeroo ŋa na kyoge.',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'A sɔroo ŋa poɔ la "Host" kpeɛŋaa, neŋ, "%s". Maale ka o e kpeɛŋaa anaŋ tombiri ("."), aŋa like "example.com". Ama la boma mine naŋ seŋ ka a maale neŋ Gaŋpɛle maaloo.
    A na baŋ wuli la aŋa  URI leɛre la baŋ na ba tu. Fo naŋ baŋ maale biŋ a Gaŋpɛle neŋ URI pãã de neŋ tombiri (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). Ka fooŋ boɔra ka de a bare domain, leɛre a fo leɛroo kyɛ fe domain zaa. 
    Aŋa naŋ baŋ wuli la a fo webserver bee tagaraa erɛ la a "Host" kpeɛŋaa bee de a toma daga "Host" kpeɛŋaa.
    Sɔroo na poɔ la "Host" kpeɛŋaa.',
      'Sets the default color scheme.' => 'Maale meŋɛ waaloŋ.',
      'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'O meŋɛ, a sɔtwaɛ ŋa paale kpɛŋkpɛlle mamine sɛgere a UI poɔ, aŋa dɔre ko o "weigh In" a gaŋ "paale nyaabo", Maniphest poɔ. Ka foŋ wa boɔrɔ sããkonnoŋ UI yaga striŋgye aŋa "paale nyaabo", fo baŋ sɛte la flag ŋa ka o ŋmaa a kpɛŋkpɛlle ma yaga zie bare.',
      'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'A saseɛ miri ŋa toɔle la o toɔre enyɛ boɔbo a seŋ ka o JSON sagebo a puori. O nyɛɛ la JSON sagebo, kyɛ ka sagebo taa la vuo-pɛlaa kaŋa a piiluu ane a baaroo.
    Lɛ wuli ka fo leɛ maale la boma bee yɛlɛ mine eŋ kyɛ bare vuo-pɛlaa kaŋa yelbie mine kyɛ baŋ yuoro a %s bammo, bee a %s bammo pɔgebo. Iri vuo-pɛlaa dɛndɛŋ bare, kyɛ taa teɛroŋ ka fo iri a baaroo bammo.',
      'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'Fo naŋ baŋ eŋ la PHP neŋ %s, %s, or %s. Bonne naŋ bebe yuori LA %s.
    E a nyɛ:',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'KPAABO: ŋa eɛ la nimitɔɔre iruŋ, a naŋ tõɔ toŋ daana boɔba kpaaroo zona.
    Ka fooŋ bo pampana iri iribe zie na ( ka fo neŋ de \'%s\' paale neŋ), a saseɛ mie naŋ de toɔle ko la zubili mine kyɛ kyage neŋ \'%s\' tendaa yɛlɛ.',
      'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => 'Faali kponne paaŋ tona la. Pɔge a boma a konfigere tɔɔlɛ',
      'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => 'Ka \'%s\' ba kye, a saseɛ miri ŋa  koŋ baŋ toŋ toma bee nyɛɛ tɛɛtɛɛloŋ a boɔbo saŋa',
      'Send as %s' => 'De ko o aŋa %s',
      'Setup Error' => 'Leɛ maale a gbɛ-ŋmɛ',
      'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'A wulluu ko a leɛroŋ koroŋ (%s) ba la tona, bee ba la taa kannoo a yi a wɛbsʋʋva zie. A saseɛ miri maŋ toŋ neŋ la wulluu a naŋ toɔŋ biŋi duore kyaare a leɛbo. Ka a leɛroo ba la tono, maale o:
    %s
    Ka wulluu ŋa tono, vɛŋ ka o taa kannoo ko a wɛbsɛɛva. Fo maŋ na baŋ maale eŋ la a konfigere puliŋ a toɔŋ toneŋ wulluu toma mine.',
      'These alternative URIs will be able to access \'normal\' pages on your this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Ama e la URIs kaa iruu baŋ kaa la a yɛlɛ kaa e kyo kyo a gampɛle poɔ. Amine meŋ la aŋa 0Auth koŋ tõɔ. A yelzu naŋ la gaa eŋ o',
      'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => 'A leɛroo ŋa sagɛɛ ziiri mine tontonneba naŋ ba toŋ velaa bonso a saseɛ miri teɛre la teɛfaa kyaare neŋ lɛ a VCS miri naŋ tɔgele gaa neŋ tontonneba kaŋa zaa. Ŋaa maŋ soŋɛɛ ziiri mine boma bimmo naŋ da tona taa zitage yiibu zie kyɛ ba taa akante zaa ko a tontonneba bombinni ziiri, fo na baŋ pɔge la yelwonni mine kyaare neŋ yɛlɛ mine naŋ paale a boma ama bimmo ziiri eebo.',
    );
  }

}
