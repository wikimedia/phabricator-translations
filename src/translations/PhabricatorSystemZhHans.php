<?php

final class PhabricatorSystemZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Phabricator目前配置为不具有可写（“主”）数据库，因此无法在任何地方写入新信息。Phabricator将以只读模式运行，直到管理员用可写入的数据库对其进行重新配置。',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => '该系统没有安装“%s”扩展，所以不支持字符编码。请安装“%s”以启用支持。',
      'This mode is active because it is enabled in the configuration option "%s".' => '此模式处于激活状态，因为它已在配置选项“%s”中启用。',
      'Panic!' => '恐慌！',
      'No Writable Database' => '没有可写数据库',
      'Destroying %s **%s**...
    ' => '正在毁坏%s **%s**...',
      'Object "%s" can not be destroyed (it does not implement %s).' => '对象“%s”不能销毁（它不会实现%s）。',
      'No Encoding Support' => '没有编码支持',
      'No such object "%s" exists!' => '不存在对象“%s”！',
      'Severed From Master' => '从主人身上切断',
      'Engine: Destruction' => '引擎：销毁',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => '该请求由副本数据库提供。副本数据库可能落后于主数据，因此最近的活动可能不会反映在UI中。如果主数据库恢复，这些数据将被恢复，但如果主数据库已经减少到一堆灰，可能会丢失这些数据。',
      'Permanently destroy objects.' => '永久销毁物体。',
      'Choose a syntax highlighting to use.' => '选择要使用的语法高亮显示。',
      '%d / hour' => '%s/小时',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.' => '如果服务器端存在临时网络异常，如宇宙辐射或幽灵般的鬼魂，则可能会发生这种情况。如果此故障是由暂时服务中断引起的，则Phabricator会立即恢复。',
      'Rate Limiting Actions' => '速率限制措施',
      'Highlighting' => '高亮中',
      'Unable to Reach Master' => '无法达到主人',
      'Phabricator was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Phabricator在处理此请求时无法连接到可写（“主”）数据库，并自动降级到只读模式。',
      'Permanently destroyed %s object(s).' => '永久销毁%s个物品。',
      'Choose Encoding' => '选择编码',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the Phabricator upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => '销毁对象可能会导致相关对象停止工作，并可能会将分散的引用留给不再存在的对象。在大多数情况下，禁用或存档对象而不是销毁它们会更好。删除复杂或高度连接的对象（如存储库，项目和用户）时，此风险最大。
    这些破损的边缘是破坏物体的预期后果，Phabricator上游无法帮助您修复它们。 我们强烈建议您禁用或存档对象。',
      'IMPORTANT' => '重要',
      'Quite Unsettling' => '相当混乱',
      'Destruction Logs' => '破坏日志',
      'This likely indicates a severe misconfiguration or major service interruption.' => '这很可能表明严重的配置错误，或主要服务中断。',
      'Destroying objects...' => '正在毁坏对象...',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.' => '由于有人类管理员通过明确操作启用了只读模式，因此您可以从您的办公桌和椅子上起来，然后以您最响亮的声音向外面大喊“嘿！为什么Phabricator处于只读模式？？！”来获取更多信息有关为何它被启用。',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => '此模式已激活，因为在配置选项“%2$s”中没有数据库有“%1$s”角色。',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => '这也可能表明发生了更严重的故障。如果这种中断不能自行解决，Phabricator会很快检测到持续的中断并降级到只读模式，直到问题解决。',
      'Select Character Encoding' => '选择字符编码',
      'Select Syntax Highlighting' => '选择语法高亮',
      'DATA WILL BE PERMANENTLY DESTROYED' => '数据将会永久毁坏',
      'Choose Highlighting' => '选择高亮',
      'An administrator has placed Phabricator into read-only mode.' => '管理员已经将Phabricator置于只读模式。',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => '对象将被永久销毁。除非您维护外部备份，否则无法撤消此操作，也无法检索此数据。',
      'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.' => '在处理最近的请求时，Phabricator始终无法访问可写（“主”）数据库。',
      'Aborted, your objects are safe.' => '已中止，您的对象是安全的。',
      'Show a log of permanently destroyed objects.' => '显示永久毁坏的对象的日志。',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => '缓存引擎扩展“%s”返回的对象（类“%s”）没有PHID。',
      'System' => '系统',
      'You are performing too many actions too quickly.' => '您正在执行太多操作太快。',
      'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Phabricator会定期重试连接并在服务恢复后恢复。持续服务中断的大多数原因需要管理干预才能恢复服务。',
      'Choose a text encoding to use.' => '选择要使用的文本编码。',
      'These %s object(s) will be destroyed forever:' => '这些%s对象将被永久销毁：',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => '在只读模式下，您可以阅读现有信息，但在此模式被禁用之前，您将无法编辑对象或创建新对象。',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => '该模式可用于执行临时维护，测试配置或永久归档安装。',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => '正在删除经常破坏事情的对象',
      'Cache engine extension "%s" did not return a list of linked objects.' => '缓存引擎扩展“%s”没有返回链接对象列表。',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => '当管理员正在积极处理临时配置或部署问题时，通常会发生这种情况。',
      '%d / minute' => '%s/分钟',
      'Destroy objects without prompting.' => '无需提示即销毁对象。',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => '此操作的最大允许速率为%s。您正在以%s速率进行操作。',
      'Are you absolutely certain you want to destroy these %s object(s)?' => '您是否确定要销毁这些%s对象？',
      'Administrative Read-Only Mode' => '管理只读模式',
      '%d / second' => '%s/秒',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => '作为管理员，您可以从%s控制面板查看状态信息。这可以提供关于当前事态的更多信息。',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => '虽然这可能是错误配置或操作错误的结果，但如果流星最近抹杀了数据中心，这也是您所达到的状态。',
      'Specify one or more objects to destroy.' => '指定一个或多个要销毁的对象。',
    );
  }

}
