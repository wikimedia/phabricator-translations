<?php

final class PhabricatorFundZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Initiative long description.' => '发布长描述。',
      'Donate' => '捐赠',
    );
  }

}
