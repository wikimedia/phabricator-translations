<?php

final class PhabricatorPasteZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '%s updated the title for %s from %s to %s.' => '%s将%s的标题从%s更新为%s。',
      'Paste may not be empty.' => '粘贴不可为空。',
    );
  }

}
