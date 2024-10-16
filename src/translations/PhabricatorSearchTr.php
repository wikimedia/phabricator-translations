<?php

final class PhabricatorSearchTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'Sonuç yok.',
      'This menu item is very important, and can not be disabled.' => 'Bu menü öğesi çok önemlidir ve devre dışı bırakılamaz.',
      'Enable Query?' => 'Sorgu Etkinleştirilsin mi?',
      'Personal Menu Items' => 'Kişisel Menü Öğeleri',
      'Format' => 'Biçim',
      'The queries you have saved are private. Only you can view or edit them.' => 'Kaydettiğiniz sorgular gizlidir. Bunları yalnızca siz görüntüleyebilir veya düzenleyebilirsiniz.',
      'cat -A can find mice hiding in files.' => 'kedi -Bir dosyada saklanan fareleri bulabilirsiniz.',
      'Export Format Not Available' => 'Dışa Aktarma Biçimi Mevcut Değil',
      'Readable' => 'Okunabilir',
      'Search Engines' => 'Arama Motorları',
      'Form "%s" is not a valid form which you have permission to see.' => '"%s" formu, görme izniniz olan geçerli bir form değil.',
      'Reset all common ngram records.' => 'Tüm yaygın ngram kayıtlarını sıfırla.',
      'N/A' => 'Bilinmiyor',
      'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => '"%s" URI geçerli bir bağlantı URI değil. "%s" gibi bir protokolle başlayan tam, geçerli bir URI olmalıdır.',
      'Builtin \'%s\' is not supported!' => 'Dahili \'%s\' desteklenmiyor!',
      'You must choose a room.' => 'Bir oda seçmelisin.',
      'Elasticsearch server returned invalid JSON!' => 'Elasticsearch sunucusu geçersiz JSON!',
      'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => 'Popüler ıvır zıvır oyun "World of Warcraft" Khajiit denilen kedi insanlar bir yarış özellikleri.',
      'Disable Menu Item' => 'Menü Öğesini Devre Dışı Bırak',
      'Add to Dashboard' => 'Panoya Ekle',
      'Failed to load custom PHID "%s"!' => 'Özel PHID "%s" yüklenemedi!',
      'Cats use their keen sense of smell to avoid feeling empathy.' => 'Kediler empati hissetmekten kaçınmak için keskin koku duyusunu kullanırlar.',
      'Find stuff in big piles.' => 'Büyük kazıklardaki eşyaları bulun.',
      'You must choose a dashboard.' => 'Bir gösterge tablosu seçmelisiniz.',
      'There is no active query yet.' => 'Henüz aktif bir sorgu yok.',
      'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'Conduit API yöntemi çağrıları için maksimum sayfa boyutu 100\'dür, ancak bu çağrı %s olarak belirlenmiştir.',
      'Service index is out of date, repairing...' => 'Servis endeksi güncel değil, tamir ediyor...',
      'Query: %s' => 'Sorgu: %s',
      'Run a search query. Intended for debugging and development.' => 'Bir arama sorgusu çalıştırın. Hata ayıklama ve geliştirme amaçlı.',
      'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => 'Bu SearchEngine\'deki iki alan aynı anahtarı kullanır ("%s"), ancak her alanın benzersiz bir anahtar kullanması gerekir.',
      '—' => '—',
      'Cats have five pointy ends.' => 'Kedilerin beş sivri ucu var.',
      'Personal Saved Queries' => 'Kişisel Kayıtlı Sorgular',
      'Ignored Common Word' => 'Yok Sayılan Ortak Sözü',
      'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => '"%s" ("%s" sınıfından) ve "%s" ("%s" sınıfından) SearchFields değerleri aynı Conduit anahtarını ("%s") tanımlar. Anahtarlar benzersiz olmalıdır.',
      'You must choose a link name.' => 'Bir bağlantı adı seçmelisiniz.',
      'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => 'Ortak ngramları yeniden hesapla. Bu, doğru kullanılmadığında arama kalitesine zarar verebilecek gelişmiş bir iş akışıdır.',
      'Engine: Fulltext' => 'Motor: Tam Metin',
      'Global Menu Items' => 'Genel Menü Öğeleri',
      'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'Bu sorgu geçersiz bir parametre belirtir. Sorgu parametrelerini gözden geçirin ve hataları düzeltin.',
      'You must choose a label name.' => 'Bir etiket adı seçmelisiniz.',
      'Edit the menu for your personal account.' => 'Kişisel hesabınızın menüsünü düzenleyin.',
      'Application "%s" is not a valid application which you have permission to see.' => '"%s" uygulaması, görme izniniz olan geçerli bir uygulama değil.',
      'Specify either --reset or --threshold.' => '--reset veya --threshold öğesini belirtin.',
      'Queries' => 'Sorgular',
      'Already Default' => 'Zaten Varsayılan',
      'No services need initialization.' => 'Hiçbir hizmetin başlatılması gerekmez.',
      'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'Kedi için İspanyolca kelime "cato"\'dur. En büyük kedi "el cato" olarak adlandırılır.',
      'Add New Menu Item...' => 'Yeni Menü Öğesi Ekle...',
      'Untitled "%s" Item' => 'Başlıksız "%s" Öğe',
      'Query key "%s" does not correspond to a valid query.' => '"%s" sorgu anahtarı geçerli bir sorguya karşılık gelmiyor.',
      'The first cats evolved on the savannah about 8,000 years ago.' => 'İlk kediler, yaklaşık 8.000 yıl önce savanada gelişti.',
      'You must name the query.' => 'Sorguyu adlandırmanız gerekir.',
      'Choose Item Icon' => 'Öğe Simgesi Seçin',
      'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => 'Kediler size avlarını sık sık getirecektir çünkü avlanamadığınız için üzgün hissediyorlar.',
      'Substring Search' => 'Alt Dizi Arama',
      'This call does not support any attachments.' => 'Bu çağrı hiçbir eki desteklemiyor.',
      'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => '"%s" sorgusunu gerçekten silinsin mi? Bunu geri alamazsınız. Birlikte filtreleme sonuçlarını aldığınız tüm harika zamanları hatırlıyor musunuz?',
      'Edit Menu Item: %s' => 'Menü Öğesi Düzenlemesi: %s',
      'Not all cats can retract their claws, but most of them can.' => 'Tüm kediler pençelerini geri çekemezler, ancak çoğu yapabilir.',
      'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => 'Bu menüdeki bölümleri ayırmak için kullanabileceğiniz görsel bir ayırıcıdır. Yapılandırılabilir seçeneklere sahip değil.',
      'Room "%s" is not a valid room which you have permission to see.' => '"%s" odası, görme izniniz olan geçerli bir oda değil.',
      'Open Documents' => 'Belgeleri Aç',
      'Taco cat spelled backwards is taco cat.' => 'Geriye doğru yazıldığından taco kedisi taco kedisidir.',
      'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => 'Tam metin arama sorgusuyla eşleşen nesneleri bulun. Ayrıntılar için belgelerdeki "Kullanıcı Kılavuzunu Ara" kısmına bakın.',
      'Search Ngram' => 'Ngram Ara',
      'Enable Menu Item' => 'Menü Öğesini Etkinleştir',
      'Engine: Hovercards' => 'Motor: Hoverkartlar',
      'Search for objects with specific IDs.' => 'Belirli kimlikleri olan nesneleri arayın.',
      'Global Saved Queries' => 'Küresel Kayıtlı Sorgular',
      'Profile menu items can not be generated without an object context.' => 'Profil menüsü öğeleri, nesne bağlamı olmadan oluşturulamaz.',
      'Profile Menu' => 'Profil Menüsü',
      'Service initialization complete.' => 'Servis başlatma tamamlandı.',
      'Configure Menu' => 'Menüyü Yapılandır',
      'Cats have a tail, two feet, between one and three ears, and two other feet.' => 'Kedilerin kuyruğu, iki ayağı, bir ila üç kulak arasında ve diğer iki ayağı vardır.',
      'Bucket' => 'Kova',
      'Query Errors' => 'Sorgu Hataları',
      'Unsupported item action "%s".' => 'Desteklenmeyen öğe işlemi "%s".',
      'Not supported.' => 'Desteklenmiyor.',
      'Unable to load object "%s" to rebuild indexes.' => 'Dizinleri yeniden oluşturmak için "%s" nesnesi yüklenemiyor.',
      'You must choose a form.' => 'Bir form seçmelisin.',
      'You can not create that relationship because it would create a circular dependency:' => 'Bu ilişkiyi oluşturamazsınız çünkü dairesel bir bağımlılık yaratacaktır:',
      'Engine class is null.' => 'Motor sınıfı boş.',
      'Mandatory Item' => 'Zorunlu Öğe',
      'Home Menu' => 'Ana Menü',
      'Raw query to execute.' => 'Yürütülecek ham sorgu.',
      'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => 'İki alan özelliği aynı anahtarı paylaşıyor ("%s"). Her şartname benzersiz bir anahtara sahip olmalıdır.',
      'Profile Menu Items' => 'Profil Menü Öğeleri',
      'You must choose a URI to link to.' => 'Bağlanmak için bir URI seçmelisiniz.',
      'Field Present: %s' => 'Mevcut Alan: %s',
      'Initialize or repair a search service.' => 'Bir arama servisini sıfırlayın veya onarın.',
      'Current Default' => 'Geçerli Varsayılan',
      'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => 'KEDİ taraması dışında, kediler modern tıbbın neredeyse hiç katkısı olmadı.',
      'Query Name' => 'Sorgu Adı',
      'No search engines available.' => 'Kullanılabilir arama motoru yok.',
      'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => 'Bir kedinin görsel, koku alma ve işitsel duyuları, avlanma becerilerine ve doğal savunmalarına katkıda bulunur.',
      'Object Fields' => 'Nesne Alanları',
      'Engine: Index' => 'Motor: İndeks',
      'Constraints' => 'Özel Sorgu Kısıtlamaları',
      'Result Ordering' => 'Sonuç Düzeni',
      'Edit Saved Query' => 'Kayıtlı Sorguyu Düzenle',
      'Motivator' => 'Motivasyoncu',
      'Menu Items' => 'Menü Öğeleri',
      'Object types to reindex, like "task", "commit" or "revision".' => '"task", "commit" veya "revision" gibi, yeniden dizine eklenecek nesne türleri.',
      'Reindex all documents.' => 'Tüm belgeleri yeniden dizinlendirin.',
      'Hide Query' => 'Sorguyu Gizle',
      'Set Default Query' => 'Varsayılan Sorguyu Ayarla',
      'Select a document type...' => 'Bir belge tipi seçin...',
      '(Restricted/Invalid Project)' => '(Sınırlı/Geçersiz Proje)',
      'Constants supported by the `%s` constraint:' => '`%s` kısıtı tarafından desteklenen sabitler:',
      'Use "--force" to force the index to update these documents.' => 'Dizini bu belgeleri güncellemeye zorlamak için "--force" kullanın.',
      'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.' => 'Bu menü öğesi devre dışı bırakılsın mı? Artık menüde görünmeyecek, ancak daha sonra yeniden etkinleştirebilirsiniz.',
      '(See table below.)' => '(Aşağıdaki tabloya bakınız.)',
      'Build or rebuild search indexes.' => 'Arama dizinlerini oluşturun veya yeniden oluşturun.',
      'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => 'Kediler, kuyruklarındaki küçük kemikleri değiştirmek için balık açısından zengin bir diyet yemelidir.',
      'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => 'Bu menü bu menü için varsayılan olarak ayarlandı mı? Bu sayfaya gelen kullanıcılara varsayılan olarak bu öğenin içeriği gösterilecektir.',
      'Fulltext Engine' => 'Tam Metin Motor',
      'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => 'İki arama motoru eki ("%s" ve "%s" sınıfları arasında) aynı ek anahtarını ("%s") belirtir; anahtarların benzersiz olması gerekir.',
      'In ancient Egypt, the cat-god Horus watched over all cats.' => 'Eski Mısır\'da, kedi tanrısı Horus tüm kedileri seyretti.',
      'Ngrams Engine' => 'Ngramlar Motor',
      'Delete Query' => 'Sorguyu Sil',
      '"%s" date can not be parsed.' => '"%s" tarihi ayrıştırılamaz.',
      'Current Menu Items' => 'Geçerli Menü Öğeleri',
      'Failed to update search index for document "%s": %s' => '"%s" belgeyi arama dizini güncellenemedi: %s',
      'Search for objects with specific PHIDs.' => 'Belirli PHID\'lere sahip nesneleri arayın.',
      'Full Name' => 'Tam ad',
      'Type "%s" matches no indexable objects. Supported types are: %s.' => '"%s" tipi endekslenebilir nesnelerle eşleşmiyor. Desteklenen türler: %s.',
      'Menu Item' => 'Menü Öğesi',
      'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => 'Bu, nesneleri listelemenizi, sorgulamanızı veya aramanızı sağlayan standart bir **ApplicationSearch** yöntemidir. Bu uç noktalarla ilgili belgeler için, **[[ %s | Kanal API\'si: Arama Bitiş Noktalarını Kullanma ]]** sayfasına bakın.',
      'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => 'Pek çok kedi düşük ışıkta siyah görünür ve şans silindirlerinde -2 değiştiriciye maruz kalır.',
      'Attachments' => 'Ekler',
      'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => 'Japonca kedi kelimesi aynı zamanda pirinç kelimesi olan "kome"\'dir. Japon kediler pirinç yemeyi sever, bu yüzden ikisi eşanlamlıdır.',
      'In the wild, cats and raccoons sometimes hunt together in packs.' => 'Vahşi doğada, kediler ve rakunlar bazen birlikte toplanırlar.',
      'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => 'Sorgu ("%s" kimliğiyle) zaten kaydedildi. Sorgular kaydedildiğinde değişmez.',
      'No Content' => 'İçeriksiz',
      'Prebuilt Queries' => 'Yerleşik ve Kayıtlı Sorgular',
      'Fulltext Search Results' => 'Tam Metin Arama Sonuçları',
      'Constraint "%s" is not a valid constraint for this query.' => '"%s" kısıtı bu sorgu için geçerli bir kısıtlama değil.',
      'Document Status' => 'Belge Durumu',
      'Engine: Search' => 'Motor: Ara',
      'Profile Menu Item' => 'Profil Menü Öğesi',
      '"2022-12-25" or "7 days ago"...' => '"2022-12-25" veya "7 gün önce"...',
      'Paging and Limits' => 'Sayfalama ve Sınırlamalar',
      'A cat can run seven times faster than a human, but only for a short distance.' => 'Bir kedi, insandan yedi kat daha hızlı koşabilir, ancak yalnızca kısa bir mesafe için.',
      'This engine is used to modify menu items on profiles.' => 'Bu motor, profillerdeki menü öğelerini değiştirmek için kullanılır.',
      'No object relationship of type "%s" exists.' => '"%s" türünde hiçbir nesne ilişkisi yok.',
      'Delete Menu Item' => 'Menü Öğesini Sil',
      'Service index is already up to date.' => 'Hizmet indeksi zaten güncel.',
      'Cats spend most of their time plotting to kill their owner.' => 'Kediler zamanlarının çoğunu sahibini öldürmek için plan yaparak geçirirler.',
      'Storage Used' => 'Kullanılan Depolama',
      'Project Menu' => 'Proje Menüsü',
      'Edit Related Objects...' => 'İlgili Nesneleri Düzenle...',
      'Create Menu Item' => 'Menü Öğesi Oluştur',
      'No saved queries.' => 'Kayıtlı sorgu yok.',
      'Supports ID/PHID Queries' => 'ID/PHID Sorgularını Destekler',
      'The word "catastrophe" has no etymological relationship to the word "cat".' => '"Felaket" kelimesinin "kedi" kelimesi ile etimolojik bir ilişkisi yoktur.',
      'Edit Builtin Item' => 'Yerleşik Öğeyi Düzenle',
      '\'%s\' is not the name of a known object.' => '\'%s\' bilinen bir nesnenin adı değil.',
      'You must delegate to this controller, not invoke it directly.' => 'Doğrudan kontrol etmemek için bu denetleyiciye yetki vermelisiniz.',
      'Cat tails are flexible because they contain thousands of tiny bones.' => 'Kedi kuyrukları esnektir, çünkü binlerce minik kemik içerirler.',
      'Cat Facts' => 'Kedi Gerçekleri',
      'Ferret Engine Ngrams' => 'Ferret Motor Ngramları',
      'Forced search index updates for %s document(s).' => '%s belge için zorunlu arama dizini güncellemeleri.',
      'Updated search indexes for %s document(s).' => '%s belge için güncellenmiş arama dizinleri.',
      'Cats are stealthy predators and nearly invisible to radar.' => 'Kediler gizli avcılardır ve neredeyse radarda görünmezler.',
      'Search Index Versions' => 'Arama Dizini Sürümleri',
      'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.' => '"%2$s" nesnesi için bir ilişki oluşturamazsınız ("%1$s" türünde), çünkü bu ilişki için doğru nesne türü değildir.',
      'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => 'Nesne aynı yerleşik tuşa sahip iki öğe üretti ("%s"). Her öğenin benzersiz bir yerleşik anahtarı olması gerekir.',
      '\'%s\' is not a builtin!' => '\'%s\' yerleşik değil!',
      'All Open Objects' => 'Tüm Açık Nesneler',
      'Buckets Overflowing' => 'Taşan Kovalar',
      'Disable Query' => 'Sorguyu Devre Dışı Bırak',
      'Divider' => 'Bölen',
      'Manage Menu' => 'Menüyü Yönet',
      'Skipped %s documents(s) which have not updated since they were last indexed.' => 'En son dizine eklendiklerinden bu yana güncellenmemiş olan %s belge atlandı.',
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => 'Kaydedilen en büyük kedi burundan kuyruğa yaklaşık 11 inç uzunluğundaydı.',
      'PHID Type' => 'PHID Türü',
      'Invalid Relationship' => 'Geçersiz İlişki',
      'There is nothing here.' => 'Burada bir şey yok.',
      'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Arama motoru ("%s"), başka bir alanla çarpışan bir anahtarla ("%s") dışa aktarma alanını tanımlar. Her alanın benzersiz bir anahtarı olmalıdır.',
      'IDs' => 'Kimlikler',
      'This query will become your default query in the current application.' => 'Bu sorgu mevcut uygulamadaki varsayılan sorgunuz olacaktır.',
      'PHIDs' => 'PHID\'ler',
      'Save Query' => 'Sorguyu Kaydet',
      'Full-Text Search' => 'Tam Metin Arama',
      'Too few documents of type "%s" for any ngrams to be common.' => 'Ngram\'ların ortak olması için "%s" türünde çok az belge var.',
      'Deprecated alias for "%s".' => '"%s" için kullanımdan kaldırılmış takma ad.',
      'Edit Menu Item' => 'Menü Öğesini Düzenle',
      'Initializing search service "%s".' => 'Arama servisi "%s" başlatılıyor.',
      'SELECT' => 'SEÇİM',
      'Skipping service "%s" because it is not writable.' => '"%s" servisi atlanıyor çünkü yazılabilir değil.',
      'Date value for "%s" can not be parsed.' => '"%s" için tarih değeri ayrıştırılamaz.',
      'NOTE' => 'NOT',
      '"%s" must be a date before "%s".' => '"%s", "%s" önceki bir tarih olmalıdır.',
      'Fulltext Search' => 'Tam Metin Arama',
      'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.' => 'Bu belgelerin daha fazlasında bulunan ngramları buda. 0.0 ile 1.0 arasında bir değer girin.',
      'The first cats evolved in swamps about 65 years ago.' => 'İlk kediler yaklaşık 65 yıl önce bataklıklarda gelişti.',
      'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'Bir kedinin renklendirmeyi inceleyerek ne kadar sıcak olduğunu söyleyebilirsiniz: daha serin alanlar daha karanlıktır.',
      'Specify a query with --query.' => '--query ile bir sorgu belirtin.',
      'You must choose an application.' => 'Bir uygulama seçmelisiniz.',
      'This menu currently has no items.' => 'Bu menüde şu anda öğe yok.',
      'Document Types' => 'Belge Türleri',
      'Setting "%s" is misconfigured: %s' => '"%s" ayarı yanlış yapılandırılmış: %s',
      'This item is already set as the default item for this menu.' => 'Bu öğe zaten bu menü için varsayılan öğe olarak ayarlanmış.',
      'Edit the global default menu for all users.' => 'Tüm kullanıcılar için genel varsayılan menüyü düzenleyin.',
      'Profile Menu User Guide' => 'Profil Menüsü Kullanıcı Kılavuzu',
      'You can not create a relationship to object "%s" because objects can not be related to themselves.' => '"%s" nesnesiyle bir ilişki oluşturamazsınız çünkü nesneler kendileriyle ilişkili olamaz.',
      'Project "%s" is not a valid project which you have permission to see.' => '"%s" projesi, görme izniniz olan geçerli bir proje değil.',
      'Choose a valid export format.' => 'Geçerli bir dışa aktarma formatı seçin.',
      'Tooltip' => 'İpucu',
      'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => 'Arama motoru ("%s"), %s beklenen yanlış sayısıdır, ancak %s yanlış nesne sayısını verdi.',
      'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => 'Bu yerleşik sorgu silinemez, ancak sorgu menünüzde görünmemesi için devre dışı bırakabilirsiniz. Daha sonra tekrar etkinleştirebilirsiniz. "%s" dahili sorgusunu devre dışı bırakılsın mı?',
      'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' => 'Takımınızı harika fikirlerden ilham verici alıntılarla motive edin. Bu menü maddesi her gün yeni bir teklif gösteriyor.',
      'Saved Queries' => 'Kaydedilen Sorgular',
      '(Restricted/Invalid Form)' => '(Sınırlı/Geçersiz Form)',
      'Edit Profile Menu Item Configurations' => 'Profil Düzenle Menü Öğesi Yapılandırmaları',
      'Delete this menu item?' => 'Bu menü öğesini silinsin mi?',
      'Cats prefer vanilla ice cream.' => 'Kediler vanilyalı dondurmayı tercih eder.',
      'Resetting common ngrams for "%s".' => '"%s" genel ngramları sıfırlanıyor.',
      'Minimum page size for API searches is 1, but this call specified %s.' => 'API aramaları için minimum sayfa boyutu 1\'dir, ancak bu çağrı %s olarak belirlenmiştir.',
      'Export Results' => 'Sonuçları Dışa Aktar',
      'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => 'Arama motorlarını yapılandırmak için [[ %s | `%s` ]] yapılandırma. Belgeler için **[[ %s | %s ]]** sayfasına bakın.',
      'All Fulltext Search hosts failed:' => 'Tüm Tam Metin Arama ana bilgisayarları başarısız oldu:',
      'All Objects' => 'Tüm Nesneler',
      'Dashboard "%s" is not a valid dashboard which you have permission to see.' => '"%s" gösterge tablosu, görme izniniz olan geçerli bir gösterge tablosu değil.',
      'Failed to rebuild search index for any documents.' => 'Herhangi bir doküman için arama dizini yeniden oluşturulamadı.',
      'Updated common ngrams for "%s".' => '"%s" için sık kullanılan ngramlar güncellendi.',
      'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => 'Sorgu, birden fazla sonuç sayfasıyla eşleşti. Sonuçlar kovalanmadan önce sayfalandırılır, bu nedenle sonraki sayfalar herhangi bir kovada ek sonuçlar içerebilir.',
      'Ferret Fulltext Engine' => 'Ferret Tam Metin Motoru',
      'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.' => 'Dışa aktarma motor uzantısı ("%s"), %s beklenen, ancak %s olan hatalı nesne sayısını verdi.',
      'Link' => 'Bağlantı',
      'Enable Query' => 'Sorguyu Etkinleştir',
      'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => 'Bu öğe varsayılan öğe olarak ayarlanamaz. Bunun nedeni genellikle öğenin kendine ait bir sayfası veya harici bir sayfaya bağlantısı olmamasıdır.',
      'Browse Results' => 'Sonuçlara Göz Atın',
      'Application "%s" is not installed!' => '"%s" uygulaması kurulmamış!',
      'Ignored Short Word' => 'Yok Sayılan Kısa Kelime',
      'Exact Search' => 'Tam Arama',
      'Enable this menu item? It will appear in the menu again.' => 'Bu menü öğesini etkinleştirilsin mi? Menüde tekrar görünecektir.',
      'Created By Me' => 'Oluşturan Benim',
      'Specify either --reset or --threshold, not both.' => 'Her ikisini de değil, --reset veya --threshold belirtin.',
      'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => 'Nesne, yerleşik öğe anahtarı olmayan bir yerleşik öğe üretti! Yerleşik öğelerin benzersiz bir anahtarı olması gerekir.',
      'Disable Query?' => 'Sorguyu Devre Dışı Bırakılsın mı?',
      'No Bucketing' => 'Kova Yok',
      'Use Results' => 'Sonuçları Kullan',
      'Order By' => 'Sıralama',
      'No new common ngrams exist for "%s".' => '"%s" yeni ortak şema yok.',
      'Cats purr when they are happy, upset, or asleep.' => 'Kediler mutlu, üzgün veya uyurken mutlu olurlar.',
      'Save this query as a global query, making it visible to all users.' => 'Bu sorguyu genel bir sorgu olarak kaydedin, tüm kullanıcılar tarafından görülebilir hale getirin.',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => 'Nesne mevcut olmadığı veya yüklenemediği için "%s" nesnesiyle bir ilişki oluşturamıyorsunuz.',
      'Edit Query' => 'Sorguyu Düzenle',
      'No results found for this query.' => 'Bu sorguya sonuç bulunamadı.',
      'Searched For:' => 'Aradığı:',
      'Force a complete rebuild of the entire index instead of an incremental update.' => 'Artımlı bir güncelleme yerine tüm dizinin tamamını yeniden oluşturmaya zorlayın.',
      'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => 'Benlik saygısı yüksek olan kediler, saldırılarını başlatmak için yüksek basamaklar ararlar. Dikkat et!',
      'Motivator: %s' => 'Motive edici: %s',
      '%s (Not Available)' => '%s (Mevcut Değil)',
      'Specify a numeric threshold between 0 and 1.' => '0 ile 1 arasında bir sayısal eşik belirtin.',
      '(Restricted/Invalid Application)' => '(Sınırlı/Geçersiz Uygulama)',
      'Expected buildNavigationMenuItems() to return a list of PHUIListItemView objects, but got a surprise.' => 'PHUIListItemView nesnelerinin bir listesini döndürmek için buildNavigationMenuItems() bekleniyor, ancak bir sürpriz oldu.',
      'DEV: Overheated State' => 'DEV: Aşırı Isınmış Durumu',
      'Portal Menu' => 'Portal Menüsü',
      'Not Defaultable' => 'Varsayılan Değil',
      'Really Delete Query?' => 'Gerçekten Sorguyu Silinsin mi?',
      'Query offset is too large. offset+limit=%s (max=%s)' => 'Sorgu sapması çok büyük. offset+limit=%s (max=%s)',
      'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => 'Bu süreçte indeksleme yerine, servetlere ilişkin görevleri sıraya alın. Bu, performansı artırabilir ancak arama dizinlemede hata ayıklamayı zorlaştırır.',
      'Edit Queries...' => 'Sorguları Düzenle...',
      'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => 'Yerleşik öğe ("%s") hatalı bir öğe anahtarı belirtir ("%s"); uygun bir ürün uygulaması mevcut değildir.',
      'DEV: New User State' => 'DEV: Yeni Kullanıcı Durumu',
      'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => 'Dışa aktarma motor uzantısı ("%s"), başka bir alanla çakışan bir anahtarla ("%s") dışa aktarma alanını tanımlar. Her alanın benzersiz bir anahtarı olmalıdır.',
      'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => 'Bir kedi kuyruğu, bir kedinin kuyruğuna benzeyen bir görünüme sahip bir sulak alan bitkisidir.',
      'Service index does not exist, creating...' => 'Hizmet dizini mevcut değil, oluşturuluyor...',
      'Export Data' => 'Verileri Dışa Aktar',
      'Circular Dependency' => 'Dairesel Bağımlılık',
      'Cats use a special type of magnetism to help them land on their feet.' => 'Kediler, ayaklarının dibine inmelerine yardımcı olmak için özel bir manyetizm türü kullanırlar.',
      'Lisk Builtin Properties' => 'Lisk Yerleşik Özellikleri',
      'Unable to Render Dashboard' => 'Gösterge Tablosu Oluşturulamıyor',
      'Browse Document Types' => 'Belge Türlerine Göz Atın',
      'Queued %s document(s) for background indexing.' => 'Arka plan endekslemesi için sıraya alınmış %s belge.',
      '(Restricted/Invalid Conpherence)' => '(Sınırlı/Geçersiz Çevre Birimi)',
      'Threshold must be greater than 0.0 and less than 1.0.' => 'Eşik değeri 0.0\'dan büyük ve 1.0\'dan küçük olmalıdır.',
      'Enable the built-in query "%s"? It will appear in your menu again.' => 'Yerleşik sorgu "%s" etkinleştirilsin mi? Menünüzde tekrar görünecek.',
      'Engine Name' => 'Motor Adı',
    );
  }

}
