<?php

final class PhabricatorRemarkupZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => '在Phabricator环境中，通过重新标记处理文本。',
      'Invalid markup engine.' => '无效的重新标记引擎。',
      'Content may not be empty.' => '内容不可为空。',
    );
  }

}
