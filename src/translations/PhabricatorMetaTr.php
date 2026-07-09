<?php

final class PhabricatorMetaTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
  'Completely Break Everything' => 'Her Şeyi Tamamen Boz',
  'Information' => 'Bilgi',
  'Syntax' => 'Sözdizim',
  'Show First-Party Applications' => 'Birinci Taraf Uygulamaları Göster',
  'Create Application' => 'Uygulama Oluştur',
  'Unknown order "%s"!' => 'Bilinmeyen sipariş "%s"!',
  'Prototypes Not Enabled' => 'Prototipler Etkin Değil',
  'Policy does not exist.' => 'Politika mevcut değil.',
  'Launcher' => 'Başlatıcı',
  'This application is a prototype. %s' => 'Bu uygulama bir prototiptir. %s',
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
' => 'Gelen posta için işlemeyi yapılandırdıktan sonra, e-posta üzerinden nesnelerle (görevler ve revizyonlar gibi) etkileşim kurabilirsiniz. Gelen postayı yapılandırma hakkında bilgi için **[[ %s | Gelen E-postayı Yapılandırma ]]** sayfasına bakın.

Çoğu durumda, yorum yapmak için bu sunucudan aldığınız e-postayı yanıtlayabilirsiniz. Web kullanıcı arayüzüne giriş yapmanıza gerek kalmadan daha fazla eylem yapmak (görev talep etmek veya bir revizyonda değişiklik istemek gibi) için **posta komutlarını** da kullanabilirsiniz.

Posta komutları, `!claim` gibi bir ünlem işaretiyle başlayan anahtar kelimelerdir. Bazı komutlar `!assign alincoln` gibi parametreler alabilir.

Posta komutlarını kullanmak için, posta mesajınızın başına veya sonuna her satıra bir komut yazın. Örneğin, görevi talep etmek için görev e-postasına cevap olarak yazabilirsiniz:

```
!claim

Bununla ben ilgileneceğim.
```


%s postanızı aldığında, önce herhangi bir komutu işler, ardından kalan ileti gövdesini yorum olarak gönderir. Aynı anda birden fazla komut yürütebilirsiniz:

```
!assign alincoln
!close

Yalnızca @incoln ile konuştum ve bana bunu düzelttiğini gösterdi.
```',
  'Show Enabled Applications' => 'Yüklenen Uygulamaları Göster',
  'Can\'t set non-public capabilities to public.' => 'Halka açık olmayan politikalar herkese açık olarak ayarlanamaz.',
  'Launchable' => 'Başlatıcı',
  'You cannot enable an enabled application.' => 'Zaten yüklü olan bir uygulamayı yükleyemezsiniz.',
  'Save Policies' => 'Politikaları Kaydet',
  'Browse Applications' => 'Uygulamalarda Ara',
  'To manage prototypes, enable them by setting %s in your configuration.' => 'Prototipleri yönetmek için, yapılandırmanızda %s ayarlayarak bunları etkinleştirin.',
  'Prototype' => 'Prototip',
  'Edit Policies: %s' => 'Politikaları Düzenle: %s',
  'Really Disable Application?' => 'Uygulamayı gerçekten kaldırmak istiyor musunuz?',
  'Create New Application' => 'Yeni Uygulama Oluştur',
  'Extension' => 'Uzantı',
  'Validation Failed' => 'Doğrulama başarısız',
  'Really disable the %s application?' => '%s uygulamasını gerçekten kaldırılsın mı?',
  'Capability "%s" is not editable for this application.' => '"%s" yeteneği bu uygulama için düzenlenemez.',
  'Mail Commands Overview' => 'Mail Komutlarına Genel Bakış',
  'Show Launchable Applications' => 'Başlatılabilir Uygulamaları Göster',
  'Show Released Applications' => 'Yayımlanan Uygulamaları Göster',
  'Show Non-Launchable Applications' => 'Başlatılamayan Uygulamaları Göster',
  'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Bu çok sıradışı ve sizi ana sayfasında herhangi bir içerik olmadan bırakacaktır. Bunu sadece ne yaptığınızı bildiğinizden eminseniz yapmanız gerekir.',
  'Show Disabled Applications' => 'Kaldırılmış Uygulamaları Göster',
  'Configure Application Forms' => 'Uygulama Formlarını Yapılandır',
  'Show Applications w/ App Email Support' => 'Uygulamaları Göster w/ Uygulama E-Posta Desteği',
  'Can\'t set the policy to a policy you can\'t view!' => 'Politika, göremediğiniz bir politikaya ayarlanamıyor!',
  'Type an application name...' => 'Bir uygulama türü adı...',
  'Quick Reference' => 'Hızlı referans',
  'Show Applications w/o App Email Support' => 'Uygulamaları Göster w/o Uygulama E-Posta Desteği',
  'This application is required and cannot be disabled.' => 'Bu uygulama gereklidir ve kaldırılamaz.',
  '%s changed the %s policy for application %s from %s to %s.' => '',
  'Configure creation and editing forms in Applications.' => 'Uygulamalar\'daki oluşturma ve düzenleme formlarını yapılandırın.',
  'Show Prototype Applications' => 'Prototip Uygulamaları Göster',
  'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Bu sunucu şu anda gelen postaları kabul edecek şekilde yapılandırılmamış. Gelen posta ayarlanana kadar nesnelerle e-posta üzerinden etkileşim kuramazsınız.',
  '%s changed the %s policy from %s to %s.' => '',
  'Edit Application: %s' => 'Uygulamayı Düzenle: %s',
  'Show Third-Party Applications' => 'Üçüncü Taraf Uygulamaları Göster',
  'Are you absolutely certain you want to disable the Home application?' => 'Ana uygulamasını kaldırmak istediğinizden kesinlikle emin misiniz?',
  'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Bu tablo mevcut posta komutlarını özetlemektedir. Belirli bir komutla ilgili ayrıntılar için aşağıdaki komut bölümüne bakın.',
  'Show All Applications' => 'Tüm Uygulamaları Göster',
);
  }

}
