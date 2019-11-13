<?php

final class PhabricatorRemarkupZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => '透過在 Phabricator 環境裡的重新標記來處理文字。',
      'Invalid markup engine.' => '無效標記引擎。',
      'Content may not be empty.' => '內容不可為空。',
    );
  }

}
