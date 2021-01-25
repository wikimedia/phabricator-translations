<?php

final class PhabricatorMultimeterZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Samples' => '示例',
      'Subprocesses' => '子进程',
      '(All)' => '（全部）',
      'Samples (%s - %s)' => '例子（%s - %s）',
      'By ID' => '按ID',
      'Epoch' => '时期',
      'Performance Sampler' => '性能采样器',
      'Rate' => '速率',
      '%s Req' => '%s 所需',
      'Multimeter User Guide' => '万用表用户指南',
      '%s Unit(s)' => '%s 个单元',
      'By Request' => '按请求',
      'By Host' => '按主机',
      'Trying to unpause an active multimeter!' => '正试图恢复一个已暂停的活跃的万用表！',
      'Web Request' => '网络请求',
      'By Context' => '按上下文',
      'Avg' => '平均',
      'By Label' => '按标签',
      'Multimeter' => '万用表',
      'Viewer' => '查看器',
      '%s Event(s)' => '%s 个事件',
      'Static Resource' => '静态资源',
      'Multimeter Events' => '万用表事件',
      'By Viewer' => '按查看器',
    );
  }

}
