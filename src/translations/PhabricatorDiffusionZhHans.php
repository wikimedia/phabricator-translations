<?php

final class PhabricatorDiffusionZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Commit Actions' => '提交操作',
      'Invalid path URI.' => '无效的路径URI。',
      'No Short Name' => '没有简称',
      'Repositories: ...' => '存储库：...',
      'Browse External' => '浏览外部',
      'Reverted By' => '回退者',
      'Browse Branches' => '浏览分支',
      'VCS Password' => 'VCS密码',
      'Set VCS Password' => '设置VCS密码',
      'Remove VCS Password' => '移除VCS密码',
      'React to branches and tags being pushed to hosted repositories.
    Hook rules can block changes and send push summary mail.' => '对已推送到托管存储库的分支和标签做出反应。钩规则可以阻断更新，并发送推送摘要邮件。',
      'Confirm VCS Password' => '确认VCS密码',
      'New VCS Password' => '新VCS密码',
      'Your VCS password has been updated.' => '您的VCS密码已更新。',
      'Unknown SVN wire protocol structure \'%s\'!' => '未知SVN有线协议结构“%s”！',
      'Edit Commit: %s' => '编辑提交：%s',
      'React to commits being pushed to hosted repositories.
    Hook rules can block changes and send push summary mail.' => '对已推送到托管存储库的提交做出反应。钩规则可以阻断更新，并发送推送摘要邮件。',
      'Apply transactions to edit an existing commit. This method can not create new commits.' => '应用处理以编辑现有提交。此方法不能创建新提交。',
      'Block push with message' => '阻断推送并发送消息',
      'You can remove your VCS password, which will prevent your account from accessing repositories.' => '您可以删除您的VCS密码，这会使您的账号无法访问仓库。',
      'Push Log (Content)' => '推送日志（内容）',
      'Commit Date' => '发布日期',
      '%s Complete' => '%s完成',
      'Push Log (Ref)' => '推送日志（参考）',
      'Differential subscribers' => '微分订阅者',
      'You do not currently have a VCS password set. If you set one, you can remove it here later.' => '您当前没有设置VCS密码。如果之后您设置了，可以在此删除。',
      'Open File' => '打开文件',
      'Block push with message: %s' => '阻断推送并发送消息：%s',
      'Filter bundle does not affect Mercurial 2.6.2' => '过滤器包不影响水银2.6.2',
      'Remove Password' => '移除密码',
      'This external reference matches multiple known commits.' => '此外部参考匹配多个已知提交。',
      'Filter bundle2 from Mercurial 3.5.1' => '来自水银3.5.1的过滤器包2',
      'Filter' => '过滤器',
      'Invalid path ID!' => '无效路径ID！',
      'Edit commits.' => '编辑提交。',
      'Edit Commit' => '编辑提交',
    );
  }

}
