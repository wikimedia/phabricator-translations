<?php

final class PhabricatorBaseZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '没有应用“%s”！',
      'This application is required, so all users must have access to it.' => '此应用程序是必需的，因此所有用户都必须有权访问它。',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => '预期允许用户“%s”对“%s”的访问。',
      'Can Configure Application' => '可以配置应用',
      'Can Use Application' => '可以使用应用',
      'Application Controller' => '应用控制器',
      'Public + configured' => '公开+已配置',
      'Public Access' => '公开访问',
      'Core Applications' => '核心应用',
      'No Login Required' => '无需登录',
      'No application!' => '没有应用！',
      '%s Application' => '%s应用',
      'Email Verification Required' => '需要电子邮件确认',
      'Application Controller, No Login Required' => '应用程序控制器，不需要登录',
      'Developer Tools' => '开发者工具',
      'Expect user \'%s\' to be denied access to \'%s\'.' => '预期拒绝用户“%s”对“%s”的访问。',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => '请求包含受限参数“%s”，但此控制器（“%s”）未将其列入白名单。拒绝提供此请求，因为它可能是重定向攻击的一部分。',
      'Unknown capability \'%s\'!' => '未知的能力 “%s”！',
      'Admin Required' => '需要管理员',
      'Email Verification Required, With Exception' => '需要电子邮件验证，异常为',
      'Allow Disabled' => '允许禁用',
      'Unable to find transaction query for object of class "%s".' => '无法找到“%s”类对象的事务查询。',
    );
  }

}
