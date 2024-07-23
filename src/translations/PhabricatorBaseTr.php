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
      'Can Configure Application' => 'Uygulamayı Yapılandırabilir',
      'Can Use Application' => 'Uygulama Kullanabilir',
      'Core Applications' => 'Çekirdek Uygulamaları',
      'No application!' => 'Uygulama yok!',
      '%s Application' => '%s Uygulama',
      'Developer Tools' => 'Geliştirici Araçları',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'İstek, "%s" sınırlandırılmış parametresini içeriyor, ancak bu denetleyici ("%s") onu beyaz listeye almıyor. Yeniden yönlendirme saldırısının bir parçası olabileceğinden, bu isteği sunmayı reddedebilir.',
      'Unknown capability \'%s\'!' => 'Bilinmeyen yetenek \'%s\'!',
      'Unable to find transaction query for object of class "%s".' => '"%s" sınıfındaki nesne için işlem sorgusu bulunamıyor.',
    );
  }

}
