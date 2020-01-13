<?php

final class PhabricatorAphlictZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => '發送通知給使用者。',
      'The notification server should not be run as root.' => '通知伺服器不應以 root 來運作。',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => '兩台伺服器（在索引「%s」和「%s」）皆綁定相同的埠號「%s」。各伺服器應綁定唯一不重複的埠號。',
      'Failed to %s!' => '%s失敗！',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => '錯誤：PHP 函式 %s 已停用。您必須啟動它才能在機器上運作 Aphlict。',
      'Stop the notification server.' => '停止通知伺服器。',
      'Configuration file is not properly formatted JSON. %s' => '設置檔案的 JSON 格式不正確。%s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => '在 %3$s 裡找不到 `%1$s` 或 `%2$s` 二進位檔案。您必須要安裝 Node.js 來啟動 Aphlict 伺服器。',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => '錯誤：PHP 函式 %s 尚未安裝。您必須要先安裝它才能在機器上運作 Aphlict。',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => '未指定的日誌檔案（帶有索引「%2$s」）建立目錄「%1$s」失敗。您應手動建立目錄，或挑選不同的日誌檔案位置。%s',
      'Configuration file has improper configuration keys at top level. %s' => '設置檔案在最高層級的設置鍵不正確。%s',
      'Aphlict is not running.' => 'Aphlict 尚未運作。',
      'You must %s first!' => '您必須要先%s！',
      'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => '指定的伺服器（在索引「%s」，位於埠號「%s」）指定了「%s」的值，但沒有指定與「%s」或「%s」的值。若有另外提供 SSL 金鑰與 SSL 憑證的話，伺服器僅能提供 SSL 串鍊。',
      'Sending %s a SIGKILL.' => '發給%s一個 SIGKILL 訊號。',
      'Launching server:' => '發動伺服器：',
      'Starting Aphlict server in foreground...' => '在前景下啟動 Aphlict 伺服器…',
      'Server exited!' => '伺服器已退出！',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => '在前景環境啟動通知伺服器，並列印出大量診斷訊息到主控台。',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => '指定的伺服器（在索引「%s」，位於埠號「%s」）有無效類型（「%s」）。無效類型為：admin、client。',
      'No user with username "%s" exists.' => '已存在帶有「%s」名稱的使用者。',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => '設置檔案指定了叢集點「%s」（在索引「%s」，位於埠號「%s」）超過一次。各點應要有唯一不重複的主機與埠號結合。',
      'Show the status of the notification server.' => '顯示通知伺服器的狀態。',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => '設置檔案未指定任何伺服器。若沒有接聽任何埠號，此服務無法與外界互動。您必須指定至少一台「%s」伺服器與至少一台「%s」伺服器。',
      'Start the notifications server.' => '啟動通知伺服器。',
      'User to notify.' => '要通知的使用者。',
      'Stop, then start the notification server.' => '停止，然後啟動通知伺服器。',
      'Failed to read configuration file. %s' => '讀取設置檔案失敗。%s',
      'Writing logs to: %s' => '寫入日誌到：%s',
      'Specify a user to notify with "--user".' => '以「--user」來指定要通知的使用者。',
      'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => '指定的伺服器（在索引「%s」，位於埠號「%s」）指定了「%s」與「%s」兩者其中之一。各伺服器只能夠兩者皆不指定（停用 SSL），或是兩者都要指定（啟用）。',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => '設置檔案未指定任何客戶端伺服器。此服務無法在沒有客戶端伺服器的情況下傳送任何通知。您必須以類型「%s」來指定至少一台伺服器。',
      'Message to send.' => '要發送的訊息。',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => '設置檔案未指定任一管理伺服器。此服務無法接收訊息。您必須指定以類型「%s」來指定至少一台伺服器。',
      'Aphlict Server (%s) exited normally.' => 'Aphlict 伺服器（%s）已正常退出。',
      'Reading configuration from: %s' => '讀取設置自：%s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => '因為已在運作中，所以無法啟動通知伺服器。使用 `%s` 來重新啟動。',
      'Specify a message to send with "--message".' => '以「--message」來指定要通知的訊息。',
      'Sent notification.' => '發送通知。',
      'Use a specific configuration file instead of the default configuration.' => '使用指定的設置檔案來取代預設設置。',
      'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => '設置檔案以無效的傳輸協定「%3$s」指定了叢集點（在索引「%1$s」，位於埠號「%2$s」）。有效的傳輸協定為「%s」或「%s」。',
      'Aphlict Server started.' => 'Aphlict 伺服器已啟動。',
      'Stopping Aphlict Server (%s)...' => '正在停止 Aphlict 伺服器（%s）…',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => '未指定的 PID 檔案建立目錄「%s」失敗。您應手動建立目錄，或挑選不同的 PID 檔案位置。%s',
      'Aphlict (%s) is running.' => 'Aphlict（%s）正運作中。',
    );
  }

}
