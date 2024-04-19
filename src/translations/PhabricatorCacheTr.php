<?php

final class PhabricatorCacheTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      '%s is not available; unable to read deflated data!' => '%s mevcut değil; sönük veriler okunamıyor!',
      'APCu' => 'APCu',
      '"%s" Disabled' => '"%s" Devre Dışı Bırakıldı',
      '"%s" Enabled in Production' => '"%s" Üretimde Etkin',
      'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => '"--all" veya "--caches" ile temizlemek için önbellekleri seçin. Kullanılabilir önbellekler: %s.',
      'APC Has Noisy Configuration' => 'APC Gürültülü Yapılandırmaya Sahip',
      'APC' => 'APC',
      'OPcache is not configured properly for development.' => 'OPcache geliştirme için düzgün yapılandırılmamış.',
      'General Cache (TTL)' => 'Genel Önbellek (TTL)',
      'Enabling APC/APCu will improve performance.' => 'APC/APCu\'nun etkinleştirilmesi performansı artıracaktır.',
      'Zend OPcache Not Installed' => 'Zend OPcache Yüklü Değil',
      '"%s" Enabled' => '"%s" Etkin',
      'Markup Cache' => 'İşaretleme Önbelleği',
      'General Cache' => 'Genel Önbellek',
      'Unknown cache format.' => 'Bilinmeyen önbellek biçimi.',
      'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'İki nesne ("%s" ve "%s" sınıfları) aynı harita değerini ("%s") oluşturur. Her nesne benzersiz bir harita değeri oluşturmalıdır.',
      'OPcache Not Configured for Production' => 'Üretim için OPcache Yapılandırılmadı',
      'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'PHP "Zend OPcache" uzantısı yüklü, ancak PHP yapılandırmanızda etkin değil. Bunu etkinleştirmek, Phabricator performansını önemli ölçüde artıracaktır. Uzantıyı etkinleştirmek için "%s" ayarını düzenleyin.',
      'Installing the "Zend OPcache" extension will dramatically improve performance.' => '"Zend OPcache" uzantısının yüklenmesi performansı önemli ölçüde artıracaktır.',
      'Only strings may be written to the DB cache!' => 'DB önbelleğine yalnızca dizeler yazılabilir!',
      'Purge all caches.' => 'Tüm önbellekleri temizleyin.',
      'Specify either "--all" or "--caches", not both.' => 'İkisini birden değil, "--all" veya "--caches" değerlerini belirtin.',
      'APC/APCu Extensions Not Enabled' => 'APC/APCu Uzantıları Etkin Değil',
      'PHP Extension "APCu" Not Installed' => 'PHP Uzantısı "APCu" Yüklü Değil',
      'Zend OPcache Not Enabled' => 'Zend OPcache Etkin Değil',
      'Noisy APC' => 'Gürültülü APC',
      'Drop data from readthrough caches.' => 'Okuma önbelleklerinden veri bırakın.',
      'Cache purger "%s" is not recognized. Available caches are: %s.' => '"%s" önbellek temizleyici tanınmıyor. Kullanılabilir önbellekler: %s.',
      'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => '"APCu" PHP uzantısının yüklenmesi performansı artıracaktır. Bu uzantı şiddetle önerilir. Onsuz, Phabricator çok verimsiz bir disk tabanlı önbelleğe güvenmek zorundadır.',
      'OPcache Disabled' => 'OPcache Devre Dışı',
      'APC/APCu Disabled' => 'APC/APCu Devre Dışı',
      '"%s" is currently enabled, but should probably be disabled.' => '"%s" şu anda etkin, ancak büyük olasılıkla devre dışı bırakılmalıdır.',
      'APC User Cache' => 'APC Kullanıcı Önbelleği',
      'The APC or APCu PHP extensions are installed, but not enabled in your PHP configuration. Enabling these extensions will improve performance. Edit the "%s" setting to enable these extensions.' => 'APC veya APCu PHP uzantıları yüklü, ancak PHP yapılandırmanızda etkin değil. Bu uzantıların etkinleştirilmesi Phabricator performansını artıracaktır. Bu uzantıları etkinleştirmek için "%s" ayarını düzenleyin.',
      'OPcache Config' => 'OPcache Yapılandırması',
      'Adjust APC settings to quiet unnecessary errors.' => 'APC ayarlarını gereksiz hatalara karşı ayarlayın.',
      'OPcache is not configured ideally for production.' => 'OPcache üretim için ideal olarak yapılandırılmamış.',
      '"%s" is currently disabled, but should probably be enabled.' => '"%s" şu anda devre dışı, ancak muhtemelen etkinleştirilmelidir.',
      'OPcache' => 'OPcache',
      'Serializing cache can not write objects (for key "%s")!' => 'Önbelleğin seri hale getirilmesi nesneleri yazamaz ("%s" anahtarı için)!',
      'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'Geliştirme sırasında, OPcache her zaman kodu yeniden yükleyecek şekilde yapılandırılmalıdır, böylece değişiklik yaptıktan sonra hiçbir şeyin yeniden başlatılması gerekmez. Bunu yapmak için "%s" işlevini etkinleştirin ve "%s" değerini 0 olarak ayarlayın.',
      'The "%s" setting is currently enabled in your PHP configuration. In production mode, "%s" should be disabled. This will improve performance slightly.' => '"%s" ayarı şu anda PHP yapılandırmanızda etkin. Üretim modunda "%s" devre dışı bırakılmalıdır. Bu performansı biraz artıracaktır.',
      'Purging "%s" cache...' => '"%s" önbellek temizleniyor...',
      'Installing the PHP extension \'APC\' (Alternative PHP Cache) will dramatically improve performance. Note that APC versions 3.1.14 and 3.1.15 are broken; 3.1.13 is recommended instead.' => '\'APC\' (Alternatif PHP Önbellek) PHP uzantısı yüklenmesi performansı önemli ölçüde artıracaktır. APC 3.1.14 ve 3.1.15 sürümlerinin bozuk olduğunu unutmayın; Bunun yerine 3.1.13 önerilir.',
      'Purge a specific set of caches.' => 'Belirli bir önbellek kümesini temizleyin.',
      'When using "--caches", you must select at least one valid cache to purge.' => '"--caches" kullanırken, temizlemek için en az bir geçerli önbellek seçmelisiniz.',
      'Some versions of APC may emit unnecessary errors into the error log under the current APC settings. To resolve this, enable "%s" and disable "%s" in your PHP configuration.' => 'Bazı APC sürümleri, geçerli APC ayarları altındaki hata günlüğüne gereksiz hatalar gönderebilir. Bu sorunu çözmek için PHP yapılandırmanızda "%s" etkinleştirin ve "%s" devre dışı bırakın.',
      'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'Üretimde, OPcache hiçbir zaman kodu yeniden doğrulamayacak şekilde yapılandırılmalıdır. Bu performansı biraz artıracaktır. Bunu yapmak için, PHP yapılandırmanızda "%s" devre dışı bırakın.',
      '"%s" Disabled in Development' => '"%s" Geliştirmede Devre Dışı Bırakıldı',
      'OPcache Not Configured for Development' => 'OPcache Geliştirme için Yapılandırılmadı',
      'Failed to inflate data!' => 'Veri şişirilemedi!',
      'Zend OPcache' => 'Zend OPcache',
      'Enabling OPcache will dramatically improve performance.' => 'OPcache\'nin etkinleştirilmesi performansı önemli ölçüde artıracaktır.',
      'PHP Extension \'APC\' Not Installed' => 'PHP Uzantısı \'APC\' Yüklü Değil',
      'The "%s" setting is currently disabled in your PHP configuration, but this software is running in development mode. This option should normally be enabled in development so you do not need to restart anything after making changes to the code.' => 'PHP yapılandırmanızda "%s" ayarı şu anda devre dışı, ancak Phabricator geliştirme modunda çalışıyor. Kodda değişiklik yaptıktan sonra hiçbir şeyi yeniden başlatmanız gerekmediğinden, bu seçenek geliştirme sırasında normal olarak etkinleştirilmelidir.',
    );
  }

}
