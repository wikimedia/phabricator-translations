<?php

final class PhabricatorHeraldTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'Bir nesne adı gereklidir.',
      'No object exists by that name.' => 'Bu isimde hiçbir nesne yok.',
      'Rule must have a name.' => 'Kuralın bir ismi olmalı.',
      'Webhook ID to call' => 'Aranacak Webhook Kimliği',
      'Invalid Targets' => 'Geçersiz Hedefler',
      '(Invalid List)' => '(Geçersiz Liste)',
      'Herald field "%s" has unknown standard type "%s".' => 'Herald alanı "%s", "%s" standart tipinde bilinmiyor.',
      'Object rules inherit the edit policies of their objects.' => 'Nesne kuralları, nesnelerinin düzenleme politikalarını devralır.',
      'This is an old transcript which uses an obsolete log format. Detailed action information is not available.' => 'Bu eski bir günlük formatı kullanan eski bir transkript. Detaylı işlem bilgisi mevcut değildir.',
      'Applies To' => 'Şunlara Uygulanır',
      'You can not create a rule for that object, because you do not have permission to edit it. You can only create rules for objects you can edit.' => 'Bu nesne için bir kural oluşturamazsınız, çünkü düzenleme izniniz yoktur. Yalnızca düzenleyebileceğiniz nesneler için kurallar oluşturabilirsiniz.',
      'The selected content type ("%s") is not recognized by Herald.' => 'Seçilen içerik türü ("%s") Herald tarafından tanınmıyor.',
      'Regular expression pair is not a pair!' => 'Normal ifade çifti bir çift değildir!',
      'Call webhooks: %s.' => 'Webhook\'ları arayın: %s.',
      'You must %s to a boolean first!' => 'İlk önce bir boole %s gerekir!',
      'Disable the rule.' => 'Kuralı pasifleştir.',
      'Create Webhook' => 'Webhook Oluştur',
      'This action has no effect on %s target(s): %s.' => 'Bu işlemin %s hedef üzerinde etkisi yok: %s.',
      '%s edited this rule.' => '%s bu kuralı düzenledi.',
      'Failed to decode rule data.' => 'Kural verilerinin kodu çözülemedi.',
      'Unloadable Targets' => 'Yüklenemeyen Hedefler',
      'Set the "silent" flag on the request.' => 'İstek üzerine "sessiz" bayrağını ayarlayın.',
      'Unknown reason ("%s").' => 'Bilinmeyen sebep ("%s").',
      'When all of these conditions are met:' => 'Bu koşulların tümü karşılandığında:',
      'all of' => 'hepsi',
      '%s changed hook status from %s to %s.' => '%s, kanca durumunu %s\'den %s\'e değiştirdi.',
      'lacks bit' => 'biraz eksik',
      'Type a Herald rule name...' => 'Bir Herald kural adı yazın...',
      '%s changed the URI for this webhook from %s to %s.' => '%s, bu webhook için URI’yı %s\'den %s\'e değiştirdi.',
      'This adapter can not trigger on objects.' => 'Bu adaptör nesnelerde tetiklenemez.',
      'The first regexp in the regexp pair, "%s", is not a valid regexp.' => 'Regexp çiftindeki ilk regexp, "%s", geçerli bir regexp değil.',
      'Unknown Field ("%s")' => 'Bilinmeyen Alan ("%s")',
      'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.' => '"%s" normal ifade çifti geçerli JSON değil. İki öğeli geçerli bir JSON dizisi girin.',
      'Specify a webhook to call with "--id".' => '"--id" ile çağrılacak bir webhook belirtin.',
      'Matched' => 'Eşleşen',
      'Webhook status "%s" is not valid. Valid statuses are: %s.' => 'Webhook durumu "%s" geçerli değil. Geçerli durumlar: %s.',
      'Webhook names can be no longer than %s characters.' => 'Webhook adları, %s karakterden uzun olamaz.',
      'Set the "secure" flag on the request.' => 'İstek üzerine "güvenli" bayrağını ayarlayın.',
      'This %s rule triggers for %s.' => 'Bu %s kuralı, %s tetikler.',
      'Take these actions %s' => 'Bu işlemleri yap %s',
      'HMAC Key' => 'HMAC Anahtarı',
      'Expected condition value to be an array.' => 'Bir dizi olması beklenen koşul değeri.',
      'All Transcripts' => 'Tüm Transkriptler',
      'does not contain' => 'içermiyor',
      'Webhook %d' => 'Webhook %s',
      'Invalid Content Type' => 'Geçersiz İçerik Türü',
      'Browse Herald Adapters' => 'Herald Adaptörlerine Göz At',
      'Run On Host' => 'Ana Bilgisayarda Çalıştır',
      'Test Webhook' => 'Webhook Test Et',
      'No Targets' => 'Hedef Yok',
      'Specify "--enable" or "--disable", but not both.' => '"--enable" veya "--disable" belirtiniz, ancak ikisi birlikte değil.',
      'only the first time this rule matches:' => 'bu kural yalnızca ilk kez eşleştiğinde:',
      'This was a dry run to test Herald rules, no actions were executed.' => 'Bu, Herald kurallarını test etmek için kuru bir işlemdi, hiçbir işlem yapılmadı.',
      'Rule failed automatically because it is an object rule which is not relevant for this object.' => 'Kural, bu nesne için uygun olmayan bir nesne kuralı olduğu için otomatik olarak başarısız oldu.',
      '[Herald]' => '[Herald]',
      'Object Rule' => 'Nesne Kuralı',
      'Rule Name' => 'Kural Adı',
      'Disabled Rules' => 'Engelli Kuralları',
      'This engine is used to edit webhooks.' => 'Bu motor webhookları düzenlemek için kullanılır.',
      'Rule failed automatically because it has no conditions.' => 'Kural, hiçbir koşulu olmadığı için otomatik olarak başarısız oldu.',
      'When %s these conditions are met:' => '%s olduğunda bu koşullar karşılanır:',
      'Object is of wrong type for adapter!' => 'Bağdaştırıcı için nesne yanlış türde!',
      'Type an adapter name...' => 'Bir adaptör adı yazın...',
      'Specify an object to test rules for with "--object".' => '"--object" ile kuralları sınamak için bir nesne belirtin.',
      'Enable Rule' => 'Kuralı Etkinleştir',
      'Unknown Field: "%s"' => 'Bilinmeyen Alan: %s',
      'Search for rules with given authors.' => 'Verilen yazarlarla kuralları arayın.',
      'Webhook' => 'Webhook',
      'This action specifies no targets.' => 'Bu işlem hiçbir hedef belirtmiyor.',
      'Called webhooks: %s.' => 'Denilen webhookları: %s.',
      'Take these actions the first time this rule matches:' => 'Bu kural ilk kez eşleştiğinde bu işlemleri yapın:',
      'Forbidden' => 'Yasak',
      '<Unknown Action "%s">' => '<Bilinmeyen Eylem "%s">',
      'In Silent Mode' => 'Sessiz Modda',
      'Action: %s' => 'İşlem: %s',
      'Any condition matched.' => 'Her koşul eşleşir.',
      'Global Rule' => 'Genel Kural',
      'Search for rules of given types.' => 'Verilen türlerin kurallarını arayın.',
      'Do nothing.' => 'Hiçbir şey yapma.',
      'Details of this transcript have been garbage collected.' => 'Bu transkriptin detayları çöp toplandı.',
      'This server is running in silent mode, so it will not publish webhooks. To adjust this setting, see @{config:phabricator.silent} in Config.' => 'Phabricator şu anda sessiz modda yapılandırılmıştır, dolayısıyla web kancasını yayınlamaz. Bu ayarı yapmak için, Yapılandırmada @{config:phabricator.silent} bakabilirsiniz.',
      'You do not have permission to manage global Herald rules.' => 'Küresel Herald kurallarını yönetme izniniz yok.',
      'The second regexp in the regexp pair, "%s", is not a valid regexp.' => 'Regexp çiftindeki ikinci regexp, "%s", geçerli bir regexp değil.',
      'Test rules which run when another Herald rule is created or updated.' => 'Başka bir Herald kuralı oluşturulduğunda veya güncellendiğinde çalışan test kuralları.',
      'Edit Attributes' => 'Öznitelikleri Düzenle',
      'Effect type passed to "%s" must be a scalar string.' => '"%s"\'e iletilen efekt türü skaler bir dize olmalı.',
      'Old Transcript' => 'Eski Transkript',
      'Is newly created' => 'Yeni oluşturuldu',
      'Regenerate HMAC Key' => 'HMAC Anahtarını Yeniden Oluştur',
      'Specify a content type to run rules for. For this object, valid content types are: %s.' => 'Kurallarını çalıştırmak için bir içerik türü belirtin. Bu nesne için geçerli içerik türleri: %s.',
      'React to Herald rules being created or updated.' => 'Oluşturulan veya güncellenen Herald kurallarına tepki verin.',
      'Object state prevented rule evaluation.' => 'Nesne durumu kural değerlendirmesini engelledi.',
      'This action has no effect.' => 'Bu eylemin hiçbir etkisi yoktur.',
      'Prevent' => 'Önle',
      'exists' => 'var',
      'Regenerate the HMAC key used to sign requests made by this webhook?' => 'Bu webhook\'u tarafından yapılan istekleri imzalamak için kullanılan HMAC anahtarını yeniden oluşturulsun mu?',
      'Two HeraldFields (of classes "%s" and "%s") have the same field key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each field must have a unique field key.' => 'İki HeraldFields ("%s" ve "%s" sınıfları), "%5$s" adaptöründe "%s" sınıfı bir nesne için genişletmeden sonra aynı alan anahtarına ("%3$s") sahiptir. Her alanın benzersiz bir alan anahtarı olması gerekir.',
      'Unable to load specified object ("%s").' => 'Belirtilen nesne yüklenemiyor ("%s").',
      'Invalid Action' => 'Geçersiz İşlem',
      'Webhooks must have a URI.' => 'Webhookların bir URI\'si olması gerekir.',
      'URI for the webhook.' => 'Webhook için URI.',
      'Invalid Rule Type' => 'Geçersiz Kural Türü',
      '%s target(s) do not have permission to see this object: %s.' => '%s hedefi bu nesneyi görme iznine sahip değil: %s.',
      'Webhook HMAC Key' => 'Webhook HMAC Anahtarı',
      '%s changed the URI for %s from %s to %s.' => '%s, URI’yı %s için %s\'den %s\'e değiştirdi.',
      'Hook Disabled' => 'Kanca Devre Dışı',
      'Silent Mode' => 'Sessiz Mod',
      'Conditions' => 'Şartlar',
      'Create Notification Rules' => 'Bildirim Kuralları Oluştur',
      'The selected rule type ("%s") is not supported by the selected content type ("%s").' => 'Seçilen kural türü ("%s"), seçilen içerik türü ("%s") tarafından desteklenmiyor.',
      'Test run complete. Transcript:' => 'Test çalıştırması tamamlandı. Transkript:',
      'Take these actions if this rule did not match the last time:' => 'Bu kural son kez eşleşmediyse şu işlemleri yapın:',
      'does not exist' => 'bulunmuyor',
      'include all of' => 'hepsini dahil et',
      'Browse Rule Types' => 'Kural Türlerine Göz Atın',
      'Run rules on this object.' => 'Bu nesnede kuralları çalıştır.',
      'Invalid Condition' => 'Geçersiz Koşul',
      'Invalid URI' => 'Geçersiz URI',
      'matches regexp' => 'regex eşleşir',
      'Enter an object to test rules for, like a Diffusion commit (e.g., `rX123`) or a Differential revision (e.g., `D123`). You will be shown the results of a dry run on the object.' => 'Bir Difüzyon taahhüdü (örneğin, `rX123`) veya Diferansiyel revizyon (örn. "D123") gibi kuralları sınamak için bir nesne girin. Nesnede kuru bir çalışmanın sonuçları gösterilecektir.',
      'true' => 'true',
      'Unknown rule type "%s"!' => 'Bilinmeyen kural türü "%s"!',
      'This was a dry run, so no actions were taken.' => 'Bu kuru bir dönemdi, bu yüzden hiçbir işlem yapılmadı.',
      'Webhooks must have a name.' => 'Webhookların bir adı olmalı.',
      'Save Rule' => 'Kuralı Kaydet',
      'every time this rule matches:' => 'bu kural her eşleşdiğinde:',
      'Associated hook ("%s") for webhook request ("%s") has invalid fetch URI: %s' => 'Webhook isteği için ilişkili kanca ("%s") ("%s") geçersiz URI alma: %s',
      '%s disabled this rule.' => '%s bu kuralı devre dışı bıraktı.',
      'A personal rule can only be edited by its owner.' => 'Kişisel bir kural yalnızca sahibi tarafından düzenlenebilir.',
      'Edit Herald Rule: %s' => 'Herald Kuralını Düzenle: %s',
      'Webhook URIs can be no longer than %s characters.' => 'Webhook URI\'ları %s karakterden uzun olamaz.',
      'Webhook request ("%s", to "%s") failed (%s / %s). The request will be retried.' => 'Webhook isteği ("%s", "%s" arası) başarısız oldu (%s / %s). İstek yeniden denenecek.',
      'Webhook Request %d' => 'Webhook İsteği %s',
      'Watch for danger!' => 'Tehlikeye dikkat!',
      'Status mode for the webhook.' => 'Webhook için durum modu.',
      'Related Fields' => 'İlgili Alanlar',
      'New Test Request' => 'Yeni Test İsteği',
      'New Action' => 'Yeni Eylem',
      'No Effect' => 'Efekt Yok',
      'Changes triggered by Herald rules.' => 'Herald kuralları tarafından tetiklenen değişiklikler.',
      'The %s repository is not tracked.' => '%s deposu izlenmedi.',
      'View HMAC Key' => 'HMAC Anahtarı Görüntüle',
      'No field with key "%s" is available to Herald adapter "%s".' => 'Herald adaptör "%2$s" için "%1$s" anahtarlı alan yok.',
      'Unable to load specified webhook ("%s").' => 'Belirtilen webhook yüklenemiyor ("%s").',
      'Invalid Object' => 'Geçersiz Nesne',
      'Did nothing.' => 'Hiçbir şey yapmadı.',
      'is myself' => 'kendim',
      'Object Transcript' => 'Nesne Transkripti',
      'Herald Rules' => 'Herald Kuralları',
      'Create Herald Rule' => 'Herald Kuralı Oluştur',
      'Disable Rule' => 'Kuralı Devre Dışı Bırak',
      'false' => 'false',
      'Enable the rule.' => 'Kuralı etkinleştir.',
      'Affects: %s' => 'Etkiler: %s',
      'Unable to build a new transaction for adapter object; it does not implement "%s".' => 'Bağdaştırıcı nesnesi için yeni bir işlem oluşturulamıyor; "%s" uygulamıyor.',
      'Supporting Applications' => 'Destek Uygulamaları',
      'Transcript %s' => 'Transkript %s',
      'Webhook request ("%s", to "%s") failed (%s / %s). The request will not be retried.' => 'Webhook isteği ("%s", "%s" arası) başarısız oldu (%s / %s). İstek yeniden denenmeyecek.',
      'Rules must have a name.' => 'Kuralların adı olmak zorundadır.',
      '//There are no available Herald events for this object.//' => '//Bu nesne için uygun Herald etkinliği yok.//',
      'does not match regexp' => 'regexp eşleşmiyor',
      'You have permission to create and manage global rules.' => 'Genel kurallar oluşturma ve yönetme izniniz var.',
      'This rule matched, but did not take any actions because it is configured to act only if it did not match the last time.' => 'Bu kural eşleşti, ancak hiçbir eylemde bulunmadı, çünkü yalnızca son kez eşleşmiyorsa davranması için yapılandırıldı.',
      'Wrong Rule Type' => 'Yanlış Kural Tipi',
      'Content Type' => 'İçerik Türü',
      'if this rule did not match the last time:' => 'bu kural son kez eşleşmediyse:',
      'Global rules notify anyone about events. Global rules can bypass access control policies and act on any object.' => 'Küresel kurallar herkesi olaylar hakkında bilgilendirir. Genel kurallar erişim kontrol politikalarını atlayabilir ve herhangi bir nesne üzerinde hareket edebilir.',
      'This rule is only supposed to be repeated a single time, and it has already been applied.' => 'Bu kuralın sadece bir kez tekrarlanması gerekiyordu ve zaten uygulandı.',
      'Webhook Request' => 'Webhook İsteği',
      'Unknown Action ("%s")' => 'Bilinmeyen eylem ("%s").',
      'Search for rules affecting given types of content.' => 'Verilen içerik türlerini etkileyen kuralları arayın.',
      'When any of these conditions are met:' => 'Bu koşullardan herhangi biri karşılandığında:',
      'Utility' => 'Yarar',
      'No rules found.' => 'Kural bulunamadı.',
      'Webhook request ("%s") is not in "%s" status (actual status is "%s"). Declining call to hook.' => 'Webhook isteği ("%s") "%s" durumunda değil (gerçek durum "%s"). Kancaya çağrı reddediyor.',
      'Browse Herald Rules' => 'Herald Kurallarına Göz Atın',
      'Edit Webhook' => 'Webhook\'u Düzenle',
      'No implementation is available for rule "%s".' => '"%s" kuralı için uygulama yok.',
      'Herald rules will not trigger until tracking is enabled.' => 'Herald kuralları, izleme etkinleştirilinceye kadar tetiklemeyecektir.',
      'Edit Webhook: %s' => 'Webhook\'u Düzenle: %s',
      'Create Herald Rule: %s' => 'Herald Kuralı Oluştur: %s',
      'Global Herald rules can be edited by users with the "Can Manage Global Rules" Herald application permission.' => 'Global Herald kuralları, kullanıcılar tarafından "Küresel Kuralları Yönetebilir" Herald uygulama izni ile düzenlenebilir.',
      'You must choose an object to associate this rule with.' => 'Bu kuralı ilişkilendirmek için bir nesne seçmelisiniz.',
      'Added Comment' => 'Yorum Eklendi',
      'Second regular expression is invalid!' => 'İkinci düzenli ifade geçersiz!',
      'Create Rule' => 'Kural Oluştur',
      'Unable to load webhook request ("%s"). It may have been garbage collected.' => 'Webhook isteği yüklenemiyor ("%s"). Çöp toplanmış olabilir.',
      'The specified content type ("%s") does not support dry runs. Choose a testable content type. For this object, valid content types are: %s.' => 'Belirtilen içerik türü ("%s") kuru işleri desteklemiyor. Test edilebilir bir içerik türü seçin. Bu nesne için geçerli içerik türleri: %s.',
      'Firehose' => 'Yangın Hortumu',
      'Hook Error' => 'Kanca Hatası',
      'Regular expression "%s" in Herald rule "%s" is not valid, or exceeded backtracking or recursion limits while executing. Verify the expression and correct it or rewrite it with less backtracking.' => 'Herald kuralında "%s" olan normal ifade "%s" geçerli değil veya yürütme sırasında geri izleme veya özyineleme sınırlarını aştı. İfadeyi doğrulayın ve düzeltin veya daha az geri izleme ile yeniden yazın.',
      'No adapter exists for Herald content type "%s".' => '"%s" Herald içerik türü için bir adaptör yok.',
      'You do not have permission to create or manage global rules.' => 'Genel kurallar oluşturma veya yönetme izniniz yok.',
      'Many requests to this webhook have failed recently (at least %s errors in the last %s seconds). New requests are temporarily paused.' => 'Bu webhook\'a yapılan birçok istek son zamanlarda başarısız oldu (son %2$s\'de en az %1$s hata). Yeni istekler geçici olarak duraklatıldı.',
      'Call webhooks' => 'Webhook\'ları arayın',
      'Another Herald rule' => 'Başka bir Herald kuralı',
      'Edit Rule' => 'Kuralı Düzenle',
      'any of' => 'herhangi biri',
      'Dry Run' => 'Kuru Çalışma',
      'Condition references a rule which does not exist!' => 'Koşul, var olmayan bir kurala işaret eder!',
      'Show Only Enabled Rules' => 'Yalnızca Etkin Kuralları Göster',
      'Webhook %d %s' => 'Webhook %s %s',
      'Did Nothing' => 'Hiçbir Şey Yapmadı',
      'Choose the object this rule will act on (for example, enter `rX` to act on the `rX` repository, or `#project` to act on a project).' => 'Bu kuralın uygulanacağı nesneyi seçin (örneğin, `rX` deposuna etki etmek için `rX` girin ya da bir projede hareket etmek için `#project` girin).',
      'No action with key "%s" is available to Herald adapter "%s".' => '"%2$s" anahtar kelimesi Herald bağdaştırıcısı için "%1$s" anahtar kelimesiyle işlem yapılamaz.',
      'Specified object could not be loaded.' => 'Belirtilen nesne yüklenemedi.',
      'Can Create Webhooks' => 'Webhook\'ları Oluşturabilir',
      'Author Not Active' => 'Yazar Aktif Değil',
      'Test content rules for an object. Executes a dry run, like the web UI test console.' => 'Bir nesne için içerik kurallarını test edin. Web UI test konsolu gibi bir kuru çalışma gerçekleştirir.',
      'Personal rules notify you about events. You own them, but they can only affect you. Personal rules only trigger for objects you have permission to see.' => 'Kişisel kurallar sizi olaylardan bildirir. Onlara sahipsiniz, ancak yalnızca sizi etkileyebilirler. Kişisel kurallar yalnızca görme izniniz olan nesneler için tetiklenir.',
      '%s target(s) are invalid or of the wrong type: %s.' => '%s hedefi geçersiz veya yanlış türde: %s.',
      'has bit' => 'biraz',
      'Submit transactions for a particular object.' => 'Belirli bir nesne için işlemleri gönderin.',
      'The selected rule type ("%s") is not recognized by Herald.' => 'Seçilen kural türü ("%s") Herald tarafından tanınmıyor.',
      'Run Duration' => 'Süreyi Çalıştır',
      'No conditions matched.' => 'Eşleşen şart yok.',
      'Test Console' => 'Test Konsolu',
      'Browse Webhooks' => 'Webhook\'lara Göz Atın',
      'Field: %s' => 'Alan: %s',
      'The %s repository is still importing.' => '%s deposu hala içe aktarılıyor.',
      'Transcripts' => 'Transkript',
      'Content source' => 'Içerik kaynağı',
      'RULE DETAIL' => 'KURAL DETAYI',
      'Rule/Content Mismatch' => 'Kural/İçerik Uyuşmazlığı',
      'Run rules for this content type.' => 'Bu içerik türü için kuralları çalıştırın.',
      'Add comment: %s' => 'Yorum ekle: %s',
      'Rule type' => 'Kural türü',
      'is' => 'dir',
      'This rule will become active again.' => 'Bu kural tekrar aktif hale gelecektir.',
      'Specify a content type to run rules for. The specified content type ("%s") is not valid. For this object, valid content types are: %s.' => 'Kurallarını çalıştırmak için bir içerik türü belirtin. Belirtilen içerik türü ("%s") geçerli değil. Bu nesne için geçerli içerik türleri: %s.',
      'Can Manage Global Rules' => 'Genel Kuralları Yönetebilir',
      'Called Webhooks' => 'Denilen Webhook\'lar',
      'Requests which are currently authenticated with the old key may fail.' => 'Eski anahtarla doğrulanmış olan istekler başarısız olabilir.',
      'Added a comment: %s' => 'Bir yorum ekledi: %s',
      'To view a transcript, you must be able to view the object the transcript is about.' => 'Bir transkripti görüntülemek için, transkriptin ilgili olduğu nesneyi görebilmeniz gerekir.',
      'This rule type is not supported by the selected content type.' => 'Bu kural türü, seçilen içerik türü tarafından desteklenmiyor.',
      'Herald User Guide' => 'Herald Kullanıcı Kılavuzu',
      'Rule Owner' => 'Kural Sahibi',
      'Trigger Object' => 'Tetikleyici Nesne',
      'Object Monograms' => 'Nesne Monogramları',
      'Really enable this rule?' => 'Gerçekten bu kuralı etkinleştirilsin mi?',
      'Take these actions every time this rule matches:' => 'Bu kural her eşlendiğinde bu işlemleri yapın:',
      'A flexible rules engine that can notify and act on other actions such as tasks, diffs, and commits.' => 'Görevler, farklılıklar ve taahhütler gibi diğer eylemleri bilgilendirebilecek ve bunlara etki edebilecek esnek bir kural motoru.',
      'Personal Rule' => 'Kişisel Kural',
      'Rule Fields' => 'Kural Alanları',
      'Show Only Inactive Rules' => 'Yalnızca Etkin Olmayan Kuralları Göster',
      '%s enabled this rule.' => '%s bu kuralı etkinleştirdi.',
      'Rule repetition string constant "%s" is unknown.' => 'Kural tekrarı dizesi sabiti "%s" bilinmiyor.',
      'Unknown condition "%s"!' => 'Bilinmeyen durum "%s"!',
      'is true' => 'doğru',
      'This rule triggers for %s.' => 'Bu kural %s için tetikler.',
      'Rule Type' => 'Kural Türü',
      'H%d' => 'H%s',
      'User Guide: Webhooks' => 'Kullanıcı Kılavuzu: Webhook\'lar',
      'Unable to load object ("%s") for webhook request ("%s").' => 'Webhook isteği için nesne ("%s") yüklenemiyor ("%s").',
      'Field Values' => 'Alan Değerleri',
      'contains' => 'içeren',
      'Type a webhook name...' => 'Bir webhook adı yazın...',
      'Call a webhook.' => 'Webhook\'u arayın.',
      'Recent Requests' => 'Son İstekler',
      'Two HeraldActions (of classes "%s" and "%s") have the same action key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each action must have a unique action key.' => 'İki HeraldAction ("%s" ve "%s" sınıfları), "%5$s" bağdaştırıcısının içindeki "%s" sınıfı bir nesne için genişletmeden sonra aynı eylem anahtarına ("%3$s") sahip. Her eylemin benzersiz bir işlem anahtarı olmalıdır.',
      'Object rules notify anyone about events. They are bound to an object (like a repository) and can only act on that object. You must be able to edit an object to create object rules for it. Other users who can edit the object can edit its rules.' => 'Nesne kuralları, etkinlik hakkında herkesi bilgilendirir. Bir nesneye (depo gibi) bağlıdırlar ve yalnızca bu nesneye etki edebilirler. Nesne kuralları oluşturmak için nesneyi düzenleyebilmeniz gerekir. Nesneyi düzenleyebilen diğer kullanıcılar kurallarını düzenleyebilir.',
      'Conditions were met for %s' => 'Koşullar %s için karşılandı',
      'Transcript IDs' => 'Transkript Kimlikleri',
      'The regular expression "%s" is not valid. Regular expressions must have enclosing characters (e.g. "@/path/to/file@", not "/path/to/file") and be syntactically correct.' => '"%s" normal ifadesi geçerli değil. Normal ifadeler dosyası yerine (ör. ""@/path/to/file@", "/path/to/file @" değil) karakterlerini içermelidir ve sözdizimsel olarak doğru olmalıdır.',
      'Herald Transcript' => 'Herald Transkripti',
      '%s target(s) could not be loaded: %s.' => '%s hedefi yüklenemedi: %s.',
      'Unknown Effect ("%s")' => 'Bilinmeyen Etki ("%s")',
      'Herald Transcripts' => 'Herald Transkriptleri',
      'Herald rules will not trigger until import completes.' => 'Herald kuralları, içe aktarma tamamlanana kadar tetiklemeyecektir.',
      'Do nothing' => 'Hiçbir şey yapma',
      '%s %s %s' => '%s %s %s',
      '%s created this webhook.' => '%s bu webhook\'u oluşturdu',
      '<Unknown Field "%s">' => '<Bilinmeyen Alan %s>',
      'Show Only Disabled Rules' => 'Yalnızca Engelli Kuralları Göster',
      'No Herald rules applied to this object.' => 'Bu nesneye Herald kuralları uygulanmadı.',
      'This transcript has an invalid or inaccessible adapter.' => 'Bu transkript geçersiz veya erişilemeyen bir adaptöre sahip.',
      'Request Timeout' => 'İstek Zaman Aşımına Uğradı',
      'All conditions matched.' => 'Tüm koşullar eşleşti.',
      'matches regexp pair' => 'regexp çiftiyle eşleşiyor',
      'Content type' => 'İçerik türü',
      'Object produced non-array value!' => 'Nesne dizi dışı değer üretti!',
      'Action "%s" is not forbidden!' => '"%s" eylemi yasaktır!',
      'does not match:' => 'eşleşmiyor:',
      'Herald Webhooks' => 'Herald Webhook\'ları',
      'Type a rule type...' => 'Bir kural yazın...',
      'This action does not support rules of type "%s".' => 'Bu işlem "%s" türündeki kuralları desteklemiyor.',
      'Authored by %s' => '%s Tarafından Yazılmıştır',
      'Really disable this rule?' => 'Bu kuralı gerçekten devre dışı bırakılsın mı?',
      'Choose Object' => 'Nesne Seç',
      'Acting user' => 'Oyunculuk kullanıcı',
      'Rule for' => 'Kural için',
      'is any of' => 'herhangi biri',
      'is not' => 'değildir',
      'Success, got HTTP %s from webhook.' => 'Başarı, webhook\'tan HTTP %s aldı.',
      'Not all conditions matched.' => 'Her koşul uyuşmuyor.',
      'Active Rules' => 'Etkin Kurallar',
      'is not myself' => 'kendim değil',
      'Run Test' => 'Testi Çalıştır',
      'matches:' => 'eşleşmeler:',
      'Show Only Active Rules' => 'Yalnızca Etkin Kuralları Göster',
      'No object exists with that name.' => 'Bu ada sahip bir nesne yok.',
      'Edit Webhook Configurations' => 'Webhook Yapılandırmalarını Düzenle',
      'New Condition' => 'Yeni Koşul',
      'Global rules can bypass access controls.' => 'Genel kurallar erişim kontrollerini atlayabilir.',
      'Object Link' => 'Nesne Bağlantısı',
      'This was a dry run, so no actions were actually taken.' => 'Bu kuru bir dönemdi, bu yüzden hiçbir işlem yapılmadı.',
      'include any of' => 'herhangi birini dahil et',
      'This change applied silently, so mail and other notifications will not be sent.' => 'Bu değişiklik sessizce uygulanır, bu nedenle posta ve diğer bildirimler gönderilmez.',
      'Requested At' => 'İstenilen',
      'Unknown condition \'%s\'.' => 'Bilinmeyen koşul \'%s\'.',
      'Associated hook ("%s") for webhook request ("%s") is disabled.' => 'Webhook isteği için ilişkili kanca ("%s") ("%s") devre dışı bırakıldı.',
      'Rule Transcript' => 'Kural Transkripti',
      'HTTP Status Code' => 'HTTP Durum Kodu',
      'No webhooks found.' => 'Webhook bulunamadı.',
      'Run At Epoch' => 'Epoch\'ta Çalıştır',
      '%s changed %s from %s to %s.' => '%s, %s\'i %s\'den %s\'e değiştirdi.',
      'Regular expression pair is not valid JSON!' => 'Normal ifade çifti JSON geçerli değil!',
      'You do not have permission to create webhooks.' => 'Webhook\'ları oluşturma izniniz yok.',
      'is not any of' => 'hiçbiri değil',
      'This object is not of an allowed type for the rule. Rules can only trigger on certain objects.' => 'Bu nesne kural için izin verilen türde değildir. Kurallar yalnızca belirli nesnelerde tetiklenebilir.',
      'This rule was created with a newer version of Herald. You can not view or edit it in this older version. Upgrade your software.' => 'Bu kural, Herald\'ın daha yeni bir sürümü ile oluşturuldu. Bu eski sürümde görüntüleyemez veya düzenleyemezsiniz. Phabricator dağıtımınızı yükseltin.',
      'Regnerate Key' => 'Anahtar Üret',
      'View Full Transcript' => 'Tam Transkripti Görüntüle',
      'No valid object provided for object rule!' => 'Nesne kuralı için geçerli bir nesne yok!',
      'This rule will no longer activate.' => 'Bu kural artık aktif olmayacak.',
      'is false' => 'yanlış',
      'First regular expression is invalid!' => 'İlk düzenli ifade geçersiz!',
      '%s renamed this webhook from %s to %s.' => '%s, bu webhook\'u %s iken %s olarak yeniden adlandırdı.',
      'Name of the webhook.' => 'Webhook\'un adı.',
      'Webhooks' => 'Webhook\'lar',
      'The regular expression pair "%s" must have exactly two elements.' => '"%s" normal ifade çiftinin tam olarak iki elemente sahip olması gerekir.',
      'No transcripts found.' => 'Hiçbir transkript bulunamadı.',
    );
  }

}
