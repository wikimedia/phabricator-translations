<?php

final class PhabricatorConsoleZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => '監聽類別',
      'Profiling was not enabled for this page. Use the button above to enable it.' => '此頁面未啟用分析，請使用上方按鈕來啟用。',
      'Event Type' => '事件類型',
      'Internal ID' => '內部 ID',
      'Error Log (%d)' => '錯誤日誌（%s）',
      'Debugging console for real-time notifications.' => '用於即時通知的除錯主控台。',
      'Provides detailed PHP profiling information through XHProf.' => '透過 XHProf 來提供詳細的 PHP 分析資訊。',
      'Analyze Query Plans' => '分析查詢計畫',
      'Realtime' => '即時',
      'Site' => '網站',
      '+%s ms' => '+%s 毫秒',
      'Calls to External Services' => '呼叫外部服務',
      'Machine' => '機器',
      'Reconnect' => '重新連接',
      'Information about Phabricator events and event listeners.' => '有關 Phabricator 事件與事件監聽的資訊。',
      'No errors.' => '沒有錯誤。',
      'Startup' => '啟動',
      'Information about %s and %s.' => '有關%s與%s的資訊。',
      'Timing information about the startup sequence.' => '有關啟動順序的時間資訊。',
      'Event Log' => '事件日誌',
      'Profile Page' => '分析頁面',
      'Whole Table' => '整個表格',
      'Repaint' => '重繪',
      'Small Table Scan' => '小型表格掃描',
      'Profile Permalink' => '分析固定連結',
      'Error Log' => '錯誤日誌',
      'Controller' => '控制器',
      'TABLE SCAN!' => '表格掃描！',
      'STOPPED' => '已停止',
      'Information about services.' => '有關服務的資訊。',
      'Unknown event: %s' => '不明事件：%s',
      'Shows errors and warnings.' => '顯示錯誤與警告。',
      'XHProf Profiler' => 'XHProf 分析器',
      'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => '「xhprof」PHP 擴充為不可用。請安裝 xhprof 來啟動 XHProf 主控台套件。您可以在%s找到說明。',
      'Replay' => '重新進行',
      'Can\'t Analyze' => '無法分析',
      'Events' => '事件',
      'Page Weight' => '頁面權重',
      'Hostname' => '主機名稱',
      'Registered Event Listeners' => '已註冊事件監聽',
      'No Tables' => '無表格',
    );
  }

}
