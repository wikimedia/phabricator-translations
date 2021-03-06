<?php

final class PhabricatorPhragmentZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Snapshot names can not contain "/".' => '快照名稱不能包含「/」。',
      'Update Fragment' => '更新片段',
      'Phragment' => 'Phragment',
      'Select the snapshot you want to promote to \'%s\':' => '選擇您要發起到「%s」的快照：',
      'Revert to Here' => '在此還原',
      'Download Version' => '下載版本',
      'Unable to open ZIP.' => '無法開啟 ZIP。',
      'Download Snapshot as ZIP' => '下載快照成 ZIP',
      'Download Contents as ZIP' => '下載內容成 ZIP',
      'Create Fragments' => '建立片段',
      'File must have mimetype \'%s\'.' => '檔案必須要有網際網路媒體類型「%s」。',
      'Delete Snapshot' => '刪除快照',
      'Deleting this snapshot is a permanent operation. You can not recover the state of the snapshot.' => '刪除此快照是永久性的處理，您會無法恢復快照狀態。',
      'Can Create Fragments' => '可建立片段',
      'Because Phragment generates files (such as ZIP archives and patches) as they are requested, it requires that you configure the `%s` option. This option on it\'s own will also provide additional security when serving files across Phabricator.' => '因為 Phragment 會產生所需要的檔案（例如 ZIP 存檔與修補套件），需要您設置 `%s` 選項。當跨 Phabricator 供應檔案時，此選項會提供額外的安全性。',
      'Latest Version' => '最新版本',
      'Edit Fragment Policies: %s' => '編輯片段方針：%s',
      'ZIP Extension Not Installed' => 'ZIP 擴充套件未安裝',
      'Really delete this snapshot?' => '確定刪除此快照？',
      'Versioned Artifact Storage' => '版本化的工件儲存',
      'View Version %d' => '檢視版本 %s',
      'Create Snapshot' => '建立快照',
      'The specified file doesn\'t exist.' => '指定的檔案不存在。',
      'View Version' => '檢視版本',
      'Directory' => '目錄',
      'Errors while updating fragment' => '在更新片段時出現錯誤',
      'Fragment Version %d: %s' => '片段版本 %s：%s',
      'No such fragment exists.' => '不存在這樣的片段。',
      'Snapshots' => '快照',
      'Snapshot Name' => '快照名稱',
      'Promote Snapshot to Here' => '在此發起快照',
      'Prior to any content (empty file)' => '在任何內容之前（空檔案）',
      'File ID' => '檔案 ID',
      'No snapshots to promote' => '沒有要發起的快照',
      '%s at version %d' => '%s 在版本 %s',
      'Promote' => '發起',
      'Edit Fragment Policies' => '編輯片段方針',
      'Parent Path' => '上層路徑',
      'The file associated with this version was not found.' => '找不到關聯此修訂的檔案。',
      'The snapshot will contain the following fragments at the specified versions: ' => '快照會包含在指定版本裡的以下片段：',
      'Get Patch' => '取得路徑',
      'Snapshot: %s' => '快照：%s',
      'The fragment name can not contain \'/\'.' => '片段名稱不能包含「/」。',
      'A snapshot with this name already exists.' => '此名稱的快照已存在。',
      '%s must be configured!' => '%s 尚未設置！',
      'Save Fragment Policies' => '儲存片段方針',
      'Reverting this fragment to version %d will create a new version of the fragment. It will not delete any version history.' => '還原此片段到版本 %s 將會建立片段的新版本，這不會刪除任何版本歷史。',
      'Update Fragment: %s' => '更新片段：%s',
      'File (Deleted)' => '檔案（已刪除）',
      'Query fragments based on their paths.' => '查詢根據它們路徑的片段。',
      'Last Updated %s' => '最後更新：%s',
      'View Snapshot' => '檢視快照',
      '"%s" Snapshot' => '「%s」快照',
      'View Child Fragments' => '檢視子片段',
      'Errors while creating fragment' => '在建立片段時出現錯誤',
      'Download' => '下載',
      'Fragment Path' => '片段路徑',
      'You must specify a name.' => '您必須指定一個名稱。',
      'Set Fragment Policies' => '設定片段方針',
      'Create Fragment' => '建立片段',
      'Select the snapshot you want to promote to the latest version:' => '選擇您要發起到最新版本的快照：',
      'This system does not have the ZIP PHP extension installed. This is required to download ZIPs from Phragment.' => '此系統沒有安裝 ZIP PHP 擴充套件，從 Phragment 下載 ZIP 時需要該功能。',
      'Snapshot' => '快照',
      'There are no snapshots available to promote.' => '沒有能發起的可用快照。',
      'Download Fragment' => '下載片段',
      'Prior to Version 0' => '在版本 0 之前',
      'Latest Version %s' => '最新版本 %s',
      'Browse Fragments' => '瀏覽片段',
      'Really revert this fragment?' => '確定還原此片段？',
      'Fragment Version' => '片段版本',
      'Promote which snapshot?' => '發起哪個快照？',
      'Deletion' => '刪除',
      'Promote Another Snapshot to Here' => '在此發起其它快照',
      'Replace policies on child fragments with the policies above.' => '透過以上方針取代在子片段的方針。',
      'You do not have permission to create fragments.' => '您沒有權限來建立片段。',
      'Convert to File' => '轉換成檔案',
      'Fragment History' => '片段歷史',
      'Create Snapshot of %s' => '建立%s快照',
      'Unable to create ZIP archive!' => '無法建立 ZIP 存檔！',
      'Fragment %s: %s' => '片段%s：%s',
      'Retrieve the patches to apply for a given set of files.' => '檢索修補套件來套用到指定的檔案集。',
    );
  }

}
