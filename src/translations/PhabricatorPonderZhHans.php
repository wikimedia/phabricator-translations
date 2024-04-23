<?php

final class PhabricatorPonderZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Create New Question' => '创建新问题',
      '%s marked this answer as visible.' => '%s标记此答案为可见。',
      'Answer Summary' => '答案摘要',
      'Hide Comments' => '隐藏评论',
      '%s added an answer.' => '%s添加了一个答案。',
      'This question is invalid.' => '此问题无效。',
      'CHANGES TO ANSWER DETAILS' => '对答案详情的更改',
      '%s Answer(s)' => '%s个问题',
      'Ask a Question' => '提问问题',
      'QUESTION DETAIL' => '问题详情',
      'Open Questions' => '开放问题',
      'Obsolete' => '已过期',
      'Close Question' => '关闭问题',
      'Status of the question.' => '问题状态。',
      'Empty Answer' => '空答案',
      '%s updated the answer wiki.' => '%s更新了答案wiki。',
      'Answer Comment' => '答案评论',
      'You have already answered this question. You can not answer twice, but you can edit your existing answer.' => '您已回答过此问题。虽然你不能回答第二次,但您可以编辑您现有的回答。',
    );
  }

}
