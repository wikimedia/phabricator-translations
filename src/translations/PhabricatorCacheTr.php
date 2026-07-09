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
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => '"--all" veya "--caches" ile temizlemek için önbellekleri seçin. Kullanılabilir önbellekler: %s.',
  'APCu Disabled' => 'APCu Devre Dışı Bırakıldı',
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'APCu PHP uzantısı yüklü, ancak PHP yapılandırmanızda etkin değil. Bu uzantıyı etkinleştirmek performansı artıracaktır. Bu uzantıyı etkinleştirmek için "%s" ayarını düzenleyin.',
  'OPcache is not configured properly for development.' => 'OPcache geliştirme için düzgün yapılandırılmamış.',
  'General Cache (TTL)' => 'Genel Önbellek (TTL)',
  'Zend OPcache Not Installed' => 'Zend OPcache Yüklü Değil',
  'Markup Cache' => 'İşaretleme Önbelleği',
  'General Cache' => 'Genel Önbellek',
  'Unknown cache format.' => 'Bilinmeyen önbellek biçimi.',
  'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'İki nesne ("%s" ve "%s" sınıfları) aynı harita değerini ("%s") oluşturur. Her nesne benzersiz bir harita değeri oluşturmalıdır.',
  'OPcache Not Configured for Production' => 'Üretim için OPcache Yapılandırılmadı',
  'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'PHP "Zend OPcache" uzantısı yüklü, ancak PHP yapılandırmanızda etkin değil. Bunu etkinleştirmek, performansını önemli ölçüde artıracaktır. Uzantıyı etkinleştirmek için "%s" ayarını düzenleyin.',
  'Installing the "Zend OPcache" extension will dramatically improve performance.' => '"Zend OPcache" uzantısının yüklenmesi performansı önemli ölçüde artıracaktır.',
  'Only strings may be written to the DB cache!' => 'DB önbelleğine yalnızca dizeler yazılabilir!',
  'Purge all caches.' => 'Tüm önbellekleri temizleyin.',
  'Specify either "--all" or "--caches", not both.' => 'İkisini birden değil, "--all" veya "--caches" değerlerini belirtin.',
  'PHP Extension "APCu" Not Installed' => 'PHP Uzantısı "APCu" Yüklü Değil',
  'Zend OPcache Not Enabled' => 'Zend OPcache Etkin Değil',
  'Drop data from readthrough caches.' => 'Okuma önbelleklerinden veri bırakın.',
  'Cache purger "%s" is not recognized. Available caches are: %s.' => '"%s" önbellek temizleyici tanınmıyor. Kullanılabilir önbellekler: %s.',
  'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => '"APCu" PHP uzantısının yüklenmesi performansı artıracaktır. Bu uzantı şiddetle önerilir. Bu olmadan, bu yazılım çok verimsiz bir disk tabanlı önbelleğe güvenmek zorunda kalır.',
  'OPcache Disabled' => 'OPcache Devre Dışı',
  'APCu Extension Not Enabled' => 'APCu Uzantısı Etkin Değil',
  'OPcache Config' => 'OPcache Yapılandırması',
  'OPcache is not configured ideally for production.' => 'OPcache üretim için ideal olarak yapılandırılmamış.',
  'OPcache' => 'OPcache',
  'Serializing cache can not write objects (for key "%s")!' => 'Önbelleğin seri hale getirilmesi nesneleri yazamaz ("%s" anahtarı için)!',
  'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'Geliştirme sırasında, OPcache her zaman kodu yeniden yükleyecek şekilde yapılandırılmalıdır, böylece değişiklik yaptıktan sonra hiçbir şeyin yeniden başlatılması gerekmez. Bunu yapmak için "%s" işlevini etkinleştirin ve "%s" değerini 0 olarak ayarlayın.',
  'Purging "%s" cache...' => '"%s" önbellek temizleniyor...',
  'Purge a specific set of caches.' => 'Belirli bir önbellek kümesini temizleyin.',
  'When using "--caches", you must select at least one valid cache to purge.' => '"--caches" kullanırken, temizlemek için en az bir geçerli önbellek seçmelisiniz.',
  'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'Üretimde, OPcache hiçbir zaman kodu yeniden doğrulamayacak şekilde yapılandırılmalıdır. Bu performansı biraz artıracaktır. Bunu yapmak için, PHP yapılandırmanızda "%s" devre dışı bırakın.',
  'OPcache Not Configured for Development' => 'OPcache Geliştirme için Yapılandırılmadı',
  'Failed to inflate data!' => 'Veri şişirilemedi!',
  'Zend OPcache' => 'Zend OPcache',
  'Enabling OPcache will dramatically improve performance.' => 'OPcache\'nin etkinleştirilmesi performansı önemli ölçüde artıracaktır.',
  'Enabling APCu will improve performance.' => 'APCu\'nun etkinleştirilmesi performansı artıracaktır.',
);
  }

}
