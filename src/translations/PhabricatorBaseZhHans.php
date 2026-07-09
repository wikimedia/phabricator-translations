<?php

final class PhabricatorBaseZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
  'No application \'%s\'!' => '没有应用“%s”！',
  'This application is required, so all users must have access to it.' => '此应用程序是必需的，因此所有用户都必须拥有访问权限。',
  'Can Configure Application' => '可以配置应用',
  'Can Use Application' => '可以使用应用',
  'Core Applications' => '核心应用',
  'No application!' => '没有应用！',
  '%s Application' => '%s应用',
  'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '请求包含受限参数“%s”，但此控制器（“%s”）未将其列入白名单。由于此请求可能涉及重定向攻击，因此拒绝处理。',
  'Unknown capability \'%s\'!' => '未知功能“%s”！',
  'Unable to find transaction query for object of class "%s".' => '找不到类为“%s”的对象的事务查询。',
);
  }

}
