<?php

final class PhabricatorPhurlZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Alias' => '别名',
      'URL' => 'URL',
      'All URLs' => '所有URL',
    );
  }

}
