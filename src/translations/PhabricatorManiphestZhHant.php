<?php

final class PhabricatorManiphestZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => '建立工單',
      'Triage' => '分級',
      'Define task subtypes.' => '定義工單子類型。',
      'Priority of the task.' => '工單的優先層級。',
      'Weigh In' => '秤秤斤兩',
      'Task Fields' => '工單欄位',
      'Assignee' => '受託人',
      'Update an existing Maniphest task.' => '更新現有的 Maniphest 工單。',
      'A task\'s subscribers change.' => '工單的訂閱者變更。',
      '%s claimed %s.' => '%s已認領%s。',
      'TASK DETAIL' => '工單詳細資訊',
      'Search Subtasks' => '搜尋子工單',
      'Merged' => '已合併',
      'New task name.' => '新工單名稱。',
      'Tasks must have a title.' => '工單必須要有標題。',
      'Subtasks' => '子工單',
      '○ %s' => '○ %s',
      'Update the task description.' => '更新工單描述。',
      'Needs Triage' => '待分級',
      'Recently Closed' => '近期關閉',
      '%s updated the task description for %s.' => '%s更新了%s的工單描述。',
      '[Maniphest]' => '[Maniphest]',
      'Task Has Revision' => '工單包含修訂',
      'Unbreak Now!' => '立即解決！',
      'Configure the cutoff for the "Recently Closed" column.' => '設定 "最近完成" 欄位的截止時間。',
      'Open Subtasks' => '開啟子工單',
      'Assign a task to a specific user.' => '分派工單給指定的使用者。',
      'No tasks found.' => '查無工單。',
      'Can Bulk Edit Tasks' => '可批次編輯工單',
      'Current task owner, if task is assigned.' => '目前的工單擁有者，若工單已被分派。',
      'Default view policy for newly created tasks.' => '新建立的工單的預設檢視原則。',
      'New task description.' => '新工單描述。',
      'Subtask' => '子工單',
      'The task description.' => '工單描述。',
      'Edit Subtasks' => '編輯子工單',
      'Tasks to Close and Merge' => '要關閉並合併的工單',
      '%s updated the task description.' => '%s更新了工單描述。',
      'Subtasks.' => '子工單。',
      'Search...' => '搜尋…',
      'Close As Duplicate' => '作為重複項關閉',
      'Block' => '封鎖',
      'Claimed' => '已認領',
      'Mentions' => '提及',
      'Select All' => '全選',
      'Duplicates' => '重複項',
      'No tasks.' => '沒有工單。',
      'Priorities' => '優先層級',
      'Task description.' => '工單描述。',
      'TASK DESCRIPTION' => '工單描述',
      '● %s' => '● %s',
      'Rename the task.' => '重新命名工單。',
      'Someone comments on a task.' => '有人在工單上留言。',
      'Subscribed' => '已訂閱',
      'Create New Task' => '建立新工單',
      'Page Size' => '頁面大小',
      'Name of the task.' => '工單名稱。',
      'Tasks and Bugs' => '工單與程式錯誤',
    );
  }

}
