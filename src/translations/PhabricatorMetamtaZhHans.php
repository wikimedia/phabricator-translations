<?php

final class PhabricatorMetamtaZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Forced Mail' => '强制邮件',
      'MetaMTA Mails' => '元MTA邮件',
      'ID: %d' => 'ID：%s',
      'Message PHID' => '消息PHID',
      'Inbox' => '收件箱',
      'Browse Subscribers' => '浏览订阅者',
    );
  }

}
