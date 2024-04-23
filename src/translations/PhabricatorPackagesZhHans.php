<?php

final class PhabricatorPackagesZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Once a publisher is created, its key can not be changed.' => '一旦创建了发布者，其关键字不能更改。',
      'No publishers found.' => '找不到发布者。',
    );
  }

}
