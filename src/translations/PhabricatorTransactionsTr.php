<?php

final class PhabricatorTransactionsTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
  'Lock / Hide Fields' => 'Alanları Kilitle / Gizle',
  'Unmark as "Edit" Form' => '"Düzenleme" Formu olarak işaretini kaldırın',
  'Parameter "%s" is not a list of transactions.' => '"%s" parametresi işlemlerin bir listesi değil.',
  'Transactions have no effect:' => 'İşlemlerin etkisi yoktur:',
  'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => 'Bu son nokta, bu tür işlemleri destekler. Her işlem türü hakkında ayrıntılı bilgi için aşağıya bakın.',
  'To silence this edit, run this command:' => 'Bu düzenlemeyi susturmak için bu komutu çalıştırın:',
  'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => '',
  'Builtin Form "%s"' => '"%s" Dahili Formu',
  '%s added a comment.' => '%s bir yorum ekledi.',
  'Empty Comment' => 'Boş Yorum',
  'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => 'Seçilen %s politika sizi kapsam dışı bırakıyor. Nesneyi %3$s olarak ayarlamanızı sağlayan %s politikayı seçin.',
  'All users are already subscribed to this %s.' => 'Tüm kullanıcılar zaten bu %s abone oldu.',
  'Edge transaction has no \'%s\'!' => 'Kıyı işleminde \'%s\' yok!',
  'No object exists with PHID "%s".' => 'PHID "%s" ile hiçbir nesne yok.',
  'You can not edit this comment because the conversation is locked.' => '',
  'Reorder Edit Forms' => 'Formları Yeniden Düzenleyin',
  'Reorder Create Forms' => 'Yeniden Form Oluşturma Formları',
  'Edit Form Defaults' => 'Form Varsayılanlarını Düzenle',
  'The %s action(s) you are taking have no effect:' => 'Aldığınız %s eylem etkisizdir:',
  '%s removed %s subscriber(s) for %s: %s.' => '%s, %3$s için %s abonesini kaldırdı: %4$s.',
  'New Mode' => 'Yeni Mod',
  'Engine: Editor' => 'Motor: Düzenleyici',
  '%s moved %s to %s on the %s board.' => '%s, %4$s panosuna %s ile %s taşıdı.',
  'To continue, configure multi-factor authentication in Settings.' => 'Devam etmek için, Ayarlar\'da çok faktörlü kimlik doğrulamayı yapılandırın.',
  'SearchEngine class to export data from.' => 'SearchEngine sınıfından veri dışa aktarın.',
  'In %s, %s wrote:' => '%s içinde, %s yazdı:',
  'Unmark as Create Form' => 'Form Oluştur Olarak İşaretini Kaldır',
  'Mark as Edit Form' => 'Düzenleme Formu Olarak İşaretle',
  'Edges already exist; transaction has no effect.' => 'Kenarlar zaten var; işlemin etkisi yoktur.',
  '%s updated the preamble for this form.' => '%s, bu formun giriş sayfasını güncelledi.',
  '%s changed the default value for field %s.' => '%s changed the varsayılan değer for alan %s.',
  'Comment Action Options' => 'Yorum İşlem Seçenekleri',
  '%s marked %s inline comment(s) as done.' => '%s, yapıldığı gibi %s satır içi yorum olarak işaretlendi.',
  'Email Body Text' => 'E-posta Gövdesi Metni',
  'Optional instructions, shown above the form.' => 'İsteğe bağlı talimatlar, formun üstünde gösterilmiştir.',
  'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Bu işlem grubunun MFA\'ya başvurması gerekir, ancak Conduit aracılığıyla bir MFA yanıtı sağlayamazsınız. Bu nesneyi web kullanıcı arayüzü aracılığıyla düzenleyin.',
  'Subtype key "%s" does not identify a valid subtype.' => '"%s" alt anahtar geçerli bir alt türü tanımlamıyor.',
  'Name of the form.' => 'Formun adı.',
  'No search engines match "%s". Available engines which support data export are: %s.' => '"%s" ile eşleşen arama motoru yok. Veri aktarımını destekleyen mevcut motorlar: %s.',
  'Default Create Form' => 'Varsayılan Form Oluştur',
  '%s changed the visibility for %s.' => '%s, %s için görünürlüğü değiştirdi.',
  'Warnings' => 'Uyarılar',
  'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".' => 'Beklenen "newTranseylemWarning()" to return an nesne of sınıf "PhabricatorTranseylemWarning", got something else ("%s") from transeylem of sınıf "%s".',
  '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s aboneliği düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Take Action' => 'Harekete Geç',
  'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Bir çıkış dosyası belirtmek için "--output <path>" ya da stdout\'a yazdırmak için "--output -" kullanın.',
  'Form Disabled' => 'Form Devre Dışı',
  '%s marked %s inline comment(s) as not done.' => '%s, yapılmadığı gibi %s satır içi yorum olarak işaretlendi.',
  'Recipient Removed' => 'Alıcı Kaldırıldı',
  'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'EditField ("%2$s" sınıfındaki "%s" anahtarlı), hareket üretiyor ancak EditType yok.',
  'Bulk Edit Actions' => 'Toplu Düzenleme İşlemleri',
  'Primary Fields' => 'Birincil Alanlar',
  '%s updated %s attached file(s), removed %s: %s; modified %s: %s.' => '%s güncellemed %s attached dosya(s), kaldırmad %s: %s; modified %s: %s.',
  '%s attached %s referenced file(s): %s.' => '',
  'Mentioned In' => 'Şurada Bahsedildi',
  '%s moved %s on %s board(s): %s.' => '%s, %3$s panoda %s taşındı: %4$s.',
  'Export format.' => 'Aktarım biçimi.',
  'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Uygulama "Oluştur" menüsünde göründükleri sırayı değiştirmek için alanları sürükleyip bırakın.',
  'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => 'Kıyı işlemi için geçersiz \'%s\' değeri. Değer yalnızca \'%s\' (kenar ekle), \'%s\' (kenarları kaldır) ve \'%s\' (ayarlanan kenarlar) tuşlarını içermelidir.',
  'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'Monogram "%s" yanlış türde bir nesneyi tanımlar. Yüklenen nesne "%s" sınıfına sahip, ancak bu editör "%s" tipindeki nesnelerde çalışıyor.',
  '🔒 Locked' => '🔒 Kilitli',
  'New Object' => 'Yeni Nesne',
  'Type an object type name...' => 'Nesne türü adı giriniz...',
  '%s enabled this form.' => '%s bu formu etkinleştirdi.',
  'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'EditEngine "%s" geçersiz bir nesne oluşturdu veya yükledi: nesne ("%s" sınıfından) "%s" uygulamalı, ancak gerçekleştirmiyor.',
  'Edit Configurations' => 'Yapılandırmaları Düzenle',
  'Edit type (with key "%s") is missing a Conduit parameter type.' => 'Düzenleme türü ("%s" tuşuyla) bir Conduit parametre türü eksik.',
  'Validation Errors' => 'Doğrulama Hataları',
  'You are about to apply a bulk edit which will affect %s object(s).' => '%s nesnesini etkileyecek bir toplu düzenleme yapmak üzeresiniz.',
  'You do not have access to any forms which are enabled and marked as edit forms.' => 'Etkinleştirilen ve düzenleme formları olarak işaretlenen hiçbir forma erişiminiz yok.',
  'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.' => '',
  'You are editing the default values for this form.' => 'Bu form varsayılan değerleri düzenliyorsunuz.',
  'This job is already configured to run silently.' => 'Bu iş zaten sessizce çalışacak şekilde yapılandırıldı.',
  'This form ("%s") has been disabled, so it can not be used.' => 'Bu form ("%s") devre dışı bırakıldı, bu yüzden kullanılamaz.',
  'Browse Forms' => 'Formlara Göz Atın',
  'Specify an export format with "--format".' => '"--format" ile bir dışa aktarma formatı belirtin.',
  'Using HTTP Parameters' => 'HTTP Parametrelerini Kullanma',
  'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => '"%s" alt tipi geçerli değil: alt tür anahtarların minimum uzunluğu 3 bayt olmalıdır.',
  'Expected a query key or a set of query constraints.' => 'Bir sorgu anahtarı veya bir dizi sorgu kısıtlaması bekleniyordu.',
  'Enable Form' => 'Formu Etkinleştir',
  '%s edited edge metadata for %s.' => '%s, %s için düzenlenmiş kenar meta verisi.',
  'Create Forms' => 'Form Oluştur',
  'Post as Comment' => 'Yorum Olarak Gönder',
  'Edit Configuration' => 'Yapılandırmaları Düzenle',
  '%s updated %s attached file(s), added %s: %s; modified %s: %s.' => '',
  'Query does not match any objects you have permission to edit.' => 'Sorgu, düzenleme izniniz olan hiçbir nesneyle eşleşmiyor.',
  'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => 'Bu formu düzenleme formu olarak işaretlesin mi? Bunu görüntüleyebilen kullanıcılar nesneleri düzenlemek için kullanabilecekler.',
  'Query does not match any objects.' => 'Sorgu hiçbir nesneyle eşleşmiyor.',
  'In call to "%s", specified "%s" ("%s") is not supported because it does not implement "%s". Valid object types are: %s.' => '',
  'Read transactions and comments for a particular object or an entire object type.' => 'Read transeylems and yorums for a particular nesne or an entire nesne tür.',
  '✘ Hidden' => '✘ Gizli',
  'EditEngine BuiltinKey contains an invalid key character "/".' => 'EditEngine BuiltinKey "/" geçersiz bir anahtar karakter içeriyor.',
  '%s rescinded a token.' => '%s bir anahtarı iptal etti.',
  '%s awarded a token.' => '%s bir anahtarı aldı.',
  'New object subtype key.' => 'Yeni nesne alt türü anahtarı.',
  'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.' => '',
  '%s added a comment to %s.' => '%s, %s için bir yorum yaptı.',
  '%s changed locked and hidden fields.' => '%s kilitli ve gizli alanları değiştirdi.',
  'Edit Form %d: %s' => '%d Formunu Düzenle: %s',
  'Output path already exists. Use "--overwrite" to overwrite it.' => 'Çıkış yolu zaten var. Üzerine yazmak için "--overwrite" kullanın.',
  'Change Subtype' => 'Alt Türü Değiştir',
  'Drag and drop fields to reorder them.' => 'Yeniden düzenlemek için alanları sürükleyip bırakın.',
  '%s removed %d subscriber(s): %s.' => '%s, %d aboneyi kaldırdı: %s.',
  'Not an Edit Form' => 'Düzenleme Formu Değil',
  'Mark Form' => 'Formu İşaretle',
  'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine ("%s"), "/" geçersiz bir anahtar karakter içeriyor.',
  'Change Default Values' => 'Varsayılan Değerleri Değiştir',
  '%s added %s watcher(s) for %s: %s.' => '%s, %3$s için %s gözlemci ekledi: %4$s',
  'No default edit engine configuration for bulk edit.' => 'Toplu düzenleme için varsayılan düzenleme motoru yapılandırması yok.',
  'After running this command, reload this page to see the new setting.' => 'Bu komutu çalıştırdıktan sonra, yeni ayarı görmek için bu sayfayı yeniden yükleyin.',
  'Save Defaults' => 'Varsayılanları Kaydet',
  'Change how forms in other applications are created and edited. Advanced!' => 'Diğer uygulamalardaki formların nasıl oluşturulduğunu ve düzenlendiğini değiştirin. Gelişmiş!',
  'Form Order' => 'Form Düzeni',
  'Mention In' => 'Bahseden',
  'HTTP Parameters' => 'HTTP Parametreleri',
  'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => 'İşlem "%s" türüne sahip, ancak bu işlem türü bu düzenleyici (%s) tarafından desteklenmiyor.',
  'Edit Engines' => 'Motorları Düzenle',
  'Disable this form? Users will no longer be able to use it.' => 'Bu form devre dışı bırakılsın mı? Kullanıcılar artık bunu kullanamazlar.',
  'Bulk Editor' => 'Toplu Düzenleyici',
  'Aliases
-------

Aliases are alternate recognized keys for a field. For example, a field with
a complex key like `examplePHIDs` might be have a simple version of that key
as an alias, like `example`.

Aliases work just like the primary key when prefilling forms. They make it
easier to remember and use HTTP parameters by providing more natural ways to do
some prefilling.

For example, if a field has `examplePHIDs` as a key but has aliases `example`
and `examples`, these three URIs will all do the same thing:

```
%s?examplePHIDs=...
%s?examples=...
%s?example=...
```

If a URI specifies multiple default values for a field, the value using the
primary key has precedence. Generally, you can not mix different aliases in
a single URI.
' => '',
  'Transaction edge specification contains unexpected key "%s".' => 'İşlem sınırı belirtimi "%s" beklenmeyen bir anahtar içeriyor.',
  'Support Applications' => 'Destek Uygulamaları',
  'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.' => '',
  'Transaction must have a PHID before calling %s!' => '%s aramadan önce işlemin bir PHID\'si olmalı!',
  'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.' => 'EditEngine ("%s") dahili motor yapılandırması döndürmedi, ancak bir düzenleme motorunun en az bir yapılandırması olması gerekir.',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'Bu işlem grubu MFA\'nın uygulanmasını gerektiriyor, ancak Editör bir İstek ile yapılandırılmamış. Bu iş akışı bir MFA kontrolü gerçekleştiremiyor.',
  'Working Set' => 'Çalışma Seti',
  'Change the object subtype.' => 'Nesne alt türünü değiştirin.',
  'Field Types
-----------

Fields in this form have the types described in the table below. This table
shows how to format values for each field type.' => '',
  'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.' => 'Altyapı yapılandırması geçersiz: "%s" tuşuyla tanımlanmış bir alt tip yok. Bu alt tip gereklidir ve tanımlanması gerekir.',
  'Make comments.' => 'Yorum yapın.',
  'No Manage Permission' => 'Yönetim İzni Yok',
  'Via Content Source' => 'İçerik Kaynağı Üzerinden',
  'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.' => 'Düzenlenen nesne, CC\'lerin otomatik olarak oluşturulmasını sağlayan herhangi bir standart arayüz (PhabricatorSubscribableInterface gibi) uygulamıyor. "GetMailCC()" yöntemini geçersiz kılın ve açıkça CC\'ler oluşturun.',
  'Really remove this comment?' => 'Bu yorum gerçekten kaldırılsın mı?',
  'No MFA' => 'MFA yok',
  '%s removed %s contributor(s) for %s: %s.' => '%s, %3$s için %s katkıcı kaldırdı: %4$s',
  'Export format ("%s") is not enabled.' => 'Dışa aktarma biçimi ("%s") etkin değil.',
  'This object has been locked.' => 'Bu nesne kilitlendi.',
  'Changed Policy' => 'Değişen Politika',
  'You can not apply transactions which already have IDs/PHIDs!' => 'Zaten ID/PHID olan işlemleri uygulayamazsınız!',
  'Forms' => 'Formlar',
  'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".' => 'File attachment mode (for dosya "%s") ingeçerli. Beklenen a dize, found "%s".',
  'Hide Edit Forms' => 'Düzenleme Formlarını Gizle',
  'Disable Form' => 'Formu Devre Dışı Bırak',
  'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => 'Bu form ("%s") düzenleme formu olarak işaretlenmedi, bu nedenle nesneleri düzenlemek için kullanılamaz.',
  'Export data to a flat file (JSON, CSV, Excel, etc.).' => 'Verileri düz dosyaya (JSON, CSV, Excel, vb.) dışa aktar.',
  'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'Yorum yapmak veya değişiklik yapmak için çok faktörlü kimlik bilgileri sağlamalısınız, ancak hesabınızda çok faktörlü kimlik doğrulaması bulunmuyor.',
  '%s edited a custom field on %s.' => '%s, %s üzerinde özel bir alanı düzenledi.',
  'Mention' => 'Bahsetme',
  'export' => 'dışa aktar',
  'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'setShouldRequireMFA() çağrısı çok geç: bu Editör zaten MFA gereksinimlerini kontrol etti.',
  'You have not selected any objects to edit.' => 'Düzenlemek için hiçbir nesne seçmediniz.',
  'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => 'Çalışma zaten "%s" adlı işe başladı. İşler başladıktan sonra yeniden yapılandırılamaz.',
  'Post Comment' => 'Yorum Gönder',
  '%s moved this task to %s on the %s board.' => '%s, bu görevi %3$s panosunda %s taşıdı.',
  'Enable this form? Users who can see it will be able to use it to create objects.' => 'Bu form etkinleştirilsin mi? Bunu görebilen kullanıcılar, nesneler oluşturmak için onu kullanabileceklerdir.',
  'Specify one or more queries to export with "--query".' => '"--query" ile dışa aktarmak için bir veya daha fazla sorgu belirtin.',
  '%s changed the order in which this form appears in the "Edit" menu.' => '%s şunu değiştirdi: order in which bu form görünür "Düzenle" menüsünde.',
  'View Herald Transcript' => 'Herald Transcript\'i Görüntüle',
  'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.' => 'Bu formun bir oluşturma formu olarak işaretini kaldırsın mı? Yine de düzgün çalışacaktır, ancak artık uygulama "Oluştur" menüsünden doğrudan erişilemez.',
  'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => 'Bir yorumu kaldırmak, kimsenin (siz dahil) okumasını engeller. Bir yorumun kaldırılması, yorumun düzenleme geçmişini de gizler ve düzenlenmesini önler.',
  '%s removed %s contributor(s): %s.' => '%s, %s katkı kaldırdı: %s.',
  'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.' => '',
  '%s created %s in the %s space.' => '%s, %3$s alanında %s oluşturdu.',
  '%s added this form to the "Create" menu.' => '%s bu formu "Oluştur" menüsüne ekledi.',
  'This %s already has that interact policy.' => '',
  'You will be required to provide multi-factor credentials to make changes.' => 'Değişiklik yapmak için çok faktörlü kimlik bilgileri sağlamanız gerekecek.',
  '%s renamed this form from %s to %s.' => '',
  'Transaction edge data must either be the edge PHID or an edge specification dictionary.' => 'İşlem kenarı verileri, kenar PHID\'si veya bir kenar özelliği sözlüğü olmalıdır.',
  '**Locked** fields are visible in the form, but their values can not be changed
by the user.

**Hidden** fields are not visible in the form.

Any assigned default values are still respected, even if the field is locked
or hidden.' => '',
  'Unmark as Edit Form' => 'Düzenleme Formu Olarak İşaretini Kaldır',
  'Method Details' => 'Yöntem Ayrıntıları',
  'No Default Create Forms' => 'Varsayılan Oluşturma Formu Yok',
  'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'Alt tip yapılandırması geçersiz: "%s" anahtarlı alt tip hem alt tip hem de alt formları belirtir. Birini veya diğerini belirtin, ancak ikisini birden değil.',
  'You can not sign a transaction group that has no other effects.' => 'Başka hiçbir etkisi olmayan bir işlem grubunu imzalayamazsınız.',
  'No Edit Forms' => 'Düzenleme Formu Yok',
  'Mark this form as a create form? It will appear in the application "Create" menus by default.' => 'Bu formu bir oluşturma formu olarak işaretlesin mi? Varsayılan olarak uygulama "Oluştur" menülerinde görünecektir.',
  '%s added %s unsubscriber(s) for %s: %s.' => '%s, %3$s için %s abonelikten ayrıldı: %4$s.',
  'Edit Defaults' => 'Varsayılanları Düzenle',
  'Encryption Required' => 'Şifreleme Gerekli',
  'Form name is required.' => 'Form adı gerekli.',
  'No object exists with ID "%s".' => '"%s" kimliğine sahip hiçbir nesne yok.',
  'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => 'Hesabınıza bağlı herhangi bir MFA faktörü bulunmadığından, bu işlem grubunu MFA ile imzalayamazsınız. Hesabınıza %s içinde MFA ekleyin.',
  '%s wrote:' => '%s yazdı:',
  'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => '"%s" uzantısı, ana düzenleyici veya başka bir uzantıyla aynı tuşa ("%s") sahip bir toplu düzenleme grubunu tanımlar. Her toplu düzenleme grubunun benzersiz bir anahtarı olmalıdır.',
  'Save Edit Order' => 'Düzenleme Sıralamasını Kaydet',
  'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.' => '',
  '%s removed %s unsubscriber(s): %s.' => '%s, %s aboneyi kaldırdı: %s.',
  'EMAIL PREFERENCES' => 'E-POSTA TERCİHLERİ',
  '%s edited this object (transaction type "%s").' => '%s bu nesneyi düzenledi (işlem türü "%s").',
  'Mark as "Edit" Form' => '"Düzenleme" Formu Olarak İşaretle',
  '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s gözlemci düzenlendi, %s eklendi: %s; %s kaldırıldı: %s.',
  'This %s already has that edit policy.' => 'Bu %s zaten bir düzenleme politikasına sahip.',
  'Conversation Locked' => 'Konuşma Kilitli',
  'You do not have permission to configure forms for this application.' => 'Bu uygulama için formları yapılandırma izniniz yok.',
  'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.' => 'İşlem ("%2$s" türündeki "%s"), yüklemediği bir tanıtıcı ("%3$s") gerektirir.',
  'Choose the object **subtype** that this form should create and edit.' => '',
  'Unmark this form as an edit form? It will no longer be able to be used to edit objects.' => 'Bu formun düzenleme formunu kaldırılsın mı? Artık nesneleri düzenlemek için kullanılamayacak.',
  'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => 'Toplu iş __id__ işlevini sessizce çalışacak şekilde yapılandırın (posta veya bildirim yayınlamadan).',
  'User Guide: Customizing Forms' => 'Kullanım Kılavuzu: Formları Özelleştirme',
  'Make Editable' => 'Düzenlenebilir Yap',
  '%s disabled this form.' => '%s bu formu devre dışı bıraktı.',
  '%s created an object: %s.' => '%s bir nesne oluşturdu: %s.',
  'Make this builtin form editable?' => 'Bu yerleşik formu düzenlenebilir hale getirilsin mi?',
  'Duplicate Form' => 'Yinelenen Form',
  'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.' => 'Düzenlemelerin önceliğini değiştirmek için alanları sürükleyip bırakın. Bir kullanıcı bir nesneyi düzenlediğinde, bu listedeki ilk formu görme iznine sahip oldukları gösterilir.',
  '%s added %d subscriber(s): %s.' => '%s, %d abone ekledi: %s.',
  'Unmark as "Create" Form' => '"Oluştur" Formu Olarak İşaretini Kaldırın',
  'When creating objects in the web interface, you can use HTTP parameters to
prefill fields in the form. This allows you to quickly create a link to a
form with some of the fields already filled in with default values.

To prefill a form, start by finding the URI for the form you want to prefill.
Do this by navigating to the relevant application, clicking the "Create" button
for the type of object you want to create, and then copying the URI out of your
browser\'s address bar. It will usually look something like this:

```
%s
```

However, `phorge.example.com` will be the domain where your copy of this
software is installed, and `application/` will be the URI for an application.
Some applications have multiple forms for creating objects or URIs that look a
little different than this example, so the URI may not look exactly like this.

To prefill the form, add properly encoded HTTP parameters to the URI. You
should end up with something like this:

```
%s?title=Platypus&body=Ornithopter
```

If the form has `title` and `body` fields of the correct types, visiting this
link will prefill those fields with the values "Platypus" and "Ornithopter"
respectively.

The rest of this document shows which parameters you can add to this form and
how to format them.


Supported Fields
----------------

This form supports these fields:
' => '',
  'Exception when processing transaction of type "%s": %s' => '"%s" tipinde bir işlem gerçekleştirilirken istisna: %s',
  '%s created this object in space %s.' => '%s, bu nesneyi %s boşluğu oluşturdu.',
  'Engine: Edit' => 'Motor: Düzenle',
  '%s changed the interact policy for %s.' => '',
  '%s removed %s watcher(s) for %s: %s.' => '%s, %3$s için %s izleyiciyi kaldırdı: %4$s',
  '%s moved %s from %s to %s on the %s board.' => '%s, %5$s panosunda %s üzerinden %s ile %s taşıdı.',
  'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").' => 'EditEngine "%s" geçersiz bir nesne oluşturdu veya yükledi: nesne gerçekte bir nesne olmalı, ancak başka bir türde ("%s") olmalı.',
  '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s abonelik kaldıranları düzenledi, %s eklendi: %s; %s kaldırıldı: %s',
  'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s' => 'Doğru bir şekilde oluşturulmamış bir işlemi ("%s" sınıfı, "%s" türünde) uygulama girişimi: %s',
  '%s modified %s attached file(s): %s.' => '',
  'Unable to load transactions: %s.' => 'İşlemler yüklenemiyor: %s.',
  'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.' => 'Alt tip yapılandırması geçersiz: "%s" anahtarlı alt tipin adı yoktur. Alt türlerin bir adı olmalı.',
  'Comment to add, formatted as remarkup.' => 'Eklenecek yorum olarak biçimlendirilmiş yorum.',
  'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.' => '"%s" anahtar ile yapılan işlem geçersiz tipte "%s". Bu tür tanınmıyor. Geçerli türler: %s',
  'Show Only Create Forms' => 'Yalnızca Form Oluşturma Göster',
  'You can not interact with this object because it is locked.' => 'Kilitli olduğu için bu nesneyle etkileşime giremezsiniz.',
  'This object is already in that space.' => 'Bu nesne zaten o alanda.',
  'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => '"%s" sınıfındaki bir nesneyi döndürmek için "newTimelineView()" bekleniyordu ("%s" motorunda).',
  'This %s already has that join policy.' => 'Bu %s zaten birleştirme politikası var.',
  '%s shifted this object from the %s space to the %s space.' => '%s, bu nesneyi %s alanından %s alanına kaydırdı.',
  '%s changed the interact policy from "%s" to "%s".' => '',
  'Create Form' => 'Form Oluştur',
  '%s moved this task on %s board(s): %s.' => '%s, bu görevi %s panoya taşıdı: %s.',
  'Unable to load query for transaction object "%s"!' => '"%s" işlem nesnesi için sorgu yüklenemiyor!',
  'Changed Subscribers' => 'Değişen Aboneler',
  'Comment for this transaction was not loaded.' => 'Bu işlem için yorum yüklenmedi.',
  'Raw Comment' => 'Ham Yorum',
  '%s created this object with interact policy "%s".' => '',
  'Save Create Order' => 'Sıralama Oluşturmayı Kaydet',
  '%s updated subscribers of %s.' => '%s, %s abonelikleri güncelledi.',
  '%s created this object.' => '%s bu nesneyi oluşturdu.',
  'Unknown export format ("%s"). Known formats are: %s.' => 'Bilinmeyen dışa aktarma formatı ("%s"). Bilinen formatlar: %s.',
  'You have not chosen any edits to apply.' => 'Uygulamak için herhangi bir düzenleme seçmediniz.',
  'No herald adapter specified.' => 'Hiçbir haberci adaptörü belirtilmedi.',
  'Comment History' => 'Yorum Geçmişi',
  'Unable to load object with PHID "%s"!' => 'PHID "%s" ile nesne yüklenemiyor!',
  'Edit Form' => 'Formu Düzenle',
  'You can not apply transactions which already have %s!' => 'Zaten %s olan işlemleri uygulayamazsınız!',
  '%s edited an edge.' => '%s bir kenar düzenledi.',
  '%s unsubscribed.' => '%s abonelikten çıktı.',
  '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s katkıcı düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.' => 'Altyapı yapılandırması geçersiz: iki alt tür aynı anahtarı kullanır ("%s"). Her alt tipin benzersiz bir anahtarı olmalıdır.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.' => '"%s" parametresi işlem açıklamalarının bir listesini içermelidir, ancak "%s" anahtarına sahip öğede bir "tür" alanı eksik. Her işlem bir tür alana sahip olmalıdır.',
  'This transaction is supposed to have an %s set, but it does not!' => 'Bu işlemin %s bir takımın olması gerekiyordu, ancak yapmıyor!',
  'Comment Preview' => 'Yorum Önizlemesi',
  'Untitled Form' => 'Adsız Form',
  '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s aboneyi düzenledi, %s eklendi: %s; %s kaldırıldı: %s',
  'Unsupported bulk edit type "%s".' => 'Desteklenmeyen toplu düzenleme türü "%s".',
  'Validation errors:' => 'Doğrulama hataları:',
  'This object has no select fields.' => 'Bu nesnenin seçim alanı yok.',
  'Mentioned User' => 'Bahsedilen Kullanıcı',
  '%s created this form.' => '',
  'List of PHIDs to set.' => 'Ayarlanacak PHID\'lerin listesi.',
  'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.' => '',
  '%s added %s unsubscriber(s): %s.' => '%s, %s abonelik olmayanı ekledi: %s.',
  'EDIT DETAILS' => 'DETAYLARI DÜZENLE',
  '%s edited a custom field (with key "%s").' => '%s özel bir alanı düzenledi ("%s" tuşuyla).',
  'No Create Permission' => 'Oluşturma İzni Yok',
  'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").' => 'Kenar işlemleri, PHID\'lere veya kenar özelliklerine değer olarak sahip olmalıdır ("%2$s" türündeki işlemlerde "%s" değeri bulundu).',
  'Remove Action: %s' => 'İşlem Kaldırması: %s',
  'Show Only Edit Forms' => 'Yalnızca Düzen Formlarını Göster',
  'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.' => 'Bu, işlemleri uygulayarak nesneleri oluşturmanızı ve değiştirmenizi sağlayan standart bir **ApplicationEditor** yöntemidir. Bu uç noktalarla ilgili belgeler için, **[[ %s | Conduit API\'si: Bitiş Noktalarını Düzenle]]** sayfasına bakın.',
  'HTTP Parameters: %s' => 'HTTP Parametreleri: %s',
  'Edit Form: %s' => 'Form Düzenlemesi: %s',
  '%s moved this task from %s to %s on the %s board.' => '%s, bu görevi %4$s panosunda %s ile %s taşıdı.',
  'List of PHIDs to remove.' => 'Kaldırılacak PHID\'lerin listesi.',
  'Create New Form' => 'Yeni Form Oluştur',
  'This application is not configured with any forms for creating objects that are visible to you and enabled.' => 'Bu uygulama, size görünür ve etkin nesneleri oluşturmak için herhangi bir form ile yapılandırılmamıştır.',
  'Select Fields
-------------

Some fields support selection from a specific set of values. When prefilling
these fields, use the value in the **Value** column to select the appropriate
setting.
' => '',
  'Transaction requires handles and it did not load them.' => 'İşlem, tanıtıcı gerektirir ve bunları yüklemedi.',
  '(Show Details)' => '(Detayları Göster)',
  '%s edited this %s.' => '%s, bu %s düzenledi.',
  '%s edited a custom field.' => '%s, özel bir alanı düzenledi.',
  'Apply remaining actions?' => 'Kalan işlemleri uygulansın mı?',
  'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'İki toplu düzenleme grubu aynı anahtara ("%s") sahip. Her toplu düzenleme grubunun benzersiz bir anahtarı olmalıdır.',
  'If the output file already exists, overwrite it instead of raising an error.' => 'Çıkış dosyası zaten varsa, bir hata oluşturmak yerine üzerine yazın.',
  'List of PHIDs to add.' => 'Eklenecek PHID\'lerin listesi.',
  'You have not moved this object to any columns it is not already in.' => 'Bu nesneyi henüz içinde bulunmamış hiçbir sütuna taşımadınız.',
  'Failed to reload object identified by monogram "%s" when querying by PHID.' => 'PHID tarafından sorgulanırken "%s" monogramı ile tanımlanan nesne yeniden yüklenemedi.',
  'Configure Form' => 'Formu Yapılandır',
  'Edit Locked Object' => 'Kilitli Nesneyi Düzenle',
  '%s of your actions have no effect:' => '%s işleminizden bazılarının etkisi yoktur:',
  'You can not post an empty comment.' => 'Boş bir yorum gönderemezsiniz.',
  'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => '"%s" alanı, karşılık gelen bir toplu düzenleme grubuna sahip olmayan bir toplu düzenleme grubu anahtarına ("%s") sahiptir.',
  'Exported data to "%s".' => 'Veriler "%s" aktarıldı.',
  '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s aboneliği düzenledi, %d eklendi: %s; %d kaldırıldı: %s.',
  'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.' => 'Posta uzantısı ("%s"), başka bir şablonla aynı anahtarla ("%s") bir damga şablonunu tanımlar. Her damga şablonunun benzersiz bir anahtarı olmalıdır.',
  'File attachment transaction must have a map of files to attachment modes, found "%s".' => '',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s.' => '%s güncellemed %s attached dosya(s), added %s: %s; kaldırmad %s: %s.',
  '%s changed the order in which this form appears in the "Create" menu.' => '%s şunu değiştirdi: order in which bu form görünür "Oluştur" menüsünde.',
  '%s named this form %s.' => '%s bu formu %s olarak adlandırdı.',
  '%s added %s subscriber(s) for %s: %s.' => '%s, %3$s için %s abone ekledi: %4$s.',
  '%s mentioned this in %s.' => '%s, bunu %s içinde belirtti.',
  '%s created this object with join policy "%s".' => '%s bu nesneyi "%s" ile birleştirdi.',
  'Subtype configuration is invalid: it must be a list of subtype specifications.' => 'Alt tip yapılandırması geçersiz: alt tip özelliklerinin bir listesi olmalıdır.',
  'Transaction Summary' => 'İşlem Özeti',
  'Use Form' => 'Formu Kullan',
  'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => '"!%s" komutu desteklenen bir posta komutu değil. Bu nesne geçerli komutları: %s.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => '"%s" parametresi, işlem açıklamalarının bir listesini içermelidir, ancak "%s" anahtarına sahip öğe bir sözlük değildir.',
  'Edit Comment' => 'Yorumu Düzenle',
  '%s marked this form as an edit form.' => '%s, bu formu düzenleme formu olarak işaretledi.',
  'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").' => 'Kenar işlemleri, uç listelerinde olduğu gibi hedef PHID\'lere sahip olmalıdır ("%2$s" türündeki işlemlerde "%s" anahtarını buldu).',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'Bu işlem grubu, MFA\'nın uygulanmasını gerektiriyor, ancak Editör, İptal URI\'si ile yapılandırılmamış. Bu iş akışı bir MFA kontrolü gerçekleştiremiyor.',
  'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).' => 'EditEngine ("%s") dahili motor yapılandırmalarını döndürdü, ancak bir tanesinde ("%s" anahtarlı) bir dahili anahtar eksik. Her yapılandırma için dahili bir anahtar girin (varsayılan anahtarı otomatik olarak atamak için listedeki ilk yapılandırmadan çıkarabilirsiniz).',
  'Monogram "%s" does not identify a valid object.' => '"%s" Monogram geçerli bir nesne tanımlamıyor.',
  'Silent Edit' => 'Sessiz Düzenleme',
  'Reorder Fields' => 'Alanları Yeniden Sırala',
  'Task has invalid task data.' => 'Görevde geçersiz görev verileri var.',
  'Add Action...' => 'Eylem Ekle...',
  'Detached' => 'Ayrıldı',
  'This transaction should generate its %s automatically, but has already had one set!' => 'Bu işlem otomatik olarak %s üretmelidir, ancak zaten bir ayar yapmıştır!',
  '%s removed this form from the "Create" menu.' => '%s, bu formu "Oluştur" menüsünden kaldırdı.',
  'Type a form name...' => 'Bir form adı yazın...',
  'Custom field transaction \'%s\' does not implement integration for %s.' => '\'%s\' özel alan işlemi %s entegrasyon uygulamıyor.',
  'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'Belirtilen sorgular farklı motorlar kullanıyor: "%s" sorgusu "%s" değil "%s" motorunu kullanıyor. Tüm sorgular aynı motorda çalıştırılmalıdır.',
  '%s changed the join policy from "%s" to "%s".' => '%s, katılım politikasını "%s" ile "%s" değiştirdi.',
  '%s updated subscribers...' => '%s abonelikleri güncelledi...',
  'Remove Comment' => 'Yorumu Sil',
  'Transaction (of type "%s") has no effect.' => 'İşlemin ("%s" tipinde) etkisi yoktur.',
  'Make Builtin Editable' => 'Yerleşik Düzenlenebilir Yap',
  'Editor ("%s") has no mail stamp template with provided key ("%s").' => 'Editörde ("%s"), sağlanan anahtarla ("%s") posta damgası şablonu yok.',
  'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.' => 'Bu nesneyi seçili alanda kaydıramazsınız, çünkü boşluk yoktur veya ona erişiminiz yoktur.',
  'You must choose a space for this object.' => 'Bu nesne için bir boşluk seçmelisiniz.',
  'Edit Forms' => 'Formları Düzenle',
  'Mark as Create Form' => 'Form Oluştur Olarak İşaretle',
  '%s added %s subscriber(s): %s.' => '%s, %s abone ekledi: %s.',
  'Unmark Form' => 'Form İşaretini Kaldır',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.' => '',
  'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => '"%s" alt tipi geçerli değil: alt tür anahtarlar yalnızca küçük harfli latin harfleri içerebilir ("a" - "z" arası).',
  'Capability not supported.' => 'Yetenek desteklenmiyor.',
  'Use "--id" to choose a bulk job to make silent.' => 'Sessiz yapmak için toplu bir iş seçmek için "--id" kullanın.',
  'Change Form Subtype' => 'Form Alt Tipini Değiştir',
  '%s added %s contributor(s): %s.' => '%s, %s katkıcı ekledi: %s.',
  '%s removed %s watcher(s): %s.' => '%s, %s gözlemci kaldırdı: %s.',
  '%s created this object with edit policy "%s".' => '%s bu nesneyi "%s" düzenleme politikasına göre oluşturdu.',
  'Unable to load bulk job with ID "%s".' => '"%s" kimliğiyle toplu iş yüklenemiyor.',
  '%s added %s watcher(s): %s.' => '%s, %s gözlemci ekledi: %s.',
  'Task has no object PHID!' => 'Görevde PHID nesnesi yok!',
  'Transaction type \'%s\' is missing an internal apply implementation!' => '\'%s\' işlem türünde dahili bir uygulama uygulaması eksik!',
  '%s attached files...' => '%s attached dosyas...',
  'Old Mode' => 'Eski Mod',
  'Flag "--overwrite" has no effect when outputting to stdout.' => '"--overwrite" işaretinin stdout çıkışı alındığında hiçbir etkisi yoktur.',
  'You do not have permission to create these objects.' => 'Bu nesneleri oluşturma izniniz yok.',
  'Export the data selected by one or more queries.' => 'Bir veya daha fazla sorgu tarafından seçilen verileri dışa aktarın.',
  'Bulk Edit' => 'Toplu Düzenleme',
  'Write output to a file. If omitted, output will be sent to stdout.' => 'Bir dosyaya çıktı yazın. Belirtilmezse, çıktı stdout\'a gönderilir.',
  'You will be required to provide multi-factor credentials to comment or make changes.' => 'Yorum yapmak veya değişiklik yapmak için çok faktörlü kimlik bilgileri sağlamanız gerekir.',
  '%s shifted %s from the %s space to the %s space.' => '%s, %s üzerinden %s alanına %s alanına kaydırdı.',
  'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.' => 'EditEngine ("%s") yerleşik motor yapılandırmalarını döndürdü, ancak en az ikisi aynı dahili anahtarı ("%s") belirtti. Motorların benzersiz yerleşik anahtarlara sahip olması gerekir.',
  'This comment has been deleted.' => 'Bu yorum silindi.',
  'Add Another Action' => 'Başka Bir Eylem Ekle',
  'Template Objects
----------------

Instead of specifying each field value individually, you can specify another
object to use as a template. Some of the initial fields will be copied from the
template object.

Specify a template object with the `template` parameter. You can use an ID,
PHID, or monogram (for objects which have monograms). For example, you might
use URIs like these:

```
%s?template=123
%s?template=PHID-WXYZ-abcdef...
%s?template=T123
```

You can combine the `template` parameter with HTTP parameters: the template
object will be copied first, then any HTTP parameters will be read.

When using `template`, these fields will be copied:' => '',
  'Hide Create Forms' => 'Form Oluşturmaları Gizle',
  'Configure a bulk job to execute silently.' => 'Sessizce yürütülecek toplu işi yapılandırın.',
  'Custom field transaction has no \'%s\'!' => 'Özel alan işleminde \'%s\' yok!',
  '%s signed these changes with MFA.' => '%s, bu değişiklikleri MFA ile imzaladı.',
  'SearchEngine class ("%s") does not support data export.' => 'SearchEngine sınıfı ("%s") veri dışa aktarmayı desteklemiyor.',
  '%s unmarked this form as an edit form.' => '%s, bu formu düzenleme formu olarak işaretledi.',
  'Multiple search engines match "%s": %s.' => 'Birden fazla arama motoru "%s" ile eşleşiyor: %s.',
  'Mark as "Create" Form' => '"Oluştur" Formu Olarak İşaretle',
  'Failed to base64_decode() value for key "%s".' => '"%s" anahtarının base64_decode() değeri başarısız oldu.',
  'Create another form with the same settings as this one?' => 'Bu ayarlarla aynı ayarlarla başka bir form oluştursun mu?',
  'Change Field Order' => 'Alan Düzenini Değiştir',
  'Forms must have a name.' => 'Formların bir adı olmalı.',
  '%s changed the default values for field %s.' => '%s changed the varsayılan değers for alan %s.',
  'This EditField does not provide a Bulk EditType with key "%s".' => 'Bu EditField, "%s" anahtarına sahip bir Toplu EditType sağlamaz.',
  'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration' => 'EditEngine ("%s") yerleşik motor yapılandırmalarını döndürdü, ancak hiçbiri varsayılan olarak işaretlenmedi ve ilk yapılandırmada zaten farklı bir dahili anahtar var. Bir yerleşimi varsayılan olarak işaretleyin veya anahtarı ilk yapılandırmadan çıkar',
  '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => '%s, yapıldığı gibi %s satır içi yorum ve yapılmadığı gibi %s satır içi yorum olarak işaretlendi.',
  '!%s (or %s)' => '!%s (veya %s)',
  '%s reordered the fields in this form.' => '%s, bu formdaki alanları yeniden sıraladı.',
  'This is a preview of the current form configuration.' => 'Bu, geçerli form yapılandırmasının bir önizlemesidir.',
  '%s changed the edit policy for %s.' => '%s, düzenleme politikasını %s olarak değiştirdi.',
  'All Forms' => 'Tüm Formlar',
  'This %s already has that view policy.' => 'Bu %s zaten bu görüş politikasına sahip.',
  'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.' => 'İşlemler, üzerinde işlem yapılan nesneyi görebilen kullanıcılar tarafından görülebilir. Bazı işlemler - özellikle yorumlar - işlem yazarı tarafından düzenlenebilir.',
  'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.' => '',
  'Subtype "%s" is not a valid subtype.' => '"%s" alt tipi geçerli bir alt tip değil.',
  'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'Sorgu "%s" bilinmiyor. "All" veya "active" gibi bir yerleşik sorgu çalıştırmak için, arama motorunu "--class" ile de belirtin.',
  'The source object has a comment which mentions the destination object.' => 'Kaynak nesnenin, hedef nesneden bahseden bir yorumu var.',
  '%s removed %s unsubscriber(s) for %s: %s.' => '%s, %3$s için %s abonelikten kaldırıldı: %4$s.',
  'For full details, run `/bin/mail show-inbound --id %d`' => 'Tüm ayrıntılar için `/bin/mail show-inbound --id %d` komutunu çalıştırın',
  'This object is locked. Edit it anyway?' => 'Bu nesne kilitli. Yine de düzenlesin mi?',
  '%s Action(s) With No Effect' => '%s Etkili Olmayan Eylem',
  'Configured job "%s" to run silently.' => '"%s" işi sessiz çalışacak şekilde yapılandırıldı.',
  'View Form Configurations' => 'Form Yapılandırmalarını Görüntüle',
  '%s removed %s attached file(s): %s.' => '%s kaldırmad %s attached dosya(s): %s.',
  '%s ("%s")' => '%s ("%s")',
  'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.' => 'Yorumlar, yorum yapılan nesneyi görebilen kullanıcılar tarafından görülebilir. Yorumlar yazarları tarafından düzenlenebilir.',
  'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => 'Özel alan işlemi geçersiz \'%s\'; \'%s\' alanı devre dışı bırakıldı veya mevcut değil.',
  'This object has no fields with aliases.' => 'Bu nesnenin takma adları olan hiçbir alanı yok.',
  'Do you want to post your comment anyway?' => 'Yine de yorumunuzu göndermek ister misiniz?',
  'All Edit Engines' => 'Tüm Düzenleme Motorları',
  '%s Action(s) Have No Effect' => '%s Eylem Etkisi Yok',
  'This EditField does not provide a Conduit EditType with key "%s".' => 'Bu EditField, "%s" anahtarına sahip bir Kanal Düzenleme Türü sağlamaz.',
  'None of the fields on this object support templating.' => 'Bu nesnedeki alanların hiçbiri ayarlamayı desteklemiyor.',
  'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.' => 'Kenar işlemi \'%s\' tipinde bir kenarı içerir, ancak işlem \'%s\' tipindedir. Her kenar işlemi, yalnızca bir tür kenarını değiştirmelidir.',
  'This comment was removed by %s.' => 'Bu yorum %s tarafından kaldırıldı.',
  'Apply Remaining Actions' => 'Kalan İşlemleri Uygula',
  '%s edited watcher(s), added %s: %s; removed %s: %s.' => '%s izleyiciyi düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  '%s edited unsubscriber(s), added %s: %s; removed %s: %s.' => '%s abone olmayanı düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  '%s changed the join policy for %s.' => '%s, katılım politikasını %s olarak değiştirdi.',
  'Object Locked' => 'Nesne Kilitli',
  'Edit Form Configuration' => 'Form Yapılandırmasını Düzenle',
  'Query "%s" is not a recognized query for class "%s".' => '"%s" sorgusu "%s" sınıfı için tanınmış bir sorgu değil.',
  'You can not remove this comment because the conversation is locked.' => '',
  '%s updated a token.' => '%s bir anahtar güncelledi.',
  'Form Preview' => 'Form Önizlemesi',
  '%s changed the subtype of this form from %s to %s.' => '',
  'If you start work now, this edit will send mail and publish notifications normally.' => 'Şimdi çalışmaya başlarsanız, bu düzenleme posta gönderir ve normal olarak bildirimleri yayınlar.',
  'When an object (like a task) is edited, the relevant application creates a
"transaction" and applies it. This list of transactions on each object is the
basis for essentially all edits and comments. Reviewing the transaction
record allows you to see who edited an object, when, and how their edit changed
things.

One common reason to call this method is that you\'re implementing a webhook and
just received a notification that an object has changed. See the Webhooks
documentation for more detailed discussion of this use case.

One Object Type at a Time
=========================

This API method can query transactions for any type of object which supports
transactions, but only one type of object can be queried per call. For example:
you can retrieve transactions affecting Tasks, or you can retrieve transactions
affecting Revisions, but a single call can not retrieve both.

This is a technical limitation arising because (among other reasons) there is
no global ordering on transactions.

To find transactions for a specific object (like a particular task), pass the
object PHID or an appropriate object identifier (like `T123`) as an
`objectIdentifier`.

To find all transactions for an object type, pass the object type constant as
an `objectType`. For example, the correct identifier for tasks is `TASK`. (You
can quickly find an unknown type constant by looking at the PHID of an object
of that type.)

All supported values for `objectType`:

%s

Constraints
===========

These constraints are supported:

  - `phids` //Optional list<phid>.// Find specific transactions by PHID. This
    is most likely to be useful if you\'re responding to a webhook notification
    and want to inspect only the related events.
  - `authorPHIDs` //Optional list<phid>.// Find transactions with particular
    authors.

Transaction Format
==================

Each transaction has custom data describing what the transaction did. The
format varies from transaction to transaction. The easiest way to figure out
exactly what a particular transaction looks like is to make the associated kind
of edit to a test object, then query that object.

Not all transactions have data: by default, transactions have a `null` "type"
and no additional data. This API does not expose raw transaction data because
some of it is internal, oddly named, misspelled, confusing, not useful, or
could create security or policy problems to expose directly.

New transactions are exposed (with correctly spelled, comprehensible types and
useful, reasonable fields) as we become aware of use cases for them.
' => '',
  'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'Şimdi çalışmaya başlarsanız, bu düzenleme sessizce uygulanır: posta göndermez veya bildirimler yayınlamaz.',
  '%s edited contributor(s), added %s: %s; removed %s: %s.' => '%s, katkı düzenlendi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Transaction type \'%s\' is missing an external apply implementation!' => '\'%s\' işlem türünde harici uygulama uygulaması eksik!',
  'The subtype "%s" is not a valid subtype.' => '"%s" alt tipi geçerli bir alt tip değil.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.' => '',
  'Form %d' => 'Form %d',
  'Configure Forms for Configuring Forms' => 'Formları Yapılandırmak için Formları Yapılandır',
  '%s added %s contributor(s) for %s: %s.' => '%s, %3$s için %s katkı eklendi: %4$s',
  '%s changed the edit policy from "%s" to "%s".' => '%s, düzenleme politikasını "%s" ile "%s" değiştirdi.',
  'The source object is mentioned in a comment on the destination object.' => 'Kaynak nesne, hedef nesne hakkında yapılan bir yorumda belirtilmiştir.',
  'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => 'Boşluk arşivlendiğinden bu nesneyi seçili boşluğa kaydıramazsınız. Arşivlenen alanların içinde nesneler yaratılamaz (veya içine taşınamaz).',
  'Capability not supported!' => 'Yetenek desteklenmiyor!',
  '%s created this object with visibility "%s".' => '%s, bu nesneyi "%s" görünürlüğünde yarattı.',
  'Override Lock' => 'Geçersiz Kılma Kilidi',
  'You can not apply transactions which already have commentVersions!' => 'Zaten commentVersions olan işlemleri uygulayamazsınız!',
  'Object Monogram' => 'Nesne Monogramı',
  'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.' => '"%s" alt tipi geçerli değil: alt tür anahtarlar 64 bayttan uzun olmamalıdır.',
  'Will Copy' => 'Kopyalayacak',
  '%s removed %s subscriber(s): %s.' => '%s, %s abone sayısını kaldırdı: %s.',
  'Transaction comment must not yet have a PHID!' => 'İşlem yorumu henüz bir PHID\'ye sahip olmamalıdır!',
  '%s changed the visibility from "%s" to "%s".' => '%s görünürlük değerini "%s" ile "%s" değiştirdi.',
  'Unable to load configuration for this EditEngine ("%s").' => 'Bu EditEngine için yapılandırma yüklenemiyor ("%s").',
  'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).' => 'PHID işlemi için geçersiz \'%s\' değeri. Değer yalnızca \'%s\' (PHID ekle), \'%s\' (PHID’leri kaldır) ve \'%s\' (PHID’leri ayarla) tuşlarını içermelidir.',
);
  }

}
