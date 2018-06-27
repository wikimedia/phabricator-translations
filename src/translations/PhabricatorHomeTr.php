<?php

final class PhabricatorHomeTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Komuta Merkezi',
      'More Applications' => 'Daha Fazla Uygulama',
      'Built-in Homepage' => 'Yerleşik Anasayfa',
    );
  }

}
