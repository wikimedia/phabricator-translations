<?php

final class PhabricatorPackagesZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Once a publisher is created, its key can not be changed.' => '一旦创建发布者，其键就不能更改。',
      'No publishers found.' => '找不到发布者。',
      'Publishers' => '发布者',
    );
  }

}
