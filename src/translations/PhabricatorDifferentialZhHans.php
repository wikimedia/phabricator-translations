<?php

final class PhabricatorDifferentialZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Review the diff for correctness. When you are satisfied, either **create a new revision** or **update an existing revision**.' => '复核修订以核实其正确性。当您满意时，可**创建新修订**或**更新现有修订**。',
      'New repository.' => '新存储库。',
      'Show File Contents' => '显示文件内容',
      '%s summarized this revision.' => '%s为此修订提供了摘要。',
      'Invalid revision ID "%s".' => '无效的修订ID“%s”。',
      'New reviewers.' => '新的修订者。',
      'Base' => '基础',
      '%s (Diff %d)' => '%s（差异%s）',
      'Edit Child Revisions' => '编辑子修订',
      '(%d more files...)' => '（%s个更多文件...）',
      '%s (bookmark)' => '%s（书签）',
      'Lint Warnings' => 'Lint警告',
      'File Size' => '文件大小',
      'Changes Planned' => '更改已计划',
      'Copied Here' => '复制至此',
      'New Diff' => '新差异',
      'Display project reviewers.' => '显示项目审阅者。',
      'Modified' => '已修改',
      'Closed by commit %s (authored by %s, committed by %s).' => '由提交%s关闭（作者%s，提交者%s）。',
      'Revision Has Child' => '修订有子',
      'This is an image.' => '这是一个图片。',
      'CHANGE DETAILS' => '更改详情',
      'Needs Revision' => '需要修订',
      'Planned Changes' => '计划的更改',
      'Not Linked' => '未链接',
      'Blocking: ...' => '正在阻断：...',
      'Unified' => '已统一',
      'Unsaved' => '未保存',
      'Create Revision' => '创建修订',
      'Diff %s' => '差异%s',
      '%s ERROR(S)' => '%s个错误',
      'This revision will be submitted to reviewers for feedback.' => '此修订版本将会提交给审查员以供反馈。',
      'Hide "Done" Inlines' => '隐藏行内的“完成”',
      'Added file content' => '已添加文件内容',
      'Must Review' => '必须复核',
      'Unknown revision status filter constant "%s".' => '未知修订状态过滤器常量“%s”。',
      'Unknown change filter \'%s\'.' => '未知的更改过滤器“%s”。',
      '%s edited commit(s), added %s: %s; removed %s: %s.' => '%s编辑了提交，添加了%s个：%s；移除了%s个：%s。',
      'Block diff with message: %s' => '阻断差异并发送消息：%s',
      'Block diff with message' => '阻断差异并发送消息',
      '%s closed %s by committing %s (authored by %s).' => '%s通过提交%3$s关闭了%2$s（作者%s）。',
      'Closed by commit %s (authored by %s).' => '由提交%s关闭（作者%s）。',
      '▲ Show %s Line(s)' => '▲显示%s行',
      'Mark or unmark selected inline comment as done.' => '标记选定行内注释为已完成，或取消标记。',
      'Stack (%s Open)' => '堆叠（%s个开放）',
      'Blocked diff.' => '阻断的差异。',
      '%s edited commit(s) for %s, added %s: %s; removed %s: %s.' => '%s编辑了%s的提交，添加了%s个：%s；移除了%s个：%s。',
      'You must select a comment to mark done.' => '您必须选择要标记完成的注释。',
      '%s closed %s by committing %s.' => '%s通过提交%3$s关闭了%2$s。',
    );
  }

}
