<?php

final class PhabricatorDivinerEt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'et';
  }

  protected function getTranslations() {
    return array(
      'Books' => 'Raamatud',
      'Book' => 'Raamat',
    );
  }

}
