<?php

final class PhabricatorTokensUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Award Token' => 'Нагородити токеном',
      'Like' => 'Лайк',
      'Tokens Given' => 'Надано токени',
      'Dislike' => 'Дізлайк',
    );
  }

}
