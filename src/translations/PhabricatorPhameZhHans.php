<?php

final class PhabricatorPhameZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '%s set the subtitle for %s.' => '%s设置了%s的子标题。',
      'here' => '这里',
      'No parent site' => '没有父网站',
    );
  }

}
