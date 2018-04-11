<?php

final class PhabricatorXhprofZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'XHProf Samples' => 'XHProf示例',
      'Sampled (1/%d)' => '已取样（1/%s）',
      'All Samples' => '所有示例',
      'Parent Calls' => '父调用',
      'Wall Time (Inclusive)' => '墙时间（包含）',
      'Symbol' => '符号',
      'Wall Time (Exclusive)' => '挂钟时间（排外）',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => '在此函数及其所有子函数中，总计的挂钟时间花销（子函数是当执行此函数时，同时调用的其他函数）。',
      '%s μs' => '%s微妙',
      'Unnamed Sample' => '未命名示例',
      '%s Profile' => '%s详情',
      'Wall time spent in this function, excluding time spent in children (children are other functions it called while executing).' => '此函数所花费的墙时间，除了子项上花费的时间（子项是执行时其调用的其他函数）。',
      'Manual Run' => '手动运行',
      'Drag and drop .xhprof files to import them.' => '拖放.xhprof文件以导入它们。',
      'PHP Profiling Tool' => 'PHP性能分析工具',
      'Metrics for this Call' => '此调用的度量',
      'Failed to unserialize XHProf profile!' => '取消序列化XHProf资料失败！',
      'XHProf Profile' => 'XHProf详情',
      'Drop .xhprof Files to Import' => '拖放.xhprof文件以导入',
      'Wall Time' => '墙时间',
      'Download %s Profile' => '下载%s个人资料',
      'Child Calls' => '子调用',
    );
  }

}
