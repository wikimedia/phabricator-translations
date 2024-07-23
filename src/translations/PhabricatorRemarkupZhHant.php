<?php

final class PhabricatorRemarkupZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => '無效標記引擎。',
      'Process text through remarkup.' => '透過重新標記來處理文字。',
      'Content may not be empty.' => '內容不可為空。',
    );
  }

}
