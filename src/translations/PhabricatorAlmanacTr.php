<?php

final class PhabricatorAlmanacTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Service PHID.' => 'Hizmet PHID\'si.',
      'Specify a public key to trust with --id.' => '--id ile güvenilecek bir ortak anahtar belirtin.',
      'Transaction value when setting Almanac properties must be a map with property names as keys.' => 'Almanak özelliklerini ayarlarken işlem değeri, özellik adlarını anahtar olarak gösteren bir harita olmalıdır.',
      'Name of the service.' => 'Hizmetin adı.',
      'Service "%s" is unrecognized, restricted, or you do not have permission to edit it.' => '"%s" hizmeti tanınmıyor, kısıtlanmış veya düzenleme izniniz yok.',
      'Installing device %s...' => 'Cihaz %s yükleniyor...',
      'Namespace' => 'Ad alanı',
      'Add Property' => 'Mülk Ekle',
      'Map of property names to values.' => 'Özellik adlarının değerlerle eşleştirilmesi.',
      'Builtin Property' => 'Yerleşik Mülkiyet',
      'Enable this binding?' => 'Bu bağlama etkinleştirilsin mi?',
      'ID of the key to revoke trust for.' => 'Güveni iptal etmek için kullanılan anahtarın kimliği.',
      'Name of the network.' => 'Ağın adı.',
      'This is a cluster service.' => 'Bu bir küme hizmetidir.',
      'Manage public and private networks.' => 'Genel ve özel ağları yönetin.',
      'Apply transactions to create a new binding or edit an existing one.' => 'Yeni bir bağlayıcı oluşturmak veya mevcut bir bağlayıcıyı düzenlemek için işlemleri uygulayın.',
      'You can not bind a service which you do not have permission to edit.' => 'Düzenleme izniniz olmayan bir hizmeti bağlayamazsınız.',
      'Network for the interface.' => 'Arayüz için ağ.',
      'To view a binding, you must also be able to view its device and interface.' => 'Bir bağlamayı görüntülemek için, aygıtını ve arabirimini de görebilmeniz gerekir.',
      'This device is bound to a cluster service.' => 'Bu aygıt bir küme hizmetine bağlı.',
      'Device %d' => '%s cihazı',
      'The bound service.' => 'Bağlı hizmet.',
      'Add Interface' => 'Arayüz Ekle',
      'Almanac service, device, property, network and namespace names may not be more than 100 characters long.' => 'Almanak servisi, cihazı, özelliği, ağı ve ad alanı adları 100 karakterden uzun olamaz.',
      'Almanac Namespace' => 'Almanak Ad Alanı',
      'Reset property "%s" to its default value?' => '"%s" özelliği varsayılan değerine sıfırlansın mı?',
      'Bindings must specify an interface.' => 'Bağlamalar bir arabirim belirtmelidir.',
      'Cluster Device' => 'Küme Aygıtı',
      'Disable this binding?' => 'Bu bağlama devre dışı bırakılsın mı?',
      'Almanac service, device, property, network and namespace names may not contain multiple consecutive periods.' => 'Almanak hizmeti, cihazı, özelliği, ağı ve ad alanı adları birbirini takip eden birden çok dönem içeremez.',
      'This device has no associated SSH public keys.' => 'Bu aygıtta ilişkili SSH ortak anahtarı yok.',
      'Create Service' => 'Hizmet Oluştur',
      'You can only trust keys associated with Almanac devices.' => 'Yalnızca Almanak cihazlarıyla ilişkili anahtarlara güvenebilirsiniz.',
      'You do not have permission to create Almanac services.' => 'Almanak hizmetleri oluşturma izniniz yok.',
      'Almanac service, device, property, network and namespace names may not contain hyphens adjacent to periods.' => 'Almanak hizmeti, cihazı, özelliği, ağı ve ad alanı adları noktalara bitişik kısa çizgiler içeremez.',
      'Public key with ID %s is already trusted.' => '%s kimliğine sahip ortak anahtara zaten güveniliyor.',
      'You can not bind a nonexistent or restricted service.' => 'Varolmayan veya kısıtlanmış bir hizmeti bağlayamazsınız.',
      '%s enabled this binding.' => '%s bu bağlayıcıyı etkinleştirdi.',
      'Register this host even if keys already exist on disk.' => 'Anahtarlar zaten diskte olsa bile bu ana bilgisayarı kaydedin.',
      'Interface PHID.' => 'Arayüz PHID.',
      'Path to a private key for the host.' => 'Ana bilgisayar için özel anahtarın yolu.',
      'Drydock: Resource Pool' => 'Drydock: Kaynak Havuzu',
      'Search for bindings on particular services.' => 'Belirli hizmetlerde bağlantı arayın.',
      'Add Binding' => 'Bağlantı Ekle',
      'Mark a public key as trusted.' => 'Genel anahtarı güvenilir olarak işaretleyin.',
      'When creating a new Almanac interface via the Conduit API, you must provide a "device" transaction to select a device.' => 'Conduit API\'sı aracılığıyla yeni bir Almanak arayüzü oluştururken, bir cihaz seçmek için bir "cihaz" işlemi sağlamanız gerekir.',
      'Almanac Devices' => 'Almanak Cihazları',
      'Custom Service' => 'Müşteri Servisi',
      'Phabricator Cluster: Database' => 'Phabricator Kümesi: Veritabanı',
      'Almanac Networks' => 'Almanak Ağları',
      'You must be able to view the network an interface resides on to view the interface.' => 'Arabirimi görüntülemek için bir arabirimin bulunduğu ağı görebilmeniz gerekir.',
      'Almanac service, device, property, network and namespace names must be at least 3 characters long.' => 'Almanak hizmeti, cihazı, özelliği, ağı ve ad alanı adları en az 3 karakter uzunluğunda olmalıdır.',
      'Edit Namespace' => 'Ad Alanını Düzenle',
      'Network %d' => 'Ağ %s',
      'Properties inherit the policies of their object.' => 'Özellikler, nesnelerinin ilkelerini devralır.',
      'Config option "phd.user" is not set. You must set this option so the private key can be stored with the correct permissions.' => '"phd.user" yapılandırma seçeneği ayarlanmamış. Özel anahtarın doğru izinlerle depolanabilmesi için bu seçeneği ayarlamanız gerekir.',
      'Select the service to bind.' => 'Bağlanacak hizmeti seçin.',
      'The address of the interface.' => 'Arayüzün adresi.',
      'This service has not been bound to any device interfaces yet.' => 'Bu hizmet henüz herhangi bir cihaz arayüzüne bağlı değil.',
      'Prevent Writes' => 'Yazmaları Önle',
      'The device for an interface can not be changed once it has been created.' => 'Bir arayüzün cihazı oluşturulduktan sonra değiştirilemez.',
      'Search for interfaces on particular devices.' => 'Belirli cihazlardaki arayüzleri arayın.',
      'Namespace Name' => 'Ad Alanı Adı',
      'Really trust this key?' => 'Gerçekten bu anahtara güveniyor musun?',
      'Browse documentation for Almanac.' => 'Almanak için belgelere göz atın.',
      'The service for this binding is a cluster service. You do not have permission to manage cluster services, so this binding can not be edited.' => 'Bu bağlanma hizmeti bir küme hizmetidir. Küme hizmetlerini yönetme izniniz yok, bu nedenle bu görünüme düzenlenemez.',
      'Browse Services' => 'Hizmetlere Göz Atın',
      'You can not bind a service to an invalid or restricted interface.' => 'Bir hizmeti geçersiz veya kısıtlı bir arayüze bağlayamazsınız.',
      'Interfaces must have a device.' => 'Arayüzlerin bir cihazı olmalıdır.',
      'Read information about Almanac networks.' => 'Almanak ağları hakkında bilgi edinin.',
      'Specify a private key with --private-key.' => '--private-key ile özel bir anahtar belirleyin.',
      'Remove interface %s on device %s?' => '%2$s cihazındaki arayüz %1$s kaldırılsın mı?',
      '%s updated the property %s.' => '%s, mülkü %s güncelledi.',
      'Edit Almanac Binding Configurations' => 'Almanak Bağlama Yapılandırmalarını Düzenle',
      'Address of the service.' => 'Hizmetin adresi.',
      'When creating a new Almanac service via the Conduit API, you must provide a "type" transaction to select a type.' => 'Conduit API\'sı aracılığıyla yeni bir Almanak hizmeti oluştururken, bir tür seçmek için bir "tür" işlemi sağlamanız gerekir.',
      'Set the interface to bind.' => 'Arabirimi bağlamak için ayarlayın.',
      'Phabricator Cluster: Repository' => 'Phabricator Kümesi: Depo',
      'Specify an alternate host identity. This is an advanced feature which allows a pool of devices to share credentials.' => 'Alternatif bir ana bilgisayar kimliği belirtin. Bu, bir aygıt deponun kimlik bilgilerini paylaşmasına izin veren gelişmiş bir özelliktir.',
      'Control who can create new named services and devices.' => 'Kimlerin yeni adlandırılmış hizmetler ve cihazlar oluşturabileceğini denetleyin.',
      'Almanac services must have unique names.' => 'Almanak hizmetlerinin benzersiz isimleri olmalıdır.',
      'Another namespace with this name already exists. Each namespace must have a unique name.' => 'Bu ada sahip başka bir ad alanı zaten var. Her ad alanının benzersiz bir adı olmalıdır.',
      'Interfaces must have a port number.' => 'Arabirimlerin bir bağlantı noktası numarası olmalıdır.',
      'This permission is very dangerous. %s' => 'Bu izin çok tehlikelidir. %s',
      'Binding %d' => '%s bağlama',
      'An interface inherits the policies of the device it belongs to.' => 'Bir arayüz ait olduğu cihazın politikalarını devralır.',
      'This device is bound to a cluster service. You do not have permission to manage cluster services, so the device can not be edited.' => 'Bu aygıt bir küme hizmetine bağlı. Küme hizmetlerini yönetme izniniz yok, bu nedenle cihaz düzenlenemez.',
      'Set the service type.' => 'Hizmet türünü ayarlayın.',
      'Create Binding' => 'Bağlama Oluştur',
      'Reset' => 'Sıfırla',
      'Edit Network' => 'Ağı Düzenle',
      'Allow New Repositories' => 'Yeni Depolara İzin Ver',
      'Almanac Service' => 'Almanak Hizmeti',
      'This service is a cluster service. You do not have permission to edit cluster services, so you can not edit this service.' => 'Bu hizmet bir küme hizmetidir. Küme hizmetlerini düzenleme izniniz yok, bu nedenle bu hizmeti düzenleyemezsiniz.',
      'Edit Service' => 'Hizmeti Düzenle',
      'Create Namespace' => 'Ad Alanı Oluştur',
      'A binding inherits the policies of its service.' => 'Bir bağlayıcı hizmet politikalarını devralır.',
      'No Almanac service type "%s" exists!' => 'Almanak hizmet türü "%s" mevcut değil!',
      'Cluster Database' => 'Küme Veritabanı',
      'No Almanac Devices found.' => 'Almanak Cihazı bulunamadı.',
      'Almanac property values must be representable in JSON. %s' => 'Almanak özellik değerleri JSON\'da temsil edilebilir olmalıdır. %s',
      'Service type "%s" is unrecognized. Valid types are: %s.' => '"%s" hizmet türü tanınmıyor. Geçerli türler: %s.',
      'Interface %d' => '%s arayüzü',
      'Network' => 'Ağ',
      'Almanac Interfaces' => 'Almanak Arayüzleri',
      'Create Network' => 'Ağ Oluştur',
      'Read information about Almanac devices.' => 'Almanak cihazları hakkında bilgi edinin.',
      'The interface the service is bound to.' => 'Hizmetin bağlı olduğu arabirim.',
      'The name of the network.' => 'Ağın adı.',
      'Device Interfaces' => 'Cihaz Arayüzleri',
      'Custom Property' => 'Özel Mülk',
      'Installing public key...' => 'Ortak anahtar yükleniyor...',
      'Almanac networks must have unique names.' => 'Almanak ağlarının benzersiz isimleri olmalıdır.',
      'Search for services with specific names.' => 'Belirli adlara sahip hizmetleri arayın.',
      'Service Name' => 'Hizmet Adı',
      'Almanac Core Objects' => 'Almanak Çekirdek Nesneleri',
      'Edit Device' => 'Cihazı Düzenle',
      'The device the service is bound to.' => 'Hizmetin bağlı olduğu cihaz.',
      'Public key with ID %s is not trusted.' => '%s kimliğine sahip ortak anahtara güvenilmez.',
      'All Networks' => 'Tüm Ağlar',
      'The name of the service.' => 'Hizmetin adı.',
      'Prevent New Repositories' => 'Yeni Depoları Önleyin',
      'This engine is used to edit Almanac interfaces.' => 'Bu motor Almanak arayüzlerini düzenlemek için kullanılır.',
      'Public key "%s" is not an active key.' => 'Genel anahtar "%s" etkin bir anahtar değil.',
      '%s changed the network for this interface from %s to %s.' => '%s bu arayüz için ağı %s üzerinden %s değiştirdi.',
      'Edit Network: %s' => 'Düzenleme Ağı: %s',
      'Delete Property' => 'Mülkü Sil',
      'Edit Property' => 'Mülkü Düzenle',
      'Register this host as an Almanac device.' => 'Bu ev sahibini Almanak cihazı olarak kaydettir.',
      'TRUSTED' => 'GÜVENİLİR',
      '%s created this service.' => '%s bu hizmeti oluşturdu',
      'You do not have permission to create Almanac networks.' => 'Almanak ağları oluşturma izniniz yok.',
      'Search for devices by name substring.' => 'Alt dizeye göre aygıtları arayın.',
      'Namespace name is required.' => 'Ad alanı adı gerekli.',
      'Search for services bound to particular devices.' => 'Belirli cihazlara bağlı hizmetleri arayın.',
      'No private key exists at path "%s"!' => '"%s" yolunda özel anahtar yok!',
      'Disable or enable the binding.' => 'Bağlamayı devre dışı bırakın veya etkinleştirin.',
      'Device name is required.' => 'Cihaz adı gerekli.',
      'Interfaces must have an address.' => 'Arayüzlerin bir adresi olmalıdır.',
      'True to disable the binding.' => 'Bağlamayı devre dışı bırakmak için true.',
      '%s renamed this service from %s to %s.' => '%s, bu hizmeti %s iken %s olarak yeniden adlandırdı.',
      'Drydock Pool' => 'Drydock Havuzu',
      'You can not attach an interface to a nonexistent or restricted device.' => 'Var olmayan veya kısıtlanmış bir aygıta arabirim ekleyemezsiniz.',
      'Almanac service, device, network, property and namespace names may not have any segments containing only digits.' => 'Almanak hizmeti, cihaz, ağ, özellik ve ad alanı adlarında yalnızca rakam içeren bölümler olmayabilir.',
      'Namespace %d' => '%s ad alanı',
      'Edit Almanac Interface Configurations' => 'Almanak Arayüz Yapılandırmalarını Düzenle',
      'You can not delete this interface because it is currently in use. One or more services are bound to it.' => 'Şu anda kullanımda olduğu için bu arayüzü silemezsiniz. Bir veya daha fazla hizmet buna bağlıdır.',
      'Edit Service: %s' => 'Düzenleme Hizmeti: %s',
      'Almanac Console' => 'Almanak Konsolu',
      'Browse Interfaces' => 'Arayüzlere Göz At',
      'Namespace %s' => '%s ad alanı',
      'Almanac Binding' => 'Almanak Bağlama',
      'Port numbers must be between 1 and 65535, inclusive.' => 'Bağlantı noktası numaraları, 1 ile 65535 arasında olmalıdır.',
      'List of property names.' => 'Mülk adlarının listesi.',
      'Type a service type name...' => 'Bir hizmet türü adı yazın...',
      'Cluster Devices Only' => 'Yalnızca Küme Aygıtları',
      'The service for a binding can not be changed once it has been created.' => 'Bir görünümleştirme hizmeti oluşturulduktan sonra değiştirilemez.',
      'Can Create Networks' => 'Ağlar Oluşturabilir',
      'Can Create Services' => 'Hizmetler Oluşturabilir',
      'The public key corresponding to the given private key is already associated with an object ("%s") other than the specified device ("%s"). You can not use a single private key to identify multiple devices or users.' => 'Belirtilen özel anahtara karşılık gelen genel anahtar, belirtilen aygıt ("%2$s") dışındaki bir nesneyle ("%1$s") zaten ilişkilendirilmiş. Birden fazla cihazı veya kullanıcıyı tanımlamak için tek bir özel anahtar kullanamazsınız.',
      'The network the interface is part of.' => 'Arayüzün parçası olduğu ağ.',
      'When creating a service, set the type.' => 'Hizmet oluştururken türü ayarlayın.',
      'Device PHID.' => 'Cihaz PHID\'si.',
      'Delete property "%s"?' => '"%s" mülkü silinsin mi?',
      'The service for this binding is a cluster service.' => 'Bu bağlanma hizmeti bir küme hizmetidir.',
      'Read information about Almanac namespaces.' => 'Almanak ad alanları hakkında bilgi edinin.',
      'Binding %s' => '%s bağlama',
      'Network name is required.' => 'Ağ adı gerekli.',
      'Create Property' => 'Mülk Oluştur',
      'Port of the service.' => 'Hizmet limanı.',
      'You do not have permission to create Almanac devices within the "%s" namespace.' => '"%s" ad alanında Almanak cihazlar oluşturma izniniz yok.',
      'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'Bu ana bilgisayarda zaten kayıtlı bir özel anahtar ("%s") var. Ana bilgisayarı kaydetmeden önce bu anahtarı kaldırın veya üzerine yazmak için --force kullanın.',
      'This key is associated with device "%s".' => 'Bu anahtar "%s" cihazıyla ilişkilendirildi.',
      'Key %s has been marked as trusted.' => '%s anahtarı güvenilir olarak işaretlendi.',
      'Binding' => 'Bağlayıcı',
      'This engine is used to edit Almanac networks.' => 'Bu motor Almanak ağlarını düzenlemek için kullanılır.',
      'You can not bind a service to the same interface multiple times.' => 'Bir hizmeti aynı arabirime birden çok kez bağlayamazsınız.',
      'Trust has been revoked for public key %s.' => 'Ortak anahtar %s için güven iptal edildi.',
      'Apply transactions to create a new network or edit an existing one.' => 'Yeni bir ağ oluşturmak veya mevcut bir ağı düzenlemek için işlemleri uygulayın.',
      'Service Directory' => 'Hizmet Dizini',
      'To create a new service, you must select a service type.' => 'Yeni bir hizmet oluşturmak için bir hizmet türü seçmelisiniz.',
      'Read information about Almanac interfaces.' => 'Almanak arayüzleri hakkında bilgi edinin.',
      'Apply transactions to create a new namespace or edit an existing one.' => 'Yeni bir ad alanı oluşturmak veya mevcut bir alanı düzenlemek için işlemleri uygulayın.',
      'Service Types' => 'Hizmet Türleri',
      'Service type "%s" is not valid. Valid types are: %s.' => 'Hizmet türü "%s" geçerli değil. Geçerli türler: %s.',
      '%s removed the interface for this binding.' => '%s bu bağlamanın arabirimini kaldırdı.',
      'Almanac Bindings' => 'Almanak Bağlamaları',
      'Service Type' => 'Hizmet Türü',
      'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'Bu ana bilgisayarda zaten kayıtlı bir genel anahtar var ("%s"). Ana bilgisayarı kaydetmeden önce bu anahtarı kaldırın veya üzerine yazmak için --force kullanın.',
      'Specify a device with --device.' => '--device ile bir aygıt belirtin.',
      'All Bindings' => 'Tüm Bağlamalar',
      'Edit Namespace: %s' => 'Düzenleme Ad Alanı: %s',
      'Service Bindings' => 'Hizmet Bağlamları',
      'Invalid Property' => 'Geçersiz Mülk',
      'The service type constant.' => 'Hizmet türü sabiti.',
      'The property name "%s" is invalid. This property can not be edited.' => '"%s" mülk adı geçersiz. Bu özellik düzenlenemez.',
      'Almanac' => 'Almanak',
      'Can Manage Cluster Services' => 'Küme Hizmetlerini Yönetebilir',
      'No public key exists with ID "%s".' => '"%s" kimliğine sahip ortak anahtar yok.',
      'The name of the namespace.' => 'Ad alanının adı.',
      'Type a service name...' => 'Bir hizmet adı yazın...',
      'Almanac Namespaces' => 'Almanak Ad Alanları',
      'No Almanac Services found.' => 'Almanak Hizmeti bulunamadı.',
      'IMPORTANT!' => 'ÖNEMLİ!',
      'Search for bindings on particular devices.' => 'Belirli cihazlarda bağlantı arayın.',
      '%s created this device.' => '%s bu cihazı oluşturdu.',
      'Almanac User Guide' => 'Almanak Kullanım Kılavuzu',
      'You have permission to create cluster services.' => 'Küme hizmetleri oluşturma izniniz var.',
      'You do not have permission to create Almanac services within the "%s" namespace.' => '"%s" ad alanında Almanak hizmetleri oluşturma izniniz yok.',
      'Edit Interface' => 'Arayüzü Düzenle',
      'Specify a public key to revoke trust for with --id.' => '--id ile güveni iptal etmek için bir ortak anahtar belirtin.',
      'Interface to bind the service to.' => 'Hizmeti bağlamak için arabirim.',
      '%s removed the property %s.' => '%s özelliği %s özelliğini kaldırdı.',
      'Choose Service Type' => 'Hizmet Türünü Seçin',
      '%s renamed this namespace from %s to %s.' => '%s, bu ad alanını %s üzerinden %s değiştirdi.',
      'Apply transactions to create a new interface or edit an existing one.' => 'Yeni bir arayüz oluşturmak veya mevcut bir arayüzü düzenlemek için işlemleri uygulayın.',
      'This engine is used to edit Almanac properties.' => 'Bu motor Almanak özelliklerini düzenlemek için kullanılır.',
      'No services are bound to this device.' => 'Bu cihaza hiçbir hizmet bağlı değil.',
      'Interfaces must have a unique combination of network, device, address, and port.' => 'Arayüzler ağ, cihaz, adres ve portun benzersiz bir kombinasyonuna sahip olmalıdır.',
      'Set the device.' => 'Cihazı ayarlayın.',
      'Name of the namespace.' => 'Ad alanının adı.',
      'Network %s' => 'Ağ %s',
      'Bound Services' => 'Bağlı Hizmetler',
      'Disable Binding' => 'Bağlamayı Devre Dışı Bırak',
      'Create Device' => 'Cihaz Oluştur',
      'All Interfaces' => 'Tüm Arayüzler',
      'This engine is used to edit Almanac services.' => 'Bu motor Almanak servislerini düzenlemek için kullanılır.',
      'Service %d' => '%s hizmeti',
      'Edit Almanac Namespace Configurations' => 'Almanak Ad Alanı Yapılandırmalarını Düzenle',
      'Almanac devices must have unique names.' => 'Almanak cihazlarının benzersiz isimleri olmalıdır.',
      'Edit Almanac Device Configurations' => 'Almanak Cihaz Yapılandırmalarını Düzenle',
      'Edit Property: %s' => 'Düzenleme Mülkü: %s',
      'Pass a list of property names to delete properties.' => 'Özellikleri silmek için özellik adlarının bir listesini iletin.',
      'When creating an interface, set the device.' => 'Bir arayüz oluştururken cihazı ayarlayın.',
      'Service to create a binding for.' => 'Hizmet için bir bağlayıcı oluşturmak.',
      'Almanac service, device, property, network and namespace names must begin and end with a letter or number.' => 'Almanak hizmeti, cihazı, özelliği, ağı ve ad alanı adları bir harf veya sayı ile başlamalı ve bitmelidir.',
      'Name of the device.' => 'Cihazın adı.',
      'Enable Binding' => 'Bağlamayı Etkinleştir',
      'Can Create Namespaces' => 'Ad Alanları Oluşturabilir',
      'Read information about Almanac services.' => 'Almanak hizmetleri hakkında bilgi edinin.',
      'Trusting a public key gives anyone holding the corresponding private key complete, unrestricted access to all data in Phabricator. The private key will be able to sign requests that skip policy and security checks.' => 'Bir ortak anahtara güvenmek, ilgili özel anahtarı tutan herkese Phabricator\'daki tüm verilere tam ve sınırsız erişim sağlar. Özel anahtar, ilke ve güvenlik denetimlerini atlayan istekleri imzalayabilecektir.',
      'The type of a service can not be changed once it has been created.' => 'Hizmet türü oluşturulduktan sonra değiştirilemez.',
      'Interface status.' => 'Arayüz durumu.',
      'Edit Almanac Property Configurations' => 'Almanak Mülk Yapılandırmalarını Düzenle',
      '%s created this network.' => '%s bu ağı oluşturdu',
      'Almanac service, device, property, network and namespace names may not contain multiple consecutive hyphens.' => 'Almanak servisi, cihazı, özelliği, ağı ve ad alanı adları ardışık birden fazla tire içeremez.',
      '%s renamed this network from %s to %s.' => '%s, bu ağı %s üzerinden %s değiştirdi.',
      'Defines a database service for use in a Phabricator cluster.' => 'Bir Phabricator kümesinde kullanılacak veritabanı hizmetini tanımlar.',
      '%s changed the interface for this binding from %s to %s.' => '%s, bu bağlamanın arabirimini %s üzerinden %s değiştirdi.',
      'All Namespaces' => 'Tüm Ad Alanları',
      'The name of the device.' => 'Cihazın adı.',
      'The public key corresponding to the given private key is properly associated with the device, but is not yet trusted. Trust this key before registering devices with it.' => 'Belirtilen özel anahtara karşılık gelen genel anahtar, cihazla doğru bir şekilde ilişkilendirilmiş, ancak henüz güvenilir değil. Cihazları kaydetmeden önce bu anahtara güven.',
      '%s changed the device for this interface from %s to %s.' => '%s, bu arayüz için cihazı %s üzerinden %s değiştirdi.',
      'Namespaces' => 'Ad alanları',
      'Create and update services, and map them to interfaces on devices.' => 'Servisler oluşturun ve güncelleyin ve bunları cihazlardaki arayüzlerle eşleştirin.',
      'All Services' => 'Tüm Hizmetler',
      'Defines a pool of hosts which Drydock can allocate.' => 'Drydock\'un ayırabileceği bir ana bilgisayar havuzu tanımlar.',
      '%s set the interface for this binding to %s.' => '%s, bu bağlamanın arabirimini %s olarak ayarladı.',
      'Defines a unstructured custom service.' => 'Yapılandırılmamış bir özel hizmet tanımlar.',
      'Reset Property' => 'Mülkü Sıfırla',
      'Apply transactions to create a new device or edit an existing one.' => 'Yeni bir cihaz oluşturmak veya mevcut bir cihazı düzenlemek için işlemleri uygulayın.',
      'You must select a service type when creating a service.' => 'Hizmet oluştururken bir hizmet türü seçmelisiniz.',
      'Delete Interface' => 'Arayüzü Sil',
      'The namespace name "%s" is already in use by another namespace. Each namespace must have a unique name.' => '"%s" ad alanı adı başka bir ad alanı tarafından kullanılıyor. Her ad alanının benzersiz bir adı olmalıdır.',
      'Almanac Interface' => 'Almanak Arayüzü',
      'Installing private key...' => 'Özel anahtar yükleniyor...',
      'No Almanac Networks found.' => 'Almanak Ağları bulunamadı.',
      'Almanac Network' => 'Almanak Ağı',
      'You do not have permission to manage cluster services.' => 'Küme hizmetlerini yönetme izniniz yok.',
      'You can not put an interface on a nonexistent or restricted network.' => 'Varolmayan veya kısıtlı bir ağa arabirim koyamazsınız.',
      '%s:%s (%s on %s)' => '%s:%s (%s üzerinde %s)',
      'Create Interface' => 'Arayüz Oluştur',
      'Search for networks by name substring.' => 'Ağları ad dizgisine göre arayın.',
      'Almanac services must have a name.' => 'Almanak hizmetlerinin bir adı olmalı.',
      'TRUST REVOKED' => 'GÜVEN İPTAL EDİLDİ',
      'Device Name' => 'Cihaz Adı',
      'No properties.' => 'Mülk yok.',
      '%s changed the port for this interface from %s to %s.' => '%s, bu arabirimin bağlantı noktasını %s üzerinden %s değiştirdi.',
      'All Devices' => 'Tüm Cihazlar',
      'Almanac Properties' => 'Almanak Mülkleri',
      'You do not have permission to create Almanac devices.' => 'Almanak cihazları oluşturma izniniz yok.',
      '%s disabled this binding.' => '%s bu bağlamayı devre dışı bıraktı.',
      'Edit Almanac Network Configurations' => 'Almanak Ağ Yapılandırmalarını Düzenle',
      'You do not have permission to create Almanac namespaces.' => 'Almanak ad alanları oluşturma izniniz yok.',
      'This is an advanced feature which should normally be used only when building a Phabricator cluster. This feature is very dangerous if misused.' => 'Bu normalde yalnızca bir Phabricator kümesi oluşturulurken kullanılması gereken gelişmiş bir özelliktir. Bu özellik yanlış kullanıldığında çok tehlikelidir.',
      'Type an interface name...' => 'Bir arayüz adı yazın...',
      '%s created this namespace.' => '%s bu ad alanını oluşturdu.',
      'The public key corresponding to the given private key is not yet known to Phabricator. Associate the public key with an Almanac device in the web interface before registering hosts with it.' => 'Belirtilen özel anahtara karşılık gelen genel anahtar henüz Phabricator tarafından bilinmiyor. Ana anahtarı, ana bilgisayarlara kaydetmeden önce web arabirimindeki bir Almanak cihazıyla ilişkilendirin.',
      'The device the interface is on.' => 'Arayüzün açık olduğu cihaz.',
      'Can Create Devices' => 'Cihazlar Oluşturabilir',
      'Interfaces must have a network.' => 'Arayüzlerin bir ağı olmalıdır.',
      'Browse Service Types' => 'Hizmet Türlerine Göz Atın',
      'Almanac service, device, property, network and namespace names may only contain lowercase letters, numbers, hyphens, and periods.' => 'Almanak hizmeti, cihaz, özellik, ağ ve ad alanı adları yalnızca küçük harfler, sayılar, kısa çizgiler ve nokta içerebilir.',
      'Search for services by name substring.' => 'Hizmetleri ad dizgisine göre arayın.',
      'Get Almanac bindings for the service.' => 'Hizmet için Almanak bağları alın.',
      'Get Almanac properties for the object.' => 'Nesne için Almanak özelliklerini alın.',
      'You do not have permission to create new cluster services.' => 'Yeni küme hizmetleri oluşturma izniniz yok.',
      'Almanac Device' => 'Almanak Cihazı',
      '%s changed the address for this interface from %s to %s.' => '%s, bu arayüzün adresini %s üzerinden %s değiştirdi.',
      'This engine is used to edit Almanac bindings.' => 'Bu motor Almanak bağlarını düzenlemek için kullanılır.',
      'Interface In Use' => 'Kullanılan Arayüz',
      'Almanac device name to register.' => 'Kaydetmek için Almanak cihaz adı.',
      'Bindings must have a service.' => 'Görünümlerin bir servisi olmalı.',
      'Revoke trust of a public key.' => 'Ortak bir anahtara güveni iptal edin.',
      'Edit Almanac Service Configurations' => 'Almanak Hizmet Yapılandırmalarını Düzenle',
      'This engine is used to edit Almanac namespaces.' => 'Bu motor Almanak ad alanlarını düzenlemek için kullanılır.',
      'Create an inventory of physical and virtual hosts and devices.' => 'Fiziksel ve sanal ana bilgisayarların ve cihazların bir envanterini oluşturun.',
      'Cluster Repository' => 'Küme Deposu',
      'Find services by type.' => 'Hizmetleri türe göre bulun.',
      'Networks' => 'Ağlar',
      'Allow Writes' => 'Yazmaya İzin Ver',
      'Defines a repository service for use in a Phabricator cluster.' => 'Bir Phabricator kümesinde kullanılacak bir depo hizmetini tanımlar.',
      'This host has been registered as "%s" and a trusted keypair has been installed.' => 'Bu ana bilgisayar "%s" olarak kaydedildi ve güvenilir bir anahtar çifti kuruldu.',
      '%s renamed this device from %s to %s.' => '%s, bu cihazı %s iken %s olarak yeniden adlandırdı.',
      'Service "%s" does not exist or could not be loaded!' => '"%s" hizmeti mevcut değil veya yüklenemedi!',
      'Search for devices with specific names.' => 'Belirli adlara sahip cihazları arayın.',
      'When deleting Almanac properties, each property name must be a string. The value at index "%s" is not a string.' => 'Almanak özelliklerini silerken, her özellik adı bir dize olmalıdır. "%s" dizinindeki değer bir dize değil.',
      'Read information about Almanac bindings.' => 'Almanak bağları hakkında bilgi edinin.',
      'Service %s' => '%s hizmeti',
      'Non-cluster Devices Only' => 'Yalnızca Kümelenmemiş Aygıtlar',
      'Edit Binding' => 'Bağlantıyı Düzenle',
      'Apply transactions to create a new service or edit an existing one.' => 'Yeni bir hizmet oluşturmak veya mevcut bir hizmeti düzenlemek için işlemleri uygulayın.',
      'This host has device ID "%s", but there is no corresponding device record in Almanac.' => 'Bu ana bilgisayarda "%s" cihaz kimliği var, ancak Almanak\'ta buna karşılık gelen bir cihaz kaydı yok.',
      'Both Cluster and Non-cluster Devices' => 'Hem Küme hem de Kümesiz Aygıtlar',
      'When creating a new Almanac binding via the Conduit API, you must provide a "service" transaction to select a service to bind.' => 'Conduit API\'sı aracılığıyla yeni bir Almanak bağlaması oluştururken, bağlanacak bir hizmet seçmek için bir "hizmet" işlemi sağlamanız gerekir.',
      'Edit Device: %s' => 'Düzenleme Cihazı: %s',
      'Device %s' => '%s cihazı',
      'HOST REGISTERED' => 'ANA BİLGİSAYAR KAYITLI',
      'The port number of the interface.' => 'Arabirimin bağlantı noktası numarası.',
      '%s created this interface.' => '%s bu arayüzü oluşturdu.',
      'You can not attach an interface to a device which you do not have permission to edit.' => 'Düzenleme izniniz olmayan bir cihaza arayüz ekleyemezsiniz.',
      'Unable to change ownership of an identity file to daemon user "%s". Run this command as %s or root.' => 'Bir kimlik dosyasının sahipliği "daemon %s" kullanıcısıyla değiştirilemiyor. Bu komutu %s veya root olarak çalıştırın.',
      'You do not have permission to create Almanac namespaces within the "%s" namespace.' => '"%s" ad alanında Almanak ad alanları oluşturma izniniz yok.',
      'Pass a map of values to set one or more properties.' => 'Bir veya daha fazla özellik ayarlamak için bir değerler haritası iletin.',
      'Device "%s" is unrecognized, restricted, or you do not have permission to edit it.' => '"%s" cihazı tanınmıyor, kısıtlanmış veya düzenleme izniniz yok.',
      'Service type.' => 'Hizmet türü.',
      'You do not have permission to manage Almanac cluster services.' => 'Almanak küme hizmetlerini yönetme izniniz yok.',
      '%s created this binding.' => '%s bu bağlantıyı oluşturdu.',
      'This engine is used to edit Almanac devices.' => 'Bu motor Almanak cihazlarını düzenlemek için kullanılır.',
      'Transaction value when deleting Almanac properties must be a list of property names.' => 'Almanak özelliklerini silerken işlem değeri özellik adlarının bir listesi olmalıdır.',
      'ID of the key to trust.' => 'Güvenilecek anahtarın kimliği.',
      'No such device "%s" exists!' => 'Böyle bir "%s" cihazı yok!',
      'No Almanac namespaces found.' => 'Almanak ad alanı bulunamadı.',
    );
  }

}
