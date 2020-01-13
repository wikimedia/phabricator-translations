<?php

final class PhabricatorXhprofZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf 樣本',
      'Sampled (1/%d)' => '已取樣（1/%s）',
      'All Samples' => '所有樣本',
      'Parent Calls' => '父呼叫',
      'Wall Time (Inclusive)' => '經過時間（包含）',
      'Symbol' => '符號',
      'Wall Time (Exclusive)' => '經過時間（排除）',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => '此功能與所有子項所花費的總經過時間（子項是在呼叫此時，執行期間的其它功能）。',
      '%s μs' => '%s 微秒',
      'Unnamed Sample' => '未命名樣本',
      '%s Profile' => '%s分析',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => '此功能花費的經過時間，有將子項所花費的時間給排除（子項是在呼叫此時，執行期間的其它功能）。',
      'Manual Run' => '手動運行',
      'Drag and drop .xhprof files to import them.' => '拖放 .xhprof 檔案來匯入它們。',
      'PHP Profiling Tool' => 'PHP 性能分析工具',
      'Metrics for this Call' => '此呼叫的測量',
      'Failed to unserialize XHProf profile!' => '反序列化 XHProf 分析失敗！',
      'XHProf Profile' => 'XHProf 分析',
      'Drop .xhprof Files to Import' => '放入 .xhprof 檔案來匯入',
      'Wall Time' => '經過時間',
      'Download %s Profile' => '下載%s分析',
      'Child Calls' => '子呼叫',
    );
  }

}
