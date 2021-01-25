<?php

final class PhabricatorMultimeterZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Samples' => '例子',
      'Subprocesses' => '子程序',
      '(All)' => '（全部）',
      'Samples (%s - %s)' => '例子（%s - %s）',
      'By ID' => '依 ID',
      'Epoch' => '時期',
      'Performance Sampler' => '效能取樣',
      'Rate' => '速率',
      '%s Req' => '%s所需',
      'Multimeter User Guide' => 'Multimeter 使用者指南',
      '%s Unit(s)' => '%s 個單元',
      'By Request' => '依請求',
      'By Host' => '依主機',
      'Trying to unpause an active multimeter!' => '嘗試取消暫停一個運行的 multimeter！',
      'Web Request' => 'Web 請求',
      'By Context' => '依脈絡',
      'Avg' => '平均',
      'By Label' => '依標籤',
      'Multimeter' => 'Multimeter',
      'Viewer' => '檢視器',
      '%s Event(s)' => '%s 個事件',
      'Static Resource' => '靜態資源',
      'Multimeter Events' => 'Multimeter 事件',
      'By Viewer' => '依檢視器',
    );
  }

}
