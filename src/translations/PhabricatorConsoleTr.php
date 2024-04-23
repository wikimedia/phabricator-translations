<?php

final class PhabricatorConsoleTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => 'Dinleyici Sınıfı',
      'Profiling was not enabled for this page. Use the button above to enable it.' => 'Profil oluşturma bu sayfa için etkinleştirilmedi. Etkinleştirmek için yukarıdaki düğmeyi kullanın.',
      'Internal ID' => 'Dahili Kimlik',
      'Error Log (%d)' => 'Hata Günlüğü (%s)',
      'Debugging console for real-time notifications.' => 'Gerçek zamanlı bildirimler için hata ayıklama konsolu.',
      'Provides detailed PHP profiling information through XHProf.' => 'XHProf aracılığıyla ayrıntılı PHP profil oluşturma bilgileri sağlar.',
      'Analyze Query Plans' => 'Sorgu Planlarını Analiz Edin',
      'Realtime' => 'Gerçek Zaman',
      'Site' => 'Site',
      '+%s ms' => '+%s ms',
      'Calls to External Services' => 'Harici Servislere Çağrılar',
      'Machine' => 'Makine',
      'Reconnect' => 'Tekrar Bağlan',
      'No errors.' => 'Hata yok.',
      'Startup' => 'Başlat',
      'Information about %s and %s.' => '%s ve %s hakkında bilgi.',
      'Timing information about the startup sequence.' => 'Başlangıç sırası hakkında zamanlama bilgileri.',
      'Event Log' => 'Olay Günlüğü',
      'Profile Page' => 'Profil Sayfası',
      'Whole Table' => 'Tüm Tablo',
      'Repaint' => 'Yeniden Boya',
      'Small Table Scan' => 'Küçük Tablo Tarama',
      'Installation Guide' => 'Yükleme Rehberi',
      'Profile Permalink' => 'Profil Kalıcı Bağlantısı',
      'Error Log' => 'Hata Günlüğü',
      'Controller' => 'Kontrolör',
      'TABLE SCAN!' => 'TABLO TARA!',
      'STOPPED' => 'DURDURULDU',
      'Information about services.' => 'Hizmetler hakkında bilgi.',
      'Unknown event: %s' => 'Bilinmeyen etkinlik: %s',
      'Shows errors and warnings.' => 'Hataları ve uyarıları gösterir.',
      'XHProf Profiler' => 'XHProf Profilci',
      'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => '"Xhprof" PHP uzantısı kullanılamıyor. XHProf konsol eklentisini etkinleştirmek için xhprof\'u yükleyin. Talimatları %s bulabilirsiniz.',
      'Replay' => 'Tekrar',
      'Can\'t Analyze' => 'Analiz Edilemiyor',
      'Events' => 'Etkinlikler',
      'Information about events and event listeners.' => 'Phabricator olayları ve olay dinleyicileri hakkında bilgi.',
      'Page Weight' => 'Sayfa Ağırlığı',
      'Hostname' => 'Sunucu Adı',
      'Registered Event Listeners' => 'Kayıtlı Etkinlik Dinleyicileri',
      'No Tables' => 'Tablo Yok',
    );
  }

}
