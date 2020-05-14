<?php

final class PhabricatorConfigTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Array containing list of uninstalled applications.' => 'Kaldırılan uygulamaların listesini içeren dizi.',
      'Client Server' => 'Müşteri Sunucusu',
      'Listeners receive callbacks when interesting things occur.' => 'Dinleyiciler ilginç şeyler olduğunda geri arama alır.',
      'Update configuration in the database instead of in local configuration.' => 'Yerel yapılandırma yerine veritabanında yapılandırmayı güncelleyin.',
      'Column/Key' => 'Sütun/Anahtar',
      'Customize the logo and wordmark text in the header.' => 'Başlıktaki logo ve kelime işareti metnini özelleştirin.',
      'Configuring File Storage' => 'Dosya Deposunu Yapılandırma',
      '%s / %s' => '%s / %s',
      'Address ranges of cluster hosts.' => 'Küme ana bilgisayarlarının adres aralıkları.',
      'Suppress mail from maintenance users.' => 'Bakım kullanıcılarının postalarını engelle.',
      'Memory Usage' => 'Hafıza Kullanımı',
      'Impersonating users over the API is no longer supported.' => 'Kullanıcıların API üzerinden taklit edilmesi artık desteklenmemektedir.',
      'Table' => 'Tablo',
      'Ignore Setup Issue' => 'Kurulum Sorununu Yoksay',
      'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'Bu seçenek, oturumu kapatmış kullanıcılar için bile her sayfada DarkConsole\'u etkinleştirmenizi sağlar. Bu yalnızca çıkış yapmış bir sayfada bir hata ayıklamanız gerektiğinde yararlıdır. Üretimde bu seçeneği etkinleştirmemelisiniz.
    Bu seçeneğin herhangi bir etkisi olması için \'%s\' ayarlayarak DarkConsole\'u etkinleştirmeniz gerekir.',
      'Modules' => 'Modüller',
      'Repository %s has unreplicated changes (for %s).' => '%s deposu çoğaltılmamış değişikliklere sahip (%s için).',
      'Phabricator now automatically discovers available storage engines at runtime.' => 'Phabricator artık çalışma zamanında kullanılabilir depolama motorlarını otomatik olarak keşfediyor.',
      'The controller or workflow which handled the request.' => 'İsteği işleyen denetleyici veya iş akışı.',
      'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => '"%s" seçeneği "%s" türündedir, ancak listenin "%s" dizinindeki değer "true" değildir.',
      'Applications application' => 'Uygulamalar uygulama',
      'The namespace that Phabricator databases should use.' => 'Phabricator veritabanlarının kullanması gereken ad alanı.',
      '%s created this configuration entry.' => '%s bu yapılandırma girişini oluşturdu.',
      'You have enabled pygments and the %s script is available, but does not seem to work.' => 'Pigmentleri etkinleştirdiniz ve %s betiği kullanılabilir, ancak çalışmıyor gibi görünüyor.',
      'This column is missing a type specification.' => 'Bu sütunda bir tür belirtimi eksik.',
      'Configure the Phabricator UI, including colors.' => 'Renkler de dahil olmak üzere Phabricator kullanıcı arayüzünü yapılandırın.',
      'Column Has No Specification' => 'Sütunun Özellikleri Yok',
      'Delete configuration in the database instead of in local configuration.' => 'Yerel yapılandırma yerine veritabanındaki yapılandırmayı silin.',
      'No Email Preferences Link' => 'E-posta Tercihleri Bağlantısı Yok',
      'Marked activity "%s" as completed.' => '"%s" etkinliği tamamlandı olarak işaretlendi.',
      'Configure Phabricator to run on a cluster of hosts.' => 'Phabricator\'ı bir ana bilgisayar kümesinde çalışacak şekilde yapılandırın.',
      'Repository %s has unreplicated changes.' => '%s deposu çoğaltılmamış değişikliklere sahip.',
      'MySQL %s Mode Set' => 'MySQL %s Mod Seti',
      'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make Phabricator redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: Phabricator determines if a request is HTTPS or not by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run Phabricator as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure Phabricator in cluster mode, note that this setting is ignored by intracluster requests.' => 'Web sunucusu hem HTTP hem de HTTPS isteklerine yanıt veriyorsa ancak kullanıcıların yalnızca HTTPS ile bağlantı kurmasını istiyorsanız, Phabricator\'ın HTTP isteklerini HTTPS\'ye yönlendirmesi için bunu `true` olarak ayarlayabilirsiniz.
    Normalde, sunucunuzu HTTP trafiğini kabul etmeyecek şekilde yapılandırmanız gerekir, ancak başlangıçta HTTP kullandıysanız ve şimdi HTTPS\'ye geçtiyseniz, ancak eski bağlantıları koparmak istemiyorsanız veya web sunucunuz bir yük dengeleyicinin arkasındaysa bu ayar yararlı olabilir HTTPS bağlantılarını sonlandırır ve burada daha ayrıntılı davranışları makul bir şekilde yapılandıramazsınız.
    ÖNEMLİ: Phabricator, PHP `%s` değişkenini inceleyerek bir isteğin HTTPS olup olmadığını belirler. Apache/mod_php çalıştırırsanız, bu muhtemelen sizin için otomatik olarak doğru bir şekilde ayarlanır, ancak Phabricator\'ı CGI/FCGI olarak çalıştırırsanız (örneğin, nginx veya lighttpd aracılığıyla), web sunucunuzu değeri doğru şekilde geçecek şekilde yapılandırmanız gerekir. bağlantı türü.
    Phabricator\'ı küme modunda yapılandırırsanız, bu ayarın intlusluster istekleri tarafından yoksayıldığını unutmayın.',
      'This version of Mercurial returns a bad exit code after a successful pull.' => 'Mercurial\'ın bu sürümü, başarılı bir çekimden sonra bozuk bir çıkış kodu döndürür.',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'Bu sistemdeki \'%s\' ikili dosyasının beklenmedik bir davranışı var: özdeş dosyalar iletildiğinde hata kodu olmadan çıkması bekleniyordu, ancak %s koduyla çıkıldı.',
      'No active repositories have outstanding errors.' => 'Hiçbir etkin depoda olağanüstü hatalar yoktur.',
      'Usage' => 'Kullanım',
      'Rebuild Repository Identities' => 'Depo Kimliklerini Yeniden Oluştur',
      'Move port information from `%s` to `%s` in your config.' => 'Bağlantı noktası bilgisini yapılandırmanızda "%s" üzerinden "%s" taşıyın.',
      'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'Bu seçenek web kullanıcı arayüzünden düzenlenemez. Çöp toplayıcı politikalarını ayarlamak için %s kullanın.',
      'Better Table Engine Available' => 'Daha İyi Masa Motoru Var',
      'Set a local configuration value.' => 'Yerel bir yapılandırma değeri belirleyin.',
      'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Büyük dosya depolama alanı yapılandırılmadı, bu da maksimum dosya yükleme boyutunu sınırlayacak. Yüklemeleri ve depolamayı yapılandırma talimatları için %s bakın.',
      '%s deleted %s (again?).' => '%s, %s sildi (yine mi?).',
      'Access log format.' => 'Erişim günlüğü biçimi.',
      'Phabricator sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    Phabricator sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'Phabricator, web sunucunuzun yolları doğru şekilde yeniden yazıp yazmadığını test etmek için alışılmadık bir yolla bir test isteği gönderdi. Yol doğru bir şekilde iletilmedi.
    Phabricator, "%s" yoluna bir istek gönderdi ve web sunucusunun "%s" için bir istek alması için bu yolun kodunu çözmesini ve yeniden yazmasını bekledi. Ancak, bunun yerine "%s" için bir istek aldı.
    Yeniden yazma kurallarınızın, belgelerdeki talimatları izleyerek doğru yapılandırıldığını doğrulayın. Yol kodlaması düzgün çalışmıyorsa, diğer sorunların yanı sıra depolarda olağandışı adlara sahip dosyalara erişemezsiniz.
    (Bu soruna RewriteRule\'unuzdaki eksik "B" neden olabilir.)',
      'Specify a value to set the key \'%s\' to.' => '\'%s\' anahtarını ayarlamak için bir değer belirtin.',
      'Access log location.' => 'Erişim günlüğü konumu.',
      'Phabricator occasionally shells out to other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running Phabricator (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s' => 'Phabricator zaman zaman sunucudaki diğer ikili dosyalara kabuk oluşturur. Buna bir örnek, PHP dışındaki dillerde yazılan kodu sözdizimi-vurgulamak için kullanılan `%s` komutudur. Varsayılan olarak, bu ikili dosyaların Phabricator\'ı çalıştıran kullanıcının %s üzerindeolduğu varsayılır (normalde \'apache\', \'httpd\' veya \'nobody\'). Burada, bu ikili dosyalar standart olmayan konumlarda olduğunda %s ortam değişkenine ekstra dizinler ekleyebilirsiniz.
    İkili dosyaları "%s" üzerinde koyabileceğinizi unutmayın (örneğin, işaretleyerek).
    Yapılandırma uygulandıktan sonra geçerli PATH değeri:
      lang=text
      %s',
      'Your webserver is not handling GET parameters properly.' => 'Web sunucunuz GET parametrelerini düzgün işlemiyor.',
      'Repository Errors' => 'Depo Hataları',
      'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bilinen bir sınıfın adı değildir. Geçerli seçimler: %s.',
      'Phabricator no longer shows reply hints in mail.' => 'Phabricator artık postadaki yanıt ipuçlarını göstermiyor.',
      'Short' => 'Kısa',
      'Phabricator is not configured in cluster mode.' => 'Phabricator, küme modunda yapılandırılmamış.',
      'Large File Storage Not Configured' => 'Büyük Dosya Depolama Yapılandırılmamış',
      'Migrating file-based config to more modern config...' => 'Dosya tabanlı yapılandırmayı daha modern yapılandırmaya geçiriyor...',
      'Full' => 'Dolu',
      'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Veritabanlarını ayarlamak için depolama yükseltme komut dosyasını çalıştırın (ana bilgisayar "%s" başlatılmadı).',
      'Unrecognized verb: %s' => 'Tanınmayan fiil: %s',
      'No REMOTE_ADDR is available, so Phabricator cannot determine the origin address for requests. This will prevent Phabricator from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'Kullanılabilir REMOTE_ADDR yok, bu nedenle Phabricator istekler için başlangıç adresini belirleyemiyor. Bu, Phabricator\'ın önemli güvenlik kontrolleri yapmasını engelleyecektir. Bu en sık, başlangıç senaryosunda bir hata olduğu anlamına gelir. Dokümanlara (%s) bakın ve komut dosyasının doğru yazıldığını tekrar kontrol edin.',
      'Expected Collation' => 'Beklenen Harmanlama',
      'Controls whether Phabricator sends one email with multiple recipients in the "To:" line, or multiple emails, each with a single recipient in the "To:" line.' => 'Phabricator\'ın "Kime:" satırında birden çok alıcı içeren bir e-posta mı yoksa her biri "Kime:" satırında tek bir alıcısı olan birden fazla e-posta gönderip göndermeyeceğini denetler.',
      'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => '"%s" seçeneği "%s" türündedir, ancak değer bir liste değildir: doğal olmayan veya seyrek anahtarları olan bir haritadır.',
      'Use Normal HTTP Redirects' => 'Normal HTTP Yönlendirmelerini Kullan',
      'Configuration key \'%s\' is not set in %s configuration!' => '\'%s\' yapılandırma anahtarı %s yapılandırmasında ayarlanmadı!',
      'Multi-Factor Optional' => 'Çok Faktörlü Opsiyonel',
      'Access Denied' => 'Erişim Engellendi',
      'The configuration option \'%s\' has been removed. You may delete it at your convenience.
    %s' => '\'%s\' yapılandırma seçeneği kaldırıldı. İstediğiniz zaman silebilirsiniz.
    %s',
      'Disable Pagespeed' => 'Sayfa Hızını Devre Dışı Bırak',
      'Elasticsearch index exists but needs correction.' => 'Elasticsearch dizini var, ancak düzeltilmesi gerekiyor.',
      'Nullable' => 'Sıfırlanabilir',
      'The "%s" key is set to some value other than "-1" in your PHP configuration. This can cause PHP to raise deprecation warnings during process startup. Set this option to "-1" to prevent these warnings from appearing.' => '"%s" anahtarı PHP yapılandırmanızda "-1" dışında bir değere ayarlanmış. Bu, PHP\'nin işlem başlatma sırasında kullanımdan kaldırma uyarılarını yükseltmesine neden olabilir. Bu uyarıların görünmesini önlemek için bu seçeneği "-1" olarak ayarlayın.',
      'No "Host" Header' => '"Ana Bilgisayar" Üstbilgisi Yok',
      'Do not install Phabricator on an instance class with burstable CPU.' => 'Phabricator\'ı bükülebilir CPU içeren bir örnek sınıfına kurmayın.',
      'Activity "%s" did not need to be marked as complete.' => '"%s" etkinliğinin tamamlanmış olarak işaretlenmesi gerekmez.',
      'The translation implementation has changed and providers are no longer used or supported.' => 'Çeviri uygulaması değişti ve sağlayıcılar artık kullanılmıyor veya desteklenmiyor.',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '"%s" seçeneği "%s" türündedir, ancak sağladığınız değer geçerli bir JSON listesi değil. Komut satırından bir liste seçeneği ayarlarken, değeri JSON\'da belirtin. Kabuğunuzun değerini belirtmeniz gerekebilir (örneğin: \'["a", "b", ...]\').',
      'The minimum supported version of Mercurial is 1.9, which was released in 2011.' => 'Mercurial\'ın desteklenen en düşük sürümü, 2011\'de piyasaya sürülen 1.9\'dur.',
      'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'SSH erişim günlüğü biçimi. Yolu ayarlamak için %s kullanın. Mevcut değişkenler:',
      'This table can use a better table engine.' => 'Bu tablo daha iyi bir tablo motoru kullanabilir.',
      'PHP post_max_size Not Configured' => 'PHP post_max_size Yapılandırılmadı',
      'Can Not Connect to MySQL' => 'MySQL\'e Bağlanılamıyor',
      'Option "%s" is of type "%s", but the configured value is not a boolean.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir boole değeri değildir.',
      'Disable developer mode' => 'Geliştirici modunu devre dışı bırak',
      'Profile 0.1%% of all requests' => 'Profil tüm istekleri %%0.1\'i',
      'This option has been replaced with the more granular option `%s`.' => 'Bu seçenek daha ayrıntılı seçenek olan `%s` ile değiştirildi.',
      'Require all users to configure multi-factor authentication.' => 'Tüm kullanıcıların çok faktörlü kimlik doğrulamasını yapılandırmasını zorunlu kılın.',
      'Configuration Guide: Locked and Hidden Configuration' => 'Yapılandırma Kılavuzu: Kilitli ve Gizli Yapılandırma',
      'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'Bu seçenek ayrıntılı hata raporlamayı (yığın izleri, hata bilgileri) etkinleştirir ve her yeniden yüklemede statik varlıkların disk okumalarını zorlar.',
      '(%s%s) %s' => '(%s%s) %s',
      'Nonreplicating Replica' => 'Çoğaltılmayan Çoğaltma',
      'Run these %d command(s):' => 'Bu %s komutunu çalıştırın:',
      'Pattern' => 'Desen',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the Phabricator configuration value \'%s\' to specify one.' => 'Yapılandırmanız bir sunucu saat dilimi belirtemiyor. PHP yapılandırma değerini \'%s\' veya Phabricator yapılandırma değerini \'%s\' olarak ayarlayabilirsiniz.',
      'Unknown \'%s\' Version' => 'Bilinmeyen \'%s\' Sürümü',
      'You are using an old version of MySQL (on host "%s"), and should upgrade.' => 'MySQL\'in eski bir sürümünü kullanıyorsunuz ("%s" sunucusunda) ve yükseltmeniz gerekiyor.',
      'Feed Hooks Deprecated' => 'Besleme Kancaları Kullanımdan Kaldırıldı',
      'Purge Caches' => 'Önbellekleri Temizle',
      'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch Phabricator to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'UYARI: Bu bir prototip seçeneğidir ve aşağıdaki açıklama şu anda saf hayal ürünüdür.
    Phabricator\'ı salt okunur moda geçirin. Bu modda kullanıcılar yeni veri yazamaz. Normalde, küme veritabanı yöneticisine erişilemediğini algıladığında otomatik olarak bu moda geçer, ancak bakım veya test yapılandırması gerçekleştirmek için el ile etkinleştirebilirsiniz.',
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
      'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value in a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of Phabricator will stop respecting database values for locked configuration options.' => '"%s" yapılandırma değeri kilitlendi (böylece web kullanıcı arayüzünden düzenlenemez), ancak bir veritabanı değeri vardır. Genellikle, bu daha önce kilitlenmediği, web kullanıcı arayüzünü kullanarak ayarladığınız ve daha sonra kilitlendiği anlamına gelir.
    Bu yapılandırma değerini yerel bir yapılandırma kaynağına (genellikle %s kullanarak) kopyalamalı ve sonra aşağıdaki komutla veritabanından kaldırmalısınız.
    Bu kurulum sorunuyla ilgili ayrıntılar da dahil olmak üzere kilitli ve gizli yapılandırma hakkında daha fazla bilgi için %s bakınız.
    Bu veritabanı değerine şu anda saygı duyulmaktadır, ancak Phabricator\'ın gelecekteki bir sürümü kilitli yapılandırma seçenekleri için veritabanı değerlerine saygı duymayı durduracaktır.',
      'Phabricator Configuration' => 'Phabricator Yapılandırması',
      'Integration with Recaptcha' => 'Recaptcha ile Entegrasyon',
      'Phabricator sent itself a test request and expected to get a bare JSON response back, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'Phabricator kendisine bir test isteği gönderdi ve çıplak bir JSON yanıtı almayı bekledi, ancak yanıtın başında veya sonunda fazladan boşluk vardı.
    Bu genellikle bir dosyayı düzenlediğiniz ve %s etiketini açmadan veya kapanış %s etiketinden sonra boşluk karakterleri bıraktığınız anlamına gelir. Baştaki boşlukları kaldırın ve kapanış etiketlerini atlamayı tercih edin.',
      'Global cap for size of generated emails (bytes).' => 'Oluşturulan e-postaların boyutu (bayt) için genel sınır.',
      'Access Logs' => 'Erişim Günlükleri',
      'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'Bu sunucuda bilinen "%s" kötü sürümü ("%s") var. Bu sürüm desteklenmiyor veya daha yeni bir sürümde düzeltilen önemli hatalar veya güvenlik açıkları içeriyor.',
      'Character Set' => 'Karakter Seti',
      'Phabricator puts databases in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing Phabricator and using namespaces to separate multiple sandbox datasets.' => 'Phabricator, veritabanlarını varsayılan olarak \'phabricator\' olan bir ad alanına koyar -- örneğin, Diferansiyel veritabanı varsayılan olarak \'phabricator_differential\' olarak adlandırılır. İsterseniz bu ad alanını değiştirebilirsiniz. Normal olarak, Phabricator geliştirmiyor ve birden çok sanal alan veri kümesini ayırmak için ad alanları kullanmıyorsanız bunu yapmamalısınız.',
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
      'Config option \'%s\' is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like \'%s\'. 
                You can find a list of valid identifiers here: %s' => '\'%s\' yapılandırma seçeneği geçersiz. Saat dilimi tanımlayıcısı, PHP tarafından tanınan \'%s\' gibi geçerli bir saat dilimi tanımlayıcısı olmalıdır.
                Geçerli tanımlayıcıların bir listesini burada bulabilirsiniz: %s',
      'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'Bu seçenek, birçok prototip uygulamasının bitmemiş doğasını vurgulamak için `%s` olarak yeniden adlandırıldı. Mevcut ayarınız taşındı.',
      'Clients' => 'Müşteriler',
      'Expected Columns' => 'Beklenen Sütunlar',
      'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Taskmasters artık otomatik ölçeklendirme deposu kullanıyor. Havuz boyutunu `%s` ile yapılandırabilirsiniz.',
      'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'Bu yapılandırma kilitlidir ve web arayüzünden düzenlenemez. Düzenlemek için %2$s içinde %1$s kullanın.',
      'Multiple %s subclasses contain an option named \'%s\'!' => 'Birden fazla %s alt sınıf, \'%s\' adlı bir seçenek içerir!',
      'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Gelişmiş sözdizimi vurgulaması sağlamak için MulPygments yüklenmeli ve etkinleştirilmelidir.',
      'Installed Versions' => 'Yüklü Sürümler',
      'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Recaptcha\'ya kaydolarak elde edilen Recaptcha genel anahtarı.',
      'Database Servers' => 'Veritabanı Sunucuları',
      'Specify a configuration key to delete.' => 'Silinecek bir yapılandırma anahtarı belirtin.',
      'Search Servers' => 'Sunucuları Ara',
      'This web host ("%s") is set to a very different time than a database host "%s".' => 'Bu web barındırıcısı ("%s") "%s" veritabanı barındırıcısından çok farklı bir zamana ayarlanmış.',
      'Send Mail To Each Recipient' => 'Her Alıcıya Posta Gönder',
      'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'MySQL "local_infile" seçeneği etkin. Bu seçenek güvensizdir.',
      'Remove Custom Logo' => 'Özel Logoyu Kaldır',
      'No notification servers are configured.' => 'Hiçbir bildirim sunucusu yapılandırılmamış.',
      '(Not Supported)' => '(Desteklenmiyor)',
      'Nonstandard port' => 'Standart dışı bağlantı noktası',
      'Don\'t embed Commons videos' => 'Commons videolarını yerleştirme',
      'This configuration has been removed. You can safely delete it.
    %s' => 'Bu yapılandırma kaldırıldı. Güvenli bir şekilde silebilirsiniz.
    %s',
      'Options relating to translations.' => 'Çeviri ile ilgili seçenekler.',
      'You have \'%s\' enabled in your PHP configuration, but Phabricator will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.' => 'PHP yapılandırmanızda \'%s\' etkin, ancak Phabricator güvenli modda çalışmaz. Güvenli mod PHP 5.3\'te kullanımdan kaldırılmış ve PHP 5.4\'te kaldırılmıştır.
    Devam etmek için güvenli modu devre dışı bırakın.',
      'Use Private Replies (More Secure)' => 'Özel Yanıtları Kullan (Daha Güvenli)',
      'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Tüm \'*.x.bak\' dosyasına \'.x\' olarak davranın. NOT: Eşlemeyi \'1\' olarak belirleyerek grup 1\'i yakalamak için eşleriz',
      'Send as User Taking Action' => 'Kullanıcı Olarak Eylemi Gönder',
      'Security options.' => 'Güvenlik seçenekleri.',
      'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '"%s" seçeneği "%s" türündedir ve komut satırında JSON değer listesi olarak belirtilmelidir. Kabuğunuzun değerini belirtmeniz gerekebilir (örneğin: \'["a", "b", ...]\').',
      'Expected Unique' => 'Beklenen Benzersiz',
      'Old MySQL Version' => 'Eski MySQL Sürümü',
      'If you have multiple Phabricator environments (like a development/staging environment for working on testing Phabricator, and a production environment for deploying it), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'Birden fazla Phabricator ortamınız varsa (Phabricator\'ı test etmek için bir geliştirme/hazırlama ortamı ve dağıtmak için bir üretim ortamı gibi), burada üretim ortamı URI\'sini e-postaların ve diğer dayanıklı URI\'ların her zaman üretime işaret eden bağlantılarla üretecek şekilde ayarlayın ortamı. Ayarlanmazsa, varsayılan olarak `%s` olur. Çoğu kurulumun bu seçeneği ayarlaması gerekmez.',
      'Configuring a Preamble Script' => 'Bir Başlangıç Betik Yapılandırma',
      'Default Partition' => 'Varsayılan Bölüm',
      'Domain used for reply email addresses.' => 'Yanıt e-posta adresleri için kullanılan alan adı.',
      'You can find more information about rebuilding the search index here: %s' => 'Arama dizinini yeniden oluşturma hakkında daha fazla bilgiyi burada bulabilirsiniz: %s',
      'Prevent editing' => 'Düzenlemeyi önle',
      'Whitelist 1.2.3.*' => 'Beyaz liste 1.2.3.*',
      'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'Bu yapılandırma artık ilgili değildir, çünkü arka plan yapılandırma değişikliklerinde arka plan otomatik olarak yeniden başlatılır.',
      'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'Arayüzü basitleştirmek için Diferansiyel revizyon listesi görünüm yaşı kullanıcı arayüzü öğeleri kaldırıldı.',
      'Separate values with newlines.' => 'Değerleri yeni satırlarla ayırın.',
      'Exception Handlers' => 'İstisna İşleyicileri',
      'This schema has the wrong nullable setting.' => 'Bu şema yanlış boş değer ayarına sahip.',
      'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => '\'%s\' yapılandırma seçeneği geçersiz. URI \'%s\' veya \'%s\' ile başlamalıdır.',
      'Unsupported/Insecure "%s" Version' => 'Desteklenmeyen/Güvensiz "%s" Sürümü',
      'This option does not have a custom type!' => 'Bu seçeneğin özel bir türü yoktur!',
      'Require administrators to approve new accounts.' => 'Yöneticilerden yeni hesapları onaylamasını iste.',
      'Health' => 'Sağlık',
      'System user to run daemons as.' => 'Sistem kullanıcısı olarak daemonları çalıştıracak.',
      'Unknown schema status "%s"!' => 'Bilinmeyen şema durumu "%s"!',
      'MySQL May Run Slowly' => 'MySQL Yavaş Çalışabilir',
      'Phabricator now manages typeahead strategies automatically.' => 'Phabricator artık daktilo stratejilerini otomatik olarak yönetiyor.',
      'Too many arguments: expected one key.' => 'Çok fazla argüman: beklenen bir anahtar.',
      'List of Users Without MFA' => 'MFA\'sız Kullanıcıların Listesi',
      'No "Host" header present in request.' => 'İstekte "Ana Bilgisayar" başlığı yok.',
      'Value for option "%s" of type "%s" must be either "true" or "false".' => '"%2$s" türündeki "%1$s" seçeneğinin değeri "true" veya "false" olmalıdır.',
      'Cluster Search' => 'Küme Arama',
      'Footer configuration is not valid: value must be a list of items.' => 'Altbilgi yapılandırması geçerli değil: değer bir öğe listesi olmalıdır.',
      'Edit "%s"' => '"%s" düzenle',
      'Don\'t embed YouTube videos' => 'YouTube videolarını yerleştirme',
      'Disable PHP %s' => 'PHP %s devre dışı bırak',
      'Configure master encryption keys.' => 'Ana şifreleme anahtarlarını yapılandırın.',
      'Mailers Not Configured' => 'Yapılandırılmayan Postalar',
      'Phabricator now has meaningful global access controls. See `%s`.' => 'Phabricator artık anlamlı küresel erişim denetimlerine sahiptir. `%s` bakın.',
      'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => '"%s" veritabanı eşlemesi eşleme olarak listeleniyor, ancak şu anda eşlenmiyor. Master başarısız olursa veri kaybına karşı savunmasızsınız.',
      'Garbage Collectors' => 'Çöp Toplayıcılar',
      '%s edited this configuration entry.' => '%s bu yapılandırma girişini düzenledi.',
      'Phabricator sent itself a test request with the "X-Phabricator-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'Phabricator, "X-Phabricator-SelfCheck" üstbilgisiyle bir test isteği gönderdi ve geçerli bir JSON yanıtı alması bekleniyor. Bunun yerine, yanıt başlar:
    %s
    Bir şey yanlış yapılandırılmış veya yanıtları başka şekillerde yönetiyor.',
      'Enable Phabricator\'s debugging console.' => 'Phabricator\'ın hata ayıklama konsolunu etkinleştirin.',
      'Send Mail To All Recipients' => 'Tüm Alıcılara Posta Gönder',
      'Launch daemons in \'trace\' mode by default.' => 'Daemon\'ları varsayılan olarak \'izleme\' modunda başlatın.',
      'Your install has no current setup issues to resolve.' => 'Yüklemenizde çözülecek güncel kurulum sorunu yok.',
      'Subschemata Have Failures' => 'Subschemata Arızaları Var',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve Phabricator from a base URI with a dot (like "https://phabricator.mycompany.com"), not a bare domain (like "https://phabricator/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'Bu istek, "%s" değerine sahip geçersiz bir "Ana Bilgisayar" başlığı içeriyordu. Ana bilgisayar üstbilgileri, "example.com" gibi bir nokta (".") İçermelidir. Bu, bazı tarayıcıların çerez ayarlayabilmesi için gereklidir.
    Bu temel URI\'nin yanlış yapılandırıldığı anlamına gelebilir. Phabricator\'a çıplak bir alan adı değil ("https://phabricator/" gibi) değil, nokta içeren bir temel URI\'den ("https://phabricator.sirketim.com" gibi) hizmet vermelisiniz. Çıplak bir alan adı kullanmaya çalışıyorsanız, bunun yerine noktalı bir tam alan adı kullanmak için yapılandırmanızı değiştirin.
    Bu aynı zamanda web sunucunuzun (veya yük dengeleyici gibi başka bir ağ aygıtının) "Ana Bilgisayar" başlığını yönettiği veya bir isteği manüel olarak vermek ve yanlış "Ana Bilgisayar" üstbilgisini ayarlamak için bir araç veya kitaplık kullandığınız anlamına da gelebilir.
    İstekler, geçerli bir "Ana Bilgisayar" başlığı içermelidir.',
      'Save Config Entry' => 'Yapılandırma Girişini Kaydet',
      '%s of %s' => '%s - %s',
      'Setup MySQL Schema' => 'MySQL Şemasını Kur',
      ' (%s)' => ' (%s)',
      'Not Available' => 'Mevcut Değil',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'Bu seçenek kaldırıldı, ana sayfa özelleştirmesi sağlamak için Gösterge Tabloları\'nı kullanabilirsiniz. Daha fazla bilgi için T11533\'e bakın.',
      'Data Cache' => 'Veri Önbelleği',
      'Configure the access logs, which log HTTP/SSH requests.' => 'HTTP/SSH isteklerini kaydeden erişim günlüklerini yapılandırın.',
      '%ss Behind' => '%s Arkasında',
      'The PID of the server process.' => 'Sunucu işleminin PID\'si.',
      'Launch daemons in \'verbose\' mode by default. This creates a lot of output, but can help debug issues. Daemons launched in debug mode with \'%s\' are always launched in verbose mode. See also \'%s\'.' => 'Daemon\'ları varsayılan olarak \'verbose\' modda başlatın. Bu çok fazla çıktı oluşturur, ancak sorunları ayıklamaya yardımcı olabilir. \'%s\' ile hata ayıklama modunda başlatılan daemonlar, her zaman ayrıntılı modda başlatılır. Ayrıca bakınız: \'%s\'.',
      'Blacklist subnets to prevent user-initiated outbound requests.' => 'Kullanıcı tarafından başlatılan giden istekleri önlemek için alt ağları kara listeye alın.',
      'No Outbound Requests' => 'Giden İstek Yok',
      'Primary install URI, for multi-environment installs.' => 'Çok ortamlı yüklemeler için birincil yükleme URI\'si.',
      'The mapping from VCS users to Phabricator users has changed and must be rebuilt.' => 'VCS kullanıcılarından Phabricator kullanıcılarına eşleme değişti ve yeniden oluşturulması gerekiyor.',
      'Whitelists editor protocols for "Open in Editor".' => '"Editör\'de Aç" için beyaz listeler düzenleyici protokolleri.',
      'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => '"Re: Prefix" ve "Vary Subject" ayarları artık genel ayarlarda yapılandırıldı.',
      'You have no unresolved setup issues.' => 'Çözümlenmemiş kurulum sorunlarınız yok.',
      'This configuration is hidden and can not be edited or viewed from the web interface.' => 'Bu yapılandırma gizlidir ve web arayüzünden düzenlenemez veya görüntülenemez.',
      'Local Disk Storage Not Readable/Writable' => 'Yerel Disk Depolama Okunabilir/Yazılabilir Değil',
      'Override translations.' => 'Çevirileri geçersiz kıl.',
      'Cluster Configuration Out of Sync' => 'Küme Yapılandırması Senkronize Değil',
      'This option has been removed. You may delete it at your convenience.' => 'Bu seçenek kaldırıldı. İstediğiniz zaman silebilirsiniz.',
      'You can find more information about this new identity mapping here: %s' => 'Bu yeni kimlik haritalaması hakkında daha fazla bilgiyi burada bulabilirsiniz: %s',
      'After rebuilding the index, run this command to clear this setup warning:' => 'Dizini yeniden oluşturduktan sonra, bu kurulum uyarısını silmek için şu komutu çalıştırın:',
      'Footer item with index "%s" is invalid: %s' => '"%s" dizinine sahip altbilgi öğesi geçersiz: %s',
      'Unknown Configuration Option "%s"' => 'Bilinmeyen Yapılandırma Seçeneği "%s"',
      'Truncate at 1MB' => '1 MB\'ta kes',
      'Access key for Amazon S3.' => 'Amazon S3 için erişim anahtarı.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => '\'%s\' okunabilir olmadığından PATH bileşeni \'%3$s\' (\'%2$s\' mutlak yolu olarak çözülür) kullanılamaz.',
      'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Maniphest alanları artık otomatik olarak yükleniyor. Bunları `%s` ile yapılandırabilirsiniz.',
      'This key is expected to exist, but does not.' => 'Bu anahtarın olması beklenir, ancak yoktur.',
      'Normal mode' => 'Normal mod',
      'Persistence' => 'Süreklilik',
      'This schema is expected to exist, but does not.' => 'Bu şemanın olması bekleniyor, ancak yok.',
      'Do Not Use Pygments' => 'Pigment Kullanmayın',
      'Up to Date' => 'Güncel',
      'Configure core options, including URIs.' => 'URI\'ler dahil temel seçenekleri yapılandırın.',
      '(empty)' => '(boş)',
      'This key has the wrong uniqueness setting.' => 'Bu anahtar yanlış benzersizlik ayarına sahip.',
      'When users set or reset a password, it must have at least this many characters.' => 'Kullanıcılar bir parola ayarladığında veya sıfırladığında, en azından bu kadar karakter içermelidir.',
      'Additional configuration options to lock.' => 'Kilitlemek için ek yapılandırma seçenekleri.',
      'Override what language files (based on filename) highlight as.' => 'Hangi dil dosyalarının (dosya adına bağlı olarak) vurgulanacağını geçersiz kılın.',
      'Bad "Host" Header' => 'Bozuk "Ana Bilgisayar" Başlığı',
      'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => '"%s" seçeneği "%s" türündedir, ancak listenin "%s" dizinindeki öğe bir dize değildir.',
      'MySQL port to use when connecting to the database.' => 'Veritabanına bağlanırken kullanılacak MySQL portu.',
      'URI where Phabricator is installed.' => 'Phabricator\'ın kurulu olduğu URI.',
      'Trying to add duplicate key "%s"!' => 'Yinelenen anahtar "%s" eklenmeye çalışılıyor!',
      'Option "%s" is of type "%s", but the configured value is not a string.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir dize değildir.',
      'User Guide: Amazon RDS' => 'Kullanım Kılavuzu: Amazon RDS',
      'Repository %s has an ambiguous leader.' => '%s deponun belirsiz bir lideri var.',
      'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'Bildirim sunucusunun yapılandırması önemli ölçüde değişti. Tartışma için T10794\'e bakınız.',
      'Read option value from stdin.' => 'Seçenek değerini stdin\'den okuyun.',
      'Database source is not configured properly' => 'Veritabanı kaynağı düzgün yapılandırılmamış',
      'Phabricator sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'Phabricator, "Accept-Encoding: gzip" ile bir istek gönderdi, ancak sıkıştırılmamış bir yanıt aldı.
    Bu, web sunucunuzun yanıtları sıkıştırmak için yapılandırılmadığını gösterebilir. Öyleyse sıkıştırmayı etkinleştirmelisiniz. Sıkıştırma, özellikle daha az bant genişliğine sahip müşteriler için performansı önemli ölçüde artırabilir.',
      'Don\'t Require Manual Approval' => 'Manüel Onay Gerektirmez',
      'Column Type' => 'Sütun Türü',
      'Truncate at 512KB' => '512KB\'de kısalt',
      'Should Phabricator use Pygments to highlight code?' => 'Phabricator, kodu vurgulamak için Pygment\'leri kullanmalı mı?',
      'Cache' => 'Önbellek',
      'Automatically profile some percentage of pages.' => 'Sayfaların bazı yüzdelerini otomatik olarak profillendirin.',
      'Admin Server' => 'Yönetici Sunucusu',
      'Wrong Column Type' => 'Yanlış Sütun Türü',
      'Embed YouTube videos' => 'YouTube videolarını gömme',
      'Add One Path' => 'Bir Yol Ekle',
      'You haven\'t configured mailers yet, so Phabricator won\'t be able to send outbound mail or receive inbound mail. See the configuration setting cluster.mailers for details.' => 'Henüz postaları yapılandırmadınız, bu nedenle Phabricator giden posta gönderemez veya gelen posta alamaz. Ayrıntılar için cluster.mailers yapılandırma ayarına bakın.',
      'Clear Cache' => 'Önbelleği Temizle',
      'MySQL Native Driver Not Available' => 'MySQL Yerel Sürücüsü Kullanılamıyor',
      'Unignore this setup issue?' => 'Bu kurulum sorununu yoksayı kaldırılsın mı?',
      'Configure Mail.' => 'Postayı Yapılandır.',
      'Determines which URI protocols are auto-linked.' => 'Hangi URI protokollerinin otomatik olarak bağlanacağını belirler.',
      'You can update these %d value(s) here:' => 'Bu %s değerini buradan güncelleyebilirsiniz:',
      'Notification Servers' => 'Bildirim Sunucuları',
      'extname' => 'extname',
      'Enable captchas with Recaptcha.' => 'Recaptcha ile captcha\'ları etkinleştirin.',
      'Add Multiple Paths' => 'Birden Çok Yol Ekle',
      'Specify an activity to mark as completed.' => 'Tamamlandı olarak işaretlemek için bir etkinlik belirtin.',
      'The environmental variable %s is empty. Phabricator needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in Phabricator configuration.' => 'Çevresel değişken %s boş. Phabricator\'ın `%s`, `%s`, `%s` ve `%s` gibi bazı sistem komutlarını yürütmesi gerekir. Bu komutları yürütmek için, ikili dosyaların web sunucusunun %s mevcut olması gerekir. Phabricator yapılandırmasında ek yollar ayarlayabilirsiniz.',
      'Set the URI where Phabricator is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Phabricator\'ın kurulu olduğu URI\'yı ayarlayın. Bunu ayarlamak, çerezlerin diğer alanlarda ayarlanmasını önleyerek güvenliği artırır ve artalanların doğru etki alanına sahip bağlantıları olan e-postalar göndermesine izin verir.',
      'Define a Phabricator cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, Phabricator hosts will also reject requests to interfaces which are not whitelisted.' => 'Kümenin parçası olan ana bilgisayar adreslerinin bir beyaz listesini sağlayarak bir Phabricator kümesi tanımlayın.
    Bu beyaz listedeki sunucuların özel yetkileri vardır. Bu ana makinelerin güvenlik kurallarını bükmesine izin verilir ve bu listenin yanlış yapılandırılması yüklemenizi daha az güvenli hale getirebilir. Daha fazla bilgi için, **[[ %s | %s ]]** sayfasına bakın.
    Kümedeki tüm ana bilgisayarları beyaz listeye ekleyen ve ek ana bilgisayar içermeyen CIDR bloklarının bir listesini tanımlayın. Ayrıntılar için aşağıdaki örneklere bakın.
    Küme adresleri tanımlandığında, Phabricator ana bilgisayarları da beyaz listedeki olmayan arabirimlere yönelik istekleri reddeder.',
      'This server has a known bad version of "%s".' => 'Bu sunucunun bilinen bir "%s" sürümü var.',
      'Require DarkConsole Activation' => 'DarkConsole Aktivasyonu Gerektir',
      'Notifications Status' => 'Bildirim Durumu',
      'Current Configuration' => 'Geçerli Yapılandırma',
      'Replicating Master' => 'Master Kopyalama',
      'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Yapılandırılmış bir saat dilimi olmadan PHP, tarihlerle çalışırken uyarılar gönderir ve tarihler ve saatler doğru görüntülenmeyebilir.',
      'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => '"%s" seçeneği "%s" türündedir ve geçerli normal ifadeler listesine ayarlanmalıdır, ancak "%s" geçerli bir normal ifade değildir.',
      'This schema can use a better character set.' => 'Şema daha iyi bir karakter seti kullanabilir.',
      'Configuration value "%s" is locked, but has a value in the database.' => '"%s" konfigürasyon değeri kullanılamıyor ancak veritabanında bir değeri var.',
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
      'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Amazon RDS kullanıyorsanız, yukarıdaki bazı talimatlar size uymayabilir. Bunun için Amazon RDS\'deki %s tartışmasına bakın.',
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
      'You are using an old version of MySQL (on host "%s") which has poor unicode support (it does not support the "utf8mb4" collation set). You will encounter limitations when working with some unicode data.
    We strongly recommend you upgrade to MySQL 5.5 or newer.' => 'Eski bir MySQL sürümü kullanıyorsunuz ("%s" sunucusunda) ve unicode desteği zayıf ("utf8mb4" harmanlama kümesini desteklemiyor). Bazı unicode verilerle çalışırken sınırlamalarla karşılaşacaksınız.
    MySQL 5.5 veya daha yeni bir sürüme geçmenizi önemle tavsiye ederiz.',
      'Trying to add duplicate column "%s"!' => '"%s" sütununu eklemeye çalışıyor!',
      'The Multimeter application collects performance samples. You can use this data to help you understand what Phabricator is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'Multimetre uygulaması performans örnekleri toplar. Bu verileri, Phabricator\'ın zaman ve kaynak için ne harcadığını anlamanıza ve sorunlu erişim modellerini tanımlamanıza yardımcı olması için kullanabilirsiniz.
    Bu seçenek, örneklemenin ne sıklıkta etkinleştirileceğini denetler. Her 1 / N sayfayı örneklemek için bazı pozitif tamsayı N\'ye ayarlayın.
    Çoğu yükleme için varsayılan değer (1000 sayfa başına 1 örnek) fazla depolama alanı gerektirmeden veya performansı önemli ölçüde etkilemeden yararlı olacak yeterli veri toplamalıdır. Performans sorunlarını araştırıyorsanız, daha fazla veri toplamak için hızı ayarlayabilirsiniz.',
      'Minimum password length.' => 'Minimum parola uzunluğu.',
      'Required PHP extensions are not installed.' => 'Gerekli PHP uzantıları kurulu değil.',
      'Database' => 'Veritabanı',
      'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'SAĞLIKSIZ: Bu veritabanı son sağlık kontrollerinde başarısız oldu. Trafik kurtarılana kadar ona gönderilmez.',
      'Request input, in bytes.' => 'Bayt cinsinden girdi iste.',
      'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Pigmentleri etkinleştirdiniz, ancak %s betiği aslında kullanılamıyor, %s muhtemelen bozuk.',
      'Application Settings' => 'Uygulama Ayarları',
      'Show email preferences link in email.' => 'E-postada e-posta tercihleri bağlantısını göster.',
      'Your webserver may have compression disabled.' => 'Web sunucunuzda sıkıştırma devre dışı bırakılmış olabilir.',
      'Alternative URIs that can access Phabricator.' => 'Phabricator\'a erişebilen alternatif URI\'ler.',
      'After editing the PHP configuration, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'PHP yapılandırmasını düzenledikten sonra, <strong>değişikliklerin etkili olması için Phabricator\'ı yeniden başlatın</strong>. Phabricator\'ı yeniden başlatmayla ilgili yardım için belgelerdeki %s bakın.',
      'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'Giden postanın maksimum bayt boyutu için bir sınır belirleyebilirsiniz. Bu sınırdan daha büyük olan postalar gönderilmeden önce kesilir. MTA\'nız bir sınırı aşan postaları reddederse (bu oldukça yaygındır) bu yararlı olabilir. Bayt cinsinden bir değer belirleyin.',
      'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Birden fazla %s alt sınıfı aynı anahtara (\'%s\') sahiptir: %s, %s.',
      'Your webserver is rewriting paths improperly.' => 'Web sunucunuz yolları yanlış yeniden yazıyor.',
      'Trying to add duplicate table "%s"!' => 'Yinelenen tablo "%s" eklemeye çalışıyor!',
      'No Authentication Providers Configured' => 'Yapılandırılmış Kimlik Doğrulama Sağlayıcısı Yok',
      'Run Silently' => 'Sessizce Çalıştır',
      'You can find more information about PHP configuration values in the %s.' => 'PHP yapılandırma değerleri hakkında daha fazla bilgiyi %s içinde bulabilirsiniz.',
      'Skipping option "%s"; already in local config.' => '"%s" atlama seçeneği; zaten yerel yapılandırmada.',
      'Cookies set for x.com are also sent for y.x.com. Assuming Phabricator instances are running on both domains, this will create a collision preventing you from logging in.' => 'x.com için ayarlanan çerezler de y.x.com için gönderilir. Phabricator örneklerinin her iki alanda da çalıştığını varsayarsak, bu, oturum açmanızı engelleyen bir çarpışma oluşturur.',
      'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'İlişkili adresin varsayılan bir yazarı varsa genel e-posta kabul edilir ve aksi halde reddedilir.',
      'Setup Issues' => 'Kurulum sorunları',
      'Require email verification' => 'E-posta doğrulaması gerektir',
      'Resource minification is now managed automatically.' => 'Kaynak küçültme artık otomatik olarak yönetiliyor.',
      'Whitespace rendering is now handled automatically.' => 'Beyaz alan oluşturma artık otomatik olarak gerçekleştiriliyor.',
      '%s Not Working' => '%s Çalışmıyor',
      'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'Kullanıcılara geçiş yapma seçeneği sunmak için tam bir çeviri oluşturmak istemiyorsanız ve yalnızca varsayılan çevirideki bazı dizeleri geçersiz kılmak istiyorsanız \'%s\' kullanabilirsiniz.',
      'Phabricator appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. Phabricator regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'Phabricator, bükülebilir CPU ile çok küçük bir EC2 örneğine ("%s" sınıfı) yüklenmiş gibi görünüyor. Bu kesinlikle önerilmez. Phabricator\'ın düzenli olarak CPU\'ya ihtiyacı vardır ve bu örnekler genellikle CPU kısıtlamasıyla boğulur. Bunun yerine normal CPU\'lu bir örnek kullanın.',
      'Phabricator sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of Phabricator will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'Phabricator, bir HTTP GET parametresi ile kendisine bir test isteği gönderdi, ancak parametre iletilmedi. "%2$s" değeri ile "%1$s" gönderilen, "%4$s" değeri ile "%3$s" var.
    Web sunucunuz yanlış yapılandırılmış ve bu sorun düzeltilene kadar Phabricator\'ın büyük bölümleri çalışmayacak.
    (Bu soruna RewriteRule dosyanızdaki eksik "QSA" neden olabilir.)',
      'Connection' => 'Bağlantı',
      'Placeholder recipients are now generated automatically.' => 'Yer tutucu alıcılar artık otomatik olarak oluşturuluyor.',
      'SSH keys are now actually useful, so they are always enabled.' => 'SSH anahtarları artık gerçekten kullanışlıdır, bu nedenle her zaman etkindir.',
      'Request output, in bytes.' => 'Bayt cinsinden çıkış isteyin.',
      'Configure integration with AWS (EC2, SES, S3, etc).' => 'AWS (EC2, SES, S3, vb.) ile entegrasyonu yapılandırın.',
      'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => '\'%s\' yapılandırma seçeneği geçersiz. URI sadece \'%3$s\' gibi çıplak bir isim değil, \'%2$s\' gibi bir nokta (\'.\') içermelidir. Bazı web tarayıcıları, TLD bulunmayan alanlarda çerez ayarlamaz.',
      'Cache namespace.' => 'Önbellek ad alanı.',
      '%s = 0' => '%s = 0',
      'Unsafe PHP "Local Infile" Configuration' => 'Güvensiz PHP "Yerel Dosya" Yapılandırması',
      'Custom remarkup rules are now added by subclassing %s or %s.' => 'Özel yeniden pazarlama kuralları artık %s veya %s alt sınıflandırma ile eklenmektedir.',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => '\'%s\' ikili dosyası bulunamadı. \'%s\' simgesine dokunun veya web sunucusunun %s çevresel değişkenini bulunduğu dizini içerecek şekilde ayarlayın veya Phabricator yapılandırmasında bu dizini \'%s\' değerine ekleyin.',
      'Issue Resolved' => 'Sorun Çözüldü',
      'If you enable this, linked Commons videos will be embedded inline.' => 'Bunu etkinleştirirseniz, bağlı Commons videoları satır içine gömülür.',
      'Allow Phabricator to use a single mailbox for all replies.' => 'Phabricator\'ın tüm yanıtlar için tek bir posta kutusu kullanmasına izin ver.',
      'Garbage collectors are now configured with "%s".' => 'Çöp toplayıcılar artık "%s" ile yapılandırıldı.',
      'Unknown configuration option type "%s".' => 'Bilinmeyen yapılandırma seçeneği türü "%s".',
      'Trying to add duplicate database "%s"!' => 'Yinelenen veritabanı "%s" eklemeye çalışıyor!',
      'This column has the wrong autoincrement setting.' => 'Bu sütun yanlış otomatik ayar ayarına sahip.',
      'Allows you to add footer links on most pages.' => 'Çoğu sayfaya altbilgi bağlantısı eklemenizi sağlar.',
      'USWest Region' => 'USWest Bölgesi',
      'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Manifest alanları artık "%s" olarak tanımlanmıştır. Mevcut tanımlar taşınmıştır.',
      'Enable Prototypes' => 'Prototipleri Etkinleştir',
      'Elasticsearch is now configured with "%s".' => 'Elasticsearch artık "%s" ile yapılandırıldı.',
      'Configuring Outbound Email' => 'Giden E-postayı Yapılandırma',
      'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Gelen posta adresleri artık Uygulamalar aracındaki her uygulama için yapılandırılmıştır.',
      'Partial \'%s\' Support' => 'Kısmi \'%s\' Desteği',
      'Subschemata have setup warnings.' => 'Subschemata kurulum uyarılarına sahiptir.',
      'Uptime' => 'Çalışma süresi',
      'Normally, Phabricator profiles pages only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.' => 'Normalde Phabricator, sayfaları yalnızca DarkConsole aracılığıyla açıkça istendiğinde profil oluşturur. Ancak, bazı sayfaların otomatik olarak profillenmesi yararlı olabilir.
    Bu seçeneği otomatik olarak profil 1 / N sayfalarına pozitif bir N tamsayısına ayarlayın. Örneğin, 1 olarak ayarlandığında her sayfa profillenirken, 1000 olarak ayarlandığında 1000 istek başına 1 sayfa (yani, isteklerin %%0.1\'i) profillenir.
    Profil oluşturma yavaş olduğundan ve çok fazla veri oluşturduğundan, bunu üretimde 0 olarak (devre dışı bırakmak için) veya çok sayıda olarak ayarlamanız gerekir (sonunda örnek olarak bakmak için bazı verilerinizle ilgileniyorsanız birkaç örnek toplamak için). Geliştirme sırasında, performans sorunlarını ayıklamak için 1\'e ayarlamak yararlı olabilir.
    NOT: Profil oluşturmanın çalışması için XHProf\'u yüklemeniz gerekir.',
      'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL ("%s" sunucusunda), birçok yaygın kelimeyi aramayı engelleyecek varsayılan bir parola dosyası kullanıyor.',
      'Two setup checks raised an issue with key \'%s\'!' => 'İki kurulum denetimi \'%s\' tuşuyla ilgili bir sorun yarattı!',
      'Mark activities complete even if there is no outstanding need to complete them.' => 'Tamamlamak için olağanüstü bir ihtiyaç olmasa bile faaliyetleri tamamlayın.',
      'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'Büyük olasılıkla dizini oluşturmadan cluster.search özelliğini etkinleştirdiniz. Yeni bir dizin oluşturmak için aşağıdaki komutu kullanın.',
      'Without \'%s\', Phabricator can not test for the availability of other binaries.' => '\'%s\' olmadan, Phabricator diğer ikili dosyaların kullanılabilirliğini test edemez.',
      'Skipping option "%s"; already in database config.' => '"%s" atlama seçeneği; zaten veritabanı yapılandırmasında.',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set up Phabricator to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'Bu seçenek, kullanıcıların hesap e-posta adreslerini ve profil gerçek adlarını düzenleyip düzenleyemediklerini kontrol eder.
    Phabricator\'ı başka bir yetkili sistemden hesap bilgilerini otomatik olarak senkronize edecek şekilde ayarladıysanız, bilgilerin her iki sistemde de tutarlı kalmasını sağlamak için kullanıcıların bu düzenlemeleri yapmasını engelleyebilirsiniz.',
      'MySQL is in ONLY_FULL_GROUP_BY mode (on host "%s"), but using this mode is strongly discouraged.' => 'MySQL, ONLY_FULL_GROUP_BY modunda ("%s" ana bilgisayarında), ancak bu modu kullanmak kesinlikle önerilmez.',
      'The directory for local repositories (%s) does not exist, or is not readable by the webserver. Phabricator uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'Yerel depolar dizini (%s) mevcut değil veya web sunucusu tarafından okunamıyor. Phabricator, depolar hakkında bilgi depolamak için bu dizini kullanır. Bu dizin yoksa oluşturun:
    %s
    Bu dizin varsa, web sunucusu tarafından okunabilir hale getirin. Başka bir dizini kullanmak için aşağıdaki yapılandırmayı da düzenleyebilirsiniz.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the Phabricator logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //Phabricator//.
    ' => 'Ana site başlığında görünen logo resmini ve metni özelleştirin:
      - **Logo Resmi**: Site başlığındaki Phabricator logosunu değiştirmek için yeni bir 80 x 80 piksel resim yükleyin.
      - **Marka**: Logonun yanında görüntülenecek yeni metni seçin. Varsayılan olarak, başlıkta //Phabricator// görüntülenir.',
      'The Phabricator daemons are not running, so Phabricator will not be able to perform background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds).
    Use %s to start daemons. See %s for more information.' => 'Phabricator arka plan programı çalışmıyor, bu nedenle Phabricator arka plan işleme gerçekleştiremeyecek (e-posta gönderme, arama dizinlerini yeniden oluşturma, taahhütleri içe aktarma, eski verileri temizleme ve yapıları çalıştırma dahil).
    Daemons başlatmak için %s kullanın. Daha fazla bilgi için %s bakın.',
      '%s Stats' => '%s Durumlar',
      'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'Subversion\'un desteklenen en düşük sürümü, 2008\'de yayınlanan 1.5\'tir.',
      'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'PHP bellek sınırınız, büyük dosyalar yüklemenizi veya büyük istekleri işlemenizi engelleyebilecek şekilde yapılandırılmıştır.',
      'The system user.' => 'Sistem kullanıcısı.',
      'Reload Page' => 'Sayfayı Yenile',
      'Phabricator now automatically selects the best available MySQL implementation.' => 'Phabricator artık otomatik olarak mevcut en iyi MySQL uygulamasını seçiyor.',
      'Force users to connect via HTTPS instead of HTTP.' => 'Kullanıcıları HTTP yerine HTTPS üzerinden bağlanmaya zorlayın.',
      'Install the MySQLi extension to improve database behavior.' => 'Veritabanı davranışını iyileştirmek için MySQLi uzantısını yükleyin.',
      'Large Files' => 'Büyük Dosyalar',
      'Mark a manual upgrade activity as complete.' => 'Manüel yükseltme etkinliğini tamamlandı olarak işaretleyin.',
      '%s Not Set' => '%s Ayarlanmadı',
      'This configuration option has been replaced with a modular handler. See T9346.' => 'Bu yapılandırma seçeneği, modüler bir işleyici ile değiştirildi. T9346 sayfasına bakın.',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'JSON\'da "%s" seçeneğinin değeri ("%s" türünde) belirtilmelidir, ancak girdinin kodu çözülemedi. (Bir dize teklifi vermeyi unuttunuz mu?)',
      'Configuration option \'%s\' has invalid value and was restored to the default: %s' => '\'%s\' yapılandırma seçeneği geçersiz değere sahip ve varsayılan değere geri yüklendi: %s',
      'To update these %d value(s), edit your PHP configuration file, located here:' => 'Bu %s değerini güncellemek için, burada bulunan PHP yapılandırma dosyanızı düzenleyin:',
      'Collation' => 'Karşılaştırma',
      'Replication' => 'Kopya',
      'The HTTP response code or process exit code.' => 'HTTP yanıt kodu veya işlem çıkış kodu.',
      'Obsolete; use standard rendering events instead.' => 'Eski; bunun yerine standart oluşturma etkinlikleri kullanın.',
      'Local Disk Storage' => 'Yerel Disk Depolama',
      'The configuration option \'%s\' is not recognized. It may be misspelled, or it might have existed in an older version of Phabricator. It has no effect, and should be corrected or deleted.' => '\'%s\' yapılandırma seçeneği tanınmıyor. Yanlış yazılmış olabilir veya Phabricator\'ın daha eski bir sürümünde mevcut olabilir. Etkisi yoktur ve düzeltilmesi veya silinmesi gerekir.',
      'Issue' => 'Sorun',
      'Configuration Guide: Configuring a File Domain' => 'Yapılandırma Kılavuzu: Bir Dosya Etki Alanını Yapılandırma',
      'Activate DarkConsole on every page.' => 'Her sayfada DarkConsole\'i etkinleştirin.',
      'Enable verbose error reporting and disk reads.' => 'Ayrıntılı hata raporlamayı ve disk okumalarını etkinleştirin.',
      'Mail object address hash keys are now generated automatically.' => 'Posta nesnesi adres karması anahtarları artık otomatik olarak oluşturulur.',
      'Too many arguments: expected one key and one value.' => 'Çok fazla argüman: bir anahtar ve bir değer bekleniyor.',
      'Settings History' => 'Ayarlar Geçmişi',
      'MySQL is not in strict mode (on host "%s"), but using strict mode is strongly encouraged.' => 'MySQL katı modda değil ("%s" sunucusunda), ancak katı modun kullanılması şiddetle önerilir.',
      'Opcode' => 'İşlemkodu',
      'To update these %d value(s), edit your PHP configuration file.' => 'Bu %s değerini güncellemek için PHP yapılandırma dosyanızı düzenleyin.',
      'Enable Recaptcha' => 'Recaptcha\'yı etkinleştir',
      'Prefix cookie with "%s"' => '"%s" ile önek tanımlama bilgisi',
      'Migrated option "%s" from file to database config.' => 'Dosyadan veritabanı yapılandırmasına "%s" seçeneği taşındı.',
      'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that Phabricator imports or manages. This option is new and experimental.' => 'Daemon\'ları çalıştıracak bir sistem kullanıcısı belirtin. Öncelikle, bu kullanıcı Phabricator\'ın ithal ettiği veya yönettiği havuzların çalışma kopyalarına sahip olacaktır. Bu seçenek yeni ve deneyseldir.',
      'PHP Documentation' => 'PHP Belgelemesi',
      'Your webserver produced an unexpected response.' => 'Web sunucunuz beklenmedik bir yanıt verdi.',
      'Phabricator now automatically discovers available search engines at runtime.' => 'Phabricator artık çalışma zamanında mevcut arama motorlarını otomatik olarak keşfediyor.',
      'Unable to determine the version number of "%s".' => '"%s" sürüm numarası belirlenemedi.',
      'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'True ise, kullanıcının giriş yapabilmesi için önce e-posta adreslerinin doğrulanması gerekir (e-postadaki bir bağlantıyı tıklayarak). @{Config:auth.email-domains} boş değilse varsayılan olarak doğrulama isteğe bağlıdır.',
      'PHP OPcache Documentation' => 'PHP OPcache Belgeleri',
      'Config key "%s" is of type "%s". Specify it in JSON.' => '"%s" yapılandırma anahtarı "%s" türündedir. JSON\'da belirtin.',
      'Cluster: Databases' => 'Küme: Veritabanları',
      'No Messages' => 'Mesaj Yok',
      'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => '"%s" dizinine sahip altbilgi öğesi geçersiz: her öğe, bir altbilgi öğesini açıklayan bir sözlük olmalıdır.',
      'None of the caches on this page can be cleared.' => 'Bu sayfadaki önbelleklerin hiçbiri temizlenemez.',
      'Require email verification before a user can log in.' => 'Bir kullanıcının oturum açabilmesi için e-posta doğrulaması iste.',
      'Master' => 'Usta',
      'Sets the default color scheme of Phabricator.' => 'Phabricator\'ın varsayılan renk düzenini ayarlar.',
      'A Troublesome Encounter!' => 'Sorunlu bir Karşılaşma!',
      'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'Tam metin arama dizini için dizin oluşturma algoritması güncellendi ve dizinin yeniden oluşturulması gerekiyor. Dizini yeniden oluşturuncaya kadar, genel arama (ve diğer tam metin araması) düzgün çalışmaz.',
      'Maximum taskmaster daemon pool size.' => 'Maksimum görev yöneticisi arka plan havuzu boyutu.',
      'Replica' => 'Kopya',
      'Use Public Replies (Less Secure)' => 'Genel Yanıtları Kullan (Daha Az Güvenli)',
      'MySQL password to use when connecting to the database.' => 'Veritabanına bağlanırken kullanılacak MySQL parolası.',
      'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'Bir değişken kullanılamıyorsa (örneğin, dosya biçiminde %%m görünür ancak istek bir İletken isteği değilse), \'-\' olarak işlenir.',
      'Set a string Phabricator should use to prefix cookie names.' => 'Phabricator\'ın çerez adlarını önek olarak kullanması için bir dize ayarlayın.',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to Phabricator, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'Bu komutlar işe yaramazsa Google\'ı deneyin. PHP uzantılarını yükleme işlemi Phabricator\'a özgü değildir ve bunları sisteminize yüklemek için bulabileceğiniz tüm talimatlar çalışmalıdır. Mac OS X\'te Homebrew\'u denemek isteyebilirsiniz.',
      'CSRF HMAC keys are now managed automatically.' => 'CSRF HMAC anahtarları artık otomatik olarak yönetiliyor.',
      'Database Status' => 'Veritabanı Durumu',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make Phabricator\'s search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'Veritabanı ana bilgisayarı "%s", arama dizinleri oluşturmak için yerleşik anahtar kelime dosyasını kullanıyor. Bu, Phabricator\'ın arama özelliğini daha az kullanışlı hale getirebilir.
    Anahtar sözcükler, dizine eklenmemiş ve bu nedenle aranamayan yaygın kelimelerdir. Varsayılan anahtar kelime dosyasında, aramak isteyebileceğiniz çeşitli kelimeler (\'çeşitli\', \'olası\', \'dilek\' ve \'sıfır\' gibi) yaklaşık 500 kelime vardır.
    Aramayı daha kullanışlı hale getirmek için, daha az kelime içeren alternatif bir anahtar kelime dosyası kullanabilirsiniz. Alternatif olarak, yaygın kelimeleri aramakla ilgilenmiyorsanız, bu uyarıyı göz ardı edebilirsiniz. Daha sonra Elasticsearch\'ı yapılandırmayı planlıyorsanız, bu uyarıyı da göz ardı edebilirsiniz: bu parola dosyası yalnızca MySQL tam metin dizinlerini etkiler.
    Farklı bir anahtar kelime dosyası seçmek için bunu %s dosyanıza ekleyin (%s bölümünde) ve ardından %s yeniden başlatın:
    %s
    (İsterseniz farklı bir dosya da kullanabilirsiniz. Yukarıda önerilen dosya en yaygın İngilizce kelimelerin yaklaşık 50\'sine sahiptir.)
    Son olarak, yeni kuralları kullanarak dizinleri yeniden oluşturmak için bu komutu çalıştırın:
    %s',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'JSON\'da "%s" seçeneğinin değeri ("%s" türünde) belirtilmelidir, ancak girdinin kodu çözülemedi: %s',
      'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'Veritabanı ana bilgisayarı "%s", bu ana bilgisayardaki durumla aynı fikirde olmayan ("%s") yapılandırılmış bir küme durumuna sahip. Kümeye yerel durum bildirmek için `bin/storage partition` çalıştırın. Bu ana makine eski bir yapılandırma ile başlamış olabilir.',
      'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    Phabricator will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s' => 'PHP şu anda veritabanıyla etkileşim kurmak için çok eski "mysql" uzantısını kullanıyor. Davranışları iyileştirmek için daha yeni "mysqli" uzantısını yüklemelisiniz (hata işleme ve sorgu zaman aşımları gibi).
    Phabricator eski uzantıyla çalışacak, ancak yeni uzantıya yükseltme yapılması önerilir.
    Uzantıyı aşağıdaki gibi bir komutla yükleyebilirsiniz: %s',
      'Largest' => 'En büyük',
      'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.
    If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.
    After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Aynı anda çalıştırılacak maksimum görev yöneticisi cinleri. Bunu yükseltmek, görev kuyruğunun maksimum verimini artırabilir. Havuz, kullanıldığında otomatik olarak ölçeklenir.
    Bir küme çalıştırıyorsanız, bu sınır her `phd` örneği için ayrı ayrı geçerlidir. Örneğin, bu sınır `4` olarak ayarlanmışsa ve üç ana sunucunuz varsa, etkin genel sınır 12 olacaktır.
    Bu değeri değiştirdikten sonra, arka plan pencerelerini yeniden başlatmanız gerekir. Çoğu yapılandırma değişikliği otomatik olarak arka plan programı tarafından alınır, ancak havuz boyutları yeniden başlatmadan değiştirilemez.',
      'Set the URI that Phurl will use to share shortened URLs.' => 'Phurl\'un kısaltılmış URL\'leri paylaşmak için kullanacağı URI\'yi ayarlayın.',
      'Phabricator users can make requests to other services from the Phabricator host in some circumstances (for example, by creating a repository with a remote URL or having Phabricator fetch an image from a remote server).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which Phabricator will decline to connect to. Generally, you should list all private IP space here.' => 'Phabricator kullanıcıları bazı durumlarda Phabricator ana bilgisayarından diğer hizmetlere istekte bulunabilir (örneğin, uzak URL ile bir havuz oluşturarak veya Phabricator\'ın uzak bir sunucudan bir görüntü getirmesini sağlayarak).
    Aynı alt ağdaki hizmetler, kaynak IP adresine bağlı olarak kimliği doğrulanmamış HTTP GET üzerinden komutları kabul ederse veya özel bilgileri ortaya çıkarırsa, bu bir güvenlik açığı olabilir. Özellikle, EC2\'deki tüm ana bilgisayarlar böyle bir hizmete erişebilir.
    Bu seçenek, Phabricator\'ın bağlanmayı reddedeceği netblock\'ların listesini tanımlar. Genel olarak, tüm özel IP alanlarını burada listelemelisiniz.',
      'Newly registered Phabricator accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access Phabricator.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured Phabricator to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Yeni kaydedilen Phabricator hesapları, yönetim incelemesi için manüel onay kuyruğuna yerleştirilebilir veya hemen otomatik olarak etkinleştirilebilir. Onay kuyruğu varsayılan olarak etkindir, çünkü bir hesabı kimlerin kaydedebileceği ve Phabricator\'a erişebileceği üzerinde daha fazla kontrol sağlar.
    Yüklemeniz tamamen herkese açıksa veya bir VPN\'de ise veya kullanıcılar yalnızca LDAP gibi güvenilir bir sağlayıcıya kaydolabilirse veya Phabricator\'ı yetkisiz kaydı önlemek için başka bir şekilde yapılandırdıysanız, yönetim yükünü azaltmak için kuyruğu devre dışı bırakabilirsiniz.
    NOT: Kuyruğu devre dışı bırakmadan önce, yüklemeniz için @{config:auth.email-domains} doğru yapılandırıldığından emin olun!',
      'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'MySQL sürümünüz ("%s" veritabanı ana bilgisayarında), bir parola dosyası yapılandırmasını desteklemiyor. Sık kullanılan kelimeler için arama sonuçları bulamazsınız.',
      '%s at %s' => '%s altında %s',
      'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'PHP yapılandırmanız geçersiz bir saat dilimi seçiyor. Geçerli bir saat dilimi seçin.',
      '%s deleted this configuration entry (again?).' => '%s bu yapılandırma girişini sildi (tekrar?).',
      'Unresolved Setup Issues' => 'Çözümlenmemiş Kurulum Sorunları',
      'Server Timezone Not Configured' => 'Sunucu Saat Dilimi Yapılandırılmadı',
      'The following regex is malformed and cannot be used: %s' => 'Aşağıdaki normal ifade hatalı biçimlendirilmiş ve kullanılamaz: %s',
      'Use the %s to manage installed applications.' => 'Yüklü uygulamaları yönetmek için %s kullanın.',
      'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Bireysel başvuru yanıt işleyicisi etki alanları kaldırıldı. "%s" ile bir yanıt alan adı yapılandırın.',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. Phabricator needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit Phabricator process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'Sürükle ve bırak veya API yoluyla bir dosya yüklediğinizde, parçalar kalıcı depolama alanına yazılmadan önce belleğe alınmalıdır. Phabricator, yüklenirken bu parçaları saklamak için belleğe ihtiyaç duyar, ancak PHP şu anda kullanılabilir belleği ciddi şekilde sınırlayacak şekilde yapılandırılmıştır.
    PHP işlemleri şu anda çok az boş hafıza alanına sahiptir (%s). İyi çalışmak için süreçlerin en az %s olması gerekir.
    (Uygulamanın kendisinin de kullanılabilir belleğe sığması gerektiğini unutmayın, bu nedenle bellek sınırının altındaki belleğin tamamı iş yüklerini çalıştırmak için kullanılamaz.)
    Bu sorunu çözmenin en kolay yolu, PHP yapılandırmanızda bellek sınırını devre dışı bırakmak için %s %s ayarlamaktır. Phabricator işlem belleğini sınırlamak için bu seçeneğin kullanılmasında genellikle çok az değer vardır veya hiç değer yoktur.
    Ayrıca sınırı artırabilir veya bu sorunu göz ardı edebilir ve büyük dosyaların yüklenmesi ve büyük isteklerin işlenmesi ile ilgili sorunlarla karşılaşabileceğinizi kabul edebilirsiniz.',
      'Preflight' => 'Ön kontrol',
      'Install these %d PHP extension(s):' => 'Şunu %s PHP uzantısını yükleyin:',
      'Missing \'%s\' Binary' => '\'%s\' İkili Eksik',
      'Charset' => 'Karakter kümesi',
      'The framable public feed is no longer supported.' => 'Çerçevelenebilir genel yayın artık desteklenmiyor.',
      'A random, unique string which identifies the request.' => 'İsteği tanımlayan rastgele, benzersiz bir dize.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. Phabricator can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Kullanmak için açık S3 uç noktası. Bu, `amazon-s3.region` da seçtiğiniz bölgeye karşılık gelen uç nokta olmalıdır. Bazı uç nokta konumları düzensiz olduğundan, Phabricator doğru uç noktasını otomatik olarak belirleyemez.',
      'Disable unsafe option "%s" in PHP configuration.' => 'PHP yapılandırmasında güvenli olmayan "%s" seçeneğini devre dışı bırakın.',
      'Phabricator now always sends transaction mail with "Precedence: bulk" to improve deliverability.' => 'Phabricator artık teslim edilebilirliği artırmak için her zaman "Öncelik: toplu" işlem postası gönderiyor.',
      '%s Day(s)' => '%s Gün',
      'No search servers are configured.' => 'Hiçbir arama sunucusu yapılandırılmamış.',
      'This key is too long for utf8mb4.' => 'Bu anahtar utf8mb4 için çok uzun.',
      'Expected Character Set' => 'Beklenen Karakter Kümesi',
      'Repository Servers' => 'Depo Sunucuları',
      'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'HTTP erişim günlüğü biçimi. Yolu ayarlamak için `%s` kullanın. Mevcut değişkenler:',
      'Skipping obsolete option: %s' => 'Eski seçenek atlama: %s',
      'This schema can use a better collation.' => 'Bu şema daha iyi bir harmanlama kullanabilir.',
      'Install Pygments to Improve Syntax Highlighting' => 'Sözdizimi Vurgulamasını Geliştirmek için Pigmentleri Yükle',
      'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Oturumlar artık keyfi bir eşzamanlılık sınırına sahip olmak yerine sona eriyor ve çöp topluyor.',
      'Logo Image' => 'Logo Resmi',
      'The environmental variable %s is empty. Phabricator will not be able to execute some commands.' => 'Çevresel değişken %s boş. Phabricator bazı komutları yürütemez.',
      'Really Clear Cache' => 'Gerçekten Açık Önbellek',
      'Stop Phabricator from sending any email, etc.' => 'Phabricator\'ın herhangi bir e-posta vb. göndermesini durdurun.',
      'Unexpected \'%s\' Behavior' => 'Beklenmeyen \'%s\' Davranışı',
      'Mail thread IDs are now generated automatically.' => 'Posta dizisi kimlikleri artık otomatik olarak oluşturuluyor.',
      'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'Veritabanı ana bilgisayarı "%s", arama dizinleri oluştururken varsayılan minimum kelime uzunluğunu kullanacak şekilde yapılandırılır. Bu, 4\'tür. Bu, yalnızca 3 karakter uzunluğundaki kelimelerin dizine eklenmeyeceği ve aranamayacağı anlamına gelir.
    Örneğin, \'SMS\', \'web\' veya \'DOS\' gibi kelimelerin arama sonuçlarını bulamazsınız.
    Bu kelimelerin dizine eklenmesine izin vermek için bu ayarı 3 olarak değiştirebilirsiniz. Alternatif olarak, 3 harfli kelimeleri aramakla ilgilenmiyorsanız bu uyarıyı göz ardı edebilirsiniz. Daha sonra Elasticsearch\'ı yapılandırmayı planlıyorsanız, bu uyarıyı da göz ardı edebilirsiniz: yalnızca MySQL tam metin araması etkilenir.
    Minimum kelime uzunluğunu 3\'e düşürmek için bunu %s dosyanıza ekleyin (%s bölümünde) ve sonra %s yeniden başlatın:
    %s
    Son olarak, yeni kuralları kullanarak dizinleri yeniden oluşturmak için bu komutu çalıştırın:
    %s',
      'Enable HTTP Strict Transport Security (HSTS).' => 'HTTP Sıkı Aktarım Güvenliğini (HSTS) etkinleştirin.',
      'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Kullanıcılar dosyaları bir metin düzenleyicisinde açmak için bir URI kalıbı yapılandırabilir. URI, bu beyaz listede bir protokol kullanmalıdır.',
      'Config' => 'Yapılandırma',
      'Retention Policy' => 'Alıkoyma Politikası',
      'You can rebuild repository identities while Phabricator is running.' => 'Phabricator çalışırken depo kimliklerini yeniden oluşturabilirsiniz.',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of Phabricator.' => 'Bu yapılandırma seçeneği bilinmiyor. Yanlış yazılmış olabilir veya Phabricator\'ın önceki bir sürümünde mevcut olabilir.',
      'HTTP Basic Auth Not Configured' => 'HTTP Temel Kimlik Doğrulaması Yapılandırılmadı',
      'Whitelist 1.2.*.*' => 'Beyaz liste 1.2. *.*',
      'Highlight httpd.conf as "apacheconf".' => 'httpd.conf dosyasını "apacheconf" olarak vurgulayın.',
      'Database Value' => 'Veritabanı Değeri',
      'On database host "%s", the global %s is set to %s. It is strongly encouraged that you disable this mode when running Phabricator.
    With %s enabled, MySQL rejects queries for which the select list or (as of MySQL 5.0.23) %s list refer to nonaggregated columns that are not named in the %s clause. More importantly, Phabricator does not work properly with this mode enabled.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to change the %s in your %s file (in the %s section) and then restart %s:
    %s
    (Note that if you run other applications against the same database, they may not work with %s. Be careful about enabling it in these cases and consider migrating Phabricator to a different database.)' => '"%s" veritabanı ana bilgisayarında, genel %s, %s olarak ayarlanmıştır. Phabricator\'ı çalıştırırken bu modu devre dışı bırakmanız şiddetle tavsiye edilir.
    %s etkinleştirildiğinde, MySQL, seçim listesinin veya (MySQL 5.0.23 itibariyle) %s listesinin, %s yan tümcesinde adlandırılmamış birleştirilmiş sütunlara başvurduğu sorguları reddeder. Daha da önemlisi, Phabricator bu mod etkinken düzgün çalışmıyor.
    Bu mod hakkında (ve nasıl yapılandırılacağı) daha fazla bilgiyi MySQL kılavuzunda bulabilirsiniz. Genellikle, %8$s dosyanızdaki (%9$s bölümünde) %7$s değiştirmek ve %s yeniden başlatmak yeterlidir:
    %s
    (Aynı veritabanında başka uygulamalar çalıştırırsanız, bunların %s ile çalışmayabileceğini unutmayın. Bu durumlarda etkinleştirmeye dikkat edin ve Phabricator\'ı farklı bir veritabanına geçirmeyi düşünün.)',
      'US Mountain (MDT)' => 'ABD Dağı (MDT)',
      'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'Bu seçenek daha esnek yapılandırma seçenekleri sağlayan `ui.logo` ile değiştirildi.',
      'Rebuild Search Index' => 'Arama Dizini\'ni Yeniden Oluştur',
      '%s Configuration' => '%s Yapılandırma',
      'Real' => 'Gerçek',
      'Launch daemons in \'verbose\' mode by default.' => 'Daemon\'ları varsayılan olarak \'ayrıntılı\' modda başlatın.',
      'Partition: %s' => 'Bölme: %s',
      'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'Bu dil dosyalarının vurgulanacağını seçmenizi sağlayan normal ifadelerin geçersiz kılma listesidir. Projelerinizin dosya adları hakkında belirli kuralları varsa veya olağandışı veya belirsiz dil uzantıları kullanıyorsanız, burada bir eşleme oluşturabilirsiniz. Bu, dosya adına karşı test edilecek düzenli ifadelerin sıralı bir sözlüğüdür. Yakalanan gruplara tamsayı olarak açık bir dile veya sayısal bir dizine eşlemelidirler.',
      'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.
    Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.
    You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'İzin verilen e-posta adreslerini, burada izin verilen alanların bir listesini ayarlayarak belirli alanlarla (`sirketiniz.com` gibi) kısıtlayabilirsiniz.
    Kullanıcıların yalnızca alan adlarından birinde e-posta adresleri kullanarak kaydolmasına izin verilir ve yalnızca bu alan adları için yeni e-posta adresleri ekleyebilir. Bunu yapılandırırsanız, @{config:auth.require-email-verification} anlamına gelir.
    Alan adlarından `@` işaretini çıkarmalısınız. Alan adının tam olarak eşleşmesi gerektiğini unutmayın. "yourcompany.com" izin verirseniz, bu `joe@sirketiniz.com` izin verir, ancak `joe@mail.sirketiniz.com` reddeder.',
      'Options for Phurl.' => 'Phurl için seçenekler.',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    Phabricator includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing Phabricator or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'ÖNEMLİ: Yukarı akış, prototip uygulamaları için destek sağlamaz.
    Phabricator, **gelişimin erken safhasında** olan prototip uygulamaları içerir. Varsayılan olarak, prototip uygulamaları yüklenmez, çünkü genellikle henüz kullanılabilir olacak kadar gelişmemiştir. Phabricator geliştiriyorsanız veya yaklaşan özellikleri önizlemek istiyorsanız bu seçeneği yüklemek için bu seçeneği etkinleştirebilirsiniz.
    Prototipler hakkında daha fazla bilgi edinmek için, [[ %s | %s ]] sayfasına bakın.
    Prototipleri etkinleştirdikten sonra, bunları normal olarak kaldırabilirsiniz (normal uygulamalar gibi).',
      'For conduit, the Conduit method which was invoked.' => 'Boru için, çağrılan Boru yöntemi.',
      'The configured PATH includes a component which is not usable. Phabricator will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'Yapılandırma edilen PATH, kullanılamayan bir bileşen içerir. Phabricator, burada bulunan ikili dosyaları bulamaz veya yürütemez:
    %s
    Web sunucusunun çalıştığı kullanıcı, bundan faydalanabilmek için PATH içindeki tüm dizinleri okuyabilmelidir.',
      'The configuration option \'%s\' is not set.' => '\'%s\' yapılandırma seçeneği ayarlanmamış.',
      'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see http://recaptcha.net/' => 'Birkaç başarısız giriş denemesinden sonra kullanıcıların captcha\'ları çözmesini istemek için recaptcha\'yı etkinleştirin. Bu, kullanıcı parolalarına karşı kaba kuvvet saldırılarını engeller. Daha fazla bilgi için, http://recaptcha.net/ bağlantıya bakın',
      'Stop Before HTTP Redirect' => 'HTTP Yönlendirmesinden Önce Durdur',
      'Developer / Debugging' => 'Geliştirici / Hata Ayıklama',
      'Remove PHP %s' => 'PHP %s kaldır',
      'Missing' => 'Eksik',
      'Classes must match to compare schemata!' => 'Sınıflar şemayı karşılaştırmak için eşleşmelidir!',
      'Elasticsearch Index Not Found' => 'Elasticsearch Enkdesi Bulunamadı',
      'Unit test value.' => 'Birim test değeri.',
      'A daemon is running as user %s, but daemons should be running as %s.
    Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'Bir daemon %s kullanıcısı olarak çalışıyor, ancak daemonlar %s olarak çalışıyor olmalıdır.
    Ya %s yapılandırma ayarını yapın ya da arka plan pencerelerini yeniden başlatın. Daemonlar, yeniden başlatıldığında uygun kullanıcı olarak çalışmaya çalışmalıdır.',
      'Missing Key' => 'Eksik Anahtar',
      'Expected Nullable' => 'Beklenen Sıfırlanabilir',
      'Disable SSH log.' => 'SSH günlüğünü devre dışı bırakın.',
      'Current Settings' => 'Şimdiki Ayarlar',
      'No databases have any issues.' => 'Hiçbir veritabanının sorunu yoktur.',
      'Trace mode' => 'İzleme modu',
      'Option "%s" is of type "%s", but the configured value is not an integer.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir tamsayı değildir.',
      'Notifications no longer have a dedicated debugging mode.' => 'Bildirimler artık özel bir hata ayıklama moduna sahip değil.',
      'Daemon Running as Wrong User' => 'Daemon Yanlış Kullanıcı Olarak Çalışıyor',
      'Extending Phabricator' => 'Genişleyen Phabricator',
      'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'Bu eski uzatma noktasının yerini "AphrontSite" dahil olmak üzere diğer mekanizmalar almıştır.',
      'You enabled Elasticsearch but the index does not exist.' => 'Elasticsearch\'ü etkinleştirdiniz, ancak dizin mevcut değil.',
      '%s Not Found' => '%s Bulunamadı',
      'Phabricator PHP 7 Compatibility Information' => 'Phabricator PHP 7 Uyumluluk Bilgisi',
      'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => '`%s` yapılandırmanız bir bağlantı noktası numarası içeriyor, ancak bu kullanım kullanımdan kaldırıldı. Bunun yerine, bağlantı noktası numarasını `%s` olarak girin.',
      'Elasticsearch Index Schema Mismatch' => 'Elasticsearch Dizin Şeması Uyumsuzluğu',
      'Column has Wrong Autoincrement' => 'Sütunda Yanlış Otomatik Aralık var',
      'Memory Limit Restricts File Uploads' => 'Bellek Sınırı Dosya Yüklemelerini Kısıtlıyor',
      'Cache Entries' => 'Önbellek Girişleri',
      'Unknown column type "%s"!' => 'Bilinmeyen sütun türü "%s"!',
      'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'Yüklenen dosyaları diskte saklamak için yapılandırılmış konum ("%s") mevcut değil veya okunamıyor veya yazılabilir değil. Dizinin var olduğunu ve web sunucusu tarafından okunabilir ve yazılabilir olduğunu doğrulayın.',
      'Notifications User Guide: Setup and Configuration' => 'Bildirimler Kullanıcı Kılavuzu: Kurulum ve Yapılandırma',
      'Key is Too Long' => 'Anahtar Çok Uzun',
      '\'%s\' Missing' => '\'%s\' Eksik',
      'Configure database read replicas.' => 'Veritabanı okuma kopyalarını yapılandırın.',
      'Elasticsearch Misconfigured' => 'Elasticsearch Yanlış Yapılandırıldı',
      'Amazon S3 is Only Partially Configured' => 'Amazon S3 Yalnızca Kısmen Yapılandırılmış',
      'Phabricator no longer supports global customization of monospaced fonts.' => 'Phabricator artık tek aralıklı yazı tiplerinin küresel olarak özelleştirilmesini desteklemiyor.',
      '<none>' => '<hiçbiri>',
      'Customize favicons.' => 'Faviconları özelleştirin.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'PATH bileşeni \'%s\' (mutlak yol \'%s\' olarak çözülür) kullanılamaz çünkü kullanılamaz (\'%s\' izin biti ayarlanmamıştır).',
      'No Repositories' => 'Depo Yok',
      '%s deleted this configuration entry.' => '%s bu yapılandırma girişini sildi.',
      'After rebuilding repository identities, run this command to clear this setup warning:' => 'depo kimliklerini yeniden oluşturduktan sonra, bu kurulum uyarısını silmek için şu komutu çalıştırın:',
      'Mail is now always delivered by the daemons.' => 'Mail artık her zaman daemon tarafından teslim ediliyor.',
      'Request has bad "Host" header.' => 'İstekte kötü "Ana Bilgisayar" başlığı var.',
      'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'Subversion\'un bu sürümü, 1.7.2\'de düzeltilen rN\'ye (Subversion sorunu #2873) eklenen dosyalar için `%s` çalışmadığı bir hataya sahip.',
      'Elasticsearch is not reachable as configured.' => 'Elasticsearch\'e yapılandırıldığı gibi ulaşılamıyor.',
      'Cluster Repository Status' => 'Küme Veri Depo Durumu',
      'Key has Wrong Uniqueness' => 'Anahtarın Tekliği Yanlış',
      'Determines whether or not basic account information is editable.' => 'Temel hesap bilgilerinin düzenlenebilir olup olmadığını belirler.',
      'Get a local configuration value.' => 'Yerel bir yapılandırma değeri edinin.',
      'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'Bu yükleme için temel URI yapılandırılmadı. Pek çok ana özellik siz yapılandırıncaya kadar düzgün çalışmaz.',
      'Unexpected \'diff\' Behavior' => 'Beklenmedik \'diff\' Davranışı',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'Bu sistemdeki \'%s\' ikili dosyasının beklenmedik bir davranışı var: farklı dosyalar iletildiğinde sıfır olmayan bir hata kodu ile çıkması bekleniyordu, ancak olmadı.',
      'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince Phabricator to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s' => 'PHP şu anda herhangi bir yerel dosyanın içeriği için bağlandığı herhangi bir MySQL sunucusundan gelen istekleri karşılayacak şekilde yapılandırılmıştır.
    Bu özellik MySQL "VERİ YEREL DOSYASI YÜKLE" sorgularını destekler, ancak kötü amaçlı bir MySQL sunucusunun yerel diske okuma erişimine izin verir: sunucu istemciden herhangi bir yerel dosyanın içeriğini göndermesini isteyebilir ve istemci uyumlu olacaktır.
    Bir saldırganın Phabricator\'ı kötü amaçlı bir MySQL sunucusuna bağlanmaya ikna etmesi normalde zor olsa da, bu seçeneği devre dışı bırakmalısınız: bu özellik gereksizdir ve doğası gereği tehlikelidir.
    Bu seçeneği devre dışı bırakmak için şunu ayarlayın: %s',
      'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'Düzeltmek istemiyorsanız bir sorunu yoksayabilir veya daha sonra düzeltmeyi planlayabilirsiniz. Yok sayılan sorunlar her sayfada görünmez, ancak yine de açık sorunlar listesinde gösterilir.',
      'Enter value in JSON.' => 'JSON\'a değer girin.',
      'Migrated option "%s" from file to local config.' => 'Dosyadan yerel yapılandırmaya "%s" seçeneği taşındı.',
      'Shenanigans' => 'Maskaralık',
      'The path for local repositories does not exist, or is not readable by the webserver.' => 'Yerel depoların yolu mevcut değil veya web sunucusu tarafından okunamıyor.',
      'Verbose mode' => 'Ayrıntılı mod',
      'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Gelen ve giden postalar artık "cluster.mailers" ile yapılandırıldı.',
      'Config \'%s\' Invalid' => '\'%s\' Yapılandırması Geçersiz',
      'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'Bir veritabanı ana bilgisayarı ("%s") ve bu web ana makinesi ("%s") şimdiki zamana 60 saniyeden fazla katılmıyor (mutlak eğrilik %s). Geçerli saatin her yerde doğru ayarlandığını kontrol edin.',
      'Never suppress email' => 'Asla e-postayı bastırmayın',
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
      'URI that Phurl will use to shorten URLs.' => 'Phurl\'un URL\'leri kısaltmak için kullanacağı URI.',
      'Local Version' => 'Yerel Sürüm',
      'Profile every request (slow)' => 'Her isteği profil haline getir (yavaş)',
      'Resolved Issue' => 'Çözülen Sorun',
      'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'Bu seçenek genellikle yararlı olmadı. Kaynak karması anahtarları artık otomatik olarak yönetiliyor.',
      'To enable the Phabricator access log, specify a path. The Phabricator access than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => 'Phabricator erişim günlüğünü etkinleştirmek için bir yol belirtin. Phabricator erişimi normal HTTP erişim günlüklerine göre (örneğin, oturum açmış kullanıcıları, denetleyicileri ve diğer uygulama verilerini gösterebilir).
    Ayarlanmazsa, günlük yazılmaz.',
      'Schema Status' => 'Şema Durumu',
      'To update these %d value(s), run these command(s) from the command line:' => 'Bu %s değerini güncellemek için komut satırından şu komutu çalıştırın:',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with Phabricator. Remove \'%s\' from your configuration to continue.' => 'PHP yapılandırmanızda \'%s\' etkin.
    Bu seçenek Phabricator ile uyumlu değildir. Devam etmek için yapılandırmanızdan \'%s\' değerini kaldırın.',
      'Cache Storage' => 'Önbellek Depolama',
      'At least one daemon is currently running as the wrong user.' => 'En az bir arka plan programı şu anda yanlış kullanıcı olarak çalışıyor.',
      'Data Type' => 'Veri Türü',
      'Allow suppressing email from certain users' => 'Belirli kullanıcılardan gelen e-postaların bastırılmasına izin ver',
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
      'Install applications which are still under development.' => 'Hala geliştirilmekte olan uygulamaları yükleyin.',
      'Dark' => 'Koyu',
      'GZip Compression May Not Be Enabled' => 'GZip Sıkıştırması Etkinleştirilmeyebilir',
      'Return to Open Issue List' => 'Açık Sayı Listesine Dön',
      'Either the Phabricator schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Elasticsearch için Phabricator şeması değişti veya Elasticsearch dizini otomatik olarak oluşturdu. Dizini yeniden oluşturmak için aşağıdaki komutu kullanın.',
      'Activate read-only mode for maintenance or disaster recovery.' => 'Bakım veya olağanüstü durum kurtarma için salt okunur modu etkinleştirin.',
      'Specify a configuration key and a value to set it to.' => 'Ayarlanacak bir yapılandırma anahtarı ve bir değer belirleyin.',
      'PHP also loaded these %s configuration file(s):' => 'PHP ayrıca bu %s yapılandırma dosyasını da yükledi:',
      'Reading value from stdin...' => 'Stdin\'den değeri okunuyor...',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '"%s" seçeneği "%s" türündedir, ancak sağladığınız değer geçerli bir JSON listesi değil: komut satırından bir küme sağlarken, bunu JSON\'daki değerlerin listesi olarak belirtin. Kabuğunuzun değerini belirtmeniz gerekebilir (örneğin: \'["a", "b", ...]\').',
      'To rebuild the index, run this command:' => 'Dizini yeniden oluşturmak için şu komutu çalıştırın:',
      'Disable Recaptcha' => 'Recaptcha\'yı devre dışı bırak',
      'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to Phabricator, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.' => 'Bu istek bir "Ana Bilgisayar" başlığı içermiyordu. Bu, web sunucunuzun (nginx veya apache gibi) yanlış yapılandırıldığı ve "Ana Bilgisayar" üstbilgisinin Phabricator\'a gelmediği veya bir araç veya kitaplık kullanarak "Ana Bilgisayar" üstbilgisi olmadan ham istekte bulunduğunuz anlamına gelebilir.
    Bir web tarayıcısı kullanıyorsanız, web sunucusu yapılandırmanızı kontrol edin. Bir araç veya kitaplık kullanıyorsanız, isteğin nasıl oluşturulduğunu kontrol edin.
    Başka bir ağ cihazının (bir yük dengeleyici gibi) başlığı çıkarması da mümkündür (ancak pek olası değildir).
    İstekler, geçerli bir "Ana Bilgisayar" başlığı içermelidir.',
      'Sample every request (slow).' => 'Her talebi örnekleyin (yavaş).',
      '\'%s\' binary not found or Imagemagick is not installed.' => '\'%s\' ikili bulunamadı veya Imagemagick kurulu değil.',
      'Unsafe MySQL "local_infile" Setting Enabled' => 'Güvenli Olmayan MySQL "local_infile" Ayarı Etkin',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'PATH bileşeni \'%s\' (\'%s\' mutlak yolu olarak çözülür) kullanılamaz çünkü \'%s\' mevcut değildir.',
      'The search index algorithm has been updated and the index needs be rebuilt.' => 'Arama dizini algoritması güncellendi ve dizinin yeniden oluşturulması gerekiyor.',
      'Phabricator has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'Phabricator %2$s içinde %1$s kullanılabilir, ancak ikilik %s olarak çalıştırıldığında bir hata kodu ile çıkıldı. Doğru takıldığından emin olun.',
      'The current PHP configuration has these %d value(s):' => 'Geçerli PHP yapılandırması şu %s değerine sahiptir:',
      'This issue is currently ignored, and does not show a global warning.' => 'Bu sorun şu anda yok sayılıyor ve genel bir uyarı göstermiyor.',
      'Cache Status' => 'Önbellek Durumu',
      'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'Bu sürüm kontrol sistemini kullanan en az bir deponuz yapılandırılmış. VCS ikili olmadan çalışmaz.',
      'Done. Migrated %d keys.' => 'Bitti. %s anahtar taşıdı.',
      'The remote IP.' => 'Uzak IP.',
      'Disable Prototypes' => 'Prototipleri Devre Dışı Bırak',
      'US West (PDT)' => 'ABD Batı (PDT)',
      'Deleted \'%s\' from %s configuration.' => '%2$s yapılandırmasından \'%1$s\' silindi.',
      'Run Normally' => 'Normal Olarak Çalıştır',
      'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Anahtarın önemli olmadığı HMAC özetleri için varsayılan anahtar (yani, karma değeri gizlidir). İsterseniz (başka bir dizeye) bunu değiştirebilirsiniz, ancak bunu yapmak mevcut oturumları ve CSRF anahtarları bozacaktır. Bu seçenek kullanımdan kaldırıldı. Yeni kod HMAC anahtarlarını otomatik olarak yönetir.',
      'Highlight %s as PHP.' => 'PHP olarak %s vurgulayın.',
      'Launch daemons in \'trace\' mode by default. This creates an ENORMOUS amount of output, but can help debug issues. Daemons launched in debug mode with \'%s\' are always launched in trace mode. See also \'%s\'.' => 'Daemon\'ları varsayılan olarak \'izleme\' modunda başlatın. Bu MUAZZAM miktarda çıktı oluşturur, ancak sorunların ayıklanmasına yardımcı olabilir. \'%s\' ile hata ayıklama modunda başlatılan cinler, izleme modunda her zaman başlatılır. Ayrıca bakınız: \'%s\'.',
      'MySQL is Using Default Stopword File' => 'MySQL, Varsayılan Anahtar Kelime Dosyası Kullanıyor',
      'Pagespeed is enabled, but should be disabled.' => 'Sayfa hızı etkin, ancak devre dışı bırakılmalıdır.',
      'Paths to additional phutil libraries to load.' => 'Yüklenecek ek phutil kitaplıklarına giden yollar.',
      'User Guide: Prototype Applications' => 'Kullanıcı Kılavuzu: Prototip Uygulamaları',
      'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'Bunu etkinleştirirseniz, bağlı YouTube videoları satır içine gömülür. Bunun hafif güvenlik etkileri vardır (YouTube\'a yönlendirenlere sızacaksınız) ve oldukça saçma (ancak harika bir şey).',
      'The \'%s\' binary could not be located or executed.' => '\'%s\' ikili dosyası bulunamadı veya yürütülemedi.',
      'Show Email Preferences Link' => 'E-posta Tercihleri Bağlantısını Göster',
      'Confirm before redirecting so DarkConsole can be examined.' => 'DarkConsole\'un incelenebilmesi için yönlendirmeden önce onaylayın.',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with Phabricator. Disable \'%s\' in your PHP configuration to continue.' => 'PHP yapılandırmanızda \'%s\' etkin.
    Bu seçenek Phabricator ile uyumlu değildir. Devam etmek için PHP yapılandırmanızdaki \'%s\' değerini devre dışı bırakın.',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), Phabricator will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'UYARI: Bu çok gelişmiş bir seçenektir ve yalnızca çok kiracılı kümeler çalıştıran sağlayıcılar için yararlıdır.
    Burada bir örnek tanımlayıcı sağlarsanız (normalde bunu `%s` ile enjekte ederek), Phabricator bunu alt işlemlere geçirir ve `%s` çevresel değişkenindeki kancaları işler.',
      'Phabricator can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'Phabricator varsayılan olarak birkaç dili vurgulayabilir, ancak Pygments\'ı (üçüncü taraf vurgulama aracı) yüklemek ve etkinleştirmek, daha fazla dil için sözdizimi vurgulaması ekleyecektir.
    Pygments\'ı yükleme ve etkinleştirme talimatları için %s yapılandırma seçeneğine bakın.
    Pygments\'ı yüklemek istemiyorsanız, bu sorunu göz ardı edebilirsiniz.',
      'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => '"%s" ana bilgisayarında, MySQL küçük bir "%s" (%s) ile yapılandırılır, bu da bazı büyük yazma işlemlerinin başarısız olmasına neden olabilir. Bu ayar için önerilen minimum değer "%s".',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => '\'%s\' bir dizin olmadığından PATH bileşeni \'%3$s\' (\'%2$s\' mutlak yolu olarak çözülür) kullanılamaz.',
      'Unable to connect to MySQL!
    %s
    Make sure Phabricator and MySQL are correctly configured.' => 'Mysql\'e bağlanılamıyor!
    %s
    Phabricator ve MySQL\'in doğru yapılandırıldığından emin olun.',
      'Phabricator sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. Phabricator sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'Phabricator, kendisine "Yetkilendirme" HTTP üstbilgisi ile bir test isteği gönderdi ve bu kimlik bilgilerinin iletilmesini bekledi. Bununla birlikte, alındıklarında eksik veya yanlıştılar. Phabricator "%2$s" parolası ile "%1$s" kullanıcı adını gönderdi; "%s" kullanıcı adı ve "%s" parolasını aldı.
    Web sunucunuz HTTP temel kimlik doğrulamasını iletecek şekilde yapılandırılmamış olabilir. Temel kimlik doğrulamayı kullanmayı planlıyorsanız (örneğin, depolara erişmek için) yeniden yapılandırmanız gerekir.',
      'After installing new PHP extensions, <strong>restart Phabricator for the changes to take effect</strong>. For help with restarting Phabricator, see %s in the documentation.' => 'Yeni PHP uzantılarını yükledikten sonra, <strong>değişikliklerin etkili olması için Phabricator\'ı yeniden başlatın</strong>. Phabricator\'ı yeniden başlatmayla ilgili yardım için belgelerdeki %s bakın.',
      'Set the language list which appears in dropdowns.' => 'Açılır pencerelerde görünen dil listesini ayarlayın.',
      'Inverse' => 'Ters',
      'Deprecated Config Source' => 'Kullanımdan Kaldırılmış Yapılandırma Kaynağı',
      'Indefinite' => 'Süresiz',
      'You can rebuild the search index while Phabricator is running.' => 'Phabricator çalışırken arama dizinini yeniden oluşturabilirsiniz.',
      'Edge Types' => 'Kenar Türleri',
      '%s (branched from %s on %s)' => '%s (%3$s üzerinden %2$s üzerinde dallı)',
      'Disable access log.' => 'Erişim günlüğünü devre dışı bırakın.',
      'Logo configuration is not valid: value must be a dictionary.' => 'Logo yapılandırması geçerli değil: değer bir sözlük olmalıdır.',
      'Really ignore this setup issue?' => 'Bu kurulum sorununu gerçekten yok sayıyor musunuz?',
      'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'Yapılandırma seçeneği "%s" geçersiz. URI "%s" veya "%s" ile başlamalıdır.',
      'Phabricator supports syntax highlighting a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make Phabricator use Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear Phabricator\'s caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Phabricator, varsayılan olarak birkaç dili vurgulayan sözdizimini destekler, ancak daha birçok dile destek sağlamak için Pygments\'ı (üçüncü taraf sözdizimi vurgulama aracı) yükleyebilirsiniz.
    Pygments\'ı yüklemek için [[ http://pygments.org | pygments.org ]] ve indirme ve yükleme talimatlarını izleyin.
    Pygments yüklendikten sonra, Phabricator\'ın kaynak kodunu vurgularken Pygments kullanmasını sağlamak için bu seçeneği (`pygments.enabled`) etkinleştirin.
    Pygments\' yükleyip etkinleştirdikten sonra, yeni oluşturulan kaynak kodunun (diffs ve macunlar gibi) doğru şekilde vurgulanması gerekir. Önceden var olan kaynak kodunu vurgulamak için Phabricator\'ın önbelleklerini temizlemeniz gerekebilir. Önbellekleri yönetmeyle ilgili talimatlar için, [[ %s | Önbellekleri Yönetme ]] sayfasına bakın.',
      'Options relating to syntax highlighting source code.' => 'Sözdizimi vurgulama kaynak kodu ile ilgili seçenekler.',
      'Allow HTTP' => 'HTTP\'ye izin ver',
      'The current Phabricator configuration has these %d value(s):' => 'Mevcut Phabricator yapılandırması şu %s değerine sahiptir:',
      'Simple Example' => 'Basit Örnek',
      'Controls whether Phabricator allows the suppression of email from "maintenance" users.' => 'Phabricator\'ın "bakım" kullanıcılarından gelen e-postaların bastırılmasına izin verip vermediğini kontrol eder.',
      'Synchronized' => 'Senkronize',
      'Access key for Amazon EC2.' => 'Amazon EC2 için erişim anahtarı.',
      '%s Component Unusable' => '%s Bileşen Kullanılamıyor',
      'Unsynchronized' => 'Eşitlenmemiş',
      'Key for HMAC digests.' => 'HMAC özetlerinin anahtarı.',
      'The request duration, in microseconds.' => 'Mikrosaniye cinsinden istek süresi.',
      'Phabricator now supports arbitrarily large files. Consult the documentation for configuration details.' => 'Phabricator artık büyük dosyaları desteklemektedir. Yapılandırma ayrıntıları için belgelere bakın.',
      'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'S3 grubunuzun bulunduğu Amazon S3 bölgesi. Bir bölge belirttiğinizde, `amazon-s3.endpoint` ile karşılık gelen bir bitiş noktası da belirtmelisiniz. Kullanılabilir bölgelerin ve uç noktaların bir listesini AWS belgelerinde bulabilirsiniz.',
      'To enable the Phabricator SSH log, specify a path. The access log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).
    If not set, no log will be written.' => 'Phabricator SSH günlüğünü etkinleştirmek için bir yol belirtin. Erişim günlüğü, SSH erişimi hakkında normal bir SSH günlüğünden daha ayrıntılı bilgi sağlayabilir (örneğin, oturum açmış kullanıcıları, komutları ve diğer uygulama verilerini gösterebilir).
    Ayarlanmazsa, günlük yazılmaz.',
      'MySQL %s Not Supported' => 'MySQL %s Desteklenmiyor',
      'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you aleady created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => '"InnoDB" motoru MySQL\'de mevcut değildir ("%s" sunucusunda). MySQL yapılandırmanızda InnoDB\'yi etkinleştirin.
    (Tabloları her zaman oluşturduysanız, MySQL bunları oluşturmak için yanlış bir şekilde başka bir motor kullandı. Bunları dönüştürmeniz veya bırakıp yeniden başlatmanız gerekir.)',
      'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => '"%s" seçeneği "%s" türündedir, ancak geçerli değer ("%s") geçerli değerler kümesi arasında değil: %s.',
      'Controls whether Phabricator sends email "From" users.' => 'Phabricator\'ın "Kimden" kullanıcılarına e-posta gönderip göndermeyeceğini denetler.',
      'Auth Application' => 'Kimlik Doğrulama Uygulaması',
      '%s.%s (%s)' => '%s.%s (%s)',
      'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'Tüm Diferansiyel alanlar artık "%s" yapılandırma seçeneği ile yönetilmektedir. Hangi alanların gösterileceğini yapılandırmak için bu seçeneği kullanın.',
      'By default, Phabricator includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'Varsayılan olarak, Phabricator, Maniphest\'te "Yorum Ekle" yerine "Tartım" istemi gibi kullanıcı arayüzünde bazı lezzet metinleri içerir. "Yorum Ekle" gibi daha geleneksel kullanıcı arayüzü dizelerini tercih ediyorsanız, bu bayrağı ekstra lezzetin çoğunu devre dışı bırakacak şekilde ayarlayabilirsiniz.',
      'Use HSTS' => 'HSTS Kullan',
      'The current MySQL configuration has these %d value(s):' => 'Geçerli MySQL yapılandırması şu %s değerlere sahiptir:',
      'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed Phabricator on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to Phabricator which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'Veritabanı ana bilgisayarı "%s" çok küçük bir %s (%s) ile yapılandırıldı. Bu, kötü veritabanı performansına ve kilit tükenmesine neden olabilir.
    Uygun bir değer ayarlamak için zor ve hızlı kurallar yoktur, ancak standart bir kurulum için makul bir başlangıç noktası, makinedeki toplam belleğin %%40\'ı gibi bir şeydir. Örneğin, Phabricator\'ı yüklediğiniz makinede 4GB RAM varsa, bu değeri %s olarak ayarlayabilirsiniz.
    Kullanım durumunuz için nasıl yapılandıracağınıza karar vermenize yardımcı olması için MySQL belgelerinde bu seçenek hakkında daha fazla bilgi edinebilirsiniz. Bu ortama göre normal iş yüklerinden farklı kılan Phabricator\'a özgü hiçbir endişe yoktur.
    Ayarı yapmak için %s dosyanıza (%s bölümünde) buna benzer bir şey ekleyin; %s ana makineniz ve kullanım durumunuz için uygun bir değerle değiştirin. Sonra %s yeniden başlatın:
    %s
    Geçerli ayardan memnunsanız, bu kurulum uyarısını güvenle yok sayabilirsiniz.',
      'Show "To:" and "Cc:" footer hints in email.' => 'E-postada "Alıcı:" ve "Bilgi:" altbilgisi ipuçlarını göster.',
      'Write SSH log here.' => 'SSH günlüğünü buraya yazın.',
      'Migrate From "feed.http-hooks" to Webhooks' => '"feed.http-hooks" klasöründen Webhook\'ları geçiş',
      'You can find more information about configuring OPcache in the %s.' => 'OPcache yapılandırması hakkında daha fazla bilgiyi %s içinde bulabilirsiniz.',
      'PHP Timezone' => 'PHP Zaman Dilimi',
      'This option is not recognized. It may be misspelled.' => 'Bu seçenek tanınmıyor. Yanlış yazılmış olabilir.',
      'Customized settings for Phabricator applications.' => 'Phabricator uygulamaları için özelleştirilmiş ayarlar.',
      'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and Phabricator does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating Phabricator, since a newer version of Phabricator is likely to be able to parse the newer version string.
    If updating Phabricator does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => '"%s" sürüm numarası belirlenemedi. Genellikle bu, programın son zamanlarda sürüm biçimi dizesini değiştirdiği ve Phabricator\'ın yeni olanı henüz ayrıştırmadığını bilmediği, ancak çok eski (veya bozuk) bir ikili dosyaya sahip olduğunuzu gösterebileceği anlamına gelir.
    Sürüm numarasını belirleyemediğimiz için, minimum ve bilinen kötü sürümlere karşı kontroller atlanacaktır, bu nedenle uyumsuz bir ikili dosyayı tespit edemeyebiliriz.
    Phabricator\'ın daha yeni bir sürümü daha yeni sürüm dizesini ayrıştırabileceğinden, bu sorunu Phabricator\'ı güncelleyerek çözebilirsiniz.
    Phabricator\'ı güncellemek bu sorunu çözmezse, ayrıştırıcıyı ayarlayabilmemiz için sorunu yukarı akışa bildirebilirsiniz.
    "%s" dosyasının son sürümünün kurulu ve doğru şekilde çalıştığından eminseniz, bu uyarıyı yok saymak genellikle güvenlidir.',
      'Internal.' => 'Dahili.',
      'Phabricator can highlight PHP by default and use Pygments for other languages if enabled. You can provide a custom highlighter engine by extending class %s.' => 'Phabricator, varsayılan olarak PHP\'yi vurgulayabilir ve etkinleştirilirse diğer diller için Pygments\'ı kullanabilir. %s sınıfını genişleterek özel bir vurgulayıcı motoru sağlayabilirsiniz.',
      'SSH log format.' => 'SSH günlük biçimi.',
      'The \'%s\' extension is not installed. Without \'%s\', support, Phabricator may not be able to determine the MIME types of uploaded files.' => '\'%s\' uzantısı yüklü değil. \'%s\' desteği olmadan, Phabricator yüklenen dosyaların MIME türlerini belirleyemeyebilir.',
      'Default address used when generating mail.' => 'Posta oluşturulurken kullanılan varsayılan adres.',
      'Learn more about locked and hidden options.' => 'Kilitli ve gizli seçenekler hakkında daha fazla bilgi edinin.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. Phabricator must be installed on an entire domain; it can not be installed on a path.' => '\'%s\' yapılandırma seçeneği geçersiz. URI\'nin bir yolu OLMAMALIDIR, ör. \'%s\' iyidir, ancak \'%s\' doğru değil. Phabricator tüm bir alana kurulmalıdır; bir yola kurulamaz.',
      'Repository Status' => 'Depo Durumu',
      'Do Not Use HSTS' => 'HSTS Kullanmayın',
      'Phabricator now has application-level management of partitioning and replicas.' => 'Phabricator artık bölümleme ve kopyaları uygulama düzeyinde yönetmektedir.',
      'PHP 7.0-7.1 Not Supported' => 'PHP 7.0-7.1 Desteklenmemektedir',
      'List all configuration keys.' => 'Tüm yapılandırma anahtarlarını listeleyin.',
      'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'Uygulama başına posta konusu öneki özelleştirmesi artık doğrudan desteklenmemektedir. Ön ekler ve diğer dizeler "translation.override" ile özelleştirilebilir.',
      'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'Bu yalnızca geçerli web kullanıcı arabirimini etkiler. Daemonlar ve diğer web ön uçları, opcache\'lerinden daha eski, önbelleğe alınmış kod kullanmaya devam edebilir.',
      'Configure real-time notifications.' => 'Gerçek zamanlı bildirimleri yapılandırın.',
      'Surplus Key' => 'Fazlalık Anahtar',
      'Make Phabricator even cooler!' => 'Phabricator\'ı daha da havalı yapın!',
      'Cluster Setup' => 'Küme Kurulumu',
      'Obsolete Configuration Option "%s"' => 'Eski Yapılandırma Seçeneği "%s"',
      'Setup' => 'Kur',
      'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects Phabricator, see %s.' => 'Bu sistemdeki %s sürümü güncel değil ve büyük, geniş ölçüde açıklanan büyük bir güvenlik açığı içeriyor ("Shellshock" güvenlik açığı).
    %s yamalı bir sürüme yükseltin.
    Bu sorunun Phabricator\'ı nasıl etkilediği hakkında daha fazla bilgi için %s bakın.',
      'Expected Autoincrement' => 'Beklenen Otomatik Artış',
      'This version of Mercurial has a significant memory leak, fixed in 2.2.1. Pushing fails with this version as well; see %s.' => 'Mercurial\'ın bu sürümü, 2.2.1\'de sabitlenen önemli bir bellek sızıntısına sahiptir. Bu sürümde de itme başarısız oluyor; %s bakın.',
      'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL ("%s" sunucusunda) yalnızca en az %s karakter içeren kelimeleri endeksleyecek şekilde yapılandırılmıştır.',
      'The \'%s\' extension is not installed. Without \'%s\', support, Phabricator will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => '\'%s\' uzantısı yüklü değil. \'%s\' desteği olmadan, Phabricator görüntüleri işleyemez veya yeniden boyutlandıramaz (örneğin, küçük resimler oluşturmak için). \'%s\' yükleyin veya etkinleştirin.',
      'Phabricator Setup Error' => 'Phabricator Kurulum Hatası',
      'Major Web/Database Clock Skew' => 'Büyük Web/Veritabanı Saati Eğriltme',
      'The way Phabricator attributes VCS activity to Phabricator users has changed. There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the Phabricator user that gets associated with VCS commits. This is to support situations where users are incorrectly associated with commits by Phabricator making bad guesses about the identity of the corresponding Phabricator user. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with future Phabricator features which will rely on the existence of these identities.' => 'Phabricator\'ın VCS aktivitesini Phabricator kullanıcılarıyla ilişkilendirme şekli değişti. VCS yazarları ve iştirakçileri olarak görünen dizeler ("John Developer <johnd@bigcorp.com>" gibi) ile VCS işleyişleriyle ilişkili olan Phabricator kullanıcısı arasında yeni bir dolaylama katmanı vardır. Bu kullanıcıların ilgili Phabricator kullanıcısının kimliği hakkında kötü tahminler yaparak Phabricator tarafından yapılan taahhütlerle yanlış ilişkilendirildiği durumları desteklemek içindir. Bu aynı zamanda, mevcut depoların söz konusu depodaki tüm komiteler için hesap oluşturmadan içe aktarıldığı durumlarda da yardımcı olur. Bu depo kimliklerini yeniden inşa edene kadar, bu kimliklerin varlığına dayanan gelecekteki Phabricator özelliklerinde sorunlarla karşılaşmanız muhtemeldir.',
      'No repository cluster services are configured.' => 'Hiçbir depo kümesi hizmeti yapılandırılmamış.',
      'Syntax Highlighting' => 'Sözdizimi Vurgulama',
      'This schema is not expected to exist.' => 'Bu şemanın olması beklenmemektedir.',
      'This configuration value is defined in these %d configuration source(s): %s.' => 'Bu yapılandırma değeri şu %s yapılandırma kaynağında tanımlanır: %s.',
      'Specify a configuration key to get.' => 'Alınacak bir yapılandırma anahtarı belirtin.',
      'Can not compare two missing schemata!' => 'İki eksik şema karşılaştırılamaz!',
      'Key on Wrong Columns' => 'Yanlış Sütunlardaki Anahtar',
      'S3 Partially Configured' => 'S3 Kısmen Yapılandırılmış',
      'Migrate file-based configuration to more modern storage.' => 'Dosya tabanlı yapılandırmayı daha modern depolamaya taşıyın.',
      'Skipping config of source type %s...' => '%s kaynak türünün yapılandırması atlanıyor ...',
      'No profiling' => 'Profil oluşturma yok',
      'PHID Types' => 'PHID Türleri',
      'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'Çevresel değişken %s, %s içermez. Pıhtıları etkinleştirdiniz; bu, %4$s değişkeninizde %3$s olmasını gerektirir.',
      'Use Pygments' => 'Pigmentleri Kullanın',
      'Amazon Web Services' => 'Amazon Web Servisleri',
      'US Central (CDT)' => 'ABD Merkez (CDT)',
      'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'Yapılandırma seçeneği "%s" geçersiz. URI yalnızca "%4$s" gibi çıplak bir ad değil, "%s" gibi bir nokta ("%2$s") içermelidir. Bazı web tarayıcıları, TLD bulunmayan alanlarda çerez ayarlamaz.',
      '%s Active' => '%s Aktif',
      'Subschemata Have Warnings' => 'Subschemata Uyarıları Var',
      'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access Phabricator, like "http://phabricator.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.' => 'Bu yükleme için temel URI yapılandırılmamış ve ana özellikler siz yapılandırıncaya kadar düzgün çalışmayacak.
    Temel URI\'yı, "http://phabricator.example.com/" gibi Phabricator\'a erişmek için kullanacağınız URI\'ye ayarlamalısınız.
    80 (http) veya 443 (https) dışında bir bağlantı noktası kullanıyorsanız, protokolü (http veya https), etki alanı adını ve bağlantı noktası numarasını ekleyin.
    Bu isteğe bağlı olarak, doğru ayarın aşağıdaki gibi olduğu görülmektedir:
    %s
    Temel URI\'yı yapılandırmak için, aşağıda gösterilen komutu çalıştırın.',
      'Require Administrators to Approve Accounts' => 'Yöneticilerin Hesapları Onaylamalarını Gerektir',
      'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Büyük dosya yüklemelerini desteklemek için PHP yapılandırmanızda %s en az 32MB olarak ayarlayın.',
      'The system sudo user.' => 'Sistem sudo kullanıcısı.',
      'When users write comments which have URIs, they\'ll be automatically linked if the protocol appears in this set. This whitelist is primarily to prevent security issues like %s URIs.' => 'Kullanıcılar URI\'ları olan yorumlar yazdıklarında, protokol bu kümede görünürse otomatik olarak bağlanırlar. Bu beyaz liste öncelikle %s URI gibi güvenlik sorunlarını önlemek içindir.',
      'MySQL %s Mode Not Set' => 'MySQL %s Modu Ayarlanmadı',
      'Phabricator Daemons Are Not Running' => 'Phabricator Daemonlar Çalışmıyor',
      'A component of the configured PATH can not be used by the webserver: %s' => 'Yapılandırılmış PATH\'nin bir bileşeni web sunucusu tarafından kullanılamaz: %s',
      'Directory that phd should use to track running daemons.' => 'Phd çalışan daemonları izlemek için kullanması gereken dizin.',
      'Use specific endpoint' => 'Belirli bir son nokta kullan',
      'Cluster' => 'Küme',
      'Configure Recaptcha captchas.' => 'Recaptcha captcha\'larını yapılandırın.',
      'Report this Issue to the Upstream' => 'Bu Sorunu Membaya Bildirin',
      'Options relating to PHD (daemons).' => 'Doktora ile ilgili seçenekler (daemonlar).',
      'Repos' => 'Depolar',
      'Database configuration.' => 'Veritabanı Yapılandırması',
      'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => '"%s" seçeneği "%s" türündedir, ancak geçerli değer ("%s"), "%s" temel sınıfının bilinen, somut bir alt sınıfı değildir. Geçerli seçimler: %s.',
      'Options for Phabricator developers, including debugging.' => 'Hata ayıklama dahil olmak üzere Phabricator geliştiricileri için seçenekler.',
      'Increase security (and improve performance) by configuring a CDN or alternate file domain.' => 'Bir CDN veya alternatif dosya etki alanı yapılandırarak güvenliği artırın (ve performansı artırın).',
      'Basic Example' => 'Temel Örnek',
      '%s In / %s Out' => '%s Açık / %s Kapalı',
      'DarkConsole is a development and profiling tool built into Phabricator\'s web interface. You should leave it disabled unless you are developing or debugging Phabricator.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole, Phabricator\'ın web arayüzünde yerleşik bir geliştirme ve profil oluşturma aracıdır. Phabricator\'ı geliştirmediyseniz veya hata ayıklamadığınız sürece devre dışı bırakmalısınız.
    Yükleme için DarkConsole\'u etkinleştirdikten sonra, **gerçekten sayfalarda görünmeden önce hesabınız için etkinleştirmeniz gerekir.** Bunu Ayarlar > Geliştirici Ayarları\'ndan yapabilirsiniz.
    DarkConsole potansiyel olarak hassas verileri (sorgular, yığın izleri ve yapılandırma gibi) ortaya koyar, böylece genellikle üretimde açmamalısınız.',
      'The timezone Phabricator should use.' => 'Saat dilimi Phabricator kullanmalıdır.',
      'Whitelist Specific Addresses' => 'Beyaz Listeye Özgü Adresler',
      'Use `%s` instead of this option.' => 'Bu seçenek yerine `%s` kullanın.',
      'Control how Phabricator renders user names in mail.' => 'Phabricator\'ın kullanıcı adlarını postada nasıl görüntüleyeceğini kontrol edin.',
      'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'Henüz herhangi bir kimlik doğrulama sağlayıcısı yapılandırmadınız. Kullanıcıların kaydolup giriş yapabilmesi için bir sağlayıcı (kullanıcı adı/parola, LDAP veya GitHub OAuth gibi) eklemeniz gerekir. Yetkilendirme Uygulamasını kullanarak sağlayıcılar ekleyebilir ve yapılandırabilirsiniz.',
      'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Veritabanlarını yükseltmek için depolama yükseltme komut dosyasını çalıştırın (ana bilgisayar "%s" güncel değil). Eksik yamalar: %s.',
      'Resource deflation is now managed automatically.' => 'Kaynak küçültme artık otomatik olarak yönetiliyor.',
      'MySQL' => 'MySQL',
      'Serious business' => 'Ciddi İş',
      'Phabricator received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with Phabricator. You should disable it.' => 'Phabricator, bu istekte bu sunucuda "mod_pagespeed"\'i etkinleştirdiğinizi belirten bir "X-Mod-Pagespeed" veya "X-Page-Speed" HTTP üstbilgisi aldı. Bu modül Phabricator ile uyumlu değildir. Devre dışı bırakmalısınız.',
      'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'Harici yükleyiciler değiştirildi. Yeni PHID ve tanıtıcı türlerini uygulamak için `%s` değerini uzatın.',
      'Authenticating users based on "Reply-To" is no longer supported.' => 'Kullanıcıların "Yanıtla" temel alınarak kimlik doğrulaması artık desteklenmemektedir.',
      'Cluster Notifications' => 'Küme Bildirimleri',
      'Option "%s" is of type "%s", but the configured value is not a list.' => '"%s" seçeneği "%s" türündedir, ancak yapılandırılan değer bir liste değildir.',
      'Cluster instance name, if configured.' => 'Yapılandırılmışsa küme örneği adı.',
      'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'REMOTE_ADDR\'nin artık boş olmaması için başlangıç betiğinizi düzeltmeniz gerekiyor.',
      'You are running PHP version %s. Phabricator does not support PHP versions between 7.0 and 7.1.
    PHP removed signal handling features that Phabricator requires in PHP 7.0, and did not restore them until PHP 7.1.
    Upgrade to PHP 7.1 or newer (recommended) or downgrade to an older version of PHP 5 (discouraged).' => 'PHP sürümü %s çalıştırıyorsunuz. Phabricator, 7.0 ve 7.1 arasındaki PHP sürümlerini desteklemez.
    PHP, Phabricator\'ın PHP 7.0\'da gerektirdiği sinyal işleme özelliklerini kaldırdı ve PHP 7.1\'e kadar geri yüklemedi.
    PHP 7.1 veya daha yenisine (önerilir) yükseltin veya PHP 5\'in eski bir sürümüne (önerilmez) yükseltin.',
      'Unknown Config' => 'Bilinmeyen Ayar',
      'Restarting Phabricator' => 'Phabricator Yeniden Başlatılıyor',
      'Detected %s serious issue(s) with the schemata.' => 'Şemada %s ciddi bir sorun tespit edildi.',
      'Daemons Not Running' => 'Daemon Çalışmıyor',
      'MySQL username to use when connecting to the database.' => 'Veritabanına bağlanırken kullanılacak MySQL kullanıcısı.',
      'Secret key for Amazon EC2.' => 'Amazon EC2 için gizli anahtar.',
      'Database Issues' => 'Veritabanı Sorunları',
      'Configure the MySQL Native Driver to improve database behavior.' => 'MySQL Yerel Sürücüsünü veritabanı davranışını iyileştirmek için yapılandırın.',
      'You must start the Phabricator daemons to send email, rebuild search indexes, and do other background processing.' => 'E-posta göndermek, arama dizinlerini yeniden oluşturmak ve diğer arka plan işlemlerini yapmak için Phabricator cinlerini başlatmanız gerekir.',
      'PHP requires that you set a timezone in your php.ini before using date functions, or it will emit a warning. If this isn\'t possible (for instance, because you are using HPHP) you can set some valid constant for %s here and Phabricator will set it on your behalf, silencing the warning.' => 'PHP, tarih işlevlerini kullanmadan önce php.ini dosyasında bir saat dilimi ayarlamanızı gerektirir; aksi takdirde bir uyarı gönderilir. Bu mümkün değilse (örneğin, HPHP kullandığınız için) burada %s için geçerli bir sabit ayarlayabilirsiniz ve Phabricator bunu sizin adınıza ayarlayarak uyarıyı susturur.',
      'These %d configuration value(s) are related:' => 'Bu %s yapılandırma değeri aşağıdakilerle ilgilidir:',
      'Too many arguments: expected only a key when using "--stdin".' => 'Çok fazla argüman: "--stdin" kullanılırken yalnızca bir anahtar bekleniyordu.',
      'Names must match to compare schemata!' => 'Şemaları karşılaştırmak için isimler eşleşmelidir!',
      'Core Settings' => 'Temel Ayarlar',
      'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.
    You should disable this option in your %s file, in the %s section:
    %s' => 'MySQL sunucunuz "local_infile" seçeneği etkin olarak yapılandırıldı. Bu seçenek, SQL enjeksiyon deliği bulan bir saldırganın web sunucusundan "VERİ YEREL DOSYASI YÜKLE" sorgularıyla dosyaları kopyalayıp ardından "SEÇ" sorgularıyla dosya içeriğini okuyarak saldırılarını arttırabilmesini sağlar.
    Bu seçeneği %s dosyanızdaki %s bölümünde devre dışı bırakmalısınız:
    %s',
      'Set \'%s\' in %s configuration.' => '%2$s yapılandırmasında \'%1$s\' değerini ayarlayın.',
      'Setup Checks' => 'Kurulum Kontrolleri',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or reconfigure Phabricator.' => 'Veritabanı ana bilgisayarı "%s" bir ana sunucu olarak yapılandırıldı, ancak başka bir ana bilgisayarı çoğaltıyor. Bu tehlikelidir ve verileri değiştirebilir veya yok edebilir. Yalnızca kopyalar çoğaltılmalıdır. Ana bilgisayarda çoğaltmayı durdurun veya Phabricator\'ı yeniden yapılandırın.',
      'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'Bu sistem, Bash\'in işlenmemiş ve yaygın bir şekilde açıklanmış bir güvenlik açığına sahip eşsiz bir sürümüne sahiptir.',
      'Keys' => 'Anahtarlar',
      'No Auth Providers' => 'Kimlik Doğrulama Sağlayıcısı Yok',
      'Missing Required Extensions' => 'Eksik Gerekli Uzantılar',
      'The \'%s\' extension has support for only some image types. Phabricator will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => '\'%s\' uzantısı yalnızca bazı resim türlerini destekliyor. Phabricator, siz onları destekleyerek \'%s\' oluşturana kadar eksik türdeki görüntüleri işleyemez. Desteklenen türler: %s. Eksik türler: %s.',
      'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'Bu seçenek "Yetkilendirme" uygulamasına taşındı. Eski yapılandırmanız hala yürürlükte, ancak şimdi yapılandırma yerine "Yetkilendirme" de depolanıyor. Bundan sonra, kimlik doğrulamasını web arayüzünden yönetebilirsiniz.',
      '- at %s' => '- %s altında',
      'Activity "%s" is not currently marked as required, so there is no need to complete it.' => '"%s" etkinliği şu anda gerektiği gibi işaretlenmediğinden, tamamlanmasına gerek yok.',
      'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in the Phabricator configuration.' => '\'%s\' ikili dosyası bulunamadı. Web sunucusunun %s çevresel değişkenini bulunduğu dizini içerecek şekilde ayarlayın veya Phabricator yapılandırmasında bu dizini \'%s\' değerine ekleyin.',
      'To continue, resolve this problem and reload the page.' => 'Devam etmek için bu sorunu çözün ve sayfayı yeniden yükleyin.',
      'Phabricator is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'Phabricator şu anda doğrudan diğer içeriklerle aynı alandan kullanıcı yüklemeleri sunacak şekilde yapılandırılmıştır. Bu bir güvenlik riskidir.
    Bu riski ortadan kaldırmak için bir CDN (veya alternatif dosya etki alanı) yapılandırın. CDN kullanmak performansı da artıracaktır. Talimatlar için aşağıdaki kılavuza bakın.',
      'Wordmark' => 'Marka',
      'Severe Security Vulnerability: Unpatched Bash' => 'Ciddi Güvenlik Açığı: Toplu Olmayan Bash',
      'Force HTTPS' => 'HTTPS\'yi zorla',
      'Without \'%s\', Phabricator will not be able to generate or render diffs in multiple applications.' => '\'%s\' olmadan, Phabricator birden fazla uygulamada fark üretemez veya oluşturamaz.',
      'Send as Phabricator' => 'Phabricator olarak gönder',
      'This key is not expected to exist.' => 'Bu anahtarın olması beklenmez.',
      '%s.%s' => '%s.%s',
      '%s.%s.%s' => '%s.%s.%s',
      '%d related link(s):' => '%s ile ilgili bağlantı:',
      'To rebuild identities, run this command:' => 'Kimlikleri yeniden oluşturmak için şu komutu çalıştırın:',
      'Missing Repository Local Path' => 'Depo Yerel Yolu Eksik',
      'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'Alternatif bir kaynak haritası artık desteklenmemektedir. Bunun yerine, birden fazla harita kullanın. T4222 bakın.',
      'Inline comments are now always rendered with a limited amount of context.' => 'Satır içi yorumlar artık her zaman sınırlı miktarda içerikle oluşturulmaktadır.',
      'Your server is configured with \'%s\', which prevents Phabricator from opening files it requires access to.
    Disable this setting to continue.' => 'Sunucunuz, Phabricator\'ın erişim gerektirdiği dosyaları açmasını engelleyen \'%s\' ile yapılandırıldı.
    Devam etmek için bu ayarı devre dışı bırakın.',
      'Locked Configuration Option "%s" Has Database Value' => 'Kilitli Yapılandırma Seçeneği "%s" Veritabanı Değerine Sahip',
      'Separate values with newlines or commas.' => 'Değerleri satırsonu veya virgülle ayırın.',
      'Don\'t require email verification' => 'E-posta doğrulaması gerektirme',
      'Alternate File Domain Not Configured' => 'Alternatif Dosya Etki Alanı Yapılandırılmadı',
      'MySQLi Extension Not Available' => 'MySQLi Uzantısı Mevcut Değil',
      'Unknown schema issue "%s"!' => 'Bilinmeyen şema sorunu "%s"!',
      'Embed Commons videos' => 'Gömülü Commons videoları',
      '%s » %s' => '%s » %s',
      'Limit page execution time to debug hangs.' => 'Askıda hata ayıklamak için sayfa yürütme süresini sınırlayın.',
      'Base URI Not Configured' => 'Temel URI Yapılandırılmadı',
      'Always Activate DarkConsole' => 'DarkConsole\'i Her Zaman Etkinleştir',
      'User Interface' => 'Kullanıcı Arayüzü',
      'No Schema Issues' => 'Şema Sorunu Yok',
      'MySQL database hostname.' => 'MySQL veritabanı ana bilgisayar adı.',
      'Obsolete Config' => 'Eski Yapılandırma',
      'Clustering Introduction' => 'Kümelenmeye Giriş',
      'By default, Phabricator serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'Varsayılan olarak Phabricator, uygulamanın sunulduğu aynı etki alanından dosyalar sunar. Bu uygundur, ancak bir güvenlik riski oluşturur.
    Bu riski azaltmak için bir CDN veya alternatif dosya etki alanı yapılandırmalısınız. Bir CDN\'nin yapılandırılması da performansı artıracaktır. Talimatlar için [[ %s | %s ]] bakın.',
      'MySQL on this machine' => 'Bu makinede MySQL',
      'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'Böyle bir yapılandırma anahtarı \'%s\' yok! Tüm tuşları listelemek için `%s` tuşunu kullanın.',
      'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'İlginç şeyler olduğunda geri çağrı alacak dinleyicileri yükleyerek çeşitli uygulama olaylarına yanıt verebilirsiniz. Burada PhabricatorEventListener\'ı genişleten sınıfların bir listesini belirtin.',
      'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'Bu kurulumda önemli bir kurulum hatası var, ayrıntıları görüntülemek ve çözmek için web arayüzüne erişin.',
      'Alternate domain to serve files from.' => 'Dosyaların sunulacağı alternatif alan.',
      'Your webserver is not forwarding credentials.' => 'Web sunucunuz kimlik bilgilerini iletmiyor.',
      'Default non-pygments syntax highlighter engine.' => 'Varsayılan pigment olmayan sözdizimi vurgulayıcı motoru.',
      'HTTP Parameter Types' => 'HTTP Parametre Türleri',
      'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of Phabricator.
    You can configure Webhooks in Herald.
    To resolve this issue, remove all URIs from "feed.http-hooks".' => '"feed.http-hooks" seçeneği Webhooks lehine kullanımdan kaldırılmıştır. Bu seçenek Phabricator\'ın gelecekteki bir sürümünde kaldırılacak.
    Webhook\'ları Herald\'da yapılandırabilirsiniz.
    Bu sorunu gidermek için, tüm beslemeleri "feed.http-hooks" klasöründen kaldırın.',
      'Mangled Webserver Response' => 'Karışık Web Sunucusu Yanıtı',
      'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow Phabricator to interact better with the database.
    Phabricator will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s' => 'PHP şu anda daha yeni MySQL yerel sürücüsü yerine eski MySQL harici sürücüsünü kullanıyor. Eski sürücü, Phabricator\'ın veritabanıyla daha iyi etkileşime girmesini sağlayan seçenekler ve özelliklerden (sorgu zaman aşımı desteği gibi) yoksundur.
    Phabricator eski sürücü ile çalışacaktır, ancak yerel sürücüye yükseltme yapılması önerilir.
    Yerel sürücüyü şu komutla yükleyebilirsiniz: %s',
      'Setup issues to ignore.' => 'Yok sayılması gereken kurulum sorunları.',
      'By default, Phabricator links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'Varsayılan olarak, Phabricator Yeniden Açıklama alanlarındaki nesne adlarını ilgili nesneye bağlar. Bu normal ifade bu davranışı değiştirmek için kullanılabilir; bu normal ifadeyle eşleşen nesne adları bağlanmayacak.',
      'Directory that the daemons should use to store log files.' => 'Günlüklerin depolanması için arka plan programlarının kullanması gereken dizin.',
      'Elasticsearch is configured (with the %s setting) but Phabricator encountered an exception when trying to test the index.
    %s' => 'Elasticsearch yapılandırıldı (%s ayarıyla), ancak Phabricator dizini test etmeye çalışırken bir istisna ile karşılaştı.
    %s',
      'Only allow registration from particular domains.' => 'Yalnızca belirli alan adlarından kayıt yapılmasına izin verin.',
      'Subschemata have setup failures.' => 'Subschemata kurulum hataları var.',
      'Normally, Phabricator issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, Phabricator will show a page instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normalde, Phabricator başarılı bir POST sonrasında HTTP yönlendirmeleri yayınlar. Bu, hizmet ve profil oluşturma bilgileri kaybolduğundan POST işlenirken gerçekleşen hataların ayıklanmasını zorlaştırabilir. Bu yapılandırma seçeneğini ayarlayarak Phabricator, otomatik olarak yeniden yönlendirmek yerine bir sayfa göstererek hizmet ve profil oluşturma bilgilerini incelemenize olanak tanır. Ayrıca UX\'i korkunç hale getirir, bu yüzden sadece hata ayıklama sırasında etkinleştirmelisiniz.',
      'No performance sampling.' => 'Performans örneklemesi yok.',
      'Opcode Cache' => 'Opcode Önbelleği',
      'ID of the SSH key used to authenticate the request.' => 'İsteğin kimliğini doğrulamak için kullanılan SSH anahtarının kimliği.',
      'US East (EDT)' => 'ABD Doğu (EDT)',
      'The HTTP referrer.' => 'HTTP yönlendireni.',
      'HTTP Parameters Not Transmitting' => 'İletilmeyen HTTP Parametreleri',
      'Determines whether Wikimedia Commons videos get embedded.' => 'Wikimedia Commons videolarının gömülüp gömülmeyeceğini belirler.',
      'Better Collation Available' => 'Daha İyi Tanımlama Var',
      'View "%s"' => 'Göster "%s"',
      'This setup issue has been resolved. ' => 'Bu kurulum sorunu çözüldü.',
      'Additional configuration options to hide.' => 'Gizlenecek ek yapılandırma seçenekleri.',
      'The logged-in username, if one is logged in.' => 'Giriş yapılmışsa, giriş yapmış kullanıcı adı.',
      'On database host "%s", the global %s is not set to %s. It is strongly encouraged that you enable this mode when running Phabricator.
    By default MySQL will silently ignore some types of errors, which can cause data loss and raise security concerns. Enabling strict mode makes MySQL raise an explicit error instead, and prevents this entire class of problems from doing any damage.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your %s file (in the %s section) and then restart %s:
    %s
    (Note that if you run other applications against the same database, they may not work in strict mode. Be careful about enabling it in these cases.)' => '"%s" veritabanı ana bilgisayarında, genel %s, %s olarak ayarlanmamış. Phabricator\'ı çalıştırırken bu modu etkinleştirmeniz önemle tavsiye edilir.
    Varsayılan olarak MySQL, veri kaybına neden olabilecek ve güvenlik endişelerini artırabilecek bazı hata türlerini sessizce göz ardı edecektir. Katı modun etkinleştirilmesi, MySQL\'in bunun yerine açık bir hata oluşturmasını sağlar ve tüm bu sınıf sorunlarının zarar görmesini önler.
    Bu mod hakkında (ve nasıl yapılandırılacağı) daha fazla bilgiyi MySQL kılavuzunda bulabilirsiniz. Genellikle, bunu %s dosyanıza (%s bölümünde) eklemek ve %s yeniden başlatmak yeterlidir:
    %s
    (Aynı veritabanında başka uygulamalar çalıştırırsanız, bunların katı modda çalışmayabileceğini unutmayın. Bu gibi durumlarda etkinleştirmeye dikkat edin.)',
      'No REMOTE_ADDR available' => 'REMOTE_ADDR yok',
      'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Amazon S3\'teki dosya depolama alanı kısmen yapılandırıldı, ancak gerekli bazı ayarlar eksik. S3, yapılandırmayı tamamlayana kadar dosyaları depolamak için kullanılamaz. S3\'ü tamamen yapılandırın veya kısmi yapılandırmayı kaldırın.',
      'The logged-in user PHID, if one is logged in.' => 'Oturum açmışsa, oturum açan kullanıcı PHID\'si.',
      'Version Information' => 'Sürüm Bilgisi',
      'HTTP Path Rewriting Incorrect' => 'HTTP Yolu Yeniden Yazma Yanlış',
      'Surplus' => 'Fazlalık',
      'You have enabled Imagemagick in your config, but the \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'Yapılandırmanızda Imagemagick\'i etkinleştirdiniz, ancak \'%s\' ikili dosyası web sunucusunun %s değil. Imagemagick\'i devre dışı bırakın veya web sunucusu için kullanılabilir hale getirin.',
      'Instance identifier for multi-tenant clusters.' => 'Çok kiracılı kümeler için örnek tanıtıcısı.',
      'Upgrade MySQL Schema' => 'MySQL Şemasını Yükselt',
      'Unignore Setup Issue' => 'Kurulum Sorunu Yoksaymasını Çıkar',
      'Automatically sample some fraction of requests.' => 'İsteklerin bir kısmını otomatik olarak örnekleyin.',
      'SSH log location.' => 'SSH günlük konumu.',
      'Delete a local configuration value.' => 'Yerel bir yapılandırma değerini silin.',
      'Phabricator can use less-secure but mailing list friendly public reply addresses.' => 'Phabricator, daha az güvenli ancak posta listesi dostu genel yanıt adresleri kullanabilir.',
      'These paths get appended to your %s environment variable.' => 'Bu yollar %s ortam değişkeninize eklenir.',
      'These alternative URIs will be able to access \'normal\' pages on your Phabricator install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'Bu alternatif URI\'ler Phabricator kurulumunuzdaki \'normal\' sayfalara erişebilecek. OAuth gibi diğer özellikler çalışmaz. Bunun en önemli kullanım alanı, yüklemeleri etki alanları arasında taşımaktır.',
      'Epoch timestamp.' => 'Dönem zaman damgası.',
      'Blindigo' => 'Blindigo',
      'Expected Column Type' => 'Beklenen Sütun Türü',
      'Enable developer mode' => 'Geliştirici modunu etkinleştir',
      'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Vah! Bu talebin yolculuğu beklenmedik koşullarda kısaldı (%s).',
      'Customizes retention policies for garbage collectors.' => 'Çöp toplayıcılar için saklama politikalarını özelleştirir.',
      'You can usually install a PHP extension using %s or %s. Common package names are %s or %s. Try commands like these:' => 'Bir PHP uzantısını genellikle %s veya %s kullanarak yükleyebilirsiniz. Genel paket adları %s veya %s. Bunun gibi komutları deneyin:',
      'This schema can use a better column type.' => 'Bu şema daha iyi bir sütun türü kullanabilir.',
      'The request date.' => 'İstek tarihi.',
      'Reply handlers can no longer be overridden with configuration.' => 'Yanıt işleyicileri artık yapılandırmayla geçersiz kılınamaz.',
      'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Varsayılan biçimin gelecekte değişebileceğini unutmayın; bu nedenle günlük biçimine güveniyorsanız, açıkça belirtin.',
      'Installed on Burstable CPU Instance' => 'Burstable CPU Eşgörünümüne Yüklendi',
      'MySQL is Using Default Minimum Word Length' => 'MySQL Varsayılan Minimum Kelime Uzunluğunu Kullanıyor',
      'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'Sözdizimi vurgulama koduna bir açılır liste görüntülediğimiz yerlerde, bu liste tanımlanır.',
      'Unignore' => 'Yoksaymayı geri al',
      'PHP setting "%s" should be set to "-1" to avoid deprecation warnings.' => 'Kullanım dışı bırakma uyarılarını önlemek için PHP "%s" ayarı "-1" olarak ayarlanmalıdır.',
      'Text values that match this regex and are also object names will not be linked.' => 'Bu normal ifadeyle eşleşen ve aynı zamanda nesne adları olan metin değerleri bağlanmayacaktır.',
      '%s Held / %sms' => '%s Tutuldu / %sms',
      'Write access log here.' => 'Erişim günlüğünü buraya yazın.',
    );
  }

}
