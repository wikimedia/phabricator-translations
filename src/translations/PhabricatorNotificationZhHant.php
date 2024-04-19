<?php

final class PhabricatorNotificationZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Unread' => '未讀取',
      'Unable to load server status: this is not an admin server!' => '無法載入伺服器狀態：這並非一台管理員伺服器！',
      'All Notifications' => '所有通知',
      'Really mark all notifications as read?' => '確定將所有通知標記為已讀？',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => '通知伺服器設置無效：尚未指定任何一台已啟用的伺服器為類型「admin」。通知至少需要一台有效的管理員伺服器。',
      'Setting Up Client' => '設定客戶端',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => '通知伺服器設置無效：尚未指定任何一台已啟用的伺服器為類型「clinet」。通知至少需要一台有效的客戶端伺服器。',
      'All unread notifications will be marked as read. You can not undo this action.' => '所有未讀通知將會被標記為已讀，而且您無法撤銷此操作。',
      'Unread Notifications' => '未讀通知',
      'Unable to post message: this is not an admin server!' => '無法發送訊息：這並非一台管理員伺服器！',
      'Disconnected' => '已中斷連接',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '關於對象的 %s 份通知已不存在，或是已被捨棄掉讓您無法看到。',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => '通知伺服器設置以無法識別的類型（「%3$s」）描述出一台無效的主機（「%1$s」，位在索引「%2$s」）。有效的類型為「%s」或「%s」。',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => '通知伺服器設置以無效的埠號（「%3$s」）描述出一台無效的主機（「%1$s」，位在索引「%2$s」）。有效的埠號為「%s」或「%s」。',
      'No notifications to mark as read.' => '沒有可標記為已讀的通知。',
      'Notification Server Down' => '通知伺服器停機',
      'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'Phabricator 被設置為通知伺服器使用，但無法連接到。您應解決此問題或是停用通知伺服器。重新仔細確認您的設置，或是使用下方指定來重新啟動伺服器應有幫助。
    %s',
      'Unable to test client on an admin server!' => '無法在管理員伺服器上測試客戶端！',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => '通知伺服器設置描述出一台無效的主機（「%s」，位在索引「%s」）。此為管理員服務但帶有「path」屬性，此屬性僅適用於客戶端服務',
      'Real-Time Updates and Alerts' => '即時更新與告警',
      'You can\'t ignore your problems forever, you know.' => '您知道，您不能一直忽略您的問題。',
      'Unable to Connect to Notification Server' => '無法連接通知伺服器',
      'Notification server not enabled' => '通知伺服器未啟用',
      'This is a test notification, sent at %s.' => '這是一封測試通知，寄送於 %s。',
      '(To start the server, run this command.)
    %s' => '（要啟動伺服器，請執行此命令。）
    %s',
      'You have no unread notifications.' => '您沒有未讀通知。',
      'Connecting...' => '連接中…',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => '取得 HTTP 200，但應為 HTTP 501（WebSocket 升級）！',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => '通知伺服器設置無效：這多次描述了相同的主機與埠號（"%s"）。任一主機與埠號的組合僅能在清單裡出現一次。',
      'Mark All Read' => '標記所有為已讀',
      'Show only unread notifications.' => '僅顯示未讀通知。',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => '通知伺服器設置無效：在清單裡的任一項應為描述服務的字典，但索引「%s」的值並非字典。',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => '通知伺服器設置有無效的服務規範（位在索引「%s」）：%s',
      'You have no notifications.' => '您沒有通知。',
    );
  }

}
