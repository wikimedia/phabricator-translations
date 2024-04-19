<?php

final class PhabricatorConsoleZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => '听众类',
      'Profiling was not enabled for this page. Use the button above to enable it.' => '此页面未启用性能分析。使用上方的按钮启用它。',
      'Internal ID' => '内部ID',
      'Error Log (%d)' => '错误日志（%s）',
      'Debugging console for real-time notifications.' => '为实时通知调试控制台。',
      'Provides detailed PHP profiling information through XHProf.' => '通过XHProf提供详细的PHP性能分析信息。',
      'Analyze Query Plans' => '分析查询计划',
      'Realtime' => '实时',
      'Site' => '网站',
      '+%s ms' => '+%s毫秒',
      'Calls to External Services' => '调用至外部服务',
      'Machine' => '机器',
      'Reconnect' => '重新连接',
      'No errors.' => '无错误。',
      'Startup' => '启动',
      'Information about %s and %s.' => '有关%s和%s的信息。',
      'Timing information about the startup sequence.' => '有关启动顺序的时间调整信息。',
      'Event Log' => '活动日志',
      'Profile Page' => '详情页面',
      'Whole Table' => '整个表格',
      'Repaint' => '重新上色',
      'Small Table Scan' => '小表格检查',
      'Installation Guide' => '安装指南',
      'Profile Permalink' => '详情固定链接',
      'Error Log' => '错误日志',
      'Controller' => '控制者',
      'TABLE SCAN!' => '表格检查！',
      'STOPPED' => '已停止',
      'Information about services.' => '有关服务的信息。',
      'Unknown event: %s' => '未知活动：%s',
      'Shows errors and warnings.' => '显示错误和警告。',
      'XHProf Profiler' => 'XHProf分析器',
      'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => '“xhprof” PHP扩展不可用。安装xhprof以启用XHProf控制台插件。您可以在%s找到教程。',
      'Replay' => '重播',
      'Can\'t Analyze' => '不能分析',
      'Events' => '活动',
      'Information about events and event listeners.' => '有关活动的信息和活动听众。',
      'Page Weight' => '页面高度',
      'Hostname' => '主机名',
      'Registered Event Listeners' => '已注册活动听众',
      'No Tables' => '无表格',
    );
  }

}
