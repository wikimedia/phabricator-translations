<?php

final class PhabricatorXhprofZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Parent Calls' => '父调用',
      'Total wall time spent in this function and all of its children (children are other functions it called while executing).' => '在此函数及其所有子函数中，总计的挂钟时间花销（子函数是当执行此函数时，同时调用的其他函数）。',
      '%s μs' => '%s微妙',
      'Unnamed Sample' => '未命名示例',
      'PHP Profiling Tool' => 'PHP性能分析工具',
      'Metrics for this Call' => '此调用的度量',
      'XHProf Profile' => 'XHProf详情',
      'Drop .xhprof Files to Import' => '拖放.xhprof文件以导入',
      'Child Calls' => '子调用',
    );
  }

}
