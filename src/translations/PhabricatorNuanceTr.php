<?php

final class PhabricatorNuanceTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Work' => 'İş',
      'Update or route an item.' => 'Bir öğeyi güncelleyin veya yönlendirin.',
      'Removed Milestone: %s' => 'Kaldırılan Dönüm Noktası: %s',
      'Edit Queue' => 'Kuyruğu Düzenle',
      '%s set a property on this item.' => '%s bu öğeyi bir özellik belirledi.',
      'Phabricator Form' => 'Phabricator Formu',
      'Unassigned: %s' => 'Atanmamış: %s',
      '%s changed the default queue for this source from %s to %s.' => '%s, bu kaynağın varsayılan sırasını %s\'den %s\'e değiştirdi.',
      'This source ("%s") does not have a "%s" cursor. Available cursors: %s.' => 'Bu kaynak ("%s") "%s" imlecine sahip değil. Mevcut imleçler: %s.',
      'Branch %s' => '%s Dalı',
      'GitHub Event' => 'GitHub Etkinliği',
      'Default edit policy for newly created sources.' => 'Yeni oluşturulan kaynaklar için varsayılan düzenleme politikası.',
      'Edit Nuance Source Configurations' => 'Nuance Kaynağı Yapılandırmalarını Düzenle',
      'No sources found.' => 'Kaynak bulunamadı.',
      'Name of the queue.' => 'Sıranın adı.',
      'Executing' => 'Yürütme',
      '(Use --cursor to import only a particular cursor.)' => '(Yalnızca belirli bir imleci içe aktarmak için --cursor\'u kullanın.)',
      'Unknown Event Type ("%s")' => 'Bilinmeyen Etkinlik Türü ("%s")',
      'Nuance Item %d Task' => 'Nuance Öğesi %s Görev',
      'No item exists with PHID "%s".' => 'PHID "%s" ile hiçbir öğe mevcut değil.',
      'Ref %s' => 'Ref %s',
      'This key has %s remaining API request(s), limit resets in %s second(s).' => 'Bu anahtarın %s kalan API isteği var, sınır %s içinde sıfırlanıyor.',
      'GitHub Actor' => 'GitHub Aktör',
      'Sources' => 'Kaynaklar',
      'All Items' => 'Tüm Öğeler',
      'Pull Request #%d' => 'Çekme İsteği #%s',
      'Manage Queue' => 'Kuyruğu Yönet',
      '%s applied a "%s" command to this item.' => '%s, bu öğeye "%s" komutu uyguladı.',
      'Set API poll TTL to +%s second(s) (%s second(s) from now).' => 'API anketi TTL\'yi +%s saniye (şu an %s saniye) olarak ayarlayın.',
      'View Form' => 'Formu Gör',
      'Source names must not be longer than %s character(s).' => 'Kaynak adları %s karakterden uzun olmamalıdır.',
      'Respecting "%s": waiting for %s second(s) to poll GitHub.' => '"%s"\'e saygı duymak: GitHub’ı araştırmak için %s saniye bekliyor.',
      'Fetched event "%s".' => '"%s" etkinliği alındı.',
      'Manage Nuance items.' => 'Nuance öğelerini yönet.',
      'Source "%s" (of class "%s") returned an invalid value from method "%s": all values must be objects of class "%s".' => '"%s" kaynağı ("%s" sınıfı), "%s" yönteminden geçersiz bir değer döndürdü: tüm değerler "%s" sınıfı nesneler olmalıdır.',
      'You do not have permission to manage sources.' => 'Kaynakları yönetme izniniz yok.',
      'Got a complaint? Complain here! We love complaints.' => 'Bir şikayet var mı? Şikayet et burayı! Şikayetleri severiz.',
      'Removed Label: %s' => 'Kaldırılan Etiket: %s',
      'Importing all cursors: %s.' => 'Tüm imleçleri içe aktarma: %s.',
      'Can Manage Sources' => 'Kaynakları Yönetebilir',
      'Queue %d' => 'Kuyruk %s',
      'No items found.' => 'Hiç bir öğe bulunamadı.',
      'GitHub Raw Event' => 'GitHub Ham Etkinlik',
      'Unable to execute command "%s": this command does not have a recognized command implementation.' => '"%s" komutu yürütülemiyor: bu komut tanınmış bir komut uygulamasına sahip değil.',
      'Manage Nuance queues.' => 'Nuance sıralarını yönet.',
      'Import data from a source.' => 'Bir kaynaktan veri al.',
      'Edit Queue: %s' => 'Sırayı Düzenle: %s',
      'User %s' => 'Kullanıcı %s',
      'Specify a source with %s.' => '%s ile bir kaynak belirtin.',
      'Complaint Form' => 'Şikayet Formu',
      'Content imported via Nuance.' => 'Nuance yoluyla içe aktarılan içerik.',
      'Nuance Queues' => 'Nuance Kuyrukları',
      'Polling GitHub Repository API endpoint "%s".' => 'Yoklama GitHub Deposu API uç noktası "%s".',
      'Source "%s" (of class "%s") returned an import cursor with a missing key from "%s". Each cursor must have a unique, nonempty key.' => 'Kaynak "%s" ("%s" sınıfından) "%s" öğesinden eksik bir anahtarla içe aktarma imleci döndürdü. Her imlecin benzersiz ve boş bir anahtarı olmalıdır.',
      'Create Queue' => 'Sıra Oluştur',
      'Default Source View Policy' => 'Varsayılan Kaynak Görünümü Politikası',
      'Unknown Object' => 'Bilinmeyen Nesne',
      'This command implementation("%s") can not apply a command of a different type ("%s").' => 'Bu komut uygulaması ("%s") farklı türde bir komut ("%s") uygulayamaz.',
      'Queues must have a name.' => 'Kuyrukların bir adı olmalı.',
      'No source exists with a name matching "%s".' => '"%s" ile eşleşen adda kaynak yok.',
      'IMPORTANT: This is a very rough prototype.' => 'ÖNEMLİ: Bu çok kaba bir prototip.',
      'Queue Actions' => 'Kuyruk İşlemleri',
      'Edit Nuance Queue Configurations' => 'Nuance Sırası Yapılandırmalarını Düzenle',
      'Specify a item with %s.' => '%s ile bir öğe belirtin.',
      'Nuance Sources' => 'Nuance Kaynakları',
      'Choose which item to route.' => 'Hangi öğenin yönlendirileceğini seçin.',
      'No item exists with ID "%s".' => '"%s" kimliğine sahip hiçbir öğe yok.',
      'Queue Empty' => 'Sıra Boş',
      'Throw In Trash' => 'Çöp Kutusuna At',
      'All Queues' => 'Tüm Kuyruklar',
      'Respecting "%s" or minimum poll delay: waiting for %s second(s) to poll GitHub.' => '"%s" veya minimum yoklama gecikmesiyle ilgili olarak: GitHub’ı yoklamak için %s saniye bekleyin.',
      'This engine is used to edit Nuance sources.' => 'Bu motor, Nuance kaynaklarını düzenlemek için kullanılır.',
      'This queue has no open items which you have permission to work on.' => 'Bu sırada çalışma izniniz olan açık öğeler yok.',
      'Importing cursor "%s" only.' => 'İmleci yalnızca "%s" içe aktarma.',
      'Default queue.' => 'Varsayılan sıra.',
      'This command implementation ("%s") can not be applied to an item of type "%s".' => 'Bu komut uygulaması ("%s"), "%s" türündeki bir öğeye uygulanamaz.',
      'No source exists with PHID "%s".' => 'PHID "%s" ile kaynak yok.',
      'Routing' => 'Yönlendirme',
      'Event "%s" is previously known.' => '"%s" etkinliği önceden biliniyordu.',
      'Expected test file "%s" to contain an input section in JSON, then an expected result section in JSON, with the two sections separated by a line of "~~~~~", but the divider is not present in the file.' => 'JSON\'da bir giriş bölümü, ardından JSON\'da beklenen bir sonuç bölümü, "~~~~~" satırıyla ayrılmış, ancak ayırıcı dosyada mevcut değil, "%s" test dosyası bekleniyordu.',
      '%s renamed this queue from %s to %s.' => '%s, bu sırayı %s iken %s olarak yeniden adlandırdı.',
      'Unable to sync: no external object PHID.' => 'Eşitlenemiyor: harici nesne yok PHID.',
      'Import only a particular cursor.' => 'Yalnızca belirli bir imleci içe aktarın.',
      'Queues' => 'Sıralar',
      'Begin Work' => 'Çalışmaya Başla',
      'GitHub Event ID' => 'GitHub Etkinlik Kimliği',
      'Manage Nuance sources.' => 'Nuance kaynaklarını yönet.',
      'Search for sources by name substring.' => 'Kaynakları, adı alt dizgisine göre arayın.',
      'Create Source' => 'Kaynak Oluştur',
      'Tag %s' => 'Etiket %s',
      'Source %d' => 'Kaynak %s',
      '%s renamed this source from %s to %s.' => '%s, bu kaynağı %s iken %s olarak yeniden adlandırdı.',
      'Nuance Items' => 'Nuance Öğeleri',
      'Nuance' => 'Nuance',
      'Complaint' => 'Şikayet',
      'Throw in Trash' => 'Çöp Kutusuna At',
      'Received a 304 Not Modified from GitHub, no new events.' => 'GitHub\'dan 304 Değiştirilmemiş, yeni etkinlik yok.',
      'Owners of an item can always edit it.' => 'Bir öğenin sahipleri her zaman düzenleyebilir.',
      'This source ("%s") does not expose import cursors.' => 'Bu kaynak ("%s") ithalat imleçlerini göstermiyor.',
      'Item %d' => '%s Öğesi',
      'ETag for this request was "%s".' => 'Bu istek için ETag "%s" idi.',
      'Imported As' => 'İçe Aktarıldı',
      'Create a web form that submits into a Nuance queue.' => 'Nuance kuyruğuna gönderilen bir web formu oluşturun.',
      'Choose Source Type' => 'Kaynak Türü Seçin',
      'Browse Queues' => 'Kuyruklara Göz At',
      'Name of the source.' => 'Kaynağın adı.',
      'GitHub Event URI' => 'GitHub Etkinlik URI\'si',
      'Wrong Queue' => 'Yanlış Sıra',
      'Sources must have a name.' => 'Kaynakların bir adı olmalı.',
      'Type a queue name...' => 'Sıra adı yazın...',
      '%s rerouted this item from %s to %s.' => '%s bu öğeyi %s\'den %s\'e yeniden yönlendirdi.',
      'Owners of an item can always view it.' => 'Bir öğenin sahipleri her zaman görüntüleyebilir.',
      'Raw Event' => 'Ham Etkinlik',
      'There is no Nuance item with PHID "%s".' => 'PHID "%s" değerinde Nuance öğesi yok.',
      'All Sources' => 'Tüm Kaynaklar',
      'Exception while decoding test data for test "%s".' => '"%s" testi için test verilerinin kodunun çözülmesi sırasında istisna.',
      'You are trying to act on this item from the wrong queue: it is currently in a different queue.' => 'Bu öğe üzerinde yanlış sıradan hareket etmeye çalışıyorsunuz: şu anda farklı bir sırada.',
      'Unlocked' => 'Kilitsiz',
      '%s changed the status of this item from %s to %s.' => '%s, bu maddenin durumunu %s\'den %s\'e değiştirdi.',
      'This item does not support the specified command ("%s").' => 'Bu öğe belirtilen komutu desteklemiyor ("%s").',
      'High-Volume Task Queues' => 'Yüksek Hacimli Görev Kuyrukları',
      'Default view policy for newly created sources.' => 'Yeni oluşturulan kaynaklar için varsayılan görünüm politikası.',
      'Import to Maniphest' => 'Maniphest\'e Aktar',
      'This source has no input cursors.' => 'Bu kaynağın giriş imleci yok.',
      'Command Not Supported' => 'Komut Desteklenmiyor',
      'Choose which source to import.' => 'Alınacak kaynağı seçin.',
      'Edit Source' => 'Kaynağı Düzenle',
      'Source "%s" (of class "%s") returned two cursors from method "%s" with the same key ("%s"). Each cursor must have a unique key.' => '"%2$s" sınıfındaki "%1$s" kaynağı, aynı anahtarla ("%4$s") "%3$s" yönteminden iki imleç döndürdü. Her imlecin benzersiz bir anahtarı olmalıdır.',
      'Pushed: %s' => 'İtti: %s',
      'No queues found.' => 'Sıra bulunamadı.',
      'Issue #%d' => 'Sorun #%s',
      'Pending Commands' => 'Bekleyen Komutlar',
      'You must choose a source type.' => 'Bir kaynak tipi seçmelisiniz.',
      'More than one source matches "%s". Choose a narrower query, or use an ID or PHID to select a source. Matching sources: %s.' => 'Birden fazla kaynak "%s" ile eşleşiyor. Daha dar bir sorgu seçin veya kaynak seçmek için bir kimlik veya PHID kullanın. Eşleşen kaynaklar: %s.',
      'Queue' => 'Sıra',
      'View Raw Event' => 'Ham Etkinliği Görüntüle',
      'This source ("%s") does not have any import cursors.' => 'Bu kaynağın ("%s") herhangi bir içe aktarma imleci yok.',
      '%s reassigned this item from %s to %s.' => '%s, bu öğeyi %s\'den %s\'e yeniden atadı.',
      'Queue names must not be longer than %s character(s).' => 'Kuyruk adı %s karakterden uzun olmamalıdır.',
      'This engine is used to edit Nuance queues.' => 'Bu motor, Nuance sıralarını düzenlemek için kullanılır.',
      'GitHub %s %s (%s)' => 'GitHub %s %s (%s)',
      'Date Created' => 'Oluşturduğu Tarih',
      'Watched' => 'İzlenen',
      'Issued' => 'Veriliş',
      'Import issues and pull requests from a GitHub repository.' => 'Bir GitHub deposundan sorunları alın ve istekleri çekin.',
      'This item type ("%s", of class "%s") can not update items.' => 'Bu öğe türü ("%2$s" sınıfındaki "%1$s") öğeleri güncelleyemez.',
      'Added Milestone: %s' => 'Kilometre Taşı Eklendi: %s',
      'GitHub Repository' => 'GitHub Deposu',
      'Renamed' => 'Yeniden adlandırıldı',
      'Default Source Edit Policy' => 'Varsayılan Kaynak Düzenleme Politikası',
      'Trying to apply a command to the wrong item!' => 'Yanlış öğeye bir komut uygulamaya çalışıyor!',
      'Manage Item' => 'Öğeyi Yönet',
      'Reload from GitHub' => 'GitHub\'dan Tekrar Yükle',
      'Unable to sync: failed to load object "%s".' => 'Senkronize edilemedi: "%s" nesnesi yüklenemedi.',
      'View Item' => 'Öğeyi Görüntüle',
      'Nuance Console' => 'Nuance Konsolu',
      'Event Properties' => 'Etkinlik Özellikleri',
      'Sources must have a default queue.' => 'Kaynakların varsayılan bir sırası olmalıdır.',
      'Added Label: %s' => 'Eklenen Etiket: %s',
      'Specify the ID or PHID of an item to update. Parameter "%s" is not an ID or PHID.' => 'Güncellenecek öğenin kimliğini veya PHID\'sini belirtin. "%s" parametresi bir kimlik veya PHID değil.',
      'Submit Complaint' => 'Şikayet Gönder',
      'Edit Source: %s' => 'Kaynağı Düzenle: %s',
      'Expected test file "%s" to contain exactly two sections, but it has more than two sections.' => 'Tam olarak iki bölüm içermesi beklenen test dosyası "%s", ancak ikiden fazla bölümü var.',
      'Not in Queue' => 'Kuyrukta Değil',
      'Import Cursor' => 'İmleci İçe Aktar',
      'No source exists with ID "%s".' => '"%s" kimliğine sahip hiçbir kaynak yok.',
      'Default Queue' => 'Varsayılan Sıra',
    );
  }

}
