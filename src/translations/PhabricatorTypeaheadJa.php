<?php

final class PhabricatorTypeaheadJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Token Name' => 'トークン名',
      'This source is not usable directly.' => 'このソースは直接使用できません。',
    );
  }

}
