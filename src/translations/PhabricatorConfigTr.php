<?php

final class PhabricatorConfigTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
  'When a user takes an action which generates an email notification (like
commenting on a Differential revision), the "From" address can either be set
to the user\'s email address (like "alincoln@example.com") or the
"metamta.default-address" address.

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
    never arrive.' => '',
  'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.

This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.

This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.

Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => '',
  'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.

You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.

For more information on locked and hidden configuration, including details about this setup issue, see %s.

This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => '',
  'Review and modify configuration settings.' => '',
  'Improve security by configuring an alternate file domain.' => '',
  'Client Server' => 'Müşteri Sunucusu',
  'Listeners receive callbacks when interesting things occur.' => 'Dinleyiciler ilginç şeyler olduğunda geri arama alır.',
  'Update configuration in the database instead of in local configuration.' => 'Yerel yapılandırma yerine veritabanında yapılandırmayı güncelleyin.',
  'Column/Key' => 'Sütun/Anahtar',
  'Customize the logo and wordmark text in the header.' => 'Başlıktaki logo ve kelime işareti metnini özelleştirin.',
  'Configuring File Storage' => 'Dosya Deposunu Yapılandırma',
  '%s / %s' => '%s / %s',
  'Address ranges of cluster hosts.' => 'Küme ana bilgisayarlarının adres aralıkları.',
  'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.

If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.

It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.

Requests must include a valid "Host" header.' => 'Bu istekte "Barınma" başlığı bulunmuyor. Bu, web sunucunuzun (nginx veya Apache gibi) yanlış yapılandırılmış olması ve "Barınma" başlığının bu yazılıma ulaşmaması veya bir araç veya kitaplık kullanarak "Barınma" başlığı olmadan ham bir istekte bulunmanız anlamına gelebilir.

Bir web tarayıcısı kullanıyorsanız, web sunucusu yapılandırmanızı kontrol edin. Bir araç veya kitaplık kullanıyorsanız, isteğin nasıl oluşturulduğunu kontrol edin.

Başka bir ağ aygıtının (örneğin bir yük dengeleyici) başlığı kaldırması da mümkündür (ancak çok düşük bir ihtimaldir).

İstekler, geçerli bir "Barınma" başlığı içermelidir.',
  'Memory Usage' => 'Hafıza Kullanımı',
  'The request body that was sent began:' => '',
  'Impersonating users over the API is no longer supported.' => 'Kullanıcıların API üzerinden taklit edilmesi artık desteklenmemektedir.',
  'Table' => 'Tablo',
  'The best available MYSQL implementation is now selected automatically.' => 'Artık otomatik olarak en iyi MYSQL uygulaması seçiliyor.',
  'Ignore Setup Issue' => 'Kurulum Sorununu Yoksay',
  'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.

You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Bu seçenek, oturumu kapatmış kullanıcılar için bile her sayfada DarkConsole\'u etkinleştirmenizi sağlar. Bu yalnızca çıkış yapmış bir sayfada bir hata ayıklamanız gerektiğinde yararlıdır. Üretimde bu seçeneği etkinleştirmemelisiniz.

Bu seçeneğin herhangi bir etkisi olması için \'%s\' ayarlayarak DarkConsole\'u etkinleştirmeniz gerekir.',
  'Alternative URIs that can access this service.' => 'Bu hizmete erişebilen alternatif URI\'ler.',
  'Repository %s has unreplicated changes (for %s).' => '%s deposu çoğaltılmamış değişikliklere sahip (%s için).',
  'The controller or workflow which handled the request.' => 'İsteği işleyen denetleyici veya iş akışı.',
  'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => '"%s" seçeneği "%s" türündedir, ancak listenin "%s" dizinindeki değer "true" değildir.',
  'Applications application' => 'Uygulamalar uygulama',
  'This server is not configured in cluster mode.' => 'Bu sunucu, küme modunda yapılandırılmamış.',
  '%s created this configuration entry.' => '%s bu yapılandırma girişini oluşturdu.',
  'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Pigmentleri etkinleştirdiniz ve %s betiği kullanılabilir, ancak çalışmıyor gibi görünüyor.',
  'This column is missing a type specification.' => 'Bu sütunda bir tür belirtimi eksik.',
  'The current configuration has these %d value(s):' => 'Mevcut yapılandırması şu %d değerine sahiptir:',
  'Column Has No Specification' => 'Sütunun Özellikleri Yok',
  'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.

Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).

This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.

Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.

You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":

%s
Note that if you run other applications against the same database, they may not work in strict mode.

If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => '',
  'Delete configuration in the database instead of in local configuration.' => 'Yerel yapılandırma yerine veritabanındaki yapılandırmayı silin.',
  'No Email Preferences Link' => 'E-posta Tercihleri Bağlantısı Yok',
  'Marked activity "%s" as completed.' => '"%s" etkinliği tamamlandı olarak işaretlendi.',
  'The way VCS activity is attributed %s user accounts has changed.' => '',
  'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
prefixed with "Re:". If you enable this option, this software will add "Re:" to
the subject line of all mail which is expected to thread. If you\'ve set
\'metamta.one-mail-per-recipient\', users can override this setting in their
preferences.' => '',
  'Repository %s has unreplicated changes.' => '%s deposu çoğaltılmamış değişikliklere sahip.',
  'You have \'%s\' enabled in your PHP configuration.

This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'PHP yapılandırmanızda \'%s\' etkinleştirildi.

Bu seçenek, bu yazılım ile uyumlu değildir. Devam etmek için yapılandırmanızdan \'%s\' değerini kaldırın.',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Bu sistemdeki \'%s\' ikili dosyasının beklenmedik bir davranışı var: özdeş dosyalar iletildiğinde hata kodu olmadan çıkması bekleniyordu, ancak %d koduyla çıkıldı.',
  'No active repositories have outstanding errors.' => 'Hiçbir etkin depoda olağanüstü hatalar yoktur.',
  'Array containing list of disabled applications.' => 'Kaldırılan uygulamaların listesini içeren dizi.',
  'Usage' => 'Kullanım',
  'Rebuild Repository Identities' => 'Depo Kimliklerini Yeniden Oluştur',
  'Move port information from `%s` to `%s` in your config.' => 'Bağlantı noktası bilgisini yapılandırmanızda "%s" üzerinden "%s" taşıyın.',
  'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Bu seçenek web kullanıcı arayüzünden düzenlenemez. Çöp toplayıcı politikalarını ayarlamak için %s kullanın.',
  'Better Table Engine Available' => 'Daha İyi Masa Motoru Var',
  'Set a local configuration value.' => 'Yerel bir yapılandırma değeri belirleyin.',
  'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Büyük dosya depolama alanı yapılandırılmadı, bu da maksimum dosya yükleme boyutunu sınırlayacak. Yüklemeleri ve depolamayı yapılandırma talimatları için %s bakın.',
  'This option controls whether users can edit account email addresses and profile real names.

If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Bu seçenek, kullanıcıların hesap e-posta adreslerini ve profil gerçek adlarını düzenleyip düzenleyemediklerini kontrol eder.

Hesap bilgilerinin başka bir yetkili sistemden otomatik olarak senkronize edilmesini ayarlarsanız, kullanıcıların bu düzenlemeleri yapmasını engelleyerek bilgilerin her iki sistemde de tutarlı kalmasını sağlayabilirsiniz.',
  '%s deleted %s (again?).' => '%s, %s sildi (yine mi?).',
  'Access log format.' => 'Erişim günlüğü biçimi.',
  'Use Pygments to highlight code?' => 'Kodları vurgulamak için Pygments kullanılsın mı?',
  'Access log location.' => 'Erişim günlüğü konumu.',
  'Your webserver is not handling GET parameters properly.' => 'Web sunucunuz GET parametrelerini düzgün işlemiyor.',
  'Repository Errors' => 'Depo Hataları',
  'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bilinen bir sınıfın adı değildir. Geçerli seçimler: %s.',
  'The keyring stores master encryption keys. For help with configuring a keyring
and encryption, see **[[ %s | Configuring Encryption ]]**.' => '',
  'Short' => 'Kısa',
  'Large File Storage Not Configured' => 'Büyük Dosya Depolama Yapılandırılmamış',
  'When email is sent, what format should the software use for users\' email
addresses? Valid values are:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

The default is `full`.' => '',
  'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => '',
  'Use "bin/phd debug ..." to get a detailed daemon execution log.' => '',
  'Migrating file-based config to more modern config...' => 'Dosya tabanlı yapılandırmayı daha modern yapılandırmaya geçiriyor...',
  'Full' => 'Dolu',
  'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Veritabanlarını ayarlamak için depolama yükseltme komut dosyasını çalıştırın (ana bilgisayar "%s" başlatılmadı).',
  'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => 'Henüz postaları yapılandırmadınız, bu nedenle bu sunucuya giden posta gönderemez veya gelen posta alamaz. Ayrıntılar için "cluster.mailers" yapılandırma ayarına bakın.',
  'Unrecognized verb: %s' => 'Tanınmayan fiil: %s',
  'WARNING: This is a prototype option and the description below is currently pure
fantasy.

This option allows you to make this service aware of database read replicas so
it can monitor database health, spread load, and degrade gracefully to
read-only mode in the event of a failure on the primary host. For help with
configuring cluster databases, see **[[ %s | %s ]]** in the documentation.' => '',
  'Schemata Issues' => 'Schemata Sorunları',
  'Expected Collation' => 'Beklenen Harmanlama',
  'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => '"%s" seçeneği "%s" türündedir, ancak değer bir liste değildir: doğal olmayan veya seyrek anahtarları olan bir haritadır.',
  'Use Normal HTTP Redirects' => 'Normal HTTP Yönlendirmelerini Kullan',
  'Configuration key \'%s\' is not set in %s configuration!' => '\'%s\' yapılandırma anahtarı %s yapılandırmasında ayarlanmadı!',
  'Multi-Factor Optional' => 'Çok Faktörlü Opsiyonel',
  'The \'%s\' extension is not installed. Without \'%s\', this server may not be able to determine the MIME types of uploaded files.' => '\'%s\' uzantısı yüklü değil. \'%s\' olmadan, bu sunucu yüklenen dosyaların MIME türlerini belirleyemeyebilir.',
  'The configuration option \'%s\' has been removed. You may delete it at your convenience.

%s' => '\'%s\' yapılandırma seçeneği kaldırıldı. İstediğiniz zaman silebilirsiniz.

%s',
  'Disable Pagespeed' => 'Sayfa Hızını Devre Dışı Bırak',
  'Elasticsearch index exists but needs correction.' => 'Elasticsearch dizini var, ancak düzeltilmesi gerekiyor.',
  'Nullable' => 'Sıfırlanabilir',
  'No "Host" Header' => '"Ana Bilgisayar" Üstbilgisi Yok',
  'Activity "%s" did not need to be marked as complete.' => '"%s" etkinliğinin tamamlanmış olarak işaretlenmesi gerekmez.',
  'SSH error log location.' => 'SSH hata günlüğü konumu.',
  'The translation implementation has changed and providers are no longer used or supported.' => 'Çeviri uygulaması değişti ve sağlayıcılar artık kullanılmıyor veya desteklenmiyor.',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '"%s" seçeneği "%s" türündedir, ancak sağladığınız değer geçerli bir JSON listesi değil. Komut satırından bir liste seçeneği ayarlarken, değeri JSON\'da belirtin. Kabuğunuzun değerini belirtmeniz gerekebilir (örneğin: \'["a", "b", ...]\').',
  'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'SSH erişim günlüğü biçimi. Yolu ayarlamak için %s kullanın. Mevcut değişkenler:',
  'This table can use a better table engine.' => 'Bu tablo daha iyi bir tablo motoru kullanabilir.',
  'PHP post_max_size Not Configured' => 'PHP post_max_size Yapılandırılmadı',
  'Can Not Connect to MySQL' => 'MySQL\'e Bağlanılamıyor',
  'Option "%s" is of type "%s", but the configured value is not a boolean.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir boole değeri değildir.',
  'Disable developer mode' => 'Geliştirici modunu devre dışı bırak',
  'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => '',
  'Profile 0.1%% of all requests' => 'Profil tüm istekleri %%0.1\'i',
  'This option has been replaced with the more granular option `%s`.' => 'Bu seçenek daha ayrıntılı seçenek olan `%s` ile değiştirildi.',
  'Require all users to configure multi-factor authentication.' => 'Tüm kullanıcıların çok faktörlü kimlik doğrulamasını yapılandırmasını zorunlu kılın.',
  'Stop this software from sending any email, etc.' => 'Bu yazılımın herhangi bir e-posta vb. göndermesini durdurun.',
  'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => '\'%s\' ikili dosyası bulunamadı. \'%s\' simgesine dokunun veya web sunucusunun %s çevresel değişkenini bulunduğu dizini içerecek şekilde ayarlayın veya yapılandırmasında bu dizini \'%s\' değerine ekleyin.',
  'Configuration Guide: Locked and Hidden Configuration' => 'Yapılandırma Kılavuzu: Kilitli ve Gizli Yapılandırma',
  'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Bu seçenek ayrıntılı hata raporlamayı (yığın izleri, hata bilgileri) etkinleştirir ve her yeniden yüklemede statik varlıkların disk okumalarını zorlar.',
  'Wrote configuration key "%s" to local storage (in file "%s").' => '',
  'These alternative URIs will be able to access \'normal\' pages on this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Bu alternatif URI\'ler bu kurulumda \'normal\' sayfalara erişebilecek. OAuth gibi diğer özellikler çalışmaz. Bunun en önemli kullanım alanı, yüklemeleri etki alanları arasında taşımaktır.',
  '(%s%s) %s' => '(%s%s) %s',
  'Nonreplicating Replica' => 'Çoğaltılmayan Çoğaltma',
  'Run these %d command(s):' => 'Bu %d komutunu çalıştırın:',
  'Pattern' => 'Desen',
  'Unknown \'%s\' Version' => 'Bilinmeyen \'%s\' Sürümü',
  'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => '',
  'Define one or more mail transmission services. For help with configuring
mailers, see **[[ %s | %s ]]** in the documentation.' => '',
  'Feed Hooks Deprecated' => 'Besleme Kancaları Kullanımdan Kaldırıldı',
  'Purge Caches' => 'Önbellekleri Temizle',
  'Configure services to run on a cluster of hosts.' => 'Hizmetleri bir ana bilgisayar kümesinde çalışacak şekilde yapılandırın.',
  'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'PHP yapılandırmanızda %s en az 32MB olarak ayarlayın. Daha küçük bir değere ayarlandığında, büyük dosya yüklemeleri düzgün çalışmayabilir.',
  'Show Recipient Hints' => 'Alıcı İpuçlarını Göster',
  'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha\'ya kaydolarak elde edilen Recaptcha özel anahtarı.',
  'MySQL InnoDB Engine Not Available' => 'MySQL InnoDB Motoru Kullanılamıyor',
  'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.

You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'Veritabanı ana bilgisayarı "%s" %s seçeneğini desteklemiyor. Sık kullanılan kelimeler için arama sonuçları bulamazsınız. MySQL\'i daha yeni bir sürüme yükselterek bu seçeneğe erişebilirsiniz.

Elasticsearch\'ı daha sonra yapılandırmayı planlıyorsanız veya yaygın kelimeleri aramakla ilgilenmiyorsanız bu uyarıyı göz ardı edebilirsiniz.',
  'Proto' => 'Proto',
  'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.

Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'HTTP Sıkı Aktarım Güvenliği (HSTS), tarayıcılara siteye yalnızca HTTPS üzerinden erişilmesi gerektiğini, HTTP yerine erişilmesi gerektiğini bildiren bir başlık gönderir. Bu, bir rakibin ağınıza eriştiği bir saldırıyı etkisiz hale getirir, ardından istekleri güvenli olmayan bir bağlantı üzerinden proxy yapar.

Güvenli olmayan içeriği düz HTTP üzerinden sunuyorsanız (veya sunmayı planlıyorsanız) bu seçeneği etkinleştirmeyin. Kullanıcıların tarayıcıları ayarı kabul ettikten sonra bu değişikliği geri almak çok zordur.',
  '(No Value Configured)' => '(Yapılandırılmış Değer Yok)',
  'Allow editing' => 'Düzenlemeye izin ver',
  'Configure full-text search services.' => 'Tam metin arama hizmetlerini yapılandırın.',
  'The HTTP method.' => 'HTTP yöntemi.',
  'The webserver\'s host name.' => 'Web sunucusunun ana bilgisayar adı.',
  'PHP Timezone Invalid' => 'PHP Saat Dilimi Geçersiz',
  'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => '%s çevresel değişken boştur. Bu sunucunun `%s`, `%s`, `%s` ve `%s` gibi bazı sistem komutlarını yürütmesi gerekir. Bu komutları yürütmek için, ikili dosyaların web sunucusunun %s mevcut olması gerekir. Yapılandırmada ek yollar belirleyebilirsiniz.',
  'Integration with Recaptcha' => 'Recaptcha ile Entegrasyon',
  'Global cap for size of generated emails (bytes).' => 'Oluşturulan e-postaların boyutu (bayt) için genel sınır.',
  'Access Logs' => 'Erişim Günlükleri',
  'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Bu sunucuda bilinen "%s" kötü sürümü ("%s") var. Bu sürüm desteklenmiyor veya daha yeni bir sürümde düzeltilen önemli hatalar veya güvenlik açıkları içeriyor.',
  'URI where this software is installed.' => 'Bu yazılımın kurulu olduğu URI.',
  'Character Set' => 'Karakter Seti',
  'Formats' => 'Biçimler',
  'Ambiguous Leader' => 'Belirsiz Lider',
  'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => '"%s" yapılandırma anahtarı kilitli ve yalnızca yerel yapılandırmada ayarlanabilir. Daha fazla bilgi için belgelerdeki "%s" başlığına bakın.',
  'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.

If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.

However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.

In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.

To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.

You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => 'Bu seçenek, oluşturulması çok uzun (30 saniyeden fazla) zaman alan sayfalarda hata ayıklamaya yardımcı olabilir.

Bir sayfanın işlenmesi yavaşsa (ancak 30 saniyeden az sürüyorsa), neden yavaş olduğunu anlamak için kullanılacak en iyi araçlar genellikle DarkConsole hizmet çağrısı profiler ve XHProf\'tur.

Ancak, bir isteğin geri dönmesi çok uzun sürerse, bazı bileşenler (Apache, nginx veya PHP\'nin kendisi gibi) tamamlanmadan isteği iptal edebilir. Bu, sayfa performansını ayrıntılı olarak anlamak için profil oluşturma araçlarını kullanmanızı engelleyebilir.

Bu durumlarda, sayfayı daha az saniye (örneğin, 10) sonra iptal etmeye zorlamak ve yararlı bir yığın izini dökmek için bu seçeneği kullanabilirsiniz. Bu, bir sayfanın neden asılı olduğu hakkında yararlı bilgiler sağlayabilir.

Bu seçeneği kullanmak için, küçük bir sayıya ayarlayın (10 gibi) ve asılı bir sayfayı yeniden yükleyin. Sayfa 10 saniye sonra çıkmalı ve size bir yığın izi vermelidir.

İşiniz bittiğinde bu seçeneği kapatmalısınız (0 olarak ayarlayın). Açık bırakmak, zaman sınırına ulaşmasalar bile tüm istekler için küçük bir miktar ek yük oluşturur.',
  'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Bu seçenek, birçok prototip uygulamasının bitmemiş doğasını vurgulamak için `%s` olarak yeniden adlandırıldı. Mevcut ayarınız taşındı.',
  'Clients' => 'Müşteriler',
  'Expected Columns' => 'Beklenen Sütunlar',
  'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Taskmasters artık otomatik ölçeklendirme deposu kullanıyor. Havuz boyutunu `%s` ile yapılandırabilirsiniz.',
  'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Bu yapılandırma kilitlidir ve web arayüzünden düzenlenemez. Düzenlemek için %2$s içinde %s kullanın.',
  'Multiple %s subclasses contain an option named \'%s\'!' => 'Birden fazla %s alt sınıf, \'%s\' adlı bir seçenek içerir!',
  'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Gelişmiş sözdizimi vurgulaması sağlamak için MulPygments yüklenmeli ve etkinleştirilmelidir.',
  'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
\'[Commented]\' in them. This makes subjects more useful, but might break
threading on some clients. If you\'ve set \'%s\', users can override this setting
in their preferences.' => '',
  'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Recaptcha\'ya kaydolarak elde edilen Recaptcha genel anahtarı.',
  'Database Servers' => 'Veritabanı Sunucuları',
  'Specify a configuration key to delete.' => 'Silinecek bir yapılandırma anahtarı belirtin.',
  'Search Servers' => 'Sunucuları Ara',
  'This web host ("%s") is set to a very different time than a database host "%s".' => 'Bu web barındırıcısı ("%s") "%s" veritabanı barındırıcısından çok farklı bir zamana ayarlanmış.',
  'Send Mail To Each Recipient' => 'Her Alıcıya Posta Gönder',
  'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'MySQL "local_infile" seçeneği etkin. Bu seçenek güvensizdir.',
  'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Elasticsearch için şeması değişti veya Elasticsearch dizini otomatik olarak oluşturdu. Dizini yeniden oluşturmak için aşağıdaki komutu kullanın.',
  'Remove Custom Logo' => 'Özel Logoyu Kaldır',
  'No notification servers are configured.' => 'Hiçbir bildirim sunucusu yapılandırılmamış.',
  '(Not Supported)' => '(Desteklenmiyor)',
  'Nonstandard port' => 'Standart dışı bağlantı noktası',
  'Don\'t embed Commons videos' => 'Commons videolarını yerleştirme',
  'This configuration has been removed. You can safely delete it.

%s' => 'Bu yapılandırma kaldırıldı. Güvenli bir şekilde silebilirsiniz.

%s',
  'Options relating to translations.' => 'Çeviri ile ilgili seçenekler.',
  'Configure the UI, including colors.' => 'Renkler de dahil olmak üzere kullanıcı arayüzünü yapılandırın.',
  'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => '\'%s\' uzantısı yalnızca bazı resim türlerini destekliyor. Bu sunucu, siz onları destekleyerek \'%s\' oluşturana kadar eksik türdeki görüntüleri işleyemez. Desteklenen türler: %s. Eksik türler: %s.',
  'Use Private Replies (More Secure)' => 'Özel Yanıtları Kullan (Daha Güvenli)',
  'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Tüm \'*.x.bak\' dosyasına \'.x\' olarak davranın. NOT: Eşlemeyi \'1\' olarak belirleyerek grup 1\'i yakalamak için eşleriz',
  'Other Services' => 'Diğer Hizmetler',
  'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.' => 'Daemon\'ları çalıştıracak bir sistem kullanıcısı belirtin. Öncelikle, bu kullanıcı bu yazılımın içe aktardığı veya yönettiği havuzların çalışma kopyalarına sahip olacaktır. Bu seçenek yeni ve deneyseldir.',
  'Send as User Taking Action' => 'Kullanıcı Olarak Eylemi Gönder',
  'Security options.' => 'Güvenlik seçenekleri.',
  'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '"%s" seçeneği "%s" türündedir ve komut satırında JSON değer listesi olarak belirtilmelidir. Kabuğunuzun değerini belirtmeniz gerekebilir (örneğin: \'["a", "b", ...]\').',
  'Expected Unique' => 'Beklenen Benzersiz',
  'Configuring a Preamble Script' => 'Bir Başlangıç Betik Yapılandırma',
  'Default Partition' => 'Varsayılan Bölüm',
  'Domain used for reply email addresses.' => 'Yanıt e-posta adresleri için kullanılan alan adı.',
  'You can find more information about rebuilding the search index here: %s' => 'Arama dizinini yeniden oluşturma hakkında daha fazla bilgiyi burada bulabilirsiniz: %s',
  'Prevent editing' => 'Düzenlemeyi önle',
  'Whitelist 1.2.3.*' => 'Beyaz liste 1.2.3.*',
  'Control how user names are rendered in mail.' => 'Kullanıcı adlarının e-postada nasıl görüntüleneceğini kontrol edin.',
  'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Bu yapılandırma artık ilgili değildir, çünkü arka plan yapılandırma değişikliklerinde arka plan otomatik olarak yeniden başlatılır.',
  'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'Arayüzü basitleştirmek için Diferansiyel revizyon listesi görünüm yaşı kullanıcı arayüzü öğeleri kaldırıldı.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => '\'%s\' yapılandırma seçeneği geçersiz. URI\'nin bir yolu OLMAMALIDIR, ör. \'%s\' iyidir, ancak \'%s\' doğru değil. Bu yazılım tüm bir alana kurulmalıdır; bir yola kurulamaz.',
  'Separate values with newlines.' => 'Değerleri yeni satırlarla ayırın.',
  'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => '',
  'Define one or more fulltext storage services. Here you can configure which
hosts will handle fulltext search queries and indexing. For help with
configuring fulltext search clusters, see **[[ %s | %s ]]** in the
documentation.' => '',
  'Exception Handlers' => 'İstisna İşleyicileri',
  'This schema has the wrong nullable setting.' => 'Bu şema yanlış boş değer ayarına sahip.',
  'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => '\'%s\' yapılandırma seçeneği geçersiz. URI \'%s\' veya \'%s\' ile başlamalıdır.',
  'Unsupported/Insecure "%s" Version' => 'Desteklenmeyen/Güvensiz "%s" Sürümü',
  'This option does not have a custom type!' => 'Bu seçeneğin özel bir türü yoktur!',
  'Require administrators to approve new accounts.' => 'Yöneticilerden yeni hesapları onaylamasını iste.',
  'Authentication Configuration Unlocked' => '',
  'Health' => 'Sağlık',
  'System user to run daemons as.' => 'Sistem kullanıcısı olarak daemonları çalıştıracak.',
  'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 

After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => '',
  'Unknown schema status "%s"!' => 'Bilinmeyen şema durumu "%s"!',
  'MySQL May Run Slowly' => 'MySQL Yavaş Çalışabilir',
  'Too many arguments: expected one key.' => 'Çok fazla argüman: beklenen bir anahtar.',
  'List of Users Without MFA' => 'MFA\'sız Kullanıcıların Listesi',
  'IMPORTANT: The upstream does not provide support for prototype applications.

This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are disabled, because they are often not yet developed enough to be generally usable. You can enable this option to enable them if you\'re developing applications or are interested in previewing upcoming features.

To learn more about prototypes, see [[ %s | %s ]].

After enabling prototypes, you can selectively disable them (like normal applications).' => 'ÖNEMLİ: Yukarı akış, prototip uygulamaları için destek sağlamaz.

Bu platform, **gelişimin erken safhasında** olan prototip uygulamaları içerir. Varsayılan olarak, prototip uygulamaları yüklenmez, çünkü genellikle henüz kullanılabilir olacak kadar gelişmemiştir. Uygulama geliştiriyorsanız veya gelecek özellikleri önizlemek istiyorsanız, bunları yüklemek için bu seçeneği etkinleştirebilirsiniz.

Prototipler hakkında daha fazla bilgi edinmek için, [[ %s | %s ]] sayfasına bakın.

Prototipleri etkinleştirdikten sonra, bunları normal olarak kaldırabilirsiniz (normal uygulamalar gibi).',
  'No "Host" header present in request.' => 'İstekte "Ana Bilgisayar" başlığı yok.',
  'Value for option "%s" of type "%s" must be either "true" or "false".' => '"%2$s" türündeki "%s" seçeneğinin değeri "true" veya "false" olmalıdır.',
  'Storage engines are now discovered automatically at runtime.' => 'Depolama motorları artık çalışma zamanında otomatik olarak keşfediliyor.',
  'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Bu yazılım, bükülebilir CPU ile çok küçük bir EC2 örneğine ("%s" sınıfı) yüklenmiş gibi görünüyor. Bu kesinlikle önerilmez. Bu yazılımın düzenli olarak CPU\'ya ihtiyacı vardır ve bu örnekler genellikle CPU kısıtlamasıyla boğulur. Bunun yerine normal CPU\'lu bir örnek kullanın.',
  'Footer configuration is not valid: value must be a list of items.' => 'Altbilgi yapılandırması geçerli değil: değer bir öğe listesi olmalıdır.',
  'Edit "%s"' => '"%s" düzenle',
  'Don\'t embed YouTube videos' => 'YouTube videolarını yerleştirme',
  'Disable PHP %s' => 'PHP %s devre dışı bırak',
  'Configure master encryption keys.' => 'Ana şifreleme anahtarlarını yapılandırın.',
  'Mailers Not Configured' => 'Yapılandırılmayan Postalar',
  'Daemons no longer use PID files.' => 'Arkaplan uygulamaları artık PID dosyalarını kullanmıyor.',
  'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => '"%s" veritabanı eşlemesi eşleme olarak listeleniyor, ancak şu anda eşlenmiyor. Master başarısız olursa veri kaybına karşı savunmasızsınız.',
  'Garbage Collectors' => 'Çöp Toplayıcılar',
  '%s edited this configuration entry.' => '%s bu yapılandırma girişini düzenledi.',
  'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.

To clear this setup issue, install the extension and restart your webserver.

You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => '',
  'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).

If not set, no log will be written.' => 'SSH günlüğünü etkinleştirmek için bir yol belirtin. Bu günlük, SSH erişimi hakkında normal bir SSH günlüğünden daha ayrıntılı bilgi sağlayabilir (örneğin, oturum açmış kullanıcıları, komutları ve diğer uygulama verilerini gösterebilir).

Ayarlanmazsa, günlük yazılmaz.',
  'Send Mail To All Recipients' => 'Tüm Alıcılara Posta Gönder',
  'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.

This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.

Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.

(This problem can be caused by a missing "B" in your RewriteRule.)' => 'Bu yazılım, web sunucunuzun yolları doğru şekilde yeniden yazıp yazmadığını test etmek için alışılmadık bir yolla bir test isteği gönderdi. Yol doğru bir şekilde iletilmedi.

Bu yazılım, "%s" yoluna bir istek gönderdi ve web sunucusunun "%s" için bir istek alması için bu yolun kodunu çözmesini ve yeniden yazmasını bekledi. Ancak, bunun yerine "%s" için bir istek aldı.

Yeniden yazma kurallarınızın, belgelerdeki talimatları izleyerek doğru yapılandırıldığını doğrulayın. Yol kodlaması düzgün çalışmıyorsa, diğer sorunların yanı sıra depolarda olağandışı adlara sahip dosyalara erişemezsiniz.

(Bu soruna RewriteRule\'unuzdaki eksik "B" neden olabilir.)',
  'Your install has no current setup issues to resolve.' => 'Yüklemenizde çözülecek güncel kurulum sorunu yok.',
  'Subschemata Have Failures' => 'Subschemata Arızaları Var',
  'Save Config Entry' => 'Yapılandırma Girişini Kaydet',
  '%s of %s' => '%s - %s',
  'Setup MySQL Schema' => 'MySQL Şemasını Kur',
  ' (%s)' => ' (%s)',
  'Not Available' => 'Mevcut Değil',
  'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Bu komutlar işe yaramazsa Google\'ı deneyin. PHP uzantılarını yükleme işlemi bu yazılıma özgü değildir ve bunları sisteminize yüklemek için bulabileceğiniz tüm talimatlar çalışmalıdır. Mac OS X\'te Homebrew\'u denemek isteyebilirsiniz.',
  'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
smaller messages. The actions themselves will still work properly.' => '',
  'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Bu seçenek kaldırıldı, anasayfa özelleştirmesi sağlamak için Gösterge Tabloları\'nı kullanabilirsiniz. Daha fazla bilgi için T11533\'e bakın.',
  'Data Cache' => 'Veri Önbelleği',
  'Configure the access logs, which log HTTP/SSH requests.' => 'HTTP/SSH isteklerini kaydeden erişim günlüklerini yapılandırın.',
  '%ss Behind' => '%s Arkasında',
  'The PID of the server process.' => 'Sunucu işleminin PID\'si.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
            \'installed on an entire domain; it can not be installed on a path.' => '',
  'Blacklist subnets to prevent user-initiated outbound requests.' => 'Kullanıcı tarafından başlatılan giden istekleri önlemek için alt ağları kara listeye alın.',
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
' => '',
  'No Outbound Requests' => 'Giden İstek Yok',
  'Primary install URI, for multi-environment installs.' => 'Çok ortamlı yüklemeler için birincil yükleme URI\'si.',
  'Global access controls now exist, see `%s`.' => 'Artık küresel erişim kontrolleri mevcut, `%s` bakın.',
  'Your webserver is not handling compressed request bodies properly.' => '',
  'Whitelists editor protocols for "Open in Editor".' => '"Editör\'de Aç" için beyaz listeler düzenleyici protokolleri.',
  'Unable to connect to MySQL!

%s

Make sure databases connection information and MySQL are correctly configured.' => 'Mysql\'e bağlanılamıyor!

%s

Veritabanı bağlantı bilgilerinin ve MySQL\'in doğru yapılandırıldığından emin olun.',
  'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => '"Re: Prefix" ve "Vary Subject" ayarları artık genel ayarlarda yapılandırıldı.',
  'You have no unresolved setup issues.' => 'Çözümlenmemiş kurulum sorunlarınız yok.',
  'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Bu yapılandırma gizlidir ve web arayüzünden düzenlenemez veya görüntülenemez.',
  'Local Disk Storage Not Readable/Writable' => 'Yerel Disk Depolama Okunabilir/Yazılabilir Değil',
  'Override translations.' => 'Çevirileri geçersiz kıl.',
  'Cluster Configuration Out of Sync' => 'Küme Yapılandırması Senkronize Değil',
  'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'x.com için ayarlanan çerezler de y.x.com için gönderilir. Örneklerin her iki etki alanında da çalıştığını varsayarsak, bu durum oturum açmanızı engelleyen bir çakışmaya neden olacaktır.',
  'This option has been removed. You may delete it at your convenience.' => 'Bu seçenek kaldırıldı. İstediğiniz zaman silebilirsiniz.',
  'You can find more information about this new identity mapping here: %s' => 'Bu yeni kimlik haritalaması hakkında daha fazla bilgiyi burada bulabilirsiniz: %s',
  'After rebuilding the index, run this command to clear this setup warning:' => 'Dizini yeniden oluşturduktan sonra, bu kurulum uyarısını silmek için şu komutu çalıştırın:',
  'Footer item with index "%s" is invalid: %s' => '"%s" dizinine sahip altbilgi öğesi geçersiz: %s',
  'Unknown Configuration Option "%s"' => 'Bilinmeyen Yapılandırma Seçeneği "%s"',
  'Truncate at 1MB' => '1 MB\'ta kes',
  'Access key for Amazon S3.' => 'Amazon S3 için erişim anahtarı.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => '\'%s\' okunabilir olmadığından PATH bileşeni \'%3$s\' (\'%s\' mutlak yolu olarak çözülür) kullanılamaz.',
  'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Maniphest alanları artık otomatik olarak yükleniyor. Bunları `%s` ile yapılandırabilirsiniz.',
  'This key is expected to exist, but does not.' => 'Bu anahtarın olması beklenir, ancak yoktur.',
  'Persistence' => 'Süreklilik',
  'This schema is expected to exist, but does not.' => 'Bu şemanın olması bekleniyor, ancak yok.',
  'You can provide a custom highlighter engine by extending class %s.' => '%s sınıfını genişleterek özel bir vurgulayıcı motoru sağlayabilirsiniz.',
  'Do Not Use Pygments' => 'Pigment Kullanmayın',
  'Up to Date' => 'Güncel',
  'Configure core options, including URIs.' => 'URI\'ler dahil temel seçenekleri yapılandırın.',
  '(empty)' => '(boş)',
  'This key has the wrong uniqueness setting.' => 'Bu anahtar yanlış benzersizlik ayarına sahip.',
  'When users set or reset a password, it must have at least this many characters.' => 'Kullanıcılar bir parola ayarladığında veya sıfırladığında, en azından bu kadar karakter içermelidir.',
  'Additional configuration options to lock.' => 'Kilitlemek için ek yapılandırma seçenekleri.',
  'Override what language files (based on filename) highlight as.' => 'Hangi dil dosyalarının (dosya adına bağlı olarak) vurgulanacağını geçersiz kılın.',
  'Bad "Host" Header' => 'Bozuk "Ana Bilgisayar" Başlığı',
  'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => 'Birden fazla alıcıya gönderilen e-postaların, "Kime:" satırında herkesin bulunduğu tek bir mesaj mı yoksa "Kime:" satırında tek bir alıcı bulunan birden fazla mesaj mı oluşturularak gönderileceğini kontrol eder.',
  'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => '"%s" seçeneği "%s" türündedir, ancak listenin "%s" dizinindeki öğe bir dize değildir.',
  'MySQL port to use when connecting to the database.' => 'Veritabanına bağlanırken kullanılacak MySQL portu.',
  'Trying to add duplicate key "%s"!' => 'Yinelenen anahtar "%s" eklenmeye çalışılıyor!',
  'Option "%s" is of type "%s", but the configured value is not a string.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir dize değildir.',
  'User Guide: Amazon RDS' => 'Kullanım Kılavuzu: Amazon RDS',
  'You have \'%s\' enabled in your PHP configuration.

This feature is "highly discouraged" by PHP\'s developers, and has been removed entirely in PHP8.This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => '',
  'Repository %s has an ambiguous leader.' => '%s deponun belirsiz bir lideri var.',
  'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.

If not set, no log will be written.' => '',
  'The \'%s\' extension is not installed. Without \'%s\' support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => '\'%s\' uzantısı yüklü değil. \'%s\' desteği olmadan, bu sunucu resimleri işleyemez veya yeniden boyutlandıramaz (örneğin, küçük resimler oluşturmak için). \'%s\' yükleyin veya etkinleştirin.',
  'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.

Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.

To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => '',
  'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.

PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.

(Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)

The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.

You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Sürükle ve bırak veya API yoluyla bir dosya yüklediğinizde, parçalar kalıcı depolama alanına yazılmadan önce belleğe alınmalıdır. Bu sunucu, yüklenirken bu parçaları saklamak için belleğe ihtiyaç duyar, ancak PHP şu anda kullanılabilir belleği ciddi şekilde sınırlayacak şekilde yapılandırılmıştır.

PHP işlemleri şu anda çok az boş hafıza alanına sahiptir (%s). İyi çalışmak için süreçlerin en az %s olması gerekir.

(Uygulamanın kendisinin de kullanılabilir belleğe sığması gerektiğini unutmayın, bu nedenle bellek sınırının altındaki belleğin tamamı iş yüklerini çalıştırmak için kullanılamaz.)

Bu sorunu çözmenin en kolay yolu, PHP yapılandırmanızda bellek sınırını devre dışı bırakmak için %s %s ayarlamaktır. İşlem belleğini sınırlamak için bu seçeneğin kullanılmasında genellikle çok az değer vardır veya hiç değer yoktur.

Ayrıca sınırı artırabilir veya bu sorunu göz ardı edebilir ve büyük dosyaların yüklenmesi ve büyük isteklerin işlenmesi ile ilgili sorunlarla karşılaşabileceğinizi kabul edebilirsiniz.',
  'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'Bildirim sunucusunun yapılandırması önemli ölçüde değişti. Tartışma için T10794\'e bakınız.',
  'Read option value from stdin.' => 'Seçenek değerini stdin\'den okuyun.',
  'Database source is not configured properly' => 'Veritabanı kaynağı düzgün yapılandırılmamış',
  'Don\'t Require Manual Approval' => 'Manüel Onay Gerektirmez',
  'Column Type' => 'Sütun Türü',
  'Truncate at 512KB' => '512KB\'de kısalt',
  'Cache' => 'Önbellek',
  'Automatically profile some percentage of pages.' => 'Sayfaların bazı yüzdelerini otomatik olarak profillendirin.',
  'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Kullanmak için açık S3 uç noktası. Bu, `amazon-s3.region` da seçtiğiniz bölgeye karşılık gelen uç nokta olmalıdır. Bu yazılım, bazı uç nokta konumları düzensiz olduğundan doğru uç noktayı otomatik olarak belirleyemiyor.',
  'Admin Server' => 'Yönetici Sunucusu',
  'Wrong Column Type' => 'Yanlış Sütun Türü',
  'You are running %s version "%s", which is older than the minimum required version, "%s". Update to at least "%s".' => '',
  'Embed YouTube videos' => 'YouTube videolarını gömme',
  'Add One Path' => 'Bir Yol Ekle',
  'Clear Cache' => 'Önbelleği Temizle',
  'Write access log here.' => 'Erişim günlüğünü buraya yazın.',
  'Unignore this setup issue?' => 'Bu kurulum sorununu yoksayı kaldırılsın mı?',
  'Configure Mail.' => 'Postayı Yapılandır.',
  'You can update these %d value(s) here:' => 'Bu %d değerini buradan güncelleyebilirsiniz:',
  'Notification Servers' => 'Bildirim Sunucuları',
  'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).

If not set, no log will be written.' => 'HTTP erişim günlüğünü etkinleştirmek için bir yol belirtin. Bu günlük, normal HTTP erişim günlüklerinden daha ayrıntılıdır (örneğin, oturum açmış kullanıcıları, denetleyicileri ve diğer uygulama verilerini gösterebilir).

Ayarlanmazsa, günlük yazılmaz.',
  'extname' => 'extname',
  'Enable captchas with Recaptcha.' => 'Recaptcha ile captcha\'ları etkinleştirin.',
  'This suggests your webserver is configured to decompress or mangle compressed requests.' => '',
  'Add Multiple Paths' => 'Birden Çok Yol Ekle',
  'Specify an activity to mark as completed.' => 'Tamamlandı olarak işaretlemek için bir etkinlik belirtin.',
  'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Varsayılan olarak, bu yazılım Yeniden Açıklama alanlarındaki nesne adlarını ilgili nesneye bağlar. Bu normal ifade bu davranışı değiştirmek için kullanılabilir; bu normal ifadeyle eşleşen nesne adları bağlanmayacak.',
  'This server has a known bad version of "%s".' => 'Bu sunucunun bilinen bir "%s" sürümü var.',
  'Require DarkConsole Activation' => 'DarkConsole Aktivasyonu Gerektir',
  'Notifications Status' => 'Bildirim Durumu',
  'Use the %s to manage enabled applications.' => 'Yüklü uygulamaları yönetmek için %s kullanın.',
  'Current Configuration' => 'Geçerli Yapılandırma',
  'Replicating Master' => 'Master Kopyalama',
  'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).

Upgrade %s to a patched version.

To learn more about how this issue affects this software, see %s.' => 'Bu sistemdeki %s sürümü güncel değil ve büyük, geniş ölçüde açıklanan büyük bir güvenlik açığı içeriyor ("Shellshock" güvenlik açığı).

%s yamalı bir sürüme yükseltin.

Bu sorunun bu yazılımı nasıl etkilediği hakkında daha fazla bilgi edinmek için %s bakın.',
  'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Yapılandırılmış bir saat dilimi olmadan PHP, tarihlerle çalışırken uyarılar gönderir ve tarihler ve saatler doğru görüntülenmeyebilir.',
  'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => '"%s" seçeneği "%s" türündedir ve geçerli normal ifadeler listesine ayarlanmalıdır, ancak "%s" geçerli bir normal ifade değildir.',
  'This schema can use a better character set.' => 'Şema daha iyi bir karakter seti kullanabilir.',
  'Configuration value "%s" is locked, but has a value in the database.' => '"%s" konfigürasyon değeri kullanılamıyor ancak veritabanında bir değeri var.',
  'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.

If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.

NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Yeni kaydedilen Phabricator hesapları, yönetim incelemesi için manüel onay kuyruğuna yerleştirilebilir veya hemen otomatik olarak etkinleştirilebilir. Onay kuyruğu varsayılan olarak etkindir, çünkü bir hesabı kimlerin kaydedebileceği ve sunucuya erişebileceği üzerinde daha fazla kontrol sağlar.

Yüklemeniz tamamen herkese açıksa veya bir VPN\'de ise veya kullanıcılar yalnızca LDAP gibi güvenilir bir sağlayıcıya kaydolabilirse veya sunucuya yetkisiz kaydı önlemek için başka bir şekilde yapılandırdıysanız, yönetim yükünü azaltmak için kuyruğu devre dışı bırakabilirsiniz.

NOT: Kuyruğu devre dışı bırakmadan önce, yüklemeniz için @{config:auth.email-domains} doğru yapılandırıldığından emin olun!',
  'Determines whether or not YouTube videos get embedded.' => 'Youtube videolarının gömülü olup olmayacağına karar verir.',
  'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.

Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:

  - `name` The name of the item.
  - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Çoğu sayfaya bağlantı içeren bir alt bilgi eklemenizi sağlar. Bu bağlantıları yasal bilgilere veya yaklaşık bir sayfaya işaret etmek için kullanmak isteyebilirsiniz.

Sözlüklerin bir listesini belirtin. Her sözlük bir altbilgi öğesini açıklar. Bu tuşlar desteklenir:

  - `name` Öğenin adı.
  - `href` İsteğe bağlı olarak, öğenin bağlantı hedefi. Bir telif hakkı bildirimi gibi bir metin parçası istiyorsanız bunu atlayabilirsiniz.',
  'The known issues with this old version are:' => 'Eski versiyondaki bilinen sorunlar şunlardır:',
  'Not Enabled' => 'Etkinleştirilmedi',
  'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".

Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Bu yazılım, kendisine "Yetkilendirme" HTTP üstbilgisi ile bir test isteği gönderdi ve bu kimlik bilgilerinin iletilmesini bekledi. Bununla birlikte, alındıklarında eksik veya yanlıştılar. Bu yazılım, "%2$s" parolası ile "%s" kullanıcı adını gönderdi; "%3$s" kullanıcı adı ve "%4$s" parolasını aldı.

Web sunucunuz HTTP temel kimlik doğrulamasını iletecek şekilde yapılandırılmamış olabilir. Temel kimlik doğrulamayı kullanmayı planlıyorsanız (örneğin, depolara erişmek için) yeniden yapılandırmanız gerekir.',
  'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Amazon RDS kullanıyorsanız, yukarıdaki bazı talimatlar size uymayabilir. Bunun için Amazon RDS\'deki %s tartışmasına bakın.',
  'Controls whether email is sent "From" users.' => 'E-postanın "Kimden" kullanıcılarına gönderilip gönderilmeyeceğini kontrol eder.',
  'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'Bildirim serveri artık root izinlerini gerektirmiyor. Serveri altında çalışmasını istediğiniz kullanıcı ile başlatın.',
  'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => 'Bu sorun artık bastırılmayacak ve genel kurulum uyarısı olarak doğru yerine dönecektir.',
  'Allows you to remove levity and jokes from the UI.' => 'Kullanıcı arayüzünden düzensizlik ve şakaları kaldırmanıza olanak tanır.',
  'Sites' => 'Siteler',
  'T6185 "Shellshock" Bash Vulnerability' => 'T6185 "Shellshock" Bash Güvenlik Açığı',
  'Missing \'%s\' Extension' => '%s Uzantısı Eksik',
  'Retention policies for garbage collection.' => 'Çöp toplama için saklama politikaları.',
  'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL ("%s" sunucusunda) performansı etkileyebilecek çok küçük bir innodb_buffer_pool_size ile yapılandırılmıştır.',
  'You should upgrade this software.' => 'Bu yazılımı yükseltmelisiniz.',
  'The following caches will be cleared:' => 'Aşağıda belirtilen önbellekler temizlenecek:',
  'Detected %s warning(s) with the schemata.' => 'Şemada %s uyarı(ları) tespit edildi.',
  'Deprecated mysql.host Format' => 'Kullanımdan kaldırılmış mysql.host Biçimi',
  'This key is on the wrong columns.' => 'Anahtar yanlış sütunlarda.',
  'Wrong Nullable Setting' => 'Yanlış Sıfırlanabilir Ayar',
  'Secret key for Amazon S3.' => 'Amazon S3 için gizli anahtar.',
  'Trying to add duplicate column "%s"!' => '"%s" sütununu eklemeye çalışıyor!',
  'Minimum password length.' => 'Minimum parola uzunluğu.',
  'Required PHP extensions are not installed.' => 'Gerekli PHP uzantıları kurulu değil.',
  'Database' => 'Veritabanı',
  'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'SAĞLIKSIZ: Bu veritabanı son sağlık kontrollerinde başarısız oldu. Trafik kurtarılana kadar ona gönderilmez.',
  'Request input, in bytes.' => 'Bayt cinsinden girdi iste.',
  'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Pigmentleri etkinleştirdiniz, ancak %s betiği aslında kullanılamıyor, %s muhtemelen bozuk.',
  'Application Settings' => 'Uygulama Ayarları',
  'Show email preferences link in email.' => 'E-postada e-posta tercihleri bağlantısını göster.',
  'Your webserver may have compression disabled.' => 'Web sunucunuzda sıkıştırma devre dışı bırakılmış olabilir.',
  'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:

%s

The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Yapılandırma edilen PATH, kullanılamayan bir bileşen içerir. Bu yazılım, burada bulunan ikili dosyaları bulamaz veya yürütemez:

%s

Web sunucusunun çalıştığı kullanıcı, bundan faydalanabilmek için PATH içindeki tüm dizinleri okuyabilmelidir.',
  'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Giden postanın maksimum bayt boyutu için bir sınır belirleyebilirsiniz. Bu sınırdan daha büyük olan postalar gönderilmeden önce kesilir. MTA\'nız bir sınırı aşan postaları reddederse (bu oldukça yaygındır) bu yararlı olabilir. Bayt cinsinden bir değer belirleyin.',
  'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Birden fazla %s alt sınıfı aynı anahtara (\'%s\') sahiptir: %s, %s.',
  'Your webserver is rewriting paths improperly.' => 'Web sunucunuz yolları yanlış yeniden yazıyor.',
  'You can rebuild repository identities while the server is running.' => 'Sunucuyu çalışırken depo kimliklerini yeniden oluşturabilirsiniz.',
  'Customize the logo image and text which appears in the main site header:

  - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.

  - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.

' => 'Ana site başlığında görünen logo resmini ve metni özelleştirin:

  - **Logo Resmi**: Site başlığındaki logosunu değiştirmek için yeni bir 80 x 80 piksel resim yükleyin.

  - **Marka**: Logonun yanında görüntülenecek yeni metni seçin. Varsayılan olarak, başlıkta //%s// görüntülenir.',
  'Trying to add duplicate table "%s"!' => 'Yinelenen tablo "%s" eklemeye çalışıyor!',
  'No Authentication Providers Configured' => 'Yapılandırılmış Kimlik Doğrulama Sağlayıcısı Yok',
  'Run Silently' => 'Sessizce Çalıştır',
  'You can find more information about PHP configuration values in the %s.' => 'PHP yapılandırma değerleri hakkında daha fazla bilgiyi %s içinde bulabilirsiniz.',
  'Skipping option "%s"; already in local config.' => '"%s" atlama seçeneği; zaten yerel yapılandırmada.',
  'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'İlişkili adresin varsayılan bir yazarı varsa genel e-posta kabul edilir ve aksi halde reddedilir.',
  'Setup Issues' => 'Kurulum sorunları',
  'Require email verification' => 'E-posta doğrulaması gerektir',
  'Resource minification is now managed automatically.' => 'Kaynak küçültme artık otomatik olarak yönetiliyor.',
  'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.

Note that you can also put binaries in `%s` (for example, by symlinking them).

The current value of PATH after configuration is applied is:

  lang=text
  %s' => '',
  'Whitespace rendering is now handled automatically.' => 'Beyaz alan oluşturma artık otomatik olarak gerçekleştiriliyor.',
  '%s Not Working' => '%s Çalışmıyor',
  'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'Bu yapılandırma seçeneği bilinmiyor. Yanlış yazılmış olabilir veya yazılımın önceki bir sürümünde mevcut olabilir.',
  'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'Kullanıcılara geçiş yapma seçeneği sunmak için tam bir çeviri oluşturmak istemiyorsanız ve yalnızca varsayılan çevirideki bazı dizeleri geçersiz kılmak istiyorsanız \'%s\' kullanabilirsiniz.',
  'Connection' => 'Bağlantı',
  'Placeholder recipients are now generated automatically.' => 'Yer tutucu alıcılar artık otomatik olarak oluşturuluyor.',
  'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.

%s' => 'Elasticsearch yapılandırıldı (%s ayarıyla) ancak dizini test etmeye çalışırken bir istisnayla karşılaşıldı.

%s',
  'SSH keys are now actually useful, so they are always enabled.' => 'SSH anahtarları artık gerçekten kullanışlıdır, bu nedenle her zaman etkindir.',
  'Request output, in bytes.' => 'Bayt cinsinden çıkış isteyin.',
  'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => '\'%s\' yapılandırma seçeneği geçersiz. URI sadece \'%3$s\' gibi çıplak bir isim değil, \'%s\' gibi bir nokta (\'.\') içermelidir. Bazı web tarayıcıları, TLD bulunmayan alanlarda çerez ayarlamaz.',
  'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.

This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.

For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'Multimetre uygulaması performans örnekleri toplar. Bu verileri, yazılımın zaman ve kaynak için ne harcadığını anlamanıza ve sorunlu erişim modellerini tanımlamanıza yardımcı olması için kullanabilirsiniz.

Bu seçenek, örneklemenin ne sıklıkta etkinleştirileceğini denetler. Her 1 / N sayfayı örneklemek için bazı pozitif tamsayı N\'ye ayarlayın.

Çoğu yükleme için varsayılan değer (1000 sayfa başına 1 örnek) fazla depolama alanı gerektirmeden veya performansı önemli ölçüde etkilemeden yararlı olacak yeterli veri toplamalıdır. Performans sorunlarını araştırıyorsanız, daha fazla veri toplamak için hızı ayarlayabilirsiniz.',
  'Cache namespace.' => 'Önbellek ad alanı.',
  '%s = 0' => '%s = 0',
  'Unsafe PHP "Local Infile" Configuration' => 'Güvensiz PHP "Yerel Dosya" Yapılandırması',
  'Custom remarkup rules are now added by subclassing %s or %s.' => 'Özel yeniden pazarlama kuralları artık %s veya %s alt sınıflandırma ile eklenmektedir.',
  'Issue Resolved' => 'Sorun Çözüldü',
  'If you enable this, linked Commons videos will be embedded inline.' => 'Bunu etkinleştirirseniz, bağlı Commons videoları satır içine gömülür.',
  'Garbage collectors are now configured with "%s".' => 'Çöp toplayıcılar artık "%s" ile yapılandırıldı.',
  'Unknown configuration option type "%s".' => 'Bilinmeyen yapılandırma seçeneği türü "%s".',
  'Trying to add duplicate database "%s"!' => 'Yinelenen veritabanı "%s" eklemeye çalışıyor!',
  'This column has the wrong autoincrement setting.' => 'Bu sütun yanlış otomatik ayar ayarına sahip.',
  'Allows you to add footer links on most pages.' => 'Çoğu sayfaya altbilgi bağlantısı eklemenizi sağlar.',
  'USWest Region' => 'USWest Bölgesi',
  'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Maniphest alanları artık "%s" olarak tanımlanmıştır. Mevcut tanımlar taşınmıştır.',
  'Enable Prototypes' => 'Prototipleri Etkinleştir',
  'Elasticsearch is now configured with "%s".' => 'Elasticsearch artık "%s" ile yapılandırıldı.',
  'Configuring Outbound Email' => 'Giden E-postayı Yapılandırma',
  'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Gelen posta adresleri artık Uygulamalar aracındaki her uygulama için yapılandırılmıştır.',
  'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see https://www.google.com/recaptcha' => 'Birkaç başarısız giriş denemesinden sonra kullanıcıların captcha\'ları çözmesini istemek için recaptcha\'yı etkinleştirin. Bu, kullanıcı parolalarına karşı kaba kuvvet saldırılarını engeller. Daha fazla bilgi için, https://www.google.com/recaptcha bağlantıya bakın',
  'Partial \'%s\' Support' => 'Kısmi \'%s\' Desteği',
  'Subschemata have setup warnings.' => 'Subschemata kurulum uyarılarına sahiptir.',
  'Uptime' => 'Çalışma süresi',
  'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL ("%s" sunucusunda), birçok yaygın kelimeyi aramayı engelleyecek varsayılan bir parola dosyası kullanıyor.',
  'Two setup checks raised an issue with key \'%s\'!' => 'İki kurulum denetimi \'%s\' tuşuyla ilgili bir sorun yarattı!',
  'Mark activities complete even if there is no outstanding need to complete them.' => 'Tamamlamak için olağanüstü bir ihtiyaç olmasa bile faaliyetleri tamamlayın.',
  'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'Büyük olasılıkla dizini oluşturmadan cluster.search özelliğini etkinleştirdiniz. Yeni bir dizin oluşturmak için aşağıdaki komutu kullanın.',
  'Skipping option "%s"; already in database config.' => '"%s" atlama seçeneği; zaten veritabanı yapılandırmasında.',
  'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.

(If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => '"InnoDB" motoru MySQL\'de mevcut değildir ("%s" sunucusunda). MySQL yapılandırmanızda InnoDB\'yi etkinleştirin.

(Zaten tablolar oluşturduysanız, MySQL bunları oluşturmak için yanlışlıkla başka bir motor kullanmıştır. Bunları dönüştürmeniz veya silip yeniden başlatmanız gerekir.)',
  'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.

Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Bu yazılım, şu anda doğrudan diğer içeriklerle aynı alandan kullanıcı yüklemeleri sunacak şekilde yapılandırılmıştır. Bu bir güvenlik riskidir.

Bu riski ortadan kaldırmak için bir CDN (veya alternatif dosya etki alanı) yapılandırın. CDN kullanmak performansı da artıracaktır. Talimatlar için aşağıdaki kılavuza bakın.',
  '%s Stats' => '%s Durumlar',
  'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'Subversion\'un desteklenen en düşük sürümü, 2008\'de yayınlanan 1.5\'tir.',
  'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'PHP bellek sınırınız, büyük dosyalar yüklemenizi veya büyük istekleri işlemenizi engelleyebilecek şekilde yapılandırılmıştır.',
  'The system user.' => 'Sistem kullanıcısı.',
  'Reload Page' => 'Sayfayı Yenile',
  'Force users to connect via HTTPS instead of HTTP.' => 'Kullanıcıları HTTP yerine HTTPS üzerinden bağlanmaya zorlayın.',
  'Large Files' => 'Büyük Dosyalar',
  'The namespace that databases should use.' => 'Veritabanlarının kullanması gereken ad alanı.',
  'Mark a manual upgrade activity as complete.' => 'Manüel yükseltme etkinliğini tamamlandı olarak işaretleyin.',
  '%s Not Set' => '%s Ayarlanmadı',
  'This configuration option has been replaced with a modular handler. See T9346.' => 'Bu yapılandırma seçeneği, modüler bir işleyici ile değiştirildi. T9346 sayfasına bakın.',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'JSON\'da "%s" seçeneğinin değeri ("%s" türünde) belirtilmelidir, ancak girdinin kodu çözülemedi. (Bir dize teklifi vermeyi unuttunuz mu?)',
  'Configuration option \'%s\' has invalid value and was restored to the default: %s' => '\'%s\' yapılandırma seçeneği geçersiz değere sahip ve varsayılan değere geri yüklendi: %s',
  'To update these %d value(s), edit your PHP configuration file, located here:' => 'Bu %d değerini güncellemek için, burada bulunan PHP yapılandırma dosyanızı düzenleyin:',
  'Collation' => 'Karşılaştırma',
  'Replication' => 'Kopya',
  'The HTTP response code or process exit code.' => 'HTTP yanıt kodu veya işlem çıkış kodu.',
  'Obsolete; use standard rendering events instead.' => 'Eski; bunun yerine standart oluşturma etkinlikleri kullanın.',
  'Local Disk Storage' => 'Yerel Disk Depolama',
  'Constant' => 'Sabit',
  'Issue' => 'Sorun',
  'Determines which URI protocols are valid for links and redirects.' => '',
  'Configuration Guide: Configuring a File Domain' => 'Yapılandırma Kılavuzu: Bir Dosya Etki Alanını Yapılandırma',
  'Activate DarkConsole on every page.' => 'Her sayfada DarkConsole\'i etkinleştirin.',
  'Enable verbose error reporting and disk reads.' => 'Ayrıntılı hata raporlamayı ve disk okumalarını etkinleştirin.',
  'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => '',
  'Mail object address hash keys are now generated automatically.' => 'Posta nesnesi adres karması anahtarları artık otomatik olarak oluşturulur.',
  'Too many arguments: expected one key and one value.' => 'Çok fazla argüman: bir anahtar ve bir değer bekleniyor.',
  'Settings History' => 'Ayarlar Geçmişi',
  'Opcode' => 'İşlemkodu',
  'To update these %d value(s), edit your PHP configuration file.' => 'Bu %d değerini güncellemek için PHP yapılandırma dosyanızı düzenleyin.',
  'Auth provider config must be unlocked before editing' => 'Auth provider config be unkilitli before düzenlemeing',
  'Enable Recaptcha' => 'Recaptcha\'yı etkinleştir',
  'Prefix cookie with "%s"' => '"%s" ile önek tanımlama bilgisi',
  'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => '"%s" yapılandırma seçeneği tanınmıyor. Yanlış yazılmış olabilir veya yazılımın daha eski bir sürümünde mevcut olabilir. Etkisi yoktur ve düzeltilmesi veya silinmesi gerekir.',
  'You can rebuild the search index while the server is running.' => 'Sunucu çalışırken arama dizinini yeniden oluşturabilirsiniz.',
  'Migrated option "%s" from file to database config.' => 'Dosyadan veritabanı yapılandırmasına "%s" seçeneği taşındı.',
  'PHP Documentation' => 'PHP Belgelemesi',
  'Your webserver produced an unexpected response.' => 'Web sunucunuz beklenmedik bir yanıt verdi.',
  'Unable to determine the version number of "%s".' => '"%s" sürüm numarası belirlenemedi.',
  'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'True ise, kullanıcının giriş yapabilmesi için önce e-posta adreslerinin doğrulanması gerekir (e-postadaki bir bağlantıyı tıklayarak). @{Config:auth.email-domains} boş değilse varsayılan olarak doğrulama isteğe bağlıdır.',
  'PHP OPcache Documentation' => 'PHP OPcache Belgeleri',
  'Daemons Are Not Running' => 'Daemonlar Çalışmıyor',
  'Cluster: Databases' => 'Küme: Veritabanları',
  'No Messages' => 'Mesaj Yok',
  'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => '"%s" dizinine sahip altbilgi öğesi geçersiz: her öğe, bir altbilgi öğesini açıklayan bir sözlük olmalıdır.',
  'None of the caches on this page can be cleared.' => 'Bu sayfadaki önbelleklerin hiçbiri temizlenemez.',
  'Require email verification before a user can log in.' => 'Bir kullanıcının oturum açabilmesi için e-posta doğrulaması iste.',
  'Master' => 'Usta',
  'A Troublesome Encounter!' => 'Sorunlu bir Karşılaşma!',
  'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'Tam metin arama dizini için dizin oluşturma algoritması güncellendi ve dizinin yeniden oluşturulması gerekiyor. Dizini yeniden oluşturuncaya kadar, genel arama (ve diğer tam metin araması) düzgün çalışmaz.',
  'Maximum taskmaster daemon pool size.' => 'Maksimum görev yöneticisi arka plan havuzu boyutu.',
  'Replica' => 'Kopya',
  'Use Public Replies (Less Secure)' => 'Genel Yanıtları Kullan (Daha Az Güvenli)',
  'MySQL password to use when connecting to the database.' => 'Veritabanına bağlanırken kullanılacak MySQL parolası.',
  'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Bir değişken kullanılamıyorsa (örneğin, dosya biçiminde %%m görünür ancak istek bir İletken isteği değilse), \'-\' olarak işlenir.',
  'CSRF HMAC keys are now managed automatically.' => 'CSRF HMAC anahtarları artık otomatik olarak yönetiliyor.',
  'Database Status' => 'Veritabanı Durumu',
  'The request body that was received began:' => '',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'JSON\'da "%s" seçeneğinin değeri ("%s" türünde) belirtilmelidir, ancak girdinin kodu çözülemedi: %s',
  'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'Veritabanı ana bilgisayarı "%s", bu ana bilgisayardaki durumla aynı fikirde olmayan ("%s") yapılandırılmış bir küme durumuna sahip. Kümeye yerel durum bildirmek için `bin/storage partition` çalıştırın. Bu ana makine eski bir yapılandırma ile başlamış olabilir.',
  'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normalde, bu yazılım başarılı bir POST sonrasında HTTP yönlendirmeleri yayınlar. Bu, hizmet ve profil oluşturma bilgileri kaybolduğundan POST işlenirken gerçekleşen hataların ayıklanmasını zorlaştırabilir. Bu yapılandırma seçeneğini ayarladığınızda, otomatik olarak yönlendirme yerine bir ara sayfa gösterilecek ve böylece servis ve profil bilgilerini incelemeniz mümkün olacaktır. Ayrıca UX\'i korkunç hale getirir, bu yüzden yalnızca hata ayıklama sırasında etkinleştirmelisiniz.',
  'Largest' => 'En büyük',
  'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.

If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.

After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Aynı anda çalıştırılacak maksimum görev yöneticisi cinleri. Bunu yükseltmek, görev kuyruğunun maksimum verimini artırabilir. Havuz, kullanıldığında otomatik olarak ölçeklenir.

Bir küme çalıştırıyorsanız, bu sınır her `phd` örneği için ayrı ayrı geçerlidir. Örneğin, bu sınır `4` olarak ayarlanmışsa ve üç ana sunucunuz varsa, etkin genel sınır 12 olacaktır.

Bu değeri değiştirdikten sonra, arka plan pencerelerini yeniden başlatmanız gerekir. Çoğu yapılandırma değişikliği otomatik olarak arka plan programı tarafından alınır, ancak havuz boyutları yeniden başlatmadan değiştirilemez.',
  'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'MySQL sürümünüz ("%s" veritabanı ana bilgisayarında), bir parola dosyası yapılandırmasını desteklemiyor. Sık kullanılan kelimeler için arama sonuçları bulamazsınız.',
  'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'PHP yapılandırmanız geçersiz bir saat dilimi seçiyor. Geçerli bir saat dilimi seçin.',
  '%s deleted this configuration entry (again?).' => '%s bu yapılandırma girişini sildi (tekrar?).',
  'There is some deprecated code found in the code-base.' => '',
  'Unresolved Setup Issues' => 'Çözümlenmemiş Kurulum Sorunları',
  'Server Timezone Not Configured' => 'Sunucu Saat Dilimi Yapılandırılmadı',
  'The following regex is malformed and cannot be used: %s' => 'Aşağıdaki normal ifade hatalı biçimlendirilmiş ve kullanılamaz: %s',
  'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Bireysel başvuru yanıt işleyicisi etki alanları kaldırıldı. "%s" ile bir yanıt alan adı yapılandırın.',
  'Preflight' => 'Ön kontrol',
  'Install these %d PHP extension(s):' => 'Şunu %d PHP uzantısını yükleyin:',
  'Missing \'%s\' Binary' => '\'%s\' İkili Eksik',
  'Charset' => 'Karakter kümesi',
  '\'%s\' or \'%s\' binary not found or Imagemagick is not installed.' => '\'%s\' ikili bulunamadı veya Imagemagick kurulu değil.',
  'By default, this software generates unique reply-to addresses and sends a
separate email to each recipient when you enable reply handling. This is more
secure than using "From" to establish user identity, but can mean users may
receive multiple emails when they are on mailing lists. Instead, you can use a
single, non-unique reply to address and authenticate users based on the "From"
address by setting this to \'true\'. This trades away a little bit of security
for convenience, but it\'s reasonable in many installs. Object interactions are
still protected using hashes in the single public email address, so objects
can not be replied to blindly.' => '',
  'The framable public feed is no longer supported.' => 'Çerçevelenebilir genel yayın artık desteklenmiyor.',
  'A random, unique string which identifies the request.' => 'İsteği tanımlayan rastgele, benzersiz bir dize.',
  'Auth provider config can be edited without unlocking' => '',
  'Disable unsafe option "%s" in PHP configuration.' => 'PHP yapılandırmasında güvenli olmayan "%s" seçeneğini devre dışı bırakın.',
  '%s Day(s)' => '%s Gün',
  'PHP version: %s' => 'PHP sürüm: %s',
  'No search servers are configured.' => 'Hiçbir arama sunucusu yapılandırılmamış.',
  'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.

Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.

DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole, web arayüzüne entegre edilmiş bir geliştirme ve profil oluşturma aracıdır. %s olarak geliştirmediyseniz veya hata ayıklamadığınız sürece devre dışı bırakmalısınız.

Yükleme için DarkConsole\'u etkinleştirdikten sonra, **gerçekten sayfalarda görünmeden önce hesabınız için etkinleştirmeniz gerekir.** Bunu Ayarlar > Geliştirici Ayarları\'ndan yapabilirsiniz.

DarkConsole potansiyel olarak hassas verileri (sorgular, yığın izleri ve yapılandırma gibi) ortaya koyar, böylece genellikle üretimde açmamalısınız.',
  'This key is too long for utf8mb4.' => 'Bu anahtar utf8mb4 için çok uzun.',
  'Expected Character Set' => 'Beklenen Karakter Kümesi',
  'Repository Servers' => 'Depo Sunucuları',
  'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'HTTP erişim günlüğü biçimi. Yolu ayarlamak için `%s` kullanın. Mevcut değişkenler:',
  'Skipping obsolete option: %s' => 'Eski seçenek atlama: %s',
  'This schema can use a better collation.' => 'Bu şema daha iyi bir harmanlama kullanabilir.',
  'Install Pygments to Improve Syntax Highlighting' => 'Sözdizim Vurgulamasını Geliştirmek için Pigmentleri Yükle',
  'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Oturumlar artık keyfi bir eşzamanlılık sınırına sahip olmak yerine sona eriyor ve çöp topluyor.',
  'Logo Image' => 'Logo Resmi',
  'Really Clear Cache' => 'Gerçekten Açık Önbellek',
  'Unexpected \'%s\' Behavior' => 'Beklenmeyen \'%s\' Davranışı',
  'Mail thread IDs are now generated automatically.' => 'Posta dizisi kimlikleri artık otomatik olarak oluşturuluyor.',
  'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'Yapılandırmanız bir sunucu saat dilimi belirtemiyor. PHP yapılandırma değerini \'%s\' veya %s yapılandırma değerini \'%s\' olarak ayarlayabilirsiniz.',
  'Enable HTTP Strict Transport Security (HSTS).' => 'HTTP Sıkı Aktarım Güvenliğini (HSTS) etkinleştirin.',
  'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Bu sunucu, %2$s içinde %s kullanılabilir, ancak ikilik %3$s olarak çalıştırıldığında bir hata kodu ile çıkıldı. Doğru takıldığından emin olun.',
  'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Kullanıcılar dosyaları bir metin düzenleyicisinde açmak için bir URI kalıbı yapılandırabilir. URI, bu beyaz listede bir protokol kullanmalıdır.',
  'Config' => 'Yapılandırma',
  'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'Teslimatı artırmak için işlem e-postaları artık her zaman "Öncelik: toplu" seçeneğiyle gönderiliyor.',
  'Retention Policy' => 'Alıkoyma Politikası',
  'Without \'%s\', this software can not test for the availability of other binaries.' => '\'%s\' olmadan, bu yazılım diğer ikili dosyaların kullanılabilirliğini test edemez.',
  'HTTP Basic Auth Not Configured' => 'HTTP Temel Kimlik Doğrulaması Yapılandırılmadı',
  'Whitelist 1.2.*.*' => 'Beyaz liste 1.2. *.*',
  'Highlight httpd.conf as "apacheconf".' => 'httpd.conf dosyasını "apacheconf" olarak vurgulayın.',
  'Database Value' => 'Veritabanı Değeri',
  'US Mountain (MDT)' => 'ABD Dağı (MDT)',
  'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Bu seçenek daha esnek yapılandırma seçenekleri sağlayan `ui.logo` ile değiştirildi.',
  'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.

Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.

To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.

To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:

%s
(You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)' => 'Veritabanı ana bilgisayarı "%s", arama dizinleri oluşturmak için yerleşik anahtar kelime dosyasını kullanıyor. Bu, arama özelliğini daha az kullanışlı hâle getirebilir.

Anahtar sözcükler, dizine eklenmemiş ve bu nedenle aranamayan yaygın kelimelerdir. Varsayılan anahtar kelime dosyasında, aramak isteyebileceğiniz çeşitli kelimeler (\'çeşitli\', \'olası\', \'dilek\' ve \'sıfır\' gibi) yaklaşık 500 kelime vardır.

Aramayı daha kullanışlı hale getirmek için, daha az kelime içeren alternatif bir anahtar kelime dosyası kullanabilirsiniz. Alternatif olarak, yaygın kelimeleri aramakla ilgilenmiyorsanız, bu uyarıyı göz ardı edebilirsiniz. Daha sonra Elasticsearch\'ı yapılandırmayı planlıyorsanız, bu uyarıyı da göz ardı edebilirsiniz: bu parola dosyası yalnızca MySQL tam metin dizinlerini etkiler.

Farklı bir anahtar kelime dosyası seçmek için bunu %s dosyanıza ekleyin (%s bölümünde) ve ardından %s yeniden başlatın:

%s
(İsterseniz farklı bir dosya da kullanabilirsiniz. Yukarıda önerilen dosya en yaygın İngilizce kelimelerin yaklaşık 50\'sine sahiptir.)',
  'Rebuild Search Index' => 'Arama Dizini\'ni Yeniden Oluştur',
  'Do not install this software on an instance class with burstable CPU.' => 'Bu yazılımı bükülebilir CPU içeren bir örnek sınıfına kurmayın.',
  'Real' => 'Gerçek',
  'Partition: %s' => 'Bölme: %s',
  'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'Bu dil dosyalarının vurgulanacağını seçmenizi sağlayan normal ifadelerin geçersiz kılma listesidir. Projelerinizin dosya adları hakkında belirli kuralları varsa veya olağandışı veya belirsiz dil uzantıları kullanıyorsanız, burada bir eşleme oluşturabilirsiniz. Bu, dosya adına karşı test edilecek düzenli ifadelerin sıralı bir sözlüğüdür. Yakalanan gruplara tamsayı olarak açık bir dile veya sayısal bir dizine eşlemelidirler.',
  'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.

Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.

You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'İzin verilen e-posta adreslerini, burada izin verilen alanların bir listesini ayarlayarak belirli alanlarla (`sirketiniz.com` gibi) kısıtlayabilirsiniz.

Kullanıcıların yalnızca alan adlarından birinde e-posta adresleri kullanarak kaydolmasına izin verilir ve yalnızca bu alan adları için yeni e-posta adresleri ekleyebilir. Bunu yapılandırırsanız, @{config:auth.require-email-verification} anlamına gelir.

Alan adlarından `@` işaretini çıkarmalısınız. Alan adının tam olarak eşleşmesi gerektiğini unutmayın. "yourcompany.com" izin verirseniz, bu `joe@sirketiniz.com` izin verir, ancak `joe@mail.sirketiniz.com` reddeder.',
  'Show unresolved issues with setup and configuration.' => '',
  'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.

Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.

You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.

If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.

If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => '"%s" sürüm numarası belirlenemedi. Genellikle bu, programın son zamanlarda sürüm biçimi dizesini değiştirdiği ve bu yazılımın yeni olanı henüz ayrıştırmadığını bilmediği, ancak çok eski (veya bozuk) bir ikili dosyaya sahip olduğunuzu gösterebileceği anlamına gelir.

Sürüm numarasını belirleyemediğimiz için, minimum ve bilinen kötü sürümlere karşı kontroller atlanacaktır, bu nedenle uyumsuz bir ikili dosyayı tespit edemeyebiliriz.

Bu sunucuyu daha yeni bir sürümü daha yeni sürüm dizesini ayrıştırabileceğinden, bu sorunu yazılımı güncelleyerek çözebilirsiniz.

Yazılımı güncellemek bu sorunu çözmezse, ayrıştırıcıyı ayarlayabilmemiz için sorunu yukarı akışa bildirebilirsiniz.

"%s" dosyasının son sürümünün kurulu ve doğru şekilde çalıştığından eminseniz, bu uyarıyı yok saymak genellikle güvenlidir.',
  'For conduit, the Conduit method which was invoked.' => 'Boru için, çağrılan Boru yöntemi.',
  'The configuration option \'%s\' is not set.' => '\'%s\' yapılandırma seçeneği ayarlanmamış.',
  'Stop Before HTTP Redirect' => 'HTTP Yönlendirmesinden Önce Durdur',
  'Developer / Debugging' => 'Geliştirici / Hata Ayıklama',
  'You have enabled Imagemagick in your config, but the \'%s\' or \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'Yapılandırmanızda Imagemagick\'i etkinleştirdiniz, ancak \'%s\' ikili dosyası web sunucusunun %s değil. Imagemagick\'i devre dışı bırakın veya web sunucusu için kullanılabilir hale getirin.',
  'Remove PHP %s' => 'PHP %s kaldır',
  'Missing' => 'Eksik',
  'Classes must match to compare schemata!' => 'Sınıflar şemayı karşılaştırmak için eşleşmelidir!',
  'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Bu sunucunun kurulu olduğu URI\'yı ayarlayın. Bunu ayarlamak, çerezlerin diğer alanlarda ayarlanmasını önleyerek güvenliği artırır ve artalanların doğru etki alanına sahip bağlantıları olan e-postalar göndermesine izin verir.',
  'Elasticsearch Index Not Found' => 'Elasticsearch Enkdesi Bulunamadı',
  'Unit test value.' => 'Birim test değeri.',
  'A daemon is running as user %s, but daemons should be running as %s.

Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Bir daemon %s kullanıcısı olarak çalışıyor, ancak daemonlar %s olarak çalışıyor olmalıdır.

Ya %s yapılandırma ayarını yapın ya da arka plan pencerelerini yeniden başlatın. Daemonlar, yeniden başlatıldığında uygun kullanıcı olarak çalışmaya çalışmalıdır.',
  'Missing Key' => 'Eksik Anahtar',
  'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.

There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.

You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.

To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:

%s
If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'Veritabanı ana bilgisayarı "%s" çok küçük bir %s (%s) ile yapılandırıldı. Bu, kötü veritabanı performansına ve kilit tükenmesine neden olabilir.

Uygun bir değer ayarlamak için zor ve hızlı kurallar yoktur, ancak standart bir kurulum için makul bir başlangıç noktası, makinedeki toplam belleğin %%40\'ı gibi bir şeydir. Örneğin, bu yazılımı yüklediğiniz makinede 4GB RAM varsa, bu değeri %s olarak ayarlayabilirsiniz.

Kullanım durumunuz için nasıl yapılandıracağınıza karar vermenize yardımcı olması için MySQL belgelerinde bu seçenek hakkında daha fazla bilgi edinebilirsiniz. Bu ortama göre normal iş yüklerinden farklı kılan bu yazılıma özgü hiçbir endişe yoktur.

Ayarı yapmak için %s dosyanıza (%s bölümünde) buna benzer bir şey ekleyin; %s ana makineniz ve kullanım durumunuz için uygun bir değerle değiştirin. Sonra %s yeniden başlatın:

%s
Geçerli ayardan memnunsanız, bu kurulum uyarısını güvenle yok sayabilirsiniz.',
  'Expected Nullable' => 'Beklenen Sıfırlanabilir',
  'Syntax highlighting is supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.

To install Pygments, visit [[ https://pygments.org/ | pygments.org ]] and follow the download and install instructions.

Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.

After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Sözdizimi vurgulama özelliği varsayılan olarak birkaç dil için desteklenir, ancak çok daha fazla dil için destek sağlamak amacıyla Pygments\'ı (üçüncü taraf bir sözdizimi vurgulama aracı) yükleyebilirsiniz.

Pygments\'ı yüklemek için [[ https://pygments.org/ | pygments.org ]] ve indirme ve yükleme talimatlarını izleyin.

Pygments kurulduktan sonra, kaynak kodunu vurguladığınızda Pygments\'i kullanmak için bu seçeneği (`pygments.enabled`) etkinleştirin.

Pygments\' yükleyip etkinleştirdikten sonra, yeni oluşturulan kaynak kodunun (diffs ve macunlar gibi) doğru şekilde vurgulanması gerekir. Önceden var olan kaynak kodunu vurgulamak için önbelleklerini temizlemeniz gerekebilir. Önbellekleri yönetmeyle ilgili talimatlar için, [[ %s | Önbellekleri Yönetme ]] sayfasına bakın.',
  'Disable SSH log.' => 'SSH günlüğünü devre dışı bırakın.',
  'Set a string this software should use to prefix cookie names.' => 'Bu yazılımın çerez adlarını önek olarak kullanması için bir dize ayarlayın.',
  'No databases have any issues.' => 'Hiçbir veritabanının sorunu yoktur.',
  'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.

Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.

IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.

If you configure clustering, note that this setting is ignored by intracluster requests.' => 'Web sunucusu hem HTTP hem de HTTPS isteklerine yanıt veriyorsa ancak kullanıcıların yalnızca HTTPS ile bağlantı kurmasını istiyorsanız, bu hizmetin HTTP isteklerini HTTPS\'ye yönlendirmesi için bunu `true` olarak ayarlayabilirsiniz.

Normalde, sunucunuzu HTTP trafiğini kabul etmeyecek şekilde yapılandırmanız gerekir, ancak başlangıçta HTTP kullandıysanız ve şimdi HTTPS\'ye geçtiyseniz, ancak eski bağlantıları koparmak istemiyorsanız veya web sunucunuz bir yük dengeleyicinin arkasındaysa bu ayar yararlı olabilir HTTPS bağlantılarını sonlandırır ve burada daha ayrıntılı davranışları makul bir şekilde yapılandıramazsınız.

ÖNEMLİ: Bir isteğin HTTP veya HTTPS olup olmadığı PHP `%s` değişkeni incelenerek belirlenir. Apache/mod_php çalıştırırsanız, bu muhtemelen sizin için otomatik olarak doğru bir şekilde ayarlanır, ancak Phabricator\'ı CGI/FCGI olarak çalıştırırsanız (örneğin, nginx veya lighttpd aracılığıyla), web sunucunuzu değeri doğru şekilde geçecek şekilde yapılandırmanız gerekir. bağlantı türü.

Kümelemeyi yapılandırırsanız, bu ayarın intlusluster istekleri tarafından yoksayıldığını unutmayın.',
  'Option "%s" is of type "%s", but the configured value is not an integer.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir tamsayı değildir.',
  'Notifications no longer have a dedicated debugging mode.' => 'Bildirimler artık özel bir hata ayıklama moduna sahip değil.',
  'Daemon Running as Wrong User' => 'Daemon Yanlış Kullanıcı Olarak Çalışıyor',
  'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".

Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.

(This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Bu yazılım, bir HTTP GET parametresi ile kendisine bir test isteği gönderdi, ancak parametre iletilmedi. "%2$s" değeri ile "%s" gönderilen, "%4$s" değeri ile "%3$s" var.

Web sunucunuz yanlış yapılandırılmış ve bu sorun düzeltilene kadar bu yazılımın büyük bölümleri çalışmayacak.

(Bu soruna RewriteRule dosyanızdaki eksik "QSA" neden olabilir.)',
  'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => '',
  'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Bu eski uzatma noktasının yerini "AphrontSite" dahil olmak üzere diğer mekanizmalar almıştır.',
  'You enabled Elasticsearch but the index does not exist.' => 'Elasticsearch\'ü etkinleştirdiniz, ancak dizin mevcut değil.',
  '%s Not Found' => '%s Bulunamadı',
  'Write SSH error log here.' => 'SSH hata günlüğünü buraya yazın.',
  'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => '`%s` yapılandırmanız bir bağlantı noktası numarası içeriyor, ancak bu kullanım kullanımdan kaldırıldı. Bunun yerine, bağlantı noktası numarasını `%s` olarak girin.',
  'Elasticsearch Index Schema Mismatch' => 'Elasticsearch Dizin Şeması Uyumsuzluğu',
  'Column has Wrong Autoincrement' => 'Sütunda Yanlış Otomatik Aralık var',
  'Enable the debugging console.' => 'Hata ayıklama konsolunu etkinleştirin.',
  'Specify the configuration key you want to set.' => 'Ayarlamak istediğiniz yapılandırma anahtarını belirtiniz.',
  'Memory Limit Restricts File Uploads' => 'Bellek Sınırı Dosya Yüklemelerini Kısıtlıyor',
  'Cache Entries' => 'Önbellek Girişleri',
  'Unknown column type "%s"!' => 'Bilinmeyen sütun türü "%s"!',
  'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => '',
  'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'Yüklenen dosyaları diskte saklamak için yapılandırılmış konum ("%s") mevcut değil veya okunamıyor veya yazılabilir değil. Dizinin var olduğunu ve web sunucusu tarafından okunabilir ve yazılabilir olduğunu doğrulayın.',
  'Notifications User Guide: Setup and Configuration' => 'Bildirimler Kullanıcı Kılavuzu: Kurulum ve Yapılandırma',
  'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:

%s

Something is misconfigured or otherwise mangling responses.' => 'Bu yazılım, "X-Setup-SelfCheck" üstbilgisiyle bir test isteği gönderdi ve geçerli bir JSON yanıtı alması bekleniyor. Bunun yerine, yanıt başlar:

%s

Bir şey yanlış yapılandırılmış veya yanıtları başka şekillerde yönetiyor.',
  'Key is Too Long' => 'Anahtar Çok Uzun',
  '\'%s\' Missing' => '\'%s\' Eksik',
  'Configure database read replicas.' => 'Veritabanı okuma kopyalarını yapılandırın.',
  'Elasticsearch Misconfigured' => 'Elasticsearch Yanlış Yapılandırıldı',
  'Amazon S3 is Only Partially Configured' => 'Amazon S3 Yalnızca Kısmen Yapılandırılmış',
  '<none>' => '<hiçbiri>',
  'Customize favicons.' => 'Faviconları özelleştirin.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'PATH bileşeni \'%s\' (mutlak yol \'%s\' olarak çözülür) kullanılamaz çünkü kullanılamaz (\'%s\' izin biti ayarlanmamıştır).',
  'No Repositories' => 'Depo Yok',
  '%s deleted this configuration entry.' => '%s bu yapılandırma girişini sildi.',
  'After rebuilding repository identities, run this command to clear this setup warning:' => 'depo kimliklerini yeniden oluşturduktan sonra, bu kurulum uyarısını silmek için şu komutu çalıştırın:',
  'The timezone this software should use by default.' => 'Bu yazılımın varsayılan olarak kullanması gereken zaman dilimi.',
  'Mail is now always delivered by the daemons.' => 'Mail artık her zaman daemon tarafından teslim ediliyor.',
  'Request has bad "Host" header.' => 'İstekte kötü "Ana Bilgisayar" başlığı var.',
  'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Subversion\'un bu sürümü, 1.7.2\'de düzeltilen rN\'ye (Subversion sorunu #2873) eklenen dosyalar için `%s` çalışmadığı bir hataya sahip.',
  'Elasticsearch is not reachable as configured.' => 'Elasticsearch\'e yapılandırıldığı gibi ulaşılamıyor.',
  'Key has Wrong Uniqueness' => 'Anahtarın Tekliği Yanlış',
  'Determines whether or not basic account information is editable.' => 'Temel hesap bilgilerinin düzenlenebilir olup olmadığını belirler.',
  'Get a local configuration value.' => 'Yerel bir yapılandırma değeri edinin.',
  'By default, this software allows users to add multi-factor authentication to
their accounts, but does not require it. By enabling this option, you can
force all users to add at least one authentication factor before they can use
their accounts.

Administrators can query a list of users who do not have MFA configured in
{nav People}:

  - **[[ %s | %s ]]**' => '',
  'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'Bu yükleme için temel URI yapılandırılmadı. Pek çok ana özellik siz yapılandırıncaya kadar düzgün çalışmaz.',
  'Unexpected \'diff\' Behavior' => 'Beklenmedik \'diff\' Davranışı',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Bu sistemdeki \'%s\' ikili dosyasının beklenmedik bir davranışı var: farklı dosyalar iletildiğinde sıfır olmayan bir hata kodu ile çıkması bekleniyordu, ancak olmadı.',
  'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Düzeltmek istemiyorsanız bir sorunu yoksayabilir veya daha sonra düzeltmeyi planlayabilirsiniz. Yok sayılan sorunlar her sayfada görünmez, ancak yine de açık sorunlar listesinde gösterilir.',
  'Enter value in JSON.' => 'JSON\'a değer girin.',
  'Migrated option "%s" from file to local config.' => 'Dosyadan yerel yapılandırmaya "%s" seçeneği taşındı.',
  'Shenanigans' => 'Maskaralık',
  'The path for local repositories does not exist, or is not readable by the webserver.' => 'Yerel depoların yolu mevcut değil veya web sunucusu tarafından okunamıyor.',
  'Option "%s" only supports numbers, letters, underscores and (for some reason) the dollar sign. This is necessary to avoid potential MySQL/MariaDB escape issues. Remove the invalid characters.' => '',
  'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Gelen ve giden postalar artık "cluster.mailers" ile yapılandırıldı.',
  'Config \'%s\' Invalid' => '\'%s\' Yapılandırması Geçersiz',
  'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'Bir veritabanı ana bilgisayarı ("%s") ve bu web ana makinesi ("%s") şimdiki zamana 60 saniyeden fazla katılmıyor (mutlak eğrilik %s). Geçerli saatin her yerde doğru ayarlandığını kontrol edin.',
  'No Recipient Hints' => 'Alıcı İpucu Yok',
  'Sample 0.1%% of requests.' => 'Örnek taleplerin %%0.1\'i.',
  'No Issues' => 'Hata Yok',
  'No Caches to Reset' => 'Sıfırlanacak Önbellek Yok',
  'No Base URI' => 'Temel URI Yok',
  'Really Clear Cache?' => 'Gerçekten Önbellek Silinsin mi?',
  'Allow Any Host (Insecure!)' => 'Herhangi Bir Ana Bilgisayara İzin Ver (Güvensiz!)',
  'Collectors with custom policies are highlighted. Use %s to change retention policies.' => 'Özel politikaları olan koleksiyoncular vurgulanır. Saklama politikalarını değiştirmek için %s kullanın.',
  'Multi-Factor Required' => 'Çok Faktör Gerekli',
  'Host: %s' => 'Ev Sahibi: %s',
  'Reply hints are no longer shown in mail.' => 'Yanıt ipuçları artık e-postada gösterilmiyor.',
  'Profile every request (slow)' => 'Her isteği profil haline getir (yavaş)',
  'Resolved Issue' => 'Çözülen Sorun',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => '',
  'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Bu seçenek genellikle yararlı olmadı. Kaynak karması anahtarları artık otomatik olarak yönetiliyor.',
  'Schema Status' => 'Şema Durumu',
  'To update these %d value(s), run these command(s) from the command line:' => 'Bu %d değerini güncellemek için komut satırından şu komutu çalıştırın:',
  'If you want to use a single mailbox for reply mail, you can use this
and set a common prefix for generated reply addresses. It will
make use of the fact that a mail-address such as
`devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
user\'s mailbox. Set this to the left part of the email address and it will be
prepended to all generated reply addresses.

For example, if you want to use `devtools@example.com`, this should be set
to `devtools`.' => '',
  'Cache Storage' => 'Önbellek Depolama',
  'At least one daemon is currently running as the wrong user.' => 'En az bir arka plan programı şu anda yanlış kullanıcı olarak çalışıyor.',
  'Data Type' => 'Veri Türü',
  'Better Character Set Available' => 'Daha İyi Karakter Seti Mevcut',
  'Small MySQL "%s"' => 'Küçük MySQL "%s"',
  'Value for option "%s" must be an integer.' => '"%s" seçeneği için değer bir tamsayı olmalıdır.',
  'The request path, or request target.' => 'İstek yolu veya istek hedefi.',
  '%s Active / %s Total' => '%s Etkin / %s Toplam',
  'Automatic' => 'Otomatik',
  'Connection Error' => 'Bağlantı Hatası',
  'Options relating to authentication.' => 'Kimlik doğrulama ile ilgili seçenekler.',
  'Migrating file source...' => 'Dosya kaynağı taşınıyor...',
  'Autoincrement' => 'Otomatik artış',
  'Dark' => 'Koyu',
  'GZip Compression May Not Be Enabled' => 'GZip Sıkıştırması Etkinleştirilmeyebilir',
  'Typeahead strategies are now managed automatically.' => 'Yazma stratejileri artık otomatik olarak yönetiliyor.',
  'Return to Open Issue List' => 'Açık Sayı Listesine Dön',
  'Activate read-only mode for maintenance or disaster recovery.' => 'Bakım veya olağanüstü durum kurtarma için salt okunur modu etkinleştirin.',
  'PHP also loaded these %s configuration file(s):' => 'PHP ayrıca bu %s yapılandırma dosyasını da yükledi:',
  'Reading value from stdin...' => 'Stdin\'den değeri okunuyor...',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '"%s" seçeneği "%s" türündedir, ancak sağladığınız değer geçerli bir JSON listesi değil: komut satırından bir küme sağlarken, bunu JSON\'daki değerlerin listesi olarak belirtin. Kabuğunuzun değerini belirtmeniz gerekebilir (örneğin: \'["a", "b", ...]\').',
  'To rebuild the index, run this command:' => 'Dizini yeniden oluşturmak için şu komutu çalıştırın:',
  'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 

For instructions on installing and enabling Pygments, see the %s configuration option.

If you do not want to install Pygments, you can ignore this issue.' => 'Bu yazılım varsayılan olarak birkaç dili vurgulayabilir, ancak Pygments\'ı (üçüncü taraf vurgulama aracı) yüklemek ve etkinleştirmek, daha fazla dil için sözdizimi vurgulaması ekleyecektir.

Pygments\'ı yükleme ve etkinleştirme talimatları için %s yapılandırma seçeneğine bakın.

Pygments\'ı yüklemek istemiyorsanız, bu sorunu göz ardı edebilirsiniz.',
  'Disable Recaptcha' => 'Recaptcha\'yı devre dışı bırak',
  'Sample every request (slow).' => 'Her talebi örnekleyin (yavaş).',
  'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.

Use %s to start daemons. See %s for more information.' => 'Daemonlar çalışmıyor, arka plan işlemleri (e-posta gönderme, arama dizinlerini yeniden oluşturma, tahhüttleri içe aktarma, eski verileri temizleme ve derlemeleri çalıştırma dahil) gerçekleştirilemiyor.

Daemons başlatmak için %s kullanın. Daha fazla bilgi için %s bakın.',
  'Unsafe MySQL "local_infile" Setting Enabled' => 'Güvenli Olmayan MySQL "local_infile" Ayarı Etkin',
  'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.

You can configure Webhooks in Herald.

To resolve this issue, remove all URIs from "feed.http-hooks".' => '"feed.http-hooks" seçeneği Webhooks lehine kullanımdan kaldırılmıştır. Bu seçenek bu yazılımı gelecekteki bir sürümünde kaldırılacak.

Webhook\'ları Herald\'da yapılandırabilirsiniz.

Bu sorunu gidermek için, tüm beslemeleri "feed.http-hooks" klasöründen kaldırın.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'PATH bileşeni \'%s\' (\'%s\' mutlak yolu olarak çözülür) kullanılamaz çünkü \'%s\' mevcut değildir.',
  'The search index algorithm has been updated and the index needs be rebuilt.' => 'Arama dizini algoritması güncellendi ve dizinin yeniden oluşturulması gerekiyor.',
  'The current PHP configuration has these %d value(s):' => 'Geçerli PHP yapılandırması şu %d değerine sahiptir:',
  'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'Veritabanı ana bilgisayarı "%s" bir ana sunucu olarak yapılandırıldı, ancak başka bir ana bilgisayarı çoğaltıyor. Bu tehlikelidir ve verileri değiştirebilir veya yok edebilir. Yalnızca kopyalar çoğaltılmalıdır. Ana bilgisayarda çoğaltmayı durdurun veya yapılandırmayı ayarlayın.',
  'This issue is currently ignored, and does not show a global warning.' => 'Bu sorun şu anda yok sayılıyor ve genel bir uyarı göstermiyor.',
  'Cache Status' => 'Önbellek Durumu',
  'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'Bu sürüm kontrol sistemini kullanan en az bir deponuz yapılandırılmış. VCS ikili olmadan çalışmaz.',
  'Done. Migrated %d keys.' => 'Bitti. %d anahtar taşıdı.',
  'The remote IP.' => 'Uzak IP.',
  'Disable Prototypes' => 'Prototipleri Devre Dışı Bırak',
  'US West (PDT)' => 'ABD Batı (PDT)',
  'Deleted \'%s\' from %s configuration.' => '%2$s yapılandırmasından \'%s\' silindi.',
  'Run Normally' => 'Normal Olarak Çalıştır',
  'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Anahtarın önemli olmadığı HMAC özetleri için varsayılan anahtar (yani, karma değeri gizlidir). İsterseniz (başka bir dizeye) bunu değiştirebilirsiniz, ancak bunu yapmak mevcut oturumları ve CSRF anahtarları bozacaktır. Bu seçenek kullanımdan kaldırıldı. Yeni kod HMAC anahtarlarını otomatik olarak yönetir.',
  'Highlight %s as PHP.' => 'PHP olarak %s vurgulayın.',
  'MySQL is Using Default Stopword File' => 'MySQL, Varsayılan Anahtar Kelime Dosyası Kullanıyor',
  'Pagespeed is enabled, but should be disabled.' => 'Sayfa hızı etkin, ancak devre dışı bırakılmalıdır.',
  'Paths to additional phutil libraries to load.' => 'Yüklenecek ek phutil kitaplıklarına giden yollar.',
  'User Guide: Prototype Applications' => 'Kullanıcı Kılavuzu: Prototip Uygulamaları',
  'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Bunu etkinleştirirseniz, bağlı YouTube videoları satır içine gömülür. Bunun hafif güvenlik etkileri vardır (YouTube\'a yönlendirenlere sızacaksınız) ve oldukça saçma (ancak harika bir şey).',
  'Library' => 'Kütüphane',
  'The \'%s\' binary could not be located or executed.' => '\'%s\' ikili dosyası bulunamadı veya yürütülemedi.',
  'Show Email Preferences Link' => 'E-posta Tercihleri Bağlantısını Göster',
  'Confirm before redirecting so DarkConsole can be examined.' => 'DarkConsole\'un incelenebilmesi için yönlendirmeden önce onaylayın.',
  'If you enable `%s`, this software uses "From" to authenticate users. You can
additionally enable this setting to try to authenticate with \'Reply-To\'. Note
that this is completely spoofable and insecure (any user can set any \'Reply-To\'
address) but depending on the nature of your install or other deliverability
conditions this might be okay. Generally, you can\'t do much more by spoofing
Reply-To than be annoying (you can write but not read content). But this is
still **COMPLETELY INSECURE**.' => '',
  'Define a cluster by providing a whitelist of host addresses that are part of the cluster.

Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.

Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.

When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Kümenin parçası olan ana bilgisayar adreslerinin bir beyaz listesini sağlayarak bir küme tanımlayın.

Bu beyaz listedeki sunucuların özel yetkileri vardır. Bu ana makinelerin güvenlik kurallarını bükmesine izin verilir ve bu listenin yanlış yapılandırılması yüklemenizi daha az güvenli hale getirebilir. Daha fazla bilgi için, **[[ %s | %s ]]** sayfasına bakın.

Kümedeki tüm ana bilgisayarları beyaz listeye ekleyen ve ek ana bilgisayar içermeyen CIDR bloklarının bir listesini tanımlayın. Ayrıntılar için aşağıdaki örneklere bakın.

Küme adresleri tanımlandığında, ana bilgisayarları da beyaz listedeki olmayan arabirimlere yönelik istekleri reddeder.',
  'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => '"%s" ana bilgisayarında, MySQL küçük bir "%s" (%d) ile yapılandırılır, bu da bazı büyük yazma işlemlerinin başarısız olmasına neden olabilir. Bu ayar için önerilen minimum değer "%d".',
  'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'Config seçenek "%s" ingeçerli. timezone identifier be a geçerli timezone identifier recognized by PHP, like "%s".',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => '\'%s\' bir dizin olmadığından PATH bileşeni \'%3$s\' (\'%s\' mutlak yolu olarak çözülür) kullanılamaz.',
  'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.

Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).

Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.

NOTE: You must install XHProf for profiling to work.' => 'Normalde sayfalar yalnızca DarkConsole üzerinden açıkça talep edildiğinde profillenir. Ancak, bazı sayfaların otomatik olarak profillenmesi faydalı olabilir.

Bu seçeneği otomatik olarak profil 1 / N sayfalarına pozitif bir N tamsayısına ayarlayın. Örneğin, 1 olarak ayarlandığında her sayfa profillenirken, 1000 olarak ayarlandığında 1000 istek başına 1 sayfa (yani, isteklerin %%0.1\'i) profillenir.

Profil oluşturma yavaş olduğundan ve çok fazla veri oluşturduğundan, bunu üretimde 0 olarak (devre dışı bırakmak için) veya çok sayıda olarak ayarlamanız gerekir (sonunda örnek olarak bakmak için bazı verilerinizle ilgileniyorsanız birkaç örnek toplamak için). Geliştirme sırasında, performans sorunlarını ayıklamak için 1\'e ayarlamak yararlı olabilir.

NOT: Profil oluşturmanın çalışması için XHProf\'u yüklemeniz gerekir.',
  'Missing "zip" Extension' => 'Eksik "zip" Uzantısı',
  'Set the language list which appears in dropdowns.' => 'Açılır pencerelerde görünen dil listesini ayarlayın.',
  'Inverse' => 'Ters',
  'Deprecated Config Source' => 'Kullanımdan Kaldırılmış Yapılandırma Kaynağı',
  'Indefinite' => 'Süresiz',
  'Edge Types' => 'Kenar Türleri',
  'Disable access log.' => 'Erişim günlüğünü devre dışı bırakın.',
  'Logo configuration is not valid: value must be a dictionary.' => 'Logo yapılandırması geçerli değil: değer bir sözlük olmalıdır.',
  'Really ignore this setup issue?' => 'Bu kurulum sorununu gerçekten yok sayıyor musunuz?',
  'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'Yapılandırma seçeneği "%s" geçersiz. URI "%s" veya "%s" ile başlamalıdır.',
  'Options relating to syntax highlighting source code.' => 'Sözdizimi vurgulama kaynak kodu ile ilgili seçenekler.',
  'Allow HTTP' => 'HTTP\'ye izin ver',
  'Simple Example' => 'Basit Örnek',
  'Auth Config Unlocked' => 'Auth Config Unkilitli',
  'Synchronized' => 'Senkronize',
  'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Kullanılabilir REMOTE_ADDR yok, bu nedenle bu sunucu istekler için başlangıç adresini belirleyemiyor. Bu, yazılımın önemli güvenlik kontrolleri yapmasını engelleyecektir. Bu en sık, başlangıç betikte bir hata olduğu anlamına gelir. Belgeleri (%s) bakın ve betiğinin doğru yazıldığını tekrar kontrol edin.',
  'Access key for Amazon EC2.' => 'Amazon EC2 için erişim anahtarı.',
  '%s Component Unusable' => '%s Bileşen Kullanılamıyor',
  'Unsynchronized' => 'Eşitlenmemiş',
  'Available search engines are now automatically discovered at runtime.' => 'Kullanılabilir arama motorları artık çalışma zamanında otomatik olarak keşfediliyor.',
  'Key for HMAC digests.' => 'HMAC özetlerinin anahtarı.',
  'Enable applications which are still under development.' => 'Hala geliştirilmekte olan uygulamaları yükleyin.',
  'The request duration, in microseconds.' => 'Mikrosaniye cinsinden istek süresi.',
  'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'S3 grubunuzun bulunduğu Amazon S3 bölgesi. Bir bölge belirttiğinizde, `amazon-s3.endpoint` ile karşılık gelen bir bitiş noktası da belirtmelisiniz. Kullanılabilir bölgelerin ve uç noktaların bir listesini AWS belgelerinde bulabilirsiniz.',
  'MySQL %s Not Supported' => 'MySQL %s Desteklenmiyor',
  'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => '"%s" seçeneği "%s" türündedir, ancak geçerli değer ("%s") geçerli değerler kümesi arasında değil: %s.',
  'Auth Application' => 'Kimlik Doğrulama Uygulaması',
  'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'Çevresel %s değişkeni boş. Bu sunucu bazı komutları yürütemez.',
  '%s.%s (%s)' => '%s.%s (%s)',
  'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => '',
  'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Tüm Diferansiyel alanlar artık "%s" yapılandırma seçeneği ile yönetilmektedir. Hangi alanların gösterileceğini yapılandırmak için bu seçeneği kullanın.',
  'Use HSTS' => 'HSTS Kullan',
  'The current MySQL configuration has these %d value(s):' => 'Geçerli MySQL yapılandırması şu %d değerlere sahiptir:',
  'Show "To:" and "Cc:" footer hints in email.' => 'E-postada "Alıcı:" ve "Bilgi:" altbilgisi ipuçlarını göster.',
  'Write SSH log here.' => 'SSH günlüğünü buraya yazın.',
  'Migrate From "feed.http-hooks" to Webhooks' => '"feed.http-hooks" klasöründen Webhook\'ları geçiş',
  'Partitioning and replication are now managed in primary configuration.' => '',
  'You can find more information about configuring OPcache in the %s.' => 'OPcache yapılandırması hakkında daha fazla bilgiyi %s içinde bulabilirsiniz.',
  'PHP Timezone' => 'PHP Zaman Dilimi',
  'This option is not recognized. It may be misspelled.' => 'Bu seçenek tanınmıyor. Yanlış yazılmış olabilir.',
  'Internal.' => 'Dahili.',
  'Advanced Settings' => 'Gelişmiş Ayarlar',
  'SSH log format.' => 'SSH günlük biçimi.',
  'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'Yeni PHP uzantılarını yükledikten sonra, <strong>değişikliklerin etkili olması için her şeyi yeniden başlatın</strong>. Her şeyi yeniden başlatmayla ilgili yardım için %s belgesinde bakın.',
  'Default address used when generating mail.' => 'Posta oluşturulurken kullanılan varsayılan adres.',
  'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.

You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Varsayılan olarak bu yazılım, uygulamanın sunulduğu aynı etki alanından dosyalar sunar. Bu uygundur, ancak bir güvenlik riski oluşturur.

Bu riski azaltmak için bir CDN veya alternatif dosya etki alanı yapılandırmalısınız. Bir CDN\'nin yapılandırılması da performansı artıracaktır. Talimatlar için [[ %s | %s ]] bakın.',
  'Learn more about locked and hidden options.' => 'Kilitli ve gizli seçenekler hakkında daha fazla bilgi edinin.',
  'Default address used as a "From" or "To" email address when an address is
required but no meaningful address is available.

If you configure inbound mail, you generally do not need to set this:
the software will automatically generate and use a suitable mailbox on the
inbound mail domain.

Otherwise, this option should be configured to point at a valid mailbox which
discards all mail sent to it. If you point it at an invalid mailbox, mail sent
by the software and some mail sent by users will bounce. If you point it at a
real user mailbox, that user will get a lot of mail they don\'t want.

For further guidance, see **[[ %s | %s ]]** in the documentation.' => '',
  'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'E-posta göndermek, arama dizinlerini yeniden oluşturmak ve diğer arka plan işlemlerini yapmak için daemonları başlatmanız gerekir.',
  'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'PHP yapılandırmasını düzenledikten sonra, <strong>değişikliklerin etkili olması için her şeyi yeniden başlatın</strong>. Her şeyi yeniden başlatmayla ilgili yardım için %s belgesinde bakın.',
  'Repository Status' => 'Depo Durumu',
  'Do Not Use HSTS' => 'HSTS Kullanmayın',
  'List all configuration keys.' => 'Tüm yapılandırma anahtarlarını listeleyin.',
  'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'Uygulama başına posta konusu öneki özelleştirmesi artık doğrudan desteklenmemektedir. Ön ekler ve diğer dizeler "translation.override" ile özelleştirilebilir.',
  'Configuration key "%s" is of type "%s". Specify it in JSON.' => '"%s" yapılandırma anahtarı "%s" türündedir. Bunu JSON\'da belirtin.',
  'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Bu yalnızca geçerli web kullanıcı arabirimini etkiler. Daemonlar ve diğer web ön uçları, opcache\'lerinden daha eski, önbelleğe alınmış kod kullanmaya devam edebilir.',
  'Configure real-time notifications.' => 'Gerçek zamanlı bildirimleri yapılandırın.',
  'Surplus Key' => 'Fazlalık Anahtar',
  'Cluster Setup' => 'Küme Kurulumu',
  'Obsolete Configuration Option "%s"' => 'Eski Yapılandırma Seçeneği "%s"',
  'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => '\'%s\' ikili dosyası bulunamadı. Web sunucusunun %s çevresel değişkenini bulunduğu dizini içerecek şekilde ayarlayın veya yapılandırmasında bu dizini \'%s\' değerine ekleyin.',
  'You can disable the email preference link in emails if users prefer smaller
emails.' => '',
  'Expected Autoincrement' => 'Beklenen Otomatik Artış',
  'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL ("%s" sunucusunda) yalnızca en az %d karakter içeren kelimeleri endeksleyecek şekilde yapılandırılmıştır.',
  'Too many arguments: expected only a configuration key when using "--stdin".' => 'Çok fazla değişken: "--stdin" kullanılırken yalnızca bir yapılandırma anahtarı bekleniyordu.',
  'Global customization of monospaced fonts is no longer supported.' => 'Monospaced yazı tiplerinin genel özelleştirilmesi artık desteklenmiyor.',
  'Major Web/Database Clock Skew' => 'Büyük Web/Veritabanı Saati Eğriltme',
  'No repository cluster services are configured.' => 'Hiçbir depo kümesi hizmeti yapılandırılmamış.',
  'Syntax Highlighting' => 'Sözdizim Vurgulama',
  'This schema is not expected to exist.' => 'Bu şemanın olması beklenmemektedir.',
  'View status information for databases, caches, repositories, and other services.' => 'Veritabanları, ön bellekler, depolar ve diğer servisler için durum bilgisini gör.',
  'This configuration value is defined in these %d configuration source(s): %s.' => 'Bu yapılandırma değeri şu %d yapılandırma kaynağında tanımlanır: %s.',
  'Specify a configuration key to get.' => 'Alınacak bir yapılandırma anahtarı belirtin.',
  'Can not compare two missing schemata!' => 'İki eksik şema karşılaştırılamaz!',
  'Key on Wrong Columns' => 'Yanlış Sütunlardaki Anahtar',
  'S3 Partially Configured' => 'S3 Kısmen Yapılandırılmış',
  'Migrate file-based configuration to more modern storage.' => 'Dosya tabanlı yapılandırmayı daha modern depolamaya taşıyın.',
  'Skipping config of source type %s...' => '%s kaynak türünün yapılandırması atlanıyor ...',
  'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => '',
  'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'Bu sunucu, bu istekte bu sunucuda "mod_pagespeed"\'i etkinleştirdiğinizi belirten bir "X-Mod-Pagespeed" veya "X-Page-Speed" HTTP üstbilgisi aldı. Bu modül, bu yazılım ile uyumlu değildir. Modülü devre dışı bırakmalısınız.',
  'No profiling' => 'Profil oluşturma yok',
  'PHID Types' => 'PHID Türleri',
  'Wrote configuration key "%s" to database storage.' => '"%s" yapılandırma anahtarını veritabanına yaz.',
  'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'Çevresel değişken %s, %s içermez. Pıhtıları etkinleştirdiniz; bu, %4$s değişkeninizde %s olmasını gerektirir.',
  'Use Pygments' => 'Pigmentleri Kullanın',
  'Amazon Web Services' => 'Amazon Web Servisleri',
  'Customized settings for applications.' => 'Uygulamalar için özelleştirilmiş ayarlar.',
  'US Central (CDT)' => 'ABD Merkez (CDT)',
  'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'Yapılandırma seçeneği "%s" geçersiz. URI yalnızca "%4$s" gibi çıplak bir ad değil, "%3$s" gibi bir nokta ("%s") içermelidir. Bazı web tarayıcıları, TLD bulunmayan alanlarda çerez ayarlamaz.',
  '%s Active' => '%s Aktif',
  'Subschemata Have Warnings' => 'Subschemata Uyarıları Var',
  'Require Administrators to Approve Accounts' => 'Yöneticilerin Hesapları Onaylamalarını Gerektir',
  'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Büyük dosya yüklemelerini desteklemek için PHP yapılandırmanızda %s en az 32MB olarak ayarlayın.',
  'The system sudo user.' => 'Sistem sudo kullanıcısı.',
  'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
messages.' => '',
  'MySQL %s Mode Not Set' => 'MySQL %s Modu Ayarlanmadı',
  'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => '',
  'Options for platform developers, including debugging.' => 'Hata ayıklama dahil olmak üzere platform geliştiricileri için seçenekler.',
  'A component of the configured PATH can not be used by the webserver: %s' => 'Yapılandırılmış PATH\'nin bir bileşeni web sunucusu tarafından kullanılamaz: %s',
  'Allow a single mailbox to be used for all replies.' => 'Tüm yanıtlar için tek bir posta kutusunun kullanılmasına izin verin.',
  'Use specific endpoint' => 'Belirli bir son nokta kullan',
  'Configure Recaptcha captchas.' => 'Recaptcha captcha\'larını yapılandırın.',
  'Report this Issue to the Upstream' => 'Bu Sorunu Membaya Bildirin',
  'Disable SSH error log.' => 'SSH hata günlüğünü devre dışı bırak.',
  'Options relating to PHD (daemons).' => 'Doktora ile ilgili seçenekler (daemonlar).',
  'Repos' => 'Depolar',
  'Database configuration.' => 'Veritabanı Yapılandırması',
  'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => '"%s" seçeneği "%s" türündedir, ancak geçerli değer ("%s"), "%s" temel sınıfının bilinen, somut bir alt sınıfı değildir. Geçerli seçimler: %s.',
  'Databases' => 'Veritabanları',
  'Basic Example' => 'Temel Örnek',
  '%s In / %s Out' => '%s Açık / %s Kapalı',
  'Adapter class to use to transmit mail to the MTA. The default uses
PHPMailer, which will invoke "mail". This is appropriate if mail actually
works on your host, but if you haven\'t configured mail it may not be so great.
A number of other mailers are available (e.g., SES, SendGrid, SMTP, Sendmail,
custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => '',
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
production instance were both in operation.' => '',
  'Whitelist Specific Addresses' => 'Beyaz Listeye Özgü Adresler',
  'Other Version Information' => 'Diğer Sürüm Bilgisi',
  'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'VCS kullanıcılarından %s kullanıcılarına yapılan eşleme değişti ve yeniden oluşturulması gerekiyor.',
  'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'Yetkilendirme yapılandırmasının kilidi şu anda açık. Yetkilendirme ayarını bitirdikten sonra kilitlemelisiniz.',
  'Use `%s` instead of this option.' => 'Bu seçenek yerine `%s` kullanın.',
  'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'Henüz herhangi bir kimlik doğrulama sağlayıcısı yapılandırmadınız. Kullanıcıların kaydolup giriş yapabilmesi için bir sağlayıcı (kullanıcı adı/parola, LDAP veya GitHub OAuth gibi) eklemeniz gerekir. Yetkilendirme Uygulamasını kullanarak sağlayıcılar ekleyebilir ve yapılandırabilirsiniz.',
  'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Veritabanlarını yükseltmek için depolama yükseltme komut dosyasını çalıştırın (ana bilgisayar "%s" güncel değil). Eksik yamalar: %s.',
  'Resource deflation is now managed automatically.' => 'Kaynak küçültme artık otomatik olarak yönetiliyor.',
  'MySQL' => 'MySQL',
  'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Veritabanları varsayılan olarak \'phabricator\' olan bir ad alanında oluşturulur, örneğin, Diferansiyel veritabanı varsayılan olarak \'phabricator_differential\' olarak adlandırılır. İsterseniz bu ad alanını değiştirebilirsiniz. Normal olarak, uzantıları geliştirmiyor ve birden çok sanal alan veri kümesini ayırmak için ad alanları kullanmıyorsanız bunu yapmamalısınız.',
  'Serious business' => 'Ciddi İş',
  'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'Harici yükleyiciler değiştirildi. Yeni PHID ve tanıtıcı türlerini uygulamak için `%s` değerini uzatın.',
  'Authenticating users based on "Reply-To" is no longer supported.' => 'Kullanıcıların "Yanıtla" temel alınarak kimlik doğrulaması artık desteklenmemektedir.',
  'Option "%s" is of type "%s", but the configured value is not a list.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir liste değildir.',
  'Cluster instance name, if configured.' => 'Yapılandırılmışsa küme örneği adı.',
  'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'REMOTE_ADDR\'nin artık boş olmaması için başlangıç betiğinizi düzeltmeniz gerekiyor.',
  'Unknown Config' => 'Bilinmeyen Ayar',
  'Detected %s serious issue(s) with the schemata.' => 'Şemada %s ciddi bir sorun tespit edildi.',
  'Daemons Not Running' => 'Daemon Çalışmıyor',
  'MySQL username to use when connecting to the database.' => 'Veritabanına bağlanırken kullanılacak MySQL kullanıcısı.',
  'Secret key for Amazon EC2.' => 'Amazon EC2 için gizli anahtar.',
  'These %d configuration value(s) are related:' => 'Bu %d yapılandırma değeri aşağıdakilerle ilgilidir:',
  'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.

This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Bu yazılım, "Accept-Encoding: gzip" ile bir istek gönderdi, ancak sıkıştırılmamış bir yanıt aldı.

Bu, web sunucunuzun yanıtları sıkıştırmak için yapılandırılmadığını gösterebilir. Öyleyse sıkıştırmayı etkinleştirmelisiniz. Sıkıştırma, özellikle daha az bant genişliğine sahip müşteriler için performansı önemli ölçüde artırabilir.',
  'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Birden fazla %s ortamınız varsa (geliştirme/hazırlama ortamı ve üretim ortamı gibi), burada üretim ortamı URI\'sini e-postaların ve diğer dayanıklı URI\'ların her zaman üretime işaret eden bağlantılarla üretecek şekilde ayarlayın ortamı. Ayarlanmazsa, varsayılan olarak `%s` olur. Çoğu kurulumun bu seçeneği ayarlaması gerekmez.',
  'Names must match to compare schemata!' => 'Şemaları karşılaştırmak için isimler eşleşmelidir!',
  'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).

This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.

This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Kullanıcılar bazı durumlarda (örneğin, uzak bir URL ile bir depo oluşturarak) servis sunucularından diğer servislere istekte bulunabilirler.

Aynı alt ağdaki hizmetler, kaynak IP adresine bağlı olarak kimliği doğrulanmamış HTTP GET üzerinden komutları kabul ederse veya özel bilgileri ortaya çıkarırsa, bu bir güvenlik açığı olabilir. Özellikle, EC2\'deki tüm ana bilgisayarlar böyle bir hizmete erişebilir.

Bu seçenek, isteklerin asla gönderilmeyeceği ağ engellerinin bir listesini tanımlar. Genellikle, tüm özel IP alanlarını buraya listelemelisiniz.',
  'Core Settings' => 'Temel Ayarlar',
  'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.

You should disable this option in your %s file, in the %s section:

%s' => 'MySQL sunucunuz "local_infile" seçeneği etkin olarak yapılandırıldı. Bu seçenek, SQL enjeksiyon deliği bulan bir saldırganın web sunucusundan "VERİ YEREL DOSYASI YÜKLE" sorgularıyla dosyaları kopyalayıp ardından "SEÇ" sorgularıyla dosya içeriğini okuyarak saldırılarını arttırabilmesini sağlar.

Bu seçeneği %s dosyanızdaki %s bölümünde devre dışı bırakmalısınız:

%s',
  'Setup Checks' => 'Kurulum Kontrolleri',
  'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Bu sistem, Bash\'in işlenmemiş ve yaygın bir şekilde açıklanmış bir güvenlik açığına sahip eşsiz bir sürümüne sahiptir.',
  'Keys' => 'Anahtarlar',
  'No Auth Providers' => 'Kimlik Doğrulama Sağlayıcısı Yok',
  'Missing Required Extensions' => 'Eksik Gerekli Uzantılar',
  'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'Bu seçenek "Yetkilendirme" uygulamasına taşındı. Eski yapılandırmanız hala yürürlükte, ancak şimdi yapılandırma yerine "Yetkilendirme" de depolanıyor. Bundan sonra, kimlik doğrulamasını web arayüzünden yönetebilirsiniz.',
  'Provide a list of notification servers to enable real-time notifications.

For help setting up notification servers, see **[[ %s | %s ]]** in the
documentation.' => '',
  'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.

This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.

Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.

To disable this option, set: %s' => 'PHP şu anda herhangi bir yerel dosyanın içeriği için bağlandığı herhangi bir MySQL sunucusundan gelen istekleri karşılayacak şekilde yapılandırılmıştır.

Bu özellik MySQL "VERİ YEREL DOSYASI YÜKLE" sorgularını destekler, ancak kötü amaçlı bir MySQL sunucusunun yerel diske okuma erişimine izin verir: sunucu istemciden herhangi bir yerel dosyanın içeriğini göndermesini isteyebilir ve istemci uyumlu olacaktır.

Bir saldırganın bu yazılımı kötü amaçlı bir MySQL sunucusuna bağlanmaya ikna etmesi normalde zor olsa da, bu seçeneği devre dışı bırakmalısınız: bu özellik gereksizdir ve doğası gereği tehlikelidir.

Bu seçeneği devre dışı bırakmak için şunu ayarlayın: %s',
  'Activity "%s" is not currently marked as required, so there is no need to complete it.' => '"%s" etkinliği şu anda gerektiği gibi işaretlenmediğinden, tamamlanmasına gerek yok.',
  'To continue, resolve this problem and reload the page.' => 'Devam etmek için bu sorunu çözün ve sayfayı yeniden yükleyin.',
  'Wordmark' => 'Marka',
  'WARNING: This is a prototype option and the description below is currently pure fantasy.

Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'UYARI: Bu bir prototip seçeneğidir ve aşağıdaki açıklama şu anda saf hayal ürünüdür.

Hizmeti salt okunur moda geçirin. Bu modda kullanıcılar yeni veri yazamaz. Normalde, küme veritabanı yöneticisine erişilemediğini algıladığında otomatik olarak bu moda geçer, ancak bakım veya test yapılandırması gerçekleştirmek için el ile etkinleştirebilirsiniz.',
  'Severe Security Vulnerability: Unpatched Bash' => 'Ciddi Güvenlik Açığı: Toplu Olmayan Bash',
  'Force HTTPS' => 'HTTPS\'yi zorla',
  'This key is not expected to exist.' => 'Bu anahtarın olması beklenmez.',
  '%s.%s' => '%s.%s',
  '%s.%s.%s' => '%s.%s.%s',
  '%d related link(s):' => '%d ile ilgili bağlantı:',
  'To rebuild identities, run this command:' => 'Kimlikleri yeniden oluşturmak için şu komutu çalıştırın:',
  'Missing Repository Local Path' => 'Depo Yerel Yolu Eksik',
  'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Alternatif bir kaynak haritası artık desteklenmemektedir. Bunun yerine, birden fazla harita kullanın. T4222 bakın.',
  'Repository Services' => 'Depo Hizmetleri',
  'Inline comments are now always rendered with a limited amount of context.' => 'Satır içi yorumlar artık her zaman sınırlı miktarda içerikle oluşturulmaktadır.',
  'Locked Configuration Option "%s" Has Database Value' => 'Kilitli Yapılandırma Seçeneği "%s" Veritabanı Değerine Sahip',
  'Separate values with newlines or commas.' => 'Değerleri satırsonu veya virgülle ayırın.',
  'Don\'t require email verification' => 'E-posta doğrulaması gerektirme',
  'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => '"%s" yapılandırma anahtarı bilinmiyor. Bilinen tüm anahtarları listelemek için "bin/config list" kullanın.',
  'Alternate File Domain Not Configured' => 'Alternatif Dosya Etki Alanı Yapılandırılmadı',
  'Unknown schema issue "%s"!' => 'Bilinmeyen şema sorunu "%s"!',
  'Embed Commons videos' => 'Gömülü Commons videoları',
  'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.

Disable this setting to continue.' => 'Sunucunuz, bu yazılımın erişim gerektirdiği dosyaları açmasını engelleyen \'%s\' ile yapılandırıldı.

Devam etmek için bu ayarı devre dışı bırakın.',
  'Limit page execution time to debug hangs.' => 'Askıda hata ayıklamak için sayfa yürütme süresini sınırlayın.',
  'Base URI Not Configured' => 'Temel URI Yapılandırılmadı',
  'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
Try this system resolution:
sudo git config --system --add safe.directory %s' => '',
  'Always Activate DarkConsole' => 'DarkConsole\'i Her Zaman Etkinleştir',
  'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.

This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.

This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.

Requests must include a valid "Host" header.' => 'Bu istek, "%s" değerine sahip geçersiz bir "Host" başlığı içeriyordu. Ana Bilgisayar başlıkları, "example.com" gibi bir nokta ("") içermelidir. Bu, bazı tarayıcıların çerez ayarlayabilmesi için gereklidir.

Bu, temel URI\'nin yanlış yapılandırılmış olabileceği anlamına gelebilir. Bu yazılımı, boş bir alan adı ("https://devtools/" gibi) yerine, nokta içeren bir temel URI\'den ("https://devtools.example.com" gibi) sunmalısınız. Boş bir alan adı kullanmaya çalışıyorsanız, yapılandırmanızı nokta içeren tam bir alan adı kullanacak şekilde değiştirin.

Bu aynı zamanda web sunucunuzun (veya yük dengeleyici gibi başka bir ağ aygıtının) "Ana Bilgisayar" başlığını bozduğu veya bir isteği manuel olarak göndermek için bir araç veya kitaplık kullandığınız ve yanlış "Host" başlığını ayarladığınız anlamına da gelebilir.

İstekler, geçerli bir "Host" başlığı içermelidir.',
  'User Interface' => 'Kullanıcı Arayüzü',
  'No Schema Issues' => 'Şema Sorunu Yok',
  'MySQL database hostname.' => 'MySQL veritabanı ana bilgisayar adı.',
  'Obsolete Config' => 'Eski Yapılandırma',
  'Sets the default color scheme.' => 'Varsayılan renk düzenini ayarlar.',
  'Clustering Introduction' => 'Kümelenmeye Giriş',
  'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Varsayılan olarak, bu yazılım, Maniphest\'te "Yorum Ekle" yerine "Tartım" istemi gibi kullanıcı arayüzünde bazı lezzet metinleri içerir. "Yorum Ekle" gibi daha geleneksel kullanıcı arayüzü dizelerini tercih ediyorsanız, bu bayrağı ekstra lezzetin çoğunu devre dışı bırakacak şekilde ayarlayabilirsiniz.',
  'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.

This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => '',
  'MySQL on this machine' => 'Bu makinede MySQL',
  'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'Böyle bir yapılandırma anahtarı \'%s\' yok! Tüm tuşları listelemek için `%s` tuşunu kullanın.',
  'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'İlginç şeyler olduğunda geri çağrı alacak dinleyicileri yükleyerek çeşitli uygulama olaylarına yanıt verebilirsiniz. Burada PhabricatorEventListener\'ı genişleten sınıfların bir listesini belirtin.',
  'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Bu kurulumda önemli bir kurulum hatası var, ayrıntıları görüntülemek ve çözmek için web arayüzüne erişin.',
  'Alternate domain to serve files from.' => 'Dosyaların sunulacağı alternatif alan.',
  'Your webserver is not forwarding credentials.' => 'Web sunucunuz kimlik bilgilerini iletmiyor.',
  'Default non-pygments syntax highlighter engine.' => 'Varsayılan pigment olmayan sözdizim vurgulayıcı motoru.',
  'HTTP Parameter Types' => 'HTTP Parametre Türleri',
  'Mangled Webserver Response' => 'Karışık Web Sunucusu Yanıtı',
  'Setup issues to ignore.' => 'Yok sayılması gereken kurulum sorunları.',
  'Directory that the daemons should use to store log files.' => 'Günlüklerin depolanması için arka plan programlarının kullanması gereken dizin.',
  'Only allow registration from particular domains.' => 'Yalnızca belirli alan adlarından kayıt yapılmasına izin verin.',
  'Subschemata have setup failures.' => 'Subschemata kurulum hataları var.',
  'No performance sampling.' => 'Performans örneklemesi yok.',
  'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.

For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.

You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.

To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:

%s
' => 'Veritabanı ana bilgisayarı "%s", arama dizinleri oluştururken varsayılan minimum kelime uzunluğunu kullanacak şekilde yapılandırılır. Bu, 4\'tür. Bu, yalnızca 3 karakter uzunluğundaki kelimelerin dizine eklenmeyeceği ve aranamayacağı anlamına gelir.

Örneğin, \'SMS\', \'web\' veya \'DOS\' gibi kelimelerin arama sonuçlarını bulamazsınız.

Bu kelimelerin dizine eklenmesine izin vermek için bu ayarı 3 olarak değiştirebilirsiniz. Alternatif olarak, 3 harfli kelimeleri aramakla ilgilenmiyorsanız bu uyarıyı göz ardı edebilirsiniz. Daha sonra Elasticsearch\'ı yapılandırmayı planlıyorsanız, bu uyarıyı da göz ardı edebilirsiniz: yalnızca MySQL tam metin araması etkilenir.

Minimum kelime uzunluğunu 3\'e düşürmek için bunu %s dosyanıza ekleyin (%s bölümünde) ve sonra %s yeniden başlatın:

%s',
  '%s\'s home page' => '%s\'in ana sayfası',
  'Show installed extensions and modules.' => 'Yüklü uzantıları ve birimleri göster.',
  'Opcode Cache' => 'Opcode Önbelleği',
  'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => '',
  'ID of the SSH key used to authenticate the request.' => 'İsteğin kimliğini doğrulamak için kullanılan SSH anahtarının kimliği.',
  'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'Genellikle %s, %s veya %s kullanarak bir PHP eklentisi yükleyebilirsiniz. Yaygın bir paket adı %s adıdır. Şu gibi komutları deneyin:',
  'US East (EDT)' => 'ABD Doğu (EDT)',
  'The HTTP referrer.' => 'HTTP yönlendireni.',
  'HTTP Parameters Not Transmitting' => 'İletilmeyen HTTP Parametreleri',
  'Determines whether Wikimedia Commons videos get embedded.' => 'Wikimedia Commons videolarının gömülüp gömülmeyeceğini belirler.',
  'Better Collation Available' => 'Daha İyi Tanımlama Var',
  'View "%s"' => 'Göster "%s"',
  'This setup issue has been resolved. ' => 'Bu kurulum sorunu çözüldü.',
  'Additional configuration options to hide.' => 'Gizlenecek ek yapılandırma seçenekleri.',
  'The logged-in username, if one is logged in.' => 'Giriş yapılmışsa, giriş yapmış kullanıcı adı.',
  'Deprecated Code' => 'Kullanımdan Kaldırılan Kod',
  'PHP date functions will emit a warning if they are called when no default
server timezone is configured.

Usually, you configure a default timezone in `php.ini` by setting the
configuration value `date.timezone`.

If you prefer, you can configure a default timezone here instead. To configure
a default timezone, select a timezone from the
[[ %s | PHP List of Supported Timezones ]].' => '',
  'No REMOTE_ADDR available' => 'REMOTE_ADDR yok',
  'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Amazon S3\'teki dosya depolama alanı kısmen yapılandırıldı, ancak gerekli bazı ayarlar eksik. S3, yapılandırmayı tamamlayana kadar dosyaları depolamak için kullanılamaz. S3\'ü tamamen yapılandırın veya kısmi yapılandırmayı kaldırın.',
  'The logged-in user PHID, if one is logged in.' => 'Oturum açmışsa, oturum açan kullanıcı PHID\'si.',
  'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.

If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'UYARI: Bu çok gelişmiş bir seçenektir ve yalnızca çok kiracılı kümeler çalıştıran sağlayıcılar için yararlıdır.

Burada bir örnek tanımlayıcı sağlarsanız (normalde bunu `%s` ile enjekte ederek), sunucu bunu alt işlemlere geçirir ve `%s` çevresel değişkenindeki kancaları işler.',
  'Version Information' => 'Sürüm Bilgisi',
  'The base URI for this install is not configured, and major features will not work properly until you configure it.

You should set the base URI to the URI you will use to access this server, like "https://devtools.example.com/".

Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).

Based on this request, it appears that the correct setting is:

%s

To configure the base URI, run the command shown below.' => 'Bu yükleme için temel URI yapılandırılmamış ve ana özellikler siz yapılandırıncaya kadar düzgün çalışmayacak.

Temel URI\'yi bu sunucuya erişmek için kullanacağınız URI\'ye, örneğin "http://devtools.example.com/" olarak ayarlamalısınız.

80 (http) veya 443 (https) dışında bir bağlantı noktası kullanıyorsanız, protokolü (http veya https), etki alanı adını ve bağlantı noktası numarasını ekleyin.

Bu isteğe bağlı olarak, doğru ayarın aşağıdaki gibi olduğu görülmektedir:

%s

Temel URI\'yi yapılandırmak için, aşağıda gösterilen komutu çalıştırın.',
  'HTTP Path Rewriting Incorrect' => 'HTTP Yolu Yeniden Yazma Yanlış',
  'Surplus' => 'Fazlalık',
  'Instance identifier for multi-tenant clusters.' => 'Çok kiracılı kümeler için örnek tanıtıcısı.',
  'Upgrade MySQL Schema' => 'MySQL Şemasını Yükselt',
  'Unignore Setup Issue' => 'Kurulum Sorunu Yoksaymasını Çıkar',
  'Automatically sample some fraction of requests.' => 'İsteklerin bir kısmını otomatik olarak örnekleyin.',
  'SSH log location.' => 'SSH günlük konumu.',
  'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => 'Artık keyfi büyüklükteki dosyalar destekleniyor. Yapılandırma ayrıntıları için belgelere bakın.',
  'Delete a local configuration value.' => 'Yerel bir yapılandırma değerini silin.',
  'These paths get appended to your %s environment variable.' => 'Bu yollar %s ortam değişkeninize eklenir.',
  'Epoch timestamp.' => 'Dönem zaman damgası.',
  'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => '',
  'Blindigo' => 'Blindigo',
  'Expected Column Type' => 'Beklenen Sütun Türü',
  'Enable developer mode' => 'Geliştirici modunu etkinleştir',
  '%s, occurrences: %s' => '%s, oluşum: %s',
  'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Vah! Bu talebin yolculuğu beklenmedik koşullarda kısaldı (%s).',
  'Customizes retention policies for garbage collectors.' => 'Çöp toplayıcılar için saklama politikalarını özelleştirir.',
  'This schema can use a better column type.' => 'Bu şema daha iyi bir sütun türü kullanabilir.',
  'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => '\'%s\' olmadan, bu yazılım birden fazla uygulamada fark üretemez veya oluşturamaz.',
  'The request date.' => 'İstek tarihi.',
  'Reply handlers can no longer be overridden with configuration.' => 'Yanıt işleyicileri artık yapılandırmayla geçersiz kılınamaz.',
  'There is some deprecated code found in the %s code-base.

This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.

This page records a sample of the cases since last server restart. 

To solve this issue, either:

- Visit %s, file bug report with the information below, or
- Ignore this issue using the `Ignore` button below.

' => '',
  'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Varsayılan biçimin gelecekte değişebileceğini unutmayın; bu nedenle günlük biçimine güveniyorsanız, açıkça belirtin.',
  'Send as %s' => '%s olarak gönder',
  'Setup Error' => 'Kurulum Hatası',
  'Installed on Burstable CPU Instance' => 'Burstable CPU Eşgörünümüne Yüklendi',
  'MySQL is Using Default Minimum Word Length' => 'MySQL Varsayılan Minimum Kelime Uzunluğunu Kullanıyor',
  'Extensions/Modules' => 'Uzantılar/Birimler',
  'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:

%s
If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'Yerel depolar dizini (%s) mevcut değil veya web sunucusu tarafından okunamıyor. Bu yazılım, depolar hakkında bilgi depolamak için bu dizini kullanır. Bu dizin yoksa oluşturun:

%s
Bu dizin varsa, web sunucusu tarafından okunabilir hale getirin. Başka bir dizini kullanmak için aşağıdaki yapılandırmayı da düzenleyebilirsiniz.',
  'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Sözdizimi vurgulama koduna bir açılır liste görüntülediğimiz yerlerde, bu liste tanımlanır.',
  'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => '',
  'Unignore' => 'Yoksaymayı geri al',
  'Text values that match this regex and are also object names will not be linked.' => 'Bu normal ifadeyle eşleşen ve aynı zamanda nesne adları olan metin değerleri bağlanmayacaktır.',
  '%s Held / %sms' => '%s Tutuldu / %sms',
);
  }

}
