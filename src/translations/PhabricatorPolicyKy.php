<?php

final class PhabricatorPolicyKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
      'Other: %s' => 'Башка: %s',
      'Note:' => 'Эскертме:',
    );
  }

}
