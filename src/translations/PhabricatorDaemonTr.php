<?php

final class PhabricatorDaemonTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'There are no running daemons to reload.' => 'Yeniden yüklenecek çalışan daemon yok.',
      'Temporary Failures' => 'Geçici Arızalar',
      'Show only local daemons.' => 'Yalnızca yerel artalanları göster.',
      'Clock' => 'Saat',
      'Leased' => 'Kiralanan',
      'Unable to stop processes running without PID files. Try running this command again with sudo.' => 'PID dosyaları olmadan çalışan işlemler durdurulamıyor. Bu komutu sudo ile tekrar çalıştırmayı deneyin.',
      'Starting daemons as %s' => '%s olarak daemon başlatılıyor',
      'Gracefully restart daemon processes in-place to pick up changes to source. This will not disrupt running jobs. This is an advanced workflow; most installs should use __%s__.' => 'Kaynaktaki değişiklikleri almak için daemon işlemlerini yerinde yeniden başlatın. Bu, çalışan işleri aksatmaz. Bu gelişmiş bir iş akışıdır; çoğu kurulum __ %s__ kullanmalıdır.',
      'Retries' => 'Yeniden denemeler',
      'Shutting Down' => 'Kapatılıyor',
      'This daemon has not reported a status update recently (within %s). It may have exited abruptly. After %s, it will be presumed dead.' => 'Bu arka plan programı son zamanlarda bir durum güncellemesi bildirmedi (%s içinde). Aniden çıkmış olabilir. %s sonra ölü olduğu varsayılacak.',
      'This daemon has been lost or exited uncleanly, and is presumed dead.' => 'Bu arka plan programı kirli bir şekilde kayboldu veya çıkıldı ve ölü olduğu varsayılıyor.',
      'Terminating process %d...' => 'İşlem %s sona erdiriliyor ...',
      'Running as' => 'Olarak çalışıyor',
      'No daemons match \'%s\'! Use \'%s\' for a list of available daemons.' => '\'%s\' ile eşleşen daemon yok! Kullanılabilir daemon listesi için \'%s\' kullanın.',
      'Overseer' => 'Denetmen',
      'No such daemon "%s"!' => 'Böyle bir daemon "%s" yok!',
      'Archived Tasks' => 'Arşivlenmiş Görevler',
      'No tasks have completed in the last 15 minutes.' => 'Son 15 dakika içinde hiçbir görev tamamlanmadı.',
      'Task Class' => 'Görev Sınıfı',
      'Queued Tasks' => 'Kuyruktaki Görevler',
      'This daemon is shutting down.' => 'Bu arka plan programı kapanıyor.',
      'Leased Tasks' => 'Kiralanan Görevler',
      'Enable, disable, or show the lock log.' => 'Kilit günlüğünü etkinleştir, devre dışı bırak veya göster.',
      'All Daemons' => 'Tüm Daemonlar',
      'This daemon encountered an error recently and is waiting a moment to restart.' => 'Bu arka plan programı son zamanlarda bir hatayla karşılaştı ve yeniden başlatılması için bir dakika bekliyor.',
      'Daemon %d %s [%s] %s' => 'Daemon %s %s [%s] %s',
      'There are processes running that look like Phabricator daemons but have no corresponding PID files:
    %s
    Stop these processes by re-running this command with the %s parameter.' => 'Phabricator artalan süreçlerine benzeyen ancak karşılık gelen PID dosyaları olmayan çalışan işlemler vardır:
    %s
    Bu komutu %s parametresiyle yeniden çalıştırarak bu işlemleri durdurun.',
      'There are no upcoming event triggers.' => 'Yaklaşan etkinlik tetikleyicisi yok.',
      'You must specify which daemon to launch.' => 'Hangi arka plan programının başlatılacağını belirtmelisiniz.',
      'Run the daemon as the current user instead of the configured %s' => 'Arka plan programı yapılandırılmış %s yerine geçerli kullanıcı olarak çalıştırın',
      'There are no running Phabricator daemons.' => 'Çalışan Phabricator arka plan programı yoktur.',
      'Enabling the lock log.' => 'Kilit günlüğünü etkinleştirme.',
      'Reloading process %d...' => 'İşlem %s yeniden yükleniyor...',
      'Lock Logs' => 'Kilit Günlükleri',
      'Ignore running processes that look like daemons but do not have corresponding PID files.' => 'Arka plan gibi görünen ancak karşılık gelen PID dosyalarına sahip olmayan çalışan işlemleri yok sayın.',
      'Not Leased' => 'Kiralanmadı',
      'This daemon is shutting down gracefully.' => 'Bu arka plan programı nazikçe kapanıyor.',
      'You can not both "--enable" or "--disable" with search parameters like "--name".' => '"--name" gibi arama parametreleriyle hem "--enable" hem de "--disable" kullanamazsınız.',
      'Stop all running daemons, or specific daemons identified by PIDs. Use **%s** to find PIDs.' => 'Çalışan tüm arka plan programları veya PID\'ler tarafından tanımlanan belirli cinleri durdurun. PID\'leri bulmak için **%s** kullanın.',
      'Task Does Not Exist' => 'Görev Var Değil',
      'Failures' => 'Hatalar',
      'Active Daemons' => 'Etkin Arka Plan Programları',
      'Unknown task status!' => 'Bilinmeyen görev durumu!',
      'You can not specify conflicting options %s and %s together.' => 'Birbiriyle çakışan %s ve %s seçeneklerini belirtemezsiniz.',
      'Start a specific __daemon__, or __n__ copies of a specific __daemon__.' => 'Belirli bir __arka plan programı__ veya belirli bir __arka plan programın__ __n__ kopyasını başlatın.',
      'Show status of running daemons.' => 'Çalışan arka plan programı durumunu göster.',
      'Daemon' => 'Arka plan programı',
      'Daemon Logs' => 'Arka Plan Programı Günlükleri',
      'Not Completed' => 'Tamamlanmadı',
      'Exited' => 'Çıktı',
      'Show a list of available daemons.' => 'Kullanılabilir arka plan programları bir listesini göster.',
      'Start daemons even if daemons are already running.' => 'Arka plan zaten çalışıyor olsa da arka plan programı başlatın.',
      'This task may have recently been garbage collected.' => 'Bu görev yakın zamanda çöp toplanmış olabilir.',
      'No matching lock logs.' => 'Eşleşen kilit günlüğü yok.',
      'Grace period for daemons to attempt a clean shutdown, in seconds. Defaults to __15__ seconds.' => 'Cömertlerin saniyeler içinde temiz bir kapanma girişiminde bulunmaları için ek süre. Varsayılan değer __15__ saniyedir.',
      'Start the standard configured collection of Phabricator daemons. This is appropriate for most installs. Use **%s** to customize which daemons are launched.' => 'Standart yapılandırılmış Phabricator artalan koleksiyonunu başlatın. Bu çoğu kurulum için uygundur. Hangi cinlerin başlatılacağını özelleştirmek için **%s** kullanın.',
      'Daemon Class' => 'Arka Plan Programı Sınıfı',
      'No daemons to reload.' => 'Yeniden yüklenecek arka plan programı yok.',
      'Bulk Job %d' => 'Toplu İş %s',
      'Waiting For Confirmation' => 'Onay Bekliyor',
      'Seen' => 'Görüldü',
      'This daemon is running normally and reported a status update recently (within %s). The process is currently waiting to restart, either because it is hibernating or because it encountered an error.' => 'Bu arka plan programı normal çalışıyor ve son zamanlarda bir durum güncellemesi bildirdi (%s dahilinde). İşlem şu anda hazırda bekletme modunda olduğu veya bir hatayla karşılaştığı için yeniden başlatılmayı bekliyor.',
      'Freed %s task lease(s).' => '%s görev kiralaması serbest bırakıldı.',
      'Print the logs for all daemons, or some daemon(s) identified by ID. You can get the ID for a daemon from the Daemon Console in the web interface.' => 'Tüm arka plan programları veya kimlikle tanımlanan bazı arka plan programlarının günlüklerini yazdırın. Web arabirimindeki Daemon Console\'dan bir arka plan programı kimliği alabilirsiniz.',
      'Lease Expires' => 'Kira Süresi Doluyor',
      'This daemon is running.' => 'Bu arka plan programı çalışıyor.',
      'This daemon has not reported its status recently. It may have exited uncleanly.' => 'Bu arka plan programı son zamanlarda durumunu bildirmedi. Kirli çıkmış olabilir.',
      'Maximum pool size.' => 'Maksimum havuz boyutu.',
      'Unknown status "%s"!' => 'Bilinmeyen durum "%s"!',
      'This job is waiting for tasks to be queued.' => 'Bu iş, görevlerin sıraya alınmasını bekliyor.',
      'ERROR: The PHP function %s is disabled. You must enable it to run daemons on this machine.
    ' => 'HATA: %s PHP işlevi devre dışı. Bu makinede arka plan programları çalıştırmak için etkinleştirmeniz gerekir.',
      'Lease Status' => 'Kira Durumu',
      'Show logs for daemon(s) with given ID(s).' => 'Verilen kimliğe sahip arka plan programı günlüklerini göster.',
      'Specify a proportion of machine memory which must be free before autoscale pools will grow. For example, a value of 0.25 means that pools will not grow unless the machine has at least 25%%%% of its RAM free.' => 'Otomatik ölçeklendirme havuzları büyümeden önce boş olması gereken bir makine belleği oranı belirtin. Örneğin, 0.25 değeri, makine RAM\'inin en az %%25\'ine sahip olmadığı sürece havuzların büyümeyeceği anlamına gelir.',
      'Review logs for a specific lock.' => 'Belirli bir kilit için günlükleri inceleyin.',
      'By default, **%s** will free all task leases held by the daemons. With this flag, this step will be skipped.' => 'Varsayılan olarak, ** %s **, arka plan programı tarafından yapılan tüm görev kiralarını serbest bırakacaktır. Bu bayrakla bu adım atlanacaktır.',
      'Killing process %d...' => 'İşlem %s öldürülüyor...',
      'Recently Completed Tasks (Last 15m)' => 'Son Tamamlanan Görevler (Son 15 dk)',
      'Maximum Retries' => 'Maksimum Yeniden Deneme',
      'Task %d' => 'Görev %s',
      'Next In Queue' => 'Sıradaki Sonraki',
      'Disabling the lock log.' => 'Kilit günlüğünü devre dışı bırakıyor.',
      'Retries Forever' => 'Sonsuza Dek Yeniden Dener',
      'Exiting' => 'Çıkma',
      'Held' => 'Kavradı',
      'Argv' => 'Argv',
      'You must launch at least one daemon.' => 'En az bir arka plan programı başlatmalısınız.',
      'Lock' => 'Kilitle',
      'Enable the lock log.' => 'Kilit günlüğünü etkinleştirin.',
      'Lease Expired' => 'Kira Süresi Dolmuş',
      'Manage Bulk Jobs' => 'Toplu İşleri Yönet',
      'Freeing active task leases...' => 'Aktif görev kiraları serbest bırakılıyor...',
      'Log' => 'Günlük',
      'Start work on this bulk job?' => 'Bu toplu iş üzerinde çalışmaya başlamak ister misiniz?',
      'Lock log is already enabled.' => 'Kilit günlüğü zaten etkin.',
      'Interrupting process %d...' => 'İşlem %s durduruluyor...',
      'Disable the lock log.' => 'Kilit günlüğünü devre dışı bırakın.',
      'View Full Logs' => 'Tüm Günlükleri Görüntüle',
      'Lease Owner' => 'Kira Sahibinin',
      '%s requires the directory \'%s\' to exist, but it does not exist and could not be created. Create this directory or update \'%s\' / \'%s\' in your configuration to point to an existing directory.' => '%s, \'%s\' dizininin var olmasını gerektiriyor, ancak mevcut değil ve oluşturulamadı. Bu dizini oluşturun veya mevcut bir dizini işaret edecek şekilde yapılandırmanızda \'%s\' / \'%s\' güncelleyin.',
      'Average Queue Time' => 'Ortalama Kuyruk Süresi',
      'This job is running.' => 'Bu iş devam ediyor.',
      'Show a specific number of log messages (default 100).' => 'Belirli sayıda günlük mesajı göster (varsayılan 100).',
      'Start Work' => 'İşe Başla',
      'Daemons in library __%s__:' => 'Kütüphanede __%s__ arka plan programı:',
      'phd start: Unable to start daemons because daemons are already running.
    You can view running daemons with \'%s\'.
    You can stop running daemons with \'%s\'.
    You can use \'%s\' to stop all daemons before starting new daemons.
    You can force daemons to start anyway with %s.' => 'phd start: arka plan programı zaten çalıştığı için arka plan programı başlatılamıyor.
    Çalışan arka plan programı \'%s\' ile görüntüleyebilirsiniz.
    \'%s\' ile arka plan programı çalıştırmayı durdurabilirsiniz.
    Yeni armağanlara başlamadan önce tüm armağanları durdurmak için \'%s\' kullanabilirsiniz.
    Arka plan programı yine de %s ile başlamaya zorlayabilirsiniz.',
      'You can not both "--enable" and "--disable" the lock log.' => 'Kilit günlüğünü hem "--enable" hem de "--disable" yapamazsınız.',
      'Dead' => 'Ölü',
      'No tasks are leased by workers.' => 'İşçiler tarafından hiçbir görev kiralanmaz.',
      'PPID' => 'PPID',
      '%s s' => '%s s',
      'This daemon exited normally and is no longer running.' => 'Bu arka plan programı normal olarak çıkıldı ve artık yayınlanmıyor.',
      '(Pool: %s)' => '(Havuz: %s)',
      'No Such Task' => 'Böyle Görev Yok',
      'No daemons to kill.' => 'Öldürecek arka plan program yok.',
      '%s exited with a zero exit code, but emitted output consistent with failure under OSX.' => '%s sıfır çıkış kodundan çıkmış, ancak OSX kapsamındaki başarısızlıkla tutarlı çıktı verilmiş.',
      'Specify a daemon unambiguously. Multiple daemons match \'%s\': %s.' => 'Açıkça bir arka plan programı belirtin. Birden fazla arka plan \'%s\' ile eşleşiyor: %s.',
      'Lock log is already disabled.' => 'Kilit günlüğü zaten devre dışı.',
      'This daemon did not report a status update for %s. It is presumed dead. Usually, this indicates that the daemon was killed or otherwise exited abruptly with an error. You may need to restart it.' => 'Bu arka plan programı %s bir durum güncellemesi bildirmedi. Ölü olduğu varsayılır. Genellikle, bu arka plan programı bir hatayla aniden öldürüldüğünü veya başka bir şekilde çıkıldığını gösterir. Yeniden başlatmanız gerekebilir.',
      'Process %d exited.' => '%s işleminden çıkıldı.',
      'This daemon is running normally and reported a status update recently (within %s).' => 'Bu arka plan programı normal çalışıyor ve son zamanlarda bir durum güncellemesi bildirdi (%s dahilinde).',
      'Average Duration' => 'Ortalama Süre',
      'Daemons are configured to run as user "%s" in configuration option `%s`, but the current user is "%s" and `phd` was unable to switch to the correct user with `sudo`. Command output:
    %s' => 'Arka plan programları "%2$s" yapılandırma seçeneğinde "%1$s" kullanıcısı olarak çalışacak şekilde yapılandırıldı, ancak geçerli kullanıcı "%s" ve `phd` `sudo` ile doğru kullanıcıya geçemedi. Komut çıkışı:
    %s',
      'No log records exist for any daemons.' => 'Herhangi bir arka plan programı için günlük kaydı yok.',
      'View Task' => 'Görevi Görüntüle',
      'Daemon Processes' => 'Arka Plan Programı Süreçleri',
      'PID "%d" is not a known Phabricator daemon PID.' => 'PID "%s", bilinen bir Phabricator arka plan programı PID\'si değildir.',
      'Not touching active task queue leases.' => 'Etkin görev kuyruğuna dokunmama kiraları.',
      'Failure Count' => 'Arıza Sayısı',
      'Arguments' => 'Argümanlar',
      'Queue Utilization (Approximate)' => 'Kuyruk Kullanımı (Yaklaşık)',
      'Last' => 'Son',
      'Upcoming Triggers' => 'Yaklaşan Tetikleyiciler',
      'You must specify which daemon to debug.' => 'Arka plan programının hatalarını ayıklayacağınızı belirtmelisiniz.',
      'Launching daemons (in debug mode):' => 'Arka plan programı başlatılıyor (hata ayıklama modunda):',
      'This daemon exited cleanly.' => 'Bu arka plan program temiz bir şekilde çıktı.',
      'Bulk Jobs' => 'Toplu İşler',
      'Stop, then start the standard daemon loadout.' => 'Durdur, sonra standart arka plan programı yüklemesini başlatın.',
      'This job is complete.' => 'Bu iş tamamlandı',
      'Manage Phabricator Daemons' => 'Phabricator Arka Plan Programını Yönetin',
      'PID' => 'PID',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run daemons on this machine.
    ' => 'HATA: \'%s\' PHP uzantısı kurulu değil. Bu makinede arka plan programı çalıştırmak için yüklemeniz gerekir.',
      'Confirm Bulk Job' => 'Toplu İşi Onayla',
      'Daemon Log' => 'Arka Plan Programı Günlüğü',
      'Launching daemons:' => 'Arka plan programı başlatıyor:',
      'This job is waiting for confirmation before work begins.' => 'Bu iş, işe başlamadan önce onay bekliyor.',
      'Retries After' => 'Sonra Yeniden Dener',
      'Start __daemon__ in the foreground and print large volumes of diagnostic information to the console.' => '__Arka plan programı__ ön planda başlatın ve konsola büyük miktarda tanılama bilgisi yazdırın.',
      'Task %d: %s' => 'Görev %s: %s',
      'You are trying to run a daemon as a nonstandard user, and `%s` was not able to `%s` to the correct user. 
    Phabricator is configured to run daemons as "%s", but the current user is "%s". 
    Use `%s` to run as a different user, pass `%s` to ignore this warning, or edit `%s` to change the configuration.' => 'Standart olmayan bir kullanıcı olarak bir arka plan programı çalıştırmaya çalışıyorsunuz ve `%s`, doğru kullanıcıya `%s` alamadı.
    Phabricator, arka plan programları "%s" olarak çalıştıracak şekilde yapılandırıldı, ancak geçerli kullanıcı "%s".
    Farklı bir kullanıcı olarak çalıştırmak için `%s` kullanın, bu uyarıyı yoksaymak için `%s` iletin veya yapılandırmayı değiştirmek için `%s` düzenleyin.',
      'No More Retries' => 'Başka Deneme Yok',
      'No log record exists for a daemon with ID "%s".' => '"%s" kimliğine sahip bir arka plan programı için günlük kaydı yok.',
      '<DEAD> %s' => '<ÖLÜ> %s',
      'Task %d Missing' => '%s Görevi Eksik',
      'Task queue is empty.' => 'Görev kuyruğu boş.',
      '%s ago (%s)' => '%s önce (%s)',
      'Daemon %s' => 'Arka plan programı %s',
      'Also stop running processes that look like daemons but do not have corresponding PID files.' => 'Ayrıca, arka plan programı benzeyen ancak karşılık gelen PID dosyaları olmayan işlemleri çalıştırmayı durdurun.',
      'PID \'%s\' is not a valid PID.' => 'PID \'%s\' geçerli bir PID değil.',
      'Started' => 'Başladı',
      'Daemon Details' => 'Arka Plan Programı Ayrıntıları',
      '(Logs will appear in "%s".)' => '(Günlükler "%s" içinde görünür.)',
      'Restart daemons to apply changes.' => 'Değişiklikleri uygulamak için arka plan pencerelerini yeniden başlatın.',
    );
  }

}
