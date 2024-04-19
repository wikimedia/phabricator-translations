<?php

final class PhabricatorDrydockTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'All Operations' => 'Tüm İşlemler',
      'Repository Operation %d' => 'Depo Çalışması %s',
      'Failed to acquire slot locks: %s.' => 'Slot kilitleri alınamadı: %s.',
      'Authorized Object' => 'Yetkili Nesne',
      'Resource' => 'Kaynak',
      'Lease has unknown status "%s".' => 'Kira bilinmeyen bir durumda "%s".',
      'Show Details' => 'Ayrıntıları Göster',
      'This change could not be fetched from the remote.' => 'Bu değişiklik uzaktan kumandadan alınamadı.',
      'Resource "%s" is not releasable.' => '"%s" kaynağı serbest bırakılamaz.',
      'Search engine has no blueprint, resource, lease, or operation.' => 'Arama motorunun planı, kaynağı, kiralaması veya çalışması yoktur.',
      'Not Acquired' => 'Kazanılmadı',
      'Lease "%s" is not releasable.' => 'Kiralama "%s" yayınlayamaz.',
      'Scheduled release of resource "%s".' => '"%s" kaynağının zamanlanmış açıklaması.',
      'This operation has already been dismissed, and can not be dismissed any further.' => 'Bu işlem zaten reddedildi ve daha fazla reddedilemez.',
      'Lease %d' => '%s Kirala',
      'Blueprint' => 'Plan',
      'Staging Area Skipped' => 'Aşama Alanı Atlandı',
      'Committing this change failed. It may already have been merged.' => 'Bu değişikliğin gerçekleştirilmesi başarısız oldu. Çoktan birleştirilmiş olabilir.',
      'Drydock Blueprints' => 'Drydock Planları',
      'Release a lease.' => 'Bir kira yayımla.',
      'The PHID of the object that authorized this lease.' => 'Bu kiralamayı onaylayan nesnenin PHID\'si.',
      'Set lease expiration time.' => 'Kira sona erme süresini ayarlayın.',
      'Active Authorizations' => 'Aktif Yetkiler',
      'Allows Drydock to lease existing hosts defined in an Almanac service pool.' => 'Drydock\'un bir Almanak servis deposunda tanımlanmış mevcut konakçıları kiralamasına izin verir.',
      'Drydock Console' => 'Drydock Konsolu',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without acquiring a lease.' => 'Plan "%s" ("%s" tipinde) uygun şekilde uygulanmadı: "%s"\'den kira kontratı almadan geri döndü.',
      'Type of blueprint.' => 'Planın türü.',
      '%s enabled this blueprint.' => '%s bu planı etkinleştirdi',
      'Waiting to land revision into %s on %s...' => '%s\'den %s\'ye revize edilmeyi bekleniyor...',
      'Resource type.' => 'Kaynak türü.',
      'No blueprints found.' => 'Plan bulunamadı.',
      'Trying to allocate a resource with no generated PHID. Use "%s" to create new resource templates.' => 'Oluşturulan PHID olmayan bir kaynak tahsis etmeye çalışıyor. Yeni kaynak şablonları oluşturmak için "%s" kullanın.',
      'Edit Blueprint' => 'Planı Düzenle',
      'Disable Blueprint' => 'Planı Devre Dışı Bırak',
      'Blueprint Type' => 'Plan Türü',
      'Logs' => 'Günlükler',
      'Specify one or more resource IDs to update with "%s".' => '"%s" ile güncellenecek bir veya daha fazla kaynak kimliği belirtin.',
      'Show Only Disabled Blueprints' => 'Yalnızca Engelli Planları Göster',
      'Retrieve information about Drydock resources.' => 'Drydock kaynakları hakkında bilgi alın.',
      'Type a resource name...' => 'Bir kaynak adı yazın...',
      'Hide Details' => 'Detayları Gizle',
      'Drydock Authorization' => 'Drydock Yetkilendirme',
      'Resource %d: %s' => 'Kaynak %s: %s',
      'This lease does not list any usable blueprints.' => 'Bu kiralama, kullanılabilir planları listelemez.',
      'Lease activation failed: [%s] %s' => 'Kira etkinleştirme başarısız oldu: [%s] %s',
      'Resource %d' => 'Kaynak %s',
      'When this diff was generated, the repository was not configured with a staging area, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Bu fark üretildiğinde, depo bir evreleme alanı ile yapılandırılmamıştır, bu yüzden değişiklik evrelemeye itilmemiştir. Değişiklikler web\'den inmeden önce evrelemeye itilmelidir.',
      'This revision has been abandoned. Only accepted revisions may land.' => 'Bu revizyon terk edildi. Sadece kabul edilen revizyonlar yapılabilir.',
      'Retrieve information about Drydock blueprints.' => 'Drydock planları hakkında bilgi alın.',
      'Drydock Resources' => 'Drydock Kaynakları',
      'Resource Type' => 'Kaynak Türü',
      'The object which authorized this lease (%s) is not authorized to use any of the blueprints the lease lists. Approve the authorizations before using the lease.' => 'Bu kiralamayı (%s) onaylayan nesneye, kira listelerinin herhangi bir planını kullanma yetkisi verilmez. Kirayı kullanmadan önce yetkilendirmeleri onaylayın.',
      'Diff ("%s") has wrong revision ID ("%s", expected "%s").' => 'Diff ("%s") yanlış revizyon kimliğine sahip ("%s", "%s" beklendi).',
      'Trying to acquire lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'Yanlış bir durumda ("%3$s") bir kaynakta ("%s") kira ("%1$s") almaya çalışıyor.',
      'Drydock Authorization %d' => 'Drydock Yetkilendirme %s',
      'This blueprint has no active resources.' => 'Bu planın aktif kaynakları yok.',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" with a lease acquired on the wrong resource.' => 'Plab "%s" ("%s" tipinde) uygun bir şekilde uygulanmadı: yanlış kaynaktan edinilen bir kiralamayla "%s"\'den döndü.',
      'This revision is not associated with a known repository. Only revisions associated with a tracked repository can be landed automatically.' => 'Bu revizyon bilinen bir depo ile ilişkili değildir. Yalnızca izlenen bir havuzla ilişkili revizyonlar otomatik olarak yapılabilir.',
      'Stdout' => 'Stdout',
      'Failed to acquire lock for resource ("%s") while trying to acquire lease ("%s").' => 'Kira ("%s") edinilmeye çalışılırken kaynak kilidi ("%s") alınamadı.',
      'Trying to activate lease with no resource.' => 'Kaynaksız kiralamayı etkinleştirmeye çalışıyor.',
      'Via:' => 'Üzerinden:',
      'Operation Status' => 'Çalışma Durumu',
      'Slot Lock Failure' => 'Yuva Kilidi Arızası',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must return an object of type %s or throw, but returned something else.' => 'Blueprint "%s" ("%s" türünde) düzgün bir şekilde uygulanmıyor: %s, %s türünde bir nesne döndürmeli veya atmalı, ancak başka bir şey döndürmelidir.',
      'Unknown repository operation target type "%s" (in target "%s").' => 'Bilinmeyen depo işlemi hedef türü "%s" ("%s" hedefinde).',
      'Drydock commands have the same policies as their targets.' => 'Drydock komutları hedefleriyle aynı politikalara sahiptir.',
      'The diff was generated from a raw input source, so the change could not be pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Fark bir ham giriş kaynağından üretildi, bu nedenle değişiklik evrelemeye itilemedi. Değişiklikler web\'den indirilmeden önce evrelemeye aktarılmalıdır.',
      'Host (%s)' => 'Ev sahibi (%s)',
      'Drydock Repository Operations' => 'Drydock Depo İşlemleri',
      'Search leases by resource.' => 'Kaynağa göre kiralama arayın.',
      'Browse Blueprints' => 'Blueprints Araştır',
      'No objects have active authorizations to use this blueprint.' => 'Hiçbir nesnenin bu planı kullanmak için etkin yetkileri yoktur.',
      'You do not have permission to create Drydock blueprints.' => 'Drydock planları oluşturma izniniz yok.',
      'Name of the blueprint.' => 'Planın adı.',
      'Really release resource?' => 'Gerçekten kaynak yayınlansın mı?',
      'Already Dismissed' => 'Zaten Kapatıldı',
      'Dismiss this operation? It will no longer be shown, but logs can be found in Drydock.' => 'Bu işlem kapatılsın mı? Artık gösterilmeyecek, ancak günlükler Drydock\'ta bulunabilir.',
      'Resource "%s" was reclaimed.' => '"%s" kaynağı geri alındı.',
      'Default Blueprint View Policy' => 'Varsayılan Blueprint Görünüm Politikası',
      'Allows Drydock to check out working copies of repositories.' => 'Drydock\'un depoların çalışan kopyalarını kontrol etmesine izin verir.',
      'Lease released.' => 'Kira yayınlandı.',
      'Unknown Repository' => 'Bilinmeyen Depo',
      'When this diff was generated, the server was running an older version of the software which did not support staging areas, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Bu fark üretildiğinde, sunucu hazırlama alanlarını desteklemeyen eski bir Phabricator sürümünü çalıştırıyordu, bu nedenle değişiklik aşamalandırmaya itilmedi. Değişiklikler web\'den indirilmeden önce evrelemeye aktarılmalıdır.',
      'Lease "%s" does not exist.' => '"%s" kira sözleşmesi mevcut değil.',
      'All blueprints failed to allocate a suitable new resource when trying to allocate lease ("%s").' => 'Tüm planlar kira tahsis etmeye çalışırken uygun bir yeni kaynak tahsis edemedi ("%s").',
      'Enable Blueprint' => 'Planı Etkinleştir',
      'Authorization State' => 'Yetkilendirme Durumu',
      'One or more blueprints promised a new resource, but failed when allocating: [%s] %s' => 'Bir veya daha fazla plan yeni bir kaynak vaat etti, ancak ayırırken başarısız oldu: [%s] %s',
      'Revision Closed' => 'Revizyon Kapalı',
      'Update a resource.' => 'Bir kaynağı güncelleyin.',
      'Search for resources generated by particular blueprints.' => 'Belirli planlar tarafından oluşturulan kaynakları arayın.',
      'When this diff was generated, it was not pushed to staging for an unknown reason (the status code was "%s"). Changes must be pushed to staging before they can be landed from the web. The server may be running an out-of-date version of this software, and updating may provide more information about this error.' => 'Bu fark oluşturulduğunda, bilinmeyen bir nedenden dolayı sahnelemeye itilmedi (durum kodu "%s" idi). Değişiklikler web\'den indirilmeden önce evrelemeye aktarılmalıdır. Sunucu Phabricator\'ın eski bir sürümünü kullanıyor olabilir ve güncelleme bu hata hakkında daha fazla bilgi sağlayabilir.',
      'Lease has already been released!' => 'Kira zaten yayınlandı!',
      'Lease has been broken!' => 'Kira sözleşmesi bozuldu!',
      'This revision is already landing.' => 'Bu revizyon zaten başlıyor.',
      'Hide Disabled Blueprints' => 'Devre Dışı Bırakılmış Planları Gizle',
      'Search authorizations from specific objects.' => 'Belirli nesnelerden yetkileri arayın.',
      'Drydock Leases' => 'Drydock Kiralama',
      'A repository operation inherits the policies of the repository it affects.' => 'Bir depo işlemi, etkilediği deponun politikalarını devralır.',
      'Unable to load lease with ID "%s"!' => '"%s" kimliğine sahip kiralama yüklenemiyor!',
      'Working' => 'Çalışıyor',
      'Success! Automation is configured properly and Drydock can operate on %s.' => 'Başarı! Otomasyon doğru yapılandırılmış ve Drydock %s ile çalışabiliyor.',
      'Configure blueprints so Drydock can build resources, like hosts and working copies.' => 'Planları, Drydock\'un toplantı sahipleri ve çalışan kopyalar gibi kaynaklar oluşturabilmesi için yapılandırın.',
      'Edit Blueprint: %s' => 'Planı Düzenle: %s',
      'All Authorizations' => 'Tüm Yetkilendirmeler',
      'Unable to pop working directory, directory stack is empty.' => 'Çalışma dizini açılamıyor, dizin yığını boş.',
      'Unknown blueprint field "%s"!' => 'Bilinmeyen plan alanı "%s"!',
      'Dismiss Operation' => 'İşlemi Kapat',
      'Trying to activate a resource from the wrong status. Status must be "%s", actually "%s".' => 'Bir kaynağı yanlış durumdan etkinleştirmeye çalışılıyor. Durum "%s", aslında "%s" olmalıdır.',
      'Retrieve information about Drydock leases.' => 'Drydock kiralamaları hakkında bilgi al.',
      'Operation' => 'İşlem',
      '"%s" (owned by "%s")' => '"%s" (sahibi "%s")',
      'All Resources' => 'Tüm Kaynaklar',
      'The string constant and name of this lease\'s status.' => 'Bu kiralamanın durumunun dize sabiti ve adı.',
      'Client Support Unavailable' => 'İstemci Desteği Kullanılamıyor',
      'Resource reclaimed by %s.' => 'Kaynak %s ile geri alındı.',
      'Leases' => 'Kiralamalar',
      'Lease Queued' => 'Kira Sırası',
      'Commands' => 'Komutlar',
      'Drydock Resource' => 'Drydock Kaynağı',
      'If you disable this blueprint, Drydock will no longer use it to allocate new resources. Existing resources will not be affected.' => 'Bu planı devre dışı bırakırsanız, Drydock yeni kaynakları ayırmak için artık kullanmayacaktır. Mevcut kaynaklar bundan etkilenmeyecektir.',
      'The repository this revision is associated with ("%s") is not configured to support automation. Configure automation for the repository to enable revisions to be landed automatically.' => 'Bu düzeltmenin ilişkili olduğu depo ("%s") otomasyonu destekleyecek şekilde yapılandırılmamış. Revizyonların otomatik olarak indirilmesini sağlamak için depo için otomasyonu yapılandırın.',
      'Staging Unavailable' => 'Evreleme Kullanılamıyor',
      'Blueprint type "%s" is not valid. Valid types are: %s.' => 'Plan türü "%s" geçerli değil. Geçerli türler: %s.',
      'Review the repository operation queue.' => 'Depo işlem kuyruğunu gözden geçirin.',
      'Unable to Push' => 'Zorlanamıyor',
      'This revision has already been closed. Only open, accepted revisions may land.' => 'Bu düzeltme zaten kapatıldı. Sadece açık, kabul edilmiş revizyonlar inebilir.',
      'Lease Released' => 'Kira Yayınlandı',
      'No Authorizations' => 'Yetkilendirme Yok',
      'PHID of the leased resource, if any.' => 'Kiralanan kaynağın PHID\'si varsa.',
      'Lease a resource.' => 'Bir kaynağı kiralayın.',
      'Failed to acquire slot locks.' => 'Yuva kilitleri alınamadı.',
      'Unable to acquire slot locks: %s.' => 'Yuva kilitleri alınamıyor: %s.',
      'Authorization state of this request.' => 'Bu isteğin yetki durumu.',
      'No such operation "%s"!' => 'Böyle bir işlem yok "%s"!',
      'No matching operations.' => 'Eşleşen işlem yok.',
      'Permanent failure while activating lease ("%s"): %s' => 'Kira aktif hale getirilirken kalıcı hata oluştu ("%s"): %s',
      'Run a command on a leased resource.' => 'Kiralanan bir kaynak üzerinde bir komut çalıştırın.',
      'When the diff was generated, the client was not able to determine which repository it belonged to, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Fark üretildiğinde, müşteri hangi depoya ait olduğunu belirleyemedi, bu nedenle değişiklik sahnelemeye itilmedi. Değişiklikler web\'den indirilmeden önce evrelemeye aktarılmalıdır.',
      'PHID of the object which requested authorization.' => 'Yetkilendirme isteyen nesnenin PHID\'si.',
      'Scheduled release of lease "%s".' => '"%s" kiralama planlanan yayınlaması.',
      'Blueprint %d: %s' => 'Plan %s: %s',
      'Drydock Authorizations' => 'Drydock Yetkileri',
      'Search authorizations for specific blueprints.' => 'Belirli planlar için yetkileri arayın.',
      'Started this operation in a working copy.' => 'Bu işleme çalışan bir kopyada başladı.',
      'Operation %d' => 'Operasyon %s',
      'This change could not be fetched from the remote staging area. It may not have been pushed, or may have been removed.' => 'Bu değişiklik uzak aşamalandırma alanından getirilemedi. İtilmemiş veya çıkarılmış olabilir.',
      'Slot Locks' => 'Yuva Kilitleri',
      'Trying to allocate a resource from the wrong status. Status must be "%s", actually "%s".' => 'Bir kaynağı yanlış durumdan ayırmaya çalışıyor. Durum "%s", aslında "%s" olmalıdır.',
      'No slot locks held.' => 'Yuva kilidi tutulmadı.',
      'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.' => 'Bu yetkilendirme reddedilsin mi? Nesne, bu plan tarafından oluşturulan kaynakları kiralayamayacak veya tahsis edemeyecektir.',
      '<Unknown>' => '<Bilinmiyor>',
      'Can Create Blueprints' => 'Planlar Oluşturabilir',
      'Already In Flight' => 'Zaten Uçuşta',
      'Lease ("%s") is in bad state ("%s"), expected "%s".' => 'Kira ("%s") kötü durumda ("%s"), beklenen "%s".',
      'Lock Key' => 'Kilitli Anahtar',
      'Leases can not be released after they are destroyed.' => 'Kiralamalar imha edildikten sonra yayınlayamaz.',
      'No Repository' => 'Depo Yok',
      'You do not have permission to view this log event.' => 'Bu günlük etkinliğini görüntüleme izniniz yok.',
      'Create New Blueprint' => 'Yeni Plan Oluştur',
      'Resource ID to update.' => 'Güncellenecek kaynak kimliği.',
      'Allocate Software Resources' => 'Yazılım Kaynaklarını Atama',
      'Lease ID to update.' => 'Güncellemek için kira kimliği.',
      'Activation Failed' => 'Aktivasyon Başarısız',
      'Already Declined' => 'Zaten Reddedildi',
      'Apply transactions to create or edit a blueprint.' => 'Bir plan oluşturmak veya düzenlemek için işlemleri uygulayın.',
      'Release Resource' => 'Kaynağı Yayımla',
      'Approve this authorization? The object will be able to lease and allocate resources created by this blueprint.' => 'Bu yetkilendirme onaylasın mı? Nesne, bu plan tarafından oluşturulan kaynakları kiralayabilecek ve tahsis edebilecektir.',
      'An authorization inherits the policies of the blueprint it authorizes access to.' => 'Bir yetkilendirme, erişim yetkisi verdiği planın politikalarını devralır.',
      'Forcefully releasing a lease may interfere with the operation of the lease holder and trigger destruction of the underlying resource. It can not be undone.' => 'Bir kiranın zorla serbest bırakılması, kiralama sahibinin çalışmasına müdahale edebilir ve temeldeki kaynağın tahrip olmasını tetikleyebilir. Geri alınamaz.',
      'All Blueprints' => 'Tüm Planlar',
      'Lease destroyed.' => 'Kira imha edildi.',
      'The PHID of the object that owns this lease.' => 'Bu kiralamaya sahip olan nesnenin PHID\'si.',
      'States' => 'Devletler',
      'Lease activated.' => 'Kira aktif hale getirildi.',
      'This resource has no active leases.' => 'Bu kaynağın aktif kiralaması yok.',
      'Dismiss' => 'Reddet',
      'Lease queued for acquisition.' => 'Kira alımı için kuyruğa alındı.',
      'Resource "%s" could not be reclaimed.' => '"%s" kaynağı geri alınamadı.',
      'When this diff was generated, the client did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web. Updating the client may resolve this issue.' => 'Bu fark üretildiğinde, istemci bu sürüm kontrol sistemi için hazırlama alanlarını desteklemedi, bu nedenle değişiklik aşamalandırmaya itilmedi. Değişiklikler web\'den indirilmeden önce evrelemeye aktarılmalıdır. İstemciyi güncellemek bu sorunu çözebilir.',
      'The push failed. This usually indicates that the change is breaking some rules or some custom commit hook has failed.' => 'Push başarısız oldu. Bu genellikle değişikliğin bazı kuralları ihlal ettiğini veya bazı özel işlem kancalarının başarısız olduğunu gösterir.',
      'Maximum number of resources this blueprint can have active concurrently.' => 'Bu planın aynı anda etkin olabileceği maksimum kaynak sayısı.',
      'Lease ID to release.' => 'Serbest bırakmak için kimlik kiralayın.',
      'Authorization state of the requesting object.' => 'İstekte bulunan nesnenin yetkilendirme durumu.',
      'Repository Operation' => 'Depo İşletimi',
      'Operation encountered an error.' => 'İşlem bir hatayla karşılaştı.',
      'This authorization has already been declined.' => 'Bu yetkilendirme zaten reddedildi.',
      'Drydock resource ("%s") has no Almanac binding PHID, so its binding can not be loaded.' => 'Drydock kaynağında ("%s") Almanak bağlayıcı PHID yoktur, bu nedenle bağlanması yüklenemez.',
      'Manage leases on resources.' => 'Kaynak kiralama işlemlerini yönetin.',
      'The type of a blueprint can not be changed once it has been created.' => 'Bir planın türü oluşturulduktan sonra değiştirilemez.',
      'Trying to acquire an active lease on a pending resource. You can not immediately activate leases on resources which need time to start up.' => 'Bekleyen bir kaynakta aktif bir kira elde etmeye çalışmak. Başlamak için zamana ihtiyaç duyan kaynaklara ilişkin kiralamaları hemen etkinleştiremezsiniz.',
      'Invalid or unknown object ("%s") for land operation, expected Differential Revision.' => 'Arazi operasyonu için geçersiz veya bilinmeyen nesne ("%s"), beklenen Diferansiyel Revizyon.',
      'View and manage resources Drydock has built, like hosts.' => 'Kaynakları görüntüleyin ve yönetin Drydock, ana bilgisayarlar gibi oluşturdu.',
      'This revision is still under review. Only revisions which have been accepted may land.' => 'Bu revizyon hala incelenmektedir. Yalnızca kabul edilen revizyonlar yapılabilir.',
      'Provides: %s' => 'Sağlar: %s',
      'Lease Activated' => 'Kira Etkinleştirildi',
      'Specify a command to run.' => 'Çalıştırılacak bir komut belirtin.',
      '%s renamed this blueprint from %s to %s.' => '%s, bu planı %s iken %s olarak yeniden adlandırdı.',
      'No active Drydock blueprint exists which can ever allocate a resource for lease "%s".' => 'Hiç bir kaynak "%s" kira için tahsis edebilecek hiçbir Drydock blueprint mevcut değildir.',
      'Release Lease?' => 'Kira Yayınlasın mı?',
      'Approve Authorization' => 'Yetkilendirmeyi Onayla',
      'Default Blueprint Edit Policy' => 'Varsayılan Plan Düzenleme Politikası',
      'Blueprint "%s" (of type "%s") is not properly implemented: it built a resource of type "%s" to satisfy a lease requesting a resource of type "%s".' => 'Plan "%s" ("%s" türünde) düzgün bir şekilde uygulanmıyor: "%4$s" türünde bir kaynak talep eden bir kiralama işlemini karşılamak için "%3$s" türünde bir kaynak oluşturdu.',
      'Implementation' => 'Uygulama',
      'Testing configuration for %s. This may take a moment if Drydock has to clone the repository for the first time.' => 'Yapılandırma %s için test ediliyor. Drydock veri havuzunu ilk kez klonlamak zorundaysa bu biraz zaman alabilir.',
      'Type a lease ID (exact match)...' => 'Bir kira kimliği girin (tam eşleme)...',
      'Resource ID to release.' => 'Yayınlayacak kaynak kimliği.',
      'Started Work' => 'İşe Başladı',
      'Reclaimed Resources' => 'Geri Kazanılan Kaynaklar',
      'Unable to acquire slot locks.' => 'Yuva kilitleri alınamıyor.',
      'Unable to load lease ("%s").' => 'Kira yüklenemiyor ("%s").',
      'Trying to activate a lease which has the wrong status: status must be "%s", actually "%s".' => 'Durumu yanlış olan bir kiralamayı etkinleştirmeye çalışıyor: durum "%s", aslında "%s" olmalıdır.',
      'You must choose a blueprint type.' => 'Bir plan türü seçmelisiniz.',
      'Stderr' => 'Stderr',
      'Release a resource.' => 'Bir kaynak yayınlayın.',
      'Lease acquired.' => 'Kira satın alındı.',
      'Unexpected failure while destroying resource ("%s").' => 'Kaynak yok edilirken beklenmeyen hata ("%s").',
      'WARNING: There are %s unapproved authorization(s)!' => 'UYARI: %s onaylanmamış yetkilendirme var!',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must actually allocate the resource it returns.' => 'Plan "%s" ("%s" türünde) düzgün bir şekilde uygulanmıyor: %s aslında döndürdüğü kaynağı ayırmalıdır.',
      'No commands issued.' => 'Komut verilmemiş.',
      'Revision landed into %s.' => 'Revizyon %s indi.',
      'Waiting %s second(s) for lease to activate.' => 'Kiralamanın aktif hale gelmesi için %s bekliyor',
      'Allocation Failed' => 'Tahsis Başarısız Oldu',
      'Landing revision into %s on %s...' => '%2$s üzerinden %1$s iniş revizyonu veriliyor...',
      'Authorized' => 'Yetkilendirildi',
      'A nautical adventure.' => 'Denizcilik macerası.',
      'All Leases' => 'Tüm Kiralamalar',
      'Resource %s %s' => 'Kaynak %s %s',
      'Search for blueprints by name substring.' => 'Planları isim alt dizesine göre arayın.',
      'Activated' => 'Etkinleştirildi',
      'Reclaimed resource %s.' => 'Geri kazanılan kaynak %s.',
      'Already Complete' => 'Zaten Tamamlandı',
      'Waiting to test configuration for %s...' => 'Yapılandırmayı %s karşılığında test etmek bekleniyor...',
      'Decline Authorization' => 'Yetkilendirmeyi Reddet',
      'Unable to load diff "%s".' => 'Fark "%s" yüklenemiyor.',
      'Blueprint type.' => 'Plan türü.',
      'Repository PHID "%s" does not exist.' => 'Depo PHID\'si "%s" mevcut değil.',
      'This change did not merge cleanly. This usually indicates that the change is out of date and needs to be updated.' => 'Bu değişiklik temiz bir şekilde birleşmedi. Bu genellikle değişikliğin güncel olmadığını ve güncellenmesi gerektiğini gösterir.',
      'Repository ("%s") has unsupported VCS ("%s").' => 'Depoda ("%s") desteklenmeyen VCS ("%s") var.',
      'Drydock Logs' => 'Drydock Günlükleri',
      'Authorizations' => 'Yetkileri',
      'Updating resource "%s".' => '"%s" kaynağı güncelleniyor.',
      'Repository Unsupported' => 'Depo Desteklenmiyor',
      'Type of resource being leased.' => 'Kiralanan kaynağın türü.',
      'Resources can not be released after they are destroyed.' => 'Kaynaklar yok edildikten sonra yayınlayamaz.',
      '%s enabled %s.' => '%s, %s etkinleştirdi.',
      'Only private key credentials are supported.' => 'Yalnızca özel anahtar kimlik bilgileri desteklenir.',
      'New Blueprint' => 'Yeni Plan',
      'Trying to activate a lease on a pending resource.' => 'Bekleyen bir kaynakta kiralama işlemini etkinleştirmeye çalışıyor.',
      'Blueprint names can be no longer than %s characters.' => 'Plan adları %s\'den fazla olamaz.',
      'Permanent failure while activating resource ("%s"): %s' => 'Kaynak etkinleştirilirken kalıcı hata ("%s"): %s',
      'Lease' => 'Kiralama',
      'Lease Not Releasable' => 'Kiraya Verilemez',
      'Specify one or more lease IDs to update with "%s".' => '"%s" ile güncellenecek bir veya daha fazla kiralama kimliği belirtin.',
      'The name of this blueprint.' => 'Bu planın adı.',
      'Not Activated' => 'Etkinleştirilmedi',
      'Some of the Almanac Services defined by this blueprint could not be loaded. They may be invalid, no longer exist, or be of the wrong type: %s.' => 'Bu plan tarafından tanımlanan Almanak Hizmetlerinden bazıları yüklenemedi. Geçersiz, artık mevcut olmayabilir veya yanlış türde olabilirler: %s.',
      '%s created this blueprint.' => 'Bu planı %s oluşturdu.',
      'JSON file with lease attributes. Use "-" to read attributes from stdin.' => 'Kira özniteliklerine sahip JSON dosyası. Stdin\'den nitelikleri okumak için "-" kullanın.',
      'Update a lease.' => 'Bir kiralama güncelleyin.',
      'Unable to load Almanac binding ("%s") for resource ("%s").' => 'Kaynak için Almanak bağlaması ("%s") yüklenemedi ("%s").',
      'This authorization has already been approved.' => 'Bu yetkilendirme zaten onaylandı.',
      'Blueprint %d' => 'Plan %s',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without activating a lease.' => 'Blueprint "%s" ("%s" türünde) düzgün bir şekilde uygulanmıyor: bir kiralama işlemi etkinleştirilmeden "%s" değerinden döndü.',
      'Operation encountered an error while performing repository operations.' => 'Depo işlemleri yapılırken işlem bir hatayla karşılaştı.',
      'If you enable this blueprint, Drydock will start using it to allocate new resources.' => 'Bu planı etkinleştirirseniz, Drydock yeni kaynakları ayırmak için kullanmaya başlar.',
      'Blueprint failed to allocate a resource after claiming it would be able to: [%s] %s' => 'Blueprint, şunları yapabileceğini iddia ettikten sonra bir kaynak ayıramadı: [%s] %s',
      'Command to execute.' => 'Yürütme komutu.',
      'Releasing a resource releases all leases and destroys the resource. It can not be undone.' => 'Bir kaynak bırakıldığında tüm kiralamalar serbest bırakılır ve kaynak imha edilir. Geri alınamaz.',
      '%s disabled this blueprint.' => '%s bu planı devre dışı bıraktı.',
      'Trying to activate a resource which has not yet been persisted.' => 'Henüz devam etmeyen bir kaynağı etkinleştirmeye çalışıyor.',
      'Blueprint type "%s" is unrecognized. Valid types are: %s.' => 'Plan türü "%s" tanınmıyor. Geçerli türler: %s.',
      'No such resource "%s"!' => 'Böyle bir kaynak "%s" yok!',
      'autocommitter' => 'otomatik değiştirme',
      'Waiting for Activation' => 'Aktivasyon Bekleniyor',
      'Blueprints must have a name.' => 'Planların bir adı olmalıdır.',
      'Information about resource status.' => 'Kaynak durumu hakkında bilgi.',
      'Already Authorized' => 'Zaten Yetkili',
      'Unable to build resource interface of type "%s".' => '"%s" türünde kaynak arabirimi oluşturulamıyor.',
      'Lease Destroyed' => 'Yok Edilen Kiralama',
      'Active Leases' => 'Aktif Kiralamalar',
      'Resources inherit the policies of their blueprints.' => 'Kaynaklar, planlarının politikalarını devralır.',
      'Active Blueprints' => 'Aktif Planlar',
      'When creating a blueprint, set the type.' => 'Bir plan oluştururken, türü ayarlayın.',
      'To view log details, you must be able to view all associated blueprints, resources, leases, and repository operations.' => 'Günlük ayrıntılarını görüntülemek için, ilişkili tüm planları, kaynakları, kiraları ve depo işlemlerini görüntüleyebilmeniz gerekir.',
      'Raw Diff Source' => 'Ham Fark Kaynağı',
      'Edit Drydock Blueprint Configurations' => 'Drydock Plan Yapılandırmalarını Düzenle',
      'Resource activation failed: [%s] %s' => 'Kaynak etkinleştirilemedi: [%s] %s',
      'PHID of the blueprint this request was made for.' => 'Bu talebin yapıldığı planın PHID\'si.',
      'Unable to acquire lease "%s" on any resource.' => 'Herhangi bir kaynak için "%s" kira alınamıyor.',
      'Updating lease "%s".' => 'Kiralama "%s" güncelleniyor.',
      'Lease has already been destroyed!' => 'Kira zaten imha edildi!',
      'The blueprint which generated this resource.' => 'Bu kaynağı oluşturan plan.',
      'Create Blueprint' => 'Plan Oluştur',
      'Retrieve information about Drydock authorizations.' => 'Drydock yetkilendirmeleri hakkında bilgi alın.',
      'Repository Unconfigured' => 'Depo Yapılandırılmamış',
      'Only new leases may be queued for activation!' => 'Yalnızca yeni kiralamalar etkinleştirme için sıraya alınabilir!',
      'This blueprint ("%s") does not define any Almanac Service PHIDs.' => 'Bu plan ("%s") Almanak Hizmet PHID\'lerini tanımlamaz.',
      'The diff author used the %s flag to skip pushing this change to staging. Changes must be pushed to staging before they can be landed from the web.' => 'Fark yazarı, bu değişikliği sahnelemeye atlamak için %s bayrağını kullandı. Değişiklikler web\'den indirilmeden önce evrelemeye aktarılmalıdır.',
      'No Resource' => 'Kaynak Yok',
      'Trying to queue a lease for activation without any allowed Blueprints. Use "%s" to specify allowed blueprints. The authorizing object must be approved to use the allowed blueprints.' => 'İzin verilen planlar olmadan etkinleştirme için bir kira kuyruğu kuyruğa girmeye çalışılıyor. İzin verilen planları belirtmek için "%s" kullanın. İzin verilen planları kullanmak için yetkilendirme nesnesinin onaylanması gerekir.',
      'Resource: %s' => 'Kaynak: %s',
      'Lease Acquired' => 'Satın Alınan Kira',
      'Resource Not Releasable' => 'Kaynak Yayınlayamaz',
      'You must select a blueprint type when creating a blueprint.' => 'Bir plan oluştururken bir plan türü seçmelisiniz.',
      'The type of resource this blueprint provides.' => 'Bu planın sağladığı kaynak türü.',
      'Reacquiring Resource' => 'Yeniden Kaynak Alma',
      'Revision Abandoned' => 'Düzeltme Terk Edildi',
      'Resource "%s" does not exist.' => '"%s" kaynağı mevcut değil.',
      'This revision has already landed.' => 'Bu revizyon çoktan başladı.',
      'Activated on Acquisition' => 'Edinimde Etkinleştirildi',
      'Release Lease' => 'Kiralamayı Yayımla',
      'This engine is used to edit Drydock blueprints.' => 'Bu motor Drydock planlarını düzenlemek için kullanılır.',
      'Epoch at which this lease expires, if any.' => 'Varsa, bu kiralama işleminin süresinin dolduğu dönem.',
      'Type a blueprint name...' => 'Bir plan adı yazın...',
      'Reclaim unused resources.' => 'Kullanılmayan kaynakları geri alın.',
      'Waiting For Resource' => 'Kaynak Bekleniyor',
      'Revision Not Accepted' => 'Düzeltme Kabul Edilmedi',
      'Trying to activate lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'Bir kaynakta ("%2$s") yanlış durumda ("%3$s") kiralamayı ("%1$s") etkinleştirmeye çalışılıyor.',
      'No such lease "%s"!' => 'Böyle bir kira "%s" yok!',
      'No Repository Automation' => 'Depo Otomasyonu Yok',
      'Trying to acquire a lease on a resource which is in the wrong state: status must be "%s", actually "%s".' => 'Yanlış durumda olan bir kaynak için bir kira almaya çalışmak: durum "%s", aslında "%s" olmalıdır.',
      'Blueprints' => 'Planlar',
      'Lease acquired a resource but failed to activate; acquisition will be retried: [%s] %s' => 'Kira kontratı bir kaynak elde etti ancak aktif hale getirilemedi; edinme yeniden denenecek: [%s] %s',
      'Search leases by owner.' => 'Kiracıların sahibine göre ara.',
      'Almanac Hosts' => 'Almanak Sahipleri',
      'Repository Operations' => 'Depo İşlemleri',
      'Leases inherit policies from the resources they lease.' => 'Kiralamalar, politikaları kiraladıkları kaynaklardan devralır.',
      'Drydock User Guide' => 'Drydock Kullanıcı Kılavuzu',
      'Waiting %s second(s) for resource to activate.' => 'Kaynağın etkinleştirilmesi için %s saniye bekleniyor.',
      'When creating a new Drydock blueprint via the Conduit API, you must provide a "type" transaction to select a type.' => 'Conduit API\'sı aracılığıyla yeni bir Drydock planı oluştururken, bir tür seçmek için bir "tür" işlemi sağlamanız gerekir.',
      'Trying to queue a lease for activation without an authorizing object. Use "%s" to specify the PHID of the authorizing object. The authorizing object must be approved to use the allowed blueprints.' => 'Yetkilendirme nesnesi olmadan etkinleştirme için bir kira kuyruğu oluşturmaya çalışılıyor. Yetkilendiren nesnenin PHID\'sini belirtmek için "%s" kullanın. İzin verilen planları kullanmak için yetkilendirme nesnesinin onaylanması gerekir.',
      'Set the blueprint type.' => 'Plan türünü ayarlayın.',
      'Lease ID.' => 'Kira kimliği.',
      'Unexpected failure while destroying lease ("%s").' => 'Kira sözleşmesi imha edilirken beklenmeyen arıza ("%s").',
      'No Blueprints' => 'Plan Yok',
      'You do not have permission to push to the repository this revision is associated with ("%s"), so you can not land it.' => 'Bu revizyonun ilişkili olduğu ("%s") depoya gönderme izniniz yok, bu yüzden inemezsiniz.',
      'Waiting for available resources from: %s.' => 'Şu kaynaktan mevcut kaynaklar bekleniyor: %s.',
      'Active Resources' => 'Aktif Kaynaklar',
      'Unable to allocate any binding as a resource.' => 'Kaynak olarak herhangi bir bağlama tahsis edilemiyor.',
    );
  }

}
