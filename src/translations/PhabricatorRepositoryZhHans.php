<?php

final class PhabricatorRepositoryZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Repository "%s" is a non-hosted Subversion repository, which does not require a local working copy to be pulled.' => '存储库“%s”是一个未托管的Subversion存储库，这时不需要拉取本地工作拷贝。',
      'Push Event' => '推送活动',
      'Unknown VCS \'%s\'!' => '未知VCS“%s”！',
      'branch' => '分支',
      'bookmark:' => '书签：',
      'The callsign "%s" is not a valid repository callsign. Callsigns may only contain UPPERCASE letters.' => '呼号“%s”不是有效的存储库呼号。呼号只可以包含大写字母。',
      'TAGS' => '标签',
      'Push Log %d' => '推送日志%s',
      'MERGED COMMITS' => '合并的提交',
      '%s ♻ %s' => '%s ♻ %s',
      'Query took %s ms.' => '查询花费%s毫秒。',
      '%s enabled this URI.' => '%s启用了此URI。',
      'Updated hint for "%s".' => '已更新“%s”的提示。',
      '(%s) %s' => '（%s）%s',
      'Applied changes.' => '已应用更改。',
      '<%s: %s>' => '<%s：%s>',
      'dangerous change' => '危险更改',
      'Merged Commits' => '合并的提交',
      'No I/O' => '不是I/O',
      'tag' => '标签',
      'Push Log' => '推送日志',
      'The commit identifier.' => '提交标识符。',
      'Rewrite' => '重写',
      'DATA AT RISK' => '处于危险的数据',
      'Diffusion Commit' => '扩散提交',
      'Move' => '移动',
      '%s Commit(s)' => '%s次提交',
      'Unknown SVN file kind \'%s\'.' => '未知的SVN文件类型“%s”。',
      'All Repositories' => '所有存储库',
      'The Almanac service for this repository is not bound to any active interfaces.' => 'Almanac服务对这个知识库没有任何活跃交互端的绑定。',
      'DETAILS' => '详细信息',
      'Ref Name' => '参考资料名称',
      'Create Git Repository' => '创建Git存储库',
      'Create a new Git repository.' => '创建新的Git存储库。',
      'Do not pull __repository__.' => '不要提送__存储库__。',
      'Must be used with __%s__, this will exclude commits which are earlier than __date__.
    Valid examples:
      \'today\', \'today 2pm\', \'-1 hour\', \'-2 hours\', \'-24 hours\',
      \'yesterday\', \'today -1 day\', \'yesterday 2pm\', \'2pm -1 day\',
      \'last Monday\', \'last Monday 14:00\', \'last Monday 2pm\',
      \'31 March 2013\', \'31 Mar\', \'03/31\', \'03/31/2013\',
    See __%s__ for more.' => '必须与__%s__一起使用，这将排除早于__某日期__的提交。
    有效示例：
      \'today\', \'today 2pm\', \'-1 hour\', \'-2 hours\', \'-24 hours\',
      \'yesterday\', \'today -1 day\', \'yesterday 2pm\', \'2pm -1 day\',
      \'last Monday\', \'last Monday 14:00\', \'last Monday 2pm\',
      \'31 March 2013\', \'31 Mar\', \'03/31\', \'03/31/2013\',
    参见__%s__获取更多详情。',
      'Observe' => '观察',
      'The VCS this repository uses ("git", "hg" or "svn").' => '此存储库使用的VCS（“git”、“hg”或“svn”）。',
      'Query repositories.' => '查询存储库。',
      'List repository local paths.' => '列举存储库本地路径。',
      'tag:' => '标签：',
      '[Push]' => '[推送]',
      'BRANCHES' => '分支',
      'Expected %s or %s, got %s.' => '预期为%s或%s，获得%s。',
      'The raw, default, and effective Display Type settings.' => '原始、默认并有效的显示类型设置。',
      'Src' => 'Src',
    );
  }

}
