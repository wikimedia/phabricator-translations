<?php

final class PhabricatorPhrequentZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => '现已工作',
      'by nearest start date' => '按最近的开始日期',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => '停止追踪时间不能在未来的时间里，请输入当前或过去的时间。',
      'Stop Time' => '停止时间',
      'Stop Timer' => '停止计时器',
      'Ended on %s' => '于%s结束',
      'Unknown ended \'%s\'!' => '位置结束“%s”！',
      'Tracked %s so far' => '目前已追踪%s',
      'Tracked: %s' => '已追踪：%s',
      'Start Time' => '开始时间',
      'Returns current objects being tracked in Phrequent.' => '返回Phrequent里目前正被追踪的对象。',
      'Interrupted' => '已中断',
      'Stop Tracking Time' => '停止追踪时间',
      'Start Tracking Time' => '开始追踪时间',
      'Stop Tracking' => '停止追踪',
      'Time Spent' => '时间耗费',
      'Tracked %s' => '已追踪%s',
      'Phrequent Time' => 'Phrequent时间',
      'Not Tracking Time' => '不追踪时间',
      'All Tracked' => '所有追踪',
      'by furthest end date' => '按最远的结束日期',
      'Unknown order "%s".' => '未知排序“%s”。',
      'by nearest end date' => '按最近的结束日期',
      'Ended' => '已结束',
      'by furthest start date' => '按最远的开始日期',
      'Stop' => '停止',
      'Not Working Now' => '现在未工作',
      'Started At' => '开始于',
      'Start Tracking' => '开始追踪',
      '%s (%s ago)' => '%s（%s前）',
      'Start Timer' => '开始计时器',
      'What time did you start working?' => '您要什么时候开始工作？',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => '您要什么时候停止工作？',
      'Track Time Spent' => '追踪时间耗费',
      'Please choose a valid date.' => '请选择一个有效的日期。',
      'You are not currently tracking time on this object.' => '您目前没有在此对象追踪时间。',
      'Stop tracking time on an object by popping it from the stack.' => '在堆栈所弹出的对象上停止追踪时间。',
      'Start tracking time on an object by pushing it on the tracking stack.' => '在堆栈所弹出的对象上开始追踪时间。',
      'Stop time must be after start time.' => '停止时间必须晚于开始时间。',
      'Currently Tracking' => '目前追踪',
      'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => '开始追踪时间不能在未来的时间里，请输入当前或过去的时间。',
    );
  }

}
