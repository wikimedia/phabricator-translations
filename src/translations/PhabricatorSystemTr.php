<?php

final class PhabricatorSystemTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'An Administrator has placed this server into read-only mode.' => 'Bir yönetici Phabricator\'ı salt okunur moda getirdi.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'Bu sistem yüklü "%s" uzantısına sahip olmadığı için karakter kodlamaları desteklenmiyor. Desteği etkinleştirmek için "%s" yükleyin.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'Bu mod etkin çünkü "%s" yapılandırma seçeneğinde etkin.',
      'Panic!' => 'Panik!',
      'No Writable Database' => 'Yazılabilir Veritabanı Yok',
      'Destroying %s **%s**...
    ' => '%s **%s** yok ediliyor...',
      'This server has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Phabricator sürekli olarak son istekleri işleme koyarken yazılabilir ("master") veritabanına ulaşamadı.',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'Nesne "%s" imha edilemez (%s uygulanamıyor).',
      'No Encoding Support' => 'Kodlama Desteği Yok',
      'No such object "%s" exists!' => '"%s" gibi bir nesne yok!',
      'This server was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Phabricator, bu isteği yerine getirirken yazılabilir ("master") veritabanına bağlanamadı ve otomatik olarak salt okunur moda düşürüldü.',
      'Severed From Master' => 'Ustadan Kesilmiş',
      'Engine: Destruction' => 'Motor: İmha',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Bu istek bir çoğaltma veritabanından sunuldu. Çoğaltma veritabanları ana aygıtın gerisinde kalabilir, bu nedenle son etkinlik kullanıcı arayüzüne yansıtılmayabilir. Bu veri ana veri tabanı geri yüklenirse geri yüklenir, ancak ana veri tabanı bir kül yığınına düşürüldüğünde kaybedilmiş olabilir.',
      'Permanently destroy objects.' => 'Kalıcı olarak nesneleri yok et.',
      'Choose a syntax highlighting to use.' => 'Kullanılacak bir sözdizim vurgulaması seçin.',
      '%d / hour' => '%s / saat',
      'Rate Limiting Actions' => 'Puan Sınırlama İşlemleri',
      'Highlighting' => 'Vurgulama',
      'Unable to Reach Master' => 'Ustaya Ulaşılamıyor',
      'View As' => 'Olarak Görüntüle',
      'Permanently destroyed %s object(s).' => '%s nesneyi kalıcı olarak imha etti.',
      'Choose Encoding' => 'Kodlamayı Seçin',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'Nesnelerin yok edilmesi, ilgili nesnelerin çalışmamasına neden olabilir ve artık bulunmayan nesnelere dağılmış kaynaklar bırakabilir. Çoğu durumda, nesneleri yok etmek yerine devre dışı bırakmak veya arşivlemek çok daha iyidir. Bu risk, depolar, projeler ve kullanıcılar gibi karmaşık veya yüksek oranda birbirine bağlı nesneleri silerken en fazladır.
    Yırtık pürüzlü kenarlar nesneleri yok etmenin beklenen bir sonucudur ve üst kısımdaki Phabricator onları düzeltmenize yardımcı olmaz. Bunun yerine nesneleri devre dışı bırakmanızı veya arşivlemenizi şiddetle öneririz.',
      'IMPORTANT' => 'ÖNEMLİ',
      'Quite Unsettling' => 'Oldukça Rahatsız',
      'Choose a document engine to use.' => 'Kullanılacak belge motoru seçiniz.',
      'Destruction Logs' => 'İmha Günlükleri',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Bu, ciddi bir yanlış yapılandırma veya büyük servis kesintisine işaret ediyor.',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, this server will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Bu, daha ciddi bir başarısızlığın meydana geldiğini de gösterebilir. Bu kesinti kendi başına çözülmezse, Phabricator kalıcı bozulmayı tespit eder ve sorun çözülene kadar salt okunur moda geçer.',
      'Destroying objects...' => 'Nesneleri yok ediyor...',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Bu mod aktiftir, çünkü "%2$s" yapılandırma seçeneğinde hiçbir veritabanında "%1$s" rolü yoktur.',
      'This server will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Phabricator, bağlantıyı periyodik olarak yeniden deneyecek ve hizmet geri yüklendiğinde kurtarılacaktır. Kalıcı hizmet kesintilerinin çoğu nedeni, hizmeti geri yüklemek için idari müdahale gerektirecektir.',
      'Select Character Encoding' => 'Karakter Kodlamasını Seçin',
      'Select Syntax Highlighting' => 'Sözdizim Vurgulamayı seçin',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is %s in read-only mode??!" using your very loudest outside voice.' => 'Salt okunur mod, bir insan yöneticisinin açık eylemiyle etkinleştirildi, böylece sandalyenizi masanızdan uzağa doğru yuvarlayarak ve "Hey! Neden Phabricator salt okunur modda??!" Diye bağırarak hakkında daha fazla bilgi edinebilirsiniz.',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'VERİLER KALICI OLARAK YOK EDİLECEKTİR',
      'Choose Highlighting' => 'Vurgulamayı Seçin',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, this server will recover momentarily.' => 'Sunucu tarafında, kozmik radyasyon veya ürkütücü hayaletler gibi geçici bir ağ anomalisi varsa, bu olabilir. Bu başarısızlığa geçici bir hizmet kesintisi neden olmuşsa, Phabricator geçici olarak iyileşecektir.',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Nesneler kalıcı olarak imha edilecek. Bu işlemi geri almanın veya harici yedeklemeler yapmadıkça bu verileri geri almanın hiçbir yolu yoktur.',
      'Aborted, your objects are safe.' => 'İptal edildi, nesneleriniz güvende.',
      'No Object URI' => 'Nesne URI\'sı Yok',
      'As an Administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'Yönetici olarak, durum bilgilerini %s kontrol panelinden inceleyebilirsiniz. Bu, mevcut durum hakkında daha fazla bilgi sağlayabilir.',
      'Show a log of permanently destroyed objects.' => 'Kalıcı olarak tahrip olmuş nesnelerin günlüğünü göster.',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'Önbellek motoru uzantısı "%s", PHID\'siz nesneyi ("%s" sınıfından) döndürdü.',
      'System' => 'Sistem',
      'You are performing too many actions too quickly.' => 'Çok fazla işlemi çok hızlı yapıyorsunuz.',
      'Choose a text encoding to use.' => 'Kullanılacak bir metin kodlamasını seçin.',
      'These %s object(s) will be destroyed forever:' => 'Bu %s nesne sonsuza kadar imha edilecek:',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'Salt okunur modda varolan bilgileri okuyabilirsiniz, ancak bu mod devre dışı bırakılana kadar nesneleri düzenleyemez veya yeni nesneler oluşturamazsınız.',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Bu mod geçici bakım yapmak, yapılandırmayı test etmek veya kalıcı olarak bir arşivi arşivlemek için kullanılabilir.',
      'This server is currently configured with no writable ("master") database, so it can not write new information anywhere. This server will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Phabricator şu anda yazılabilir ("master") veritabanıyla yapılandırılmamış, bu yüzden herhangi bir yerde yeni bilgiler yazamıyor. Phabricator bir yönetici tarafından yazılabilir bir veritabanı ile yeniden yapılandırılıncaya kadar salt okunur modda çalışır.',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'ÇOĞUNLUKLA NESNELERİ SİLME HER ŞEYDİR',
      'Cache engine extension "%s" did not return a list of linked objects.' => 'Önbellek motoru uzantısı "%s", bağlantılı nesnelerin bir listesini döndürmedi.',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Bu genellikle bir yönetici aktif bir şekilde geçici bir yapılandırma veya dağıtım problemini çözmeye çalışıyorsa oluşur.',
      '%d / minute' => '%s / dakika',
      'Destroy objects without prompting.' => 'Sormadan nesneleri yok et.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'Bu işlem için izin verilen maksimum oran %s. %s oranında işlem yapıyorsunuz.',
      'Are you absolutely certain you want to destroy these %s object(s)?' => 'Bu %s nesne yok etmek istediğinizden kesinlikle emin misiniz?',
      'Administrative Read-Only Mode' => 'Yönetim Salt Okunur Modu',
      '%d / second' => '%s / saniye',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Her ne kadar bu yanlış bir yapılandırma veya işlemsel hatanın sonucu olsa da, bu aynı zamanda bir meteor yakın zamanda bir veri merkezini takılıyorsa ulaştığınız durumdur.',
      'Object "%s" exists, but does not have a URI to redirect to.' => '"%s" nesnesi var, ancak yönlendirilecek bir URI yok.',
      'Specify one or more objects to destroy.' => 'Yok edilecek bir veya daha fazla nesne belirtin.',
      'Choose Engine' => 'Motor Seçin',
    );
  }

}
