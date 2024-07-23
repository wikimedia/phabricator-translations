<?php

final class PhabricatorSystemZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'An Administrator has placed this server into read-only mode.' => '管理員已將此伺服器置於唯讀模式。',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => '此系統沒有安裝「%s」擴充，因此不支援字元編碼。請安裝「%s」來啟用支援。',
      'This mode is active because it is enabled in the configuration option "%s".' => '此模式目前有效，因為啟用了設置選項「%s」。',
      'Panic!' => '恐慌！',
      'No Writable Database' => '沒有可寫入的資料庫',
      'Destroying %s **%s**...
    ' => '正在銷毀%s**%s**…',
      'This server has consistently been unable to reach the writable ("master") database while processing recent requests.' => '在處理最近的請求時，此伺服器一直無法接觸到可寫入資料庫（「master」）。',
      'Object "%s" can not be destroyed (it does not implement %s).' => '物件「%s」不能銷毀（這不會實行%s）。',
      'No Encoding Support' => '沒有支援編碼',
      'No such object "%s" exists!' => '不存在「%s」這樣的物件。',
      'This server was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => '在處理此請求時，此伺服器無法連接到可寫入的資料庫（「master」）並自動降級成唯讀模式。',
      'Severed From Master' => '從 Master 拆分',
      'Engine: Destruction' => '引擎：銷毀',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => '此請求是由複本資料庫提供，因此近期活動可能不會反應在 UI。若主資料庫恢復，此資料會一同恢復。不過如果主資料庫被毀損成一堆灰燼，會遺失掉這些資料。',
      'Permanently destroy objects.' => '永久銷毀物件。',
      'Choose a syntax highlighting to use.' => '選擇要使用的語法凸顯。',
      '%d / hour' => '%s/時',
      'Rate Limiting Actions' => '操作限制速率',
      'Highlighting' => '凸顯中',
      'Unable to Reach Master' => '無法接觸到 Master',
      'Permanently destroyed %s object(s).' => '永久銷毀 %s 個物件。',
      'Choose Encoding' => '選擇編碼',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => '銷毀物件可能會導致相關物件停止運作，並且可能會殘留對於已不存在物件的分散引用。在多數情況下，停用或歸檔物件會是比銷毀更好的方式。此風險會在刪除複雜或是高度連接物件（例如版本庫、專案、以及使用者）時最大。
    這些邊緣破損是銷毀物件的預期結果，上游會無法幫助您修復它們。我們強烈建議以停用或歸檔物件的方式來取代。',
      'IMPORTANT' => '重要',
      'Quite Unsettling' => '相當混亂',
      'Destruction Logs' => '毀壞日誌',
      'This likely indicates a severe misconfiguration or major service interruption.' => '這可能表示有嚴重設置錯誤、或是主要服務已中斷。',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, this server will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => '這也可能代表著是更嚴重的問題發生。若中斷無法自行解決，此伺服器會在檢測到持續中斷出現後降級成唯讀模式，直到問題有被處理掉。',
      'Destroying objects...' => '銷毀物件中…',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => '此模式目前有效，因為在設置選項「%2$s」中沒有資料庫具有「%1$s」身分。',
      'This server will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => '此伺服器會定期重試連線，一旦服務可用後即可恢復。多數的服務持續中斷會需要管理員介入才能恢復。',
      'Select Character Encoding' => '選擇字元編碼',
      'Select Syntax Highlighting' => '選擇語法凸顯',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is %s in read-only mode??!" using your very loudest outside voice.' => '唯讀模式是被人類管理員的明確操作行為給啟用，所以您可以從您的桌椅上跳開，用您最大的音量大叫「嘿！為什麼%s是唯讀模式？？！」來獲得更多資訊。',
      'DATA WILL BE PERMANENTLY DESTROYED' => '資料將會永久銷毀',
      'Choose Highlighting' => '選擇凸顯',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, this server will recover momentarily.' => '如果在伺服器端那裡出現臨時網路異常，像是有宇宙輻射或是幽靈鬼魂，則可能會發生這種情況。若此故障是由一時服務中斷造成的，稍待一下此伺服器便會恢復。',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => '物件將會被永久銷毀。除非您有維護一套外部備份，否則無法撤銷此處理也無法索取此份資料。',
      'Aborted, your objects are safe.' => '已中止，您的物件是安全的。',
      'No Object URI' => '沒有物件的 URI',
      'As an Administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => '作為管理員，您可以從%s控制面板來檢閱狀態資訊。這可以提供更多有關目前事件狀態的資訊。',
      'Show a log of permanently destroyed objects.' => '顯示已永久銷毀物件的日誌。',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => '快取引擎擴充「%s」回傳的物件（類別「%s」）沒有 PHID。',
      'System' => '系統',
      'You are performing too many actions too quickly.' => '您太快了。',
      'Choose a text encoding to use.' => '選擇要使用的文字編碼。',
      'These %s object(s) will be destroyed forever:' => '這 %s 個物件將會被永久銷毀：',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => '在唯讀模式下，您僅能閱讀現有的資訊，在此模式被停用之前您無法編輯或建立物件。',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => '此模式用於執行臨時的維護、測試設置、或是永久保管安裝。',
      'This server is currently configured with no writable ("master") database, so it can not write new information anywhere. This server will run in read-only mode until an administrator reconfigures it with a writable database.' => '此伺服器目前的設置為不可寫入資料庫（「master」），因此無法寫入任何新資訊。在管理員重新設置成可寫入資料庫之前，此伺服器僅會以唯讀模式進行。',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => '正在刪除經常會中斷事件的物件',
      'Cache engine extension "%s" did not return a list of linked objects.' => '快取引擎擴充「%s」無法回傳連結物件清單。',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => '當管理員正在積極處理臨時設置或是部署問題時，通常會發生這種情況。',
      '%d / minute' => '%s/分',
      'Destroy objects without prompting.' => '不經提示來銷毀物件。',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => '此操作限定最快%s，您操作的速率是%s。',
      'Are you absolutely certain you want to destroy these %s object(s)?' => '您真的確定要銷毀這 %s 個物件？',
      'Administrative Read-Only Mode' => '管理唯讀模式',
      '%d / second' => '%s/秒',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => '雖然這可能是設置問題或是操作上錯誤造成的結果，但如果最近剛好有顆流星砸到了數據中心，也會有這樣的情況。',
      'Object "%s" exists, but does not have a URI to redirect to.' => '物件「%s」存在，但沒有可以重新導向的 URI。',
      'Specify one or more objects to destroy.' => '指定一個或多個要銷毀的物件。',
    );
  }

}
