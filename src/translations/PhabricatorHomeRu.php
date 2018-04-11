<?php

final class PhabricatorHomeRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Командный центр',
      'More Applications' => 'Больше приложений',
      'Built-in Homepage' => 'Встроенная домашняя страница',
    );
  }

}
