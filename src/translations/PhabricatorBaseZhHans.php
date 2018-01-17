<?php

final class PhabricatorBaseZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => '没有应用“%s”！',
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
      'Developer Tools' => '开发者工具',
      'This application is required for Phabricator to operate, so all users must have access to it.' => '需要此应用以操作Phabricator，所以所有用户必须都能访问它。',
      'Expect user \'%s\' to be denied access to \'%s\'.' => '预期拒绝用户“%s”对“%s”的访问。',
      'Admin Required' => '需要管理员',
      'Allow Disabled' => '允许禁用',
    );
  }

}
