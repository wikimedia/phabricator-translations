<?php

final class PhabricatorBaseTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '\'%s\' uygulaması yok!',
      'This application is required, so all users must have access to it.' => 'Bu uygulama, Phabricator\'ın çalışması için gereklidir, bu nedenle tüm kullanıcıların buna erişimi olmalıdır.',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => '\'%s\' kullanıcısının \'%s\'ye erişmesine izin verilmesini bekleyin.',
      'Can Configure Application' => 'Uygulamayı Yapılandırabilir',
      'Can Use Application' => 'Uygulama Kullanabilir',
      'Application Controller' => 'Uygulama Denetleyicisi',
      'Public + configured' => 'Genel + yapılandırılmış',
      'Public Access' => 'Genel Erişim',
      'Core Applications' => 'Çekirdek Uygulamaları',
      'No Login Required' => 'Giriş Gerekmiyor',
      'No application!' => 'Uygulama yok!',
      '%s Application' => '%s Uygulama',
      'Email Verification Required' => 'E-posta Doğrulaması Gerekiyor',
      'Application Controller, No Login Required' => 'Uygulama Denetleyicisi, Giriş Gerekmiyor',
      'Developer Tools' => 'Geliştirici Araçları',
      'Expect user \'%s\' to be denied access to \'%s\'.' => '\'%s\' kullanıcısının \'%s\'ye erişimi reddedilmesini bekleyin.',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'İstek, "%s" sınırlandırılmış parametresini içeriyor, ancak bu denetleyici ("%s") onu beyaz listeye almıyor. Yeniden yönlendirme saldırısının bir parçası olabileceğinden, bu isteği sunmayı reddedebilir.',
      'Unknown capability \'%s\'!' => 'Bilinmeyen yetenek \'%s\'!',
      'Admin Required' => 'Yönetici Gerekli',
      'Email Verification Required, With Exception' => 'İstisna ile Gerekli E-posta Doğrulaması',
      'Allow Disabled' => 'Devre Dışı Bırak',
      'Unable to find transaction query for object of class "%s".' => '"%s" sınıfındaki nesne için işlem sorgusu bulunamıyor.',
    );
  }

}
