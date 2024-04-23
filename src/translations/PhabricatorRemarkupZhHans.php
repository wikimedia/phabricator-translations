<?php

final class PhabricatorRemarkupZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => '无效的重新标记引擎。',
      'Process text through remarkup.' => '通过重新标记处理文本。',
      'Content may not be empty.' => '内容不可为空。',
    );
  }

}
