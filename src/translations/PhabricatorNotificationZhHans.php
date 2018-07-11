<?php

final class PhabricatorNotificationZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Unread' => '未读',
      'Unable to load server status: this is not an admin server!' => '无法加载服务器状态：这不是一台管理服务器！',
      'All Notifications' => '所有通知',
      'Really mark all notifications as read?' => '要标记所有通知为已读吗？',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => '通知服务器的配置无效：尚未指定任何类型为“管理员”的可用服务器。通知至少需要一个活动的“管理员”服务器。',
      'Setting Up Client' => '设置客户端',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => '通知服务器的配置无效：尚未指定任何类型为“客户端”的可用服务器。通知至少需要一个活动的“客户端”服务器。',
      'All unread notifications will be marked as read. You can not undo this action.' => '所有未读的通知将被标记为已读。你可以撤销此操作。',
      'Unread Notifications' => '未读通知',
      'Unable to post message: this is not an admin server!' => '无法发送信息：这不是一台管理服务器！',
      'Disconnected' => '已断开连接',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => '通知服务器的配置中存在以无法识别的类型（“%3$s”）描述的无效主机（“%1$s”，位于索引“%2$s”）。有效的类型应当为“%s”或“%s”。',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => '通知服务器的配置中存在以无法识别的协议（“%3$s”）描述的无效主机（“%1$s”，位于索引“%2$s”）。有效的协议应当为“%s”或“%s”。',
      'No notifications to mark as read.' => '没有可被标记为已读的通知',
      'Notification Server Down' => '通知服务器宕机',
      'Unable to test client on an admin server!' => '不能在管理员服务器上对客户端服务器进行测试！',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => '通知服务器的配置描述了无效主机（“%s”，位于索引“%s”）。 这是一个“管理员”服务，但却拥有“路径”属性。该属性仅对“客户端”的服务有效。',
      'Real-Time Updates and Alerts' => '实时的更新和警报',
      'You can\'t ignore your problems forever, you know.' => '你知道，你不能永远忽视掉这些问题。',
      'Unable to Connect to Notification Server' => '无法连接至通知服务器',
      'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator被配置为使用通知服务器，但无法连接到它。您应该尝试解决此问题或禁用通知服务器。建议您仔细检查您的配置，或使用下面的命令来重新启动服务器。
    %s',
      'Test Notification' => '测试通知',
      'Notification server not enabled' => '通知服务器不可用',
      'This is a test notification, sent at %s.' => '这是一条测试用通知，发送于 %s 。',
      '(To start the server, run this command.)
    %s' => '（要启动服务器，请运行此指令。）
    %s',
      'You have no unread notifications.' => '您没有未读通知。',
      'Connecting...' => '正在连接...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => '收到HTTP 200，但应为HTTP 501（WebSocket升级）！',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => '通知服务器配置无效：它多次描述了相同的主机和端口（“%s”）。每个主机和端口组合应该只在列表中出现一次。',
      'Mark All Read' => '标记所有为已读',
      'Show only unread notifications.' => '只显示未读通知',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => '通知服务器配置无效：列表中的每个条目都必须是描述服务的字典类型，但索引“%s”的值的类型不是字典。',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => '通知服务器的配置包含无效的服务规范（位于索引“%s”）：%s。',
      'You have no notifications.' => '您还没有通知。',
    );
  }

}
