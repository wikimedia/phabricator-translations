<?php

final class PhabricatorMetaTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Bilgilendirme',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'Bu uygulama, Phabricator\'un çalışması için gerekli olduğu için kaldırılamaz.',
      'Syntax' => 'Syntax',
      'You cannot install an installed application.' => 'Zaten yüklü olan bir uygulamayı yükleyemezsiniz.',
      'Show First-Party Applications' => 'Birinci Taraf Uygulamaları Göster',
      'Create Application' => 'Uygulama Oluştur',
      'Unknown order "%s"!' => 'Bilinmeyen sipariş "%s"!',
      'Really Uninstall Application?' => 'Uygulamayı gerçekten kaldırmak istiyor musunuz?',
      'Prototypes Not Enabled' => 'Prototipler Etkin Değil',
      'Really uninstall the %s application?' => '%s uygulamasını gerçekten kaldırılsın mı?',
      'Policy does not exist.' => 'Politika mevcut değil.',
      'Launcher' => 'Başlatıcı',
      'To manage prototypes, enable them by setting %s in your Phabricator configuration.' => 'Prototipleri yönetmek için, Phabricator yapılandırmanızda %s ayarlayarak bunları etkinleştirin.',
      'This application is a prototype. %s' => 'Bu uygulama bir prototiptir. %s',
      'Confirmation' => 'Onayla',
      'Explore More Applications' => 'Diğer Uygulamaları Keşfet',
      'Uninstalled' => 'Kaldırıldı',
      'Show Uninstalled Applications' => 'Kaldırılmış Uygulamaları Göster',
      'Launchable' => 'Başlatıcı',
      'Save Policies' => 'Politikaları Kaydet',
      'Browse Applications' => 'Uygulamalarda Ara',
      'Prototype' => 'Prototip',
      'Edit Policies: %s' => 'Politikaları Düzenle: %s',
      'Create New Application' => 'Yeni Uygulama Oluştur',
      'Extension' => 'Uzantı',
      'Validation Failed' => 'Doğrulama başarısız',
      'Show Installed Applications' => 'Yüklenen Uygulamaları Göster',
      'Configure' => 'Yapılandır',
      'Mail Commands Overview' => 'Mail Komutlarına Genel Bakış',
      'Show Launchable Applications' => 'Başlatılabilir Uygulamaları Göster',
      'Show Released Applications' => 'Yayımlanan Uygulamaları Göster',
      'Show Non-Launchable Applications' => 'Başlatılamayan Uygulamaları Göster',
      'Edit Policies' => 'Politikaları Düzenle',
      'Can\'t set non-public policies to public.' => 'Halka açık olmayan politikalar herkese açık olarak ayarlanamaz.',
      'Configure Application Forms' => 'Uygulama Formlarını Yapılandır',
      'Show Applications w/ App Email Support' => 'Uygulamaları Göster w/ Uygulama E-Posta Desteği',
      'Uninstall' => 'Kaldır',
      'Type an application name...' => 'Bir uygulama türü adı...',
      'Install %s application?' => '%s adlı uygulamayı yüklemek istediğinize emin misiniz?',
      'Quick Reference' => 'Hızlı referans',
      'Show Applications w/o App Email Support' => 'Uygulamaları Göster w/o Uygulama E-Posta Desteği',
      'Provenance' => 'Kaynak',
      'Show Prototype Applications' => 'Prototip Uygulamaları Göster',
      'Edit Application: %s' => 'Uygulamayı Düzenle: %s',
      'Show Third-Party Applications' => 'Üçüncü Taraf Uygulamaları Göster',
      'Show All Applications' => 'Tüm Uygulamaları Göster',
      'Install' => 'Yükle',
    );
  }

}
