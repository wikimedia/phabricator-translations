<?php

final class PhabricatorPeopleTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Blurb' => 'Kitap',
      'Filter IP' => 'IP Filtresi',
      'You are creating a new **standard** user account.' => 'Yeni bir **standart** kullanıcı hesabı oluşturuyorsunuz.',
      'Pass true to find only administrators, or false to omit administrators.' => 'Yalnızca yöneticileri bulmak için true, yöneticileri atlamak için false kullanın.',
      'Disable User?' => 'Kullanıcıyı Devre Dışı Bırakılsın mı?',
      'This workflow will send this user ("%s") a copy of the "Welcome to %s" email that users normally receive when their accounts are created by an administrator.' => 'Bu iş akışı, bu kullanıcıya ("%s"), hesapları bir yönetici tarafından oluşturulduğunda kullanıcıların normalde aldığı "Phabricator\'a Hoş Geldiniz" e-postasının bir kopyasını gönderir.',
      'Multi-Factor: Remove Factor' => 'Çok Faktörlü: Faktörü Kaldırma',
      'Users can not be permanently destroyed from the web interface. See %s in the documentation for more information.' => 'Kullanıcılar web arayüzünden kalıcı olarak silinemezler. Daha fazla bilgi için %s sayfasına bakın.',
      'Manage User' => 'Kullanıcıyı Yönet',
      'Make real names optional' => 'Gerçek isimleri isteğe bağlı yap',
      'Hisec: Exit' => 'Hisec: Çıkış',
      'Delete User' => 'Kullanıcıyı Sil',
      'You can not change usernames because you are not an administrator. Only administrators can change usernames.' => 'Hizmetli olmadığınızdan kullanıcı adlarını değiştirmezsiniz. Sadece hizmetliler kullanıcı adlarını değiştirebilir.',
      'Email: Add Address' => 'E-posta: Adres Ekle',
      'Event Date' => 'Etkinlik Tarihi',
      'You can not send welcome mail to this user because their account is disabled.' => 'Hesapları devre dışı bırakıldığından bu kullanıcıya hoş geldiniz postası gönderemezsiniz.',
      'Stores the real name of the user, like "Abraham Lincoln".' => 'Kullanıcının gerçek adını, "Abraham Lincoln" gibi saklar.',
      'Pass true to find only mailing lists, or false to omit mailing lists.' => 'Yalnızca posta listelerini bulmak için true, posta listelerini atlamak için false seçeneğine basın.',
      'You must be an administrator to create administrators.' => 'Yönetici oluşturmak için yönetici olmanız gerekir.',
      'Obsoleted by "%s".' => '"%s" tarafından iptal edildi.',
      'User Accounts and Profiles' => 'Kullanıcı Hesapları ve Profiller',
      'Login: Partial Login' => 'Giriş: Kısmi Giriş',
      'User has not been awarded any badges.' => 'Kullanıcıya herhangi bir rozet verilmemiştir.',
      'Invite Users' => 'Kullanıcıları Davet Et',
      'Revise Invites' => 'Davetiyeleri Yenile',
      'Type a log type name...' => 'Bir günlük türü adı girin...',
      'Sort of a social utility.' => 'Bir sosyal yardımcı program.',
      'Send Invitations' => 'Davetiye Gönder',
      'Confirm Approval' => 'Onayı Onayla',
      'User account to act on.' => 'İşlemin yapılacağı kullanıcı hesabı.',
      '[%s] Account Login Link' => '[Phabricator] Hesap Giriş Bağlantısı',
      'User has not been created yet!' => 'Kullanıcı henüz oluşturulmadı!',
      'The user\'s username.' => 'Kullanıcının kullanıcı adı.',
      '%s empowered this user as an administrator.' => '%s bu kullanıcıyı yönetici olarak yetkilendirildi.',
      'Musician' => 'Müzisyen',
      '[%s] Account Password Link' => '[Phabricator] Hesap Parolası Bağlantısı',
      'Make real names required' => 'Gerekli gerçek isimleri yap',
      'Already Approved' => 'Zaten Onaylandı',
      'Account Activity' => 'Hesap Etkinliği',
      'Relationships' => 'İlişkiler',
      'Username and email must be unique.' => 'Kullanıcı adı ve e-posta adresi benzersiz olmalıdır.',
      '%s sent this user a test notification.' => '%s, bu kullanıcıya bir test bildirimi gönderdi.',
      'The email will identify you as the sender. You may optionally replace the [[ %s | default custom mail body ]] with different text by providing a message below.' => 'E-posta sizi gönderen olarak tanımlayacaktır. İsteğe bağlı olarak [[%s | varsayılan özel posta gövdesi]] aşağıda bir mesaj sağlayarak farklı metinlerle.',
      'User has already been created!' => 'Kullanıcı zaten oluşturuldu!',
      'Only administrators can disapprove users.' => 'Yalnızca yöneticiler kullanıcıları reddedebilir.',
      'You can use this link to set a password on your account:
      %s
    ' => 'Hesabınızda bir şifre belirlemek için bu bağlantıyı kullanabilirsiniz:
      %s',
      'Not an Administrator' => 'Yönetici Değil',
      '%s defrocked this user.' => '%s, bu kullanıcıyı çözdü.',
      'Show Only Bots' => 'Yalnızca Botları Göster',
      'Email is already primary!' => 'E-posta zaten birincil!',
      'Pass true to find only users who are enrolled in MFA, or false to omit these users.' => 'Yalnızca MFA\'da kayıtlı olan veya bu kullanıcıları atlamak için false olan kullanıcıları bulmak için true kodu kullanın.',
      'Create a mailing list user to represent an existing, external mailing list like a Google Group or a Mailman list.' => 'Bir Google Grubu veya bir Mailman listesi gibi mevcut bir harici posta listesini temsil etmek için bir posta listesi kullanıcısı oluşturun.',
      'If you already have an account, you can follow the link to quickly verify this email address.' => 'Zaten bir hesabınız varsa, bu e-posta adresini hızlı bir şekilde doğrulamak için bağlantıyı takip edebilirsiniz.',
      '%s (%s) has created an account for you.' => '%s (%s) sizin için bir hesap oluşturdu.',
      '[%s] Username Changed' => '[Phabricator] Kullanıcı Adı Değişti',
      'Create Mailing List User' => 'Posta Listesi Kullanıcısı Oluştur',
      '[%s] Primary Address Changed' => '[Phabricator] Birincil Adres Değişti',
      'Disable or enable the user.' => 'Kullanıcıyı devre dışı bırakın veya etkinleştirin.',
      'The user\'s real name.' => 'Kullanıcının gerçek adı.',
      'Only admins can call this method.' => 'Yalnızca hizmetlileri bu yöntemi çağırabilir.',
      'Hide Mailing Lists' => 'Posta Listelerini Gizle',
      'User does not belong to any projects.' => 'Kullanıcı hiçbir projeye dahil değil.',
      'Joined Before' => 'Daha Önce Katıldı',
      'User Activity Logs' => 'Kullanıcı Etkinlik Günlükleri',
      'True to disable the user.' => 'Kullanıcıyı true olarak devre dışı bırakın.',
      'Email: Reassign' => 'Email: Yeniden Atama',
      'Conduit: Read Certificate Failure' => 'Kanal: Sertifika Hatası Okuma',
      'To begin on such a grand journey, requires but just a single step.' => 'Böyle büyük bir yolculuğa başlamak için, sadece tek bir adım gerektirir.',
      'Turn a user account into an administrator account.' => 'Bir kullanıcı hesabını hizmetli hesabına çevirin.',
      'Can Create (non-bot) Users' => '(bot olmayan) Kullanıcılar Olabilir',
      'Get Well Soon,
    %s' => 'Geçmiş Olsun,
    Phabricator',
      'Confirm Invites' => 'Davetiyeleri Onayla',
      'After you have set a password, you can log in again in the future by going here:' => 'Bir şifre belirledikten sonra, gelecekte buraya tıklayarak Phabricator\'a giriş yapabilirsiniz:',
      'Query users.' => 'Kullanıcıları sorgula.',
      'No accounts found.' => 'Hespa bulunamadı.',
      'Bot' => 'Bot',
      'Create New Bot' => 'Yeni Bot Oluştur',
      'User profiles configuration.' => 'Kullanıcı profilleri yapılandırması.',
      'New username is required.' => 'Yeni kullanıcı adı gerekli.',
      'Search for activity affecting specific users.' => 'Belirli kullanıcıları etkileyen etkinliği arayın.',
      'Account Menu' => 'Hesap Menüsü',
      'Remove as Administrator?' => 'Yönetici Olarak Kaldırılsın mı?',
      'This function includes results which have any owner. It excludes unassigned or unowned results.' => 'Bu işlev, sahibi olan sonuçları içerir. Atanmamış veya istenmeyen sonuçları içermez.',
      'Send "Welcome to %s" email with login instructions.' => 'Giriş talimatlarını içeren "Phabricator\'a Hoş Geldiniz" e-posta gönder.',
      'Engineering' => 'Mühendislik',
      'Approved' => 'Onaylandı',
      'Information on user profiles on this install is publicly visible.' => 'Bu kurulumdaki kullanıcı profilleri hakkındaki bilgiler herkes tarafından görülebilir.',
      '[%s] Welcome to %s' => '[Phabricator] Phabricator\'a Hoş geldiniz',
      'Email: Remove Address' => 'E-posta: Adresi Kaldır',
      'You do not have permission to browse the user directory.' => 'Kullanıcı dizinine göz atma izniniz yok.',
      'User title, like "CEO" or "Assistant to the Manager".' => '"CEO" veya "Yönetici Asistanı" gibi kullanıcı adı.',
      'Not a Normal User' => 'Normal Bir Kullanıcı Değil',
      'Search for actions by remote address.' => 'Uzak adrese göre eylemleri arayın.',
      'Select results with any owner.' => 'Herhangi bir sahiple sonuçları seçin.',
      'Roles' => 'Roller',
      'Hide Users With MFA' => 'MFA ile Kullanıcıları Gizle',
      'User Picture' => 'Kullanıcı Resmi',
      'Choose User Icon' => 'Kullanıcı Simgesini Seç',
      'Enabled user account "%s".' => '"%s" kullanıcı hesabı etkinleştirildi.',
      'Email Not Verified' => 'E-posta Doğrulanmadı',
      'Usernames' => 'Kullanıcı Adları',
      'Create New User' => 'Yeni Kullanıcı Oluştur',
      '%s empowered %s as an administrator.' => '%s, yönetici olarak %s yetkilendirdi.',
      'Obsoleted by method "user.edit".' => '"user.edit" yöntemi ile iptal edildi.',
      'Bots' => 'Botlar',
      'You do not have permission to create users.' => 'Kullanıcı oluşturma izniniz yok.',
      'This user has already been approved.' => 'Bu kullanıcı zaten onaylandı.',
      'User Profiles' => 'Kullanıcı Profilleri',
      'Awarded by %s' => '%s Tarafından Ödüllendirildi',
      'Mailing Lists' => 'Posta Listeleri',
      'Admin' => 'Yönetici',
      'This function allows you to change the behavior of a query based on who is running it. When you use this function, you will be the current viewer, so it works like you typed your own username.
    However, if you save a query using this function and send it to someone else, it will work like //their// username was the one that was typed. This can be useful for building dashboard panels that always show relevant information to the user who is looking at them.' => 'Bu işlev, sorgunun kim tarafından çalıştırıldığına bağlı olarak davranışını değiştirmenize olanak sağlar. Bu işlevi kullandığınızda, geçerli görüntüleyici siz olursunuz, böylece kendi kullanıcı adınızı yazdığınız gibi çalışır.
    Bununla birlikte, bu işlevi kullanarak bir sorguyu kaydederseniz ve başka birine gönderirseniz, yazılanlar //kendi// kullanıcı adları gibi çalışır. Bu, onlara bakan kullanıcıya her zaman ilgili bilgileri gösteren pano panelleri oluşturmak için yararlı olabilir.',
      'Configure User Forms' => 'Kullanıcı Formlarını Yapılandır',
      '  %s' => '  %s',
      'After a time, your efforts fail. You can not adjust your own status as an administrator.' => 'Bir süre sonra, çabalarınız başarısız olur. Yönetici olarak kendi durumunuzu ayarlayamazsınız.',
      'Rename User' => 'Kullanıcıyı Yeniden Adlandır',
      'Hisec: Enter' => 'Hisec: Gir',
      'You are creating a new **bot** user account.' => 'Yeni bir **bot** kullanıcı hesabı oluşturuyorsunuz.',
      'Hide Bots' => 'Botları Gizle',
      'No open, assigned tasks.' => 'Açık yok, atanmış görev.',
      'Enable %s? They will be able to access this server and receive email again.' => '%s etkinleştirilsin mi? Phabricator\'a erişebilecek ve tekrar e-posta alabilecekler.',
      'You can not send this user welcome mail because they are not a normal user and can not log in to the web interface. Special users (like bots and mailing lists) are unable to establish web sessions.' => 'Bu kullanıcıya hoş geldiniz postası gönderemezsiniz, çünkü bunlar normal bir kullanıcı değildir ve web arayüzüne giriş yapamazlar. Özel kullanıcılar (botlar ve posta listeleri gibi) web oturumu oluşturamazlar.',
      '%s approved this user.' => '%s bu kullanıcıyı onayladı.',
      'User icon to accompany their title.' => 'Başlığına eşlik edecek kullanıcı simgesi.',
      'User Details' => 'Kullanıcı Detayları',
      'users' => 'kullanıcılar',
      'To send invites, you must enter at least one email address.' => 'Davet göndermek için en az bir e-posta adresi girmelisiniz.',
      'Approve User' => 'Kullanıcı Onayla',
      'Find users whose usernames contain a substring.' => 'Kullanıcı adları bir alt dize içeren kullanıcıları bulun.',
      'You can use this login link to regain access to your account:
      %s
    ' => 'Phabricator hesabınıza tekrar erişmek için bu giriş bağlantısını kullanabilirsiniz:
      %s',
      'Can Browse User Directory' => 'Kullanıcı Rehberine Göz Atılabilir',
      '%s disabled this user.' => '%s bu kullanıcıyı devre dışı bıraktı.',
      'Pass true to find only users awaiting administrative approval, or false to omit these users.' => 'Yalnızca yönetimsel onay bekleyen kullanıcıları bulmak için true veya bu kullanıcıları yok saymak için false kullanın.',
      'Disable User' => 'Kullanıcıyı Devre Dışı Bırak',
      'To log in, follow this link and set a password:' => 'Phabricator\'a giriş yapmak için bu bağlantıyı takip edin ve bir şifre belirleyin:',
      'Remove %s as an administrator? They will no longer be able to perform administrative functions on this server.' => 'Yönetici olarak %s kaldırılsın mı? Bu Phabricator kurulumunda artık idari işlevleri gerçekleştiremeyecekler.',
      'Picture From %s' => '%s\'den Resim',
      'Pass true to find only disabled users, or false to omit disabled users.' => 'Yalnızca engelli kullanıcıları bulmak için ruet, engelli kullanıcıları atlamak için false kullanın.',
      'Approved user account "%s".' => 'Onaylı kullanıcı hesabı "%s".',
      'Availability' => 'Kullanılabilirlik',
      'emails' => 'e-postalar',
      'Login: Failure' => 'Giriş: Başarısız',
      'administrators' => 'yöneticiler',
      'Lookup PHIDs by username. Obsoleted by "%s".' => 'PHID\'leri kullanıcı adına göre arayın. "%s" tarafından iptal edildi.',
      'Affected User' => 'Etkilenen Kullanıcı',
      'Enable User' => 'Kullanıcı Etkinleştir',
      'message' => 'mesaj',
      'This email address (%s) is no longer your primary email address. Going forward, all email will be sent to your new primary email address (%s).' => 'Bu e-posta adresi (%s) artık birincil e-posta adresiniz değil. İleride, Phabricator tüm e-postaları yeni birincil e-posta adresinize (%s) gönderir.',
      'Create a bot/script user account, to automate interactions with other systems. These users can not use the web interface, but can use the API.' => 'Diğer sistemlerle etkileşimi otomatikleştirmek için bir bot/betik kullanıcı hesabı oluşturun. Bu kullanıcılar web arayüzünü kullanamazlar, ancak API\'yi kullanabilirler.',
      'Usernames must contain only numbers, letters, period, underscore, and hyphen, and can not end with a period. They must have no more than %d characters.' => 'Kullanıcı adları yalnızca rakam, harf, nokta, alt çizgi ve kısa çizgi içermeli ve nokta ile bitemez. %s\'dan fazla karakter içermemelidir.',
      'Hisec: Failed Attempt' => 'Hisec: Başarısız Deneme',
      'Animal' => 'Hayvan',
      'Get availability information for users.' => 'Kullanıcılar için uygunluk bilgilerini alın.',
      'The email will contain a link that the user may use to log in to their account. This link bypasses authentication requirements and allows them to log in without credentials. Sending a copy of this email can be useful if the original was lost or never sent.' => 'E-posta, kullanıcının hesaplarına giriş yapmak için kullanabileceği bir bağlantı içerecektir. Bu bağlantı, kimlik doğrulama gereksinimlerini atlar ve kimlik bilgileri olmadan oturum açmalarına izin verir. Orijinali kaybolduysa veya hiç gönderilmediyse, bu e-postanın bir kopyasını göndermek faydalı olabilir.',
      'Email: Change Primary' => 'E-posta: Birincili Değiştir',
      'Executive' => 'Yönetici',
      'New Username: %s' => 'Yeni Kullanıcı Adı: %s',
      'Browse Any Owner' => 'Herhangi Bir Sahibine Göz At',
      'Hide Disabled Users' => 'Devre Dışı Bırakılmış Kullanıcıları Gizle',
      'Email address must be @%s' => 'E-posta adresi @%s olmalı',
      'Logistics' => 'Lojistik',
      'Users can view their activity and activity that affects them.' => 'Kullanıcılar etkinliklerini ve kendilerini etkileyen etkinliklerini görebilirler.',
      'Approve' => 'Onayla',
      'Login: Signed Required Legalpad Documents' => 'Giriş: İmzalı Gerekli Legalpad Belgeleri',
      'Read information about users.' => 'Kullanıcılar hakkında bilgi edinin.',
      'Unknown CSS variable "%s"!' => 'Bilinmeyen CSS değişkeni "%s"!',
      'To log in to your account for the first time, follow this link:' => 'Hesabınıza ilk kez giriş yapmak için bu bağlantıyı izleyin:',
      'Email address must be at one of: %s' => 'E-posta adresi şunlardan birinde olmalıdır: %s',
      'Shows user join date.' => 'Kullanıcının birleşme tarihini gösterir.',
      'Hide Unapproved Users' => 'Onaylanmamış Kullanıcıları Gizle',
      'Any Owner' => 'Herhangi Bir Sahip',
      'Action Name' => 'İşlem Adı',
      'Find user accounts created before a given time.' => 'Belirli bir zamandan önce oluşturulan kullanıcı hesaplarını bulun.',
      'The email will identify you as the sender. You may optionally include additional text in the mail body by specifying it below.' => 'E-posta sizi gönderen olarak tanımlayacaktır. İsteğe bağlı olarak aşağıdaki metni belirterek posta gövdesine ek metin ekleyebilirsiniz.',
      'Not Approved' => 'Onaylanmamış',
      'Type "anyone()"...' => '"anyone()" yazın...',
      'Email addresses should be in the form "user@domain.com". The maximum length of an email address is %s characters.' => 'E-posta adresleri "user@domain.com" şeklinde olmalıdır. Bir e-posta adresinin maksimum uzunluğu %s karakterdir.',
      'Administrators are limited in their ability to access or edit these accounts after account creation.' => 'Yöneticiler, hesap oluşturduktan sonra bu hesaplara erişme veya bunları düzenleme yetenekleriyle sınırlıdır.',
      'Edit User: %s' => 'Kullanıcı Düzenle: %s',
      'User has no primary email address!' => 'Kullanıcının birincil e-posta adresi yok!',
      '%s renamed this user from %s to %s.' => '%s, bu kullanıcıyı %s iken %s olarak yeniden adlandırdı.',
      'This is now your primary email address (%s). Going forward, all email will be sent here.' => 'Bu şimdi birincil e-posta adresinizdir (%s). İleride, Phabricator tüm e-postaları buraya gönderecek.',
      'Choose the type of user account to create. For a detailed explanation of user account types, see [[ %s | User Guide: Account Roles ]].' => 'Oluşturulacak kullanıcı hesabı türünü seçin. Kullanıcı hesap türlerinin ayrıntılı bir açıklaması için, bakınız [[%s | Kullanıcı Kılavuzu: Hesap Rolleri]].',
      'Approve the user.' => 'Kullanıcıyı onayla.',
      'Another user already has the username "%s".' => 'Başka bir kullanıcı zaten "%s" kullanıcı adına sahip.',
      'Recent Revisions' => 'Son Düzeltmeler',
      'Shows roles like "Administrator" and "Disabled".' => '"Yönetici" ve "Devre Dışı" gibi rolleri gösterir.',
      '[%s] Email Verification' => '[Phabricator] E-posta Doğrulama',
      'Empower %s as an administrator? They will be able to create users, approve users, make and remove administrators, delete accounts, and perform other administrative functions on this server.' => 'Bir yönetici olarak %s yetkilendirilsin mi? Bu Phabricator yüklemesinde kullanıcılar oluşturabilir, kullanıcıları onaylayabilir, yöneticileri yapıp kaldırabilir, hesapları silebilir ve diğer yönetim işlevlerini gerçekleştirebilirler.',
      'Edit Profile Picture' => 'Profil Resmini Düzenle',
      'Has MFA' => 'MFA Var',
      'Projects (%s)' => 'Projeler (%s)',
      'Save Profile' => 'Profili Kaydet',
      'You do not have permission to disable or enable users.' => 'Kullanıcıları devre dışı bırakmak veya etkinleştirmek için izniniz yok.',
      'Pass true to find only bots, or false to omit bots.' => 'Sadece botları bulmak için true, botları atlamak için false.',
      'This user can not see this object.' => 'Bu kullanıcı bu nesneyi göremez.',
      'To permanently destroy this user, run this command from the command line:' => 'Bu kullanıcıyı kalıcı olarak imha etmek için şu komutu komut satırında çalıştırın:',
      'No recent revisions.' => 'Son revizyon yok.',
      'Can\'t remove primary email!' => 'Birincil e-posta kaldırılamıyor!',
      'User Accounts' => 'Kullanıcı Hesapları',
      'Create a standard user account.' => 'Standart bir kullanıcı hesabı oluşturun.',
      'Show Only Disabled Users' => 'Yalnızca Engelli Kullanıcıları Göster',
      'Email not owned by user!' => 'E-posta kullanıcıya ait değil!',
      'Find user accounts created after a given time.' => 'Belirli bir süre sonra oluşturulmuş kullanıcı hesaplarını bulun.',
      'You can use this link to reset your password:
      %s
    ' => 'Phabricator parolanızı sıfırlamak için bu bağlantıyı kullanabilirsiniz:
      %s',
      'Edit Profile: %s' => 'Profili Düzenle: %s',
      'Make Administrator' => 'Yönetici Ol',
      'Always require real name for user profiles.' => 'Kullanıcı profilleri için daima gerçek ad gerekir.',
      'If everything looks good, click **Send Invitations** to deliver email invitations these users. Otherwise, edit the email list or personal message at the bottom of the page to revise the invitations.' => 'Her şey yolunda görünüyorsa, bu kullanıcılara e-posta davetiyesi göndermek için **Davetiye Gönder** düğmesini tıklayın. Aksi takdirde, davetiyeleri gözden geçirmek için e-posta listesini veya sayfanın altındaki kişisel mesajı düzenleyin.',
      'Administrators have greater access to edit these accounts.' => 'Yöneticiler bu hesapları düzenlemek için daha fazla erişime sahiptir.',
      'Anyone' => 'Herkes',
      'Joined After' => 'Sonra Katıldı',
      'Search for activity by specific users.' => 'Belirli kullanıcıların etkinliklerini arayın.',
      'Your %s account (%s) has been approved by %s. You can login here:' => 'Phabricator hesabınız (%s) %s tarafından onaylandı. Buradan giriş yapabilirsiniz:',
      'Remove Administrator' => 'Yönetici Kaldır',
      'You are creating a new **mailing list** user account.' => 'Yeni bir **posta listesi** kullanıcı hesabı oluşturuyorsunuz.',
      'Permanently disable specified users (admin only).' => 'Belirtilen kullanıcıları kalıcı olarak devre dışı bırak (yalnızca yönetici).',
      'To invite users, enter their email addresses below. Separate addresses with commas or newlines.' => 'Kullanıcıları Phabricator\'a davet etmek için e-posta adreslerini aşağıya girin. Adresleri virgül veya yeni satırlarla ayırın.',
      'Activity Log %d' => 'Etkinlik Günlüğü %s',
      'Make Administrator?' => 'Yönetici Olsun mu?',
      'Hide Administrators' => 'Yöneticileri Gizle',
      'You must be an administrator to rename users.' => 'Kullanıcıları yeniden adlandırmak için yönetici olmanız gerekir.',
      'Select and reorder user profile fields.' => 'Kullanıcı profili alanlarını seçin ve yeniden sıralayın.',
      'Type a username...' => 'Bir kullanıcı adı yazın...',
      'Send Welcome Email' => 'Hoş Geldiniz E-postası Gönder',
      'Search for activity in particular sessions.' => 'Belirli oturumlarda etkinlik arayın.',
      'Find results which are assigned to anyone.' => 'Herkese atanmış sonuçları bulun.',
      'Primary email addresses can not be reassigned.' => 'Birincil e-posta adresleri atanamaz.',
      'Old Username: %s' => 'Eski Kullanıcı Adı: %s',
      'Edit Settings' => 'Ayarları Düzenle',
      'User Administration' => 'Kullanıcı Yönetimi',
      'Create Standard User' => 'Standart Kullanıcı Oluştur',
      '**Why do bot accounts need an email address?**
    Although bots do not normally receive email, they can interact with other systems which require an email address. Examples include:
      - If the account takes actions which //send// email, we need     an address to use in the //From// header.
      - If the account creates commits, Git and Mercurial require     an email address for authorship.
      - If you send email //to// this server on behalf of the     account, the address can identify the sender.
      - Some internal authentication functions depend on accounts     having an email address.
    The address will automatically be verified, so you do not need to be able to receive mail at this address, and can enter some invalid or nonexistent (but correctly formatted) address like `bot@yourcompany.com` if you prefer.' => '**Bot hesaplarının neden bir e-posta adresine ihtiyacı var?**
    Botlar normalde Phabricator\'dan e-posta almasalar da, e-posta adresi gerektiren diğer sistemlerle etkileşime girebilirler. Örnekler şunları içerir:
      - Hesap e-posta gönderen eylemler gerçekleştirirse, başlığında kullanmak için bir adrese ihtiyacımız var.
      - Hesap taahhüt ederse Git ve Mercurial, yazarlık için bir e-posta adresi ister.
      - Hesap adına Phabricator\'a e-posta gönderirseniz, adres göndereni tanımlayabilir.
      - Bazı dahili kimlik doğrulama işlevleri, bir e-posta adresine sahip hesaplara bağlıdır.
    Adres otomatik olarak doğrulanacaktır, bu nedenle bu adreste posta alabilmeniz gerekmez ve eğer istersen `bot@yourcompany.com` gibi bazı geçersiz veya var olmayan (ancak doğru biçimlendirilmiş) bir adres girebilirsiniz.',
      'None of the provided addresses are valid invite recipients. Review the table below for details. Revise the address list to continue.' => 'Girilen adreslerden hiçbiri geçerli davet alıcı değil. Ayrıntılar için aşağıdaki tabloyu inceleyin. Devam etmek için adres listesini değiştirin.',
      '%s defrocked %s.' => '%s %s\'i çözdü.',
      'User Email' => 'Kullanıcı E-postası',
      'Non existent user PHID.' => 'Var olmayan kullanıcı PHID.',
      'Love,
    %s' => 'Sevgi,
    Phabricator',
      'User does not own email!' => 'Kullanıcının e-postası yok!',
      'Verified' => 'Onaylı',
      'Browse Log Types' => 'Günlük Türlerine Göz Atın',
      'This method is frozen and will eventually be deprecated. New code should use "user.search" instead.' => 'Bu yöntem donmuş ve sonunda kullanımdan kaldırılacak. Yeni kod yerine "user.search" kullanmalıdır.',
      '%s Account "%s" Approved' => 'Phabricator Hesabı "%s" Onaylandı',
      'Login: Upgrade to Full' => 'Giriş: Tamamen Yükselt',
      'Create User' => 'Kullanıcı Oluştur',
      'Unapproved Account' => 'Onaylanmamış Hesap',
      'Select current viewer.' => 'Mevcut görüntüleyiciyi seçin.',
      'Change Username' => 'Kullanıcı Adını Değiştir',
      'People' => 'İnsanlar',
      'True to approve the user.' => 'Kullanıcıyı onaylamak için geçerlidir.',
      'Please verify that you own this email address (%s) by clicking this link:' => 'Lütfen bu bağlantıyı tıklayarak bu e-posta adresinin (%s) size ait olduğunu doğrulayın:',
      'Disable the user.' => 'Kullanıcıyı devre dışı bırak.',
      'Email is not verified!' => 'E-posta onaylanmadı!',
      'Approve or reject the user.' => 'Kullanıcıyı onaylayın veya reddedin.',
      'Email has already been created!' => 'E-posta zaten oluşturuldu!',
      'Old Username' => 'Eski Kullanıcı Adı',
      'To register an account and get started, follow this link:' => 'Bir hesap açmak ve başlamak için bu bağlantıyı izleyin:',
      'Username is invalid! %s' => 'Kullanıcı adı geçersiz! %s',
      'All of the addresses appear to be valid invite recipients. Confirm the actions below to continue.' => 'Tüm adresler geçerli davet alıcıları gibi görünüyor. Devam etmek için aşağıdaki işlemleri onaylayın.',
      'Find users by exact username.' => 'Kullanıcıları tam kullanıcı adına göre bulun.',
      'User Availability' => 'Kullanıcı Uygunluğu',
      'Failed to load UserCacheType to manage key "%s". This cache type is required.' => '"%s" anahtarını yönetmek için UserCacheType yüklenemedi. Bu önbellek türü gerekli.',
      'Email: Verify Address' => 'E-posta: Adresi Doğrula',
      'Activity Log ID: #%d' => 'Etkinlik Günlüğü IDsi: #%s',
      'Can Disable Users' => 'Kullanıcıları Devre Dışı Bırakabilir',
      'Research' => 'Araştırma',
      'Some of the addresses you entered do not appear to be valid recipients. Review the table below. You can revise the address list, or ignore these errors and continue.' => 'Girdiğiniz adreslerden bazıları geçerli alıcılar gibi görünmüyor. Aşağıdaki tabloyu inceleyin. Adres listesini gözden geçirebilir veya bu hataları yok sayabilir ve devam edebilirsiniz.',
      'Try as you might, you find you can not disable your own account.' => 'Yapabildiğiniz gibi deneyin, kendi hesabınızı devre dışı bırakamayacağınızı anlayın.',
      'Create a new user for use with automated scripts.' => 'Otomatik betikleriyle kullanmak için yeni bir kullanıcı oluşturun.',
      '%s rejected this user.' => '%s bu kullanıcıyı reddetti.',
      'You must be an administrator to approve users.' => 'Kullanıcıları onaylamak için yönetici olmanız gerekir.',
      'External Account Identifier' => 'Harici Hesap Tanımlayıcı',
      'Conduit: Read Certificate' => 'Boru: Sertifikayı Oku',
      'Approval Queue' => 'Onay Sırası',
      'Spy' => 'Casus',
      'List of account roles.' => 'Hesap rollerinin listesi.',
      'Mailing List' => 'Mail Listesi',
      'Administrators can always view all activity.' => 'Yöneticiler tüm etkinlikleri her zaman görüntüleyebilir.',
      'Only you can edit your information.' => 'Bilgilerinizi yalnızca siz düzenleyebilirsiniz.',
      'Unless you have a very good reason to delete this user, consider disabling them instead.' => 'Kullanıcıyı silmek için çok iyi bir sebebin yoksa, silmek yerine pasifleştirmeyi düşünebilirsin.',
      'Allow %s to access this server?' => '%s bu Phabricator kurulumuna erişmesine izin verilsin mi?',
      'Edit Profile' => 'Profil Düzenle',
      'Show Only Mailing Lists' => 'Yalnızca Posta Listelerini Göster',
      'Verified email addresses can not be reassigned.' => 'Doğrulanmış e-posta adresleri atanamaz.',
      'Browse Owners' => 'Sahiplere Göz At',
      'Create a standard user account. These users can log in, use the web interface and API, and receive email.' => 'Standart bir kullanıcı hesabı oluşturun. Bu kullanıcılar Phabricator\'a giriş yapabilir, web arayüzünü ve API\'yi kullanabilir ve e-posta alabilir.',
      'Enable a disabled user account.' => 'Pasifleştirilmiş kullanıcı hesabını etkinleştir.',
      'User is Disabled' => 'Kullanıcı Devre Dışı',
      'Shows when a user is away or busy.' => 'Bir kullanıcının ne zaman uzakta veya meşgul olduğunu gösterir.',
      'Hi %s' => 'Merhaba %s',
      'Retrieve information about the logged-in user.' => 'Giriş yapan kullanıcı hakkında bilgi alın.',
      'Search for particular types of activity.' => 'Belirli etkinlik türlerini arayın.',
      'Log Out %s' => 'Oturumu Kapat %s',
      'Configure creation and editing forms for users.' => 'Kullanıcılar için oluşturma ve düzenleme formlarını yapılandırın.',
      'Re-enable specified users (admin only).' => 'Belirtilen kullanıcıları yeniden etkinleştirin (yalnızca yönetici).',
      '    Username: %s' => '    Kullanıcı Adı: %s',
      'Email Invitations' => 'Email Davetiyeleri',
      'Create New Mailing List' => 'Yeni Posta Listesi Oluştur',
      'You can not enable or disable your own account.' => 'Kendi hesabınızı etkinleştiremez veya devre dışı bırakamazsınız.',
      'Logout' => 'Oturumu kapat',
      'After you set up your account, you can log in again in the future by going here:' => 'Hesabınızı oluşturduktan sonra, gelecekte buraya tıklayarak Phabricator’a giriş yapabilirsiniz:',
      'Approve Account' => 'Hesabı Onayla',
      'Email has not been created yet!' => 'E-posta henüz oluşturulmadı!',
      'This function includes results which have no owner. Use a query like this to find unassigned results:
    %s
    If you combine this function with other functions, the query will return results which match the other selectors //or// have no owner. For example, this query will find results which are owned by `alincoln`, and will also find results which have no owner:
    %s' => 'Bu işlev, sahibi olmayan sonuçları içerir. Atanmamış sonuçları bulmak için böyle bir sorgu kullanın:
    %s
    Bu işlevi diğer işlevlerle birleştirirseniz, sorgu diğer seçicilere uyan //veya// sahibi olmayan sonuçları döndürür. Örneğin, bu sorgu `alincoln` sahip olduğu sonuçları bulacak ve ayrıca sahibi olmayan sonuçları da bulacak:
    %s',
      'Enable User?' => 'Kullanıcı Etkinleştirilsin mi?',
      'Update Preview' => 'Önizlemeyi Güncelle',
      'Short blurb about the user.' => 'Kullanıcı hakkında kısa bulanıklık.',
      'IP' => 'IP',
      'Multi-Factor: Add Factor' => 'Çok Faktörlü: Faktör Ekle',
      'Apply transactions to edit a user. (Users can not be created via the API.)' => 'Bir kullanıcıyı düzenlemek için işlemleri uygulayın. (Kullanıcılar API üzerinden oluşturulamaz.)',
      'Needs Approval' => 'Onay Gerekiyor',
      'Show Only Users With MFA' => 'Yalnızca MFA\'ya Sahip Kullanıcıları Göster',
      'Disable %s? They will no longer be able to access this server or receive email.' => '%s devre dışı bırakılsın mı? Artık Phabricator\'a erişemeyecek veya e-posta alamayacaklar.',
      'Invites' => 'Davetler',
      'Show Only Administrators' => 'Yalnızca Hizmetlileri Göster',
      'Something Stays Your Hand' => 'Bir Şey Elini Kalıyor',
      'Unapproved' => 'Onaylanmamış',
      'Browse No Owner' => 'Sahip Yok Göz At',
      'New Username' => 'Yeni Kullanıcı Adı',
      'User PHID' => 'Kullanıcı PHID\'si',
      'External accounts can only be edited by the account owner.' => 'Dış hesaplar yalnızca hesap sahibi tarafından düzenlenebilir.',
      '%s (%s) has changed your %s username.' => '%s (%s), Phabricator kullanıcı adınızı değiştirdi.',
      'The "Has MFA" query constraint may only be used by administrators, to prevent attackers from using it to target weak accounts.' => '"MFA Has" sorgusu kısıtı, saldırganların zayıf hesapları hedeflemekte kullanmasını önlemek için yalnızca yöneticiler tarafından kullanılabilir.',
      'Actor PHID' => 'Aktör PHID',
      'You can not send welcome mail because you are not an administrator. Only administrators may send welcome mail.' => 'Yönetici olmadığınız için hoş geldiniz postası gönderemezsiniz. Yalnızca yöneticiler hoş geldiniz postası gönderebilir.',
      'User Since' => 'Kullanıcı oluşturma tarihi',
      '%s enabled this user.' => '%s bu kullanıcıyı etkinleştirdi',
      'Create Bot User' => 'Bot Kullanıcısı Oluştur',
      'You can optionally include a heartfelt personal message in the email.' => 'İsteğe bağlı olarak e-postaya içten bir kişisel mesaj ekleyebilirsiniz.',
      'Email: Recovery Link' => 'E-posta: Kurtarma Bağlantısı',
      'Account Type' => 'Hesap Türü',
      'Show Only Unapproved Users' => 'Yalnızca Onaylanmamış Kullanıcıları Göster',
    );
  }

}
