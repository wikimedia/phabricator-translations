<?php

final class PhabricatorHomeZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => '命令中心',
      'More Applications' => '更多应用',
      'Built-in Homepage' => '内置首页',
    );
  }

}
