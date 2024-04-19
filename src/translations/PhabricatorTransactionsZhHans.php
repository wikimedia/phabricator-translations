<?php

final class PhabricatorTransactionsZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => '锁定/隐藏字段',
      'Unmark as "Edit" Form' => '取消标记为“编辑”表单',
      'Transactions have no effect:' => '交易无效果：',
      'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => '为回应 "transaction.search", 被选择的物品 (of type "%s") 不能实施 "%s", 所以交易不能为此加载。',
      'Builtin Form "%s"' => '内置表单“%s”',
      '%s added a comment.' => '%s添加了一段评论。',
      'Empty Comment' => '空评论',
      'All users are already subscribed to this %s.' => '所有用户已订阅此%s。',
      'No object exists with PHID "%s".' => '不存在PHID为“%s”的对象。',
      'Edit Form Defaults' => '编辑表单默认值',
      'The %s action(s) you are taking have no effect:' => '您进行的%s次操作没有影响：',
      '%s removed %s subscriber(s) for %s: %s.' => '%s移除了%3$s的%2$s个订阅者：%s。',
      'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier"' => '为回应"transaction.search" 必须声明是 "objectType" 或 "objectIdentifier"',
      'In %s, %s wrote:' => '在%s中，%s写道：',
      'Mark as Edit Form' => '标记为编辑表单',
      '%s marked %s inline comment(s) as done.' => '%s将%s个行内注释标记为完成。',
      'Email Body Text' => '电子邮件正文',
      'Optional instructions, shown above the form.' => '可选指示，在表单上方显示。',
      '%s changed the visibility for %s.' => '%s更改了%s的可见性。',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s编辑了订阅者，添加了%s：%s；移除了%s：%s。',
      'Form Disabled' => '来自被禁用的',
      '%s marked %s inline comment(s) as not done.' => '%s将%s个行内注释标记为未完成。',
      'Primary Fields' => '基本字符',
      'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => '拖放字段以更改排序，这会出现在应用的“创建”菜单中。',
      '🔒 Locked' => '🔒已锁定',
      'This job is already configured to run silently.' => '此作业已被配置为无声运行。',
      'Browse Forms' => '浏览表单',
      'Query does not match any objects you have permission to edit.' => '查询与您有编辑权限的对象不匹配。',
      'Read transactions and comments for a particular object or an entire object type.' => '阅读某个特定的物体或者整个物体种类的交易和评论。',
      '%s rescinded a token.' => '%s取消了一个令牌。',
      '%s awarded a token.' => '%s授予了一个令牌。',
      'Edit Form %d: %s' => '编辑表单%s：%s',
      '%s removed %d subscriber(s): %s.' => '%s移除了%s个订阅者：%s。',
      'Not an Edit Form' => '不是编辑表单',
      'Mark Form' => '标记表单',
      'After running this command, reload this page to see the new setting.' => '运行此命令后，重新加载此页以查看新设置。',
      'Save Defaults' => '保存默认值',
      'Mention In' => '提及于',
      'Disable this form? Users will no longer be able to use it.' => '禁用此表单么？用户将无法再使用它。',
      'Support Applications' => '支持应用程序',
      'Via Content Source' => '通过内容源',
      'Really remove this comment?' => '真的要移除此评论么？',
      'Forms' => '词形',
      'Mention' => '提及',
      'export' => '出口',
      'Post Comment' => '发布评论',
      'View Herald Transcript' => '查看传令抄本',
      'You can not select this %s policy, because you would no longer be able to %s the object.' => '您不能选择此%s方针，因为您将再也无法%s对象。',
      '%s created %s in the %s space.' => '%s在%3$s空间中创建了%2$s。',
      '%s added this form to the "Create" menu.' => '%s将此表单添加至“创建”菜单。',
      'No Edit Forms' => '没有编辑表单',
      '%s added %s unsubscriber(s) for %s: %s.' => '%s为%3$s添加了%2$s个订阅者：%s。',
      'Calls to "transaction.search" must not specify both an "objectType" and an "objectIdentifier".' => '为回应"transaction.search" 必须不能同时声明是 "objectType" 和 "objectIdentifier"',
      'Edit Defaults' => '编辑默认值',
      'EMAIL PREFERENCES' => '电子邮件参数设置',
      '%s edited this object (transaction type "%s").' => '%s编辑了此对象（交易类型“%s”）。',
      'Mark as "Edit" Form' => '标记为“编辑”表单',
      '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s编辑了%s的监视者，添加了%s：%s；移除了%s：%s。',
      'You do not have permission to configure forms for this application.' => '您没有权限配置此应用的表单。',
      '%s disabled this form.' => '%s禁用了此表单。',
      '%s added %d subscriber(s): %s.' => '%s添加了%s个订阅者：%s。',
      'In call to "transaction.search", specified "objectIdentifier" ("%s") does not exist.' => '为了回应“transaction.search”, 指出”物体寻找器”（“%s”）并不存在。',
      'Show Only Create Forms' => '只显示创建表单',
      'Changed Subscribers' => '已更改订阅者',
      'Raw Comment' => '原始评论',
      'Save Create Order' => '保存创建排序',
      '%s updated subscribers of %s.' => '%s更新了%s的订阅者。',
      'Edit Form' => '编辑表单',
      '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s编辑了%s的贡献者，添加了%s：%s；移除了%s：%s。',
      'This transaction is supposed to have an %s set, but it does not!' => '此次交易应具有%s设置，但它没有！',
      'Untitled Form' => '无标题表单',
      '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s编辑了%s的订阅者，添加了%s：%s；移除了%s：%s。',
      'Validation errors:' => '确认错误：',
      'Mentioned User' => '提及用户',
      'List of PHIDs to set.' => '要设置的PHID列表。',
      '%s added %s unsubscriber(s): %s.' => '%s添加了%s个订阅者：%s。',
      '%s moved this task from %s to %s on the %s board.' => '%s在%4$s版块上，将此任务从%2$s移动到%3$s。',
      'List of PHIDs to remove.' => '要移除的PHID列表。',
      'Create New Form' => '创建新表单',
      'Transaction requires handles and it did not load them.' => '交易要求处理，但它并未加载它们。',
      '(Show Details)' => '（显示详情）',
      '%s edited this %s.' => '%s编辑了此%s。',
      'Apply remaining actions?' => '应用剩余的操作么？',
      'You can not post an empty comment.' => '您不能发布空评论。',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s编辑了订阅者，添加了%s：%s；移除了%s：%s。',
      '%s mentioned this in %s.' => '%s在%s提及了这个。',
      'Subtype configuration is invalid: it must be a list of subtype specifications.' => '子类型配置无效：它必须是子类型规格列表。',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => '参数“%s”必须包含交易描述列表，但关键字为“%s”的项目不是目录。',
      'Edit Comment' => '编辑评论',
      'Type a form name...' => '输入表单名称...',
      '%s updated subscribers...' => '%s更新了订阅者...',
      'Remove Comment' => '移除评论',
      'Make Builtin Editable' => '使内建函数可编辑',
      'Edit Forms' => '编辑表单',
      'Mark as Create Form' => '标记为“创建”表单',
      '%s added %s subscriber(s): %s.' => '%s添加了%s个订阅者：%s。',
      'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => '子类型“%s”无效：子类型关键字只可以包含小写拉丁字母（从“a”到“z”）。',
      'Capability not supported.' => '不支持性能。',
      'Change Form Subtype' => '更改表单子类型',
      '%s added %s contributor(s): %s.' => '%s添加了%s个贡献者：%s。',
      '%s added %s watcher(s): %s.' => '%s添加了%s个监视者：%s。',
      'Task has no object PHID!' => '任务没有对象PHID！',
      'Bulk Edit' => '批量编辑',
      'Mark as "Create" Form' => '标记为“创建”表单',
      'Failed to base64_decode() value for key "%s".' => '用于关键字“%s”的base64_decode()值失败。',
      '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => '%s将%s个行内注释标记为完成，并将%s个行内注释标记为未完成。',
      'All Forms' => '所有的窗体',
      'This %s already has that view policy.' => '此%s已经拥有该查看方针。',
      'In call to "transaction.search", specified "objectType" ("%s") is unknown. Valid object types are: %s.' => '为回应 "transaction.search", 声明 "objectType" ("%s") 是未知的. 有效物品种类为: %s.',
      '%s Action(s) Have No Effect' => '%s次操作没有影响',
      'None of the fields on this object support templating.' => '此对象上的字段均不支持制模。',
      'Capability not supported!' => '不支持性能！',
      'You can not apply transactions which already have commentVersions!' => '您不能在已经有评论版本的情况下申请交易！',
      '%s removed %s subscriber(s): %s.' => '%s移除了%s个订阅者：%s。',
      '%s changed the visibility from "%s" to "%s".' => '%s将可见性从“%s”更改为“%s”。',
    );
  }

}
