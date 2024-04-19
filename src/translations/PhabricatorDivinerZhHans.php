<?php

final class PhabricatorDivinerZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Article has no %s!' => '条目没有%s！',
      'Return' => '返回',
    );
  }

}
