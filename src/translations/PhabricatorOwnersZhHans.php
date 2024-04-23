<?php

final class PhabricatorOwnersZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Configure Owners Package Forms' => '配置主人程序包表单',
      'Package name is required.' => '需要程序包名称。',
      'Create New Package' => '创建新程序包',
    );
  }

}
