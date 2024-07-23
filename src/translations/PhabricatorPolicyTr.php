<?php

final class PhabricatorPolicyTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Erişim Reddedildi: %s',
      'is waning' => 'azalıyor',
      'Required Capabilities on Other Objects' => 'Diğer Nesnelerde Gerekli Olanaklar',
      'Logged in users can take this action.' => 'Giriş yapan kullanıcılar bu işlemi yapabilir.',
      'Object URI' => 'Nesne URI',
      'when the moon' => 'ne zaman ay',
      'Specify the name of an object to unlock.' => 'Kilitlenecek nesnenin adını belirtin.',
      'Lock Create User Policy To Admins' => 'Hizmetlilere Kullanıcı Politika Oluşturma Kilidi',
      'These rules are processed in order.' => 'Bu kurallar sırayla işlenir.',
      'This software has application policies which can dictate whether users can take certain actions, such as creating new users. 
    This setting allows for "locking" these policies such that no further edits can be made on a per-policy basis.' => 'Phabricator, kullanıcıların yeni kullanıcılar oluşturmak gibi belirli eylemlerde bulunup bulunmayacağını belirleyebilecek uygulama politikalarına sahiptir.
    Bu ayar, bu politikaların "kilitlenmesini" sağlar, böylece politika başına başka düzenleme yapılamaz.',
      'Users who can see objects in this space:' => 'Bu alanda nesneleri görebilen kullanıcılar:',
      'After a user passes space policy checks, they must still pass object policy checks.' => 'Bir kullanıcı alan politikası kontrollerini geçtikten sonra, yine de nesne politikası kontrollerini geçmelidir.',
      'User Policies' => 'Kullanıcı Politikaları',
      'Shift the object between spaces.' => 'Nesneyi boşluklar arasında kaydırın.',
      'You Shall Not Pass: %s' => 'Geçemezsiniz: %s',
      'is waxing' => 'azalıyor',
      'This software allows you to set the visibility of objects (like repositories and tasks) to \'Public\', which means **anyone on the internet can see them, without needing to log in or have an account**.
    This is intended for open source projects. Many installs will never want to make anything public, so this policy is disabled by default. You can enable it here, which will let you set the policy for objects to \'Public\'.
    Enabling this setting will immediately open up some features, like the user directory. Anyone on the internet will be able to access these features.
    With this setting disabled, the \'Public\' policy is not available, and the most open policy is \'All Users\' (which means users must have accounts and be logged in to view things).' => 'Phabricator, nesnelerin görünürlüğünü (havuzlar ve görevler gibi) \'Genel\' olarak ayarlamanıza izin verir, yani **internetten herhangi biri, giriş yapmanıza veya bir hesap açmanıza gerek kalmadan onları görebilir**.
    Bu, açık kaynaklı projeler için tasarlanmıştır. Çoğu kurulum hiçbir zaman genel bir şey yapmak istemeyeceğinden, bu politika varsayılan olarak devre dışıdır. Burada, nesnelerin politikasını \'Genel\' olarak belirlemenizi sağlayacak şekilde etkinleştirebilirsiniz.
    Bu ayarın etkinleştirilmesi, kullanıcı dizini gibi bazı özellikleri hemen açacaktır. İnternetteki herkes bu özelliklere erişebilecek.
    Bu ayar devre dışı bırakıldığında, "Genel" politikası kullanılamaz ve en açık politika "Tüm Kullanıcılar"\'dır (bu, kullanıcıların hesaplara sahip olması ve bir şeyleri görüntülemek için giriş yapmış olması gerektiği anlamına gelir).',
      'You do not have permission to edit this object.' => 'Bu nesneyi düzenleme izniniz yok.',
      'CAPABILITIES' => 'YETENEKLER',
      'Map of capabilities to current policies.' => 'Mevcut politikalarla yeteneklerin haritası.',
      'Other: %s' => 'Diğer: %s',
      'Can View' => 'Görüntüleyebilir',
      'Lock specific application policies so they can not be edited.' => 'Belirli uygulama politikalarını, düzenlenemeyecekleri şekilde kilitleyin.',
      'Only User: %s' => 'Yalnızca Kullanıcı: %s',
      'Invalid action \'%s\'!' => 'Geçersiz eylem \'%s\'!',
      'Allow Public Visibility' => 'Genel Görünürlüğe İzin Ver',
      'Object Policies' => 'Politika Nesnesi',
      'Members of Project...' => 'Proje Üyeleri...',
      'Two policy rules (of classes "%s" and "%s") define the same object policy key ("%s"), but each object policy rule must use a unique key.' => 'İki politika kuralı ("%s" ve "%s" sınıfları) aynı nesne politikası anahtarını ("%s") tanımlar, ancak her nesne politikası kuralı benzersiz bir anahtar kullanmalıdır.',
      'Advanced' => 'Gelişmiş',
      'By default, no one can take this action.' => 'Varsayılan olarak, hiç kimse bu işlemi yapamaz.',
      'Testing for capability "%s" on an object ("%s") which does not support that capability.' => 'Bu yeteneği desteklemeyen bir nesnede ("%2$s") "%1$s" yeteneğinin test edilmesi.',
      'Deny' => 'Reddet',
      'Special Rules' => 'Özel Kurallar',
      'Failed to JSON decode rule data!' => 'JSON kural verisinin kodu çözülemedi!',
      'Controls who can edit the object.' => 'Nesneyi kimin düzenleyebileceğini kontrol eder.',
      'Other Policies' => 'Diğer Politikalar',
      'Object Policy' => 'Nesne Politikası',
      'Can Interact' => 'Etkileşim yapabilir',
      'Members of the project "%s" can take this action.' => '"%s" projesinin üyeleri bu işlemi yapabilir.',
      'Specify the name of exactly one object to show policy information for.' => 'Politika bilgilerini göstermek için tam olarak bir nesnenin adını belirtin.',
      'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'Bu nesne halka açıktır ve bir Phabricator hesabı olmasa bile herkes tarafından görülebilir.',
      'You do not have the required capability ("%s") to do whatever you are trying to do.' => 'Yapmaya çalıştığınız şeyi yapmak için gerekli kabiliyetiniz ("%s") yok.',
      'Support for Policies' => 'Politikalar Desteği',
      'Allow users to set object visibility to public.' => 'Kullanıcıların genel olarak nesne görünürlüğünü ayarlamasına izin ver.',
      'Space:' => 'Boşluk:',
      'Change the edit policy of the object.' => 'Nesnenin düzenleme politikasını değiştirin.',
      'Join Policy' => 'Politikaya Katıl',
      'Members Of' => 'Üyeleri',
      'Invalid rule class \'%s\'!' => 'Geçersiz kural sınıfı \'%s\'!',
      'Specify the name of an object to show policy information for.' => 'Politika bilgilerini gösterilecek nesnenin adını belirtin.',
      'Select Project' => 'Proje Seçin',
      'Policy identifier is an object PHID (\'%s\'), but the provided handle has a different PHID (\'%s\'). The handle must correspond to the policy identifier.' => 'Politika tanımlayıcısı bir PHID nesnesidir (\'%s\'), ancak sağlanan tutamaç farklı bir PHID\'ye (\'%s\') sahiptir. Sap, ilke tanımlayıcısına karşılık gelmelidir.',
      'Unlocking: %s' => 'Kilit Açma: %s',
      '%s can take this action.' => '%s bu işlemi yapabilir.',
      'Capability "%s" does not exist.' => '"%s" yeteneği mevcut değil.',
      'OBJECT' => 'NESNE',
      'Note:' => 'Not:',
      'You do not have permission to view policy details.' => 'Politika ayrıntılarını görüntülemek için izniniz yok.',
      'Can Edit' => 'Düzenleyebilir',
      'Edit Policy' => 'Politikayı Düzenle',
      'Controls who can view the object.' => 'Nesneyi kimin görebileceğini kontrol eder.',
      'is new' => 'yeni',
      'Require Login' => 'Oturum Açma Gerekli',
      'To access this object, users must have first have access capabilities on these other objects:' => 'Bu nesneye erişmek için kullanıcıların öncelikle bu diğer nesneler üzerinde erişim yeteneklerine sahip olmaları gerekir:',
      '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
      'Members of Project: %s' => 'Proje Üyeleri: %s',
      'Specify the name of exactly one object to unlock.' => 'Kilidini açmak için tam olarak bir nesnenin adını belirtin.',
      'Options relating to object visibility.' => 'Nesne görünürlüğüyle ilgili seçenekler.',
      'This policy rule (of class "%s") does not have an associated object policy key.' => 'Bu politika kuralının ("%s" sınıfı) ilişkili bir nesne politikası anahtarı yok.',
      'Custom "%s" Policy' => 'Özel "%s" Politikası',
      'Custom Policy' => 'Özel Politika',
      'Basic Policies' => 'Temel Politikalar',
      'Change the view policy of the object.' => 'Nesnenin görünüm politikasını değiştirin.',
      'All Users' => 'Tüm Kullanıcılar',
      'Show policy information about an object.' => 'Bir nesne hakkında politika bilgilerini göster.',
      'Capability "%s" does not support public policy.' => '"%s" yeteneği kamu politikasını desteklemiyor.',
      'Controls who can join the object.' => 'Nesneye kimlerin katılabileceğini kontrol eder.',
      'Administrators can take this action.' => 'Hizmetliler bu eylemi yapabilir.',
      'You do not have permission to view this object.' => 'Bu nesneyi görüntüleme izniniz yok.',
      'Policy Details: %s' => 'Politika Detayları: %s',
      'Policy identifier is an object PHID (\'%s\'), but no object handle was provided. A handle must be provided for object policies.' => 'Politika tanımlayıcısı bir nesne PHID\'si (\'%s\'), ancak nesne tanıtıcısı sağlanmadı. Nesne politikaları için bir tanıtıcı sağlanmalıdır.',
      '%s all other users.' => '%s diğer tüm kullanıcılar.',
      'You can not issue a policy query with both %s and %s.' => 'Hem %s hem de %s olan bir politika sorgusu yayınlayamazsınız.',
      'If No Rules Match' => 'Kural Eşleşmiyorsa',
      'The space this object is in has a more restrictive view policy ("%s") than the object does ("%s"), so the space\'s view policy is shown as a hint instead of the object policy.' => 'Bu nesnenin bulunduğu alan, nesnenin ("%2$s") öğesinden daha kısıtlayıcı bir görünüm ilkesine ("%1$s") sahiptir, bu nedenle alanın görünüm ilkesi, nesne ilkesi yerine ipucu olarak gösterilir.',
      'Capability "%s" has invalid policy "%s"; "%s" does not exist.' => '"%s" yeteneği "%s" politikasında geçersiz; "%s" mevcut değil.',
      'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => 'Bu nesne %s cinsindendir ve yalnızca alandaki nesneleri görüntüleme erişimi olan kullanıcılar tarafından görülebilir veya düzenlenebilir.',
      'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'Ayrıntılı olarak, bu yukarıda belirtilen kontrollerin tümünü geçmeleri koşuluyla, bu kullanıcıların bu işlemi gerçekleştirebilecekleri anlamına gelir:',
      'None of these policy rules have any effect.' => 'Bu politika kurallarından hiçbirinin etkisi yoktur.',
      'Select a space for the object.' => 'Nesne için bir boşluk seçin.',
      'Save Policy' => 'Politikayı Kaydet',
      'This object is in a space you do not have permission to access.' => 'Bu nesne, erişim izninizin olmadığı bir alanda.',
      'Spaces Documentation' => 'Boşluk Belgesi',
      'Unknown Policy' => 'Bilinmeyen Politika',
      'Change the join policy of the object.' => 'Nesnenin birleştirme ilkesini değiştirin.',
      'is full' => 'dolu',
      'You can not make that edit, because it would remove your ability to \'%s\' the object.' => 'Bu düzenlemeyi yapamazsınız, çünkü nesneye \'%s\' girme yeteneğinizi ortadan kaldırır.',
      'Policy \'%s\' is not a global policy!' => '\'%s\' politikası küresel bir politika değil!',
      'You do not have permission to join this object.' => 'Bu nesneye katılma izniniz yok.',
      'This object has an unknown or invalid policy setting ("%s").' => 'Bu nesnenin bilinmeyen veya geçersiz bir politika ayarı var ("%s").',
      'This object has special rules which override normal object policy rules:' => 'Bu nesnenin normal nesne politikası kurallarını geçersiz kılan özel kuralları vardır:',
      'Can Join' => 'Katılabilir',
      'This object has a custom policy controlling who can take this action.' => 'Bu nesnenin bu eylemi kimin yapabileceğini kontrol eden özel bir politika var.',
      'New space PHID.' => 'Yeni alan PHID.',
      'Capability "%s" has invalid policy "%s".' => '"%s" yeteneği "%s" politikasında geçersiz.',
      'You do not have permission to interact with this object.' => 'Bu nesneyle etkileşim kurma izniniz yok.',
    );
  }

}
