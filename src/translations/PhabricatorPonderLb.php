<?php

final class PhabricatorPonderLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  '%s Answer(s)' => array(
    '%s Äntwert',
    '%s Äntwerten',
  ),
  '%s closed this question as invalid.' => 'De Benotzer %s huet dës Fro als ongülteg zougemaach.',
);
  }

}
