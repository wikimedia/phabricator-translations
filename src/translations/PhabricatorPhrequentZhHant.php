<?php

final class PhabricatorPhrequentZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => '現在運作中',
      'by nearest start date' => '依最近的開始日期',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => '停止追蹤時間不能在未來的時間裡，請輸入目前或過去的時間。',
      'Stop Time' => '停止時間',
      'Stop Timer' => '停止計時器',
      'Ended on %s' => '結束在%s',
      'Unknown ended \'%s\'!' => '未知結束「%s」！',
      'Tracked %s so far' => '到目前已追蹤%s',
      'Tracked: %s' => '已追蹤：%s',
      'Start Time' => '開始時間',
      'Returns current objects being tracked in Phrequent.' => '回傳在 Phrequent 裡目前被追蹤的對象。',
      'Interrupted' => '已中斷',
      'Stop Tracking Time' => '停止追蹤時間',
      'Start Tracking Time' => '開始追蹤時間',
      'Stop Tracking' => '停止追蹤',
      'Time Spent' => '時間耗費',
      'Tracked %s' => '已追蹤%s',
      'Phrequent Time' => 'Phrequent 時間',
      'Not Tracking Time' => '不追蹤時間',
      'All Tracked' => '所有追蹤',
      'by furthest end date' => '依最遠的結束日期',
      'Unknown order "%s".' => '未知排序「%s」。',
      'by nearest end date' => '依最近的結束日期',
      'Ended' => '已結束',
      'by furthest start date' => '依最遠的開始日期',
      'Stop' => '停止',
      'Not Working Now' => '現在未運作',
      'Started At' => '開始於',
      'Start Tracking' => '開始追蹤',
      '%s (%s ago)' => '%s（%s前）',
      'Start Timer' => '開始計時器',
      'What time did you start working?' => '您要什麼時候開始運作？',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => '您要什麼時候停止運作？',
      'Track Time Spent' => '追蹤時間耗費',
      'Please choose a valid date.' => '請選擇一個有效的日期。',
      'You are not currently tracking time on this object.' => '您目前沒有在此對象追蹤時間。',
      'Stop tracking time on an object by popping it from the stack.' => '在堆疊所彈出的對象上停止追蹤時間。',
      'Start tracking time on an object by pushing it on the tracking stack.' => '在堆疊所彈出的對象上開始追蹤時間。',
      'Stop time must be after start time.' => '停止時間必須晚於開始時間。',
      'Currently Tracking' => '目前追蹤',
      'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => '開始追蹤時間不能在未來的時間裡，請輸入目前或過去的時間。',
    );
  }

}
