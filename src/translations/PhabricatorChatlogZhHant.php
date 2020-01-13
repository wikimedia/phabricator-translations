<?php

final class PhabricatorChatlogZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '（已停用）',
      'Jump' => '前往',
      'Retrieve chatter.' => '檢索對話。',
      'Newer' => '較新',
      'Jump to Bottom' => '跳至底端',
      'Older' => '較舊',
      'ChatLog' => '聊天日誌',
      'Channel List' => '頻道列表',
      'Hide Dates' => '隱藏日期',
      'Channel Log' => '頻道日誌',
      'Search Dates' => '搜尋日期',
      'Newest' => '最新',
      'Record chatter.' => '記錄對話。',
    );
  }

}
