<?php

final class PhabricatorAphlictTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Bir kullanıcıya bildirim gönderin.',
      'The notification server should not be run as root.' => 'Bildirim sunucusu kök olarak çalıştırılmamalıdır.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'İki sunucu ("%s" ve "%s" dizinlerinde) aynı bağlantı noktasına ("%s") bağlanır. Her sunucunun benzersiz bir bağlantı noktasına bağlanması gerekir.',
      'Failed to %s!' => '%s başarısız oldu!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'HATA: %s PHP işlevi devre dışı. Bu makinede Aphlict\'i çalıştıracak şekilde etkinleştirmeniz gerekir.',
      'Stop the notification server.' => 'Bildirim sunucusunu durdurun.',
      'Configuration file is not properly formatted JSON. %s' => 'Yapılandırma dosyası JSON düzgün biçimlendirilmemiş. %s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => '%3$s içinde `%1$s` veya `%2$s` ikili bulunmadı. Aphlict sunucusunu başlatmak için Node.js\'yi yüklemelisiniz.',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'HATA: \'%s\' PHP uzantısı kurulu değil. Bu makinede Aphlict\'i çalıştırmak için yüklemeniz gerekir.',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'Belirtilen günlük dosyası için "%s" dizini oluşturulamadı ("%s" dizini ile). Bu dizini el ile oluşturmalı veya farklı bir günlük dosyası konumu seçmelisiniz. %s',
      'Configuration file has improper configuration keys at top level. %s' => 'Yapılandırma dosyasında en üst düzeyde yanlış yapılandırma anahtarları var. %s',
      'Aphlict is not running.' => 'Aphlict çalışmıyor.',
      'You must %s first!' => 'İlk önce %s yapmalısınız!',
      'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => 'Belirtilen bir sunucu ("%2$s" bağlantı noktasında "%1$s" dizininde) "%s" için bir değer belirtir, ancak "%s" veya "%s" için değer belirtmez. Sunucular, yalnızca bir SSL anahtarı ve SSL sertifikası sağladığında bir SSL zinciri sağlamalıdır.',
      'Sending %s a SIGKILL.' => 'SIGKILL\'e %s gönderme.',
      'Launching server:' => 'Sunucu başlatılıyor:',
      'Starting Aphlict server in foreground...' => 'Aphlict sunucusu ön planda başlatılıyor...',
      'Server exited!' => 'Sunucudan çıkıldı!',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Bildirim sunucusunu ön planda başlatın ve çok sayıda tanılama bilgisini konsola yazdırın.',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'Belirtilen bir sunucu ("%s" dizininde, "%s" bağlantı noktasında) geçersiz bir türe ("%s") sahip. Geçerli türler şunlardır: yönetici, istemci.',
      'No user with username "%s" exists.' => '"%s" kullanıcı adına sahip kullanıcı yok.',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'Yapılandırma dosyası, "%s" küme eşini bir kereden fazla belirtir ("%s" ve "%s" dizinlerinde). Her eşin benzersiz bir ana bilgisayar ve bağlantı noktası birleşimi olmalıdır.',
      'Show the status of the notification server.' => 'Bildirim sunucusunun durumunu göster.',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'Yapılandırma dosyası herhangi bir sunucu belirtmiyor. Bu hizmet, herhangi bir bağlantı noktasını dinlemezse dış dünya ile etkileşime giremez. En az bir "%s" sunucusu ve en az bir "%s" sunucusu belirtmelisiniz.',
      'Start the notifications server.' => 'Bildirim sunucusunu başlatın.',
      'User to notify.' => 'Bildirilecek kullanıcı.',
      'Stop, then start the notification server.' => 'Durdurun, ardından bildirim sunucusunu başlatın.',
      'Failed to read configuration file. %s' => 'Yapılandırma dosyası okunamadı. %s',
      'Writing logs to: %s' => 'Günlükleri yazma: %s',
      'Specify a user to notify with "--user".' => '"--user" ile bildirimde bulunacak bir kullanıcı belirleyin.',
      'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => 'Belirtilen sunucu ("%s" dizininde, "%s" bağlantı noktasında) "%s" ve "%s" öğelerinden yalnızca birini belirtir. Her sunucu hiçbirini (SSL\'yi devre dışı bırakmak için) veya her ikisini de (etkinleştirmek için) belirtmelidir.',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'Yapılandırma dosyası herhangi bir istemci sunucusu belirtmiyor. Bu hizmet, istemci sunucusu olmadan bildirim gönderemez. "%s" türünde en az bir sunucu belirtmelisiniz.',
      'Message to send.' => 'Gönderilecek mesaj.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'Yapılandırma dosyası herhangi bir yönetim sunucusu belirtmiyor. Bu hizmet mesaj alamayacak. "%s" türünde en az bir sunucu belirtmelisiniz.',
      'Aphlict Server (%s) exited normally.' => 'Aphlict Sunucusu (%s) normal olarak çıkıldı.',
      'Reading configuration from: %s' => 'Yapılandırma okuma kaynağı: %s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'Bildirim sunucusu zaten çalıştığı için başlatılamıyor. Yeniden başlatmak için "%s" kullanın.',
      'Specify a message to send with "--message".' => '"--message" ile gönderilecek bir mesaj belirtin.',
      'Sent notification.' => 'Bildirim gönderildi.',
      'Use a specific configuration file instead of the default configuration.' => 'Varsayılan yapılandırma yerine belirli bir yapılandırma dosyası kullanın.',
      'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => 'Yapılandırma dosyası, geçersiz bir protokol olan "%3$s" ile küme eşini ("%1$s", "%2$s" dizininde) belirtir. Geçerli protokoller "%s" veya "%s".',
      'Aphlict Server started.' => 'Aphlict Sunucusu başladı.',
      'Stopping Aphlict Server (%s)...' => 'Aphlict Sunucusu durduruluyor (%s)...',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Belirtilen PID dosyası için "%s" dizini oluşturulamadı. Bu dizini el ile oluşturmalı veya farklı bir PID dosya konumu seçmelisiniz. %s',
      'Aphlict (%s) is running.' => 'Aphlict (%s) çalışıyor.',
    );
  }

}
