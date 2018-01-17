<?php

final class PhabricatorHomeMk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mk';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Наредбен центар',
      'More Applications' => 'Уште прилози',
      'Built-in Homepage' => 'Вградена почетна страница',
    );
  }

}
