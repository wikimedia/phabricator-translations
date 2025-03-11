<?php

final class PhabricatoravaCoreTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'Anti-Vandalizm',
      'compute score for given transactions.' => 'Verilen işlemler için puanı hesaplayın.',
      'Vandalism detected' => 'Vandalizm bulundu',
      'No vandalism detected.' => 'Vandalizm bulunamadı.',
      'Quarantine the vandal account.' => 'Vandal hesabı engelleyin.',
      'The number of tasks a new user can edit before we react.' => 'Yeni bir kullanıcının tepki vermeden önce düzenleyebileceği değişiklik sayısı.',
      'The specified username / userPHID was not found' => 'Belirtilen kullanıcı adı / userPHID bulunamadı',
      'Disable vandal accounts.' => 'Vandal hesapları devre dışı bırakın.',
      'No action' => 'Eylem yok',
      'Scan for vandalism' => 'Vandalizm taraması yap',
    );
  }

}
