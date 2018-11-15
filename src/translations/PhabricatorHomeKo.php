<?php

final class PhabricatorHomeKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => '사령부',
      'More Applications' => '더 많은 애플리케이션',
      'Built-in Homepage' => '내장 홈페이지',
    );
  }

}
