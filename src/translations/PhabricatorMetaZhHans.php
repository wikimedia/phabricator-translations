<?php

final class PhabricatorMetaZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Information' => '信息',
      'Syntax' => '语法',
      'Quick Reference' => '快速参考',
    );
  }

}
