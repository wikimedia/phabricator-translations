<?php

final class PhabricatorCacheZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
  '%s is not available; unable to read deflated data!' => '%s不可用，無法讀取缺陷資料！',
  'APCu' => 'APCu',
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => '以「--all」或「--caches」選擇快取來清除，可用快取為%s。',
  'APCu Disabled' => 'APC/APCu 已停用',
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'APC 或 APCu PHP 擴充套件已安裝，但未在您的 PHP 設置上啟用。啟用這些將會提升效能。編輯「%s」設定可啟用這些擴充套件。',
  'OPcache is not configured properly for development.' => '未合適地設置 OPcache 用於開發環境。',
  'General Cache (TTL)' => '一般快取（TTL）',
  'Zend OPcache Not Installed' => '未安裝 Zend OPcache',
  'Markup Cache' => '標記快取',
  'General Cache' => '一般快取',
  'Unknown cache format.' => '未知快取格式。',
  'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => '兩個對象（類別「%s」與「%s」）產生相同的對應值（%s）。任一對象都應產生唯一不重複的對應值。',
  'OPcache Not Configured for Production' => '未設置 OPcache 用於生產環境',
  'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'PHP 的「Zend OPcache」擴充套件已安裝，但未在您的 PHP 設置上啟用。啟用它將會顯著地提升效能。編輯「%s」設定可啟用此擴充套件。',
  'Installing the "Zend OPcache" extension will dramatically improve performance.' => '安裝「Zend OPcache」擴充套件將會顯著地增進效能。',
  'Only strings may be written to the DB cache!' => '僅字串能被寫入到 DB 快取！',
  'Purge all caches.' => '清除所有快取。',
  'Specify either "--all" or "--caches", not both.' => '指定「--all」或「--caches」兩者其一，或是都不指定。',
  'PHP Extension "APCu" Not Installed' => '未安裝「APCu」PHP 擴充套件',
  'Zend OPcache Not Enabled' => 'Zend OPcache 未啟用',
  'Drop data from readthrough caches.' => '通讀快取來去除資料。',
  'Cache purger "%s" is not recognized. Available caches are: %s.' => '無法識別快取清除器「%s」。可用的快取為：%s。',
  'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => '安裝「APCu」PHP 擴充套件將會增進效能。此擴充套件被強烈建議使用。若不使用的話，該軟體就只能依靠效率低的磁碟快取。',
  'OPcache Disabled' => 'OPcache 已停用',
  'APCu Extension Not Enabled' => '未啟用 APC/APCu 擴充套件',
  'OPcache Config' => 'OPcache 設定',
  'OPcache is not configured ideally for production.' => '未恰當設置 OPcache 用於生產環境。',
  'OPcache' => 'OPcache',
  'Serializing cache can not write objects (for key "%s")!' => '序列化快取無法寫入目標（對於鍵「%s」）！',
  'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => '在開發環境下，OPcache 應設置為永遠重新載入代碼，以便做出更改後可以不需要重啟。若要這樣做，請啟用「%s」並將「%s」設定成 0。',
  'Purging "%s" cache...' => '清除「%s」快取中…',
  'Purge a specific set of caches.' => '清除指定的快取集合。',
  'When using "--caches", you must select at least one valid cache to purge.' => '當使用「--caches」時，您必須至少選擇一個有效的快取來清除。',
  'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => '在生產環境下，OPcache 應被設置成永不重新驗證代碼。這能夠些許改善效能。若要這樣做，請在您的 PHP 設置裡停用「%s」。',
  'OPcache Not Configured for Development' => '未設置 OPcache 用於開發環境裡',
  'Failed to inflate data!' => '擴張資料失敗！',
  'Zend OPcache' => 'Zend OPcache',
  'Enabling OPcache will dramatically improve performance.' => '啟用OPcache會顯著增進效能。',
  'Enabling APCu will improve performance.' => '啟用APC/APCu可提升效能。',
);
  }

}
