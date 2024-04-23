<?php

final class PhabricatorTokensJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Barnstar' => 'バーンスター',
      '%s Token' => '%s トークン',
      'Award Token' => 'トークンを授与',
    );
  }

}
