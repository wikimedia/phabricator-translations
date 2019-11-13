<?php

final class PhabricatorNotificationTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Okunmamış',
      'Unable to load server status: this is not an admin server!' => 'Sunucu durumu yüklenemiyor: bu bir yönetici sunucu değil!',
      'All Notifications' => 'Tüm Bildirimler',
      'Really mark all notifications as read?' => 'Tüm bildirimleri gerçekten okundu olarak işaretlesin mi?',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'Bildirim sunucusu yapılandırması geçersiz: "yönetici" türünde etkin sunucuları belirtmez. Bildirimler en az bir aktif "yönetici" sunucusu gerektirir.',
      'Setting Up Client' => 'İstemci Ayarlama',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'Bildirim sunucusu yapılandırması geçersiz: "istemci" türünde etkin sunucuları belirtmez. Bildirimler, en az bir aktif "istemci" sunucusu gerektirir.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Tüm okunmamış bildirimler okunmuş olarak işaretlenecektir. Bu işlemi geri alamazsınız.',
      'Unread Notifications' => 'Okunmamış Bildirimler',
      'Unable to post message: this is not an admin server!' => 'Mesaj gönderilemiyor: bu bir yönetici sunucusu değil!',
      'Disconnected' => 'Bağlantı Kesildi',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => 'Artık var olmayan veya artık göremediğiniz nesneler için %s bildirim atıldı.',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'Bildirim sunucusu yapılandırması, tanınmayan türde ("%3$s") geçersiz bir ana bilgisayarı ("%s" dizininde "%1$s") tanımlar. Geçerli türler "%s" veya "%s"\'dir.',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'Bildirim sunucusu yapılandırması geçersiz bir protokolle ("%3$s") geçersiz bir ana bilgisayarı ("%s" dizininde "%1$s") tanımlar. Geçerli protokoller "%s" veya "%s" şeklindedir.',
      'No notifications to mark as read.' => 'Okunmuş olarak bildirilecek bildirim yok.',
      'Notification Server Down' => 'Bildirim Sunucusu Aşağı',
      'Unable to test client on an admin server!' => 'İstemci bir yönetici sunucusunda test edilemiyor!',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'Bildirim sunucusu yapılandırması geçersiz bir ana bilgisayarı ("%2$s" dizininde "%1$s") açıklar. Bu bir "yönetici" servisidir ancak "yol" özelliğine sahiptir. Bu özellik yalnızca "müşteri" hizmetleri için geçerlidir.',
      'Real-Time Updates and Alerts' => 'Gerçek Zamanlı Güncellemeler ve Uyarılar',
      'You can\'t ignore your problems forever, you know.' => 'Sonsuza dek problemlerini görmezden gelemezsin, biliyorsun.',
      'Unable to Connect to Notification Server' => 'Bildirim Sunucusuna Bağlanılamıyor',
      'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator bir bildirim sunucusu kullanacak şekilde yapılandırılmış, ancak bağlanamıyor. Bu sorunu çözmeli veya bildirim sunucusunu devre dışı bırakmalısınız. Yapılandırmanızı iki kez kontrol etmeniz veya aşağıdaki komutu kullanarak sunucuyu yeniden başlatmanız yararlı olabilir.
    %s',
      'Notification server not enabled' => 'Bildirim sunucusu etkin değil',
      'This is a test notification, sent at %s.' => 'Bu, %s olarak gönderilen bir test bildirimidir.',
      '(To start the server, run this command.)
    %s' => '(Sunucuyu başlatmak için bu komutu çalıştırın.)
    %s',
      'You have no unread notifications.' => 'Okunmamış bildirimleriniz yok.',
      'Connecting...' => 'Bağlanıyor...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'HTTP 200 var, ancak beklenen HTTP 501 (WebSocket Güncelleme)!',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'Bildirim sunucusu yapılandırması geçersiz: aynı ana bilgisayarı ve bağlantı noktasını ("%s") birden çok kez açıklar. Her ana bilgisayar ve bağlantı noktası kombinasyonu listede yalnızca bir kez görünmelidir.',
      'Mark All Read' => 'Tümünü Okundu İşaretle',
      'Show only unread notifications.' => 'Sadece okunmamış bildirimleri göster.',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'Bildirim sunucusu yapılandırması geçerli değil: listedeki her girişin bir hizmeti tanımlayan bir sözlük olması gerekir, ancak "%s" dizinindeki değer bir sözlük değildir.',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'Bildirim sunucusu yapılandırmasının geçersiz bir servis özelliği var ("%s" dizininde): %s.',
      'You have no notifications.' => 'Bildirimin yok.',
    );
  }

}
