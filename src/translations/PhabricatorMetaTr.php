<?php

final class PhabricatorMetaTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Completely Break Everything' => 'Tamamen Phabricator\'u Boz',
      'Information' => 'Bilgi',
      'Syntax' => 'Sözdizim',
      'You cannot install an installed application.' => 'Zaten yüklü olan bir uygulamayı yükleyemezsiniz.',
      'Show First-Party Applications' => 'Birinci Taraf Uygulamaları Göster',
      'Create Application' => 'Uygulama Oluştur',
      'Unknown order "%s"!' => 'Bilinmeyen sipariş "%s"!',
      'Really Uninstall Application?' => 'Uygulamayı gerçekten kaldırmak istiyor musunuz?',
      'Prototypes Not Enabled' => 'Prototipler Etkin Değil',
      'Really uninstall the %s application?' => '%s uygulamasını gerçekten kaldırılsın mı?',
      'Policy does not exist.' => 'Politika mevcut değil.',
      'Launcher' => 'Başlatıcı',
      'This application is a prototype. %s' => 'Bu uygulama bir prototiptir. %s',
      '%s installed this application.' => '%s bu uygulamayı yükledi.',
      'Confirmation' => 'Onayla',
      'Explore More Applications' => 'Diğer Uygulamaları Keşfet',
      'After configuring processing for inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring inbound mail, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from this server to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When %s receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ' => 'Phabricator\'ı gelen postaları işlemek üzere yapılandırdıktan sonra, e-postayla nesnelerle (görevler ve revizyonlar gibi) etkileşime girebilirsiniz. Phabricator\'ı yapılandırma hakkında bilgi için, **[[ %s | Gelen E-postayı Yapılandırma ]]** sayfasına bakın.
    Çoğu durumda, yorum yapmak için Phabricator\'dan aldığınız e-postayı yanıtlayabilirsiniz. Web kullanıcı arayüzüne giriş yapmanıza gerek kalmadan daha fazla eylem yapmak (görev talep etmek veya bir revizyonda değişiklik istemek gibi) için **posta komutlarını** da kullanabilirsiniz.
    Posta komutları, `!claim` gibi bir ünlem işaretiyle başlayan anahtar kelimelerdir. Bazı komutlar `!assign alincoln` gibi parametreler alabilir.
    Posta komutlarını kullanmak için, posta mesajınızın başına veya sonuna her satıra bir komut yazın. Örneğin, görevi talep etmek için görev e-postasına cevap olarak yazabilirsiniz:
    ```
    !claim
    Bununla ben ilgileneceğim.
    ```
    Phabricator postanızı aldığında, önce herhangi bir komutu işler, ardından kalan ileti gövdesini yorum olarak gönderir. Aynı anda birden fazla komut yürütebilirsiniz:
    ```
    !assign alincoln
    !close
    Yalnızca @incoln ile konuştum ve bana bunu düzelttiğini gösterdi.
    ```',
      'Uninstalled' => 'Kaldırıldı',
      'Show Uninstalled Applications' => 'Kaldırılmış Uygulamaları Göster',
      'Launchable' => 'Başlatıcı',
      'Save Policies' => 'Politikaları Kaydet',
      'Browse Applications' => 'Uygulamalarda Ara',
      'To manage prototypes, enable them by setting %s in your configuration.' => 'Prototipleri yönetmek için, Phabricator yapılandırmanızda %s ayarlayarak bunları etkinleştirin.',
      'Prototype' => 'Prototip',
      'Edit Policies: %s' => 'Politikaları Düzenle: %s',
      'Create New Application' => 'Yeni Uygulama Oluştur',
      'Extension' => 'Uzantı',
      'Validation Failed' => 'Doğrulama başarısız',
      'Show Installed Applications' => 'Yüklenen Uygulamaları Göster',
      '%s uninstalled this application.' => '%s bu uygulamayı kaldırdı.',
      'Capability "%s" is not editable for this application.' => '"%s" yeteneği bu uygulama için düzenlenemez.',
      'Mail Commands Overview' => 'Mail Komutlarına Genel Bakış',
      'Show Launchable Applications' => 'Başlatılabilir Uygulamaları Göster',
      'Show Released Applications' => 'Yayımlanan Uygulamaları Göster',
      'Show Non-Launchable Applications' => 'Başlatılamayan Uygulamaları Göster',
      '%s uninstalled %s.' => '%s, %s kaldırıldı.',
      'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Bu çok sıradışı ve sizi Phabricator ana sayfasında herhangi bir içerik olmadan bırakacaktır. Bunu sadece ne yaptığınızı bildiğinizden eminseniz yapmanız gerekir.',
      'Can\'t set non-public policies to public.' => 'Halka açık olmayan politikalar herkese açık olarak ayarlanamaz.',
      '%s installed %s.' => '%s, %s kuruldu.',
      'Configure Application Forms' => 'Uygulama Formlarını Yapılandır',
      'Show Applications w/ App Email Support' => 'Uygulamaları Göster w/ Uygulama E-Posta Desteği',
      'Uninstall' => 'Kaldır',
      'Can\'t set the policy to a policy you can\'t view!' => 'Politika, göremediğiniz bir politikaya ayarlanamıyor!',
      'This application is required and cannot be uninstalled.' => 'Bu uygulama, Phabricator\'un çalışması için gerekli olduğu için kaldırılamaz.',
      'Type an application name...' => 'Bir uygulama türü adı...',
      'Install %s application?' => '%s adlı uygulamayı yüklemek istediğinize emin misiniz?',
      'Quick Reference' => 'Hızlı referans',
      'Show Applications w/o App Email Support' => 'Uygulamaları Göster w/o Uygulama E-Posta Desteği',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Ana uygulamasını kaldırmak istediğinizden kesinlikle emin misiniz?',
      'Configure creation and editing forms in Applications.' => 'Uygulamalar\'daki oluşturma ve düzenleme formlarını yapılandırın.',
      'Show Prototype Applications' => 'Prototip Uygulamaları Göster',
      'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Phabricator şu anda gelen postaları kabul edecek şekilde yapılandırılmamış. Gelen posta ayarlanana kadar nesnelerle e-posta üzerinden etkileşim kuramazsınız.',
      'Edit Application: %s' => 'Uygulamayı Düzenle: %s',
      'Show Third-Party Applications' => 'Üçüncü Taraf Uygulamaları Göster',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Bu tablo mevcut posta komutlarını özetlemektedir. Belirli bir komutla ilgili ayrıntılar için aşağıdaki komut bölümüne bakın.',
      'Show All Applications' => 'Tüm Uygulamaları Göster',
    );
  }

}
