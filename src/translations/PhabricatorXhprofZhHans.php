<?php

final class PhabricatorXhprofZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf样品',
      'Sampled (1/%d)' => '样品(1/%s)',
      'All Samples' => '所有的样品',
      'Parent Calls' => '父调用',
      'Wall Time (Inclusive)' => '隔离墙时间（含）',
      'Symbol' => '符号',
      'Wall Time (Exclusive)' => '挂钟时间（排外）',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => '在此函数及其所有子函数中，总计的挂钟时间花销（子函数是当执行此函数时，同时调用的其他函数）。',
      '%s μs' => '%s微妙',
      'Unnamed Sample' => '未命名示例',
      '%s Profile' => '%s配置文件',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => '花费在这个函数中的时间，不包括在儿童身上花费的时间（儿童是执行时调用的其他函数）。',
      'Manual Run' => '手动运行',
      'Drag and drop .xhprof files to import them.' => '拖动和拖放。xhprof文件导入。',
      'PHP Profiling Tool' => 'PHP性能分析工具',
      'Metrics for this Call' => '此调用的度量',
      'Failed to unserialize XHProf profile!' => '未能序列化xhprof简介！',
      'XHProf Profile' => 'XHProf详情',
      'Drop .xhprof Files to Import' => '拖放.xhprof文件以导入',
      'Wall Time' => '隔离墙时间',
      'Download %s Profile' => '下载%s配置文件',
      'Child Calls' => '子调用',
    );
  }

}
