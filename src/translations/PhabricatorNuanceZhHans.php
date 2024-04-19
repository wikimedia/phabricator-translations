<?php

final class PhabricatorNuanceZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Work' => '作品',
      'GitHub Event URI' => 'GitHub活动URI',
      'Added Label: %s' => '已添加标签：%s',
    );
  }

}
