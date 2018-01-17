<?php

final class PhabricatorAphlictZhhans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zhhans';
  }

  protected function getTranslations() {
    return array(
      'The notification server should not be run as root.' => '通知服务器不应运行为根服务器。',
      'Failed to %s!' => '无法%s！',
      'Stop the notification server.' => '停止通知服务器。',
      'Aphlict is not running.' => 'Aphlict未在运行。',
      'You must %s first!' => '您必须先%s！',
      'Sending %s a SIGKILL.' => '发送%s一个SIGKILL信号。',
      'Launching server:' => '发布服务器：',
      'Server exited!' => '服务器已退出！',
      'Start the notifications server.' => '开始通知服务器。',
      'Stop, then start the notification server.' => '停止并重启通知服务器。',
      'Writing logs to: %s' => '写入日志至：%s',
      'Aphlict Server (%s) exited normally.' => 'Aphlict服务器（%s）已手动退出。',
      'Reading configuration from: %s' => '正在从%s读取配置',
      'Aphlict Server started.' => '已启动Aphlict服务器。',
      'Stopping Aphlict Server (%s)...' => '正在停止Aphlict服务器（%s）...',
      'Aphlict (%s) is running.' => 'Aphlict（%s）正在运行。',
    );
  }

}
