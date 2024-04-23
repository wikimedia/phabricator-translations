<?php

final class PhabricatorConduitTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Support for ConduitResultInterface' => 'ConduitResultInterface desteği',
      'Conduit Logs' => 'Conduit Günlükleri',
      'Use form-encoded data to submit parameters to Conduit endpoints. Sending a JSON-encoded body and setting \'Content-Type\': \'application/json\' is not currently supported.' => 'Conduit uç noktalarına parametre göndermek için form kodlu verileri kullanın. JSON kodlu bir gövde gönderme ve \'İçerik Türü\' ayarlama: \'application/json\' şu anda desteklenmemektedir.',
      'Session key is invalid.' => 'Oturum anahtarı geçersiz.',
      'arc call-conduit' => 'arc çağrı kanalı',
      'List capabilities, wire formats, and authentication protocols available on this server.' => 'Bu sunucuda bulunan yetenekleri, kablo biçimlerini ve kimlik doğrulama protokollerini listeleyin.',
      'Conduit tokens inherit the policies of the user they authenticate.' => 'Conduit simgeleri, kimlik doğrulaması yaptıkları kullanıcının ilkelerini devralır.',
      'JSON' => 'JSON',
      'Deprecated Method' => 'Onaylanmayan Yöntem',
      'The username you are attempting to authenticate with is not valid.' => 'Kimlik doğrulaması yapmaya çalıştığınız kullanıcı adı geçerli değil.',
      'All Methods' => 'Tüm Yöntemler',
      'API Method: %s' => 'API Yöntemi: %s',
      'cURL' => 'cURL',
      'OAuth clients may never call this method.' => 'OAuth istemcileri bu yöntemi asla çağıramaz.',
      'Human Readable' => 'İnsan Tarafından Okunabilir',
      'Called After' => 'Sonrası',
      'Unstable Methods' => 'Kararsız Yöntemler',
      'Retrieve certificate information for a user.' => 'Bir kullanıcı için sertifika bilgilerini alın.',
      'Call to method newQueryObject() did not return an object of class "%s".' => 'newQueryObject() yöntemine yapılan çağrı, "%s" sınıfındaki bir nesneyi döndürmedi.',
      'Reading input from stdin...' => 'Stdin\'den giriş okunuyor...',
      'All Call Logs' => 'Tüm Çağrı Kayıtları',
      'File to read parameters from, or "-" to read from stdin.' => 'Parametreleri okumak için dosya veya stdin\'den okumak için "-".',
      'List of integers.' => 'Tamsayı listesi.',
      'You have made too many invalid token requests recently. Wait before making more.' => 'Son zamanlarda çok fazla geçersiz anahtar isteği yaptınız. Daha fazlasını yapmadan önce bekleyin.',
      'API token "%s" has the wrong format. API tokens should be 32 characters long and begin with one of these prefixes: %s.' => '"%s" API anahtarı yanlış biçime sahip. API anahtarı 32 karakter uzunluğunda olmalı ve şu öneklerden biriyle başlamalıdır: %s.',
      'No such user "%s" exists.' => 'Böyle bir "%s" kullanıcısı yok.',
      'Standard API Token' => 'Standart API Simgesi',
      'My Calls' => 'Çağrılarım',
      'Call' => 'Çağrı',
      'Point values must be nonnegative.' => 'Puan değerleri negatif olmamalıdır.',
      'API token "%s" was previously valid, but has expired.' => '"%s" API jetonu daha önce geçerliydi, ancak süresi dolmuş.',
      'Use the %s panel in Settings to generate or manage API tokens.' => 'API anahtarları oluşturmak veya yönetmek için Ayarlar\'daki %s panelini kullanın.',
      'Conduit' => 'Conduit',
      'Basic ping for monitoring or a health-check.' => 'İzleme veya sağlık kontrolü için temel ping.',
      'The value for parameter \'%s\' is not valid JSON. All parameters must be encoded as JSON values, including strings (which means you need to surround them in double quotes). Check your syntax. Value was: %s.' => '\'%s\' parametresinin değeri geçerli JSON değil. Tüm parametreler, dizeler dahil JSON değerleri olarak kodlanmalıdır (bu, bunları çift tırnak içine almanız gerektiği anlamına gelir). Sözdizimini kontrol et. Değer: %s idi.',
      'An integer.' => 'Bir tam sayı.',
      'The key which signed this request is not trusted. Only trusted keys can be used to sign API calls.' => 'Bu isteği imzalayan anahtara güvenilmiyor. API çağrılarını imzalamak için yalnızca güvenilir anahtarlar kullanılabilir.',
      'Access token does not exist.' => 'Erişim anahtarı mevcut değil.',
      'Method Parameters' => 'Yöntem Parametreleri',
      'Signature verification failure. %s' => 'İmza doğrulama hatası. %s',
      'Call Duration (us)' => 'Çağrı Süresi',
      'Conduit Tokens' => 'Conduit Anahtarları',
      'List of usernames.' => 'Kullanıcı adlarının listesi.',
      'Really terminate all active API tokens? Any systems using these tokens will no longer be able to make API requests.' => 'Tüm aktif API anahtarları gerçekten sonlandırsın mı? Bu anahtarları kullanan hiçbir sistem artık API isteği yapamayacak.',
      'Show established API methods with stable interfaces.' => 'Kararlı arayüzlere sahip yerleşik API yöntemlerini gösterin.',
      'Specify a file to read parameters from with "--input".' => 'Parametreleri "--input" ile okumak için bir dosya belirtin.',
      'Caller' => 'Çağrı',
      'This request originates from outside of the cluster address range. Requests signed with cluster API tokens must originate from within the cluster.' => 'Bu istek, Phabricator küme adres aralığının dışından kaynaklanır. Küme API anahtarlarıyla imzalanan isteklerin, küme içinden kaynaklanması gerekir.',
      'Expected integer, got something else.' => 'Beklenen tamsayı, başka bir şey var.',
      'Certificate Token' => 'Sertifika Anahtarı',
      'Invalid JSON input.' => 'Geçersiz JSON girişi.',
      'Certificate Install Token' => 'Sertifika Yükleme Simgesi',
      '<parameters>' => '<parametreler>',
      'You can not call newQueryFromRequest() in this method ("%s") because it does not implement newQueryObject().' => 'Bu yöntemde ("%s") newQueryFromRequest() yöntemini çağıramazsınız çünkü newQueryObject() öğesini uygulamaz.',
      'Caller PHID' => 'Çağrı PHID\'si',
      '<api-token>' => '<api-token>',
      'See error message for details.' => 'Ayrıntılar için hata mesajına bakın.',
      'Literal null.' => 'Değişmez boş.',
      'There are no API tokens to terminate.' => 'Sonlandırılacak API anahtar yok.',
      'List of user PHIDs.' => 'Kullanıcı PHID\'lerinin listesi.',
      '%s should require authentication.' => '%s kimlik doğrulaması gerektirmelidir.',
      'Your \'%s\' client version is \'%d\', which is newer than the server version, \'%d\'. Upgrade your server.' => '\'%s\' istemci sürümünüz \'%3$s\' adlı sunucu sürümünden daha yeni olan \'%2$s\'. Phabricator kurulumunuzu yükseltin.',
      'Expected string, got something else.' => 'Beklenen dize, başka bir şey var.',
      'Epoch timestamp, as an integer.' => 'Tam sayı olarak zaman damgası ekler.',
      'List of PHIDs.' => 'PHID\'lerin listesi.',
      'Find calls by specific users.' => 'Belirli kullanıcıların çağrılarını bulun.',
      'Conduit Methods' => 'Conduit Yöntemleri',
      'Request is missing required "%s" parameter.' => 'İstekte gerekli "%s" parametresi eksik.',
      'List with a mixture of PHIDs and tags.' => 'PHID ve etiketlerin bir karışımını listeleyin.',
      'List of project tags.' => 'Proje etiketlerinin listesi.',
      'A PHID.' => 'PHID.',
      'List of strings.' => 'Dizelerin listesi.',
      'Client/server version mismatch. Upgrade your client.' => 'İstemci/sunucu sürümü uyuşmazlığı. İstemcinizi yükseltin.',
      'The key which signed this request is associated with a disabled device ("%s").' => 'Bu isteği imzalayan anahtar, devre dışı bırakılmış bir cihazla ("%s") ilişkilendirilmiştir.',
      'The challenge token you are authenticating with is outside of the allowed time range. Either your system clock is out of whack or you\'re executing a replay attack.' => 'Kimlik doğrulaması yaptığınız zorluk belirteci, izin verilen zaman aralığının dışında. Sistem saatiniz dolmuyor veya bir yeniden saldırı gerçekleştiriyorsunuz.',
      'Really terminate this token? Any system using this token will no longer be able to make API requests.' => 'Bu anahtarı gerçekten sonlandırır mısın? Bu anahtarı kullanan hiçbir sistem artık API isteği yapamayacak.',
      'Conduit API method "%s" does not exist.' => 'Conduit API yöntemi "%s" mevcut değil.',
      'A new version of arc is available! You need to upgrade to connect to this server (you are running version %d, the server is running version %d).' => 'Yeni bir yay sürümü mevcut! Bu sunucuya bağlanmak için yükseltmeniz gerekiyor (%s sürümünü çalıştırıyorsunuz, sunucu %s sürümünü çalıştırıyor).',
      'Stable Methods' => 'Kararlı Yöntemler',
      'No Conduit method provided.' => 'Conduit yöntemi sağlanmamıştır.',
      'Grant Account Access' => 'Hesap Erişimi Ver',
      'Stability' => 'Kararlılık',
      'Find calls to stable, unstable, or deprecated methods.' => 'Kararlı, kararsız veya kullanımdan kaldırılmış yöntemlere yapılan çağrıları bulun.',
      'Call Logs' => 'Çağrı Günlükleri',
      'Copy and paste this token into the prompt given to you by `arc install-certificate`' => 'Bu simgeyi kopyalayıp `arc install-certificate` tarafından verilen bilgi istemine yapıştırın',
      'Client/server version mismatch. Upgrade your server or downgrade your client.' => 'İstemci/sunucu sürümü uyuşmazlığı. Sunucunuzu yükseltin veya istemcinizi düşürün.',
      'A nonnegative number, or null.' => 'Negatif olmayan bir sayı veya null.',
      'My Deprecated Calls' => 'Kullanım Dışı Çağrılarım',
      '(Wildcard)' => '(Joker)',
      'Errors' => 'Hatalar',
      'User PHID.' => 'Kullanıcı PHID\'si.',
      'Expected boolean (true or false), got something else.' => 'Beklenen boole (true veya false), başka bir şey var.',
      'Method Call Result' => 'Yöntem Çağrı Sonucu',
      'OAuth clients may always call this method.' => 'OAuth istemcileri her zaman bu yöntemi çağırabilir.',
      'Username.' => 'Kullanıcı adı.',
      'Deprecated Methods' => 'Kullanımdan Kaldırılan Yöntemler',
      'Deprecated Call Logs' => 'Kullanımdan Kaldırılan Çağrı Günlükleri',
      'No user or device is associated with the public key "%s".' => '"%s" genel anahtarıyla hiçbir kullanıcı veya cihaz ilişkilendirilmedi.',
      'Token does not exist or has expired.' => 'Anahtar mevcut değil veya süresi dolmuş.',
      'Command Line API Token' => 'Komut Satırı API Simgesi',
      'Terminate Tokens' => 'Anahtarları Sonlandır',
      'Unstable Method' => 'Kararsız Yöntem',
      'Login Required: This method requires authentication. You must log in before you can make calls to it.' => 'Oturum Açma Gerekli: Bu yöntem kimlik doğrulaması gerektirir. Arama yapabilmek için önce giriş yapmalısınız.',
      'Enter parameters using **JSON**. For instance, to enter a list, type: `%s`' => '**JSON** kullanarak parametreleri girin. Örneğin, bir liste girmek için şunu yazın: `%s`',
      'A string.' => 'Dizi.',
      'Method \'%s\' belongs to application \'%s\', which is not installed.' => '\'%s\' yöntemi yüklü olmayan \'%s\' uygulamasına ait.',
      'Single column PHID.' => 'Tek sütun PHID\'si.',
      'Output Format' => 'Çıkış Biçimi',
      'Frozen' => 'Dondurulmuş',
      'If you submit parameters, these examples will update to show exactly how to encode the parameters you submit.' => 'Parametreleri gönderirseniz, bu örnekler gönderdiğiniz parametreleri tam olarak nasıl kodlayacağınızı gösterecek şekilde güncellenir.',
      'Returns' => 'İadeler',
      'Active API Tokens' => 'Aktif API Anahtarları',
      'Conduit API Overview' => 'Conduit API Gene Bakış',
      'Session key is not present.' => 'Oturum anahtarı mevcut değil.',
      'No matching calls in log.' => 'Günlükte eşleşen arama yok.',
      'Show new methods which are subject to change.' => 'Değişime tabi olan yeni yöntemleri göster.',
      'Invalid parameter information was passed to method \'%s\'.' => '\'%s\' yöntemine geçersiz parametre bilgileri geçirildi.',
      'Conduit client "%s" is not known.' => 'Conduit kanalı istemcisi "%s" bilinmiyor.',
      'After you copy and paste this token, `arc` will complete the certificate install process for you.' => 'Bu belirteci kopyalayıp yapıştırdıktan sonra, `arc` sizin için sertifika yükleme işlemini tamamlayacaktır.',
      'Copy-paste the API Token below to grant access to your account.' => 'Hesabınıza erişim izni vermek için aşağıdaki API Anahtarı kopyalayıp yapıştırın.',
      'Access token is invalid or expired.' => 'Erişim anahtarı geçersiz veya süresi dolmuş.',
      'API token "%s" is not valid.' => '"%s" API anahtarı geçerli değil.',
      'Expected numeric points value, got something else.' => 'Beklenen sayısal puan değeri, başka bir şey var.',
      'API token is not associated with a valid user.' => 'API anahtarı geçerli bir kullanıcıyla ilişkili değil.',
      'You don\'t have any active API tokens.' => 'Etkin bir API anahtarınız yok.',
      'This will authorize the requesting script to act on your behalf permanently, like giving the script your account password.' => 'Bu betiğine hesap parolanıza vermek gibi, istekte bulunan betiğinin sizin adınıza kalıcı olarak hareket etmesine izin verir.',
      'Generate API Token' => 'API Anahtarı Oluştur',
      'Generate a new API token?' => 'Yeni bir API anahtarı oluşturulsun mu?',
      'List with a mixture of PHIDs and dictionaries.' => 'PHID ve sözlüklerin bir karışımını listeleyin.',
      'Called Before' => 'Daha Önce Çağrıldı',
      'OAuth Scope' => 'OAuth Kapsamı',
      'Find calls to specific methods.' => 'Belirli yöntemlere yapılan aramaları bulun.',
      'Developer API' => 'Geliştirici API',
      'Execute the call as the given user. (If omitted, the call will be executed as an omnipotent user.)' => 'Verilen kullanıcı olarak çağrıyı yürütün. (Atlanırsa, arama her şeye gücü yeten bir kullanıcı olarak yürütülür.)',
      'This token is automatically generated, and used to make requests between nodes in a cluster. You can not use this token in external applications.' => 'Bu simge Phabricator tarafından otomatik olarak oluşturulur ve bir Phabricator kümesindeki düğümler arasında istekte bulunmak için kullanılır. Bu anahtarı harici uygulamalarda kullanamazsınız.',
      'API token "%s" has the wrong length. API tokens should be 32 characters long.' => '"%s" API anahtarının uzunluğu yanlış. API anahtarı 32 karakter uzunluğunda olmalıdır.',
      'List with a mixture of PHIDs and usernames.' => 'PHID ve kullanıcı adlarının bir karışımını listeleyin.',
      'Terminate API Token' => 'API Simgesini Sonlandır',
      'Expected a list, but value is an object.' => 'Bir liste bekleniyordu, ancak değer bir nesnedir.',
      'Method to call.' => 'Çağrı yöntemi.',
      'Force the request to execute in this process, rather than proxying to another host in the cluster.' => 'Kümedeki başka bir ana bilgisayara proxy yapmak yerine, isteği bu işlemde yürütmeye zorlayın.',
      'Callers' => 'Çağrılar',
      'You do not have authorization to call this method.' => 'Bu yöntemi arama yetkiniz yok.',
      'Cluster API Token' => 'Küme API Simgesi',
      'View API Token' => 'API Simgesini Görüntüle',
      'Expected PHID or null, got something else.' => 'Beklenen PHID veya null, başka bir şey var.',
      'List of position dictionaries.' => 'Pozisyon sözlükleri listesi.',
      'Call Method' => 'Çağrı Yöntemi',
      'This request originates from outside of the cluster address range. Requests signed with trusted device keys must originate from within the cluster.' => 'Bu istek, Phabricator küme adres aralığının dışından kaynaklanır. Güvenilen aygıt anahtarlarıyla imzalanan isteklerin kümeden gelmesi gerekir.',
      'Call a Conduit method..' => 'Bir Conduit yöntemi çağırın..',
      'This method is frozen and will eventually be deprecated.' => 'Bu yöntem dondurulur ve sonunda kullanımdan kaldırılır.',
      'Install Certificate' => 'Sertifika Yükle',
      'Method Result' => 'Yöntem Sonucu',
      'OAuth clients may call this method after requesting access to the "%s" scope.' => 'OAuth istemcileri, "%s" kapsamına erişim istedikten sonra bu yöntemi çağırabilir.',
      'Unknown Conduit token type "%s"!' => 'Bilinmeyen Kanal anahtarı türü "%s"!',
      'The request you submitted is signed with a timestamp, but that timestamp is not within %s of the current time. The signed timestamp is %s (%s), and the current server time is %s (%s). This is a difference of %s seconds, but the timestamp must differ from the server time by no more than %s seconds. Your client or server clock may not be set correctly.' => 'Gönderdiğiniz istek bir zaman damgası ile imzalandı, ancak bu zaman damgası geçerli zamanın %s içinde değil. İmzalı zaman damgası %s (%s) ve geçerli sunucu süresi %s (%s). Bu %s bir farktır, ancak zaman damgası sunucu zamanından %s saniyeden fazla olmamalıdır. İstemciniz veya sunucu saatiniz doğru ayarlanmamış olabilir.',
      'Error while reading "%s": %s' => '"%s" okunurken hata oluştu: %s',
      'No Tokens to Terminate' => 'Sonlandırılacak Anahtar Yok',
      'This method is new and unstable. Its interface is subject to change.' => 'Bu yöntem yeni ve kararsızdır. Arayüzü değişebilir.',
      'Terminate API Tokens' => 'API Anahtarlarını Sonlandır',
      'Modern Methods' => 'Modern Yöntemler',
      'List of column PHIDs.' => 'Sütun PHID\'lerinin listesi.',
      'List of project PHIDs.' => 'Proje PHID\'lerinin listesi.',
      'You can not access the user inside the implementation of a Conduit method which does not require authentication (as per %s).' => 'Kimlik doğrulaması gerektirmeyen (%s göre) bir Conduit yönteminin uygulanması içinde kullanıcıya erişemezsiniz.',
      'Stable' => 'Kararlı',
      'Returns the parameters of the Conduit methods.' => 'Conduit yöntemlerinin parametrelerini döndürür.',
      'Authentication is invalid.' => 'Kimlik doğrulama geçersiz.',
      'A boolean.' => 'Boole.',
      'Provided "%s" ("%s") is not recognized.' => 'Sağlanmış "%s" ("%s") tanınmıyor.',
      'You do not have access to the application which provides this API method.' => 'Bu API yöntemini sağlayan uygulamaya erişiminiz yok.',
      'Integer overflow.' => 'Tamsayı taşması.',
      'Specify a method to call with "--method".' => '"--method" ile çağrılacak bir yöntem belirtin.',
      'Your authentication certificate for this server is invalid.' => 'Bu sunucu için kimlik doğrulama sertifikanız geçersiz.',
      'User account is not permitted to use the API.' => 'Kullanıcı hesabının API\'yı kullanmasına izin verilmiyor.',
      'Connect a session-based client.' => 'Oturum tabanlı bir istemci bağlayın.',
      'Any mixed or complex value. Check the documentation for details.' => 'Herhangi bir karışık veya karmaşık değer. Ayrıntılar için belgelere bakın.',
      'Frozen Method' => 'Dondurulmuş Yöntem',
      'Too many Conduit methods provided.' => 'Çok fazla Conduit yöntemi sağlandı.',
      'Expected a nonempty list, but value is an empty list.' => 'Boş olmayan bir liste bekleniyordu, ancak değer boş bir liste.',
      'This method is deprecated.' => 'Bu yöntem kullanımdan kaldırıldı.',
      'API Method "%s" defines a disallowed parameter, "%s". This parameter name is reserved.' => 'API Yöntemi "%s", izin verilmeyen bir parametreyi "%s" tanımlar. Bu parametre adı saklıdır.',
      'Unstable' => 'Kararsız',
      'Access token is for invalid user.' => 'Erişim anahtarı geçersiz kullanıcı içindir.',
      'Epoch timestamp must be larger than 0, got %d.' => 'Dönem zaman damgası 0\'dan büyük olmalı, %s var.',
      'Method Status' => 'Yöntem Durumu',
      'API Method "%s" does not define these parameters: %s.' => '"%s" API Yöntemi şu parametreleri tanımlamıyor: %s.',
      'Client is unknown.' => 'İstemci bilinmiyor.',
      'Certificate token points to an invalid user!' => 'Sertifika anahtarı geçersiz bir kullanıcıyı gösteriyor!',
      'Expected a list, but value is not a list.' => 'Bir liste bekleniyordu, ancak değer bir liste değil.',
      'Expected PHID, got something else.' => 'Beklenen PHID, başka bir şey aldı.',
      'If you change your mind, you can revoke this token later in {nav icon=wrench,name=Settings > Conduit API Tokens}.' => 'Fikrinizi değiştirirseniz, bu belirteci daha sonra {nav icon=wrench,name=Ayarlar > Conduit API Anahtarları} da iptal edebilirsiniz.',
      'Generate Token' => 'Anahtar Oluştur',
      'Terminate Token' => 'Anahtar Sonlandır',
      'This server requires authentication.' => 'Bu sunucu kimlik doğrulaması gerektiriyor.',
      'Show old methods which will be deleted in a future version of this software.' => 'Phabricator\'ın gelecekteki bir sürümünde silinecek eski yöntemleri göster.',
    );
  }

}
