<?php

final class PhabricatorDaemonZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Temporary Failures' => '临时失败',
      'Clock' => '时钟',
      'Leased' => '专线',
      'Starting daemons as %s' => '开始守护进程作为%s',
      'Retries' => '重试',
      'Running as' => '运行为',
      'Archived Tasks' => '已存档任务',
      'All Daemons' => '所有守护进程',
      'Failures' => '失败',
      'Active Daemons' => '激活守护进程',
      'Daemon' => '守护进程',
      'Daemon Logs' => '守护进程日志',
      'Not Completed' => '未完成',
      'Exited' => '已退出',
      'Daemon Log' => '守护进程日志',
    );
  }

}
