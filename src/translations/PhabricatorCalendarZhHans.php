<?php

final class PhabricatorCalendarZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => '找不到活动。',
      'New event icon.' => '新活动图表。',
      'Change the event icon.' => '更改活动图标。',
      'Read information about events.' => '阅读有关活动的信息。',
      'Drag and drop .ics files to upload them and import them into Calendar.' => '拖放.ics文件上传它们，并导入至日历中。',
      'Configure Calendar Event Forms' => '配置日历活动表单',
      'You can not attach an ICS file to an import type other than an ICS import (type is "%s").' => '您不能附加ICS文件至任何除ICS导入以外的导入类型（类型为“%s”）。',
      'Reload this source? Events imported from this source will be updated.' => '重新加载此来源？导入自此来源的活动将会更新。',
      '%s changed the automatic update frequency for this import.' => '%s更改了此次导入的自动更新频率。',
      'Import Disabled' => '导入已禁用',
      'File PHID "%s" is not valid or not visible.' => '文件PHID “%s”不是有效的，或不可见。',
      'Calendar Import' => '日历导入',
      'You can not disable import of an ICS file because the entire import occurs immediately when you upload the file. There is no further activity to disable.' => '您不能禁用ICS文件导入，因为当您上传文件时，整个导入会立即发生。没有进一步禁用的方式。',
      'Meal' => '餐饮',
      'Not Attending Event' => '没有参加的活动',
      'ICS File' => 'ICS文件',
      'Event Host' => '活动主办',
      'Unable to Disable' => '无法禁用',
      'Exports' => '导出',
      'Query to execute.' => '要执行的查询。',
      'Movie' => '电影',
      'Official Business' => '官方商务',
      'End date and time of the event.' => '活动的结束日期和时间。',
      '%s changed the host of %s from %s to %s.' => '%s将%s的主机从%s更改为%s。',
      'Reload event imports from the command line. Useful for testing and debugging importers.' => '重新加载导入自命令行的活动。对测试和调试导入者有帮助。',
      'Start time of the event.' => '活动的开始时间。',
      'Event icon.' => '活动图标。',
      'Too Frequent' => '过于频繁',
      'Cancel this event?' => '取消此活动？',
      'Uses Import Policy' => '使用导入方针',
      'Weekly' => '每周',
      'Reinstate Event' => '恢复活动',
      'Export private data.' => '导出私有数据。',
      'Meeting' => '会议',
      'event invitees' => '活动邀请',
      'List of import IDs to reload.' => '要重新加载的导入ID列表。',
      '%s set %s to repeat yearly.' => '%s将%s重新设置为每年。',
      'Upcoming Events' => '即将到来的活动',
      'Adjust export mode.' => '调整导出模式。',
      'Imported Events' => '导入的活动',
      '.ics URI' => '.ics URI',
      'Travel' => '旅行',
      'Calendar Import Logs' => '日历导入日志',
      'Imported By' => '导入者',
      'Export Query as .ics' => '导出查询为.ics',
      'This export has an invalid mode ("%s").' => '此导出有无效的模式（“%s”）。',
      'Disable Export' => '禁用导出',
      '%s changed %s to repeat until %s.' => '%s将%s更改为重复，直到%s。',
      'Cancel the event.' => '取消活动。',
      '%s changed %s to an all day event.' => '%s将%s更改为全日活动。',
      'Import %d %s' => '导入%s %s',
      'Update frequency constant.' => '更新频率常量。',
      'Edit Event' => '编辑活动',
      'Calendar Export %s: %s' => '日历导出%s：%s',
      '%s is attending %s.' => '%s正在参加%s。',
      'event host' => '活动主办',
      'Original Event' => '原始活动',
      'Event Start' => '活动开始',
      'Import %d' => '导入%s',
      'Invitees' => '邀请',
      'Recurring' => '循环',
      '%s declined this event.' => '%s拒绝了此活动。',
      'Cancelled Events' => '取消的活动',
      'New event name.' => '新活动名称。',
      '%s from %s' => '%s来自%s',
      'Host of the event.' => '活动的主机。',
      'Create Export' => '创建导出',
      'Edit Export' => '编辑导出',
      '%s declined %s.' => '%s拒绝了%s。',
      'Drop .ics Files to Import' => '拖放.ics文件以导入',
      'Staycation' => '居家旅行',
      'Reload Events' => '重新加载活动',
      'Guide: Exporting Events' => '指导：导出活动',
      'The event description.' => '活动描述。',
      'Event Fields' => '活动字段',
      'New export mode.' => '新导出模式。',
      'Description of the event.' => '活动描述。',
      'New Import' => '新导入',
      'Enable Export' => '启用导出',
      'Imported' => '已导入',
      'Import Events' => '导入活动',
      'Calendar Imports' => '日历导入',
      'End date is invalid.' => '结束日期无效。',
      '.ics File' => '.ics文件',
      '[Calendar]' => '[日历]',
      'Calendar Import %s: %s' => '日历导入%s：%s',
      'URI to import.' => '要导入的URI。',
      'Name of the event.' => '活动名称。',
      'Calendar Export' => '日历导出',
      'Away' => '离开',
      'Previous' => '上一个',
      'Importing "%s"...' => '正在导入“%s”...',
      'Hosts' => '主机',
      'Create Event' => '创建活动',
      'Series Event' => '系列活动',
      'Busy' => '忙',
      'Decline Event' => '拒绝活动',
      'Hosted by %s' => '由%s主持',
      'Create New Export' => '创建新导出',
      'Display Options' => '显示选项',
      'Export %d' => '导出%s',
      'Import or subscribe to a calendar in .ics format by URI.' => '通过URI导入或订阅.ics格式的日历。',
      'Party' => '聚会',
      'One-Time Event' => '一次活动',
      'All Day Event' => '全日活动',
      'New export query key.' => '新导出的查询关键字。',
      'Deleted Event' => '删除的活动',
      'Name of the import.' => '导入名称。',
      'Enable Import' => '启用导入',
      'Disable Import' => '禁用导入',
      'New event start time.' => '新活动开始时间。',
      'Event Series' => '活动系列',
      '%s cancelled %s.' => '%s取消了%s。',
      'Daily' => '每日',
      'Month View' => '月视图',
      'Yearly' => '每年',
      'Import Type' => '导入类型',
      '(+%s more...)' => '（+%s个更多...）',
      'Next Update' => '下次更新',
      '%s created this event.' => '%s创建了此活动。',
      'All Events' => '所有活动',
      '%s enabled this export.' => '%s启用了此导出。',
      'Frequency' => '频率',
      'Updated Event' => '更新的活动',
      'Calendar Exports' => '日历导出',
      'Calendar Events' => '日历活动',
      'No Events Imported' => '未导入活动',
      'Repeat until date is invalid.' => '重复直到的日期无效。',
      'Automatic Updates' => '自动更新',
      'Reload Import' => '重新加载导入',
      'ICS URI' => 'ICS URI',
      'Cancel Event' => '取消活动',
      '%s, All Day' => '%s，全日',
      'Source URI' => '来源URI',
      'RSVP' => 'RSVP',
      'Holiday' => '假日',
      'Create New Import' => '创建新导入',
      'EVENT DESCRIPTION' => '活动描述',
      'New URI.' => '新URI。',
      'Both Cancelled and Active Events' => '取消和活跃的活动',
      'Log Messages' => '日志消息',
    );
  }

}