<?php

final class PhabricatorLipsumZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'LIPSUM' => 'LIPSUM',
      'OOPS' => '哎呀',
      'Generated "%s": %s' => '已生成“%s”：%s',
    );
  }

}
