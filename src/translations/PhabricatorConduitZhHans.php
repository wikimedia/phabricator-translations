<?php

final class PhabricatorConduitZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Support for ConduitResultInterface' => 'Conduit结果界面的支持',
      'Conduit Logs' => 'Conduit日志',
      'Session key is invalid.' => '会话键无效。',
      'arc call-conduit' => 'arc调用-conduit',
      'JSON' => 'JSON',
      'All Methods' => '所有方法',
      'API Method: %s' => 'API方法：%s',
      'cURL' => 'cURL',
      'Human Readable' => '人类可读',
      'Unstable Methods' => '不稳定方法',
      'All Call Logs' => '所有调用日志',
      'List of integers.' => '整数列表。',
      'Standard API Token' => '标准API令牌',
      'My Calls' => '我的调用',
      'Call' => '调用',
      'Conduit' => 'Conduit',
      'Method Parameters' => '方法参数',
      'Caller' => '调用者',
      'Certificate Token' => '证书令牌',
      'Invalid JSON input.' => '无效JSON输入。',
      'Certificate Install Token' => '证书安装令牌',
      '<parameters>' => '<参数>',
      '<api-token>' => '<api-令牌>',
      'List of user PHIDs.' => '用户PHID的列表。',
      'List of PHIDs.' => 'PHID的列表。',
      'Conduit Methods' => 'Conduit方法',
      'List of project tags.' => '项目标签列表。',
      'A PHID.' => '一个PHID。',
      'List of strings.' => '字符串列表。',
      'The key which signed this request is associated with a disabled device ("%s").' => '给该请求签名的钥匙与以一个被禁用的设备("%s")有关',
      'Stable Methods' => '稳定方法',
      'Stability' => '稳定性',
      'Call Logs' => '调用日志',
      'Errors' => '错误',
      'User PHID.' => '用户PHID。',
      'List of project PHIDs.' => '项目PHID列表。',
    );
  }

}
