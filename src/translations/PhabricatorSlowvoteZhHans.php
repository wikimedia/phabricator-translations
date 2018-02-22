<?php

final class PhabricatorSlowvoteZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Close Poll' => '关闭调查',
      'Create a Poll' => '创建调查',
      'Create Slowvote' => '创建慢速投票',
      'Polls must have a question.' => '调查必须有一个问题。',
      'Conduct Polls' => '进行调查',
      'Slowvote' => '慢速投票',
      'CHANGES TO POLL DESCRIPTION' => '对调查描述的更改',
      'Show choices in random order.' => '以随机排序显示选择。',
      '%s reopened this poll.' => '%s重启了此调查。',
      'Reopen' => '重启',
      'Slowvote Poll' => '慢速投票调查',
      'SLOWVOTE DESCRIPTION' => '慢速投票描述',
      'Are you sure you want to close the poll?' => '您确定要关闭调查么？',
      '%s changed who can see the responses of %s.' => '%s更改了可以查看%s响应的人。',
      'Someone votes on a poll.' => '有人在调查中投票。',
      'Create Poll' => '创建调查',
      'Plurality (Single Choice)' => '多数（单一选择）',
    );
  }

}
