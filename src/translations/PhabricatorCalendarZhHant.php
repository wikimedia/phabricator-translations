<?php

final class PhabricatorCalendarZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Import Disabled' => '匯入功能已停用',
      'Calendar Import' => '匯入日曆',
      'ICS File' => 'ICS 檔案',
      'Event Host' => '活動主持人',
      'Unable to Disable' => '無法停用',
      'Exports' => '匯出',
      'Event icon.' => '事件圖標。',
      'Too Frequent' => '過於頻繁',
      'Cancel this event?' => '取消此活動？',
      'Upcoming Events' => '接下來的活動',
      'Imported By' => '匯入者：',
      'Cancel the event.' => '取消此活動',
      'Change the end time of the event.' => '更改活動的結束時間。',
      '%s changed %s to an all day event.' => '%s已更改%s為全天活動。',
      'Import %d %s' => '匯入%s%s',
      'Edit Event' => '編輯活動',
      'Import %d' => '匯入%s',
      'Daily' => '每日',
      'Yearly' => '每年',
      'No exports found.' => '找不到提醒。',
      'Out of Range' => '超出範圍',
      'Create New Event' => '建立新活動',
      'Frequency' => '頻率',
      'Conference' => '會議',
      'Updated Event' => '更新活動',
      'Cancel Event' => '取消活動',
      'Holiday' => '假日',
      '[Reminder]' => '［提醒］',
      'Delete Events' => '刪除活動',
      'Rename the event.' => '重新命名活動。',
    );
  }

}
