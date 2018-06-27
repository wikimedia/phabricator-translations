<?php

final class PhabricatorHelpTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Bu dahil olmak üzere herhangi bir iletişim kutusunu kapatın.',
      'Unsupported Editor Protocol' => 'Desteklenmeyen Editör Protokolü',
      'Change Settings' => 'Ayarları Değiştir',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Yapılandırılmış editörünüz URI, desteklenmeyen bir protokol kullanmaktadır. Desteklenen bir protokolü kullanmak için ayarlarınızı değiştirin veya hizmetlinizden aşağıdaki protokolü yapılandırarak destek eklemesini isteyin:: %s',
      '%s Help' => '%s Yardım',
      'Keyboard Shortcuts' => 'Klavye Kısayolları',
    );
  }

}
