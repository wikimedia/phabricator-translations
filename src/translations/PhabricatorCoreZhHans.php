<?php

final class PhabricatorCoreZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Question' => '问题',
      'No repository "%s" exists!' => '不存在存储库“%s”！',
      'Save Related Commits' => '保存相关提交',
      '%s edited %s.' => '%s编辑了%s。',
      'View \'%s\' does not support children.' => '视图“%s”不支持子视图。',
      'Move Document' => '移动文档',
      'Maximum must be larger than minimum.' => '最大值必须大于最小值。',
      'User "%s" is not a valid user.' => '用户“%s”不是一个有效的用户。',
      'Authored' => '创作的',
      'No config value specified for key \'%s\'.' => '没有为密钥指定配置值\'%s\'。',
      'Creators' => '创建者',
      'An absolute date, as a string.' => '绝对日期，字符串形式。',
      'Your browser timezone setting differs from the timezone setting in your profile, click to reconcile.' => '您的浏览器时区设置不同于您的档案设置，点击重统一设置。',
      'Minus' => '减去',
      'OPTIMIZE' => '最优化',
      'Capability "%s"' => '性能“%s”',
      'Browse Viewer' => '浏览查看器',
      'Show patch application status.' => '显示补丁应用状态。',
      'Acquired' => '已获得的',
      'Raised Concern' => '已提高关心',
      '%s \'%s\' has a patch \'%s\' which duplicates an existing patch key.' => '%s \'%s\'有一个补丁\'%s\'，复制现有的补丁密钥。',
      'Create Document' => '创建文档',
      'Iterated MD5' => '重复的MD5',
      'Confirm' => '确认',
      'Commented On' => '评论于',
      '%s added %s task(s): %s.' => '%s添加了%s个任务：%s。',
      'Search for namespaces by name substring.' => '按名称子字符串搜索名称空间。',
      'XHProf' => 'XHProf',
      'Unsupported action "%s".' => '不支持动作"%s"。',
      'Reopened' => '已重启',
      '%s Before' => '%s之前',
      'Untitled Document' => '无标题文档',
      'Worker has invalid actor PHID ("%s").' => '工作者有无效的操作者 PHID (“%s”)。',
      'MFA Authenticated' => 'MFA 已认证',
      'Browse Documents' => '浏览文档',
      'Lisk process isolation level was reduced below 0.' => 'Lisk进程隔离级别降至0以下。',
      'Favorites' => '喜爱',
      'italic text' => '斜体文本',
      'Custom' => '自定义',
      '%s (Preview)' => '%s（预览）',
      'Stopped on Redirect' => '在重定向处停止',
      'Tasks' => '任务',
      'You are trying to save some data to permanent storage, but the request your browser made included an incorrect token. Reload the page and try again. You may need to clear your cookies.' => '您正在试图保存一些数据到永久存储中，但是您的浏览器构造的请求包含一个不正确的令牌。重新加载页面并重试。您也许需要清空您的 Cookie。',
      'Repository URI' => '仓库 URI',
      '%s MB' => '%sMB',
      'Inactive' => '不活跃',
      'View Email Body' => '查看邮件正文',
      'Email Addresses' => '电子邮件地址',
      'Email Address' => '电子邮件地址',
      'Orange' => '橙色',
      'Failed' => '失败',
      'Upload Picture' => '上传图片',
      'Find results with any closed status.' => '查找任何已关闭状态的结果。',
      'Packages' => '程序包',
      'Save Related Revisions' => '保存相关修订',
      'Assigned to Me' => '分配给我',
      'Bad setter call: %s' => '坏的设置器调用：%s',
      'You are taking an action which requires you to enter high security.' => '您正在执行一个需要您进入高安全的操作。',
      'Failed to make some schema adjustments, detailed above.' => '无法进行一些架构调整，详见上文。',
      'Author: %s' => '作者：%s',
      'Revoke' => '撤销',
      'An epoch timestamp, as an integer.' => '纪元时间戳，整数形式。',
      '%s is already archived, and can not be cancelled.' => '%s已存档，无法取消。',
      'Exporting Data...' => '正在导出数据...',
      'Administrators' => '管理员',
      'Search cluster has no hosts for role "%s".' => '搜索群集没有用于角色的主机"%s"。',
      'Edge object query must be executed with a nonempty list of source PHIDs.' => '必须使用非空的源PHID列表执行边缘对象查询。',
      'Give Token' => '提供令牌',
      'Overview' => '概述',
      'Example' => '示例',
      '%s added inline comments to %s.' => '%s为%s添加了行内评论。',
      'Refusing to redirect to local resource "%s". The URI has a domain, but the redirect is not marked external. Mark redirects as external to allow redirection off the local domain.' => '拒绝重定向到本地资源“%s”。URI具有域，但重定向未标记为外部。标记重定向为外部以允许重定向离开本地域。',
      'NULL value "%s" is invalid. Valid values are "head" and "tail".' => '空值“%s”无效。有效值为“标头”和“结尾”。',
      'Mailer cluster configuration is not valid: it should be a list of mailer configurations.' => '邮件程序集群配置无效：应该是一个邮件寄送者配置列表。',
      'MODIFIED' => '已修改',
      'Maximum tick window must not be smaller than minimum tick window.' => '最大时钟窗口不得小于最小时钟窗口。',
      '(Use Default)' => '(使用默认值)',
      'Unknown Error' => '未知错误',
      'Current Tasks' => '当前任务',
      'Summary' => '摘要',
      '(%s -> %s @ %s) %s' => '(%s -> %s @ %s) %s',
      'OLD MySQL VERSION' => '旧的MySQL版本',
      'Custom Fields' => '自定义字段',
      'Comment' => '评论',
      'Create a Task' => '创建任务',
      'Failure' => '失败',
      'Other Project...' => '其他项目...',
      'Mixture of hashtags and PHIDs.' => '唯一标签和 PHID 的混合。',
      'Tomorrow' => '明天',
      'Variable' => '变量',
      'Bold' => '粗体',
      'Commit' => '提交',
      'Analyzing tables...' => '正在分析表格…',
      'Active Repositories' => '活跃的仓库',
      '%s After' => '%s以后',
      'Expiration' => '截止日期',
      'Grey' => '灰色',
      'Color' => '颜色',
      'Order' => '排序',
      'Protocol' => '协议',
      'Administrator' => '管理员',
      'Worker has no task ID.' => '工作者没有任务 ID。',
      'Complete' => '完成',
      'Open Status' => '开放状态',
      'Visible' => '可见',
      'Enable' => '启用',
      '<Malformed> %s' => '<难看的>%s',
      'Up' => '上',
      '(Show All)' => '显示全部',
      'EXTRACT' => '提取',
      'Drafts' => '草稿',
      'Do not dump data in rebuildable index tables. This means backups are smaller and faster, but you will need to manually rebuild indexes after performing a restore.' => '不要将数据转储到可重建的索引表中。这意味着备份更小、更快，但您需要在执行还原后手动重建索引。',
      'Drydock' => '码头',
      'Wed' => '周三',
      'A relative date, as a string.' => '相对日期，字符串形式。',
      'Draft' => '草稿',
      'Today' => '今天',
      '%s checked %s.' => '%s检查了%s。',
      'REPOSITORY' => '存储库',
      'username' => '用户名',
      'Mon' => '周一',
      'Limit' => '限制',
      'Browse Statuses' => '浏览状态',
      'Metadata' => '元数据',
      'Current Viewer' => '当前查看器',
      'Show Older Changes' => '显示旧的更改',
      'Any Closed Status' => '任何关闭状态',
      '%s %s' => '%s %s',
      'Bug' => '错误',
      'Passed' => '已通过',
      'No notifications.' => '无通知。',
      'Parents' => '父',
      'Task %d failed!' => '任务%s失败！',
      'Object' => '对象',
      'No issues.' => '无问题。',
      'Read Only' => '只读',
      'File Name' => '文件名',
      'File' => '文件',
      'Badges' => '徽章',
      'Note' => '注意',
      'Apply __patch__ explicitly. This is an advanced feature for development and debugging; you should not normally use this flag. This skips adjustment.' => '明确地应用 __patch__。这是一个用于开发和调试的高级功能，通常不应该使用这个标志。这将跳过调整。',
      'Submit' => '提交',
      'Repository' => '存储库',
      'Empty' => '空',
      'Any' => '任意',
      'Edit Menu' => '编辑菜单',
      '%s' => '%s',
      'A file PHID.' => '文件 PHID。',
      'Yellow' => '黄色',
      'Welcome to %s' => '欢迎来到 %s',
      '· · ·' => '· · ·',
      '"%s"' => '“%s”',
      '-' => '-',
      'Any Value' => '任意值',
      'Write output directly to a file on disk.' => '直接把输出写到磁盘上的一个文件里。',
      'Can not get garbage epoch for a collector with an automatic collection policy.' => '不能为拥有自动收藏方针的收藏者获取垃圾时代。',
      'Default View Policy' => '默认查看方针',
      'Block in text did not match any block rule.' => '文本中的块并不匹配任何块规则。',
      'Tuesday' => '星期二',
      'Comma-separated list of PHIDs.' => '逗号分隔的PHID列表。',
      'Application Emails' => '应用邮件',
      'Normal' => '一般',
      'This error usually indicates that you need to "GRANT" the MySQL user additional permissions. See "GRANT" in the MySQL manual for help.' => '此错误通常表明您需要“授予”MySQL用户其他权限。有关帮助，请参见MySQL手册中的“GRANT”。',
      'Log Out' => '注销',
      'WMF Debug: rPHABdbc2ad3debdf1189cd93286ffad7861392c5c775' => 'WMF调试：rPHABdbc2ad3debdf1189cd93286ffad7861392c5c775',
      'Where' => '位置',
      'Edit' => '编辑',
      'Create Subtask' => '创建子任务',
      'Yes' => '是',
      'CANCELLED' => '已取消',
      'Description' => '描述',
      'Wednesday' => '星期三',
      'Refusing to proxy a request to IP address ("%s") which is not in the cluster address block (this address was derived by resolving the domain "%s").' => '拒绝代理对IP地址（“%s”）的请求，它并不在地址块集群中（此地址通过解决域名“%s”衍生）。',
      '%s Query: %s' => '%s查询：%s',
      'Archived or active status.' => '已存档或仍处于活跃状态。',
      '?' => '？',
      'TOTAL' => '总计',
      'Author' => '作者',
      'Accepted' => '已接受',
      'Analysis' => '分析',
      'Analyzed %d table(s).' => '分析了 %s 个表格。',
      'Edit Related Tasks' => '编辑相关任务',
      'Assigned: %s' => '已分配：%s',
      '...' => '…',
      'Subscribers' => '订阅者',
      'With __--output__, overwrite the output file if it already exists.' => '使用 __--output__，如果输出文件已经存在，则重写该文件。',
      'Restarting' => '重新启动中',
      'Any Open Status' => '任何开放状态',
      'API Token' => 'API 令牌',
      'Commits' => '提交',
      'Thursday' => '星期四',
      'Applications' => '应用程序',
      'Real Name' => '真实姓名',
      'Cancel' => '取消',
      'You must choose a project.' => '您必须选择一个项目。',
      'Welcome to %s!' => '欢迎来到%s！',
      'Aborted workflow.' => '中止了的工作流。',
      'Not Done' => '未完成',
      'Default' => '默认',
      'Role list \'%s\' is not available!' => '角色列表“%s”不可用！',
      'No' => '否',
      'Unsubscribe' => '取消订阅',
      'Tags' => '标签',
      'Account' => '账号',
      'You must pass the user to %s.' => '您必须传递用户到 %s。',
      '[Diffusion]' => '[Diffusion]',
      'Assigned Tasks' => '分配的任务',
      'Author PHID' => '作者 PHID',
      'Priority' => '优先级',
      'You can only generate a new quickstart file if MySQL supports the %s character set (available in MySQL 5.5 and newer). The configured server does not support %s.' => '如果 MySQL 支持 %s 字符集(在 MySQL 5.5 及更新版本中可用)您只能生成新的快速入门文件。配置的服务器不支持 %s。',
      'Language' => '语言',
      'ID' => 'ID',
      'Translations' => '翻译',
      'To avoid this error, use %s to construct forms. If you are already using %s, make sure the form \'action\' uses a relative URI (i.e., begins with a \'%s\'). Forms using absolute URIs do not include CSRF tokens, to prevent leaking tokens to external sites.
    If this page performs writes which do not require CSRF protection (usually, filling caches or logging), you can use %s to temporarily bypass CSRF protection while writing. You should use this only for writes which can not be protected with normal CSRF mechanisms.
    Some UI elements (like %s) also have methods which will allow you to render links as forms (like %s).' => '要避免此错误，使用%s构造表单。如果您已经使用%s，请确保表单“操作”使用相对URI（即以“%s”开头的）。使用绝对URI的表单不包含CSRF令牌，以阻止泄露令牌给外部网站。
    如果此页面执行不需要CSRF保护的写入（通常为填充缓存或日志），您可以使用%s以在写入时临时跳过CSRF保护。您只应在写入不能通过一般CSRF机制保护时使用它。
    部分UI元素（例如%s）也拥有允许您渲染链接为表单的方法（例如%s）。',
      'ACCESS DENIED' => '拒绝访问',
      'Attached' => '附加的',
      'Monday' => '星期一',
      'No data.' => '无数据。',
      'Writes to search services failed while reindexing document "%s".' => '当重新索引文档“%s”时写入到搜索服务失败。',
      'Edited' => '已编辑',
      '403 Forbidden' => '403 禁止访问',
      'You are being rate limited.' => '您正在被限制频率。',
      'Your session is in high security mode. When you finish using it, click here to leave.' => '您的会话处于高安全模式。当您完成使用时，点击这里离开。',
      'Token' => '令牌',
      '(%s)' => '(%s)',
      'Cancelled' => '已取消',
      'Change Details' => '修改详情',
      '(via %s)' => '(通过 %s)',
      'Applied' => '已应用',
      'Query' => '查询',
      '(Any)' => '(任意)',
      'Show More' => '显示更多',
      'ARCHIVED' => '已存档',
      'Quote Comment' => '引用评论',
      'Total' => '总计',
      'Application' => '应用程序',
      '%s has invited you to join %s.' => '%s邀请您加入%s。',
      'Total Cost' => '总耗费',
      'Apply patch again?' => '再次应用补丁？',
      '%s removed %s revision(s): %s.' => '%s移除了%s个修订：%s。',
      'A boolean value (true or false).' => '布尔值(true 或 false)。',
      'Open Tasks' => '开放任务',
      'Search' => '搜索',
      'Send Email' => '发送电子邮件',
      'Applying schema adjustments...' => '应用模式调整…',
      'You do not have privileges to access the requested page.' => '您没有访问被请求页面的特权。',
      'You must provide an email address.' => '您必须提供一个电子邮箱地址。',
      'Tokens' => '令牌',
      '(None.)' => '(无)',
      'Added Auditors' => '已添加审阅者',
      'Apply these schema adjustments?' => '应用这些模式调整？',
      'Edit Tasks' => '编辑任务',
      'ANALYZE' => '分析',
      'A single object PHID.' => '单个对象的 PHID。',
      'Open' => '开放',
      'Assigned To' => '分配给',
      'Authored By' => '创作自',
      'Timezone' => '时区',
      'A single value from the allowed set.' => '来自允许集合的单个值。',
      'Cancelled.' => '已取消。',
      'Edit %s' => '编辑%s',
      'Okay' => '好的',
      'Accessibility' => '辅助功能',
      'Subscribe' => '订阅',
      'Your account will remain in high security mode for a short period of time. When you are finished taking sensitive actions, you should leave high security.' => '您的帐户将在短时期内保持在高安全模式。当您结束执行敏感操作时，您应该离开高安全。',
      'Edit Related Commits' => '编辑相关提交',
      'Add Comment' => '添加评论',
      'Yesterday' => '昨天',
      'Enter High Security' => '进入高安全性',
      'A URL-encoded string.' => 'URL 编码字符串。',
      'Details' => '详情',
      'You do not have access to any spaces.' => '您没有任何空间的访问权限。',
      'Credentials' => '凭据',
      'Writable' => '可写',
      'Attach Patches' => '附加补丁',
      'Done.' => '完成。',
      'Worker has no job ID.' => '工作者没有作业 ID。',
      'You must choose a file when uploading a new profile picture.' => '当您上传新的个人资料图片时，您必须选择一个文件。',
      'You do not have access to any of the spaces this query is constrained to.' => '您没有此查询所限制的任何空间的访问权限。',
      'You are taking an action which requires you to provide multi-factor credentials.' => '您正在执行一个需要您提供多因素凭据的操作。',
      'DONE' => '完成',
      'Changes from before your most recent comment are hidden.' => '您最近一次评论之前的更新已隐藏。',
      'Query timed out after %s second(s)!' => '查询在%s秒后超时！',
      'Code Block' => '代码块',
      'Remove' => '移除',
      'Done' => '完成',
      '(Masked)' => '(已遮罩)',
      'PREVIEW' => '预览',
      'Archived' => '已存档',
      'Authentication' => '认证',
      'Working Copy' => '工作副本',
      'Worker Tasks' => '工作者任务',
      'ANALYZED' => '已分析',
      'Preview' => '预览',
      'Applying patch "%s" to host "%s"...' => '正在应用补丁“%s”到主机“%s”…',
      'Disabled' => '已禁用',
      'Analyzing table sizes (this may take a moment)...' => '正在分析表格尺寸 (这可能花一小会儿)…',
      'View Edit History' => '查看编辑历史',
      'Edit Commits' => '编辑提交',
      '"%s" is not a valid file PHID.' => '“%s”不是一个有效的文件 PHID。',
      'Auditors' => '审计员',
      'Profile' => '个人资料',
      'Real name is required.' => '必须填写真实姓名。',
    );
  }

}
